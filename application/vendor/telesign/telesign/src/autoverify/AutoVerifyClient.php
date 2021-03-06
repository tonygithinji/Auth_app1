<?php

namespace telesign\sdk\autoverify;

use telesign\sdk\rest\RestClient;

/**
 * AutoVerify is a secure, lightweight SDK that integrates a frictionless user verification process into existing
 * native mobile applications.
 */
class AutoVerifyClient extends RestClient {

  const AUTOVERIFY_STATUS_RESOURCE = "/v1/mobile/verification/status/%s";

  /**
   * Retrieves the verification result for an AutoVerify transaction by external_id. To ensure a secure verification
   * flow you must check the status using TeleSign's servers on your backend. Do not rely on the SDK alone to
   * indicate a successful verification.
   *
   * See https://developer.telesign.com/docs/auto-verify-sdk-self#section-obtaining-verification-status for detailed API
   * documentation.
   */
  function status ($external_id, array $params = []) {
    return $this->get(sprintf(self::AUTOVERIFY_STATUS_RESOURCE, $external_id), $params);
  }

}
