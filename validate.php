<?php

class validate
{
    public function checkEmpty($dataDict, $fieldsToCheck)
    {
        foreach ($fieldsToCheck as $field) {
            if (empty($dataDict[$field])) {
                return false;
            }
        }
        return true;
    }

    public function checkGradeLevel($gradeLevel)
    {
//        checks that it is a digit
        if(preg_match("/^\d+$/", $gradeLevel))
        {
//            ensure it is betwween 1 and 12
            if ($gradeLevel >= 1 && $gradeLevel <= 12)
            {
                return true;
            }
        }
        return false;
    }
    public function checkAverageGrade($grade)
    {
//        check if it is a whole number or a number with a decimal place
        if(preg_match("/^\d+$/", $grade) || preg_match("/^\d+\.\d+$/", $grade))
        {
//            check if the grade is between 0 and 100
            if ($grade >= 0 && $grade <= 100)
            {
                return true;
            }
        }
        return false;
    }
}