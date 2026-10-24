<?php

namespace Database\Seeders;

use App\Models\BlogPost;
use Illuminate\Database\Seeder;

class BlogPostSeeder extends Seeder
{
    public function run(): void
    {
        $posts = [
            [
                'slug' => '7-spectrum-led-therapy-routine',
                'title' => 'The Science of 7-Spectrum LED Light Therapy for Cellular Rejuvenation',
                'category' => 'Beauty Tech',
                'read_time' => '6 min read',
                'published_at' => '2026-10-20',
                'image' => 'https://images.unsplash.com/photo-1598440947619-2c35fc9aa908?auto=format&fit=crop&q=80&w=1000',
                'author' => 'Dr. Aliza Thorne',
                'author_role' => 'Chief Dermatological Researcher',
                'author_avatar' => 'Dr',
                'likes' => 342,
                'snippet' => 'Explore how NASA-originated photon wavelength technology penetrates dermal layers to stimulate collagen synthesis, eliminate acne-causing bacteria, and reverse oxidative skin stress.',
                'content' => <<<'HTML'
<h3 class="text-xl font-bold text-beautage-purple font-serif">Understanding Photon Wavelengths</h3>
<p class="text-sm text-slate-600 leading-relaxed">
    Light Emitting Diode (LED) therapy was originally developed by NASA for plant growth experiments in space and later found to have profound applications in human wound healing. At Beautage, our Lumina Pro mask utilizes 7 distinct spectrums ranging from 415nm (blue light for active blemishes) to 630nm (red light for fibroblast proliferation and collagen production).
</p>
<h3 class="text-xl font-bold text-beautage-purple font-serif mt-4">Clinical Efficacy & Results</h3>
<p class="text-sm text-slate-600 leading-relaxed">
    Clinical trials conducted over 12 weeks demonstrated a 78% reduction in fine line depth and a remarkable 91% improvement in skin barrier hydration when paired with our Botanical Youth Renewal Serum. Consistent 15-minute sessions three times weekly activate cellular mitochondria for long-lasting luminosity.
</p>
HTML,
                'is_featured' => true,
            ],
            [
                'slug' => 'botanical-face-serums-guide',
                'title' => 'The Ultimate Guide to Botanical Face Serums & Hyaluronic Acid',
                'category' => 'Skincare Secrets',
                'read_time' => '4 min read',
                'published_at' => '2026-10-18',
                'image' => 'https://images.unsplash.com/photo-1620916566398-39f1143ab7be?auto=format&fit=crop&q=80&w=800',
                'author' => 'Sarah Jenkins',
                'author_role' => 'Senior Aesthetician',
                'author_avatar' => 'SJ',
                'likes' => 189,
                'snippet' => 'Why multi-molecular hyaluronic acid combined with rose stem cells creates an impenetrable moisture lock for all skin types.',
                'content' => <<<'HTML'
<h3 class="text-xl font-bold text-beautage-purple font-serif">The Molecule Size Matters</h3>
<p class="text-sm text-slate-600 leading-relaxed">
    Standard hyaluronic acid often sits on the skin surface. Beautage's Botanical Youth Serum features triple-molecular weight HA, ensuring deep dermal penetration as well as surface moisture binding.
</p>
HTML,
            ],
            [
                'slug' => 'celebrity-champi-routine',
                'title' => "Celebrity Champi Routine: Dananeer Mobeen's Secret for Lustrous Hair",
                'category' => 'Celebrity Routines',
                'read_time' => '5 min read',
                'published_at' => '2026-10-15',
                'image' => 'https://images.unsplash.com/photo-1535585209827-a15fcdbc4c2d?auto=format&fit=crop&q=80&w=800',
                'author' => 'Fahad Sheikh',
                'author_role' => 'Celebrity Grooming Editor',
                'author_avatar' => 'FS',
                'likes' => 275,
                'snippet' => 'How traditional scalp massage with rosemary and argan botanical oil transforms dry, heat-damaged locks into glossy masterpieces.',
                'content' => <<<'HTML'
<h3 class="text-xl font-bold text-beautage-purple font-serif">The Power of Scalp Stimulation</h3>
<p class="text-sm text-slate-600 leading-relaxed">
    Dananeer Mobeen swears by the traditional South Asian Champi ritual using cold-pressed rosemary oils. Massaging the scalp for 10 minutes prior to washing stimulates microcirculation and promotes robust hair growth.
</p>
HTML,
            ],
            [
                'slug' => 'microcurrent-vs-cryo-rollers',
                'title' => 'Microcurrent vs. Cryo Rollers: Which Facial Tool Is Right For You?',
                'category' => 'Beauty Tech',
                'read_time' => '5 min read',
                'published_at' => '2026-10-12',
                'image' => 'https://images.unsplash.com/photo-1522337360788-8b13dee7a37e?auto=format&fit=crop&q=80&w=800',
                'author' => 'Dr. Aliza Thorne',
                'author_role' => 'Chief Dermatological Researcher',
                'author_avatar' => 'Dr',
                'likes' => 156,
                'snippet' => 'Comparing low-level electrical toning against thermal cryotherapy for facial contouring, depuffing, and lymphatic drainage.',
                'content' => <<<'HTML'
<h3 class="text-xl font-bold text-beautage-purple font-serif">Electrical Muscle Stimulation (EMS)</h3>
<p class="text-sm text-slate-600 leading-relaxed">
    Microcurrent wands send gentle electrical currents mirroring the body's natural ionic flow, training facial muscles to stay lifted. Cryo rollers, on the other hand, constrict blood vessels instantly to flush toxins and eliminate morning puffiness.
</p>
HTML,
            ],
            [
                'slug' => 'aromatherapy-spa-rituals',
                'title' => 'Aromatherapy & Spa Rituals: Creating a Sanctuary at Home',
                'category' => 'Hair Care & Wellness',
                'read_time' => '4 min read',
                'published_at' => '2026-10-08',
                'image' => 'https://images.unsplash.com/photo-1540555700478-4be289fbecef?auto=format&fit=crop&q=80&w=800',
                'author' => 'Elena Rostova',
                'author_role' => 'Wellness Director',
                'author_avatar' => 'ER',
                'likes' => 210,
                'snippet' => 'Infusing organic essential oils and botanical bath salts for ultimate stress relief and mental rejuvenation.',
                'content' => <<<'HTML'
<h3 class="text-xl font-bold text-beautage-purple font-serif">The Olfactory Connection to Calm</h3>
<p class="text-sm text-slate-600 leading-relaxed">
    Scent is the only sensory input that bypasses the thalamus and goes straight to the limbic system. Using organic lavender and white peony diffusers transforms any bathroom into a 5-star spa suite.
</p>
HTML,
            ],
            [
                'slug' => 'saboor-aly-ubtan-glow',
                'title' => "Saboor Aly's Glowing Skin Secret: Organic Ubtan & Glow Masks",
                'category' => 'Celebrity Routines',
                'read_time' => '3 min read',
                'published_at' => '2026-10-04',
                'image' => 'https://images.unsplash.com/photo-1608248597359-f5383a886f49?auto=format&fit=crop&q=80&w=800',
                'author' => 'Sarah Jenkins',
                'author_role' => 'Senior Aesthetician',
                'author_avatar' => 'SJ',
                'likes' => 312,
                'snippet' => 'Combining turmeric, sandalwood, and saffron in modern skincare formats for immediate radiant luminosity.',
                'content' => <<<'HTML'
<h3 class="text-xl font-bold text-beautage-purple font-serif">Modernizing Ancient Ubtan Traditions</h3>
<p class="text-sm text-slate-600 leading-relaxed">
    Saboor Aly relies on gentle turmeric and saffron-infused clay masks to brighten hyperpigmentation without irritating sensitive skin.
</p>
HTML,
            ],
        ];

        foreach ($posts as $post) {
            BlogPost::updateOrCreate(['slug' => $post['slug']], $post);
        }
    }
}
