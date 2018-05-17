<?php

namespace App\Validator;

use App\Repository\UserRepository;
use Symfony\Component\Translation\TranslatorInterface;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class EmailExistsValidator extends ConstraintValidator
{
    
    private $userRepo;
    private $translator;
    
    public function __construct(UserRepository $userRepo, TranslatorInterface $translator)
    {
        $this->userRepo = $userRepo;
        $this->translator = $translator;
    }
    
    public function validate($value, Constraint $constraint)
    {
        $user = $this->userRepo->findOneBy(['email' => $value]);
        
        if(! $user) {
            /* @var $constraint EmailExists */
            $this->context->buildViolation($this->translator->trans($constraint->message))
                ->setParameter('{{ value }}', $value)
                ->addViolation();
        }
    }
}
