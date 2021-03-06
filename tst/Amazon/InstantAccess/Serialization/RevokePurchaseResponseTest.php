<?php
/**
 * Copyright 2014 Amazon.com, Inc. or its affiliates. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License").
 * You may not use this file except in compliance with the License.
 * A copy of the License is located at
 *
 *  http://aws.amazon.com/apache2.0
 *
 * or in the "license" file accompanying this file. This file is distributed
 * on an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either
 * express or implied. See the License for the specific language governing
 * permissions and limitations under the License.
 */
namespace Amazon\InstantAccess\Serialization;

use Amazon\InstantAccess\Serialization\Enums\RevokePurchaseResponseValue;

class RevokePurchaseResponseTest extends \PHPUnit_Framework_TestCase
{
    public function testToJson()
    {
        $revokeResponse = new RevokePurchaseResponse();
        $revokeResponse->setResponse(RevokePurchaseResponseValue::FAIL_INVALID_PURCHASE_TOKEN);

        $json = $revokeResponse->toJson();

        $this->assertNotEmpty($revokeResponse);
        $this->assertEquals('{"response":"FAIL_INVALID_PURCHASE_TOKEN"}', $json);
    }

    public function testToJsonInvalidResponse()
    {
        $this->setExpectedException('InvalidArgumentException');

        $revokeResponse = new RevokePurchaseResponse();
        $revokeResponse->setResponse('foobar');

        $json = $revokeResponse->toJson();
    }
}
