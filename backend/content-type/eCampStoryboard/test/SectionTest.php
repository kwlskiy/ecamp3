<?php

namespace eCamp\ContentType\StoryboardTest;

use eCamp\LibTest\PHPUnit\AbstractHttpControllerTestCase;

/**
 * @internal
 */
class SectionTest extends AbstractHttpControllerTestCase {
    public function testSectionMoveUp() {
        $headers = $this->getRequest()->getHeaders();
        $headers->addHeaderLine('Accept', 'application/json');
        $headers->addHeaderLine('Content-Type', 'application/json');

        $req = $this->getRequest();
        $this->dispatch('/api/activity-content/b6612b43/section/b6612b41/move_up', 'GET');

        $req = $this->getRequest();
        $resp = $this->getResponse();

        $baseUrl = $req->getBaseUrl();
        $basePath = $req->getBasePath();

        $this->assertNotRedirect();
    }
}
