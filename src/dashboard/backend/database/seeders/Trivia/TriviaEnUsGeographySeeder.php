<?php

namespace Database\Seeders\Trivia;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TriviaEnUsGeographySeeder extends Seeder
{
    private const CATEGORY = ['id' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'created_by' => 'SYSTEM', 'short_description' => 'geography', 'description' => 'Geography'];

    private const QUESTIONS = [
        ['id' => '89a65c3c-1813-5923-89c7-690d2f2f37fc', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'What is the capital of South Korea?', 'difficulty' => 1, 'weight' => 161, 'alternatives' => [
                    ['id' => 'd9ceb04d-8aa1-58b4-8748-599a666fabab', 'description' => 'New Delhi', 'correct_answer' => false],
                    ['id' => '8e24816d-0cae-5d9f-a817-d9301c17eb73', 'description' => 'Seoul', 'correct_answer' => true],
                    ['id' => 'c9b226b6-b962-59ef-b73d-83645cdb5da7', 'description' => 'Tokyo', 'correct_answer' => false],
                    ['id' => '44a40b3f-8df7-576c-9e84-dc46757dbb04', 'description' => 'Beijing', 'correct_answer' => false],
                    ['id' => '7d9ad492-6aef-53b6-bbd2-a8d14b3e7ebf', 'description' => 'Canberra', 'correct_answer' => false]
                ]],
        ['id' => '034da1ab-6117-5b2d-8fcb-1fb74a6a054b', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'What is the capital of Indonesia?', 'difficulty' => 1, 'weight' => 117, 'alternatives' => [
                    ['id' => '5996eaee-a2a5-59cb-938d-964461cd3161', 'description' => 'Seoul', 'correct_answer' => false],
                    ['id' => 'b67f6fa4-76a1-5af2-ad8c-595ccd397856', 'description' => 'Canberra', 'correct_answer' => false],
                    ['id' => '0574a134-2e0e-57b9-9fc9-e6531bed01d5', 'description' => 'Hanoi', 'correct_answer' => false],
                    ['id' => 'e735b9cd-3871-561f-b84a-953d783392bb', 'description' => 'Jakarta', 'correct_answer' => true],
                    ['id' => '2339d511-fefa-57f8-8e7b-e80025af7146', 'description' => 'Manila', 'correct_answer' => false]
                ]],
        ['id' => '5b256766-de6d-56a1-bfb4-998d1c30121c', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'What is the capital of China?', 'difficulty' => 1, 'weight' => 110, 'alternatives' => [
                    ['id' => '48dab39b-7667-51d0-8ef4-0ca8075fe94c', 'description' => 'Kuala Lumpur', 'correct_answer' => false],
                    ['id' => 'cdea0a28-daf4-5278-ab4b-760eab2a8e4d', 'description' => 'Jakarta', 'correct_answer' => false],
                    ['id' => 'dd370027-33ce-5f02-b747-9dfcda7ce284', 'description' => 'Beijing', 'correct_answer' => true],
                    ['id' => '38675a2d-ddb9-513e-9eb5-dcfbe59d0034', 'description' => 'Hanoi', 'correct_answer' => false],
                    ['id' => '4feb01df-2741-592a-b2e2-c31b4ce2686f', 'description' => 'Bangkok', 'correct_answer' => false]
                ]],
        ['id' => '7670d2ab-bb39-52ae-b9fb-716482823879', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'What is the capital of Australia?', 'difficulty' => 1, 'weight' => 194, 'alternatives' => [
                    ['id' => '1cf33c7f-a1ce-536f-a947-e5dbcba3d8b9', 'description' => 'Beijing', 'correct_answer' => false],
                    ['id' => '9e059234-bf1a-5256-949d-4f72fe77a3bf', 'description' => 'Canberra', 'correct_answer' => true],
                    ['id' => 'fb7ab9f2-2e99-5a87-b9f9-bb7050efab2c', 'description' => 'Hanoi', 'correct_answer' => false],
                    ['id' => 'd33052f1-0fcc-5eec-9c0f-68d580629370', 'description' => 'Manila', 'correct_answer' => false],
                    ['id' => '5cbf1977-9c9a-5caf-8784-e65e6e0af88e', 'description' => 'Bangkok', 'correct_answer' => false]
                ]],
        ['id' => 'd861d7db-f55c-5fe0-a009-929561a8fbfd', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'What is the capital of Vietnam?', 'difficulty' => 1, 'weight' => 128, 'alternatives' => [
                    ['id' => '3eaeba3c-338f-5706-ab0e-974d726678c0', 'description' => 'Hanoi', 'correct_answer' => true],
                    ['id' => 'fdd47976-7ab9-5c85-acba-ac5b76b18624', 'description' => 'Seoul', 'correct_answer' => false],
                    ['id' => '41b78a00-d116-535a-9eac-8322630114b4', 'description' => 'Beijing', 'correct_answer' => false],
                    ['id' => 'f6816543-9319-5e9e-9e94-f3ad007cac88', 'description' => 'Jakarta', 'correct_answer' => false],
                    ['id' => '06efa759-c5c8-5bf2-bae7-27080a3d76aa', 'description' => 'Bangkok', 'correct_answer' => false]
                ]],
        ['id' => '18872052-4e92-5223-af21-d512b665c429', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'What is the capital of Thailand?', 'difficulty' => 1, 'weight' => 132, 'alternatives' => [
                    ['id' => '60f0cfa3-53de-5f08-b1f0-8956d4ff5f9a', 'description' => 'Hanoi', 'correct_answer' => false],
                    ['id' => 'ed3df901-e8fa-53be-a796-8f2ab360eae6', 'description' => 'New Delhi', 'correct_answer' => false],
                    ['id' => '19db9ed5-c588-559d-bf14-5a6dcb9c1f68', 'description' => 'Bangkok', 'correct_answer' => true],
                    ['id' => '137f21e9-bf7b-57e8-a1ba-6b5d1ab91d8d', 'description' => 'Tokyo', 'correct_answer' => false],
                    ['id' => '8f701684-46ab-539f-ad16-763dd51222c2', 'description' => 'Manila', 'correct_answer' => false]
                ]],
        ['id' => 'de4a31ef-5540-5234-92a1-35f258ec2eea', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'What is the capital of the Philippines?', 'difficulty' => 1, 'weight' => 123, 'alternatives' => [
                    ['id' => '7a4e1ddd-d1e3-5b3d-a439-7615ba8128c3', 'description' => 'Hanoi', 'correct_answer' => false],
                    ['id' => 'cb9cd9be-a88d-5ee8-bacf-a52bcd16e211', 'description' => 'Jakarta', 'correct_answer' => false],
                    ['id' => 'c9ac6dfd-08e5-5796-8eb3-458190f9d1a6', 'description' => 'Manila', 'correct_answer' => true],
                    ['id' => '9b30937f-1e5a-590b-b766-d3fe00f592b0', 'description' => 'Beijing', 'correct_answer' => false],
                    ['id' => 'b9d318ef-912a-588a-8aeb-b0a68da2a8cd', 'description' => 'Tokyo', 'correct_answer' => false]
                ]],
        ['id' => '17cb511c-4221-55ee-a223-4d6c848e0d6c', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'What is the capital of Japan?', 'difficulty' => 1, 'weight' => 183, 'alternatives' => [
                    ['id' => '8ead5e86-70ef-5db7-bfab-7817a2688f6f', 'description' => 'Jakarta', 'correct_answer' => false],
                    ['id' => 'cd44cfba-6e5e-57d4-85b4-bd3f3e1494e9', 'description' => 'Manila', 'correct_answer' => false],
                    ['id' => '7de21e6f-0a65-52b9-893a-efe517c8b829', 'description' => 'Bangkok', 'correct_answer' => false],
                    ['id' => '5c50e902-56f5-5fe5-b638-20320ba9d149', 'description' => 'New Delhi', 'correct_answer' => false],
                    ['id' => '80f21daa-90cb-572f-874e-7598994053bc', 'description' => 'Tokyo', 'correct_answer' => true]
                ]],
        ['id' => '386cde0f-4d2c-5cf4-8e3e-bdd6c1402f6e', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'What is the highest mountain above sea level?', 'difficulty' => 1, 'weight' => 137, 'alternatives' => [
                    ['id' => '7cc57a9f-b08c-5691-b591-91519ddcec63', 'description' => 'Nanga Parbat', 'correct_answer' => false],
                    ['id' => '6dbd6e9a-70f3-5740-93a5-c3ad08fa279f', 'description' => 'Mount Everest', 'correct_answer' => true],
                    ['id' => '39c6d9f1-f091-5547-b5db-ff6751391018', 'description' => 'Kangchenjunga', 'correct_answer' => false],
                    ['id' => '4c3c2967-4dab-50b4-a47c-7fd06a21d154', 'description' => 'Cho Oyu', 'correct_answer' => false],
                    ['id' => '08bd1ee4-5fa0-5c23-a99a-f0c85e258ae0', 'description' => 'Lhotse', 'correct_answer' => false]
                ]],
        ['id' => 'f2f9d95e-2671-53e6-83b5-c0fb9bb71fab', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which mountain is the world\'s ninth-highest above sea level?', 'difficulty' => 1, 'weight' => 147, 'alternatives' => [
                    ['id' => '0a7d05b6-f9fc-51e3-bbec-8c8791010cb1', 'description' => 'Makalu', 'correct_answer' => false],
                    ['id' => 'ccfd5756-0b91-5b58-aeb4-8ce9280916ae', 'description' => 'Manaslu', 'correct_answer' => false],
                    ['id' => '18e6d527-8059-5dda-80a5-387a0b3a9169', 'description' => 'K2', 'correct_answer' => false],
                    ['id' => '7f819ff7-c732-5df4-9b1a-034d143a6e2c', 'description' => 'Mount Everest', 'correct_answer' => false],
                    ['id' => 'f7e10366-c251-5636-b4ff-4e1290b27113', 'description' => 'Nanga Parbat', 'correct_answer' => true]
                ]],
        ['id' => '756b43b1-f90c-556d-92d2-352441d1ae0d', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which mountain is the world\'s eighth-highest above sea level?', 'difficulty' => 1, 'weight' => 164, 'alternatives' => [
                    ['id' => '5a2b2e86-876f-5095-b768-7968d6392515', 'description' => 'Cho Oyu', 'correct_answer' => false],
                    ['id' => '418ebbcc-7068-546d-b2c4-67a61f9946cf', 'description' => 'Nanga Parbat', 'correct_answer' => false],
                    ['id' => '0577f247-5f98-5c9b-a86d-cf54977bda05', 'description' => 'Mount Everest', 'correct_answer' => false],
                    ['id' => '8b4a4048-09e3-5ae5-b6e0-400d98c2f693', 'description' => 'Lhotse', 'correct_answer' => false],
                    ['id' => '2530ab03-9d19-54dc-8047-51b177c0f3aa', 'description' => 'Manaslu', 'correct_answer' => true]
                ]],
        ['id' => '320d9c11-fbe6-5352-b7af-abb20ad54990', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which mountain is the world\'s seventh-highest above sea level?', 'difficulty' => 1, 'weight' => 130, 'alternatives' => [
                    ['id' => 'c2cd58a8-ff9a-5541-af6c-5671b5506feb', 'description' => 'Nanga Parbat', 'correct_answer' => false],
                    ['id' => '9d495371-d271-5341-89f3-4b2501e23fff', 'description' => 'Dhaulagiri I', 'correct_answer' => true],
                    ['id' => 'b9ef05d1-5192-5b40-a6e2-ceeb86a72b39', 'description' => 'Lhotse', 'correct_answer' => false],
                    ['id' => 'cd404319-06a8-5db9-8c17-669be19663a4', 'description' => 'Mount Everest', 'correct_answer' => false],
                    ['id' => 'd0b157e2-a379-5213-97f6-b04de8d5e423', 'description' => 'Cho Oyu', 'correct_answer' => false]
                ]],
        ['id' => '92d8c7f3-45cf-51bd-84f5-4b4596d621a2', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which mountain is the world\'s fifth-highest above sea level?', 'difficulty' => 1, 'weight' => 152, 'alternatives' => [
                    ['id' => '3387b16d-b63c-5a5a-ba98-1d1b2f1ec670', 'description' => 'Annapurna I', 'correct_answer' => false],
                    ['id' => '4d530a01-ed4f-507d-adcb-cf43b1fd9068', 'description' => 'Manaslu', 'correct_answer' => false],
                    ['id' => 'a14b2dbb-92c8-5c51-a043-95b2cfdfcc78', 'description' => 'Makalu', 'correct_answer' => true],
                    ['id' => 'ac46ec95-e7c0-5259-98d7-90f8cde40bc8', 'description' => 'Kangchenjunga', 'correct_answer' => false],
                    ['id' => '26bb2360-cf8f-5de6-b4f2-00e54dc68c41', 'description' => 'Cho Oyu', 'correct_answer' => false]
                ]],
        ['id' => '062497fa-1adf-5723-85d0-072849be2741', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which mountain is the world\'s tenth-highest above sea level?', 'difficulty' => 1, 'weight' => 183, 'alternatives' => [
                    ['id' => 'cfe36f9d-6256-5a1a-ac33-6d590e0bf593', 'description' => 'Lhotse', 'correct_answer' => false],
                    ['id' => '6a8ccc9d-b1f7-564f-a040-5c4f0c6d721e', 'description' => 'Annapurna I', 'correct_answer' => true],
                    ['id' => '60fe4fba-8b4d-5822-983b-4acfed6f80b7', 'description' => 'Kangchenjunga', 'correct_answer' => false],
                    ['id' => 'a34438ea-d62a-5b49-b15d-79174a874cb5', 'description' => 'Dhaulagiri I', 'correct_answer' => false],
                    ['id' => '13d5fcd5-7da0-5862-922c-5f3dfbf387cf', 'description' => 'Nanga Parbat', 'correct_answer' => false]
                ]],
        ['id' => '85d3d36a-6e65-59fc-8566-74bd21b42819', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which mountain is the world\'s sixth-highest above sea level?', 'difficulty' => 1, 'weight' => 174, 'alternatives' => [
                    ['id' => 'fb4bc9c8-ce57-59f8-ad28-13356571f29f', 'description' => 'Nanga Parbat', 'correct_answer' => false],
                    ['id' => '1b4a28b3-f753-598c-b1ea-2106b64a3eb4', 'description' => 'Dhaulagiri I', 'correct_answer' => false],
                    ['id' => 'ee32f430-4470-50eb-a022-c40ad2f23be5', 'description' => 'Annapurna I', 'correct_answer' => false],
                    ['id' => '90426ea2-7622-5e84-bbec-1633384e3693', 'description' => 'K2', 'correct_answer' => false],
                    ['id' => 'c63c36bd-1b7f-5f52-8dda-8bed6155a9c1', 'description' => 'Cho Oyu', 'correct_answer' => true]
                ]],
        ['id' => '2362ecf6-2496-5629-8601-02b8f1395f9c', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which mountain is the world\'s third-highest above sea level?', 'difficulty' => 1, 'weight' => 181, 'alternatives' => [
                    ['id' => 'de14bcfc-61e6-56df-89d7-7172ed43d142', 'description' => 'Annapurna I', 'correct_answer' => false],
                    ['id' => '17604250-bc9e-521f-9da0-28776fbb47ad', 'description' => 'Manaslu', 'correct_answer' => false],
                    ['id' => '781dd404-68c9-5cc9-9710-781689e22a27', 'description' => 'K2', 'correct_answer' => false],
                    ['id' => '91fcda17-9b14-50c9-b087-5627123fe0c6', 'description' => 'Kangchenjunga', 'correct_answer' => true],
                    ['id' => 'b2b088db-fac9-534a-a8ef-e31636abcbb6', 'description' => 'Makalu', 'correct_answer' => false]
                ]],
        ['id' => '013585c6-5aff-5e0f-9862-a47171617d8a', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which coastal desert in Namibia contains some of the world\'s tallest dunes?', 'difficulty' => 1, 'weight' => 146, 'alternatives' => [
                    ['id' => 'e19707f3-546c-5921-bb74-d661c6436707', 'description' => 'Sonoran Desert', 'correct_answer' => false],
                    ['id' => '21f260bd-1a3a-5e30-bdcf-351e6ade6bdf', 'description' => 'Sahara', 'correct_answer' => false],
                    ['id' => 'c6e77f9d-7a90-507b-bef0-bd33f7e05415', 'description' => 'Namib Desert', 'correct_answer' => true],
                    ['id' => '12799f8d-1264-56eb-95ac-ceecbb107a94', 'description' => 'Arabian Desert', 'correct_answer' => false],
                    ['id' => 'd0b1dad2-7050-5242-b54a-a4507863bd14', 'description' => 'Gobi Desert', 'correct_answer' => false]
                ]],
        ['id' => '1f0da2e0-b99d-52c5-bc71-f461b579b792', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which large desert lies across northern China and southern Mongolia?', 'difficulty' => 1, 'weight' => 183, 'alternatives' => [
                    ['id' => '2a6573c7-fe90-54bf-a7a4-f70cf184991f', 'description' => 'Gobi Desert', 'correct_answer' => true],
                    ['id' => '0036e3b0-e0f3-543d-b452-f5bcb00051c2', 'description' => 'Namib Desert', 'correct_answer' => false],
                    ['id' => 'f9a61200-4116-5d71-b775-2f272359554f', 'description' => 'Atacama Desert', 'correct_answer' => false],
                    ['id' => 'a91764ef-2a35-5715-8f72-e2625b59b2a4', 'description' => 'Kalahari', 'correct_answer' => false],
                    ['id' => '12339bfa-cb6c-5d53-b0ec-09598fdcebd3', 'description' => 'Mojave Desert', 'correct_answer' => false]
                ]],
        ['id' => '501aa223-dacb-5553-905c-3f4925a7f0cb', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which is the largest desert in Australia?', 'difficulty' => 1, 'weight' => 184, 'alternatives' => [
                    ['id' => 'e4a6bc2d-ef4c-58c2-99b2-31bf917a077b', 'description' => 'Mojave Desert', 'correct_answer' => false],
                    ['id' => '9d523c0e-88e4-53d9-8467-6b649d11b77a', 'description' => 'Patagonian Desert', 'correct_answer' => false],
                    ['id' => '2efacdff-ec8f-549d-9f2a-103421779d73', 'description' => 'Arabian Desert', 'correct_answer' => false],
                    ['id' => 'f0593f9b-87d8-5d6d-b55b-aca25012cff2', 'description' => 'Great Victoria Desert', 'correct_answer' => true],
                    ['id' => 'ed7c6d76-a60d-5ebe-a434-ba20b6e9d712', 'description' => 'Namib Desert', 'correct_answer' => false]
                ]],
        ['id' => '9d174856-f5f1-5f71-9a6f-a364cc36bad2', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which desert spans parts of Arizona, California, and northwestern Mexico?', 'difficulty' => 1, 'weight' => 191, 'alternatives' => [
                    ['id' => '04f99fb5-ad7e-5326-99c7-1e2120776e8a', 'description' => 'Arabian Desert', 'correct_answer' => false],
                    ['id' => '5a0352a1-9c5a-58ee-bcc8-918c901cd806', 'description' => 'Sonoran Desert', 'correct_answer' => true],
                    ['id' => '96ebb3b7-1dd2-5265-9d5d-22ede594cdd0', 'description' => 'Great Victoria Desert', 'correct_answer' => false],
                    ['id' => '4d3fab49-a760-5d4f-abda-0773c0ba846d', 'description' => 'Kalahari', 'correct_answer' => false],
                    ['id' => 'c43c1cd7-5785-511c-be76-621956ef0993', 'description' => 'Patagonian Desert', 'correct_answer' => false]
                ]],
        ['id' => 'ffa0572c-c85b-5f0a-bf3d-28a9a204f6d2', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which desert occupies much of the Arabian Peninsula?', 'difficulty' => 1, 'weight' => 155, 'alternatives' => [
                    ['id' => 'be62abcb-7bb1-596a-a045-b1853ffd7b00', 'description' => 'Gobi Desert', 'correct_answer' => false],
                    ['id' => 'aa9982fb-d4c7-5944-873b-86ab2da4e6e2', 'description' => 'Arabian Desert', 'correct_answer' => true],
                    ['id' => 'f0202834-cc4c-564b-9c39-72550c0482d4', 'description' => 'Patagonian Desert', 'correct_answer' => false],
                    ['id' => '9156982e-9695-55f0-b855-a80f6603db96', 'description' => 'Namib Desert', 'correct_answer' => false],
                    ['id' => 'f4161521-78bb-5892-8d01-7082cd11284b', 'description' => 'Great Victoria Desert', 'correct_answer' => false]
                ]],
        ['id' => 'ce6cf519-bb4b-5a3a-b751-6a4ba27de85f', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which is the largest hot desert in the world?', 'difficulty' => 1, 'weight' => 186, 'alternatives' => [
                    ['id' => '191e5513-2023-5e61-b4bb-7cc126a3c65f', 'description' => 'Arabian Desert', 'correct_answer' => false],
                    ['id' => 'a6c825b9-a183-517f-b0d5-999d825b4c94', 'description' => 'Gobi Desert', 'correct_answer' => false],
                    ['id' => '7eccf466-dee8-56a4-af39-6437914d6ebf', 'description' => 'Patagonian Desert', 'correct_answer' => false],
                    ['id' => '8570c89d-30b4-5da1-afbd-d123210fc8f5', 'description' => 'Sahara', 'correct_answer' => true],
                    ['id' => 'aec73ea0-b498-55fb-b486-87b2021b694e', 'description' => 'Mojave Desert', 'correct_answer' => false]
                ]],
        ['id' => '14588d44-cdbc-544c-95ac-abbcc3f5adb7', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which semi-arid sandy savanna region covers parts of Botswana, Namibia, and South Africa?', 'difficulty' => 1, 'weight' => 122, 'alternatives' => [
                    ['id' => '450e5289-afd1-512f-bf15-1c5cff666be6', 'description' => 'Great Victoria Desert', 'correct_answer' => false],
                    ['id' => '04f322ff-f609-57b5-9990-5f5ec066af9c', 'description' => 'Kalahari', 'correct_answer' => true],
                    ['id' => '687fd043-1a51-5d85-bbed-8a4e50927407', 'description' => 'Sonoran Desert', 'correct_answer' => false],
                    ['id' => '1d9835f6-3923-587e-aa82-23721e218c15', 'description' => 'Sahara', 'correct_answer' => false],
                    ['id' => 'd7cd036d-61ac-56e4-b9e6-ce35542acc53', 'description' => 'Patagonian Desert', 'correct_answer' => false]
                ]],
        ['id' => 'ada4a227-272d-5127-8fcd-57fcf2f10792', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which desert in northern Chile is among the driest places on Earth?', 'difficulty' => 1, 'weight' => 146, 'alternatives' => [
                    ['id' => 'e1cb0232-580f-59cc-95cc-e95cf689e4d0', 'description' => 'Gobi Desert', 'correct_answer' => false],
                    ['id' => 'b0ad3606-4801-591b-af3b-ba433e0ce51a', 'description' => 'Mojave Desert', 'correct_answer' => false],
                    ['id' => '5a10e79b-b497-5a0e-a229-18d4de16b897', 'description' => 'Kalahari', 'correct_answer' => false],
                    ['id' => 'c80cd060-7c3e-55ce-85c3-4a72e234767d', 'description' => 'Arabian Desert', 'correct_answer' => false],
                    ['id' => '157de5e7-06b4-51d3-99b0-a07b5dbf1572', 'description' => 'Atacama Desert', 'correct_answer' => true]
                ]],
        ['id' => 'cdb3457e-06dc-5aa6-aace-883345a831a5', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'On which continent are the Alps located?', 'difficulty' => 1, 'weight' => 169, 'alternatives' => [
                    ['id' => 'bff564be-4ae3-5e1a-b2c2-c4992322d927', 'description' => 'Antarctica', 'correct_answer' => false],
                    ['id' => '1b4d975c-6196-5e74-a023-4d5109678623', 'description' => 'Asia', 'correct_answer' => false],
                    ['id' => 'c648db6e-38e1-545e-b6b4-f41adcc5c9a3', 'description' => 'Africa', 'correct_answer' => false],
                    ['id' => '0685c4ee-d191-5440-a415-c1df70a5bdc2', 'description' => 'South America', 'correct_answer' => false],
                    ['id' => '9263b656-8d50-5074-9693-34a340fd1785', 'description' => 'Europe', 'correct_answer' => true]
                ]],
        ['id' => 'a39f08a1-dbaa-5747-b19c-c8833adf851d', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'On which continent are the Andes located?', 'difficulty' => 1, 'weight' => 159, 'alternatives' => [
                    ['id' => '6969822d-9577-586a-9dbf-943f7ee48571', 'description' => 'The Caribbean', 'correct_answer' => false],
                    ['id' => '19e69144-5488-5f40-9a67-748145a514eb', 'description' => 'South America', 'correct_answer' => true],
                    ['id' => 'da25e737-0ae7-5d9e-9873-f33264524e84', 'description' => 'Europe', 'correct_answer' => false],
                    ['id' => '9c653acc-6d28-5e71-9f17-a8b290ab4d62', 'description' => 'North America', 'correct_answer' => false],
                    ['id' => '5f110b18-89da-5b0b-942c-05aa893775e7', 'description' => 'Africa', 'correct_answer' => false]
                ]],
        ['id' => '7287ac70-3b92-5178-895c-a41ec8fd4db1', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'On which continent is the Sahara Desert located?', 'difficulty' => 1, 'weight' => 128, 'alternatives' => [
                    ['id' => '41752905-9364-51be-b010-352951193f62', 'description' => 'The Caribbean', 'correct_answer' => false],
                    ['id' => '603dc865-59d7-59db-994e-a72be3058b09', 'description' => 'Central America', 'correct_answer' => false],
                    ['id' => 'bae9a340-8fa3-5081-8a35-1ef17fcc814e', 'description' => 'Europe', 'correct_answer' => false],
                    ['id' => '1b2e8e79-f42e-568a-86e4-f93e62f0ec86', 'description' => 'Africa', 'correct_answer' => true],
                    ['id' => '59b529c2-c25a-527e-8387-1436d81f6e06', 'description' => 'Australia', 'correct_answer' => false]
                ]],
        ['id' => 'f62399f6-2eac-5f2a-9bc5-81a2426b64f7', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'On which continent are the Himalayas located?', 'difficulty' => 1, 'weight' => 159, 'alternatives' => [
                    ['id' => '4d79fe0f-d155-592e-943e-07ff5bf02fc7', 'description' => 'Oceania', 'correct_answer' => false],
                    ['id' => 'f6bff479-0150-5b99-9a0b-2b7f81606221', 'description' => 'South America', 'correct_answer' => false],
                    ['id' => 'c8e80117-95a3-5cf6-a9c5-b4b5bae11944', 'description' => 'Asia', 'correct_answer' => true],
                    ['id' => 'cbd3c08c-186d-5271-b71e-889a06eca6f3', 'description' => 'Africa', 'correct_answer' => false],
                    ['id' => 'da4a18a8-e4e2-5351-906e-0822ded4ce82', 'description' => 'North America', 'correct_answer' => false]
                ]],
        ['id' => 'b9c39b58-049c-5e9e-b3fc-95ed071b5863', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'On which continent are the Rocky Mountains located?', 'difficulty' => 1, 'weight' => 134, 'alternatives' => [
                    ['id' => '2af0052b-b610-58ce-b7d4-6c173a207e84', 'description' => 'North America', 'correct_answer' => true],
                    ['id' => '52bce869-156f-5dd8-ba60-57c25ccc5260', 'description' => 'The Caribbean', 'correct_answer' => false],
                    ['id' => '276e03be-2eba-5062-8c5f-8085678de4f1', 'description' => 'Europe', 'correct_answer' => false],
                    ['id' => 'a33f8a9c-8b2c-5452-b61d-d83c602211b3', 'description' => 'Australia', 'correct_answer' => false],
                    ['id' => 'c9ce4ec2-6563-5084-b5f5-a36364212946', 'description' => 'Asia', 'correct_answer' => false]
                ]],
        ['id' => 'af3c4d09-e975-5d7c-9b6b-6ddb2ed9da24', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'On which continent is the Great Barrier Reef located?', 'difficulty' => 1, 'weight' => 105, 'alternatives' => [
                    ['id' => '5f8bb1da-5eed-5410-9035-4cf356cce912', 'description' => 'Asia', 'correct_answer' => false],
                    ['id' => 'f9145473-e969-5261-87cc-aa32f7c26b68', 'description' => 'Africa', 'correct_answer' => false],
                    ['id' => 'fdb675cb-802c-558e-a52c-fa73536279de', 'description' => 'The Caribbean', 'correct_answer' => false],
                    ['id' => 'b2069002-b141-50fa-9eb8-d203a6faef08', 'description' => 'Oceania', 'correct_answer' => false],
                    ['id' => 'd6f106b4-9f45-5493-9814-7dbf96db3da2', 'description' => 'Australia', 'correct_answer' => true]
                ]],
        ['id' => 'a431900e-290e-556a-9691-9d1e73f668a0', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which region connects North America and South America?', 'difficulty' => 1, 'weight' => 198, 'alternatives' => [
                    ['id' => '68ff0151-1d93-5b8b-b8b6-4f0843d00d63', 'description' => 'Europe', 'correct_answer' => false],
                    ['id' => '4509278d-2910-5a7f-8b41-47ccd6b44eae', 'description' => 'Central America', 'correct_answer' => true],
                    ['id' => '91587fc1-7bcd-502c-89af-e98b4652a104', 'description' => 'South America', 'correct_answer' => false],
                    ['id' => 'a8d0baf5-7429-5bfa-98be-c3ac71816ad2', 'description' => 'Australia', 'correct_answer' => false],
                    ['id' => '7d2d9093-64db-559c-8922-96eb6eeac9b9', 'description' => 'Asia', 'correct_answer' => false]
                ]],
        ['id' => '26c02436-dad0-5971-a862-f37686bf4700', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which broad world region includes Melanesia, Micronesia, and Polynesia?', 'difficulty' => 1, 'weight' => 159, 'alternatives' => [
                    ['id' => '8d82d697-2bcc-5072-8091-1566ce18e89c', 'description' => 'Oceania', 'correct_answer' => true],
                    ['id' => '26fb3bb5-349d-5f4b-8a47-ef6a2317d9af', 'description' => 'North America', 'correct_answer' => false],
                    ['id' => 'a25db967-50ad-53e2-8aa5-826d8327d031', 'description' => 'South America', 'correct_answer' => false],
                    ['id' => '48d803d8-e655-503e-939d-e665253d6ad1', 'description' => 'Antarctica', 'correct_answer' => false],
                    ['id' => 'bc4fc031-37b7-54d8-975a-58b0b7ee4aab', 'description' => 'Australia', 'correct_answer' => false]
                ]],
        ['id' => '5204c6d3-125c-5304-b022-49e681ea44fd', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'What mostly 180-degree longitude boundary separates calendar dates?', 'difficulty' => 1, 'weight' => 156, 'alternatives' => [
                    ['id' => '97bc45f6-7ab7-545e-9941-22f4c3d21717', 'description' => 'Greenwich Meridian', 'correct_answer' => false],
                    ['id' => '33c0b574-de33-5699-99a7-a2f457a881ae', 'description' => 'Antarctic Circle', 'correct_answer' => false],
                    ['id' => '70b9d473-87a4-5bed-a597-3f6ddc75feea', 'description' => 'Tropic of Cancer', 'correct_answer' => false],
                    ['id' => '79715491-c4f2-542b-ad29-bc2b6bac3cd9', 'description' => 'International Date Line', 'correct_answer' => true],
                    ['id' => 'ab6770a1-d7d1-5165-a4c9-da96b5d15af1', 'description' => 'The Equator', 'correct_answer' => false]
                ]],
        ['id' => 'b25ade4f-9cc0-5a1f-b30f-94a986e301fd', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'What imaginary line divides Earth into the Northern and Southern Hemispheres?', 'difficulty' => 1, 'weight' => 197, 'alternatives' => [
                    ['id' => '1f481549-6e65-5dda-bb5c-b5b09a15e825', 'description' => 'Greenwich Meridian', 'correct_answer' => false],
                    ['id' => 'b9cdce03-3d98-589d-bc3c-e7a115782236', 'description' => '180th meridian', 'correct_answer' => false],
                    ['id' => '99db5907-61c6-59c8-8f09-4e00d02d9ac6', 'description' => 'Prime Meridian', 'correct_answer' => false],
                    ['id' => 'a98928d3-475b-5d5b-bd17-fcd822a4221a', 'description' => 'The Equator', 'correct_answer' => true],
                    ['id' => '04c8f5a1-90a0-530d-b435-42687cb30f3b', 'description' => 'Antarctic Circle', 'correct_answer' => false]
                ]],
        ['id' => '9f3c96a4-5645-52fd-b217-b5ac23cb3725', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which latitude is assigned 0 degrees?', 'difficulty' => 1, 'weight' => 105, 'alternatives' => [
                    ['id' => 'b4bf8185-5f3e-5479-9382-69c9c992b66b', 'description' => 'Greenwich Meridian', 'correct_answer' => false],
                    ['id' => 'e6a1468e-9643-50ca-abe6-2a2affda6c6e', 'description' => 'Equator', 'correct_answer' => true],
                    ['id' => '91388ee4-96cf-5a76-95f5-885251c8fe5c', 'description' => 'Prime Meridian', 'correct_answer' => false],
                    ['id' => 'f29b2e42-4827-523a-8548-55bcbeede46e', 'description' => '180th meridian', 'correct_answer' => false],
                    ['id' => '7ffeb4d4-b9ab-55c9-9712-97f550cc1095', 'description' => 'Arctic Circle', 'correct_answer' => false]
                ]],
        ['id' => '8294ded5-6e4a-581c-aa54-0b24a15f160c', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'What longitude line is defined as zero degrees?', 'difficulty' => 1, 'weight' => 158, 'alternatives' => [
                    ['id' => 'b42b3692-eab9-5eb4-ac4f-8d357ca50f2e', 'description' => 'Arctic Circle', 'correct_answer' => false],
                    ['id' => 'dacbb7cb-3ded-5a81-9c85-2d1a60ac3d57', 'description' => 'Tropic of Cancer', 'correct_answer' => false],
                    ['id' => '960f707d-5576-5bcb-8dd0-daeb08268240', 'description' => 'Tropic of Capricorn', 'correct_answer' => false],
                    ['id' => '6eda7bc9-ea49-596a-9551-c2a54cc37bcc', 'description' => 'Prime Meridian', 'correct_answer' => true],
                    ['id' => '0f07bdc2-228a-5b9c-a6e8-74bb75f14c6e', 'description' => '180th meridian', 'correct_answer' => false]
                ]],
        ['id' => '9979f32f-5e64-5fdc-8d13-5b6c9060541d', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which major latitude line lies south of the Equator at approximately 23.5 degrees?', 'difficulty' => 1, 'weight' => 177, 'alternatives' => [
                    ['id' => '17d0115c-1a12-592c-b3d5-fa6946097b75', 'description' => 'Tropic of Capricorn', 'correct_answer' => true],
                    ['id' => '0a5e9532-9c84-592e-8942-0b9251124908', 'description' => 'Arctic Circle', 'correct_answer' => false],
                    ['id' => '4a95f2eb-9019-502d-b59b-efae5ddbd621', 'description' => 'International Date Line', 'correct_answer' => false],
                    ['id' => '2c6751d8-9a21-55d1-9dc5-f28b812a8eca', 'description' => 'Equator', 'correct_answer' => false],
                    ['id' => '8f3a8c20-aa88-5721-9805-440a9bdb9997', 'description' => 'Tropic of Cancer', 'correct_answer' => false]
                ]],
        ['id' => '62fe901f-e91d-51d3-b1e7-8c870e36196e', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which latitude marks the northern boundary of the Antarctic polar day and night region?', 'difficulty' => 1, 'weight' => 104, 'alternatives' => [
                    ['id' => 'cf5a4c32-cd9c-54e8-a067-42cb3b71f457', 'description' => 'Prime Meridian', 'correct_answer' => false],
                    ['id' => '3805b8cc-772d-5652-a24a-da6a8d54e60b', 'description' => 'International Date Line', 'correct_answer' => false],
                    ['id' => '2549fb77-4220-56c9-a1d3-58b5e2ec8c72', 'description' => 'Equator', 'correct_answer' => false],
                    ['id' => '633e9f06-f5b9-5898-a12a-6a03a9421d7b', 'description' => 'Tropic of Capricorn', 'correct_answer' => false],
                    ['id' => '5cd6a78e-5c63-58af-82da-459f9b969244', 'description' => 'Antarctic Circle', 'correct_answer' => true]
                ]],
        ['id' => 'a80c09c4-1645-54f5-8792-9c51b8c1c874', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which line of longitude lies opposite the Prime Meridian?', 'difficulty' => 1, 'weight' => 167, 'alternatives' => [
                    ['id' => 'bcafebc1-279a-5ced-8560-d0412a36f7d5', 'description' => '180th meridian', 'correct_answer' => true],
                    ['id' => 'dcf93a5f-5315-5b7f-9246-36c8cb0f534f', 'description' => 'Prime Meridian', 'correct_answer' => false],
                    ['id' => 'f43f8693-9adb-5876-b121-f1023846789b', 'description' => 'Antarctic Circle', 'correct_answer' => false],
                    ['id' => '9ab62a18-efa8-5134-8b68-cd9dc1707ab5', 'description' => 'International Date Line', 'correct_answer' => false],
                    ['id' => '0e076c0a-dd4d-5247-b4c2-e07a7b1e5a60', 'description' => 'Tropic of Capricorn', 'correct_answer' => false]
                ]],
        ['id' => 'fa5a564d-bb16-5859-8e96-775072fe0398', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which latitude marks the southern boundary of the Arctic polar day and night region?', 'difficulty' => 1, 'weight' => 195, 'alternatives' => [
                    ['id' => '9e57124b-501d-5ff8-803b-26de5e56fff3', 'description' => 'Tropic of Cancer', 'correct_answer' => false],
                    ['id' => 'f85ef437-c9d8-595b-937c-55bd96475e9d', 'description' => 'Greenwich Meridian', 'correct_answer' => false],
                    ['id' => '291ebbc3-4eb6-527f-8d20-eaf47b892313', 'description' => 'Antarctic Circle', 'correct_answer' => false],
                    ['id' => '095646ef-36d6-5d01-aaf8-f193519b607d', 'description' => 'Arctic Circle', 'correct_answer' => true],
                    ['id' => '11f3d6e4-ed62-5980-b6c2-72aba1bef608', 'description' => 'Prime Meridian', 'correct_answer' => false]
                ]],
        ['id' => '6c770255-78e4-5f05-b5b3-9c6fa57a8b54', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which is the longest river entirely within France?', 'difficulty' => 2, 'weight' => 365, 'alternatives' => [
                    ['id' => 'ddb59471-d109-54f0-8dae-9f81b354988c', 'description' => 'Elbe', 'correct_answer' => false],
                    ['id' => '0f96c776-7faf-5932-a5ec-e5c20c8e1f94', 'description' => 'Tiber', 'correct_answer' => false],
                    ['id' => '060f7c1e-73db-5139-b665-e6ec276304d8', 'description' => 'Loire', 'correct_answer' => true],
                    ['id' => 'cd309347-5eb8-5a9f-8bc3-7521e176153c', 'description' => 'Dnieper', 'correct_answer' => false],
                    ['id' => '3eca1911-4f04-5cd4-8e69-a74e6598b1fd', 'description' => 'Danube', 'correct_answer' => false]
                ]],
        ['id' => '550375d3-0c39-53cc-bbae-c98f2cd41cc3', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which river flows past Cologne and Rotterdam before reaching the North Sea?', 'difficulty' => 2, 'weight' => 375, 'alternatives' => [
                    ['id' => '24936e92-0e3e-5409-8331-e182398b8341', 'description' => 'Elbe', 'correct_answer' => false],
                    ['id' => 'f1f6fae2-8274-5f27-87df-d3e48ad8346a', 'description' => 'Thames', 'correct_answer' => false],
                    ['id' => '6b977b57-cb87-5f49-9230-e9d9b218b171', 'description' => 'Seine', 'correct_answer' => false],
                    ['id' => 'cf9d1328-6a87-527c-a9c9-7188e481471f', 'description' => 'Rhine', 'correct_answer' => true],
                    ['id' => 'b67b8406-92ad-5236-9cd7-7d9091de24fa', 'description' => 'Loire', 'correct_answer' => false]
                ]],
        ['id' => '7ad5bb57-8f64-5724-a1a7-e96eed11ef40', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which river flows through Vienna, Bratislava, Budapest, and Belgrade?', 'difficulty' => 2, 'weight' => 397, 'alternatives' => [
                    ['id' => 'bcad260d-2436-50d9-88f7-26445475d368', 'description' => 'Rhine', 'correct_answer' => false],
                    ['id' => '070ebc69-ee37-550c-acad-a563a5e44db0', 'description' => 'Dnieper', 'correct_answer' => false],
                    ['id' => 'a964ffa9-38b7-5737-8694-ffdd6293c8c4', 'description' => 'Po', 'correct_answer' => false],
                    ['id' => 'a8ea1db7-ee9e-5dd7-a271-3e9282d509d7', 'description' => 'Elbe', 'correct_answer' => false],
                    ['id' => '08f07d2a-202e-51a4-aef7-160da7d4135a', 'description' => 'Danube', 'correct_answer' => true]
                ]],
        ['id' => '79d79100-fa67-5729-b65c-3a318043d203', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which major river flows through or along Russia, Belarus, and Ukraine?', 'difficulty' => 2, 'weight' => 304, 'alternatives' => [
                    ['id' => '01482783-ee39-5d95-a821-77f8281c57af', 'description' => 'Seine', 'correct_answer' => false],
                    ['id' => '1b5c60bd-e364-5128-a89d-14245e434994', 'description' => 'Danube', 'correct_answer' => false],
                    ['id' => '80ae0c78-ecb0-55bd-9e6e-000403296d59', 'description' => 'Elbe', 'correct_answer' => false],
                    ['id' => 'c5430050-30b4-56b5-9d60-6f795382a3a3', 'description' => 'Tiber', 'correct_answer' => false],
                    ['id' => 'd017bb11-7582-5087-af24-c485c8b2bec2', 'description' => 'Dnieper', 'correct_answer' => true]
                ]],
        ['id' => 'c7e35406-1a3c-53ff-b18f-e238df217e99', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which river flows through Lisbon?', 'difficulty' => 2, 'weight' => 209, 'alternatives' => [
                    ['id' => '4c63653d-5bcd-5373-ab9d-c61212728ff0', 'description' => 'Tagus', 'correct_answer' => true],
                    ['id' => '8e0ac21e-9dd1-5f18-a5a4-94fb7a6dac52', 'description' => 'Thames', 'correct_answer' => false],
                    ['id' => '7837fc1e-1216-5552-abf3-75b3376f5308', 'description' => 'Elbe', 'correct_answer' => false],
                    ['id' => '1eff737c-159a-5fac-91da-2d20dc6c83fb', 'description' => 'Po', 'correct_answer' => false],
                    ['id' => 'eb8f3c22-a660-53d6-b633-48c28206b964', 'description' => 'Danube', 'correct_answer' => false]
                ]],
        ['id' => '9a1c463e-09e5-52d0-8bc6-38115e678974', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which river flows through Rome?', 'difficulty' => 2, 'weight' => 261, 'alternatives' => [
                    ['id' => '8abaf929-88d4-5ac5-b0c2-dddb5a5e8a83', 'description' => 'Thames', 'correct_answer' => false],
                    ['id' => 'dec5288f-2acb-5c70-b5eb-59285d0b73bf', 'description' => 'Tagus', 'correct_answer' => false],
                    ['id' => '8772c4fe-e28d-519d-b5d0-e220b3b9c362', 'description' => 'Rhine', 'correct_answer' => false],
                    ['id' => '2ffeaed4-0ac3-5c20-9e43-ac024676f618', 'description' => 'Dnieper', 'correct_answer' => false],
                    ['id' => '4487d6f5-5b24-5c0d-9deb-ba5b125371d7', 'description' => 'Tiber', 'correct_answer' => true]
                ]],
        ['id' => 'efe7d916-cc5f-538a-be33-6da8a4eb7283', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which river flows through London?', 'difficulty' => 2, 'weight' => 235, 'alternatives' => [
                    ['id' => 'f252ae46-25e9-58b6-8512-59ab62f4a29c', 'description' => 'Rhine', 'correct_answer' => false],
                    ['id' => '60759047-7d57-5ed4-a186-f0dec0d0affa', 'description' => 'Loire', 'correct_answer' => false],
                    ['id' => 'c139de61-3f53-56fa-8f1d-13ced22cf8d9', 'description' => 'Thames', 'correct_answer' => true],
                    ['id' => '4fd42ffa-52fd-5781-afa9-e3da75f234fd', 'description' => 'Seine', 'correct_answer' => false],
                    ['id' => '51034f76-f5c7-5358-8b86-f7912a38d0cd', 'description' => 'Tiber', 'correct_answer' => false]
                ]],
        ['id' => '2b20d2b7-2151-53e0-92f3-770c8bb12747', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which river flows through Paris?', 'difficulty' => 2, 'weight' => 383, 'alternatives' => [
                    ['id' => '20e0835f-4cda-59a8-ad98-a2dff57d6feb', 'description' => 'Loire', 'correct_answer' => false],
                    ['id' => '125e5080-39d6-57bc-9a8e-e26a5d65e50c', 'description' => 'Tiber', 'correct_answer' => false],
                    ['id' => 'f7c6dcf7-1680-54a0-9002-59a0b6ada74b', 'description' => 'Tagus', 'correct_answer' => false],
                    ['id' => '1e83cd6a-66b1-5a02-85c5-d2f27f080f8f', 'description' => 'Seine', 'correct_answer' => true],
                    ['id' => '31c71ea7-dd45-5d55-a3ca-e22ffb1eb553', 'description' => 'Dnieper', 'correct_answer' => false]
                ]],
        ['id' => 'bd039a07-5c60-5ee4-b37a-afc561a998c8', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which lake in Siberia is the world\'s deepest freshwater lake?', 'difficulty' => 2, 'weight' => 207, 'alternatives' => [
                    ['id' => '0f7da483-556f-5ec1-bf0c-6e94aea785ed', 'description' => 'Lake Michigan', 'correct_answer' => false],
                    ['id' => '504bbd89-5dce-5199-b92a-c7d3ab593ff1', 'description' => 'Lake Baikal', 'correct_answer' => true],
                    ['id' => '7eac4328-64f8-571f-a4e2-ed19cc1f6d5d', 'description' => 'Lake Malawi', 'correct_answer' => false],
                    ['id' => 'c63523dc-8348-56d6-bc7b-691d92c094ae', 'description' => 'Lake Superior', 'correct_answer' => false],
                    ['id' => '878ace0f-0cd4-5838-9d4c-c2af3682bb14', 'description' => 'Lake Tanganyika', 'correct_answer' => false]
                ]],
        ['id' => '9af457de-09e3-5f8b-8e65-7bbcef633a24', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which East African lake is also known as Lake Nyasa?', 'difficulty' => 2, 'weight' => 247, 'alternatives' => [
                    ['id' => 'e2cbd931-76ca-5269-8c21-d0526de22578', 'description' => 'Lake Malawi', 'correct_answer' => true],
                    ['id' => 'cbc5e711-36ae-5738-9062-8ad5535a2501', 'description' => 'Lake Titicaca', 'correct_answer' => false],
                    ['id' => 'a5444a62-04bc-5994-ac37-e3a9a9e4b785', 'description' => 'Lake Baikal', 'correct_answer' => false],
                    ['id' => 'e33f0e70-00d0-571f-90ca-d93957a9da25', 'description' => 'Lake Geneva', 'correct_answer' => false],
                    ['id' => '86a38acc-55eb-5e66-868f-6a2131b10b0d', 'description' => 'Lake Superior', 'correct_answer' => false]
                ]],
        ['id' => 'f73ca9d7-d637-5326-bcf7-f06cc3495e77', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which large Alpine lake borders Switzerland and France?', 'difficulty' => 2, 'weight' => 393, 'alternatives' => [
                    ['id' => 'ea8b1bdf-7b29-5d82-be2e-36a528659b6e', 'description' => 'Lake Geneva', 'correct_answer' => true],
                    ['id' => 'ffbf000b-73b1-53dd-a607-5777f4c38718', 'description' => 'Lake Superior', 'correct_answer' => false],
                    ['id' => 'b1052fcb-8431-55f7-a82d-2a52ba9f6c53', 'description' => 'Lake Titicaca', 'correct_answer' => false],
                    ['id' => '88e5e49e-4c24-57d6-aa81-c67a03eb2154', 'description' => 'Caspian Sea', 'correct_answer' => false],
                    ['id' => 'e01248cf-4545-546f-8658-b657c67b6a11', 'description' => 'Lake Baikal', 'correct_answer' => false]
                ]],
        ['id' => '6cb9fb84-8001-55bb-9aec-b29cd5ef15eb', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which Great Lake lies entirely within the United States?', 'difficulty' => 2, 'weight' => 390, 'alternatives' => [
                    ['id' => '09690868-907e-5ccf-875a-aaa0d6fe2dfa', 'description' => 'Lake Geneva', 'correct_answer' => false],
                    ['id' => 'f2314bf1-a7a5-53c2-83fa-18bd92b9ed85', 'description' => 'Lake Titicaca', 'correct_answer' => false],
                    ['id' => '4d0a92e3-f27a-5760-8878-978b66a7a6be', 'description' => 'Lake Baikal', 'correct_answer' => false],
                    ['id' => '0d56f973-2678-55cd-9523-dde305d9dc03', 'description' => 'Lake Michigan', 'correct_answer' => true],
                    ['id' => 'f987da0b-c23b-59d5-b134-4becd1b38921', 'description' => 'Caspian Sea', 'correct_answer' => false]
                ]],
        ['id' => 'e7fd5173-7cad-5b79-9bf6-76df79afc087', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which lake in the Andes is often described as the world\'s highest navigable lake?', 'difficulty' => 2, 'weight' => 309, 'alternatives' => [
                    ['id' => '5005e7ae-879e-5a92-b6f6-37d21a92c834', 'description' => 'Lake Tanganyika', 'correct_answer' => false],
                    ['id' => 'be82f5dd-5ed9-53c6-a7bb-c4d3c960eabd', 'description' => 'Lake Titicaca', 'correct_answer' => true],
                    ['id' => '82c07b2b-7f40-592e-a1c0-0c8e4e479cc6', 'description' => 'Lake Superior', 'correct_answer' => false],
                    ['id' => '3b3252ac-0eeb-5027-80f2-28a05a3484bb', 'description' => 'Lake Victoria', 'correct_answer' => false],
                    ['id' => 'c2992c64-850e-5844-9e6d-a3132c350321', 'description' => 'Caspian Sea', 'correct_answer' => false]
                ]],
        ['id' => 'bde77c37-f91c-5239-ac0a-dc43e48bddeb', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which African lake is the world\'s second-deepest lake?', 'difficulty' => 2, 'weight' => 235, 'alternatives' => [
                    ['id' => '902a7626-16eb-5624-ae01-4a3a3c392f9e', 'description' => 'Lake Baikal', 'correct_answer' => false],
                    ['id' => '4ba3f1d2-4004-5ed4-9ccf-d2ca700c593e', 'description' => 'Lake Malawi', 'correct_answer' => false],
                    ['id' => 'ec4d5e58-c72a-5310-a19d-42e5e46bfe94', 'description' => 'Lake Michigan', 'correct_answer' => false],
                    ['id' => '4e8e3c3c-7471-51bb-8671-31b1386c95fe', 'description' => 'Lake Tanganyika', 'correct_answer' => true],
                    ['id' => '2d263a03-dbd5-514e-b9d9-0cef10fc63bf', 'description' => 'Caspian Sea', 'correct_answer' => false]
                ]],
        ['id' => 'c1911865-0c3a-57ea-aa54-023a51d65bf8', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which Great Lake has the longest shoreline among the Great Lakes?', 'difficulty' => 2, 'weight' => 378, 'alternatives' => [
                    ['id' => '9c9c645e-2483-57c2-82b1-021f3e6167a8', 'description' => 'Lake Geneva', 'correct_answer' => false],
                    ['id' => 'c816aa03-dfa7-566b-ad0e-76141c4fbf72', 'description' => 'Lake Victoria', 'correct_answer' => false],
                    ['id' => 'e7059abb-6bef-589c-9047-ee28cfa6a438', 'description' => 'Lake Tanganyika', 'correct_answer' => false],
                    ['id' => 'b97f3fd7-24b2-59d5-a67a-88c09dd2ab10', 'description' => 'Lake Huron', 'correct_answer' => true],
                    ['id' => '77b6a1f2-911d-52bf-b77e-b5b87497019d', 'description' => 'Lake Superior', 'correct_answer' => false]
                ]],
        ['id' => '054a82f4-9b4b-5b4a-a311-5bc966a13269', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which African lake is the largest by surface area?', 'difficulty' => 2, 'weight' => 240, 'alternatives' => [
                    ['id' => '63b263a9-8ce1-5e49-859c-0b1ba000fca9', 'description' => 'Lake Baikal', 'correct_answer' => false],
                    ['id' => 'c971e5ec-f7e6-5dd8-a37b-f77c5f1510cf', 'description' => 'Lake Malawi', 'correct_answer' => false],
                    ['id' => 'a5a254b8-c23c-57f5-be13-c0e642996078', 'description' => 'Lake Titicaca', 'correct_answer' => false],
                    ['id' => '7add869c-89fe-591f-8948-c5fa3dc5d50c', 'description' => 'Lake Michigan', 'correct_answer' => false],
                    ['id' => '2a534dd3-51e6-5c27-92f6-f29696ea3add', 'description' => 'Lake Victoria', 'correct_answer' => true]
                ]],
        ['id' => '0ab4d6c7-71f0-5ada-9a9b-3f9fbc66c70c', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which strait separates the European and Asian parts of Istanbul?', 'difficulty' => 2, 'weight' => 366, 'alternatives' => [
                    ['id' => 'a11fafbd-3bcf-5d4c-9dec-6dcd3cdbaa8d', 'description' => 'Bering Strait', 'correct_answer' => false],
                    ['id' => '39175835-208b-5d75-8098-542cc454d98d', 'description' => 'Strait of Malacca', 'correct_answer' => false],
                    ['id' => 'bf925d77-7ff9-5c66-90b6-6842b2c8bb9e', 'description' => 'Dardanelles', 'correct_answer' => false],
                    ['id' => 'fa769dac-7791-588b-a1fe-22cb93128e00', 'description' => 'Bosporus', 'correct_answer' => true],
                    ['id' => '6db005ca-b22f-51b5-afcc-85dfd77aaf08', 'description' => 'Taiwan Strait', 'correct_answer' => false]
                ]],
        ['id' => '6d80d8f3-00a8-536b-b430-e766ff917bc1', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which strait connects the Aegean Sea with the Sea of Marmara?', 'difficulty' => 2, 'weight' => 390, 'alternatives' => [
                    ['id' => 'd73f5bb4-2ef2-5d26-82bb-70a0caed18d4', 'description' => 'Torres Strait', 'correct_answer' => false],
                    ['id' => 'dc311cc7-d290-58f8-8241-f7a963bb7280', 'description' => 'Dardanelles', 'correct_answer' => true],
                    ['id' => 'cfd354ec-bac4-57cc-8a3a-6222ed3499fa', 'description' => 'Bab el-Mandeb', 'correct_answer' => false],
                    ['id' => '80b01381-fc76-5338-929f-071997ccfeaf', 'description' => 'Strait of Gibraltar', 'correct_answer' => false],
                    ['id' => 'fa9c535f-2a4b-57ef-a22a-b312ab24ebca', 'description' => 'Dover Strait', 'correct_answer' => false]
                ]],
        ['id' => '849417ab-0016-5aa4-87e4-6e5000642bf7', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which strait separates Alaska from Russia?', 'difficulty' => 2, 'weight' => 312, 'alternatives' => [
                    ['id' => '09b21908-ac22-524c-84f0-1aabc9606c2d', 'description' => 'Bering Strait', 'correct_answer' => true],
                    ['id' => 'd416ec93-efb2-5d38-bf47-73ea80eb2569', 'description' => 'Strait of Gibraltar', 'correct_answer' => false],
                    ['id' => '633044b7-fa38-5c11-ad22-e937287678cf', 'description' => 'Dardanelles', 'correct_answer' => false],
                    ['id' => 'd5f440fe-8a64-5842-b108-d7611f2e1b72', 'description' => 'Bab el-Mandeb', 'correct_answer' => false],
                    ['id' => '65880f4e-24c4-5ff1-941c-b64c3cd40ddc', 'description' => 'Torres Strait', 'correct_answer' => false]
                ]],
        ['id' => 'a75e2da6-90f4-5ae7-aa8d-d4ce5defaded', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which strait separates southern England from northern France?', 'difficulty' => 2, 'weight' => 272, 'alternatives' => [
                    ['id' => 'acded3d6-c22c-50d6-b8e1-60b247d5aca8', 'description' => 'Bab el-Mandeb', 'correct_answer' => false],
                    ['id' => '6d75e590-7150-583a-a8b4-9fc9e70197e2', 'description' => 'Strait of Gibraltar', 'correct_answer' => false],
                    ['id' => '968bfeff-e287-5b44-9f41-2c66227c2796', 'description' => 'Dover Strait', 'correct_answer' => true],
                    ['id' => '3ffb94ac-ef2a-5d85-aa70-53f18b95dfce', 'description' => 'Bering Strait', 'correct_answer' => false],
                    ['id' => 'c6413e13-d5f9-5b0a-a227-94f9939a9b74', 'description' => 'Torres Strait', 'correct_answer' => false]
                ]],
        ['id' => '4a940cb4-c7f6-5981-80fc-be959a339c7f', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which strait separates Taiwan from mainland China?', 'difficulty' => 2, 'weight' => 372, 'alternatives' => [
                    ['id' => '2de9f657-7e89-5259-b3a0-18012c508668', 'description' => 'Taiwan Strait', 'correct_answer' => true],
                    ['id' => '9fd14a2f-ba94-537d-b56e-fe7df36f916e', 'description' => 'Bering Strait', 'correct_answer' => false],
                    ['id' => 'ca330dd9-3687-546d-9edb-7fa730278cfe', 'description' => 'Bab el-Mandeb', 'correct_answer' => false],
                    ['id' => '3eea0032-2461-5a4a-ba3c-d72e4577dc53', 'description' => 'Strait of Malacca', 'correct_answer' => false],
                    ['id' => '434907e4-0088-595e-b94e-e3505cdebc50', 'description' => 'Strait of Hormuz', 'correct_answer' => false]
                ]],
        ['id' => '704c2c97-b15f-59b3-bafe-20fd6be79afa', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which strait lies between the Malay Peninsula and the Indonesian island of Sumatra?', 'difficulty' => 2, 'weight' => 359, 'alternatives' => [
                    ['id' => 'b672d920-4a2a-5d29-9c8f-bb12c9171370', 'description' => 'Dardanelles', 'correct_answer' => false],
                    ['id' => '23e8cbcc-83f8-594f-857f-f0e686727fa4', 'description' => 'Strait of Malacca', 'correct_answer' => true],
                    ['id' => '4b268c3f-3704-560c-97b5-5785fd95d613', 'description' => 'Taiwan Strait', 'correct_answer' => false],
                    ['id' => '43c2758d-40f5-5202-b670-c2da8269a34e', 'description' => 'Bab el-Mandeb', 'correct_answer' => false],
                    ['id' => '02659440-2608-5239-97bb-4f1e75a9b5c5', 'description' => 'Strait of Hormuz', 'correct_answer' => false]
                ]],
        ['id' => '90ace0e3-6386-567c-887b-aaa8fae08012', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which strait lies between northern Australia and the island of New Guinea?', 'difficulty' => 2, 'weight' => 339, 'alternatives' => [
                    ['id' => 'bd9a6e7a-6c5d-5da2-83c0-5b682b0cbbac', 'description' => 'Strait of Hormuz', 'correct_answer' => false],
                    ['id' => '795f7159-6ea6-5345-81d1-9deaa6c422a7', 'description' => 'Torres Strait', 'correct_answer' => true],
                    ['id' => 'b3511e6c-65f4-5575-9fac-63baed6e88ba', 'description' => 'Strait of Gibraltar', 'correct_answer' => false],
                    ['id' => 'e2139193-1323-5c62-80f8-a610c1ea68aa', 'description' => 'Bosporus', 'correct_answer' => false],
                    ['id' => 'e8fc4d77-66e6-5655-9231-8a8bf86478b5', 'description' => 'Bering Strait', 'correct_answer' => false]
                ]],
        ['id' => 'fb4f4460-d66f-5d01-a6fe-28f07d5d6545', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which strait connects the Persian Gulf with the Gulf of Oman?', 'difficulty' => 2, 'weight' => 396, 'alternatives' => [
                    ['id' => '02c0a735-37b1-5246-ba53-4d0549a74940', 'description' => 'Strait of Malacca', 'correct_answer' => false],
                    ['id' => '604b4a4f-af56-5791-9b6a-cb17c954e5a5', 'description' => 'Strait of Hormuz', 'correct_answer' => true],
                    ['id' => '148e8e1e-f942-51e7-b6ad-eaf130284af5', 'description' => 'Dardanelles', 'correct_answer' => false],
                    ['id' => '8873934d-3415-5ae1-a291-67554e4c25e4', 'description' => 'Bering Strait', 'correct_answer' => false],
                    ['id' => 'ed918950-c201-5944-a6e1-b0f0805a9d0e', 'description' => 'Strait of Gibraltar', 'correct_answer' => false]
                ]],
        ['id' => 'be6b5dd4-8245-5cba-b3a2-1e42c7faee33', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which mountain range forms part of the eastern escarpment of southern Africa?', 'difficulty' => 2, 'weight' => 225, 'alternatives' => [
                    ['id' => 'c8937bae-a013-57ac-897c-42ea3c96e361', 'description' => 'Appalachian Mountains', 'correct_answer' => false],
                    ['id' => 'd0d27fc8-d1b4-5aa9-b607-51b7e47448ef', 'description' => 'Caucasus Mountains', 'correct_answer' => false],
                    ['id' => '31d7fc5c-56be-5e05-a4be-29f53457e85f', 'description' => 'Atlas Mountains', 'correct_answer' => false],
                    ['id' => 'a07f3327-1b6a-5fc2-890d-c94a859520ae', 'description' => 'Rocky Mountains', 'correct_answer' => false],
                    ['id' => '0b172cd1-ca83-5885-9ece-dc129dc5cd05', 'description' => 'Drakensberg', 'correct_answer' => true]
                ]],
        ['id' => '1d2f9afe-a770-5435-b27a-4306b3549e3f', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which mountain range lies between the Black Sea and the Caspian Sea?', 'difficulty' => 2, 'weight' => 211, 'alternatives' => [
                    ['id' => '54f5d1ca-1f3e-58e2-912f-ed98638b1021', 'description' => 'Carpathians', 'correct_answer' => false],
                    ['id' => '4e4b8041-3f8b-5773-b43b-6ce68c33e416', 'description' => 'Alps', 'correct_answer' => false],
                    ['id' => 'fd93f151-03ce-588a-b897-d862bf7de888', 'description' => 'Atlas Mountains', 'correct_answer' => false],
                    ['id' => '25d3e520-94ca-5243-bb0c-b4ea5e19674f', 'description' => 'Caucasus Mountains', 'correct_answer' => true],
                    ['id' => 'ccd92ff0-ee53-5195-99c4-cd824b17c85a', 'description' => 'Appalachian Mountains', 'correct_answer' => false]
                ]],
        ['id' => 'af8e592f-79ab-5dbf-825a-68325fc7c852', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which mountain range stretches across Morocco, Algeria, and Tunisia?', 'difficulty' => 2, 'weight' => 273, 'alternatives' => [
                    ['id' => '6d67238c-0a60-579a-8d63-0ee1b634d4db', 'description' => 'Andes', 'correct_answer' => false],
                    ['id' => '90c81077-b260-53b8-9e5f-890da6366703', 'description' => 'Great Dividing Range', 'correct_answer' => false],
                    ['id' => '559e5f8e-b01d-5954-96b7-7a00b2f391e1', 'description' => 'Ural Mountains', 'correct_answer' => false],
                    ['id' => '7efdc63b-a49a-59a3-a123-9a3db9a80fd8', 'description' => 'Appalachian Mountains', 'correct_answer' => false],
                    ['id' => '744e727b-3209-5cb8-8aaf-8b3d79d91e12', 'description' => 'Atlas Mountains', 'correct_answer' => true]
                ]],
        ['id' => 'f995affb-755e-52dd-85ca-b98dc900fb74', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which mountain range forms a broad arc through Central and Eastern Europe?', 'difficulty' => 2, 'weight' => 344, 'alternatives' => [
                    ['id' => '5d6252c1-f4ea-533b-9f3b-109b6374d9a8', 'description' => 'Carpathians', 'correct_answer' => true],
                    ['id' => '977083e3-70fd-53f0-880a-c04fa005d449', 'description' => 'Rocky Mountains', 'correct_answer' => false],
                    ['id' => 'e4d0ceea-9ea4-59ff-9aea-11c59ab3a949', 'description' => 'Andes', 'correct_answer' => false],
                    ['id' => 'e6f1f63b-1153-5e47-a2c9-d54b54f1b267', 'description' => 'Atlas Mountains', 'correct_answer' => false],
                    ['id' => 'b425de59-0e76-596e-b40c-fc6dbbc66202', 'description' => 'Drakensberg', 'correct_answer' => false]
                ]],
        ['id' => '573cb8fd-d817-5a21-872e-e7c053b41b5c', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which major mountain range extends through western Canada and the United States?', 'difficulty' => 2, 'weight' => 312, 'alternatives' => [
                    ['id' => '0564138d-ca4b-5486-8055-6286476216c9', 'description' => 'Drakensberg', 'correct_answer' => false],
                    ['id' => '88f24893-629e-5dea-b4f6-8bad33f9afcb', 'description' => 'Rocky Mountains', 'correct_answer' => true],
                    ['id' => 'a8d2b875-00a5-5aa4-816b-0338233da0dd', 'description' => 'Caucasus Mountains', 'correct_answer' => false],
                    ['id' => 'f0ba88a9-aa10-5a54-ba1d-5073b25eeb07', 'description' => 'Ural Mountains', 'correct_answer' => false],
                    ['id' => 'e5a644ce-42ff-5e7f-bc9b-65a67ef98aaa', 'description' => 'Great Dividing Range', 'correct_answer' => false]
                ]],
        ['id' => '8a71f272-3d9b-5420-9ba4-1b84e2b47498', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which mountain system runs along much of eastern Australia?', 'difficulty' => 2, 'weight' => 211, 'alternatives' => [
                    ['id' => 'c6be08cc-21be-54fd-8749-485e48c38e43', 'description' => 'Drakensberg', 'correct_answer' => false],
                    ['id' => '9f69aa81-e9a7-55cf-9791-d5735cb7eada', 'description' => 'Atlas Mountains', 'correct_answer' => false],
                    ['id' => '6d4afbcf-bbcb-5780-987e-b9c8e74c8c3b', 'description' => 'Ural Mountains', 'correct_answer' => false],
                    ['id' => 'cf3ba85f-7ec5-5c6b-9c7a-26bda14d2a61', 'description' => 'Carpathians', 'correct_answer' => false],
                    ['id' => '520e85e2-4465-530f-9e9e-21a8bde70d10', 'description' => 'Great Dividing Range', 'correct_answer' => true]
                ]],
        ['id' => '4bf0f103-2c30-5c83-903c-dc81d224de34', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which mountain range is traditionally used as part of the boundary between Europe and Asia?', 'difficulty' => 2, 'weight' => 304, 'alternatives' => [
                    ['id' => '4098f0c9-7c9d-5e2e-af42-804483df03a8', 'description' => 'Carpathians', 'correct_answer' => false],
                    ['id' => 'ef878214-3341-502b-a900-f7d5a4c3bd24', 'description' => 'Alps', 'correct_answer' => false],
                    ['id' => 'ef0600ac-c935-5d52-972e-2d4670f1b97a', 'description' => 'Appalachian Mountains', 'correct_answer' => false],
                    ['id' => 'a125d514-9e4a-5ec6-bf10-6f4e2db0b8b4', 'description' => 'Ural Mountains', 'correct_answer' => true],
                    ['id' => '3edca0f8-912c-55c0-a2cc-3519d68e5843', 'description' => 'Atlas Mountains', 'correct_answer' => false]
                ]],
        ['id' => 'f1d39a33-c916-57c3-a89d-a0b237822645', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which mountain range arcs across countries including France, Switzerland, Italy, and Austria?', 'difficulty' => 2, 'weight' => 332, 'alternatives' => [
                    ['id' => 'a26a140a-7f56-58d9-b3ad-ee83c704e6ad', 'description' => 'Great Dividing Range', 'correct_answer' => false],
                    ['id' => 'c40a80e0-cbcb-5779-9f59-9d979d3d56dc', 'description' => 'Alps', 'correct_answer' => true],
                    ['id' => '7640be70-da23-52ac-b40b-087fb4702e92', 'description' => 'Atlas Mountains', 'correct_answer' => false],
                    ['id' => '7dcc84fd-5629-5c3e-9810-ebef6da909e2', 'description' => 'Drakensberg', 'correct_answer' => false],
                    ['id' => '082c507e-30fe-5cf5-aa22-9e87dc00051c', 'description' => 'Rocky Mountains', 'correct_answer' => false]
                ]],
        ['id' => '27fde784-86cb-5c09-a92f-bf69851bd7e3', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which North American country includes the Trans-Mexican Volcanic Belt?', 'difficulty' => 2, 'weight' => 334, 'alternatives' => [
                    ['id' => 'ae8fd5ce-447b-501f-ba2c-a8dc0abec5c1', 'description' => 'Japan', 'correct_answer' => false],
                    ['id' => 'eecc4f99-9957-5df0-8478-e92de6c25c43', 'description' => 'Mexico', 'correct_answer' => true],
                    ['id' => '438de775-b8e3-56cb-bda8-ea077c8bf725', 'description' => 'New Zealand', 'correct_answer' => false],
                    ['id' => '2c1576d3-990b-555f-a7d5-499dce4c854d', 'description' => 'Indonesia', 'correct_answer' => false],
                    ['id' => '27e0271d-becf-5c7b-b7db-c24b6b9be9d2', 'description' => 'Italy', 'correct_answer' => false]
                ]],
        ['id' => '2178ee34-63ed-55cb-b374-2bdfd40c812d', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which South American country has a long Pacific coastline and frequent major earthquakes?', 'difficulty' => 2, 'weight' => 323, 'alternatives' => [
                    ['id' => 'a658d5be-d359-55f6-85ee-640120258834', 'description' => 'Chile', 'correct_answer' => true],
                    ['id' => 'dee8cd6d-13f1-5473-8409-823f1d8d041f', 'description' => 'Mexico', 'correct_answer' => false],
                    ['id' => 'b31815d8-26ac-5007-b809-5effda0c764a', 'description' => 'Ecuador', 'correct_answer' => false],
                    ['id' => '68e906db-4655-5b3d-b3f7-7aaf1088234c', 'description' => 'Italy', 'correct_answer' => false],
                    ['id' => '99e45c95-b39e-59a8-9ddf-ffad4ff152be', 'description' => 'Japan', 'correct_answer' => false]
                ]],
        ['id' => 'ade8b553-803a-599a-a6e7-cc7bbbf0a52b', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which European country contains Mount Etna and Mount Vesuvius?', 'difficulty' => 2, 'weight' => 336, 'alternatives' => [
                    ['id' => 'e8526ff9-fc7b-5506-abbd-64f6849d5223', 'description' => 'New Zealand', 'correct_answer' => false],
                    ['id' => '50428ceb-5aa5-51ef-9c13-addfbdfa60ed', 'description' => 'Indonesia', 'correct_answer' => false],
                    ['id' => '5f68cc74-0e30-55c5-8a54-1fc02e95c447', 'description' => 'Ecuador', 'correct_answer' => false],
                    ['id' => '54680b7e-2e05-5245-9082-742dffbdcf02', 'description' => 'Papua New Guinea', 'correct_answer' => false],
                    ['id' => '870c1104-d3e1-5b8c-818b-5e6316757468', 'description' => 'Italy', 'correct_answer' => true]
                ]],
        ['id' => '4020616f-2204-571e-a23b-fc071e2bc3aa', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which country includes the North Island volcanic plateau and the Southern Alps?', 'difficulty' => 2, 'weight' => 336, 'alternatives' => [
                    ['id' => '0a44a2a8-4577-5d91-85cd-d9c29c36e500', 'description' => 'Japan', 'correct_answer' => false],
                    ['id' => 'ad39ba3c-0938-536d-a664-9da99cdba952', 'description' => 'Philippines', 'correct_answer' => false],
                    ['id' => '0d25061b-6a93-5d49-b7de-d2bceba8b1f5', 'description' => 'Italy', 'correct_answer' => false],
                    ['id' => '7fc19b84-0357-50f3-9c0b-779ade4e9d0e', 'description' => 'New Zealand', 'correct_answer' => true],
                    ['id' => '8546fc88-cfdb-57ff-abf2-91b8df5243e8', 'description' => 'Indonesia', 'correct_answer' => false]
                ]],
        ['id' => '6c4daa23-f18a-581e-85b7-750c348a86b5', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which Pacific country occupies the eastern half of New Guinea and has active volcanoes?', 'difficulty' => 2, 'weight' => 259, 'alternatives' => [
                    ['id' => '57f7e274-73d2-54bc-9060-413a13253f61', 'description' => 'Japan', 'correct_answer' => false],
                    ['id' => '354d7445-e755-57e7-9c9f-7d3a50a9d6fb', 'description' => 'New Zealand', 'correct_answer' => false],
                    ['id' => 'a2d9be11-c89d-5ef6-8cd5-2ca940d07381', 'description' => 'Iceland', 'correct_answer' => false],
                    ['id' => 'eb239eea-daed-5bda-b559-2fc8123590a0', 'description' => 'Indonesia', 'correct_answer' => false],
                    ['id' => '78685326-26a5-52be-b368-35395142b33b', 'description' => 'Papua New Guinea', 'correct_answer' => true]
                ]],
        ['id' => 'd5289b17-77d8-53f4-a70e-724366c0d61a', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which archipelago in Southeast Asia is exposed to frequent typhoons and volcanic activity?', 'difficulty' => 2, 'weight' => 283, 'alternatives' => [
                    ['id' => '6761d870-84a9-5c39-bb12-e4d810df5241', 'description' => 'Japan', 'correct_answer' => false],
                    ['id' => 'bb85900d-4d85-553a-bf68-d3b3b0ead6ba', 'description' => 'Philippines', 'correct_answer' => true],
                    ['id' => 'a8a646fe-7a77-5a1b-a351-2f47b4eae7cb', 'description' => 'Papua New Guinea', 'correct_answer' => false],
                    ['id' => 'e80310fc-d76c-5f17-b121-fd57da4afd82', 'description' => 'Mexico', 'correct_answer' => false],
                    ['id' => 'b4535811-2f46-5c61-b7ba-2689de65b41b', 'description' => 'Ecuador', 'correct_answer' => false]
                ]],
        ['id' => '15cef6b4-e9e4-5409-a2cb-478f50951b13', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which country lies along the Pacific Ring of Fire and has many active volcanoes?', 'difficulty' => 2, 'weight' => 397, 'alternatives' => [
                    ['id' => 'ce1c9961-aa90-5786-837f-dbb33fca829a', 'description' => 'Iceland', 'correct_answer' => false],
                    ['id' => '0aa62ea7-bc97-5d4f-b0e1-3cba2898c594', 'description' => 'Papua New Guinea', 'correct_answer' => false],
                    ['id' => 'ae8f09d5-e845-54fd-997e-e7dbf1af2e44', 'description' => 'Japan', 'correct_answer' => true],
                    ['id' => '37f9c194-4f84-5eb1-9535-31d8d642a51f', 'description' => 'Mexico', 'correct_answer' => false],
                    ['id' => 'cde53170-c929-58e7-9e1f-4133b97cad8f', 'description' => 'Italy', 'correct_answer' => false]
                ]],
        ['id' => 'bb6916ab-da6f-5e64-b098-839456566589', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which country is crossed by the Andes and includes the Galápagos Islands?', 'difficulty' => 2, 'weight' => 337, 'alternatives' => [
                    ['id' => '6c9c0e77-7fd3-5bd3-b0f7-560b5fa225e9', 'description' => 'Iceland', 'correct_answer' => false],
                    ['id' => '75652b81-a2cd-59c1-9557-5e3a81c2a1f9', 'description' => 'Philippines', 'correct_answer' => false],
                    ['id' => '6fe421d8-372a-52e4-a594-296c7ae082db', 'description' => 'Papua New Guinea', 'correct_answer' => false],
                    ['id' => '562bad98-b947-5be7-bed3-c8d906778dd7', 'description' => 'Ecuador', 'correct_answer' => true],
                    ['id' => '9b35e556-dcac-5d64-83de-34dceb1c4035', 'description' => 'Chile', 'correct_answer' => false]
                ]],
        ['id' => '9d15d80f-8fc9-55b5-8e98-ef525dcdc64a', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which ancient urban center in Peru is associated with the Norte Chico civilization?', 'difficulty' => 3, 'weight' => 564, 'alternatives' => [
                    ['id' => 'd84411ca-cf3a-5458-8721-0713b6a83d24', 'description' => 'Tikal', 'correct_answer' => false],
                    ['id' => '80139f90-ada0-59a5-becc-ea836f847323', 'description' => 'Monte Albán', 'correct_answer' => false],
                    ['id' => '0051c477-ad8e-5c14-b31d-dd1ac55b0e93', 'description' => 'Calakmul', 'correct_answer' => false],
                    ['id' => '8bb7f272-153a-5369-b4ed-f495f9c757c4', 'description' => 'Cusco', 'correct_answer' => false],
                    ['id' => 'cc4366b0-5f75-576d-864a-8113d1fb5797', 'description' => 'Caral', 'correct_answer' => true]
                ]],
        ['id' => 'ea2951ca-2678-5e56-a507-29e1f4a60174', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'What was the island capital of the Aztec Empire in Lake Texcoco?', 'difficulty' => 3, 'weight' => 404, 'alternatives' => [
                    ['id' => 'fd887cfb-ae5d-5af4-99ae-f43fb1bcc247', 'description' => 'Palenque', 'correct_answer' => false],
                    ['id' => '31618fac-1943-5363-8560-ba6b8eb12c90', 'description' => 'Tenochtitlan', 'correct_answer' => true],
                    ['id' => '7caf2095-8ab5-5a9f-983d-b1f10ea4a7c0', 'description' => 'Calakmul', 'correct_answer' => false],
                    ['id' => 'd3e35e5a-eb29-589c-9224-f791cb2ad559', 'description' => 'Monte Albán', 'correct_answer' => false],
                    ['id' => '2cb4cc6f-d830-5ca5-85b8-afc8c4c7f078', 'description' => 'Cusco', 'correct_answer' => false]
                ]],
        ['id' => '2cf0fb6b-a975-5488-b9dc-322efee53be6', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which major ancient Maya city is located in present-day Guatemala?', 'difficulty' => 3, 'weight' => 568, 'alternatives' => [
                    ['id' => '5cc99c79-362c-558c-a17f-633d09dfcac5', 'description' => 'Palenque', 'correct_answer' => false],
                    ['id' => 'b9a15116-9f19-5c8b-997d-0896e5fffb37', 'description' => 'Teotihuacan', 'correct_answer' => false],
                    ['id' => 'cd7b27cf-0cc2-5e7c-b775-a6ae70c988bc', 'description' => 'Tikal', 'correct_answer' => true],
                    ['id' => 'f13c3d0f-3b75-5f4c-ab17-5ba72dd87c7b', 'description' => 'Tenochtitlan', 'correct_answer' => false],
                    ['id' => '04987a50-df85-599d-b00a-596211db9bc4', 'description' => 'Calakmul', 'correct_answer' => false]
                ]],
        ['id' => '1dab02fe-cc01-5389-ab1d-98f807396c64', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which ancient Mesoamerican city contains the Pyramid of the Sun and the Pyramid of the Moon?', 'difficulty' => 3, 'weight' => 437, 'alternatives' => [
                    ['id' => '370f7160-a9f4-5f69-b5f5-bc822291863d', 'description' => 'Teotihuacan', 'correct_answer' => true],
                    ['id' => '7db1e040-89de-55a9-82a0-7d6e0ced893a', 'description' => 'Tikal', 'correct_answer' => false],
                    ['id' => 'f268a48b-4be3-504a-a4b0-14cfbb7c6b9d', 'description' => 'Calakmul', 'correct_answer' => false],
                    ['id' => 'b03b1e15-6d97-5831-b63b-14d31bbf4369', 'description' => 'Tenochtitlan', 'correct_answer' => false],
                    ['id' => 'c68e77da-b5e8-5b5f-9c94-c13ed16c8409', 'description' => 'Monte Albán', 'correct_answer' => false]
                ]],
        ['id' => 'ca14e372-5f24-53be-8137-277e64aa9f49', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which Maya city in Chiapas is associated with the ruler K\'inich Janaab\' Pakal?', 'difficulty' => 3, 'weight' => 504, 'alternatives' => [
                    ['id' => 'c4fc3bed-a314-57d2-a460-f58490fa82c1', 'description' => 'Palenque', 'correct_answer' => true],
                    ['id' => '8f2b8c63-8404-5448-9d94-4fe2ab302cb5', 'description' => 'Calakmul', 'correct_answer' => false],
                    ['id' => '55054826-6e63-54b6-8771-c6cf1ca7c7de', 'description' => 'Tikal', 'correct_answer' => false],
                    ['id' => '8a24f36f-cd55-5a72-acd7-62c0d30793ab', 'description' => 'Caral', 'correct_answer' => false],
                    ['id' => '7f1967b8-3a7e-5d46-8f11-828cee748515', 'description' => 'Chichén Itzá', 'correct_answer' => false]
                ]],
        ['id' => '9a13684c-3fc8-53a5-860b-9defc9ef3e76', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which ancient Zapotec capital was built on a hilltop in the Valley of Oaxaca?', 'difficulty' => 3, 'weight' => 423, 'alternatives' => [
                    ['id' => '1b17554b-ebdd-5221-8a21-89148c66e2cd', 'description' => 'Chichén Itzá', 'correct_answer' => false],
                    ['id' => '129feca2-07e3-505d-aa4a-015e017f0b37', 'description' => 'Monte Albán', 'correct_answer' => true],
                    ['id' => '5744459a-e4a8-5bf7-ace3-86dd576881f4', 'description' => 'Palenque', 'correct_answer' => false],
                    ['id' => 'd9c5d2bf-a6d9-5aca-b6cd-dea9e7c62435', 'description' => 'Calakmul', 'correct_answer' => false],
                    ['id' => '6f3a16c0-60a3-5d96-91b8-af84838b8699', 'description' => 'Tikal', 'correct_answer' => false]
                ]],
        ['id' => '45690d43-a30c-59e7-93aa-8d76805f483f', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which Maya city in Campeche was a major rival of Tikal?', 'difficulty' => 3, 'weight' => 446, 'alternatives' => [
                    ['id' => '983bf2e3-4312-551f-8581-3ced62f8da2b', 'description' => 'Palenque', 'correct_answer' => false],
                    ['id' => '179e34d0-45b2-5f52-affe-2098405092da', 'description' => 'Cusco', 'correct_answer' => false],
                    ['id' => '9d2f6ed9-3be2-5f24-a236-fe71d1b86665', 'description' => 'Tenochtitlan', 'correct_answer' => false],
                    ['id' => '8c0e0de6-e0e6-59f2-a42f-1b45081cc8dc', 'description' => 'Caral', 'correct_answer' => false],
                    ['id' => '8814eaeb-91be-5085-9f05-18324d8881a9', 'description' => 'Calakmul', 'correct_answer' => true]
                ]],
        ['id' => 'e684067f-4a14-5599-8756-8cd3a9809e97', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which Maya city in Yucatán is famous for the Temple of Kukulcán?', 'difficulty' => 3, 'weight' => 585, 'alternatives' => [
                    ['id' => '5a9ba66b-ff8d-5aba-b2bd-dee121482d4b', 'description' => 'Chichén Itzá', 'correct_answer' => true],
                    ['id' => 'ed90bc60-a32a-5917-bc07-60fe97f9972b', 'description' => 'Caral', 'correct_answer' => false],
                    ['id' => '766e81e4-610e-54b8-99f8-9b558713cf0d', 'description' => 'Tikal', 'correct_answer' => false],
                    ['id' => 'f1b13882-b7fb-5db8-8027-af6b3358b01c', 'description' => 'Teotihuacan', 'correct_answer' => false],
                    ['id' => '56c103c4-0859-5136-b0b0-1bcf2102c18d', 'description' => 'Tenochtitlan', 'correct_answer' => false]
                ]],
        ['id' => '5ea1d8af-447d-5daf-b53f-b8f233487fa7', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which trench runs along the western coast of South America?', 'difficulty' => 3, 'weight' => 447, 'alternatives' => [
                    ['id' => '0827e6ca-1b76-58ed-b55f-c05fd7cd02d6', 'description' => 'Peru–Chile Trench', 'correct_answer' => true],
                    ['id' => 'f8fba135-e6f3-5c02-a95a-6b30ba490c15', 'description' => 'Kermadec Trench', 'correct_answer' => false],
                    ['id' => '21386e7d-59d0-5caa-b7b1-8b9832a4d5a5', 'description' => 'Sunda Trench', 'correct_answer' => false],
                    ['id' => '4fa01856-a522-5502-adac-e2bbc5ec231a', 'description' => 'Philippine Trench', 'correct_answer' => false],
                    ['id' => 'bfc8141e-08ff-5334-bd98-76b856f021db', 'description' => 'Puerto Rico Trench', 'correct_answer' => false]
                ]],
        ['id' => '0e02813e-1cfe-5333-ba28-0fdddee32f5e', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which trench arcs south of the Aleutian Islands?', 'difficulty' => 3, 'weight' => 414, 'alternatives' => [
                    ['id' => '4f45b2cb-43fc-50a4-9bd6-c863ed82cc81', 'description' => 'Aleutian Trench', 'correct_answer' => true],
                    ['id' => 'ec5ced62-0dd4-5700-8a6d-c26be8c16879', 'description' => 'Philippine Trench', 'correct_answer' => false],
                    ['id' => 'feec8021-2e12-59ec-9aec-bbbe6039039e', 'description' => 'Mariana Trench', 'correct_answer' => false],
                    ['id' => 'bad354e7-5402-5472-a8fe-9ffd1940a740', 'description' => 'Peru–Chile Trench', 'correct_answer' => false],
                    ['id' => '6ba80746-2cff-502a-812e-d97149e2b14e', 'description' => 'Japan Trench', 'correct_answer' => false]
                ]],
        ['id' => '5af1f7da-fa07-5705-b318-44650ac108f4', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which Atlantic trench lies north of Puerto Rico?', 'difficulty' => 3, 'weight' => 523, 'alternatives' => [
                    ['id' => 'c1dd0c5f-5d93-50d9-8867-fb25a18399c7', 'description' => 'Philippine Trench', 'correct_answer' => false],
                    ['id' => '504e732e-55d2-553c-84cf-7178396e8e59', 'description' => 'Peru–Chile Trench', 'correct_answer' => false],
                    ['id' => '4714f927-d21d-5116-a212-ed1fa591ffa3', 'description' => 'Kuril–Kamchatka Trench', 'correct_answer' => false],
                    ['id' => '90676293-b6fd-545c-aa41-622b1e623e25', 'description' => 'Aleutian Trench', 'correct_answer' => false],
                    ['id' => '754a3780-720b-5190-b0d6-70de4a394a88', 'description' => 'Puerto Rico Trench', 'correct_answer' => true]
                ]],
        ['id' => '51abe509-07c9-58f3-95e4-40d3514dca10', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which southwest Pacific trench is associated with the Tonga-Kermadec subduction zone?', 'difficulty' => 3, 'weight' => 559, 'alternatives' => [
                    ['id' => '3f4f985c-a07c-521b-9c30-e4782e104be3', 'description' => 'Mariana Trench', 'correct_answer' => false],
                    ['id' => '1337432b-d31a-5f5e-b742-f7dfc38532b8', 'description' => 'Philippine Trench', 'correct_answer' => false],
                    ['id' => 'a86a222f-6f65-5dc2-a11e-33653a2cebbe', 'description' => 'Aleutian Trench', 'correct_answer' => false],
                    ['id' => 'ac5207a8-180d-5cb4-9fb3-c9a689c6b7b4', 'description' => 'Kermadec Trench', 'correct_answer' => false],
                    ['id' => 'ee8ff33b-ab31-5d57-868a-7cbadbdc593f', 'description' => 'Tonga Trench', 'correct_answer' => true]
                ]],
        ['id' => '866a7773-4627-57f1-9ed2-344564f1e7bf', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which trench lies east of the Japanese island of Honshu?', 'difficulty' => 3, 'weight' => 447, 'alternatives' => [
                    ['id' => '77f1d36a-562e-5ac0-9e50-115935afa8f7', 'description' => 'Aleutian Trench', 'correct_answer' => false],
                    ['id' => '5e485e74-08e5-5e26-8390-f0248f80f6b8', 'description' => 'Philippine Trench', 'correct_answer' => false],
                    ['id' => '4e943a4d-4ff2-5d43-b09b-f02fa328fd3a', 'description' => 'Japan Trench', 'correct_answer' => true],
                    ['id' => 'f2c7a01a-e41f-5d14-96a7-d9b513c3a3ec', 'description' => 'Mariana Trench', 'correct_answer' => false],
                    ['id' => 'fdae8fb7-3ba8-517a-8180-235cf7d01fa2', 'description' => 'Tonga Trench', 'correct_answer' => false]
                ]],
        ['id' => '96931e20-e30b-538e-bfb6-4d6eafd75bce', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which deep ocean trench lies south of Java and Sumatra?', 'difficulty' => 3, 'weight' => 512, 'alternatives' => [
                    ['id' => '100fbf31-028a-5040-97ef-b3cd9e2054a7', 'description' => 'Tonga Trench', 'correct_answer' => false],
                    ['id' => '32aad943-f677-509a-a55c-323d51c89011', 'description' => 'Sunda Trench', 'correct_answer' => true],
                    ['id' => '63a8c86c-108a-5868-ad3c-36c342645f2f', 'description' => 'Puerto Rico Trench', 'correct_answer' => false],
                    ['id' => '7a9e58a8-96ae-571c-95df-5fc418294b8a', 'description' => 'Kermadec Trench', 'correct_answer' => false],
                    ['id' => '62423aa5-4fba-5085-9288-13d597cbafc9', 'description' => 'Philippine Trench', 'correct_answer' => false]
                ]],
        ['id' => 'b467a91b-4edf-56fa-b685-5fed1da76282', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which deep trench lies east of the Philippine archipelago?', 'difficulty' => 3, 'weight' => 533, 'alternatives' => [
                    ['id' => '4047f6eb-eeb1-5cdc-9ff4-080a9f5757e4', 'description' => 'Kermadec Trench', 'correct_answer' => false],
                    ['id' => 'e4e444f5-6a01-5155-a93d-b28096ee1adc', 'description' => 'Sunda Trench', 'correct_answer' => false],
                    ['id' => '342ed850-d053-51a1-8837-751ced38fe9a', 'description' => 'Mariana Trench', 'correct_answer' => false],
                    ['id' => 'dcfbbd3b-3cf6-5808-b650-64f02e080908', 'description' => 'Philippine Trench', 'correct_answer' => true],
                    ['id' => 'aed1f1fb-4cc9-5a5b-bd13-4de93e5079e0', 'description' => 'Puerto Rico Trench', 'correct_answer' => false]
                ]],
        ['id' => '54b184a6-3dc2-5802-8624-9b77ccfb4cf4', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which Pacific trench contains Challenger Deep, the deepest known ocean point?', 'difficulty' => 3, 'weight' => 559, 'alternatives' => [
                    ['id' => '2b112a55-a5c4-5871-ab98-2333ffa92908', 'description' => 'Kuril–Kamchatka Trench', 'correct_answer' => false],
                    ['id' => '38fe10fa-b35c-50ea-8110-4e8f03b9ea20', 'description' => 'Puerto Rico Trench', 'correct_answer' => false],
                    ['id' => 'b9f4640f-b291-52ea-961b-431a1b22ab25', 'description' => 'Kermadec Trench', 'correct_answer' => false],
                    ['id' => '52b8f4ce-10b7-57b5-ac1b-61a047e18107', 'description' => 'Japan Trench', 'correct_answer' => false],
                    ['id' => '9d8aa847-f78c-54e0-96d7-fa9022de3d29', 'description' => 'Mariana Trench', 'correct_answer' => true]
                ]],
        ['id' => '9b99170c-a406-5504-9ee9-f2ead0ec8d3d', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'What is the minimum distance at which a body held together mainly by gravity can remain intact near a larger body?', 'difficulty' => 3, 'weight' => 423, 'alternatives' => [
                    ['id' => '72553081-613c-5f79-a70f-3039fe1cdfc8', 'description' => 'Hill sphere', 'correct_answer' => false],
                    ['id' => '6927bdb4-f7fc-5136-9c51-900e64f4ae0e', 'description' => 'L5 Lagrange point', 'correct_answer' => false],
                    ['id' => '3e320831-d161-5d19-a3c8-493145c2a7ec', 'description' => 'Roche limit', 'correct_answer' => true],
                    ['id' => 'ce67318f-a06c-5db0-961a-5c8b71b216c7', 'description' => 'Chandrasekhar limit', 'correct_answer' => false],
                    ['id' => '41e6bb8e-7dcb-5790-9977-dbf6b7ada7b9', 'description' => 'L3 Lagrange point', 'correct_answer' => false]
                ]],
        ['id' => 'b279046b-9e20-52d1-8c12-5dabbabe7f1c', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which idealized Sun-Earth equilibrium point lies on the opposite side of the Sun from Earth?', 'difficulty' => 3, 'weight' => 484, 'alternatives' => [
                    ['id' => '6e8948bf-aabf-5534-a22f-9f2b919d6eff', 'description' => 'Roche limit', 'correct_answer' => false],
                    ['id' => '66e9c991-7404-5985-80af-37dc0b133e6e', 'description' => 'L2 Lagrange point', 'correct_answer' => false],
                    ['id' => '135a8383-9f24-597a-9f66-d6807fd64633', 'description' => 'L4 Lagrange point', 'correct_answer' => false],
                    ['id' => 'f9ceed9a-0e01-535a-aa4e-53c061c6601f', 'description' => 'L3 Lagrange point', 'correct_answer' => true],
                    ['id' => '5f0d97b5-72b6-5a16-b53a-4d6a14be8a00', 'description' => 'L1 Lagrange point', 'correct_answer' => false]
                ]],
        ['id' => 'b67b1b94-e052-5ff9-8e12-e15c426f58bd', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which Lagrange point trails a smaller orbiting body by 60 degrees?', 'difficulty' => 3, 'weight' => 497, 'alternatives' => [
                    ['id' => '67cabc6e-4aa8-50a1-81b4-1645fa5ce9d0', 'description' => 'Roche limit', 'correct_answer' => false],
                    ['id' => '3dd3d851-1435-5651-866f-78a8944d0043', 'description' => 'L4 Lagrange point', 'correct_answer' => false],
                    ['id' => '9b3585af-ffa9-59cf-8644-28e54340d000', 'description' => 'Schwarzschild radius', 'correct_answer' => false],
                    ['id' => 'aaafba63-21b7-5b40-b467-bd7405147fdc', 'description' => 'Hubble radius', 'correct_answer' => false],
                    ['id' => '620c9449-8d7c-5893-b8be-a1ee32739396', 'description' => 'L5 Lagrange point', 'correct_answer' => true]
                ]],
        ['id' => '9c7965e5-b54a-5fef-b1b8-b2f763bb143c', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'What approximate mass limit applies to a stable white dwarf supported by electron degeneracy pressure?', 'difficulty' => 3, 'weight' => 419, 'alternatives' => [
                    ['id' => '09ab60f2-42b2-573b-ba08-1c747355e82e', 'description' => 'Hubble radius', 'correct_answer' => false],
                    ['id' => '3a33d993-7316-56cc-aec5-5f3d793cd0ca', 'description' => 'L4 Lagrange point', 'correct_answer' => false],
                    ['id' => 'f1e01cc1-b667-5bae-b814-d66d9c34068d', 'description' => 'Chandrasekhar limit', 'correct_answer' => true],
                    ['id' => '61584b62-847b-520b-be55-75add0b6e602', 'description' => 'L5 Lagrange point', 'correct_answer' => false],
                    ['id' => '4eb567de-98f5-5216-b115-28dcf84dee69', 'description' => 'Schwarzschild radius', 'correct_answer' => false]
                ]],
        ['id' => '516cbc02-4b1f-5d0e-899e-cd7bb1091fab', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'What cosmological distance is associated with the Hubble expansion rate and the speed of light?', 'difficulty' => 3, 'weight' => 545, 'alternatives' => [
                    ['id' => '5a4c84af-7c84-5700-8b88-5a734f0c971a', 'description' => 'Hubble radius', 'correct_answer' => true],
                    ['id' => 'fd9167f8-70af-5284-8500-87be2694dbc3', 'description' => 'L2 Lagrange point', 'correct_answer' => false],
                    ['id' => 'e1e26d87-1364-5a92-8957-be75bae9b2d5', 'description' => 'Schwarzschild radius', 'correct_answer' => false],
                    ['id' => '0a585255-4d85-5125-b83d-f6ae3d4e3108', 'description' => 'Roche limit', 'correct_answer' => false],
                    ['id' => '6c333e43-b934-53f8-81f1-f4b16503edaf', 'description' => 'L4 Lagrange point', 'correct_answer' => false]
                ]],
        ['id' => '6535928c-6b92-5059-8143-157ff65dd170', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which Sun-Earth equilibrium point lies beyond Earth and is used by the James Webb Space Telescope?', 'difficulty' => 3, 'weight' => 419, 'alternatives' => [
                    ['id' => '5b5a3b3f-f529-5dce-ae62-9ee3f39b7362', 'description' => 'L2 Lagrange point', 'correct_answer' => true],
                    ['id' => '3b340c4b-6513-58eb-b83e-97bbdc2b415e', 'description' => 'L5 Lagrange point', 'correct_answer' => false],
                    ['id' => 'ca6f66fb-82bd-5a0b-bede-569e34785d24', 'description' => 'Roche limit', 'correct_answer' => false],
                    ['id' => 'a9255a85-5f03-5332-b27e-86f60719ac73', 'description' => 'Hubble radius', 'correct_answer' => false],
                    ['id' => '2dbfe5a4-c41b-5299-9930-cd2bbab6a7c9', 'description' => 'Hill sphere', 'correct_answer' => false]
                ]],
        ['id' => '5e65681e-ca1e-59e6-a6c5-eb922873f524', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'What region around a celestial body marks where its gravity dominates that of a more massive body?', 'difficulty' => 3, 'weight' => 463, 'alternatives' => [
                    ['id' => '837f86fd-cabd-5c1a-9a09-c15d2a5ea61b', 'description' => 'Hill sphere', 'correct_answer' => true],
                    ['id' => '77cafcc5-d770-5487-b8eb-88ffe84ff501', 'description' => 'L3 Lagrange point', 'correct_answer' => false],
                    ['id' => 'b1778574-39dd-5b11-8e4b-9a6a94e43de4', 'description' => 'L1 Lagrange point', 'correct_answer' => false],
                    ['id' => 'd0198019-3c62-5b01-b1b5-8bc13c8c4d21', 'description' => 'L4 Lagrange point', 'correct_answer' => false],
                    ['id' => '360c9225-c69f-56ff-8b49-1ceb77f5dad0', 'description' => 'Roche limit', 'correct_answer' => false]
                ]],
        ['id' => '43113067-c15f-5a76-a754-152ae9d73064', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'What radius defines the event horizon of a non-rotating, uncharged black hole?', 'difficulty' => 3, 'weight' => 467, 'alternatives' => [
                    ['id' => '2e657c58-9066-5824-96d5-2f2c72b2db1a', 'description' => 'L4 Lagrange point', 'correct_answer' => false],
                    ['id' => '21f4bd27-d454-50d0-ac43-1974bd8f71f9', 'description' => 'Roche limit', 'correct_answer' => false],
                    ['id' => '9aded15f-0664-5232-985d-7a250ee0a410', 'description' => 'L3 Lagrange point', 'correct_answer' => false],
                    ['id' => '5733d9fe-7b9b-5371-bdb9-e55f45c78a22', 'description' => 'Schwarzschild radius', 'correct_answer' => true],
                    ['id' => 'e6150712-87c9-5820-a9a8-07c449e491d1', 'description' => 'L2 Lagrange point', 'correct_answer' => false]
                ]],
        ['id' => '0600c119-80b1-5138-a389-3d4cc0bac745', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which corridor between Poland and Lithuania links the Baltic states to the rest of NATO territory?', 'difficulty' => 3, 'weight' => 600, 'alternatives' => [
                    ['id' => 'a4c948e9-e99e-50aa-b1a6-78d80ac4a591', 'description' => 'Kaliningrad Oblast', 'correct_answer' => false],
                    ['id' => '83d4de76-9172-5720-8f4e-965bd62244de', 'description' => 'Fergana Valley', 'correct_answer' => false],
                    ['id' => '729e5a29-a934-50f9-a386-2061f86bf6fb', 'description' => 'Nagorno-Karabakh', 'correct_answer' => false],
                    ['id' => '257c6ad9-75cb-5203-ba23-123499713919', 'description' => 'Suwalki Gap', 'correct_answer' => true],
                    ['id' => '46c66e87-1143-51e2-ac56-bd1520f14f9b', 'description' => 'Cabinda', 'correct_answer' => false]
                ]],
        ['id' => 'eceaed65-ec5c-555c-bd9e-802c860f19b5', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which mountainous region in the South Caucasus was long disputed between Armenia and Azerbaijan?', 'difficulty' => 3, 'weight' => 455, 'alternatives' => [
                    ['id' => '3004f76c-23a1-59fd-a7b9-1ef93b3685f9', 'description' => 'Suwalki Gap', 'correct_answer' => false],
                    ['id' => '41195629-a150-5cfa-af62-721e584d4766', 'description' => 'Kaliningrad Oblast', 'correct_answer' => false],
                    ['id' => '33b128fa-e1d7-503c-bf3f-fc11fac61198', 'description' => 'Golan Heights', 'correct_answer' => false],
                    ['id' => 'df3f5dce-dea7-517f-a5ea-fdf27a878b50', 'description' => 'Nakhchivan', 'correct_answer' => false],
                    ['id' => '921165d1-bf98-5405-863d-7f7f43d35692', 'description' => 'Nagorno-Karabakh', 'correct_answer' => true]
                ]],
        ['id' => '6d94891e-ff34-5ffe-9fe0-30c9bb927854', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which densely populated valley is shared by Kyrgyzstan, Tajikistan, and Uzbekistan?', 'difficulty' => 3, 'weight' => 530, 'alternatives' => [
                    ['id' => '51c5fafa-0c97-513f-9df1-02b4d09dcaac', 'description' => 'Golan Heights', 'correct_answer' => false],
                    ['id' => 'f7fce140-4cf1-5072-8de4-240584fb8786', 'description' => 'Fergana Valley', 'correct_answer' => true],
                    ['id' => '3fa9c334-60fe-561d-837c-df0acd3448d8', 'description' => 'Transnistria', 'correct_answer' => false],
                    ['id' => '0eb9c295-ceb9-52be-81c6-cbc9214a48be', 'description' => 'Kaliningrad Oblast', 'correct_answer' => false],
                    ['id' => '586f9fa4-754d-5447-9885-8d8a8f892c8b', 'description' => 'Cabinda', 'correct_answer' => false]
                ]],
        ['id' => '75a4a290-3c42-5e93-b757-1a72afd8560b', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which breakaway region lies between the Dniester River and Ukraine within internationally recognized Moldova?', 'difficulty' => 3, 'weight' => 595, 'alternatives' => [
                    ['id' => 'cc41dedc-d592-5d2e-9553-1bc0499fec06', 'description' => 'Aksai Chin', 'correct_answer' => false],
                    ['id' => '9456e173-b9f5-5080-b81f-bf24f5290dd9', 'description' => 'Nagorno-Karabakh', 'correct_answer' => false],
                    ['id' => '20f669e8-5e4c-5507-adea-2358be5ac952', 'description' => 'Kaliningrad Oblast', 'correct_answer' => false],
                    ['id' => '9e68c338-7f61-5bce-8d67-870bcfa23df0', 'description' => 'Transnistria', 'correct_answer' => true],
                    ['id' => 'cd88caa8-4085-5bad-89df-ad5803c2565e', 'description' => 'Golan Heights', 'correct_answer' => false]
                ]],
        ['id' => '85560eef-a8fb-597c-a96b-50a77e76da74', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which plateau overlooking northern Israel and southwestern Syria has been a major territorial dispute?', 'difficulty' => 3, 'weight' => 573, 'alternatives' => [
                    ['id' => 'e4268226-f75c-50e1-894e-ffc4165f999a', 'description' => 'Golan Heights', 'correct_answer' => true],
                    ['id' => 'f9ea97f2-e06f-5f57-af4d-a64c78c548ae', 'description' => 'Nakhchivan', 'correct_answer' => false],
                    ['id' => '0153401b-4ae5-5915-8b01-067056e72510', 'description' => 'Cabinda', 'correct_answer' => false],
                    ['id' => 'e2a7886c-2f8c-52ad-bdc2-fbcaf694f49c', 'description' => 'Suwalki Gap', 'correct_answer' => false],
                    ['id' => '9542e351-1d27-5d63-bf35-afff5613e230', 'description' => 'Kaliningrad Oblast', 'correct_answer' => false]
                ]],
        ['id' => '28dfe879-49a0-5c34-a838-af8029b10449', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which high-altitude region is administered by China and claimed by India?', 'difficulty' => 3, 'weight' => 525, 'alternatives' => [
                    ['id' => 'da9ea8ed-c7c3-51fc-b023-710323743722', 'description' => 'Transnistria', 'correct_answer' => false],
                    ['id' => '801323ab-58bd-564e-9477-b1bbf00c01b6', 'description' => 'Wakhan Corridor', 'correct_answer' => false],
                    ['id' => 'b5fd7316-8d20-55c6-b5f5-9297a3a7f9c6', 'description' => 'Suwalki Gap', 'correct_answer' => false],
                    ['id' => '38614e86-6232-5fd3-9830-66d9a345a647', 'description' => 'Kaliningrad Oblast', 'correct_answer' => false],
                    ['id' => '307c6da2-efe1-55de-94dc-0b4c8b3e7eea', 'description' => 'Aksai Chin', 'correct_answer' => true]
                ]],
        ['id' => 'f1381693-ba11-546b-89f5-14b6fd91a6c5', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which Angolan exclave is separated from the rest of Angola by territory belonging to the Democratic Republic of the Congo?', 'difficulty' => 3, 'weight' => 547, 'alternatives' => [
                    ['id' => '2406ca91-0095-538c-9ec0-7883bf159753', 'description' => 'Fergana Valley', 'correct_answer' => false],
                    ['id' => 'cbc5840e-d29e-5086-a058-e11982b7413e', 'description' => 'Transnistria', 'correct_answer' => false],
                    ['id' => '58141193-0eb5-5181-a051-715c9d8b7e15', 'description' => 'Nagorno-Karabakh', 'correct_answer' => false],
                    ['id' => '3e0c19b4-e6e6-5d8e-aca3-9c6f3ab48017', 'description' => 'Cabinda', 'correct_answer' => true],
                    ['id' => '00f9f857-b417-5d1d-8494-400a07ba7658', 'description' => 'Nakhchivan', 'correct_answer' => false]
                ]],
        ['id' => '36d1043a-c8af-5f94-97db-1b0baecc3a45', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which Azerbaijani exclave is separated from the rest of Azerbaijan by Armenia?', 'difficulty' => 3, 'weight' => 464, 'alternatives' => [
                    ['id' => '0c46e06a-d531-5a5f-982a-e414b0be4473', 'description' => 'Nakhchivan', 'correct_answer' => true],
                    ['id' => '2071ecf0-199b-5583-a767-da8c7edecc1e', 'description' => 'Fergana Valley', 'correct_answer' => false],
                    ['id' => '4c502f5f-b935-5f40-99ad-ee479985edee', 'description' => 'Transnistria', 'correct_answer' => false],
                    ['id' => 'e082ae3e-1cc0-5809-84c8-4c672274e69b', 'description' => 'Nagorno-Karabakh', 'correct_answer' => false],
                    ['id' => '5edd7ef3-5f91-53ec-897e-4a4e0f67862d', 'description' => 'Wakhan Corridor', 'correct_answer' => false]
                ]],
        ['id' => 'aaff7e99-2207-5fd3-804e-055cdad3f444', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which language isolate is spoken in parts of northern Pakistan?', 'difficulty' => 3, 'weight' => 485, 'alternatives' => [
                    ['id' => '36f6507f-e01e-596e-912d-7214ac938f44', 'description' => 'Sandawe', 'correct_answer' => false],
                    ['id' => '2743a52a-e32f-5799-92b7-f1c19270ed10', 'description' => 'Ket', 'correct_answer' => false],
                    ['id' => '9722a9d9-f029-5d5e-8f66-593ae5e925d3', 'description' => 'Nivkh', 'correct_answer' => false],
                    ['id' => '59549b49-da0c-5864-bb21-77583374e0fa', 'description' => 'Basque', 'correct_answer' => false],
                    ['id' => 'e3e50eb0-19ff-5255-b644-b26be983ebc7', 'description' => 'Burushaski', 'correct_answer' => true]
                ]],
        ['id' => '9861d55d-c4f9-55aa-8323-ea73a9d2aa0e', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which language isolate is spoken by hunter-gatherer communities near Lake Eyasi in Tanzania?', 'difficulty' => 3, 'weight' => 573, 'alternatives' => [
                    ['id' => '5e4af215-e806-5a1c-b63f-c92f4ed60e8a', 'description' => 'Hadza', 'correct_answer' => true],
                    ['id' => 'be942dae-53b8-5ea6-98cf-0935fdffd4f3', 'description' => 'Ket', 'correct_answer' => false],
                    ['id' => '6a6c891e-c400-5533-a321-94361829ff02', 'description' => 'Nivkh', 'correct_answer' => false],
                    ['id' => 'a525efaa-5769-58be-9f4e-94eb648bea8f', 'description' => 'Kusunda', 'correct_answer' => false],
                    ['id' => 'b1dfd70c-daad-5c81-8429-8aba2b6640f5', 'description' => 'Burushaski', 'correct_answer' => false]
                ]],
        ['id' => '56e72c94-9910-539e-a910-a3ac20987091', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which language isolate is associated with a small Indigenous community in Nepal?', 'difficulty' => 3, 'weight' => 446, 'alternatives' => [
                    ['id' => '3d7c1238-0ad2-5b1e-a6bd-45bafbbe8ba4', 'description' => 'Sandawe', 'correct_answer' => false],
                    ['id' => '610258c3-40e0-55d1-9c38-1c73884e2edb', 'description' => 'Kusunda', 'correct_answer' => true],
                    ['id' => '158185d8-88f2-5680-a1e8-c241fecf3238', 'description' => 'Mapudungun', 'correct_answer' => false],
                    ['id' => 'ce2365be-4cb4-5d78-9487-3afed2adb142', 'description' => 'Ainu', 'correct_answer' => false],
                    ['id' => '75482cb4-0542-5620-a596-a0e46f4d379e', 'description' => 'Ket', 'correct_answer' => false]
                ]],
        ['id' => 'a607b3e1-e787-599e-876e-d49f8c5f3358', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which language isolate is spoken in parts of northern Spain and southwestern France?', 'difficulty' => 3, 'weight' => 436, 'alternatives' => [
                    ['id' => '00171528-a5a5-53c5-8dfc-301ffe114469', 'description' => 'Kusunda', 'correct_answer' => false],
                    ['id' => '2619a614-6226-579b-9965-903b503d600b', 'description' => 'Basque', 'correct_answer' => true],
                    ['id' => '03b80c7b-5de4-5ba1-a8a2-7c0659376814', 'description' => 'Sandawe', 'correct_answer' => false],
                    ['id' => 'd3351977-35b2-5320-9c8e-accef4d72a2d', 'description' => 'Ket', 'correct_answer' => false],
                    ['id' => 'd1ee7fb9-a9ba-5aea-ba73-3b31ce103c5a', 'description' => 'Mapudungun', 'correct_answer' => false]
                ]],
        ['id' => 'f75e166b-821d-5f01-b6cf-b2e755e3619e', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which endangered language was traditionally spoken by Indigenous people of northern Japan?', 'difficulty' => 3, 'weight' => 401, 'alternatives' => [
                    ['id' => '374d3c96-bda1-511b-abbb-26ea35097022', 'description' => 'Mapudungun', 'correct_answer' => false],
                    ['id' => 'ff894af2-c4a1-562f-8f45-782e776f2282', 'description' => 'Burushaski', 'correct_answer' => false],
                    ['id' => 'f8f02df3-3679-58f2-9fe8-53ddc5a082c2', 'description' => 'Ainu', 'correct_answer' => true],
                    ['id' => '5529a2b9-774c-53e0-8b4a-51861787edad', 'description' => 'Basque', 'correct_answer' => false],
                    ['id' => '9773df00-9a16-5c5c-83ac-df0bc31c8629', 'description' => 'Hadza', 'correct_answer' => false]
                ]],
        ['id' => 'debd1d1b-7581-581f-a3ec-bca58fe53303', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which Yeniseian language is spoken by a small community in Siberia?', 'difficulty' => 3, 'weight' => 535, 'alternatives' => [
                    ['id' => '1a3a6ce2-68c6-5324-a734-de44dad575c8', 'description' => 'Hadza', 'correct_answer' => false],
                    ['id' => 'ac89427d-da82-55a0-876a-f3dfc9bd18c6', 'description' => 'Sandawe', 'correct_answer' => false],
                    ['id' => '44777910-805c-5aa6-a261-d1b468c6b613', 'description' => 'Zuni', 'correct_answer' => false],
                    ['id' => '7fccd3d9-a9c9-5a69-959e-d4ac8a80cee1', 'description' => 'Ket', 'correct_answer' => true],
                    ['id' => 'f101a263-827c-541e-8b4e-c906669e33cc', 'description' => 'Mapudungun', 'correct_answer' => false]
                ]],
        ['id' => '3e25855b-cfb3-596e-92e2-d122f6679e8a', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which language isolate is spoken by the Zuni people in New Mexico?', 'difficulty' => 3, 'weight' => 544, 'alternatives' => [
                    ['id' => '5566acce-3205-59e5-8a7c-acaf866a1428', 'description' => 'Kusunda', 'correct_answer' => false],
                    ['id' => '777be836-2bee-5b11-93c5-b8b39b8832d9', 'description' => 'Basque', 'correct_answer' => false],
                    ['id' => '8bdf21cc-bc2e-56bc-9386-5666335d4216', 'description' => 'Ket', 'correct_answer' => false],
                    ['id' => '6e4caf43-7028-59a0-8091-217e983766f5', 'description' => 'Zuni', 'correct_answer' => true],
                    ['id' => '50d85205-6d80-5f8e-9b00-e4bf273f152d', 'description' => 'Mapudungun', 'correct_answer' => false]
                ]],
        ['id' => '2c2f6fa1-1136-57d5-8ffe-b85746ead403', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which language isolate is spoken in central Tanzania?', 'difficulty' => 3, 'weight' => 600, 'alternatives' => [
                    ['id' => '42f49308-30c6-583a-88db-75f5a976b0f5', 'description' => 'Zuni', 'correct_answer' => false],
                    ['id' => '2ebe6ae7-19c1-52f0-925e-1c9ce1d8f563', 'description' => 'Hadza', 'correct_answer' => false],
                    ['id' => '50374745-bbdf-5fa6-91ba-c5d08dabe24b', 'description' => 'Basque', 'correct_answer' => false],
                    ['id' => '48203fb8-af51-53af-a8c0-1c8d29c87038', 'description' => 'Sandawe', 'correct_answer' => true],
                    ['id' => '07cf8b65-ddcd-56ce-955c-e8605606b524', 'description' => 'Nivkh', 'correct_answer' => false]
                ]],
        ['id' => '743ed24c-8e58-5aa9-8ebf-cda2cd76dc13', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which Hindu Kush pass in Afghanistan is crossed by a major tunnel linking northern and southern parts of the country?', 'difficulty' => 4, 'weight' => 643, 'alternatives' => [
                    ['id' => '0a893bc8-ffdf-5499-a8e8-6b86e7b1d9eb', 'description' => 'Torugart Pass', 'correct_answer' => false],
                    ['id' => '7dee91c5-597a-543f-a7b6-f5207f776d15', 'description' => 'Khyber Pass', 'correct_answer' => false],
                    ['id' => '56f149fa-d9fc-5a75-8a84-f45b539366e4', 'description' => 'Bolan Pass', 'correct_answer' => false],
                    ['id' => 'f4f1bc23-cf43-5941-ba2c-64535aba7f63', 'description' => 'Wakhan Corridor', 'correct_answer' => false],
                    ['id' => '34ccd0f6-31c8-5275-96a1-a1ea17b0f5df', 'description' => 'Salang Pass', 'correct_answer' => true]
                ]],
        ['id' => '0585a2ed-65bc-52c5-96e5-cf169c19ac17', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which narrow Afghan territory extends eastward between Tajikistan and Pakistan toward China?', 'difficulty' => 4, 'weight' => 752, 'alternatives' => [
                    ['id' => '1ca97b59-9bc6-5a01-808a-967841617795', 'description' => 'Khyber Pass', 'correct_answer' => false],
                    ['id' => 'a5b2df5d-dfd0-5dad-a0bf-0cc527da5ba0', 'description' => 'Torugart Pass', 'correct_answer' => false],
                    ['id' => '42c1bfea-834a-504d-b56a-146c2a32a1af', 'description' => 'Irkeshtam Pass', 'correct_answer' => false],
                    ['id' => 'ed0d4f25-2fac-5ddf-bb77-ddda2ee322ff', 'description' => 'Wakhan Corridor', 'correct_answer' => true],
                    ['id' => '51a3b8d0-557d-5fe9-8b64-3d921e9927d3', 'description' => 'Salang Pass', 'correct_answer' => false]
                ]],
        ['id' => '1d75445b-cc93-57ae-ba9f-569baaaf9c97', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which mountain pass connects Kyrgyzstan with China\'s Xinjiang region?', 'difficulty' => 4, 'weight' => 739, 'alternatives' => [
                    ['id' => '66f518ce-34ec-5775-bf97-83ab55dc5060', 'description' => 'Khyber Pass', 'correct_answer' => false],
                    ['id' => '5c1d6acb-25d7-5f97-afa7-a438e6ee7390', 'description' => 'Irkeshtam Pass', 'correct_answer' => false],
                    ['id' => '2a5fca49-48dd-55ed-a848-ac84ed79dbe8', 'description' => 'Khunjerab Pass', 'correct_answer' => false],
                    ['id' => '38d8a9d9-557c-5443-ba28-f47b5094d8ae', 'description' => 'Dzungarian Gate', 'correct_answer' => false],
                    ['id' => '0b383d2f-aac5-5099-998d-259f180fc6b1', 'description' => 'Torugart Pass', 'correct_answer' => true]
                ]],
        ['id' => '4315876a-3a69-5d3b-a78a-a2e6c2f77288', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which mountain corridor connects the Central Asian steppe with the region of Xinjiang between the Dzungarian Alatau and Altai ranges?', 'difficulty' => 4, 'weight' => 658, 'alternatives' => [
                    ['id' => 'd3f7bffd-d85f-57b5-acee-29f164522b7c', 'description' => 'Irkeshtam Pass', 'correct_answer' => false],
                    ['id' => 'aa3b83ab-091a-5669-99c2-8e6f806284be', 'description' => 'Dzungarian Gate', 'correct_answer' => true],
                    ['id' => 'fa94061b-85e0-55cc-abc1-4419a36f6510', 'description' => 'Pamir Knot', 'correct_answer' => false],
                    ['id' => '14535b76-b0eb-550b-8b3f-a3bf653ae600', 'description' => 'Wakhan Corridor', 'correct_answer' => false],
                    ['id' => 'ae45b623-4f05-552d-b79f-bd4bb5c9e91c', 'description' => 'Salang Pass', 'correct_answer' => false]
                ]],
        ['id' => '36f376ab-a458-5ecd-9978-a320fbdc444c', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which mountain system separates parts of Central Asia from the Tarim Basin?', 'difficulty' => 4, 'weight' => 712, 'alternatives' => [
                    ['id' => 'fa0eae95-72ba-5b94-973f-93d94e391822', 'description' => 'Pamir Knot', 'correct_answer' => false],
                    ['id' => 'd18e6007-1903-55bf-832d-22b7d08a67b1', 'description' => 'Wakhan Corridor', 'correct_answer' => false],
                    ['id' => '6567d47c-14b4-546e-92ff-a7f6ee5a5244', 'description' => 'Tian Shan', 'correct_answer' => true],
                    ['id' => '7a332cd1-9e83-5347-894a-2f891c552d46', 'description' => 'Bolan Pass', 'correct_answer' => false],
                    ['id' => '359648bb-b1e5-59a8-adc8-cd0f25d8567e', 'description' => 'Dzungarian Gate', 'correct_answer' => false]
                ]],
        ['id' => 'c9afb362-9bc6-5cf0-abb4-1b3fe9172ff1', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which high-altitude pass connects Pakistan\'s Gilgit-Baltistan region with China\'s Xinjiang region?', 'difficulty' => 4, 'weight' => 662, 'alternatives' => [
                    ['id' => '0738c891-5bfc-58f4-a32f-f81f2a620348', 'description' => 'Khunjerab Pass', 'correct_answer' => true],
                    ['id' => '89820015-7d1e-5b97-8bad-da7ff09c84fc', 'description' => 'Tian Shan', 'correct_answer' => false],
                    ['id' => '9f2ed66e-b368-5f68-8f9e-d6300ab439f7', 'description' => 'Wakhan Corridor', 'correct_answer' => false],
                    ['id' => 'c9ad0812-35c4-587b-a450-83901894264a', 'description' => 'Torugart Pass', 'correct_answer' => false],
                    ['id' => '6d40cfe5-eea8-5916-9328-c071832094ea', 'description' => 'Pamir Knot', 'correct_answer' => false]
                ]],
        ['id' => '04f8dd0f-3ba2-5357-bf1c-8960502c6260', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which border crossing connects southern Kyrgyzstan with China\'s Xinjiang region?', 'difficulty' => 4, 'weight' => 790, 'alternatives' => [
                    ['id' => '86c5c36c-4e69-5848-b95c-1fb58a0ad19b', 'description' => 'Pamir Knot', 'correct_answer' => false],
                    ['id' => '3e60f875-f33e-5cc1-89fa-48bfb8b728c5', 'description' => 'Irkeshtam Pass', 'correct_answer' => true],
                    ['id' => '7fe964f9-c6fb-5e76-a4ff-988daec4d532', 'description' => 'Torugart Pass', 'correct_answer' => false],
                    ['id' => 'c8a70efd-0d8a-5f83-9f7c-5582c6307d49', 'description' => 'Khyber Pass', 'correct_answer' => false],
                    ['id' => '20e30651-0acd-55cc-9399-e79f03e24a71', 'description' => 'Khunjerab Pass', 'correct_answer' => false]
                ]],
        ['id' => 'c67f81a8-13f5-54bc-8c56-e59d816f5222', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'What geographic term describes the high mountain junction where several major Asian ranges converge?', 'difficulty' => 4, 'weight' => 770, 'alternatives' => [
                    ['id' => 'c7f23f06-addd-584d-ad52-c0eed69a0d07', 'description' => 'Salang Pass', 'correct_answer' => false],
                    ['id' => 'c9e860d0-2456-52fb-b14c-52517cfe80f5', 'description' => 'Wakhan Corridor', 'correct_answer' => false],
                    ['id' => '7515d677-5b1f-55ab-b8a0-65a70f8a7728', 'description' => 'Bolan Pass', 'correct_answer' => false],
                    ['id' => '3aaf1cff-da22-53ac-acfe-ee94b60ef5f7', 'description' => 'Dzungarian Gate', 'correct_answer' => false],
                    ['id' => '14aefa36-08ad-5258-9dee-8fee403f2199', 'description' => 'Pamir Knot', 'correct_answer' => true]
                ]],
        ['id' => '2ee4746c-c7a2-5d35-8391-1c0b93f5d5a0', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which warm current flows southward along Australia\'s east coast?', 'difficulty' => 4, 'weight' => 648, 'alternatives' => [
                    ['id' => '062f46b1-88c1-5506-8de2-ec0c3a68adeb', 'description' => 'Kuroshio Current', 'correct_answer' => false],
                    ['id' => 'c0f88917-e4b5-521a-9aa2-4ad645933f95', 'description' => 'Agulhas Current', 'correct_answer' => false],
                    ['id' => '781e64ab-1bb0-5925-8fd7-dc551151b00c', 'description' => 'Benguela Current', 'correct_answer' => false],
                    ['id' => '55d8797f-792b-5c80-9ef2-c4a14f0f9c9d', 'description' => 'East Australian Current', 'correct_answer' => true],
                    ['id' => '1aa67de5-ece1-5837-8f44-e171cd752687', 'description' => 'Gulf Stream', 'correct_answer' => false]
                ]],
        ['id' => 'cf91a259-4c29-541d-b23e-a456894a049a', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which warm Atlantic current flows from the Gulf of Mexico toward western Europe?', 'difficulty' => 4, 'weight' => 739, 'alternatives' => [
                    ['id' => '38b250e2-7497-55cf-880e-68d3d7a2d403', 'description' => 'Humboldt Current', 'correct_answer' => false],
                    ['id' => '364cd9d4-1f9c-55aa-8547-0ba36a3dad72', 'description' => 'Agulhas Current', 'correct_answer' => false],
                    ['id' => '79c02daf-2e73-53f5-ad07-c8f75572ad66', 'description' => 'East Australian Current', 'correct_answer' => false],
                    ['id' => '4176dd54-41ef-5548-96a8-1d97e95c1b7c', 'description' => 'Kuroshio Current', 'correct_answer' => false],
                    ['id' => '13c97976-ec57-57ef-b60f-1900a13bfc8c', 'description' => 'Gulf Stream', 'correct_answer' => true]
                ]],
        ['id' => '74ac8f23-1da0-53a4-a81e-86a9972aae19', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which cold subarctic current flows southward toward northeastern Japan?', 'difficulty' => 4, 'weight' => 718, 'alternatives' => [
                    ['id' => 'b7122673-1668-5997-9ce5-e3a9d5c80695', 'description' => 'Gulf Stream', 'correct_answer' => false],
                    ['id' => 'a6016089-10f9-5061-ade4-61f373806997', 'description' => 'Labrador Current', 'correct_answer' => false],
                    ['id' => '3b098b68-526b-5efc-a16e-23639e1048c8', 'description' => 'Oyashio Current', 'correct_answer' => true],
                    ['id' => '919c9e58-46b2-56df-9362-8f45b6a04de5', 'description' => 'Agulhas Current', 'correct_answer' => false],
                    ['id' => '45afeba7-973b-5c82-8a0e-e01f4bdf7018', 'description' => 'Kuroshio Current', 'correct_answer' => false]
                ]],
        ['id' => 'df7c983a-54b1-5249-a647-2556e3e4b027', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which warm current flows southwestward along the southeast coast of Africa?', 'difficulty' => 4, 'weight' => 706, 'alternatives' => [
                    ['id' => 'bd43692b-fb1e-5caf-9f83-f8da392bdcf1', 'description' => 'Labrador Current', 'correct_answer' => false],
                    ['id' => 'd1a74db0-7f04-50bd-b090-422c8ff56072', 'description' => 'Gulf Stream', 'correct_answer' => false],
                    ['id' => '9400c0f2-132c-51cb-a79b-da996fc5a553', 'description' => 'California Current', 'correct_answer' => false],
                    ['id' => '9da637c1-5670-5b9a-be0c-7c827c9cec63', 'description' => 'Oyashio Current', 'correct_answer' => false],
                    ['id' => 'e29f9201-f01a-568d-9912-af10d24d71d2', 'description' => 'Agulhas Current', 'correct_answer' => true]
                ]],
        ['id' => 'fda403b8-9965-5e75-98cd-1fe4853b458b', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which cold current flows northward along the southwest coast of Africa?', 'difficulty' => 4, 'weight' => 778, 'alternatives' => [
                    ['id' => '01a277c8-8c05-5bd4-b41c-79cb9faf34c0', 'description' => 'Humboldt Current', 'correct_answer' => false],
                    ['id' => 'f1ea81a4-eb70-52ab-b48d-8f0a46640f4e', 'description' => 'Labrador Current', 'correct_answer' => false],
                    ['id' => '5fa18642-48b5-57e1-8849-8f992afbad6d', 'description' => 'Canary Current', 'correct_answer' => false],
                    ['id' => 'effe444c-d459-5024-a95e-6f281b427401', 'description' => 'Oyashio Current', 'correct_answer' => false],
                    ['id' => '269d8a43-47b9-599d-8433-99ba2912e587', 'description' => 'Benguela Current', 'correct_answer' => true]
                ]],
        ['id' => '8c40d727-565e-5100-8df5-39e99a64fadf', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which cold ocean current flows southward along the coast of Labrador and Newfoundland?', 'difficulty' => 4, 'weight' => 638, 'alternatives' => [
                    ['id' => '3402e19f-3bb2-5297-a27c-72ee3bf26839', 'description' => 'California Current', 'correct_answer' => false],
                    ['id' => 'eab439e0-bfe8-5234-87d5-942c571a9004', 'description' => 'Labrador Current', 'correct_answer' => true],
                    ['id' => '734ef8d3-0b5e-5218-9d20-05313487639e', 'description' => 'Kuroshio Current', 'correct_answer' => false],
                    ['id' => 'a13aa75a-0bd4-5922-b089-1dc54d2a49bd', 'description' => 'Canary Current', 'correct_answer' => false],
                    ['id' => '768108d8-5afa-5e75-9e3c-1d9e4622060b', 'description' => 'Benguela Current', 'correct_answer' => false]
                ]],
        ['id' => '9a822936-5061-5b8e-b920-e6036ee6e439', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which cold eastern boundary current flows southward along the west coast of North America?', 'difficulty' => 4, 'weight' => 645, 'alternatives' => [
                    ['id' => '86f6e326-917f-507d-83db-e0358a192b13', 'description' => 'Kuroshio Current', 'correct_answer' => false],
                    ['id' => '6d18f65c-ff03-54be-8333-ce8ec02b8f4f', 'description' => 'Benguela Current', 'correct_answer' => false],
                    ['id' => 'b7c5a880-1851-5a1d-8594-6486319f890b', 'description' => 'California Current', 'correct_answer' => true],
                    ['id' => '64365180-d24e-5e9f-af6d-386ddb8b14eb', 'description' => 'Labrador Current', 'correct_answer' => false],
                    ['id' => '81284bc2-b8ac-57ad-9e09-88f0b4739434', 'description' => 'Humboldt Current', 'correct_answer' => false]
                ]],
        ['id' => '6ff9367d-c190-54e5-99af-d6f495670814', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which warm western boundary current flows northward along Taiwan and Japan?', 'difficulty' => 4, 'weight' => 775, 'alternatives' => [
                    ['id' => '8754c888-b494-5b3f-b6bf-b372ae18f39b', 'description' => 'Kuroshio Current', 'correct_answer' => true],
                    ['id' => 'ad0ae77c-8821-540f-a5f1-6edd8d693c5f', 'description' => 'Benguela Current', 'correct_answer' => false],
                    ['id' => '65175909-6df1-5a71-8d1e-d49927623e82', 'description' => 'Oyashio Current', 'correct_answer' => false],
                    ['id' => '4e96ba06-1ebf-5ae2-828a-041e88b6b0c7', 'description' => 'Gulf Stream', 'correct_answer' => false],
                    ['id' => '698af76c-22a0-51e6-925b-f1858b80b6e4', 'description' => 'Humboldt Current', 'correct_answer' => false]
                ]],
        ['id' => 'aa2e3b2c-45b8-5ee8-87dc-91a3cb33ac84', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'What geographic region includes the Indonesian and Philippine archipelagos?', 'difficulty' => 4, 'weight' => 661, 'alternatives' => [
                    ['id' => 'ee01da57-2379-5c5e-8b5d-583d272abda9', 'description' => 'Wallacea', 'correct_answer' => false],
                    ['id' => '47db223a-3b3f-5b27-891f-c61d30503ef7', 'description' => 'Sahul', 'correct_answer' => false],
                    ['id' => 'e8f51d0d-3245-5753-abd2-418c6bb4130b', 'description' => 'Makaronesia', 'correct_answer' => false],
                    ['id' => '7b9c6503-c541-596a-9091-d163d221e667', 'description' => 'Oceania', 'correct_answer' => false],
                    ['id' => '94587e17-493e-596b-88ed-64bc8a6c731f', 'description' => 'Insular Southeast Asia', 'correct_answer' => true]
                ]],
        ['id' => 'd447bb4e-ff74-57ec-8825-a2e21b2248cd', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'What biogeographic region of Indonesia lies between the Sunda and Sahul shelves?', 'difficulty' => 4, 'weight' => 736, 'alternatives' => [
                    ['id' => '9e232f64-aaaa-5747-a952-a40cd0dbd4cb', 'description' => 'Micronesia', 'correct_answer' => false],
                    ['id' => 'b4a28918-ae07-5e11-8c90-709eae97b6b9', 'description' => 'Melanesia', 'correct_answer' => false],
                    ['id' => 'dea334c0-8782-5299-a4ed-a5b62b91e530', 'description' => 'Oceania', 'correct_answer' => false],
                    ['id' => '65e0d6d5-a305-50e0-92b4-173beb6ffa2e', 'description' => 'Wallacea', 'correct_answer' => true],
                    ['id' => '1b8ba0b8-7f1d-5db7-9cc7-d327e0c7cd0b', 'description' => 'Polynesia', 'correct_answer' => false]
                ]],
        ['id' => '1387c670-a7d7-5abd-99d3-7c5658036470', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which broad region includes Australia, New Zealand, and the Pacific island groups?', 'difficulty' => 4, 'weight' => 666, 'alternatives' => [
                    ['id' => 'aa21ec59-c665-5cd1-be12-017f9d944ef3', 'description' => 'Wallacea', 'correct_answer' => false],
                    ['id' => '5f2c0c9f-063f-53e0-b454-dd031c1df541', 'description' => 'Polynesia', 'correct_answer' => false],
                    ['id' => '9e168d16-0818-549f-ae3f-09b1cc69a146', 'description' => 'Makaronesia', 'correct_answer' => false],
                    ['id' => '183fb3d3-928d-599b-9596-11b585e21c3e', 'description' => 'Oceania', 'correct_answer' => true],
                    ['id' => 'b0fee2ef-3074-50f7-a765-e09b3ec49011', 'description' => 'Melanesia', 'correct_answer' => false]
                ]],
        ['id' => '06e9eaf8-a7a5-5297-95aa-85f52a3453be', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which Pacific region includes the Caroline, Marshall, and Mariana Islands?', 'difficulty' => 4, 'weight' => 682, 'alternatives' => [
                    ['id' => '06f70437-ce66-5244-ada7-72e79a563239', 'description' => 'Micronesia', 'correct_answer' => true],
                    ['id' => '9c9af4d8-bda9-5d4e-a1c6-f37cb76d58cc', 'description' => 'Melanesia', 'correct_answer' => false],
                    ['id' => '59329900-d72d-548a-8e10-753150710bf7', 'description' => 'Sundaland', 'correct_answer' => false],
                    ['id' => '783ea721-d5b6-573f-a932-9590c4411d6c', 'description' => 'Wallacea', 'correct_answer' => false],
                    ['id' => '545f40f9-dcba-5ab7-8a6b-a48246d7063f', 'description' => 'Oceania', 'correct_answer' => false]
                ]],
        ['id' => 'b966f03f-a202-5085-905d-d6cbdb9c0f40', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'What biogeographic region includes the Malay Peninsula, Borneo, Sumatra, and Java on the Sunda Shelf?', 'difficulty' => 4, 'weight' => 624, 'alternatives' => [
                    ['id' => '5a1984d0-43d9-5437-99fe-008240aa87e1', 'description' => 'Insular Southeast Asia', 'correct_answer' => false],
                    ['id' => '1da2b86e-3379-5226-b8e8-fc0fed88c4ad', 'description' => 'Sundaland', 'correct_answer' => true],
                    ['id' => '321acef7-914b-5df2-9f0f-9d14d1f10720', 'description' => 'Greater Antilles', 'correct_answer' => false],
                    ['id' => '353d6806-83ed-55f5-8504-1306e52f4180', 'description' => 'Micronesia', 'correct_answer' => false],
                    ['id' => '92325653-742d-50ef-850d-cebdb218d5e9', 'description' => 'Sahul', 'correct_answer' => false]
                ]],
        ['id' => '6090de85-98df-5417-899c-2b26784f3b4e', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which Pacific region includes Papua New Guinea, Vanuatu, Fiji, and the Solomon Islands?', 'difficulty' => 4, 'weight' => 643, 'alternatives' => [
                    ['id' => 'e30e379f-868c-518b-aec9-990b074f5237', 'description' => 'Polynesia', 'correct_answer' => false],
                    ['id' => 'f11e65b4-aa43-5806-bf9f-287cf2046102', 'description' => 'Melanesia', 'correct_answer' => true],
                    ['id' => '3514e614-02ea-5c8f-b8e6-5df788920f1f', 'description' => 'Sundaland', 'correct_answer' => false],
                    ['id' => '27c09003-1880-54d5-a19a-00a9e2d1c0b1', 'description' => 'Makaronesia', 'correct_answer' => false],
                    ['id' => 'c82e32f1-dda7-5703-8303-182bee5658fc', 'description' => 'Wallacea', 'correct_answer' => false]
                ]],
        ['id' => '31433a0a-55de-5f80-848b-c40f0e03a7e3', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'What biogeographic region includes the Azores, Madeira, the Canary Islands, and Cape Verde?', 'difficulty' => 4, 'weight' => 799, 'alternatives' => [
                    ['id' => '76a54fb1-bba3-543c-bd21-972efb67df63', 'description' => 'Sundaland', 'correct_answer' => false],
                    ['id' => '90fb50d9-f65a-526f-93a3-4b6833023415', 'description' => 'Greater Antilles', 'correct_answer' => false],
                    ['id' => '517c237e-747c-5ed1-a7db-d174acd56e22', 'description' => 'Micronesia', 'correct_answer' => false],
                    ['id' => 'ac6fa266-01d9-5e3b-a35c-029612d729d9', 'description' => 'Insular Southeast Asia', 'correct_answer' => false],
                    ['id' => '97575e5c-b59c-533d-98f2-e194750f78ea', 'description' => 'Makaronesia', 'correct_answer' => true]
                ]],
        ['id' => 'ba59ca37-b434-52e8-aec9-985eb0d336ed', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which Caribbean island group includes Cuba, Hispaniola, Jamaica, and Puerto Rico?', 'difficulty' => 4, 'weight' => 752, 'alternatives' => [
                    ['id' => '0ca718b2-e34d-5738-8ce4-2c2e337df2dc', 'description' => 'Wallacea', 'correct_answer' => false],
                    ['id' => 'ddb09e1a-7c87-55ab-a1f3-cf2e02095ddd', 'description' => 'Sahul', 'correct_answer' => false],
                    ['id' => '6cf69ad7-bd50-58df-b20d-2b6b0c4492cf', 'description' => 'Micronesia', 'correct_answer' => false],
                    ['id' => 'bf638159-38cd-5445-8bed-0978094966a5', 'description' => 'Sundaland', 'correct_answer' => false],
                    ['id' => '954d8976-e7ed-5c95-8af9-a7a78d895015', 'description' => 'Greater Antilles', 'correct_answer' => true]
                ]],
        ['id' => '1839979b-1ba0-5350-9274-8ab6122d2553', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which Antarctic lake in the McMurdo Dry Valleys is covered by perennial ice and has unusual saline waters?', 'difficulty' => 4, 'weight' => 793, 'alternatives' => [
                    ['id' => '22ac0d3a-f144-5cfa-b1d2-b92b40c31cf7', 'description' => 'Lake Vida', 'correct_answer' => false],
                    ['id' => 'f9736c0b-cfc0-52cd-bca3-09f7231eddca', 'description' => 'Lake Joyce', 'correct_answer' => true],
                    ['id' => '1107c071-7adb-5337-871a-4d3047c7c3e4', 'description' => 'Lake Fryxell', 'correct_answer' => false],
                    ['id' => '0ddb9272-7b69-5a4f-b481-365f7a5beeba', 'description' => 'Lake Vostok', 'correct_answer' => false],
                    ['id' => 'ea788de8-96b4-533d-b830-63277a537897', 'description' => 'Lake Untersee', 'correct_answer' => false]
                ]],
        ['id' => '085a5cb4-9f31-5399-b361-6a80177a3baa', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which subglacial lake in West Antarctica was sampled by the SALSA project in 2018?', 'difficulty' => 4, 'weight' => 711, 'alternatives' => [
                    ['id' => 'cf169569-1825-5083-9559-afc68ecf5a46', 'description' => 'Lake Untersee', 'correct_answer' => false],
                    ['id' => 'd3c1c55f-adc8-5e7f-9435-5b16a991e97b', 'description' => 'Lake Bonney', 'correct_answer' => false],
                    ['id' => '9f87bb3c-cef7-5ac5-8fbb-93dbdd6b7f2f', 'description' => 'Lake Mercer', 'correct_answer' => true],
                    ['id' => 'befa335f-e680-5dd3-b1d0-32f49d25f647', 'description' => 'Lake Vostok', 'correct_answer' => false],
                    ['id' => '1eb67f50-cecc-5d5a-9f3a-0d4e93e5c97e', 'description' => 'Lake Vida', 'correct_answer' => false]
                ]],
        ['id' => '0d74d28c-e17f-5825-a789-8dccfcf61617', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which East Antarctic lake is known for its unusually alkaline water and distinctive microbial structures?', 'difficulty' => 4, 'weight' => 609, 'alternatives' => [
                    ['id' => '1788897f-7997-5496-8a8f-e4e60e965204', 'description' => 'Lake Untersee', 'correct_answer' => true],
                    ['id' => 'e2ebef0e-e1eb-58ad-9573-55483f49cd58', 'description' => 'Lake Vida', 'correct_answer' => false],
                    ['id' => 'bfba00f5-8927-5afd-8eb1-5a95fe66bacd', 'description' => 'Lake Vostok', 'correct_answer' => false],
                    ['id' => '98f5e822-eae1-5da7-aeef-a823daa15543', 'description' => 'Lake Joyce', 'correct_answer' => false],
                    ['id' => '204c698d-c3dd-5463-af0c-a6c6ef1c101c', 'description' => 'Lake Ellsworth', 'correct_answer' => false]
                ]],
        ['id' => '8655b3e5-5610-511b-a854-1cb03beb5302', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which ice-covered lake in the McMurdo Dry Valleys is bordered by Canada Glacier?', 'difficulty' => 4, 'weight' => 672, 'alternatives' => [
                    ['id' => '98e92ed6-1f48-53ac-a785-f4d5b7e77707', 'description' => 'Lake Ellsworth', 'correct_answer' => false],
                    ['id' => '73f4e502-1100-5d37-8857-74ee5ea4a02d', 'description' => 'Lake Hoare', 'correct_answer' => true],
                    ['id' => '8055bdb4-b027-5a7a-bfb6-87a61a9d1fb3', 'description' => 'Lake Mercer', 'correct_answer' => false],
                    ['id' => '12831d0a-300d-560e-b87e-c60c5b237e06', 'description' => 'Lake Untersee', 'correct_answer' => false],
                    ['id' => '3c4d41f7-77bc-5372-a524-fd3b7e0408ab', 'description' => 'Lake Bonney', 'correct_answer' => false]
                ]],
        ['id' => '96e1eaaa-64b0-5fbb-866b-4d49236f34f5', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which ice-covered Antarctic lake is located in Taylor Valley and contains layered microbial mats?', 'difficulty' => 4, 'weight' => 693, 'alternatives' => [
                    ['id' => '72fc22b5-6d12-5f00-a21d-d31471a05839', 'description' => 'Lake Bonney', 'correct_answer' => false],
                    ['id' => '51fb1c2f-c41e-5483-af60-e25aec17a650', 'description' => 'Lake Fryxell', 'correct_answer' => true],
                    ['id' => 'd8539783-2ddc-57aa-8791-1fd62b778e30', 'description' => 'Lake Joyce', 'correct_answer' => false],
                    ['id' => '7dc35059-1985-54f6-8bd7-09ecac62aa1a', 'description' => 'Lake Ellsworth', 'correct_answer' => false],
                    ['id' => '1b06ba56-8081-57d2-987c-6a1f0e2241b2', 'description' => 'Lake Vostok', 'correct_answer' => false]
                ]],
        ['id' => '6540d72b-89c6-5494-8d1b-2cd70c66cde9', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which large subglacial lake lies beneath the East Antarctic Ice Sheet?', 'difficulty' => 4, 'weight' => 740, 'alternatives' => [
                    ['id' => 'd7390ee0-548a-5711-87df-567fe79ba2dd', 'description' => 'Lake Vostok', 'correct_answer' => true],
                    ['id' => '687858da-20d1-560e-8902-831151caf892', 'description' => 'Lake Fryxell', 'correct_answer' => false],
                    ['id' => '1dbe880b-2c8a-5ac5-adfb-2ef34af51b8b', 'description' => 'Lake Hoare', 'correct_answer' => false],
                    ['id' => 'dcd430a9-4ba3-59de-9220-1443fb399d2b', 'description' => 'Lake Vida', 'correct_answer' => false],
                    ['id' => 'd79b8c11-bfb1-5529-ad7f-2ea9bef0b4e4', 'description' => 'Lake Whillans', 'correct_answer' => false]
                ]],
        ['id' => 'bd4ae56b-3d7e-5ddc-8467-1324ec976142', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which permanently ice-covered lake in Taylor Valley has distinct stratified layers?', 'difficulty' => 4, 'weight' => 644, 'alternatives' => [
                    ['id' => '57e0689e-1384-5920-ae5b-4b88c8c863f1', 'description' => 'Lake Bonney', 'correct_answer' => true],
                    ['id' => 'f2b2a01f-f857-5f41-854b-c64c2684ee42', 'description' => 'Lake Joyce', 'correct_answer' => false],
                    ['id' => 'fd82bf9e-7fb1-565c-a021-cde74731c097', 'description' => 'Lake Fryxell', 'correct_answer' => false],
                    ['id' => 'd64d6a25-b790-5ee8-b950-4f836339429b', 'description' => 'Lake Hoare', 'correct_answer' => false],
                    ['id' => 'a7c34fa3-92ed-5a07-8428-6beb5dd05adc', 'description' => 'Lake Mercer', 'correct_answer' => false]
                ]],
        ['id' => '45f28648-3af7-5cc4-ab39-86619d6a69b5', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which subglacial lake beneath West Antarctica was directly sampled by a clean-access drilling project in 2013?', 'difficulty' => 4, 'weight' => 681, 'alternatives' => [
                    ['id' => 'ff7a0a60-718a-5ea4-b091-3387bb61b4b7', 'description' => 'Lake Fryxell', 'correct_answer' => false],
                    ['id' => 'ba47f97f-9254-5cf7-80c1-bd17146f3eb4', 'description' => 'Lake Whillans', 'correct_answer' => true],
                    ['id' => 'df1a2619-75c0-510b-b652-48d63777288a', 'description' => 'Lake Hoare', 'correct_answer' => false],
                    ['id' => '246e8f70-9214-52f4-9daa-458bf952b978', 'description' => 'Lake Vida', 'correct_answer' => false],
                    ['id' => 'ac0ca82f-2ff7-5dfb-9417-12b65409b762', 'description' => 'Lake Joyce', 'correct_answer' => false]
                ]],
        ['id' => 'fe912a12-ae0e-566f-998d-76ad5fcc0722', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which settlement in northeastern Siberia is often cited among the coldest permanently inhabited places?', 'difficulty' => 4, 'weight' => 749, 'alternatives' => [
                    ['id' => '62e1324f-d05a-5f0a-8cf5-23b0b1886741', 'description' => 'Yakutsk', 'correct_answer' => false],
                    ['id' => '5b9b2f8d-02d3-5f14-a876-7244e718bddf', 'description' => 'Longyearbyen', 'correct_answer' => false],
                    ['id' => 'a063561d-c64a-5d2d-9b89-73d9bfa6dc19', 'description' => 'Verkhoyansk', 'correct_answer' => false],
                    ['id' => 'c2c583db-c078-5336-9c86-c5da914e728d', 'description' => 'Alert', 'correct_answer' => false],
                    ['id' => '4c498798-f159-5b95-bf58-71a018a72b94', 'description' => 'Oymyakon', 'correct_answer' => true]
                ]],
        ['id' => 'f8494439-7e4d-50dd-a64d-addefe80fb36', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which Nunavut community is located on Cornwallis Island in the Canadian Arctic Archipelago?', 'difficulty' => 4, 'weight' => 637, 'alternatives' => [
                    ['id' => 'f957974d-1ba5-55ce-9388-53a89724f49a', 'description' => 'Barrow (Utqiaġvik)', 'correct_answer' => false],
                    ['id' => 'e5cdc558-2dd4-5ab0-a450-94522f7b6f79', 'description' => 'Qaanaaq', 'correct_answer' => false],
                    ['id' => 'a5c18658-9459-50f9-b382-b5601c4a783b', 'description' => 'Resolute', 'correct_answer' => true],
                    ['id' => '9c13cd02-79bb-536e-9a1d-6f956df9ce07', 'description' => 'Alert', 'correct_answer' => false],
                    ['id' => '5095e247-7dc1-5a97-9f2f-6cdc61c08a32', 'description' => 'Yakutsk', 'correct_answer' => false]
                ]],
        ['id' => 'c41186bd-d5d0-5769-8a8f-74248feb5d75', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which northernmost city in the United States is located on Alaska\'s Arctic coast?', 'difficulty' => 4, 'weight' => 794, 'alternatives' => [
                    ['id' => '820fd4ae-0329-5dd1-963a-6edf0ec063f9', 'description' => 'Oymyakon', 'correct_answer' => false],
                    ['id' => 'c2b1dac5-5171-5d4a-a481-14aeceac5348', 'description' => 'Longyearbyen', 'correct_answer' => false],
                    ['id' => 'af166681-4a2e-56c4-928c-61df987d25da', 'description' => 'Norilsk', 'correct_answer' => false],
                    ['id' => '1b7e73da-7163-5aae-b316-686a6a90ecad', 'description' => 'Qaanaaq', 'correct_answer' => false],
                    ['id' => 'ecc07877-06c4-503b-9047-416b5028896c', 'description' => 'Barrow (Utqiaġvik)', 'correct_answer' => true]
                ]],
        ['id' => 'ffea44db-7e05-5261-b5fa-c173d2fb45a2', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which settlement is the administrative center of Svalbard?', 'difficulty' => 4, 'weight' => 772, 'alternatives' => [
                    ['id' => 'ccc39c63-3d1c-5c26-a511-c984e5d1b9c4', 'description' => 'Longyearbyen', 'correct_answer' => true],
                    ['id' => 'd53907b6-382a-59f4-938b-b2baa7302183', 'description' => 'Yakutsk', 'correct_answer' => false],
                    ['id' => '3578abad-c608-5e8f-925c-4949a8660460', 'description' => 'Norilsk', 'correct_answer' => false],
                    ['id' => '9fca3379-73ef-50b7-a5da-47f5a84a9afa', 'description' => 'Oymyakon', 'correct_answer' => false],
                    ['id' => 'bf7bf631-0c57-5a68-b5cd-a14542ee958d', 'description' => 'Alert', 'correct_answer' => false]
                ]],
        ['id' => '4bfdab2e-d57d-5535-b1e2-f6b41209e0f5', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which Russian city is one of the world\'s coldest large cities?', 'difficulty' => 4, 'weight' => 800, 'alternatives' => [
                    ['id' => '493df249-a3a0-5eff-a130-5af0d33f34ae', 'description' => 'Yakutsk', 'correct_answer' => true],
                    ['id' => 'a539eab0-a54d-531c-abb7-109f98538e0f', 'description' => 'Eureka', 'correct_answer' => false],
                    ['id' => '5e1bea35-fe09-5f82-be95-29029ca5e72f', 'description' => 'Longyearbyen', 'correct_answer' => false],
                    ['id' => '3fde4b74-8686-59da-b8e8-05ea67d66db4', 'description' => 'Norilsk', 'correct_answer' => false],
                    ['id' => '661b9e72-242d-5b71-abc0-c5d8292262d9', 'description' => 'Barrow (Utqiaġvik)', 'correct_answer' => false]
                ]],
        ['id' => 'a5a4cca4-b790-5408-b08b-bd9fc53d2387', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which Siberian town is known for an extreme recorded temperature range and severe winter cold?', 'difficulty' => 4, 'weight' => 732, 'alternatives' => [
                    ['id' => 'ae5abf1b-8ecc-5001-8b3d-e0a8b97d3655', 'description' => 'Verkhoyansk', 'correct_answer' => true],
                    ['id' => 'f028266e-c81a-5db6-bda3-81564000666b', 'description' => 'Barrow (Utqiaġvik)', 'correct_answer' => false],
                    ['id' => 'b79dff0c-577d-54e0-84ff-5dc73e3b8759', 'description' => 'Longyearbyen', 'correct_answer' => false],
                    ['id' => 'a3cb1ffd-764f-5a7b-874c-543aab71a8d1', 'description' => 'Yakutsk', 'correct_answer' => false],
                    ['id' => '1d687d27-b16c-57cd-934b-028fa282fca4', 'description' => 'Alert', 'correct_answer' => false]
                ]],
        ['id' => '4bb62a15-0d59-5205-af01-fa0af48ee8b6', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which Canadian military and research station on Ellesmere Island is among the northernmost permanently inhabited places?', 'difficulty' => 4, 'weight' => 788, 'alternatives' => [
                    ['id' => '71f9fb63-1056-5328-8fe5-e1c084dc602a', 'description' => 'Yakutsk', 'correct_answer' => false],
                    ['id' => '38e49c58-da57-5dd2-a931-5cfbed3b75dd', 'description' => 'Barrow (Utqiaġvik)', 'correct_answer' => false],
                    ['id' => 'fe5887e2-e795-5347-80f8-9942ae0b50c7', 'description' => 'Longyearbyen', 'correct_answer' => false],
                    ['id' => '38cee7db-4158-59ed-ad07-d2db63fca729', 'description' => 'Oymyakon', 'correct_answer' => false],
                    ['id' => 'e1eedfcc-3beb-5c18-b5aa-a87c9c3227f6', 'description' => 'Alert', 'correct_answer' => true]
                ]],
        ['id' => 'c84d10d0-9374-5774-8d57-30ffa19a95c1', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which Russian industrial city lies north of the Arctic Circle in Siberia?', 'difficulty' => 4, 'weight' => 660, 'alternatives' => [
                    ['id' => 'e4299d2a-c88d-5d35-8c89-9471d418a26d', 'description' => 'Qaanaaq', 'correct_answer' => false],
                    ['id' => '958c126f-28e2-540c-92de-9c48ba942032', 'description' => 'Norilsk', 'correct_answer' => true],
                    ['id' => '80293633-d673-562f-a5b2-553fd65426dd', 'description' => 'Eureka', 'correct_answer' => false],
                    ['id' => '4ee0e7d6-4ba5-5e14-aede-36375b53d6de', 'description' => 'Oymyakon', 'correct_answer' => false],
                    ['id' => 'c4980ab1-0e76-5e0b-a674-4292b3c917cb', 'description' => 'Verkhoyansk', 'correct_answer' => false]
                ]],
        ['id' => '21d6f06a-d895-5a0f-a6f2-e2431bb17d92', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which trench northeast of New Zealand includes the Scholl Deep?', 'difficulty' => 5, 'weight' => 970, 'alternatives' => [
                    ['id' => '36f331e9-f8e2-521e-bbd3-7e3d2e26d5ae', 'description' => 'Factorian Deep', 'correct_answer' => false],
                    ['id' => '696c2e18-0f75-58b4-bf2d-bee63db2cfb5', 'description' => 'Kermadec Trench', 'correct_answer' => true],
                    ['id' => 'fdf5ab07-d23f-540f-99c9-b535b174979c', 'description' => 'Horizon Deep', 'correct_answer' => false],
                    ['id' => '126afd37-56e3-5ee0-80c6-34bfdd3b2e40', 'description' => 'Sirena Deep', 'correct_answer' => false],
                    ['id' => '0f8579d0-8ee1-5c7a-8168-6455d79ca32a', 'description' => 'Challenger Deep', 'correct_answer' => false]
                ]],
        ['id' => '65e51d28-bebf-582f-ac7e-151aa6bbc77f', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which deep basin lies southwest of Challenger Deep in the Mariana Trench?', 'difficulty' => 5, 'weight' => 960, 'alternatives' => [
                    ['id' => '366f9f56-5c1c-56b7-aa5e-8805e6fb1cf2', 'description' => 'Java Trench', 'correct_answer' => false],
                    ['id' => '7ddcd1ce-d94a-5a1c-9137-87725289ce64', 'description' => 'Factorian Deep', 'correct_answer' => false],
                    ['id' => '3768833b-5c09-5eea-aeb1-eabf98a3cdf0', 'description' => 'Kermadec Trench', 'correct_answer' => false],
                    ['id' => 'f2f79693-1b98-5b9f-8037-5218550757e5', 'description' => 'Sirena Deep', 'correct_answer' => true],
                    ['id' => 'bb6da7a9-dbc8-5123-b227-9344b01bf1ba', 'description' => 'Challenger Deep', 'correct_answer' => false]
                ]],
        ['id' => '69de2d55-d142-563d-b94e-a2f6042e3aa9', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which deep ocean feature lies east of the Philippines and includes the Emden Deep?', 'difficulty' => 5, 'weight' => 879, 'alternatives' => [
                    ['id' => 'fc52f250-074c-57f1-b15c-c287bcd14464', 'description' => 'Brownson Deep', 'correct_answer' => false],
                    ['id' => 'b7647033-e17b-5836-8fee-6203d202e7ab', 'description' => 'Philippine Deep', 'correct_answer' => true],
                    ['id' => 'c3e1d562-0787-5fba-b2c3-380afc16ae75', 'description' => 'Kermadec Trench', 'correct_answer' => false],
                    ['id' => '3e3c92d3-b405-50a1-a328-3e52098c6197', 'description' => 'Milwaukee Deep', 'correct_answer' => false],
                    ['id' => 'ac3b42b7-d28c-5c44-af83-4adbb3641b9b', 'description' => 'Challenger Deep', 'correct_answer' => false]
                ]],
        ['id' => '6d6f7f84-f11d-581f-a730-eae44668fc9d', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'What is the deepest known point in the Puerto Rico Trench?', 'difficulty' => 5, 'weight' => 852, 'alternatives' => [
                    ['id' => '4ab364a7-3305-57aa-b532-0bdb307a5799', 'description' => 'Horizon Deep', 'correct_answer' => false],
                    ['id' => '8830c92d-2a0c-5e8b-a951-7b5152150ad0', 'description' => 'Factorian Deep', 'correct_answer' => false],
                    ['id' => 'e669c64b-bc83-5789-bc5e-3117d5f63219', 'description' => 'Kuril–Kamchatka Trench', 'correct_answer' => false],
                    ['id' => 'b141ff9c-7b72-5f09-a7a8-b79739ccddf8', 'description' => 'Sirena Deep', 'correct_answer' => false],
                    ['id' => 'b53e547f-1b9a-57ed-ab7a-63a3965b3de2', 'description' => 'Brownson Deep', 'correct_answer' => true]
                ]],
        ['id' => '16c4deed-7b3e-5dac-a705-ae06c73b21b8', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which northwest Pacific trench reaches depths exceeding 10,000 meters?', 'difficulty' => 5, 'weight' => 805, 'alternatives' => [
                    ['id' => '332a1048-8120-58ed-b404-ba44dad38f26', 'description' => 'Java Trench', 'correct_answer' => false],
                    ['id' => '31c0b0ee-999c-570d-9ac5-1031cf380cc2', 'description' => 'Brownson Deep', 'correct_answer' => false],
                    ['id' => 'ecc0b88d-c3c1-56a5-8443-adacd24874fa', 'description' => 'Challenger Deep', 'correct_answer' => false],
                    ['id' => '225e9400-281c-505d-82a7-b04c72746827', 'description' => 'Philippine Deep', 'correct_answer' => false],
                    ['id' => 'a4f15fd5-a766-596f-8b72-4777c197fc7f', 'description' => 'Kuril–Kamchatka Trench', 'correct_answer' => true]
                ]],
        ['id' => '365bdbc2-f976-5e17-8d8c-5c2c522aa989', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which Indian Ocean trench lies south of Java and Sumatra?', 'difficulty' => 5, 'weight' => 883, 'alternatives' => [
                    ['id' => 'ec225703-dc86-5f89-965d-f554654fbd9e', 'description' => 'Brownson Deep', 'correct_answer' => false],
                    ['id' => '97cfb7b6-1ced-5889-a719-3d40a371cfa1', 'description' => 'Kermadec Trench', 'correct_answer' => false],
                    ['id' => '14527c2c-7824-51f0-91d4-ca7343eb6542', 'description' => 'Java Trench', 'correct_answer' => true],
                    ['id' => '8fb4df08-92ef-501c-8bcd-ecbf8bb08da0', 'description' => 'Horizon Deep', 'correct_answer' => false],
                    ['id' => 'd233ac0e-cb6d-5a57-b538-b94cbc1f2ae0', 'description' => 'Challenger Deep', 'correct_answer' => false]
                ]],
        ['id' => '855b9366-5af2-59ca-b855-81df570def1e', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'What is the deepest known point of the Tonga Trench?', 'difficulty' => 5, 'weight' => 860, 'alternatives' => [
                    ['id' => '4758144b-9bdc-5711-a408-a2afbeb64a75', 'description' => 'Milwaukee Deep', 'correct_answer' => false],
                    ['id' => '3c95c0d3-d551-54b0-8346-827bf7dd0320', 'description' => 'Challenger Deep', 'correct_answer' => false],
                    ['id' => '6ed343d3-62a9-5161-a70d-5c79a3fd1869', 'description' => 'Factorian Deep', 'correct_answer' => false],
                    ['id' => '501d8180-6038-5966-bf6b-767367bbb878', 'description' => 'Java Trench', 'correct_answer' => false],
                    ['id' => '6558f4c6-d95b-56ad-842e-ceed70231a49', 'description' => 'Horizon Deep', 'correct_answer' => true]
                ]],
        ['id' => 'ca7b0487-0c90-5c3c-accb-7464fbbb500f', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'What is the deepest known point in Earth\'s oceans, located in the Mariana Trench?', 'difficulty' => 5, 'weight' => 847, 'alternatives' => [
                    ['id' => 'e7255765-e11a-5a45-b68c-a83d6a8e4b3b', 'description' => 'Milwaukee Deep', 'correct_answer' => false],
                    ['id' => '26ba2a74-894e-50ef-9dc8-fd8a39de7c8b', 'description' => 'Sirena Deep', 'correct_answer' => false],
                    ['id' => 'bdb48935-1483-51e4-9db5-6fd9dc1ee941', 'description' => 'Brownson Deep', 'correct_answer' => false],
                    ['id' => '3c36182c-94ad-54fc-ad02-e3a2659343d7', 'description' => 'Challenger Deep', 'correct_answer' => true],
                    ['id' => 'be64a1d7-5574-5a27-8035-1d14652a1707', 'description' => 'Horizon Deep', 'correct_answer' => false]
                ]],
        ['id' => '73eca649-0ccf-510e-96a9-7c7b2247bd4f', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which narrow passage separates Ellesmere Island from northwestern Greenland?', 'difficulty' => 5, 'weight' => 849, 'alternatives' => [
                    ['id' => 'dda69794-7f24-5a90-9730-4b59c48c4c4c', 'description' => 'Nares Strait', 'correct_answer' => true],
                    ['id' => '48802985-cfb1-5166-8947-cb5acca7b7fe', 'description' => 'Lancaster Sound', 'correct_answer' => false],
                    ['id' => 'b5bffe62-5049-51ca-b9b1-ee94078283ae', 'description' => 'Yucatán Channel', 'correct_answer' => false],
                    ['id' => 'c10e9bc3-c717-5287-a471-1fcc5c5b49e0', 'description' => 'Denmark Strait', 'correct_answer' => false],
                    ['id' => 'e7b590b3-d474-5cc6-9460-5600d7454711', 'description' => 'McClintock Channel', 'correct_answer' => false]
                ]],
        ['id' => '8692fbac-8501-5b39-8f48-9dc970917921', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which narrow passage connects the Chukchi Sea with the Bering Sea?', 'difficulty' => 5, 'weight' => 931, 'alternatives' => [
                    ['id' => 'e033dd62-4b92-540c-aa91-8c97338c8f04', 'description' => 'Lancaster Sound', 'correct_answer' => false],
                    ['id' => 'c03d292d-d4dd-5f43-b463-94aba9947987', 'description' => 'Vilkitsky Strait', 'correct_answer' => false],
                    ['id' => '437e0392-6097-5bf9-abbc-df1de0b6658a', 'description' => 'Yucatán Channel', 'correct_answer' => false],
                    ['id' => 'bcffeed3-4ea4-5551-9661-e8f6c6e6a011', 'description' => 'Davis Strait', 'correct_answer' => false],
                    ['id' => 'ec46303c-6f70-5f48-957f-e43ecfb7c996', 'description' => 'Bering Strait', 'correct_answer' => true]
                ]],
        ['id' => 'fa1d830f-be57-5cd4-ba95-395a9d23ce95', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which Arctic passage between Devon Island and Baffin Island is an important route into the Northwest Passage?', 'difficulty' => 5, 'weight' => 974, 'alternatives' => [
                    ['id' => '15652f69-ce56-5c63-95d3-7ed57d536a7d', 'description' => 'M\'Clure Strait', 'correct_answer' => false],
                    ['id' => '4070f24d-a535-5e63-93a8-f28c6d789972', 'description' => 'Denmark Strait', 'correct_answer' => false],
                    ['id' => '8dfe8c9b-a980-57ee-94dc-c530bf7a7054', 'description' => 'Fram Strait', 'correct_answer' => false],
                    ['id' => 'b45693ba-e029-577e-8a77-067471b63e02', 'description' => 'Yucatán Channel', 'correct_answer' => false],
                    ['id' => '5f2f8c3f-335f-5722-8c36-8757e45194f4', 'description' => 'Lancaster Sound', 'correct_answer' => true]
                ]],
        ['id' => '8013c58e-aa7b-5268-b6d6-2e561b1386e7', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which Russian Arctic strait separates the Severnaya Zemlya archipelago from the Taymyr Peninsula?', 'difficulty' => 5, 'weight' => 906, 'alternatives' => [
                    ['id' => 'a4b74888-ab7f-5ed5-af8b-c45da27c3945', 'description' => 'Bering Strait', 'correct_answer' => false],
                    ['id' => '1112501b-7858-53c2-bc40-a1130f39f5a2', 'description' => 'Nares Strait', 'correct_answer' => false],
                    ['id' => '448824e2-fd0a-52a8-a012-b9810b546902', 'description' => 'Lancaster Sound', 'correct_answer' => false],
                    ['id' => '01ed84f8-e36b-5377-b518-022273820ce0', 'description' => 'Vilkitsky Strait', 'correct_answer' => true],
                    ['id' => '2a9babcd-06dc-581c-bcee-72723457d661', 'description' => 'Yucatán Channel', 'correct_answer' => false]
                ]],
        ['id' => '19e3bff2-9a55-5254-9173-be6e2a52ffa0', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which Arctic waterway lies between Victoria Island and Prince of Wales Island in the Canadian Arctic Archipelago?', 'difficulty' => 5, 'weight' => 963, 'alternatives' => [
                    ['id' => 'c659c308-91f4-514c-b971-e34362535a64', 'description' => 'Vilkitsky Strait', 'correct_answer' => false],
                    ['id' => '75e5235d-16e6-527f-bd93-530c0e8175c0', 'description' => 'Denmark Strait', 'correct_answer' => false],
                    ['id' => 'b7082f5d-4de8-51a4-8bf9-de959ebb859e', 'description' => 'Nares Strait', 'correct_answer' => false],
                    ['id' => 'eb62e601-dedf-547e-8a51-8165d76285eb', 'description' => 'Fram Strait', 'correct_answer' => false],
                    ['id' => '1bf7ff3a-05b5-5c5b-b5d6-319390fcadaa', 'description' => 'McClintock Channel', 'correct_answer' => true]
                ]],
        ['id' => 'f207c0c0-492a-5487-80ba-94c77e72fbc9', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which body of water separates Baffin Island from Greenland?', 'difficulty' => 5, 'weight' => 832, 'alternatives' => [
                    ['id' => '1b3ca9d8-a8ff-5404-9e58-883a73546b27', 'description' => 'Davis Strait', 'correct_answer' => true],
                    ['id' => '3380e30c-59ce-53db-ae35-9bc67fab8086', 'description' => 'Denmark Strait', 'correct_answer' => false],
                    ['id' => 'ba58b6af-d0ce-5ff2-9ce7-8350629473aa', 'description' => 'Nares Strait', 'correct_answer' => false],
                    ['id' => '8308e474-7683-5e57-86cd-0510e08888f0', 'description' => 'Yucatán Channel', 'correct_answer' => false],
                    ['id' => '474afcd3-dc66-55e1-a7b7-1de98f0ec02d', 'description' => 'Bering Strait', 'correct_answer' => false]
                ]],
        ['id' => '0014e23d-6850-5560-9c03-96ad7fcd6523', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which strait separates Iceland from Greenland and is known for a major underwater ridge?', 'difficulty' => 5, 'weight' => 801, 'alternatives' => [
                    ['id' => '51e89996-13e5-5f49-a8dd-c3ce0bce8de8', 'description' => 'McClintock Channel', 'correct_answer' => false],
                    ['id' => 'c7097521-ac2b-5da0-bd17-6adef09fc639', 'description' => 'Denmark Strait', 'correct_answer' => true],
                    ['id' => '1d6a6fed-42c4-5de6-9633-23ef278f17f8', 'description' => 'Yucatán Channel', 'correct_answer' => false],
                    ['id' => 'b807e6f5-2e0c-5659-b2a6-c0239f43fd71', 'description' => 'Lancaster Sound', 'correct_answer' => false],
                    ['id' => '7179dc8e-0053-5bea-b291-5247e33222b0', 'description' => 'Vilkitsky Strait', 'correct_answer' => false]
                ]],
        ['id' => '3557e54e-d2f5-59f3-ad59-1b08bd2fee81', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which channel connects the Caribbean Sea with the Gulf of Mexico between Mexico and Cuba?', 'difficulty' => 5, 'weight' => 852, 'alternatives' => [
                    ['id' => 'c792f690-456c-5ed7-873a-ad4e6abef47e', 'description' => 'Nares Strait', 'correct_answer' => false],
                    ['id' => 'aa442de4-e1f8-531c-86a9-329d0f189521', 'description' => 'McClintock Channel', 'correct_answer' => false],
                    ['id' => '18b08959-8981-5a06-8e73-5847ff8852f4', 'description' => 'Yucatán Channel', 'correct_answer' => true],
                    ['id' => '98082ff2-6b97-5646-867c-d43270f2f49b', 'description' => 'Lancaster Sound', 'correct_answer' => false],
                    ['id' => 'ce358b52-c586-5af0-821a-e4ae5600fca5', 'description' => 'Davis Strait', 'correct_answer' => false]
                ]],
        ['id' => '282206ab-7d63-594c-86ce-2504b4791adf', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which tectonic depression at the junction of the Red Sea, Gulf of Aden, and East African Rift is sometimes called the Afar Depression?', 'difficulty' => 5, 'weight' => 983, 'alternatives' => [
                    ['id' => '83c5180e-4af8-5f3b-8936-99d0c65671aa', 'description' => 'Dead Sea Depression', 'correct_answer' => false],
                    ['id' => '41cd7398-3556-5c98-a0c9-8ef33821f3b9', 'description' => 'Danakil Depression', 'correct_answer' => false],
                    ['id' => 'ece803ea-88bf-5a93-9e1f-68ab24e20c3a', 'description' => 'Lut Desert', 'correct_answer' => false],
                    ['id' => '747f7442-b0df-5875-90ec-2816c2b1f4c9', 'description' => 'Makgadikgadi Pans', 'correct_answer' => false],
                    ['id' => '07b6b643-b6c4-5334-95ff-1b99e5f7e594', 'description' => 'Afar Triangle', 'correct_answer' => true]
                ]],
        ['id' => 'baf2dff5-19f7-57b0-9856-c5968527aa0b', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which Iranian desert is known for exceptionally high land-surface temperatures measured by satellite?', 'difficulty' => 5, 'weight' => 863, 'alternatives' => [
                    ['id' => '32d286b5-948d-58f1-9180-53cd28282f72', 'description' => 'Lut Desert', 'correct_answer' => true],
                    ['id' => '42a5ca0d-048b-5ee9-aa53-dc790b783ce3', 'description' => 'Turfan Depression', 'correct_answer' => false],
                    ['id' => 'a2a5328b-daf3-59e0-91a2-52233684b8e0', 'description' => 'Makgadikgadi Pans', 'correct_answer' => false],
                    ['id' => 'd78efca1-ed98-52e2-91c5-d6073075bdc8', 'description' => 'Karakum Desert', 'correct_answer' => false],
                    ['id' => '3fc63467-737a-549b-8358-173e4c3b2f3c', 'description' => 'Danakil Depression', 'correct_answer' => false]
                ]],
        ['id' => '1435744d-9631-5fa9-aa67-9f993bea5745', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which tectonic depression contains the Earth\'s lowest exposed land elevation along the Jordan Rift Valley?', 'difficulty' => 5, 'weight' => 933, 'alternatives' => [
                    ['id' => '50024aa9-1df3-55e6-b4b0-f787cf80d51d', 'description' => 'Afar Triangle', 'correct_answer' => false],
                    ['id' => 'bf365dd2-f398-5c43-8c87-4cacccdbbe89', 'description' => 'Dead Sea Depression', 'correct_answer' => true],
                    ['id' => '85c93f9a-b97d-5548-a677-896137290d4f', 'description' => 'Lut Desert', 'correct_answer' => false],
                    ['id' => '7e0bbe86-e4cc-5394-b289-92e42eb29063', 'description' => 'Danakil Depression', 'correct_answer' => false],
                    ['id' => 'f62d5804-29ec-50d4-9b62-2e13b86bed0b', 'description' => 'Dasht-e Kavir', 'correct_answer' => false]
                ]],
        ['id' => '412ea758-f848-5a16-9f73-20d12ea5c501', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which large desert depression in northwestern Egypt lies below sea level?', 'difficulty' => 5, 'weight' => 872, 'alternatives' => [
                    ['id' => '0bf10485-a929-5463-99df-45064cf0a3fd', 'description' => 'Qattara Depression', 'correct_answer' => true],
                    ['id' => '2f11397f-bf39-51d0-a2c2-336c9eda7580', 'description' => 'Karakum Desert', 'correct_answer' => false],
                    ['id' => 'dd82a05b-f0d9-515f-b24a-7349b0e836da', 'description' => 'Danakil Depression', 'correct_answer' => false],
                    ['id' => 'd970728e-cc17-560f-a251-b7b0151d9162', 'description' => 'Dead Sea Depression', 'correct_answer' => false],
                    ['id' => '781b49e9-d78e-5ed5-81a9-759ef7da94cd', 'description' => 'Caspian Depression', 'correct_answer' => false]
                ]],
        ['id' => '73842ffb-6e05-5499-95d1-32da02329acb', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which lowland region around the northern Caspian Sea includes areas below sea level?', 'difficulty' => 5, 'weight' => 880, 'alternatives' => [
                    ['id' => 'ba829054-fbb1-5507-8ef1-be27a7c74463', 'description' => 'Danakil Depression', 'correct_answer' => false],
                    ['id' => '5ebf9693-90d5-5ffa-80be-da46695f1668', 'description' => 'Makgadikgadi Pans', 'correct_answer' => false],
                    ['id' => '6b2cfed1-de60-5590-9b7c-a784811b7287', 'description' => 'Lut Desert', 'correct_answer' => false],
                    ['id' => '89c6fc03-1eba-5fa0-9cc8-0917dfcc930b', 'description' => 'Dasht-e Kavir', 'correct_answer' => false],
                    ['id' => '607632d9-8f3a-5075-8610-9a77b71098b3', 'description' => 'Caspian Depression', 'correct_answer' => true]
                ]],
        ['id' => '1a13f308-f58e-5266-acef-2e22f9c506a5', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which Central Asian desert occupies much of Turkmenistan?', 'difficulty' => 5, 'weight' => 944, 'alternatives' => [
                    ['id' => 'd9e83571-e867-572b-b124-3aa1cf5dd04d', 'description' => 'Turfan Depression', 'correct_answer' => false],
                    ['id' => '8ec8fafb-9b11-590d-85c2-7c7e49ed2164', 'description' => 'Karakum Desert', 'correct_answer' => true],
                    ['id' => '576b55e6-a12c-5583-9555-437d0dd87446', 'description' => 'Danakil Depression', 'correct_answer' => false],
                    ['id' => '1c9a616a-8313-53cf-ba91-f62bd4fea917', 'description' => 'Makgadikgadi Pans', 'correct_answer' => false],
                    ['id' => 'a16bd60a-51a6-5779-a9bb-dd647ebd81ff', 'description' => 'Caspian Depression', 'correct_answer' => false]
                ]],
        ['id' => '9364fea0-6e8f-56fe-b5a6-3d2da5ccb4ce', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which extensive salt-pan system in Botswana occupies a former lake basin?', 'difficulty' => 5, 'weight' => 928, 'alternatives' => [
                    ['id' => 'c69b95ab-f618-5399-8163-abc475e051d6', 'description' => 'Makgadikgadi Pans', 'correct_answer' => true],
                    ['id' => 'a0d82c48-7e76-55d5-bca2-90ec49fe62fe', 'description' => 'Qattara Depression', 'correct_answer' => false],
                    ['id' => '236e1329-a8cf-58a3-a4a7-d49687747010', 'description' => 'Lut Desert', 'correct_answer' => false],
                    ['id' => '60f1d37f-f066-5efb-b3d3-c756abfe76a2', 'description' => 'Turfan Depression', 'correct_answer' => false],
                    ['id' => '36b7b878-9783-5821-9ef9-308018ecdb0c', 'description' => 'Caspian Depression', 'correct_answer' => false]
                ]],
        ['id' => 'ac7387a6-3888-50a0-95e9-f7ef272b9a9f', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which extremely hot, low-lying region of Ethiopia includes the Dallol hydrothermal area?', 'difficulty' => 5, 'weight' => 970, 'alternatives' => [
                    ['id' => '9ef54d0c-6f28-531a-a6e5-879d5c16ac4a', 'description' => 'Dead Sea Depression', 'correct_answer' => false],
                    ['id' => 'd95f139a-0964-54ae-92f5-fd19238ae400', 'description' => 'Lut Desert', 'correct_answer' => false],
                    ['id' => '833c4a53-2995-571c-82b7-afffc3ed7ff5', 'description' => 'Karakum Desert', 'correct_answer' => false],
                    ['id' => '4ca1da52-16bc-5795-b50f-9f72901c67cc', 'description' => 'Turfan Depression', 'correct_answer' => false],
                    ['id' => '8789c8aa-0d6b-5d04-9750-9d63ef7533c9', 'description' => 'Danakil Depression', 'correct_answer' => true]
                ]],
        ['id' => '214e13d4-bf22-5fb3-90a4-ec8a45d1ce70', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'What orbital plane is defined by the balance of torques from a planet\'s equatorial bulge and the Sun?', 'difficulty' => 5, 'weight' => 814, 'alternatives' => [
                    ['id' => '53f163c6-5b57-576a-a20a-403b9914c9dc', 'description' => 'Laplace plane', 'correct_answer' => true],
                    ['id' => 'feb615ce-f854-51a1-b6d4-0ba7c6cd73d9', 'description' => 'Jacobi constant', 'correct_answer' => false],
                    ['id' => 'a148ca01-198c-5f45-b0c7-17db49adad8c', 'description' => 'Tisserand parameter', 'correct_answer' => false],
                    ['id' => '48339baa-9d94-5d21-b0ba-5f30d4bbb927', 'description' => 'Roche lobe', 'correct_answer' => false],
                    ['id' => 'a38bb7d8-d595-536d-8127-d7a79a8d2549', 'description' => 'L2 Lagrange point', 'correct_answer' => false]
                ]],
        ['id' => '701468c3-7141-5053-a366-8ec45bb4e26d', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which triangular equilibrium point forms the trailing vertex of an equilateral triangle with the two primary bodies?', 'difficulty' => 5, 'weight' => 967, 'alternatives' => [
                    ['id' => 'fc5c6684-52bb-5aae-b981-e7a104b41a4a', 'description' => 'L5 Lagrange point', 'correct_answer' => true],
                    ['id' => 'bdd2d23d-05d4-5903-b0ef-5d940a55242f', 'description' => 'Jacobi constant', 'correct_answer' => false],
                    ['id' => 'c73d529c-dc99-5748-9eb1-b434642adf5f', 'description' => 'L3 Lagrange point', 'correct_answer' => false],
                    ['id' => 'fed3a00a-9936-56c4-9650-262f6dcec81e', 'description' => 'Laplace plane', 'correct_answer' => false],
                    ['id' => 'dfc383bc-3083-56e6-afc6-95118eee57ef', 'description' => 'Hill sphere', 'correct_answer' => false]
                ]],
        ['id' => 'dbf00d2a-acd5-5380-9f3e-0cc7eae57430', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'What approximate region defines the gravitational dominance of a smaller orbiting body around a larger one?', 'difficulty' => 5, 'weight' => 890, 'alternatives' => [
                    ['id' => '3438eadf-49da-5937-affc-8123467164e0', 'description' => 'L4 Lagrange point', 'correct_answer' => false],
                    ['id' => '2d72a104-d4f9-5e0e-b64d-cb8cec612a8c', 'description' => 'Hill sphere', 'correct_answer' => true],
                    ['id' => '7ceb293a-23e4-5008-89a5-dab64f85acff', 'description' => 'L5 Lagrange point', 'correct_answer' => false],
                    ['id' => 'f7866740-ebd2-5398-8edd-db5369c6c45a', 'description' => 'L2 Lagrange point', 'correct_answer' => false],
                    ['id' => '8654b197-a83a-56f0-829f-3aae1021a26e', 'description' => 'L3 Lagrange point', 'correct_answer' => false]
                ]],
        ['id' => '8f3c8b41-4f61-5ca4-94f3-221c54d9aa84', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which collinear equilibrium point lies beyond the smaller primary, away from the larger primary?', 'difficulty' => 5, 'weight' => 816, 'alternatives' => [
                    ['id' => 'f2aaf247-af57-5754-9d2a-03011d33abd3', 'description' => 'L2 Lagrange point', 'correct_answer' => true],
                    ['id' => '39bcf38f-7479-54da-9caf-c1311782b645', 'description' => 'Jacobi constant', 'correct_answer' => false],
                    ['id' => '7e8d944f-bbd5-5198-b75e-b9a18cc789bc', 'description' => 'L1 Lagrange point', 'correct_answer' => false],
                    ['id' => '21fe50b2-7a8f-5598-8d7a-24961e576aa9', 'description' => 'Roche lobe', 'correct_answer' => false],
                    ['id' => '0ee3858f-ab8a-5b23-ac15-188b48f88365', 'description' => 'L5 Lagrange point', 'correct_answer' => false]
                ]],
        ['id' => '8d68f8a4-d0cc-55e5-b1d4-25f9af584096', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which collinear equilibrium point lies beyond the larger primary, on the opposite side from the smaller one?', 'difficulty' => 5, 'weight' => 950, 'alternatives' => [
                    ['id' => '5510f174-7a2e-56ae-8cef-03ff2531fe24', 'description' => 'L4 Lagrange point', 'correct_answer' => false],
                    ['id' => '53bc20fa-74c2-5f20-b23c-8028c9f3e6c6', 'description' => 'L3 Lagrange point', 'correct_answer' => true],
                    ['id' => '7a3bfe62-dbb4-533c-ba2d-0e921f7b54ea', 'description' => 'Tisserand parameter', 'correct_answer' => false],
                    ['id' => '4766990d-48c9-5c7f-bba3-d7de1605a3e0', 'description' => 'Laplace plane', 'correct_answer' => false],
                    ['id' => '07832ce8-7afe-59bf-95b1-cb575619604a', 'description' => 'L2 Lagrange point', 'correct_answer' => false]
                ]],
        ['id' => 'b6367499-926f-55c8-977a-2310d3646c03', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which triangular equilibrium point forms the leading vertex of an equilateral triangle with the two primary bodies?', 'difficulty' => 5, 'weight' => 889, 'alternatives' => [
                    ['id' => 'e834547d-53c9-5ba2-91c0-a994936a1a3d', 'description' => 'Jacobi constant', 'correct_answer' => false],
                    ['id' => '165b1548-cff4-5905-8b1c-cd5fc4d23b06', 'description' => 'L4 Lagrange point', 'correct_answer' => true],
                    ['id' => 'ca3f9699-0436-5228-b122-8b680b071912', 'description' => 'Hill sphere', 'correct_answer' => false],
                    ['id' => '603375f0-e029-59a0-a33b-1bbd2b2883b8', 'description' => 'L1 Lagrange point', 'correct_answer' => false],
                    ['id' => '23a9c4de-42e7-5893-8f18-540964a17c2e', 'description' => 'L5 Lagrange point', 'correct_answer' => false]
                ]],
        ['id' => 'f0603de8-06b1-5ef2-95a6-71562d4c770f', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'What teardrop-shaped region around a star in a binary system marks the gravitational domain of one component?', 'difficulty' => 5, 'weight' => 921, 'alternatives' => [
                    ['id' => '470a2b70-6863-5881-a686-da089a95bba5', 'description' => 'Roche lobe', 'correct_answer' => true],
                    ['id' => '500ac93e-7c9d-5ce1-a8a5-e583ce90098d', 'description' => 'L3 Lagrange point', 'correct_answer' => false],
                    ['id' => 'd405fbdc-15e2-5989-b585-f79a62d706c0', 'description' => 'L4 Lagrange point', 'correct_answer' => false],
                    ['id' => 'bef5bc41-3041-5433-87e9-c2361b75f5fb', 'description' => 'Hill sphere', 'correct_answer' => false],
                    ['id' => '0e042bfa-fee1-5bf9-b9b8-ec62e0280d28', 'description' => 'L2 Lagrange point', 'correct_answer' => false]
                ]],
        ['id' => '188cf341-a0bf-59ba-b0bd-096320a862cd', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which collinear equilibrium point in a two-body system lies between the two primary bodies?', 'difficulty' => 5, 'weight' => 865, 'alternatives' => [
                    ['id' => '28995b47-f07a-5e84-9ea3-893ea9da00d5', 'description' => 'Jacobi constant', 'correct_answer' => false],
                    ['id' => 'd778b5ac-3f85-5eed-aa82-6e86e7184ef3', 'description' => 'L3 Lagrange point', 'correct_answer' => false],
                    ['id' => 'd407b9e2-0621-5a0e-9175-e691f5c0ff06', 'description' => 'L2 Lagrange point', 'correct_answer' => false],
                    ['id' => '841a8d45-64b2-5722-84aa-daeb1b7627c5', 'description' => 'L1 Lagrange point', 'correct_answer' => true],
                    ['id' => 'd81df7fa-72ce-50dd-8527-fa60447d829d', 'description' => 'Hill sphere', 'correct_answer' => false]
                ]],
        ['id' => '0efb7849-4107-53e6-8e69-3a3d823d0afb', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which large glacier in Kyrgyzstan lies near Khan Tengri and Jengish Chokusu?', 'difficulty' => 5, 'weight' => 951, 'alternatives' => [
                    ['id' => '3e5bb7a6-6749-57fe-9bda-1a857db76d5a', 'description' => 'Biafo Glacier', 'correct_answer' => false],
                    ['id' => '7ac2d79c-ddc5-5868-97e5-a4037cb1d38a', 'description' => 'Pine Island Glacier', 'correct_answer' => false],
                    ['id' => 'c3406d4a-ca77-5230-9ca7-830fe2dd968e', 'description' => 'Lambert Glacier', 'correct_answer' => false],
                    ['id' => 'afc777c3-f12a-5a91-afb0-0bcfae27311b', 'description' => 'Inylchek Glacier', 'correct_answer' => true],
                    ['id' => '8867825a-be25-59eb-bee7-7b6b859f7452', 'description' => 'Aletsch Glacier', 'correct_answer' => false]
                ]],
        ['id' => 'c414c6be-958c-5de3-955e-300404f93fb6', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which glacier in the eastern Karakoram is associated with the world\'s highest-altitude battlefield?', 'difficulty' => 5, 'weight' => 833, 'alternatives' => [
                    ['id' => '22721975-e910-5e4e-bbae-72cd4ec94cf3', 'description' => 'Lambert Glacier', 'correct_answer' => false],
                    ['id' => '9e6f6615-558f-5648-bed9-dbe941cd7734', 'description' => 'Siachen Glacier', 'correct_answer' => true],
                    ['id' => '408ee747-16a8-5d9a-b435-d8872e9849d8', 'description' => 'Pine Island Glacier', 'correct_answer' => false],
                    ['id' => 'dfa28342-2c54-5408-a3ad-5c3cdc833785', 'description' => 'Fedchenko Glacier', 'correct_answer' => false],
                    ['id' => '46edcec1-07d2-57d6-9dd3-dfc54bff0dcc', 'description' => 'Vatnajökull', 'correct_answer' => false]
                ]],
        ['id' => 'b8cedff3-ea52-5c53-92da-283eca858271', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which long valley glacier in Tajikistan is the longest glacier outside the polar regions?', 'difficulty' => 5, 'weight' => 966, 'alternatives' => [
                    ['id' => '69d0af12-b4b7-538e-8c7b-ac3061642ef3', 'description' => 'Aletsch Glacier', 'correct_answer' => false],
                    ['id' => 'd2964656-9383-539c-ba5f-ef7407ea320e', 'description' => 'Siachen Glacier', 'correct_answer' => false],
                    ['id' => '42478944-8e1e-5d23-9bb0-0103933cf579', 'description' => 'Lambert Glacier', 'correct_answer' => false],
                    ['id' => 'fc77f298-704e-59f5-a7b9-0a4c5973e8ec', 'description' => 'Fedchenko Glacier', 'correct_answer' => true],
                    ['id' => '3560d411-6e72-5269-87b6-87e8313ce80d', 'description' => 'Pine Island Glacier', 'correct_answer' => false]
                ]],
        ['id' => '5f8e481f-f2b7-56cc-acfc-6eba9180b338', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which glacier in the Karakoram connects with the Biafo Glacier to form a major glacial system?', 'difficulty' => 5, 'weight' => 977, 'alternatives' => [
                    ['id' => 'c1dbcf2e-ce20-5831-afdf-ac20864a761f', 'description' => 'Hispar Glacier', 'correct_answer' => true],
                    ['id' => '484cbcfe-2752-5e4e-9c08-4de91aa0de5e', 'description' => 'Biafo Glacier', 'correct_answer' => false],
                    ['id' => 'a68d6c07-4b85-5c6c-9479-726ca704e2c0', 'description' => 'Pine Island Glacier', 'correct_answer' => false],
                    ['id' => '41706e92-af07-5ed7-9f56-6f094c741cdb', 'description' => 'Inylchek Glacier', 'correct_answer' => false],
                    ['id' => 'a67aa19f-1452-5064-99f2-fbe60eebe6b6', 'description' => 'Siachen Glacier', 'correct_answer' => false]
                ]],
        ['id' => '99eb9d4b-20a6-55bb-84b1-1af412d01e86', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which fast-flowing West Antarctic glacier is a major contributor to ice loss in the Amundsen Sea sector?', 'difficulty' => 5, 'weight' => 918, 'alternatives' => [
                    ['id' => 'ba24a807-c3fc-5d41-a739-888017c07e65', 'description' => 'Pine Island Glacier', 'correct_answer' => true],
                    ['id' => 'a666e551-984d-5276-8438-06e23f3f10b5', 'description' => 'Siachen Glacier', 'correct_answer' => false],
                    ['id' => 'bf2505be-824b-59c3-ae85-839b02369a74', 'description' => 'Vatnajökull', 'correct_answer' => false],
                    ['id' => '22f1d970-b2a9-50e5-919a-601de95a96c2', 'description' => 'Inylchek Glacier', 'correct_answer' => false],
                    ['id' => '86f2db95-6cdc-57a6-b2a8-a096360462ac', 'description' => 'Baltoro Glacier', 'correct_answer' => false]
                ]],
        ['id' => 'f0bb340a-f437-5b40-8ea6-79020f603073', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which is the largest glacier in the Alps, located in Switzerland?', 'difficulty' => 5, 'weight' => 943, 'alternatives' => [
                    ['id' => '5ccbb64d-6936-566e-8187-dce1b2696081', 'description' => 'Pine Island Glacier', 'correct_answer' => false],
                    ['id' => 'c9988d17-9bd9-5ad7-b81c-8a2414965306', 'description' => 'Hispar Glacier', 'correct_answer' => false],
                    ['id' => 'a224d77d-ae8a-549e-a392-b5cf9f796eb3', 'description' => 'Vatnajökull', 'correct_answer' => false],
                    ['id' => '0b69add8-030c-5a2b-9b55-e1db113c3c68', 'description' => 'Aletsch Glacier', 'correct_answer' => true],
                    ['id' => '859889ba-21df-5767-a98c-686481e75d49', 'description' => 'Baltoro Glacier', 'correct_answer' => false]
                ]],
        ['id' => '74d04bc7-7d1d-5b4e-8526-94d8ab2319e0', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which long glacier in the Karakoram joins the Hispar Glacier at the Snow Lake region?', 'difficulty' => 5, 'weight' => 935, 'alternatives' => [
                    ['id' => '84c1ef6b-b320-5888-8fd4-8a25a54f1c10', 'description' => 'Baltoro Glacier', 'correct_answer' => false],
                    ['id' => '8ffd857f-035f-5ddf-9341-046af8935a0e', 'description' => 'Biafo Glacier', 'correct_answer' => true],
                    ['id' => '434d61fa-509d-543c-8ef1-83e75d516c5f', 'description' => 'Pine Island Glacier', 'correct_answer' => false],
                    ['id' => '48d9f65d-aa96-5096-a8e8-0992bd324f02', 'description' => 'Lambert Glacier', 'correct_answer' => false],
                    ['id' => '7ad943d4-1fba-5ee8-83d7-70937e18be9d', 'description' => 'Hispar Glacier', 'correct_answer' => false]
                ]],
        ['id' => 'dc60a955-677f-5982-bf0e-fdf2b5aa6488', 'locale' => 'en-US', 'category' => 'a3c1d9f5-cc97-5288-bdb4-2f90d6359d7e', 'question' => 'Which Icelandic ice cap is the largest glacier in Europe by volume?', 'difficulty' => 5, 'weight' => 962, 'alternatives' => [
                    ['id' => '3b5104cc-bcf8-5451-add9-0c1050dcab35', 'description' => 'Baltoro Glacier', 'correct_answer' => false],
                    ['id' => '9bf82f76-d6a0-5dfc-87c5-52285b6d4a20', 'description' => 'Vatnajökull', 'correct_answer' => true],
                    ['id' => 'bdd7a34d-d17e-5ec8-b5d2-7bb962b46ee3', 'description' => 'Inylchek Glacier', 'correct_answer' => false],
                    ['id' => '8a46dbcf-0474-5b4d-8918-a117de258b08', 'description' => 'Pine Island Glacier', 'correct_answer' => false],
                    ['id' => '9996fbce-0a32-5f6f-874d-b482c1edc5fb', 'description' => 'Lambert Glacier', 'correct_answer' => false]
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
