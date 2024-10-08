<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


/** The type of the employment. */
enum EmployeeEmploymentTypeValue: string
{
    case Contractor = 'contractor';
    case Intern = 'intern';
    case Permanent = 'permanent';
    case Apprentice = 'apprentice';
    case Freelance = 'freelance';
    case Terminated = 'terminated';
    case Temporary = 'temporary';
    case Seasonal = 'seasonal';
    case Volunteer = 'volunteer';
    case Probation = 'probation';
    case Internal = 'internal';
    case External = 'external';
    case Expatriate = 'expatriate';
    case EmployerOfRecord = 'employer_of_record';
    case Casual = 'casual';
    case Programme = 'Programme';
    case UnmappedValue = 'unmapped_value';
}
