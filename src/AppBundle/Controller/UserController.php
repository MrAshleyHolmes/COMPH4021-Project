<?php

namespace AppBundle\Controller;

use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use AppBundle\Entity\User;
use AppBundle\Form\UserType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * User controller.
 *
 * @Route("admin")
 */
class UserController extends Controller
{
    /**
     * Lists all user entities.
     *
     * @Route("/", name="admin_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $users = $em->getRepository('AppBundle:User')->findAll();

        return $this->render('user/index.html.twig', array(
            'users' => $users,
        ));
    }

    /**
     * Creates a new user entity.
     *
     * @Route("/new", name="admin_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $user = new User();
        $form = $this->createForm('AppBundle\Form\UserType', $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            /**
             * This is an addition which calls the method which was created in the UserManager
             */
            $this->get('app_bundle.user_manager')
                ->setUserPassword($user, $user->getPassword());

            $role = ($form->get('isAdmin')->getData()) ? 'ROLE_ADMIN' : 'ROLE_USER';

            /**
             * Add role based on value of checkbox
             */

            $user->setRoles(array($role));
            $user->setRoles(array('ROLE_USER'));

            $em->persist($user);
            $em->flush($user);

            return $this->redirectToRoute('admin_show', array('id' => $user->getId()));
        }

        return $this->render('user/new.html.twig', array(
            'user' => $user,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a user entity.
     *
     * @Route("/{id}", name="admin_show")
     * @Method("GET")
     */
    public function showAction(User $user)
    {
        $deleteForm = $this->createDeleteForm($user);

        return $this->render('user/show.html.twig', array(
            'user' => $user,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing user entity.
     *
     * @Route("/{id}/edit", name="admin_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction($id, Request $request, User $user)
    {
        if (in_array('ROLE_SUPER_ADMIN', $user->getRoles())) {

            $request->getSession()
                    ->getFlashbag()
                    ->add('danger', 'Super Admin Profiles can not be edited in the Admin area!');

            return $this->redirect($this->generateUrl('admin_show', array('id' => $id)));
        }

        $deleteForm = $this->createDeleteForm($user);
        $editForm = $this->createForm('AppBundle\Form\UserType', $user);

        /**
         * This will remove the password from the edit.html.twig form
         */
        $editForm->remove('password');

        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {

            $role = ($editForm->get('isAdmin')->getData()) ? 'ROLE_ADMIN' : 'ROLE_USER';

            /**
             * Add role based on value of checkbox
             */

            $user->setRoles(array($role));

            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('admin_edit', array('id' => $user->getId()));
        }

        return $this->render('user/edit.html.twig', array(
            'user' => $user,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a user entity.
     *
     * @Route("/{id}", name="admin_delete")
     * @Method("DELETE")
     */
    public function deleteAction($id, Request $request, User $user)
    {
        $form = $this->createDeleteForm($user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            if (in_array('ROLE_SUPER_ADMIN', $user->getRoles())) {

                $request->getSession()
                    ->getFlashbag()
                    ->add('danger', 'Super Admin Profiles can not be edited in the Admin area!');

                return $this->redirect($this->generateUrl('admin_show', array('id' => $id)));
            }

            $em = $this->getDoctrine()->getManager();
            $em->remove($user);
            $em->flush($user);
        }

        return $this->redirectToRoute('admin_index');
    }

    /**
     * Creates a form to delete a user entity.
     *
     * @param User $user The user entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(User $user)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_delete', array('id' => $user->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

    /**
     * Displays a form to edit the password for existing user entity
     *
     * @Route("/{id}/password", name="admin_password")
     * @Method("GET")
     * @param $id
     * @Template()
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function passwordAction($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('AppBundle:User')->find($id);

        if (!$user) {
            throw $this->createNotFoundException(
                'No product found for id ' . $user
            );
        }

        if (in_array('ROLE_SUPER_ADMIN', $user->getRoles())) {

            $request->getSession()
                ->getFlashbag()
                ->add('danger', 'Super Admin Passwords can not be edited in the Admin area!');

            return $this->redirect($this->generateUrl('admin_show', array('id' => $id)));
        }

        $passwordForm = $this->createPasswordForm($user);

        // Pass our objects to the view
        return $this->render('user/password.html.twig', array(
            'user' => $user,
            'password_form' => $passwordForm->createView(),
        ));
    }

    /**
     * Creates a change password form
     *
     * @param User $user
     * @return \Symfony\Component\Form\Form
     */
    public function createPasswordForm(User $user)
    {
        $passwordForm = $this->createForm(UserType::class, $user, array(
            'action' => $this->generateUrl('admin_password_update', array('id' => $user->getId())),
            'method' => 'PUT',
        ));

        // Remove the fields we don't want from the FormType
        $passwordForm->remove('email');
        $passwordForm->remove('username');
        $passwordForm->remove('firstName');
        $passwordForm->remove('lastName');

        // Add submit button
        $passwordForm->add('submit', SubmitType::class, array(
            'label' => 'Save New Password',
            'attr' => array('class' => 'btn btn-default btn-lg'),
        ));
        return $passwordForm;
    }

    /**
     * Handle the form. Then redirect
     *
     * @param Request $request
     * @param $id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     * @Route("/{id}/password_update", name="admin_password_update")
     * @Method("PUT")
     */
    public function updatePasswordAction(Request $request, $id)
    {
        // Get the entity manager
        // Use the entity manager to get our entity for the id given
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('AppBundle:User')->find($id);

        if (!$user) {
            throw $this->createNotFoundException(
                'No product found for id ' . $user
            );
        }

        // Tell Symfony to create a form using the UserFormType
        // and the user we pulled from the um a few lines back
        // must pass in the route where the form will post to
        // must also pass the id
        $passwordForm = $this->createPasswordForm($user);

        // Symfony will handle the request
        $passwordForm->handleRequest($request);

        // Check to see if the object is valid
        if ($passwordForm->isValid()) {

            // Use our service to encode the password
            $this->get('app_bundle.user_manager')->setUserPassword($user, $user->getPassword());

            // The object is already persisted, so we need to flush it to the database
            $em->flush();

            // Redirect to the show page
            return $this->redirect($this->generateUrl('admin_show', array('id' => $id)));
        }

        // Pass our objects to the view
        return $this->render('user/password.html.twig', array(
            'user' => $user,
            'password_form' => $passwordForm->createView(),
        ));
    }
}
