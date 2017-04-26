<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ExamFormType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('year', ChoiceType::class, [
                'choices' => [
                    'Choose Year' => null,
                    '1' => 1,
                    '2' => 2,
                    '3' => 3,
                    '4' => 4,
                ]
            ])
            ->add('semester', ChoiceType::class, [
                'choices' => [
                    'Choose Semester' => null,
                    '1' => 1,
                    '2' => 2,
                ]
            ])
            ->add('dateExamination', DateType::class, [
                'widget' => 'single_text',
                'attr' => [
                    'class' => 'js-datepicker'
                ],
                'html5' => false,
            ])
            ->add('timeExamination', TimeType::class, [
                'widget' => 'single_text',
            ])
            ->add('progCode', ChoiceType::class, [
                'choices' => [
                    'Choose Program Code' => null,
                    'BN402' => 'BN402',
                    'BN104' => 'BN104',
                    'BN120' => 'BN120',
                ]
            ])
            ->add('progTitle', ChoiceType::class, [
                'choices' => [
                    'Choose Program Title' => null,
                    'Bachelor of Science (Honours) in Computing' => 'Bachelor of Science (Honours) in Computing',
                    'Bachelor of Science (Honours) in Computing in Digital Forensics & Cyber Security' => 'Bachelor of Science (Honours) in Computing in Digital Forensics & Cyber Security',
                ]
            ])
            ->add('modCode', ChoiceType::class, [
                'choices' => [
                    'Choose Module Title' => null,
                    'COMP H1032' => 'COMP H1032',
                    'COMP H1013' => 'COMP H1013',
                    'COMP H1015' => 'COMP H1015',
                    'COMP H1033' => 'COMP H1033',
                    'COMP H1026' => 'COMP H1026',
                    'COMP H1034' => 'COMP H1034',
                    'COMP H1031' => 'COMP H1031',
                    'COMP H1027' => 'COMP H1027',
                    'COMP H1028' => 'COMP H1028',
                    'COMP H1021' => 'COMP H1021',
                    'COMP H1035' => 'COMP H1035',
                    'COMP H2015' => 'COMP H2015',
                    'COMP H2011' => 'COMP H2011',
                    'COMP H2026' => 'COMP H2026',
                    'COMP H2031' => 'COMP H2031',
                    'COMP H2033' => 'COMP H2033',
                    'COMP H1029' => 'COMP H1029',
                    'COMP H2030' => 'COMP H2030',
                    'COMP H2029' => 'COMP H2029',
                    'COMP H2032' => 'COMP H2032',
                    'COMP H2027' => 'COMP H2027',
                    'COMP H2014' => 'COMP H2014',
                    'COMP H2034' => 'COMP H2034',
                    'COMP H3025' => 'COMP H3025',
                    'COMP H3026' => 'COMP H3026',
                    'COMP H3036' => 'COMP H3036',
                    'COMP H3028' => 'COMP H3028',
                    'COMP H3029' => 'COMP H3029',
                    'COMP H3031' => 'COMP H3031',
                    'COMP H3032' => 'COMP H3032',
                    'COMP H3033' => 'COMP H3033',
                    'COMP H3037' => 'COMP H3037',
                    'COMP H4028' => 'COMP H4028',
                    'COMP H4018' => 'COMP H4018',
                    'COMP H4014' => 'COMP H4014',
                    'COMP H4023' => 'COMP H4023',
                    'COMP H4025' => 'COMP H4025',
                    'COMP H4024' => 'COMP H4024',
                    'COMP H4012' => 'COMP H4012',
                    'COMP H4030' => 'COMP H4030',
                    'COMP H4016' => 'COMP H4016',
                    'COMP H4017' => 'COMP H4017',
                    'COMP H4029' => 'COMP H4029',
                    'COMP H4026' => 'COMP H4026',
                    'COMP H4011' => 'COMP H4011',
                    'COMP H4031' => 'COMP H4031',
                ]
            ])
            ->add('modTitle', ChoiceType::class, [
                'choices' => [
                    'Choose Program Title' => null,
                    /*'Stage 1 / Semester 1' => null,*/
                    'Fundamentals of Programming 1' => 'Fundamentals of Programming 1',
                    'Computer Systems' => 'Computer Systems',
                    'Networking Basics' => 'Networking Basics',
                    'Personal & Professional Development' => 'Personal & Professional Development',
                    'Web Development Fundamentals' => 'Web Development Fundamentals',
                    'Algorithmic Problem Solving' => 'Algorithmic Problem Solving',
                    /*'Stage 1 / Semester 2' => null,*/
                    'Fundamentals of Programming 2' => 'Fundamentals of Programming 2',
                    'Computer Architecture' => 'Computer Architecture',
                    'Mathematics for Computing' => 'Mathematics for Computing',
                    'Routers and Routing Basics' => 'Routers and Routing Basics',
                    'Web Development Client-Side' => 'Web Development Client-Side',
                    /*'Stage 2 / Semester 1' => null,*/
                    'LAN Switching and Wireless' => 'LAN Switching and Wireless',
                    'GUI Programming' => 'GUI Programming',
                    'Information Technology Maths' => '	Information Technology Maths',
                    'Object Oriented Analysis and Design' => 'Object Oriented Analysis and Design',
                    'Interactive Multimedia' => 'Interactive Multimedia',
                    'Database Fundamentals' => 'Database Fundamentals',
                    /*'Stage 2 / Semester 2' => null,*/
                    'Advanced Programming' => 'Advanced Programming',
                    'Web Development Server-Side' => 'Web Development Server-Side',
                    'WAN Technologies' => 'WAN Technologies',
                    'Software Engineering & Testing' => 'Software Engineering & Testing',
                    'Operating Systems' => 'Operating Systems',
                    'IT Business Management' => 'IT Business Management',
                    /*'Stage 3 / Semester 1' => null,*/
                    'Data Structures & Algorithms' => 'Data Structures & Algorithms',
                    'Rich Web Applications' => 'Rich Web Applications',
                    'Parallel Computing' => 'Parallel Computing',
                    'Advanced Switching and Routing' => 'Advanced Switching and Routing',
                    'Project Skills' => 'Project Skills',
                    /*'Stage 3 / Semester 2' => null,*/
                    'Network Distributed Computing' => 'Network Distributed Computing',
                    'Object Orient and Design Patt' => 'Object Orient and Design Patt',
                    'Troubleshooting IP Networks' => 'Troubleshooting IP Networks',
                    'Web Framework Development' => 'Web Framework Development',
                    /*'Stage 4 / Semester 1' => null,*/
                    'Research Skills' => 'Research Skills',
                    'Derivation of Algorithms' => 'Derivation of Algorithms',
                    'Network Security' => 'Network Security',
                    'Enterprise and Cloud Computing' => 'Enterprise and Cloud Computing',
                    'Ubiquitous computing' => 'Ubiquitous computing',
                    'Game Development' => 'Game Development',
                    'Applied Human Language Technology' => 'Applied Human Language Technology',
                    'Data Analytics' => 'Data Analytics',
                    /*'Stage 4 / Semester 2' => null,*/
                    'Text Analysis' => 'Text Analysis',
                    'Advanced Network Technologies' => 'Advanced Network Technologies',
                    'Web Services' => 'Web Services',
                    'High Performance Computing' => 'High Performance Computing',
                    'Computational Intelligence' => 'Computational Intelligence',
                    'Computer Vision' => 'Computer Vision',
                ]
            ])
            ->add('internalExaminer', ChoiceType::class, [
                'choices' => [
                    'Choose Internal Examiner' => null,
                    'Mr. Stephen Sheridan' => 'Mr. Stephen Sheridan',
                    'Dr. Christina Thorpe' => 'Dr. Christina Thorpe',
                    'Dr. Anthony Keane' => 'Dr. Anthony Keane',
                ]
            ])
            ->add('externalExaminer', ChoiceType::class, [
                'choices' => [
                    'Choose External Examiner' => null,
                    'Dr. Richard Studdert' => 'Dr. Richard Studdert',
                    'Dr. Tom Lunney' => 'Dr. Tom Lunney',
                    'Mr. Michael Barret' => 'Mr. Michael Barret',
                ]
            ])
            ->add('examinerInstructions', ChoiceType::class, [
                'choices' => [
                    'Choose External Examiner' => null,
                    'Instructions to Candidates' => 'Instructions to Candidates',
                    '' => '',
                ]
            ])
            ->add('firstInstruction', ChoiceType::class, [
                'choices' => [
                    'Choose External Examiner' => null,
                    'To ensure that you take the correct examination, please check that the module and programme which you are following is listed in the tables above.' => 'To ensure that you take the correct examination, please check that the module and programme which you are following is listed in the tables above.',
                    '' => '',
                ]
            ])
            ->add('secondInstruction', ChoiceType::class, [
                'choices' => [
                    'Choose External Examiner' => null,
                    'Answer any four questions.' => 'Answer any four questions.',
                    '' => '',
                ]
            ])
            ->add('thirdInstruction', ChoiceType::class, [
                'choices' => [
                    'Choose External Examiner' => null,
                    'All questions carry 25 marks.' => 'All questions carry 25 marks.',
                    '' => '',
                ]
            ])
            ->add('fourthInstruction', ChoiceType::class, [
                'choices' => [
                    'Choose External Examiner' => null,
                    'DO NOT TURN OVER THIS PAGE UNTIL YOU ARE TOLD TO DO SO' => 'DO NOT TURN OVER THIS PAGE UNTIL YOU ARE TOLD TO DO SO',
                    '' => '',
                ]
            ]);
            /*->add('program');*/
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => 'AppBundle\Entity\CoverPage'
        ]);
    }

    /**
     * @return string
     */
    public function getBlockPrefix()
    {
        return 'app_bundle_exam_form_type';
    }
}
