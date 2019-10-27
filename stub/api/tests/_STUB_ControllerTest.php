<?php // Copyright 2014-present Zane Hooper. Do not use, modify, or distribute without written consent.

namespace _NAMESPACE_\_STUB_;

use App\Test\TestCase;

class _STUB_ControllerTest extends TestCase {
  /**
   * @var _STUB_
   */
  protected $item;

  protected $permissions = [
    'read' => _STUB_::PERMISSION_READ,
    'write' => _STUB_::PERMISSION_WRITE,
  ];

  public function setUp() {
    parent::setUp();

    $this->item = $this->factory('testing', _STUB_::class)->create();
  }

  public function tearDown() {
    $this->item->delete();

    parent::tearDown();
  }

  public function testClientForbidden() {
    $this->asClient(function () {
      $this->cannotRead();
      $this->cannotUpdate();
    });
  }

  public function testAdminNoPerms() {
    $this->asAdminWithPermissions([], function () {
      $this->cannotRead();
      $this->cannotUpdate();
    });
  }

  public function testAdminReadOnly() {
    $this->asAdminWithPermissions([$this->permissions['read']], function () {
      $this->canRead();
      $this->cannotUpdate();
    });
  }

  public function testAdminReadAndWrite() {
    $this->asAdminWithPermissions([$this->permissions['write']], function () {
      $this->canRead();
      $this->canUpdate();
    });
  }

  private function canRead() {
    $this->get($this->trimLastPath($this->item->url()));
    $this->assertResponseStatus(200);

    $this->get($this->item->url());
    $this->assertResponseStatus(200);
  }

  private function cannotRead() {
    $this->get($this->trimLastPath($this->item->url()));
    $this->assertResponseStatus(401);

    $this->get($this->item->url());
    $this->assertResponseStatus(401);
  }

  private function cannotUpdate() {
    $this->post($this->trimLastPath($this->item->url()), $this->createData());
    $this->assertResponseStatus(401);

    $this->patch($this->item->url(), $this->editData());
    $this->assertResponseStatus(401);

    $this->delete($this->item->url());
    $this->assertResponseStatus(401);
  }

  private function canUpdate() {
    $this->post($this->trimLastPath($this->item->url()), $this->createData());
    $this->assertResponseStatus(200);

    $this->patch($this->item->url(), $this->editData());
    $this->assertResponseStatus(200);

    $this->delete($this->item->url());
    $this->assertResponseStatus(200);
  }

  protected function createData() {
    return [];
  }

  protected function editData() {
    return [];
  }
}
