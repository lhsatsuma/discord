<?php

namespace Database\Seeders\Trivia;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TriviaEnUsCultureSeeder extends Seeder
{
    private const CATEGORY = ['id' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'created_by' => 'SYSTEM', 'short_description' => 'culture', 'description' => 'Culture'];

    private const QUESTIONS = [
        ['id' => 'aad66117-7d51-569c-8f9f-d92d44c1a152', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which Johannes Vermeer painting is often called the \'Mona Lisa of the North\'?', 'difficulty' => 1, 'weight' => 154, 'alternatives' => [
                    ['id' => '5a0bb140-3435-5289-9052-78dcd51e4d22', 'description' => 'The Starry Night', 'correct_answer' => false],
                    ['id' => '97b5ca1c-a797-5b1f-a247-a1570aa5a711', 'description' => 'Water Lilies', 'correct_answer' => false],
                    ['id' => '8ef98b57-129d-5a4e-b360-b5d44c5dc135', 'description' => 'The Persistence of Memory', 'correct_answer' => false],
                    ['id' => 'eed1b85a-2712-5c19-8b5a-607669a84f62', 'description' => 'The Scream', 'correct_answer' => false],
                    ['id' => 'c621d37e-5c45-506c-a56f-54d8687688fe', 'description' => 'Girl with a Pearl Earring', 'correct_answer' => true]
                ]],
        ['id' => '4cfb7a54-2fd9-5eee-b1f8-5adbe652b1b8', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which Pablo Picasso painting depicts the bombing of a Basque town during the Spanish Civil War?', 'difficulty' => 1, 'weight' => 150, 'alternatives' => [
                    ['id' => '4e90b8b6-d94f-57a2-838e-18c3880c93b7', 'description' => 'The Persistence of Memory', 'correct_answer' => false],
                    ['id' => '9a704801-f434-5884-9ecc-5bd863ec31a1', 'description' => 'Mona Lisa', 'correct_answer' => false],
                    ['id' => '4227e670-faaa-5739-9c16-c3e46e0ba5a5', 'description' => 'Girl with a Pearl Earring', 'correct_answer' => false],
                    ['id' => '570b9784-b518-5523-9b8d-d3c6c2ef701a', 'description' => 'The Birth of Venus', 'correct_answer' => false],
                    ['id' => 'fce89435-91da-506c-b586-f4a965f753ec', 'description' => 'Guernica', 'correct_answer' => true]
                ]],
        ['id' => 'c1e3237c-18c4-53db-b8eb-876f7faf4f72', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which Edvard Munch artwork shows a figure holding its face beneath a dramatic sky?', 'difficulty' => 1, 'weight' => 191, 'alternatives' => [
                    ['id' => '8382b230-e172-53d8-8bc6-7c6433fda76d', 'description' => 'The Birth of Venus', 'correct_answer' => false],
                    ['id' => '9e3b2c35-7dc2-529d-9899-2e4ea2da6187', 'description' => 'The Starry Night', 'correct_answer' => false],
                    ['id' => '6d54c8d2-4354-54ca-8af6-56b44857d7dd', 'description' => 'Girl with a Pearl Earring', 'correct_answer' => false],
                    ['id' => '1310e6cf-4fe7-5dfb-8775-03b2b9b138bc', 'description' => 'The Scream', 'correct_answer' => true],
                    ['id' => '0728f01d-8f12-5e05-a237-34753bdfff63', 'description' => 'Guernica', 'correct_answer' => false]
                ]],
        ['id' => 'd4b1b6c4-a03a-58a0-b518-2b9949ab8f56', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which Salvador Dalí painting features melting clocks?', 'difficulty' => 1, 'weight' => 155, 'alternatives' => [
                    ['id' => 'd0754f1e-1964-542b-8d1d-fabd44ccf099', 'description' => 'Mona Lisa', 'correct_answer' => false],
                    ['id' => '30cc9e11-3b7b-57ea-aff8-7787f1c77f49', 'description' => 'The Scream', 'correct_answer' => false],
                    ['id' => 'f3acc3e1-42d9-5a65-95ee-4cdd5670845f', 'description' => 'Water Lilies', 'correct_answer' => false],
                    ['id' => 'f63bfaa1-076c-5216-8545-171b5b7f838f', 'description' => 'The Last Supper', 'correct_answer' => false],
                    ['id' => 'bfc14595-683d-5853-9396-d111fd4e6a10', 'description' => 'The Persistence of Memory', 'correct_answer' => true]
                ]],
        ['id' => '5fc4fe17-b51a-5c0d-9699-3eeb496530f3', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which famous portrait by Leonardo da Vinci is displayed in the Louvre?', 'difficulty' => 1, 'weight' => 101, 'alternatives' => [
                    ['id' => '5eea13c3-35dd-508e-8663-41696d468027', 'description' => 'The Starry Night', 'correct_answer' => false],
                    ['id' => 'ed116753-2bab-5a1e-91f7-d989218c9999', 'description' => 'The Persistence of Memory', 'correct_answer' => false],
                    ['id' => 'da689d5d-0823-5b20-8e61-70f04d98b8bd', 'description' => 'The Night Watch', 'correct_answer' => false],
                    ['id' => '9626524c-a580-5540-841d-014a1d103132', 'description' => 'Girl with a Pearl Earring', 'correct_answer' => false],
                    ['id' => 'c310b206-5924-54ce-9ec7-868e36874a2d', 'description' => 'Mona Lisa', 'correct_answer' => true]
                ]],
        ['id' => 'fb2a1dcf-929e-53c0-b2d3-53060345b965', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which series of paintings by Claude Monet depicts his garden pond at Giverny?', 'difficulty' => 1, 'weight' => 162, 'alternatives' => [
                    ['id' => '90903798-d2ef-52e1-872e-818c5260601f', 'description' => 'The Last Supper', 'correct_answer' => false],
                    ['id' => 'e663da5b-cca8-5247-a4d5-5e428eaad430', 'description' => 'Mona Lisa', 'correct_answer' => false],
                    ['id' => '904d22ea-6863-5ce2-8928-2e65a3dcd314', 'description' => 'The Starry Night', 'correct_answer' => false],
                    ['id' => 'e1cea219-2d3a-5b16-a0ca-3ec7d9151b8c', 'description' => 'Water Lilies', 'correct_answer' => true],
                    ['id' => '97c5a3fc-ae79-5eda-a95c-428b35b52216', 'description' => 'Girl with a Pearl Earring', 'correct_answer' => false]
                ]],
        ['id' => '59b6fcd4-d2a1-5e81-8a52-d29dde57d102', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which Leonardo da Vinci mural depicts Jesus dining with his disciples?', 'difficulty' => 1, 'weight' => 170, 'alternatives' => [
                    ['id' => '4343c2ad-1d29-5111-8525-7b75f6637cbd', 'description' => 'Mona Lisa', 'correct_answer' => false],
                    ['id' => '18849bf4-c458-5f61-a676-8d5fa8d0305f', 'description' => 'The Birth of Venus', 'correct_answer' => false],
                    ['id' => 'd9336acb-717a-55db-9354-175b8d1bb4d9', 'description' => 'Girl with a Pearl Earring', 'correct_answer' => false],
                    ['id' => '09d48834-e0c1-5779-8f91-8f02290a3fe5', 'description' => 'The Last Supper', 'correct_answer' => true],
                    ['id' => '2258fd14-1c0b-58c5-8860-1704540c2c6b', 'description' => 'Guernica', 'correct_answer' => false]
                ]],
        ['id' => '919ff3c0-592a-52a3-a0cc-595984330c3b', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which Rembrandt painting portrays a company of civic guards?', 'difficulty' => 1, 'weight' => 111, 'alternatives' => [
                    ['id' => '02e6ca16-2417-5299-9c0f-923f6f7f66bd', 'description' => 'The Night Watch', 'correct_answer' => true],
                    ['id' => '16486983-25b8-5ede-90ba-c0fc96a32e79', 'description' => 'The Last Supper', 'correct_answer' => false],
                    ['id' => 'c84872cd-f594-5cb5-a0c0-8a53d3c8156d', 'description' => 'The Scream', 'correct_answer' => false],
                    ['id' => '95ff53d1-6039-5b94-bcc3-9a86d333fb30', 'description' => 'The Birth of Venus', 'correct_answer' => false],
                    ['id' => 'ee12d303-1c6b-5b44-b2ac-44d165cd49e4', 'description' => 'The Persistence of Memory', 'correct_answer' => false]
                ]],
        ['id' => '77e3cf24-76ef-5086-9bc0-5a049b41b168', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which Spanish performance tradition combines singing, guitar, and expressive dance?', 'difficulty' => 1, 'weight' => 200, 'alternatives' => [
                    ['id' => '27620481-0dbc-549e-80e7-7718a2beb51a', 'description' => 'Tap dance', 'correct_answer' => false],
                    ['id' => '02583796-f935-5839-819d-cd33bdbe7f72', 'description' => 'Bharatanatyam', 'correct_answer' => false],
                    ['id' => '756622d1-18b2-5f40-becb-c112c470b5c5', 'description' => 'Irish stepdance', 'correct_answer' => false],
                    ['id' => 'c8f3949e-531a-542c-acc8-cfd8f07265a1', 'description' => 'Salsa', 'correct_answer' => false],
                    ['id' => 'bd54b435-2249-547b-a5b8-9e698ec2f909', 'description' => 'Flamenco', 'correct_answer' => true]
                ]],
        ['id' => 'b4f640c4-83a6-5a40-8f03-6cb2a5a591c9', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which ballroom dance is traditionally performed in triple meter?', 'difficulty' => 1, 'weight' => 152, 'alternatives' => [
                    ['id' => 'fdaa272b-88b5-54da-ae4f-6b9bbc4a7e4f', 'description' => 'Bharatanatyam', 'correct_answer' => false],
                    ['id' => '3f77a64d-82c8-57b7-a05e-4f9026deaa01', 'description' => 'Waltz', 'correct_answer' => true],
                    ['id' => 'e5c628d7-29a2-50c1-aedf-8a18b7e2d58a', 'description' => 'Hip-hop dance', 'correct_answer' => false],
                    ['id' => 'd6761633-7683-5ff3-bc17-e37a5137e3eb', 'description' => 'Irish stepdance', 'correct_answer' => false],
                    ['id' => '7a48a6d5-41b6-5940-b3b9-12d607864031', 'description' => 'Flamenco', 'correct_answer' => false]
                ]],
        ['id' => 'c7b7a065-b327-5b7d-9ce3-222096f3e1e9', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which classical dance form is known for pointe work, turnout, and highly codified technique?', 'difficulty' => 1, 'weight' => 108, 'alternatives' => [
                    ['id' => '2fa048f5-04a0-5fb9-b590-c9746bc18a01', 'description' => 'Salsa', 'correct_answer' => false],
                    ['id' => 'fabbc270-d63d-593d-8009-0ff24ad7fc25', 'description' => 'Ballet', 'correct_answer' => true],
                    ['id' => '1f4258df-f81e-5d61-ad15-68e14409b816', 'description' => 'Tap dance', 'correct_answer' => false],
                    ['id' => '6f83c4d4-f80a-5b4e-865f-246843f13acd', 'description' => 'Irish stepdance', 'correct_answer' => false],
                    ['id' => '3bfa4bed-86d3-5684-af17-08a38f8debdf', 'description' => 'Tango', 'correct_answer' => false]
                ]],
        ['id' => 'd2083341-1623-5dd4-90bf-fa74216186ee', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which classical Indian dance form is known for intricate footwork and spins?', 'difficulty' => 1, 'weight' => 155, 'alternatives' => [
                    ['id' => 'f4de6e10-8a97-5f27-9e62-9c861ba44ce9', 'description' => 'Salsa', 'correct_answer' => false],
                    ['id' => 'deae13ee-d49e-5d7b-ae52-ea07c2fe09a5', 'description' => 'Kathak', 'correct_answer' => true],
                    ['id' => '6a68c2d0-7d55-551a-a107-a1be7681341c', 'description' => 'Bharatanatyam', 'correct_answer' => false],
                    ['id' => 'b7d7ee5a-df19-5fe3-be92-5507c07b65bd', 'description' => 'Tango', 'correct_answer' => false],
                    ['id' => '797afeb4-43b4-5601-b1ed-aba40bfbb485', 'description' => 'Tap dance', 'correct_answer' => false]
                ]],
        ['id' => '242dc10f-28f4-5728-bd66-30019b54b49d', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which partnered dance originated in the Río de la Plata region, especially Argentina and Uruguay?', 'difficulty' => 1, 'weight' => 167, 'alternatives' => [
                    ['id' => '791c6969-b292-5591-ba25-d0858dbab359', 'description' => 'Hip-hop dance', 'correct_answer' => false],
                    ['id' => '023f9f62-de8d-557b-9114-7e1b4b9a17c2', 'description' => 'Tap dance', 'correct_answer' => false],
                    ['id' => 'c6e1fdb7-6a3a-5664-8ae0-fa91a610d2b5', 'description' => 'Bharatanatyam', 'correct_answer' => false],
                    ['id' => 'dc627d4c-b064-5f31-a122-84607381917b', 'description' => 'Tango', 'correct_answer' => true],
                    ['id' => '4df40e9b-28e8-5dc0-8f28-451b5665ca36', 'description' => 'Kathak', 'correct_answer' => false]
                ]],
        ['id' => '0a83b890-f392-5005-bc13-7a1cab69987a', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which dance style uses shoes fitted with metal plates to create rhythmic sounds?', 'difficulty' => 1, 'weight' => 125, 'alternatives' => [
                    ['id' => '763f55d9-ae9d-5410-879e-bb1854ef2ea8', 'description' => 'Ballet', 'correct_answer' => false],
                    ['id' => '14c3d56c-ea63-5ced-8523-deb95f3aaa60', 'description' => 'Kathak', 'correct_answer' => false],
                    ['id' => 'f6fec0cf-73bd-55a4-8542-677e942b85f2', 'description' => 'Tap dance', 'correct_answer' => true],
                    ['id' => '3f6116dd-1efa-5d3a-b5fa-480dd2d7ae4b', 'description' => 'Hip-hop dance', 'correct_answer' => false],
                    ['id' => 'c9f3902f-94e2-5570-bef7-f5b664ce13a6', 'description' => 'Irish stepdance', 'correct_answer' => false]
                ]],
        ['id' => 'f59467a3-ec2c-5595-bd4d-b0b15a3f73bb', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which dance style is known for rapid footwork with a relatively rigid upper body?', 'difficulty' => 1, 'weight' => 162, 'alternatives' => [
                    ['id' => '8689cd4a-316c-56e1-8b51-0cf3a5e55107', 'description' => 'Bharatanatyam', 'correct_answer' => false],
                    ['id' => '553951cd-2f86-53f7-939e-134ebbeebd03', 'description' => 'Waltz', 'correct_answer' => false],
                    ['id' => 'f910b4bf-1683-53e0-8bed-075fa1b19032', 'description' => 'Tap dance', 'correct_answer' => false],
                    ['id' => '877e4384-fe1b-5d98-994d-1ce14419daee', 'description' => 'Irish stepdance', 'correct_answer' => true],
                    ['id' => '3064ccaa-90e2-5c8f-9f91-2cc2ad2fad0b', 'description' => 'Tango', 'correct_answer' => false]
                ]],
        ['id' => '321fe8cb-cca3-5793-ad26-05705a40d546', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which classical Indian dance form originated in Tamil Nadu and uses expressive hand gestures?', 'difficulty' => 1, 'weight' => 179, 'alternatives' => [
                    ['id' => '18813990-b2ef-52d7-9dfc-a38de12b2b66', 'description' => 'Waltz', 'correct_answer' => false],
                    ['id' => 'de39cb2f-2dd8-5cd3-b613-a85f03c519bb', 'description' => 'Bharatanatyam', 'correct_answer' => true],
                    ['id' => '24bae399-5d1c-56a4-9c06-fa0dc10de646', 'description' => 'Irish stepdance', 'correct_answer' => false],
                    ['id' => '58d618d6-203e-5ed1-b9a0-e5cbcd2443c7', 'description' => 'Salsa', 'correct_answer' => false],
                    ['id' => 'a626545d-885b-537a-9db4-833c5f756b43', 'description' => 'Tango', 'correct_answer' => false]
                ]],
        ['id' => 'cbfeead4-7117-519f-bdd7-0de32f2f438a', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which humorous poetic form commonly has five lines and an AABBA rhyme scheme?', 'difficulty' => 1, 'weight' => 126, 'alternatives' => [
                    ['id' => '7e7c4a12-c2dd-5b54-b096-db0b9c71dee2', 'description' => 'Limerick', 'correct_answer' => true],
                    ['id' => '057f5a04-a571-59bc-904b-3e3955a1857b', 'description' => 'Villanelle', 'correct_answer' => false],
                    ['id' => '13d7f78e-631e-5ca8-8e80-c66f89c73d42', 'description' => 'Sestina', 'correct_answer' => false],
                    ['id' => 'f8783dc9-19d2-5517-9ca7-33be655555d6', 'description' => 'Epic', 'correct_answer' => false],
                    ['id' => 'b6175fc5-dc3c-5885-bf54-4591596d1171', 'description' => 'Haiku', 'correct_answer' => false]
                ]],
        ['id' => 'e8b40d2f-f43f-58fc-88c1-9674df3ff590', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which Japanese poetic form traditionally uses a 5-7-5 sound pattern in English descriptions?', 'difficulty' => 1, 'weight' => 110, 'alternatives' => [
                    ['id' => '10f08d9c-a0f4-5b57-9892-cbfebce5fd26', 'description' => 'Villanelle', 'correct_answer' => false],
                    ['id' => '54939f23-ac89-5f22-ab8f-617539a1cf3b', 'description' => 'Limerick', 'correct_answer' => false],
                    ['id' => '30babd89-649c-536b-a690-e1330bb9608c', 'description' => 'Acrostic', 'correct_answer' => false],
                    ['id' => '5eebaead-a2e6-5c67-a32f-1c45a4007216', 'description' => 'Haiku', 'correct_answer' => true],
                    ['id' => '7f0dc56f-9c06-5f5e-8061-4e69f1649d1b', 'description' => 'Sestina', 'correct_answer' => false]
                ]],
        ['id' => '2ba74f0d-da5d-523e-9600-b2feaab3c2ea', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which narrative poetic form traditionally tells a story and is often associated with song?', 'difficulty' => 1, 'weight' => 171, 'alternatives' => [
                    ['id' => 'abdf47a5-2c0c-522d-a201-868bfd405a58', 'description' => 'Ballad', 'correct_answer' => true],
                    ['id' => '19e997d8-bd7a-50fe-8b39-d33cb914e9e1', 'description' => 'Acrostic', 'correct_answer' => false],
                    ['id' => '17c20432-37e2-54b8-97b5-8d783cfc0491', 'description' => 'Epic', 'correct_answer' => false],
                    ['id' => '0fc849b7-a31d-592b-82e1-e1713648eda7', 'description' => 'Sestina', 'correct_answer' => false],
                    ['id' => 'e4b2fb0f-d6ca-575a-9b2e-ca085e0c3590', 'description' => 'Elegy', 'correct_answer' => false]
                ]],
        ['id' => 'f8298c00-5c42-559f-87c0-718849701d4f', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which long narrative poetic form traditionally recounts heroic deeds and foundational events?', 'difficulty' => 1, 'weight' => 107, 'alternatives' => [
                    ['id' => '0af42f88-1823-5056-bd98-60c353e6c6b7', 'description' => 'Epic', 'correct_answer' => true],
                    ['id' => '57171d04-104b-5bf3-adae-e52401d1a9b8', 'description' => 'Haiku', 'correct_answer' => false],
                    ['id' => 'e9f60be1-7df7-541d-9b69-5158d8405295', 'description' => 'Ballad', 'correct_answer' => false],
                    ['id' => '3aa16d30-66fb-5963-963e-1ba770b5abbf', 'description' => 'Sonnet', 'correct_answer' => false],
                    ['id' => '419e132c-e9b2-5974-a8b2-463b53b54000', 'description' => 'Acrostic', 'correct_answer' => false]
                ]],
        ['id' => '663db70c-a4ca-5694-8bc1-e747dea7b2ec', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which complex poetic form repeats the same six end-words in a prescribed pattern?', 'difficulty' => 1, 'weight' => 159, 'alternatives' => [
                    ['id' => '57c0a3c4-1817-549b-8954-75eadc485775', 'description' => 'Limerick', 'correct_answer' => false],
                    ['id' => '0b779942-403e-52ac-8494-973ef275c2e0', 'description' => 'Sestina', 'correct_answer' => true],
                    ['id' => '12d7a0db-a08c-540f-9712-eacaebb0fbe7', 'description' => 'Acrostic', 'correct_answer' => false],
                    ['id' => '9d109dec-72cd-5338-abe0-2f2048220c94', 'description' => 'Haiku', 'correct_answer' => false],
                    ['id' => '46fc068d-e652-51c2-909a-fa9ffae100b7', 'description' => 'Sonnet', 'correct_answer' => false]
                ]],
        ['id' => '47982ba0-62ec-57cb-aab2-c88c05fe72d1', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which poetic form uses nineteen lines and two repeating rhymes with refrains?', 'difficulty' => 1, 'weight' => 172, 'alternatives' => [
                    ['id' => '9f13af3f-4701-55fc-bf1a-ad5bba852248', 'description' => 'Epic', 'correct_answer' => false],
                    ['id' => '23c404dd-5d36-59f6-b87e-4363e0f568b2', 'description' => 'Villanelle', 'correct_answer' => true],
                    ['id' => '78b25ae1-84dd-50a8-8c3e-00e2770d9864', 'description' => 'Sestina', 'correct_answer' => false],
                    ['id' => 'be2f44db-8786-5b9f-b108-725efaf2a58d', 'description' => 'Sonnet', 'correct_answer' => false],
                    ['id' => '7e887d6d-bd5d-568f-a96d-9c790eb39a63', 'description' => 'Ode', 'correct_answer' => false]
                ]],
        ['id' => '34609d63-7470-58e8-b0e5-4ae1674910a7', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which poetic form is commonly written to mourn the dead or reflect on loss?', 'difficulty' => 1, 'weight' => 196, 'alternatives' => [
                    ['id' => '273fda64-7e13-54ab-80be-6f6878ee925f', 'description' => 'Sestina', 'correct_answer' => false],
                    ['id' => 'b18de270-3324-5c19-9fbb-15b65f06a196', 'description' => 'Haiku', 'correct_answer' => false],
                    ['id' => '3f85a6de-ed41-5b51-a67a-4ce1e7756921', 'description' => 'Limerick', 'correct_answer' => false],
                    ['id' => '395debb2-e6e4-5ae4-8a7a-f2e8dfe00c79', 'description' => 'Epic', 'correct_answer' => false],
                    ['id' => 'fa2f5c0b-74e0-5327-a297-9b3c28805756', 'description' => 'Elegy', 'correct_answer' => true]
                ]],
        ['id' => '26ddbd2d-3ac8-5b96-8340-f9c166a47892', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which poetic form uses the initial letters of lines to spell a word or message?', 'difficulty' => 1, 'weight' => 153, 'alternatives' => [
                    ['id' => 'f4165bc8-0315-5648-b54b-187439c760b2', 'description' => 'Epic', 'correct_answer' => false],
                    ['id' => '0f0dd0b0-470c-5922-862a-992e7d8c97ce', 'description' => 'Acrostic', 'correct_answer' => true],
                    ['id' => 'cfb03c74-910a-538a-948d-ba501925dfc3', 'description' => 'Villanelle', 'correct_answer' => false],
                    ['id' => '15aa243a-b9a8-5ab1-b4a3-d4399876a6db', 'description' => 'Limerick', 'correct_answer' => false],
                    ['id' => '3034770b-c64e-5261-8db6-94247c800e5e', 'description' => 'Sestina', 'correct_answer' => false]
                ]],
        ['id' => '33f7cd67-6a65-5406-bf9b-b5f3fa940f76', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which Tchaikovsky ballet features Clara, a magical toy soldier, and the Sugar Plum Fairy?', 'difficulty' => 1, 'weight' => 155, 'alternatives' => [
                    ['id' => '27741c23-3e2c-58f2-b710-d7dd634fd36b', 'description' => 'The Nutcracker', 'correct_answer' => true],
                    ['id' => '1c15cf0c-2f6d-51bf-bd84-9349239be4f3', 'description' => 'Don Quixote', 'correct_answer' => false],
                    ['id' => 'bb69e791-89a4-5deb-a2c8-8c9c5a827298', 'description' => 'Romeo and Juliet', 'correct_answer' => false],
                    ['id' => 'dbd49c23-0353-5934-889c-048152c96550', 'description' => 'Giselle', 'correct_answer' => false],
                    ['id' => '0de44059-dbf4-5e0a-8a71-b06965a67999', 'description' => 'Coppélia', 'correct_answer' => false]
                ]],
        ['id' => 'd644cd2c-6604-54f5-b2dd-c2b6e25b65e1', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which Tchaikovsky ballet is based on a fairy tale about Princess Aurora?', 'difficulty' => 1, 'weight' => 113, 'alternatives' => [
                    ['id' => '5e3ca36b-3278-54ea-a94a-9e5c2511981a', 'description' => 'Giselle', 'correct_answer' => false],
                    ['id' => 'c2d539a7-304d-572b-a59c-a8d42a417b15', 'description' => 'Swan Lake', 'correct_answer' => false],
                    ['id' => 'c359292c-b24d-53b3-af6f-fe0611720b00', 'description' => 'The Sleeping Beauty', 'correct_answer' => true],
                    ['id' => 'a287d450-d18d-5cbf-a074-d481abe9f816', 'description' => 'La Bayadère', 'correct_answer' => false],
                    ['id' => 'bf5cbf08-8746-55ba-9982-f713aebc6b3c', 'description' => 'The Rite of Spring', 'correct_answer' => false]
                ]],
        ['id' => '6fef45d6-66f5-5539-9d68-6a92c8bd230f', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which Prokofiev ballet adapts Shakespeare\'s tragedy about two young lovers?', 'difficulty' => 1, 'weight' => 140, 'alternatives' => [
                    ['id' => '6043483e-f995-59cd-828a-19de7d28ebff', 'description' => 'Giselle', 'correct_answer' => false],
                    ['id' => '30cf26c7-2679-5e1d-a90a-4d33f90d06be', 'description' => 'Romeo and Juliet', 'correct_answer' => true],
                    ['id' => 'ac920eea-f786-5842-a471-de03531ac783', 'description' => 'Swan Lake', 'correct_answer' => false],
                    ['id' => '77ce307c-8e08-50e6-aed2-a42c1368b4d4', 'description' => 'La Bayadère', 'correct_answer' => false],
                    ['id' => 'b4a2ceea-c028-55cf-acc5-57b38974100a', 'description' => 'The Firebird', 'correct_answer' => false]
                ]],
        ['id' => 'bf0a086f-190c-561e-bc68-70681aad67de', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which ballet is based loosely on episodes from Cervantes\'s novel?', 'difficulty' => 1, 'weight' => 118, 'alternatives' => [
                    ['id' => '5f0cc6a1-a776-50e9-bcf4-cc27d27c5216', 'description' => 'Don Quixote', 'correct_answer' => true],
                    ['id' => 'f19358ab-ef03-5953-93c9-8913eec56c99', 'description' => 'La Bayadère', 'correct_answer' => false],
                    ['id' => '2fdb1609-6ed8-570f-84ee-0ae35d61e5bc', 'description' => 'The Rite of Spring', 'correct_answer' => false],
                    ['id' => '373cce74-c4f7-5aef-a16a-7ae40d6ed992', 'description' => 'Swan Lake', 'correct_answer' => false],
                    ['id' => 'a7f8fca2-5fb0-5301-8254-d482a52f918e', 'description' => 'Romeo and Juliet', 'correct_answer' => false]
                ]],
        ['id' => 'bc712df4-a6f2-55c1-be35-8b9450734950', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which Tchaikovsky ballet tells of Odette, a princess transformed into a swan?', 'difficulty' => 1, 'weight' => 116, 'alternatives' => [
                    ['id' => '74dced28-d0c5-51ba-8927-4aa34cbd8ae5', 'description' => 'The Rite of Spring', 'correct_answer' => false],
                    ['id' => '1ed2ea20-de37-5394-8bfc-3cce98e87020', 'description' => 'The Firebird', 'correct_answer' => false],
                    ['id' => '2efa6875-91c2-5e1f-ae12-e1a4cd2e019f', 'description' => 'Romeo and Juliet', 'correct_answer' => false],
                    ['id' => '4260fbda-4de4-5d62-ac27-4a491622847b', 'description' => 'Swan Lake', 'correct_answer' => true],
                    ['id' => '54398737-681a-5d79-a420-4c604ea48a11', 'description' => 'The Sleeping Beauty', 'correct_answer' => false]
                ]],
        ['id' => '5a864ed5-1e45-5fa2-be38-e0f2143756e2', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which ballet includes the famous Kingdom of the Shades scene?', 'difficulty' => 1, 'weight' => 170, 'alternatives' => [
                    ['id' => '13c54356-0673-5439-a1e9-682d9524d4dd', 'description' => 'La Bayadère', 'correct_answer' => true],
                    ['id' => '6acf8b47-acbe-53be-89ea-7eb28ebfa1da', 'description' => 'The Sleeping Beauty', 'correct_answer' => false],
                    ['id' => '0e962231-83c8-5cd1-b153-edad138c51ff', 'description' => 'The Rite of Spring', 'correct_answer' => false],
                    ['id' => '2dc81751-8ad9-5430-a547-2b9a3456f00a', 'description' => 'Giselle', 'correct_answer' => false],
                    ['id' => 'b58086a1-415f-5508-9490-b51c42ab0efc', 'description' => 'Romeo and Juliet', 'correct_answer' => false]
                ]],
        ['id' => 'd943e53d-9c59-5472-8efd-98c13ce9a383', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which Romantic-era ballet tells of a peasant girl who dies of heartbreak and joins the Wilis?', 'difficulty' => 1, 'weight' => 176, 'alternatives' => [
                    ['id' => '9143955a-e6b7-55ca-aef9-73195bc76202', 'description' => 'Giselle', 'correct_answer' => true],
                    ['id' => 'a1fe4fd6-e3a8-5150-a50e-2b857cd8e426', 'description' => 'Coppélia', 'correct_answer' => false],
                    ['id' => '512d1d6f-2a89-559f-a7d3-f86865eaa6ac', 'description' => 'The Firebird', 'correct_answer' => false],
                    ['id' => '760a1524-dd3f-501e-b69d-dcd069a8c6b6', 'description' => 'Don Quixote', 'correct_answer' => false],
                    ['id' => 'a200b69b-8327-53d4-8d34-4e12edf16405', 'description' => 'The Nutcracker', 'correct_answer' => false]
                ]],
        ['id' => 'e5016d8e-99e1-5b2d-9b16-4f4b7a4d35f9', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which Stravinsky ballet features a magical bird and an enchanted kingdom?', 'difficulty' => 1, 'weight' => 143, 'alternatives' => [
                    ['id' => '44cb98c3-55f3-5987-8a2f-edcd32a495c4', 'description' => 'La Bayadère', 'correct_answer' => false],
                    ['id' => '1cfe1c8b-29c2-5f6c-bcab-6fea4716ebe3', 'description' => 'The Rite of Spring', 'correct_answer' => false],
                    ['id' => '40dd010d-786f-536c-b9c0-be7a68fc01f0', 'description' => 'Romeo and Juliet', 'correct_answer' => false],
                    ['id' => 'edefcca0-c10b-55de-b1c7-b1c24d4d9572', 'description' => 'The Firebird', 'correct_answer' => true],
                    ['id' => '2715be65-ab7a-5b6e-a9dc-9b59ee4efb0d', 'description' => 'Coppélia', 'correct_answer' => false]
                ]],
        ['id' => 'edda29c3-550b-57ae-b7fe-6ab94b011c22', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which London museum houses the Rosetta Stone?', 'difficulty' => 1, 'weight' => 148, 'alternatives' => [
                    ['id' => 'e28a83ab-28c8-5f5c-a43e-7de04a6970fa', 'description' => 'The Prado Museum', 'correct_answer' => false],
                    ['id' => 'a2dc0412-316e-535c-b044-ad805d21ddc3', 'description' => 'The British Museum', 'correct_answer' => true],
                    ['id' => '163bd778-6845-55ac-94ad-4506f93ec161', 'description' => 'The Guggenheim Museum Bilbao', 'correct_answer' => false],
                    ['id' => '62019c61-f61d-57aa-9ef6-e0a59b07b82b', 'description' => 'The Louvre', 'correct_answer' => false],
                    ['id' => '2adb1247-98c8-54d2-882f-679445acf586', 'description' => 'The Vatican Museums', 'correct_answer' => false]
                ]],
        ['id' => '0b99b660-6e9a-527a-bc09-069c44ac4cbc', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which Amsterdam museum displays Rembrandt\'s The Night Watch?', 'difficulty' => 1, 'weight' => 187, 'alternatives' => [
                    ['id' => 'd3b13750-8bc1-5cdf-b6bf-4f5265b8a9ac', 'description' => 'The Rijksmuseum', 'correct_answer' => true],
                    ['id' => '2869d19f-e031-5d00-a767-7cfec6ab7ce7', 'description' => 'The Metropolitan Museum of Art', 'correct_answer' => false],
                    ['id' => 'a5ae9032-3ecd-5ab6-98df-bf753a2d77e2', 'description' => 'The Hermitage Museum', 'correct_answer' => false],
                    ['id' => '0a17e911-4524-528c-a0b7-0b25e7910a99', 'description' => 'The Louvre', 'correct_answer' => false],
                    ['id' => 'f2bfcea3-ad4f-5eb1-a244-57aafa4825e6', 'description' => 'The British Museum', 'correct_answer' => false]
                ]],
        ['id' => 'e5935e7b-dd13-5449-8b50-dc2400a9f6db', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which New York museum is commonly abbreviated MoMA?', 'difficulty' => 1, 'weight' => 148, 'alternatives' => [
                    ['id' => 'ee3dabd1-5d26-5d9b-b36c-fdd65d77ce54', 'description' => 'The Rijksmuseum', 'correct_answer' => false],
                    ['id' => 'e1ef8aa0-5259-5df6-8b35-4879ce95da3b', 'description' => 'The Hermitage Museum', 'correct_answer' => false],
                    ['id' => 'fc9cd59b-f8fe-5662-8b20-6880eca8086a', 'description' => 'The Museum of Modern Art', 'correct_answer' => true],
                    ['id' => 'c1c54274-1239-5702-bd52-385c44ce9504', 'description' => 'The British Museum', 'correct_answer' => false],
                    ['id' => 'a63692e4-48b9-5008-8e68-6225904e936d', 'description' => 'The Prado Museum', 'correct_answer' => false]
                ]],
        ['id' => '18bcd238-4b7d-5d5d-8235-1ec2a14fc343', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which Florence museum is renowned for Renaissance works including Botticelli paintings?', 'difficulty' => 1, 'weight' => 189, 'alternatives' => [
                    ['id' => 'd5721a19-ade8-5b4b-8ce3-560cdbbf1f1e', 'description' => 'The Metropolitan Museum of Art', 'correct_answer' => false],
                    ['id' => 'ccb0f537-0f7e-54b7-9c31-3b049ff1f130', 'description' => 'The Museum of Modern Art', 'correct_answer' => false],
                    ['id' => '345fc365-0881-5907-99f4-38309a6aac3e', 'description' => 'The Guggenheim Museum Bilbao', 'correct_answer' => false],
                    ['id' => 'a1e0ea3f-e8cc-5757-9f8c-b8f96853b5ab', 'description' => 'The Uffizi Gallery', 'correct_answer' => true],
                    ['id' => 'a5de70bd-4f3b-5d78-941b-985195b139b6', 'description' => 'The Vatican Museums', 'correct_answer' => false]
                ]],
        ['id' => '36a86277-8c71-5b3b-bbb7-6c7f4b47ab3a', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which New York museum is commonly known as \'the Met\'?', 'difficulty' => 1, 'weight' => 126, 'alternatives' => [
                    ['id' => '49fae730-4151-547e-9531-63f468fcb84e', 'description' => 'The Louvre', 'correct_answer' => false],
                    ['id' => '465c7971-3a13-5584-892c-22205afa9e2a', 'description' => 'The Prado Museum', 'correct_answer' => false],
                    ['id' => 'cebf8606-9569-5a8f-9fae-093ca82dc609', 'description' => 'The British Museum', 'correct_answer' => false],
                    ['id' => '7564671b-b0a7-5983-b0c8-1674c13a64f7', 'description' => 'The Uffizi Gallery', 'correct_answer' => false],
                    ['id' => 'cc4caff8-dbc7-58da-a63a-1d709ec5d4c3', 'description' => 'The Metropolitan Museum of Art', 'correct_answer' => true]
                ]],
        ['id' => '50c9b123-093e-5f87-aee0-0100fb6b8632', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which Madrid museum holds major works by Velázquez and Goya?', 'difficulty' => 1, 'weight' => 141, 'alternatives' => [
                    ['id' => 'e32f0eac-0363-59cb-a2be-63aad7928b47', 'description' => 'The Louvre', 'correct_answer' => false],
                    ['id' => 'c3c99572-fb6e-52d4-88fa-6670685e73d2', 'description' => 'The Prado Museum', 'correct_answer' => true],
                    ['id' => 'bd14e2a7-0ec4-5484-8564-457839826dc8', 'description' => 'The Uffizi Gallery', 'correct_answer' => false],
                    ['id' => 'f8a29768-d739-500d-94d9-c284ccf97da1', 'description' => 'The Museum of Modern Art', 'correct_answer' => false],
                    ['id' => '0c86b4a4-7dd4-5ddd-8564-fa50f6bc9cdf', 'description' => 'The British Museum', 'correct_answer' => false]
                ]],
        ['id' => '40a0cdba-6094-5f96-9bb7-4e11dfdda236', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which Paris museum is home to the Mona Lisa?', 'difficulty' => 1, 'weight' => 122, 'alternatives' => [
                    ['id' => 'a62308ee-5186-5f3e-8162-e137187f4319', 'description' => 'The Uffizi Gallery', 'correct_answer' => false],
                    ['id' => 'dd01a9c3-a432-5acb-be75-df84749c158b', 'description' => 'The Louvre', 'correct_answer' => true],
                    ['id' => '400aec80-aadc-5eed-88f6-ce2e353b8c65', 'description' => 'The Prado Museum', 'correct_answer' => false],
                    ['id' => '812b868f-8424-5605-9946-84815e2a1acd', 'description' => 'The Museum of Modern Art', 'correct_answer' => false],
                    ['id' => 'c1681557-6a72-59c4-9b94-a98f79bc84f2', 'description' => 'The Hermitage Museum', 'correct_answer' => false]
                ]],
        ['id' => 'feb657b6-4b5e-557a-9865-c2791731bd8f', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which major art museum is located in the Winter Palace complex in Saint Petersburg?', 'difficulty' => 1, 'weight' => 106, 'alternatives' => [
                    ['id' => 'b7c2ca90-27f8-5c01-a5bf-9962ec38ee4d', 'description' => 'The Guggenheim Museum Bilbao', 'correct_answer' => false],
                    ['id' => '9514042d-ae4d-5ba7-b407-ab96014646ce', 'description' => 'The British Museum', 'correct_answer' => false],
                    ['id' => '8256527c-433b-56ac-a291-168e155446ab', 'description' => 'The Vatican Museums', 'correct_answer' => false],
                    ['id' => '2c3166c9-08fe-5b86-91ce-565e19a6db73', 'description' => 'The Louvre', 'correct_answer' => false],
                    ['id' => '34ad28c3-d86e-50a1-9e28-2ab1494977bc', 'description' => 'The Hermitage Museum', 'correct_answer' => true]
                ]],
        ['id' => '7bbcf427-9922-5e4c-a88c-05a00419dd6b', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which early twentieth-century art movement is known for bold, non-naturalistic color and artists such as Matisse?', 'difficulty' => 2, 'weight' => 270, 'alternatives' => [
                    ['id' => '5b8d5475-ff5d-56d8-bb01-158218b3e122', 'description' => 'Cubism', 'correct_answer' => false],
                    ['id' => '782a4105-dce9-561f-9a0a-4e4dcf99e2ec', 'description' => 'Rococo', 'correct_answer' => false],
                    ['id' => '6c8c6944-fc70-5072-b493-c6aabe1a00d5', 'description' => 'Fauvism', 'correct_answer' => true],
                    ['id' => 'a69ed8be-c8a4-5d16-b5c8-dcb2c3b1e465', 'description' => 'Neoclassicism', 'correct_answer' => false],
                    ['id' => '4e0b3262-2e15-57fc-b851-de0c7152f38b', 'description' => 'Expressionism', 'correct_answer' => false]
                ]],
        ['id' => '1c876cf9-d0ea-53f1-9915-d9b6fb64e524', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which art movement revived classical Greek and Roman ideals and is associated with Jacques-Louis David?', 'difficulty' => 2, 'weight' => 232, 'alternatives' => [
                    ['id' => 'f8fd420d-10d1-501b-adb6-466ceca871a2', 'description' => 'Neoclassicism', 'correct_answer' => true],
                    ['id' => '853ac44c-12e5-5af4-b916-cff13e06293f', 'description' => 'Cubism', 'correct_answer' => false],
                    ['id' => 'fb25904c-1789-5e2f-969e-92e3322228cc', 'description' => 'Fauvism', 'correct_answer' => false],
                    ['id' => 'cb609bc1-9c76-5991-aafb-5885d77e6ee7', 'description' => 'Expressionism', 'correct_answer' => false],
                    ['id' => '22855479-b533-58d1-b3cf-da9b712d8423', 'description' => 'Art Nouveau', 'correct_answer' => false]
                ]],
        ['id' => '2cb31f01-f31c-58e6-bb01-a8036349ebab', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which eighteenth-century art style is known for ornate decoration, pastel colors, and playful aristocratic scenes?', 'difficulty' => 2, 'weight' => 392, 'alternatives' => [
                    ['id' => '25746172-534f-5fe6-a3fe-cc0f48a6446c', 'description' => 'Surrealism', 'correct_answer' => false],
                    ['id' => '0ab3c31f-f9dd-50c8-b986-f8dc431ba677', 'description' => 'Art Nouveau', 'correct_answer' => false],
                    ['id' => 'c9b49f5b-2f60-5121-877b-8c994b063f2c', 'description' => 'Baroque', 'correct_answer' => false],
                    ['id' => '24befded-1967-597a-ad10-97ae63be25bf', 'description' => 'Neoclassicism', 'correct_answer' => false],
                    ['id' => '66218a58-d74f-5846-b6ac-4748b8e5cf28', 'description' => 'Rococo', 'correct_answer' => true]
                ]],
        ['id' => '677997fa-44c1-5265-8552-12dfcc83d7b0', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which avant-garde movement emerged during World War I and challenged conventional art through absurdity and anti-art gestures?', 'difficulty' => 2, 'weight' => 203, 'alternatives' => [
                    ['id' => 'bfbe0e1d-e003-5cfb-91fc-2454f0da6441', 'description' => 'Rococo', 'correct_answer' => false],
                    ['id' => '4d41ccd1-498a-5bbf-9600-b59173739e84', 'description' => 'Dada', 'correct_answer' => true],
                    ['id' => '4abe3fed-aa68-5221-95a4-00f4b6321aa6', 'description' => 'Cubism', 'correct_answer' => false],
                    ['id' => '88798129-d3a4-5600-b20a-2653d09926bc', 'description' => 'Art Nouveau', 'correct_answer' => false],
                    ['id' => 'ca27f106-559a-5da4-95a7-58311a6a685e', 'description' => 'Fauvism', 'correct_answer' => false]
                ]],
        ['id' => '144f5b92-6931-5f7a-b967-16176337495b', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which art movement associated with Picasso and Braque represents subjects through geometric forms and multiple viewpoints?', 'difficulty' => 2, 'weight' => 389, 'alternatives' => [
                    ['id' => '645abcd3-6d7a-544f-8f61-ffded3310f22', 'description' => 'Cubism', 'correct_answer' => true],
                    ['id' => '7d0cc412-998b-5db3-92cf-4ea49b8e20b4', 'description' => 'Dada', 'correct_answer' => false],
                    ['id' => 'e9ca7074-aa14-55e4-93a6-659bd15b01d3', 'description' => 'Expressionism', 'correct_answer' => false],
                    ['id' => 'a4376f8e-bdeb-5bba-b2c6-a973891563bf', 'description' => 'Art Nouveau', 'correct_answer' => false],
                    ['id' => '990d7a81-0b5b-5b81-970e-1365b130110c', 'description' => 'Impressionism', 'correct_answer' => false]
                ]],
        ['id' => '5b71f443-6996-543b-9789-b669ada62fb7', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which art movement explored dreams and the unconscious, with artists such as Dalí and Magritte?', 'difficulty' => 2, 'weight' => 229, 'alternatives' => [
                    ['id' => '42c22d4f-7ea2-5d6a-873a-231b559ae004', 'description' => 'Cubism', 'correct_answer' => false],
                    ['id' => 'fe8d4cf6-a364-5ef5-bbc5-fd7d8f2c6ee2', 'description' => 'Impressionism', 'correct_answer' => false],
                    ['id' => '6a41cc4d-e14c-560f-ab0a-b0d4006c3cef', 'description' => 'Art Nouveau', 'correct_answer' => false],
                    ['id' => 'a4492d02-edd8-5237-871d-8da46cf5e11b', 'description' => 'Surrealism', 'correct_answer' => true],
                    ['id' => '1e3b72fb-89e3-53c5-aa3d-5c72f39a702c', 'description' => 'Fauvism', 'correct_answer' => false]
                ]],
        ['id' => '5890eb78-e6ca-574e-bb1b-73e57d26e819', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which art movement emphasizes subjective emotion and distortion rather than realistic representation?', 'difficulty' => 2, 'weight' => 342, 'alternatives' => [
                    ['id' => '591da407-ea30-50c4-b404-dcfdc03bf3aa', 'description' => 'Surrealism', 'correct_answer' => false],
                    ['id' => '3a7ef1d9-c77b-5ea1-803b-9214a47cac13', 'description' => 'Art Nouveau', 'correct_answer' => false],
                    ['id' => 'ca7a8577-33ca-5e9e-8f63-ffda66787cca', 'description' => 'Expressionism', 'correct_answer' => true],
                    ['id' => 'a7955c70-26ab-55d9-9f9b-dc16dd667e9c', 'description' => 'Dada', 'correct_answer' => false],
                    ['id' => '4e345c75-594a-5b77-b337-7672a853e6be', 'description' => 'Cubism', 'correct_answer' => false]
                ]],
        ['id' => 'a225ac6a-83f3-5dd3-aa9c-dfb6abb38473', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which decorative art movement is associated with flowing organic lines and artists such as Alphonse Mucha?', 'difficulty' => 2, 'weight' => 349, 'alternatives' => [
                    ['id' => 'e6121c81-d34e-5a33-86d7-f06ada151620', 'description' => 'Art Nouveau', 'correct_answer' => true],
                    ['id' => 'fdbe92b6-e7c7-5c23-aca3-a70aac608075', 'description' => 'Dada', 'correct_answer' => false],
                    ['id' => '0eb5095a-6848-509a-bf74-b7cfb9563385', 'description' => 'Rococo', 'correct_answer' => false],
                    ['id' => 'd2644dbc-75ea-5d5e-a473-49ab9ff39817', 'description' => 'Expressionism', 'correct_answer' => false],
                    ['id' => '13f050b6-ba46-5646-b8c1-9f2a1afbbe6e', 'description' => 'Neoclassicism', 'correct_answer' => false]
                ]],
        ['id' => '11bedab0-633f-51c1-8249-31972eee1b12', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which Boccaccio work frames stories told by a group sheltering from the Black Death?', 'difficulty' => 2, 'weight' => 245, 'alternatives' => [
                    ['id' => 'e70c8775-78be-504c-9977-084206c73475', 'description' => 'The Iliad', 'correct_answer' => false],
                    ['id' => '3cd396ee-744b-5b71-8c93-eb541077aee1', 'description' => 'The Ramayana', 'correct_answer' => false],
                    ['id' => '0262273b-2561-5726-acda-96c4b8f3607e', 'description' => 'The Aeneid', 'correct_answer' => false],
                    ['id' => '2bd96198-e87f-50d4-bbbf-aac6c32786a0', 'description' => 'The Decameron', 'correct_answer' => true],
                    ['id' => 'd81eda1d-aee4-5f70-b6e1-87af6c462dd3', 'description' => 'The Shahnameh', 'correct_answer' => false]
                ]],
        ['id' => 'c8a7955e-8eab-58b3-be07-fb8b1d299041', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which ancient Greek epic follows Odysseus on his long journey home after the Trojan War?', 'difficulty' => 2, 'weight' => 260, 'alternatives' => [
                    ['id' => '56c94aa2-3a56-58e1-b800-31bc8d916755', 'description' => 'The Epic of Gilgamesh', 'correct_answer' => false],
                    ['id' => '5383de80-459b-5391-9a86-9710dde17207', 'description' => 'The Divine Comedy', 'correct_answer' => false],
                    ['id' => 'cb553fa0-3899-53aa-b264-867c60aa2e51', 'description' => 'The Shahnameh', 'correct_answer' => false],
                    ['id' => 'fa362518-27a6-5ad4-b8ec-0309469eebc0', 'description' => 'The Odyssey', 'correct_answer' => true],
                    ['id' => '5114dd35-1395-5078-aaa9-03cb7306b24c', 'description' => 'The Canterbury Tales', 'correct_answer' => false]
                ]],
        ['id' => '5d795534-1927-5f95-982d-986152d36842', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which Persian epic by Ferdowsi recounts the legendary history of Iran?', 'difficulty' => 2, 'weight' => 208, 'alternatives' => [
                    ['id' => '2400c918-367f-5d77-b30b-434c1750da83', 'description' => 'The Shahnameh', 'correct_answer' => true],
                    ['id' => '2e0d3701-8ddc-514e-9461-92e99d76fd5c', 'description' => 'The Aeneid', 'correct_answer' => false],
                    ['id' => 'e7c1737e-9be6-504c-a03a-5ff79fa882b6', 'description' => 'The Divine Comedy', 'correct_answer' => false],
                    ['id' => 'cef05e60-2a52-5e3c-9c30-60c46b5b4a68', 'description' => 'The Ramayana', 'correct_answer' => false],
                    ['id' => '5d0d17a0-0081-5098-9d7c-4f14fdd64aff', 'description' => 'The Decameron', 'correct_answer' => false]
                ]],
        ['id' => '65ff3d09-fec5-5908-8ccd-3b1267961889', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which Sanskrit epic tells of Prince Rama\'s quest to rescue Sita?', 'difficulty' => 2, 'weight' => 394, 'alternatives' => [
                    ['id' => '40a14e0e-1f04-5a6a-85ab-ba3f3e0f5655', 'description' => 'The Ramayana', 'correct_answer' => true],
                    ['id' => '5e22099a-480a-54f4-a1f0-34a67dbc2559', 'description' => 'The Iliad', 'correct_answer' => false],
                    ['id' => '4923bb67-4650-5e90-8ef5-a1b411e782d5', 'description' => 'Beowulf', 'correct_answer' => false],
                    ['id' => '58f8759d-9f3f-5e39-9924-0229d63a3503', 'description' => 'The Odyssey', 'correct_answer' => false],
                    ['id' => 'd8f75471-777e-5968-8e61-93c0021a863d', 'description' => 'The Decameron', 'correct_answer' => false]
                ]],
        ['id' => '5ab8f907-65cb-502c-9527-b3506cec79be', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which Dante poem follows a journey through Hell, Purgatory, and Paradise?', 'difficulty' => 2, 'weight' => 247, 'alternatives' => [
                    ['id' => '81c0ece3-aa44-5a2a-9ebb-a000e051d148', 'description' => 'The Epic of Gilgamesh', 'correct_answer' => false],
                    ['id' => '7176f10e-9e29-58f5-a144-fc77ef7f4475', 'description' => 'Beowulf', 'correct_answer' => false],
                    ['id' => 'b71fb75c-11f9-5219-abfe-53bc18b9f233', 'description' => 'The Ramayana', 'correct_answer' => false],
                    ['id' => '1098b77f-e1a7-5cd6-b0de-0674f4ad3fed', 'description' => 'The Divine Comedy', 'correct_answer' => true],
                    ['id' => '8db648fe-d90f-5433-a484-5b8d0bfd60d5', 'description' => 'The Iliad', 'correct_answer' => false]
                ]],
        ['id' => 'c381f6bb-f7e7-5476-af25-18e7e5afe908', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which Homeric epic focuses on the wrath of Achilles during the Trojan War?', 'difficulty' => 2, 'weight' => 271, 'alternatives' => [
                    ['id' => '0aa38afd-a225-5837-830a-1104b4500e24', 'description' => 'The Aeneid', 'correct_answer' => false],
                    ['id' => 'af496029-c9da-5e0f-b787-110851f3f781', 'description' => 'The Odyssey', 'correct_answer' => false],
                    ['id' => '8a53c449-baa4-54aa-90da-48fbdf70e9c5', 'description' => 'The Iliad', 'correct_answer' => true],
                    ['id' => '9c7b0977-5a96-5291-a287-51cdbaa0060a', 'description' => 'The Ramayana', 'correct_answer' => false],
                    ['id' => 'd05a874a-5698-5581-b9cb-c66ea6ee0507', 'description' => 'The Shahnameh', 'correct_answer' => false]
                ]],
        ['id' => '09592d53-5b58-52f4-abd6-3d10ae124a7b', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which ancient Mesopotamian epic follows the king of Uruk and his companion Enkidu?', 'difficulty' => 2, 'weight' => 376, 'alternatives' => [
                    ['id' => 'ee82ccf5-6869-5fd9-9b1b-f9189071fea5', 'description' => 'The Divine Comedy', 'correct_answer' => false],
                    ['id' => '120f2d44-5445-5d9c-951d-0b6e609f6afe', 'description' => 'The Aeneid', 'correct_answer' => false],
                    ['id' => '90a04cf9-9a62-5514-85bf-7aa85a7db8a3', 'description' => 'The Epic of Gilgamesh', 'correct_answer' => true],
                    ['id' => 'b318061d-a7a8-5b24-8c18-bed3aeac6667', 'description' => 'The Shahnameh', 'correct_answer' => false],
                    ['id' => 'b6ef5e78-76f5-5886-9368-c4077b12da68', 'description' => 'The Canterbury Tales', 'correct_answer' => false]
                ]],
        ['id' => '5aa50523-35e1-5c1a-b616-35cbf411eef1', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which Chaucer work presents stories told by pilgrims traveling to a shrine?', 'difficulty' => 2, 'weight' => 257, 'alternatives' => [
                    ['id' => '01082460-86df-52d7-98b3-d32e2d57f27e', 'description' => 'The Epic of Gilgamesh', 'correct_answer' => false],
                    ['id' => '0397e98e-86b0-5c6e-9185-ef9dfe55e8e9', 'description' => 'The Shahnameh', 'correct_answer' => false],
                    ['id' => 'dd839175-0004-5d59-bfbc-39849adefee8', 'description' => 'Beowulf', 'correct_answer' => false],
                    ['id' => 'c49ef59d-28a0-5183-879b-a4aa5683ea4f', 'description' => 'The Aeneid', 'correct_answer' => false],
                    ['id' => 'cae05818-432f-5213-a68d-bb4f26a68724', 'description' => 'The Canterbury Tales', 'correct_answer' => true]
                ]],
        ['id' => '324f62fc-22d0-58db-896b-53fd1747c83b', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which Japanese traditional theatre form uses large puppets manipulated by visible performers?', 'difficulty' => 2, 'weight' => 224, 'alternatives' => [
                    ['id' => '93e35570-6e71-5411-9d67-de874056cf49', 'description' => 'Peking opera', 'correct_answer' => false],
                    ['id' => '718385e9-a176-550c-a014-b064801d7d58', 'description' => 'Bunraku', 'correct_answer' => true],
                    ['id' => '56bb99a0-1646-5d5a-b102-3f77e821ea86', 'description' => 'Ta\'zieh', 'correct_answer' => false],
                    ['id' => 'bad8f907-ca2e-518b-bcfc-cbcf8fd56d13', 'description' => 'Kabuki', 'correct_answer' => false],
                    ['id' => 'af9b3163-98b3-5704-8541-a92249474a3c', 'description' => 'Noh', 'correct_answer' => false]
                ]],
        ['id' => 'f4abc0f2-269f-5aa6-9a57-28562f402ab9', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which Chinese opera genre originated in Zhejiang and is traditionally performed in a highly stylized singing style?', 'difficulty' => 2, 'weight' => 252, 'alternatives' => [
                    ['id' => '06e30b05-f8a6-52a7-8c3b-c399088a5163', 'description' => 'Noh', 'correct_answer' => false],
                    ['id' => '30987fdd-9395-5f6a-a2a8-53269c6e5c09', 'description' => 'Ta\'zieh', 'correct_answer' => false],
                    ['id' => '21f3e8e3-62b4-5a91-b45a-2a8e14e49d8d', 'description' => 'Bunraku', 'correct_answer' => false],
                    ['id' => 'b532616f-69a8-56ed-9c8e-749bb50a80fa', 'description' => 'Commedia dell\'arte', 'correct_answer' => false],
                    ['id' => '3b154348-708c-50fd-ba09-aa54dd567c5a', 'description' => 'Yue opera', 'correct_answer' => true]
                ]],
        ['id' => 'af5ff4aa-93ec-5e3d-8d5c-02a0e22abdf1', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which Chinese theatrical form combines singing, acrobatics, martial arts, and elaborate costumes?', 'difficulty' => 2, 'weight' => 224, 'alternatives' => [
                    ['id' => '222902dd-246c-5ee3-af29-b6ddaf4c854b', 'description' => 'Korean talchum', 'correct_answer' => false],
                    ['id' => 'c66923e3-cee9-5c4e-8fe3-62ef9cec3683', 'description' => 'Wayang kulit', 'correct_answer' => false],
                    ['id' => '8e7f52a9-ed36-5ac1-a4f4-53009f63393d', 'description' => 'Peking opera', 'correct_answer' => true],
                    ['id' => 'c32c3730-8db0-5712-914e-86614bbcdd8a', 'description' => 'Bunraku', 'correct_answer' => false],
                    ['id' => '488218a6-3c5a-558d-b27e-a37d01368a10', 'description' => 'Kathakali', 'correct_answer' => false]
                ]],
        ['id' => '0316810b-fd59-5e0b-9c36-b016745bdb9d', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which Indonesian shadow-puppet theatre uses leather puppets and a backlit screen?', 'difficulty' => 2, 'weight' => 239, 'alternatives' => [
                    ['id' => '83169658-9195-5dfc-9049-4886d3b84ddb', 'description' => 'Korean talchum', 'correct_answer' => false],
                    ['id' => '9cc1f469-f5bb-59d3-9658-22d0e9b19cc7', 'description' => 'Wayang kulit', 'correct_answer' => true],
                    ['id' => '69812485-d50d-5f9d-9d19-766fd9b62919', 'description' => 'Ta\'zieh', 'correct_answer' => false],
                    ['id' => 'a09152b4-010b-5765-83db-c07cc9bc53d6', 'description' => 'Yue opera', 'correct_answer' => false],
                    ['id' => '5f0f4f08-ea23-543f-a386-6f2ce110140f', 'description' => 'Noh', 'correct_answer' => false]
                ]],
        ['id' => 'aa687943-885c-5586-8628-f4567b0359ce', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which classical dance-drama from Kerala is known for elaborate makeup and expressive gestures?', 'difficulty' => 2, 'weight' => 376, 'alternatives' => [
                    ['id' => 'b8304ed1-59d6-52af-a4e4-5f5159b9bd4f', 'description' => 'Kathakali', 'correct_answer' => true],
                    ['id' => 'df01df00-e515-504e-8568-bd709b1c9d59', 'description' => 'Peking opera', 'correct_answer' => false],
                    ['id' => '993e3281-a15d-5002-ad44-ff730a3a8f04', 'description' => 'Bunraku', 'correct_answer' => false],
                    ['id' => '71a8462b-1b6d-5473-a4f5-624d974dae75', 'description' => 'Noh', 'correct_answer' => false],
                    ['id' => '85dea223-0c22-597d-96cb-514a79e56031', 'description' => 'Korean talchum', 'correct_answer' => false]
                ]],
        ['id' => '05396246-3e54-58fb-bf31-85000012a6c9', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which Italian theatrical tradition uses stock characters and improvised scenarios?', 'difficulty' => 2, 'weight' => 319, 'alternatives' => [
                    ['id' => 'd0ac164e-c80e-5467-bc4c-3f162a71cf03', 'description' => 'Noh', 'correct_answer' => false],
                    ['id' => '4f077979-b55f-5b72-8dd4-f61057432525', 'description' => 'Ta\'zieh', 'correct_answer' => false],
                    ['id' => '97027b31-189e-5ec5-a2d3-c87637bb1156', 'description' => 'Peking opera', 'correct_answer' => false],
                    ['id' => '13159e7e-620f-53c3-93b7-015b354f1829', 'description' => 'Kabuki', 'correct_answer' => false],
                    ['id' => 'b9073350-a611-56d9-87c0-bbda7d44cf93', 'description' => 'Commedia dell\'arte', 'correct_answer' => true]
                ]],
        ['id' => 'dd798638-3bc3-5e0d-8321-fbdec17cf3a0', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which Japanese theatrical form is known for stylized acting, elaborate costumes, and dramatic makeup?', 'difficulty' => 2, 'weight' => 255, 'alternatives' => [
                    ['id' => '5e2db1a5-aab3-5489-ad93-c4e00b93e788', 'description' => 'Noh', 'correct_answer' => false],
                    ['id' => '2b28adbf-0efa-59c4-a3bd-678ee092d90e', 'description' => 'Wayang kulit', 'correct_answer' => false],
                    ['id' => '31a7263a-c135-5bd7-8133-6279265f337f', 'description' => 'Yue opera', 'correct_answer' => false],
                    ['id' => '054b75cb-34cf-5290-b5c4-0c8f2086469e', 'description' => 'Kabuki', 'correct_answer' => true],
                    ['id' => '187b85b0-f58d-52ad-af4e-84fbff4bfeda', 'description' => 'Korean talchum', 'correct_answer' => false]
                ]],
        ['id' => '111fe2aa-f1c1-5a95-9f6c-6d0800ccc47c', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which Korean traditional performance combines masked dance, satire, and music?', 'difficulty' => 2, 'weight' => 368, 'alternatives' => [
                    ['id' => '51a2121b-3026-5a40-aace-0007a8f78582', 'description' => 'Korean talchum', 'correct_answer' => true],
                    ['id' => '3a2306ff-6f05-5071-9eae-a7e1c125a662', 'description' => 'Peking opera', 'correct_answer' => false],
                    ['id' => 'f097d93c-c66e-51de-b824-2bd62a9d72da', 'description' => 'Wayang kulit', 'correct_answer' => false],
                    ['id' => '1fd6b093-12bd-5b63-86d4-9645d99ad8a4', 'description' => 'Yue opera', 'correct_answer' => false],
                    ['id' => 'c3707201-38e5-542d-ad6f-ea85ad975419', 'description' => 'Noh', 'correct_answer' => false]
                ]],
        ['id' => '0f9b3355-1821-5606-bbd3-8ab587dbcb8f', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which postwar American art movement includes Jackson Pollock and Mark Rothko?', 'difficulty' => 2, 'weight' => 333, 'alternatives' => [
                    ['id' => '2c36fac8-40d8-5a81-8ce1-f7749ea54a1e', 'description' => 'Abstract Expressionism', 'correct_answer' => true],
                    ['id' => '361ac801-211e-5cbd-9868-a148c455852e', 'description' => 'Pop Art', 'correct_answer' => false],
                    ['id' => '6a896a24-99a9-5e0e-b40b-8dbca3c6b321', 'description' => 'De Stijl', 'correct_answer' => false],
                    ['id' => '2e68f123-d77d-5139-a757-bd1e221b9f7e', 'description' => 'Futurism', 'correct_answer' => false],
                    ['id' => 'd6064a78-6489-534f-9bdd-932252b4a9d9', 'description' => 'Op Art', 'correct_answer' => false]
                ]],
        ['id' => '2347661b-092f-53fb-9fe9-e43c467b678e', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which Italian movement celebrated speed, machinery, technology, and modern urban life?', 'difficulty' => 2, 'weight' => 344, 'alternatives' => [
                    ['id' => 'ec106eb4-0b22-5d97-87ac-da2da6cf828c', 'description' => 'Conceptual art', 'correct_answer' => false],
                    ['id' => '52eba596-1e9e-53d3-8b46-a8607a1b7fca', 'description' => 'Op Art', 'correct_answer' => false],
                    ['id' => '732405f3-447d-5a8e-8053-8f96f731123f', 'description' => 'Pop Art', 'correct_answer' => false],
                    ['id' => '99053cfd-8c27-5fca-b25c-5717f67567b3', 'description' => 'Minimalism', 'correct_answer' => false],
                    ['id' => '5dcac104-d505-53a3-91b6-549897e1911b', 'description' => 'Futurism', 'correct_answer' => true]
                ]],
        ['id' => '6316b1aa-e0f1-5050-9cb2-a523c409f8c2', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which art movement creates optical illusions through patterns and contrasts?', 'difficulty' => 2, 'weight' => 336, 'alternatives' => [
                    ['id' => '39587afd-b6f8-5209-a496-6cc89c709561', 'description' => 'Abstract Expressionism', 'correct_answer' => false],
                    ['id' => '22df9a3d-b3d0-59f1-b227-a1ab57a29626', 'description' => 'Suprematism', 'correct_answer' => false],
                    ['id' => '26ef0379-3d5e-5d0b-bdf0-3506437236da', 'description' => 'Futurism', 'correct_answer' => false],
                    ['id' => 'f3afacdf-b178-50b7-9039-1694194ceb2d', 'description' => 'Op Art', 'correct_answer' => true],
                    ['id' => '5cfa7552-7499-59be-998b-86cfb5f2c09a', 'description' => 'The Bauhaus', 'correct_answer' => false]
                ]],
        ['id' => '95094fbc-b687-5700-9f98-b6dab77df893', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which art movement places the idea or concept above the finished physical object?', 'difficulty' => 2, 'weight' => 297, 'alternatives' => [
                    ['id' => '1cfc936b-ff83-50c9-a2e1-66aed1683ba6', 'description' => 'Suprematism', 'correct_answer' => false],
                    ['id' => '6eb191d1-388c-502b-9ca8-d76e75cb1ad5', 'description' => 'Constructivism', 'correct_answer' => false],
                    ['id' => 'd5ec4b5e-b698-58ff-9b75-d7f245fdc364', 'description' => 'Conceptual art', 'correct_answer' => true],
                    ['id' => '52938ab3-41fe-5cee-9ff4-1e819848f49b', 'description' => 'Futurism', 'correct_answer' => false],
                    ['id' => 'dfd3f5d6-faf1-50c2-b865-38434c1f2a26', 'description' => 'Abstract Expressionism', 'correct_answer' => false]
                ]],
        ['id' => '2fc6472d-50de-54a6-bf19-f2b499cab405', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which movement used imagery from advertising, comics, and mass culture, with artists such as Andy Warhol?', 'difficulty' => 2, 'weight' => 209, 'alternatives' => [
                    ['id' => 'a37a925a-ddcd-5c53-baf9-780bb13e0222', 'description' => 'De Stijl', 'correct_answer' => false],
                    ['id' => '1bc7a72e-e748-5a00-9839-33c84d8c5228', 'description' => 'Conceptual art', 'correct_answer' => false],
                    ['id' => '51827292-0022-51c1-b5bf-494af36da06b', 'description' => 'Minimalism', 'correct_answer' => false],
                    ['id' => '346a8c21-0dc4-5586-a995-6e4bd021cc8d', 'description' => 'Constructivism', 'correct_answer' => false],
                    ['id' => 'f8201e2d-7ebb-5984-b7c3-fa27f6866c26', 'description' => 'Pop Art', 'correct_answer' => true]
                ]],
        ['id' => '98d3296f-4e5f-597c-aa67-67460250f39b', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which German art and design school was founded by Walter Gropius in 1919?', 'difficulty' => 2, 'weight' => 395, 'alternatives' => [
                    ['id' => '6a0edefd-effe-5873-922f-56ee010d0b1b', 'description' => 'Futurism', 'correct_answer' => false],
                    ['id' => '2f21dfb1-e728-5d42-9251-88a93ed8c206', 'description' => 'De Stijl', 'correct_answer' => false],
                    ['id' => '2fb257fb-38e4-52ba-9921-5f69ceb6c154', 'description' => 'The Bauhaus', 'correct_answer' => true],
                    ['id' => '55939fb8-07d7-591a-86bd-a40efe27197e', 'description' => 'Conceptual art', 'correct_answer' => false],
                    ['id' => '8e187f2d-8a3c-5215-bb01-84f472e934cd', 'description' => 'Abstract Expressionism', 'correct_answer' => false]
                ]],
        ['id' => 'c014e4ec-f7b2-5921-a0ab-47bf4f3f7518', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which Dutch art movement associated with Piet Mondrian favored primary colors and geometric abstraction?', 'difficulty' => 2, 'weight' => 293, 'alternatives' => [
                    ['id' => 'fca64fc5-bc53-58d6-ab50-a4495b6d1e72', 'description' => 'Constructivism', 'correct_answer' => false],
                    ['id' => 'c5a1bc17-c262-5728-86bf-72d5ddae5230', 'description' => 'De Stijl', 'correct_answer' => true],
                    ['id' => '2e06950b-4c27-50ab-82e9-de7ff478eb65', 'description' => 'Minimalism', 'correct_answer' => false],
                    ['id' => '420e5b6a-1bbb-5bf2-ba7f-b2d8b95fe0c4', 'description' => 'Abstract Expressionism', 'correct_answer' => false],
                    ['id' => 'a7c822d8-c6fc-50e8-a209-bb2501bda432', 'description' => 'Pop Art', 'correct_answer' => false]
                ]],
        ['id' => '1c067ab1-417b-5f01-9ceb-4e65789466c7', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which art movement of the 1960s emphasized simple geometric forms and reduced visual elements?', 'difficulty' => 2, 'weight' => 267, 'alternatives' => [
                    ['id' => 'dffa4c1a-9ebf-5e1b-9785-adf038a0d4f7', 'description' => 'Minimalism', 'correct_answer' => true],
                    ['id' => 'a0b12dab-eccf-5b1b-9bb5-b11dcc5eb536', 'description' => 'Futurism', 'correct_answer' => false],
                    ['id' => '44bf2896-d6cb-5896-9ed1-34529cb1445d', 'description' => 'Suprematism', 'correct_answer' => false],
                    ['id' => '2dfd385e-a717-5c85-8b02-508d096bc5f0', 'description' => 'Op Art', 'correct_answer' => false],
                    ['id' => '7b988085-938a-516a-bc93-14df4a5e0575', 'description' => 'Abstract Expressionism', 'correct_answer' => false]
                ]],
        ['id' => '15c58807-ae36-5330-abb2-380a8698b79b', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which collection of Middle Eastern folk tales is framed by Scheherazade telling stories to a king?', 'difficulty' => 2, 'weight' => 368, 'alternatives' => [
                    ['id' => 'b043f485-7840-55fc-8221-f4ce8abac2c5', 'description' => 'Dream of the Red Chamber', 'correct_answer' => false],
                    ['id' => '12ac8c65-2a04-5403-a11b-83ec54b77718', 'description' => 'Popol Vuh', 'correct_answer' => false],
                    ['id' => '1edae12a-578c-5364-9156-9eabd57c6f43', 'description' => 'Water Margin', 'correct_answer' => false],
                    ['id' => 'cd6768b2-21bc-5a18-868a-e10e0a42ac48', 'description' => 'The Conference of the Birds', 'correct_answer' => false],
                    ['id' => '2e9a24bb-2521-5619-a66a-b89f3613afa7', 'description' => 'One Thousand and One Nights', 'correct_answer' => true]
                ]],
        ['id' => 'e82f207d-c629-53da-906d-d6a468ba0b5c', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which Persian mystical poem by Attar follows birds on a quest for the Simurgh?', 'difficulty' => 2, 'weight' => 241, 'alternatives' => [
                    ['id' => '2aabff53-4743-5c29-a077-20e1016ea260', 'description' => 'Romance of the Three Kingdoms', 'correct_answer' => false],
                    ['id' => 'bcd4c15d-fc3b-5609-91b9-e9013774df7c', 'description' => 'One Thousand and One Nights', 'correct_answer' => false],
                    ['id' => 'e0885f51-ebd3-5946-b375-feba79b067f0', 'description' => 'The Pillow Book', 'correct_answer' => false],
                    ['id' => 'f9323266-340f-552e-bc70-5707969e317e', 'description' => 'The Conference of the Birds', 'correct_answer' => true],
                    ['id' => '18715bf4-3564-5303-8b96-152eaa84def3', 'description' => 'Journey to the West', 'correct_answer' => false]
                ]],
        ['id' => '41b7b810-f7bc-569f-bb16-54cb61be553f', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which Chinese classic follows a band of outlaws who gather at Liangshan Marsh?', 'difficulty' => 2, 'weight' => 381, 'alternatives' => [
                    ['id' => '99ef4e54-6e35-57c6-b514-291ce534bb4f', 'description' => 'Water Margin', 'correct_answer' => true],
                    ['id' => 'd98be657-65ad-5fd4-b1dd-4b81531aa7d8', 'description' => 'One Thousand and One Nights', 'correct_answer' => false],
                    ['id' => '3d1f712c-9a46-5764-9366-f0cb8d28286a', 'description' => 'Journey to the West', 'correct_answer' => false],
                    ['id' => 'b7e45238-32c2-58ec-b9ae-a5aff5734f45', 'description' => 'The Tale of Genji', 'correct_answer' => false],
                    ['id' => 'bcd57a2d-cdc6-58f0-b121-c60954722c8b', 'description' => 'The Book of Dede Korkut', 'correct_answer' => false]
                ]],
        ['id' => 'feb32d91-7ead-51f2-9183-5286220d6efb', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which K\'iche\' Maya text recounts creation stories and the adventures of the Hero Twins?', 'difficulty' => 2, 'weight' => 360, 'alternatives' => [
                    ['id' => '49e9f971-80e0-5d62-9202-d1cfa37d12d0', 'description' => 'Popol Vuh', 'correct_answer' => true],
                    ['id' => '2608090f-2652-5cab-8db0-2419f02da0d9', 'description' => 'The Conference of the Birds', 'correct_answer' => false],
                    ['id' => '5545eeb8-b7bd-5d79-bee1-11ee66326501', 'description' => 'Dream of the Red Chamber', 'correct_answer' => false],
                    ['id' => '1a4ee992-620a-5196-81b4-4dcf5c65ac37', 'description' => 'Romance of the Three Kingdoms', 'correct_answer' => false],
                    ['id' => 'e02d8677-6f8e-515e-a61c-f3e38b1a523c', 'description' => 'Journey to the West', 'correct_answer' => false]
                ]],
        ['id' => '1bc34737-cc47-5273-be28-a3e01e5acf44', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which work by Sei Shōnagon records observations, lists, and reflections from the Heian court?', 'difficulty' => 2, 'weight' => 382, 'alternatives' => [
                    ['id' => '4b9bfaf1-837d-5feb-bed9-8f5804a621f0', 'description' => 'Dream of the Red Chamber', 'correct_answer' => false],
                    ['id' => '65785334-2dcc-5dd6-a229-3b32723ad913', 'description' => 'Romance of the Three Kingdoms', 'correct_answer' => false],
                    ['id' => '0c554b40-4170-5b77-afd3-ec0e6027becb', 'description' => 'One Thousand and One Nights', 'correct_answer' => false],
                    ['id' => 'd5c65b52-4796-5f2d-9bb0-a8962305d0db', 'description' => 'The Pillow Book', 'correct_answer' => true],
                    ['id' => '5ba15d3a-5767-5e09-8367-f0b6a70c9581', 'description' => 'The Conference of the Birds', 'correct_answer' => false]
                ]],
        ['id' => '31eab50b-03ac-5282-ae51-1fee78ef700d', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which collection of epic stories preserves traditions of the Oghuz Turkic peoples?', 'difficulty' => 2, 'weight' => 342, 'alternatives' => [
                    ['id' => 'f540d1ad-8497-570c-9f53-9e84e111d940', 'description' => 'One Thousand and One Nights', 'correct_answer' => false],
                    ['id' => '142b1da5-d423-5c0a-ac18-4656cbe5baee', 'description' => 'The Book of Dede Korkut', 'correct_answer' => true],
                    ['id' => '88b8bd1b-191c-5f75-8d0e-26f9c8cb6cd3', 'description' => 'The Pillow Book', 'correct_answer' => false],
                    ['id' => '0f9b819e-8a90-5710-a9f2-3c2117831bec', 'description' => 'Romance of the Three Kingdoms', 'correct_answer' => false],
                    ['id' => '9ba1f94f-c915-5bed-a77c-6ef0ea8bc4a0', 'description' => 'The Tale of Genji', 'correct_answer' => false]
                ]],
        ['id' => 'e0ee3a1b-9275-5710-b0ee-2a69d7417dd0', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which Chinese novel chronicles the decline of the wealthy Jia family?', 'difficulty' => 2, 'weight' => 361, 'alternatives' => [
                    ['id' => 'b32690f9-2f69-58a9-987e-3eca1d47338d', 'description' => 'Dream of the Red Chamber', 'correct_answer' => true],
                    ['id' => '2b27ec48-7769-5fde-bffb-ee842e7d2044', 'description' => 'The Pillow Book', 'correct_answer' => false],
                    ['id' => '03acbb5a-33e8-59e6-9f56-4b4489f1e669', 'description' => 'One Thousand and One Nights', 'correct_answer' => false],
                    ['id' => 'e2305a0a-351b-5c42-b606-27bf71cd9f4e', 'description' => 'Journey to the West', 'correct_answer' => false],
                    ['id' => 'a3ab21be-f6f8-5284-bf27-4c8b96dca67a', 'description' => 'The Conference of the Birds', 'correct_answer' => false]
                ]],
        ['id' => '8bae8ef6-110a-544f-9e89-4bcd8a5a39c0', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which Japanese literary classic by Murasaki Shikibu follows the life and romances of Hikaru Genji?', 'difficulty' => 2, 'weight' => 361, 'alternatives' => [
                    ['id' => '22f03442-6429-5db4-8bdc-26336ca67417', 'description' => 'Popol Vuh', 'correct_answer' => false],
                    ['id' => '41605c4e-4723-5f13-855a-38cca423b4d5', 'description' => 'Dream of the Red Chamber', 'correct_answer' => false],
                    ['id' => '95bacf1e-72a0-56aa-94e8-86d255fb44ac', 'description' => 'The Tale of Genji', 'correct_answer' => true],
                    ['id' => '8980f202-b46f-59c6-9d27-7441b5d96ac3', 'description' => 'Romance of the Three Kingdoms', 'correct_answer' => false],
                    ['id' => '515c1010-ea8c-561c-874b-c1e378f42ed8', 'description' => 'The Conference of the Birds', 'correct_answer' => false]
                ]],
        ['id' => 'f112188b-7e1f-54d1-a9a9-73d051bb9339', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which Caravaggio painting uses dramatic chiaroscuro to depict the calling of an apostle?', 'difficulty' => 3, 'weight' => 409, 'alternatives' => [
                    ['id' => '90149e7b-28d6-586b-8e49-115d7611295d', 'description' => 'The Raft of the Medusa', 'correct_answer' => false],
                    ['id' => '24ace2a7-752d-5e74-8db7-cc10784f9abe', 'description' => 'The Arnolfini Portrait', 'correct_answer' => false],
                    ['id' => '37d77bf0-6a1c-5b9e-9f56-b561f84dbfa3', 'description' => 'Olympia', 'correct_answer' => false],
                    ['id' => '76eff092-abcb-5815-be5c-e200567d6c72', 'description' => 'The Calling of Saint Matthew', 'correct_answer' => true],
                    ['id' => '0c06fc7e-1681-551b-9b62-304ec24eb1ca', 'description' => 'The Garden of Earthly Delights', 'correct_answer' => false]
                ]],
        ['id' => 'f4602a2f-90c6-5da4-9d4c-de883d54fb08', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which Georges Seurat painting is a famous example of pointillism?', 'difficulty' => 3, 'weight' => 550, 'alternatives' => [
                    ['id' => 'b0ee9395-56bc-5aa5-adb5-1e3383fa8a2f', 'description' => 'The School of Athens', 'correct_answer' => false],
                    ['id' => '68c15802-cc29-571a-bc14-39b511aba435', 'description' => 'A Sunday Afternoon on the Island of La Grande Jatte', 'correct_answer' => true],
                    ['id' => '57e9eb9e-2855-5c04-8fb3-f24364245788', 'description' => 'The Garden of Earthly Delights', 'correct_answer' => false],
                    ['id' => '90ac01ec-8ace-5d6d-a0aa-34e81c68fbcf', 'description' => 'Las Meninas', 'correct_answer' => false],
                    ['id' => '48e4175e-262e-59cc-8ca3-25fa30f31769', 'description' => 'Liberty Leading the People', 'correct_answer' => false]
                ]],
        ['id' => 'ea06e683-6c3f-5c21-8932-a0900840caa1', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which Raphael fresco in the Vatican depicts ancient philosophers including Plato and Aristotle?', 'difficulty' => 3, 'weight' => 574, 'alternatives' => [
                    ['id' => 'b7e10e5a-17ee-5600-976d-91dcc7715699', 'description' => 'The Ambassadors', 'correct_answer' => false],
                    ['id' => '8e8a5fcd-5b3e-54f4-b542-6d26b67496cd', 'description' => 'The Raft of the Medusa', 'correct_answer' => false],
                    ['id' => 'e07dbad8-d56a-5999-8cf2-7f78a16043da', 'description' => 'The School of Athens', 'correct_answer' => true],
                    ['id' => '11dd016d-5f57-5e88-b4ad-6cf752646047', 'description' => 'The Calling of Saint Matthew', 'correct_answer' => false],
                    ['id' => '64459b6e-f222-565b-83c2-21e056ec9c3f', 'description' => 'The Arnolfini Portrait', 'correct_answer' => false]
                ]],
        ['id' => '9ba4815c-8b12-5a77-932f-154cbecb964f', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which Hans Holbein painting includes a distorted anamorphic skull?', 'difficulty' => 3, 'weight' => 421, 'alternatives' => [
                    ['id' => '00017494-3ac5-5fa9-87e6-1f078e659577', 'description' => 'The Ambassadors', 'correct_answer' => true],
                    ['id' => '850f9641-79b7-5e00-81ce-92d9a5827b9d', 'description' => 'The Raft of the Medusa', 'correct_answer' => false],
                    ['id' => '76622dfd-1287-5fd2-ae55-35b537ed9780', 'description' => 'A Sunday Afternoon on the Island of La Grande Jatte', 'correct_answer' => false],
                    ['id' => 'cafb5501-769f-5465-affb-3327f006154b', 'description' => 'Olympia', 'correct_answer' => false],
                    ['id' => 'b1bd3ec0-2bd4-5ee4-a606-89bf0dd285ba', 'description' => 'The Garden of Earthly Delights', 'correct_answer' => false]
                ]],
        ['id' => '75949b47-0522-580e-9dc0-c75b606baf74', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which Eugène Delacroix painting commemorates the July Revolution of 1830 in France?', 'difficulty' => 3, 'weight' => 537, 'alternatives' => [
                    ['id' => 'e6d43b2a-b6db-5e51-ae38-9caf5e2b7a96', 'description' => 'The School of Athens', 'correct_answer' => false],
                    ['id' => '3a7a2405-3e71-57fd-acd8-e8460d116dc5', 'description' => 'The Raft of the Medusa', 'correct_answer' => false],
                    ['id' => '923c51b5-e945-574b-ae47-5c24eb86a872', 'description' => 'Las Meninas', 'correct_answer' => false],
                    ['id' => 'b92a85b1-da67-577c-930f-64c388947a42', 'description' => 'Liberty Leading the People', 'correct_answer' => true],
                    ['id' => '7694d712-031c-57f4-83e5-ce9bf1a6e655', 'description' => 'The Arnolfini Portrait', 'correct_answer' => false]
                ]],
        ['id' => '8569f7a2-08f0-50b5-9d40-90fb107d8db2', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which Édouard Manet painting caused controversy when exhibited in Paris in 1865?', 'difficulty' => 3, 'weight' => 431, 'alternatives' => [
                    ['id' => 'c31a1db4-fe7d-5345-9aa9-a718b8645102', 'description' => 'The School of Athens', 'correct_answer' => false],
                    ['id' => 'a820f99f-c4e2-51df-b2e3-c538af37945a', 'description' => 'The Calling of Saint Matthew', 'correct_answer' => false],
                    ['id' => '1e45bcbd-bbf7-51fb-8f87-2f2cf82d790a', 'description' => 'The Raft of the Medusa', 'correct_answer' => false],
                    ['id' => 'd2d633f4-4a6f-5aa9-af0a-6c8453492b64', 'description' => 'Olympia', 'correct_answer' => true],
                    ['id' => 'ad6454d5-d496-5e9f-9a65-f176b0941ff3', 'description' => 'The Arnolfini Portrait', 'correct_answer' => false]
                ]],
        ['id' => '9ce666d5-cac7-595c-abeb-1cddcb035f09', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which Théodore Géricault painting depicts survivors of a French shipwreck?', 'difficulty' => 3, 'weight' => 431, 'alternatives' => [
                    ['id' => 'a3fcd1f9-39f4-5e7e-93a7-9cc08edbe083', 'description' => 'A Sunday Afternoon on the Island of La Grande Jatte', 'correct_answer' => false],
                    ['id' => '341fb4cf-3df4-5175-b855-e7c7988b2015', 'description' => 'The Ambassadors', 'correct_answer' => false],
                    ['id' => '5be2ee8e-444e-5834-8e7d-c776410d4cfc', 'description' => 'Liberty Leading the People', 'correct_answer' => false],
                    ['id' => '9b128931-dd38-534a-aa70-086a3dcaa3e0', 'description' => 'The Raft of the Medusa', 'correct_answer' => true],
                    ['id' => '80534383-f526-5612-b381-f4834bb5c3c7', 'description' => 'The Calling of Saint Matthew', 'correct_answer' => false]
                ]],
        ['id' => '68ebf678-0fa4-5486-af8f-7b2d789c0d1b', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which triptych by Hieronymus Bosch depicts paradise, earthly pleasures, and hell?', 'difficulty' => 3, 'weight' => 570, 'alternatives' => [
                    ['id' => '7fb68714-6d1c-5516-9ce8-7a6e02719521', 'description' => 'Olympia', 'correct_answer' => false],
                    ['id' => 'ab926ba7-25f3-5e8b-9d49-00b8e71032cf', 'description' => 'The School of Athens', 'correct_answer' => false],
                    ['id' => '22e9bf21-c569-5fda-9d99-0e0c9640934c', 'description' => 'The Arnolfini Portrait', 'correct_answer' => false],
                    ['id' => '1b91ffc3-2e40-5a73-8223-ef3cd1591872', 'description' => 'The Garden of Earthly Delights', 'correct_answer' => true],
                    ['id' => '201701e5-f74b-5769-a3eb-569d0bd5d682', 'description' => 'The Calling of Saint Matthew', 'correct_answer' => false]
                ]],
        ['id' => 'b4d97421-3b09-5beb-ad71-47f2d056cb84', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which Mozart opera follows a nobleman whose attempted seduction leads to supernatural retribution?', 'difficulty' => 3, 'weight' => 460, 'alternatives' => [
                    ['id' => '50f651a4-3713-5260-a8ee-bbadda8d94f8', 'description' => 'Così fan tutte', 'correct_answer' => false],
                    ['id' => '41ae06f0-5aed-514d-9d4d-d0e3b8e95d06', 'description' => 'Carmen', 'correct_answer' => false],
                    ['id' => 'e1dacd3a-1587-5ff0-a200-6fc90642ad48', 'description' => 'La Traviata', 'correct_answer' => false],
                    ['id' => '3b39e28d-cad4-565f-b8fd-ecf64566d264', 'description' => 'Don Giovanni', 'correct_answer' => true],
                    ['id' => 'dacb7ca4-d60b-53f5-9464-51d314230e0a', 'description' => 'The Marriage of Figaro', 'correct_answer' => false]
                ]],
        ['id' => '58587cfc-e2da-5a82-aebf-a59206f67f68', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which Bizet opera features the title character, a soldier named Don José, and the bullfighter Escamillo?', 'difficulty' => 3, 'weight' => 577, 'alternatives' => [
                    ['id' => '6e6267d0-d161-565b-b8f5-995751aeb770', 'description' => 'Carmen', 'correct_answer' => true],
                    ['id' => '00bad516-aadd-5fe7-8cb7-eab922a66ec8', 'description' => 'Così fan tutte', 'correct_answer' => false],
                    ['id' => 'ec74d1b4-9620-5c4d-b0e8-b92d341d3e84', 'description' => 'The Barber of Seville', 'correct_answer' => false],
                    ['id' => '5f2831e7-b818-5c5d-b964-9edd1ca879c3', 'description' => 'Tosca', 'correct_answer' => false],
                    ['id' => 'dae95255-720b-526d-986d-33a404a47f58', 'description' => 'The Marriage of Figaro', 'correct_answer' => false]
                ]],
        ['id' => '7d9b9ea7-8558-53ae-8a30-d81d5753cdb2', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which Mozart opera features the Queen of the Night and the bird-catcher Papageno?', 'difficulty' => 3, 'weight' => 422, 'alternatives' => [
                    ['id' => '764969bf-6348-5442-b5b1-f77ada9deaa6', 'description' => 'Carmen', 'correct_answer' => false],
                    ['id' => 'ff8f8100-0c75-59e4-a967-bc0fa6f951d3', 'description' => 'Don Giovanni', 'correct_answer' => false],
                    ['id' => '8baafd21-cb07-5f41-a5a4-2117d7d196cf', 'description' => 'Madama Butterfly', 'correct_answer' => false],
                    ['id' => '722a3880-db9a-5de9-96c5-40db1c8c987e', 'description' => 'La Traviata', 'correct_answer' => false],
                    ['id' => 'ba1cba06-6881-5b19-8c4c-00fc5f0645a1', 'description' => 'The Magic Flute', 'correct_answer' => true]
                ]],
        ['id' => '4b39c52d-7ec9-5519-8de4-a8f57515faa1', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which Verdi opera tells the story of Violetta Valéry and Alfredo Germont?', 'difficulty' => 3, 'weight' => 470, 'alternatives' => [
                    ['id' => '362bb026-dab1-5132-a139-c339e20ef80c', 'description' => 'La Traviata', 'correct_answer' => true],
                    ['id' => 'c38e305e-831b-5462-b7f5-b365c2a3cc4e', 'description' => 'Madama Butterfly', 'correct_answer' => false],
                    ['id' => '50818056-89ac-5711-a036-3e9d3456c940', 'description' => 'Così fan tutte', 'correct_answer' => false],
                    ['id' => '8cf56e57-bf58-5aaa-8d52-1265186b5292', 'description' => 'The Magic Flute', 'correct_answer' => false],
                    ['id' => 'a8e5ca48-58b9-5dc9-9086-b378546d82da', 'description' => 'Carmen', 'correct_answer' => false]
                ]],
        ['id' => 'afcc727e-61f0-51d5-a0d5-2b2e994d1755', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which Mozart opera is based on Beaumarchais\'s play about a servant\'s wedding day?', 'difficulty' => 3, 'weight' => 431, 'alternatives' => [
                    ['id' => '9d8578e8-0765-520a-a8c3-50e4bf4f571d', 'description' => 'Don Giovanni', 'correct_answer' => false],
                    ['id' => 'eccee00a-3dc9-5477-b7ad-cfe5f49f0729', 'description' => 'Rigoletto', 'correct_answer' => false],
                    ['id' => 'b4c3fe37-ce02-5549-bf29-c39223372705', 'description' => 'The Barber of Seville', 'correct_answer' => false],
                    ['id' => '5de8c561-abca-5592-8a4f-5ca5e56cb37a', 'description' => 'The Marriage of Figaro', 'correct_answer' => true],
                    ['id' => '6fd6782e-3b03-5da5-b756-04ef35a12ebb', 'description' => 'The Magic Flute', 'correct_answer' => false]
                ]],
        ['id' => '8cd2b982-a6dd-5678-8c5c-260ff2885dcd', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which Mozart opera centers on a wager testing the fidelity of two sisters?', 'difficulty' => 3, 'weight' => 595, 'alternatives' => [
                    ['id' => '3e0b4b28-8307-51e3-bdef-4427417b8ee7', 'description' => 'Così fan tutte', 'correct_answer' => true],
                    ['id' => 'e4cada37-b033-5311-836d-e414a5aaca83', 'description' => 'The Barber of Seville', 'correct_answer' => false],
                    ['id' => '16420825-5496-589c-bcc9-67b824ac1d31', 'description' => 'The Magic Flute', 'correct_answer' => false],
                    ['id' => '994c1a8c-e1d2-5af6-85a3-87267ed298ae', 'description' => 'Rigoletto', 'correct_answer' => false],
                    ['id' => 'f9ba3987-d901-556f-baae-86dee7058026', 'description' => 'Tosca', 'correct_answer' => false]
                ]],
        ['id' => '8cfab432-01d6-560b-bda8-7897d93cf782', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which Puccini opera tells of Cio-Cio-San and an American naval officer named Pinkerton?', 'difficulty' => 3, 'weight' => 433, 'alternatives' => [
                    ['id' => '4768491f-cb12-5c64-b933-41efdf866ad0', 'description' => 'Madama Butterfly', 'correct_answer' => true],
                    ['id' => '8023d5be-c2f3-5ae9-a364-0f33fbbb8cc3', 'description' => 'Tosca', 'correct_answer' => false],
                    ['id' => 'ed8c0ce8-a724-563c-a6fd-be9ebd64a9bc', 'description' => 'Don Giovanni', 'correct_answer' => false],
                    ['id' => '5f3bd568-1921-5716-823a-07c2ef347b98', 'description' => 'La Traviata', 'correct_answer' => false],
                    ['id' => 'e28523da-d6ba-594b-bcff-a3abc5a47580', 'description' => 'The Barber of Seville', 'correct_answer' => false]
                ]],
        ['id' => 'f70638e0-5ebc-5e29-87e3-578cf62d9ae4', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which Rossini opera follows Figaro as he helps Count Almaviva win Rosina?', 'difficulty' => 3, 'weight' => 442, 'alternatives' => [
                    ['id' => 'c4a7e696-84ef-57ec-9781-21798ec85107', 'description' => 'The Magic Flute', 'correct_answer' => false],
                    ['id' => 'f10820dd-77d5-562d-9fb2-b1d66b99f30a', 'description' => 'The Barber of Seville', 'correct_answer' => true],
                    ['id' => '20e0bb7e-6410-5711-91ba-4d1a094c44f8', 'description' => 'The Marriage of Figaro', 'correct_answer' => false],
                    ['id' => '464773ce-75ee-5b7a-9102-b81b317a105b', 'description' => 'Così fan tutte', 'correct_answer' => false],
                    ['id' => '30d6bfd5-d061-5d4e-9dcd-d6aec5bd63ad', 'description' => 'Carmen', 'correct_answer' => false]
                ]],
        ['id' => '931af5c2-f79c-50a7-a21c-fe75bbeae240', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which multi-volume poem by William Carlos Williams takes an American city as its central subject?', 'difficulty' => 3, 'weight' => 523, 'alternatives' => [
                    ['id' => '64ae9671-2b25-51b3-955e-5801e2063e5f', 'description' => 'The Duino Elegies', 'correct_answer' => false],
                    ['id' => '2686c3d8-5f7f-5dfb-b1a5-848ddb93c3b8', 'description' => 'The Book of Disquiet', 'correct_answer' => false],
                    ['id' => '4bd66163-84dd-5030-8f42-1c8f2ca8c9f2', 'description' => 'Paterson', 'correct_answer' => true],
                    ['id' => 'dcf88408-2f18-5b7d-a5bb-18a4f11752bf', 'description' => 'Ariel', 'correct_answer' => false],
                    ['id' => 'd3d99f28-865a-511f-a791-fa6810c18f3a', 'description' => 'Four Quartets', 'correct_answer' => false]
                ]],
        ['id' => 'b16ef52b-f6d1-53c8-b076-efeb00fed528', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which posthumously published poetry collection by Sylvia Plath includes \'Lady Lazarus\'?', 'difficulty' => 3, 'weight' => 471, 'alternatives' => [
                    ['id' => '0f98785c-f62b-551d-acbf-643e924e67f9', 'description' => 'Howl', 'correct_answer' => false],
                    ['id' => 'c7fe8675-3fff-5eca-adff-fa16b39615c7', 'description' => 'Ariel', 'correct_answer' => true],
                    ['id' => '3877c4b7-3a41-5f3c-9074-a744b59904e5', 'description' => 'The Duino Elegies', 'correct_answer' => false],
                    ['id' => '91ee2168-8ac0-53ca-8a90-2aff1d0299cd', 'description' => 'The Waste Land', 'correct_answer' => false],
                    ['id' => 'f8d2ee11-4554-585c-a3b7-fb801c43de29', 'description' => 'The Bridge', 'correct_answer' => false]
                ]],
        ['id' => 'aaae4b9b-1c3c-59e5-b6cf-b792e33fc5bc', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which T. S. Eliot poem includes the refrain \'In the room the women come and go\'?', 'difficulty' => 3, 'weight' => 544, 'alternatives' => [
                    ['id' => '82c1d71b-c7ce-5a5c-a221-1eccff237cac', 'description' => 'Ariel', 'correct_answer' => false],
                    ['id' => 'd6bdbcf4-9192-522b-b1d6-3ad839537e88', 'description' => 'The Bridge', 'correct_answer' => false],
                    ['id' => '312477ff-14cc-5d8b-a8ea-36373c42d8fd', 'description' => 'The Book of Disquiet', 'correct_answer' => false],
                    ['id' => '44aea286-86c1-5ba3-bad7-49516dc1c4e7', 'description' => 'Four Quartets', 'correct_answer' => false],
                    ['id' => '395bbf91-cf58-5a41-9547-2b3ce401b67f', 'description' => 'The Love Song of J. Alfred Prufrock', 'correct_answer' => true]
                ]],
        ['id' => '23f4dd97-7ef5-5b84-9aa8-83f5fd978ead', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which Allen Ginsberg poem was the subject of a notable obscenity trial in 1957?', 'difficulty' => 3, 'weight' => 425, 'alternatives' => [
                    ['id' => 'c7bb9a12-a797-5038-a703-c0bd31af9823', 'description' => 'Howl', 'correct_answer' => true],
                    ['id' => 'fdc30aa5-8c2e-54a2-b614-53223cf51234', 'description' => 'The Cantos', 'correct_answer' => false],
                    ['id' => '8b433c93-df1d-5bfd-873b-4ca2c6bc4a0a', 'description' => 'The Love Song of J. Alfred Prufrock', 'correct_answer' => false],
                    ['id' => '3346a083-1972-59d9-9e9d-4cb96efe9623', 'description' => 'Four Quartets', 'correct_answer' => false],
                    ['id' => '25f32d95-68bc-5cc1-ad7f-58191136328d', 'description' => 'The Book of Disquiet', 'correct_answer' => false]
                ]],
        ['id' => '2dbcad56-2579-54be-82f0-2516cfa0793b', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which T. S. Eliot poem begins with the line \'April is the cruellest month\'?', 'difficulty' => 3, 'weight' => 522, 'alternatives' => [
                    ['id' => 'c2b8aea0-bea6-59d1-b5bd-f78fb3f9889a', 'description' => 'The Waste Land', 'correct_answer' => true],
                    ['id' => 'd9b5b089-1bc5-51d0-ab2a-ad1b9ac4a0c7', 'description' => 'The Bridge', 'correct_answer' => false],
                    ['id' => 'f86fbedf-40f9-5266-a773-a5709edb18ed', 'description' => 'The Cantos', 'correct_answer' => false],
                    ['id' => '016b559d-0404-51f2-bcfd-1ec024a7d194', 'description' => 'Four Quartets', 'correct_answer' => false],
                    ['id' => '76032859-5141-54dd-a818-79b8c9398556', 'description' => 'Ariel', 'correct_answer' => false]
                ]],
        ['id' => 'cc646c0a-3437-5a83-b4ce-8f6bf4554fab', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which long, unfinished poetic sequence was written by Ezra Pound?', 'difficulty' => 3, 'weight' => 578, 'alternatives' => [
                    ['id' => 'fcd2a950-d9b0-5917-a9d4-6d012344b95f', 'description' => 'The Cantos', 'correct_answer' => true],
                    ['id' => '2299b0d4-fc67-582d-bb2c-0afe058abd69', 'description' => 'Howl', 'correct_answer' => false],
                    ['id' => '1321d0b0-e922-5966-a392-63a33e8b475a', 'description' => 'Paterson', 'correct_answer' => false],
                    ['id' => 'f0c20ac4-e31d-5c18-a16c-f0cbc4c872b7', 'description' => 'The Book of Disquiet', 'correct_answer' => false],
                    ['id' => '8bb643a4-866d-5642-9858-a00c2ad39b14', 'description' => 'The Love Song of J. Alfred Prufrock', 'correct_answer' => false]
                ]],
        ['id' => '4a19e3e4-4ff4-56ca-a1f8-d5ddcaae30e6', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which T. S. Eliot poetic sequence includes \'Burnt Norton\' and \'Little Gidding\'?', 'difficulty' => 3, 'weight' => 475, 'alternatives' => [
                    ['id' => '81ed0bfd-177d-56a3-9318-eadfd7bdd36f', 'description' => 'The Bridge', 'correct_answer' => false],
                    ['id' => '772a8306-7277-5066-9dce-80263428ac6a', 'description' => 'The Waste Land', 'correct_answer' => false],
                    ['id' => '606aa2cf-2e8c-5b4a-bc87-056def8ea4d7', 'description' => 'The Cantos', 'correct_answer' => false],
                    ['id' => '7648e19b-7dac-54ac-a5cd-8f4701889750', 'description' => 'The Duino Elegies', 'correct_answer' => false],
                    ['id' => '2bdc1963-d560-575f-93e1-3bcbb20169dd', 'description' => 'Four Quartets', 'correct_answer' => true]
                ]],
        ['id' => '604aa17c-0360-5741-8c84-4dd272c07ad6', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which poetic cycle by Rainer Maria Rilke explores angels, mortality, and human existence?', 'difficulty' => 3, 'weight' => 531, 'alternatives' => [
                    ['id' => '55a9a6c2-291b-5f96-b178-90ec8fd81139', 'description' => 'The Waste Land', 'correct_answer' => false],
                    ['id' => 'db845939-3479-5df9-8fc1-5a0b8c4460d3', 'description' => 'The Duino Elegies', 'correct_answer' => true],
                    ['id' => '08c9ffdb-e97a-503a-93ec-f449d9203ec9', 'description' => 'Ariel', 'correct_answer' => false],
                    ['id' => 'b5f41dd1-f206-58e6-9d0f-87f6bea3a806', 'description' => 'The Cantos', 'correct_answer' => false],
                    ['id' => '04744889-2ec9-569b-b12f-88c12bb3208f', 'description' => 'Paterson', 'correct_answer' => false]
                ]],
        ['id' => 'b5c782e6-4789-5832-a450-5d089b954745', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which Stravinsky ballet-cantata depicts a traditional Russian peasant wedding?', 'difficulty' => 3, 'weight' => 581, 'alternatives' => [
                    ['id' => '8cb1dba8-1de3-5fd2-80ba-ec5272d65443', 'description' => 'Rodeo', 'correct_answer' => false],
                    ['id' => 'ca34b254-9d7c-5deb-9f2e-4b47d5b6e23a', 'description' => 'The Green Table', 'correct_answer' => false],
                    ['id' => '5a8e2a19-03a1-5c38-9192-da1526ae5e44', 'description' => 'Les Noces', 'correct_answer' => true],
                    ['id' => 'cc18a19d-5fbf-5b2e-991c-bf26ee60a317', 'description' => 'The Rite of Spring', 'correct_answer' => false],
                    ['id' => '7e264c61-4856-51e5-ba5d-40eb93ea82f6', 'description' => 'Petrushka', 'correct_answer' => false]
                ]],
        ['id' => '2f2c438f-d1b5-5d4d-a019-e85420c13695', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which Stravinsky ballet tells of a puppet who comes to life at a Russian fair?', 'difficulty' => 3, 'weight' => 476, 'alternatives' => [
                    ['id' => '97f33a77-1283-5b64-8f32-5f9a5d25163b', 'description' => 'The Rite of Spring', 'correct_answer' => false],
                    ['id' => '8d87f5e9-4d6f-580a-81ce-5e93d6e3b1d5', 'description' => 'The Green Table', 'correct_answer' => false],
                    ['id' => '66de7eb5-3f6e-5ffc-9841-d29782e4e18d', 'description' => 'Appalachian Spring', 'correct_answer' => false],
                    ['id' => '4e11fdd3-5b6d-5f11-9b9f-5fd7173c1f7c', 'description' => 'Petrushka', 'correct_answer' => true],
                    ['id' => '678d75fe-dedf-58b4-858c-cd67c440b404', 'description' => 'Pulcinella', 'correct_answer' => false]
                ]],
        ['id' => '72ee25d7-ab9b-5f19-a59f-f5db63398f14', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which Bartók pantomime ballet centers on a young woman used to lure men for robbery?', 'difficulty' => 3, 'weight' => 509, 'alternatives' => [
                    ['id' => 'eb4d9c4d-94ce-538f-8d79-ef0a58e5d4a1', 'description' => 'Petrushka', 'correct_answer' => false],
                    ['id' => '86ab184e-72fb-532d-bcbd-2cfd84771f02', 'description' => 'The Green Table', 'correct_answer' => false],
                    ['id' => '35a1a91a-92a1-5838-9c31-88b01c131cf9', 'description' => 'Billy the Kid', 'correct_answer' => false],
                    ['id' => '9899cc17-0edb-5aa0-9292-d93395320a87', 'description' => 'The Miraculous Mandarin', 'correct_answer' => true],
                    ['id' => '0efc8a61-21a7-55ec-8605-f2052d447eea', 'description' => 'Pulcinella', 'correct_answer' => false]
                ]],
        ['id' => 'feb8af17-f9f2-5b8a-9225-8c86c711d96d', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which Aaron Copland ballet depicts the life of the American outlaw?', 'difficulty' => 3, 'weight' => 494, 'alternatives' => [
                    ['id' => 'b2425bf6-1a59-5e59-87d3-60e6cd6d54d6', 'description' => 'Pulcinella', 'correct_answer' => false],
                    ['id' => '8b5ce03a-bab0-58b8-a6b7-e19d49277c1c', 'description' => 'Daphnis et Chloé', 'correct_answer' => false],
                    ['id' => '3a1670dd-2519-57a0-995d-aadc58427186', 'description' => 'Les Noces', 'correct_answer' => false],
                    ['id' => '4a574877-5f15-577d-bdf1-fc9f3656969e', 'description' => 'Billy the Kid', 'correct_answer' => true],
                    ['id' => '39f67f3a-a359-5fff-82b9-96c88e02d4c4', 'description' => 'Petrushka', 'correct_answer' => false]
                ]],
        ['id' => '59749754-ace0-5705-9deb-a6cfdabb1820', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which Aaron Copland ballet was choreographed by Martha Graham and premiered in 1944?', 'difficulty' => 3, 'weight' => 427, 'alternatives' => [
                    ['id' => 'e6419f32-f3b9-5ffd-b22b-561bd31a6557', 'description' => 'Billy the Kid', 'correct_answer' => false],
                    ['id' => 'a170c604-7212-5629-8217-c3324a53744b', 'description' => 'Petrushka', 'correct_answer' => false],
                    ['id' => 'a8dec4f5-fe3a-53d7-b53d-528cf0cb86ad', 'description' => 'Les Noces', 'correct_answer' => false],
                    ['id' => 'baae49fe-59e4-522c-8845-8cd91822faae', 'description' => 'Rodeo', 'correct_answer' => false],
                    ['id' => 'c40bced7-5c45-5afc-99f9-3226406a1b69', 'description' => 'Appalachian Spring', 'correct_answer' => true]
                ]],
        ['id' => '82e1a3bc-0810-510b-a563-7f4cd7d90b30', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which anti-war ballet by Kurt Jooss depicts Death and diplomats in a series of dances?', 'difficulty' => 3, 'weight' => 433, 'alternatives' => [
                    ['id' => '920a6ebb-d12f-572a-89de-d87c7acb0931', 'description' => 'The Miraculous Mandarin', 'correct_answer' => false],
                    ['id' => 'd872f3c6-5c4b-5c3d-8ede-9b24ab87e997', 'description' => 'Billy the Kid', 'correct_answer' => false],
                    ['id' => 'a5b3c61b-f029-58e2-b5d2-cca705690332', 'description' => 'Daphnis et Chloé', 'correct_answer' => false],
                    ['id' => '482e6d96-66c0-5ed9-9f40-39713b2f9e3c', 'description' => 'Petrushka', 'correct_answer' => false],
                    ['id' => '5b1b316b-b5eb-53b4-a58d-fd729d14b5f0', 'description' => 'The Green Table', 'correct_answer' => true]
                ]],
        ['id' => '9a18f001-8383-557d-a7c1-9048206057eb', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which Ravel ballet was commissioned by Sergei Diaghilev for the Ballets Russes?', 'difficulty' => 3, 'weight' => 453, 'alternatives' => [
                    ['id' => '4863bab2-6b97-5cdc-a302-c0410bf4ace6', 'description' => 'The Rite of Spring', 'correct_answer' => false],
                    ['id' => 'a640ff8e-6631-5344-aab1-99f759b7f220', 'description' => 'Rodeo', 'correct_answer' => false],
                    ['id' => 'be937656-a93c-5130-a822-a0b1aec7d183', 'description' => 'Petrushka', 'correct_answer' => false],
                    ['id' => '5987d5b7-6298-5f67-ad17-fccd2bea7918', 'description' => 'Daphnis et Chloé', 'correct_answer' => true],
                    ['id' => '15b32579-9c08-51a1-99bf-6bdc8c0b43c6', 'description' => 'The Miraculous Mandarin', 'correct_answer' => false]
                ]],
        ['id' => '9ad07c4c-5559-5ad3-8ee5-9376e11109cc', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which Aaron Copland ballet includes the orchestral suite Four Dance Episodes?', 'difficulty' => 3, 'weight' => 560, 'alternatives' => [
                    ['id' => '9dc7f15e-a9ac-5fc5-8774-04c86a0c10d8', 'description' => 'The Green Table', 'correct_answer' => false],
                    ['id' => '707164f5-23e8-5926-b755-38126351faaf', 'description' => 'Les Noces', 'correct_answer' => false],
                    ['id' => '48cdfa6c-5b7a-5880-b11e-eb62558b3e92', 'description' => 'Rodeo', 'correct_answer' => true],
                    ['id' => '00052838-f8c5-55d4-a9a6-08bb18da03fc', 'description' => 'Billy the Kid', 'correct_answer' => false],
                    ['id' => 'c766ede2-ff24-520b-b876-85044398f1a4', 'description' => 'Petrushka', 'correct_answer' => false]
                ]],
        ['id' => '45450ca0-4221-51b6-aeb8-b62468efe5a1', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which Van Gogh painting depicts his room in Arles?', 'difficulty' => 3, 'weight' => 535, 'alternatives' => [
                    ['id' => '8dfaf6c1-da0f-5758-a634-8b935836a876', 'description' => 'The Great Wave off Kanagawa', 'correct_answer' => false],
                    ['id' => '78acaf5b-60f5-5e6e-b52d-a4d99d48f5ce', 'description' => 'The Bedroom', 'correct_answer' => true],
                    ['id' => '29d0bafb-4a75-599d-a2d5-5a40b4d08707', 'description' => 'The Third of May 1808', 'correct_answer' => false],
                    ['id' => '6c33d286-14c3-543c-a32e-0c8efa39e77e', 'description' => 'The Fighting Temeraire', 'correct_answer' => false],
                    ['id' => 'f6b7a51f-780a-5d8f-a439-adf635147724', 'description' => 'The Kiss', 'correct_answer' => false]
                ]],
        ['id' => 'e7c49eb1-8c47-5938-b37a-b1a3e94deefc', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which Hokusai woodblock print depicts a towering wave near Mount Fuji?', 'difficulty' => 3, 'weight' => 549, 'alternatives' => [
                    ['id' => 'ddbf97f2-cb6e-5976-b0c1-0b41854bb3f0', 'description' => 'The Great Wave off Kanagawa', 'correct_answer' => true],
                    ['id' => 'f5168018-b645-5a99-9d4e-4c4fba78a262', 'description' => 'The Kiss', 'correct_answer' => false],
                    ['id' => 'b62699cb-fbef-5526-b5af-d3b8cd31e563', 'description' => 'The Hay Wain', 'correct_answer' => false],
                    ['id' => '73062ca9-b4bc-5778-9124-4c9e95497c89', 'description' => 'The Raft of the Medusa', 'correct_answer' => false],
                    ['id' => 'f36bdcad-1a88-51bd-bc62-95c39e23b86c', 'description' => 'The Death of Sardanapalus', 'correct_answer' => false]
                ]],
        ['id' => '3a2edab1-fae7-54dc-9f48-fd529be7b52c', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which John Constable painting depicts a rural scene with a horse-drawn cart crossing a stream?', 'difficulty' => 3, 'weight' => 407, 'alternatives' => [
                    ['id' => '0d33371d-e668-5b09-ba55-3b7cc031b4db', 'description' => 'Thirty-Six Views of Mount Fuji', 'correct_answer' => false],
                    ['id' => 'e7d80f76-caf8-5c94-a852-1dac9ee1f1cf', 'description' => 'The Great Wave off Kanagawa', 'correct_answer' => false],
                    ['id' => 'f9419c96-b2c1-54f8-9e28-2c6a3e67ec38', 'description' => 'The Fighting Temeraire', 'correct_answer' => false],
                    ['id' => '14b0ad39-4d66-5a29-b2db-82a23625202b', 'description' => 'The Kiss', 'correct_answer' => false],
                    ['id' => '6266d360-b706-5694-b7aa-4bdad99c06ba', 'description' => 'The Hay Wain', 'correct_answer' => true]
                ]],
        ['id' => '12c8f8a3-99b6-5370-b43e-c2f7cc828952', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which Vincent van Gogh painting depicts an interior with a billiard table and intense colors?', 'difficulty' => 3, 'weight' => 408, 'alternatives' => [
                    ['id' => 'cc165a60-998b-5fe3-8858-37a91cbef81f', 'description' => 'Thirty-Six Views of Mount Fuji', 'correct_answer' => false],
                    ['id' => '31da1bbd-112f-5a19-a484-da02d5f23876', 'description' => 'The Third of May 1808', 'correct_answer' => false],
                    ['id' => '2b9e3aa1-e5c3-5277-8123-b72e76af9706', 'description' => 'The Raft of the Medusa', 'correct_answer' => false],
                    ['id' => '6c76e2ca-e6d9-5a8a-bf35-522310c6e30d', 'description' => 'The Kiss', 'correct_answer' => false],
                    ['id' => 'e70b55ad-1cc0-5f37-bc74-17c1120e8429', 'description' => 'The Night Café', 'correct_answer' => true]
                ]],
        ['id' => '62907bfc-4bb6-5fbb-8f8f-d5714b67c681', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which Hokusai print series includes The Great Wave off Kanagawa?', 'difficulty' => 3, 'weight' => 450, 'alternatives' => [
                    ['id' => 'e8a80ead-9920-5410-9f91-9fa22bfec684', 'description' => 'Thirty-Six Views of Mount Fuji', 'correct_answer' => true],
                    ['id' => 'a8aaee7d-f3a6-523b-a8a9-b44035bc5113', 'description' => 'The Night Café', 'correct_answer' => false],
                    ['id' => '653067ec-71e1-5b47-b61d-c93c1167a700', 'description' => 'The Raft of the Medusa', 'correct_answer' => false],
                    ['id' => 'badf20b9-8712-5789-865b-00b33f8c7e58', 'description' => 'The Great Wave off Kanagawa', 'correct_answer' => false],
                    ['id' => 'bc6ff123-0147-5c12-a3a4-9513dff63c10', 'description' => 'The Bedroom', 'correct_answer' => false]
                ]],
        ['id' => 'cd663693-bd24-5df0-8727-3cf2c2b202c0', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which Francisco Goya painting depicts the execution of Spanish civilians by French troops?', 'difficulty' => 3, 'weight' => 597, 'alternatives' => [
                    ['id' => '7d2c5ea2-3cdd-5c3c-b276-95b71f8365ed', 'description' => 'The Fighting Temeraire', 'correct_answer' => false],
                    ['id' => '9dee36f9-c7c2-545c-a786-65f7d0f825ba', 'description' => 'The Kiss', 'correct_answer' => false],
                    ['id' => '2c628e2d-7118-5b15-a0dc-d5db67327ca6', 'description' => 'The Third of May 1808', 'correct_answer' => true],
                    ['id' => 'eadedcc2-d477-5b71-a05b-08ee11511c6b', 'description' => 'The Night Café', 'correct_answer' => false],
                    ['id' => '49868c0e-c143-5097-b469-0011067c16fc', 'description' => 'The Hay Wain', 'correct_answer' => false]
                ]],
        ['id' => 'c20e46d7-aded-5d52-b1e9-8c878671ed71', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which Delacroix painting depicts the destruction of an Assyrian king\'s possessions and concubines?', 'difficulty' => 3, 'weight' => 450, 'alternatives' => [
                    ['id' => '849b830c-7a79-5b2a-a930-712c97b493b1', 'description' => 'The Great Wave off Kanagawa', 'correct_answer' => false],
                    ['id' => '70cb38a2-daa1-5ab0-bcc7-d24b76511ae8', 'description' => 'The Fighting Temeraire', 'correct_answer' => false],
                    ['id' => 'c56813ed-5b13-5e9c-bf5b-0c076bbd23ff', 'description' => 'The Kiss', 'correct_answer' => false],
                    ['id' => '6e0a8c29-2776-5b7a-9b65-bbc86f335563', 'description' => 'The Death of Sardanapalus', 'correct_answer' => true],
                    ['id' => 'f9d6a022-0b98-58ae-a52b-f722ffcecfea', 'description' => 'The Hay Wain', 'correct_answer' => false]
                ]],
        ['id' => 'ce7a0a66-3d5e-577c-9642-a0719f10ebaa', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which Gustav Klimt painting depicts an embracing couple covered in decorative gold patterns?', 'difficulty' => 3, 'weight' => 500, 'alternatives' => [
                    ['id' => '9d55e937-0c6c-55cc-8cc4-ca8cebafa1f4', 'description' => 'The Fighting Temeraire', 'correct_answer' => false],
                    ['id' => 'ea1b5fdb-8c7e-5484-9ef4-41ff90bf927a', 'description' => 'The Kiss', 'correct_answer' => true],
                    ['id' => '257c41d0-bba5-588c-a5ad-7c6e2d211823', 'description' => 'The Raft of the Medusa', 'correct_answer' => false],
                    ['id' => 'db025cdf-bf23-5696-a152-661665d1413e', 'description' => 'The Hay Wain', 'correct_answer' => false],
                    ['id' => 'afc9ca3b-9601-541c-a694-e3cb84f300c1', 'description' => 'The Night Café', 'correct_answer' => false]
                ]],
        ['id' => '95603514-b2e2-5239-8853-f6dec93e0908', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which 1434 painting by Jan van Eyck includes a Latin inscription above a convex mirror?', 'difficulty' => 4, 'weight' => 667, 'alternatives' => [
                    ['id' => '6d0aee11-f12c-5be2-9562-d4b48f9f564d', 'description' => 'The Arnolfini Portrait', 'correct_answer' => true],
                    ['id' => 'cf0c06e8-b5b8-5a64-a810-9fac724ca30b', 'description' => 'The Bardi Altarpiece', 'correct_answer' => false],
                    ['id' => 'e99eb3b7-1ec1-5788-8f51-2137d594dd1c', 'description' => 'The Mérode Altarpiece', 'correct_answer' => false],
                    ['id' => 'ed6ee0ec-8177-5669-92f7-5684f25493c0', 'description' => 'The Portinari Altarpiece', 'correct_answer' => false],
                    ['id' => 'e74cdf6a-28ea-5d52-bd35-8dbf0d366a4f', 'description' => 'The Ambassadors', 'correct_answer' => false]
                ]],
        ['id' => '8347046e-73b1-5cab-b4d0-92428e1041c4', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which Holbein painting contains a skull that becomes recognizable when viewed from an oblique angle?', 'difficulty' => 4, 'weight' => 706, 'alternatives' => [
                    ['id' => '15f168a7-2a45-5d74-b5c1-c0fd2154688a', 'description' => 'The Ambassadors', 'correct_answer' => true],
                    ['id' => '9ee012b6-67cc-56e3-8399-8252d6dc4253', 'description' => 'The Isenheim Altarpiece', 'correct_answer' => false],
                    ['id' => '593f27ff-5dd7-5967-a030-f1c0db02c4d8', 'description' => 'The Bardi Altarpiece', 'correct_answer' => false],
                    ['id' => 'c92fbc6a-76e2-5209-b75a-3475c9ec96e9', 'description' => 'The Ghent Altarpiece', 'correct_answer' => false],
                    ['id' => 'a497cc51-5cd9-56f1-9c7f-f57ec41ac097', 'description' => 'The Portinari Altarpiece', 'correct_answer' => false]
                ]],
        ['id' => 'ce055cb5-20a4-515a-b0bb-a9f07dc0e5a9', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which monumental polyptych by Hubert and Jan van Eyck is also known as The Adoration of the Mystic Lamb?', 'difficulty' => 4, 'weight' => 717, 'alternatives' => [
                    ['id' => 'bf163c50-6c5c-5e81-8761-051e5f708136', 'description' => 'The Isenheim Altarpiece', 'correct_answer' => false],
                    ['id' => 'f91badc3-a1f7-56f4-a9f7-ea71d6f6caea', 'description' => 'The Bardi Altarpiece', 'correct_answer' => false],
                    ['id' => 'a406b552-7ab9-5790-b4c5-5a3aeb99c0b5', 'description' => 'The Mérode Altarpiece', 'correct_answer' => false],
                    ['id' => '55a93f84-dc80-5bc9-9a01-8e34d9570db9', 'description' => 'The Merode Triptych', 'correct_answer' => false],
                    ['id' => 'e5d5a7ee-a921-5d8f-918d-94ddafe815ac', 'description' => 'The Ghent Altarpiece', 'correct_answer' => true]
                ]],
        ['id' => 'b8f1738d-9f10-5d31-ad0d-200b28a164b4', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which Hugo van der Goes triptych was commissioned for a hospital in Florence and influenced Italian painters?', 'difficulty' => 4, 'weight' => 687, 'alternatives' => [
                    ['id' => '0c065f2c-ddb8-5892-ab0d-43d10dd60ae6', 'description' => 'The Portinari Altarpiece', 'correct_answer' => true],
                    ['id' => '27be338a-6492-5698-adf9-d11c4916b9fe', 'description' => 'The Merode Triptych', 'correct_answer' => false],
                    ['id' => 'f9e2a55e-fc3a-5d0d-badd-a6475dffbff2', 'description' => 'The Maestà', 'correct_answer' => false],
                    ['id' => 'e551f651-10c5-560a-a13f-56da52acd360', 'description' => 'The Wilton Diptych', 'correct_answer' => false],
                    ['id' => 'beb933f7-dc92-52fe-991e-8cee4c77181c', 'description' => 'The Arnolfini Portrait', 'correct_answer' => false]
                ]],
        ['id' => '7d7d2da6-f766-515c-8ebf-74830ae286fb', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which early Netherlandish triptych, attributed to the Master of Flémalle, depicts the Annunciation in a domestic setting?', 'difficulty' => 4, 'weight' => 682, 'alternatives' => [
                    ['id' => '8505a305-8e4c-53fa-b4a1-1623a9c53b75', 'description' => 'The Portinari Altarpiece', 'correct_answer' => false],
                    ['id' => '28bff6d5-c6e6-5b09-b90e-f625634f2327', 'description' => 'The Mérode Altarpiece', 'correct_answer' => true],
                    ['id' => '4aeb3602-cc34-5c8f-b543-cb14556ede32', 'description' => 'The Isenheim Altarpiece', 'correct_answer' => false],
                    ['id' => '761d8a4e-5e83-5470-a867-7aa79499e3b9', 'description' => 'The Merode Triptych', 'correct_answer' => false],
                    ['id' => '84520f7c-33ec-54b3-8c34-d6bdda5370b5', 'description' => 'The Maestà', 'correct_answer' => false]
                ]],
        ['id' => 'dcd74677-d835-5137-9e82-2beae912bdd1', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which Duccio altarpiece was created for Siena Cathedral and depicts the enthroned Virgin and Child?', 'difficulty' => 4, 'weight' => 644, 'alternatives' => [
                    ['id' => '49bb8eaf-b477-5dc9-8b79-8eee8a6783ed', 'description' => 'The Maestà', 'correct_answer' => true],
                    ['id' => '72ec8f90-8081-5f3d-8522-6ff9e7fdc94c', 'description' => 'The Ghent Altarpiece', 'correct_answer' => false],
                    ['id' => 'aca36ab9-e12c-5809-81dd-36de6035645d', 'description' => 'The Ambassadors', 'correct_answer' => false],
                    ['id' => '1cb60852-b569-5062-aa29-3250fb3895d7', 'description' => 'The Portinari Altarpiece', 'correct_answer' => false],
                    ['id' => 'd1ed38f4-fd93-5c2a-b7bb-f6731fa17ef7', 'description' => 'The Merode Triptych', 'correct_answer' => false]
                ]],
        ['id' => 'faef4f16-83f1-50f7-a946-bb6ff94c9f09', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which Giotto altarpiece was painted for the Bardi Chapel in Florence\'s Santa Croce?', 'difficulty' => 4, 'weight' => 618, 'alternatives' => [
                    ['id' => '9a60c268-472a-5873-89f6-3c96893a40c3', 'description' => 'The Wilton Diptych', 'correct_answer' => false],
                    ['id' => 'a9642900-c465-57f9-a1eb-5cf4a231e4bd', 'description' => 'The Ambassadors', 'correct_answer' => false],
                    ['id' => 'fafb8803-32db-5c13-b177-0c7fbba1b1ef', 'description' => 'The Merode Triptych', 'correct_answer' => false],
                    ['id' => 'b4f9f5be-3acd-55aa-97e8-63c872d38bf4', 'description' => 'The Bardi Altarpiece', 'correct_answer' => true],
                    ['id' => '001b73e5-a183-5f9f-a6aa-a7dd0b7cb086', 'description' => 'The Mérode Altarpiece', 'correct_answer' => false]
                ]],
        ['id' => '214ce6a9-e301-5edf-8cf4-073feb92672c', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which small late medieval English diptych shows Richard II kneeling before the Virgin and Child?', 'difficulty' => 4, 'weight' => 694, 'alternatives' => [
                    ['id' => '20fd86fa-bbad-522a-a5b5-087d3dd0b5cc', 'description' => 'The Arnolfini Portrait', 'correct_answer' => false],
                    ['id' => 'f74d4f13-0645-509f-b11e-da8680ff3b66', 'description' => 'The Merode Triptych', 'correct_answer' => false],
                    ['id' => 'c280adc1-e30a-5933-9ff7-f03f8e89fd9d', 'description' => 'The Isenheim Altarpiece', 'correct_answer' => false],
                    ['id' => '488dc197-4b86-5bc2-adfb-884f0acb6d55', 'description' => 'The Wilton Diptych', 'correct_answer' => true],
                    ['id' => 'e22ec5b0-22fc-52d9-8627-2d4b4c76a62d', 'description' => 'The Bardi Altarpiece', 'correct_answer' => false]
                ]],
        ['id' => '5f2a2a27-7df0-5493-9788-d3e6c75c2486', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which large-scale setting of the Latin mass is one of Bach\'s final major works?', 'difficulty' => 4, 'weight' => 697, 'alternatives' => [
                    ['id' => 'f24c9b23-c62f-5e16-ad05-0995d6c90a60', 'description' => 'The Brandenburg Concertos', 'correct_answer' => false],
                    ['id' => '93d9ba7e-c2ea-5b25-813c-3025ae5076be', 'description' => 'The Mass in B minor', 'correct_answer' => true],
                    ['id' => 'ca577a3b-543d-5c96-ae34-97142f989b3c', 'description' => 'Goldberg Variations', 'correct_answer' => false],
                    ['id' => 'a2faea4b-5f28-5eff-b028-5fb41fdd51d5', 'description' => 'The Well-Tempered Clavier', 'correct_answer' => false],
                    ['id' => '680d915f-f545-5965-b52e-229d915694cd', 'description' => 'French Suites', 'correct_answer' => false]
                ]],
        ['id' => '50c96771-2335-57fc-9484-f48a8621e1bc', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which Bach collection contains two books of preludes and fugues in all major and minor keys?', 'difficulty' => 4, 'weight' => 709, 'alternatives' => [
                    ['id' => '8998b31c-d558-52eb-93e2-dbfd0372fb58', 'description' => 'The Musical Offering', 'correct_answer' => false],
                    ['id' => 'a1aa640c-07c5-596a-813f-cdaa50cdce39', 'description' => 'St John Passion', 'correct_answer' => false],
                    ['id' => '10b83b55-d4c5-5b95-a0f1-abfcaed9ae21', 'description' => 'The Well-Tempered Clavier', 'correct_answer' => true],
                    ['id' => '139970a2-a962-5036-832b-c337a2a699fe', 'description' => 'Goldberg Variations', 'correct_answer' => false],
                    ['id' => '3a3baee8-274d-5532-9ad8-f4770efeaf14', 'description' => 'French Suites', 'correct_answer' => false]
                ]],
        ['id' => '608a84d8-d1d2-5541-877d-c22727602e2a', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which Bach keyboard work begins and ends with the same aria and contains thirty variations?', 'difficulty' => 4, 'weight' => 731, 'alternatives' => [
                    ['id' => 'c1230242-5ab0-5dec-b49e-4e37a33924aa', 'description' => 'Goldberg Variations', 'correct_answer' => true],
                    ['id' => 'd5ad9af8-2210-5468-875e-e03518c98336', 'description' => 'Mass in A major', 'correct_answer' => false],
                    ['id' => '727511b4-3495-55d0-9705-33836342ecbc', 'description' => 'The Musical Offering', 'correct_answer' => false],
                    ['id' => 'aa08b22d-88e0-535d-a1f9-74bd4f74a9fd', 'description' => 'The St Matthew Passion', 'correct_answer' => false],
                    ['id' => '8b1bae2b-893e-5588-906d-b4e8ab20eaf4', 'description' => 'The Art of Fugue', 'correct_answer' => false]
                ]],
        ['id' => '2f6a7ba7-7463-5001-b691-b0ae6fad8f56', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which Bach sacred work sets the Passion narrative from the Gospel of John?', 'difficulty' => 4, 'weight' => 681, 'alternatives' => [
                    ['id' => '07e267fb-6c45-5bff-9447-ce7c7a3adcef', 'description' => 'The Musical Offering', 'correct_answer' => false],
                    ['id' => '53cdd19a-dee0-5eb6-80c8-5b2017c98eda', 'description' => 'Mass in A major', 'correct_answer' => false],
                    ['id' => '9a948ec6-752d-584f-8e5a-11babbdfb373', 'description' => 'Goldberg Variations', 'correct_answer' => false],
                    ['id' => 'd7b77448-1873-54a7-8eab-58ab1003c20b', 'description' => 'St John Passion', 'correct_answer' => true],
                    ['id' => '79ea3178-6dfb-5552-8bcd-e56d96edbfc4', 'description' => 'The Brandenburg Concertos', 'correct_answer' => false]
                ]],
        ['id' => '63575633-79bc-544a-b4ab-d3c400c8fa4e', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which set of six Bach keyboard suites is catalogued as BWV 812–817?', 'difficulty' => 4, 'weight' => 784, 'alternatives' => [
                    ['id' => 'd861cd2f-69de-5f75-aef0-f59af0feaca2', 'description' => 'St John Passion', 'correct_answer' => false],
                    ['id' => '2a196d7f-b380-59dc-b74a-baf8c3859a71', 'description' => 'The Brandenburg Concertos', 'correct_answer' => false],
                    ['id' => '26f43efc-e354-5407-9b81-e1f576741bf6', 'description' => 'The Mass in B minor', 'correct_answer' => false],
                    ['id' => '24db1c53-9bec-5951-8583-d3bf5c0ed953', 'description' => 'The Art of Fugue', 'correct_answer' => false],
                    ['id' => 'b296ed49-34d1-504b-95f1-945c5aa11326', 'description' => 'French Suites', 'correct_answer' => true]
                ]],
        ['id' => '36c741e3-e2fa-5b9a-90b2-2b0a95bc0234', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which Bach collection was based on a royal theme supplied by Frederick the Great?', 'difficulty' => 4, 'weight' => 777, 'alternatives' => [
                    ['id' => '5e0cde22-ac0d-574c-8eee-88e189c3ebcc', 'description' => 'The Well-Tempered Clavier', 'correct_answer' => false],
                    ['id' => '18f7f809-92c2-5a84-b359-8013a526fd60', 'description' => 'The St Matthew Passion', 'correct_answer' => false],
                    ['id' => '7e0bc412-ba60-53ab-8a8b-e0a7a3ec2a79', 'description' => 'The Art of Fugue', 'correct_answer' => false],
                    ['id' => '779cd2bb-cb33-5e70-84bd-a29484b0f2e2', 'description' => 'The Musical Offering', 'correct_answer' => true],
                    ['id' => '35a061ce-9544-5f38-8305-7c589e3d4b13', 'description' => 'Goldberg Variations', 'correct_answer' => false]
                ]],
        ['id' => '887476ac-afc5-52ce-8de6-151a95efadd2', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which Bach sacred work sets the Passion narrative from the Gospel of Matthew?', 'difficulty' => 4, 'weight' => 684, 'alternatives' => [
                    ['id' => 'e377a06d-7bb1-561d-808f-6760dd7035eb', 'description' => 'St John Passion', 'correct_answer' => false],
                    ['id' => 'b7a5821e-0aaf-5ae7-bced-b9c022ef79fd', 'description' => 'The St Matthew Passion', 'correct_answer' => true],
                    ['id' => 'f53d2096-76af-5988-a506-ad1320ce9c09', 'description' => 'The Well-Tempered Clavier', 'correct_answer' => false],
                    ['id' => '2a5355e7-5b91-56b2-834f-a65f8a7ec700', 'description' => 'Mass in A major', 'correct_answer' => false],
                    ['id' => '955f34a2-dc88-5df3-9b95-56d10c8d945f', 'description' => 'The Musical Offering', 'correct_answer' => false]
                ]],
        ['id' => '24421392-4171-54f0-93b1-129cde71a2af', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which set of six concertos was dedicated by Bach to Christian Ludwig, Margrave of Brandenburg?', 'difficulty' => 4, 'weight' => 632, 'alternatives' => [
                    ['id' => '1f299652-7f01-5110-a83a-cf2931532ee5', 'description' => 'The Mass in B minor', 'correct_answer' => false],
                    ['id' => 'ac852a50-b66b-53b1-9733-c0025014c279', 'description' => 'French Suites', 'correct_answer' => false],
                    ['id' => '9e6134be-36ec-5e6d-9708-3821739a0ffb', 'description' => 'The Brandenburg Concertos', 'correct_answer' => true],
                    ['id' => '029e2a87-7b59-56da-b587-4dfd411257c9', 'description' => 'The St Matthew Passion', 'correct_answer' => false],
                    ['id' => '113258c4-8606-550c-8dc3-eff6ebcbf9fa', 'description' => 'The Musical Offering', 'correct_answer' => false]
                ]],
        ['id' => '3255b414-8ade-52db-b34d-141012773368', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which Stravinsky score is associated with irregular accents, bitonal harmonies, and the ballet\'s 1913 Paris premiere?', 'difficulty' => 4, 'weight' => 746, 'alternatives' => [
                    ['id' => '88033835-ab00-5dc0-9ab6-fac8670a61ed', 'description' => 'Einstein on the Beach', 'correct_answer' => false],
                    ['id' => 'd5e35076-5724-579b-8997-c80019e61f5f', 'description' => 'The Nose', 'correct_answer' => false],
                    ['id' => '49228d61-7b29-5a29-b43c-f8719fef8a74', 'description' => 'Pierrot lunaire', 'correct_answer' => false],
                    ['id' => '3f26acf6-7556-540b-ac5e-21cbcca3e9a7', 'description' => 'Wozzeck', 'correct_answer' => false],
                    ['id' => '8b2f657f-3ef9-5434-9586-3c2a41511ed9', 'description' => 'The Rite of Spring', 'correct_answer' => true]
                ]],
        ['id' => '56cfd10d-2761-55db-851b-a30c70df78e8', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which Shostakovich opera was condemned in a 1936 Pravda editorial titled \'Muddle Instead of Music\'?', 'difficulty' => 4, 'weight' => 736, 'alternatives' => [
                    ['id' => '3dd83795-91b6-5648-b3c8-a6ca11db1f98', 'description' => 'Wozzeck', 'correct_answer' => false],
                    ['id' => '76537971-36a4-5d78-8613-5bce2adf1525', 'description' => 'L\'amour de loin', 'correct_answer' => false],
                    ['id' => '700da7a4-76c9-548e-bb53-43fb86c3a899', 'description' => 'Pierrot lunaire', 'correct_answer' => false],
                    ['id' => '66201543-b4c8-5410-a11d-632f426c4d16', 'description' => 'The Nose', 'correct_answer' => false],
                    ['id' => '9911f6fc-870e-585f-a847-bd4a0adf2021', 'description' => 'Lady Macbeth of the Mtsensk District', 'correct_answer' => true]
                ]],
        ['id' => 'd14f9a0c-7332-5ed5-a175-971ee6cad148', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which unfinished Schoenberg opera explores the biblical conflict between Moses and Aaron?', 'difficulty' => 4, 'weight' => 666, 'alternatives' => [
                    ['id' => 'cd35840d-2397-5121-805b-0068062643a4', 'description' => 'Einstein on the Beach', 'correct_answer' => false],
                    ['id' => 'f11941ed-566e-549e-addf-a2c16423dbb8', 'description' => 'The Rite of Spring', 'correct_answer' => false],
                    ['id' => '7cbabbdf-a76f-504a-a861-c3f5b5a2cd6b', 'description' => 'Pierrot lunaire', 'correct_answer' => false],
                    ['id' => '3572a34f-7217-56bd-b657-b59ee39dbe34', 'description' => 'Erwartung', 'correct_answer' => false],
                    ['id' => '3f9fd3f2-25ac-50cd-a166-483f7f1ee51e', 'description' => 'Moses und Aron', 'correct_answer' => true]
                ]],
        ['id' => '262ecd84-b636-50fd-8359-4b91388ae5ec', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which Arnold Schoenberg work sets twenty-one poems by Albert Giraud using Sprechstimme?', 'difficulty' => 4, 'weight' => 639, 'alternatives' => [
                    ['id' => 'fa439cd8-a4d6-55a4-90d2-384048abe847', 'description' => 'Erwartung', 'correct_answer' => false],
                    ['id' => '8790ec86-d342-566a-8d1d-23c61dbe94cb', 'description' => 'Lady Macbeth of the Mtsensk District', 'correct_answer' => false],
                    ['id' => 'e42dd3fe-b94c-5e2a-a1cd-03a01d8e173e', 'description' => 'The Nose', 'correct_answer' => false],
                    ['id' => '41e1fcef-320a-57cb-b8ee-10e3c88e87ef', 'description' => 'Pierrot lunaire', 'correct_answer' => true],
                    ['id' => '5927f43b-05d0-5292-9428-b9b1881352d1', 'description' => 'Lulu', 'correct_answer' => false]
                ]],
        ['id' => 'af718568-c15a-5714-8bef-b8ef1e8b7576', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which Shostakovich opera adapts Nikolai Gogol\'s story about a bureaucrat whose nose goes missing?', 'difficulty' => 4, 'weight' => 606, 'alternatives' => [
                    ['id' => 'd61dad92-24e2-5f69-bffb-bfb5cea71a4d', 'description' => 'The Nose', 'correct_answer' => true],
                    ['id' => 'bbfda6dd-f776-5be1-8359-737d12985daf', 'description' => 'Pierrot lunaire', 'correct_answer' => false],
                    ['id' => 'a68683e6-2f2b-558f-ae8f-ac190d15717e', 'description' => 'Wozzeck', 'correct_answer' => false],
                    ['id' => '33d05a52-5697-5815-b6dc-1e429bd0c274', 'description' => 'L\'amour de loin', 'correct_answer' => false],
                    ['id' => '1741bba8-0197-5f55-a1cb-a7e0b54f5086', 'description' => 'The Rite of Spring', 'correct_answer' => false]
                ]],
        ['id' => '90eb6985-d59e-5744-94bf-48753ca317fa', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which Philip Glass opera, created with Robert Wilson, uses non-narrative tableaux and number-based texts?', 'difficulty' => 4, 'weight' => 733, 'alternatives' => [
                    ['id' => '59f4295e-e807-5ad6-a155-6e8fda7c5825', 'description' => 'Pierrot lunaire', 'correct_answer' => false],
                    ['id' => '07ce5898-a621-5497-874b-32511cc4b213', 'description' => 'Einstein on the Beach', 'correct_answer' => true],
                    ['id' => 'de146635-843a-5765-b6d0-1bda86fc7996', 'description' => 'Lady Macbeth of the Mtsensk District', 'correct_answer' => false],
                    ['id' => '0ed4a178-a951-5202-a262-eb431136b232', 'description' => 'Wozzeck', 'correct_answer' => false],
                    ['id' => 'dd710617-a627-5163-bfa9-21999650499a', 'description' => 'L\'amour de loin', 'correct_answer' => false]
                ]],
        ['id' => '1e5d3c79-757b-5bfd-9419-6d1a8f41c13b', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which one-act monodrama by Schoenberg follows a woman wandering through a forest after finding her lover dead?', 'difficulty' => 4, 'weight' => 700, 'alternatives' => [
                    ['id' => 'e019c094-253a-5ea2-a391-2b9b6f2bfe50', 'description' => 'L\'amour de loin', 'correct_answer' => false],
                    ['id' => 'd50eee55-dc92-5e8d-ae0d-4d3df847b587', 'description' => 'Erwartung', 'correct_answer' => true],
                    ['id' => '8c846ef4-953e-5617-8609-cf4684ba07a6', 'description' => 'Wozzeck', 'correct_answer' => false],
                    ['id' => '3fdefa7b-b8b6-50af-8e85-e32d8c30c210', 'description' => 'The Nose', 'correct_answer' => false],
                    ['id' => 'd1abc5f1-5fac-526a-92e7-0edf747d4d9e', 'description' => 'Moses und Aron', 'correct_answer' => false]
                ]],
        ['id' => '58470ffa-86b2-5a1c-b60b-6c043afbd9f7', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which Kaija Saariaho opera tells of the troubadour Jaufré Rudel and the distant Countess of Tripoli?', 'difficulty' => 4, 'weight' => 632, 'alternatives' => [
                    ['id' => '4e31857d-e1ee-5b2f-b138-d3ff0df32d23', 'description' => 'Lady Macbeth of the Mtsensk District', 'correct_answer' => false],
                    ['id' => '1f6d9102-66ec-535a-ac9e-fbde3d264386', 'description' => 'The Rite of Spring', 'correct_answer' => false],
                    ['id' => 'b5117a7a-1734-55aa-9124-78f832af0512', 'description' => 'Wozzeck', 'correct_answer' => false],
                    ['id' => '6736b169-de0b-593d-9b28-b64ad2e45587', 'description' => 'Pierrot lunaire', 'correct_answer' => false],
                    ['id' => 'a154763c-b44e-51a4-938b-22ba7f318546', 'description' => 'L\'amour de loin', 'correct_answer' => true]
                ]],
        ['id' => 'ef0a9977-0083-540b-93ec-7d0815c6aa8e', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which Henrik Ibsen play centers on architect Halvard Solness and the young Hilda Wangel?', 'difficulty' => 4, 'weight' => 608, 'alternatives' => [
                    ['id' => '306958f3-afe1-53bc-b879-34878b7adfe5', 'description' => 'The Master Builder', 'correct_answer' => true],
                    ['id' => '1052338c-2ce8-5e32-bcd1-3f65cc805cf9', 'description' => 'The Cherry Orchard', 'correct_answer' => false],
                    ['id' => '23052610-6019-5e8d-a1e5-4600dcf0bbf3', 'description' => 'Uncle Vanya', 'correct_answer' => false],
                    ['id' => '86c7289e-ea5e-5e5e-837f-9afff4453a14', 'description' => 'Three Sisters', 'correct_answer' => false],
                    ['id' => '31391bb3-6745-54ca-9dea-a3b3e6864114', 'description' => 'The Wild Duck', 'correct_answer' => false]
                ]],
        ['id' => 'e6b5cc77-109b-57ec-a5b2-1d0029ca28b0', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which Harold Pinter play follows Teddy\'s return to his London family with his wife Ruth?', 'difficulty' => 4, 'weight' => 767, 'alternatives' => [
                    ['id' => 'dea08c0d-f5b2-51da-b6ad-8eb46ae10724', 'description' => 'Uncle Vanya', 'correct_answer' => false],
                    ['id' => 'e57288ec-7fe8-51cd-9fd9-1d5a6b8c05d8', 'description' => 'The Wild Duck', 'correct_answer' => false],
                    ['id' => 'dc21c902-2444-5f20-b43c-3abf78e2ad1d', 'description' => 'The Homecoming', 'correct_answer' => true],
                    ['id' => '18f9b384-1a0a-50e7-985c-81eb37f26dd3', 'description' => 'The Seagull', 'correct_answer' => false],
                    ['id' => '7ac82734-9460-573f-9ac4-9ca60584a1a2', 'description' => 'The Birthday Party', 'correct_answer' => false]
                ]],
        ['id' => 'deadf20b-2d38-53ef-a45d-ff4e2aec7714', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which Chekhov play follows Olga, Masha, and Irina as they long to return to Moscow?', 'difficulty' => 4, 'weight' => 740, 'alternatives' => [
                    ['id' => 'd8c5732a-fa52-50bd-bb97-e3477e2e5be3', 'description' => 'Hedda Gabler', 'correct_answer' => false],
                    ['id' => '6db2f644-22c8-532c-b734-a75c2027a6f7', 'description' => 'The Seagull', 'correct_answer' => false],
                    ['id' => 'c310f29b-3d04-5998-ab55-87b231d3daeb', 'description' => 'Rosencrantz and Guildenstern Are Dead', 'correct_answer' => false],
                    ['id' => 'd4fa7da2-5af9-53ec-8686-e9e91ad87ae0', 'description' => 'The Master Builder', 'correct_answer' => false],
                    ['id' => '39ee6992-461b-5409-abcb-4432d9bf7041', 'description' => 'Three Sisters', 'correct_answer' => true]
                ]],
        ['id' => '2d906544-1ef4-57b7-a357-1f44d218803a', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which Chekhov play includes the characters Nina, Konstantin, Arkadina, and Trigorin?', 'difficulty' => 4, 'weight' => 686, 'alternatives' => [
                    ['id' => 'ce7b3f64-c087-501a-8326-f78758801d44', 'description' => 'The Homecoming', 'correct_answer' => false],
                    ['id' => 'aca9d2bb-b5ad-533f-942d-44047104d133', 'description' => 'The Cherry Orchard', 'correct_answer' => false],
                    ['id' => '85ff0c6f-3227-5afe-80db-36e8b34b9805', 'description' => 'The Birthday Party', 'correct_answer' => false],
                    ['id' => 'febac376-c93c-5670-b651-eb1455055fdf', 'description' => 'The Seagull', 'correct_answer' => true],
                    ['id' => 'd3b7f765-2bc7-50d2-8e74-7c41d6b355af', 'description' => 'The Wild Duck', 'correct_answer' => false]
                ]],
        ['id' => '2b6ab353-1bb6-5ad4-9bcf-9eee07453077', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which Chekhov play centers on an aristocratic family facing the sale of its estate and orchard?', 'difficulty' => 4, 'weight' => 633, 'alternatives' => [
                    ['id' => 'be7138df-c616-5505-90bc-772881c500b3', 'description' => 'Uncle Vanya', 'correct_answer' => false],
                    ['id' => '61cdc126-83f0-5347-8a67-7c0f5db00bd8', 'description' => 'The Cherry Orchard', 'correct_answer' => true],
                    ['id' => 'f126c78b-a2c0-552c-a7a2-4f65f8525a8b', 'description' => 'Three Sisters', 'correct_answer' => false],
                    ['id' => 'a275d8ab-5f33-59bf-9a99-9cb7fa3276e5', 'description' => 'The Wild Duck', 'correct_answer' => false],
                    ['id' => '51a3d107-ec33-54e0-a466-1093435c4fc3', 'description' => 'The Seagull', 'correct_answer' => false]
                ]],
        ['id' => 'a37cf717-726a-5630-a295-a119d2cfefc3', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which Pinter play centers on Stanley Webber, whose quiet boarding-house life is disrupted by two strangers?', 'difficulty' => 4, 'weight' => 772, 'alternatives' => [
                    ['id' => 'ac7221bd-ae74-5892-bbd0-a49a741c4ac9', 'description' => 'The Homecoming', 'correct_answer' => false],
                    ['id' => '3878e865-4e0f-5b99-b137-209b19cb6de1', 'description' => 'The Seagull', 'correct_answer' => false],
                    ['id' => 'a3d451ee-52e4-5d10-9e75-b00eac442569', 'description' => 'Hedda Gabler', 'correct_answer' => false],
                    ['id' => '8c5ef42d-70a7-5f66-ab69-ac349e17eb41', 'description' => 'The Birthday Party', 'correct_answer' => true],
                    ['id' => '92f9dc2b-d4ab-5840-95f5-4fa3df1fbd8c', 'description' => 'The Cherry Orchard', 'correct_answer' => false]
                ]],
        ['id' => '5d68be00-681f-52b9-8b97-1b2c719598ae', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which Chekhov play portrays life on a rural estate disrupted by the arrival of a professor and his young wife?', 'difficulty' => 4, 'weight' => 646, 'alternatives' => [
                    ['id' => '4b80d5e6-11f9-5305-a556-b099edae4232', 'description' => 'The Homecoming', 'correct_answer' => false],
                    ['id' => '237a5c23-936f-51ea-b734-4ed411c0c379', 'description' => 'The Seagull', 'correct_answer' => false],
                    ['id' => 'f6574502-d812-5400-8c9e-e46594f4611d', 'description' => 'Uncle Vanya', 'correct_answer' => true],
                    ['id' => 'bdbfd872-ea11-58a2-91cf-c09d06319f43', 'description' => 'Hedda Gabler', 'correct_answer' => false],
                    ['id' => 'be1e0a8d-7a0d-5e56-a37c-5fdf642626b4', 'description' => 'The Cherry Orchard', 'correct_answer' => false]
                ]],
        ['id' => '3008929f-3d62-5668-b333-d9465bec5fd4', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which Ibsen play explores truth and illusion through the Ekdal family?', 'difficulty' => 4, 'weight' => 617, 'alternatives' => [
                    ['id' => 'aaeecb30-e473-56e3-bc73-d1d2d27f6289', 'description' => 'The Wild Duck', 'correct_answer' => true],
                    ['id' => '823d5ffa-4f81-5ad9-8f86-893c20a197ee', 'description' => 'The Homecoming', 'correct_answer' => false],
                    ['id' => '718bab5f-2b92-5984-bfb9-57b663c2ce49', 'description' => 'The Master Builder', 'correct_answer' => false],
                    ['id' => '4ad0b73d-6de8-56e4-8cf0-e0ab40ad7daa', 'description' => 'The Birthday Party', 'correct_answer' => false],
                    ['id' => '7313212d-b51d-5baf-b149-49b4ff9789c2', 'description' => 'Uncle Vanya', 'correct_answer' => false]
                ]],
        ['id' => '99726f94-082a-5ab0-b30e-3e3265c0502d', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which Dalí painting uses reflections to create double images of swans and elephants?', 'difficulty' => 4, 'weight' => 783, 'alternatives' => [
                    ['id' => 'b1a548db-7ca9-57c9-8c8c-289834d3c672', 'description' => 'Swans Reflecting Elephants', 'correct_answer' => true],
                    ['id' => 'd198d462-5827-5976-bcde-c5f0a4e7ba72', 'description' => 'The Human Condition', 'correct_answer' => false],
                    ['id' => '68254d90-a3c0-5b2f-8fca-b79ab910e87d', 'description' => 'The Son of Man', 'correct_answer' => false],
                    ['id' => '19fe24e3-4608-54c8-9e55-a161945737ab', 'description' => 'The Persistence of Memory', 'correct_answer' => false],
                    ['id' => '79b8a2f6-1489-502f-8996-1b46c88431e4', 'description' => 'The Great Masturbator', 'correct_answer' => false]
                ]],
        ['id' => '1e2954a4-7de6-5219-896e-baf6bf23ca74', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which René Magritte painting depicts a locomotive emerging from a fireplace?', 'difficulty' => 4, 'weight' => 650, 'alternatives' => [
                    ['id' => '45065c1d-e8b8-56d3-9da8-dd48c41711fa', 'description' => 'The Persistence of Memory', 'correct_answer' => false],
                    ['id' => 'b8410111-bfcf-5b70-9c69-165745b94295', 'description' => 'The Human Condition', 'correct_answer' => false],
                    ['id' => '206a1893-2e58-5feb-9d06-bfad28733777', 'description' => 'The Son of Man', 'correct_answer' => false],
                    ['id' => 'a7d7698f-32e5-5f0d-b2e8-0d6bac59ee15', 'description' => 'Time Transfixed', 'correct_answer' => true],
                    ['id' => 'b4bfaaa0-252b-587f-8564-d4c8c54edf99', 'description' => 'The False Mirror', 'correct_answer' => false]
                ]],
        ['id' => 'b5532560-ab4a-5892-bc05-703172eea799', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which Magritte painting shows a canvas on an easel blending into the landscape behind it?', 'difficulty' => 4, 'weight' => 695, 'alternatives' => [
                    ['id' => '6fb6a026-5ef6-5dc9-aa03-bed8992608c1', 'description' => 'The Persistence of Memory', 'correct_answer' => false],
                    ['id' => 'b514e2c0-361b-5a9a-bfa6-630cc639e5f2', 'description' => 'Europe After the Rain II', 'correct_answer' => false],
                    ['id' => '520bcff1-c3f3-53e4-b712-d9a05d670318', 'description' => 'The Elephant Celebes', 'correct_answer' => false],
                    ['id' => 'ae55adc9-281f-548d-9c16-87efb426d842', 'description' => 'The Son of Man', 'correct_answer' => false],
                    ['id' => 'f8bc6dea-6652-54c3-bf20-fa3bb1f66530', 'description' => 'The Human Condition', 'correct_answer' => true]
                ]],
        ['id' => 'f9a2b268-404b-5b05-b9f2-c8557c8e1b71', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which Max Ernst painting depicts a devastated, biomorphic landscape created with decalcomania?', 'difficulty' => 4, 'weight' => 701, 'alternatives' => [
                    ['id' => '6ba180d5-9374-52a0-90ae-78fd5a73c981', 'description' => 'The Son of Man', 'correct_answer' => false],
                    ['id' => 'a9ed69d8-5c10-5396-a37a-ebbd601bcdc4', 'description' => 'The Elephant Celebes', 'correct_answer' => false],
                    ['id' => '288c9d31-0282-5c11-8792-9b43566ab7bc', 'description' => 'The Human Condition', 'correct_answer' => false],
                    ['id' => 'cd298a2f-58d6-582e-8619-c8d0dc91d1ae', 'description' => 'Europe After the Rain II', 'correct_answer' => true],
                    ['id' => '9384dac9-bcc2-5baa-ae4d-10d792a44e31', 'description' => 'The False Mirror', 'correct_answer' => false]
                ]],
        ['id' => '8e5e6862-9f3f-53b1-aea3-bda111ae3272', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which René Magritte painting depicts a pipe with the phrase \'Ceci n\'est pas une pipe\'?', 'difficulty' => 4, 'weight' => 743, 'alternatives' => [
                    ['id' => '0c6ef94d-8d8c-5bf2-ae12-8cfe072b13cf', 'description' => 'The Treachery of Images', 'correct_answer' => true],
                    ['id' => '649b71a4-79dc-5321-b800-fc5b6c79e869', 'description' => 'Time Transfixed', 'correct_answer' => false],
                    ['id' => '93448300-3dcc-5212-a34c-24779775d178', 'description' => 'The Persistence of Memory', 'correct_answer' => false],
                    ['id' => '80feef0e-93bb-5abb-9a3c-976eba5a8858', 'description' => 'The Elephant Celebes', 'correct_answer' => false],
                    ['id' => '0ab4ca54-569c-562a-ba15-d35031fb1173', 'description' => 'Swans Reflecting Elephants', 'correct_answer' => false]
                ]],
        ['id' => 'aa619bb4-e01d-5c18-a020-fed1936b9bd4', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which Dalí painting features a distorted profile and imagery associated with desire and anxiety?', 'difficulty' => 4, 'weight' => 702, 'alternatives' => [
                    ['id' => '796ad531-cbf0-5d29-9373-322f37566910', 'description' => 'The Great Masturbator', 'correct_answer' => true],
                    ['id' => 'a730fcac-1af5-5917-82e4-213ad3c5cada', 'description' => 'Europe After the Rain II', 'correct_answer' => false],
                    ['id' => 'd43112ab-e245-5cfb-b814-845c7a720ef6', 'description' => 'The Elephant Celebes', 'correct_answer' => false],
                    ['id' => 'ac26a235-ac43-530f-a422-7a49dc7c33a6', 'description' => 'The Treachery of Images', 'correct_answer' => false],
                    ['id' => '0f3422e4-96d2-58bf-ab83-64558c4c111e', 'description' => 'The Son of Man', 'correct_answer' => false]
                ]],
        ['id' => '9d276cc7-0033-553a-bd4d-adaa75759354', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which Magritte painting depicts a man in a bowler hat whose face is obscured by a green apple?', 'difficulty' => 4, 'weight' => 604, 'alternatives' => [
                    ['id' => '62478ee1-aea1-5a6d-99f7-339decd0e442', 'description' => 'Swans Reflecting Elephants', 'correct_answer' => false],
                    ['id' => 'd1bb68e1-12db-5cc0-b733-186fd7d27902', 'description' => 'Time Transfixed', 'correct_answer' => false],
                    ['id' => '9166b7dd-962b-5c8d-b2ad-a6a624e769ea', 'description' => 'The Son of Man', 'correct_answer' => true],
                    ['id' => '8cfdee0a-db79-5d41-a88c-002d2cfc640e', 'description' => 'Europe After the Rain II', 'correct_answer' => false],
                    ['id' => '9ef0aed1-9097-50ab-bef6-57db1b77675f', 'description' => 'The Persistence of Memory', 'correct_answer' => false]
                ]],
        ['id' => '8de16701-f1dd-5e20-ba46-00484f4bdb5f', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which Magritte painting depicts a giant eye with a cloudy sky reflected in its iris?', 'difficulty' => 4, 'weight' => 679, 'alternatives' => [
                    ['id' => 'c452f06b-c135-5993-86c8-045b590f2184', 'description' => 'The Son of Man', 'correct_answer' => false],
                    ['id' => 'a23574be-2413-578c-a3d6-dbbf2e9647bc', 'description' => 'Europe After the Rain II', 'correct_answer' => false],
                    ['id' => '12e61c48-b113-5033-ae7e-fd0eade3b7cb', 'description' => 'The Treachery of Images', 'correct_answer' => false],
                    ['id' => '5bfa2fa0-a74b-54fa-8d1b-9d210a7cf2c1', 'description' => 'The False Mirror', 'correct_answer' => true],
                    ['id' => '2eb61e92-e36e-56c1-b5d1-15a8322bfc43', 'description' => 'The Human Condition', 'correct_answer' => false]
                ]],
        ['id' => 'b8345933-5b25-5fa3-8a41-d45ddd5b4d5f', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which triptych in the Metropolitan Museum\'s Cloisters collection is attributed to the workshop of Robert Campin?', 'difficulty' => 5, 'weight' => 959, 'alternatives' => [
                    ['id' => 'eb801af7-41e9-51fc-b34a-a2f41f24595a', 'description' => 'The Portinari Altarpiece', 'correct_answer' => false],
                    ['id' => 'fff8122b-3428-572a-8717-bf2d42a34bb3', 'description' => 'The Mérode Altarpiece', 'correct_answer' => true],
                    ['id' => '9c76ba19-2d6a-55a4-a451-9dbc6ead1fcb', 'description' => 'The Wilton Diptych', 'correct_answer' => false],
                    ['id' => '79e7fb5b-4141-535a-87e2-c07201f39129', 'description' => 'The St Columba Altarpiece', 'correct_answer' => false],
                    ['id' => '9e55d66d-f5f8-50db-baba-a42ee5bbf4cf', 'description' => 'The Ghent Altarpiece', 'correct_answer' => false]
                ]],
        ['id' => '22bec769-4317-5b19-b3af-c9d8fad0d15a', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which early Netherlandish polyptych, completed in 1432, bears the inscription identifying Hubert and Jan van Eyck?', 'difficulty' => 5, 'weight' => 961, 'alternatives' => [
                    ['id' => '83a9c6cb-bf84-5881-8444-38250487564b', 'description' => 'The Beaune Altarpiece', 'correct_answer' => false],
                    ['id' => '9b659141-eb3a-519d-b511-e6f6458c820a', 'description' => 'The Last Judgment', 'correct_answer' => false],
                    ['id' => 'ea0bd35b-1a2c-5ab7-b8d8-43c8f4fb93f5', 'description' => 'The Wilton Diptych', 'correct_answer' => false],
                    ['id' => '834fefda-cff9-5644-9197-d9c1ea217b6b', 'description' => 'The Portinari Altarpiece', 'correct_answer' => false],
                    ['id' => '6731df6b-bbc0-586b-b978-5b4ebe25fa87', 'description' => 'The Ghent Altarpiece', 'correct_answer' => true]
                ]],
        ['id' => 'b9883972-089e-5300-971b-5278661b748c', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which Rogier van der Weyden work depicts the Adoration of the Magi and is held in Munich?', 'difficulty' => 5, 'weight' => 938, 'alternatives' => [
                    ['id' => '3686fd2b-eee7-54f2-82ad-f81edc7ce5ed', 'description' => 'The Portinari Altarpiece', 'correct_answer' => false],
                    ['id' => '6a4629ca-1a3b-54c2-b740-f9aa7d65c939', 'description' => 'The Wilton Diptych', 'correct_answer' => false],
                    ['id' => '442c249c-4ddc-591e-9fba-eb45e77bbf9f', 'description' => 'The Beaune Altarpiece', 'correct_answer' => false],
                    ['id' => '0c5675d5-c345-5ba7-8636-a115a3096b7b', 'description' => 'The St Columba Altarpiece', 'correct_answer' => true],
                    ['id' => '18a212bd-c3c5-5264-a225-b41d1f92c29c', 'description' => 'The Last Judgment', 'correct_answer' => false]
                ]],
        ['id' => '0ac3c2d7-c5f4-51f2-9002-301bba250c22', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which late fourteenth-century English royal devotional object portrays Richard II with his patron saints and angels?', 'difficulty' => 5, 'weight' => 861, 'alternatives' => [
                    ['id' => 'e7b57143-af8e-5487-a350-eb1f6596661d', 'description' => 'The Mérode Altarpiece', 'correct_answer' => false],
                    ['id' => 'f0b939bf-0edd-5144-9035-436705718e69', 'description' => 'The Wilton Diptych', 'correct_answer' => true],
                    ['id' => 'b3fa1e51-b28d-582b-a354-8080c6e54245', 'description' => 'The St Columba Altarpiece', 'correct_answer' => false],
                    ['id' => '9ffe5288-9762-5a3d-9a7c-2fddd0386b5b', 'description' => 'The Portinari Altarpiece', 'correct_answer' => false],
                    ['id' => '90c77e10-7e11-5607-ac72-3ed284c56d64', 'description' => 'The Beaune Altarpiece', 'correct_answer' => false]
                ]],
        ['id' => 'd6982bbc-4a3c-51b6-97cc-5416ca7211ff', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which Rogier van der Weyden triptych places a crucifixion in the central nave of a church?', 'difficulty' => 5, 'weight' => 993, 'alternatives' => [
                    ['id' => '51d8fa15-6252-58b5-9901-7ce2c164444b', 'description' => 'The Moreel Triptych', 'correct_answer' => false],
                    ['id' => 'ebc80e96-7aa2-5c04-a658-2d30b04d1d5c', 'description' => 'The Berlin Crucifixion', 'correct_answer' => false],
                    ['id' => 'c99da1c6-cead-5ad6-9fa7-727fa42acf57', 'description' => 'The Portinari Altarpiece', 'correct_answer' => false],
                    ['id' => 'eba29059-9d5f-53b3-abfd-09d797199eb0', 'description' => 'The Wilton Diptych', 'correct_answer' => false],
                    ['id' => '47f28f6c-a05d-5e36-91dc-6574761159cd', 'description' => 'The Seven Sacraments Altarpiece', 'correct_answer' => true]
                ]],
        ['id' => 'cf73541c-b22d-582c-9d99-722a8de0ab00', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which Hans Memling altarpiece portrays the Bruges politician Willem Moreel and his family?', 'difficulty' => 5, 'weight' => 832, 'alternatives' => [
                    ['id' => 'b96e9441-0052-5893-8164-df1d2348cd59', 'description' => 'The Moreel Triptych', 'correct_answer' => true],
                    ['id' => '0793e503-b027-532b-bd4c-4ecda1ad7940', 'description' => 'The Mérode Altarpiece', 'correct_answer' => false],
                    ['id' => '5e35968d-d92a-52a4-b7e3-f4d66e0fe851', 'description' => 'The Portinari Altarpiece', 'correct_answer' => false],
                    ['id' => '8edbfe35-93f6-5257-b34b-c587c576757e', 'description' => 'The Last Judgment', 'correct_answer' => false],
                    ['id' => 'a3e9b27f-90d4-5f0e-bae7-fa10a7858438', 'description' => 'The Seven Sacraments Altarpiece', 'correct_answer' => false]
                ]],
        ['id' => '6bd404d3-c5db-54b1-9a87-b1ce2e2ddca5', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which Rogier van der Weyden polyptych depicts the Last Judgment and was commissioned for the Hôtel-Dieu in Burgundy?', 'difficulty' => 5, 'weight' => 903, 'alternatives' => [
                    ['id' => 'b22fa762-54df-5dc6-9df3-f3eec6f797b5', 'description' => 'The Beaune Altarpiece', 'correct_answer' => true],
                    ['id' => '647bf688-fb88-5054-8180-f3e9cf95634a', 'description' => 'The Wilton Diptych', 'correct_answer' => false],
                    ['id' => '7faa892e-8d46-53c0-983f-6e86f58d99a2', 'description' => 'The Mérode Altarpiece', 'correct_answer' => false],
                    ['id' => '9e02f3d2-59fa-58cf-9963-e6a945d0d7ea', 'description' => 'The Berlin Crucifixion', 'correct_answer' => false],
                    ['id' => 'cabba100-0d9f-58f8-96a4-b26ffb2937ee', 'description' => 'The Last Judgment', 'correct_answer' => false]
                ]],
        ['id' => 'e30db83c-e831-50a8-ab80-dcb604c150a2', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which panel by the Master of the Legend of Saint Lucy is associated with early Netherlandish narrative painting?', 'difficulty' => 5, 'weight' => 843, 'alternatives' => [
                    ['id' => '7c91dad2-b5dc-5b00-970f-86ce81f79dcb', 'description' => 'The St Columba Altarpiece', 'correct_answer' => false],
                    ['id' => '87010fbe-7a24-54d1-91c1-41b758e93cb2', 'description' => 'The Berlin Crucifixion', 'correct_answer' => true],
                    ['id' => '88b0b6f3-9925-526d-8bd8-8f2a5c224555', 'description' => 'The Beaune Altarpiece', 'correct_answer' => false],
                    ['id' => 'b9082bef-342f-51c1-89f4-8c51e893c14a', 'description' => 'The Last Judgment', 'correct_answer' => false],
                    ['id' => 'e29483c5-3e93-51cb-9f51-ae0691e45038', 'description' => 'The Moreel Triptych', 'correct_answer' => false]
                ]],
        ['id' => 'c82fff0a-71bd-573b-b062-b3ec20311840', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which Satie stage work was written for a play by Joséphin Péladan and uses music associated with the Rose-Croix movement?', 'difficulty' => 5, 'weight' => 988, 'alternatives' => [
                    ['id' => 'c93fa58b-fa5a-5815-b957-0dc0b74fcafa', 'description' => 'Le Fils des étoiles', 'correct_answer' => true],
                    ['id' => '401d5842-a50f-5d62-892a-c05d37503bc0', 'description' => 'Deep Listening', 'correct_answer' => false],
                    ['id' => '9bf5ae08-0c22-5b76-92a0-819f27265aac', 'description' => 'The Disintegration Loops', 'correct_answer' => false],
                    ['id' => '90000ac3-00d5-52b1-b586-765df4eccd27', 'description' => 'The Sinking of the Titanic', 'correct_answer' => false],
                    ['id' => '6a89d025-d0ee-53f5-90d2-d9ca03ff9ff4', 'description' => 'The Tired Sounds of Stars of the Lid', 'correct_answer' => false]
                ]],
        ['id' => '5c880bda-9d23-5d40-b6f2-e8c9b7733849', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which Satie composition sets texts from Plato\'s dialogues for voice and small orchestra?', 'difficulty' => 5, 'weight' => 877, 'alternatives' => [
                    ['id' => '97904094-4841-54d7-a886-1aa3422465b0', 'description' => 'Socrate', 'correct_answer' => true],
                    ['id' => '5f3d5c98-427a-595e-b8c2-4afa496ef687', 'description' => 'Four Organs', 'correct_answer' => false],
                    ['id' => 'd680d29c-0db9-51ae-8152-272a06ad172b', 'description' => 'The Sinking of the Titanic', 'correct_answer' => false],
                    ['id' => '0a52fa57-a1ef-53ed-b25e-476071146612', 'description' => 'Vexations', 'correct_answer' => false],
                    ['id' => '0989f1b6-47e3-5e0d-9e5c-fd042c055af9', 'description' => 'Le Fils des étoiles', 'correct_answer' => false]
                ]],
        ['id' => 'cf95640e-5521-5ace-9fcf-6af3cdac0d3b', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which Erik Satie composition bears a note instructing performers to repeat its short theme 840 times?', 'difficulty' => 5, 'weight' => 851, 'alternatives' => [
                    ['id' => 'd416f49d-1241-50d0-8bc6-833fb285e6bd', 'description' => 'Deep Listening', 'correct_answer' => false],
                    ['id' => 'dc95f296-8a02-57ca-aab6-712924876875', 'description' => 'Le Fils des étoiles', 'correct_answer' => false],
                    ['id' => 'd2b2d95d-2420-5d44-a6db-5d9e5e744d49', 'description' => 'Vexations', 'correct_answer' => true],
                    ['id' => '8cd952ba-f25c-52ef-b01c-1087c4e2dca7', 'description' => 'The Sinking of the Titanic', 'correct_answer' => false],
                    ['id' => 'f1a9b4fc-d8af-5210-8d32-84a4cc5354c1', 'description' => 'Four Organs', 'correct_answer' => false]
                ]],
        ['id' => '2f0b80db-3888-5b57-a3c9-948e73745e15', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which Gavin Bryars composition develops from the story of musicians playing as the ship sank?', 'difficulty' => 5, 'weight' => 952, 'alternatives' => [
                    ['id' => '99b6922e-a51e-5980-b6f1-59be6d371484', 'description' => 'Socrate', 'correct_answer' => false],
                    ['id' => 'e5c64b96-3ef6-5e1e-8c4d-54381bde29f4', 'description' => 'The Sinking of the Titanic', 'correct_answer' => true],
                    ['id' => 'bf0ec3ac-393d-589a-9050-7e7db7b5c121', 'description' => 'Four Organs', 'correct_answer' => false],
                    ['id' => 'e8626b86-1ed4-52ee-98f2-8cff3d555d9a', 'description' => 'Deep Listening', 'correct_answer' => false],
                    ['id' => '5c8cadb0-44fd-59b7-976a-5c636c9de557', 'description' => 'Messe de pauvres', 'correct_answer' => false]
                ]],
        ['id' => '6eaac9be-a135-5a62-a510-4257cf6221ab', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which series of William Basinski recordings emerged from deteriorating tape loops?', 'difficulty' => 5, 'weight' => 946, 'alternatives' => [
                    ['id' => '43286f61-93a8-51c2-8cd4-ac8862f7929d', 'description' => 'The Sinking of the Titanic', 'correct_answer' => false],
                    ['id' => '8e21125c-f251-597b-bbfa-9f69d89bd6cf', 'description' => 'Le Fils des étoiles', 'correct_answer' => false],
                    ['id' => '0ae79e2a-9061-59b1-ae86-27d0b0295aa4', 'description' => 'Deep Listening', 'correct_answer' => false],
                    ['id' => 'ba5f5f06-5a5c-5d1c-9ccb-c728e62cfd03', 'description' => 'Socrate', 'correct_answer' => false],
                    ['id' => '93d3b46d-adfc-5c94-824a-44a47877eb73', 'description' => 'The Disintegration Loops', 'correct_answer' => true]
                ]],
        ['id' => '186ff4db-1df6-5b3f-9054-8626e5287e41', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which Erik Satie work is a short, austere mass setting composed for the Église métropolitaine d\'art de Jésus-Conducteur?', 'difficulty' => 5, 'weight' => 830, 'alternatives' => [
                    ['id' => '1fd65982-25e7-55ab-8fb2-0e873e74c6f9', 'description' => 'Vexations', 'correct_answer' => false],
                    ['id' => '947b5769-1af0-5013-a381-128d97544956', 'description' => 'Four Organs', 'correct_answer' => false],
                    ['id' => 'ad96b6ff-dcd7-53e1-ba7a-0dff8e5d95e2', 'description' => 'Le Fils des étoiles', 'correct_answer' => false],
                    ['id' => '3a441d9a-3f9c-57ff-91e5-53bc65824f4c', 'description' => 'Messe de pauvres', 'correct_answer' => true],
                    ['id' => 'ec0284bc-abaf-5401-b289-f9e658d06ef2', 'description' => 'Socrate', 'correct_answer' => false]
                ]],
        ['id' => 'e26e34e0-7900-5cd3-b99f-b0668aeb4247', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which ambient album by Stars of the Lid was released in 2001 as a double album?', 'difficulty' => 5, 'weight' => 906, 'alternatives' => [
                    ['id' => '0770c8d5-0ebf-541e-81d7-9a4c93f97b76', 'description' => 'Deep Listening', 'correct_answer' => false],
                    ['id' => '8f9d07bc-9529-5626-a1b5-0fd315f4ebb2', 'description' => 'The Tired Sounds of Stars of the Lid', 'correct_answer' => true],
                    ['id' => 'a366c967-72f9-545a-ac50-c85d7e59190e', 'description' => 'Messe de pauvres', 'correct_answer' => false],
                    ['id' => '07c92af7-c69d-59f1-b941-1425163c3c67', 'description' => 'Vexations', 'correct_answer' => false],
                    ['id' => '025b1798-3521-5990-93eb-848a7c8e8aba', 'description' => 'Socrate', 'correct_answer' => false]
                ]],
        ['id' => '3a0a669d-fa7a-523e-8b23-382bb3a75990', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which 1989 recording by Pauline Oliveros, Stuart Dempster, and Panaiotis was made in the Fort Worden cistern?', 'difficulty' => 5, 'weight' => 908, 'alternatives' => [
                    ['id' => '54e3e03f-c049-5d95-ac28-43b884d6287d', 'description' => 'Le Fils des étoiles', 'correct_answer' => false],
                    ['id' => '4cc0753b-9002-514f-ad53-13f6f17bed25', 'description' => 'The Sinking of the Titanic', 'correct_answer' => false],
                    ['id' => '7300f2f2-9e9d-56c0-be06-3c806a4dee3a', 'description' => 'Parade', 'correct_answer' => false],
                    ['id' => 'a78be32e-7e39-5339-aa35-70b4c84e57c7', 'description' => 'Vexations', 'correct_answer' => false],
                    ['id' => '3f4a369d-c13d-5597-89b7-7d1623e62ba6', 'description' => 'Deep Listening', 'correct_answer' => true]
                ]],
        ['id' => '39165213-ff05-59ca-ab20-ac0711e06731', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which Stravinsky ballet was composed between 1953 and 1957 and uses serial techniques?', 'difficulty' => 5, 'weight' => 803, 'alternatives' => [
                    ['id' => '0140fcd1-cc98-5438-9b44-b3300dbbc5e7', 'description' => 'Agon', 'correct_answer' => true],
                    ['id' => '8f6c76a1-5cb1-5697-86ae-2312bfa4fef4', 'description' => 'Apollo', 'correct_answer' => false],
                    ['id' => 'eddd475f-0bbe-51f9-a11b-226953876d5d', 'description' => 'Pulcinella', 'correct_answer' => false],
                    ['id' => '3ff48ccd-c985-5285-ae67-bb95563bf957', 'description' => 'Les Noces', 'correct_answer' => false],
                    ['id' => 'b2d43633-a0c7-5aab-af2d-0604e59d26b0', 'description' => 'Serenade', 'correct_answer' => false]
                ]],
        ['id' => '3d47d8ec-937f-52e7-943d-03a442ca4036', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which Debussy ballet, choreographed by Vaslav Nijinsky, depicts a tennis game and was premiered in 1913?', 'difficulty' => 5, 'weight' => 920, 'alternatives' => [
                    ['id' => '64bb4f3a-429c-5a65-9d29-baeb3cb85287', 'description' => 'Les Noces', 'correct_answer' => false],
                    ['id' => 'c88ce494-300a-5218-8a48-c27acb3a4546', 'description' => 'Apollo', 'correct_answer' => false],
                    ['id' => 'e6220dc7-dfcd-530a-8710-bd3c92ca7bb6', 'description' => 'The Miraculous Mandarin', 'correct_answer' => false],
                    ['id' => '9fded9fc-bbf5-57d6-9c1f-c298bb9af78d', 'description' => 'The Green Table', 'correct_answer' => false],
                    ['id' => '5b99ca20-7616-5712-b286-3009e86460a4', 'description' => 'Jeux', 'correct_answer' => true]
                ]],
        ['id' => '0e030d07-f012-5174-b533-950eb323514c', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which Kurt Jooss ballet won first prize at the 1932 International Dance Competition in Paris?', 'difficulty' => 5, 'weight' => 803, 'alternatives' => [
                    ['id' => '3849a250-cf61-5fe8-a07b-f9046c8edc67', 'description' => 'Les Noces', 'correct_answer' => false],
                    ['id' => 'b4fac0c6-60d8-5fe2-99c3-ebd5a3c7cd61', 'description' => 'The Green Table', 'correct_answer' => true],
                    ['id' => '1f807854-0070-5e5c-a889-891e6219ce9d', 'description' => 'The Rite of Spring', 'correct_answer' => false],
                    ['id' => '1559d973-0c53-5f90-98ee-e7cbe52a4081', 'description' => 'Daphnis et Chloé', 'correct_answer' => false],
                    ['id' => '599a916d-1eba-5828-80ef-dd8c5d4f250e', 'description' => 'Pulcinella', 'correct_answer' => false]
                ]],
        ['id' => 'f757c217-4136-50fd-99ff-f8f0bd51646e', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which Bartók work was initially staged as a pantomime and later became a concert suite?', 'difficulty' => 5, 'weight' => 860, 'alternatives' => [
                    ['id' => '5c8334f1-3e5a-5ca0-8a5a-66883f99f492', 'description' => 'The Rite of Spring', 'correct_answer' => false],
                    ['id' => '3ae65497-4ad1-5d99-9e0a-be53fed63852', 'description' => 'Jeux', 'correct_answer' => false],
                    ['id' => '422fd7c1-b664-5474-a242-7c995ce5f919', 'description' => 'Daphnis et Chloé', 'correct_answer' => false],
                    ['id' => '9c67433e-44a2-599d-aafd-73e659a32400', 'description' => 'The Miraculous Mandarin', 'correct_answer' => true],
                    ['id' => '7d6ab52d-cc93-5e78-9ecd-5f6ae52a994b', 'description' => 'Les Noces', 'correct_answer' => false]
                ]],
        ['id' => 'c86744b0-cd4e-5073-aa47-8a35794b1100', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which Ravel work is described by its composer as a \'choreographic symphony\' in three parts?', 'difficulty' => 5, 'weight' => 897, 'alternatives' => [
                    ['id' => 'da01c503-367c-5c51-8562-9f5ab70e8600', 'description' => 'Les Noces', 'correct_answer' => false],
                    ['id' => '02004ba0-1e5e-5e7d-a302-c63700c20da8', 'description' => 'Pulcinella', 'correct_answer' => false],
                    ['id' => 'ecf21c56-b02a-58b0-9444-78e424913ccb', 'description' => 'Apollo', 'correct_answer' => false],
                    ['id' => '43a0279b-70f9-559f-bb21-c8d0b45d8eb7', 'description' => 'Serenade', 'correct_answer' => false],
                    ['id' => '9afb4a43-4067-5947-bc2a-1b9d241612d5', 'description' => 'Daphnis et Chloé', 'correct_answer' => true]
                ]],
        ['id' => 'd367e3d9-bbc4-5306-b629-5e92b6111884', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which Stravinsky ballet marked the beginning of his neoclassical period?', 'difficulty' => 5, 'weight' => 846, 'alternatives' => [
                    ['id' => '83a10d8f-4de9-54d0-859c-d683f84adfe2', 'description' => 'The Green Table', 'correct_answer' => false],
                    ['id' => 'f23af447-2ace-5057-a0eb-a6abc2eacbec', 'description' => 'The Miraculous Mandarin', 'correct_answer' => false],
                    ['id' => '4bf3d8fe-6857-50e7-86f5-83d59be2ef90', 'description' => 'Jeux', 'correct_answer' => false],
                    ['id' => 'b9a63e20-7616-5483-8d4d-13625c4273e6', 'description' => 'Pulcinella', 'correct_answer' => true],
                    ['id' => '0790b310-a7b9-5191-8d9d-992663fea117', 'description' => 'Daphnis et Chloé', 'correct_answer' => false]
                ]],
        ['id' => '6f45940f-b4ba-5f2a-b6d3-d40015db1de8', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which Stravinsky ballet was originally titled Apollon musagète and features three Muses?', 'difficulty' => 5, 'weight' => 929, 'alternatives' => [
                    ['id' => '0932d261-a7d0-59bb-b6ec-03cfe442830b', 'description' => 'The Miraculous Mandarin', 'correct_answer' => false],
                    ['id' => '8e57a681-58d7-562f-a954-a5ffa0c8aee8', 'description' => 'Apollo', 'correct_answer' => true],
                    ['id' => '89a8ccb0-f3e2-5fb8-93e0-b3c269d4c07a', 'description' => 'The Rite of Spring', 'correct_answer' => false],
                    ['id' => '98ff2aca-b18a-5270-8c9b-31d172796d0b', 'description' => 'Serenade', 'correct_answer' => false],
                    ['id' => '67e4cb7f-3b34-5d36-b4fc-b4adccdde644', 'description' => 'Pulcinella', 'correct_answer' => false]
                ]],
        ['id' => 'fd9fa410-062f-5a79-a785-f4a459c80b29', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which ballet score by Stravinsky uses the subtitle \'Pictures of Pagan Russia in Two Parts\'?', 'difficulty' => 5, 'weight' => 961, 'alternatives' => [
                    ['id' => '3ea0561a-6a22-567f-9140-782a51aeffbb', 'description' => 'Agon', 'correct_answer' => false],
                    ['id' => 'ca2bb7c2-34c4-5fdb-b720-ad606787b8c8', 'description' => 'Apollo', 'correct_answer' => false],
                    ['id' => '7b33df02-f503-5895-af01-a02ea97e9208', 'description' => 'Jeux', 'correct_answer' => false],
                    ['id' => 'bb519d79-065f-5377-ba6f-22ddbb5e048e', 'description' => 'The Rite of Spring', 'correct_answer' => true],
                    ['id' => '6b9895b7-9771-561c-96ea-c8fb7a5e0b52', 'description' => 'The Miraculous Mandarin', 'correct_answer' => false]
                ]],
        ['id' => '6351593c-0800-5e2e-94c5-8bd79a678bce', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which Grünewald altarpiece was made for the monastery of St Anthony at Isenheim?', 'difficulty' => 5, 'weight' => 984, 'alternatives' => [
                    ['id' => '150ea6a7-d3bc-5c89-a8ec-de5ed91200c6', 'description' => 'The Seven Sacraments', 'correct_answer' => false],
                    ['id' => '85bc46f3-03ca-5e00-a115-53c385b780ce', 'description' => 'The Wilton Diptych', 'correct_answer' => false],
                    ['id' => '1d4e58f6-0f25-5ad0-a01c-a3591b13aead', 'description' => 'The Arnolfini Portrait', 'correct_answer' => false],
                    ['id' => 'b781f958-28cc-54be-bd64-0d2c3b412fd5', 'description' => 'The Portinari Altarpiece', 'correct_answer' => false],
                    ['id' => '27a8589a-3922-5339-ad5c-56acc57dce77', 'description' => 'The Isenheim Altarpiece', 'correct_answer' => true]
                ]],
        ['id' => 'c0b7428a-46c9-5eaa-a528-27456e81dc2e', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which Bosch triptych is held by the Museo del Prado in Madrid?', 'difficulty' => 5, 'weight' => 900, 'alternatives' => [
                    ['id' => '2c7d3e18-fcef-58fe-9693-4f2b398daf1f', 'description' => 'The Ghent Altarpiece', 'correct_answer' => false],
                    ['id' => '59353135-5cb1-564d-9abe-71e875eb6df1', 'description' => 'The Wilton Diptych', 'correct_answer' => false],
                    ['id' => 'd4d9129a-2de4-5beb-b2d9-2b688efce434', 'description' => 'The Garden of Earthly Delights', 'correct_answer' => true],
                    ['id' => '3f62d00e-a46b-5837-a169-a047268bf728', 'description' => 'The Ambassadors', 'correct_answer' => false],
                    ['id' => 'c28e7b1e-271c-54fb-9931-f21a528eee5f', 'description' => 'The Maestà', 'correct_answer' => false]
                ]],
        ['id' => '20ae53da-a372-5af5-81bf-cfcde0a60ac4', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which Duccio altarpiece was carried in procession to Siena Cathedral in 1311?', 'difficulty' => 5, 'weight' => 885, 'alternatives' => [
                    ['id' => '2358247c-a4ff-548a-9951-974ee6c60e54', 'description' => 'The Ambassadors', 'correct_answer' => false],
                    ['id' => '5457aaa0-4f0f-58b4-b443-b42dca4f7764', 'description' => 'The Maestà', 'correct_answer' => true],
                    ['id' => 'a8dc4bfc-2b5f-55ac-bfe2-b2ab58d830b9', 'description' => 'The Arnolfini Portrait', 'correct_answer' => false],
                    ['id' => 'e5945db8-bb28-5f56-965f-b25d84279fe4', 'description' => 'The Portinari Altarpiece', 'correct_answer' => false],
                    ['id' => '02bbb0c2-9a6d-5062-b2fe-8994f48e40c7', 'description' => 'The Ghent Altarpiece', 'correct_answer' => false]
                ]],
        ['id' => '35bec087-864a-54ce-ad55-5880d14b41cb', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which Rogier van der Weyden work depicts seven church sacraments in a single architectural setting?', 'difficulty' => 5, 'weight' => 823, 'alternatives' => [
                    ['id' => '168df879-2a54-5bae-befa-54d8f0e308f4', 'description' => 'The Portinari Altarpiece', 'correct_answer' => false],
                    ['id' => '97e9bd32-defc-591d-89a7-c859753f5d4f', 'description' => 'The Seven Sacraments', 'correct_answer' => true],
                    ['id' => 'bbb3eca4-b6e3-58c0-9bd3-cb93781c5673', 'description' => 'The Isenheim Altarpiece', 'correct_answer' => false],
                    ['id' => '5f26a6d4-feb2-57fb-b255-9d910ee4d872', 'description' => 'The Ghent Altarpiece', 'correct_answer' => false],
                    ['id' => 'b41e6e34-27aa-52e8-afc1-e96ea75b4cdb', 'description' => 'The Ambassadors', 'correct_answer' => false]
                ]],
        ['id' => '8adf36e7-b595-5242-a087-d43f9112568b', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which painting by Hugo van der Goes includes a still life of flowers in a ceramic vessel in the foreground?', 'difficulty' => 5, 'weight' => 891, 'alternatives' => [
                    ['id' => '7b7eb238-3def-5e6e-9588-58d67484d4d2', 'description' => 'The Portinari Altarpiece', 'correct_answer' => true],
                    ['id' => '725a62d4-8d0d-5f12-8e5d-6da4bf1ab1d8', 'description' => 'The Ambassadors', 'correct_answer' => false],
                    ['id' => '083daaa4-cdcb-562a-8091-392d637124db', 'description' => 'The Last Judgment', 'correct_answer' => false],
                    ['id' => '540aff86-57f6-5c61-80bc-68a63ca7f421', 'description' => 'The Maestà', 'correct_answer' => false],
                    ['id' => 'cbd6e902-c90f-50cb-833e-c90a4a24443a', 'description' => 'The Ghent Altarpiece', 'correct_answer' => false]
                ]],
        ['id' => '744eb27a-b340-5032-ab2c-db00e7642cf8', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which object is among the few surviving examples of late medieval English panel painting?', 'difficulty' => 5, 'weight' => 993, 'alternatives' => [
                    ['id' => '93626daa-b1e4-50ee-9d92-bd25edccd170', 'description' => 'The Maestà', 'correct_answer' => false],
                    ['id' => '974c70d5-f3c4-583e-a95c-47579b109bae', 'description' => 'The Isenheim Altarpiece', 'correct_answer' => false],
                    ['id' => '2e6fb86a-79c0-5985-9bed-90f645b1b802', 'description' => 'The Wilton Diptych', 'correct_answer' => true],
                    ['id' => '949c21b8-7dc5-572f-b7e8-5f66e2105fc0', 'description' => 'The Ambassadors', 'correct_answer' => false],
                    ['id' => '17385165-c1e6-5f9a-ade6-020f2e1fbacf', 'description' => 'The Portinari Altarpiece', 'correct_answer' => false]
                ]],
        ['id' => '1cf7ad04-5dfb-5524-ad54-ff35169efac8', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which Holbein portrait\'s anamorphic skull is most legible when viewed from the lower right?', 'difficulty' => 5, 'weight' => 974, 'alternatives' => [
                    ['id' => '0469c497-47ed-5764-af27-a04e29d8d495', 'description' => 'The Garden of Earthly Delights', 'correct_answer' => false],
                    ['id' => 'e9ed510d-be10-5b72-b567-f63947f0c4ef', 'description' => 'The Ambassadors', 'correct_answer' => true],
                    ['id' => '52acb9ab-9e4d-5c82-9227-8a4386692d64', 'description' => 'The Isenheim Altarpiece', 'correct_answer' => false],
                    ['id' => '037b0fca-32ba-5189-9e2f-c39bb6329680', 'description' => 'The Maestà', 'correct_answer' => false],
                    ['id' => 'e0d0de02-4de1-5d13-b095-80ec507e1239', 'description' => 'The Wilton Diptych', 'correct_answer' => false]
                ]],
        ['id' => 'acda853b-6777-5139-b89a-8c0a320a7de9', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which Memling triptych was seized by a privateer and eventually ended up in Gdańsk?', 'difficulty' => 5, 'weight' => 916, 'alternatives' => [
                    ['id' => '0821775c-6bcc-5e50-932a-c3fd75ac328a', 'description' => 'The Seven Sacraments', 'correct_answer' => false],
                    ['id' => '96bcbe9f-e0da-502a-9a29-6c72aefcd8be', 'description' => 'The Ghent Altarpiece', 'correct_answer' => false],
                    ['id' => 'd4996054-50df-5937-8459-2ba8930a4cdd', 'description' => 'The Maestà', 'correct_answer' => false],
                    ['id' => 'a18c53ca-d1cb-5303-b207-c57cb5363ee9', 'description' => 'The Garden of Earthly Delights', 'correct_answer' => false],
                    ['id' => '0fcc51a0-1c76-55a6-8759-bace143473c6', 'description' => 'The Last Judgment', 'correct_answer' => true]
                ]],
        ['id' => '29e23a6e-be76-5164-b573-01dee76fe3e5', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which unfinished work by Walter Benjamin studies nineteenth-century Paris through its shopping arcades?', 'difficulty' => 5, 'weight' => 924, 'alternatives' => [
                    ['id' => 'ee5c02c7-0e83-5bd3-ae34-9644faf14b1b', 'description' => 'The Poetics of Space', 'correct_answer' => false],
                    ['id' => 'b528bd34-1e54-5225-a335-cc829c71c18d', 'description' => 'The Order of Things', 'correct_answer' => false],
                    ['id' => 'c06b63f7-bd87-530e-9dc6-7a06c983b4a2', 'description' => 'Ways of Seeing', 'correct_answer' => false],
                    ['id' => 'd7643aa0-aace-5ce1-993f-72f9254af996', 'description' => 'The Society of the Spectacle', 'correct_answer' => false],
                    ['id' => '7d20f222-196a-5bc7-9128-091f5c7eab0d', 'description' => 'The Arcades Project', 'correct_answer' => true]
                ]],
        ['id' => '6cb382d1-7497-5674-9be2-538ce721130c', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which Roland Barthes book reflects on photography through the concepts of studium and punctum?', 'difficulty' => 5, 'weight' => 894, 'alternatives' => [
                    ['id' => 'a03dadd3-4589-5341-80b7-2e49d0a6545a', 'description' => 'The Work of Art in the Age of Mechanical Reproduction', 'correct_answer' => false],
                    ['id' => '8a6a6b05-9ee3-517d-b7db-c15584385b1c', 'description' => 'Camera Lucida', 'correct_answer' => true],
                    ['id' => '3aa5058b-39d0-5eed-8de0-6d3a16a00ede', 'description' => 'The Practice of Everyday Life', 'correct_answer' => false],
                    ['id' => '803b0c92-5d48-51e5-8a3f-235ea34288f8', 'description' => 'On Photography', 'correct_answer' => false],
                    ['id' => 'ebea37e1-a4c4-525e-ac36-4028f8eb82c3', 'description' => 'The Poetics of Space', 'correct_answer' => false]
                ]],
        ['id' => 'fe014ebf-18be-5668-bb01-6adf86f1f3b3', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which Michel Foucault book investigates historical systems of knowledge and the conditions of classification?', 'difficulty' => 5, 'weight' => 954, 'alternatives' => [
                    ['id' => 'a1c71841-3f18-506f-9178-cf72615fe37a', 'description' => 'Ways of Seeing', 'correct_answer' => false],
                    ['id' => '0e2a879a-cffc-5087-a7fe-49d72896d045', 'description' => 'The Practice of Everyday Life', 'correct_answer' => false],
                    ['id' => '6c3c09e7-54ef-5cb0-b637-123e8809bf85', 'description' => 'A Thousand Plateaus', 'correct_answer' => false],
                    ['id' => '1288397c-f0cd-582e-bbad-a3b48a0d543f', 'description' => 'The Order of Things', 'correct_answer' => true],
                    ['id' => 'ed7c4b5a-01e7-581a-9961-8b204047299e', 'description' => 'The Poetics of Space', 'correct_answer' => false]
                ]],
        ['id' => '006e2313-af37-5cc0-b7eb-aa475833390b', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which philosophical work by Gaston Bachelard explores the phenomenology of houses, rooms, drawers, and nests?', 'difficulty' => 5, 'weight' => 813, 'alternatives' => [
                    ['id' => 'bbe89a43-0fb1-5ad2-b7ec-d4ab19252da6', 'description' => 'The Poetics of Space', 'correct_answer' => true],
                    ['id' => 'b7a329d2-bba4-5524-8bee-2c015fd07056', 'description' => 'On Photography', 'correct_answer' => false],
                    ['id' => 'cc352561-f18b-50ee-9482-cb5369a88194', 'description' => 'A Thousand Plateaus', 'correct_answer' => false],
                    ['id' => '3b9961f4-9666-574b-88b5-bfb0abff2691', 'description' => 'Camera Lucida', 'correct_answer' => false],
                    ['id' => 'de4944c6-3d4c-55a8-b271-bdf81c7e97c4', 'description' => 'The Practice of Everyday Life', 'correct_answer' => false]
                ]],
        ['id' => '5d6d71e6-6741-52a5-b8c8-e1d7c353228f', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which collaborative philosophical book by Gilles Deleuze and Félix Guattari introduces concepts such as the rhizome?', 'difficulty' => 5, 'weight' => 957, 'alternatives' => [
                    ['id' => 'd53448a1-c25b-589c-b7cf-ad3cc8a49bb4', 'description' => 'Camera Lucida', 'correct_answer' => false],
                    ['id' => 'f5de2cc0-be85-5f1e-8af8-6f3f5f68b5a9', 'description' => 'The Order of Things', 'correct_answer' => false],
                    ['id' => '0f2588f7-b9b3-5633-8cd7-76ab52c2c0cb', 'description' => 'Ways of Seeing', 'correct_answer' => false],
                    ['id' => '22cb07bf-a3a9-5d28-9d2c-2d2da19e2b08', 'description' => 'A Thousand Plateaus', 'correct_answer' => true],
                    ['id' => '96af5442-0166-5149-b7f0-05362850a219', 'description' => 'The Arcades Project', 'correct_answer' => false]
                ]],
        ['id' => '1f80fec9-0045-5fbe-bac5-8b984d9b34d1', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which John Berger book and television series examines visual culture and the social meaning of images?', 'difficulty' => 5, 'weight' => 806, 'alternatives' => [
                    ['id' => '66d1ce91-579b-5516-ac7c-288c48d28576', 'description' => 'Ways of Seeing', 'correct_answer' => true],
                    ['id' => '12fcb032-7c48-57cb-b94b-936751ffdeef', 'description' => 'The Work of Art in the Age of Mechanical Reproduction', 'correct_answer' => false],
                    ['id' => 'aac125ea-e6b0-5d91-b4b7-c81d72b8a68d', 'description' => 'Camera Lucida', 'correct_answer' => false],
                    ['id' => '51a65424-bad5-5c49-8a68-6d659cfcee08', 'description' => 'The Society of the Spectacle', 'correct_answer' => false],
                    ['id' => '6ab8e2c2-a360-569b-bbe8-6d955275bfba', 'description' => 'The Practice of Everyday Life', 'correct_answer' => false]
                ]],
        ['id' => '7a1c954e-5140-517f-a8c7-6ac5a9ce5f2b', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which Susan Sontag collection of essays examines photography\'s cultural and ethical implications?', 'difficulty' => 5, 'weight' => 825, 'alternatives' => [
                    ['id' => '8cb5f3f0-4cdf-54a3-a221-e47d7fa91903', 'description' => 'Ways of Seeing', 'correct_answer' => false],
                    ['id' => '14b49161-6536-5e28-99db-1df4ee4b6d59', 'description' => 'The Arcades Project', 'correct_answer' => false],
                    ['id' => '114d26f5-18c0-5692-8d2c-90bf0f954569', 'description' => 'Camera Lucida', 'correct_answer' => false],
                    ['id' => '55f79d23-eb81-569f-8977-756f6f14df93', 'description' => 'The Society of the Spectacle', 'correct_answer' => false],
                    ['id' => 'a925c753-a0ca-59e2-bcb4-a40744d76c25', 'description' => 'On Photography', 'correct_answer' => true]
                ]],
        ['id' => 'a8b16f81-2b8e-5e7b-85b5-59137784cb8e', 'locale' => 'en-US', 'category' => '177b6f1f-7cd8-5f17-9ab5-c8006692801d', 'question' => 'Which Michel de Certeau work analyzes tactics and strategies in ordinary social practices?', 'difficulty' => 5, 'weight' => 845, 'alternatives' => [
                    ['id' => 'caaa3d35-22fc-5cb3-8fc8-a568a7fe1b2c', 'description' => 'Camera Lucida', 'correct_answer' => false],
                    ['id' => '8997910a-5eb4-5ff1-a28f-6354f967f0bc', 'description' => 'The Society of the Spectacle', 'correct_answer' => false],
                    ['id' => 'e4e71bb7-b8ed-55a0-af3b-191f96cb32be', 'description' => 'The Practice of Everyday Life', 'correct_answer' => true],
                    ['id' => '6329f99b-55bc-50bc-848c-7fc8f6989f61', 'description' => 'A Thousand Plateaus', 'correct_answer' => false],
                    ['id' => 'ed18004f-6d15-5243-9b4c-36ef72031f2a', 'description' => 'On Photography', 'correct_answer' => false]
                ]]
    ];

    public function run(): void
    {
        DB::table('trivia_categorys')->insertOrIgnore(self::CATEGORY);
        foreach (array_chunk(self::QUESTIONS, 100) as $questions) {
            $questionRows = [];
            $alternativeRows = [];
            foreach ($questions as $question) {
                $questionRows[] = ['id' => $question['id'], 'created_by' => 'SYSTEM', 'locale' => $question['locale'], 'category' => $question['category'], 'question' => $question['question'], 'difficulty' => $question['difficulty'], 'weight' => $question['weight']];
                foreach ($question['alternatives'] as $alternative) {
                    $alternativeRows[] = ['id' => $alternative['id'], 'created_by' => 'SYSTEM', 'question' => $question['id'], 'description' => $alternative['description'], 'correct_answer' => $alternative['correct_answer']];
                }
            }
            DB::table('trivia_questions')->insertOrIgnore($questionRows);
            DB::table('trivia_alternatives')->insertOrIgnore($alternativeRows);
        }
    }
}
