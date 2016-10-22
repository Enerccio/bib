<?php
  /**
  * @Entity
  * @InheritanceType("SINGLE_TABLE")
  * @DiscriminatorColumn(name="type", type="string")
  * @DiscriminatorMap({"bib_journal" = "bib_journal", "bib_book" = "bib_book"})
  */
  abstract class bib_entry {

    /** @Id @Column(type="bigint") @GeneratedValue **/
    protected $id;

    public function get_id() {
      return $this->id;
    }

    public function set_id($id) {
      $this->id = $id;
    }

    abstract public function to_bib_tex();
  }

  /**
  * @Entity
  */
  class bib_journal extends bib_entry {

    /** @Column(type="string") */
    protected $authors;

    /** @Column(type="string") */
    protected $name;

    /** @Column(type="string") */
    protected $journal_name;

    /** @Column(type="string") */
    protected $year;

    /** @Column(type="string") */
    protected $volume;

    /** @Column(type="string") */
    protected $number;

    /** @Column(type="string") */
    protected $month;

    /** @Column(type="string") */
    protected $pages;

    /** @Column(type="string") */
    protected $note;

    /** @Column(type="string") */
    protected $kkey;

    public function get_authors() {
      return $this->authors;
    }

    public function set_authors($authors) {
      $this->authors = $authors;
    }

    public function get_name() {
      return $this->name;
    }

    public function set_name($name) {
      $this->name = $name;
    }

    public function get_journal_name() {
      return $this->journal_name;
    }

    public function set_journal_name($jn) {
      $this->journal_name = $jn;
    }

    public function get_year() {
      return $this->year;
    }

    public function set_year($year) {
      $this->year = $year;
    }

    public function get_volume() {
      return $this->volume;
    }

    public function set_volume($volume) {
      $this->volume = $volume;
    }

    public function get_number() {
      return $this->number;
    }

    public function set_number($number) {
      $this->number = $number;
    }

    public function get_pages() {
      return $this->pages;
    }

    public function set_pages($pages) {
      $this->pages = $pages;
    }

    public function get_month() {
      return $this->month;
    }

    public function set_month($month) {
      $this->month = $month;
    }

    public function get_note() {
      return $this->note;
    }

    public function set_note($note) {
      $this->note = $note;
    }

    public function get_key() {
      return $this->kkey;
    }

    public function set_key($key) {
      $this->kkey = $key;
    }

    public function to_bib_tex() {
      echo '@Article{' . PHP_EOL;
      echo ' author: "' . $this->authors . '",' . PHP_EOL;
      echo ' title: "' . $this->name . '",' . PHP_EOL;
      echo ' journal: "' . $this->journal_name . '",' . PHP_EOL;
      echo ' year: ' . $this->year . ',' . PHP_EOL;
      echo ' volume: "' . $this->volume . '"';
      if ($this->number != '') echo ',' . PHP_EOL . ' number: "' . $this->number . '"';
      if ($this->pages != '') echo ',' . PHP_EOL . ' pages: "' . $this->pages . '"';
      if ($this->month != '') echo ',' . PHP_EOL . ' month: "' . $this->month . '"';
      if ($this->note != '') echo ',' . PHP_EOL . ' note: "' . $this->note . '"';
      if ($this->kkey != '') echo ',' . PHP_EOL . ' key: "' . $this->kkey . '"';
      echo PHP_EOL . '}' . PHP_EOL;
    }
  }

  /**
  * @Entity
  */
  class bib_book extends bib_entry {

    /** @Column(type="string") */
    protected $authors;

    /** @Column(type="string") */
    protected $name;

    /** @Column(type="string") */
    protected $publisher;

    /** @Column(type="string") */
    protected $year;

    /** @Column(type="string") */
    protected $volume;

    /** @Column(type="string") */
    protected $series;

    /** @Column(type="string") */
    protected $address;

    /** @Column(type="string") */
    protected $edition;

    /** @Column(type="string") */
    protected $month;

    /** @Column(type="string") */
    protected $note;

    /** @Column(type="string") */
    protected $kkey;

    public function get_authors() {
      return $this->authors;
    }

    public function set_authors($authors) {
      $this->authors = $authors;
    }

    public function get_name() {
      return $this->name;
    }

    public function set_name($name) {
      $this->name = $name;
    }

    public function get_publisher() {
      return $this->publisher;
    }

    public function set_publisher($publisher) {
      $this->publisher = $publisher;
    }

    public function get_series() {
      return $this->series;
    }

    public function set_series($series) {
      $this->series = $series;
    }

    public function get_edition() {
      return $this->edition;
    }

    public function set_edition($edition) {
      $this->edition = $edition;
    }

    public function get_address() {
      return $this->address;
    }

    public function set_address($address) {
      $this->address = $address;
    }

    public function get_year() {
      return $this->year;
    }

    public function set_year($year) {
      $this->year = $year;
    }

    public function get_volume() {
      return $this->volume;
    }

    public function set_volume($volume) {
      $this->volume = $volume;
    }

    public function get_month() {
      return $this->month;
    }

    public function set_month($month) {
      $this->month = $month;
    }

    public function get_note() {
      return $this->note;
    }

    public function set_note($note) {
      $this->note = $note;
    }

    public function get_key() {
      return $this->kkey;
    }

    public function set_key($key) {
      $this->kkey = $key;
    }

    public function to_bib_tex() {
      echo '@Book{' . PHP_EOL;
      echo ' author: "' . $this->authors . '",' . PHP_EOL;
      echo ' title: "' . $this->name . '",' . PHP_EOL;
      echo ' publisher: "' . $this->publisher . '",' . PHP_EOL;
      echo ' year: ' . $this->year;
      if ($this->volume != '') echo ',' . PHP_EOL . ' volume: "' . $this->volume . '"';
      if ($this->series != '') echo ',' . PHP_EOL . ' series: "' . $this->series . '"';
      if ($this->address != '') echo ',' . PHP_EOL . ' address: "' . $this->address . '"';
      if ($this->edition != '') echo ',' . PHP_EOL . ' edition: "' . $this->edition . '"';
      if ($this->month != '') echo ',' . PHP_EOL . ' month: "' . $this->month . '"';
      if ($this->note != '') echo ',' . PHP_EOL . ' note: "' . $this->note . '"';
      if ($this->kkey != '') echo ',' . PHP_EOL . ' key: "' . $this->kkey . '"';
      echo PHP_EOL . '}' . PHP_EOL;
    }

  }
?>
