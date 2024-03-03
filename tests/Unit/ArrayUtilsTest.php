<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Utils\ArrayUtils;

class ArrayUtilsTest extends TestCase
{
    public function testFusionnerTableauxSansDoublons()
    {
        $tableau1 = [1, 2, 3, 4];
        $tableau2 = [3, 4, 5, 6];
        $resultatAttendu = [1, 2, 3, 4, 5, 6];

        $resultat = ArrayUtils::fusionnerTableaux($tableau1, $tableau2);

        $this->assertEquals($resultatAttendu, $resultat);
    }

    public function testFusionnerTableauxAvecDoublons()
    {
        $tableau1 = [1, 2, 3, 4];
        $tableau2 = [3, 4, 5, 5];
        $resultatAttendu = [1, 2, 3, 4, 5];

        $resultat = ArrayUtils::fusionnerTableaux($tableau1, $tableau2);

        $this->assertEquals($resultatAttendu, $resultat);
    }

    public function testFusionnerTableauxAvecChainesDeCaracteres()
    {
        $tableau1 = ["a", "b", "c"];
        $tableau2 = ["b", "c", "d"];
        $resultatAttendu = ["a", "b", "c", "d"];

        $resultat = ArrayUtils::fusionnerTableaux($tableau1, $tableau2);

        $this->assertEquals($resultatAttendu, $resultat);
    }

    public function testFusionnerTableauxAvecTableauxVides()
    {
        $tableau1 = [];
        $tableau2 = [];
        $resultatAttendu = [];

        $resultat = ArrayUtils::fusionnerTableaux($tableau1, $tableau2);

        $this->assertEquals($resultatAttendu, $resultat);
    }
}
