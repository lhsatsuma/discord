<?php

namespace Database\Seeders\Trivia;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TriviaEnUsGeneralKnowledgeSeeder extends Seeder
{
    private const CATEGORY = ['id' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'created_by' => 'SYSTEM', 'short_description' => 'general knowledge', 'description' => 'General Knowledge'];

    private const QUESTIONS = [
        ['id' => '2f244425-e779-53de-93d9-439302019348', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'What is the capital city of the Czech Republic?', 'difficulty' => 1, 'weight' => 193, 'alternatives' => [
                    ['id' => '912c53e1-3aaf-506d-86a0-6001f0507899', 'description' => 'Prague', 'correct_answer' => true],
                    ['id' => 'e64f66e1-1bee-5f02-8884-3824fa773f5f', 'description' => 'Paris', 'correct_answer' => false],
                    ['id' => 'd3e521c0-cee6-5341-8b6d-c8a74a880dfe', 'description' => 'Vienna', 'correct_answer' => false],
                    ['id' => 'd84ffc29-cb90-5811-a3a9-976419f8801d', 'description' => 'Dublin', 'correct_answer' => false],
                    ['id' => 'ec9cd317-4296-5f3d-bffc-767fed86e338', 'description' => 'Madrid', 'correct_answer' => false]
                ]],
        ['id' => 'aa8f404c-f1ee-594e-b60c-e03c0e003df7', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'What is the capital city of Ireland?', 'difficulty' => 1, 'weight' => 197, 'alternatives' => [
                    ['id' => 'f809b64a-302a-5546-9ad1-65a8e302e3bb', 'description' => 'Paris', 'correct_answer' => false],
                    ['id' => '8e5c9198-ab4b-5871-a112-21710f8e5ec4', 'description' => 'Dublin', 'correct_answer' => true],
                    ['id' => '92d13436-aa59-5ac8-931d-fd377744249b', 'description' => 'Rome', 'correct_answer' => false],
                    ['id' => '3a57868f-c5bc-5d00-927b-9fc13cf03a30', 'description' => 'Madrid', 'correct_answer' => false],
                    ['id' => '77cc4988-76d0-5e9e-859c-a2787187f472', 'description' => 'Athens', 'correct_answer' => false]
                ]],
        ['id' => '74e79519-8863-52d8-8ecc-17c2b4d9359f', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'What is the capital city of Spain?', 'difficulty' => 1, 'weight' => 175, 'alternatives' => [
                    ['id' => 'fb6bad55-6ef4-5afd-b376-ba8eae2151f1', 'description' => 'Vienna', 'correct_answer' => false],
                    ['id' => '7b458163-1b0c-5e62-8487-94ecc3abe0d4', 'description' => 'Prague', 'correct_answer' => false],
                    ['id' => 'b8932710-ef7b-5241-bdad-2a06c9b708b7', 'description' => 'Berlin', 'correct_answer' => false],
                    ['id' => '30779c9a-3891-59e7-95a1-62d3fb3aff15', 'description' => 'Madrid', 'correct_answer' => true],
                    ['id' => '73fe4c69-0cd4-51f0-9e25-0db4543b89dd', 'description' => 'Paris', 'correct_answer' => false]
                ]],
        ['id' => '3631e80c-e726-51ba-a499-c80cd7868e3b', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'What is the capital city of Italy?', 'difficulty' => 1, 'weight' => 150, 'alternatives' => [
                    ['id' => 'fdc2c910-8f19-52a6-8b7e-d8f56f8e7aa5', 'description' => 'Madrid', 'correct_answer' => false],
                    ['id' => '9c008332-cb6a-5712-8ba2-da38b954c947', 'description' => 'Athens', 'correct_answer' => false],
                    ['id' => 'ac24c8b7-6539-5e64-ab83-4867c9c318f5', 'description' => 'Rome', 'correct_answer' => true],
                    ['id' => '64365f52-7db9-55c4-b700-cf5980fbada4', 'description' => 'Dublin', 'correct_answer' => false],
                    ['id' => '244b3393-3638-5a7a-837a-a85d28b167a3', 'description' => 'Berlin', 'correct_answer' => false]
                ]],
        ['id' => 'ca246d75-5551-50ec-957d-b74fc548b133', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'What is the capital city of Germany?', 'difficulty' => 1, 'weight' => 163, 'alternatives' => [
                    ['id' => 'c2d8c058-d96e-5b84-a29c-891aa15684e8', 'description' => 'Dublin', 'correct_answer' => false],
                    ['id' => 'fdcc35bb-42a1-5b08-a91d-1bada31c7eb0', 'description' => 'Madrid', 'correct_answer' => false],
                    ['id' => '856f9e04-e228-564c-841c-551a4fa59b88', 'description' => 'Berlin', 'correct_answer' => true],
                    ['id' => '6b4591b9-49df-50db-9185-7551c1fddea7', 'description' => 'Paris', 'correct_answer' => false],
                    ['id' => 'f2626718-4477-53a2-936c-907b85714908', 'description' => 'Vienna', 'correct_answer' => false]
                ]],
        ['id' => '274441d3-4080-5a1f-9546-b0ba9e218903', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'What is the capital city of France?', 'difficulty' => 1, 'weight' => 124, 'alternatives' => [
                    ['id' => '36ba03cc-7da5-55d9-8b1b-d63a6ff6a6c4', 'description' => 'Vienna', 'correct_answer' => false],
                    ['id' => 'c81f74fe-d1a7-541e-8c3d-999c3c2dfd7f', 'description' => 'Berlin', 'correct_answer' => false],
                    ['id' => '63278ecd-ab68-5b16-abca-93d2e7a46263', 'description' => 'Paris', 'correct_answer' => true],
                    ['id' => '229add47-11f5-5ace-bb75-fb9d6970a4c7', 'description' => 'Rome', 'correct_answer' => false],
                    ['id' => '299779bf-1593-5efb-ac00-a8c0a66f3784', 'description' => 'Prague', 'correct_answer' => false]
                ]],
        ['id' => '5324f440-9333-5c85-b7e7-5225b2e4a0d0', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'What is the capital city of Portugal?', 'difficulty' => 1, 'weight' => 116, 'alternatives' => [
                    ['id' => 'ebe0cd7e-aa8d-5533-9242-2abd92a7f982', 'description' => 'Lisbon', 'correct_answer' => true],
                    ['id' => '73e401a7-2284-5a1f-95c7-110ca4589315', 'description' => 'Oslo', 'correct_answer' => false],
                    ['id' => '86fe9a59-de0b-5f7e-9578-6b22461d5217', 'description' => 'Vienna', 'correct_answer' => false],
                    ['id' => '578eb28e-52bd-5aef-94a1-26b3d9493f0f', 'description' => 'Athens', 'correct_answer' => false],
                    ['id' => '5b743b46-cd18-5f6c-84c4-fabcb72544a7', 'description' => 'Prague', 'correct_answer' => false]
                ]],
        ['id' => '1d7af855-fa80-5328-8d4d-8aff4afb4ed5', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'What is the capital city of Greece?', 'difficulty' => 1, 'weight' => 191, 'alternatives' => [
                    ['id' => '34ee2d23-2faa-59ff-9c1f-fd3b9b4fb4d5', 'description' => 'Vienna', 'correct_answer' => false],
                    ['id' => 'd0f58c6e-63aa-5821-8ee7-0a83f4890f1b', 'description' => 'Berlin', 'correct_answer' => false],
                    ['id' => 'a6686758-19ae-5496-aa56-bea59fbeb0a3', 'description' => 'Lisbon', 'correct_answer' => false],
                    ['id' => 'ca70c925-60c4-5034-8b45-e53612b44ef9', 'description' => 'Rome', 'correct_answer' => false],
                    ['id' => 'bf2ec7de-50e3-5509-845e-1e32055ca258', 'description' => 'Athens', 'correct_answer' => true]
                ]],
        ['id' => '0cd29085-5541-57d7-9441-1ffcc02f8575', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which ocean encircles Antarctica?', 'difficulty' => 1, 'weight' => 112, 'alternatives' => [
                    ['id' => '489616c5-b437-54a8-b73c-d52522096a3c', 'description' => 'Pacific Ocean', 'correct_answer' => false],
                    ['id' => '6bbb10d9-1b95-50d4-a019-b3d331655758', 'description' => 'Baltic Sea', 'correct_answer' => false],
                    ['id' => '4e1b819d-d65c-5bf5-9519-395ec401d83c', 'description' => 'Southern Ocean', 'correct_answer' => true],
                    ['id' => '7f3802cd-312e-56bf-aca7-4a8285053e6f', 'description' => 'Atlantic Ocean', 'correct_answer' => false],
                    ['id' => '8e11c5f7-82b8-555e-a60b-75b46c6d99c2', 'description' => 'Arctic Ocean', 'correct_answer' => false]
                ]],
        ['id' => 'f2189d71-3830-54b1-8f83-f17bee0f8bce', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which sea lies between Scandinavia and northeastern Europe?', 'difficulty' => 1, 'weight' => 125, 'alternatives' => [
                    ['id' => '2d98dd2d-1803-525e-8847-644260477722', 'description' => 'Black Sea', 'correct_answer' => false],
                    ['id' => '542e4ff4-5927-52e2-9f0a-0487b2d2e854', 'description' => 'Baltic Sea', 'correct_answer' => true],
                    ['id' => 'e050295f-cf3a-5a52-9748-81dfe94b644f', 'description' => 'Pacific Ocean', 'correct_answer' => false],
                    ['id' => 'e6e7a213-7908-551a-8cb2-5bbaf5471a35', 'description' => 'Mediterranean Sea', 'correct_answer' => false],
                    ['id' => '9a8e02f3-a897-5ac9-a711-4d696a748166', 'description' => 'Arctic Ocean', 'correct_answer' => false]
                ]],
        ['id' => '1fe93b1c-780b-5bd4-add5-5c1dd5955bd7', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which sea lies between southern Europe and northern Africa?', 'difficulty' => 1, 'weight' => 140, 'alternatives' => [
                    ['id' => '1a174535-fcbb-548d-a4c9-212139d7331c', 'description' => 'Black Sea', 'correct_answer' => false],
                    ['id' => '8cd18775-ca81-5bb5-af44-02248abc619d', 'description' => 'Arctic Ocean', 'correct_answer' => false],
                    ['id' => 'd1cc929f-e6ff-57d9-a060-cd7832ccd190', 'description' => 'Red Sea', 'correct_answer' => false],
                    ['id' => '7d44d087-3b76-5598-b205-8a1233599e2f', 'description' => 'Indian Ocean', 'correct_answer' => false],
                    ['id' => '4a20a7f9-90e3-5a64-810d-e10c755996bd', 'description' => 'Mediterranean Sea', 'correct_answer' => true]
                ]],
        ['id' => 'd8c25fcd-c816-5fbc-90c8-86bb81d55df7', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which ocean surrounds the North Pole?', 'difficulty' => 1, 'weight' => 148, 'alternatives' => [
                    ['id' => '97fdc9d1-2548-515b-97ef-2ebc6a53b855', 'description' => 'Caribbean Sea', 'correct_answer' => false],
                    ['id' => '7e6ead25-54c1-53f3-9315-a24c6dc70835', 'description' => 'Arctic Ocean', 'correct_answer' => true],
                    ['id' => '3d78bfd3-5b3f-59ed-923f-ae229907676d', 'description' => 'Atlantic Ocean', 'correct_answer' => false],
                    ['id' => '5b2326de-abff-53be-bebb-2404f599d0b7', 'description' => 'Baltic Sea', 'correct_answer' => false],
                    ['id' => 'fbd08118-f5a1-543e-86c7-37d60cb46696', 'description' => 'Indian Ocean', 'correct_answer' => false]
                ]],
        ['id' => '606014db-7ae9-5881-96a7-0175b38e75f5', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which ocean lies between the Americas and Europe and Africa?', 'difficulty' => 1, 'weight' => 115, 'alternatives' => [
                    ['id' => 'd5dc170f-050b-5347-92bc-6a70cee25b5d', 'description' => 'Caribbean Sea', 'correct_answer' => false],
                    ['id' => '4a43acac-d14c-5faf-a54e-407a62d502e7', 'description' => 'Southern Ocean', 'correct_answer' => false],
                    ['id' => '7f2b154b-42cd-5a74-86f4-6c756f350ed6', 'description' => 'Indian Ocean', 'correct_answer' => false],
                    ['id' => 'a44319d9-5a53-54b2-8bb9-e201f72aa7b3', 'description' => 'Pacific Ocean', 'correct_answer' => false],
                    ['id' => 'cb55ca30-b6dc-547a-b515-29ca8583f9f3', 'description' => 'Atlantic Ocean', 'correct_answer' => true]
                ]],
        ['id' => 'fca04afe-4285-5edb-8c24-ea5d68e6dc23', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which sea is bordered by countries including Türkiye, Bulgaria, and Romania?', 'difficulty' => 1, 'weight' => 131, 'alternatives' => [
                    ['id' => '6ba76833-6b24-5bf5-a828-db82ff76cade', 'description' => 'Indian Ocean', 'correct_answer' => false],
                    ['id' => 'd2d347c0-41d3-5c94-9101-9c1b054d1dd2', 'description' => 'Mediterranean Sea', 'correct_answer' => false],
                    ['id' => 'd4e77de5-6060-5617-81d6-823610cc77cb', 'description' => 'Arctic Ocean', 'correct_answer' => false],
                    ['id' => '95e40349-df76-5d3d-9e46-0ef8d3ed9820', 'description' => 'Southern Ocean', 'correct_answer' => false],
                    ['id' => '3c7a3c50-b86b-5b54-ad3c-02861849a134', 'description' => 'Black Sea', 'correct_answer' => true]
                ]],
        ['id' => '0171a521-751e-5752-95cc-12ba94d7c631', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which sea lies southeast of the Gulf of Mexico?', 'difficulty' => 1, 'weight' => 134, 'alternatives' => [
                    ['id' => 'fca55817-9086-556e-8481-5bff4b9f30fe', 'description' => 'Arctic Ocean', 'correct_answer' => false],
                    ['id' => 'dbd4706f-9a6f-5889-bc82-285bd1545f5b', 'description' => 'Indian Ocean', 'correct_answer' => false],
                    ['id' => '917fff52-fe85-5e89-9ccc-e431a649a7bf', 'description' => 'Mediterranean Sea', 'correct_answer' => false],
                    ['id' => 'bf21a8af-c281-57c1-92be-60609f70229a', 'description' => 'Pacific Ocean', 'correct_answer' => false],
                    ['id' => 'e97a5fe7-7ac7-5895-92e9-39942dc025d0', 'description' => 'Caribbean Sea', 'correct_answer' => true]
                ]],
        ['id' => '25f2473c-f59b-5af8-bfc5-99473171cf89', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which sea separates northeastern Africa from the Arabian Peninsula?', 'difficulty' => 1, 'weight' => 149, 'alternatives' => [
                    ['id' => '0e75d707-b389-5cbe-8b34-4ed13f458f27', 'description' => 'Caribbean Sea', 'correct_answer' => false],
                    ['id' => 'f53b6a39-f007-56e7-8b94-5303c206b000', 'description' => 'Black Sea', 'correct_answer' => false],
                    ['id' => '633e9adb-90ef-5811-a177-b088d29666cb', 'description' => 'Southern Ocean', 'correct_answer' => false],
                    ['id' => '5aedb55a-705b-5f43-beda-12c3778e8739', 'description' => 'Arctic Ocean', 'correct_answer' => false],
                    ['id' => '4cd6f0b5-f603-557b-aedc-3ae11cab4612', 'description' => 'Red Sea', 'correct_answer' => true]
                ]],
        ['id' => '9ce37d60-c11e-5ab0-bc2e-ea7ce8aaf622', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which planet rotates on its side relative to its orbital plane?', 'difficulty' => 1, 'weight' => 144, 'alternatives' => [
                    ['id' => '750d548a-5b16-5e36-ab0c-3a982669333e', 'description' => 'Jupiter', 'correct_answer' => false],
                    ['id' => 'fe7938cc-9558-51c4-b89d-d41bb2ccd7a3', 'description' => 'Uranus', 'correct_answer' => true],
                    ['id' => 'e182e410-4de0-57fd-ad07-8810218b6c8d', 'description' => 'Neptune', 'correct_answer' => false],
                    ['id' => '4333d025-bf99-581d-ac93-d42bd7597ee5', 'description' => 'Earth', 'correct_answer' => false],
                    ['id' => '4aea60ce-03fe-58b4-9bb3-ee0aaec59ee5', 'description' => 'Saturn', 'correct_answer' => false]
                ]],
        ['id' => 'c5022be3-3d1e-5a21-a975-42337142263f', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which planet is often called the Red Planet?', 'difficulty' => 1, 'weight' => 178, 'alternatives' => [
                    ['id' => '65634367-5777-5cfe-bf8c-34720d034d64', 'description' => 'Jupiter', 'correct_answer' => false],
                    ['id' => '00cc8183-32e7-5ae6-908b-efd2a0de2914', 'description' => 'Mars', 'correct_answer' => true],
                    ['id' => '0f466db8-467b-576f-9e19-a9a10f0cea9a', 'description' => 'Neptune', 'correct_answer' => false],
                    ['id' => 'c4c72430-5e37-5b30-a64f-7c4dc22bc7b7', 'description' => 'Pluto', 'correct_answer' => false],
                    ['id' => '5b686f5c-4242-55e8-b83f-9d6fc5275b7e', 'description' => 'Earth', 'correct_answer' => false]
                ]],
        ['id' => 'bd33d6de-c5a9-55d6-b808-c6c8eebb598e', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which planet is the largest in the Solar System?', 'difficulty' => 1, 'weight' => 193, 'alternatives' => [
                    ['id' => '40c2df93-1631-5072-8e49-aeb6e95a9b29', 'description' => 'Jupiter', 'correct_answer' => true],
                    ['id' => '2381f9d9-a79b-559f-bb5a-0afb6ba77ada', 'description' => 'Neptune', 'correct_answer' => false],
                    ['id' => '67da2c9a-0508-5779-aede-4b626e1a6f72', 'description' => 'Mercury', 'correct_answer' => false],
                    ['id' => '62223b52-8ee5-56e0-8fa5-3efe9cab0956', 'description' => 'Saturn', 'correct_answer' => false],
                    ['id' => 'f4d24e54-c108-583b-aa96-102b1586e212', 'description' => 'Venus', 'correct_answer' => false]
                ]],
        ['id' => '7553cc6a-0661-5560-be94-239456513378', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which planet is closest to the Sun?', 'difficulty' => 1, 'weight' => 150, 'alternatives' => [
                    ['id' => '3108a3a1-eed9-5875-adf5-0758ad794926', 'description' => 'Mercury', 'correct_answer' => true],
                    ['id' => 'b8a90ccd-0fab-5656-8f78-fc45616ec9fc', 'description' => 'Mars', 'correct_answer' => false],
                    ['id' => '6abcdbf1-771c-5848-b1de-953c7542dddd', 'description' => 'Venus', 'correct_answer' => false],
                    ['id' => '08e4df7c-bd10-5f2f-ae25-740d30aae333', 'description' => 'Earth', 'correct_answer' => false],
                    ['id' => '84310faf-a091-5d7d-a73e-cbcf24151ecc', 'description' => 'Jupiter', 'correct_answer' => false]
                ]],
        ['id' => 'ae910406-2ea8-5d2d-bf04-f6e6d5365acb', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which planet is the only one currently known to support life?', 'difficulty' => 1, 'weight' => 121, 'alternatives' => [
                    ['id' => '1cac3336-2677-515a-807c-86c5e1bd150d', 'description' => 'Venus', 'correct_answer' => false],
                    ['id' => 'c628aba8-7384-54b2-a10b-b701d051038a', 'description' => 'Earth', 'correct_answer' => true],
                    ['id' => '3b21748b-7f22-5bf2-a7be-b08db3d74d90', 'description' => 'Neptune', 'correct_answer' => false],
                    ['id' => 'fc3376bc-fc94-58c8-b1c6-6a1f79057c5e', 'description' => 'Saturn', 'correct_answer' => false],
                    ['id' => '87a24d45-ff2b-5f14-b55c-d170741b4267', 'description' => 'Jupiter', 'correct_answer' => false]
                ]],
        ['id' => '10497c7f-2383-5c07-97f7-19e59b7aa454', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which dwarf planet was reclassified from its former status as the ninth planet in 2006?', 'difficulty' => 1, 'weight' => 157, 'alternatives' => [
                    ['id' => '3db2fd5a-d798-5fd7-a3d6-3af086ee612b', 'description' => 'Mercury', 'correct_answer' => false],
                    ['id' => '5947fe1e-b550-56c6-9dad-ea599a978a07', 'description' => 'Venus', 'correct_answer' => false],
                    ['id' => 'd177fa52-fe68-5e50-8cff-f3d1ce6479ca', 'description' => 'Uranus', 'correct_answer' => false],
                    ['id' => 'dc835849-2aed-5ecb-8d55-cc63e5e304f1', 'description' => 'Pluto', 'correct_answer' => true],
                    ['id' => 'c7c18d75-5ade-5b56-b929-c2a25fe2c05d', 'description' => 'Neptune', 'correct_answer' => false]
                ]],
        ['id' => '5b27202e-1bec-5203-acf4-87df98bf2684', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which planet is known for its extremely hot surface and thick atmosphere?', 'difficulty' => 1, 'weight' => 105, 'alternatives' => [
                    ['id' => '6865fe93-6906-5891-a9aa-1833f2acdd0e', 'description' => 'Mercury', 'correct_answer' => false],
                    ['id' => '4c3b0fd8-3ae5-5c3c-9540-79a05125644a', 'description' => 'Uranus', 'correct_answer' => false],
                    ['id' => '3315b4e9-f79b-5b49-ae9c-a09b8fe59b27', 'description' => 'Neptune', 'correct_answer' => false],
                    ['id' => 'cfaf03d4-bf00-5ef5-b044-ef5e33a8abd3', 'description' => 'Saturn', 'correct_answer' => false],
                    ['id' => 'eefd3c7d-8af8-5e44-955f-ed39cb724bc4', 'description' => 'Venus', 'correct_answer' => true]
                ]],
        ['id' => '190c46bb-6b8a-5cc2-b841-ed5983ff0c0b', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which dwarf planet is located in the asteroid belt between Mars and Jupiter?', 'difficulty' => 1, 'weight' => 107, 'alternatives' => [
                    ['id' => 'e73adf2c-1a5c-53f9-9da9-c0171e81053f', 'description' => 'Uranus', 'correct_answer' => false],
                    ['id' => 'b56eb2e7-74d0-595d-b707-3a0e88733864', 'description' => 'Ceres', 'correct_answer' => true],
                    ['id' => '567d84f4-243c-5e48-bf9c-9f8282a33c8e', 'description' => 'Mars', 'correct_answer' => false],
                    ['id' => 'b583824c-dce2-5d2c-8d9a-a044104531bf', 'description' => 'Pluto', 'correct_answer' => false],
                    ['id' => '5feeaa9e-3647-5250-8e86-7193495f8050', 'description' => 'Venus', 'correct_answer' => false]
                ]],
        ['id' => '01487453-c01f-537d-a579-294d0f4982c5', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Who wrote the novel Frankenstein?', 'difficulty' => 1, 'weight' => 168, 'alternatives' => [
                    ['id' => 'ed2227e5-a5b9-5749-ba40-5529e1ba09af', 'description' => 'Jane Austen', 'correct_answer' => false],
                    ['id' => '3835a037-632d-5aae-8b06-a418e8846d0a', 'description' => 'J. R. R. Tolkien', 'correct_answer' => false],
                    ['id' => '68003810-7048-57c9-b452-986b9994e2d0', 'description' => 'Mary Shelley', 'correct_answer' => true],
                    ['id' => '92802d29-100e-5c10-9a1d-4dd7644fab70', 'description' => 'Arthur Conan Doyle', 'correct_answer' => false],
                    ['id' => '780ed447-2e6a-5784-b921-af19c9f4f0c4', 'description' => 'George Orwell', 'correct_answer' => false]
                ]],
        ['id' => 'd4a50e22-13bd-5c40-a594-a406cb3d124f', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Who wrote the novels Oliver Twist and A Christmas Carol?', 'difficulty' => 1, 'weight' => 123, 'alternatives' => [
                    ['id' => '7d55dc1f-7abb-5835-81a9-081e3b6a5b82', 'description' => 'Charles Dickens', 'correct_answer' => true],
                    ['id' => 'd3d1fdac-aacd-50da-9597-3f0964434546', 'description' => 'Mary Shelley', 'correct_answer' => false],
                    ['id' => '4d0437cb-557a-5d3e-87cc-08510b281390', 'description' => 'Agatha Christie', 'correct_answer' => false],
                    ['id' => '086ac642-c48a-52f9-839a-0188742cec99', 'description' => 'Leo Tolstoy', 'correct_answer' => false],
                    ['id' => 'ca4abf53-5649-5675-83a1-c172dbbe16ad', 'description' => 'Mark Twain', 'correct_answer' => false]
                ]],
        ['id' => 'a0600afa-d5fe-51dd-824d-fb0867c55be4', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Who created the detectives Hercule Poirot and Miss Marple?', 'difficulty' => 1, 'weight' => 106, 'alternatives' => [
                    ['id' => '7f55439c-5b36-5803-93ff-8aabebaebe08', 'description' => 'Leo Tolstoy', 'correct_answer' => false],
                    ['id' => '5dcf1b9e-9371-5634-9788-cb189e04b74b', 'description' => 'William Shakespeare', 'correct_answer' => false],
                    ['id' => '64e759a9-8613-5ed8-a32f-c14a0485deea', 'description' => 'Mark Twain', 'correct_answer' => false],
                    ['id' => '0c72ee98-abd2-5321-a247-718074b48b14', 'description' => 'Agatha Christie', 'correct_answer' => true],
                    ['id' => '58cef882-c42f-5ee2-951e-ef8566ffd527', 'description' => 'Arthur Conan Doyle', 'correct_answer' => false]
                ]],
        ['id' => 'bf14f0a1-6528-51a7-9a54-c29ea7f553c5', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Who wrote the novels War and Peace and Anna Karenina?', 'difficulty' => 1, 'weight' => 103, 'alternatives' => [
                    ['id' => 'b668c478-e86e-5934-9f5f-517844ff6c9f', 'description' => 'J. R. R. Tolkien', 'correct_answer' => false],
                    ['id' => 'fd317264-4a41-5074-aaf1-46dd51d27eb2', 'description' => 'Mary Shelley', 'correct_answer' => false],
                    ['id' => '35dc8203-12f7-5e68-bad1-fd81ffe07b92', 'description' => 'Mark Twain', 'correct_answer' => false],
                    ['id' => 'c0f2a7af-4ec4-5129-882d-99165fc23c9b', 'description' => 'Leo Tolstoy', 'correct_answer' => true],
                    ['id' => '0892c592-2109-5117-a449-65d418906c1b', 'description' => 'Charles Dickens', 'correct_answer' => false]
                ]],
        ['id' => '571133be-cd9d-543a-b3cc-da1193673cde', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Who wrote Pride and Prejudice?', 'difficulty' => 1, 'weight' => 140, 'alternatives' => [
                    ['id' => '9f65b1da-69be-59c8-b78d-110ef851567c', 'description' => 'Arthur Conan Doyle', 'correct_answer' => false],
                    ['id' => '1368b9d6-8a39-5bf6-8bc1-73542942dec8', 'description' => 'J. R. R. Tolkien', 'correct_answer' => false],
                    ['id' => '900b381a-e3b0-551a-889d-be81425c6b41', 'description' => 'Mark Twain', 'correct_answer' => false],
                    ['id' => '607ca9a9-b014-51de-878e-ffdc25df104e', 'description' => 'Leo Tolstoy', 'correct_answer' => false],
                    ['id' => '5f1bf673-8738-5055-99b4-32e19ce9e57b', 'description' => 'Jane Austen', 'correct_answer' => true]
                ]],
        ['id' => 'd31a2c82-b396-55b0-bfee-1c53ebdddaa4', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Who wrote The Hobbit and The Lord of the Rings?', 'difficulty' => 1, 'weight' => 173, 'alternatives' => [
                    ['id' => 'b175bdab-cb23-550b-bb29-d5397e8fc3f7', 'description' => 'J. R. R. Tolkien', 'correct_answer' => true],
                    ['id' => 'd3b4c72e-6727-5f87-ab1e-3b6dd10514b1', 'description' => 'Charles Dickens', 'correct_answer' => false],
                    ['id' => 'd74d61a7-9199-5843-b76a-015a3b51980c', 'description' => 'George Orwell', 'correct_answer' => false],
                    ['id' => 'be002a4b-dfd2-508d-9883-a744de7e3aaa', 'description' => 'Agatha Christie', 'correct_answer' => false],
                    ['id' => '5e9b38b9-69d4-59a2-9218-a36a67660286', 'description' => 'Arthur Conan Doyle', 'correct_answer' => false]
                ]],
        ['id' => '71509184-6e8f-5231-96c9-3cd103a73fb6', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Who wrote the tragedy Romeo and Juliet?', 'difficulty' => 1, 'weight' => 197, 'alternatives' => [
                    ['id' => 'e1e43798-0c54-5f0c-bc19-2bcae99fe0cf', 'description' => 'Leo Tolstoy', 'correct_answer' => false],
                    ['id' => 'e15cdbfa-b1c3-55ca-921e-91986a3b2e91', 'description' => 'Jane Austen', 'correct_answer' => false],
                    ['id' => 'b24be228-a8b1-5fc9-8bb9-3e9fb103adf5', 'description' => 'Agatha Christie', 'correct_answer' => false],
                    ['id' => '42603d0e-9f73-5038-ad07-4827b9d47467', 'description' => 'George Orwell', 'correct_answer' => false],
                    ['id' => 'f88eda3d-d9f3-55eb-b57a-51f4731f7b58', 'description' => 'William Shakespeare', 'correct_answer' => true]
                ]],
        ['id' => '4ae68fd2-f396-570e-8f86-744bfa94a9a3', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Who created the detective Sherlock Holmes?', 'difficulty' => 1, 'weight' => 121, 'alternatives' => [
                    ['id' => '9b931e39-7ac2-541e-aa0e-5f6fac0276d9', 'description' => 'Charles Dickens', 'correct_answer' => false],
                    ['id' => '89d7f6ab-0cee-5469-9534-a292cb8a50bc', 'description' => 'Arthur Conan Doyle', 'correct_answer' => true],
                    ['id' => '38740898-268b-5178-864c-b1525c97a70d', 'description' => 'Agatha Christie', 'correct_answer' => false],
                    ['id' => 'd6d6c8e0-9390-50b8-bed8-a30f8691a658', 'description' => 'Mary Shelley', 'correct_answer' => false],
                    ['id' => '8324c5df-72ee-5473-b576-8288aae9542e', 'description' => 'J. R. R. Tolkien', 'correct_answer' => false]
                ]],
        ['id' => '9af9ea7d-a903-5ec7-b579-4a9ca573eb0b', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Who painted the Mona Lisa?', 'difficulty' => 1, 'weight' => 149, 'alternatives' => [
                    ['id' => 'a18eed62-c02f-5e6c-94bf-a57410ccab70', 'description' => 'Edvard Munch', 'correct_answer' => false],
                    ['id' => '435b5946-cb01-55a5-932b-2defba8aa2d7', 'description' => 'Leonardo da Vinci', 'correct_answer' => true],
                    ['id' => 'caa75af7-18ee-541b-9691-e3d875ef752a', 'description' => 'Vincent van Gogh', 'correct_answer' => false],
                    ['id' => '9ab40bd9-af14-5e8a-b76d-752d5bbba182', 'description' => 'Frida Kahlo', 'correct_answer' => false],
                    ['id' => '6668d89d-3496-5d87-89f9-95444f92378b', 'description' => 'Pablo Picasso', 'correct_answer' => false]
                ]],
        ['id' => '99fd9f92-c3b7-5a77-b6a1-5a6822111ba0', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which Mexican artist painted many self-portraits, including The Two Fridas?', 'difficulty' => 1, 'weight' => 124, 'alternatives' => [
                    ['id' => '103764ac-b179-5eef-857e-5fadf71c6d38', 'description' => 'Claude Monet', 'correct_answer' => false],
                    ['id' => '3d81ab9a-661b-5437-aaaf-c1a03b7dfa66', 'description' => 'Frida Kahlo', 'correct_answer' => true],
                    ['id' => 'b0eed273-7a45-5348-8676-3c29268a2059', 'description' => 'Pablo Picasso', 'correct_answer' => false],
                    ['id' => 'a1272d3c-d559-5146-8aaa-30f30376a329', 'description' => 'Edvard Munch', 'correct_answer' => false],
                    ['id' => '053cf243-895a-50b9-b86b-fc5a00851922', 'description' => 'Leonardo da Vinci', 'correct_answer' => false]
                ]],
        ['id' => '6239b663-566d-5be4-baf7-bf0dc5cf7e9c', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Who painted The Scream?', 'difficulty' => 1, 'weight' => 121, 'alternatives' => [
                    ['id' => 'de308789-19c9-5844-b218-9ecf85153dcc', 'description' => 'Johannes Vermeer', 'correct_answer' => false],
                    ['id' => 'd2416467-eef8-5f71-84ef-db0aa22d693c', 'description' => 'Edvard Munch', 'correct_answer' => true],
                    ['id' => 'd90e3087-68b0-5895-abe4-a19b073c00b0', 'description' => 'Vincent van Gogh', 'correct_answer' => false],
                    ['id' => 'f4d81ffe-3291-5860-bbac-233e17f5b0fb', 'description' => 'Michelangelo', 'correct_answer' => false],
                    ['id' => '75459e57-ba1c-5d22-b827-9c4542c658e8', 'description' => 'Rembrandt', 'correct_answer' => false]
                ]],
        ['id' => 'a6db4768-5a7d-52f7-9ea1-b979d806d7e0', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Who co-founded Cubism and painted Guernica?', 'difficulty' => 1, 'weight' => 182, 'alternatives' => [
                    ['id' => '4adf399c-4914-5623-9f77-a3c705cea3d6', 'description' => 'Frida Kahlo', 'correct_answer' => false],
                    ['id' => '61595705-1621-5f7c-b5f1-bc2f552942be', 'description' => 'Michelangelo', 'correct_answer' => false],
                    ['id' => '1f64ce8c-b642-5c27-ac18-859f701759be', 'description' => 'Pablo Picasso', 'correct_answer' => true],
                    ['id' => '299e5137-9570-5ddb-a76a-00dde256ca91', 'description' => 'Rembrandt', 'correct_answer' => false],
                    ['id' => '46eee874-8fa2-5820-a258-27fdc98cce6e', 'description' => 'Salvador Dalí', 'correct_answer' => false]
                ]],
        ['id' => 'd2847dcd-8b0a-5f92-93bb-73da1c85b6dc', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Who painted the ceiling of the Sistine Chapel?', 'difficulty' => 1, 'weight' => 183, 'alternatives' => [
                    ['id' => 'ff8f36eb-a17d-5010-92ff-1062fa73f8fb', 'description' => 'Edvard Munch', 'correct_answer' => false],
                    ['id' => '40f39ee5-1a2f-566e-9e3a-e82b56eaff4f', 'description' => 'Vincent van Gogh', 'correct_answer' => false],
                    ['id' => 'eeb19cbb-6cf3-5241-ae24-0c9edb90ce18', 'description' => 'Michelangelo', 'correct_answer' => true],
                    ['id' => '609d1978-a051-5ee7-b064-c6f67dc6672a', 'description' => 'Leonardo da Vinci', 'correct_answer' => false],
                    ['id' => '511723c4-1e89-5b62-a3ef-f45c5e2785bb', 'description' => 'Frida Kahlo', 'correct_answer' => false]
                ]],
        ['id' => '02a64c8d-90da-55b3-8b45-8ed50b3730b8', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Who painted Impression, Sunrise and the Water Lilies series?', 'difficulty' => 1, 'weight' => 111, 'alternatives' => [
                    ['id' => 'd1d8c882-dafe-5e7a-a218-8a39532c3fbb', 'description' => 'Claude Monet', 'correct_answer' => true],
                    ['id' => 'c91a61b5-f9d5-59ee-99f9-2d16ab26ac05', 'description' => 'Pablo Picasso', 'correct_answer' => false],
                    ['id' => '2fd72069-89f7-542e-b99d-ea0cd0484302', 'description' => 'Vincent van Gogh', 'correct_answer' => false],
                    ['id' => '50a5a01e-75ad-5f45-bda3-b7820e14c8fc', 'description' => 'Rembrandt', 'correct_answer' => false],
                    ['id' => '7c5108b9-df06-565f-ba3f-67ed4c2e2feb', 'description' => 'Salvador Dalí', 'correct_answer' => false]
                ]],
        ['id' => 'a4eb723c-4eaf-528e-be21-481873acee9d', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which Dutch master painted The Night Watch?', 'difficulty' => 1, 'weight' => 165, 'alternatives' => [
                    ['id' => '66f39dcf-98a7-56cb-8513-1aaf4185cb64', 'description' => 'Edvard Munch', 'correct_answer' => false],
                    ['id' => '813d52f8-aa91-5bc9-8bc3-e1ef212925a7', 'description' => 'Michelangelo', 'correct_answer' => false],
                    ['id' => '6e7176a9-5eef-5bc8-bc71-3c98ced89600', 'description' => 'Pablo Picasso', 'correct_answer' => false],
                    ['id' => 'cd4f61d2-a49b-5629-bb95-b33f23b11544', 'description' => 'Rembrandt', 'correct_answer' => true],
                    ['id' => '0b45aad0-62fc-57ae-a654-67e2b94e6033', 'description' => 'Vincent van Gogh', 'correct_answer' => false]
                ]],
        ['id' => 'da42756f-d5a5-52b0-9d6b-9b675180d168', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Who painted The Starry Night?', 'difficulty' => 1, 'weight' => 140, 'alternatives' => [
                    ['id' => '78abc39e-d440-5aea-9e62-0d055e582379', 'description' => 'Vincent van Gogh', 'correct_answer' => true],
                    ['id' => '93be9b15-82d5-5757-86b8-c7ecf0f73409', 'description' => 'Michelangelo', 'correct_answer' => false],
                    ['id' => '72b36970-e100-55e4-811c-7d92c30d72d2', 'description' => 'Leonardo da Vinci', 'correct_answer' => false],
                    ['id' => 'e673218b-db9d-52ea-91bb-09e64d10254b', 'description' => 'Claude Monet', 'correct_answer' => false],
                    ['id' => '10032a26-12a5-5e29-96bb-0e01f5849dd0', 'description' => 'Rembrandt', 'correct_answer' => false]
                ]],
        ['id' => '6d42c08a-e272-5cb8-9ff3-4e478bfa97ed', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which is the longest river in Europe?', 'difficulty' => 2, 'weight' => 254, 'alternatives' => [
                    ['id' => 'fcd51214-b9ae-5a6c-bd94-ba81d9bf752b', 'description' => 'Mississippi', 'correct_answer' => false],
                    ['id' => 'ab581e41-7464-5f2b-8946-082c6e5c4ec1', 'description' => 'Volga', 'correct_answer' => true],
                    ['id' => '9d6f34be-993c-5d56-b03a-6145147d7e93', 'description' => 'Nile', 'correct_answer' => false],
                    ['id' => '402a3942-a17a-5f9e-bfaa-a300af511492', 'description' => 'Yangtze', 'correct_answer' => false],
                    ['id' => '94d5593e-846b-5da5-a3c4-8f2564bfd26a', 'description' => 'Danube', 'correct_answer' => false]
                ]],
        ['id' => 'e244aa4e-c2b9-5ff3-a8d3-d69a555d140a', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which river flows through countries including China, Laos, Cambodia, and Vietnam?', 'difficulty' => 2, 'weight' => 345, 'alternatives' => [
                    ['id' => '6f8db742-45f6-5f8a-9980-3f8847f2b2ef', 'description' => 'Amazon', 'correct_answer' => false],
                    ['id' => 'e04d9048-da7f-5cf9-998e-fbcf8cac22d1', 'description' => 'Mekong', 'correct_answer' => true],
                    ['id' => '6191c54a-20c4-5b47-89be-12b9854d825d', 'description' => 'Yangtze', 'correct_answer' => false],
                    ['id' => '2680a3c1-bb66-5de5-bb77-c9179acd4a7c', 'description' => 'Mississippi', 'correct_answer' => false],
                    ['id' => '052a885c-7df2-5179-ade7-b0cd0c554f70', 'description' => 'Ganges', 'correct_answer' => false]
                ]],
        ['id' => 'a370aa44-f377-527d-be31-35e1dfba59c2', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which river is traditionally considered the longest in the world?', 'difficulty' => 2, 'weight' => 210, 'alternatives' => [
                    ['id' => '00c70459-7af8-51a4-b4ad-07b409b5b8c0', 'description' => 'Rhine', 'correct_answer' => false],
                    ['id' => '70bf17e4-fa1e-5501-8bcc-bd990a1cc431', 'description' => 'Yangtze', 'correct_answer' => false],
                    ['id' => '5c37a258-41e2-5dc0-b623-ac9fce9c70da', 'description' => 'Danube', 'correct_answer' => false],
                    ['id' => '7a592070-858d-56ca-8a2e-81d9dedfb0f2', 'description' => 'Ganges', 'correct_answer' => false],
                    ['id' => 'e72b2d5f-b39e-5282-b303-3a7d6835f30a', 'description' => 'Nile', 'correct_answer' => true]
                ]],
        ['id' => 'bd21d91d-0fcf-575a-9a4a-66346ccf2185', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which river is especially sacred in Hinduism and flows through India and Bangladesh?', 'difficulty' => 2, 'weight' => 269, 'alternatives' => [
                    ['id' => '53f49ee3-9720-5bcc-ba54-65f565fcbd72', 'description' => 'Amazon', 'correct_answer' => false],
                    ['id' => '123f2e34-f60c-5578-a8b0-72c7f0d5bc56', 'description' => 'Mekong', 'correct_answer' => false],
                    ['id' => 'f2e3a829-6764-580e-980c-eb30164c9af7', 'description' => 'Ganges', 'correct_answer' => true],
                    ['id' => '256d83d8-0054-55f6-9fa8-72ec3ecb6080', 'description' => 'Yangtze', 'correct_answer' => false],
                    ['id' => 'ba5b1b0b-f68b-5674-af7b-0b8e3680afe1', 'description' => 'Congo', 'correct_answer' => false]
                ]],
        ['id' => '58547823-fc32-5074-8ff6-2366429b6844', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which South American river has the greatest water discharge in the world?', 'difficulty' => 2, 'weight' => 203, 'alternatives' => [
                    ['id' => '6ec51afb-71a2-55ec-8f0c-ee0d0542735b', 'description' => 'Nile', 'correct_answer' => false],
                    ['id' => '407f6830-8782-5380-a96b-11a678bae644', 'description' => 'Ganges', 'correct_answer' => false],
                    ['id' => 'ca33e80c-d680-507e-a77b-e700579e69b5', 'description' => 'Volga', 'correct_answer' => false],
                    ['id' => 'effc188f-f12d-5014-ba39-3c5015fac6d8', 'description' => 'Yangtze', 'correct_answer' => false],
                    ['id' => '3944ce16-d5e4-55b1-9140-9c88af88f6c5', 'description' => 'Amazon', 'correct_answer' => true]
                ]],
        ['id' => '5b92d401-2708-5242-a969-9a0b86516766', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which major European river flows through Switzerland, Germany, and the Netherlands?', 'difficulty' => 2, 'weight' => 387, 'alternatives' => [
                    ['id' => '0c944097-861b-5752-b4c9-202d7222d9db', 'description' => 'Congo', 'correct_answer' => false],
                    ['id' => '6915e4e6-77f0-5c80-8e45-88f85d1d707b', 'description' => 'Ganges', 'correct_answer' => false],
                    ['id' => 'ca15224b-fc2f-56fb-a4e6-2359b22a2224', 'description' => 'Rhine', 'correct_answer' => true],
                    ['id' => '1ea8868a-c60f-5dfb-93d8-ae915928d832', 'description' => 'Mississippi', 'correct_answer' => false],
                    ['id' => '229f1da3-8671-524b-9079-70d86a3f601a', 'description' => 'Mekong', 'correct_answer' => false]
                ]],
        ['id' => 'f235fa2d-04b1-555b-af45-e3b05ffa4b89', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which European river flows through or along ten countries, including Austria and Hungary?', 'difficulty' => 2, 'weight' => 264, 'alternatives' => [
                    ['id' => '951825f3-5ec6-57ed-aa09-fd868801f376', 'description' => 'Nile', 'correct_answer' => false],
                    ['id' => 'd2fa67fb-b70f-50e2-8a80-056c94a15fdb', 'description' => 'Rhine', 'correct_answer' => false],
                    ['id' => '5bef4e77-359b-557d-8065-54967aadf3a9', 'description' => 'Mekong', 'correct_answer' => false],
                    ['id' => '08b08bff-493d-5095-8ff9-4e4387174548', 'description' => 'Amazon', 'correct_answer' => false],
                    ['id' => 'f4273ed0-414d-56e7-9757-f040aa339e80', 'description' => 'Danube', 'correct_answer' => true]
                ]],
        ['id' => '0e130e23-52c8-5730-a072-6eb4b6f047a2', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which African river crosses the equator twice?', 'difficulty' => 2, 'weight' => 288, 'alternatives' => [
                    ['id' => '1ec89268-d857-5322-b88e-12c58bfe4a28', 'description' => 'Congo', 'correct_answer' => true],
                    ['id' => '98c95bf9-2a13-5734-9dba-903c9e9a9cf2', 'description' => 'Volga', 'correct_answer' => false],
                    ['id' => '677920c0-35f4-5368-93c2-1d38de238583', 'description' => 'Nile', 'correct_answer' => false],
                    ['id' => '0ccc7855-a2eb-5f7a-88d9-61d379893b29', 'description' => 'Ganges', 'correct_answer' => false],
                    ['id' => '909a5850-1e94-53e6-b546-dab9be2a72d4', 'description' => 'Rhine', 'correct_answer' => false]
                ]],
        ['id' => '685378dc-3bbb-5154-a25e-348c8cdcef3e', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which cell structure helps organize microtubules and the mitotic spindle in animal cells?', 'difficulty' => 2, 'weight' => 267, 'alternatives' => [
                    ['id' => '29cc6d97-34df-5f94-9680-cdc20275d23f', 'description' => 'Endoplasmic reticulum', 'correct_answer' => false],
                    ['id' => '7e491cb8-3b9b-5fb3-86ad-5ff81c02a138', 'description' => 'Centrosome', 'correct_answer' => true],
                    ['id' => '1f704ad1-cd26-5dd0-a475-c879423d957f', 'description' => 'Vacuole', 'correct_answer' => false],
                    ['id' => '6c96cdee-695b-5857-8a03-de55adf03ce7', 'description' => 'Lysosome', 'correct_answer' => false],
                    ['id' => '093b008a-f75a-5c20-a8a0-8594cb64b516', 'description' => 'Peroxisome', 'correct_answer' => false]
                ]],
        ['id' => 'bbfd3133-f3c0-5a89-9a31-e4ab2dc1ac00', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which eukaryotic cell organelle contains most of the cell\'s genetic material?', 'difficulty' => 2, 'weight' => 221, 'alternatives' => [
                    ['id' => 'b67f4a17-cdcd-5e54-b691-bf454f8ed927', 'description' => 'Centrosome', 'correct_answer' => false],
                    ['id' => '73c7a0a1-b740-5eaa-8c05-e5db33a5825e', 'description' => 'Vacuole', 'correct_answer' => false],
                    ['id' => '625a138c-f4f1-5eca-be86-d7a443ee451c', 'description' => 'Nucleus', 'correct_answer' => true],
                    ['id' => '18622733-efb7-5715-9d96-111e60d2976c', 'description' => 'Golgi apparatus', 'correct_answer' => false],
                    ['id' => '434c88a8-976d-56a8-8380-9486871389a1', 'description' => 'Mitochondrion', 'correct_answer' => false]
                ]],
        ['id' => 'eaaba55a-6acf-5a55-b0fc-64cfb447ff53', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which cell organelle is commonly described as the main site of ATP production?', 'difficulty' => 2, 'weight' => 274, 'alternatives' => [
                    ['id' => '50dc09c4-5439-5b1b-b88d-3ef22c61ceda', 'description' => 'Mitochondrion', 'correct_answer' => true],
                    ['id' => 'defd4607-268c-5418-9baf-17a726b5bd14', 'description' => 'Ribosome', 'correct_answer' => false],
                    ['id' => '35f4e93e-e559-5d1e-bd8f-f2c3b1a6d58c', 'description' => 'Endoplasmic reticulum', 'correct_answer' => false],
                    ['id' => 'b1615df0-e5f0-5141-aec7-7064c5fb49aa', 'description' => 'Chloroplast', 'correct_answer' => false],
                    ['id' => 'b6ca7ee9-4e00-515e-88cc-7cf3dcf6c3fb', 'description' => 'Nucleus', 'correct_answer' => false]
                ]],
        ['id' => 'ce35536e-37d6-5caa-b7ea-0d1659e5d4bc', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which organelle network includes rough and smooth regions and helps synthesize proteins and lipids?', 'difficulty' => 2, 'weight' => 370, 'alternatives' => [
                    ['id' => '86548081-828f-5fb2-ba97-04a0fb9e0b0c', 'description' => 'Endoplasmic reticulum', 'correct_answer' => true],
                    ['id' => '6c87be69-8dfe-5eb7-bdf5-0aeeecb9d57e', 'description' => 'Centrosome', 'correct_answer' => false],
                    ['id' => '038b2ce0-7695-5692-81a8-e37cad73d747', 'description' => 'Lysosome', 'correct_answer' => false],
                    ['id' => '5c68d14a-7632-5850-9835-27ce57e4f49c', 'description' => 'Mitochondrion', 'correct_answer' => false],
                    ['id' => 'b529a77f-dedc-5248-9b88-3d3dd3eca287', 'description' => 'Golgi apparatus', 'correct_answer' => false]
                ]],
        ['id' => '35aac094-927e-50db-9171-5de3532de8fe', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which cell structure is responsible for protein synthesis?', 'difficulty' => 2, 'weight' => 380, 'alternatives' => [
                    ['id' => '08308c3c-fc07-52e8-9125-37ba6d699577', 'description' => 'Chloroplast', 'correct_answer' => false],
                    ['id' => '72296a2e-e4a5-5316-9627-35795de3edbf', 'description' => 'Peroxisome', 'correct_answer' => false],
                    ['id' => 'e106c877-60be-538a-b484-227b0699d21f', 'description' => 'Mitochondrion', 'correct_answer' => false],
                    ['id' => 'a3c0ec8f-39b6-5a0f-a022-9a7995cf132c', 'description' => 'Ribosome', 'correct_answer' => true],
                    ['id' => 'e6ba7d2c-7236-5ad6-a8e6-e8bde473f185', 'description' => 'Centrosome', 'correct_answer' => false]
                ]],
        ['id' => 'f60db758-aaef-51f4-97f2-9d91146a5f40', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which plant-cell structure often stores water and helps maintain turgor pressure?', 'difficulty' => 2, 'weight' => 370, 'alternatives' => [
                    ['id' => '46c584ab-f866-58a9-a0bb-ecbbf3e7d53d', 'description' => 'Peroxisome', 'correct_answer' => false],
                    ['id' => '15bd52ad-d001-5197-b647-76c6c3a5d0ac', 'description' => 'Golgi apparatus', 'correct_answer' => false],
                    ['id' => 'af7bd7bd-a269-5a4d-81e6-aad74cd10a43', 'description' => 'Mitochondrion', 'correct_answer' => false],
                    ['id' => 'de5f538f-956e-563f-89c7-53cf8e8ea945', 'description' => 'Vacuole', 'correct_answer' => true],
                    ['id' => '3e2671c6-291e-5130-950b-a5b402e4e129', 'description' => 'Nucleus', 'correct_answer' => false]
                ]],
        ['id' => '88373c77-3dda-522e-a5e6-e26ffb2f0b4d', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which organelle carries out photosynthesis in plants and algae?', 'difficulty' => 2, 'weight' => 359, 'alternatives' => [
                    ['id' => '57742c66-fddf-50a8-9b44-457484e17f87', 'description' => 'Lysosome', 'correct_answer' => false],
                    ['id' => 'e9d25271-58d1-5cc7-b272-745a12154d44', 'description' => 'Nucleus', 'correct_answer' => false],
                    ['id' => 'dd187c0a-22f2-58f8-aca6-394506552290', 'description' => 'Centrosome', 'correct_answer' => false],
                    ['id' => 'a0066167-74da-5998-bc27-b563f21b81a1', 'description' => 'Chloroplast', 'correct_answer' => true],
                    ['id' => 'cf2e720a-d6bd-5efb-90c3-524320c05ea5', 'description' => 'Endoplasmic reticulum', 'correct_answer' => false]
                ]],
        ['id' => '117195c2-8619-5ac0-89d6-9f2a2a76e640', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which organelle contains enzymes that break down cellular waste and macromolecules?', 'difficulty' => 2, 'weight' => 384, 'alternatives' => [
                    ['id' => 'eb63c140-a7f4-57f4-9ff3-7c40eff083b6', 'description' => 'Nucleus', 'correct_answer' => false],
                    ['id' => 'a6731aa6-61f0-56e0-8b69-5ddc6567ce69', 'description' => 'Ribosome', 'correct_answer' => false],
                    ['id' => '30c6f656-00d6-5779-a4de-26308b67ffc8', 'description' => 'Mitochondrion', 'correct_answer' => false],
                    ['id' => 'dd4b3569-7ccf-5058-861d-e157fafeb0f1', 'description' => 'Lysosome', 'correct_answer' => true],
                    ['id' => '2bcd8a4b-971e-59f1-a16f-d3e42aa2d64c', 'description' => 'Chloroplast', 'correct_answer' => false]
                ]],
        ['id' => '848aa0c6-a9be-5ca2-9a4f-79e6abd6d593', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which planet has the Great Red Spot, a giant persistent storm?', 'difficulty' => 2, 'weight' => 358, 'alternatives' => [
                    ['id' => 'babc05ac-b04e-5054-aaa4-cebb8dd351cd', 'description' => 'Mars', 'correct_answer' => false],
                    ['id' => '3490d2b1-7b1e-5d32-b4bb-77f15e1bbdc4', 'description' => 'Jupiter', 'correct_answer' => true],
                    ['id' => '86a85744-0f8e-5496-9314-568dd3baaad9', 'description' => 'Mercury', 'correct_answer' => false],
                    ['id' => '88b0c483-7772-5c34-a8ef-b53498686149', 'description' => 'Earth', 'correct_answer' => false],
                    ['id' => '72b532b4-9d96-5e07-bbd0-c102d5065b1c', 'description' => 'Neptune', 'correct_answer' => false]
                ]],
        ['id' => 'c74b00c1-861d-55c5-99cb-04746c4f157e', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which planet has the strongest sustained winds measured in the Solar System?', 'difficulty' => 2, 'weight' => 240, 'alternatives' => [
                    ['id' => '2dde79e5-1fc6-58c5-8d3a-7a9c026e285c', 'description' => 'Neptune', 'correct_answer' => true],
                    ['id' => 'bd5976da-e8a6-5af1-9efd-c8cdb1c59e9d', 'description' => 'Saturn', 'correct_answer' => false],
                    ['id' => '8eeb8d27-c7ce-5374-b786-3f6842a598da', 'description' => 'Haumea', 'correct_answer' => false],
                    ['id' => '95cbe56c-b41b-564c-b567-030181c4f884', 'description' => 'Pluto', 'correct_answer' => false],
                    ['id' => '2737de44-39a1-520d-951e-fd5e712ab674', 'description' => 'Uranus', 'correct_answer' => false]
                ]],
        ['id' => '02413ac6-fd93-5d02-b0e4-6fe423be9556', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which planet rotates retrograde and has a day longer than its year?', 'difficulty' => 2, 'weight' => 274, 'alternatives' => [
                    ['id' => 'f91f06c9-76f5-5584-9441-c06690848a27', 'description' => 'Neptune', 'correct_answer' => false],
                    ['id' => 'b787b48c-858f-5e4c-944d-d4967a8719e2', 'description' => 'Haumea', 'correct_answer' => false],
                    ['id' => '3c250134-0263-5d73-8b66-c3d36b6c8c9c', 'description' => 'Jupiter', 'correct_answer' => false],
                    ['id' => 'b62c667a-86e4-5c8d-83db-beb23d57c747', 'description' => 'Venus', 'correct_answer' => true],
                    ['id' => 'f55df0e5-b8a3-5f43-bb24-525e1e5c62aa', 'description' => 'Saturn', 'correct_answer' => false]
                ]],
        ['id' => 'df540e55-3c95-556b-94e9-7c4834af0b59', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which planet has the largest iron core relative to its size?', 'difficulty' => 2, 'weight' => 257, 'alternatives' => [
                    ['id' => '9cfeb935-3b57-502a-8312-7cc9516926a5', 'description' => 'Jupiter', 'correct_answer' => false],
                    ['id' => 'b4addce8-766b-564f-be55-d8bdda3299e3', 'description' => 'Saturn', 'correct_answer' => false],
                    ['id' => '465f0ea2-85f7-584a-a118-4a4ce3a09cdb', 'description' => 'Mercury', 'correct_answer' => true],
                    ['id' => 'c786f155-f157-5d38-9e26-3b2f1b08631c', 'description' => 'Mars', 'correct_answer' => false],
                    ['id' => 'a6d601d8-294e-5c5e-b8cc-f948a3858f40', 'description' => 'Uranus', 'correct_answer' => false]
                ]],
        ['id' => '7dd693f2-3f7f-51b1-ad67-a5ee5d62b361', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which planet has a natural satellite unusually large relative to its own size?', 'difficulty' => 2, 'weight' => 337, 'alternatives' => [
                    ['id' => '4c6aa000-9d9a-59ac-9370-7dd57c568beb', 'description' => 'Mercury', 'correct_answer' => false],
                    ['id' => '9ab06b94-10dc-5c8a-87c0-874c2ddf5ac3', 'description' => 'Earth', 'correct_answer' => true],
                    ['id' => '4cdd2089-12a3-5e89-8922-4c50269aed7b', 'description' => 'Saturn', 'correct_answer' => false],
                    ['id' => '201df139-4c91-5179-b5e8-c5d0a7eec9c1', 'description' => 'Haumea', 'correct_answer' => false],
                    ['id' => 'b72fbc1e-dee3-5e2a-947c-d4a7f1291483', 'description' => 'Mars', 'correct_answer' => false]
                ]],
        ['id' => 'd1f1ab4f-1576-51dc-950f-dec3e77e1037', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which dwarf planet is notable for its elongated shape and rapid rotation?', 'difficulty' => 2, 'weight' => 269, 'alternatives' => [
                    ['id' => '35637561-6fd4-55a6-abe6-c06978cb7375', 'description' => 'Mercury', 'correct_answer' => false],
                    ['id' => 'f5b203d1-18f9-5cc3-b4e5-5926a83c9ee0', 'description' => 'Neptune', 'correct_answer' => false],
                    ['id' => 'e6d5ce0d-f338-5c6d-a2c8-37a447694073', 'description' => 'Haumea', 'correct_answer' => true],
                    ['id' => '4bd14bc4-3f67-525f-8963-e381008f734c', 'description' => 'Pluto', 'correct_answer' => false],
                    ['id' => '8503b985-8abc-5370-a2f1-5ab8ee27a9d4', 'description' => 'Venus', 'correct_answer' => false]
                ]],
        ['id' => '586a3824-96f4-5abc-9996-a7f95abd66a6', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which planet has the lowest average density among the planets in the Solar System?', 'difficulty' => 2, 'weight' => 242, 'alternatives' => [
                    ['id' => '0f92794e-eed7-5c01-ac08-f764db7f7dfb', 'description' => 'Haumea', 'correct_answer' => false],
                    ['id' => '48c7540f-ff79-5a1e-af50-dcd49b9101bf', 'description' => 'Earth', 'correct_answer' => false],
                    ['id' => '7f4babfd-a72c-5418-83af-632d4e4b8e28', 'description' => 'Uranus', 'correct_answer' => false],
                    ['id' => '52b75e0e-0026-5b59-bda2-1aa2a5d4bc50', 'description' => 'Saturn', 'correct_answer' => true],
                    ['id' => '43d4cdd9-f830-5c3d-98df-e16bce14e43e', 'description' => 'Venus', 'correct_answer' => false]
                ]],
        ['id' => '35f027d2-ab0f-5f61-a2fd-b1fdf549c0e3', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which planet hosts Olympus Mons, the largest known volcano in the Solar System?', 'difficulty' => 2, 'weight' => 367, 'alternatives' => [
                    ['id' => '4ef555e8-eb59-52cd-bf73-be166b318893', 'description' => 'Mars', 'correct_answer' => true],
                    ['id' => 'a8aa4cd9-1731-55f6-baa8-42623b7e4881', 'description' => 'Uranus', 'correct_answer' => false],
                    ['id' => 'fa6c2ca4-a150-529c-a41d-2a49f3017e5e', 'description' => 'Earth', 'correct_answer' => false],
                    ['id' => '4ad67eff-2973-5834-a1a1-63613c42f469', 'description' => 'Saturn', 'correct_answer' => false],
                    ['id' => '9a3b877f-1245-544a-ab9c-20683b03cc20', 'description' => 'Neptune', 'correct_answer' => false]
                ]],
        ['id' => 'b0f0eecd-f57f-5624-9f1b-8b9221b48a10', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which human chromosome is present in three copies in most cases of Down syndrome?', 'difficulty' => 2, 'weight' => 203, 'alternatives' => [
                    ['id' => 'd81504e1-3b6b-5d5a-b1d4-c4411c1fe659', 'description' => 'Chromosome 18', 'correct_answer' => false],
                    ['id' => 'bd357b99-8ecd-5478-8ed2-86b4058d3699', 'description' => 'Chromosome 11', 'correct_answer' => false],
                    ['id' => '91779701-3f72-5056-9b59-05c8cfb6eea5', 'description' => 'Chromosome 21', 'correct_answer' => true],
                    ['id' => '9eedbf33-96a9-54ed-824c-9b9f7ce4970e', 'description' => 'Y chromosome', 'correct_answer' => false],
                    ['id' => 'e80cb779-a140-5d6b-bb56-6da0b2be4bd2', 'description' => 'X chromosome', 'correct_answer' => false]
                ]],
        ['id' => 'e898675e-2960-5a6f-bb55-bd1bef81ae06', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which chromosome is involved in the typical genetic mechanisms behind Prader-Willi and Angelman syndromes?', 'difficulty' => 2, 'weight' => 249, 'alternatives' => [
                    ['id' => '0af72184-d690-565a-9e6d-2a27641932e7', 'description' => 'Chromosome 11', 'correct_answer' => false],
                    ['id' => 'f26c51d0-667b-598f-8091-19dd4c6eec83', 'description' => 'Mitochondrial DNA', 'correct_answer' => false],
                    ['id' => '842efe38-57f9-5a59-81c4-4465f39f17d9', 'description' => 'Y chromosome', 'correct_answer' => false],
                    ['id' => '3f7ce423-0b57-5572-a1e5-52771f473870', 'description' => 'Chromosome 15', 'correct_answer' => true],
                    ['id' => '00c99ffb-804e-52dd-bc80-2460d630a619', 'description' => 'Chromosome 7', 'correct_answer' => false]
                ]],
        ['id' => '2b211339-1ead-53a7-bbe2-aa7c6727ced2', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'What type of DNA is typically inherited almost exclusively from the mother in humans?', 'difficulty' => 2, 'weight' => 239, 'alternatives' => [
                    ['id' => '7f4ab21f-c886-57c2-bdbd-eb93df8625ee', 'description' => 'X chromosome', 'correct_answer' => false],
                    ['id' => 'aca7ca7c-0a30-54a6-ab02-6694ea275169', 'description' => 'Mitochondrial DNA', 'correct_answer' => true],
                    ['id' => '77de7e27-2623-5000-b23a-c2e953e680ea', 'description' => 'Chromosome 15', 'correct_answer' => false],
                    ['id' => '59afdb46-f264-503d-b011-f24047f72fd3', 'description' => 'Y chromosome', 'correct_answer' => false],
                    ['id' => 'fc12044f-8063-5ce6-bb1c-c7898ad11932', 'description' => 'Chromosome 5', 'correct_answer' => false]
                ]],
        ['id' => '3eef3ebd-90da-54be-bc7f-53b6463776aa', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which human sex chromosome is present in one copy in typical XY individuals?', 'difficulty' => 2, 'weight' => 232, 'alternatives' => [
                    ['id' => '7d42682a-80a7-5596-bafe-f9e63947d801', 'description' => 'X chromosome', 'correct_answer' => true],
                    ['id' => 'c186536e-8507-5299-a3f6-6e852d9a5f3f', 'description' => 'Chromosome 11', 'correct_answer' => false],
                    ['id' => '9be38a46-7d92-564e-95a0-1fb8b9b9f59e', 'description' => 'Chromosome 18', 'correct_answer' => false],
                    ['id' => 'e6b21c90-b721-559e-9311-0b4c08177f08', 'description' => 'Chromosome 7', 'correct_answer' => false],
                    ['id' => 'eb74a2ba-aff0-5b01-98f8-cf5e08035753', 'description' => 'Chromosome 13', 'correct_answer' => false]
                ]],
        ['id' => 'f5f38e54-43a9-599f-800c-1cce244fb682', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which human chromosome is present in three copies in Edwards syndrome?', 'difficulty' => 2, 'weight' => 203, 'alternatives' => [
                    ['id' => 'c1e325bf-4128-564f-bad5-3e6b68ddae76', 'description' => 'Chromosome 5', 'correct_answer' => false],
                    ['id' => '7dd7f3ed-2ec8-5deb-aae9-1666def2fd69', 'description' => 'X chromosome', 'correct_answer' => false],
                    ['id' => 'f0b98c30-be41-5d61-b1f7-adda740b5848', 'description' => 'Chromosome 21', 'correct_answer' => false],
                    ['id' => 'ee91d963-b627-5619-987d-dc476821adfb', 'description' => 'Chromosome 15', 'correct_answer' => false],
                    ['id' => 'd5f90f08-23d0-5373-9037-04c095544f05', 'description' => 'Chromosome 18', 'correct_answer' => true]
                ]],
        ['id' => 'b49a6a6b-f0ad-5c9f-a0d1-aba9edd70223', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which chromosome\'s short-arm deletion is associated with cri-du-chat syndrome?', 'difficulty' => 2, 'weight' => 265, 'alternatives' => [
                    ['id' => '9708d3a2-06df-567d-8212-d3e924341303', 'description' => 'Chromosome 21', 'correct_answer' => false],
                    ['id' => '5a2084b0-e5be-5b67-9991-e7a03f18557a', 'description' => 'Chromosome 15', 'correct_answer' => false],
                    ['id' => 'dd67d689-e95c-598f-8f5a-464b5da9de55', 'description' => 'Chromosome 18', 'correct_answer' => false],
                    ['id' => '755f985b-4cd5-5b3d-8911-2a842fd5c5cb', 'description' => 'Mitochondrial DNA', 'correct_answer' => false],
                    ['id' => '771f614d-a3ef-5e78-aaf4-1c7e4699e3e9', 'description' => 'Chromosome 5', 'correct_answer' => true]
                ]],
        ['id' => '704f557e-a775-5d71-b850-b4860ac0af09', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which human chromosome is normally passed from father to son?', 'difficulty' => 2, 'weight' => 280, 'alternatives' => [
                    ['id' => '031e4b6b-27d3-5f9e-baf5-f0499661e54f', 'description' => 'Y chromosome', 'correct_answer' => true],
                    ['id' => '7b5394da-0240-515d-9571-3fa59cf1be47', 'description' => 'Chromosome 15', 'correct_answer' => false],
                    ['id' => '7bd51149-3763-507c-a2b3-5617da13a8cc', 'description' => 'Chromosome 18', 'correct_answer' => false],
                    ['id' => 'ca3e24a7-00be-5d6c-a3ac-ab5c76a6dc36', 'description' => 'Chromosome 11', 'correct_answer' => false],
                    ['id' => 'cb92e4a0-ef62-5cfc-b3fb-4800d1c8001f', 'description' => 'X chromosome', 'correct_answer' => false]
                ]],
        ['id' => '06985a34-cd0a-5c8d-bdae-4d6c5fcc7fa1', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which chromosome contains the HBB gene associated with beta-globin production?', 'difficulty' => 2, 'weight' => 226, 'alternatives' => [
                    ['id' => 'a64a4cb0-fd29-5c92-b030-2de8b2e793db', 'description' => 'Chromosome 13', 'correct_answer' => false],
                    ['id' => '98e0c80c-ae4e-582e-ad7f-a2158d06077b', 'description' => 'Mitochondrial DNA', 'correct_answer' => false],
                    ['id' => '2ea18a18-7753-5578-bd24-c64d2700c17a', 'description' => 'Chromosome 11', 'correct_answer' => true],
                    ['id' => 'c622f115-0804-5507-8247-98eededcfe04', 'description' => 'X chromosome', 'correct_answer' => false],
                    ['id' => '144ac34b-564a-56ed-80c5-ef2134030f50', 'description' => 'Chromosome 21', 'correct_answer' => false]
                ]],
        ['id' => '6b72e986-97c5-5e04-92e6-c1da9a9390ea', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which work by Dante follows a journey through Inferno, Purgatorio, and Paradiso?', 'difficulty' => 2, 'weight' => 280, 'alternatives' => [
                    ['id' => '2aeb8d59-d122-5645-b410-483c48f14902', 'description' => 'The Canterbury Tales', 'correct_answer' => false],
                    ['id' => '4773ee33-7196-5c4a-a823-0afd5de8cc2a', 'description' => 'The Shahnameh', 'correct_answer' => false],
                    ['id' => '4fa93f33-ff81-503e-a6ee-6883b86a7687', 'description' => 'The Divine Comedy', 'correct_answer' => true],
                    ['id' => '1259dab9-545b-5e58-8a72-ffd81821a55a', 'description' => 'The Decameron', 'correct_answer' => false],
                    ['id' => '0d9a03dc-8c43-5829-bf32-ee3724aa8f4e', 'description' => 'The Epic of Gilgamesh', 'correct_answer' => false]
                ]],
        ['id' => 'e8cb6c68-b989-5abf-a611-512b07c42c41', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which Old English epic poem tells of a hero who fights Grendel, Grendel\'s mother, and a dragon?', 'difficulty' => 2, 'weight' => 256, 'alternatives' => [
                    ['id' => 'ffe0aebd-a3e8-5bad-956b-75836fa549d4', 'description' => 'Beowulf', 'correct_answer' => true],
                    ['id' => '0da88c11-44fd-5e64-b7a7-3f5c4aee5552', 'description' => 'The Epic of Gilgamesh', 'correct_answer' => false],
                    ['id' => 'a3b3738f-98f5-526d-a91f-8e9ca79e14b2', 'description' => 'The Canterbury Tales', 'correct_answer' => false],
                    ['id' => 'e217b4d8-745d-5084-a5cb-15876bbf5dce', 'description' => 'The Decameron', 'correct_answer' => false],
                    ['id' => 'e309bf99-9237-56a4-a2cb-42c6ba6fbd1d', 'description' => 'The Song of Roland', 'correct_answer' => false]
                ]],
        ['id' => '946a417a-ba0b-5104-99f3-a207f21df0db', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which Persian epic by Ferdowsi recounts the legendary and historical kings of Iran?', 'difficulty' => 2, 'weight' => 333, 'alternatives' => [
                    ['id' => 'd18149ed-b42e-5dbd-8c78-4d7e690d4b34', 'description' => 'The Shahnameh', 'correct_answer' => true],
                    ['id' => 'd518571d-11b3-5741-b3ca-b68e3d7aca0d', 'description' => 'The Epic of Gilgamesh', 'correct_answer' => false],
                    ['id' => '662d9696-433b-5778-a16c-5e7a5ba452ad', 'description' => 'Beowulf', 'correct_answer' => false],
                    ['id' => '5ece6088-27b7-5da0-b079-0325cd7e68e9', 'description' => 'The Song of Roland', 'correct_answer' => false],
                    ['id' => '9ad44315-c29f-5bea-9152-8430f079f5c9', 'description' => 'The Decameron', 'correct_answer' => false]
                ]],
        ['id' => 'e8d2b19b-2ae1-5305-9c04-bdb81ab048a2', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which work by Giovanni Boccaccio frames a collection of stories told by people sheltering from the plague?', 'difficulty' => 2, 'weight' => 363, 'alternatives' => [
                    ['id' => '20d1100d-7615-52e8-ba41-2134f8cd7dd1', 'description' => 'Beowulf', 'correct_answer' => false],
                    ['id' => '663b3047-a982-5dd9-94b4-8ce50d52eace', 'description' => 'The Decameron', 'correct_answer' => true],
                    ['id' => 'c82575c1-179d-5fda-bf89-5384580f3e1e', 'description' => 'The Odyssey', 'correct_answer' => false],
                    ['id' => 'bb1881bd-ea39-51af-9125-0af26fc4a86d', 'description' => 'The Divine Comedy', 'correct_answer' => false],
                    ['id' => '9ddb9310-eaf7-5aa9-9d9a-38ab68a5f6a4', 'description' => 'The Aeneid', 'correct_answer' => false]
                ]],
        ['id' => '8d1e6a99-5866-5702-9603-9209d2f2d417', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which medieval French epic centers on a battle in the Pyrenees and the hero Roland?', 'difficulty' => 2, 'weight' => 316, 'alternatives' => [
                    ['id' => 'e8d88aa6-ff84-5445-8ccd-f42e99a01628', 'description' => 'The Canterbury Tales', 'correct_answer' => false],
                    ['id' => '574cf926-81b6-51dd-b094-efe965ade95c', 'description' => 'The Decameron', 'correct_answer' => false],
                    ['id' => '0bde8cfa-524b-5a8d-902c-59f92f076079', 'description' => 'The Divine Comedy', 'correct_answer' => false],
                    ['id' => '769f62ff-b251-5b56-ba2f-933f2ae4f0d4', 'description' => 'The Aeneid', 'correct_answer' => false],
                    ['id' => '56f47443-d337-5fd9-ad9f-be3eec719e9b', 'description' => 'The Song of Roland', 'correct_answer' => true]
                ]],
        ['id' => 'd04b5dec-bd47-529e-8cf0-153f9fd154b9', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which ancient Greek epic focuses on events during the final year of the Trojan War?', 'difficulty' => 2, 'weight' => 352, 'alternatives' => [
                    ['id' => 'cf5ab802-c0b3-5f1c-86b1-a190f7005310', 'description' => 'The Shahnameh', 'correct_answer' => false],
                    ['id' => 'b6675878-d14d-50dc-897d-80fa1d1a45f4', 'description' => 'The Iliad', 'correct_answer' => true],
                    ['id' => '3357e3f3-8829-59b9-b0fd-08eebe041546', 'description' => 'The Epic of Gilgamesh', 'correct_answer' => false],
                    ['id' => '4969f493-f6db-5a17-b8c5-1c88089c9527', 'description' => 'The Song of Roland', 'correct_answer' => false],
                    ['id' => 'e0a5052d-1425-5659-b3a7-78db13c8f357', 'description' => 'The Aeneid', 'correct_answer' => false]
                ]],
        ['id' => 'df237d1b-4d31-513a-9f07-a5d657f8175e', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which ancient Greek epic tells of Odysseus\'s long journey home after the Trojan War?', 'difficulty' => 2, 'weight' => 251, 'alternatives' => [
                    ['id' => 'a765d36a-f39e-5034-8aef-418a94459e32', 'description' => 'The Odyssey', 'correct_answer' => true],
                    ['id' => '609286f3-496a-5c73-804a-57bb5c9af6d8', 'description' => 'The Epic of Gilgamesh', 'correct_answer' => false],
                    ['id' => 'd908f895-89af-549b-bb8e-47a9ed686b3d', 'description' => 'Beowulf', 'correct_answer' => false],
                    ['id' => '8b11005b-7ab0-51b3-8170-e573d454ffd2', 'description' => 'The Song of Roland', 'correct_answer' => false],
                    ['id' => 'd2e11e46-7dab-5742-aef0-380cd1dbe5a6', 'description' => 'The Aeneid', 'correct_answer' => false]
                ]],
        ['id' => '4b0077aa-f491-59d8-b79e-f3de2534fa94', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which work by Geoffrey Chaucer presents stories told by pilgrims traveling to Canterbury?', 'difficulty' => 2, 'weight' => 264, 'alternatives' => [
                    ['id' => 'b10265d1-354f-5d8f-87ab-23d4a3c4884a', 'description' => 'The Odyssey', 'correct_answer' => false],
                    ['id' => '550b9a07-a68e-5199-8bff-c75dff90ba4c', 'description' => 'The Decameron', 'correct_answer' => false],
                    ['id' => 'a6297048-5a5f-5978-b595-4a6278d5e9d6', 'description' => 'The Canterbury Tales', 'correct_answer' => true],
                    ['id' => '9fc28046-f4e0-55c1-bc79-378ee67dc56c', 'description' => 'Beowulf', 'correct_answer' => false],
                    ['id' => '4d128a4c-ea73-5c29-90a7-c68588bc73b8', 'description' => 'The Aeneid', 'correct_answer' => false]
                ]],
        ['id' => '908f2e2f-6875-5d78-9a8f-7ee315b1fb01', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'What is the collective name for the Roman frontier defenses along parts of the Rhine and Danube?', 'difficulty' => 3, 'weight' => 553, 'alternatives' => [
                    ['id' => 'b0aa106c-b129-5325-af9d-758766ad9df2', 'description' => 'Danewerk', 'correct_answer' => false],
                    ['id' => 'd406c622-df34-5a61-ad65-62af8408a545', 'description' => 'Theodosian Walls', 'correct_answer' => false],
                    ['id' => '05dae9c1-fe60-5fa0-a156-45566931302d', 'description' => 'Antonine Frontier', 'correct_answer' => false],
                    ['id' => 'f07b7356-cd83-59ac-9f20-e490ba158540', 'description' => 'Limes Germanicus', 'correct_answer' => true],
                    ['id' => '012f2eee-3072-5be2-8652-aa557c8b2f27', 'description' => 'Servian Wall', 'correct_answer' => false]
                ]],
        ['id' => 'e768fa57-3c00-5b4b-9885-75ac222f8dd6', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which late Roman land walls of Constantinople were built under Emperor Theodosius II?', 'difficulty' => 3, 'weight' => 459, 'alternatives' => [
                    ['id' => '6922764c-342d-534f-b0f3-0fbd6267e1e7', 'description' => 'Theodosian Walls', 'correct_answer' => true],
                    ['id' => 'cf514066-49e7-5170-8a89-51045c37bdad', 'description' => 'Antonine Wall', 'correct_answer' => false],
                    ['id' => '5a49d7ed-6330-5ab8-918a-e98b7a1ceacb', 'description' => 'Great Wall of China', 'correct_answer' => false],
                    ['id' => '21b02e5e-445f-5432-b98c-1100e4ee45e9', 'description' => 'Hadrian\'s Wall', 'correct_answer' => false],
                    ['id' => '1b5c7fa9-76d0-59eb-b4ea-22617b6f77e8', 'description' => 'Servian Wall', 'correct_answer' => false]
                ]],
        ['id' => 'a5804f26-220c-58c1-9ac5-7f8356ff8dcf', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which defensive circuit was constructed around Rome in the third century CE?', 'difficulty' => 3, 'weight' => 480, 'alternatives' => [
                    ['id' => '9436cfdd-310b-526e-8eef-e935268b1a02', 'description' => 'Servian Wall', 'correct_answer' => false],
                    ['id' => '1de75dc1-4d2f-5e9a-84c2-0dcc91cc2c82', 'description' => 'Hadrian\'s Wall', 'correct_answer' => false],
                    ['id' => 'cba71d4b-51c5-5af5-b81f-981489e22a64', 'description' => 'Aurelian Walls', 'correct_answer' => true],
                    ['id' => '69cbc43f-b028-5428-b1af-a2d9ccfb8582', 'description' => 'Antonine Frontier', 'correct_answer' => false],
                    ['id' => '9dcf3e9e-a7b1-55a9-bc41-97dcb6d96329', 'description' => 'Limes Germanicus', 'correct_answer' => false]
                ]],
        ['id' => '228989be-b2c8-5c34-9217-79f87dd5bab7', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which monumental defensive walls protected the Byzantine capital for centuries?', 'difficulty' => 3, 'weight' => 433, 'alternatives' => [
                    ['id' => '735391c6-5c27-52f1-99c4-bccaebb1d903', 'description' => 'Servian Wall', 'correct_answer' => false],
                    ['id' => 'e99f9f78-f1ed-5597-adba-8375fae77c06', 'description' => 'Limes Germanicus', 'correct_answer' => false],
                    ['id' => 'aba84c73-0738-508f-ab0c-2b41fd7a37ea', 'description' => 'Walls of Constantinople', 'correct_answer' => true],
                    ['id' => 'ac666550-54e5-5e2a-8564-7d7b1063ff38', 'description' => 'Theodosian Walls', 'correct_answer' => false],
                    ['id' => '3ecdc175-fbc1-51ad-95cb-244b424fa136', 'description' => 'Antonine Frontier', 'correct_answer' => false]
                ]],
        ['id' => '6fdfe6c0-7e9b-56e8-bd46-d594ecfc5bd6', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which early defensive wall traditionally attributed to Rome\'s sixth king enclosed the city before the later imperial walls?', 'difficulty' => 3, 'weight' => 515, 'alternatives' => [
                    ['id' => '0820e27f-a821-54b2-9ea9-f8eb084073df', 'description' => 'Limes Germanicus', 'correct_answer' => false],
                    ['id' => '84995443-f612-50f2-ae45-7d4a17195912', 'description' => 'Danewerk', 'correct_answer' => false],
                    ['id' => '5d61959f-5a2a-5417-825a-566bbaf0da20', 'description' => 'Antonine Wall', 'correct_answer' => false],
                    ['id' => '61f17e42-3d8e-5b0d-82e9-f0b3daf51d57', 'description' => 'Servian Wall', 'correct_answer' => true],
                    ['id' => '97eceb88-74fc-596c-9acf-b950cd2464dd', 'description' => 'Walls of Constantinople', 'correct_answer' => false]
                ]],
        ['id' => 'e41334bc-3658-560e-820d-1d679c1ae34f', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which Roman frontier system in Scotland included forts and a turf wall across the Central Lowlands?', 'difficulty' => 3, 'weight' => 465, 'alternatives' => [
                    ['id' => 'b9c32872-8fbf-5fd1-83a8-785ba00a06a0', 'description' => 'Hadrian\'s Wall', 'correct_answer' => false],
                    ['id' => 'a71c3220-c7f3-5399-8148-9db1003163ff', 'description' => 'Antonine Frontier', 'correct_answer' => true],
                    ['id' => 'd339be35-a028-5bd9-804c-cd3b6e5deb53', 'description' => 'Theodosian Walls', 'correct_answer' => false],
                    ['id' => '708d4887-f956-5a11-82b6-a3b0dae6d55a', 'description' => 'Aurelian Walls', 'correct_answer' => false],
                    ['id' => 'a99bf625-c665-5265-bdd2-98181e586701', 'description' => 'Antonine Wall', 'correct_answer' => false]
                ]],
        ['id' => '14fd9564-fcbe-5afe-b801-9b8860601ece', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which extensive fortification system was built and rebuilt by successive Chinese states and dynasties?', 'difficulty' => 3, 'weight' => 497, 'alternatives' => [
                    ['id' => '5460d403-a946-553a-bc48-5d2941c9b092', 'description' => 'Aurelian Walls', 'correct_answer' => false],
                    ['id' => 'ab2b5d4d-656f-5283-84a1-697fe998c05e', 'description' => 'Great Wall of China', 'correct_answer' => true],
                    ['id' => 'afe320a7-b239-5872-a43b-1308922a0021', 'description' => 'Antonine Frontier', 'correct_answer' => false],
                    ['id' => '581270c0-91b6-58f6-b371-763299c95678', 'description' => 'Theodosian Walls', 'correct_answer' => false],
                    ['id' => 'cbf91e4e-f680-52a3-8b4e-37c9af5ca93c', 'description' => 'Limes Germanicus', 'correct_answer' => false]
                ]],
        ['id' => 'ab856f5b-c730-58e0-a73f-89059987acaf', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which system of Danish defensive earthworks protected the Jutland peninsula?', 'difficulty' => 3, 'weight' => 585, 'alternatives' => [
                    ['id' => '979c6c43-f785-5d19-9fd7-a1d1c9eb32b1', 'description' => 'Danewerk', 'correct_answer' => true],
                    ['id' => '349ecfad-e961-569e-a6dd-7c7102a23fb4', 'description' => 'Aurelian Walls', 'correct_answer' => false],
                    ['id' => '79e71ecd-4ca9-509a-b4f1-c775007c85ba', 'description' => 'Servian Wall', 'correct_answer' => false],
                    ['id' => '0e11925a-d4a8-522e-a0d1-702e1f175593', 'description' => 'Walls of Constantinople', 'correct_answer' => false],
                    ['id' => '869a6141-f5e1-5d6b-98a4-f2f18dd811fb', 'description' => 'Hadrian\'s Wall', 'correct_answer' => false]
                ]],
        ['id' => 'c00e71ec-7239-5a29-aa54-94692b504c04', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which elementary particle is associated with the mechanism that gives many other particles mass?', 'difficulty' => 3, 'weight' => 536, 'alternatives' => [
                    ['id' => '7ab69596-fd8c-5d8f-9263-fc4295e4d730', 'description' => 'Positron', 'correct_answer' => false],
                    ['id' => 'd2418b4b-c3e5-5115-985d-00bd68a4b076', 'description' => 'Z boson', 'correct_answer' => false],
                    ['id' => '2e756c1c-c5eb-5c5f-9438-b7c51ee5c6be', 'description' => 'Higgs boson', 'correct_answer' => true],
                    ['id' => '726cb46e-c7ab-5af3-a56d-868b91e8e2a7', 'description' => 'Muon', 'correct_answer' => false],
                    ['id' => '87dee5a9-5e88-5614-91f6-60a0c8ee5070', 'description' => 'W boson', 'correct_answer' => false]
                ]],
        ['id' => '02813430-a21c-5d96-984c-c07fe228f158', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which electrically neutral lepton interacts primarily through the weak force?', 'difficulty' => 3, 'weight' => 552, 'alternatives' => [
                    ['id' => '4710565e-f9a5-5def-aa90-b1fe28f07cb6', 'description' => 'Graviton', 'correct_answer' => false],
                    ['id' => 'd274db1c-0980-5750-a1de-83c611f802ea', 'description' => 'Gluon', 'correct_answer' => false],
                    ['id' => 'ff0f4f75-284a-5871-9a30-9ebe352afe46', 'description' => 'Positron', 'correct_answer' => false],
                    ['id' => 'dacd8d05-3c80-5314-8629-ba8752b829b5', 'description' => 'Neutrino', 'correct_answer' => true],
                    ['id' => '49f0d49c-a590-506e-83e5-67c38cb3c6a5', 'description' => 'Tau lepton', 'correct_answer' => false]
                ]],
        ['id' => 'b8a98e00-6bfc-5981-ae09-d904471813a8', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which massless elementary particle is the quantum of the electromagnetic field?', 'difficulty' => 3, 'weight' => 530, 'alternatives' => [
                    ['id' => '9d75ccda-ae5a-5442-97e6-8cb09bf3b10c', 'description' => 'Graviton', 'correct_answer' => false],
                    ['id' => 'e6dc6d03-e3d7-5851-91be-402a009ae1a3', 'description' => 'Photon', 'correct_answer' => true],
                    ['id' => '52fefda0-515b-56d7-b0ad-21eb16541cfd', 'description' => 'Gluon', 'correct_answer' => false],
                    ['id' => '0216335c-8ca9-5c7d-8899-e8c863a93d89', 'description' => 'W boson', 'correct_answer' => false],
                    ['id' => '710482f6-24e5-5901-b1f2-da63ac8ed018', 'description' => 'Higgs boson', 'correct_answer' => false]
                ]],
        ['id' => '77aa0f93-3085-58c5-958a-efdf7dbf021f', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which electrically neutral boson mediates the neutral weak interaction?', 'difficulty' => 3, 'weight' => 577, 'alternatives' => [
                    ['id' => '3f9ac2b4-5bfa-5fec-9876-f0071dfd75b0', 'description' => 'Z boson', 'correct_answer' => true],
                    ['id' => 'd24ff600-d4ee-5cb9-bc34-27ab7b40fe23', 'description' => 'Graviton', 'correct_answer' => false],
                    ['id' => 'e0ea158e-114e-5dda-9b48-f36115e5bcf0', 'description' => 'Positron', 'correct_answer' => false],
                    ['id' => '3f50cd3c-bb6a-5f89-955e-c58e215d5f75', 'description' => 'Neutrino', 'correct_answer' => false],
                    ['id' => '47672cb2-c4c6-576f-a1d9-de4d94fae959', 'description' => 'Tau lepton', 'correct_answer' => false]
                ]],
        ['id' => 'c00a54ca-5ad0-5128-b333-9a655c734bc9', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'What is the antiparticle of the electron?', 'difficulty' => 3, 'weight' => 418, 'alternatives' => [
                    ['id' => '09aa34c9-3b72-56ff-b059-7bcd2a5ae782', 'description' => 'Muon', 'correct_answer' => false],
                    ['id' => 'dcb10e82-fe55-5568-b9fd-82d96d5c6ed3', 'description' => 'Neutrino', 'correct_answer' => false],
                    ['id' => '8e90cc48-40d2-5ab5-93ac-a2fc87b7f48a', 'description' => 'W boson', 'correct_answer' => false],
                    ['id' => 'c931827f-9410-5f81-82fa-97230baa21ae', 'description' => 'Positron', 'correct_answer' => true],
                    ['id' => '1786dee1-13a8-5564-bbb9-09118ae5de18', 'description' => 'Higgs boson', 'correct_answer' => false]
                ]],
        ['id' => '0f3386e3-9673-571c-b68b-2b74fe2df7c8', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which elementary particle mediates the charged weak interaction?', 'difficulty' => 3, 'weight' => 459, 'alternatives' => [
                    ['id' => '7ac0cb74-19d8-5a8e-a88f-7ae3f1eea7f2', 'description' => 'Positron', 'correct_answer' => false],
                    ['id' => 'e5959fe5-46c2-5bd2-8d84-ae5f186f6444', 'description' => 'Graviton', 'correct_answer' => false],
                    ['id' => 'd54782ca-9c56-5d75-90af-ae86342bf73d', 'description' => 'W boson', 'correct_answer' => true],
                    ['id' => '01735b45-d3f0-5222-9139-214dc81c3937', 'description' => 'Neutrino', 'correct_answer' => false],
                    ['id' => 'd6ff2135-65d2-580a-89d5-58620f452fad', 'description' => 'Z boson', 'correct_answer' => false]
                ]],
        ['id' => '862ebed5-ccd5-5261-af66-88c037b82149', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which charged lepton is similar to an electron but much more massive?', 'difficulty' => 3, 'weight' => 494, 'alternatives' => [
                    ['id' => 'b53109a1-95eb-5776-9dbf-a40e619a1c66', 'description' => 'Muon', 'correct_answer' => true],
                    ['id' => 'a6cf1aaa-4014-5419-9bc6-7f914c84324b', 'description' => 'Gluon', 'correct_answer' => false],
                    ['id' => 'c30652e6-2e44-5847-8a5f-56071f5c9493', 'description' => 'Positron', 'correct_answer' => false],
                    ['id' => '2fbdc9f0-a08e-5c30-b947-e30da256141a', 'description' => 'Tau lepton', 'correct_answer' => false],
                    ['id' => '0ea0e3ef-ee6d-5516-800d-ecc0727797e7', 'description' => 'W boson', 'correct_answer' => false]
                ]],
        ['id' => '9c9a384a-a299-5be6-b74f-d3a68eac10de', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'What hypothetical quantum particle is proposed as the carrier of gravity?', 'difficulty' => 3, 'weight' => 523, 'alternatives' => [
                    ['id' => '5e24001f-d664-5c98-9315-b6a058210386', 'description' => 'Muon', 'correct_answer' => false],
                    ['id' => 'b288f632-2d49-55c5-86a1-4fedd4e229f7', 'description' => 'Higgs boson', 'correct_answer' => false],
                    ['id' => 'ef61a7b6-a204-5ec8-b921-de558876f939', 'description' => 'Graviton', 'correct_answer' => true],
                    ['id' => '61604150-a4a6-5dac-b325-717ae918b993', 'description' => 'Gluon', 'correct_answer' => false],
                    ['id' => 'bbf7bf3a-06c4-5222-ba1c-9dfbb1da86bd', 'description' => 'Tau lepton', 'correct_answer' => false]
                ]],
        ['id' => 'b1073a14-802b-5247-82de-91952334f701', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which 1648 settlement ended the Thirty Years\' War in the Holy Roman Empire and reshaped European diplomacy?', 'difficulty' => 3, 'weight' => 534, 'alternatives' => [
                    ['id' => 'bf096955-458d-5f69-aded-902cd54b4a29', 'description' => 'The Treaty of Utrecht', 'correct_answer' => false],
                    ['id' => '3fc9b4a7-b6e1-59d4-9f1f-758db82fb004', 'description' => 'The Treaty of Brest-Litovsk', 'correct_answer' => false],
                    ['id' => 'c53ff28f-58db-59c1-95c6-9748a0352002', 'description' => 'The Treaty of Ghent', 'correct_answer' => false],
                    ['id' => '5aedb71a-80f4-58ac-9585-ca42b1f92b25', 'description' => 'The Peace of Westphalia', 'correct_answer' => true],
                    ['id' => 'a0923358-2d14-5da6-a4f6-9b51d2aec5f9', 'description' => 'The Treaty of Tordesillas', 'correct_answer' => false]
                ]],
        ['id' => '746c617f-de70-5b1b-8243-054b9e983538', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which 1848 treaty ended the Mexican-American War and transferred a vast territory to the United States?', 'difficulty' => 3, 'weight' => 514, 'alternatives' => [
                    ['id' => '8c32bc2c-07e8-5b54-aca2-b7585c775f9c', 'description' => 'The Peace of Westphalia', 'correct_answer' => false],
                    ['id' => 'acc63c74-af09-5095-889b-df9132205c9d', 'description' => 'The Treaty of Guadalupe Hidalgo', 'correct_answer' => true],
                    ['id' => 'e2c8ec3b-1f76-51d2-871e-fa4fd97d4cc9', 'description' => 'The Treaty of Ghent', 'correct_answer' => false],
                    ['id' => '5acafbf2-ff95-5fac-8d78-30633737add8', 'description' => 'The Treaty of Lausanne', 'correct_answer' => false],
                    ['id' => '0d7309e5-4c12-5620-b6a8-329ba2dcc739', 'description' => 'The Treaty of Nanking', 'correct_answer' => false]
                ]],
        ['id' => 'e492282c-3e9c-5c5d-9f0a-d7901efdfd48', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which 1842 treaty ended the First Opium War and ceded Hong Kong Island to Britain?', 'difficulty' => 3, 'weight' => 494, 'alternatives' => [
                    ['id' => '9e9f64ed-d0ce-505a-8e32-0899fadb51d3', 'description' => 'The Treaty of Lausanne', 'correct_answer' => false],
                    ['id' => '25372ec1-a37f-5b95-83bb-88ac9f527921', 'description' => 'The Treaty of Guadalupe Hidalgo', 'correct_answer' => false],
                    ['id' => '3a2f1fa3-87f8-5fb1-aa52-5f14ed7b95f2', 'description' => 'The Treaty of Paris (1763)', 'correct_answer' => false],
                    ['id' => '29e8268b-9dca-5308-bc51-ea73914da010', 'description' => 'The Treaty of Nanking', 'correct_answer' => true],
                    ['id' => '70bba924-97af-59cd-9c66-4578d56100a5', 'description' => 'The Treaty of Brest-Litovsk', 'correct_answer' => false]
                ]],
        ['id' => '6bb7124f-c630-500e-9a35-2ac6386f35e5', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which 1918 treaty took Soviet Russia out of World War I?', 'difficulty' => 3, 'weight' => 568, 'alternatives' => [
                    ['id' => 'c7a39d83-374a-5ddc-b843-fed95591753c', 'description' => 'The Treaty of Paris (1763)', 'correct_answer' => false],
                    ['id' => '17fc3a82-ba5f-556b-bbfd-8c99443abe33', 'description' => 'The Treaty of Versailles', 'correct_answer' => false],
                    ['id' => '688b9857-fc39-594f-b128-32951f94258d', 'description' => 'The Treaty of Utrecht', 'correct_answer' => false],
                    ['id' => '87876bb7-e5e7-5815-8cb8-ed46a84c8741', 'description' => 'The Treaty of Brest-Litovsk', 'correct_answer' => true],
                    ['id' => '3d8fcccd-f751-545f-980c-d0b5908a90bc', 'description' => 'The Peace of Westphalia', 'correct_answer' => false]
                ]],
        ['id' => '5eb05f5a-d4f5-5ab4-b35f-b5d15c22909f', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which 1919 treaty formally ended the state of war between Germany and the Allied Powers after World War I?', 'difficulty' => 3, 'weight' => 404, 'alternatives' => [
                    ['id' => '04326a9e-48c8-5d18-a890-ce82fa11e9ba', 'description' => 'The Peace of Westphalia', 'correct_answer' => false],
                    ['id' => '018953dc-ab79-51bf-acac-51f7b242f929', 'description' => 'The Treaty of Utrecht', 'correct_answer' => false],
                    ['id' => '8cce77e4-57c8-5c8c-a498-73f0d96c7102', 'description' => 'The Treaty of Versailles', 'correct_answer' => true],
                    ['id' => '300200cf-fcbe-5b4c-8856-7f43069f541c', 'description' => 'The Treaty of Brest-Litovsk', 'correct_answer' => false],
                    ['id' => '6944bc3e-ac51-5672-aaf0-06de3775ab1a', 'description' => 'The Treaty of Nanking', 'correct_answer' => false]
                ]],
        ['id' => '843ea69e-416a-5efb-a76e-101e28af25fb', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which 1923 treaty internationally recognized the borders of the modern Republic of Türkiye?', 'difficulty' => 3, 'weight' => 556, 'alternatives' => [
                    ['id' => '3140b0b8-0f87-55ca-a358-87ed2f6f6028', 'description' => 'The Treaty of Tordesillas', 'correct_answer' => false],
                    ['id' => 'fd9a9412-f815-54b6-9dd0-6ae9e4de163c', 'description' => 'The Treaty of Utrecht', 'correct_answer' => false],
                    ['id' => '75d52e76-d7e8-50b4-8c1a-3de44ff9f284', 'description' => 'The Treaty of Lausanne', 'correct_answer' => true],
                    ['id' => 'b279d0f0-174e-53b5-847a-a09fe3270a30', 'description' => 'The Treaty of Ghent', 'correct_answer' => false],
                    ['id' => 'cdba6b18-787b-5b15-a386-2985f1cc57ea', 'description' => 'The Treaty of Guadalupe Hidalgo', 'correct_answer' => false]
                ]],
        ['id' => '3d0fd2ae-56b3-5640-a8a8-1f0a3cbff770', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which 1494 agreement divided newly claimed lands outside Europe between the Spanish and Portuguese crowns?', 'difficulty' => 3, 'weight' => 497, 'alternatives' => [
                    ['id' => '2e448902-9644-50fe-afd6-f76feb6b746b', 'description' => 'The Peace of Westphalia', 'correct_answer' => false],
                    ['id' => '0c7fadfd-f236-5c3d-bb90-5910fdc6d43a', 'description' => 'The Treaty of Utrecht', 'correct_answer' => false],
                    ['id' => 'e09e3687-10eb-5b53-9bad-70d310b52d92', 'description' => 'The Treaty of Paris (1763)', 'correct_answer' => false],
                    ['id' => 'b5b50c81-bfa9-56ec-a54c-72358951ecc5', 'description' => 'The Treaty of Guadalupe Hidalgo', 'correct_answer' => false],
                    ['id' => '6282c430-e264-5961-8908-5730941f2ce5', 'description' => 'The Treaty of Tordesillas', 'correct_answer' => true]
                ]],
        ['id' => 'c6e297d7-c29a-50cc-8298-81393168659b', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which agreement ended the Seven Years\' War and transferred Canada from France to Britain?', 'difficulty' => 3, 'weight' => 522, 'alternatives' => [
                    ['id' => '5c864b7f-35c1-5c26-acca-114ff5487518', 'description' => 'The Treaty of Paris (1763)', 'correct_answer' => true],
                    ['id' => '616d5e27-0e36-568f-a040-50766a2b6760', 'description' => 'The Treaty of Brest-Litovsk', 'correct_answer' => false],
                    ['id' => 'a82bcc3c-0907-5419-bb82-c37e78d6d220', 'description' => 'The Treaty of Guadalupe Hidalgo', 'correct_answer' => false],
                    ['id' => 'd0cc1f9a-d427-5289-b7dd-6e431c987aaa', 'description' => 'The Treaty of Versailles', 'correct_answer' => false],
                    ['id' => '6916b251-b491-5346-9017-60d3e12ee42a', 'description' => 'The Treaty of Tordesillas', 'correct_answer' => false]
                ]],
        ['id' => 'ff245b9a-60ca-5fb8-adbb-96206c3f4feb', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which Uralic language is the official language of Estonia?', 'difficulty' => 3, 'weight' => 572, 'alternatives' => [
                    ['id' => 'f8833439-b7b6-5bb9-bdac-5fa4caab0975', 'description' => 'Basque', 'correct_answer' => false],
                    ['id' => 'fa06a392-285b-5c46-a5b9-213d8699c3c3', 'description' => 'Estonian', 'correct_answer' => true],
                    ['id' => 'e45050ed-d5e6-5c5f-a1fa-d38fe3c14010', 'description' => 'Albanian', 'correct_answer' => false],
                    ['id' => '6519eb5f-d412-5739-9215-fdf53f21ccac', 'description' => 'Welsh', 'correct_answer' => false],
                    ['id' => 'e828fc2f-7383-51b4-919e-fa7c7484ca99', 'description' => 'Hungarian', 'correct_answer' => false]
                ]],
        ['id' => '81ab4c66-95bc-58a4-bcd9-19c01c4b1f61', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which Uralic language is the majority language of Finland?', 'difficulty' => 3, 'weight' => 449, 'alternatives' => [
                    ['id' => '0ed3de5a-6c37-55c8-9373-f992905e7f70', 'description' => 'Georgian', 'correct_answer' => false],
                    ['id' => 'f558ba3c-a98d-5bff-b38d-78d707e65d36', 'description' => 'Albanian', 'correct_answer' => false],
                    ['id' => 'f977d3f6-390d-59ec-a4f8-24ee252e7c45', 'description' => 'Maltese', 'correct_answer' => false],
                    ['id' => '7ffac91f-37b2-5d53-98e1-7a417f51baed', 'description' => 'Finnish', 'correct_answer' => true],
                    ['id' => 'cd461e92-3c81-59d7-a8b7-0cdddc562906', 'description' => 'Armenian', 'correct_answer' => false]
                ]],
        ['id' => 'a3974809-0cfa-5c96-b5de-2abeb257d64e', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which Kartvelian language is the official language of Georgia and uses its own script?', 'difficulty' => 3, 'weight' => 466, 'alternatives' => [
                    ['id' => 'c1d7ff0d-5c05-503e-8799-ce6a85359aab', 'description' => 'Welsh', 'correct_answer' => false],
                    ['id' => 'c5033efc-d63a-56db-b58f-dc2e1246d130', 'description' => 'Finnish', 'correct_answer' => false],
                    ['id' => '4e1d46db-dfbb-5d6b-a9e7-52f8e0703c15', 'description' => 'Georgian', 'correct_answer' => true],
                    ['id' => 'a4ebb1b9-6a83-588d-a8ff-ef5b6c3949fc', 'description' => 'Maltese', 'correct_answer' => false],
                    ['id' => 'b61f5118-2d14-5030-b900-c0629711a69e', 'description' => 'Basque', 'correct_answer' => false]
                ]],
        ['id' => '1f2e12b6-b9d1-5959-83af-a2e743acd934', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which Goidelic Celtic language is a first official language of Ireland?', 'difficulty' => 3, 'weight' => 571, 'alternatives' => [
                    ['id' => '2a4f4645-a456-5858-b9d6-f6c5442fe6e8', 'description' => 'Finnish', 'correct_answer' => false],
                    ['id' => 'fc63417f-b29b-5cd4-9e9c-3890f9794ff1', 'description' => 'Albanian', 'correct_answer' => false],
                    ['id' => 'f8c38713-fa12-5adc-95bd-1cd799464ce2', 'description' => 'Irish', 'correct_answer' => true],
                    ['id' => 'e8ae8614-2f34-5b60-8516-6d83b248b858', 'description' => 'Hungarian', 'correct_answer' => false],
                    ['id' => 'd9b87df5-3eef-5e39-be59-4932982cca61', 'description' => 'Georgian', 'correct_answer' => false]
                ]],
        ['id' => '0ff4fcfd-b41b-5d5b-879d-27293cb9f7af', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which Semitic language is an official language of Malta and is written in the Latin alphabet?', 'difficulty' => 3, 'weight' => 420, 'alternatives' => [
                    ['id' => '011bf864-86ad-5909-a5a2-7e0c21c07687', 'description' => 'Maltese', 'correct_answer' => true],
                    ['id' => '36a8c7b3-fb63-5847-8b87-182eadeca9ff', 'description' => 'Estonian', 'correct_answer' => false],
                    ['id' => '46416ec9-3991-52ad-b2eb-47f1268d2adb', 'description' => 'Finnish', 'correct_answer' => false],
                    ['id' => 'e99b6948-45f5-5cad-a03c-9e8411c10424', 'description' => 'Armenian', 'correct_answer' => false],
                    ['id' => '9fd502b5-2838-5ad3-bbaf-b86462cec61f', 'description' => 'Georgian', 'correct_answer' => false]
                ]],
        ['id' => '59d916dd-f48c-568e-9af1-cf0c90f96213', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which Indo-European language forms its own independent branch and is the official language of Albania?', 'difficulty' => 3, 'weight' => 537, 'alternatives' => [
                    ['id' => '128b4ef6-a613-506c-b5ad-1f9d41aef4e6', 'description' => 'Georgian', 'correct_answer' => false],
                    ['id' => '888e509e-8c55-5261-b976-29fc9fc0e6ff', 'description' => 'Estonian', 'correct_answer' => false],
                    ['id' => 'ed6dc22b-5771-51e8-82ba-17ff72285a9a', 'description' => 'Hungarian', 'correct_answer' => false],
                    ['id' => 'c9f75270-307f-5f0b-975a-4038ab41363e', 'description' => 'Irish', 'correct_answer' => false],
                    ['id' => '07e02691-f0e0-5dba-ba8b-92e9a6699d66', 'description' => 'Albanian', 'correct_answer' => true]
                ]],
        ['id' => '79a01486-5a33-5b66-b967-2cd498508b21', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which Indo-European language has its own distinctive alphabet created in the early fifth century?', 'difficulty' => 3, 'weight' => 565, 'alternatives' => [
                    ['id' => 'b503646f-b45d-566d-a9f3-c91a4a536db2', 'description' => 'Georgian', 'correct_answer' => false],
                    ['id' => 'cd395755-6008-5ac3-a73e-bbff60246267', 'description' => 'Albanian', 'correct_answer' => false],
                    ['id' => '882153a5-fd47-5625-8a0c-2ede55bc962e', 'description' => 'Hungarian', 'correct_answer' => false],
                    ['id' => '309a2e1a-1bca-53b4-8aac-ac6a5ca05ffe', 'description' => 'Armenian', 'correct_answer' => true],
                    ['id' => 'e543f5d7-8c9e-599d-a066-ef3bfa7c5dbb', 'description' => 'Basque', 'correct_answer' => false]
                ]],
        ['id' => 'e3c30288-3e4e-5069-bbf9-e2ea951fae97', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which Uralic language is the official language of Hungary?', 'difficulty' => 3, 'weight' => 558, 'alternatives' => [
                    ['id' => '17ca8806-e517-5999-93e6-a62cf5a2616a', 'description' => 'Hungarian', 'correct_answer' => true],
                    ['id' => '0abf3e0d-50be-5292-8c74-02b7fe93efe7', 'description' => 'Maltese', 'correct_answer' => false],
                    ['id' => '90eb209d-c537-56bb-b318-762e530e94e8', 'description' => 'Estonian', 'correct_answer' => false],
                    ['id' => '7b4c329a-e976-5df0-9e7c-1b5c5c84e0f8', 'description' => 'Finnish', 'correct_answer' => false],
                    ['id' => 'ddc0e07a-b483-52a5-9d8e-991a1441953e', 'description' => 'Irish', 'correct_answer' => false]
                ]],
        ['id' => '10db8801-0b66-5c2b-a9b4-9a6327d4d815', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which ancient Maya city, located in present-day Honduras, is known for its hieroglyphic stairway?', 'difficulty' => 3, 'weight' => 530, 'alternatives' => [
                    ['id' => 'a6f05ea6-af6f-5e3f-b1d3-6a0b95bb2be2', 'description' => 'Copán', 'correct_answer' => true],
                    ['id' => '8cf006ba-c570-5105-9ebf-0a16ef67145f', 'description' => 'Calakmul', 'correct_answer' => false],
                    ['id' => '6a526bf6-fb76-5c09-8403-31dfa8be2f64', 'description' => 'Teotihuacan', 'correct_answer' => false],
                    ['id' => 'a6bf17a1-58c3-5d88-96e7-9ed0ff7be329', 'description' => 'Cusco', 'correct_answer' => false],
                    ['id' => '1b337326-2a83-5b39-a574-27672db76fcd', 'description' => 'Monte Albán', 'correct_answer' => false]
                ]],
        ['id' => '1c6864b6-4325-5a58-8985-cd6448e61003', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which Maya city in present-day Chiapas is associated with the ruler K\'inich Janaab\' Pakal?', 'difficulty' => 3, 'weight' => 512, 'alternatives' => [
                    ['id' => 'e6636b1d-4db1-529f-a24a-e613d13074d9', 'description' => 'Calakmul', 'correct_answer' => false],
                    ['id' => 'e584ed1e-704b-5130-baa8-b8a6c557a723', 'description' => 'Teotihuacan', 'correct_answer' => false],
                    ['id' => 'a2063318-a768-51c6-ba9a-c354fad552a7', 'description' => 'Palenque', 'correct_answer' => true],
                    ['id' => 'b8b08fec-69b0-593f-80b5-567aeeb0a4de', 'description' => 'Chichen Itza', 'correct_answer' => false],
                    ['id' => '59f9de2c-9d53-590e-a8c2-940f3b4abca9', 'description' => 'Monte Albán', 'correct_answer' => false]
                ]],
        ['id' => '6d84e2c6-0d23-5222-9bab-9eeacc63bba9', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which major Maya city in the Yucatán Peninsula is famous for the pyramid of Kukulcán?', 'difficulty' => 3, 'weight' => 513, 'alternatives' => [
                    ['id' => '3aaeab36-8526-55ad-914c-6edfebdc171a', 'description' => 'Cusco', 'correct_answer' => false],
                    ['id' => '3fde8009-6632-5774-813f-90327d0b633e', 'description' => 'Monte Albán', 'correct_answer' => false],
                    ['id' => 'c45f874b-7a38-5964-98c1-f8ad227203c4', 'description' => 'Palenque', 'correct_answer' => false],
                    ['id' => 'd39aa763-0772-55a2-bc35-b1bead9b38e4', 'description' => 'Copán', 'correct_answer' => false],
                    ['id' => '34dece17-73c8-54e2-a279-29373c045465', 'description' => 'Chichen Itza', 'correct_answer' => true]
                ]],
        ['id' => '31f02721-8451-52c6-9b0a-caf4ac419f09', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which ancient Zapotec capital was built on a flattened hilltop in the Valley of Oaxaca?', 'difficulty' => 3, 'weight' => 542, 'alternatives' => [
                    ['id' => '469bd9a7-c752-5b7e-9460-4a2f67a3e0e7', 'description' => 'Caral', 'correct_answer' => false],
                    ['id' => 'a4d0f348-2270-5d21-b76b-37515860c5a4', 'description' => 'Copán', 'correct_answer' => false],
                    ['id' => '758b9743-2cb4-5ff4-bb05-09fbece631ec', 'description' => 'Tenochtitlan', 'correct_answer' => false],
                    ['id' => 'b50892ed-5d38-5f15-af04-075a7899070d', 'description' => 'Monte Albán', 'correct_answer' => true],
                    ['id' => 'f9ca604a-005e-5dfa-986c-cb9da7c61cb8', 'description' => 'Cusco', 'correct_answer' => false]
                ]],
        ['id' => '191bba71-62ad-5076-bb14-5bf9327d8421', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which ancient urban center in Peru is associated with one of the oldest known civilizations in the Americas?', 'difficulty' => 3, 'weight' => 472, 'alternatives' => [
                    ['id' => '840c11f6-584d-59d5-88d2-2b1d0cb2f737', 'description' => 'Palenque', 'correct_answer' => false],
                    ['id' => 'ac492640-c676-54f6-b392-83bf99760cf5', 'description' => 'Caral', 'correct_answer' => true],
                    ['id' => '02e632de-0a46-5f45-bcc5-30955af334ae', 'description' => 'Calakmul', 'correct_answer' => false],
                    ['id' => 'cff9c821-92f8-5e83-aeed-0c4fc86cc65c', 'description' => 'Tikal', 'correct_answer' => false],
                    ['id' => '1569d85b-149c-50ef-a304-5c6bd015242b', 'description' => 'Chichen Itza', 'correct_answer' => false]
                ]],
        ['id' => 'c3bec6f7-877e-5d9a-8827-1e0950bc13b4', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which ancient Mesoamerican city is known for the Pyramid of the Sun and the Pyramid of the Moon?', 'difficulty' => 3, 'weight' => 493, 'alternatives' => [
                    ['id' => 'af996409-fbbb-5946-95ce-ab5c7013ae32', 'description' => 'Teotihuacan', 'correct_answer' => true],
                    ['id' => '3f968135-2914-56f7-a7ba-7fc591f93a97', 'description' => 'Palenque', 'correct_answer' => false],
                    ['id' => '86344709-6d0c-5d0c-bf63-485b469a6d56', 'description' => 'Caral', 'correct_answer' => false],
                    ['id' => 'c1104a94-685e-5be2-8115-7256cc6c281d', 'description' => 'Monte Albán', 'correct_answer' => false],
                    ['id' => '2a663ae9-ec48-528c-b1d1-939d5b2137e8', 'description' => 'Cusco', 'correct_answer' => false]
                ]],
        ['id' => '17929555-8dee-5a25-8fbd-cb3b26f9eedc', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'What was the capital city of the Aztec Empire, located on an island in Lake Texcoco?', 'difficulty' => 3, 'weight' => 590, 'alternatives' => [
                    ['id' => '33d5ab45-e387-5ddb-a261-46e2165eb2c6', 'description' => 'Cusco', 'correct_answer' => false],
                    ['id' => 'a85963cf-a50d-593c-88cf-138ca271e941', 'description' => 'Calakmul', 'correct_answer' => false],
                    ['id' => 'a16da022-6734-50de-83f5-7037ecc5dfdf', 'description' => 'Copán', 'correct_answer' => false],
                    ['id' => '6e4b33bf-af43-5e8d-8edd-5cb8d65aa2c3', 'description' => 'Tenochtitlan', 'correct_answer' => true],
                    ['id' => '79ee9ea6-1a11-5ef3-b58b-0de0fb083bb5', 'description' => 'Caral', 'correct_answer' => false]
                ]],
        ['id' => '9d756e84-8bb0-54f3-a0d0-3e92f47da0e8', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which major ancient Maya city is located in present-day Guatemala?', 'difficulty' => 3, 'weight' => 575, 'alternatives' => [
                    ['id' => 'a5d43d30-dcb6-5786-81cd-d7441b7d0ef7', 'description' => 'Caral', 'correct_answer' => false],
                    ['id' => '1ac810b0-6e3d-57eb-be02-addde34a98de', 'description' => 'Tenochtitlan', 'correct_answer' => false],
                    ['id' => 'c6c572a0-7322-5175-a440-97dd996d2f66', 'description' => 'Tikal', 'correct_answer' => true],
                    ['id' => '7f820ceb-59dd-518a-b740-c2bac0e9eb4c', 'description' => 'Cusco', 'correct_answer' => false],
                    ['id' => '23a86c98-0a9e-5cce-a2b8-0954a95bde37', 'description' => 'Calakmul', 'correct_answer' => false]
                ]],
        ['id' => '612979aa-2d36-534d-bb3b-60ce37c78e0a', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which Persian empire ruled from the third to seventh centuries CE before the Arab-Muslim conquests?', 'difficulty' => 4, 'weight' => 751, 'alternatives' => [
                    ['id' => '8e0e4db3-c99c-594e-a49a-2febd5014ecf', 'description' => 'Maurya Empire', 'correct_answer' => false],
                    ['id' => 'a3921ae0-d97b-50d6-a5fd-a76e12d7e337', 'description' => 'Gupta Empire', 'correct_answer' => false],
                    ['id' => '2774ab9b-68b7-51c1-8ed4-8b320be12913', 'description' => 'Sasanian Empire', 'correct_answer' => true],
                    ['id' => '2a6e298e-d6b1-5b05-ab66-ba39ff5da93d', 'description' => 'Parthian Empire', 'correct_answer' => false],
                    ['id' => '0f02249b-4f64-5e2a-83f1-d88243024307', 'description' => 'Antigonid Kingdom', 'correct_answer' => false]
                ]],
        ['id' => '9bdda0c2-c4b0-5183-9bcf-75653e9ed0a7', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which ancient Indian empire was founded by Chandragupta Maurya and later ruled by Ashoka?', 'difficulty' => 4, 'weight' => 729, 'alternatives' => [
                    ['id' => '1c22c5c1-cfdc-5924-b0a1-aa153592aa5a', 'description' => 'Xiongnu Confederation', 'correct_answer' => false],
                    ['id' => '43b0a110-f062-5f80-9fbf-5733af542cb4', 'description' => 'Antigonid Kingdom', 'correct_answer' => false],
                    ['id' => 'a677024c-e21f-5012-b405-714c142813ad', 'description' => 'Maurya Empire', 'correct_answer' => true],
                    ['id' => '95c2b5e4-bba5-50c7-8140-b96210231b1a', 'description' => 'Kushan Empire', 'correct_answer' => false],
                    ['id' => '789a46f0-a515-5240-b1fc-76f378c3d40e', 'description' => 'Gupta Empire', 'correct_answer' => false]
                ]],
        ['id' => '872d73fd-5360-5f27-a4e8-59820ed988da', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which empire under rulers such as Kanishka controlled parts of Central and South Asia and supported Buddhist institutions?', 'difficulty' => 4, 'weight' => 640, 'alternatives' => [
                    ['id' => '14634cb1-ee56-5947-992b-b18827992538', 'description' => 'Ptolemaic Kingdom', 'correct_answer' => false],
                    ['id' => '3da5904e-b9ae-52b8-b7e8-dc82cb7ee7df', 'description' => 'Antigonid Kingdom', 'correct_answer' => false],
                    ['id' => '797a778f-5351-5fcb-bf8a-97d4a8db3dbc', 'description' => 'Seleucid Empire', 'correct_answer' => false],
                    ['id' => '2b7af248-577a-5e4e-b6ee-0d6f3f0c96a1', 'description' => 'Kushan Empire', 'correct_answer' => true],
                    ['id' => '74afad84-18cd-5ff6-a215-dfb96c9e80f3', 'description' => 'Sasanian Empire', 'correct_answer' => false]
                ]],
        ['id' => 'a2813cd6-691b-57e4-b7e4-be654161ab3b', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which ancient Indian empire is often associated with a classical age of Sanskrit literature, science, and art?', 'difficulty' => 4, 'weight' => 764, 'alternatives' => [
                    ['id' => '74a6956d-f5d9-56ea-8d14-0d282753f96f', 'description' => 'Gupta Empire', 'correct_answer' => true],
                    ['id' => '351bcd41-63d9-5af4-ac46-f997910b1958', 'description' => 'Kushan Empire', 'correct_answer' => false],
                    ['id' => '90df95a5-a48e-5d1a-b99b-61ca700d31b2', 'description' => 'Sasanian Empire', 'correct_answer' => false],
                    ['id' => '0270e402-eee0-5bb7-99e4-9aa149ede6cc', 'description' => 'Ptolemaic Kingdom', 'correct_answer' => false],
                    ['id' => '868fcfd8-8791-5823-bc8e-a747e38ea304', 'description' => 'Seleucid Empire', 'correct_answer' => false]
                ]],
        ['id' => 'd5c0e3a1-d0aa-50a4-b9a3-d6677c6f1e55', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which Persian empire was founded by Cyrus the Great and later ruled by Darius I and Xerxes I?', 'difficulty' => 4, 'weight' => 693, 'alternatives' => [
                    ['id' => 'a0013f05-8bb7-53ab-9d6d-f3dc0a58a99d', 'description' => 'Achaemenid Empire', 'correct_answer' => true],
                    ['id' => '5ce8a928-378a-5f26-8d76-e5eae93a8099', 'description' => 'Sasanian Empire', 'correct_answer' => false],
                    ['id' => '2dc3ea45-5748-52c7-928e-3615da010887', 'description' => 'Ptolemaic Kingdom', 'correct_answer' => false],
                    ['id' => 'fac46c0f-f3f1-5df3-a129-0e9914d4ab38', 'description' => 'Seleucid Empire', 'correct_answer' => false],
                    ['id' => 'b6c095ee-28ed-59e4-a963-9cc8972ff033', 'description' => 'Antigonid Kingdom', 'correct_answer' => false]
                ]],
        ['id' => '030c5578-5a81-537f-bcfb-ed450132b02c', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which Hellenistic kingdom ruled Egypt after the death of Alexander the Great and ended with Cleopatra VII?', 'difficulty' => 4, 'weight' => 704, 'alternatives' => [
                    ['id' => 'a638c25d-cc56-5de3-b08b-1aff6a7547bf', 'description' => 'Xiongnu Confederation', 'correct_answer' => false],
                    ['id' => 'a7cf59d8-741b-5ccc-a7ff-3c6d35bb7245', 'description' => 'Maurya Empire', 'correct_answer' => false],
                    ['id' => '9c184193-451a-55b1-b23c-fc13106d71f3', 'description' => 'Antigonid Kingdom', 'correct_answer' => false],
                    ['id' => '7090a4a8-5264-5318-98db-3a15822b3219', 'description' => 'Ptolemaic Kingdom', 'correct_answer' => true],
                    ['id' => '41cf7975-f814-5efd-9666-1c2d1f16041b', 'description' => 'Achaemenid Empire', 'correct_answer' => false]
                ]],
        ['id' => '92f077cc-f06f-5b95-bd74-1eafd4a43808', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'What powerful nomadic confederation was a major northern rival of the Han dynasty?', 'difficulty' => 4, 'weight' => 608, 'alternatives' => [
                    ['id' => 'c866bcd4-4f52-537c-a57f-8da9128d5c16', 'description' => 'Xiongnu Confederation', 'correct_answer' => true],
                    ['id' => '5a7e6af4-3a3f-5309-8c01-0a0a72fcf9aa', 'description' => 'Sasanian Empire', 'correct_answer' => false],
                    ['id' => '4b82d781-3446-50ae-8e3f-5898e42fdbe0', 'description' => 'Kushan Empire', 'correct_answer' => false],
                    ['id' => 'adfefecf-4f85-5a5a-ad68-9566fb346fc0', 'description' => 'Gupta Empire', 'correct_answer' => false],
                    ['id' => 'a787f81d-f61e-5d14-8b5b-033802cf5010', 'description' => 'Achaemenid Empire', 'correct_answer' => false]
                ]],
        ['id' => 'b946842c-9fa0-5241-908c-45799fce7e18', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which Hellenistic dynasty ruled Macedon for much of the period after the Wars of the Diadochi?', 'difficulty' => 4, 'weight' => 726, 'alternatives' => [
                    ['id' => '3d17f355-6b94-5e45-9f85-7a674eaf8f8d', 'description' => 'Antigonid Kingdom', 'correct_answer' => true],
                    ['id' => 'ecab7d45-6db6-5cc1-8ade-8061f05c6c0e', 'description' => 'Maurya Empire', 'correct_answer' => false],
                    ['id' => '198d668d-fd58-5fb2-9b3f-d67e2a927125', 'description' => 'Gupta Empire', 'correct_answer' => false],
                    ['id' => '55942aca-2a68-5912-93e3-9aa5af9d29d8', 'description' => 'Kushan Empire', 'correct_answer' => false],
                    ['id' => 'a9ed8090-2e98-5c7f-83ae-327b2ae17dc4', 'description' => 'Parthian Empire', 'correct_answer' => false]
                ]],
        ['id' => '527663c1-f0fb-5bfa-abe0-1aff3ffef0f5', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which ancient civilization developed in coastal Peru and is associated with monumental sites such as Caral?', 'difficulty' => 4, 'weight' => 798, 'alternatives' => [
                    ['id' => 'f640e07b-78e0-5865-84a9-c33b803a35d1', 'description' => 'Olmec civilization', 'correct_answer' => false],
                    ['id' => 'ca6db812-bd9e-58de-bc5b-574ae4c6c19d', 'description' => 'Norte Chico civilization', 'correct_answer' => true],
                    ['id' => 'd3820dbb-1850-58fb-8e0d-097a7dba48f3', 'description' => 'Mitanni', 'correct_answer' => false],
                    ['id' => '20d2362f-a394-50da-9b21-a2d20dee9dfc', 'description' => 'Mycenaean civilization', 'correct_answer' => false],
                    ['id' => '45302e43-9fde-590a-b282-ee9fa41d5e23', 'description' => 'Urartu', 'correct_answer' => false]
                ]],
        ['id' => '4f630ae1-701a-584e-9cc3-32c3c695eaba', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which early Iron Age culture in present-day Nigeria is known for distinctive terracotta sculptures?', 'difficulty' => 4, 'weight' => 743, 'alternatives' => [
                    ['id' => 'e94c3daf-2e4b-5da2-8035-2d346af0328f', 'description' => 'Nok culture', 'correct_answer' => true],
                    ['id' => '5654c36e-5e30-5d25-8526-af9dfb2c29c5', 'description' => 'Hittite Empire', 'correct_answer' => false],
                    ['id' => '06b1bd92-1305-50e9-b359-37b60d14669f', 'description' => 'Elamite civilization', 'correct_answer' => false],
                    ['id' => '8a97a901-a9df-56a3-be16-68e80172d13a', 'description' => 'Olmec civilization', 'correct_answer' => false],
                    ['id' => '11ed10ba-2b63-5fdc-b988-e39ea9594c5a', 'description' => 'Norte Chico civilization', 'correct_answer' => false]
                ]],
        ['id' => 'b8c4fb7f-57a0-5f25-af0f-980caf9b90d4', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which pre-Roman civilization flourished in central Italy and influenced early Roman culture?', 'difficulty' => 4, 'weight' => 636, 'alternatives' => [
                    ['id' => '2408b5e8-c315-5135-a7a0-2fca7f8e88aa', 'description' => 'Hittite Empire', 'correct_answer' => false],
                    ['id' => '69ba9089-e154-5a31-8bef-b1b5adf12d58', 'description' => 'Urartu', 'correct_answer' => false],
                    ['id' => 'ef09deba-bcee-50a8-a4b7-b221a0e738a1', 'description' => 'Elamite civilization', 'correct_answer' => false],
                    ['id' => 'a9eada2e-7acd-5920-92f4-33b0a6236992', 'description' => 'Minoan civilization', 'correct_answer' => false],
                    ['id' => 'a13e1d93-fb47-5016-8e37-46700ecb492c', 'description' => 'Etruscan civilization', 'correct_answer' => true]
                ]],
        ['id' => '39dbf7ee-1420-59cf-a21b-b8bc755551e8', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which Anatolian Bronze Age power fought Egypt at the Battle of Kadesh and used a language written in cuneiform?', 'difficulty' => 4, 'weight' => 616, 'alternatives' => [
                    ['id' => 'ad2aa0cf-5ff6-525a-bd6f-c1386560144d', 'description' => 'Minoan civilization', 'correct_answer' => false],
                    ['id' => '6fbf0ad2-a543-5b7d-849c-f183f552bbaa', 'description' => 'Urartu', 'correct_answer' => false],
                    ['id' => 'd331bec9-6a37-59bb-a297-79d551279135', 'description' => 'Hittite Empire', 'correct_answer' => true],
                    ['id' => '2eb5d4b0-de8f-581b-a011-2ac3c91633ae', 'description' => 'Elamite civilization', 'correct_answer' => false],
                    ['id' => '017b1f8b-27cd-584f-87b1-396fd3a0244e', 'description' => 'Nok culture', 'correct_answer' => false]
                ]],
        ['id' => 'b50b7ad5-f589-56ac-b1bd-1a5c39cfd50d', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which Bronze Age civilization flourished on Crete and is associated with the palace complex at Knossos?', 'difficulty' => 4, 'weight' => 633, 'alternatives' => [
                    ['id' => '2d3500fc-4b57-50ae-b806-d1bdceb17916', 'description' => 'Norte Chico civilization', 'correct_answer' => false],
                    ['id' => '81c95882-ff8b-5c91-94a5-2d83b6ee4de5', 'description' => 'Urartu', 'correct_answer' => false],
                    ['id' => 'ea119b1f-2e63-5153-b7e9-c6a6449d3447', 'description' => 'Etruscan civilization', 'correct_answer' => false],
                    ['id' => 'cc6702c5-97b6-5954-8c06-a2df90ee23b1', 'description' => 'Olmec civilization', 'correct_answer' => false],
                    ['id' => 'f93bba4a-65c3-58b8-975a-84f838de92cb', 'description' => 'Minoan civilization', 'correct_answer' => true]
                ]],
        ['id' => 'b732c757-5554-5faa-86de-43eb89aef5be', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which ancient civilization was centered in southwestern Iran, with Susa as one of its major cities?', 'difficulty' => 4, 'weight' => 764, 'alternatives' => [
                    ['id' => '0929056b-ef43-546c-85b5-3fbe9c9a20f4', 'description' => 'Elamite civilization', 'correct_answer' => true],
                    ['id' => '8c55b339-2823-5053-a70d-ab80f1eb37b5', 'description' => 'Urartu', 'correct_answer' => false],
                    ['id' => 'f5fae794-88f7-5773-be47-380ac4d4d812', 'description' => 'Olmec civilization', 'correct_answer' => false],
                    ['id' => '8e332107-bf73-5d75-bbe3-53dee39a5b73', 'description' => 'Minoan civilization', 'correct_answer' => false],
                    ['id' => '45fb926c-e421-5c3d-ba10-9eb5d206f77b', 'description' => 'Nok culture', 'correct_answer' => false]
                ]],
        ['id' => 'd2d4aa81-016e-5190-b812-df55623407bf', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which Iron Age kingdom was centered around Lake Van in the Armenian Highlands?', 'difficulty' => 4, 'weight' => 602, 'alternatives' => [
                    ['id' => '8cf973cc-47c3-5787-a28f-ca06c43e36d2', 'description' => 'Mitanni', 'correct_answer' => false],
                    ['id' => 'bcad3fc7-50d3-5958-ac76-3f5221303d11', 'description' => 'Elamite civilization', 'correct_answer' => false],
                    ['id' => '86618f43-bd42-552f-8f95-27408c7f8869', 'description' => 'Etruscan civilization', 'correct_answer' => false],
                    ['id' => '838afbec-2cfe-57de-8b0b-23e8849390f7', 'description' => 'Urartu', 'correct_answer' => true],
                    ['id' => 'b038d61f-b4cf-510c-84d5-292826dcddc6', 'description' => 'Olmec civilization', 'correct_answer' => false]
                ]],
        ['id' => '1ee60ba0-2ec2-57e2-b90f-8d5f00faf48a', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which Bronze Age Greek civilization used Linear B and built fortified centers such as Mycenae?', 'difficulty' => 4, 'weight' => 657, 'alternatives' => [
                    ['id' => 'f042ef78-d6dc-5049-a720-e50d18d2c199', 'description' => 'Olmec civilization', 'correct_answer' => false],
                    ['id' => 'c94cec1e-2309-5f50-9ab0-d6ca96833347', 'description' => 'Hittite Empire', 'correct_answer' => false],
                    ['id' => 'd704dd46-364f-5e70-bbaf-747c5c8ff8d6', 'description' => 'Etruscan civilization', 'correct_answer' => false],
                    ['id' => 'ddcd557b-a4a7-5213-bd37-655af1b7d2a8', 'description' => 'Mycenaean civilization', 'correct_answer' => true],
                    ['id' => '9cedd60e-570a-563d-b352-ea4947876e41', 'description' => 'Urartu', 'correct_answer' => false]
                ]],
        ['id' => '8a309f05-8cfc-50cd-a524-c671e5da8b32', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which of the five Sun-Earth gravitational equilibrium regions lies between Earth and the Sun?', 'difficulty' => 4, 'weight' => 761, 'alternatives' => [
                    ['id' => '0e7b7a0c-0d5c-5206-8b07-b1a3b31a6ea9', 'description' => 'Lagrangian point L1', 'correct_answer' => true],
                    ['id' => '3d830882-18e1-5321-9cce-21026505eecb', 'description' => 'Chandrasekhar limit', 'correct_answer' => false],
                    ['id' => '9f05dcfb-6b07-5258-85f0-35d3e5d7f8da', 'description' => 'Lagrangian point L5', 'correct_answer' => false],
                    ['id' => '866ef8bb-5b2b-5f6f-a103-28b2ec0cecda', 'description' => 'Sphere of influence', 'correct_answer' => false],
                    ['id' => '685daead-eaff-536a-bc3a-2727a1ceb4a7', 'description' => 'Hill sphere', 'correct_answer' => false]
                ]],
        ['id' => '894d6479-0677-5b6d-b0f4-667e2be7490d', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'What patched-conic approximation region is used to determine which body\'s gravity dominates a spacecraft\'s trajectory?', 'difficulty' => 4, 'weight' => 727, 'alternatives' => [
                    ['id' => 'b0b7c917-7a39-5e59-bf21-d1d6b80f453e', 'description' => 'Roche limit', 'correct_answer' => false],
                    ['id' => '996992ba-9dda-50a5-8e9d-041157a809f8', 'description' => 'Lagrangian point L3', 'correct_answer' => false],
                    ['id' => '5b58e378-6727-585b-9e2e-0a6aec18b398', 'description' => 'Lagrangian point L5', 'correct_answer' => false],
                    ['id' => '8ba78604-dfd2-513f-b536-762a7024b473', 'description' => 'Sphere of influence', 'correct_answer' => true],
                    ['id' => '10377443-49b7-540e-bce1-8803b87c33c3', 'description' => 'Lagrangian point L4', 'correct_answer' => false]
                ]],
        ['id' => 'cf0204eb-eaa7-5a9f-84d2-aeee83e71266', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which Lagrangian point leads a smaller body by 60 degrees in the orbit of a larger body?', 'difficulty' => 4, 'weight' => 754, 'alternatives' => [
                    ['id' => '65d9bbfc-3473-5f97-b205-6c9386544589', 'description' => 'Lagrangian point L3', 'correct_answer' => false],
                    ['id' => '96352bd1-fc4e-548a-bcb6-27f95360acac', 'description' => 'Lagrangian point L2', 'correct_answer' => false],
                    ['id' => '4acb0a8f-10ab-52c1-83de-9799784232c6', 'description' => 'Lagrangian point L4', 'correct_answer' => true],
                    ['id' => '5cbea20c-2a2c-53ea-8675-ae5808799b9d', 'description' => 'Tolman–Oppenheimer–Volkoff limit', 'correct_answer' => false],
                    ['id' => '5d16ba4d-2d38-53df-aeac-09acf05115d1', 'description' => 'Lagrangian point L5', 'correct_answer' => false]
                ]],
        ['id' => '15f26d84-fa0a-563a-9133-3bffd5af5e73', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which idealized Sun-Earth equilibrium region lies on the far side of the Sun from Earth?', 'difficulty' => 4, 'weight' => 642, 'alternatives' => [
                    ['id' => '6036f331-103f-585a-80bc-8fa0f745647a', 'description' => 'Lagrangian point L2', 'correct_answer' => false],
                    ['id' => '828914c7-f8fd-5457-9f61-0137998af61f', 'description' => 'Lagrangian point L5', 'correct_answer' => false],
                    ['id' => '2b4e7719-afbf-5b92-a7c1-9547c46dab42', 'description' => 'Sphere of influence', 'correct_answer' => false],
                    ['id' => '0c161778-8ac5-5228-add0-5bd3c56cd49c', 'description' => 'Tolman–Oppenheimer–Volkoff limit', 'correct_answer' => false],
                    ['id' => 'd98f310a-5154-5325-836d-7e9707e7ee4f', 'description' => 'Lagrangian point L3', 'correct_answer' => true]
                ]],
        ['id' => '33fbd91e-9f69-51f3-b22d-2a07abe7833f', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'What theoretical upper mass limit applies to a neutron star supported by degeneracy pressure and nuclear forces?', 'difficulty' => 4, 'weight' => 678, 'alternatives' => [
                    ['id' => '3d30de7b-f70e-56e5-bacd-9d1014f7d4c3', 'description' => 'Lagrangian point L1', 'correct_answer' => false],
                    ['id' => '81d02ec7-bf89-5744-be68-664d80921721', 'description' => 'Sphere of influence', 'correct_answer' => false],
                    ['id' => 'c4c8dbe0-a01b-5b18-8201-03fb2bdf1546', 'description' => 'Tolman–Oppenheimer–Volkoff limit', 'correct_answer' => true],
                    ['id' => '36fd8801-c4ab-5ad8-8ab9-603bca431b27', 'description' => 'Hill sphere', 'correct_answer' => false],
                    ['id' => '1f2cf3f0-29ad-51a0-989c-fa259d96c4ae', 'description' => 'Roche limit', 'correct_answer' => false]
                ]],
        ['id' => 'b021ea28-774b-5a62-8cac-4367b1109d05', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'What approximate mass limit applies to a stable, non-rotating white dwarf supported by electron degeneracy pressure?', 'difficulty' => 4, 'weight' => 602, 'alternatives' => [
                    ['id' => '13767e21-f8fe-5349-a1ed-8379c92d00b4', 'description' => 'Roche limit', 'correct_answer' => false],
                    ['id' => '2beee5b3-6e9e-569e-8edf-b7c195158a1a', 'description' => 'Chandrasekhar limit', 'correct_answer' => true],
                    ['id' => 'f887fc09-bc9d-5d07-a988-818e817ced07', 'description' => 'Lagrangian point L5', 'correct_answer' => false],
                    ['id' => '816dba23-b6c9-54fa-aa55-acd79a236496', 'description' => 'Lagrangian point L2', 'correct_answer' => false],
                    ['id' => '48eaf354-3ca4-57d4-a3d2-988db991b37d', 'description' => 'Lagrangian point L1', 'correct_answer' => false]
                ]],
        ['id' => '1184d3fe-ea98-597d-89e2-abdd93064f20', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which Lagrangian point trails a smaller body by 60 degrees in the orbit of a larger body?', 'difficulty' => 4, 'weight' => 790, 'alternatives' => [
                    ['id' => '91099eb3-3497-5535-8e3e-f7d1fc716944', 'description' => 'Hill sphere', 'correct_answer' => false],
                    ['id' => 'bca2c43d-741c-5499-b2ce-0513b84f6028', 'description' => 'Lagrangian point L3', 'correct_answer' => false],
                    ['id' => 'd0962c9c-ae67-5ba3-ae78-c2010e47b1f2', 'description' => 'Lagrangian point L5', 'correct_answer' => true],
                    ['id' => 'e5b7414a-711c-507b-8711-93468c257f11', 'description' => 'Lagrangian point L4', 'correct_answer' => false],
                    ['id' => '7cfdfc91-b9e1-5dca-802f-c81ad80ad7c9', 'description' => 'Tolman–Oppenheimer–Volkoff limit', 'correct_answer' => false]
                ]],
        ['id' => '84b556ff-d323-5842-8997-2fbd518c5d62', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'What is the minimum distance at which a celestial body held together mainly by gravity can remain intact near a larger body?', 'difficulty' => 4, 'weight' => 604, 'alternatives' => [
                    ['id' => '58940073-7ad0-5dc3-8892-382823be616a', 'description' => 'Lagrangian point L4', 'correct_answer' => false],
                    ['id' => '9d0d5185-dd0b-5442-bf46-948c8d452baf', 'description' => 'Roche limit', 'correct_answer' => true],
                    ['id' => '2674433e-51d4-51dc-bf59-9f5a88fa99d4', 'description' => 'Sphere of influence', 'correct_answer' => false],
                    ['id' => 'b642b4a8-8746-5611-951d-9a6f933e938e', 'description' => 'Lagrangian point L3', 'correct_answer' => false],
                    ['id' => '483c2da4-154b-5aa3-ae43-66b6d4195190', 'description' => 'Lagrangian point L1', 'correct_answer' => false]
                ]],
        ['id' => 'df4d9155-4d5e-5b15-9b18-1388ffad17e3', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which African bird of prey is known for hunting snakes on foot in open grasslands?', 'difficulty' => 4, 'weight' => 659, 'alternatives' => [
                    ['id' => 'd0c54c50-3c10-5b0c-ac35-34bfe0bb2ac3', 'description' => 'Oilbird', 'correct_answer' => false],
                    ['id' => '35fef0e5-1689-5172-ba93-2fa657844525', 'description' => 'Kea', 'correct_answer' => false],
                    ['id' => '014a5c89-53e7-569d-bac2-39624d393ef6', 'description' => 'Sunbittern', 'correct_answer' => false],
                    ['id' => '53fb47f4-93b2-5854-9c71-83081cddaafd', 'description' => 'Secretarybird', 'correct_answer' => true],
                    ['id' => '296ad361-48d5-5723-8298-060a45349320', 'description' => 'Takahe', 'correct_answer' => false]
                ]],
        ['id' => 'c9ee264c-c746-5078-b29f-a99b1be0b1a2', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which alpine parrot native to New Zealand is known for its intelligence and curiosity?', 'difficulty' => 4, 'weight' => 619, 'alternatives' => [
                    ['id' => '8ce50149-c1fc-5b6f-b5bf-76ebf13176a1', 'description' => 'Shoebill', 'correct_answer' => false],
                    ['id' => '53a8752d-4159-5fcd-b3cd-310718bc2e8c', 'description' => 'Hoatzin', 'correct_answer' => false],
                    ['id' => '3bdbbd3d-d880-549f-a6f1-6cc6e1563c68', 'description' => 'Oilbird', 'correct_answer' => false],
                    ['id' => 'bf4aec2c-98b8-510e-b62a-7a645a991bed', 'description' => 'Kea', 'correct_answer' => true],
                    ['id' => 'dd268f85-1dd6-5d01-800a-06c09ea0d335', 'description' => 'Secretarybird', 'correct_answer' => false]
                ]],
        ['id' => 'a5356a35-5d8e-52f8-b4c3-ff4a839621a0', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which Central and South American bird displays striking eye-like patterns on its wings?', 'difficulty' => 4, 'weight' => 733, 'alternatives' => [
                    ['id' => '1f8bf4c5-53ce-5fcc-984e-3af4236d47e8', 'description' => 'Hoatzin', 'correct_answer' => false],
                    ['id' => 'bf700cc8-2cae-52a8-bd9a-9322b151b011', 'description' => 'Secretarybird', 'correct_answer' => false],
                    ['id' => '46d7adb6-6c37-5521-8b82-1c58a8cb8200', 'description' => 'Sunbittern', 'correct_answer' => true],
                    ['id' => 'ae1da2f7-72c2-5f27-ad83-443132e46943', 'description' => 'Oilbird', 'correct_answer' => false],
                    ['id' => '70b5a482-e54c-587d-a032-00eebae54cf6', 'description' => 'Lyrebird', 'correct_answer' => false]
                ]],
        ['id' => '9c32dbbf-96d5-5573-b138-bf3152d5f251', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which large flightless rail, once thought extinct, survives in New Zealand?', 'difficulty' => 4, 'weight' => 658, 'alternatives' => [
                    ['id' => '18467fdb-2c0f-52f7-b4aa-860c76b2fa72', 'description' => 'Hoatzin', 'correct_answer' => false],
                    ['id' => '6ff9d0ff-3867-5c5e-8f52-b5bfef77e21f', 'description' => 'Takahe', 'correct_answer' => true],
                    ['id' => '9f45bc69-eb5c-5797-96d7-9cb3ea66ca00', 'description' => 'Kagu', 'correct_answer' => false],
                    ['id' => '962531bf-2d92-5950-9dff-920c43234c26', 'description' => 'Oilbird', 'correct_answer' => false],
                    ['id' => '3679ce9d-673a-57c3-895c-072f59292a0f', 'description' => 'Kakapo', 'correct_answer' => false]
                ]],
        ['id' => 'd582daf5-8c17-531f-8141-f7e73ca0f04c', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which nocturnal cave-dwelling bird uses echolocation and feeds mainly on fruit?', 'difficulty' => 4, 'weight' => 759, 'alternatives' => [
                    ['id' => '0bf86cfd-83b6-5a69-971a-cc1eb2f722f3', 'description' => 'Lyrebird', 'correct_answer' => false],
                    ['id' => 'fa5c1e90-4e7e-5073-b2d4-750e012b46e8', 'description' => 'Takahe', 'correct_answer' => false],
                    ['id' => '0e4278d7-b1af-558d-ab37-88821513b7a7', 'description' => 'Secretarybird', 'correct_answer' => false],
                    ['id' => '4380f53d-f4f4-5710-b381-e77c6bf1d884', 'description' => 'Kea', 'correct_answer' => false],
                    ['id' => '63bd97c7-db7e-5e6c-8967-321c7b7de4f1', 'description' => 'Oilbird', 'correct_answer' => true]
                ]],
        ['id' => 'a57dc9fd-f9b9-53fe-bccf-1c5fd632c703', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which flightless bird endemic to New Caledonia has a prominent crest and powder-down feathers?', 'difficulty' => 4, 'weight' => 656, 'alternatives' => [
                    ['id' => '80132218-7bed-5659-aac4-6fcf9a07035f', 'description' => 'Takahe', 'correct_answer' => false],
                    ['id' => '22a84097-9dd6-50bf-85a7-1bcd23eabcd8', 'description' => 'Kagu', 'correct_answer' => true],
                    ['id' => '64661649-9c09-57fd-9f4d-f791105d3a83', 'description' => 'Sunbittern', 'correct_answer' => false],
                    ['id' => '34082377-b3a4-5103-88b0-904411b25e64', 'description' => 'Shoebill', 'correct_answer' => false],
                    ['id' => 'ed635289-1b51-57d7-98a2-a0413c8fe59b', 'description' => 'Hoatzin', 'correct_answer' => false]
                ]],
        ['id' => '595dddfc-311b-5e2e-9cb4-64b504629d9b', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which Australian ground-dwelling bird is famous for its extraordinary vocal mimicry?', 'difficulty' => 4, 'weight' => 778, 'alternatives' => [
                    ['id' => '9ecb1e98-1d27-5f50-82dc-32869f214c7a', 'description' => 'Oilbird', 'correct_answer' => false],
                    ['id' => '5c73fd25-dd68-5cc6-9c12-2972a87ed577', 'description' => 'Kakapo', 'correct_answer' => false],
                    ['id' => 'bd44f3f2-d766-5636-91c7-aaa9caba8deb', 'description' => 'Shoebill', 'correct_answer' => false],
                    ['id' => '5089394b-2c2f-5df4-96f4-1635b9ff90d0', 'description' => 'Kea', 'correct_answer' => false],
                    ['id' => 'b45741eb-f8fd-56f9-a12a-9abf86eb56eb', 'description' => 'Lyrebird', 'correct_answer' => true]
                ]],
        ['id' => '6b82e9ff-6911-57c0-8e99-f53922ae154e', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which South American bird has chicks with clawed wings and a digestive system that ferments leaves?', 'difficulty' => 4, 'weight' => 660, 'alternatives' => [
                    ['id' => 'f0e514b7-73cc-583b-98a8-74061e5abea8', 'description' => 'Sunbittern', 'correct_answer' => false],
                    ['id' => '93ac7774-53b2-5dc6-8e79-88cb9d67625c', 'description' => 'Secretarybird', 'correct_answer' => false],
                    ['id' => '8b341e9c-6723-58d5-a4a9-4cade6b9a9ce', 'description' => 'Hoatzin', 'correct_answer' => true],
                    ['id' => '89eb1580-22d4-57e4-892a-3f92131b3a47', 'description' => 'Kakapo', 'correct_answer' => false],
                    ['id' => '203160c4-8373-53fa-8ced-4fa282dbea88', 'description' => 'Takahe', 'correct_answer' => false]
                ]],
        ['id' => '50ac56e9-fbe3-50dc-ba5c-051f9cdf0b96', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which subgroup of the Uralic language family includes Erzya and Moksha?', 'difficulty' => 4, 'weight' => 765, 'alternatives' => [
                    ['id' => '4e150341-f027-55ab-bcfb-4f825f87f862', 'description' => 'Mordvinic languages', 'correct_answer' => true],
                    ['id' => 'e599c738-5a8e-50ee-a28a-bcce4e02a029', 'description' => 'Sámi languages', 'correct_answer' => false],
                    ['id' => '2cdaccc6-a561-5da9-a283-4183ec859194', 'description' => 'Sámi', 'correct_answer' => false],
                    ['id' => '20e39c79-7816-5e33-9785-2730aaed8ce7', 'description' => 'Nenets', 'correct_answer' => false],
                    ['id' => '2d062857-aa01-5e19-804b-a8e349e22258', 'description' => 'Komi', 'correct_answer' => false]
                ]],
        ['id' => 'e30a8a86-456d-589f-ac7c-2794dbd590ed', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which Permic language is spoken mainly in the Komi Republic of Russia?', 'difficulty' => 4, 'weight' => 721, 'alternatives' => [
                    ['id' => '47ceae11-d792-5b8a-8420-af71b3509d4b', 'description' => 'Ob-Ugric languages', 'correct_answer' => false],
                    ['id' => '107f24fd-5cd8-5447-8b84-aaabc3614a9a', 'description' => 'Komi', 'correct_answer' => true],
                    ['id' => 'b1606a4c-902f-5b54-8009-9bbad3d29b8f', 'description' => 'Sámi', 'correct_answer' => false],
                    ['id' => 'de8af96f-ed33-5171-9b33-9880a49478dc', 'description' => 'Mordvinic languages', 'correct_answer' => false],
                    ['id' => 'c7e20e71-e0cf-5485-abdc-c99cf9c7d4cd', 'description' => 'Udmurt', 'correct_answer' => false]
                ]],
        ['id' => '844a3984-21c1-5c0b-88dd-2e9ce30a6841', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which Uralic subgroup includes Khanty and Mansi?', 'difficulty' => 4, 'weight' => 762, 'alternatives' => [
                    ['id' => 'a782018b-6340-58d8-85a1-79d22191d2e4', 'description' => 'Udmurt', 'correct_answer' => false],
                    ['id' => '56cfc448-76d3-5ad7-88b0-abe473551379', 'description' => 'Mordvinic languages', 'correct_answer' => false],
                    ['id' => 'aff08dce-c7b2-5ae5-9bf9-2bdc814d4d41', 'description' => 'Ob-Ugric languages', 'correct_answer' => true],
                    ['id' => '5536daa5-c46c-54da-8a24-531ca7402cc1', 'description' => 'Nenets', 'correct_answer' => false],
                    ['id' => '740905bd-5c36-576c-82f2-b33816ef0159', 'description' => 'Permic languages', 'correct_answer' => false]
                ]],
        ['id' => '7c12a035-a85d-558c-a13e-7e9b066ee54a', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which Indigenous people speak a group of Uralic languages across parts of Norway, Sweden, Finland, and Russia?', 'difficulty' => 4, 'weight' => 646, 'alternatives' => [
                    ['id' => '48f1bf2d-ecdb-5503-8e73-d9511c808ee1', 'description' => 'Ob-Ugric languages', 'correct_answer' => false],
                    ['id' => '03d92156-37f7-5d5e-87a6-9513f163a186', 'description' => 'Permic languages', 'correct_answer' => false],
                    ['id' => 'd5f5a17c-ae7b-5999-88cf-840071d49c5e', 'description' => 'Sámi', 'correct_answer' => true],
                    ['id' => '622ad18b-88bf-514f-94cc-c5369d690b75', 'description' => 'Sámi languages', 'correct_answer' => false],
                    ['id' => '90b014c0-f2b2-5e46-93e9-6ab8af3c22e9', 'description' => 'Komi', 'correct_answer' => false]
                ]],
        ['id' => '41e9682e-f67a-5196-ac3d-d2b7b60632d5', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which Uralic language branch includes Meadow Mari and Hill Mari?', 'difficulty' => 4, 'weight' => 772, 'alternatives' => [
                    ['id' => '4c7a0bf1-4154-5fc7-9d37-54a7a01dc6ff', 'description' => 'Permic languages', 'correct_answer' => false],
                    ['id' => '9bf31240-d155-528f-b2f7-843efdaa9b7a', 'description' => 'Mordvinic languages', 'correct_answer' => false],
                    ['id' => '52e80c31-5ce1-5e25-b208-90457ead7cab', 'description' => 'Sámi', 'correct_answer' => false],
                    ['id' => 'fac93e8b-8907-544a-8ce2-5172937fc3ae', 'description' => 'Mari languages', 'correct_answer' => true],
                    ['id' => 'cef4da9f-18bb-5543-8f15-a4e8cf56a056', 'description' => 'Nenets', 'correct_answer' => false]
                ]],
        ['id' => '0d410912-b9e3-5afe-afe7-01303d23bb9f', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which Uralic subgroup includes Nenets, Enets, and Nganasan?', 'difficulty' => 4, 'weight' => 747, 'alternatives' => [
                    ['id' => '0b25a24d-e34b-5db9-b8f7-d6817662612b', 'description' => 'Mari languages', 'correct_answer' => false],
                    ['id' => '4e65af0f-740e-5dd0-b351-d1d0a35f35f0', 'description' => 'Nenets', 'correct_answer' => false],
                    ['id' => 'd26e508c-a2e1-51e6-9fe4-62bafcd2c38b', 'description' => 'Sámi languages', 'correct_answer' => false],
                    ['id' => '0ce597ab-4295-56ce-9a08-7bbee2ed9a52', 'description' => 'Mordvinic languages', 'correct_answer' => false],
                    ['id' => 'b3869bb4-4692-5ac0-8847-da724648e74f', 'description' => 'Samoyedic languages', 'correct_answer' => true]
                ]],
        ['id' => '1a086e44-6414-585b-a8bd-1a41af27c3ea', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which Uralic subgroup includes Udmurt and Komi?', 'difficulty' => 4, 'weight' => 657, 'alternatives' => [
                    ['id' => '4364a9a0-f7e2-5cf5-b355-faf94fe77f1b', 'description' => 'Sámi languages', 'correct_answer' => false],
                    ['id' => 'a1f844ed-c20a-5aa2-8dab-634ff7ffd9a3', 'description' => 'Mordvinic languages', 'correct_answer' => false],
                    ['id' => 'bb1f4ab3-346c-54f8-a773-b7f5af2583f7', 'description' => 'Permic languages', 'correct_answer' => true],
                    ['id' => 'a1f7def1-72c4-58e6-a98b-d5943a35bfad', 'description' => 'Udmurt', 'correct_answer' => false],
                    ['id' => 'a5aabfb0-62aa-59c4-a9b4-415b5087bfa9', 'description' => 'Komi', 'correct_answer' => false]
                ]],
        ['id' => 'faa19a0f-e51d-54ad-884c-7f8a3e1920c0', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which Uralic branch includes Northern Sámi and several other languages spoken across northern Fennoscandia?', 'difficulty' => 4, 'weight' => 624, 'alternatives' => [
                    ['id' => 'ef20c92b-470a-5ce3-9cf5-d6dc92f0b9bf', 'description' => 'Sámi languages', 'correct_answer' => true],
                    ['id' => '6155081c-6006-5a2a-b30c-6026b2f537da', 'description' => 'Komi', 'correct_answer' => false],
                    ['id' => '9a08b99e-ca9d-5509-a676-8a41674c61d2', 'description' => 'Samoyedic languages', 'correct_answer' => false],
                    ['id' => 'a3ea963e-0624-5134-8c34-6c3660509ec8', 'description' => 'Sámi', 'correct_answer' => false],
                    ['id' => '9d67e453-97be-5ee6-adab-a39e3e82caee', 'description' => 'Mordvinic languages', 'correct_answer' => false]
                ]],
        ['id' => '52b18b49-9662-5e55-ab9d-234b98eeb18a', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which undeciphered glyph system is associated with the Indigenous culture of Rapa Nui?', 'difficulty' => 5, 'weight' => 990, 'alternatives' => [
                    ['id' => '8ba2dd9a-7eae-54fe-8615-b8b20c0a6c67', 'description' => 'Rongorongo', 'correct_answer' => true],
                    ['id' => '6411d4ab-2a68-5b2a-b20e-991cf81edc48', 'description' => 'Phaistos Disc script', 'correct_answer' => false],
                    ['id' => '65a62764-3e9f-556c-8488-6746a809afb6', 'description' => 'Proto-Elamite', 'correct_answer' => false],
                    ['id' => 'fbe40c41-3154-5f35-a4d0-80d29bcb6c41', 'description' => 'Linear A', 'correct_answer' => false],
                    ['id' => '8649a12d-f1a8-54c8-a74c-a659f9188776', 'description' => 'Epi-Olmec script', 'correct_answer' => false]
                ]],
        ['id' => '0729d8ad-ed4b-5e9d-acb2-9c32b1cf30e8', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which early Mesoamerican writing system is attested in inscriptions from sites such as Monte Albán?', 'difficulty' => 5, 'weight' => 852, 'alternatives' => [
                    ['id' => 'c248fd66-9605-5bce-9189-461de197f9d3', 'description' => 'Phaistos Disc script', 'correct_answer' => false],
                    ['id' => '843effe9-6f9a-58f8-a084-9de432dc4a4a', 'description' => 'Zapotec script', 'correct_answer' => true],
                    ['id' => 'c88d3e9b-4372-55d3-8fe5-de620b6734dc', 'description' => 'Meroitic cursive', 'correct_answer' => false],
                    ['id' => '14f73b28-9205-5de3-a6ea-18997a49b393', 'description' => 'Cypro-Minoan', 'correct_answer' => false],
                    ['id' => 'ef7d0d01-c80f-5dea-980a-c80dd032da22', 'description' => 'Rongorongo', 'correct_answer' => false]
                ]],
        ['id' => 'b0f061e1-84d2-519e-9f17-1eda33ce9bce', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which undeciphered writing system was used by the Minoans on Crete before the widespread use of Linear B?', 'difficulty' => 5, 'weight' => 837, 'alternatives' => [
                    ['id' => '2b686a48-8d8d-5d43-b940-fe11114679d5', 'description' => 'Epi-Olmec script', 'correct_answer' => false],
                    ['id' => '4db801b9-418c-5575-b67f-195ac724feb6', 'description' => 'Linear A', 'correct_answer' => true],
                    ['id' => 'c6eaa6f9-f32b-57f3-89bd-131363d99f28', 'description' => 'Cypro-Minoan', 'correct_answer' => false],
                    ['id' => 'cda5b982-268e-5abf-b833-036c7f730ef8', 'description' => 'Rongorongo', 'correct_answer' => false],
                    ['id' => 'e2c6efc8-94ae-5a12-910b-fa17ee6cfcde', 'description' => 'Meroitic cursive', 'correct_answer' => false]
                ]],
        ['id' => 'b134f5a2-8d6e-588a-988c-d06fc0517f60', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which still-undeciphered system of stamped symbols appears on a unique clay disc found in Crete?', 'difficulty' => 5, 'weight' => 918, 'alternatives' => [
                    ['id' => '3d09c1fc-4a17-54f6-80ab-b9efbf3cea40', 'description' => 'Zapotec script', 'correct_answer' => false],
                    ['id' => '06cc6914-e72a-5c27-afb8-70bdc83afaff', 'description' => 'Phaistos Disc script', 'correct_answer' => true],
                    ['id' => '2daa12d1-24e9-517c-a37b-ed67440cda5a', 'description' => 'Epi-Olmec script', 'correct_answer' => false],
                    ['id' => 'a38c75f9-5d51-5f0f-95f3-88f9963b919b', 'description' => 'Cypro-Minoan', 'correct_answer' => false],
                    ['id' => '7d270744-559d-5e3f-9e8c-d6cb21accd0d', 'description' => 'Khipu', 'correct_answer' => false]
                ]],
        ['id' => '984bb2bc-9c70-5f32-bae5-c97ff33d590e', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which undeciphered sign system appears on seals and objects from the Indus Valley Civilization?', 'difficulty' => 5, 'weight' => 872, 'alternatives' => [
                    ['id' => '8f3b7f7c-65d6-54e6-b352-c47a1eec96c8', 'description' => 'Proto-Elamite', 'correct_answer' => false],
                    ['id' => '1a88de46-94b7-5382-bafc-84431d1e992b', 'description' => 'Indus script', 'correct_answer' => true],
                    ['id' => 'b0671110-ac70-588d-9f27-8fad5dff871f', 'description' => 'Rongorongo', 'correct_answer' => false],
                    ['id' => 'e6135363-b2d2-5757-af29-7e8adacce7be', 'description' => 'Phaistos Disc script', 'correct_answer' => false],
                    ['id' => '73a1a90c-9362-518a-8d47-7e0ee9f3626a', 'description' => 'Zapotec script', 'correct_answer' => false]
                ]],
        ['id' => '051100b1-b807-5c59-a126-a1d6ddf083da', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which script used in the Kingdom of Kush is readable phonetically but its language remains incompletely understood?', 'difficulty' => 5, 'weight' => 927, 'alternatives' => [
                    ['id' => 'c64c33a0-4761-5f67-aef9-9dfe72a1ce50', 'description' => 'Cypro-Minoan', 'correct_answer' => false],
                    ['id' => '8edd3b80-d554-5793-933f-a273433d9d18', 'description' => 'Linear A', 'correct_answer' => false],
                    ['id' => 'b1b10991-1fb6-562a-8c0a-5a2c20efc0a0', 'description' => 'Indus script', 'correct_answer' => false],
                    ['id' => '7a96c929-79af-54cd-bba4-94b39b1b1205', 'description' => 'Meroitic cursive', 'correct_answer' => true],
                    ['id' => '1f2751fb-c493-5952-9edb-268e753e5a73', 'description' => 'Rongorongo', 'correct_answer' => false]
                ]],
        ['id' => 'cf726a36-2240-5cce-a5c0-b95b5c2c7440', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which undeciphered syllabic script was used in Bronze Age Cyprus and is related to Linear A?', 'difficulty' => 5, 'weight' => 813, 'alternatives' => [
                    ['id' => '08c1776b-302a-50ef-8814-643ac97e9289', 'description' => 'Proto-Elamite', 'correct_answer' => false],
                    ['id' => '1776ce28-97ed-5bdf-bf62-e16f3dadac2e', 'description' => 'Zapotec script', 'correct_answer' => false],
                    ['id' => '65b065b4-c44e-525f-ac3c-5355c17ee0bb', 'description' => 'Meroitic cursive', 'correct_answer' => false],
                    ['id' => '5b0725c3-5a4b-5c58-89e7-5e5b8bab9971', 'description' => 'Epi-Olmec script', 'correct_answer' => false],
                    ['id' => '8dc5efc3-7ebc-50d6-9329-c951b9ed98e8', 'description' => 'Cypro-Minoan', 'correct_answer' => true]
                ]],
        ['id' => '554f511e-96cc-52c8-ae6c-5f028ca6af58', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which Mesoamerican writing system is also known as the Isthmian script and remains only partially understood?', 'difficulty' => 5, 'weight' => 923, 'alternatives' => [
                    ['id' => 'a58c3fe9-807b-5175-ab98-e543e7d416f7', 'description' => 'Meroitic cursive', 'correct_answer' => false],
                    ['id' => '73d425fd-d464-525b-969d-a07109c37279', 'description' => 'Linear A', 'correct_answer' => false],
                    ['id' => 'ffc23b10-6388-59c3-89a9-d04955b23a71', 'description' => 'Zapotec script', 'correct_answer' => false],
                    ['id' => '687953b9-7a50-518d-a8cf-deee03bd589a', 'description' => 'Epi-Olmec script', 'correct_answer' => true],
                    ['id' => '4b71a8b1-9855-5b4f-9cbe-644fd5bb8b99', 'description' => 'Phaistos Disc script', 'correct_answer' => false]
                ]],
        ['id' => '9bd714f4-5c89-5db6-9e7e-c7ba8ec3ad1e', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which number theory conjecture relates the radical of a sum of coprime positive integers to the size of the integers themselves?', 'difficulty' => 5, 'weight' => 860, 'alternatives' => [
                    ['id' => 'd6047b36-4587-56e4-94c6-e13af3accc32', 'description' => 'P vs NP problem', 'correct_answer' => false],
                    ['id' => 'fd25899c-d53b-5469-abbf-c015641d617b', 'description' => 'Birch and Swinnerton-Dyer conjecture', 'correct_answer' => false],
                    ['id' => 'f59e42c7-e1c5-58b4-b0b5-ef77ec691c94', 'description' => 'abc conjecture', 'correct_answer' => true],
                    ['id' => '5a665441-d081-52fd-bbcf-b45bc2cce337', 'description' => 'Yang–Mills existence and mass gap', 'correct_answer' => false],
                    ['id' => '3b6687e6-87b8-534e-921f-fd2b7f60cfef', 'description' => 'Navier–Stokes existence and smoothness', 'correct_answer' => false]
                ]],
        ['id' => '0694c53a-4c44-58fa-909c-23483a66f331', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which Millennium Prize Problem asks for a rigorous quantum Yang–Mills theory with a positive mass gap?', 'difficulty' => 5, 'weight' => 927, 'alternatives' => [
                    ['id' => 'bd90c138-85b4-5c03-8f0b-6df7b9e29d2b', 'description' => 'Yang–Mills existence and mass gap', 'correct_answer' => true],
                    ['id' => '53c869aa-93c8-5e2c-b00e-78ed3074d30e', 'description' => 'Riemann hypothesis', 'correct_answer' => false],
                    ['id' => 'fceee643-51aa-54a0-8e0c-ce3e551ce0ed', 'description' => 'Twin prime conjecture', 'correct_answer' => false],
                    ['id' => '4f0b3fde-0251-5df6-a22a-de95a889908e', 'description' => 'Goldbach\'s conjecture', 'correct_answer' => false],
                    ['id' => '5dd32e9e-3c1c-5f3b-a3e0-404e1b8f87fa', 'description' => 'Navier–Stokes existence and smoothness', 'correct_answer' => false]
                ]],
        ['id' => 'ac1df24a-5ba6-53e5-bc14-2e37d52b685b', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which theoretical computer science problem asks whether every problem whose solution can be verified in polynomial time can also be solved in polynomial time?', 'difficulty' => 5, 'weight' => 850, 'alternatives' => [
                    ['id' => '4823994e-1219-58ae-8784-e358ba8eda77', 'description' => 'Hodge conjecture', 'correct_answer' => false],
                    ['id' => '692f9d99-fb95-5dd5-86ad-24fe80ea51c8', 'description' => 'Twin prime conjecture', 'correct_answer' => false],
                    ['id' => '204fa8e0-5e5e-5131-bcc0-f2e003e6b7c3', 'description' => 'P vs NP problem', 'correct_answer' => true],
                    ['id' => '8563fddc-852c-54f2-b456-b9287a70f515', 'description' => 'Riemann hypothesis', 'correct_answer' => false],
                    ['id' => '5e95a8d8-2d65-5e98-92d7-ddbdcf9827fd', 'description' => 'Yang–Mills existence and mass gap', 'correct_answer' => false]
                ]],
        ['id' => '80b29f51-544e-5d9d-b175-cef71382b010', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which unsolved mathematical conjecture concerns the nontrivial zeros of the Riemann zeta function?', 'difficulty' => 5, 'weight' => 853, 'alternatives' => [
                    ['id' => 'fe5c9535-b25f-5b68-a8b6-99d79b3bf3ae', 'description' => 'Hodge conjecture', 'correct_answer' => false],
                    ['id' => '9c639cc2-97a2-5f57-af9d-594046bec051', 'description' => 'abc conjecture', 'correct_answer' => false],
                    ['id' => 'e093d7ca-d117-54fd-b27f-5ec4b829d828', 'description' => 'Collatz conjecture', 'correct_answer' => false],
                    ['id' => '15ee3ae9-4538-5cff-9169-e8bd2437cdb9', 'description' => 'Goldbach\'s conjecture', 'correct_answer' => false],
                    ['id' => '396e4ef4-13d8-584c-87f6-a7f9d252000a', 'description' => 'Riemann hypothesis', 'correct_answer' => true]
                ]],
        ['id' => '57a5536d-ede6-537c-855f-33aef4290e79', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which famous number theory conjecture states that every even integer greater than 2 can be expressed as the sum of two primes?', 'difficulty' => 5, 'weight' => 985, 'alternatives' => [
                    ['id' => '19e2b547-f6fe-52f4-9a58-b1de90c08987', 'description' => 'Riemann hypothesis', 'correct_answer' => false],
                    ['id' => '87802f41-b26b-5a4b-8b8b-0f963376532c', 'description' => 'Goldbach\'s conjecture', 'correct_answer' => true],
                    ['id' => '25f6344f-7665-53b6-9b12-1111f48093ef', 'description' => 'P vs NP problem', 'correct_answer' => false],
                    ['id' => '24a1e501-53d1-57e4-8090-df59ee0f32be', 'description' => 'Navier–Stokes existence and smoothness', 'correct_answer' => false],
                    ['id' => 'cc0efb6f-f32e-5ba0-8fc1-b7606d553a57', 'description' => 'abc conjecture', 'correct_answer' => false]
                ]],
        ['id' => '66f2bb5a-0530-51f0-a265-51b70140b8e0', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which Millennium Prize Problem relates the rank of an elliptic curve to the behavior of its L-function at a particular point?', 'difficulty' => 5, 'weight' => 960, 'alternatives' => [
                    ['id' => '9590e409-ab51-550a-8911-5e4d28e3e70e', 'description' => 'Goldbach\'s conjecture', 'correct_answer' => false],
                    ['id' => 'a12ba607-00f2-560f-b5d6-62f25868c42b', 'description' => 'Collatz conjecture', 'correct_answer' => false],
                    ['id' => '80210ead-4667-5197-ab6b-3fc8333186c9', 'description' => 'Yang–Mills existence and mass gap', 'correct_answer' => false],
                    ['id' => '5bf1f058-4efd-5e03-b91a-cde9135e03c0', 'description' => 'Birch and Swinnerton-Dyer conjecture', 'correct_answer' => true],
                    ['id' => '4affe93a-b74b-55c8-b1ce-a2ed3f44df71', 'description' => 'Navier–Stokes existence and smoothness', 'correct_answer' => false]
                ]],
        ['id' => 'eb0f2d99-1960-5fda-891d-d9261bada5d6', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which Millennium Prize Problem asks whether smooth solutions to the three-dimensional incompressible Navier–Stokes equations always exist for suitable initial data?', 'difficulty' => 5, 'weight' => 946, 'alternatives' => [
                    ['id' => 'e3974687-540b-58d7-82c6-d3ae84974d92', 'description' => 'P vs NP problem', 'correct_answer' => false],
                    ['id' => 'e453683d-2c7e-5618-bf8b-0f2d6cb9c9f2', 'description' => 'Twin prime conjecture', 'correct_answer' => false],
                    ['id' => 'f19ab800-e0f0-5356-9d95-24e0610bea18', 'description' => 'Navier–Stokes existence and smoothness', 'correct_answer' => true],
                    ['id' => '5dbb0a76-5683-5807-840f-a95c909cffd0', 'description' => 'abc conjecture', 'correct_answer' => false],
                    ['id' => '5b351a0e-6a94-5914-884a-67131730b93d', 'description' => 'Collatz conjecture', 'correct_answer' => false]
                ]],
        ['id' => '15b7601b-7592-5acf-89a9-575696bc9744', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which number theory problem asks whether repeatedly applying a simple odd-even rule eventually reaches 1 for every positive integer?', 'difficulty' => 5, 'weight' => 886, 'alternatives' => [
                    ['id' => '7fd08dd9-3bc9-57c8-9b98-e6fd5499de08', 'description' => 'Collatz conjecture', 'correct_answer' => true],
                    ['id' => '65c691dd-e0e9-513c-ad82-7060e957d7fe', 'description' => 'Birch and Swinnerton-Dyer conjecture', 'correct_answer' => false],
                    ['id' => '27056abf-4459-5c67-8251-d7399f42aff1', 'description' => 'Goldbach\'s conjecture', 'correct_answer' => false],
                    ['id' => '950d128c-34d7-52ae-a66b-217126565e3c', 'description' => 'Yang–Mills existence and mass gap', 'correct_answer' => false],
                    ['id' => '4a0caede-1608-508e-b58d-71aea9943c41', 'description' => 'abc conjecture', 'correct_answer' => false]
                ]],
        ['id' => '214f0af0-f112-5bd9-9c81-b63b57ffbb74', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which Early Devonian fossil deposit in Scotland preserves exceptionally detailed early land plants and arthropods?', 'difficulty' => 5, 'weight' => 856, 'alternatives' => [
                    ['id' => '355e917d-ad16-5f4f-9e0f-ecbce924681e', 'description' => 'Rhynie chert biota', 'correct_answer' => true],
                    ['id' => 'd0ff735d-2ca8-5c01-bb18-b6ae34fabeff', 'description' => 'Ediacaran biota', 'correct_answer' => false],
                    ['id' => 'bdbd8759-16bb-5056-b22e-d67a618dd5b4', 'description' => 'Messel pit fauna', 'correct_answer' => false],
                    ['id' => '5069dbc4-001f-56fb-a6f5-27a38fe2e11f', 'description' => 'La Brea Tar Pits fauna', 'correct_answer' => false],
                    ['id' => 'a1f0a855-5801-5ea1-96b0-3eef787f4ef6', 'description' => 'Mazon Creek biota', 'correct_answer' => false]
                ]],
        ['id' => '59e96639-2e34-56a1-beeb-0cc76acdc5c9', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which Eocene fossil site in Germany preserves exceptionally detailed mammals, birds, and insects?', 'difficulty' => 5, 'weight' => 837, 'alternatives' => [
                    ['id' => '0dcc5264-0136-5284-95c1-13bb137d0f25', 'description' => 'Chengjiang biota', 'correct_answer' => false],
                    ['id' => '8f27c3cf-db55-59a4-baf9-72cacdccf08a', 'description' => 'Burgess Shale fauna', 'correct_answer' => false],
                    ['id' => '01b873c8-9e93-5ffc-8116-fd3c26583665', 'description' => 'Doushantuo biota', 'correct_answer' => false],
                    ['id' => 'fdd096a8-6447-5e4d-a643-74f4dc3cd4cc', 'description' => 'Messel pit fauna', 'correct_answer' => true],
                    ['id' => '7e0b3eb8-368c-54b1-9cfb-c99c8cb22111', 'description' => 'Sirius Passet fauna', 'correct_answer' => false]
                ]],
        ['id' => '73891202-8f98-5673-8036-1fa6dff1e09a', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which Carboniferous fossil deposit in Illinois is known for ironstone concretions preserving soft-bodied organisms?', 'difficulty' => 5, 'weight' => 804, 'alternatives' => [
                    ['id' => '415010f4-fa2a-558d-b60d-2c28bf054f9f', 'description' => 'Messel pit fauna', 'correct_answer' => false],
                    ['id' => '233bc008-d313-5fe0-95f2-361105aa7ea0', 'description' => 'Rhynie chert biota', 'correct_answer' => false],
                    ['id' => 'e7747fd5-a96f-5779-94a3-fad6d894aae2', 'description' => 'Sirius Passet fauna', 'correct_answer' => false],
                    ['id' => '97814498-0899-5b64-88c9-996bae48218f', 'description' => 'Mazon Creek biota', 'correct_answer' => true],
                    ['id' => '3933d696-0276-56e9-acc0-55d0d09f0638', 'description' => 'Doushantuo biota', 'correct_answer' => false]
                ]],
        ['id' => 'fd093f5b-6461-5ab0-85d4-1a5f74e9903a', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'What name is given to the diverse group of mostly soft-bodied organisms that lived before the Cambrian Period?', 'difficulty' => 5, 'weight' => 922, 'alternatives' => [
                    ['id' => 'e9a5d513-5be5-5552-9da6-bc75afa9cd0c', 'description' => 'Rhynie chert biota', 'correct_answer' => false],
                    ['id' => 'b91bba49-d5c5-587c-9415-7404de1673c0', 'description' => 'Messel pit fauna', 'correct_answer' => false],
                    ['id' => 'aa5e28ab-abff-5ab3-8b11-94f0b4b3c06d', 'description' => 'Chengjiang biota', 'correct_answer' => false],
                    ['id' => '38edf66d-5864-57ae-a1f3-c08af8f59617', 'description' => 'Burgess Shale fauna', 'correct_answer' => false],
                    ['id' => '6f0aa83d-95e1-59c0-beab-2b254332cf49', 'description' => 'Ediacaran biota', 'correct_answer' => true]
                ]],
        ['id' => '362fe504-9b21-5928-9baf-63b2b2235c6f', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which Late Jurassic fossil deposit in Germany is famous for specimens of Archaeopteryx?', 'difficulty' => 5, 'weight' => 851, 'alternatives' => [
                    ['id' => 'fb8d84d1-6be6-5c0d-8781-6bf53eeede61', 'description' => 'Solnhofen limestone fauna', 'correct_answer' => true],
                    ['id' => 'c357c29f-f210-5516-a043-98ba07a18510', 'description' => 'Chengjiang biota', 'correct_answer' => false],
                    ['id' => '9cf5553e-618f-5e68-9ea0-992661b365ee', 'description' => 'Rhynie chert biota', 'correct_answer' => false],
                    ['id' => 'ec0c271c-8f08-5afe-a22c-7e0d69a7e695', 'description' => 'Ediacaran biota', 'correct_answer' => false],
                    ['id' => '9ca0bca2-1d60-506a-8b0c-d58eebee2f8b', 'description' => 'Doushantuo biota', 'correct_answer' => false]
                ]],
        ['id' => '78765f7b-2d83-572e-b590-f2138032bcff', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which Neoproterozoic fossil assemblage in China preserves microscopic fossils and possible early animal embryos?', 'difficulty' => 5, 'weight' => 839, 'alternatives' => [
                    ['id' => '864fe8a7-3546-54f8-b81d-991063a64c3e', 'description' => 'Sirius Passet fauna', 'correct_answer' => false],
                    ['id' => '8ff8ef1e-fbcf-5e88-845e-4619ccf4c491', 'description' => 'Doushantuo biota', 'correct_answer' => true],
                    ['id' => '8983720b-6bae-5475-9569-ff89af3b693d', 'description' => 'La Brea Tar Pits fauna', 'correct_answer' => false],
                    ['id' => '73a8ed82-f3c0-5a74-955d-aad4aaf0f9c8', 'description' => 'Mazon Creek biota', 'correct_answer' => false],
                    ['id' => 'a9ab8d66-a6ba-5566-8f09-6c7cf852bead', 'description' => 'Ediacaran biota', 'correct_answer' => false]
                ]],
        ['id' => '8b83e56c-e45d-59d4-89e4-999833b62d20', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which exceptionally preserved Middle Cambrian fossil assemblage is located in the Canadian Rockies?', 'difficulty' => 5, 'weight' => 953, 'alternatives' => [
                    ['id' => '467d2f3d-0b16-50ed-a18d-08a4b8f8b040', 'description' => 'Solnhofen limestone fauna', 'correct_answer' => false],
                    ['id' => '3285337b-05a0-5546-90eb-88fa0493d06e', 'description' => 'Mazon Creek biota', 'correct_answer' => false],
                    ['id' => '5e960b40-a6b5-5050-ab88-bac022aa52b4', 'description' => 'La Brea Tar Pits fauna', 'correct_answer' => false],
                    ['id' => '2dc917cf-63c3-5f78-9f12-fbefca2df6d2', 'description' => 'Burgess Shale fauna', 'correct_answer' => true],
                    ['id' => '62123fcc-aef8-5a46-97a8-beed123b48f0', 'description' => 'Rhynie chert biota', 'correct_answer' => false]
                ]],
        ['id' => 'ef53a8c4-6036-5776-b362-ea97dbcf89c1', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which early Cambrian fossil assemblage is found in North Greenland?', 'difficulty' => 5, 'weight' => 954, 'alternatives' => [
                    ['id' => '45d76e0c-8917-5b62-81a6-203ab15c1adc', 'description' => 'Burgess Shale fauna', 'correct_answer' => false],
                    ['id' => '0fc4d7a2-5dfe-5597-b32e-4bee4902bfe4', 'description' => 'Rhynie chert biota', 'correct_answer' => false],
                    ['id' => '4651cf22-0570-5092-bcc9-0bc9d7c1c809', 'description' => 'La Brea Tar Pits fauna', 'correct_answer' => false],
                    ['id' => '25f399ac-7d76-5995-9a84-8c1e2f8e0547', 'description' => 'Sirius Passet fauna', 'correct_answer' => true],
                    ['id' => '57538b00-b846-586c-a10a-1f24d161ccf2', 'description' => 'Messel pit fauna', 'correct_answer' => false]
                ]],
        ['id' => 'cab15116-fe15-5f71-a508-f2718fb63089', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which mountain pass between Kazakhstan and China is known as a major corridor through the Dzungarian Alatau?', 'difficulty' => 5, 'weight' => 931, 'alternatives' => [
                    ['id' => '38802d19-e045-571c-b0f5-32ec7e506ecf', 'description' => 'Panjshir Valley', 'correct_answer' => false],
                    ['id' => '38b97cbc-d6aa-538d-9a36-4b36913aa0c0', 'description' => 'Dzungarian Gate', 'correct_answer' => true],
                    ['id' => '5af4123f-7b16-545d-977c-be725ca85567', 'description' => 'Khyber Pass', 'correct_answer' => false],
                    ['id' => 'b8b9a067-16d1-5764-b2bd-8f4282e82fa3', 'description' => 'Aksai Chin', 'correct_answer' => false],
                    ['id' => 'de629a1e-8661-593c-9fe1-f9137dae8c16', 'description' => 'Siachen Glacier', 'correct_answer' => false]
                ]],
        ['id' => '71ec668e-9fb6-51e7-b7c7-ef80b65354eb', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which valley in northeastern Afghanistan has been historically significant in resistance movements?', 'difficulty' => 5, 'weight' => 889, 'alternatives' => [
                    ['id' => '09fafbd6-9875-5eb5-a418-7fdb9b151bb3', 'description' => 'Panjshir Valley', 'correct_answer' => true],
                    ['id' => 'de615894-cca9-57a4-89ba-24e128decff7', 'description' => 'Khyber Pass', 'correct_answer' => false],
                    ['id' => 'eb63b4ae-1b4b-57da-80f5-206805125890', 'description' => 'Wakhan Corridor', 'correct_answer' => false],
                    ['id' => '4fbb2569-5b69-52ab-af43-35aaa9aa975b', 'description' => 'Suwalki Gap', 'correct_answer' => false],
                    ['id' => 'e752917a-4042-5421-ba0b-dbd652b2b95f', 'description' => 'Fergana Valley', 'correct_answer' => false]
                ]],
        ['id' => 'c8112cce-4e3a-503b-b524-b7ad1d5c8e8e', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which region in central Germany was considered a potential invasion route during the Cold War?', 'difficulty' => 5, 'weight' => 803, 'alternatives' => [
                    ['id' => 'c0648401-0285-56db-a579-33eee8900a67', 'description' => 'Siachen Glacier', 'correct_answer' => false],
                    ['id' => 'ac7886ff-bbfc-5e77-bbfb-b9d35695ba43', 'description' => 'Wakhan Corridor', 'correct_answer' => false],
                    ['id' => 'f42926e4-b96d-511f-a209-d9fdcd688a1e', 'description' => 'Dzungarian Gate', 'correct_answer' => false],
                    ['id' => '38b5fb9e-fa1d-5357-8e96-c6bca5dd5a43', 'description' => 'Fulda Gap', 'correct_answer' => true],
                    ['id' => 'a1007977-f21b-592e-870b-558e276ee00c', 'description' => 'Bolan Pass', 'correct_answer' => false]
                ]],
        ['id' => '9d1e7dc0-7819-5f34-9988-c7bfff3226ab', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which high-altitude region is administered by China and claimed by India in the western sector of the Sino-Indian border dispute?', 'difficulty' => 5, 'weight' => 957, 'alternatives' => [
                    ['id' => '22948025-8abb-5be2-9c66-91cb71bad0e4', 'description' => 'Siachen Glacier', 'correct_answer' => false],
                    ['id' => '53d82e32-0c59-5ebb-9382-cbfba0838204', 'description' => 'Aksai Chin', 'correct_answer' => true],
                    ['id' => 'b9503a6d-f868-5d2c-907c-82334f581e7e', 'description' => 'Fergana Valley', 'correct_answer' => false],
                    ['id' => '6358e4bf-b567-53a6-b20b-aaeeb38b81aa', 'description' => 'Fulda Gap', 'correct_answer' => false],
                    ['id' => 'd66c1d39-d830-523d-862a-08e601c8874f', 'description' => 'Suwalki Gap', 'correct_answer' => false]
                ]],
        ['id' => '206a285f-1f71-5365-b5d9-0b02a359c06d', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which mountain pass in Balochistan historically connected the Indus region with the Iranian Plateau?', 'difficulty' => 5, 'weight' => 958, 'alternatives' => [
                    ['id' => '35cc35fe-74bc-5dc4-8609-5cb3d23dca98', 'description' => 'Bolan Pass', 'correct_answer' => true],
                    ['id' => '5f3b2402-f52e-5f2f-9e2a-9dd2e1cc1809', 'description' => 'Siachen Glacier', 'correct_answer' => false],
                    ['id' => 'a3fc7357-cb90-5589-af86-c673ed9aecf1', 'description' => 'Fergana Valley', 'correct_answer' => false],
                    ['id' => 'f7f1bac6-5c11-5e4d-9377-dd73454df58b', 'description' => 'Suwalki Gap', 'correct_answer' => false],
                    ['id' => 'b96ca98e-472e-5c75-b50c-b715b4b85073', 'description' => 'Panjshir Valley', 'correct_answer' => false]
                ]],
        ['id' => '43a8505b-314d-50c3-8314-50e085e9c1fe', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which densely populated valley is shared by Kyrgyzstan, Tajikistan, and Uzbekistan?', 'difficulty' => 5, 'weight' => 812, 'alternatives' => [
                    ['id' => '86728b4a-c85e-59de-834a-aa4c6e26abe1', 'description' => 'Dzungarian Gate', 'correct_answer' => false],
                    ['id' => '8064793b-83b5-5b4f-981c-f14feb6219b6', 'description' => 'Fergana Valley', 'correct_answer' => true],
                    ['id' => '18edc8c3-63f1-529e-81ee-4405cfa74e53', 'description' => 'Fulda Gap', 'correct_answer' => false],
                    ['id' => '86c25e2e-231b-5c6a-b76a-0bc7819a1b65', 'description' => 'Panjshir Valley', 'correct_answer' => false],
                    ['id' => 'a275cb24-1aa7-577a-a6f4-4c2647c99393', 'description' => 'Siachen Glacier', 'correct_answer' => false]
                ]],
        ['id' => 'fe0c26bb-657d-5443-8bff-bc3691a3da8d', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which narrow strip of Afghan territory separates Tajikistan from Pakistan and reaches the Chinese border?', 'difficulty' => 5, 'weight' => 805, 'alternatives' => [
                    ['id' => '114cdafe-6408-5587-b756-2508b154dea6', 'description' => 'Wakhan Corridor', 'correct_answer' => true],
                    ['id' => '9ea0e24c-54e8-5015-983f-71d5d5d1d7bc', 'description' => 'Dzungarian Gate', 'correct_answer' => false],
                    ['id' => '749c5a72-e6a6-5dae-a9a1-239197f2d8e8', 'description' => 'Aksai Chin', 'correct_answer' => false],
                    ['id' => '09b7324b-6404-52e3-aad6-6d81f4a04fad', 'description' => 'Siachen Glacier', 'correct_answer' => false],
                    ['id' => '7d907fde-c45f-5a2f-9bfa-6ff56c70570b', 'description' => 'Fergana Valley', 'correct_answer' => false]
                ]],
        ['id' => '9c252a9a-5a93-528a-8f7b-3d3e1ccd7572', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which strategically important corridor lies between Poland and Lithuania, connecting the Baltic states to the rest of NATO territory?', 'difficulty' => 5, 'weight' => 813, 'alternatives' => [
                    ['id' => 'c819e68b-4516-51bb-a81e-a9046211f26f', 'description' => 'Aksai Chin', 'correct_answer' => false],
                    ['id' => '8bb50331-b076-5508-94a6-d2ac65cb270e', 'description' => 'Fergana Valley', 'correct_answer' => false],
                    ['id' => '124dd4c1-0bd8-541d-aca2-426cba0f5ccb', 'description' => 'Panjshir Valley', 'correct_answer' => false],
                    ['id' => '7ffca5f5-b4b1-5736-8984-0f9ec9586128', 'description' => 'Dzungarian Gate', 'correct_answer' => false],
                    ['id' => 'a24fea52-1c97-563d-952a-b2258cafc46b', 'description' => 'Suwalki Gap', 'correct_answer' => true]
                ]],
        ['id' => 'fc3bb467-b10e-59a8-8f9a-3bb0cb9a6032', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which disputed Neolithic artifacts from Romania bear symbols sometimes claimed to be among the earliest writing?', 'difficulty' => 5, 'weight' => 991, 'alternatives' => [
                    ['id' => 'c31e29e9-e198-5e4e-af7f-50ebbda4acbd', 'description' => 'Tărtăria tablets', 'correct_answer' => true],
                    ['id' => '3a5fac2c-f2dc-581b-ac22-fc760e67bc6f', 'description' => 'Vinča symbols', 'correct_answer' => false],
                    ['id' => 'b3afa14b-4d56-58cd-b0bb-f5431b9a37e6', 'description' => 'Cypro-Minoan script', 'correct_answer' => false],
                    ['id' => 'd0a2b411-f9cb-5a56-b1f9-6702a1d2b232', 'description' => 'Cretan hieroglyphs', 'correct_answer' => false],
                    ['id' => '2410c974-4b75-549a-8304-eebd34071cdf', 'description' => 'Meroitic hieroglyphs', 'correct_answer' => false]
                ]],
        ['id' => 'a8f60a40-57b4-5bfe-80f6-af1ff6901add', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which Bronze Age artifact from Crete bears a spiral arrangement of stamped symbols that have not been deciphered?', 'difficulty' => 5, 'weight' => 828, 'alternatives' => [
                    ['id' => '2d96c1f2-1b2e-506d-b884-03f91b411772', 'description' => 'Tărtăria tablets', 'correct_answer' => false],
                    ['id' => '69ed5fe0-93f1-59ee-8504-fc72f0412da6', 'description' => 'Cypro-Minoan script', 'correct_answer' => false],
                    ['id' => 'd48402a6-9257-564c-adeb-ce3d37dd916b', 'description' => 'Meroitic hieroglyphs', 'correct_answer' => false],
                    ['id' => 'e300e39f-2707-5549-8501-783963c14fdb', 'description' => 'Vinča symbols', 'correct_answer' => false],
                    ['id' => 'e6a392a7-cf5b-58aa-96e9-6f7e206d9970', 'description' => 'Phaistos Disc', 'correct_answer' => true]
                ]],
        ['id' => '52fbbb09-0089-53f8-9527-eeb50857a795', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which writing system, distinct from cuneiform, was used for monumental inscriptions in the Luwian language in Anatolia?', 'difficulty' => 5, 'weight' => 849, 'alternatives' => [
                    ['id' => '396acf5e-81ee-5772-aa62-8937fd68ee5a', 'description' => 'Vinča symbols', 'correct_answer' => false],
                    ['id' => 'd1ae1960-8fb6-5eb5-a56d-071b374827da', 'description' => 'Byblos syllabary', 'correct_answer' => false],
                    ['id' => '55357e8d-bdb7-5b61-bebe-db946dbece22', 'description' => 'Hittite hieroglyphs', 'correct_answer' => true],
                    ['id' => '99d43d3b-10ca-508a-9bca-c96cf9d1ab5f', 'description' => 'Phaistos Disc', 'correct_answer' => false],
                    ['id' => '43b4afc7-947b-507a-b24a-324ffbe60043', 'description' => 'Cretan hieroglyphs', 'correct_answer' => false]
                ]],
        ['id' => '84d13eeb-bb34-5f98-9c58-76f9a23f24a2', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'What name is given to signs found on Neolithic artifacts in southeastern Europe, whose interpretation as writing is disputed?', 'difficulty' => 5, 'weight' => 923, 'alternatives' => [
                    ['id' => 'c522d886-9457-5ef5-bde2-4464a0f136cd', 'description' => 'Tărtăria tablets', 'correct_answer' => false],
                    ['id' => 'fb142918-287c-5b63-bcbb-2bcec92a5c1e', 'description' => 'Cretan hieroglyphs', 'correct_answer' => false],
                    ['id' => 'a3a04ec3-e210-5d38-8767-b73ff95304fd', 'description' => 'Vinča symbols', 'correct_answer' => true],
                    ['id' => '445dae7e-bad0-548e-884d-2125b8316ef4', 'description' => 'Byblos syllabary', 'correct_answer' => false],
                    ['id' => '56045b42-b98c-5425-89e4-afb725839e97', 'description' => 'Dispilio tablet', 'correct_answer' => false]
                ]],
        ['id' => '3ffb9cf9-87f2-56d7-b9e4-7b1f5e7530eb', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which Bronze Age script found in Cyprus remains undeciphered despite its relationship to other Aegean scripts?', 'difficulty' => 5, 'weight' => 978, 'alternatives' => [
                    ['id' => '3333f05a-0bd1-5967-8af1-1266a3d69553', 'description' => 'Tărtăria tablets', 'correct_answer' => false],
                    ['id' => '4ad5b0d4-72c8-5ace-90f8-e5eb8dee6267', 'description' => 'Dispilio tablet', 'correct_answer' => false],
                    ['id' => '468b5e2b-dc71-518e-bd78-837fd320d1b6', 'description' => 'Byblos syllabary', 'correct_answer' => false],
                    ['id' => '7fde26fd-c980-5769-9e45-a4c96b86a8e3', 'description' => 'Cypro-Minoan script', 'correct_answer' => true],
                    ['id' => 'dc8dcfbd-7020-5acb-8383-897b7a6c5253', 'description' => 'Phaistos Disc', 'correct_answer' => false]
                ]],
        ['id' => '99ccdcd6-4eaf-5dfe-ae29-3c430403d80b', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which script of the Kingdom of Kush is phonetic but records a language that is not fully understood?', 'difficulty' => 5, 'weight' => 960, 'alternatives' => [
                    ['id' => '1cd7007b-c0af-5c79-9563-a71c19ae0033', 'description' => 'Dispilio tablet', 'correct_answer' => false],
                    ['id' => 'b7c6ed4f-0667-5b05-8fe6-fc3ad9b3fdfe', 'description' => 'Vinča symbols', 'correct_answer' => false],
                    ['id' => '283f29f8-501d-5f76-8584-2d90499cb3d8', 'description' => 'Meroitic hieroglyphs', 'correct_answer' => true],
                    ['id' => '7965891e-f7c4-5335-8c84-2bf2d02639f2', 'description' => 'Cypro-Minoan script', 'correct_answer' => false],
                    ['id' => '21b227c1-0aac-58bb-b173-9f9eb4b1f52f', 'description' => 'Cretan hieroglyphs', 'correct_answer' => false]
                ]],
        ['id' => '216efaf3-eba2-50b7-81ac-38c0fd276ddd', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which Neolithic wooden tablet found in Greece bears incised signs whose status as writing remains debated?', 'difficulty' => 5, 'weight' => 842, 'alternatives' => [
                    ['id' => '5f6e716b-7f8e-5283-8a08-e503ab63e87c', 'description' => 'Dispilio tablet', 'correct_answer' => true],
                    ['id' => '1b359913-061e-5f83-b7b1-90c7a47b411f', 'description' => 'Byblos syllabary', 'correct_answer' => false],
                    ['id' => 'e53c8b81-5cb4-5adb-ae09-50b6d0af1649', 'description' => 'Vinča symbols', 'correct_answer' => false],
                    ['id' => '53642ed5-2662-5c0a-adde-f5c10e94890a', 'description' => 'Cretan hieroglyphs', 'correct_answer' => false],
                    ['id' => '9d7cde94-498b-55e6-b953-df6a35cbb975', 'description' => 'Isthmian script', 'correct_answer' => false]
                ]],
        ['id' => 'd16ce739-b729-5f64-96fe-508604ae2ddc', 'locale' => 'en-US', 'category' => '0f43e2b8-2ebc-5ce5-8347-227e0d62bbac', 'question' => 'Which name is another term for the Epi-Olmec writing system found in Mesoamerica?', 'difficulty' => 5, 'weight' => 894, 'alternatives' => [
                    ['id' => '4b3531c2-d975-573e-b0dc-1bae70e1aeaa', 'description' => 'Meroitic hieroglyphs', 'correct_answer' => false],
                    ['id' => 'c1e946c6-a540-5ba5-b36e-78340396a190', 'description' => 'Cretan hieroglyphs', 'correct_answer' => false],
                    ['id' => '627e7c87-1013-57c2-a84b-963c6e0d58a8', 'description' => 'Isthmian script', 'correct_answer' => true],
                    ['id' => '33304abd-20c5-5411-81de-1f338d6ff07a', 'description' => 'Byblos syllabary', 'correct_answer' => false],
                    ['id' => 'a23b4440-00eb-53ec-8d87-7971313b3f52', 'description' => 'Vinča symbols', 'correct_answer' => false]
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
