<?php

namespace Database\Seeders\Trivia;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TriviaPtBrSeriesSeeder extends Seeder
{
    private const CATEGORY = ['id' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'created_by' => 'SYSTEM', 'short_description' => 'séries', 'description' => 'Series'];

    private const QUESTIONS = [
        ['id' => '139a4555-d4d3-5bf4-858e-acd971545dae', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual animação acompanha a família Simpson na cidade fictícia de Springfield?', 'difficulty' => 1, 'weight' => 193, 'alternatives' => [
                    ['id' => 'e643d8f7-a8ef-5033-8fdd-db701ee2df58', 'description' => 'The Simpsons', 'correct_answer' => true],
                    ['id' => '815d5aa9-7330-5bf1-858e-fa86d8f47061', 'description' => 'Breaking Bad', 'correct_answer' => false],
                    ['id' => '34ae6744-656b-5263-aab6-d809d6810775', 'description' => 'The Walking Dead', 'correct_answer' => false],
                    ['id' => 'e1d457d7-bb5a-58db-a30e-331143b43a69', 'description' => 'The Big Bang Theory', 'correct_answer' => false],
                    ['id' => '7a983caa-d462-53b6-a980-2b614ffa0780', 'description' => 'Game of Thrones', 'correct_answer' => false]
                ]],
        ['id' => '1b06dabd-dfcd-5fdd-92b2-6fbc252087f5', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual sitcom acompanha um grupo de amigos cientistas, incluindo Sheldon e Leonard?', 'difficulty' => 1, 'weight' => 197, 'alternatives' => [
                    ['id' => 'ad021f4b-7f60-55a6-9ba5-b331b26f22ec', 'description' => 'Breaking Bad', 'correct_answer' => false],
                    ['id' => '545599ab-d4ee-5004-b5ce-d1ccfc4037b4', 'description' => 'The Big Bang Theory', 'correct_answer' => true],
                    ['id' => 'ec7d957a-97e8-5bc4-be06-0727a79a7b15', 'description' => 'Friends', 'correct_answer' => false],
                    ['id' => 'efcc7c3c-4ef8-5d43-a191-c7795fc5bff3', 'description' => 'Game of Thrones', 'correct_answer' => false],
                    ['id' => '4a203529-74b9-5517-9ce1-44b3a17ed006', 'description' => 'Grey\'s Anatomy', 'correct_answer' => false]
                ]],
        ['id' => '81e7357b-d0a6-53b5-9e56-d28668d2192f', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual série de fantasia acompanha disputas pelo Trono de Ferro nos Sete Reinos?', 'difficulty' => 1, 'weight' => 175, 'alternatives' => [
                    ['id' => '7eeab0ef-0305-56d8-80a3-87d9c8448a21', 'description' => 'The Walking Dead', 'correct_answer' => false],
                    ['id' => '30eb3f87-a244-5caa-8f87-dfb9b9deaaac', 'description' => 'The Simpsons', 'correct_answer' => false],
                    ['id' => '5e89302d-8f09-56a7-aa48-11506e19596f', 'description' => 'Stranger Things', 'correct_answer' => false],
                    ['id' => '3e5ef053-556f-5698-85f1-ec855acbb097', 'description' => 'Game of Thrones', 'correct_answer' => true],
                    ['id' => '20ff745c-f7a7-5bf1-8b39-84d494f0f8ed', 'description' => 'Breaking Bad', 'correct_answer' => false]
                ]],
        ['id' => '4e7f425e-550e-50b5-bb1e-fdb120fe2f37', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual sitcom acompanha seis amigos que vivem em Nova York e frequentam o Central Perk?', 'difficulty' => 1, 'weight' => 150, 'alternatives' => [
                    ['id' => 'e87e679c-2885-585b-9160-7a465546dfdd', 'description' => 'Game of Thrones', 'correct_answer' => false],
                    ['id' => '0d21834f-ac21-5ead-a269-ebab7cdfd1a7', 'description' => 'Grey\'s Anatomy', 'correct_answer' => false],
                    ['id' => '9b2cd41d-1601-5836-8881-e60e7fd4b528', 'description' => 'Friends', 'correct_answer' => true],
                    ['id' => 'cd3b08df-bf1b-545b-ae16-55abe5eed5a6', 'description' => 'The Big Bang Theory', 'correct_answer' => false],
                    ['id' => 'c38c2dba-0389-5484-832d-5338373b72e7', 'description' => 'Stranger Things', 'correct_answer' => false]
                ]],
        ['id' => 'ee5f52a6-5a59-5774-b122-c08a02c9095e', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual série começa com o desaparecimento de Will Byers na cidade fictícia de Hawkins?', 'difficulty' => 1, 'weight' => 163, 'alternatives' => [
                    ['id' => '04296c2b-2e73-54ba-a177-1df8939de042', 'description' => 'The Big Bang Theory', 'correct_answer' => false],
                    ['id' => '1736f71a-83d8-582a-8c3b-427d634efd6e', 'description' => 'Game of Thrones', 'correct_answer' => false],
                    ['id' => 'f47405d9-7635-58f9-88f9-61ee7c2cc81c', 'description' => 'Stranger Things', 'correct_answer' => true],
                    ['id' => '8ebb3ac0-58d3-5b39-9afb-d0e263b045b5', 'description' => 'Breaking Bad', 'correct_answer' => false],
                    ['id' => '07096997-eaf7-5696-9a8e-cb484cb42c9d', 'description' => 'The Walking Dead', 'correct_answer' => false]
                ]],
        ['id' => '1490d32b-54fc-5661-954c-6fee6fcfc533', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Em qual série Walter White, um professor de química, passa a fabricar metanfetamina?', 'difficulty' => 1, 'weight' => 124, 'alternatives' => [
                    ['id' => '72ef0b16-8fcd-5cd1-b5dd-78dc2142aec9', 'description' => 'The Walking Dead', 'correct_answer' => false],
                    ['id' => '0e039728-4d19-5f6f-a271-4a9f061d38ba', 'description' => 'Stranger Things', 'correct_answer' => false],
                    ['id' => 'cbd1d96d-7733-508f-ac52-d0948c2158f7', 'description' => 'Breaking Bad', 'correct_answer' => true],
                    ['id' => 'ca80b445-408c-5dea-9f15-30655494592f', 'description' => 'Friends', 'correct_answer' => false],
                    ['id' => '7c26952e-485e-574d-9950-868803a3064a', 'description' => 'The Simpsons', 'correct_answer' => false]
                ]],
        ['id' => '392a6a3d-b02f-530d-8dde-6f1e5c31b52a', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual comédia apresenta o cotidiano dos funcionários da filial de Scranton da empresa Dunder Mifflin?', 'difficulty' => 1, 'weight' => 116, 'alternatives' => [
                    ['id' => 'b5f61fdb-cb7f-5f21-815e-441d8dc66705', 'description' => 'The Office', 'correct_answer' => true],
                    ['id' => 'db3a7892-3574-58b9-a072-a86f32325a0b', 'description' => 'La Casa de Papel', 'correct_answer' => false],
                    ['id' => '5b90fc54-a38d-5525-9603-6313df18f589', 'description' => 'The Walking Dead', 'correct_answer' => false],
                    ['id' => '609b0396-331c-5bb4-b924-73d8d3798594', 'description' => 'Grey\'s Anatomy', 'correct_answer' => false],
                    ['id' => 'b3446cdd-b117-5e76-a3e1-4d383bb4c93b', 'description' => 'The Simpsons', 'correct_answer' => false]
                ]],
        ['id' => '51dd04e0-53e5-58db-ba1c-065ea9056857', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual drama médico acompanha Meredith Grey e outros profissionais de um hospital de Seattle?', 'difficulty' => 1, 'weight' => 191, 'alternatives' => [
                    ['id' => 'd140c26b-7d6a-590e-ae8e-f85c067285fd', 'description' => 'The Walking Dead', 'correct_answer' => false],
                    ['id' => '86a515bd-eedd-5ddc-81c6-7d86644d57de', 'description' => 'Stranger Things', 'correct_answer' => false],
                    ['id' => '24797f62-7d37-5a56-8406-84b1dcaee274', 'description' => 'The Office', 'correct_answer' => false],
                    ['id' => 'efb5f3c0-23a3-5520-b6b9-b4f933b61fdc', 'description' => 'Friends', 'correct_answer' => false],
                    ['id' => '38ba0a49-c14a-5891-8975-c985eddef7a0', 'description' => 'Grey\'s Anatomy', 'correct_answer' => true]
                ]],
        ['id' => '907fc555-d8e7-5840-ba10-28aaadac778b', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual série acompanha Michael Scofield elaborando um plano para tirar seu irmão da prisão?', 'difficulty' => 1, 'weight' => 112, 'alternatives' => [
                    ['id' => '64573e8d-1a23-52b3-adf2-0f442e41f368', 'description' => 'Lost', 'correct_answer' => false],
                    ['id' => '63d2ef0b-6544-58d9-b9e3-9112ac0a78fb', 'description' => 'Arrow', 'correct_answer' => false],
                    ['id' => '9f773c4c-a25a-5fd5-b615-38f7d07642d8', 'description' => 'Prison Break', 'correct_answer' => true],
                    ['id' => '02d51dfd-deac-5caf-8899-73615138c5ba', 'description' => 'House', 'correct_answer' => false],
                    ['id' => '0d252faf-a7c4-53fb-8786-832f6be5a14c', 'description' => 'Supernatural', 'correct_answer' => false]
                ]],
        ['id' => '78b6ee98-caa5-522f-9c93-805f87903e89', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual série acompanha Oliver Queen, um bilionário que retorna à cidade e atua como vigilante mascarado?', 'difficulty' => 1, 'weight' => 125, 'alternatives' => [
                    ['id' => '21a72819-b828-50fd-831e-75df35768e6d', 'description' => 'Sherlock', 'correct_answer' => false],
                    ['id' => '29848a1d-6aac-5279-9270-d553d774284c', 'description' => 'Arrow', 'correct_answer' => true],
                    ['id' => '26b0ea3a-6664-5266-81cf-9387c0444109', 'description' => 'Lost', 'correct_answer' => false],
                    ['id' => 'b837b160-f984-5083-9719-423564e939cb', 'description' => 'How I Met Your Mother', 'correct_answer' => false],
                    ['id' => '275f9fe2-a9eb-5178-858e-f522788eb197', 'description' => 'Supernatural', 'correct_answer' => false]
                ]],
        ['id' => '663b574e-6c84-599b-b90c-46c67f5b0fa5', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual sitcom acompanha Ted Mosby contando aos filhos como conheceu a mãe deles?', 'difficulty' => 1, 'weight' => 140, 'alternatives' => [
                    ['id' => '5e9dddd0-a940-53a2-a19e-04dd2d7e7b4e', 'description' => 'Sherlock', 'correct_answer' => false],
                    ['id' => '478c7b8b-506e-53b1-acad-e885f23244c5', 'description' => 'Supernatural', 'correct_answer' => false],
                    ['id' => '64589825-b233-5b9b-99dc-fae473f76b68', 'description' => 'The Vampire Diaries', 'correct_answer' => false],
                    ['id' => 'dac53251-b4da-5297-b81d-f54b4ed44d44', 'description' => 'Dexter', 'correct_answer' => false],
                    ['id' => 'f31908ca-bac9-5705-b598-ac00998c3d97', 'description' => 'How I Met Your Mother', 'correct_answer' => true]
                ]],
        ['id' => 'fd865a06-a9d3-5da2-9a22-74d66166266a', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual série acompanha os irmãos Sam e Dean Winchester caçando criaturas sobrenaturais?', 'difficulty' => 1, 'weight' => 148, 'alternatives' => [
                    ['id' => '45acfe6f-5fd2-55b0-8660-c5af9a1431c4', 'description' => 'Modern Family', 'correct_answer' => false],
                    ['id' => '26a9f90f-2863-563a-8731-0fe874548be6', 'description' => 'Supernatural', 'correct_answer' => true],
                    ['id' => 'd149c1a5-e477-5022-a21b-5c8f23cca808', 'description' => 'House', 'correct_answer' => false],
                    ['id' => '1bf4a483-4557-565f-a919-68e13a9f5241', 'description' => 'Arrow', 'correct_answer' => false],
                    ['id' => '78809175-6ee4-5005-9c5b-135dd46667c6', 'description' => 'Dexter', 'correct_answer' => false]
                ]],
        ['id' => '60c3878d-e513-5c46-ae4c-a2efdb7ccb07', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual drama médico tem como protagonista o médico Gregory House, conhecido por seu comportamento difícil?', 'difficulty' => 1, 'weight' => 115, 'alternatives' => [
                    ['id' => '512f9121-9426-55c3-9ef6-f89fc3b83a70', 'description' => 'Modern Family', 'correct_answer' => false],
                    ['id' => 'd5d271ce-8b8e-5199-8838-86789c3205da', 'description' => 'Prison Break', 'correct_answer' => false],
                    ['id' => '03306d53-9c49-5f0b-a3e7-7933af19dd9a', 'description' => 'Dexter', 'correct_answer' => false],
                    ['id' => '6b119e27-4fc6-5739-b050-562b5f68d6a0', 'description' => 'Lost', 'correct_answer' => false],
                    ['id' => '0ac5c867-14a2-5b54-b3f2-9d26447ac5a4', 'description' => 'House', 'correct_answer' => true]
                ]],
        ['id' => '8539fb8b-f272-5214-8e00-ef6d528c6025', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual série da BBC apresenta Sherlock Holmes e John Watson em uma versão contemporânea de Londres?', 'difficulty' => 1, 'weight' => 131, 'alternatives' => [
                    ['id' => 'f037f201-bd38-52f8-9944-8e0ed99923c9', 'description' => 'Dexter', 'correct_answer' => false],
                    ['id' => '3bdfd45f-3337-5951-a7e4-eda771944694', 'description' => 'How I Met Your Mother', 'correct_answer' => false],
                    ['id' => '6ce5db0e-86ed-5bde-a7f0-0604df02abf1', 'description' => 'Supernatural', 'correct_answer' => false],
                    ['id' => '42e1525c-d7af-5fba-b702-f0258c3309dd', 'description' => 'Prison Break', 'correct_answer' => false],
                    ['id' => '8cbbfa6d-bce1-5d20-bc19-977c90ad35df', 'description' => 'Sherlock', 'correct_answer' => true]
                ]],
        ['id' => '698a2042-6bda-5082-93f4-a29e10b0f93b', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual comédia acompanha três núcleos de uma família extensa por meio de entrevistas e cenas do cotidiano?', 'difficulty' => 1, 'weight' => 134, 'alternatives' => [
                    ['id' => '9b07dd6e-7217-5620-a31e-c9b6b48aaee1', 'description' => 'Supernatural', 'correct_answer' => false],
                    ['id' => 'e6a55d8b-e74b-5554-a4f2-1ddf279ac72b', 'description' => 'Dexter', 'correct_answer' => false],
                    ['id' => '4192c5c3-639b-5a9b-8440-3a6ab3d12400', 'description' => 'How I Met Your Mother', 'correct_answer' => false],
                    ['id' => 'a6d676c6-894c-53ff-ba59-4cedfb3c56e2', 'description' => 'Lost', 'correct_answer' => false],
                    ['id' => '6461604a-9494-5ced-b194-226501dd5888', 'description' => 'Modern Family', 'correct_answer' => true]
                ]],
        ['id' => 'ec35473c-e8e2-5d43-bf69-8a6c1003d7df', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual série acompanha Elena Gilbert e os irmãos vampiros Stefan e Damon Salvatore?', 'difficulty' => 1, 'weight' => 149, 'alternatives' => [
                    ['id' => 'a8e3969d-d43e-54b2-af5b-8f4b1d23e855', 'description' => 'Modern Family', 'correct_answer' => false],
                    ['id' => '366abe06-fa23-5119-9a32-cc0ce777d0b1', 'description' => 'Sherlock', 'correct_answer' => false],
                    ['id' => '25faa292-f15d-5e8e-8503-7994b42a6bfb', 'description' => 'Prison Break', 'correct_answer' => false],
                    ['id' => 'a3ae03a8-fce2-5661-bf72-dc0935e11462', 'description' => 'Supernatural', 'correct_answer' => false],
                    ['id' => '67c29077-ea78-5aa5-8c4b-bce1c837dfae', 'description' => 'The Vampire Diaries', 'correct_answer' => true]
                ]],
        ['id' => '512e656d-1820-520a-910d-dfb54ca50482', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual drama jurídico acompanha Harvey Specter e Mike Ross em um escritório de advocacia?', 'difficulty' => 1, 'weight' => 144, 'alternatives' => [
                    ['id' => '4359a218-1e36-5178-9c4e-7734185779fe', 'description' => 'The 100', 'correct_answer' => false],
                    ['id' => '6d617c61-3b53-525b-b93c-2c727fae937a', 'description' => 'Suits', 'correct_answer' => true],
                    ['id' => '29a54091-91ca-5257-a617-001e4f4c5736', 'description' => 'Lucifer', 'correct_answer' => false],
                    ['id' => '2202e9c8-33c4-50d7-af36-3a1dde64b63c', 'description' => 'Narcos', 'correct_answer' => false],
                    ['id' => 'f9fbc03b-0c19-5f18-bc61-95893ea90040', 'description' => 'Orange Is the New Black', 'correct_answer' => false]
                ]],
        ['id' => '987cb093-960c-57d3-9802-e146e5be987a', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual série histórica acompanha Ragnar Lothbrok e outros personagens do mundo nórdico?', 'difficulty' => 1, 'weight' => 178, 'alternatives' => [
                    ['id' => 'd7267da8-3b7a-5606-9f1a-56d29c9b0022', 'description' => 'The 100', 'correct_answer' => false],
                    ['id' => '200f2f3d-c84b-5a67-8aad-af5682dee3d1', 'description' => 'Vikings', 'correct_answer' => true],
                    ['id' => '22a1d29b-57a2-5bd7-8cf8-e93375ee0490', 'description' => 'Lucifer', 'correct_answer' => false],
                    ['id' => 'ea8f9d7f-c246-5fbc-b682-6e409cf7cc0b', 'description' => 'The Flash', 'correct_answer' => false],
                    ['id' => '87b9815c-7e82-5f7b-bd4c-2eec0a1049a2', 'description' => 'Narcos', 'correct_answer' => false]
                ]],
        ['id' => '12b1a4f7-5472-5bf9-b8c0-037080634321', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual série começa com jovens enviados de uma estação espacial para verificar se a Terra voltou a ser habitável?', 'difficulty' => 1, 'weight' => 193, 'alternatives' => [
                    ['id' => 'f5755b43-d971-513e-914a-c7cae8758d97', 'description' => 'The 100', 'correct_answer' => true],
                    ['id' => '004c47bc-3c22-50a7-9937-f70269bcc5b9', 'description' => 'Lucifer', 'correct_answer' => false],
                    ['id' => '257ccb02-75f0-5481-a88e-58c0c2c1d88e', 'description' => 'The Crown', 'correct_answer' => false],
                    ['id' => 'b7ee2568-37b4-51fc-8a9a-8d779f0cfe7e', 'description' => 'Orange Is the New Black', 'correct_answer' => false],
                    ['id' => '45a2e8d5-f01a-54cb-b59e-56202f08aeac', 'description' => 'Black Mirror', 'correct_answer' => false]
                ]],
        ['id' => '6d06b318-ec03-5eee-8b3a-4ae461defc84', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual série dramatiza o reinado de Elizabeth II e os acontecimentos da família real britânica?', 'difficulty' => 1, 'weight' => 150, 'alternatives' => [
                    ['id' => '10c15e3c-7c3f-533a-92ed-87b601b7cb55', 'description' => 'The Crown', 'correct_answer' => true],
                    ['id' => '45bfcc6d-427d-5445-ae6c-a2e850a8eb94', 'description' => 'Vikings', 'correct_answer' => false],
                    ['id' => '6f49a73d-e7ec-5d49-ba1b-620668721270', 'description' => 'Black Mirror', 'correct_answer' => false],
                    ['id' => '9e17c260-ba7f-56f2-86c0-61bd53bfbbf9', 'description' => 'Narcos', 'correct_answer' => false],
                    ['id' => 'd2b6032a-eb99-58da-95b2-fa193557185a', 'description' => 'The 100', 'correct_answer' => false]
                ]],
        ['id' => 'c1df08d5-1ea2-5068-9dc1-c4a260e23f65', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual série dramatiza o narcotráfico na Colômbia, incluindo a ascensão de Pablo Escobar?', 'difficulty' => 1, 'weight' => 121, 'alternatives' => [
                    ['id' => '999ce039-b14b-57cc-a4cd-692addc1a3d9', 'description' => 'Black Mirror', 'correct_answer' => false],
                    ['id' => '0544615c-2be3-5d3b-8ea3-fba611075164', 'description' => 'Narcos', 'correct_answer' => true],
                    ['id' => 'e44297a4-c321-59a9-85b1-5cd85cd345d5', 'description' => 'Lucifer', 'correct_answer' => false],
                    ['id' => '19f3999c-462b-5358-a6ca-deb402a126ea', 'description' => 'Orange Is the New Black', 'correct_answer' => false],
                    ['id' => '4de58714-fccd-5742-914e-83341e28f1ee', 'description' => 'The 100', 'correct_answer' => false]
                ]],
        ['id' => 'b2415b3c-98c0-5524-b84a-fbf16d726125', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual série de super-herói acompanha Barry Allen, que ganha supervelocidade após um acidente?', 'difficulty' => 1, 'weight' => 157, 'alternatives' => [
                    ['id' => '3355387b-2512-5a28-a1a3-50dee940d226', 'description' => 'The Crown', 'correct_answer' => false],
                    ['id' => '07e3ffeb-c194-5a74-b5fa-874ab0d1e03c', 'description' => 'Black Mirror', 'correct_answer' => false],
                    ['id' => '21ac3852-f46c-52cc-b41a-c45fcc8e8d3f', 'description' => 'Suits', 'correct_answer' => false],
                    ['id' => '43fbf7fa-0846-55ac-b484-eadbb3880314', 'description' => 'The Flash', 'correct_answer' => true],
                    ['id' => 'e3730318-430b-5bc9-9f6f-dec134754805', 'description' => 'Lucifer', 'correct_answer' => false]
                ]],
        ['id' => '8ea797cc-4cf3-5cde-b512-4ddb60ae32aa', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual antologia apresenta histórias independentes sobre tecnologia e seus possíveis impactos sociais?', 'difficulty' => 1, 'weight' => 105, 'alternatives' => [
                    ['id' => 'd335f323-4a36-5c14-a71b-177c8245c47e', 'description' => 'The Crown', 'correct_answer' => false],
                    ['id' => 'ae470738-f81a-55ce-8ec6-8d5919a43f4d', 'description' => 'Suits', 'correct_answer' => false],
                    ['id' => '002ee8d3-8829-506d-86e5-406f3f49758d', 'description' => 'Lucifer', 'correct_answer' => false],
                    ['id' => '34a696ff-9ff2-51e7-a137-09349e1faa53', 'description' => 'Orange Is the New Black', 'correct_answer' => false],
                    ['id' => '24db4751-a69f-5864-8690-f0217403dd30', 'description' => 'Black Mirror', 'correct_answer' => true]
                ]],
        ['id' => '0f43606f-b3d2-5a35-953b-997ad40c31fa', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual comédia acompanha os detetives de uma delegacia fictícia do Brooklyn?', 'difficulty' => 1, 'weight' => 107, 'alternatives' => [
                    ['id' => 'd9e8b50d-0306-5825-ad07-60c61c848344', 'description' => 'Suits', 'correct_answer' => false],
                    ['id' => 'c1a8b801-09d4-584f-aa04-395a6ea70fcc', 'description' => 'Brooklyn Nine-Nine', 'correct_answer' => true],
                    ['id' => '0a37b312-d525-5d0b-995d-77e9b1941e54', 'description' => 'Vikings', 'correct_answer' => false],
                    ['id' => '10d4a95b-597c-5af5-adcf-c40cbce0bbae', 'description' => 'The Flash', 'correct_answer' => false],
                    ['id' => '72eeaf39-f196-5861-976d-75ed7cf6750d', 'description' => 'Black Mirror', 'correct_answer' => false]
                ]],
        ['id' => 'd37faaeb-5bfa-5cd9-b414-dc3f5029fb22', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual drama acompanha adolescentes, incluindo Rue Bennett, lidando com relacionamentos e dependência química?', 'difficulty' => 1, 'weight' => 168, 'alternatives' => [
                    ['id' => 'ef8f01ac-4026-5332-85b9-30ee810a5829', 'description' => 'Lupin', 'correct_answer' => false],
                    ['id' => '6aaddf49-396d-5f0c-8923-79c8730f95bb', 'description' => 'The Witcher', 'correct_answer' => false],
                    ['id' => '49305b09-a759-58cb-9f75-8f993a2e3dae', 'description' => 'Euphoria', 'correct_answer' => true],
                    ['id' => '89588062-fdf4-5e6a-8e72-15fe1cac2478', 'description' => 'The Good Doctor', 'correct_answer' => false],
                    ['id' => '39002caa-1e48-5467-8e42-c64c42b46f42', 'description' => 'Cobra Kai', 'correct_answer' => false]
                ]],
        ['id' => 'eaa3f304-1368-5c8c-b11c-543b6f7875b1', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual série sul-coreana reúne participantes endividados em jogos infantis mortais?', 'difficulty' => 1, 'weight' => 123, 'alternatives' => [
                    ['id' => 'fc1b2d2d-926b-5d30-b1f9-50c92bb5d9d8', 'description' => 'Round 6', 'correct_answer' => true],
                    ['id' => '60b235f0-d7e6-591f-8a46-efe5f0b26de1', 'description' => 'Euphoria', 'correct_answer' => false],
                    ['id' => '3cfdab2a-8f5b-5f9e-838d-799262438ffc', 'description' => 'You', 'correct_answer' => false],
                    ['id' => 'b8b83354-32ec-568c-924a-4d5a92e4b70f', 'description' => 'Elite', 'correct_answer' => false],
                    ['id' => 'd3cbe68d-5380-536a-b363-b44792f2a8ef', 'description' => 'Bridgerton', 'correct_answer' => false]
                ]],
        ['id' => '111483db-d9e5-5863-a727-edce2595b5ed', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual suspense acompanha Joe Goldberg, um homem que desenvolve obsessões perigosas por mulheres?', 'difficulty' => 1, 'weight' => 106, 'alternatives' => [
                    ['id' => '536d5157-f2ff-502d-a3aa-935554938041', 'description' => 'Elite', 'correct_answer' => false],
                    ['id' => 'c6bbebb1-fd2a-5e66-ac7f-4ea58ea44a45', 'description' => 'Wandinha', 'correct_answer' => false],
                    ['id' => 'ae280134-f1ff-5e6a-9ff2-e1e7106e50df', 'description' => 'Bridgerton', 'correct_answer' => false],
                    ['id' => 'a538e5bb-66f4-5d65-a027-fc339cdc11df', 'description' => 'You', 'correct_answer' => true],
                    ['id' => 'e262ac55-1085-5c88-ac27-6e37add416f1', 'description' => 'The Good Doctor', 'correct_answer' => false]
                ]],
        ['id' => '2fafd623-1b9f-5a61-a80b-9e2c44d757ef', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual série espanhola acompanha estudantes de uma escola particular chamada Las Encinas?', 'difficulty' => 1, 'weight' => 103, 'alternatives' => [
                    ['id' => '120da80e-9092-5efe-a81c-ae09c63048d3', 'description' => 'The Witcher', 'correct_answer' => false],
                    ['id' => '42eaac86-2fe5-5057-ae67-49294bf26b67', 'description' => 'Euphoria', 'correct_answer' => false],
                    ['id' => '24d39e77-40c2-54fd-b589-943cf4d53b88', 'description' => 'Bridgerton', 'correct_answer' => false],
                    ['id' => 'c0f92573-7c7c-5cc1-82a0-9e604e65013c', 'description' => 'Elite', 'correct_answer' => true],
                    ['id' => '1132cbf3-8d73-5af1-93e5-b56703c619df', 'description' => 'Round 6', 'correct_answer' => false]
                ]],
        ['id' => 'e1538b24-95d1-532f-8566-37ae33fc9037', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual série francesa acompanha Assane Diop, inspirado nas histórias de Arsène Lupin?', 'difficulty' => 1, 'weight' => 140, 'alternatives' => [
                    ['id' => 'bc0cad53-98ea-57c4-8547-bf2d765d7de0', 'description' => 'The Good Doctor', 'correct_answer' => false],
                    ['id' => '801e05f8-f675-53db-a957-d2743433722f', 'description' => 'The Witcher', 'correct_answer' => false],
                    ['id' => '08a16278-132a-51db-b051-d3fd286d32f3', 'description' => 'Bridgerton', 'correct_answer' => false],
                    ['id' => '898b6a6d-7d67-5e6f-8212-356d0fced618', 'description' => 'Elite', 'correct_answer' => false],
                    ['id' => '7f9a55ee-62cb-58e1-8d24-48b41b87f75a', 'description' => 'Lupin', 'correct_answer' => true]
                ]],
        ['id' => '9dc93a4f-8d97-511a-aae7-5e51a88895c2', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual série de fantasia acompanha o caçador de monstros Geralt de Rívia?', 'difficulty' => 1, 'weight' => 173, 'alternatives' => [
                    ['id' => 'e3564981-f963-5b09-88bb-d7219acd5425', 'description' => 'The Witcher', 'correct_answer' => true],
                    ['id' => '981b349d-9de4-527d-9120-87eca1c0d6d3', 'description' => 'Round 6', 'correct_answer' => false],
                    ['id' => '8eaf9535-bf08-59fc-baaa-63b5a1f06165', 'description' => 'Cobra Kai', 'correct_answer' => false],
                    ['id' => '9a90408f-5f72-5d74-a885-d974deb894e4', 'description' => 'You', 'correct_answer' => false],
                    ['id' => '3679fe11-930d-560b-8d68-2fe4fd1bd95d', 'description' => 'The Good Doctor', 'correct_answer' => false]
                ]],
        ['id' => '6fcf3035-26f2-5239-a4ae-e032e8cfb606', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual série acompanha a filha da Família Addams em uma escola chamada Nunca Mais?', 'difficulty' => 1, 'weight' => 197, 'alternatives' => [
                    ['id' => '877d2434-aa97-5060-ac35-f7abeb57e213', 'description' => 'Elite', 'correct_answer' => false],
                    ['id' => 'a62fcd19-eab5-570c-9bc1-7aa26f093a65', 'description' => 'Lupin', 'correct_answer' => false],
                    ['id' => '8359cec3-2c2d-5bbe-a730-0f4c4ca09f83', 'description' => 'You', 'correct_answer' => false],
                    ['id' => '2a91f46e-31fe-51d3-8163-f2c2f1ee8f8b', 'description' => 'Cobra Kai', 'correct_answer' => false],
                    ['id' => '8af71c21-7377-5020-a6cd-ed39f8768b35', 'description' => 'Wandinha', 'correct_answer' => true]
                ]],
        ['id' => '636bfa58-38e7-5323-b3dd-5c2310a56912', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual drama médico acompanha Shaun Murphy, um jovem cirurgião com autismo e síndrome de savant?', 'difficulty' => 1, 'weight' => 121, 'alternatives' => [
                    ['id' => 'bd1d1c97-c8d2-55c2-a655-8afb5c110900', 'description' => 'Round 6', 'correct_answer' => false],
                    ['id' => '9d05c584-6f43-53e9-a541-a36c19cc692a', 'description' => 'The Good Doctor', 'correct_answer' => true],
                    ['id' => 'ba439ce4-7f3d-5e2d-b422-7b8086181647', 'description' => 'You', 'correct_answer' => false],
                    ['id' => '3f3e9986-ecde-5f54-b574-2a28980442b1', 'description' => 'Euphoria', 'correct_answer' => false],
                    ['id' => '78a61775-631b-5a1d-970a-83762b081e41', 'description' => 'The Witcher', 'correct_answer' => false]
                ]],
        ['id' => '2cbdaaa7-3ed0-583b-b78e-cf3bb3e14d3e', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual sitcom brasileira acompanha Lineu, Nenê, Tuco e Bebel em uma família suburbana?', 'difficulty' => 1, 'weight' => 149, 'alternatives' => [
                    ['id' => '2204d0d9-c06a-5f16-9f73-43c98cdfc6be', 'description' => 'Chaves', 'correct_answer' => false],
                    ['id' => 'a5a9ef96-ee95-5367-8baa-fa169573bee5', 'description' => 'A Grande Família', 'correct_answer' => true],
                    ['id' => 'a83837fe-d079-56ee-bf98-56d3f0d391db', 'description' => 'Avenida Brasil', 'correct_answer' => false],
                    ['id' => '3e6e4c91-8ece-5b83-8824-35abe7803230', 'description' => 'Chapolin Colorado', 'correct_answer' => false],
                    ['id' => 'f1624717-50c3-5849-b24f-8b843f275c24', 'description' => 'Cidade Invisível', 'correct_answer' => false]
                ]],
        ['id' => '858838e6-6b23-5d0c-9cfb-65e3e8f09121', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual programa de comédia mexicano apresenta um herói atrapalhado que usa uma marreta biônica?', 'difficulty' => 1, 'weight' => 124, 'alternatives' => [
                    ['id' => '680009a8-d447-5a2c-8e00-c648b5709544', 'description' => '3%', 'correct_answer' => false],
                    ['id' => 'f1a03a63-7cba-585f-8664-48eb498d72cb', 'description' => 'Chapolin Colorado', 'correct_answer' => true],
                    ['id' => '77d6347b-330d-5c58-a6fb-b2c885d66542', 'description' => 'Cidade Invisível', 'correct_answer' => false],
                    ['id' => '4649f87f-f36f-5468-b8be-d0fd60536cfa', 'description' => 'Chaves', 'correct_answer' => false],
                    ['id' => '00c4a6cd-5f91-57bb-9567-645ac5f98341', 'description' => 'A Grande Família', 'correct_answer' => false]
                ]],
        ['id' => '9c058c7e-b414-520c-a4c5-d575dfee17ea', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual série de comédia mexicana acompanha um menino que vive em uma vila e costuma se esconder em um barril?', 'difficulty' => 1, 'weight' => 121, 'alternatives' => [
                    ['id' => 'e0dbee78-3174-50ab-807b-a1d8b11d4ed1', 'description' => 'Os Normais', 'correct_answer' => false],
                    ['id' => 'b03c1e90-272a-529b-adcb-c9db886a7583', 'description' => 'Chaves', 'correct_answer' => true],
                    ['id' => '931b57c1-cc5a-5cec-8ca3-9705681e228e', 'description' => 'Avenida Brasil', 'correct_answer' => false],
                    ['id' => '00c62635-7e6f-5eae-b7de-1d7ae3b1f2b9', 'description' => 'Sob Pressão', 'correct_answer' => false],
                    ['id' => '89c3e265-d163-53e3-923b-a0d2ba9cc23e', 'description' => 'Tapas & Beijos', 'correct_answer' => false]
                ]],
        ['id' => 'b92e0c8d-8837-5b75-927a-560aac13036c', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual série brasileira mistura investigação policial com personagens do folclore nacional?', 'difficulty' => 1, 'weight' => 182, 'alternatives' => [
                    ['id' => '5787d2f1-c0f1-52c3-aaac-180e35f01213', 'description' => 'Chapolin Colorado', 'correct_answer' => false],
                    ['id' => 'b1e152bc-fb7c-50a8-b7b7-61942458db76', 'description' => 'Sob Pressão', 'correct_answer' => false],
                    ['id' => '5f26cad4-1868-5317-93a2-188c7bb932f7', 'description' => 'Cidade Invisível', 'correct_answer' => true],
                    ['id' => '40dbed7a-59c9-5271-8171-2967ab861e32', 'description' => 'Tapas & Beijos', 'correct_answer' => false],
                    ['id' => '0d08ec18-7bc3-547a-9ee7-3cbb3679cb28', 'description' => 'Sai de Baixo', 'correct_answer' => false]
                ]],
        ['id' => '4929efb2-14f8-567b-b1d2-9df53f5f6326', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual série brasileira acompanha profissionais de um hospital público no Rio de Janeiro?', 'difficulty' => 1, 'weight' => 183, 'alternatives' => [
                    ['id' => '99953610-799c-5d17-99ee-b7a3e0330287', 'description' => 'Chaves', 'correct_answer' => false],
                    ['id' => '3e492456-4459-5ec3-811e-355cbf4fc1b4', 'description' => 'Avenida Brasil', 'correct_answer' => false],
                    ['id' => 'ce0f960c-7519-5e99-ae7c-17f0b581f8c7', 'description' => 'Sob Pressão', 'correct_answer' => true],
                    ['id' => 'c96c1a30-9688-5f9a-96f9-125161d0a649', 'description' => 'A Grande Família', 'correct_answer' => false],
                    ['id' => '5421e569-05dd-517d-bcee-94da9ff8c78a', 'description' => 'Chapolin Colorado', 'correct_answer' => false]
                ]],
        ['id' => '5714ad4e-44f9-59a6-8e42-122fac3c7566', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual série brasileira apresenta uma sociedade dividida e um processo seletivo chamado Processo?', 'difficulty' => 1, 'weight' => 111, 'alternatives' => [
                    ['id' => 'd06148a1-4269-5db7-887f-486fddb7fe6a', 'description' => '3%', 'correct_answer' => true],
                    ['id' => '090ec342-c1ef-502a-953b-4f3c5ea258ae', 'description' => 'Cidade Invisível', 'correct_answer' => false],
                    ['id' => 'e53ba7f9-f74e-52f4-91b2-dccef46d7c46', 'description' => 'Avenida Brasil', 'correct_answer' => false],
                    ['id' => 'c2037bfa-2cc1-5965-a665-6087030f6bcd', 'description' => 'Tapas & Beijos', 'correct_answer' => false],
                    ['id' => 'c829e09a-68e6-567b-93ef-8417fe3d82f5', 'description' => 'Sai de Baixo', 'correct_answer' => false]
                ]],
        ['id' => '2110baab-58f2-5f6b-b52d-4f9b5f61107b', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual comédia brasileira acompanha Fátima e Sueli, que trabalham em uma loja de vestidos de noiva?', 'difficulty' => 1, 'weight' => 165, 'alternatives' => [
                    ['id' => 'a0be1b6c-8a2d-566c-b58b-3d16045d8019', 'description' => 'Chaves', 'correct_answer' => false],
                    ['id' => 'df227948-cefb-50d1-a211-ee290a991695', 'description' => 'Sob Pressão', 'correct_answer' => false],
                    ['id' => '90d244a0-151c-5ced-b80f-2581db285b7c', 'description' => 'Cidade Invisível', 'correct_answer' => false],
                    ['id' => '35ec9d46-2e0e-5d1f-987b-facaf43854aa', 'description' => 'Tapas & Beijos', 'correct_answer' => true],
                    ['id' => '042d6cf3-e5df-56f7-810f-88a14b04b580', 'description' => 'Avenida Brasil', 'correct_answer' => false]
                ]],
        ['id' => '3fae77df-adc1-51c3-9bd0-aec69af274b7', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual novela brasileira acompanha Nina em seu plano de vingança contra Carminha?', 'difficulty' => 1, 'weight' => 140, 'alternatives' => [
                    ['id' => 'f33d1f91-0493-5899-81ec-fc11f8d0c29b', 'description' => 'Avenida Brasil', 'correct_answer' => true],
                    ['id' => '3b44cc46-cd57-59bd-8588-1d8d5176b748', 'description' => 'Sob Pressão', 'correct_answer' => false],
                    ['id' => 'c8467780-506f-5f3e-96cf-69b8564372bb', 'description' => 'A Grande Família', 'correct_answer' => false],
                    ['id' => 'a5d3dab3-b600-54b1-8b93-148320e460e6', 'description' => '3%', 'correct_answer' => false],
                    ['id' => 'f4dd7895-0a2e-5e65-ba2e-3073cdc64140', 'description' => 'Tapas & Beijos', 'correct_answer' => false]
                ]],
        ['id' => 'e38b3753-8c1c-54ca-872c-b9f253710e49', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual antologia criminal se passa principalmente no estado de Minnesota e tem ligação temática com o filme homônimo?', 'difficulty' => 2, 'weight' => 254, 'alternatives' => [
                    ['id' => '4a142d22-a85f-5d74-90fa-32369a52b4ae', 'description' => 'Mad Men', 'correct_answer' => false],
                    ['id' => '267accca-c8f3-57d5-8e7d-08346daf13a6', 'description' => 'Fargo', 'correct_answer' => true],
                    ['id' => 'fd3c5f40-27ab-5a8d-8083-3a011a14e91f', 'description' => 'Better Call Saul', 'correct_answer' => false],
                    ['id' => 'f4c531f7-8187-590d-8a0e-91dcbbdc4070', 'description' => 'The Wire', 'correct_answer' => false],
                    ['id' => '2a0e02ad-b0c1-522c-84c4-f38b3f5dbd86', 'description' => 'Boardwalk Empire', 'correct_answer' => false]
                ]],
        ['id' => '72c9d3a5-0b61-527d-aea0-d2112ad07e13', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual antologia policial estreou com uma temporada protagonizada por Rust Cohle e Marty Hart?', 'difficulty' => 2, 'weight' => 345, 'alternatives' => [
                    ['id' => '76524c8f-9da0-516a-9120-ef85b3c1a5e1', 'description' => 'The Sopranos', 'correct_answer' => false],
                    ['id' => '45cd335a-8574-5191-a532-3caca00b7daa', 'description' => 'True Detective', 'correct_answer' => true],
                    ['id' => 'df939672-c78d-5d99-a8a6-47831dddac3b', 'description' => 'The Wire', 'correct_answer' => false],
                    ['id' => 'cba17c87-e516-5221-9b22-0b523441d56e', 'description' => 'Mad Men', 'correct_answer' => false],
                    ['id' => '9d273eaf-c5e4-564a-a6ea-8f440d2e5a38', 'description' => 'Ozark', 'correct_answer' => false]
                ]],
        ['id' => '7ee15d2b-e618-5178-9aad-202da8d5ea7b', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual série acompanha a transformação de Jimmy McGill no advogado Saul Goodman, antes dos eventos de Breaking Bad?', 'difficulty' => 2, 'weight' => 210, 'alternatives' => [
                    ['id' => '82d34cb7-99f8-5670-8297-50aca528a5f9', 'description' => 'Peaky Blinders', 'correct_answer' => false],
                    ['id' => '9d54ac11-1c3b-586e-87f6-2d21d594534a', 'description' => 'The Wire', 'correct_answer' => false],
                    ['id' => '5307682b-85da-5789-ac93-df022e56fb61', 'description' => 'Boardwalk Empire', 'correct_answer' => false],
                    ['id' => '68e1463f-e5d2-5313-a2b8-eeb69ba31aa5', 'description' => 'Ozark', 'correct_answer' => false],
                    ['id' => '869efcb7-62d0-5339-b312-8c4e5dee75ab', 'description' => 'Better Call Saul', 'correct_answer' => true]
                ]],
        ['id' => '3b23e5c2-0c2e-5663-b156-1eb43f5574a8', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual série acompanha Marty Byrde, um consultor financeiro que lava dinheiro para um cartel?', 'difficulty' => 2, 'weight' => 269, 'alternatives' => [
                    ['id' => '7fa443bf-73c1-5860-ae92-38d3e1776c17', 'description' => 'The Sopranos', 'correct_answer' => false],
                    ['id' => '051b29fb-6304-5d2c-bcd3-9a8205482f76', 'description' => 'True Detective', 'correct_answer' => false],
                    ['id' => '91eaa454-5877-56e8-b81a-2d2969df3235', 'description' => 'Ozark', 'correct_answer' => true],
                    ['id' => 'cb7d092c-d533-56fb-ad8b-8cf5904b985d', 'description' => 'The Wire', 'correct_answer' => false],
                    ['id' => '3abf0288-245e-54ba-91a3-1488296e26d7', 'description' => 'Sons of Anarchy', 'correct_answer' => false]
                ]],
        ['id' => '1b989a3f-0ff0-50a3-abdb-b1f725cd9c83', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual série acompanha Tony Soprano, chefe de uma organização criminosa de Nova Jersey que faz terapia?', 'difficulty' => 2, 'weight' => 203, 'alternatives' => [
                    ['id' => '2b991953-fc21-56a5-bda3-a170a8c22e91', 'description' => 'Better Call Saul', 'correct_answer' => false],
                    ['id' => '470eaf21-04fd-541b-9ece-5c17abecee6d', 'description' => 'Ozark', 'correct_answer' => false],
                    ['id' => '3c7ca0b4-5651-5707-bc31-e114074b8478', 'description' => 'Fargo', 'correct_answer' => false],
                    ['id' => '2fc9956f-64bd-5e6a-838d-7bcf057babc0', 'description' => 'The Wire', 'correct_answer' => false],
                    ['id' => '74e67f98-1d06-5ec0-b17f-8289956ad523', 'description' => 'The Sopranos', 'correct_answer' => true]
                ]],
        ['id' => '172c167b-c9e2-5a04-b930-7da1f8d2ac8c', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual série acompanha a família Shelby e sua gangue em Birmingham após a Primeira Guerra Mundial?', 'difficulty' => 2, 'weight' => 387, 'alternatives' => [
                    ['id' => '1d4b9eca-dc4e-5e1e-87ef-d063d7b7d472', 'description' => 'Sons of Anarchy', 'correct_answer' => false],
                    ['id' => 'd317b8e5-0e01-56ef-8948-0be6c5b2e7a5', 'description' => 'Ozark', 'correct_answer' => false],
                    ['id' => '5da7d338-21c6-5b64-92e6-0c89f0dcae30', 'description' => 'Peaky Blinders', 'correct_answer' => true],
                    ['id' => 'de927196-d73d-5838-9a7b-6fc293d46c8d', 'description' => 'Mad Men', 'correct_answer' => false],
                    ['id' => '34553860-2dad-5064-8ed4-a53b3a4d9b66', 'description' => 'True Detective', 'correct_answer' => false]
                ]],
        ['id' => 'da789868-838b-5179-a384-e40e27e7499e', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual série acompanha o político e contrabandista Enoch \'Nucky\' Thompson durante a Lei Seca nos Estados Unidos?', 'difficulty' => 2, 'weight' => 264, 'alternatives' => [
                    ['id' => 'c550244e-6906-5a07-be16-0819c548a7a3', 'description' => 'Better Call Saul', 'correct_answer' => false],
                    ['id' => 'ea6e4d65-a630-59f9-8d3d-6220eba2ca7d', 'description' => 'Peaky Blinders', 'correct_answer' => false],
                    ['id' => '54c3782a-63a5-5b46-af5d-63feac305006', 'description' => 'True Detective', 'correct_answer' => false],
                    ['id' => 'd0f8b313-e66c-54df-bfce-9bafbd1b4ced', 'description' => 'The Sopranos', 'correct_answer' => false],
                    ['id' => 'e4cbaf01-0579-589a-9e5f-3010ca88cc79', 'description' => 'Boardwalk Empire', 'correct_answer' => true]
                ]],
        ['id' => '32637dd3-467e-50f3-8aa7-34558858fe8c', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual série acompanha um clube de motociclistas fora da lei chamado SAMCRO?', 'difficulty' => 2, 'weight' => 288, 'alternatives' => [
                    ['id' => '145c75bc-ce58-528f-855a-964c8570115f', 'description' => 'Sons of Anarchy', 'correct_answer' => true],
                    ['id' => '9ca60b8e-4f37-568f-98ba-09384d69ca72', 'description' => 'Fargo', 'correct_answer' => false],
                    ['id' => 'fbf3edc7-aec9-5ac9-b573-f38cf344ed84', 'description' => 'Better Call Saul', 'correct_answer' => false],
                    ['id' => '1021d14b-ee60-532e-b5cb-a93fea374915', 'description' => 'Ozark', 'correct_answer' => false],
                    ['id' => 'b1de7101-7c1b-5bfb-adc3-9f5a8013a862', 'description' => 'Peaky Blinders', 'correct_answer' => false]
                ]],
        ['id' => 'ad6225d1-08fe-563b-93b8-85209b8f615c', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual série acompanha oito desconhecidos de diferentes países que passam a compartilhar experiências e habilidades?', 'difficulty' => 2, 'weight' => 267, 'alternatives' => [
                    ['id' => 'a50f4da0-a9aa-51b2-b890-c860b5cc7ffa', 'description' => 'Fringe', 'correct_answer' => false],
                    ['id' => '11c4d34e-a269-5d84-bf80-3df82f2f2253', 'description' => 'Sense8', 'correct_answer' => true],
                    ['id' => '26678376-59d3-5e8e-a612-95550bab223e', 'description' => 'Dark', 'correct_answer' => false],
                    ['id' => '7e3189ed-c8eb-5b59-bd8b-c9e0fa24aa76', 'description' => 'Battlestar Galactica', 'correct_answer' => false],
                    ['id' => '226fd0f2-df18-5a7d-8030-6088180c90b9', 'description' => 'The OA', 'correct_answer' => false]
                ]],
        ['id' => '0356bbc7-016e-500f-988f-549182de29d9', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual série acompanha funcionários de uma empresa que separam cirurgicamente suas memórias profissionais e pessoais?', 'difficulty' => 2, 'weight' => 221, 'alternatives' => [
                    ['id' => '179dea60-dcd8-50c6-98be-c9b4009f7f93', 'description' => 'Sense8', 'correct_answer' => false],
                    ['id' => '8cc95f78-d289-5763-928e-530ba57146a4', 'description' => 'Dark', 'correct_answer' => false],
                    ['id' => '77020ff2-7fe4-5963-9861-8edd39808ab0', 'description' => 'Severance', 'correct_answer' => true],
                    ['id' => 'a0e844fc-d525-594f-9cd9-aa38a952566a', 'description' => 'The Expanse', 'correct_answer' => false],
                    ['id' => '77d80666-2df2-5fa0-9eba-d6e2513f055d', 'description' => 'The Handmaid\'s Tale', 'correct_answer' => false]
                ]],
        ['id' => '783e352d-1191-5511-8ea7-9992d86a6501', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual série adapta o romance de Margaret Atwood sobre uma sociedade teocrática que subjuga mulheres férteis?', 'difficulty' => 2, 'weight' => 274, 'alternatives' => [
                    ['id' => 'aa6df047-cc5d-591c-8e40-ef1a34b40dab', 'description' => 'The Handmaid\'s Tale', 'correct_answer' => true],
                    ['id' => 'e407b6c2-cea5-5c58-a0f7-9fb9e23374da', 'description' => 'Westworld', 'correct_answer' => false],
                    ['id' => '99a13d2c-b5bd-5179-80b6-a9af75f52175', 'description' => 'Fringe', 'correct_answer' => false],
                    ['id' => 'e8b440c7-29ab-53b9-90c2-f4206202b8da', 'description' => 'Orphan Black', 'correct_answer' => false],
                    ['id' => '5f51e64c-62bc-58a4-84bf-81c66496336f', 'description' => 'Severance', 'correct_answer' => false]
                ]],
        ['id' => '1c48f9ca-e4c3-52ff-8ffe-a75f1704a997', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual série acompanha uma divisão do FBI que investiga fenômenos científicos inexplicáveis?', 'difficulty' => 2, 'weight' => 370, 'alternatives' => [
                    ['id' => '2adca239-dc97-51e5-b5d8-ea9f707963d7', 'description' => 'Fringe', 'correct_answer' => true],
                    ['id' => '89fbb882-ac37-52c6-9474-566231859909', 'description' => 'Sense8', 'correct_answer' => false],
                    ['id' => 'e08da297-42de-5917-b3a7-91e310cd44a1', 'description' => 'Battlestar Galactica', 'correct_answer' => false],
                    ['id' => 'b5cb496c-4f37-59b6-abc7-ed8ac71fc9e9', 'description' => 'The Handmaid\'s Tale', 'correct_answer' => false],
                    ['id' => 'a51f9ff9-bb7f-5301-a360-d33faffa4733', 'description' => 'The Expanse', 'correct_answer' => false]
                ]],
        ['id' => '3f5df23d-46c3-5494-8a3a-83cec4b90522', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual série começa em um parque temático do Velho Oeste habitado por androides chamados anfitriões?', 'difficulty' => 2, 'weight' => 380, 'alternatives' => [
                    ['id' => 'baa67adb-0224-5381-87da-13d41cb61331', 'description' => 'Orphan Black', 'correct_answer' => false],
                    ['id' => 'bab01943-2222-54fa-a580-8bed8869642b', 'description' => 'The OA', 'correct_answer' => false],
                    ['id' => 'd0476f6e-4363-5e64-8143-e91727d89208', 'description' => 'The Handmaid\'s Tale', 'correct_answer' => false],
                    ['id' => 'cd2ed12e-4b9b-5454-a07d-74547b8eaa70', 'description' => 'Westworld', 'correct_answer' => true],
                    ['id' => '48e84ea0-bae6-57e0-b209-b69ff2e5ee95', 'description' => 'Sense8', 'correct_answer' => false]
                ]],
        ['id' => 'f5ed4f74-a9ea-5c39-ad27-93127e4d0952', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual série alemã começa com o desaparecimento de uma criança na cidade de Winden e envolve viagens no tempo?', 'difficulty' => 2, 'weight' => 370, 'alternatives' => [
                    ['id' => '572a424b-9828-5bdb-aef0-b5668be0da6d', 'description' => 'The OA', 'correct_answer' => false],
                    ['id' => '1bf8d3a0-7e06-5620-bb26-04fd83246830', 'description' => 'The Expanse', 'correct_answer' => false],
                    ['id' => '2adaf46d-2419-514d-b55b-af731884985b', 'description' => 'The Handmaid\'s Tale', 'correct_answer' => false],
                    ['id' => 'd46e50e1-86ac-5cda-a542-a1765158b9a3', 'description' => 'Dark', 'correct_answer' => true],
                    ['id' => '35927a4b-8e35-5b8d-ac07-b153626d1ed5', 'description' => 'Severance', 'correct_answer' => false]
                ]],
        ['id' => '5f40a634-d4e1-55e8-8c3f-89e17db6f821', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual série acompanha Sarah Manning ao descobrir que é uma entre várias mulheres geneticamente idênticas?', 'difficulty' => 2, 'weight' => 359, 'alternatives' => [
                    ['id' => '6ffce85c-a3c8-5b83-9b22-7a076a9e5fc2', 'description' => 'Battlestar Galactica', 'correct_answer' => false],
                    ['id' => '9c1a7c06-039a-5903-90a5-047ae37891c0', 'description' => 'Severance', 'correct_answer' => false],
                    ['id' => 'ba810b54-6905-5536-8e3f-c2299da9ccd1', 'description' => 'Sense8', 'correct_answer' => false],
                    ['id' => '8ff9e4b3-7c58-53a5-b790-5fb7f3750a70', 'description' => 'Orphan Black', 'correct_answer' => true],
                    ['id' => '7703a8f4-d9ff-5191-96d5-1ee54cf0cccd', 'description' => 'Fringe', 'correct_answer' => false]
                ]],
        ['id' => 'd1ca8a06-821b-5792-86a7-88085e1b0002', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual série acompanha os sobreviventes humanos perseguidos pelos cylons após a destruição das Doze Colônias?', 'difficulty' => 2, 'weight' => 384, 'alternatives' => [
                    ['id' => '27b81e79-3221-5cee-a734-47e7acecb430', 'description' => 'Severance', 'correct_answer' => false],
                    ['id' => '7ae0e101-b213-5a45-8d43-dac927962391', 'description' => 'Westworld', 'correct_answer' => false],
                    ['id' => '90621f9e-34e7-5f9b-96f6-c4ce648f7d19', 'description' => 'The Handmaid\'s Tale', 'correct_answer' => false],
                    ['id' => '6b96e9d2-17f4-51c6-9e41-3b5c13f7225b', 'description' => 'Battlestar Galactica', 'correct_answer' => true],
                    ['id' => '0555c69b-f0bf-522e-887c-09907a225d3c', 'description' => 'Orphan Black', 'correct_answer' => false]
                ]],
        ['id' => '8993e6c3-50d9-50f1-a077-fe78316d0935', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual minissérie dramatiza o acidente nuclear de 1986 na usina de Chernobyl e suas consequências?', 'difficulty' => 2, 'weight' => 358, 'alternatives' => [
                    ['id' => '780209ba-f963-5de1-82b0-d56ed2cfd8cf', 'description' => 'Maid', 'correct_answer' => false],
                    ['id' => '53f54037-68f4-5415-a561-b586d318195e', 'description' => 'Chernobyl', 'correct_answer' => true],
                    ['id' => 'd80eb491-5d6e-511c-a5e2-ad2df6fd76a9', 'description' => 'Dopesick', 'correct_answer' => false],
                    ['id' => '275623cc-bba3-564a-b7ed-d2418ddd902f', 'description' => 'The Queen\'s Gambit', 'correct_answer' => false],
                    ['id' => '2277152f-c90e-5299-a7ce-c7e1cc022a38', 'description' => 'The Pacific', 'correct_answer' => false]
                ]],
        ['id' => '942bbeeb-14d7-57f6-91b6-955767e7b1ff', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual minissérie acompanha fuzileiros navais norte-americanos em campanhas no teatro do Pacífico na Segunda Guerra Mundial?', 'difficulty' => 2, 'weight' => 240, 'alternatives' => [
                    ['id' => '9443b925-c479-5c16-8f30-98bf60f87222', 'description' => 'The Pacific', 'correct_answer' => true],
                    ['id' => '24cf6274-bf2c-518e-8616-ef84d3777c91', 'description' => 'Band of Brothers', 'correct_answer' => false],
                    ['id' => 'e2b5b513-1a52-5fec-ba33-c0eea88d0103', 'description' => 'Olive Kitteridge', 'correct_answer' => false],
                    ['id' => '0a9ba682-b35d-51d0-b412-417b86ef1363', 'description' => 'Olhos que Condenam', 'correct_answer' => false],
                    ['id' => '44092632-9fde-5018-93a7-a5fbb6be9a38', 'description' => 'When They See Us', 'correct_answer' => false]
                ]],
        ['id' => 'b49e5b10-120b-5211-b543-d85eb9e72aab', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual minissérie acompanha investigadoras que conectam casos de estupro após uma jovem ser desacreditada?', 'difficulty' => 2, 'weight' => 274, 'alternatives' => [
                    ['id' => 'b792b1d4-97d7-5c66-ba8e-fbb49f1998da', 'description' => 'The Pacific', 'correct_answer' => false],
                    ['id' => 'e4cff8eb-375c-50aa-8773-3009e3d795a4', 'description' => 'Olive Kitteridge', 'correct_answer' => false],
                    ['id' => 'f11aacd7-9226-598d-ab7d-e51fbcf06cac', 'description' => 'Chernobyl', 'correct_answer' => false],
                    ['id' => 'ceb342db-a16d-58e8-81b0-581ced4dc8b7', 'description' => 'Unbelievable', 'correct_answer' => true],
                    ['id' => 'fc4a568d-f06d-5b14-8f91-4010608114b2', 'description' => 'Band of Brothers', 'correct_answer' => false]
                ]],
        ['id' => '0ee12620-52e1-552e-b717-3e192c585ca9', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual minissérie dramatiza a crise dos opioides nos Estados Unidos e a comercialização do OxyContin?', 'difficulty' => 2, 'weight' => 257, 'alternatives' => [
                    ['id' => '8fdd97d1-e549-5557-ba1d-83b4c6820919', 'description' => 'Chernobyl', 'correct_answer' => false],
                    ['id' => 'f4245df0-341c-5e79-a4a3-7c87c0e4a9a1', 'description' => 'Band of Brothers', 'correct_answer' => false],
                    ['id' => 'f0645ba7-359c-576e-85d9-67373d55db3b', 'description' => 'Dopesick', 'correct_answer' => true],
                    ['id' => 'b0379292-24a5-54c4-a52a-97d81578f17c', 'description' => 'Maid', 'correct_answer' => false],
                    ['id' => 'b61c0433-5e7b-5f04-8aaf-cfd620c9bc1d', 'description' => 'When They See Us', 'correct_answer' => false]
                ]],
        ['id' => '537409cb-ec5e-5084-802e-a3e7b1915d39', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual minissérie acompanha Beth Harmon, uma enxadrista que ascende no cenário competitivo durante a Guerra Fria?', 'difficulty' => 2, 'weight' => 337, 'alternatives' => [
                    ['id' => 'f46a532f-f93a-5ed4-97a2-1cf1716a3c3e', 'description' => 'Dopesick', 'correct_answer' => false],
                    ['id' => 'c2b0803f-2174-5458-b686-95517b6533b3', 'description' => 'The Queen\'s Gambit', 'correct_answer' => true],
                    ['id' => '5bdbca99-50c3-5288-b626-99a807836592', 'description' => 'Band of Brothers', 'correct_answer' => false],
                    ['id' => '144483c2-55ca-5d75-8db2-3f0cdcca3506', 'description' => 'Olive Kitteridge', 'correct_answer' => false],
                    ['id' => 'da5e0291-8d59-53f0-90f9-a507c32bb19d', 'description' => 'Maid', 'correct_answer' => false]
                ]],
        ['id' => 'b495c906-9a3a-5b80-842d-d8f6da5b4a56', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual minissérie acompanha uma professora aposentada e sua comunidade costeira ao longo de décadas?', 'difficulty' => 2, 'weight' => 269, 'alternatives' => [
                    ['id' => 'd70cedcc-170c-51ac-ae39-30cbdbfa3267', 'description' => 'Dopesick', 'correct_answer' => false],
                    ['id' => 'cd00fdce-e15e-5d15-abc7-9f9846e74416', 'description' => 'The Pacific', 'correct_answer' => false],
                    ['id' => 'cfbeeaed-d586-512c-8d73-ed9c01eac5b2', 'description' => 'Olive Kitteridge', 'correct_answer' => true],
                    ['id' => '139234bb-4c5b-5033-a1a7-3c3f2b54652c', 'description' => 'Olhos que Condenam', 'correct_answer' => false],
                    ['id' => '45cf2036-5355-53de-baec-42bde91a90e9', 'description' => 'Unbelievable', 'correct_answer' => false]
                ]],
        ['id' => 'def265be-15d2-524a-9ebb-aad4557544b9', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual minissérie acompanha a Companhia Easy do Exército dos Estados Unidos durante a Segunda Guerra Mundial?', 'difficulty' => 2, 'weight' => 242, 'alternatives' => [
                    ['id' => 'f57c876b-2e57-58ff-9844-8cb14fa9b6cd', 'description' => 'Olive Kitteridge', 'correct_answer' => false],
                    ['id' => '8b10b28c-bfa2-5975-9730-80a5c813abdc', 'description' => 'The Queen\'s Gambit', 'correct_answer' => false],
                    ['id' => '309a7926-da1e-5a16-83f2-011cedcbac2d', 'description' => 'When They See Us', 'correct_answer' => false],
                    ['id' => 'e38422c3-57e0-5ccc-8bd7-d2ece8bd712d', 'description' => 'Band of Brothers', 'correct_answer' => true],
                    ['id' => '878a08b3-be40-5efb-b9ae-9c4d804097e2', 'description' => 'Unbelievable', 'correct_answer' => false]
                ]],
        ['id' => 'e48317fc-1d4b-58ea-8803-e27e8e7a36b4', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual minissérie acompanha Alex, uma jovem mãe que trabalha como faxineira para escapar de um relacionamento abusivo?', 'difficulty' => 2, 'weight' => 367, 'alternatives' => [
                    ['id' => 'cb9a0c43-0932-50a3-99c3-e492950e5a21', 'description' => 'Maid', 'correct_answer' => true],
                    ['id' => '8fba1380-62fc-5b0f-ad99-9dc677460368', 'description' => 'When They See Us', 'correct_answer' => false],
                    ['id' => 'f18c7c9e-2dd5-514e-b04c-868e3d0130ea', 'description' => 'The Queen\'s Gambit', 'correct_answer' => false],
                    ['id' => 'ac118b40-b1c9-5f7e-97fd-0a7d94d1c99a', 'description' => 'Band of Brothers', 'correct_answer' => false],
                    ['id' => '40d8c3f8-e6bb-59e9-9733-e13b9cd16dbc', 'description' => 'The Pacific', 'correct_answer' => false]
                ]],
        ['id' => '5cb395b9-073c-5796-9eac-69d4416469d6', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual série acompanha quatro adolescentes indígenas em uma comunidade rural de Oklahoma?', 'difficulty' => 2, 'weight' => 203, 'alternatives' => [
                    ['id' => '6a91ba30-6445-557c-9031-bbe62c3c96ce', 'description' => 'Ramy', 'correct_answer' => false],
                    ['id' => '0970378e-d39a-5394-9830-f916e55f854f', 'description' => 'Girls', 'correct_answer' => false],
                    ['id' => '8f8b49a3-2ec1-5c6f-921d-b939ca333b60', 'description' => 'Reservation Dogs', 'correct_answer' => true],
                    ['id' => 'ead204f7-8395-57de-8517-4e7be6976bbb', 'description' => 'Atlanta', 'correct_answer' => false],
                    ['id' => '8b443aad-4038-58e0-9484-e7ccb5cbf8b4', 'description' => 'Barry', 'correct_answer' => false]
                ]],
        ['id' => 'd347f787-b522-597e-a2a8-ab38861fdd8d', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual série acompanha o escritor Hank Moody em meio a crises profissionais e relacionamentos em Los Angeles?', 'difficulty' => 2, 'weight' => 249, 'alternatives' => [
                    ['id' => 'fef7cc38-ecaf-5769-a9c1-46ea19594431', 'description' => 'Girls', 'correct_answer' => false],
                    ['id' => '5e05c399-6404-5da0-b6d3-f4a6fdb417b1', 'description' => 'Fleabag', 'correct_answer' => false],
                    ['id' => '1ddc2ea4-b7c2-53fc-a14e-ca90da0eaa47', 'description' => 'Atlanta', 'correct_answer' => false],
                    ['id' => '4bf68b0e-37c5-5290-86c9-0adddd081710', 'description' => 'Californication', 'correct_answer' => true],
                    ['id' => 'bd6b07d4-03ad-5af3-9d0e-086171e71150', 'description' => 'Louie', 'correct_answer' => false]
                ]],
        ['id' => 'e4fac5e3-9813-574b-ac74-e64375fb3da0', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual comédia dramática britânica acompanha uma mulher londrina que frequentemente fala diretamente com a câmera?', 'difficulty' => 2, 'weight' => 239, 'alternatives' => [
                    ['id' => '682905c6-d93f-5c88-a36c-e583e6d1455e', 'description' => 'Barry', 'correct_answer' => false],
                    ['id' => 'b9df7db7-b9d9-5fab-9f39-359044b6d212', 'description' => 'Fleabag', 'correct_answer' => true],
                    ['id' => 'cb963853-f820-5a5e-80a3-4a4a209ab2f5', 'description' => 'Californication', 'correct_answer' => false],
                    ['id' => '99216f7d-fb53-5bb8-8e08-558c3dae87b4', 'description' => 'Atlanta', 'correct_answer' => false],
                    ['id' => 'ce702628-6eab-5130-b1f3-e0c399256e76', 'description' => 'Master of None', 'correct_answer' => false]
                ]],
        ['id' => 'e55d55ff-f464-5f6d-957e-5e2528e848b1', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual comédia dramática acompanha um assassino de aluguel que começa a estudar atuação em Los Angeles?', 'difficulty' => 2, 'weight' => 232, 'alternatives' => [
                    ['id' => 'a1ef5a6f-01f3-5ed3-b94a-8ccfaa65ea2a', 'description' => 'Barry', 'correct_answer' => true],
                    ['id' => '57828110-1495-5ee9-b691-83147e6a8c06', 'description' => 'Girls', 'correct_answer' => false],
                    ['id' => 'd6510b0b-3e14-5a7d-94c7-97dae4ea1046', 'description' => 'Ramy', 'correct_answer' => false],
                    ['id' => '90a6624a-80f4-5441-96bc-0a5b7a35f040', 'description' => 'Louie', 'correct_answer' => false],
                    ['id' => 'f228d4e6-f732-5f45-bc03-af2169005470', 'description' => 'Insecure', 'correct_answer' => false]
                ]],
        ['id' => '0d455dae-0c18-525c-8372-fbbd8aa585c7', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual série acompanha um jovem norte-americano de origem egípcia que tenta conciliar fé, família e vida moderna?', 'difficulty' => 2, 'weight' => 203, 'alternatives' => [
                    ['id' => '4f2133b6-17de-53cb-8a77-d2cf0ee1dcfa', 'description' => 'Master of None', 'correct_answer' => false],
                    ['id' => '255738c8-7dff-56f2-8a1b-58926a8a1626', 'description' => 'Barry', 'correct_answer' => false],
                    ['id' => '24dada3c-f09f-5c5f-b593-7b35712190a3', 'description' => 'Reservation Dogs', 'correct_answer' => false],
                    ['id' => 'd7392582-0973-50cb-b082-75a1901ac359', 'description' => 'Californication', 'correct_answer' => false],
                    ['id' => 'e753647f-abca-53d2-a53d-29d851c44e13', 'description' => 'Ramy', 'correct_answer' => true]
                ]],
        ['id' => '23b4dbc5-065c-51fe-831e-8ebe9867bf49', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual comédia dramática acompanha Dev, um ator de origem indiana que vive em Nova York?', 'difficulty' => 2, 'weight' => 265, 'alternatives' => [
                    ['id' => '86097b9b-d5d0-5d4a-8ddb-7d8174993702', 'description' => 'Reservation Dogs', 'correct_answer' => false],
                    ['id' => 'ba56797e-3708-511c-956e-a4e2759c4a56', 'description' => 'Californication', 'correct_answer' => false],
                    ['id' => '768d01ab-007b-5823-9aa3-a17239e07ed5', 'description' => 'Ramy', 'correct_answer' => false],
                    ['id' => 'd66395a3-0c09-5192-8d35-eb4c23364da7', 'description' => 'Fleabag', 'correct_answer' => false],
                    ['id' => '241dc347-86b4-549b-aab6-5208aa2f0d5d', 'description' => 'Master of None', 'correct_answer' => true]
                ]],
        ['id' => '751000d5-c6e7-51ca-814b-614cdb4e0b36', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual série acompanha Earn e o primo Paper Boi enquanto tentam construir uma carreira musical em Atlanta?', 'difficulty' => 2, 'weight' => 280, 'alternatives' => [
                    ['id' => '17d46f84-758d-5485-90f8-57369fc6eb2b', 'description' => 'Atlanta', 'correct_answer' => true],
                    ['id' => '01586b1f-3e5f-5659-8318-21b98e88ab74', 'description' => 'Californication', 'correct_answer' => false],
                    ['id' => '547b64a9-948b-52d1-a535-53ff966ae475', 'description' => 'Ramy', 'correct_answer' => false],
                    ['id' => '72bf5cfa-d7d4-5142-b19e-ef4570e09aa6', 'description' => 'Girls', 'correct_answer' => false],
                    ['id' => '803ddc86-3ee0-5ddd-8600-f5d9ea5f7ce8', 'description' => 'Barry', 'correct_answer' => false]
                ]],
        ['id' => '4c2a3044-f5a0-59e1-9162-848d93201509', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual série acompanha quatro jovens mulheres tentando encontrar seu caminho em Nova York?', 'difficulty' => 2, 'weight' => 226, 'alternatives' => [
                    ['id' => '0dae5749-24f5-5b63-a617-80fce2855a6e', 'description' => 'Insecure', 'correct_answer' => false],
                    ['id' => '27286a16-4911-5887-9567-cf7c2ecb4195', 'description' => 'Fleabag', 'correct_answer' => false],
                    ['id' => '773652f3-c6d1-518d-863c-7853812b35ea', 'description' => 'Girls', 'correct_answer' => true],
                    ['id' => 'b17b4a47-88f2-52e2-bf7e-b1d1ee522a75', 'description' => 'Barry', 'correct_answer' => false],
                    ['id' => '61649435-5d44-5b25-aecc-983875f2ea86', 'description' => 'Reservation Dogs', 'correct_answer' => false]
                ]],
        ['id' => '5301b5c6-80ca-53bb-a67a-0b0bc8866849', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual série apresenta um grupo que tenta expor e combater super-heróis corruptos e corporativos?', 'difficulty' => 2, 'weight' => 280, 'alternatives' => [
                    ['id' => '0dda91f8-78ee-57e8-96ae-91437b2b533b', 'description' => 'Legion', 'correct_answer' => false],
                    ['id' => '140405db-2674-5d26-a6f7-ba13760900bc', 'description' => 'Pacificador', 'correct_answer' => false],
                    ['id' => 'aa9d769c-d629-5944-bddc-01dbf7671816', 'description' => 'The Boys', 'correct_answer' => true],
                    ['id' => '712ccf5b-01c0-56f1-8654-5a2c526138da', 'description' => 'Doom Patrol', 'correct_answer' => false],
                    ['id' => '570d1238-60f1-502b-ad3c-c15051822eec', 'description' => 'Watchmen', 'correct_answer' => false]
                ]],
        ['id' => '0cb43e31-be60-53ed-813a-f5357ec8906f', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual série acompanha uma investigadora particular com força sobre-humana em Nova York?', 'difficulty' => 2, 'weight' => 256, 'alternatives' => [
                    ['id' => 'a7f00699-a443-5864-bf6a-b866e8cb9698', 'description' => 'Jessica Jones', 'correct_answer' => true],
                    ['id' => 'a1d7aed4-d894-5905-9cd9-0cb8c56d1293', 'description' => 'Watchmen', 'correct_answer' => false],
                    ['id' => 'd24bdb7c-87d3-55d4-8584-7effe0d8da23', 'description' => 'Legion', 'correct_answer' => false],
                    ['id' => '6e83534b-ef03-508c-b28a-b7468676ed20', 'description' => 'Doom Patrol', 'correct_answer' => false],
                    ['id' => '2dfa6d73-9e12-5b1f-baaa-00fe8622ce4e', 'description' => 'Demolidor', 'correct_answer' => false]
                ]],
        ['id' => 'e9ac165d-5c48-567a-8766-8a20fdd9582e', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual série acompanha Christopher Smith, um vigilante obcecado por paz e integrante de uma missão governamental?', 'difficulty' => 2, 'weight' => 333, 'alternatives' => [
                    ['id' => '4938c1cb-c896-5d52-b4fc-099e8b51a3f9', 'description' => 'Pacificador', 'correct_answer' => true],
                    ['id' => '22340ae4-e798-5583-9f6d-2cd96c5b1be4', 'description' => 'Watchmen', 'correct_answer' => false],
                    ['id' => 'bd7ed18e-ff33-5d50-9ee5-172cbfabf1e0', 'description' => 'Jessica Jones', 'correct_answer' => false],
                    ['id' => 'dd6c264a-946c-523b-ab9b-1d655c226ea5', 'description' => 'Demolidor', 'correct_answer' => false],
                    ['id' => '326dfff4-b985-5c04-a88c-45579e7bc567', 'description' => 'Doom Patrol', 'correct_answer' => false]
                ]],
        ['id' => 'cb0fbc95-8dc0-50b5-a86c-19650d898878', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual série acompanha um grupo de heróis marginalizados liderado por um cientista conhecido como Chefe?', 'difficulty' => 2, 'weight' => 363, 'alternatives' => [
                    ['id' => '2926c8aa-b096-5170-b3a2-f663e2c2b26b', 'description' => 'Jessica Jones', 'correct_answer' => false],
                    ['id' => 'e3461f74-34bd-5f4f-9545-b7e401681a59', 'description' => 'Doom Patrol', 'correct_answer' => true],
                    ['id' => 'f8561e7f-9e0b-5c6c-8376-eadbf71ebe43', 'description' => 'The Last of Us', 'correct_answer' => false],
                    ['id' => '87daf410-dafe-517a-8833-3c53d743cc95', 'description' => 'The Boys', 'correct_answer' => false],
                    ['id' => 'dd2de286-e01e-573f-84b8-ffea44fe8381', 'description' => 'Invincible', 'correct_answer' => false]
                ]],
        ['id' => '3306cf9b-63e2-5d28-adb5-532add71025f', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual série acompanha Matt Murdock, advogado cego que atua como vigilante em Hell\'s Kitchen?', 'difficulty' => 2, 'weight' => 316, 'alternatives' => [
                    ['id' => '99d156f2-a7e3-5302-8a69-947e3e086b5a', 'description' => 'Legion', 'correct_answer' => false],
                    ['id' => 'c2ddc6de-a116-5959-8b1c-696f7f86d96b', 'description' => 'Doom Patrol', 'correct_answer' => false],
                    ['id' => 'b225980b-414c-535a-a539-c2656ca65843', 'description' => 'The Boys', 'correct_answer' => false],
                    ['id' => '84a2de85-049f-5b80-af0a-476333a1b179', 'description' => 'Invincible', 'correct_answer' => false],
                    ['id' => 'b6061239-587d-5295-a643-e21cec59edf3', 'description' => 'Demolidor', 'correct_answer' => true]
                ]],
        ['id' => '21423a81-da90-5de6-9601-870cc7aa47ed', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual animação baseada no universo de League of Legends acompanha as cidades de Piltover e Zaun?', 'difficulty' => 2, 'weight' => 352, 'alternatives' => [
                    ['id' => '1265bf53-1833-5283-9e2f-c3043c9f8f14', 'description' => 'Pacificador', 'correct_answer' => false],
                    ['id' => 'ccc21378-0bb0-55c9-a765-f8aeaa53aae8', 'description' => 'Arcane', 'correct_answer' => true],
                    ['id' => 'e5a6eb12-94b3-5981-820f-daf99bdb1fb7', 'description' => 'Watchmen', 'correct_answer' => false],
                    ['id' => '38fe7d34-1eb3-5bb4-9651-4c3e5ea61045', 'description' => 'Demolidor', 'correct_answer' => false],
                    ['id' => '7917c01d-a770-5af8-a138-6b4438ee1d79', 'description' => 'Invincible', 'correct_answer' => false]
                ]],
        ['id' => 'a96fb7dc-46fe-51bf-a3bf-4fe60751ac1d', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual série adapta o jogo em que Joel escolta Ellie por um mundo devastado por uma infecção fúngica?', 'difficulty' => 2, 'weight' => 251, 'alternatives' => [
                    ['id' => '9f095d4c-21f2-5aa7-b062-9074f4e21380', 'description' => 'The Last of Us', 'correct_answer' => true],
                    ['id' => 'a80a4d70-6c35-543d-95ec-dd6a0f97844a', 'description' => 'Watchmen', 'correct_answer' => false],
                    ['id' => 'a8112289-df69-5018-a6bd-5f3e71646b93', 'description' => 'Jessica Jones', 'correct_answer' => false],
                    ['id' => '7fc3f85a-6c58-5c27-a6b9-4444bb53ce2d', 'description' => 'Demolidor', 'correct_answer' => false],
                    ['id' => '983c50a6-42f0-5dea-a2c3-310ac010b7c8', 'description' => 'Invincible', 'correct_answer' => false]
                ]],
        ['id' => '86848b73-2989-5208-931e-bafee4689b31', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual série acompanha David Haller, um homem diagnosticado com esquizofrenia que possui poderes extraordinários?', 'difficulty' => 2, 'weight' => 264, 'alternatives' => [
                    ['id' => '3a9ec5e1-2ce7-5b6e-bbfe-590a7c0502ad', 'description' => 'The Last of Us', 'correct_answer' => false],
                    ['id' => '0bbe4235-706b-509c-bd26-976043ec8442', 'description' => 'Doom Patrol', 'correct_answer' => false],
                    ['id' => '63cc344a-ee20-5afd-9c52-56a8d33c0bc5', 'description' => 'Legion', 'correct_answer' => true],
                    ['id' => 'f9fcd41d-d597-593e-9b22-f4e71a7e4b89', 'description' => 'Jessica Jones', 'correct_answer' => false],
                    ['id' => '4c20f6de-17c9-51e0-b510-1c29ea16cb34', 'description' => 'Invincible', 'correct_answer' => false]
                ]],
        ['id' => '9e71cb72-69be-5c74-8e96-04290d6e30eb', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual drama acompanha a família Fisher, proprietária de uma funerária em Los Angeles?', 'difficulty' => 3, 'weight' => 553, 'alternatives' => [
                    ['id' => '5e5ef1e0-2853-583e-a41a-4f9ec49cb81d', 'description' => 'Deutschland 83', 'correct_answer' => false],
                    ['id' => '714cb1c6-2979-5c0d-8347-67f630ec5e80', 'description' => 'The Knick', 'correct_answer' => false],
                    ['id' => 'c466adfc-644a-5116-9162-cbee2bd21dda', 'description' => 'The Americans', 'correct_answer' => false],
                    ['id' => '9ad53bd8-31e8-53a7-aedc-4483031ba5e0', 'description' => 'Six Feet Under', 'correct_answer' => true],
                    ['id' => '130e5ef9-6c27-5279-b544-5bc011008b37', 'description' => 'Halt and Catch Fire', 'correct_answer' => false]
                ]],
        ['id' => '044edea7-3b1a-5939-a546-67888785b7e8', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual drama histórico acompanha cirurgiões e funcionários de um hospital de Nova York no início do século XX?', 'difficulty' => 3, 'weight' => 459, 'alternatives' => [
                    ['id' => 'b65d4eb5-a528-5e1d-a56c-787fd0cbfa07', 'description' => 'The Knick', 'correct_answer' => true],
                    ['id' => 'e84364d2-05fe-581f-b942-d1e065d040cf', 'description' => 'The Leftovers', 'correct_answer' => false],
                    ['id' => '5f0a915a-f37c-5c9f-9dc5-711180df4214', 'description' => 'Deadwood', 'correct_answer' => false],
                    ['id' => '7438da9d-b709-540f-9d5a-dc8f20eb8794', 'description' => 'Twin Peaks', 'correct_answer' => false],
                    ['id' => 'a1fbaa58-e360-5398-baff-89e1ba72c847', 'description' => 'Halt and Catch Fire', 'correct_answer' => false]
                ]],
        ['id' => 'eedcaa3f-11c1-5453-a633-f108317fa161', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual série acompanha Daniel Holden após sua libertação do corredor da morte, depois de quase duas décadas preso?', 'difficulty' => 3, 'weight' => 480, 'alternatives' => [
                    ['id' => 'a81594d7-8935-5935-85c9-2841b69ae975', 'description' => 'Halt and Catch Fire', 'correct_answer' => false],
                    ['id' => '32aa3c9e-c778-5e4d-8722-e9799d6b2349', 'description' => 'Twin Peaks', 'correct_answer' => false],
                    ['id' => 'ac1a4ed8-17ba-5d3e-83a5-9ea0becbe30b', 'description' => 'Rectify', 'correct_answer' => true],
                    ['id' => 'ab6cd8f0-94ef-5794-8b17-a0b6fc30ea12', 'description' => 'The Americans', 'correct_answer' => false],
                    ['id' => 'a751734e-e036-510d-a2e5-2d74333ffeca', 'description' => 'Six Feet Under', 'correct_answer' => false]
                ]],
        ['id' => '20cf37aa-e08f-5376-8a52-5404bc75cbe8', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual série se passa durante a Grande Depressão e acompanha um circo itinerante e um pregador?', 'difficulty' => 3, 'weight' => 433, 'alternatives' => [
                    ['id' => 'd40467cd-234a-540c-aae5-58ce276694c8', 'description' => 'Halt and Catch Fire', 'correct_answer' => false],
                    ['id' => '720cbf2e-4fc2-527c-add6-36f5c871aa5c', 'description' => 'Six Feet Under', 'correct_answer' => false],
                    ['id' => 'fa1ab54f-a8a1-59b6-940a-a77df455b753', 'description' => 'Carnivàle', 'correct_answer' => true],
                    ['id' => '5c116929-0385-5f59-b92a-cefc730ca3fd', 'description' => 'The Knick', 'correct_answer' => false],
                    ['id' => '30bd8d57-494a-5a1e-bfb6-ee4317f6328c', 'description' => 'The Americans', 'correct_answer' => false]
                ]],
        ['id' => '7e0bd006-cfb2-55bc-85a5-b670ad02f99c', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual série acompanha profissionais envolvidos na revolução dos computadores pessoais e da internet nas décadas de 1980 e 1990?', 'difficulty' => 3, 'weight' => 515, 'alternatives' => [
                    ['id' => '424876c2-aa57-5ced-a1e4-a0ef546e262b', 'description' => 'Six Feet Under', 'correct_answer' => false],
                    ['id' => '5ac5080f-97f7-5901-88f1-e39a4b5ee541', 'description' => 'Deutschland 83', 'correct_answer' => false],
                    ['id' => '9ef7e025-b9f2-56ac-9a5a-6e0ab8878dd6', 'description' => 'The Leftovers', 'correct_answer' => false],
                    ['id' => 'fcaeb555-90c9-5cdc-a274-5bf46a4c7f71', 'description' => 'Halt and Catch Fire', 'correct_answer' => true],
                    ['id' => '4be65c2b-4733-529a-b3fb-a7822178f903', 'description' => 'Carnivàle', 'correct_answer' => false]
                ]],
        ['id' => '614a61ea-5669-5b0c-a314-09fa3b7075fe', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual série acompanha dois espiões soviéticos disfarçados de casal suburbano nos Estados Unidos durante a Guerra Fria?', 'difficulty' => 3, 'weight' => 465, 'alternatives' => [
                    ['id' => '03528498-8d70-5434-be27-d96d08044899', 'description' => 'Twin Peaks', 'correct_answer' => false],
                    ['id' => 'ec876290-7a13-5728-8ba7-5f9529b02838', 'description' => 'The Americans', 'correct_answer' => true],
                    ['id' => '12eacdce-c784-5269-8592-1d5ba1707a7a', 'description' => 'The Knick', 'correct_answer' => false],
                    ['id' => '9463f15b-e9f6-5506-baf4-c861337fc099', 'description' => 'Rectify', 'correct_answer' => false],
                    ['id' => '8fd7ed76-357f-584e-b5f0-81280452811b', 'description' => 'The Leftovers', 'correct_answer' => false]
                ]],
        ['id' => '98eefc45-daf2-54fd-b5a4-460e8825b803', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual série de faroeste acompanha a formação de uma comunidade mineradora na Dakota do Sul durante a década de 1870?', 'difficulty' => 3, 'weight' => 497, 'alternatives' => [
                    ['id' => '34b2dea1-b226-5342-9f9e-4a730327b4dc', 'description' => 'Rectify', 'correct_answer' => false],
                    ['id' => 'fc967e5d-0d5c-51a2-bddb-4cb04f327761', 'description' => 'Deadwood', 'correct_answer' => true],
                    ['id' => '37814f4a-7402-5a28-af8f-eb7ac5254b67', 'description' => 'The Americans', 'correct_answer' => false],
                    ['id' => 'c1b2e7b5-79a6-57a7-a57b-43de9203d94a', 'description' => 'The Knick', 'correct_answer' => false],
                    ['id' => '1bec952d-6529-58b9-987c-e16137ea8b32', 'description' => 'Six Feet Under', 'correct_answer' => false]
                ]],
        ['id' => 'fd17d271-555a-5bbd-97e1-6957ffd9d049', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual série alemã acompanha um jovem agente da Alemanha Oriental infiltrado na Alemanha Ocidental em 1983?', 'difficulty' => 3, 'weight' => 585, 'alternatives' => [
                    ['id' => '0ca36dfd-931d-589b-ac4c-1fe784752702', 'description' => 'Deutschland 83', 'correct_answer' => true],
                    ['id' => 'f2b5509a-c15b-5935-83d9-3d916081bf96', 'description' => 'Rectify', 'correct_answer' => false],
                    ['id' => '5f544651-7a0f-5649-8286-f329003d52ca', 'description' => 'Halt and Catch Fire', 'correct_answer' => false],
                    ['id' => '37056bf7-8743-5be9-b2be-b8db48c91350', 'description' => 'Carnivàle', 'correct_answer' => false],
                    ['id' => '475da033-1c65-5340-8328-2f9c4862f901', 'description' => 'Twin Peaks', 'correct_answer' => false]
                ]],
        ['id' => '20f9a66f-94f4-514d-bb04-d1345b87be6c', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual série britânica acompanha leitores de uma graphic novel que passam a ser perseguidos por uma organização secreta?', 'difficulty' => 3, 'weight' => 536, 'alternatives' => [
                    ['id' => '9dd1328a-d554-5bed-a6da-b524a044a8e9', 'description' => 'Yes Minister', 'correct_answer' => false],
                    ['id' => '97476cc9-73b7-5b91-98c1-b28bb1c4e463', 'description' => 'The Singing Detective', 'correct_answer' => false],
                    ['id' => 'ebefb714-a72b-53eb-ae4f-66f1f982e71d', 'description' => 'Utopia', 'correct_answer' => true],
                    ['id' => '970fe855-1419-5c8d-a7b5-b1d62b5a34d2', 'description' => 'State of Play', 'correct_answer' => false],
                    ['id' => '84b9a0e9-b99d-5c72-b318-cf6b6a4859c9', 'description' => 'The Prisoner', 'correct_answer' => false]
                ]],
        ['id' => 'f7c77736-eecc-5c63-8070-1dcd1e6c3cda', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual sátira britânica acompanha a equipe de comunicação de um ministério do governo?', 'difficulty' => 3, 'weight' => 552, 'alternatives' => [
                    ['id' => '89063f38-a02a-5c11-a541-cbcb7e2026e8', 'description' => 'Brideshead Revisited', 'correct_answer' => false],
                    ['id' => '696b411b-4668-5d0a-a92f-a300945068ab', 'description' => 'Edge of Darkness', 'correct_answer' => false],
                    ['id' => 'b1ef159d-6b9a-5f5e-83da-ad7ff34424ac', 'description' => 'Yes Minister', 'correct_answer' => false],
                    ['id' => '2804984e-288b-5608-b516-229c8b32a5a2', 'description' => 'The Thick of It', 'correct_answer' => true],
                    ['id' => '3a1443c6-fd43-5db9-ac60-0b00ffd02878', 'description' => 'Our Friends in the North', 'correct_answer' => false]
                ]],
        ['id' => 'aa813b11-9f4a-5ba8-98f0-20e32715b2b2', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual série histórica da BBC dramatiza intrigas políticas e familiares da dinastia júlio-claudiana romana?', 'difficulty' => 3, 'weight' => 530, 'alternatives' => [
                    ['id' => 'afc09ff7-d53f-5cfa-a3f1-e0a616c0b49c', 'description' => 'Brideshead Revisited', 'correct_answer' => false],
                    ['id' => 'c8878ca2-5bf4-56aa-832c-d60931f397d7', 'description' => 'I, Claudius', 'correct_answer' => true],
                    ['id' => '072303ca-88df-5f62-b056-7fe79e913431', 'description' => 'Edge of Darkness', 'correct_answer' => false],
                    ['id' => '32f80071-af53-5ba1-8e86-d6e28a5f8eeb', 'description' => 'The Prisoner', 'correct_answer' => false],
                    ['id' => '839278a1-677a-5517-8040-bfecfd0e824a', 'description' => 'Utopia', 'correct_answer' => false]
                ]],
        ['id' => '9bafba7f-bbcd-5824-be62-3e7b147bc2d0', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual minissérie de Dennis Potter acompanha um escritor hospitalizado que mistura sua vida a uma narrativa policial imaginária?', 'difficulty' => 3, 'weight' => 577, 'alternatives' => [
                    ['id' => '88605619-4b7a-5128-9937-9cafc8d445cf', 'description' => 'The Singing Detective', 'correct_answer' => true],
                    ['id' => '272f2cee-146d-52d0-afbb-776353f05990', 'description' => 'Brideshead Revisited', 'correct_answer' => false],
                    ['id' => '5e044961-35ef-5d10-8808-7a1a140a1083', 'description' => 'Yes Minister', 'correct_answer' => false],
                    ['id' => 'fd14cad8-199a-53fa-b7ea-2272eb695c22', 'description' => 'The Thick of It', 'correct_answer' => false],
                    ['id' => '8962e9cb-512b-5453-8f3d-986890e25e83', 'description' => 'Our Friends in the North', 'correct_answer' => false]
                ]],
        ['id' => '99c075ab-4c66-58f0-a821-5875dedad5f2', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual sitcom política britânica acompanha o ministro Jim Hacker e o secretário permanente Humphrey Appleby?', 'difficulty' => 3, 'weight' => 418, 'alternatives' => [
                    ['id' => '83442203-e7dd-57cc-8dc2-53de04a854c7', 'description' => 'State of Play', 'correct_answer' => false],
                    ['id' => '4eb14085-72d2-5284-9803-4d0ec0090cd6', 'description' => 'The Thick of It', 'correct_answer' => false],
                    ['id' => 'f3ae2ef0-7642-5546-85c3-349ac21b4976', 'description' => 'The Prisoner', 'correct_answer' => false],
                    ['id' => '369179bc-7d4b-5c7d-a0ee-aa22f9953280', 'description' => 'Yes Minister', 'correct_answer' => true],
                    ['id' => '097960eb-9891-570a-8493-24b3d7672ab5', 'description' => 'Utopia', 'correct_answer' => false]
                ]],
        ['id' => '22c47efc-0f3b-54e5-85b6-81f1df180714', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual série britânica dos anos 1960 acompanha um ex-agente mantido em uma vila sem saber quem a controla?', 'difficulty' => 3, 'weight' => 459, 'alternatives' => [
                    ['id' => '2a6fe1f9-792e-585f-b6c7-40bd5a4e4a12', 'description' => 'Yes Minister', 'correct_answer' => false],
                    ['id' => '1aedbc02-d813-5ef3-914a-8fc6b07d04ff', 'description' => 'Brideshead Revisited', 'correct_answer' => false],
                    ['id' => '3ba3ec9a-1993-582f-bde7-9ee98a4fb2f0', 'description' => 'The Prisoner', 'correct_answer' => true],
                    ['id' => 'd7ea632c-a40e-53dc-a30c-aa8a684c5644', 'description' => 'The Thick of It', 'correct_answer' => false],
                    ['id' => '3821285a-6dd2-5383-8761-1f7863685738', 'description' => 'The Singing Detective', 'correct_answer' => false]
                ]],
        ['id' => '003cffd1-3f43-505d-b3cb-fa576a9b8da0', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual minissérie britânica acompanha jornalistas investigando a morte de uma assistente de um parlamentar?', 'difficulty' => 3, 'weight' => 494, 'alternatives' => [
                    ['id' => '0f28d873-6cad-5850-b491-b892928903c1', 'description' => 'State of Play', 'correct_answer' => true],
                    ['id' => '9cb0fa4b-ba57-534c-9d47-f3ff8f0970b7', 'description' => 'Edge of Darkness', 'correct_answer' => false],
                    ['id' => 'c2cdf896-3321-5434-9428-88343c64b0a2', 'description' => 'Yes Minister', 'correct_answer' => false],
                    ['id' => 'b4c3369b-38f9-53cc-b9d1-f7e7b4bf0627', 'description' => 'Our Friends in the North', 'correct_answer' => false],
                    ['id' => '11ecee8d-b5ce-5387-af9e-de2280ea1088', 'description' => 'The Prisoner', 'correct_answer' => false]
                ]],
        ['id' => '0bc0d03d-3446-5911-9021-f4473055d5c0', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual minissérie britânica adapta o romance de Evelyn Waugh sobre Charles Ryder e a família Flyte?', 'difficulty' => 3, 'weight' => 523, 'alternatives' => [
                    ['id' => '89f014a4-0e89-5468-9787-0743a4051a62', 'description' => 'State of Play', 'correct_answer' => false],
                    ['id' => '11c06aa4-2e6d-5f6e-985c-c29cb0878d49', 'description' => 'Utopia', 'correct_answer' => false],
                    ['id' => '64bc6ebb-0579-5e68-b640-1e53d62eb498', 'description' => 'Brideshead Revisited', 'correct_answer' => true],
                    ['id' => '05ec1cb2-8874-5e00-86bf-81db5fc05b2d', 'description' => 'Edge of Darkness', 'correct_answer' => false],
                    ['id' => '9a9c5f15-5904-5c56-9a9a-5727df66c1dd', 'description' => 'Our Friends in the North', 'correct_answer' => false]
                ]],
        ['id' => '8b66d1cd-114b-554c-9cc1-3f293d5efc4e', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual minissérie de Rainer Werner Fassbinder adapta o romance de Alfred Döblin sobre Franz Biberkopf?', 'difficulty' => 3, 'weight' => 534, 'alternatives' => [
                    ['id' => '0c194410-6ccc-5c0d-a1b8-f8dd1dbef839', 'description' => 'Scenes from a Marriage', 'correct_answer' => false],
                    ['id' => 'ee093b1b-9e69-522b-8522-997ec8043e42', 'description' => 'Gomorra', 'correct_answer' => false],
                    ['id' => '4650a8ee-a9ab-5e6c-bbb3-9c32da1f07cb', 'description' => 'Pustina', 'correct_answer' => false],
                    ['id' => '70224c72-3b47-5ade-876d-046895cec46c', 'description' => 'Berlin Alexanderplatz', 'correct_answer' => true],
                    ['id' => '63b07b98-c8b1-5024-a6de-a2ab294fc7d3', 'description' => 'Dekalog', 'correct_answer' => false]
                ]],
        ['id' => '13cbe8a1-e390-54f7-99fb-83c204b5c57a', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual série nórdica começa com um corpo encontrado exatamente na fronteira entre Dinamarca e Suécia?', 'difficulty' => 3, 'weight' => 514, 'alternatives' => [
                    ['id' => '5f87dee6-0004-5f2f-8d0f-1b5768e76c89', 'description' => 'Berlin Alexanderplatz', 'correct_answer' => false],
                    ['id' => '1c3b781e-62a4-5720-b6d4-4916ef6428b6', 'description' => 'The Bridge', 'correct_answer' => true],
                    ['id' => '3aba582a-aca2-5226-b6e6-fe72ec09876f', 'description' => 'Pustina', 'correct_answer' => false],
                    ['id' => '80174973-0ae6-510b-a508-b254ec07a71e', 'description' => 'My Brilliant Friend', 'correct_answer' => false],
                    ['id' => 'da021363-2bed-5728-90f0-e070b1f0b2e0', 'description' => 'Borgen', 'correct_answer' => false]
                ]],
        ['id' => 'da80fe56-5f88-5ca6-8662-cf58c5fb4b97', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual série dinamarquesa acompanha a ascensão política de Birgitte Nyborg ao cargo de primeira-ministra?', 'difficulty' => 3, 'weight' => 494, 'alternatives' => [
                    ['id' => 'f3182727-e564-5854-8edb-bbb75105b2d0', 'description' => 'My Brilliant Friend', 'correct_answer' => false],
                    ['id' => '40c349d0-c590-5692-afa9-54dd9cdef4a1', 'description' => 'The Bridge', 'correct_answer' => false],
                    ['id' => '51cc204b-394d-5dac-be68-7a5c7449f5f3', 'description' => 'The Kingdom', 'correct_answer' => false],
                    ['id' => '46c5754b-6980-5157-9758-d3423fbbcedb', 'description' => 'Borgen', 'correct_answer' => true],
                    ['id' => '9f4cbb9c-2e7a-51aa-b413-443161794513', 'description' => 'Gomorra', 'correct_answer' => false]
                ]],
        ['id' => '87748144-844f-57e0-9003-09594f695380', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual série italiana acompanha disputas entre clãs da Camorra em Nápoles?', 'difficulty' => 3, 'weight' => 568, 'alternatives' => [
                    ['id' => '2b601f44-37ee-532f-81ff-bff95f5476e5', 'description' => 'The Kingdom', 'correct_answer' => false],
                    ['id' => '12f43c7a-502b-5de4-9618-e1a2a8a36e20', 'description' => 'Heimat', 'correct_answer' => false],
                    ['id' => '1f7d41fb-3bdb-5b56-936e-44a30f673588', 'description' => 'Scenes from a Marriage', 'correct_answer' => false],
                    ['id' => 'ce221aaf-f7c5-566a-8994-507bbe476831', 'description' => 'Gomorra', 'correct_answer' => true],
                    ['id' => '23a273d4-dbff-5c32-879d-8ba936ad9230', 'description' => 'Berlin Alexanderplatz', 'correct_answer' => false]
                ]],
        ['id' => '5d97b97f-8b9c-54bf-98d7-00b8ef58075d', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual saga televisiva de Edgar Reitz acompanha gerações de uma família na região fictícia de Schabbach, na Alemanha?', 'difficulty' => 3, 'weight' => 404, 'alternatives' => [
                    ['id' => 'b2642a8c-31ab-5988-864f-d9d12d1554f1', 'description' => 'Berlin Alexanderplatz', 'correct_answer' => false],
                    ['id' => '90632768-ce57-5030-9bb1-a94cfe89cfec', 'description' => 'Scenes from a Marriage', 'correct_answer' => false],
                    ['id' => 'cf1b4fd2-f851-518b-84b0-d9efb8047ab3', 'description' => 'Heimat', 'correct_answer' => true],
                    ['id' => '22ccafad-a526-5fea-bf26-58b890b657f3', 'description' => 'Gomorra', 'correct_answer' => false],
                    ['id' => 'd25da855-4530-5ce3-91a4-ea2990aef9dd', 'description' => 'Borgen', 'correct_answer' => false]
                ]],
        ['id' => 'a015712a-f31a-5ad8-be5a-46a6bbcb560d', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual série italiana adapta os romances napolitanos de Elena Ferrante sobre Elena e Lila?', 'difficulty' => 3, 'weight' => 556, 'alternatives' => [
                    ['id' => '5c445532-a183-52d6-9249-1f6d64710de1', 'description' => 'Dekalog', 'correct_answer' => false],
                    ['id' => '421a8186-6d17-5321-aebb-562657c6ff29', 'description' => 'Scenes from a Marriage', 'correct_answer' => false],
                    ['id' => '76e45b6f-ce00-5ec8-907d-0f6d904e35ce', 'description' => 'My Brilliant Friend', 'correct_answer' => true],
                    ['id' => 'd3050eec-83b0-57f8-b47c-a744e9948c04', 'description' => 'Pustina', 'correct_answer' => false],
                    ['id' => 'afc2c34c-0c10-54f6-9915-74bd9e853bd6', 'description' => 'The Bridge', 'correct_answer' => false]
                ]],
        ['id' => '7f72fd58-ed21-5da6-a1fd-9db594d34867', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual série de filmes para televisão de Krzysztof Kieślowski é estruturada em torno dos Dez Mandamentos?', 'difficulty' => 3, 'weight' => 497, 'alternatives' => [
                    ['id' => '381cc1aa-39f2-5528-b993-46073011329e', 'description' => 'Berlin Alexanderplatz', 'correct_answer' => false],
                    ['id' => 'e8276b21-c45c-56e3-9184-e6b6c8c3a0bd', 'description' => 'Scenes from a Marriage', 'correct_answer' => false],
                    ['id' => '779a17d9-c707-5bc0-a8a3-6bea97e437cc', 'description' => 'The Kingdom', 'correct_answer' => false],
                    ['id' => '74124e49-d598-55d3-99bd-7393538bda5c', 'description' => 'The Bridge', 'correct_answer' => false],
                    ['id' => '8dd5bfb8-414a-5e2f-8dc9-8d0663306d8f', 'description' => 'Dekalog', 'correct_answer' => true]
                ]],
        ['id' => '9b1e7223-c8bd-579b-a739-fc80f8d0bbdb', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual série de Lars von Trier se passa em um hospital de Copenhague marcado por eventos sobrenaturais?', 'difficulty' => 3, 'weight' => 522, 'alternatives' => [
                    ['id' => 'c5c8e5f5-1dbd-5648-9774-3dec7a8b369c', 'description' => 'The Kingdom', 'correct_answer' => true],
                    ['id' => '06d29d01-939a-5c3c-a0f9-dcfc34fafd42', 'description' => 'Gomorra', 'correct_answer' => false],
                    ['id' => '7dbbf83e-fff6-5302-aaa9-6367a272c096', 'description' => 'The Bridge', 'correct_answer' => false],
                    ['id' => '960c2fe9-7b8a-5f70-a7f8-db4621119b15', 'description' => 'Heimat', 'correct_answer' => false],
                    ['id' => '088e5776-3a77-515f-8815-96606be197c7', 'description' => 'Dekalog', 'correct_answer' => false]
                ]],
        ['id' => 'db1c2cfa-2ee2-5413-9554-56a5afc9659d', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual série acompanha o surgimento da indústria pornográfica comercial em Nova York durante as décadas de 1970 e 1980?', 'difficulty' => 3, 'weight' => 572, 'alternatives' => [
                    ['id' => '0bbc2cc5-6583-5d57-90db-7c6856ac1c96', 'description' => 'Treme', 'correct_answer' => false],
                    ['id' => 'fedd02a1-27a6-5d60-8df4-7a6c5efa29b9', 'description' => 'The Deuce', 'correct_answer' => true],
                    ['id' => '568a614a-0aee-5b2b-9965-ff7f11f50479', 'description' => 'The Honourable Woman', 'correct_answer' => false],
                    ['id' => 'ba600563-3da3-58b7-8390-d4c9120a25ae', 'description' => 'The Plot Against America', 'correct_answer' => false],
                    ['id' => 'a6c2b6fb-93a1-5172-a833-84c38b3145a3', 'description' => 'Show Me a Hero', 'correct_answer' => false]
                ]],
        ['id' => 'b9cff4f7-1615-59b4-86af-e5422c35952c', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual minissérie acompanha integrantes de uma unidade de reconhecimento dos fuzileiros navais durante a invasão do Iraque em 2003?', 'difficulty' => 3, 'weight' => 449, 'alternatives' => [
                    ['id' => '8ca9b1cd-fdfd-5ace-984f-5e2d135f8382', 'description' => 'The Night Of', 'correct_answer' => false],
                    ['id' => '07aa0299-634f-5def-a492-7fdd83e42775', 'description' => 'The Honourable Woman', 'correct_answer' => false],
                    ['id' => 'd5937cc5-1078-520a-95af-49d487a509ac', 'description' => 'We Own This City', 'correct_answer' => false],
                    ['id' => 'e9ae78a5-68b4-59ad-b2f6-8408ab19ca37', 'description' => 'Generation Kill', 'correct_answer' => true],
                    ['id' => 'b10b1db0-8edb-5ec0-b297-467d40fa5e4b', 'description' => 'The Looming Tower', 'correct_answer' => false]
                ]],
        ['id' => 'd845deb6-a776-5e9e-b922-c6cfa2d64116', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual minissérie acompanha um jovem acusado de assassinato após uma noite em Nova York?', 'difficulty' => 3, 'weight' => 466, 'alternatives' => [
                    ['id' => '0e01d3ec-a5f9-5f73-bf5a-5ab8c59561ed', 'description' => 'The Plot Against America', 'correct_answer' => false],
                    ['id' => '5cf36bf6-85ca-55ce-bfbc-c335f7aa81ae', 'description' => 'Generation Kill', 'correct_answer' => false],
                    ['id' => '8305aec5-d6e0-560f-932e-842aa19f46ab', 'description' => 'The Night Of', 'correct_answer' => true],
                    ['id' => '3c3fced4-9373-5be8-87b5-3afa9a521f7a', 'description' => 'We Own This City', 'correct_answer' => false],
                    ['id' => '6217b92d-43c9-57d8-8462-26c570ab15b1', 'description' => 'Treme', 'correct_answer' => false]
                ]],
        ['id' => '859eb6f8-283c-5180-a4a8-0b99d6644b9e', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual minissérie britânica acompanha uma família de Manchester ao longo de quinze anos de transformações políticas e tecnológicas?', 'difficulty' => 3, 'weight' => 571, 'alternatives' => [
                    ['id' => '646ba251-e2ce-576e-a1fb-c84aede1a5a3', 'description' => 'Generation Kill', 'correct_answer' => false],
                    ['id' => '3c38537e-7fb5-59f8-bef8-45fac953dc78', 'description' => 'The Honourable Woman', 'correct_answer' => false],
                    ['id' => '22624bf7-2be8-5b29-a9fa-26b0a082ef57', 'description' => 'Years and Years', 'correct_answer' => true],
                    ['id' => 'd49459eb-9072-53e6-bebb-e298c0b4e10f', 'description' => 'Show Me a Hero', 'correct_answer' => false],
                    ['id' => 'cb71ba11-8311-5ef0-a5d2-8b2e4acbf615', 'description' => 'The Night Of', 'correct_answer' => false]
                ]],
        ['id' => 'b2fc7d2b-74cb-5ac9-a09c-4035de41a733', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual minissérie dramatiza a corrupção na unidade policial Gun Trace Task Force de Baltimore?', 'difficulty' => 3, 'weight' => 420, 'alternatives' => [
                    ['id' => '8ffa4668-7fc6-5c6e-8972-7e370364660e', 'description' => 'We Own This City', 'correct_answer' => true],
                    ['id' => '44f1086e-5b3a-5ca3-ae57-f3e85bf99e4d', 'description' => 'The Deuce', 'correct_answer' => false],
                    ['id' => '6ab67c90-e000-5beb-9b38-3a87e6083ef4', 'description' => 'Generation Kill', 'correct_answer' => false],
                    ['id' => 'd0d829a2-b17c-590d-abc5-638b2c5999a9', 'description' => 'The Looming Tower', 'correct_answer' => false],
                    ['id' => '4735458f-487b-531b-bac0-9848a95525e8', 'description' => 'The Night Of', 'correct_answer' => false]
                ]],
        ['id' => '68276d7b-056c-5ab2-87b9-6cb8accb37fb', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual minissérie acompanha uma empresária anglo-israelense envolvida em conflitos políticos no Oriente Médio?', 'difficulty' => 3, 'weight' => 537, 'alternatives' => [
                    ['id' => '78f3e2cc-2677-5fbf-b675-8ccfe45b41d1', 'description' => 'The Night Of', 'correct_answer' => false],
                    ['id' => '577ad851-b856-59a2-ab2c-16f50929528e', 'description' => 'The Deuce', 'correct_answer' => false],
                    ['id' => '2dfdf524-70bf-54d1-895c-a2271899fc75', 'description' => 'Show Me a Hero', 'correct_answer' => false],
                    ['id' => '8c39a8e6-4f5e-5993-9ac9-30f689bc250b', 'description' => 'Years and Years', 'correct_answer' => false],
                    ['id' => '4d83b39f-8ac6-5b55-87d1-5f0acab8e9fd', 'description' => 'The Honourable Woman', 'correct_answer' => true]
                ]],
        ['id' => 'b6e13793-3196-570d-91d7-4a4d440e6b0a', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual minissérie dramatiza rivalidades entre agências de inteligência norte-americanas antes dos atentados de 11 de setembro?', 'difficulty' => 3, 'weight' => 565, 'alternatives' => [
                    ['id' => 'a582dda5-4f23-5b7e-a591-fd74314b548c', 'description' => 'The Night Of', 'correct_answer' => false],
                    ['id' => 'a17158b8-6d49-5548-a791-ead6d2c4a5e7', 'description' => 'The Honourable Woman', 'correct_answer' => false],
                    ['id' => '450c37b2-3d2d-5887-be9a-ee988a89d4f2', 'description' => 'Show Me a Hero', 'correct_answer' => false],
                    ['id' => 'c925e309-21f2-57e8-8ee9-7d74447158e0', 'description' => 'The Looming Tower', 'correct_answer' => true],
                    ['id' => 'df09012a-b0ee-50b9-888d-afa6cab0428c', 'description' => 'Treme', 'correct_answer' => false]
                ]],
        ['id' => 'ba286065-4d14-5694-95f4-68f17377e8e4', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual minissérie dramatiza a disputa sobre a construção de moradias populares em Yonkers, Nova York?', 'difficulty' => 3, 'weight' => 558, 'alternatives' => [
                    ['id' => '404f3310-0c64-5b45-afae-28d86a2c48b4', 'description' => 'Show Me a Hero', 'correct_answer' => true],
                    ['id' => '8074e9f2-c956-54a7-8138-94f1923f9015', 'description' => 'We Own This City', 'correct_answer' => false],
                    ['id' => 'a797fff4-ea2b-5ee9-b6b9-5c589e59888c', 'description' => 'The Deuce', 'correct_answer' => false],
                    ['id' => '352098f7-5fe4-53da-82f6-3014eab780da', 'description' => 'Generation Kill', 'correct_answer' => false],
                    ['id' => 'fdffee1c-c679-5da9-89b2-69e9d7ea0c4e', 'description' => 'Years and Years', 'correct_answer' => false]
                ]],
        ['id' => '9c5f5f16-3b25-5669-a10d-648dff25edd0', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual série sul-coreana de época combina intrigas palacianas com uma epidemia de mortos-vivos?', 'difficulty' => 3, 'weight' => 530, 'alternatives' => [
                    ['id' => '25e2332e-d2c9-566b-bd97-7b3665be3c0f', 'description' => 'Kingdom', 'correct_answer' => true],
                    ['id' => '69096ae0-c4a4-51bc-b104-6978f33a24f2', 'description' => 'Signal', 'correct_answer' => false],
                    ['id' => '4e003318-3ee6-5871-8655-bdc0894776f7', 'description' => 'Engrenages', 'correct_answer' => false],
                    ['id' => 'ef1e2c71-e7d8-549b-b5cf-0adb69c4fd19', 'description' => 'Les Revenants', 'correct_answer' => false],
                    ['id' => 'b0ba8125-8a03-5503-9064-fe3ef5452b87', 'description' => 'Beyond Evil', 'correct_answer' => false]
                ]],
        ['id' => 'a9b72c95-dc54-5bdb-b598-936b8794109a', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual série acompanha várias gerações de uma família coreana que migra para o Japão?', 'difficulty' => 3, 'weight' => 512, 'alternatives' => [
                    ['id' => 'eb4b6868-270d-5034-9c10-7955eb788871', 'description' => 'Signal', 'correct_answer' => false],
                    ['id' => '5c69e6cc-83dc-571c-bc24-36e7151da45d', 'description' => 'Engrenages', 'correct_answer' => false],
                    ['id' => '05e5e4f6-34ba-56e9-873f-e7b4467442bf', 'description' => 'Pachinko', 'correct_answer' => true],
                    ['id' => '8caa19b1-7f52-502f-9398-979ab572d920', 'description' => 'Spiral', 'correct_answer' => false],
                    ['id' => '8b9df54f-f12a-5e64-973e-88995d0a4f2c', 'description' => 'Beyond Evil', 'correct_answer' => false]
                ]],
        ['id' => '099f7a6c-dfb5-5b9c-8f1b-83f44bf5cee2', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual série policial francesa acompanha equipes de investigação e magistrados no sistema judicial de Paris?', 'difficulty' => 3, 'weight' => 513, 'alternatives' => [
                    ['id' => '189de04b-669d-57a5-81e0-98f06ab6cf31', 'description' => 'Les Revenants', 'correct_answer' => false],
                    ['id' => '09b58bdd-18c8-59e0-af90-5458e1ee3734', 'description' => 'Beyond Evil', 'correct_answer' => false],
                    ['id' => '658f6b9f-6723-594f-9210-b83c001e6ea6', 'description' => 'Pachinko', 'correct_answer' => false],
                    ['id' => '1d1e9d68-5539-52c1-86f2-c4c4129508a2', 'description' => 'Kingdom', 'correct_answer' => false],
                    ['id' => 'c0e1b0c0-b6be-5eb5-b49b-fb26c2020384', 'description' => 'Spiral', 'correct_answer' => true]
                ]],
        ['id' => 'dc7fbdcc-81b6-5b4f-9087-3126c2ddd8b9', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual suspense sul-coreano acompanha dois policiais investigando desaparecimentos em uma pequena cidade?', 'difficulty' => 3, 'weight' => 542, 'alternatives' => [
                    ['id' => 'cc6ca211-a891-5571-bfca-4b0d32ad951f', 'description' => 'The Glory', 'correct_answer' => false],
                    ['id' => '614ed28a-b4a9-588a-b31c-c678cb404035', 'description' => 'Kingdom', 'correct_answer' => false],
                    ['id' => '172775f9-06b0-54b0-948f-19e5b490a065', 'description' => 'The Kingdom', 'correct_answer' => false],
                    ['id' => '08ab71ff-0b95-559d-b3f6-b646d257a22c', 'description' => 'Beyond Evil', 'correct_answer' => true],
                    ['id' => 'd693dac0-78c8-5671-bfcf-45c7a458b375', 'description' => 'Les Revenants', 'correct_answer' => false]
                ]],
        ['id' => '4308e1e5-54d5-5868-ad91-26541c4c5db3', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual série sul-coreana acompanha uma mulher que planeja vingança contra antigos colegas que a torturaram na escola?', 'difficulty' => 3, 'weight' => 472, 'alternatives' => [
                    ['id' => '47a1f55d-0ff7-55c9-b073-2cc131cd5200', 'description' => 'Pachinko', 'correct_answer' => false],
                    ['id' => 'ad18890b-25c7-573f-8ccb-4703ad16b323', 'description' => 'The Glory', 'correct_answer' => true],
                    ['id' => 'a4ed59da-4bf3-525a-8ed9-dfe48ab4f40e', 'description' => 'Signal', 'correct_answer' => false],
                    ['id' => '7519458e-27df-50eb-b16b-857fa7233e80', 'description' => 'Giri/Haji', 'correct_answer' => false],
                    ['id' => '034747d6-34d7-5ea5-91f1-a2898b3b1b9e', 'description' => 'Spiral', 'correct_answer' => false]
                ]],
        ['id' => 'b52ab1f2-1adc-568a-85b2-cea829528571', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual drama francês é conhecido internacionalmente pelo título Spiral e retrata o sistema judicial parisiense?', 'difficulty' => 3, 'weight' => 493, 'alternatives' => [
                    ['id' => '38f066dd-6d1d-5724-b5e4-864c21b189d7', 'description' => 'Engrenages', 'correct_answer' => true],
                    ['id' => '51d7e565-2d0f-556b-b169-48ecd1c1e637', 'description' => 'Pachinko', 'correct_answer' => false],
                    ['id' => 'a32485d3-caf7-5268-9f91-c77ee8a85823', 'description' => 'The Glory', 'correct_answer' => false],
                    ['id' => '9f1e5e0a-c843-5208-a524-9929829cd082', 'description' => 'Beyond Evil', 'correct_answer' => false],
                    ['id' => 'efb798b1-181f-5f2c-9c27-c65495e948fb', 'description' => 'Les Revenants', 'correct_answer' => false]
                ]],
        ['id' => 'f7cc0150-c305-56d9-8bac-a94039ad1406', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual série de Lars von Trier se passa no hospital Rigshospitalet, em Copenhague, e mistura horror e humor?', 'difficulty' => 3, 'weight' => 590, 'alternatives' => [
                    ['id' => 'a41fc937-24ed-54de-b9b3-b8c7758b65d8', 'description' => 'Les Revenants', 'correct_answer' => false],
                    ['id' => '38d39c00-0883-5b65-bebe-d5f00af96314', 'description' => 'Signal', 'correct_answer' => false],
                    ['id' => '2342d2e0-0639-5a80-a3be-702dc6a81c2a', 'description' => 'Kingdom', 'correct_answer' => false],
                    ['id' => '2129098d-dd92-5820-b839-6c2a517049c3', 'description' => 'The Kingdom', 'correct_answer' => true],
                    ['id' => 'cfe76c2e-00b3-56e5-834e-e61c62ca3392', 'description' => 'The Glory', 'correct_answer' => false]
                ]],
        ['id' => 'b925975f-e85e-5c97-b134-07a238998f3b', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual série acompanha um detetive de Tóquio que viaja a Londres para procurar seu irmão ligado à yakuza?', 'difficulty' => 3, 'weight' => 575, 'alternatives' => [
                    ['id' => 'fc7fffe1-03f3-50ff-99ee-edbdd8172981', 'description' => 'The Glory', 'correct_answer' => false],
                    ['id' => '761811c1-4e32-5bda-8aa0-dfd7b3e416c9', 'description' => 'The Kingdom', 'correct_answer' => false],
                    ['id' => 'cffdee7c-ac61-54a6-8370-b03977fafb43', 'description' => 'Giri/Haji', 'correct_answer' => true],
                    ['id' => 'e1138811-d135-5fdc-9f91-06f9296cdf29', 'description' => 'Les Revenants', 'correct_answer' => false],
                    ['id' => 'd47cd121-cb14-5343-ad6a-6e395f37befa', 'description' => 'Signal', 'correct_answer' => false]
                ]],
        ['id' => 'd6e0452d-98ee-5b33-89b5-386168bfa913', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual drama policial criado por Steven Bochco e David Milch acompanha detetives da 15ª delegacia de Manhattan?', 'difficulty' => 4, 'weight' => 751, 'alternatives' => [
                    ['id' => 'dd270dac-0034-5722-a952-ffa80b92211f', 'description' => 'Line of Duty', 'correct_answer' => false],
                    ['id' => 'b0d37060-ba3f-5b5d-a901-db19babc3c01', 'description' => 'Happy Valley', 'correct_answer' => false],
                    ['id' => 'efe69273-3f1d-5075-a6f9-a239adcf6505', 'description' => 'NYPD Blue', 'correct_answer' => true],
                    ['id' => 'd219a54b-b2e2-55ae-8916-bce8a8cca695', 'description' => 'Homicide: Life on the Street', 'correct_answer' => false],
                    ['id' => 'ab127a0f-dcca-577d-ac2a-dc1975d3adb2', 'description' => 'Southland', 'correct_answer' => false]
                ]],
        ['id' => 'a61d7e20-21e0-5497-8fea-a1c6d891939b', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual série britânica acompanha uma unidade policial especializada em investigar corrupção dentro da própria polícia?', 'difficulty' => 4, 'weight' => 729, 'alternatives' => [
                    ['id' => '491b3fa5-2919-5d01-8d24-c43ab63f156d', 'description' => 'Unforgotten', 'correct_answer' => false],
                    ['id' => '64280b34-ab25-55c3-86e8-64c21ae361ee', 'description' => 'Southland', 'correct_answer' => false],
                    ['id' => '12ab6ceb-9054-5c89-a90f-92e4d6abd4f1', 'description' => 'Line of Duty', 'correct_answer' => true],
                    ['id' => 'c9799518-0bb3-5b33-8867-3699f487a966', 'description' => 'The Fall', 'correct_answer' => false],
                    ['id' => 'bb659a89-2f3a-5a18-9511-638b1457d9c5', 'description' => 'Happy Valley', 'correct_answer' => false]
                ]],
        ['id' => 'bf1045fe-02ff-54aa-93ab-8321f952033d', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual série acompanha uma detetive de Londres que investiga crimes cometidos por um assassino em Belfast?', 'difficulty' => 4, 'weight' => 640, 'alternatives' => [
                    ['id' => '51149d0d-7b36-530e-9fa5-a7eaa77e5998', 'description' => 'The Shield', 'correct_answer' => false],
                    ['id' => '1ce18695-e14b-582c-92d3-c3ccd39fc1ee', 'description' => 'Southland', 'correct_answer' => false],
                    ['id' => 'c72a5ab0-dcad-5fe9-b396-872d16016b8a', 'description' => 'Hill Street Blues', 'correct_answer' => false],
                    ['id' => '499b4846-1ecd-57ed-9e02-89b0b39f3eba', 'description' => 'The Fall', 'correct_answer' => true],
                    ['id' => '6a8bd136-06c9-5d51-860a-e0561bb75fc8', 'description' => 'NYPD Blue', 'correct_answer' => false]
                ]],
        ['id' => 'd3c124f8-9ab9-51f4-9565-3f37eb33ca65', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual drama policial britânico acompanha a sargento Catherine Cawood em uma cidade de West Yorkshire?', 'difficulty' => 4, 'weight' => 764, 'alternatives' => [
                    ['id' => '5e67e5a2-d3c3-5860-8246-117aefe451f6', 'description' => 'Happy Valley', 'correct_answer' => true],
                    ['id' => '1f8337c0-a3f1-5b65-abdd-4ab5404cbcda', 'description' => 'The Fall', 'correct_answer' => false],
                    ['id' => 'bd6eacb4-98f5-5d7c-93c3-2409a211515b', 'description' => 'NYPD Blue', 'correct_answer' => false],
                    ['id' => '02a3c104-51d4-51af-bec3-719048b6312a', 'description' => 'The Shield', 'correct_answer' => false],
                    ['id' => '3cc8d317-2194-5440-85e4-dcfb1ff13689', 'description' => 'Hill Street Blues', 'correct_answer' => false]
                ]],
        ['id' => '76ad3a7d-1f76-504e-bd9b-e1dfbf05b377', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual série estrutura suas temporadas em torno de instituições de Baltimore, como o tráfico, o porto, a política e a educação?', 'difficulty' => 4, 'weight' => 693, 'alternatives' => [
                    ['id' => '2344b009-2f61-5eb6-a06f-26a79ee4451e', 'description' => 'The Wire', 'correct_answer' => true],
                    ['id' => '408267b8-27bf-5174-8ccb-e3db71cd1653', 'description' => 'NYPD Blue', 'correct_answer' => false],
                    ['id' => 'df51dd3e-e760-53bc-bf87-e1595713a70b', 'description' => 'The Shield', 'correct_answer' => false],
                    ['id' => '3a46d189-9cad-5872-91aa-386f87f2b7af', 'description' => 'Hill Street Blues', 'correct_answer' => false],
                    ['id' => 'e3ab376a-5b81-5bd1-b18f-4547fe2fee50', 'description' => 'Southland', 'correct_answer' => false]
                ]],
        ['id' => 'f8a79e7e-dcbb-5fba-8295-469ee4c1ab00', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual série policial acompanha a equipe de investigação liderada por Vic Mackey em uma delegacia fictícia de Los Angeles?', 'difficulty' => 4, 'weight' => 704, 'alternatives' => [
                    ['id' => '70f0c6dc-4176-5c8c-8c09-af851f89a78c', 'description' => 'Unforgotten', 'correct_answer' => false],
                    ['id' => 'ffd51c52-de35-583b-ac12-4aa0b8528f58', 'description' => 'Line of Duty', 'correct_answer' => false],
                    ['id' => 'b03b5b71-767b-5968-8d98-e76fe6ba83e7', 'description' => 'Southland', 'correct_answer' => false],
                    ['id' => 'c784addb-9d10-51ee-9674-95e3c259bc2c', 'description' => 'The Shield', 'correct_answer' => true],
                    ['id' => '10732292-1e90-5456-9355-cb940e6fec2c', 'description' => 'The Wire', 'correct_answer' => false]
                ]],
        ['id' => '045c93ed-71c9-5d36-9aff-fd0871e2fc02', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual série britânica acompanha detetives que reabrem casos de assassinatos antigos após a descoberta de restos mortais?', 'difficulty' => 4, 'weight' => 608, 'alternatives' => [
                    ['id' => 'd396522f-8c01-5e68-aa0e-4dd386cd2cdc', 'description' => 'Unforgotten', 'correct_answer' => true],
                    ['id' => '65b3316d-d010-5ccf-a52a-5e7fe09e582a', 'description' => 'NYPD Blue', 'correct_answer' => false],
                    ['id' => '571015eb-fecc-5a54-a8b2-fd8ca6439148', 'description' => 'The Fall', 'correct_answer' => false],
                    ['id' => 'b9335097-b1c8-513f-bcee-5edf95f53e71', 'description' => 'Happy Valley', 'correct_answer' => false],
                    ['id' => 'e03710bb-49f2-5b3a-86f2-33cb852619ed', 'description' => 'The Wire', 'correct_answer' => false]
                ]],
        ['id' => '52a69717-7f92-5834-b7be-132a7b4142a1', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual drama policial acompanha patrulheiros e detetives do Departamento de Polícia de Los Angeles?', 'difficulty' => 4, 'weight' => 726, 'alternatives' => [
                    ['id' => '4ffd5de8-182e-5458-932d-96e13cf68032', 'description' => 'Southland', 'correct_answer' => true],
                    ['id' => '8c8a66f6-6870-58c4-bdaa-0258829da3f0', 'description' => 'Line of Duty', 'correct_answer' => false],
                    ['id' => '3587f680-aad5-550c-8a60-d17025e225cd', 'description' => 'Happy Valley', 'correct_answer' => false],
                    ['id' => 'acf666aa-9859-5559-8bd5-eecb2626641e', 'description' => 'The Fall', 'correct_answer' => false],
                    ['id' => '016e710e-5515-501e-910b-53091a5e1fac', 'description' => 'Homicide: Life on the Street', 'correct_answer' => false]
                ]],
        ['id' => 'fd1e844f-5247-57aa-9d87-5e2767ab07d7', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual minissérie dramatiza os crimes de Charles Sobhraj contra viajantes na Ásia durante a década de 1970?', 'difficulty' => 4, 'weight' => 798, 'alternatives' => [
                    ['id' => '38755250-e060-5186-8dbc-3346a731ad34', 'description' => 'A Very English Scandal', 'correct_answer' => false],
                    ['id' => '184ff6b3-8ffb-5d90-b86a-ecc90043a559', 'description' => 'The Serpent', 'correct_answer' => true],
                    ['id' => 'af0d88dc-9693-5e4e-8a8e-1ca2ddd9cc1b', 'description' => 'The Tudors', 'correct_answer' => false],
                    ['id' => 'b238ee53-8493-5f70-8617-1a24f58badeb', 'description' => 'The New Pope', 'correct_answer' => false],
                    ['id' => 'e4a8c004-3d79-5f5a-9ed0-34b1aa68f5d3', 'description' => 'Medici', 'correct_answer' => false]
                ]],
        ['id' => 'dfb13dd8-5656-5af9-bd52-690a0db5404d', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual drama histórico britânico acompanha a monarquia durante o reinado de Elizabeth II?', 'difficulty' => 4, 'weight' => 743, 'alternatives' => [
                    ['id' => 'a9e6136f-b2ed-5e0e-bd34-d7df799c1df0', 'description' => 'The Crown', 'correct_answer' => true],
                    ['id' => 'a02802bd-c190-56be-966b-f423b25a1a76', 'description' => 'Wolf Hall', 'correct_answer' => false],
                    ['id' => '4141bc7d-9fe3-5ad4-8502-288b88153efa', 'description' => 'The Borgias', 'correct_answer' => false],
                    ['id' => '1204f004-84c8-5da3-b771-e0c05d038974', 'description' => 'A Very English Scandal', 'correct_answer' => false],
                    ['id' => '8a7b62ad-eeca-5ec2-bc2e-2f89e9f0856b', 'description' => 'The Serpent', 'correct_answer' => false]
                ]],
        ['id' => '473547d7-ad5e-5efa-8613-e36b405e459d', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual série acompanha Luís XIV e a construção e consolidação da corte no Palácio de Versalhes?', 'difficulty' => 4, 'weight' => 636, 'alternatives' => [
                    ['id' => '4cdd4bb0-92dc-5ad2-ba5d-903d2656aa2d', 'description' => 'Wolf Hall', 'correct_answer' => false],
                    ['id' => 'a20c6bc0-9b1a-5b43-bda9-40aaf4b4cb82', 'description' => 'Medici', 'correct_answer' => false],
                    ['id' => '78793515-4076-5578-9fbc-411bc55ea4da', 'description' => 'The Borgias', 'correct_answer' => false],
                    ['id' => '75235760-9e8b-5987-87e4-c2a87a62f654', 'description' => 'The Young Pope', 'correct_answer' => false],
                    ['id' => 'c4637405-f2b5-5f33-9076-c757acae591f', 'description' => 'Versailles', 'correct_answer' => true]
                ]],
        ['id' => 'f7155e23-015b-5099-802a-732e06268d37', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual drama histórico acompanha Thomas Cromwell na corte de Henrique VIII?', 'difficulty' => 4, 'weight' => 616, 'alternatives' => [
                    ['id' => '556847ac-aef7-570d-a6bd-eca4dc80449d', 'description' => 'The Young Pope', 'correct_answer' => false],
                    ['id' => '61196dec-dbba-55bc-b477-88dd3491e450', 'description' => 'Medici', 'correct_answer' => false],
                    ['id' => '0b018e95-bf59-58a0-bbdc-d7ca3287528a', 'description' => 'Wolf Hall', 'correct_answer' => true],
                    ['id' => '003b6321-7c90-5377-a71e-3a375a37403c', 'description' => 'The Borgias', 'correct_answer' => false],
                    ['id' => 'c026d4be-e802-53a5-babf-149389eda029', 'description' => 'The Crown', 'correct_answer' => false]
                ]],
        ['id' => 'ecd08836-45cd-5ae0-ae6f-522224961183', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual série de Paolo Sorrentino acompanha um papa norte-americano fictício conhecido como Pio XIII?', 'difficulty' => 4, 'weight' => 633, 'alternatives' => [
                    ['id' => 'f913c15d-e82f-5bed-ab90-ad197d2548f0', 'description' => 'The Serpent', 'correct_answer' => false],
                    ['id' => '92abb4b7-738f-5661-8f22-cbcbca92e170', 'description' => 'Medici', 'correct_answer' => false],
                    ['id' => '6c3f0b89-5f8b-58a0-94ab-9b819add5d8e', 'description' => 'Versailles', 'correct_answer' => false],
                    ['id' => 'a10c90b2-cc35-5db0-aced-5f153fb4a651', 'description' => 'A Very English Scandal', 'correct_answer' => false],
                    ['id' => '3581e4de-d6d2-54c4-9cae-a2899fefd746', 'description' => 'The Young Pope', 'correct_answer' => true]
                ]],
        ['id' => 'd3aff94d-0638-553d-af31-052e0f5b66a6', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual série acompanha a família Bórgia e sua influência na política e na Igreja durante o Renascimento?', 'difficulty' => 4, 'weight' => 764, 'alternatives' => [
                    ['id' => '380e241b-1bf2-577a-bcd9-5c26566068a4', 'description' => 'The Borgias', 'correct_answer' => true],
                    ['id' => '0719bc93-22f6-5981-aa99-042a1f5c50c5', 'description' => 'Medici', 'correct_answer' => false],
                    ['id' => '32468ab2-48e8-521e-8efa-abb1faabfa16', 'description' => 'A Very English Scandal', 'correct_answer' => false],
                    ['id' => '5e57a6c5-4f6f-55f4-8636-36745a5d03b2', 'description' => 'The Young Pope', 'correct_answer' => false],
                    ['id' => '37636b5b-4a47-5559-ad3c-68f1e42c3e76', 'description' => 'The Crown', 'correct_answer' => false]
                ]],
        ['id' => '62335fda-5efe-5a63-a370-ff6441b7e865', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual série histórica acompanha a família Médici e sua influência na Florença renascentista?', 'difficulty' => 4, 'weight' => 602, 'alternatives' => [
                    ['id' => '6fe432e4-1ae0-50e3-84eb-543eb1e0e66d', 'description' => 'The Tudors', 'correct_answer' => false],
                    ['id' => '338c4831-a218-56f3-bdbc-360ebbf70bd3', 'description' => 'The Borgias', 'correct_answer' => false],
                    ['id' => 'b42dfcb8-a3e9-5dfb-a824-ed133f1626cc', 'description' => 'Versailles', 'correct_answer' => false],
                    ['id' => '27fcbbce-6852-59fc-8e84-901ce777d20c', 'description' => 'Medici', 'correct_answer' => true],
                    ['id' => '4ceeae25-8601-5c9d-90b3-a07de41df629', 'description' => 'A Very English Scandal', 'correct_answer' => false]
                ]],
        ['id' => 'b0dab03b-abe6-570b-96e6-f65a49a0dd40', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual continuação de The Young Pope apresenta a chegada de João Paulo III ao Vaticano?', 'difficulty' => 4, 'weight' => 657, 'alternatives' => [
                    ['id' => 'f4245e52-4bf8-5cec-a576-ee695f54a834', 'description' => 'A Very English Scandal', 'correct_answer' => false],
                    ['id' => '7acd4dc1-811d-5049-80aa-5f965b89dd0d', 'description' => 'Wolf Hall', 'correct_answer' => false],
                    ['id' => 'bfbaacf6-f122-5607-8730-8177a3ddef2d', 'description' => 'Versailles', 'correct_answer' => false],
                    ['id' => '836cac19-87bc-5e1e-a872-6affa048ee7c', 'description' => 'The New Pope', 'correct_answer' => true],
                    ['id' => '5a085d91-86c2-5bfa-b5fb-e4399ed6b461', 'description' => 'Medici', 'correct_answer' => false]
                ]],
        ['id' => '05b9bfac-5fc9-55e7-b220-c21c312fa40d', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual série de Brit Marling e Zal Batmanglij começa com o retorno de Prairie Johnson após sete anos desaparecida e sua nova identidade como OA?', 'difficulty' => 4, 'weight' => 761, 'alternatives' => [
                    ['id' => '9c955e82-d2da-58ab-abbe-b72e8367ad1f', 'description' => 'The OA', 'correct_answer' => true],
                    ['id' => 'e94f8885-e370-504a-ada3-2dd0c4aa9e9b', 'description' => 'The Third Day', 'correct_answer' => false],
                    ['id' => '5c93892c-1b8d-5f09-9e11-ee771b873ced', 'description' => 'The Peripheral', 'correct_answer' => false],
                    ['id' => '915ed47d-9b8f-5292-9e35-677678c01159', 'description' => 'Maniac', 'correct_answer' => false],
                    ['id' => 'acac9568-a698-53a1-814e-731b37bb5f79', 'description' => 'Station Eleven', 'correct_answer' => false]
                ]],
        ['id' => 'af72201e-78d5-5d00-8922-1a47c9569fa2', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual minissérie acompanha dois participantes de um ensaio farmacêutico que passam por experiências mentais compartilhadas?', 'difficulty' => 4, 'weight' => 727, 'alternatives' => [
                    ['id' => 'd6cb2e5a-5bcb-5a99-a116-9812e209c3d0', 'description' => 'Raised by Wolves', 'correct_answer' => false],
                    ['id' => '3b4b6ca0-b4e3-5abb-9b9d-d5c928df2d00', 'description' => 'Devs', 'correct_answer' => false],
                    ['id' => '8e548027-3231-5522-94d7-83a493c6a80f', 'description' => 'The Peripheral', 'correct_answer' => false],
                    ['id' => '1aded6ae-6d8e-5052-aa60-e1634bc20c18', 'description' => 'Maniac', 'correct_answer' => true],
                    ['id' => '98b23cde-f8cd-52ba-adb8-78caa6cc499e', 'description' => 'Tales from the Loop', 'correct_answer' => false]
                ]],
        ['id' => '20372d1f-c7aa-5819-85eb-5fb028b76315', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual série de ficção científica se passa em uma cidade construída sobre uma instalação experimental chamada Loop?', 'difficulty' => 4, 'weight' => 754, 'alternatives' => [
                    ['id' => '01b9e7df-b8db-54ab-844d-fdc68fb8bc42', 'description' => 'Devs', 'correct_answer' => false],
                    ['id' => '10219790-eed6-5c90-ad90-08335ce50f70', 'description' => 'Counterpart', 'correct_answer' => false],
                    ['id' => 'f962cc4f-a843-5a70-8063-b20aca37be0c', 'description' => 'Tales from the Loop', 'correct_answer' => true],
                    ['id' => '951fbb8e-c717-5872-94a4-73b51458c03b', 'description' => '1899', 'correct_answer' => false],
                    ['id' => '1b236dac-e8ba-57ae-bb4d-37add7d4abea', 'description' => 'The Peripheral', 'correct_answer' => false]
                ]],
        ['id' => '6c12e690-9058-5826-9206-868217643074', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual minissérie de Alex Garland acompanha uma engenheira que investiga a divisão secreta de computação quântica de sua empresa?', 'difficulty' => 4, 'weight' => 642, 'alternatives' => [
                    ['id' => '4171d63a-4aed-53ed-97ed-8703f2141b2f', 'description' => 'Counterpart', 'correct_answer' => false],
                    ['id' => '852a7697-137e-5dea-9fcc-03c1cd36c592', 'description' => 'The Peripheral', 'correct_answer' => false],
                    ['id' => '39ebdb4e-a1aa-5340-b622-cf32862a44c2', 'description' => 'Maniac', 'correct_answer' => false],
                    ['id' => '91e6abbb-38ab-585c-812d-e02bc38c56ac', 'description' => '1899', 'correct_answer' => false],
                    ['id' => '49eb769b-486e-5efb-819d-4a51cbef85d9', 'description' => 'Devs', 'correct_answer' => true]
                ]],
        ['id' => '4c13f2b3-d95b-5016-bda6-2c29bf8b4cdf', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual série dos criadores de Dark acompanha passageiros de um navio migratório que encontra uma embarcação desaparecida?', 'difficulty' => 4, 'weight' => 678, 'alternatives' => [
                    ['id' => '59574166-12f1-5810-9b98-d3d6fb60871f', 'description' => 'The OA', 'correct_answer' => false],
                    ['id' => '8b981808-da98-5490-b5f9-1c8040a9d298', 'description' => 'Maniac', 'correct_answer' => false],
                    ['id' => '1cf0ab7c-6b84-53b5-b20a-29297ece53d6', 'description' => '1899', 'correct_answer' => true],
                    ['id' => '7e48b7ad-61ac-5326-bb50-105cab76804c', 'description' => 'Station Eleven', 'correct_answer' => false],
                    ['id' => 'f9d08726-95b9-5d5a-b39a-1625910b25b3', 'description' => 'Raised by Wolves', 'correct_answer' => false]
                ]],
        ['id' => 'e5424f81-4d50-5f88-936c-b945658a6ab6', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual minissérie acompanha visitantes de uma ilha britânica isolada marcada por rituais e tradições inquietantes?', 'difficulty' => 4, 'weight' => 602, 'alternatives' => [
                    ['id' => '3faa623a-fc03-515b-9fe6-01ce46d75e26', 'description' => 'Raised by Wolves', 'correct_answer' => false],
                    ['id' => 'b6b09ad5-6d5c-54c8-8ed2-eb9fe1e8c0e1', 'description' => 'The Third Day', 'correct_answer' => true],
                    ['id' => 'c9e64467-6987-5429-8d4c-0d1a4956c0e6', 'description' => 'The Peripheral', 'correct_answer' => false],
                    ['id' => 'f9786d8b-2957-51dd-94e0-bfd518fa24cd', 'description' => 'Counterpart', 'correct_answer' => false],
                    ['id' => '38f765bb-277d-5e16-879d-56f880a8bccc', 'description' => 'The OA', 'correct_answer' => false]
                ]],
        ['id' => '30b90c67-6ac5-5cbf-b286-f1c4dc2cb54c', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual série adapta o romance de William Gibson sobre uma mulher que acessa uma realidade futura por meio de uma tecnologia imersiva?', 'difficulty' => 4, 'weight' => 790, 'alternatives' => [
                    ['id' => '2e357ba8-d2ab-5195-8817-0417e2dd4eb5', 'description' => 'Station Eleven', 'correct_answer' => false],
                    ['id' => '2543e65f-402e-5b41-869a-5a48542a0e7e', 'description' => 'Devs', 'correct_answer' => false],
                    ['id' => '7cd99fce-e250-571b-ae71-5f1ecca631ac', 'description' => 'The Peripheral', 'correct_answer' => true],
                    ['id' => '7abec3c2-73d4-5382-8fe9-7c79ee091c58', 'description' => 'Tales from the Loop', 'correct_answer' => false],
                    ['id' => 'ac8750bb-a9e5-53df-8eab-1aa74cda12b9', 'description' => '1899', 'correct_answer' => false]
                ]],
        ['id' => 'f437b8af-35da-5e15-a34b-ca710cc756e8', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual série de ficção científica acompanha androides que criam crianças humanas em um planeta distante?', 'difficulty' => 4, 'weight' => 604, 'alternatives' => [
                    ['id' => '373cd524-0648-57bc-865e-1db2e41a9854', 'description' => 'Tales from the Loop', 'correct_answer' => false],
                    ['id' => 'ba176dd5-945b-5c4a-bf15-81f7c2e3a95b', 'description' => 'Raised by Wolves', 'correct_answer' => true],
                    ['id' => '12d2a2b0-5ac2-5e00-92a2-7a66a9532956', 'description' => 'Maniac', 'correct_answer' => false],
                    ['id' => '46c6891c-f016-5880-92d7-2caf37341e29', 'description' => 'Devs', 'correct_answer' => false],
                    ['id' => 'e37f08c5-1488-5366-b100-bebd981375a3', 'description' => 'The OA', 'correct_answer' => false]
                ]],
        ['id' => '9a35a675-376c-5f49-80ff-d8071f955994', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual série acompanha agentes do MI5 enviados para uma unidade marginalizada chamada Slough House?', 'difficulty' => 4, 'weight' => 659, 'alternatives' => [
                    ['id' => '4458bf36-3456-5a09-a20d-ba4615837519', 'description' => 'The Sandbaggers', 'correct_answer' => false],
                    ['id' => '09375e1d-7029-5858-840d-a58c8bcf00e9', 'description' => 'Deutschland 86', 'correct_answer' => false],
                    ['id' => 'c81206dc-1684-584b-bb2b-8864c5fd480f', 'description' => 'The Honourable Woman', 'correct_answer' => false],
                    ['id' => 'a5a19e8b-212f-5cde-8dce-1c4e7e1bd7c7', 'description' => 'Slow Horses', 'correct_answer' => true],
                    ['id' => 'bd4ad436-1edf-55a5-9063-d9b9a8ae3582', 'description' => 'A Spy Among Friends', 'correct_answer' => false]
                ]],
        ['id' => '1fae53e5-7023-5c9b-ac15-b0f85ab00d9f', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual continuação de Deutschland 83 acompanha Martin Rauch em missões internacionais durante a Guerra Fria?', 'difficulty' => 4, 'weight' => 619, 'alternatives' => [
                    ['id' => '78ed0405-0607-5573-8ab2-141bf2a6f7c7', 'description' => 'The Night Manager', 'correct_answer' => false],
                    ['id' => '7303a159-6e59-54a2-9122-391b6bd6839e', 'description' => 'The Little Drummer Girl', 'correct_answer' => false],
                    ['id' => '382b79d6-14fd-5f33-acfa-cf0f6e0bdca9', 'description' => 'The Sandbaggers', 'correct_answer' => false],
                    ['id' => '470a333b-b13a-5a68-a5f2-6d7c0042bce5', 'description' => 'Deutschland 86', 'correct_answer' => true],
                    ['id' => 'f359aa97-6f1a-5ef9-8298-d7d54dcfff40', 'description' => 'Slow Horses', 'correct_answer' => false]
                ]],
        ['id' => 'fd5ddd3a-de54-55a5-90d1-3813876c37cd', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual minissérie acompanha Nessa Stein, empresária britânica envolvida em um projeto de telecomunicações no Oriente Médio?', 'difficulty' => 4, 'weight' => 733, 'alternatives' => [
                    ['id' => 'e6772fe7-ee0f-5d88-84b8-58cc6c6464a7', 'description' => 'The Little Drummer Girl', 'correct_answer' => false],
                    ['id' => '1cedef05-0f31-5a5b-828b-79851a0e0f4f', 'description' => 'Slow Horses', 'correct_answer' => false],
                    ['id' => '6304752b-cdd7-56e4-b243-85b838b3f0fe', 'description' => 'The Honourable Woman', 'correct_answer' => true],
                    ['id' => '2a1e0e32-5677-5919-b818-9b9010dd8eaa', 'description' => 'The Sandbaggers', 'correct_answer' => false],
                    ['id' => 'c471e3e7-74ef-5991-813e-15d332e7d44f', 'description' => 'Tinker Tailor Soldier Spy', 'correct_answer' => false]
                ]],
        ['id' => '52943399-7fe2-598d-b08b-06c1f7fac549', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual minissérie dramatiza a amizade entre Nicholas Elliott e Kim Philby, agente britânico que espionava para a União Soviética?', 'difficulty' => 4, 'weight' => 658, 'alternatives' => [
                    ['id' => 'b555098f-64d2-5ede-bec2-77b9238d54f3', 'description' => 'The Little Drummer Girl', 'correct_answer' => false],
                    ['id' => 'a3fa2632-374f-5081-873b-d1cbc71ab4bb', 'description' => 'A Spy Among Friends', 'correct_answer' => true],
                    ['id' => '4cf86a55-7d34-565e-b3af-62a21e06c44f', 'description' => 'Deutschland 89', 'correct_answer' => false],
                    ['id' => '145a75fe-d399-56e3-a44a-a55413c2d020', 'description' => 'The Sandbaggers', 'correct_answer' => false],
                    ['id' => 'a69589b6-698e-58f1-b604-622809e80e90', 'description' => 'The Bureau', 'correct_answer' => false]
                ]],
        ['id' => 'e13aa5f9-60ca-57ad-8300-d0937562586c', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual série britânica de espionagem acompanha uma unidade clandestina do serviço de inteligência SIS?', 'difficulty' => 4, 'weight' => 759, 'alternatives' => [
                    ['id' => '9667c0d9-2371-58a7-b66c-7fa59d23fbd7', 'description' => 'Tinker Tailor Soldier Spy', 'correct_answer' => false],
                    ['id' => '7b6f6ec6-a7ef-5c01-88ec-e24df039e76f', 'description' => 'A Spy Among Friends', 'correct_answer' => false],
                    ['id' => 'f834e5ae-2e22-5b0b-9a17-06c9bb4d3258', 'description' => 'Slow Horses', 'correct_answer' => false],
                    ['id' => '2c8dc7b2-a2aa-5d30-8060-6f8e33c1356a', 'description' => 'Deutschland 86', 'correct_answer' => false],
                    ['id' => 'fb8bcddd-d458-5915-b122-26b2ac5d60d3', 'description' => 'The Sandbaggers', 'correct_answer' => true]
                ]],
        ['id' => 'c39763e7-e673-5bdc-8ab0-35f4b3b86212', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual temporada da série alemã acompanha personagens ligados à inteligência da Alemanha Oriental durante a queda do Muro de Berlim?', 'difficulty' => 4, 'weight' => 656, 'alternatives' => [
                    ['id' => '5048838f-b2b0-513f-87c8-5a07adb3af31', 'description' => 'A Spy Among Friends', 'correct_answer' => false],
                    ['id' => '83de1045-df40-5d2e-8208-25ebb3d0ecb5', 'description' => 'Deutschland 89', 'correct_answer' => true],
                    ['id' => 'b8d9f55a-365f-503c-b0de-93ef85a6bd15', 'description' => 'The Honourable Woman', 'correct_answer' => false],
                    ['id' => '118b3578-1d1c-5401-ba3f-7891117e7aea', 'description' => 'The Night Manager', 'correct_answer' => false],
                    ['id' => 'a107a01f-3e88-55e3-af4b-d9894ec2c629', 'description' => 'The Little Drummer Girl', 'correct_answer' => false]
                ]],
        ['id' => 'babb8ae4-d966-5708-adad-cebbb1b8ebd2', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual minissérie britânica de 1979 adapta o romance de John le Carré sobre a busca por um agente duplo no MI6?', 'difficulty' => 4, 'weight' => 778, 'alternatives' => [
                    ['id' => '8235d8b1-d3f5-563f-a871-2d7718a88b8b', 'description' => 'The Sandbaggers', 'correct_answer' => false],
                    ['id' => '1eefd0b8-89ec-5d0d-b60f-219d8e613593', 'description' => 'The Bureau', 'correct_answer' => false],
                    ['id' => 'ace2bb4e-32fe-503d-abfa-e6f0cb20f8a9', 'description' => 'The Night Manager', 'correct_answer' => false],
                    ['id' => '8927db0a-5e8c-55ba-b9e5-65837a41c340', 'description' => 'Deutschland 86', 'correct_answer' => false],
                    ['id' => '3636d471-d63e-5764-9982-732849845cc7', 'description' => 'Tinker Tailor Soldier Spy', 'correct_answer' => true]
                ]],
        ['id' => '9112f4f3-87e9-576b-b210-1b9c0b4c422b', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual minissérie de Park Chan-wook adapta o romance de John le Carré sobre uma atriz recrutada para uma operação de inteligência?', 'difficulty' => 4, 'weight' => 660, 'alternatives' => [
                    ['id' => '814d25d3-d0fd-5695-bf9e-b7eb579c057a', 'description' => 'The Honourable Woman', 'correct_answer' => false],
                    ['id' => '6fb050de-e44c-5e68-be9f-49808f957c7e', 'description' => 'Slow Horses', 'correct_answer' => false],
                    ['id' => 'df1020ff-3ff9-52f8-b4c4-4af1ffa9dd31', 'description' => 'The Little Drummer Girl', 'correct_answer' => true],
                    ['id' => '75950d6b-8b18-5948-aa60-f24f7d983a32', 'description' => 'The Bureau', 'correct_answer' => false],
                    ['id' => '6860dd5b-9921-547c-8727-b96971910ac0', 'description' => 'A Spy Among Friends', 'correct_answer' => false]
                ]],
        ['id' => '1f1d2263-5e97-5173-963d-9ca7f953127a', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual sátira política britânica foi criada por Armando Iannucci e apresenta o agressivo diretor de comunicação Malcolm Tucker?', 'difficulty' => 4, 'weight' => 765, 'alternatives' => [
                    ['id' => '6e095427-7a0f-510f-9b33-c0a3e5c65b28', 'description' => 'The Thick of It', 'correct_answer' => true],
                    ['id' => 'b4c76c69-ada7-5e51-bc95-996718241c18', 'description' => 'The Newsroom', 'correct_answer' => false],
                    ['id' => '341248e6-cfd5-5d6f-9d3b-e859c4c34a3e', 'description' => 'The Good Fight', 'correct_answer' => false],
                    ['id' => 'd3f1d932-e840-54c5-81b0-dab0504773be', 'description' => 'The Night Of', 'correct_answer' => false],
                    ['id' => 'e76d4609-9adc-57c3-9c32-8e40cb200e3a', 'description' => 'Damages', 'correct_answer' => false]
                ]],
        ['id' => '022dd9ba-e748-53a4-811e-95635c4f542b', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual drama jurídico acompanha a advogada Patty Hewes e sua protegida Ellen Parsons em disputas de alto risco?', 'difficulty' => 4, 'weight' => 721, 'alternatives' => [
                    ['id' => '6cad5d7f-f03e-5993-9bd2-ac1a33d220cb', 'description' => 'Borgen', 'correct_answer' => false],
                    ['id' => '7a324392-b609-534c-b99d-4daf8d54121f', 'description' => 'Damages', 'correct_answer' => true],
                    ['id' => '5f7856a2-dfbc-538b-83e5-1148b361acd3', 'description' => 'The Good Fight', 'correct_answer' => false],
                    ['id' => '1ca3670b-b09f-5167-9d5e-aeb233c79a41', 'description' => 'The Thick of It', 'correct_answer' => false],
                    ['id' => '149ab862-e930-578d-92f9-0c99576d5704', 'description' => 'Goliath', 'correct_answer' => false]
                ]],
        ['id' => '1f719702-b957-5232-a65d-3a5539a43618', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual drama dinamarquês acompanha a primeira-ministra Birgitte Nyborg e os bastidores de coalizões parlamentares?', 'difficulty' => 4, 'weight' => 762, 'alternatives' => [
                    ['id' => '18026c32-38b5-5bd5-90ca-0e4b4f75040e', 'description' => 'Goliath', 'correct_answer' => false],
                    ['id' => 'aa4f9543-3870-5322-b697-75228f9f50b2', 'description' => 'The Thick of It', 'correct_answer' => false],
                    ['id' => 'ca3f08a0-9f3e-545b-94e7-7b709a7d6b81', 'description' => 'Borgen', 'correct_answer' => true],
                    ['id' => '97834cf5-1dbe-5322-966a-dc6ba63d6bb9', 'description' => 'The Night Of', 'correct_answer' => false],
                    ['id' => 'd425f08c-a06e-5cb0-8276-eb064695d915', 'description' => 'Veep', 'correct_answer' => false]
                ]],
        ['id' => '854876aa-8571-541d-b34b-ecee4c88bd6b', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual série derivada de The Good Wife acompanha Diane Lockhart em um escritório de advocacia após uma crise financeira?', 'difficulty' => 4, 'weight' => 646, 'alternatives' => [
                    ['id' => '9f872696-5135-56e0-bd2d-c1b386c82ecf', 'description' => 'Borgen', 'correct_answer' => false],
                    ['id' => '0642f3c7-5f26-59d1-ba3c-d9332ce002aa', 'description' => 'Veep', 'correct_answer' => false],
                    ['id' => '4fc3125f-4f13-50b3-a30a-a80f6e726113', 'description' => 'The Good Fight', 'correct_answer' => true],
                    ['id' => '579e54ff-4d31-5fad-bada-c8e83f6af096', 'description' => 'The Newsroom', 'correct_answer' => false],
                    ['id' => '940058fc-f3f3-54f5-ad91-3b0e7bc0215f', 'description' => 'Damages', 'correct_answer' => false]
                ]],
        ['id' => '46e311e0-6432-51c3-a646-a49bf82bf200', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual drama jurídico acompanha Alicia Florrick ao retornar à advocacia após um escândalo envolvendo seu marido político?', 'difficulty' => 4, 'weight' => 772, 'alternatives' => [
                    ['id' => '7f66cb08-b02c-57ed-b29d-b76b9c9b3675', 'description' => 'Veep', 'correct_answer' => false],
                    ['id' => '7442953c-3269-52d5-a632-c16711061e0d', 'description' => 'The Thick of It', 'correct_answer' => false],
                    ['id' => '6c848c40-c936-5d09-9eba-4fd5f6a39fc1', 'description' => 'The Good Fight', 'correct_answer' => false],
                    ['id' => '4cc57538-f124-5fbb-bcd3-b0f1d6f31a0f', 'description' => 'The Good Wife', 'correct_answer' => true],
                    ['id' => '0bb341d3-fc84-5e97-814c-ba760a0488a7', 'description' => 'The Night Of', 'correct_answer' => false]
                ]],
        ['id' => '881e1f7f-b1ef-5909-ab5f-6f6c9d0a442e', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual drama político acompanha a equipe do presidente fictício Josiah Bartlet na Casa Branca?', 'difficulty' => 4, 'weight' => 747, 'alternatives' => [
                    ['id' => 'a9511b61-afe3-5eb7-8983-de66f97223b1', 'description' => 'The Good Wife', 'correct_answer' => false],
                    ['id' => '21f5ec2e-4071-565f-aca0-c5b276049469', 'description' => 'The Night Of', 'correct_answer' => false],
                    ['id' => 'fbf83ece-68ad-5f0b-b452-a4566bbfb0fe', 'description' => 'The Newsroom', 'correct_answer' => false],
                    ['id' => 'c428b7dc-9297-5b4b-b74e-b03dfdb87a86', 'description' => 'The Thick of It', 'correct_answer' => false],
                    ['id' => '71cde485-f1df-5029-b44f-12c84e5a1ef5', 'description' => 'The West Wing', 'correct_answer' => true]
                ]],
        ['id' => '3a76cd93-78a7-5847-b53e-66157e4a20a8', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual comédia acompanha Selina Meyer, uma vice-presidente dos Estados Unidos que depois busca a presidência?', 'difficulty' => 4, 'weight' => 657, 'alternatives' => [
                    ['id' => 'e25f7e38-4ab2-5e9b-be4b-119c9113d4d1', 'description' => 'The Newsroom', 'correct_answer' => false],
                    ['id' => 'dda58f27-9c47-5538-9b16-236042deb56f', 'description' => 'The Thick of It', 'correct_answer' => false],
                    ['id' => 'be13aa0d-6dde-57b4-a2ce-8d979f8e71a3', 'description' => 'Veep', 'correct_answer' => true],
                    ['id' => 'f262856c-9992-5905-83fc-4b052adabd71', 'description' => 'Goliath', 'correct_answer' => false],
                    ['id' => 'c0da21c2-650f-592a-b3c7-b087aa192f7f', 'description' => 'Damages', 'correct_answer' => false]
                ]],
        ['id' => '63936843-91fb-51d7-9b9b-944dbef54bd6', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual série de Aaron Sorkin acompanha a equipe de um programa jornalístico apresentado por Will McAvoy?', 'difficulty' => 4, 'weight' => 624, 'alternatives' => [
                    ['id' => 'e9d2bb59-db1d-5008-b4d1-ca84a70a64d5', 'description' => 'The Newsroom', 'correct_answer' => true],
                    ['id' => 'b609a836-2219-5d85-a4cb-f8d334f4cf92', 'description' => 'Damages', 'correct_answer' => false],
                    ['id' => 'fd973359-0ca3-5ae8-9c04-511a65168267', 'description' => 'The West Wing', 'correct_answer' => false],
                    ['id' => 'e96991da-c285-5c95-85bb-de8c0d277b73', 'description' => 'The Good Fight', 'correct_answer' => false],
                    ['id' => '21eb55c8-e99f-5f66-bfe8-1520abaf0be1', 'description' => 'The Thick of It', 'correct_answer' => false]
                ]],
        ['id' => '15e2d944-1b8f-5ec9-992e-dc5446c069d8', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual obra televisiva de Fassbinder, exibida em 1980, adapta o romance de Döblin em 14 episódios e um epílogo?', 'difficulty' => 5, 'weight' => 990, 'alternatives' => [
                    ['id' => 'dd7e9d6a-ad0d-59c3-b293-6e3cf4109cb4', 'description' => 'Berlin Alexanderplatz', 'correct_answer' => true],
                    ['id' => '46dc0903-f058-5667-ba0c-e28932983b52', 'description' => 'The Singing Detective', 'correct_answer' => false],
                    ['id' => 'cd8d346c-6a23-5147-a77f-1828f31b07a6', 'description' => 'The Kingdom', 'correct_answer' => false],
                    ['id' => '125f8763-be54-5b4e-a7d7-7b1f20e12f81', 'description' => 'Dekalog', 'correct_answer' => false],
                    ['id' => '766fdfa6-3d3d-5193-9033-073f5f48f7a9', 'description' => 'Edge of Darkness', 'correct_answer' => false]
                ]],
        ['id' => '5638733a-1e09-535d-9eaf-9404e27450a2', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual drama da BBC acompanha Nicky, Geordie, Tosker e Mary ao longo de três décadas de transformações no Reino Unido?', 'difficulty' => 5, 'weight' => 852, 'alternatives' => [
                    ['id' => '26b28577-06ec-58e6-9e10-763ec464da59', 'description' => 'The Singing Detective', 'correct_answer' => false],
                    ['id' => '823fc626-d138-572c-99d9-b4fedb9af7bb', 'description' => 'Our Friends in the North', 'correct_answer' => true],
                    ['id' => 'ceeb22e2-9045-5d17-b4ab-4c77830a9fdc', 'description' => 'The Jewel in the Crown', 'correct_answer' => false],
                    ['id' => '54d693fb-130e-54a4-bb6e-9732ccfd4c09', 'description' => 'Brideshead Revisited', 'correct_answer' => false],
                    ['id' => '8e02b7db-7942-5534-a8a6-83f7a8759539', 'description' => 'Berlin Alexanderplatz', 'correct_answer' => false]
                ]],
        ['id' => '0b6ffc18-ca23-548a-b315-da8c42e83f99', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual ciclo televisivo de Kieślowski foi concebido como dez filmes de aproximadamente uma hora, cada um dialogando com um dos mandamentos bíblicos?', 'difficulty' => 5, 'weight' => 837, 'alternatives' => [
                    ['id' => '36be9c98-23e6-5245-b64f-3ed178fcca81', 'description' => 'Edge of Darkness', 'correct_answer' => false],
                    ['id' => 'db99a800-5157-579f-a4be-fb6c99b4d035', 'description' => 'Dekalog', 'correct_answer' => true],
                    ['id' => '3ae30c20-847c-5782-bddc-f09586eb9af4', 'description' => 'Brideshead Revisited', 'correct_answer' => false],
                    ['id' => '857fb92b-759b-5a56-a118-d9431c43e5d1', 'description' => 'Berlin Alexanderplatz', 'correct_answer' => false],
                    ['id' => '11a78479-ee6b-5b0d-b71e-07a9006bd62c', 'description' => 'The Jewel in the Crown', 'correct_answer' => false]
                ]],
        ['id' => '7ef1f965-4922-54b6-b84e-846686675575', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual minissérie de Dennis Potter alterna a internação de Philip Marlow com cenas de um romance policial imaginado por ele?', 'difficulty' => 5, 'weight' => 918, 'alternatives' => [
                    ['id' => 'aa8348ea-bcfc-5b28-9910-fcb009a46bfd', 'description' => 'Our Friends in the North', 'correct_answer' => false],
                    ['id' => '0536b42b-bb20-5f5d-99be-33dffa002e6b', 'description' => 'The Singing Detective', 'correct_answer' => true],
                    ['id' => 'c217a35f-0c7c-51a5-99b1-e44146aca94f', 'description' => 'Edge of Darkness', 'correct_answer' => false],
                    ['id' => '9606d04f-5ea1-54c4-80f0-a4c7d9c14ead', 'description' => 'Brideshead Revisited', 'correct_answer' => false],
                    ['id' => 'd29f0ff3-e6b4-5fc3-baa7-6ed92281f8a1', 'description' => 'The Life and Times of David Lloyd George', 'correct_answer' => false]
                ]],
        ['id' => '8a0d7dcc-8148-5e4d-8ebf-5b2f0a29cf71', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual projeto televisivo de Edgar Reitz acompanha a história alemã por meio da família Simon e da aldeia de Schabbach?', 'difficulty' => 5, 'weight' => 872, 'alternatives' => [
                    ['id' => '37a12848-e1a3-56cf-a3db-a5a1ecb1a9be', 'description' => 'The Kingdom', 'correct_answer' => false],
                    ['id' => '7a116134-7077-5104-aa30-b886ef901110', 'description' => 'Heimat: A Chronicle of Germany', 'correct_answer' => true],
                    ['id' => 'c74d3c07-99d7-56ca-87de-e15c7e152a75', 'description' => 'Berlin Alexanderplatz', 'correct_answer' => false],
                    ['id' => '178fe813-218e-553a-bf4f-0734ca7db2dd', 'description' => 'The Singing Detective', 'correct_answer' => false],
                    ['id' => '6562ca94-bc74-5f76-bccd-65f8f2744013', 'description' => 'Our Friends in the North', 'correct_answer' => false]
                ]],
        ['id' => '303893e2-2950-58a8-88c4-0778e0e5a057', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual minissérie adapta o Raj Quartet de Paul Scott e retrata os últimos anos do domínio britânico na Índia?', 'difficulty' => 5, 'weight' => 927, 'alternatives' => [
                    ['id' => '0ec4d0b2-b967-57ba-a91b-e9cbc482feae', 'description' => 'Brideshead Revisited', 'correct_answer' => false],
                    ['id' => '2c70eb68-bd1d-5615-9066-4653c08ccd6f', 'description' => 'Dekalog', 'correct_answer' => false],
                    ['id' => 'af713600-8e92-5e9f-b4a9-4eb042314db3', 'description' => 'Heimat: A Chronicle of Germany', 'correct_answer' => false],
                    ['id' => '78b50113-4f54-56f7-80cf-179fadf2a4e2', 'description' => 'The Jewel in the Crown', 'correct_answer' => true],
                    ['id' => 'bcf80d80-c105-5085-a966-c4c24016dcbd', 'description' => 'Berlin Alexanderplatz', 'correct_answer' => false]
                ]],
        ['id' => 'bb4ecec5-1815-508b-81eb-63ef27891921', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual minissérie da Granada Television de 1981 tem Jeremy Irons como Charles Ryder e Anthony Andrews como Sebastian Flyte?', 'difficulty' => 5, 'weight' => 813, 'alternatives' => [
                    ['id' => '8076e2ee-c420-562e-91bb-4c75a9b1c462', 'description' => 'The Kingdom', 'correct_answer' => false],
                    ['id' => '3fc667d5-a5a6-51c5-86be-06a87e50b924', 'description' => 'Our Friends in the North', 'correct_answer' => false],
                    ['id' => 'f7175a63-5858-5ce7-b7d8-d8b34a2817a9', 'description' => 'The Jewel in the Crown', 'correct_answer' => false],
                    ['id' => '3bfecae9-d278-5be1-9536-4a8b51ea6a21', 'description' => 'Edge of Darkness', 'correct_answer' => false],
                    ['id' => 'e4a64362-99f2-5a65-8163-9db6bedcac7b', 'description' => 'Brideshead Revisited', 'correct_answer' => true]
                ]],
        ['id' => 'ac39557e-667d-5025-838c-3486cbb5fe35', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual minissérie de 1985, criada por Troy Kennedy Martin, acompanha Ronald Craven após o assassinato de sua filha Emma?', 'difficulty' => 5, 'weight' => 923, 'alternatives' => [
                    ['id' => 'acc48336-3ed9-5886-9dc5-28297259281a', 'description' => 'The Jewel in the Crown', 'correct_answer' => false],
                    ['id' => '89f70b32-d6a4-50c4-841b-b0b7f31d8455', 'description' => 'Dekalog', 'correct_answer' => false],
                    ['id' => '4f65309f-cc92-5df1-9179-85817bae039c', 'description' => 'Our Friends in the North', 'correct_answer' => false],
                    ['id' => '420ce5ee-7c5d-59ba-a9b9-7750e27ca431', 'description' => 'Edge of Darkness', 'correct_answer' => true],
                    ['id' => '1a30203d-64e6-525f-a8b9-c6b89df92db2', 'description' => 'The Singing Detective', 'correct_answer' => false]
                ]],
        ['id' => 'e4d3ccec-e24d-573b-944f-752e141cc7e9', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual série de Paolo Sorrentino acompanha as manobras do fictício papa Lenny Belardo, Pio XIII?', 'difficulty' => 5, 'weight' => 860, 'alternatives' => [
                    ['id' => 'd51fed32-004f-528e-a513-b5e3143a9d78', 'description' => 'The Bureau', 'correct_answer' => false],
                    ['id' => 'db6d9e9a-8b29-57f1-b4c9-6161391c82eb', 'description' => 'Gomorra', 'correct_answer' => false],
                    ['id' => '8a43092e-ab6d-5228-b6dc-eab24fab724b', 'description' => 'The Young Pope', 'correct_answer' => true],
                    ['id' => '2c0711a4-f249-54fa-80bb-22de28075c0a', 'description' => '1993', 'correct_answer' => false],
                    ['id' => 'c639ce36-81eb-5b34-a105-1f9897c6005e', 'description' => '1992', 'correct_answer' => false]
                ]],
        ['id' => '9e39ab5a-6688-509c-9b32-b3130e93417e', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual continuação de 1992 acompanha os desdobramentos políticos e empresariais italianos no ano indicado pelo título?', 'difficulty' => 5, 'weight' => 927, 'alternatives' => [
                    ['id' => 'c204ead5-b3e7-5ddc-90f3-d31cb9e61bbb', 'description' => '1993', 'correct_answer' => true],
                    ['id' => 'd445c887-6985-544c-9e64-2050c29d2710', 'description' => 'Spiral', 'correct_answer' => false],
                    ['id' => '332f06bb-f50a-53b7-a70b-d5b44465f869', 'description' => 'Il Miracolo', 'correct_answer' => false],
                    ['id' => '0faab2f1-85d6-58ae-a292-1dc179fa4d84', 'description' => 'Suburra: Blood on Rome', 'correct_answer' => false],
                    ['id' => 'f0964543-1b0f-545f-abbc-ae080e0a2f1e', 'description' => '1992', 'correct_answer' => false]
                ]],
        ['id' => '41f79591-657e-5ae6-bb0e-040f672626d1', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual série francesa criada por Éric Rochant centra-se no serviço clandestino da DGSE e no trabalho de agentes sob identidade falsa?', 'difficulty' => 5, 'weight' => 850, 'alternatives' => [
                    ['id' => 'c6d2e540-c495-5ace-ad18-611b469e3084', 'description' => 'Romanzo Criminale', 'correct_answer' => false],
                    ['id' => 'e5e13e78-7fcc-55e7-8fbb-435b967f5d26', 'description' => 'Il Miracolo', 'correct_answer' => false],
                    ['id' => '0bcd38a5-6baa-51ac-8675-af5c2d458c46', 'description' => 'The Bureau', 'correct_answer' => true],
                    ['id' => '052b08fc-581a-5eb6-ad61-c0c8a0847022', 'description' => 'Spiral', 'correct_answer' => false],
                    ['id' => 'a940cc09-77b0-55fa-9d7b-45d85cecd105', 'description' => '1993', 'correct_answer' => false]
                ]],
        ['id' => 'b6076ad0-aa5b-507f-874e-0c7de3335545', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual drama policial francês, originalmente intitulado Engrenages, acompanha a capitã Laure Berthaud e o juiz François Roban?', 'difficulty' => 5, 'weight' => 853, 'alternatives' => [
                    ['id' => '6a1cbd73-9f3d-522f-bc04-9d647fcd2bfc', 'description' => 'Romanzo Criminale', 'correct_answer' => false],
                    ['id' => '3d83d3b3-e88a-5c4d-bdc1-50fd0691284a', 'description' => 'The Young Pope', 'correct_answer' => false],
                    ['id' => 'c2df6152-70d5-5530-8f13-36bbc791ddc8', 'description' => '1994', 'correct_answer' => false],
                    ['id' => '8d9d0c23-59da-591c-a64f-8557d7bab4cc', 'description' => 'Suburra: Blood on Rome', 'correct_answer' => false],
                    ['id' => '5eb1b1bd-3bed-57ec-856f-786089d98d5d', 'description' => 'Spiral', 'correct_answer' => true]
                ]],
        ['id' => 'e944a6a7-c1e4-5285-a362-9c0b3645b589', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual série italiana acompanha a disputa entre crime organizado, políticos e Igreja em torno de terrenos na região de Roma?', 'difficulty' => 5, 'weight' => 985, 'alternatives' => [
                    ['id' => '646ae629-7e95-55b3-8a28-05a6e0d38004', 'description' => 'Spiral', 'correct_answer' => false],
                    ['id' => '2fdb3dad-6dfe-5b95-a1db-872b644a933a', 'description' => 'Suburra: Blood on Rome', 'correct_answer' => true],
                    ['id' => '24219054-0adf-5da6-b228-4852ffd8364d', 'description' => 'The Bureau', 'correct_answer' => false],
                    ['id' => 'd7dba2dd-3576-5a07-b3e9-d001f2cae311', 'description' => '1992', 'correct_answer' => false],
                    ['id' => '83d8e625-c738-57f6-a89e-27b793d4d6b7', 'description' => 'The Young Pope', 'correct_answer' => false]
                ]],
        ['id' => '9aa6f325-2d70-5dbe-b4eb-3b436563ad0b', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual série italiana baseada no livro de Roberto Saviano tem entre seus personagens centrais Ciro Di Marzio e Gennaro Savastano?', 'difficulty' => 5, 'weight' => 960, 'alternatives' => [
                    ['id' => '8b059c5a-721b-5bc5-a272-91ee4e57a836', 'description' => 'Suburra: Blood on Rome', 'correct_answer' => false],
                    ['id' => '2d36cfa9-be3c-5fce-b9c5-e2bcc75c45e8', 'description' => '1994', 'correct_answer' => false],
                    ['id' => 'd64ebedc-a12b-51d4-b378-569b940e13cc', 'description' => '1993', 'correct_answer' => false],
                    ['id' => '07c36d16-1f35-56e5-88d1-f947314235ba', 'description' => 'Gomorra', 'correct_answer' => true],
                    ['id' => '4088d413-63e3-5abb-a1b9-d34243f38ccc', 'description' => '1992', 'correct_answer' => false]
                ]],
        ['id' => '0e0a5f3f-d08e-5946-b277-4a4c9ce30c40', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual série italiana acompanha empresários, políticos e publicitários durante a operação Mãos Limpas?', 'difficulty' => 5, 'weight' => 946, 'alternatives' => [
                    ['id' => 'e077e9c9-e73a-57a3-b9b4-8130d7a0de66', 'description' => 'The Bureau', 'correct_answer' => false],
                    ['id' => 'a280b89c-ec79-5b46-83db-4225e9e98825', 'description' => 'Il Miracolo', 'correct_answer' => false],
                    ['id' => '88c1c505-46cc-56d8-8fe6-d40782217743', 'description' => '1992', 'correct_answer' => true],
                    ['id' => '26aa2043-8bef-5589-ac6d-d4bcd529e8a1', 'description' => 'The Young Pope', 'correct_answer' => false],
                    ['id' => 'a5654d32-1299-5a38-8446-ceb316ef4498', 'description' => '1994', 'correct_answer' => false]
                ]],
        ['id' => 'a9c1df90-9ddd-5fdb-838a-17c2fc2bb59c', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual temporada final da trilogia italiana iniciada por 1992 acompanha o cenário político da Itália no ano de 1994?', 'difficulty' => 5, 'weight' => 886, 'alternatives' => [
                    ['id' => '15ae4e3c-7156-549e-ab03-08cc76d17b42', 'description' => '1994', 'correct_answer' => true],
                    ['id' => '02b93861-52c4-5593-85d0-6a41ae081a2f', 'description' => 'Gomorra', 'correct_answer' => false],
                    ['id' => 'ffde1c46-5a25-5cea-be83-7ae9bc12ded6', 'description' => 'Suburra: Blood on Rome', 'correct_answer' => false],
                    ['id' => 'b07d8d1a-cc83-56a2-a4e5-2b4dcbb01980', 'description' => '1993', 'correct_answer' => false],
                    ['id' => '63463cb0-0bf2-5212-8056-46d858ebd49b', 'description' => 'The Young Pope', 'correct_answer' => false]
                ]],
        ['id' => '6a337dc1-9515-5c61-8594-e72ce6b2ce71', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual série britânica da Granada Television teve Jeremy Brett como Sherlock Holmes e adaptou contos de Conan Doyle?', 'difficulty' => 5, 'weight' => 856, 'alternatives' => [
                    ['id' => '2a8bb492-24d6-5266-806e-acc9f9a2898f', 'description' => 'The Adventures of Sherlock Holmes', 'correct_answer' => true],
                    ['id' => '0e2e398a-56f4-5e24-91a3-04cf2741fc0f', 'description' => 'Dekalog', 'correct_answer' => false],
                    ['id' => 'a9afe0d1-bc83-5520-a102-29e0d4959401', 'description' => 'The Singing Detective', 'correct_answer' => false],
                    ['id' => '1dee1ac7-4aea-5463-948c-f548a92bc650', 'description' => 'Pennies from Heaven', 'correct_answer' => false],
                    ['id' => '399df52a-919a-5065-a964-0facfcc8fd0b', 'description' => 'Heimat 3: A Chronicle of Endings and Beginnings', 'correct_answer' => false]
                ]],
        ['id' => '0d73905c-4930-5290-bbd7-cdcac6e7a06f', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual drama televisivo de Dennis Potter usa canções populares dos anos 1940 como contraponto à narrativa de um escritor doente?', 'difficulty' => 5, 'weight' => 837, 'alternatives' => [
                    ['id' => 'c79b5603-27c7-54b1-ba47-329249ba0183', 'description' => 'Fanny and Alexander', 'correct_answer' => false],
                    ['id' => '4ca8ee77-34cb-57ef-bbba-4de841931594', 'description' => 'Scenes from a Marriage', 'correct_answer' => false],
                    ['id' => '8c30ef50-92ce-58f6-a7c5-1678cef53a26', 'description' => 'Heimat 2: Chronicle of a Generation', 'correct_answer' => false],
                    ['id' => '6f7efdaf-65d8-5516-a920-30b7d38ad572', 'description' => 'The Singing Detective', 'correct_answer' => true],
                    ['id' => 'b68a3eec-b2f2-54f8-ba1d-a27b6a687173', 'description' => 'The Kingdom', 'correct_answer' => false]
                ]],
        ['id' => '995a818d-eaa1-5645-ab58-06c645dc1891', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual parte da saga Heimat acompanha a reunificação alemã e seus efeitos sobre personagens de Schabbach?', 'difficulty' => 5, 'weight' => 804, 'alternatives' => [
                    ['id' => '471d7acf-e53d-5fd0-928f-e6ac9b3d8c19', 'description' => 'The Singing Detective', 'correct_answer' => false],
                    ['id' => 'c7180db6-f6cf-5040-b0fd-8b567c33b099', 'description' => 'The Adventures of Sherlock Holmes', 'correct_answer' => false],
                    ['id' => '8ef3ee9d-f42c-5393-a2ba-8a61396e3a84', 'description' => 'The Kingdom', 'correct_answer' => false],
                    ['id' => '116f2498-bd7d-5597-82e5-5623022ca09f', 'description' => 'Heimat 3: A Chronicle of Endings and Beginnings', 'correct_answer' => true],
                    ['id' => '367c594d-6b91-5d12-aa98-1a10537d7ec0', 'description' => 'Heimat 2: Chronicle of a Generation', 'correct_answer' => false]
                ]],
        ['id' => '047d6bfd-1513-5e73-a0d4-4bc6b0fcfb15', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual obra de Kieślowski inclui episódios conhecidos por dilemas morais ligados a um computador, uma carta, um pai e uma filha?', 'difficulty' => 5, 'weight' => 922, 'alternatives' => [
                    ['id' => 'a77cbd38-e126-55d4-a551-0506a71d3dab', 'description' => 'The Adventures of Sherlock Holmes', 'correct_answer' => false],
                    ['id' => 'f5b08395-39e8-5f37-881e-d635f339e44b', 'description' => 'The Singing Detective', 'correct_answer' => false],
                    ['id' => '8fd694cd-8345-5639-874c-577a53ad98c3', 'description' => 'Fanny and Alexander', 'correct_answer' => false],
                    ['id' => '7eb2ce5c-ff44-5c61-b0ea-338aca15b600', 'description' => 'Scenes from a Marriage', 'correct_answer' => false],
                    ['id' => '112be80b-b951-59fd-9d59-9df849734876', 'description' => 'Dekalog', 'correct_answer' => true]
                ]],
        ['id' => 'afe1a203-5396-5e99-87f2-a0bc801da2d5', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual adaptação televisiva da BBC de 1976 tem Derek Jacobi como narrador e protagonista, o imperador Cláudio?', 'difficulty' => 5, 'weight' => 851, 'alternatives' => [
                    ['id' => 'ddff9c5e-d69e-526c-a0b2-a4b0084a981e', 'description' => 'I, Claudius', 'correct_answer' => true],
                    ['id' => '0d2924fc-8d42-5046-8d97-c3568620c17b', 'description' => 'Fanny and Alexander', 'correct_answer' => false],
                    ['id' => '011ffe30-4674-5782-8ecd-b1c19294fcd7', 'description' => 'The Adventures of Sherlock Holmes', 'correct_answer' => false],
                    ['id' => 'cc369ea2-b84b-5731-bead-5e54ea5d6193', 'description' => 'Dekalog', 'correct_answer' => false],
                    ['id' => '880b6251-7d8a-5be8-b1a4-364d856864c3', 'description' => 'Heimat 2: Chronicle of a Generation', 'correct_answer' => false]
                ]],
        ['id' => 'fc0e9f22-8d9b-5ac1-b489-ab90045d6e34', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual continuação da saga de Edgar Reitz acompanha jovens artistas em Munique durante a década de 1960?', 'difficulty' => 5, 'weight' => 839, 'alternatives' => [
                    ['id' => '843a5824-484b-584a-8b4e-b3f6bd145d60', 'description' => 'The Kingdom', 'correct_answer' => false],
                    ['id' => '4494e8df-0dfb-5de1-bd0c-4c5a8bb11ff9', 'description' => 'Heimat 2: Chronicle of a Generation', 'correct_answer' => true],
                    ['id' => '2e347040-e69f-52e2-affa-d94ea2bf88a8', 'description' => 'Pennies from Heaven', 'correct_answer' => false],
                    ['id' => 'd27a1859-6ba1-5ca3-9148-a2c6df10b089', 'description' => 'Heimat 3: A Chronicle of Endings and Beginnings', 'correct_answer' => false],
                    ['id' => '2a578e4c-ca34-53a8-bd02-a0d8a48df48f', 'description' => 'Dekalog', 'correct_answer' => false]
                ]],
        ['id' => 'a23a53c4-e1fd-574e-b03f-e5826fe7a7e5', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual obra de Bergman foi originalmente exibida em seis episódios para a televisão sueca antes de ganhar versão cinematográfica?', 'difficulty' => 5, 'weight' => 953, 'alternatives' => [
                    ['id' => 'bb385ad1-30b3-5bf4-a02a-2feb25042ce9', 'description' => 'I, Claudius', 'correct_answer' => false],
                    ['id' => 'a81ed41c-5ad1-5660-9c90-95d0dbbc22ea', 'description' => 'Heimat 3: A Chronicle of Endings and Beginnings', 'correct_answer' => false],
                    ['id' => '02cd22a2-44bd-55c9-a7ae-a1eae9f91c6a', 'description' => 'Pennies from Heaven', 'correct_answer' => false],
                    ['id' => 'd7cf3cf5-3e68-54ce-a354-eb930f2890f5', 'description' => 'Scenes from a Marriage', 'correct_answer' => true],
                    ['id' => 'f16c71da-9258-5065-a275-5e03a1cdc08a', 'description' => 'The Adventures of Sherlock Holmes', 'correct_answer' => false]
                ]],
        ['id' => '3c2a0af2-0512-5d56-bd54-3b7aa104d343', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual série dinamarquesa de 1994 teve continuação em 1997 e uma terceira temporada lançada décadas depois?', 'difficulty' => 5, 'weight' => 954, 'alternatives' => [
                    ['id' => '88c3d8ee-85f6-56da-afa3-174ff9df9ed6', 'description' => 'Scenes from a Marriage', 'correct_answer' => false],
                    ['id' => 'f4bbea96-0694-5e5a-8300-95f03bc02eac', 'description' => 'The Adventures of Sherlock Holmes', 'correct_answer' => false],
                    ['id' => '619ee0df-c9fb-58ce-9dbe-91a7255a95e9', 'description' => 'Pennies from Heaven', 'correct_answer' => false],
                    ['id' => 'f676a371-47c0-5618-a487-d96b1cb68916', 'description' => 'The Kingdom', 'correct_answer' => true],
                    ['id' => '3d13a586-b7f9-5792-902e-6e37b629f536', 'description' => 'The Singing Detective', 'correct_answer' => false]
                ]],
        ['id' => 'fda2ca47-dfec-533b-8075-bfa4316a5215', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual série britânica de 1967 apresenta Patrick McGoohan como um ex-agente identificado apenas pelo número Seis, preso em uma vila?', 'difficulty' => 5, 'weight' => 931, 'alternatives' => [
                    ['id' => '978eacf2-c0e8-599b-abb6-3ac5f5358771', 'description' => 'The Shadow Line', 'correct_answer' => false],
                    ['id' => '84fe863f-a63a-5df5-aa8a-776890fbe55b', 'description' => 'The Prisoner', 'correct_answer' => true],
                    ['id' => 'e1705369-e258-5d65-9b30-432363a3b7a4', 'description' => 'The Sandbaggers', 'correct_answer' => false],
                    ['id' => 'ef968832-7478-5000-b276-a20fb3ff28bc', 'description' => 'The Honourable Woman', 'correct_answer' => false],
                    ['id' => '345d46d7-d2a2-5364-8f3f-196f072163ed', 'description' => 'The Little Drummer Girl', 'correct_answer' => false]
                ]],
        ['id' => '41873685-7757-5f16-93e3-041ef81ccf43', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual minissérie britânica de Hugo Blick acompanha uma investigação de homicídio que envolve policiais e criminosos?', 'difficulty' => 5, 'weight' => 889, 'alternatives' => [
                    ['id' => '8bfa5b95-a368-58b8-954f-dc7918fd5ff0', 'description' => 'The Shadow Line', 'correct_answer' => true],
                    ['id' => '75e92057-02e2-514a-b2f6-c23e3f6ecd2e', 'description' => 'The Sandbaggers', 'correct_answer' => false],
                    ['id' => '700bda55-eadd-51f4-b89d-c9d2b1ccfa4d', 'description' => 'Tinker Tailor Soldier Spy', 'correct_answer' => false],
                    ['id' => 'b2c8c3f5-5a01-587f-be8f-a7b1e839d6e7', 'description' => 'Smiley\'s People', 'correct_answer' => false],
                    ['id' => '5049f587-a0f6-507b-8a91-3b286fe3f19a', 'description' => 'A Very English Scandal', 'correct_answer' => false]
                ]],
        ['id' => '787f2f96-4ffd-5d15-bf20-48d92586ba63', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual minissérie adapta o romance de John le Carré sobre Magnus Pym, um agente duplo cuja vida é reconstituída pelo pai?', 'difficulty' => 5, 'weight' => 803, 'alternatives' => [
                    ['id' => 'e78513ac-9075-582d-8d85-2e4e94e685d9', 'description' => 'The Little Drummer Girl', 'correct_answer' => false],
                    ['id' => 'cec59255-2b53-56ec-b592-58275b90178f', 'description' => 'Tinker Tailor Soldier Spy', 'correct_answer' => false],
                    ['id' => '2d5e9e13-f5f0-52e2-bdde-b428afd9f1ef', 'description' => 'The Prisoner', 'correct_answer' => false],
                    ['id' => 'a7644eac-7945-5563-8c64-b0de7a39c61b', 'description' => 'A Perfect Spy', 'correct_answer' => true],
                    ['id' => '34db17a1-53c8-5f76-9e36-e0b3da00d1b8', 'description' => 'Callan', 'correct_answer' => false]
                ]],
        ['id' => '583a9120-ee9e-5ed4-a5fe-f322abf00ac8', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual minissérie de Hugo Blick tem Maggie Gyllenhaal como Nessa Stein, empresária envolvida em iniciativas israelenses-palestinas?', 'difficulty' => 5, 'weight' => 957, 'alternatives' => [
                    ['id' => '61829bc0-d1e6-5bdf-93ac-25b7a0aa1bb5', 'description' => 'The Little Drummer Girl', 'correct_answer' => false],
                    ['id' => '11b7075d-36e4-5f25-849e-682c8467ae1f', 'description' => 'The Honourable Woman', 'correct_answer' => true],
                    ['id' => '25589e95-8a61-5e9a-a877-012b2b20b419', 'description' => 'A Very English Scandal', 'correct_answer' => false],
                    ['id' => '7ecf7699-fa48-5f2f-bced-d947646603ea', 'description' => 'A Perfect Spy', 'correct_answer' => false],
                    ['id' => 'd84e9865-4a5c-521f-a0da-dd26b87f5d07', 'description' => 'Smiley\'s People', 'correct_answer' => false]
                ]],
        ['id' => '72bdfbcf-6b36-5e22-9f4b-35ecc692a3a4', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual série britânica de espionagem tem Edward Woodward como David Callan, agente relutante de uma unidade secreta chamada Section?', 'difficulty' => 5, 'weight' => 958, 'alternatives' => [
                    ['id' => '4d332326-3180-50a2-a259-5958ef8c8b65', 'description' => 'Callan', 'correct_answer' => true],
                    ['id' => 'f2fd688c-9cbb-5d12-b40b-13918b231fab', 'description' => 'The Little Drummer Girl', 'correct_answer' => false],
                    ['id' => '3e8a0b02-a95f-5867-9cbb-6d5698953135', 'description' => 'A Very English Scandal', 'correct_answer' => false],
                    ['id' => '9e1bd0e2-adce-5514-af62-98ee9a67e94a', 'description' => 'Smiley\'s People', 'correct_answer' => false],
                    ['id' => '0aabcaa2-ab0f-5c2e-bfd5-1bce8b6e4ce2', 'description' => 'The Shadow Line', 'correct_answer' => false]
                ]],
        ['id' => 'ac171c51-fbac-5e7d-b4b1-8577459d26d7', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual minissérie de Russell T Davies tem Hugh Grant como Jeremy Thorpe e Ben Whishaw como Norman Scott?', 'difficulty' => 5, 'weight' => 812, 'alternatives' => [
                    ['id' => 'd9e2b988-6820-5f70-a76e-0e4192d2483e', 'description' => 'The Prisoner', 'correct_answer' => false],
                    ['id' => 'a7a20530-e903-570e-8a60-ea95f134c3b1', 'description' => 'A Very English Scandal', 'correct_answer' => true],
                    ['id' => '7111adca-9b1e-534c-9b2f-8495b946013c', 'description' => 'A Perfect Spy', 'correct_answer' => false],
                    ['id' => '5aa0203f-9aa9-5b8d-8640-d58b3324e0c7', 'description' => 'The Shadow Line', 'correct_answer' => false],
                    ['id' => '78c43d1c-6ba3-53a6-a9a2-aec7afa174a7', 'description' => 'The Little Drummer Girl', 'correct_answer' => false]
                ]],
        ['id' => '3183fae4-9a56-56ea-ac07-92da9d6522a6', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual adaptação televisiva de 1979 tem Alec Guinness como George Smiley e dramatiza a investigação do agente duplo Gerald?', 'difficulty' => 5, 'weight' => 805, 'alternatives' => [
                    ['id' => '85ab13a4-5a9e-506c-bc6e-1e8df810632f', 'description' => 'Tinker Tailor Soldier Spy', 'correct_answer' => true],
                    ['id' => 'dd29d42b-92e6-59cc-89b6-3e87869c17ca', 'description' => 'The Prisoner', 'correct_answer' => false],
                    ['id' => 'cd9e667b-bff6-5c4c-9966-4783d515f21d', 'description' => 'The Honourable Woman', 'correct_answer' => false],
                    ['id' => 'bde8f366-e844-5d23-8dc4-4619c87f1133', 'description' => 'The Little Drummer Girl', 'correct_answer' => false],
                    ['id' => '190dcaae-edae-518a-87bd-06758218961b', 'description' => 'A Very English Scandal', 'correct_answer' => false]
                ]],
        ['id' => 'e1e352cf-aa3a-57e8-b21d-7646040fd774', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual minissérie de 1982 continua a história de George Smiley após os acontecimentos de Tinker Tailor Soldier Spy?', 'difficulty' => 5, 'weight' => 813, 'alternatives' => [
                    ['id' => 'cf0a21a0-a93e-5b9f-a4a2-702296fc0035', 'description' => 'The Honourable Woman', 'correct_answer' => false],
                    ['id' => '281264ab-9c14-5f00-8e91-4788403f2213', 'description' => 'A Very English Scandal', 'correct_answer' => false],
                    ['id' => 'a5678b64-0cac-56fb-b610-f03e59cb9150', 'description' => 'The Shadow Line', 'correct_answer' => false],
                    ['id' => '3babc010-b6d2-5d88-9adf-a9c56b0d2c37', 'description' => 'The Prisoner', 'correct_answer' => false],
                    ['id' => 'e5c44581-e12a-5850-b841-eaa7b5f82596', 'description' => 'Smiley\'s People', 'correct_answer' => true]
                ]],
        ['id' => '5978da30-9a91-5e62-93cd-f7478b38cef2', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual série de Jane Campion acompanha a detetive Robin Griffin investigando o desaparecimento de uma menina na Nova Zelândia?', 'difficulty' => 5, 'weight' => 991, 'alternatives' => [
                    ['id' => '3eac7871-0996-5c52-a084-316b15ed837e', 'description' => 'Top of the Lake', 'correct_answer' => true],
                    ['id' => 'ab3c5a98-15b4-5643-9677-6f337a50a1db', 'description' => 'Fortitude', 'correct_answer' => false],
                    ['id' => '06caea5b-2b3f-5eef-839d-a464be4f2add', 'description' => 'Deadwind', 'correct_answer' => false],
                    ['id' => 'b7c659b0-3a5d-5fe8-9059-5d75a55bdf96', 'description' => 'Trapped', 'correct_answer' => false],
                    ['id' => '19ad5e30-5020-5206-b266-14c882cce3e9', 'description' => 'Bordertown', 'correct_answer' => false]
                ]],
        ['id' => '233fdc64-ae1f-523d-a4b0-4cc6f3879599', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual série australiana acompanha uma médica que retorna à Tasmânia e se vê ligada ao desaparecimento de duas meninas?', 'difficulty' => 5, 'weight' => 828, 'alternatives' => [
                    ['id' => '88ef59dd-fed9-5930-864b-2cc41a610d85', 'description' => 'Top of the Lake', 'correct_answer' => false],
                    ['id' => '0d4df119-c2e3-54a6-8cc6-e054baeb6d23', 'description' => 'Deadwind', 'correct_answer' => false],
                    ['id' => '1bd5f023-4e49-53ee-a468-aed99c56b874', 'description' => 'Bordertown', 'correct_answer' => false],
                    ['id' => '1cfbc5cd-178c-5cd0-a6f9-ff1410d35150', 'description' => 'Fortitude', 'correct_answer' => false],
                    ['id' => '7d150e95-1841-5603-8d6b-479da4c9d5cc', 'description' => 'The Kettering Incident', 'correct_answer' => true]
                ]],
        ['id' => '22857467-daf9-5c95-a000-765ec12a131a', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual série tcheca de 2016, conhecida internacionalmente como Wasteland, começa com o desaparecimento de uma adolescente em uma vila mineradora?', 'difficulty' => 5, 'weight' => 849, 'alternatives' => [
                    ['id' => '075f3ec6-3482-59fd-85fa-30b0ea1a1c41', 'description' => 'Fortitude', 'correct_answer' => false],
                    ['id' => '61c2dd0d-609e-5191-a3a5-d0ecf78cde1c', 'description' => 'The Valhalla Murders', 'correct_answer' => false],
                    ['id' => '18a387f4-4aaf-5723-a3ca-f662c2bd266e', 'description' => 'Pustina', 'correct_answer' => true],
                    ['id' => '6b936bc0-0aae-569f-b4d7-5f500c74dd9b', 'description' => 'The Kettering Incident', 'correct_answer' => false],
                    ['id' => 'a64fb2a3-dcf5-5122-9f9e-efe8ecbb54ad', 'description' => 'Trapped', 'correct_answer' => false]
                ]],
        ['id' => 'abe732cf-026f-5132-9558-b3898b88353b', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual série britânica se passa em uma comunidade ártica fictícia e começa com um assassinato incomum?', 'difficulty' => 5, 'weight' => 923, 'alternatives' => [
                    ['id' => 'e5714f70-0b4e-579b-9b11-f80ca78c0421', 'description' => 'Top of the Lake', 'correct_answer' => false],
                    ['id' => '766ac279-33cb-5ec4-b6fd-9e6e5a79f155', 'description' => 'Trapped', 'correct_answer' => false],
                    ['id' => '7e44f0a8-3afe-5d64-89d8-b1e50b1df042', 'description' => 'Fortitude', 'correct_answer' => true],
                    ['id' => '05189b16-80e3-5e65-8566-76c679468919', 'description' => 'The Valhalla Murders', 'correct_answer' => false],
                    ['id' => 'f49e45e8-50fb-592f-8984-77eb310fd955', 'description' => 'The Gloaming', 'correct_answer' => false]
                ]],
        ['id' => '4f01b91a-e148-5988-b630-8e10e89b3d5b', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual série finlandesa acompanha a investigadora Sofia Karppi após a morte de uma mulher ligada a uma construtora?', 'difficulty' => 5, 'weight' => 978, 'alternatives' => [
                    ['id' => '50d74f8c-4175-5602-843e-7e276b94eea2', 'description' => 'Top of the Lake', 'correct_answer' => false],
                    ['id' => 'f46bf487-3962-5b8b-a1e3-d6124fa6f2d5', 'description' => 'The Gloaming', 'correct_answer' => false],
                    ['id' => '61a5e320-9893-5d8d-9c6f-a538b0297933', 'description' => 'The Valhalla Murders', 'correct_answer' => false],
                    ['id' => '0ada6119-6460-591c-917e-ca259655afff', 'description' => 'Deadwind', 'correct_answer' => true],
                    ['id' => '1850b525-14ca-5701-8eec-2dbad4921749', 'description' => 'The Kettering Incident', 'correct_answer' => false]
                ]],
        ['id' => '03d17ab1-79d2-50a7-86d5-7cfd1aea3c67', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual série finlandesa acompanha o detetive Kari Sorjonen, que se muda para uma cidade próxima à fronteira russa?', 'difficulty' => 5, 'weight' => 960, 'alternatives' => [
                    ['id' => 'eb8cf382-ccd6-5f12-91f3-656865a877ef', 'description' => 'The Gloaming', 'correct_answer' => false],
                    ['id' => 'fde6ab56-d70e-506f-a75c-1df93c3d6cc2', 'description' => 'Fortitude', 'correct_answer' => false],
                    ['id' => '7cb62542-b989-5d65-8431-17b226582f3d', 'description' => 'Bordertown', 'correct_answer' => true],
                    ['id' => '47e11d48-7328-56ff-b411-e7f721b39c71', 'description' => 'Deadwind', 'correct_answer' => false],
                    ['id' => '697ca81c-9815-5986-b104-dd0eeb3992d2', 'description' => 'Trapped', 'correct_answer' => false]
                ]],
        ['id' => 'c0c2fcdb-d29c-5f0b-a386-b0f3f07d8e99', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual série australiana acompanha uma detetive que investiga um assassinato com possíveis ligações sobrenaturais na Tasmânia?', 'difficulty' => 5, 'weight' => 842, 'alternatives' => [
                    ['id' => '68bdbc68-79ad-5a08-81a7-131f0d0e26a0', 'description' => 'The Gloaming', 'correct_answer' => true],
                    ['id' => 'e47ab1dc-e14f-5eca-a039-d6895089aea1', 'description' => 'The Valhalla Murders', 'correct_answer' => false],
                    ['id' => '66c43637-dd28-5201-8656-b1f99c9d56be', 'description' => 'Fortitude', 'correct_answer' => false],
                    ['id' => 'bb1bdec5-5317-557f-b55e-a914270aae97', 'description' => 'Trapped', 'correct_answer' => false],
                    ['id' => '65688850-fc0d-58e4-a09b-2bb6cff0e8d4', 'description' => 'The Chestnut Man', 'correct_answer' => false]
                ]],
        ['id' => '1de642cb-e189-5a10-8738-0f5998c3e105', 'locale' => 'pt-BR', 'category' => '2bbacb61-869f-592b-8ca8-d0e409e91c03', 'question' => 'Qual série dinamarquesa acompanha investigadores que encontram figuras feitas de castanhas em cenas de assassinato?', 'difficulty' => 5, 'weight' => 894, 'alternatives' => [
                    ['id' => 'b3da2cd9-1663-57b5-a5d5-4769751bb0e0', 'description' => 'Bordertown', 'correct_answer' => false],
                    ['id' => 'a0695b08-cc4c-50e4-b403-2c38ab7afef1', 'description' => 'Trapped', 'correct_answer' => false],
                    ['id' => '7da3605b-ae2f-5790-9dd4-2e5c38610b92', 'description' => 'The Chestnut Man', 'correct_answer' => true],
                    ['id' => '203d3ad1-b2b8-575e-aa9b-49b2fca39e35', 'description' => 'The Valhalla Murders', 'correct_answer' => false],
                    ['id' => '03657d2a-0918-5353-bcd4-6c80f4bab964', 'description' => 'Fortitude', 'correct_answer' => false]
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
