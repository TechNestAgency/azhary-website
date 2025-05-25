<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Teacher;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $teachers = [
            [
                'name' => 'Sheikh Ahmed Hassan',
                'name_fr' => 'Cheikh Ahmed Hassan',
                'photo' => 'teachers/teacher1.jpg',
                'short_description' => 'Experienced Quran teacher with expertise in Tajweed and Qiraat.',
                'short_description_fr' => 'Enseignant expérimenté du Coran avec expertise en Tajweed et Qiraat.',
                'full_bio' => 'Sheikh Ahmed Hassan has been teaching Quran for over 15 years. He holds an Ijazah in Hafs an Asim and is certified in advanced Tajweed. He specializes in teaching children and beginners, making complex concepts easy to understand.',
                'full_bio_fr' => 'Cheikh Ahmed Hassan enseigne le Coran depuis plus de 15 ans. Il détient une Ijazah en Hafs an Asim et est certifié en Tajweed avancé. Il se spécialise dans l\'enseignement aux enfants et aux débutants, rendant les concepts complexes faciles à comprendre.',
                'languages' => '<h4>Languages Spoken</h4>
                    <ul>
                        <li><strong>Arabic:</strong> Native Speaker</li>
                        <li><strong>English:</strong> Fluent</li>
                        <li><strong>Urdu:</strong> Intermediate</li>
                    </ul>',
                'languages_fr' => '<h4>Langues Parlées</h4>
                    <ul>
                        <li><strong>Arabe:</strong> Langue maternelle</li>
                        <li><strong>Anglais:</strong> Courant</li>
                        <li><strong>Ourdou:</strong> Intermédiaire</li>
                    </ul>',
                'certifications' => '<h4>Professional Certifications</h4>
                    <ul>
                        <li><strong>Ijazah in Hafs an Asim</strong> (2010)</li>
                        <li><strong>Advanced Tajweed Certification</strong> (2012)</li>
                        <li><strong>Qiraat Certification</strong> (2015)</li>
                    </ul>',
                'certifications_fr' => '<h4>Certifications Professionnelles</h4>
                    <ul>
                        <li><strong>Ijazah en Hafs an Asim</strong> (2010)</li>
                        <li><strong>Certification Avancée en Tajweed</strong> (2012)</li>
                        <li><strong>Certification en Qiraat</strong> (2015)</li>
                    </ul>',
                'teaching_methods' => 'Interactive learning through visual aids, audio recordings, and one-on-one sessions. Emphasis on proper pronunciation and understanding of rules.',
                'teaching_methods_fr' => 'Apprentissage interactif à travers des supports visuels, des enregistrements audio et des sessions individuelles. Accent mis sur la prononciation correcte et la compréhension des règles.',
                'materials_used' => 'Digital Quran, Tajweed books, Audio recordings, Interactive learning apps',
                'materials_used_fr' => 'Coran numérique, Livres de Tajweed, Enregistrements audio, Applications d\'apprentissage interactives',
                'rating' => 4.8,
                'total_reviews' => 45,
                'total_teaching_hours' => 5000,
                'years_experience' => 15,
                'is_active' => true
            ],
            [
                'name' => 'Ustadha Fatima Ali',
                'name_fr' => 'Ustadha Fatima Ali',
                'photo' => 'teachers/teacher2.jpg',
                'short_description' => 'Specialized in teaching Quran to women and children with a gentle approach.',
                'short_description_fr' => 'Spécialisée dans l\'enseignement du Coran aux femmes et aux enfants avec une approche douce.',
                'full_bio' => 'Ustadha Fatima Ali has dedicated her life to teaching Quran to women and children. She has developed unique teaching methods that make learning engaging and effective. Her patience and understanding make her particularly popular among young learners.',
                'full_bio_fr' => 'Ustadha Fatima Ali a consacré sa vie à l\'enseignement du Coran aux femmes et aux enfants. Elle a développé des méthodes d\'enseignement uniques qui rendent l\'apprentissage engageant et efficace. Sa patience et sa compréhension la rendent particulièrement populaire auprès des jeunes apprenants.',
                'languages' => '<h4>Languages Spoken</h4>
                    <ul>
                        <li><strong>Arabic:</strong> Native Speaker</li>
                        <li><strong>English:</strong> Fluent</li>
                        <li><strong>French:</strong> Intermediate</li>
                    </ul>',
                'languages_fr' => '<h4>Langues Parlées</h4>
                    <ul>
                        <li><strong>Arabe:</strong> Langue maternelle</li>
                        <li><strong>Anglais:</strong> Courant</li>
                        <li><strong>Français:</strong> Intermédiaire</li>
                    </ul>',
                'certifications' => '<h4>Professional Certifications</h4>
                    <ul>
                        <li><strong>Islamic Studies Degree</strong> (2015)</li>
                        <li><strong>Child Education Certification</strong> (2016)</li>
                        <li><strong>Tajweed Mastery</strong> (2018)</li>
                    </ul>',
                'certifications_fr' => '<h4>Certifications Professionnelles</h4>
                    <ul>
                        <li><strong>Diplôme en Études Islamiques</strong> (2015)</li>
                        <li><strong>Certification en Éducation des Enfants</strong> (2016)</li>
                        <li><strong>Maîtrise du Tajweed</strong> (2018)</li>
                    </ul>',
                'teaching_methods' => 'Child-friendly approach with games and activities. Focus on building confidence and love for Quran.',
                'teaching_methods_fr' => 'Approche adaptée aux enfants avec des jeux et des activités. Accent mis sur le développement de la confiance et l\'amour du Coran.',
                'materials_used' => 'Educational games, Picture books, Digital resources, Custom worksheets',
                'materials_used_fr' => 'Jeux éducatifs, Livres illustrés, Ressources numériques, Feuilles de travail personnalisées',
                'rating' => 4.9,
                'total_reviews' => 38,
                'total_teaching_hours' => 3500,
                'years_experience' => 8,
                'is_active' => true
            ],
            [
                'name' => 'Sheikh Mohammed Ibrahim',
                'name_fr' => 'Cheikh Mohammed Ibrahim',
                'photo' => 'teachers/teacher3.jpg',
                'short_description' => 'Expert in advanced Quranic studies and Islamic sciences.',
                'short_description_fr' => 'Expert en études coraniques avancées et sciences islamiques.',
                'full_bio' => 'Sheikh Mohammed Ibrahim is a renowned scholar with expertise in advanced Quranic studies, Tafsir, and Islamic sciences. He has studied under prominent scholars and brings deep knowledge to his teaching.',
                'full_bio_fr' => 'Cheikh Mohammed Ibrahim est un érudit renommé avec une expertise en études coraniques avancées, Tafsir et sciences islamiques. Il a étudié auprès d\'éminents érudits et apporte une connaissance approfondie à son enseignement.',
                'languages' => '<h4>Languages Spoken</h4>
                    <ul>
                        <li><strong>Arabic:</strong> Native Speaker</li>
                        <li><strong>English:</strong> Fluent</li>
                        <li><strong>Turkish:</strong> Intermediate</li>
                    </ul>',
                'languages_fr' => '<h4>Langues Parlées</h4>
                    <ul>
                        <li><strong>Arabe:</strong> Langue maternelle</li>
                        <li><strong>Anglais:</strong> Courant</li>
                        <li><strong>Turc:</strong> Intermédiaire</li>
                    </ul>',
                'certifications' => '<h4>Professional Certifications</h4>
                    <ul>
                        <li><strong>PhD in Islamic Studies</strong> (2018)</li>
                        <li><strong>Advanced Tafsir Certification</strong> (2019)</li>
                        <li><strong>Islamic Jurisprudence</strong> (2020)</li>
                    </ul>',
                'certifications_fr' => '<h4>Certifications Professionnelles</h4>
                    <ul>
                        <li><strong>Doctorat en Études Islamiques</strong> (2018)</li>
                        <li><strong>Certification Avancée en Tafsir</strong> (2019)</li>
                        <li><strong>Jurisprudence Islamique</strong> (2020)</li>
                    </ul>',
                'teaching_methods' => 'In-depth analysis of Quranic verses, historical context, and practical applications. Suitable for advanced students.',
                'teaching_methods_fr' => 'Analyse approfondie des versets coraniques, contexte historique et applications pratiques. Adapté aux étudiants avancés.',
                'materials_used' => 'Classical Tafsir books, Research papers, Historical documents, Digital resources',
                'materials_used_fr' => 'Livres classiques de Tafsir, Articles de recherche, Documents historiques, Ressources numériques',
                'rating' => 4.7,
                'total_reviews' => 52,
                'total_teaching_hours' => 6000,
                'years_experience' => 12,
                'is_active' => true
            ]
        ];

        foreach ($teachers as $teacher) {
            Teacher::create($teacher);
        }
    }
}
