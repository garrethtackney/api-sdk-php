<?php

namespace Smartling\TranslationRequests\Params;

/**
 * Class CreateDetailParams
 * @package TranslationRequests\Params
 */
class CreateDetailParams extends DetailParamsAbstract
{
    /**
     * @param string $submissionUid
     * @return $this
     */
    public function setSubmissionUid($submissionUid)
    {
        $this->set('submission_uid', (string)$submissionUid);
        return $this;
    }

    /**
     * @param $targetLocale
     * @return $this
     */
    public function setTargetLocale($targetLocale)
    {
        $this->set('target_locale', (string)$targetLocale);
        return $this;
    }
}