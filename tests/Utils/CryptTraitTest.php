<?php

namespace LeagueTests\Utils;

use Defuse\Crypto\Key;
use LeagueTests\Stubs\CryptTraitStub;
use PHPUnit\Framework\TestCase;

class CryptTraitTest extends TestCase
{
    protected $cryptStub;

    protected function setUp()
    {
        $this->cryptStub = new CryptTraitStub();
    }

    public function testEncryptDecryptWithPassword()
    {
        $this->cryptStub->setEncryptionKey(base64_encode(random_bytes(36)));

        $this->encryptDecrypt();
    }

    public function testEncryptDecryptWithKey()
    {
        $this->cryptStub->setEncryptionKey(Key::createNewRandomKey());

        $this->encryptDecrypt();
    }

    
}
