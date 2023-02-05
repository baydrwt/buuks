<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Book;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Book::create([
            'bookTitle' => 'Cinta Brontosaurus',
            'category_id' => 1,
            'user_id' => 1,
            'slugs' => 'cinta-brontosaurus',
            'author' => 'Raditya Dika',
            'authors' => 'Bayu Darwanto',
            'publisher' => 'Pustaka Gramedia',
            'page' => 170,
            'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas, praesentium accusamus! Repellat obcaecati laudantium sunt commodi facere exercitationem aspernatur nobis asperiores. Repellendus perferendis fuga cupiditate',
            'synopsis' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus aliquid eaque iusto inventore quasi nulla cum praesentium a sint recusandae maxime debitis harum similique sunt laborum reiciendis unde vero officia totam beatae, exercitationem voluptatibus! Natus facilis qui vero laborum voluptatibus iusto tempora nobis omnis labore deleniti ipsa corporis esse atque quibusdam delectus, eius, doloribus fuga eum reprehenderit repellat? Odit, nam. Id, quasi unde excepturi odio aliquid dolor reprehenderit consequatur a iure qui nisi. Pariatur aspernatur suscipit, quasi tempore labore ullam natus dolorum, nulla ab eveniet, dolorem tenetur distinctio nesciunt quae totam! Minima omnis rerum illum consequatur, accusamus laborum excepturi sit sint! Mollitia sit impedit maxime! Ea est ipsam inventore aut et adipisci dolorem dignissimos numquam explicabo earum a debitis laboriosam similique deserunt possimus, excepturi labore quisquam rem dolore voluptate autem tenetur non maxime reiciendis. Similique eveniet suscipit eum velit impedit, eaque quisquam aspernatur sequi minima eius? Temporibus laudantium voluptatem dicta?</p> <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus aliquid eaque iusto inventore quasi nulla cum praesentium a sint recusandae maxime debitis harum similique sunt laborum reiciendis unde vero officia totam beatae, exercitationem voluptatibus! Natus facilis qui vero laborum voluptatibus iusto tempora nobis omnis labore deleniti ipsa corporis esse atque quibusdam delectus, eius, doloribus fuga eum reprehenderit repellat? Odit, nam. Id, quasi unde excepturi odio aliquid dolor reprehenderit consequatur a iure qui nisi.</p>'
        ]);

        Book::create([
            'bookTitle' => 'Manusia Setengah Salmon',
            'category_id' => 2,
            'user_id' => 1,
            'slugs' => 'manusia-setengah-salmon',
            'author' => 'Raditya Dika',
            'authors' => 'Bayu Darwanto',
            'publisher' => 'Pustaka Gramedia',
            'page' => 170,
            'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas, praesentium accusamus! Repellat obcaecati laudantium sunt commodi facere exercitationem aspernatur nobis asperiores. Repellendus perferendis fuga cupiditate',
            'synopsis' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus aliquid eaque iusto inventore quasi nulla cum praesentium a sint recusandae maxime debitis harum similique sunt laborum reiciendis unde vero officia totam beatae, exercitationem voluptatibus! Natus facilis qui vero laborum voluptatibus iusto tempora nobis omnis labore deleniti ipsa corporis esse atque quibusdam delectus, eius, doloribus fuga eum reprehenderit repellat? Odit, nam. Id, quasi unde excepturi odio aliquid dolor reprehenderit consequatur a iure qui nisi. Pariatur aspernatur suscipit, quasi tempore labore ullam natus dolorum, nulla ab eveniet, dolorem tenetur distinctio nesciunt quae totam! Minima omnis rerum illum consequatur, accusamus laborum excepturi sit sint! Mollitia sit impedit maxime! Ea est ipsam inventore aut et adipisci dolorem dignissimos numquam explicabo earum a debitis laboriosam similique deserunt possimus, excepturi labore quisquam rem dolore voluptate autem tenetur non maxime reiciendis. Similique eveniet suscipit eum velit impedit, eaque quisquam aspernatur sequi minima eius? Temporibus laudantium voluptatem dicta?</p> <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus aliquid eaque iusto inventore quasi nulla cum praesentium a sint recusandae maxime debitis harum similique sunt laborum reiciendis unde vero officia totam beatae, exercitationem voluptatibus! Natus facilis qui vero laborum voluptatibus iusto tempora nobis omnis labore deleniti ipsa corporis esse atque quibusdam delectus, eius, doloribus fuga eum reprehenderit repellat? Odit, nam. Id, quasi unde excepturi odio aliquid dolor reprehenderit consequatur a iure qui nisi.</p>'
        ]);

        Book::create([
            'bookTitle' => 'Marmut Merah Jambu',
            'category_id' => 4,
            'user_id' => 1,
            'slugs' => 'marmut-merah-jambu',
            'author' => 'Raditya Dika',
            'authors' => 'Bayu Darwanto',
            'publisher' => 'Pustaka Gramedia',
            'page' => 170,
            'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas, praesentium accusamus! Repellat obcaecati laudantium sunt commodi facere exercitationem aspernatur nobis asperiores. Repellendus perferendis fuga cupiditate',
            'synopsis' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus aliquid eaque iusto inventore quasi nulla cum praesentium a sint recusandae maxime debitis harum similique sunt laborum reiciendis unde vero officia totam beatae, exercitationem voluptatibus! Natus facilis qui vero laborum voluptatibus iusto tempora nobis omnis labore deleniti ipsa corporis esse atque quibusdam delectus, eius, doloribus fuga eum reprehenderit repellat? Odit, nam. Id, quasi unde excepturi odio aliquid dolor reprehenderit consequatur a iure qui nisi. Pariatur aspernatur suscipit, quasi tempore labore ullam natus dolorum, nulla ab eveniet, dolorem tenetur distinctio nesciunt quae totam! Minima omnis rerum illum consequatur, accusamus laborum excepturi sit sint! Mollitia sit impedit maxime! Ea est ipsam inventore aut et adipisci dolorem dignissimos numquam explicabo earum a debitis laboriosam similique deserunt possimus, excepturi labore quisquam rem dolore voluptate autem tenetur non maxime reiciendis. Similique eveniet suscipit eum velit impedit, eaque quisquam aspernatur sequi minima eius? Temporibus laudantium voluptatem dicta?</p> <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus aliquid eaque iusto inventore quasi nulla cum praesentium a sint recusandae maxime debitis harum similique sunt laborum reiciendis unde vero officia totam beatae, exercitationem voluptatibus! Natus facilis qui vero laborum voluptatibus iusto tempora nobis omnis labore deleniti ipsa corporis esse atque quibusdam delectus, eius, doloribus fuga eum reprehenderit repellat? Odit, nam. Id, quasi unde excepturi odio aliquid dolor reprehenderit consequatur a iure qui nisi.</p>'
        ]);

        Book::create([
            'bookTitle' => 'Kambing Jantan',
            'category_id' => 2,
            'user_id' => 1,
            'slugs' => 'kambing-jantan',
            'author' => 'Raditya Dika',
            'authors' => 'Bayu Darwanto',
            'publisher' => 'Pustaka Gramedia',
            'page' => 170,
            'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas, praesentium accusamus! Repellat obcaecati laudantium sunt commodi facere exercitationem aspernatur nobis asperiores. Repellendus perferendis fuga cupiditate',
            'synopsis' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus aliquid eaque iusto inventore quasi nulla cum praesentium a sint recusandae maxime debitis harum similique sunt laborum reiciendis unde vero officia totam beatae, exercitationem voluptatibus! Natus facilis qui vero laborum voluptatibus iusto tempora nobis omnis labore deleniti ipsa corporis esse atque quibusdam delectus, eius, doloribus fuga eum reprehenderit repellat? Odit, nam. Id, quasi unde excepturi odio aliquid dolor reprehenderit consequatur a iure qui nisi. Pariatur aspernatur suscipit, quasi tempore labore ullam natus dolorum, nulla ab eveniet, dolorem tenetur distinctio nesciunt quae totam! Minima omnis rerum illum consequatur, accusamus laborum excepturi sit sint! Mollitia sit impedit maxime! Ea est ipsam inventore aut et adipisci dolorem dignissimos numquam explicabo earum a debitis laboriosam similique deserunt possimus, excepturi labore quisquam rem dolore voluptate autem tenetur non maxime reiciendis. Similique eveniet suscipit eum velit impedit, eaque quisquam aspernatur sequi minima eius? Temporibus laudantium voluptatem dicta?</p> <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus aliquid eaque iusto inventore quasi nulla cum praesentium a sint recusandae maxime debitis harum similique sunt laborum reiciendis unde vero officia totam beatae, exercitationem voluptatibus! Natus facilis qui vero laborum voluptatibus iusto tempora nobis omnis labore deleniti ipsa corporis esse atque quibusdam delectus, eius, doloribus fuga eum reprehenderit repellat? Odit, nam. Id, quasi unde excepturi odio aliquid dolor reprehenderit consequatur a iure qui nisi.</p>'
        ]);

        Category::create([
            'name' => 'Romance',
            'slugs' => 'romance']);

        Category::create([
            'name' => 'Comedy',
            'slugs' => 'comedy']);

        Category::create([
            'name' => 'Fiction',
            'slugs' => 'fiction']);

        Category::create([
            'name' => 'Fantasy',
            'slugs' => 'fantasy']);

        Category::create([
            'name' => 'Sci-fi',
            'slugs' => 'scifi']);

        Category::create([
            'name' => 'Mystery',
            'slugs' => 'mystery']);

        User::create([
            'name' => 'Bayu Darwanto',
            'username' => 'baydrwt',
            'email' => 'bayudarwanto@gmail.com',
            'password' => bcrypt('12345')
        ]);

        

    }
}
