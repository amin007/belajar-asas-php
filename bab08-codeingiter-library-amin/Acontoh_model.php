<?php

class Acontoh_model extends CI_model
{
#==================================================================================================
###################################################################################################
/*nota rujukan
https://codeigniter.com/userguide3/database/query_builder.html

Compiles the selection query just like $this->db->get() but does not run the query.
This method simply returns the SQL query as a string.

$this->db->get_compiled_select()
*/
###################################################################################################
# standard function dalam codeingiter
#--------------------------------------------------------------------------------------------------
	public function getAll($myTable)
	{
		$query = $this->db->get($myTable);
		$q01 = $query->result_array();//$array['']
		$q01 = $this->ubahTatasusunan($q01,'q01');

		return $q01;
		//return $query->result();//$array->id;
	}
#--------------------------------------------------------------------------------------------------'
	public function getAllMeta($myTable)
	{
		$query = $this->db->get($myTable);

		$q01 = $query->result_array();//$array['']
		$fields = $query->field_data();

		foreach ($fields as $field)
		{
			$q02[$field->name] = array(
				'name' => $field->name,
				'value' => null,
				'type' => $field->type,
				'max_length' => $field->max_length,
				'primary_key' => $field->primary_key,
				'typeKey' => null,
				'referColumnName' => null,
				'referTableName' => null,
			);
		}//*/

		//return array($q01,$fields);
		return array($q01,$q02);
	}
#--------------------------------------------------------------------------------------------------
	public function getMetaOnly($myTable)
	{
		$fields = $this->db->field_data($myTable);

		foreach ($fields as $field)
		{
			$q02[$field->name] = array(
				'name' => $field->name,
				'value' => null,
				'type' => $field->type,
				'max_length' => $field->max_length,
				'primary_key' => $field->primary_key,
				'typeKey' => null,
				'referColumnName' => null,
				'referTableName' => null,
			);
		}//*/

		return $q02;
		//return array($q02);
	}
#--------------------------------------------------------------------------------------------------
	public function getPrimaryKey($myTable)
	{
		$fields = $this->db->field_data($myTable);
		//semakPembolehubah($fields);

		/*$field->name - column name
		$field->max_length - maximum length of the column
		$field->primary_key - 1 if the column is a primary key
		$field->type - the type of the column //*/

		foreach ($fields as $field)
		{
			if( $field->primary_key === 1)
				return $field->name;
			else
				return null;
		}//*/
		#
	}
#--------------------------------------------------------------------------------------------------
	public function getMetaKey($sql,$myTable)
	{
		$query = $this->db->query($sql);// untuk full sql sendiri
		$q01 = $query->result_array();

		return $q01;
	}
#--------------------------------------------------------------------------------------------------
	public function get1Fields($sql)
	{
		$query = $this->db->query($sql);// untuk full sql sendiri
		$q01 = $query->result_array();
		$kira = $query->num_rows();

		return array($q01,$kira);
	}
#--------------------------------------------------------------------------------------------------
	public function findAllMeta($myTable,$id)
	{
		#buat arahan sql
		//$this->db->select('*');
		$this->db->from($myTable);
		//$this->db->join('categories','categories.id = tickets.category_id','left');
		$this->db->where($id['medan'], $id['cari']); // Produces: WHERE name = 'Joe'
		//$this->db->order_by('id','desc');
		$query = $this->db->get();
		# dapatkan data2 dari sql
		$q01 = $query->result_array();//$array['']
		$fields = $query->field_data();

		foreach ($fields as $field)
		{
			$q02[$field->name] = array(
				'name' => $field->name,
				'value' => $this->susunQ01($q01,$field->name),
				'type' => $field->type,
				'max_length' => $field->max_length,
				'primary_key' => $field->primary_key,
				'typeKey' => null,
				'referColumnName' => null,
				'referTableName' => null,
			);
		}//*/

		//return array($q01,$fields);
		return array($q01,$q02);
	}
#--------------------------------------------------------------------------------------------------
	function susunQ01($q01,$fieldName)
	{
		//echo '<hr>Nama class :' . __METHOD__ . '<br>';
		//semakPembolehubah($fieldName,'fieldName'); echo '<br>';
		$data = null;
		foreach($q01 as $key => $val):
		if(isset($key)):
			$data =  $q01[$key][$fieldName];
		endif;
		endforeach;

		return $data;
	}
#--------------------------------------------------------------------------------------------------
	public function findAllMetaV02($myTable,$id)
	{
		# buat arahan sql - https://codeigniter.com/userguide3/database/query_builder.html
		$this->db->from($myTable);
		//$this->db->like('title', 'match', 'before');
		// Produces: WHERE `title` LIKE '%match' ESCAPE '!'
		//$this->db->like('title', 'match', 'after');
		// Produces: WHERE `title` LIKE 'match%' ESCAPE '!'
		//$this->db->like('title', 'match', 'none');
		// Produces: WHERE `title` LIKE 'match' ESCAPE '!'
		$this->db->like($id['medan'], $id['cari'], 'both');
		// Produces: WHERE `title` LIKE '%match%' ESCAPE '
		$query = $this->db->get();
		# dapatkan data2 dari sql
		$q01 = $query->result_array();//$array['']
		$fields = $query->field_data();

		foreach ($fields as $field)
		{
			$q02[$field->name] = array(
				'name' => $field->name,
				'value' => $this->susunQ01($q01,$field->name),
				'type' => $field->type,
				'max_length' => $field->max_length,
				'primary_key' => $field->primary_key,
				'typeKey' => null,
				'referColumnName' => null,
				'referTableName' => null,
			);
		}//*/

		//return array($q01,$fields);
		return array($q01,$q02);
	}
#--------------------------------------------------------------------------------------------------
	public function findSqlAllMeta($myTable,$id)
	{
		# buat arahan sql
		$sql = "SELECT * FROM `$myTable`"
		. ' WHERE ' . $id['medan'] . '="' .  $id['cari'] . '"';
		# jalankan arahan sql
		$query = $this->db->query($sql);// untuk full sql sendiri
		# dapatkan data2 dari sql
		$q01 = $query->result_array();//$array['']
		$fields = $query->field_data();

		foreach ($fields as $field)
		{
			$q02[$field->name] = array(
				'name' => $field->name,
				'value' => $this->susunQ01($q01,$field->name),
				'type' => $field->type,
				'max_length' => $field->max_length,
				'primary_key' => $field->primary_key,
				'typeKey' => null,
				'referColumnName' => null,
				'referTableName' => null,
			);
		}//*/

		return array($sql,$q01,$fields);
	}
#--------------------------------------------------------------------------------------------------
###################################################################################################
# buat sql untuk limit data
# https://www.guru99.com/codeigniter-pagination.html
#--------------------------------------------------------------------------------------------------
	public function getCount($myTable)
	{
		return $this->db->count_all($myTable);
	}
#--------------------------------------------------------------------------------------------------
	public function getDataLimit($myTable, $limit, $start)
	{
		$this->db->limit($limit, $start);
		$query = $this->db->get($myTable);

		return $query->result();
	}
#--------------------------------------------------------------------------------------------------
###################################################################################################
# buat sql yang kompleks
#--------------------------------------------------------------------------------------------------
	public function jalankanSqlKompleks($sql)
	{
		# jalankan arahan sql
		$query = $this->db->query($sql);// untuk full sql sendiri
		# dapatkan data2 dari sql
		$q01 = $query->result_array();//$array['']
		$fields = $query->field_data();

		foreach ($fields as $field)
		{
			$q02[$field->name] = array(
				'name' => $field->name,
				'value' => $this->susunQ01($q01,$field->name),
				'type' => $field->type,
				'max_length' => $field->max_length,
				'primary_key' => $field->primary_key,
				'typeKey' => null,
				'referColumnName' => null,
				'referTableName' => null,
			);
		}//*/

		return array($q01,$fields);
	}
#--------------------------------------------------------------------------------------------------
	function diMana($id)
	{
		$dimana = null;
		if($id != null):
			foreach($id as $key => $val):
				$idWhere = ($key === 0) ? 'WHERE' : 'AND';
				$idMedan = $id[$key]['medan'];
				$idCari  = $id[$key]['cari'];
				$dimana .= "\r $idWhere $idMedan = '$idCari' ";
			endforeach;
		endif;

		return $dimana;
	}
#--------------------------------------------------------------------------------------------------
	public function sqlKompleks00($jadual,$id)
	{
		# bentuk pembolehubah
		$dimana = $this->diMana($id);
		# buat arahan sql
		$sql = "SELECT * FROM `$jadual` $dimana ";

		return $sql;
	}
#--------------------------------------------------------------------------------------------------
	public function sqlKompleks01($jadualA,$jadualB,$id,$id02)
	{
		# bentuk pembolehubah
		$dimana = $this->diMana($id);
		$idMedanB = $id02['medan'];
		//$idCariB = $id02['cari'];
		# buat arahan sql
		$sqlA = "SELECT $idMedanB FROM `$jadualA` $dimana ";
		$sql = "SELECT * FROM `$jadualB` \r WHERE $idMedanB in ($sqlA) ";

		return $sql;
	}
#--------------------------------------------------------------------------------------------------
	public function sqlKompleks02($jadual,$medan,$id = null)
	{
		if($id === null):
			$sql = "SELECT $medan FROM `$jadual`";
		else:
			$dimana = $this->diMana($id);
			$sql = "SELECT $medan FROM `$jadual` $dimana";
		endif;

		return $sql;
	}
#--------------------------------------------------------------------------------------------------
	public function sqlKompleks03($medan,$jadualAB,$joinId,$id)
	{
		# bentuk pembolehubah
		$dimana = $this->diMana($id);
		# buat arahan sql
		$sql = "SELECT $medan FROM $jadualAB "
		. "\r ON $joinId \r $dimana ";

		return $sql;
	}
#--------------------------------------------------------------------------------------------------
	public function sqlKompleks04($medan,$jadual,$id,$jumLimit)
	{
		# bentuk pembolehubah
		$dimana = $this->diMana($id);
		//list($bil_semua,$page,$max,$dari,$muka_surat,$bil) = $jumLimit;
		extract($jumLimit);
		# buat arahan sql
		$sql = "SELECT $medan FROM $jadual\r $dimana"
		. " \rLIMIT $dari,$max";

		return $sql;
	}
#--------------------------------------------------------------------------------------------------
	public function getCountV02($myTable,$limitpage)
	{
		$bilSemua = $this->db->count_all($myTable);
		list($item,$ms) = $limitpage;
		$jum = pencamSqlLimit($bilSemua, $item, $ms);
		/*$jum[bil_semua] => 347
		$jum[page] => 6
		$jum[max] => 30
		$jum[dari] => 150
		$jum[muka_surat] => 12
		$jum[bil] => 151 */
		//semakPembolehubah($jum,'jum-page');
		/*for($kira = 1; $kira <= $jum['muka_surat']; $kira++):
			echo "[$kira]";
		endfor; echo "<hr>";//*/

		return $jum;
	}
#--------------------------------------------------------------------------------------------------
###################################################################################################
#--------------------------------------------------------------------------------------------------
	public function insert($table,$data)
	{
		$result = $this->db->insert($table,$data);
		if($result):
			return $this->db->insert_id();
		endif;

		return false;
	}
#--------------------------------------------------------------------------------------------------
	public function update($table,$data,$primary)
	{
		$this->db->where($primary['key'],$primary['val']);
		$this->db->update($table,$data);
		$affected_rows = $this->db->affected_rows();

		return $affected_rows;
	}
#--------------------------------------------------------------------------------------------------
	public function deleteUpdate($table,$data,$primary)
	{
		$this->db->where($primary['key'],$primary['val']);
		$this->db->update($table,$data);
		$affected_rows = $this->db->affected_rows();

		return $affected_rows;
	}
#--------------------------------------------------------------------------------------------------
	public function deleteData($primary,$table)
	{
		$this->db->where($primary['key'],$primary['val']);
		$this->db->delete($table);
		$affected_rows = $this->db->affected_rows();

		return $affected_rows;
	}
#--------------------------------------------------------------------------------------------------
###################################################################################################
#==================================================================================================
}