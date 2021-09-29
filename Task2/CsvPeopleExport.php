<?php

class CsvPeopleExport extends PeopleExport {

  static public function export($peopleCollection, $fileName) {

    $fp = fopen($fileName . '.cvs', 'w');

    fputcsv($fp, array_keys($peopleCollection[0]));

    foreach ($peopleCollection as $line) {
      fputcsv($fp, $line);
    }

    fclose($fp);
  }

}