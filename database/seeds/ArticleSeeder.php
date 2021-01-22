<?php
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use App\Article;


class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Article::insert([
            [
                'article_title' => 'Shwe Zi Gong',
                'first_part' => '<h3>Heading</h3><p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sagittis tortor at massa luctus, nec molestie ligula posuere. Integer condimentum enim at risus tristique varius. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam erat volutpat. Cras non lorem at lacus consequat lobortis id quis felis. Pellentesque quis venenatis libero, sit amet blandit felis. Duis rutrum, magna vel interdum elementum, ligula felis aliquam mi, at tristique ligula arcu ac arcu. Fusce eu nisi sem. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc fermentum est non nulla tincidunt, ac ultrices lacus feugiat. Cras convallis elementum magna, eget blandit justo tempor quis. Maecenas sit amet mollis magna. Vivamus sed elit vitae elit dapibus porta in a tellus. Phasellus sollicitudin ornare nunc eget tincidunt.
                </p>',
                'second_part' => '<p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sagittis tortor at massa luctus, nec molestie ligula posuere. Integer condimentum enim at risus tristique varius. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam erat volutpat. Cras non lorem at lacus consequat lobortis id quis felis. Pellentesque quis venenatis libero, sit amet blandit felis. Duis rutrum, magna vel interdum elementum, ligula felis aliquam mi, at tristique ligula arcu ac arcu. Fusce eu nisi sem. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc fermentum est non nulla tincidunt, ac ultrices lacus feugiat. Cras convallis elementum magna, eget blandit justo tempor quis. Maecenas sit amet mollis magna. Vivamus sed elit vitae elit dapibus porta in a tellus. Phasellus sollicitudin ornare nunc eget tincidunt.
                </p>',
                'first_photo' => '600abc1636885_7.jpg',
                'second_photo' => '600abc1636885_7.jpg',
                'third_photo' => '600abc1636885_7.jpg',
                'background_photo' => '600abc1636885_7.jpg',
                'date' => Carbon::create('2000', '01', '01'),
                'popular' => '1',
                'local' => '0',
                'global' => '0',
                'environmental' => '0',
            ],
            [
                'article_title' => 'Shwe Zi Gong',
                'first_part' => '<h3>Heading</h3><p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sagittis tortor at massa luctus, nec molestie ligula posuere. Integer condimentum enim at risus tristique varius. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam erat volutpat. Cras non lorem at lacus consequat lobortis id quis felis. Pellentesque quis venenatis libero, sit amet blandit felis. Duis rutrum, magna vel interdum elementum, ligula felis aliquam mi, at tristique ligula arcu ac arcu. Fusce eu nisi sem. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc fermentum est non nulla tincidunt, ac ultrices lacus feugiat. Cras convallis elementum magna, eget blandit justo tempor quis. Maecenas sit amet mollis magna. Vivamus sed elit vitae elit dapibus porta in a tellus. Phasellus sollicitudin ornare nunc eget tincidunt.
                </p>',
                'second_part' => '<p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sagittis tortor at massa luctus, nec molestie ligula posuere. Integer condimentum enim at risus tristique varius. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam erat volutpat. Cras non lorem at lacus consequat lobortis id quis felis. Pellentesque quis venenatis libero, sit amet blandit felis. Duis rutrum, magna vel interdum elementum, ligula felis aliquam mi, at tristique ligula arcu ac arcu. Fusce eu nisi sem. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc fermentum est non nulla tincidunt, ac ultrices lacus feugiat. Cras convallis elementum magna, eget blandit justo tempor quis. Maecenas sit amet mollis magna. Vivamus sed elit vitae elit dapibus porta in a tellus. Phasellus sollicitudin ornare nunc eget tincidunt.
                </p>',
                'first_photo' => '600abc1636885_7.jpg',
                'second_photo' => '600abc1636885_7.jpg',
                'third_photo' => '600abc1636885_7.jpg',
                'background_photo' => '600abc1636885_7.jpg',
                'date' => Carbon::create('2000', '01', '01'),
                'popular' => '1',
                'local' => '1',
                'global' => '0',
                'environmental' => '0',
            ],[
                'article_title' => 'Shwe Zi Gong',
                'first_part' => '<h3>Heading</h3><p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sagittis tortor at massa luctus, nec molestie ligula posuere. Integer condimentum enim at risus tristique varius. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam erat volutpat. Cras non lorem at lacus consequat lobortis id quis felis. Pellentesque quis venenatis libero, sit amet blandit felis. Duis rutrum, magna vel interdum elementum, ligula felis aliquam mi, at tristique ligula arcu ac arcu. Fusce eu nisi sem. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc fermentum est non nulla tincidunt, ac ultrices lacus feugiat. Cras convallis elementum magna, eget blandit justo tempor quis. Maecenas sit amet mollis magna. Vivamus sed elit vitae elit dapibus porta in a tellus. Phasellus sollicitudin ornare nunc eget tincidunt.
                </p>',
                'second_part' => '<p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sagittis tortor at massa luctus, nec molestie ligula posuere. Integer condimentum enim at risus tristique varius. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam erat volutpat. Cras non lorem at lacus consequat lobortis id quis felis. Pellentesque quis venenatis libero, sit amet blandit felis. Duis rutrum, magna vel interdum elementum, ligula felis aliquam mi, at tristique ligula arcu ac arcu. Fusce eu nisi sem. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc fermentum est non nulla tincidunt, ac ultrices lacus feugiat. Cras convallis elementum magna, eget blandit justo tempor quis. Maecenas sit amet mollis magna. Vivamus sed elit vitae elit dapibus porta in a tellus. Phasellus sollicitudin ornare nunc eget tincidunt.
                </p>',
                'first_photo' => '600abc1636885_7.jpg',
                'second_photo' => '600abc1636885_7.jpg',
                'third_photo' => '600abc1636885_7.jpg',
                'background_photo' => '600abc1636885_7.jpg',
                'date' => Carbon::create('2000', '01', '01'),
                'popular' => '0',
                'local' => '0',
                'global' => '1',
                'environmental' => '0',
            ],[
                'article_title' => 'Shwe Zi Gong',
                'first_part' => '<h3>Heading</h3><p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sagittis tortor at massa luctus, nec molestie ligula posuere. Integer condimentum enim at risus tristique varius. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam erat volutpat. Cras non lorem at lacus consequat lobortis id quis felis. Pellentesque quis venenatis libero, sit amet blandit felis. Duis rutrum, magna vel interdum elementum, ligula felis aliquam mi, at tristique ligula arcu ac arcu. Fusce eu nisi sem. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc fermentum est non nulla tincidunt, ac ultrices lacus feugiat. Cras convallis elementum magna, eget blandit justo tempor quis. Maecenas sit amet mollis magna. Vivamus sed elit vitae elit dapibus porta in a tellus. Phasellus sollicitudin ornare nunc eget tincidunt.
                </p>',
                'second_part' => '<p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sagittis tortor at massa luctus, nec molestie ligula posuere. Integer condimentum enim at risus tristique varius. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam erat volutpat. Cras non lorem at lacus consequat lobortis id quis felis. Pellentesque quis venenatis libero, sit amet blandit felis. Duis rutrum, magna vel interdum elementum, ligula felis aliquam mi, at tristique ligula arcu ac arcu. Fusce eu nisi sem. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc fermentum est non nulla tincidunt, ac ultrices lacus feugiat. Cras convallis elementum magna, eget blandit justo tempor quis. Maecenas sit amet mollis magna. Vivamus sed elit vitae elit dapibus porta in a tellus. Phasellus sollicitudin ornare nunc eget tincidunt.
                </p>',
                'first_photo' => '600abc1636885_7.jpg',
                'second_photo' => '600abc1636885_7.jpg',
                'third_photo' => '600abc1636885_7.jpg',
                'background_photo' => '600abc1636885_7.jpg',
                'date' => Carbon::create('2000', '01', '01'),
                'popular' => '1',
                'local' => '0',
                'global' => '0',
                'environmental' => '1',
            ],[
                'article_title' => 'Shwe Zi Gong',
                'first_part' => '<h3>Heading</h3><p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sagittis tortor at massa luctus, nec molestie ligula posuere. Integer condimentum enim at risus tristique varius. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam erat volutpat. Cras non lorem at lacus consequat lobortis id quis felis. Pellentesque quis venenatis libero, sit amet blandit felis. Duis rutrum, magna vel interdum elementum, ligula felis aliquam mi, at tristique ligula arcu ac arcu. Fusce eu nisi sem. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc fermentum est non nulla tincidunt, ac ultrices lacus feugiat. Cras convallis elementum magna, eget blandit justo tempor quis. Maecenas sit amet mollis magna. Vivamus sed elit vitae elit dapibus porta in a tellus. Phasellus sollicitudin ornare nunc eget tincidunt.
                </p>',
                'second_part' => '<p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sagittis tortor at massa luctus, nec molestie ligula posuere. Integer condimentum enim at risus tristique varius. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam erat volutpat. Cras non lorem at lacus consequat lobortis id quis felis. Pellentesque quis venenatis libero, sit amet blandit felis. Duis rutrum, magna vel interdum elementum, ligula felis aliquam mi, at tristique ligula arcu ac arcu. Fusce eu nisi sem. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc fermentum est non nulla tincidunt, ac ultrices lacus feugiat. Cras convallis elementum magna, eget blandit justo tempor quis. Maecenas sit amet mollis magna. Vivamus sed elit vitae elit dapibus porta in a tellus. Phasellus sollicitudin ornare nunc eget tincidunt.
                </p>',
                'first_photo' => '600abc1636885_7.jpg',
                'second_photo' => '600abc1636885_7.jpg',
                'third_photo' => '600abc1636885_7.jpg',
                'background_photo' => '600abc1636885_7.jpg',
                'date' => Carbon::create('2000', '01', '01'),
                'popular' => '1',
                'local' => '0',
                'global' => '1',
                'environmental' => '0',
            ],
        ]);
    }
}
