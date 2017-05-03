<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeding.
     */
    public function run()
    {
        DB::table('pages')->truncate();

        $article = array(
            array(
                'title' => 'About Us',
                'slug' => Str::slug('About Us'),
                'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In scelerisque eget tellus et tempor. Nulla vel lectus aliquam, tempus massa ornare, fermentum tellus. Maecenas in enim sed libero ultrices tincidunt. Ut turpis ante, facilisis a fringilla rhoncus, ornare quis ipsum. Nullam erat ligula, imperdiet vel neque ac, facilisis tempor est. Morbi nec volutpat turpis. Quisque blandit justo ut diam ultrices, id lobortis nunc molestie. Donec a leo at enim pretium vehicula eu non lorem. Cras consequat, arcu nec facilisis hendrerit, metus lacus malesuada nibh, a consequat nulla est et est. In cursus, lorem eu vehicula rhoncus, justo quam bibendum eros, ut iaculis nisi nisl at velit. Aliquam massa massa, sodales et nunc vitae, ullamcorper egestas est. Mauris iaculis convallis libero, a scelerisque dolor ornare ut. Pellentesque blandit in eros ut interdum. Nulla luctus condimentum dignissim. Pellentesque nec consectetur erat, accumsan cursus urna.</p><p>Maecenas tincidunt auctor iaculis. Duis sed suscipit arcu. Cras iaculis felis eu tincidunt adipiscing. Proin et purus vel metus tincidunt dapibus. Praesent aliquet vel mauris ac egestas. Vivamus eu semper lectus, et facilisis mi. Cras at augue sem. Curabitur sagittis ante sed quam tristique interdum. Sed adipiscing arcu vulputate, ullamcorper sem ac, vulputate mauris. Fusce sit amet blandit lacus. Quisque pellentesque pharetra dignissim. Cras commodo ullamcorper nibh. Nam consequat tellus sapien, at iaculis nulla euismod vel. Sed interdum nisl ac justo consequat porta sit amet quis arcu. Quisque ipsum turpis, condimentum a tortor at, lacinia placerat eros. </p><p>Donec mauris eros, viverra nec lorem et, eleifend elementum odio. Nullam auctor nisl quam, quis fringilla justo aliquet at. Cras sed imperdiet libero, eu semper magna. Ut tincidunt dui ac arcu accumsan, vitae pellentesque dolor aliquet. Curabitur porttitor ipsum id pulvinar convallis. Praesent id leo a lectus faucibus elementum. Vestibulum vehicula tincidunt odio ac hendrerit. </p><p>Suspendisse sit amet interdum neque. Cras sed nisl a lectus venenatis pulvinar. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Morbi sed vulputate enim. Etiam eu metus in neque accumsan molestie eu at nunc. Sed porta feugiat metus, in tincidunt diam eleifend non. Vivamus placerat quis quam non dapibus. Maecenas sodales enim at est porttitor, at scelerisque nulla eleifend. Vivamus vel leo in nulla iaculis posuere. Pellentesque ipsum massa, ullamcorper sed neque vel, pretium placerat lectus. Phasellus non leo erat. </p><p>Maecenas rutrum congue orci, a vestibulum enim varius sed. Donec vestibulum pellentesque nunc, eget condimentum tellus iaculis sit amet. Donec condimentum lacus a lorem convallis, in venenatis arcu tincidunt. In feugiat erat purus, non ultricies diam eleifend at. Phasellus massa felis, ullamcorper in ullamcorper sed, consectetur consequat nulla. Aliquam scelerisque nec dolor at lobortis. Vivamus convallis erat ac suscipit aliquet. Maecenas congue ut felis vitae gravida. Nam scelerisque suscipit neque, at elementum lorem interdum sed. Maecenas ac interdum metus, eget mattis diam. Donec congue feugiat sollicitudin. Aliquam id porttitor massa, ac mattis quam. Donec vitae elit sed ante sodales ultricies sed quis ipsum. Nam dui quam, interdum non nisi eu, consectetur accumsan urna. Integer quis enim tincidunt, dictum nisi feugiat, placerat ante. Quisque a urna id odio mollis mattis ac at ante. </p>',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'is_published' => true,
                'lang' => 'en', ), );

        DB::table('pages')->insert($article);
    }
}
