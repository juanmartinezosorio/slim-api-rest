<?php

namespace App\Models;

class CategoriesModel extends Model {

  public function selectCategories() {
    $result = $this->db->select('categories', ['id_category', 'image', 'name']);

    if (!is_null($this->db->error()[1])) {
      return array('error' => true, 'description' => 
        $this->db ->error()[2]
      );
    } else if (empty($result)) {
      return array('noFound' => true, 'description' => 'There is no info');
    }

    return array('success' => true, 'description' => 'There is queried', 'categories' => $result);
    
  }

}

?>