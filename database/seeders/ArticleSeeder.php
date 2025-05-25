<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ArticleSeeder extends Seeder
{
    public function run(): void
    {
        $articles = [
            [
                'title' => [
                    'en' => 'The Importance of Learning Arabic in the Modern World',
                    'fr' => 'L\'importance d\'apprendre l\'arabe dans le monde moderne'
                ],
                'content' => [
                    'en' => '<h2>Why Learn Arabic?</h2>
                    <p>Arabic is one of the most widely spoken languages in the world, with over 420 million speakers. Learning Arabic opens up opportunities for:</p>
                    <ul>
                        <li>Business and career advancement in the Middle East and North Africa</li>
                        <li>Understanding Islamic culture and history</li>
                        <li>Accessing rich literature and poetry</li>
                        <li>Building bridges between cultures</li>
                    </ul>
                    <h3>Career Opportunities</h3>
                    <p>With the growing importance of the Middle East in global affairs, Arabic speakers are in high demand in various fields including:</p>
                    <ul>
                        <li>International business</li>
                        <li>Diplomacy</li>
                        <li>Journalism</li>
                        <li>Education</li>
                        <li>Humanitarian work</li>
                    </ul>
                    <h3>Cultural Understanding</h3>
                    <p>Learning Arabic provides deep insights into one of the world\'s oldest and richest cultures. It helps in understanding:</p>
                    <ul>
                        <li>Islamic traditions and practices</li>
                        <li>Middle Eastern history</li>
                        <li>Arabic literature and poetry</li>
                        <li>Social customs and etiquette</li>
                    </ul>',
                    'fr' => '<h2>Pourquoi apprendre l\'arabe ?</h2>
                    <p>L\'arabe est l\'une des langues les plus parlées au monde, avec plus de 420 millions de locuteurs. Apprendre l\'arabe ouvre des opportunités pour :</p>
                    <ul>
                        <li>Le développement des affaires et de la carrière au Moyen-Orient et en Afrique du Nord</li>
                        <li>La compréhension de la culture et de l\'histoire islamiques</li>
                        <li>L\'accès à une riche littérature et poésie</li>
                        <li>La construction de ponts entre les cultures</li>
                    </ul>
                    <h3>Opportunités de carrière</h3>
                    <p>Avec l\'importance croissante du Moyen-Orient dans les affaires mondiales, les arabophones sont très demandés dans divers domaines, notamment :</p>
                    <ul>
                        <li>Les affaires internationales</li>
                        <li>La diplomatie</li>
                        <li>Le journalisme</li>
                        <li>L\'éducation</li>
                        <li>Le travail humanitaire</li>
                    </ul>
                    <h3>Compréhension culturelle</h3>
                    <p>L\'apprentissage de l\'arabe offre un aperçu approfondi de l\'une des cultures les plus anciennes et les plus riches du monde. Il aide à comprendre :</p>
                    <ul>
                        <li>Les traditions et pratiques islamiques</li>
                        <li>L\'histoire du Moyen-Orient</li>
                        <li>La littérature et la poésie arabes</li>
                        <li>Les coutumes et l\'étiquette sociale</li>
                    </ul>'
                ],
                'meta_description' => [
                    'en' => 'Discover why learning Arabic is crucial in today\'s globalized world. Explore career opportunities, cultural understanding, and the benefits of Arabic language proficiency.',
                    'fr' => 'Découvrez pourquoi l\'apprentissage de l\'arabe est crucial dans le monde globalisé d\'aujourd\'hui. Explorez les opportunités de carrière, la compréhension culturelle et les avantages de la maîtrise de la langue arabe.'
                ],
                'meta_keywords' => [
                    'en' => 'Arabic language, learning Arabic, career opportunities, cultural understanding, Middle East, Islamic culture',
                    'fr' => 'langue arabe, apprendre l\'arabe, opportunités de carrière, compréhension culturelle, Moyen-Orient, culture islamique'
                ],
                'status' => true
            ],
            [
                'title' => [
                    'en' => 'Effective Methods for Learning Arabic Grammar',
                    'fr' => 'Méthodes efficaces pour apprendre la grammaire arabe'
                ],
                'content' => [
                    'en' => '<h2>Understanding Arabic Grammar</h2>
                    <p>Arabic grammar can seem complex at first, but with the right approach, it becomes manageable and even enjoyable. Here are some effective methods:</p>
                    <h3>1. Start with the Basics</h3>
                    <ul>
                        <li>Learn the Arabic alphabet thoroughly</li>
                        <li>Understand the root system</li>
                        <li>Master basic sentence structure</li>
                        <li>Practice with simple sentences</li>
                    </ul>
                    <h3>2. Focus on Patterns</h3>
                    <p>Arabic uses patterns (أوزان) that help in understanding word formation:</p>
                    <ul>
                        <li>Learn common verb patterns</li>
                        <li>Understand noun patterns</li>
                        <li>Practice pattern recognition</li>
                        <li>Apply patterns in writing</li>
                    </ul>
                    <h3>3. Practical Application</h3>
                    <p>Regular practice is essential for mastering Arabic grammar:</p>
                    <ul>
                        <li>Daily writing exercises</li>
                        <li>Speaking practice with native speakers</li>
                        <li>Reading Arabic texts</li>
                        <li>Listening to Arabic content</li>
                    </ul>',
                    'fr' => '<h2>Comprendre la grammaire arabe</h2>
                    <p>La grammaire arabe peut sembler complexe au début, mais avec la bonne approche, elle devient gérable et même agréable. Voici quelques méthodes efficaces :</p>
                    <h3>1. Commencer par les bases</h3>
                    <ul>
                        <li>Apprendre l\'alphabet arabe en profondeur</li>
                        <li>Comprendre le système de racines</li>
                        <li>Maîtriser la structure de base des phrases</li>
                        <li>S\'exercer avec des phrases simples</li>
                    </ul>
                    <h3>2. Se concentrer sur les modèles</h3>
                    <p>L\'arabe utilise des modèles (أوزان) qui aident à comprendre la formation des mots :</p>
                    <ul>
                        <li>Apprendre les modèles de verbes courants</li>
                        <li>Comprendre les modèles de noms</li>
                        <li>S\'exercer à la reconnaissance des modèles</li>
                        <li>Appliquer les modèles dans l\'écriture</li>
                    </ul>
                    <h3>3. Application pratique</h3>
                    <p>Une pratique régulière est essentielle pour maîtriser la grammaire arabe :</p>
                    <ul>
                        <li>Exercices d\'écriture quotidiens</li>
                        <li>Pratique de la parole avec des locuteurs natifs</li>
                        <li>Lecture de textes arabes</li>
                        <li>Écoute de contenu arabe</li>
                    </ul>'
                ],
                'meta_description' => [
                    'en' => 'Learn effective methods for mastering Arabic grammar. Discover practical approaches, pattern recognition, and daily practice techniques for better Arabic language skills.',
                    'fr' => 'Apprenez des méthodes efficaces pour maîtriser la grammaire arabe. Découvrez des approches pratiques, la reconnaissance des modèles et des techniques d\'exercice quotidien pour de meilleures compétences en arabe.'
                ],
                'meta_keywords' => [
                    'en' => 'Arabic grammar, language learning, Arabic patterns, verb conjugation, Arabic practice',
                    'fr' => 'grammaire arabe, apprentissage des langues, modèles arabes, conjugaison des verbes, pratique de l\'arabe'
                ],
                'status' => true
            ],
            [
                'title' => [
                    'en' => 'The Role of Technology in Arabic Language Learning',
                    'fr' => 'Le rôle de la technologie dans l\'apprentissage de la langue arabe'
                ],
                'content' => [
                    'en' => '<h2>Modern Tools for Learning Arabic</h2>
                    <p>Technology has revolutionized the way we learn languages, and Arabic is no exception. Here\'s how modern tools can enhance your Arabic learning journey:</p>
                    <h3>1. Language Learning Apps</h3>
                    <ul>
                        <li>Interactive lessons and exercises</li>
                        <li>Progress tracking</li>
                        <li>Gamification elements</li>
                        <li>Instant feedback</li>
                    </ul>
                    <h3>2. Online Resources</h3>
                    <p>The internet offers numerous resources for Arabic learners:</p>
                    <ul>
                        <li>Video tutorials</li>
                        <li>Online dictionaries</li>
                        <li>Language exchange platforms</li>
                        <li>Arabic news websites</li>
                    </ul>
                    <h3>3. Virtual Classrooms</h3>
                    <p>Online learning platforms provide structured Arabic courses:</p>
                    <ul>
                        <li>Live sessions with native speakers</li>
                        <li>Recorded lessons</li>
                        <li>Interactive exercises</li>
                        <li>Progress assessment</li>
                    </ul>
                    <h3>4. Social Media and Communities</h3>
                    <p>Connect with other learners and native speakers:</p>
                    <ul>
                        <li>Language learning groups</li>
                        <li>Practice partners</li>
                        <li>Cultural exchange</li>
                        <li>Resource sharing</li>
                    </ul>',
                    'fr' => '<h2>Outils modernes pour apprendre l\'arabe</h2>
                    <p>La technologie a révolutionné la façon dont nous apprenons les langues, et l\'arabe ne fait pas exception. Voici comment les outils modernes peuvent améliorer votre parcours d\'apprentissage de l\'arabe :</p>
                    <h3>1. Applications d\'apprentissage des langues</h3>
                    <ul>
                        <li>Leçons et exercices interactifs</li>
                        <li>Suivi des progrès</li>
                        <li>Éléments de gamification</li>
                        <li>Retour instantané</li>
                    </ul>
                    <h3>2. Ressources en ligne</h3>
                    <p>Internet offre de nombreuses ressources pour les apprenants d\'arabe :</p>
                    <ul>
                        <li>Tutoriels vidéo</li>
                        <li>Dictionnaires en ligne</li>
                        <li>Plateformes d\'échange linguistique</li>
                        <li>Sites d\'actualités arabes</li>
                    </ul>
                    <h3>3. Classes virtuelles</h3>
                    <p>Les plateformes d\'apprentissage en ligne proposent des cours d\'arabe structurés :</p>
                    <ul>
                        <li>Sessions en direct avec des locuteurs natifs</li>
                        <li>Leçons enregistrées</li>
                        <li>Exercices interactifs</li>
                        <li>Évaluation des progrès</li>
                    </ul>
                    <h3>4. Réseaux sociaux et communautés</h3>
                    <p>Connectez-vous avec d\'autres apprenants et locuteurs natifs :</p>
                    <ul>
                        <li>Groupes d\'apprentissage des langues</li>
                        <li>Partenaires de pratique</li>
                        <li>Échange culturel</li>
                        <li>Partage de ressources</li>
                    </ul>'
                ],
                'meta_description' => [
                    'en' => 'Explore how technology enhances Arabic language learning. Discover modern tools, apps, online resources, and virtual classrooms for effective Arabic language acquisition.',
                    'fr' => 'Découvrez comment la technologie améliore l\'apprentissage de la langue arabe. Explorez les outils modernes, les applications, les ressources en ligne et les classes virtuelles pour une acquisition efficace de la langue arabe.'
                ],
                'meta_keywords' => [
                    'en' => 'Arabic learning technology, language apps, online Arabic courses, virtual classrooms, language learning tools',
                    'fr' => 'technologie d\'apprentissage de l\'arabe, applications linguistiques, cours d\'arabe en ligne, classes virtuelles, outils d\'apprentissage des langues'
                ],
                'status' => true
            ]
        ];

        foreach ($articles as $article) {
            $article['slug'] = Str::slug($article['title']['en']);
            Article::create($article);
        }
    }
} 