<?php

use Illuminate\Database\Seeder;

class ClientsSayTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('clients_say')->truncate();

      DB::table('clients_say')->insert(array(
          array(
              'name' => 'Someone famous in Source Title',
              'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.',
              'position' => 0,
              'lang' => 'en', ),
          array(
              'name' => 'Bill Gates',
              'content' => 'I choose a lazy person to do a hard job. Because a lazy person will find an easy way to do it.',
              'position' => 1,
              'lang' => 'en', ),
          array(
              'name' => 'Someone famous',
              'content' => 'If you are born poor its not your mistake, but if you die poor its your mistake.',
              'position' => 2,
              'lang' => 'en', ),
          array(
              'name' => 'Noone',
              'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.',
              'position' => 3,
              'lang' => 'en', ),
          array(
              'name' => 'Tutaj też ktoś znany',
              'content' => 'Niepotrzebny wysiłek to jedna z największych frustracji w pracy.',
              'position' => 0,
              'lang' => 'pl', ),
          array(
              'name' => 'Bill Gates',
              'content' => 'Opinia wygłaszana ustnie przez klienta jest najpotężniejszą metodą budowania reputacji firmy lub produktu, a Internet jest jakby do tego stworzony.',
              'position' => 1,
              'lang' => 'pl', ),
          array(
              'name' => 'Ktoś znany',
              'content' => 'Jeśli urodzisz się biedny to nie Twój błąd, lecz jeśli umrzesz biedny to Twoja wina',
              'position' => 2,
              'lang' => 'pl', ),
          array(
              'name' => 'Noone',
              'content' => 'Wybieram leniwe osoby do wykonania ciężkich zadań, ponieważ leniwa osoba znajdzie proste rozwiązanie.',
              'position' => 3,
              'lang' => 'pl', ), ));
    }
}
