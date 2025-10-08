<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Article;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Article::create([
            'title' => 'Cómo optimizar tu obra con Constructly',
            'slug' => 'como-optimizar-tu-obra',
            'author' => 'Admin',
            'summary' => 'Aprendé a aprovechar Constructly para gestionar tus obras de forma eficiente.',
            'tags' => 'construccion, productividad, proyectos',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident sunt aliquam consectetur nesciunt eos in enim esse itaque! Deleniti earum sint recusandae debitis nam tempora suscipit aspernatur commodi magnam voluptatem.
            Recusandae perferendis maiores nemo inventore ad culpa est asperiores cupiditate molestiae libero optio earum accusamus praesentium dolore laudantium nihil minus explicabo quisquam, eius tenetur soluta harum. Impedit perferendis veritatis quia.
            Necessitatibus, iure voluptatum repudiandae soluta temporibus, delectus dolore impedit aliquid provident enim reprehenderit, aut qui distinctio! Dolores debitis sed maiores blanditiis explicabo in laudantium enim laborum. Ab architecto molestiae cum!
            Quaerat quisquam maxime aliquam deleniti harum laboriosam aperiam impedit perspiciatis, optio consectetur perferendis eaque quia sapiente et nulla vero itaque porro dolore, facilis odit! Enim nam quo atque illo laboriosam?
            Deserunt, aliquid ipsa voluptate accusantium maxime accusamus voluptatum sit id totam! Blanditiis quod pariatur fugiat laboriosam reprehenderit illo qui, eligendi laudantium voluptatum quaerat nobis necessitatibus ab. Repellendus quae consequatur nulla!
            Dolorum, aliquid. Similique dicta distinctio incidunt, saepe est debitis sit. Consequuntur quod maxime molestias pariatur libero quas autem in rerum consectetur tenetur aperiam repudiandae numquam officia, architecto praesentium aliquam. Quis!
            Non laboriosam qui sapiente labore provident delectus vero accusantium perferendis, repellendus ea totam dolorum perspiciatis dignissimos rerum earum assumenda quibusdam. Ex quo quod voluptatem dolore quae ipsum, laboriosam minus aut.
            Explicabo facilis quaerat cumque exercitationem sunt deleniti, omnis autem nesciunt quidem rerum expedita aliquam reiciendis eum, ducimus suscipit ab nihil numquam dicta itaque eos! Accusamus, aliquam? Error mollitia quis in.
            Expedita unde ullam esse et nam natus repellendus iusto voluptas ut quisquam rerum accusantium soluta officia omnis enim quibusdam, impedit nisi exercitationem consectetur nihil quae veniam. Ad dolorum hic facere?
            Beatae velit adipisci enim quo. Earum in sed illum nihil rem explicabo molestiae veniam mollitia ducimus ullam ut reiciendis consequatur cumque, deleniti, amet vero, unde eaque? Nulla praesentium consequuntur esse?',
        ]);

        Article::create([
            'title' => '5 consejos para organizar tus materiales en obra',
            'slug' => 'consejos-organizar-materiales',
            'author' => 'Admin',
            'summary' => 'Tips prácticos para gestionar materiales con Constructly.',
            'tags' => 'materiales, gestion, obras',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident sunt aliquam consectetur nesciunt eos in enim esse itaque! Deleniti earum sint recusandae debitis nam tempora suscipit aspernatur commodi magnam voluptatem.
            Recusandae perferendis maiores nemo inventore ad culpa est asperiores cupiditate molestiae libero optio earum accusamus praesentium dolore laudantium nihil minus explicabo quisquam, eius tenetur soluta harum. Impedit perferendis veritatis quia.
            Necessitatibus, iure voluptatum repudiandae soluta temporibus, delectus dolore impedit aliquid provident enim reprehenderit, aut qui distinctio! Dolores debitis sed maiores blanditiis explicabo in laudantium enim laborum. Ab architecto molestiae cum!
            Quaerat quisquam maxime aliquam deleniti harum laboriosam aperiam impedit perspiciatis, optio consectetur perferendis eaque quia sapiente et nulla vero itaque porro dolore, facilis odit! Enim nam quo atque illo laboriosam?
            Deserunt, aliquid ipsa voluptate accusantium maxime accusamus voluptatum sit id totam! Blanditiis quod pariatur fugiat laboriosam reprehenderit illo qui, eligendi laudantium voluptatum quaerat nobis necessitatibus ab. Repellendus quae consequatur nulla!
            Dolorum, aliquid. Similique dicta distinctio incidunt, saepe est debitis sit. Consequuntur quod maxime molestias pariatur libero quas autem in rerum consectetur tenetur aperiam repudiandae numquam officia, architecto praesentium aliquam. Quis!
            Non laboriosam qui sapiente labore provident delectus vero accusantium perferendis, repellendus ea totam dolorum perspiciatis dignissimos rerum earum assumenda quibusdam. Ex quo quod voluptatem dolore quae ipsum, laboriosam minus aut.
            Explicabo facilis quaerat cumque exercitationem sunt deleniti, omnis autem nesciunt quidem rerum expedita aliquam reiciendis eum, ducimus suscipit ab nihil numquam dicta itaque eos! Accusamus, aliquam? Error mollitia quis in.
            Expedita unde ullam esse et nam natus repellendus iusto voluptas ut quisquam rerum accusantium soluta officia omnis enim quibusdam, impedit nisi exercitationem consectetur nihil quae veniam. Ad dolorum hic facere?
            Beatae velit adipisci enim quo. Earum in sed illum nihil rem explicabo molestiae veniam mollitia ducimus ullam ut reiciendis consequatur cumque, deleniti, amet vero, unde eaque? Nulla praesentium consequuntur esse?',
        ]);
    }
}
