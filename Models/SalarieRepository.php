<?php



/**
 * SalarieRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class SalarieRepository extends Doctrine\ORM\EntityRepository
{
	public function getSalarie($id_salarie)
	{
		$salarie = $this->_em->CreateQuery("select s from \Salarie s WHERE s.id = " . $id_salarie)->getResult();
		return $salarie;
	}
}
