<?php

namespace Database\Seeders;

use App\Models\AboutSection;
use App\Models\HeroSection;
use App\Models\Portfolio;
use App\Models\Post;
use App\Models\PostCategory;
use App\Models\SeoSetting;
use App\Models\Service;
use App\Models\SiteSettings;
use App\Models\Testimonial;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Admin User
        $admin = User::firstOrCreate(
            ['email' => 'admin@sm-embellishment.com'],
            [
                'name' => 'Admin Artisan',
                'password' => Hash::make('password'),
            ]
        );

        // 2. Hero Section
        HeroSection::firstOrCreate(
            ['heading' => 'Crafting Beauty in Every Detail'],
            [
                'subheading' => 'Premium Embellishment Services',
                'description' => 'We specialize in exquisite embellishment work — from hand-sewn beads and sequins to intricate thread embroidery. Elevating fashion, one stitch at a time.',
                'primary_button_text' => 'View Our Work',
                'primary_button_url' => '/portfolio',
                'secondary_button_text' => 'Get a Quote',
                'secondary_button_url' => '/contact',
                'is_active' => true,
                'sort_order' => 1,
            ]
        );

        // 3. About Section
        AboutSection::firstOrCreate(
            ['title' => 'Dedicated to the Art of Fine Embellishment'],
            [
                'content' => "Founded with an obsession for artisanal finesse, SM Embellishment partners with leading fashion designers, couture ateliers, and international brands to produce hand-crafted surface decorations that leave a lasting mark.\n\nEvery sequin, bead, crystal, and thread is placed with meticulous consideration of weight, movement, and light reflection. We blend time-honored artisanal techniques with modern design aesthetics to bring any garment concept to life.",
                'is_active' => true,
            ]
        );

        // 4. Services
        $services = [
            [
                'title' => 'Hand-Sewn Bead Work',
                'slug' => 'hand-sewn-bead-work',
                'short_description' => 'Intricate glass, seed, and tube beading for bridal and red carpet couture.',
                'description' => 'Our master bead artisans specialize in dense bugle beading, micro-seed bead cascades, and structured geometric motifs designed to shimmer under lighting with effortless grace.',
                'price_from' => 350.00,
                'price_label' => 'From',
                'is_featured' => true,
                'is_active' => true,
                'sort_order' => 1,
            ],
            [
                'title' => 'Luminescent Sequin Design',
                'slug' => 'luminescent-sequin-design',
                'short_description' => 'Layered paillettes, holographic scales, and directional sequin patterns.',
                'description' => 'High-impact directional sequin motifs that adapt to garment motion. Perfect for evening gowns, performance stages, and editorial capsules.',
                'price_from' => 420.00,
                'price_label' => 'From',
                'is_featured' => true,
                'is_active' => true,
                'sort_order' => 2,
            ],
            [
                'title' => 'Silk Thread Embroidery',
                'slug' => 'silk-thread-embroidery',
                'short_description' => 'Hand-guided and tambour thread embroidery using genuine spun silk threads.',
                'description' => 'Delicate shading, botanical motifs, and heritage monogramming executed with ultra-fine silk threads for timeless elegance.',
                'price_from' => 280.00,
                'price_label' => 'From',
                'is_featured' => true,
                'is_active' => true,
                'sort_order' => 3,
            ],
            [
                'title' => 'Austrian Crystal Setting',
                'slug' => 'austrian-crystal-setting',
                'short_description' => 'Claw-set and hotfix Austrian cut crystals for maximum radiant brilliance.',
                'description' => 'Precision crystal placement in bespoke prong settings, creating cascading shimmer without weighing down delicate textiles.',
                'price_from' => 500.00,
                'price_label' => 'From',
                'is_featured' => true,
                'is_active' => true,
                'sort_order' => 4,
            ],
            [
                'title' => '3D Floral Appliqué',
                'slug' => '3d-floral-applique',
                'short_description' => 'Sculpted organza, tulle petals, and multi-dimensional blossom structures.',
                'description' => 'Organza and chiffon petals hand-curled and embellished with pearl centers, giving gowns a sculptural botanical depth.',
                'price_from' => 450.00,
                'price_label' => 'From',
                'is_featured' => true,
                'is_active' => true,
                'sort_order' => 5,
            ],
            [
                'title' => 'Bullion & Metallic Goldwork',
                'slug' => 'bullion-metallic-goldwork',
                'short_description' => 'Military-inspired gold wire purl, rough sizer, and metallic plate work.',
                'description' => 'Centuries-old military and ecclesiastical bullion techniques modernized for statement jackets, accessories, and haute couture.',
                'price_from' => 600.00,
                'price_label' => 'From',
                'is_featured' => true,
                'is_active' => true,
                'sort_order' => 6,
            ],
        ];

        foreach ($services as $srv) {
            Service::updateOrCreate(['slug' => $srv['slug']], $srv);
        }

        // 5. Portfolios
        $portfolios = [
            [
                'title' => 'Midnight Constellation Gown',
                'slug' => 'midnight-constellation-gown',
                'client_name' => 'Maison Étoile Paris',
                'category' => 'Couture',
                'material' => 'Swarovski crystals, micro silver beads, navy silk velvet',
                'completion_date' => 'Autumn 2026',
                'description' => 'Over 120 hours of hand-beaded celestial cartography across a structured navy velvet silhouette.',
                'thumbnail' => 'portfolios/gown.jpg',
                'is_featured' => true,
                'is_active' => true,
                'sort_order' => 1,
            ],
            [
                'title' => 'Golden Flora Runway Cape',
                'slug' => 'golden-flora-runway-cape',
                'client_name' => 'Atelier V',
                'category' => 'Sequins',
                'material' => 'Matte gold paillettes, metallic thread, sheer organza',
                'completion_date' => 'Summer 2026',
                'description' => 'Cascading graduated gold sequins creating an illusion of liquid gold movement on the runway.',
                'thumbnail' => 'portfolios/cape.jpg',
                'is_featured' => true,
                'is_active' => true,
                'sort_order' => 2,
            ],
            [
                'title' => 'Ivory Blossom Bridal Bodice',
                'slug' => 'ivory-blossom-bridal-bodice',
                'client_name' => 'Couture Bridal NY',
                'category' => 'Beadwork',
                'material' => 'Freshwater pearls, silver seed beads, French lace',
                'completion_date' => 'Spring 2026',
                'description' => 'Dense botanical pearl embroidery framing a sweetheart neckline with ethereal delicacy.',
                'thumbnail' => 'portfolios/bodice.jpg',
                'is_featured' => true,
                'is_active' => true,
                'sort_order' => 3,
            ],
            [
                'title' => 'Baroque Bullion Velvet Blazer',
                'slug' => 'baroque-bullion-velvet-blazer',
                'client_name' => 'Sovereign Menswear',
                'category' => 'Embroidery',
                'material' => 'Gold bullion wire, rough purl, burgundy wool',
                'completion_date' => 'Winter 2025',
                'description' => 'Heavy goldwork epaulettes and lapel crests crafted with authentic bullion stitching techniques.',
                'thumbnail' => 'portfolios/blazer.jpg',
                'is_featured' => true,
                'is_active' => true,
                'sort_order' => 4,
            ],
        ];

        foreach ($portfolios as $port) {
            Portfolio::updateOrCreate(['slug' => $port['slug']], $port);
        }

        // 6. Testimonials
        $testimonials = [
            [
                'client_name' => 'Sarah Delacroix',
                'client_position' => 'Creative Director',
                'client_company' => 'Delacroix Couture Paris',
                'content' => 'The precision and speed of SM Embellishment saved our Paris Fashion Week runway. Their hand-beaded pieces were the undisputed highlight of our entire collection.',
                'rating' => 5,
                'is_featured' => true,
                'is_active' => true,
                'sort_order' => 1,
            ],
            [
                'client_name' => 'Marcus Thorne',
                'client_position' => 'Head of Design',
                'client_company' => 'Thorne Atelier London',
                'content' => 'Exceptional attention to grain, weight, and stitch durability. They understand couture standards better than anyone we have ever partnered with.',
                'rating' => 5,
                'is_featured' => true,
                'is_active' => true,
                'sort_order' => 2,
            ],
            [
                'client_name' => 'Elena Rostova',
                'client_position' => 'Bridal Designer',
                'client_company' => 'Elena Rostova Bridal',
                'content' => 'Our brides demand perfection. The 3D floral petals and pearl clusters from SM Embellishment consistently take our breath away.',
                'rating' => 5,
                'is_featured' => true,
                'is_active' => true,
                'sort_order' => 3,
            ],
        ];

        foreach ($testimonials as $test) {
            Testimonial::firstOrCreate(['client_name' => $test['client_name']], $test);
        }

        // 7. Post Categories & Posts
        $cat = PostCategory::firstOrCreate(
            ['name' => 'Couture Craftsmanship'],
            ['slug' => 'couture-craftsmanship', 'is_active' => true, 'sort_order' => 1]
        );

        Post::firstOrCreate(
            ['slug' => 'the-resurgence-of-metallic-bullion-work'],
            [
                'post_category_id' => $cat->id,
                'user_id' => $admin->id,
                'title' => 'The Resurgence of Metallic Bullion Work on Runway Fashion',
                'excerpt' => 'Discover how luxury ateliers are modernizing 18th-century goldwork embroidery for contemporary ready-to-wear.',
                'content' => "Goldwork embroidery has captivated royalty and fashion visionaries for centuries. Utilizing flexible bullion purl wires, master artisans bend and stitch metallic coils over felt padding to generate sculptural relief.\n\nIn modern runway collections, this heritage technique brings structured grandeur to contemporary blazers, capes, and accessories, merging historical nobility with cutting-edge streetwear silhouettes.",
                'tags' => ['Bullion', 'Embroidery', 'Runway', 'Trends'],
                'status' => 'published',
                'published_at' => now()->subDays(2),
                'is_featured' => true,
            ]
        );

        // 8. Site Settings
        SiteSettings::set('site_name', 'SM Embellishment', 'general');
        SiteSettings::set('contact_phone', '+855 12 345 678', 'contact');
        SiteSettings::set('contact_email', 'info@sm-embellishment.com', 'contact');
        SiteSettings::set('contact_address', 'Phnom Penh, Cambodia', 'contact');

        // 9. SEO Setting
        SeoSetting::firstOrCreate(
            ['page' => 'home'],
            [
                'meta_title' => 'SM Embellishment — Haute Couture & Bespoke Embroidery Studio',
                'meta_description' => 'Exquisite artisanal embellishment services: hand-sewn beadwork, sequins, crystals, and thread embroidery for runway, bridal, and luxury fashion.',
                'meta_keywords' => 'embellishment, beadwork, embroidery, sequins, couture, fashion studio',
            ]
        );
    }
}
