<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


enum TimeOffTypeValue: string
{
    case Sick = 'sick';
    case UnmappedValue = 'unmapped_value';
    case Vacation = 'vacation';
    case LongTermDisability = 'long_term_disability';
    case ShortTermDisability = 'short_term_disability';
    case Absent = 'absent';
    case CompTime = 'comp_time';
    case Training = 'training';
    case AnnualLeave = 'annual_leave';
    case LeaveOfAbsence = 'leave_of_absence';
    case Break = 'break';
    case ChildCareLeave = 'child_care_leave';
    case MaternityLeave = 'maternity_leave';
    case JuryDuty = 'jury_duty';
    case BereavementLeave = 'bereavement_leave';
    case Sabbatical = 'sabbatical';
    case Accident = 'accident';
}
