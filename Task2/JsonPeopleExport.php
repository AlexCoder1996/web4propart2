<?php

class JsonPeopleExport extends PeopleExport {

  static public function export($peopleCollection, $fileName) {

    $res = json_encode($peopleCollection);

    $fp = fopen($fileName . '.json', 'w');
    fwrite($fp, $res);
    fclose($fp);

  }

}