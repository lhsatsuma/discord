<?php

namespace Database\Seeders\Trivia;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TriviaEnUsScienceSeeder extends Seeder
{
    private const CATEGORY = ['id' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'created_by' => 'SYSTEM', 'short_description' => 'science', 'description' => 'Science'];

    private const QUESTIONS = [
        ['id' => '32c09722-9fdc-5445-8a5c-3df8bcd63d1e', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which molecule consists of three oxygen atoms?', 'difficulty' => 1, 'weight' => 126, 'alternatives' => [
                    ['id' => '631079a6-c16f-5e48-97b5-f37c7add7b87', 'description' => 'Carbon dioxide', 'correct_answer' => false],
                    ['id' => '9b314dfb-bb22-5dbd-b963-c8e53771a417', 'description' => 'Ozone', 'correct_answer' => true],
                    ['id' => '5bd664b6-bbea-5dda-bd7f-3bf2f1fc577e', 'description' => 'Oxygen', 'correct_answer' => false],
                    ['id' => '3c51b142-d44a-522c-a28b-b3bcd57207a6', 'description' => 'Helium', 'correct_answer' => false],
                    ['id' => '6fa327fa-f1b4-55ad-91c7-c6a447250bd1', 'description' => 'Nitrogen', 'correct_answer' => false]
                ]],
        ['id' => 'af84c4ed-67a1-5e64-af9b-3c337bf532e8', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which simple hydrocarbon has the formula CH4?', 'difficulty' => 1, 'weight' => 138, 'alternatives' => [
                    ['id' => '4cb05857-0d7e-52f5-bb9a-c41c845817d6', 'description' => 'Carbon dioxide', 'correct_answer' => false],
                    ['id' => '4cb8aecb-93c7-55cc-8431-cb93d044fcb3', 'description' => 'Methane', 'correct_answer' => true],
                    ['id' => '78deb068-78c6-5af0-9902-af17e8fc93e2', 'description' => 'Hydrogen', 'correct_answer' => false],
                    ['id' => '3af7dcda-40a6-5848-9096-552544f7d551', 'description' => 'Sodium chloride', 'correct_answer' => false],
                    ['id' => '3dc292e6-3aed-5682-9b42-664729e45277', 'description' => 'Nitrogen', 'correct_answer' => false]
                ]],
        ['id' => '61dc2e35-eb9f-53c6-a7dd-778454be67d2', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which gas has the formula CO2?', 'difficulty' => 1, 'weight' => 145, 'alternatives' => [
                    ['id' => 'b1f641a4-abe0-5ad4-9367-0483a56dc81e', 'description' => 'Methane', 'correct_answer' => false],
                    ['id' => '32a8bff3-9587-5553-a5e1-ffb4779fb63e', 'description' => 'Ozone', 'correct_answer' => false],
                    ['id' => '6e9141f9-f800-54de-ad4a-8e0f080ac66f', 'description' => 'Glucose', 'correct_answer' => false],
                    ['id' => '1eb27623-509d-5102-93cf-9fc608382f6c', 'description' => 'Helium', 'correct_answer' => false],
                    ['id' => 'e4cd4200-0575-5e0f-a327-d7c15da3411c', 'description' => 'Carbon dioxide', 'correct_answer' => true]
                ]],
        ['id' => '61678967-b0a3-50ab-a14d-928a3a3c1774', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which simple sugar has the formula C6H12O6?', 'difficulty' => 1, 'weight' => 100, 'alternatives' => [
                    ['id' => '9848cd31-ccf8-513e-8508-1de6e2ddffae', 'description' => 'Methane', 'correct_answer' => false],
                    ['id' => 'd4e19cda-cc3d-530d-9ea1-84772f1933a5', 'description' => 'Nitrogen', 'correct_answer' => false],
                    ['id' => '3cecb972-0786-5e5d-a1de-26aca4400435', 'description' => 'Glucose', 'correct_answer' => true],
                    ['id' => 'e1725b45-c1ad-56fb-8416-92440310fe5e', 'description' => 'Water', 'correct_answer' => false],
                    ['id' => '94760287-2138-58d6-aef5-8e81ec67d1e0', 'description' => 'Oxygen', 'correct_answer' => false]
                ]],
        ['id' => '1033fdbd-2ab2-5947-91ab-091aca6a8773', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'What is the chemical name for table salt?', 'difficulty' => 1, 'weight' => 195, 'alternatives' => [
                    ['id' => '7ee9f779-4804-51a9-b29d-07c403f2c733', 'description' => 'Oxygen', 'correct_answer' => false],
                    ['id' => '0f02db98-0d6c-5388-b8de-d72292656f04', 'description' => 'Ozone', 'correct_answer' => false],
                    ['id' => '22e6b069-6a0d-57c6-8355-be5b5fdae9bf', 'description' => 'Sodium chloride', 'correct_answer' => true],
                    ['id' => '0173a110-e12f-58c6-90b3-ab61bd0af8d8', 'description' => 'Water', 'correct_answer' => false],
                    ['id' => '5222facf-1ce0-5a5b-9335-8339cdcbc94d', 'description' => 'Glucose', 'correct_answer' => false]
                ]],
        ['id' => '0112ad8d-7279-5e0c-95bb-9c0b83db2a1b', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which element has atomic number 1?', 'difficulty' => 1, 'weight' => 179, 'alternatives' => [
                    ['id' => 'b0360810-7ea4-5f33-a7a5-d155775fa627', 'description' => 'Oxygen', 'correct_answer' => false],
                    ['id' => 'c9d7aa86-c1d1-5e51-a6bb-59dced36ad7f', 'description' => 'Nitrogen', 'correct_answer' => false],
                    ['id' => '27e84929-b92b-560d-8069-ec54db47020c', 'description' => 'Hydrogen', 'correct_answer' => true],
                    ['id' => '95215a65-c747-51ec-afd3-72b9f26d588c', 'description' => 'Water', 'correct_answer' => false],
                    ['id' => '16ad1eee-643c-535d-8e82-b8d9d0c7aa66', 'description' => 'Glucose', 'correct_answer' => false]
                ]],
        ['id' => '41eafd24-3eea-5300-8327-2cd202ac61fd', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which gas makes up most of Earth\'s atmosphere?', 'difficulty' => 1, 'weight' => 165, 'alternatives' => [
                    ['id' => '383a908d-bfe0-5453-b777-8b783dcf4199', 'description' => 'Water', 'correct_answer' => false],
                    ['id' => '241b9a90-5de4-580e-a6c8-ad3d9632e831', 'description' => 'Carbon dioxide', 'correct_answer' => false],
                    ['id' => '9837e0ff-21da-51ed-9d74-fc21337e18a7', 'description' => 'Methane', 'correct_answer' => false],
                    ['id' => '673a5cc7-bb63-507b-88f3-31cb38a7ca6a', 'description' => 'Nitrogen', 'correct_answer' => true],
                    ['id' => '15313b0b-9cca-53a4-b7fa-9c0ede56f381', 'description' => 'Glucose', 'correct_answer' => false]
                ]],
        ['id' => '449f0a3c-e4cc-5f03-aa20-d8b7403ed783', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which element has the symbol O?', 'difficulty' => 1, 'weight' => 104, 'alternatives' => [
                    ['id' => '93f5990a-980f-514d-b90b-0f0c1cafc9bf', 'description' => 'Helium', 'correct_answer' => false],
                    ['id' => '205cb107-750a-54ea-b988-da38db933b21', 'description' => 'Water', 'correct_answer' => false],
                    ['id' => '7ef11d17-51e0-58eb-8360-8006bf5127f2', 'description' => 'Methane', 'correct_answer' => false],
                    ['id' => '7a186d82-0ba8-5f8d-bc37-07279bb26ec7', 'description' => 'Oxygen', 'correct_answer' => true],
                    ['id' => '8e406cce-d46d-5f0b-a92f-c87111440cdb', 'description' => 'Glucose', 'correct_answer' => false]
                ]],
        ['id' => '44b94c34-fe18-50c9-8a0c-a3e7b83265ec', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which organ produces insulin and digestive enzymes?', 'difficulty' => 1, 'weight' => 182, 'alternatives' => [
                    ['id' => '31b6212d-e6cf-5ea9-ba64-370e02954c62', 'description' => 'Lungs', 'correct_answer' => false],
                    ['id' => '939f9665-1dbe-5fa1-af4d-d07c2556cdde', 'description' => 'Small intestine', 'correct_answer' => false],
                    ['id' => '1bb531ec-e33c-52fa-ac13-73d38d11450b', 'description' => 'Pancreas', 'correct_answer' => true],
                    ['id' => '1bb9772b-87fc-551e-af23-b7a11120919a', 'description' => 'Liver', 'correct_answer' => false],
                    ['id' => 'b3f9a77d-6fb8-543b-85a0-86050b276b28', 'description' => 'Kidneys', 'correct_answer' => false]
                ]],
        ['id' => 'ec884405-9579-5961-bf67-c062c55b51c2', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which organ pumps blood through the circulatory system?', 'difficulty' => 1, 'weight' => 128, 'alternatives' => [
                    ['id' => '8c36475c-e890-5f16-961d-5b86aa6917a2', 'description' => 'Heart', 'correct_answer' => true],
                    ['id' => '61458112-b2ea-505c-b968-cc9350cb6142', 'description' => 'Stomach', 'correct_answer' => false],
                    ['id' => '0f1a0673-42d2-59a4-be28-df2205245425', 'description' => 'Large intestine', 'correct_answer' => false],
                    ['id' => '19c97739-0f6f-5cda-951c-84933a72cf36', 'description' => 'Kidneys', 'correct_answer' => false],
                    ['id' => '7cf2073d-5320-5aa4-a056-6499760206a7', 'description' => 'Small intestine', 'correct_answer' => false]
                ]],
        ['id' => '583be853-d723-5360-97c8-e3947907b5f0', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'What is the largest organ of the human body by surface area?', 'difficulty' => 1, 'weight' => 174, 'alternatives' => [
                    ['id' => '0787003a-293f-59f5-ada4-f15e954370e5', 'description' => 'Large intestine', 'correct_answer' => false],
                    ['id' => 'affcdaa2-ae12-5fcd-bec0-25ef7fddf93d', 'description' => 'Lungs', 'correct_answer' => false],
                    ['id' => 'dceb0f9a-093c-5e0a-8407-a9f4799ee035', 'description' => 'Brain', 'correct_answer' => false],
                    ['id' => 'ea50dc27-60b4-596e-a24b-370f5a8d84c6', 'description' => 'Small intestine', 'correct_answer' => false],
                    ['id' => '71c3c6fa-b045-5340-81f1-3f13dff0c946', 'description' => 'Skin', 'correct_answer' => true]
                ]],
        ['id' => '0211bac8-73ab-596a-981a-c429071e888d', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which organ is the central processing organ of the nervous system?', 'difficulty' => 1, 'weight' => 127, 'alternatives' => [
                    ['id' => '2b82f7f6-5b9d-5873-b821-09905d3d9a2d', 'description' => 'Liver', 'correct_answer' => false],
                    ['id' => '2add7725-94ef-5f41-885c-aea49b2aaa65', 'description' => 'Brain', 'correct_answer' => true],
                    ['id' => '39ed9ddc-0908-5dfd-a40e-48f31ddfe5d2', 'description' => 'Small intestine', 'correct_answer' => false],
                    ['id' => 'd3375f78-3444-5112-a168-5b1681eb6ddc', 'description' => 'Lungs', 'correct_answer' => false],
                    ['id' => '97ce602b-fd5e-592d-a56f-4db607f8a39d', 'description' => 'Kidneys', 'correct_answer' => false]
                ]],
        ['id' => '69723917-3043-5749-b933-9467f01260ac', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which digestive organ absorbs water and forms feces?', 'difficulty' => 1, 'weight' => 110, 'alternatives' => [
                    ['id' => '96312d4d-1bfe-5637-aa56-13e425583dc6', 'description' => 'Large intestine', 'correct_answer' => true],
                    ['id' => '2bbfccc2-951b-558f-80d6-2728137b0f26', 'description' => 'Skin', 'correct_answer' => false],
                    ['id' => 'bd817044-efd9-5060-bc82-ae50daad89ac', 'description' => 'Pancreas', 'correct_answer' => false],
                    ['id' => 'c33f6ccd-4bec-53a0-917c-68eb2a78f979', 'description' => 'Stomach', 'correct_answer' => false],
                    ['id' => '9cec6052-7d8b-5bd7-b423-69f601767e19', 'description' => 'Brain', 'correct_answer' => false]
                ]],
        ['id' => '069663d3-aa29-5a8e-93ca-658c21a8251e', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which organs filter blood and produce urine?', 'difficulty' => 1, 'weight' => 167, 'alternatives' => [
                    ['id' => '333597a7-5ae4-5cdb-ac3f-2a0a6b491556', 'description' => 'Large intestine', 'correct_answer' => false],
                    ['id' => '9f4dd329-669a-5462-8bd0-f4b61c844311', 'description' => 'Kidneys', 'correct_answer' => true],
                    ['id' => '5d01c773-fc9b-530b-b18c-10009940e7b8', 'description' => 'Small intestine', 'correct_answer' => false],
                    ['id' => '232580a0-7de4-5ae3-a526-59fb4002165a', 'description' => 'Brain', 'correct_answer' => false],
                    ['id' => 'e413c599-e5f3-5f06-a9a5-70585f59738b', 'description' => 'Lungs', 'correct_answer' => false]
                ]],
        ['id' => '4fe84af2-f5bb-5acb-bc2e-5d07b3e272fb', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which organ uses acid and enzymes to begin protein digestion?', 'difficulty' => 1, 'weight' => 102, 'alternatives' => [
                    ['id' => 'fa31fd47-746c-5a4c-9449-ec11030db73c', 'description' => 'Brain', 'correct_answer' => false],
                    ['id' => '82bcba55-da2e-5b02-8d95-cbc90ce77faa', 'description' => 'Stomach', 'correct_answer' => true],
                    ['id' => '4bc924aa-6e14-5107-9f7e-9ea98a358fc1', 'description' => 'Kidneys', 'correct_answer' => false],
                    ['id' => '32dbce5c-8965-52bc-adc2-9fe0d2ed5da2', 'description' => 'Small intestine', 'correct_answer' => false],
                    ['id' => '23372e5c-6cb1-51dd-87d9-fdb8125ee206', 'description' => 'Lungs', 'correct_answer' => false]
                ]],
        ['id' => 'be3879e3-51db-54e5-a3a9-90dd5fea92d1', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which digestive organ absorbs most nutrients?', 'difficulty' => 1, 'weight' => 160, 'alternatives' => [
                    ['id' => '98f68b37-e2a5-5c2c-b2d9-d16efe35b097', 'description' => 'Small intestine', 'correct_answer' => true],
                    ['id' => '6322bfe8-625d-5e43-be6c-170f72ac2ff3', 'description' => 'Brain', 'correct_answer' => false],
                    ['id' => '3ae5de23-f461-5ecf-b6ba-677259e05274', 'description' => 'Stomach', 'correct_answer' => false],
                    ['id' => '94b109a5-efc8-5719-92b2-532e058ad09b', 'description' => 'Skin', 'correct_answer' => false],
                    ['id' => 'b9e53442-c200-5d74-9b17-f24392c2784e', 'description' => 'Pancreas', 'correct_answer' => false]
                ]],
        ['id' => 'ba008d81-66de-5a09-aaa0-7b9f4b0aa99a', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which planet is closest to the Sun?', 'difficulty' => 1, 'weight' => 177, 'alternatives' => [
                    ['id' => 'f5ac20d7-ce8c-5d61-8b5d-ec05bd6210aa', 'description' => 'Uranus', 'correct_answer' => false],
                    ['id' => '3bd1fb9c-830e-5962-a924-d91ec265ac3f', 'description' => 'Jupiter', 'correct_answer' => false],
                    ['id' => '8956cb1b-02ab-5906-9973-c7a342ca84b3', 'description' => 'Ceres', 'correct_answer' => false],
                    ['id' => '36523829-45a7-5349-8265-6ff9bfa8e8e1', 'description' => 'Venus', 'correct_answer' => false],
                    ['id' => 'c03e23c4-7971-5fc5-9bd8-f84aeb1a7623', 'description' => 'Mercury', 'correct_answer' => true]
                ]],
        ['id' => 'bd730378-7f26-5d33-9b65-6faf1f614056', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which dwarf planet is located in the asteroid belt?', 'difficulty' => 1, 'weight' => 125, 'alternatives' => [
                    ['id' => '23922543-6f00-5f57-87f0-932c64963614', 'description' => 'Pluto', 'correct_answer' => false],
                    ['id' => '393c2898-5143-5672-9434-58eab5dfa767', 'description' => 'Mars', 'correct_answer' => false],
                    ['id' => 'ad9ebb99-ef1f-53b8-a7c5-b8928739ccee', 'description' => 'Uranus', 'correct_answer' => false],
                    ['id' => '1fdcf884-a740-5edb-80b7-5700c7cbf448', 'description' => 'Earth', 'correct_answer' => false],
                    ['id' => 'bcb00e04-3263-5de7-9075-a6bcc532e76e', 'description' => 'Ceres', 'correct_answer' => true]
                ]],
        ['id' => 'a0204c25-4a52-5d3a-a3a2-bc86e12841e1', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which planet is the largest in the Solar System?', 'difficulty' => 1, 'weight' => 199, 'alternatives' => [
                    ['id' => 'f7614962-679c-5f6e-8e96-c9810c6a22a1', 'description' => 'Jupiter', 'correct_answer' => true],
                    ['id' => 'f8f1f2d1-8f1a-583c-b5cf-f8d3900c4151', 'description' => 'Saturn', 'correct_answer' => false],
                    ['id' => '3a5b64e7-7769-5409-8603-764d2801dbd5', 'description' => 'Mercury', 'correct_answer' => false],
                    ['id' => 'e9a030f5-3770-5549-893e-4487fc6d45c0', 'description' => 'Pluto', 'correct_answer' => false],
                    ['id' => 'dda377da-c459-5101-8ad5-254ca00f48e6', 'description' => 'Neptune', 'correct_answer' => false]
                ]],
        ['id' => '682dd50a-65f1-5fb1-bd6b-e8d6ed923e29', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which planet is farthest from the Sun among the eight planets?', 'difficulty' => 1, 'weight' => 181, 'alternatives' => [
                    ['id' => 'a93a6913-f6ad-5470-b7c5-62609d95a732', 'description' => 'Mercury', 'correct_answer' => false],
                    ['id' => '91642749-d743-54da-8ede-db66511b5a51', 'description' => 'Jupiter', 'correct_answer' => false],
                    ['id' => '403ce3fb-120a-5405-b03f-e5884a53895a', 'description' => 'Ceres', 'correct_answer' => false],
                    ['id' => 'fbb63e13-5aa9-5747-8120-5083d991ef53', 'description' => 'Neptune', 'correct_answer' => true],
                    ['id' => '3f9b5bf9-841f-5637-9bad-9bf9c61c153c', 'description' => 'Uranus', 'correct_answer' => false]
                ]],
        ['id' => 'cfeffcf5-afd6-5816-9782-bddfbdf14270', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which planet has abundant liquid water on its surface?', 'difficulty' => 1, 'weight' => 118, 'alternatives' => [
                    ['id' => '9fc7d54e-a003-5583-93b8-5e7d694f1b95', 'description' => 'Mercury', 'correct_answer' => false],
                    ['id' => 'a5be2574-d0c4-5cce-9f0a-ff0a48b35927', 'description' => 'Mars', 'correct_answer' => false],
                    ['id' => 'a28a7e75-6840-5206-a21a-c74eef4c62c5', 'description' => 'Pluto', 'correct_answer' => false],
                    ['id' => 'c7c5fbf3-5166-5ddd-8095-7e714d3a2a81', 'description' => 'Jupiter', 'correct_answer' => false],
                    ['id' => '94f088c8-a793-5918-9412-63d78fb4ba3d', 'description' => 'Earth', 'correct_answer' => true]
                ]],
        ['id' => '00b2664c-e979-5a75-b251-af810869334f', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which planet has the hottest average surface temperature?', 'difficulty' => 1, 'weight' => 144, 'alternatives' => [
                    ['id' => '322b23a7-5d6a-5b57-a2ea-775ab3261761', 'description' => 'Uranus', 'correct_answer' => false],
                    ['id' => '96b1a234-4ceb-5946-a848-5d4500fb269c', 'description' => 'Pluto', 'correct_answer' => false],
                    ['id' => '5c9044e5-102e-5c7f-b078-79319a25326f', 'description' => 'Venus', 'correct_answer' => true],
                    ['id' => 'e31e6a92-b4aa-581d-8f52-96020ef238c1', 'description' => 'Jupiter', 'correct_answer' => false],
                    ['id' => 'df47b150-5977-5072-ace7-b04236bd8426', 'description' => 'Earth', 'correct_answer' => false]
                ]],
        ['id' => '5d13e242-e22c-50c6-99d9-41b93f53b89e', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which planet is known as the Red Planet?', 'difficulty' => 1, 'weight' => 199, 'alternatives' => [
                    ['id' => 'ec192966-87a7-5ddb-9ce1-29af2c63f9c8', 'description' => 'Jupiter', 'correct_answer' => false],
                    ['id' => '705ac026-cf90-5711-84ef-8bf51944c832', 'description' => 'Pluto', 'correct_answer' => false],
                    ['id' => 'd71a8530-bf4f-5a30-acdb-1f6fbabeb6bb', 'description' => 'Saturn', 'correct_answer' => false],
                    ['id' => '835001f7-3657-554e-81b3-2adf44b2fac2', 'description' => 'Mars', 'correct_answer' => true],
                    ['id' => 'd7606955-fa7a-5ca1-a1d3-3fa1bef375c0', 'description' => 'Earth', 'correct_answer' => false]
                ]],
        ['id' => '0106a249-08a6-5c8e-8833-7bfe94923fbb', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which planet has an axial tilt of about 98 degrees?', 'difficulty' => 1, 'weight' => 198, 'alternatives' => [
                    ['id' => 'c5852bf6-7793-5afa-8c38-253d8aac9dff', 'description' => 'Venus', 'correct_answer' => false],
                    ['id' => 'e5b9063b-dae7-56cf-83b9-ac89fff5e745', 'description' => 'Mercury', 'correct_answer' => false],
                    ['id' => '5fd8a6cf-3f23-5c87-a80b-e9831aec54d4', 'description' => 'Earth', 'correct_answer' => false],
                    ['id' => '356e8f46-170d-5ea9-8c83-d867e7e54c32', 'description' => 'Neptune', 'correct_answer' => false],
                    ['id' => '4e9cda47-8047-58fa-8b2b-e47a3bae3adf', 'description' => 'Uranus', 'correct_answer' => true]
                ]],
        ['id' => 'bb2534c0-e44a-5efd-a15e-3243a913daad', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which vertebrate group includes frogs, toads, and salamanders?', 'difficulty' => 1, 'weight' => 148, 'alternatives' => [
                    ['id' => 'd7ad2c76-e3bc-5150-9932-263b80588c52', 'description' => 'Cnidarian', 'correct_answer' => false],
                    ['id' => '7c866263-d475-5d91-aede-26a43d8a4738', 'description' => 'Arachnid', 'correct_answer' => false],
                    ['id' => 'd93e0372-8d0f-5f54-aa25-836f106a752e', 'description' => 'Amphibian', 'correct_answer' => true],
                    ['id' => 'e70ead3a-b678-5ad7-b228-be677d5bb0a1', 'description' => 'Reptile', 'correct_answer' => false],
                    ['id' => 'dae56372-620c-54c0-a156-d92f217d350b', 'description' => 'Fish', 'correct_answer' => false]
                ]],
        ['id' => 'd0375b06-4730-520c-9b19-40922f401ca0', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which broad group of aquatic vertebrates typically uses gills?', 'difficulty' => 1, 'weight' => 198, 'alternatives' => [
                    ['id' => 'd5c49569-3b83-5a15-8cff-8de18c57914b', 'description' => 'Crustacean', 'correct_answer' => false],
                    ['id' => 'a2c428a2-2f1b-51e9-ac35-d30425e8b8ff', 'description' => 'Reptile', 'correct_answer' => false],
                    ['id' => '86f7ac95-4963-5d46-b709-e4daf8d01dc3', 'description' => 'Fish', 'correct_answer' => true],
                    ['id' => '9ece9abc-0c3c-5d5e-8a19-8de39667fb1c', 'description' => 'Arachnid', 'correct_answer' => false],
                    ['id' => 'e35f0d04-5d0f-50b0-9899-c238a9dc9c86', 'description' => 'Mollusk', 'correct_answer' => false]
                ]],
        ['id' => '3a9b41d7-c3ca-52ca-9193-5916abc244b3', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which vertebrate class has hair and milk-producing mammary glands?', 'difficulty' => 1, 'weight' => 110, 'alternatives' => [
                    ['id' => '3bfbfbff-5081-55a9-9c9d-5fa4cd4628b8', 'description' => 'Mammal', 'correct_answer' => true],
                    ['id' => 'e05c4882-2cd9-5c7a-8e2f-d0ed6ce74122', 'description' => 'Fish', 'correct_answer' => false],
                    ['id' => '432ad754-40b9-5c5b-a4a3-172f78e45b69', 'description' => 'Amphibian', 'correct_answer' => false],
                    ['id' => '2acc1d3a-b41d-51de-9115-240af136bf63', 'description' => 'Cnidarian', 'correct_answer' => false],
                    ['id' => '27722967-71da-59b4-bb53-7874b2d7624b', 'description' => 'Bird', 'correct_answer' => false]
                ]],
        ['id' => '1943bb16-5e43-52fb-814e-189922511f40', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which animal phylum includes snails, clams, octopuses, and squids?', 'difficulty' => 1, 'weight' => 187, 'alternatives' => [
                    ['id' => '811c55fc-9e54-5965-bf37-36fb97dbfe90', 'description' => 'Fish', 'correct_answer' => false],
                    ['id' => '3cedc279-4e06-59e0-b2c0-793a1994f0ea', 'description' => 'Bird', 'correct_answer' => false],
                    ['id' => 'ce3a56cf-8190-5b57-96ed-71f48c54d4b0', 'description' => 'Mollusk', 'correct_answer' => true],
                    ['id' => 'c3e41629-7807-5c74-81c9-446f372c5fb9', 'description' => 'Mammal', 'correct_answer' => false],
                    ['id' => 'f4e52f03-0f67-531f-9433-45c63fb8718c', 'description' => 'Cnidarian', 'correct_answer' => false]
                ]],
        ['id' => 'a8f17f34-bd50-5a61-b8b3-515d2aec2030', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which arthropod group has six legs and three main body sections?', 'difficulty' => 1, 'weight' => 146, 'alternatives' => [
                    ['id' => 'fd393775-4306-5893-b8e6-0538cf17cffc', 'description' => 'Mammal', 'correct_answer' => false],
                    ['id' => '49acd829-668b-5a2c-a600-12543a191053', 'description' => 'Arachnid', 'correct_answer' => false],
                    ['id' => '1b8fb1cf-61fc-55bd-8c04-f0d21b62ec12', 'description' => 'Insect', 'correct_answer' => true],
                    ['id' => '2ac9614f-328f-5713-b093-3d4536d7fb45', 'description' => 'Cnidarian', 'correct_answer' => false],
                    ['id' => 'f85ecb8c-788d-597d-98fe-f5c4bcd25049', 'description' => 'Fish', 'correct_answer' => false]
                ]],
        ['id' => '39a95e84-54f2-59c5-b28b-7883d56df83c', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which arthropod group includes spiders, scorpions, and ticks?', 'difficulty' => 1, 'weight' => 166, 'alternatives' => [
                    ['id' => '5da49f56-2b32-5a2f-91c7-87c6da86bd2b', 'description' => 'Arachnid', 'correct_answer' => true],
                    ['id' => '655ba172-3133-5581-bea1-62dfe1d2fb7d', 'description' => 'Crustacean', 'correct_answer' => false],
                    ['id' => 'b988fde7-17b5-57b0-97be-c83a36971f93', 'description' => 'Mammal', 'correct_answer' => false],
                    ['id' => 'dc711df3-2745-5369-8387-e0103b05b2b1', 'description' => 'Bird', 'correct_answer' => false],
                    ['id' => '6d20f455-6399-5a54-959f-de96c9b48867', 'description' => 'Insect', 'correct_answer' => false]
                ]],
        ['id' => '86e9b975-45f2-5329-a86b-0f8cbc0ec040', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which animal phylum includes jellyfish, corals, and sea anemones?', 'difficulty' => 1, 'weight' => 136, 'alternatives' => [
                    ['id' => '910b7eb7-7a97-5eed-8c59-5b05400f5aea', 'description' => 'Mollusk', 'correct_answer' => false],
                    ['id' => 'd45f2169-7c8d-56c6-9eeb-0f68f89e423a', 'description' => 'Crustacean', 'correct_answer' => false],
                    ['id' => '0b6f7678-fdee-5f7a-866d-ada959b0a645', 'description' => 'Cnidarian', 'correct_answer' => true],
                    ['id' => '5555b6f2-3d1e-56b4-8a39-9c36434f428f', 'description' => 'Fish', 'correct_answer' => false],
                    ['id' => 'e1083dc1-80f7-52b9-8916-f7408d03725e', 'description' => 'Reptile', 'correct_answer' => false]
                ]],
        ['id' => '5f5632eb-2f90-5ec2-b5d4-d39807909dfc', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which vertebrate class has feathers?', 'difficulty' => 1, 'weight' => 155, 'alternatives' => [
                    ['id' => '51006359-ef31-54f4-8e23-6ed1cd4662cb', 'description' => 'Mammal', 'correct_answer' => false],
                    ['id' => '8f7cbe54-5472-5e50-9306-21bed19ee7d7', 'description' => 'Mollusk', 'correct_answer' => false],
                    ['id' => '36f9194c-3c08-5ff3-a1a9-768322d4502f', 'description' => 'Amphibian', 'correct_answer' => false],
                    ['id' => 'b5d4d161-d3b3-5fac-a146-509b36cfb638', 'description' => 'Fish', 'correct_answer' => false],
                    ['id' => '254c7bca-81ec-5a7f-bd46-3b1f76715fc3', 'description' => 'Bird', 'correct_answer' => true]
                ]],
        ['id' => 'a9fb1e1d-553a-5207-aa92-660017ba95f4', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which chemist created a periodic table that predicted undiscovered elements?', 'difficulty' => 1, 'weight' => 133, 'alternatives' => [
                    ['id' => '8da77b56-34bf-58ac-8334-be054f438550', 'description' => 'Gregor Mendel', 'correct_answer' => false],
                    ['id' => '89867675-f00a-5f13-bb71-97c5ccc138f0', 'description' => 'Dmitri Mendeleev', 'correct_answer' => true],
                    ['id' => '1b5cb294-51f5-5fab-bcba-c12dc64e1bd3', 'description' => 'Ada Lovelace', 'correct_answer' => false],
                    ['id' => '1a71b5e3-44bf-5ce3-b34d-f2546b8a0823', 'description' => 'Nikola Tesla', 'correct_answer' => false],
                    ['id' => '69877322-cbf5-588e-831e-5f170f286ea7', 'description' => 'Albert Einstein', 'correct_answer' => false]
                ]],
        ['id' => '1835cb9e-e9ae-51a0-bc94-1d4ad78732fd', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which naturalist proposed evolution by natural selection?', 'difficulty' => 1, 'weight' => 188, 'alternatives' => [
                    ['id' => 'f3159828-eebb-534c-a113-214270f493d4', 'description' => 'Isaac Newton', 'correct_answer' => false],
                    ['id' => '559ea109-8eef-56d3-9a31-16bd4e3f0f0d', 'description' => 'Louis Pasteur', 'correct_answer' => false],
                    ['id' => 'ecf780bd-9ca8-59d8-aff2-84c4185bf4c7', 'description' => 'Gregor Mendel', 'correct_answer' => false],
                    ['id' => '8818c72d-5c7a-5828-aecb-40349cf0370c', 'description' => 'Albert Einstein', 'correct_answer' => false],
                    ['id' => 'c484c36a-3518-5bd0-8287-65b1f17c9ec4', 'description' => 'Charles Darwin', 'correct_answer' => true]
                ]],
        ['id' => '75affdce-49c6-5f9b-a9f1-9b298a566313', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which scientist\'s pea-plant experiments helped establish principles of inheritance?', 'difficulty' => 1, 'weight' => 163, 'alternatives' => [
                    ['id' => '1fc58dbf-824b-5dc9-b756-7817fb2006cf', 'description' => 'Nikola Tesla', 'correct_answer' => false],
                    ['id' => '57a45c44-6e20-57f6-8324-3741fdc35a21', 'description' => 'Marie Curie', 'correct_answer' => false],
                    ['id' => '8a95e7ce-e02a-5987-82f7-14991124a2d4', 'description' => 'Gregor Mendel', 'correct_answer' => true],
                    ['id' => '20212a4f-15d8-5f6a-bc5b-5da193432498', 'description' => 'Isaac Newton', 'correct_answer' => false],
                    ['id' => '06f4e367-0f52-541e-9f2c-7aa9ab4b9e4e', 'description' => 'Albert Einstein', 'correct_answer' => false]
                ]],
        ['id' => 'c260335c-1907-5c62-be05-ee9ca380476c', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which scientist formulated the three laws of motion and universal gravitation?', 'difficulty' => 1, 'weight' => 180, 'alternatives' => [
                    ['id' => 'b84fb25d-839c-507c-be53-44466446a15f', 'description' => 'Isaac Newton', 'correct_answer' => true],
                    ['id' => '2302f9cd-da87-509f-b1c1-ed7e64ace9c5', 'description' => 'Ada Lovelace', 'correct_answer' => false],
                    ['id' => 'ee75fb83-6eca-5056-bed4-3070a3a67d61', 'description' => 'Galileo Galilei', 'correct_answer' => false],
                    ['id' => '16f791b7-ccbf-5c51-825e-563ef5bfb2f0', 'description' => 'Albert Einstein', 'correct_answer' => false],
                    ['id' => '888084bc-cb32-577e-81e2-529b3c3e120c', 'description' => 'Gregor Mendel', 'correct_answer' => false]
                ]],
        ['id' => '8e01fb7f-eea8-575a-bd83-441ea96a2d62', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which astronomer used telescopic observations to support heliocentrism?', 'difficulty' => 1, 'weight' => 184, 'alternatives' => [
                    ['id' => '6bbae5e1-98b3-5f11-9910-bb2b5e953324', 'description' => 'Albert Einstein', 'correct_answer' => false],
                    ['id' => '6e51c314-952b-5eb0-b6c9-7875944b3c57', 'description' => 'Charles Darwin', 'correct_answer' => false],
                    ['id' => '33a74253-0281-58ff-a362-2adb0067dcbd', 'description' => 'Marie Curie', 'correct_answer' => false],
                    ['id' => 'ca0d9d43-4a17-5498-90a1-459c61f9e940', 'description' => 'Galileo Galilei', 'correct_answer' => true],
                    ['id' => 'cf60059a-a00d-53e9-b9ca-c0b3a1ac0c87', 'description' => 'Ada Lovelace', 'correct_answer' => false]
                ]],
        ['id' => 'e35f134f-51c1-5a64-9ddb-cb41af1644e2', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which scientist pioneered research on radioactivity and won Nobel Prizes in two sciences?', 'difficulty' => 1, 'weight' => 109, 'alternatives' => [
                    ['id' => '0ad5a071-4067-559a-8a19-b16ce64881d0', 'description' => 'Dmitri Mendeleev', 'correct_answer' => false],
                    ['id' => 'f1f3a58b-73b6-50ae-a85e-e7af7be607be', 'description' => 'Albert Einstein', 'correct_answer' => false],
                    ['id' => 'e684cd8a-5375-5f40-b4a5-c7c9fe241933', 'description' => 'Gregor Mendel', 'correct_answer' => false],
                    ['id' => 'aa566ebf-801b-5a9e-9a5b-03222a15853b', 'description' => 'Marie Curie', 'correct_answer' => true],
                    ['id' => '667d9a10-73c9-5839-8df6-50ac201dd79d', 'description' => 'Louis Pasteur', 'correct_answer' => false]
                ]],
        ['id' => '95b43060-9138-55fe-95ff-dbe20b346c97', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which scientist developed pasteurization and advanced germ theory?', 'difficulty' => 1, 'weight' => 143, 'alternatives' => [
                    ['id' => 'cb6cb30f-fcad-5d1a-90ad-94c09d30e446', 'description' => 'Ada Lovelace', 'correct_answer' => false],
                    ['id' => 'af23b681-d24f-5c6a-92aa-b284685923e5', 'description' => 'Louis Pasteur', 'correct_answer' => true],
                    ['id' => 'b629d0b8-ce16-5c5b-ab18-6c8364f4e905', 'description' => 'Galileo Galilei', 'correct_answer' => false],
                    ['id' => '88223ed1-90be-5087-a974-7d7c8bd6656c', 'description' => 'Charles Darwin', 'correct_answer' => false],
                    ['id' => '441ba4be-c764-5cf4-a5ba-5f3d74f71ae2', 'description' => 'Isaac Newton', 'correct_answer' => false]
                ]],
        ['id' => '5a760d3d-6c43-5cb5-a114-ce6e1c7acfb4', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which physicist developed special and general relativity?', 'difficulty' => 1, 'weight' => 135, 'alternatives' => [
                    ['id' => '81dccc66-947b-5ba9-ba4b-96ee71a836d1', 'description' => 'Ada Lovelace', 'correct_answer' => false],
                    ['id' => '9b008247-dfe0-52b8-85e0-da86b9ae4777', 'description' => 'Gregor Mendel', 'correct_answer' => false],
                    ['id' => '50593f19-6145-57ba-ab18-af88f15bec9e', 'description' => 'Isaac Newton', 'correct_answer' => false],
                    ['id' => 'b6aa0cab-abe6-5449-8bee-774b7a472bc8', 'description' => 'Albert Einstein', 'correct_answer' => true],
                    ['id' => 'ffb2d3d5-6065-5325-a3a4-9a80d3712a47', 'description' => 'Charles Darwin', 'correct_answer' => false]
                ]],
        ['id' => '0e0014e1-fd4a-5fef-b078-5510d3951359', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which plant-cell compartment stores water and helps maintain turgor pressure?', 'difficulty' => 2, 'weight' => 319, 'alternatives' => [
                    ['id' => 'b496b470-bf9d-5818-be95-55503353ee98', 'description' => 'Nucleus', 'correct_answer' => false],
                    ['id' => '56068db2-f6fc-5761-910b-3c7bac6705ed', 'description' => 'Lysosome', 'correct_answer' => false],
                    ['id' => '858b8b78-60fd-5126-baf0-f2481c525a58', 'description' => 'Vacuole', 'correct_answer' => true],
                    ['id' => '57ba19c2-c4fa-5a46-934b-72093e722ab8', 'description' => 'Centrosome', 'correct_answer' => false],
                    ['id' => 'f5bbb5ec-b638-5e93-b8e8-09d17e3e6c09', 'description' => 'Mitochondrion', 'correct_answer' => false]
                ]],
        ['id' => 'deda8b4e-8447-59ab-bb9f-c6e57903f854', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which organelle houses most DNA in a eukaryotic cell?', 'difficulty' => 2, 'weight' => 384, 'alternatives' => [
                    ['id' => '2bbdd9f6-b7e2-5504-be72-45391e6de4ca', 'description' => 'Peroxisome', 'correct_answer' => false],
                    ['id' => '8df658d4-42a9-57b5-88a6-3736a01be5f5', 'description' => 'Nucleus', 'correct_answer' => true],
                    ['id' => '9117167c-be84-5287-8842-4ea7976fa097', 'description' => 'Chloroplast', 'correct_answer' => false],
                    ['id' => 'c1a6d749-46d9-5864-9077-9f0c1af3cb49', 'description' => 'Endoplasmic reticulum', 'correct_answer' => false],
                    ['id' => '9c82ca8e-d2a0-5d84-8115-5c732e0364b6', 'description' => 'Vacuole', 'correct_answer' => false]
                ]],
        ['id' => '96dbec8b-03c6-588a-8842-4bff4cfdbf85', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which membrane network includes rough and smooth regions involved in protein and lipid production?', 'difficulty' => 2, 'weight' => 354, 'alternatives' => [
                    ['id' => '74dcfbc7-d85e-56cd-81f6-d5a56eb17635', 'description' => 'Ribosome', 'correct_answer' => false],
                    ['id' => 'a2a72116-1b96-57ee-ac03-abe753815298', 'description' => 'Nucleus', 'correct_answer' => false],
                    ['id' => '04f26a5e-a6a3-5e98-8ef9-1eec038a5d65', 'description' => 'Endoplasmic reticulum', 'correct_answer' => true],
                    ['id' => '03631750-495f-59a1-8669-04c59b4c1a97', 'description' => 'Centrosome', 'correct_answer' => false],
                    ['id' => 'ba6d1739-d5b4-54d6-95b7-67dad160a398', 'description' => 'Chloroplast', 'correct_answer' => false]
                ]],
        ['id' => '0ac66799-8820-529a-b189-3c897f8888a2', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which organelle modifies and packages proteins for transport?', 'difficulty' => 2, 'weight' => 283, 'alternatives' => [
                    ['id' => '9657bd2d-c574-5546-816a-65496a72c968', 'description' => 'Mitochondrion', 'correct_answer' => false],
                    ['id' => 'bce82977-060f-5ffd-8d84-cf0c64df4b48', 'description' => 'Peroxisome', 'correct_answer' => false],
                    ['id' => 'b1d62e42-0f5d-5196-a63a-57deb921d2d1', 'description' => 'Vacuole', 'correct_answer' => false],
                    ['id' => '4ae762d0-9ad2-59dc-85c1-e0dac9d1e5df', 'description' => 'Endoplasmic reticulum', 'correct_answer' => false],
                    ['id' => '0c4f804f-b5a9-5e30-9507-d931d40be490', 'description' => 'Golgi apparatus', 'correct_answer' => true]
                ]],
        ['id' => '838c29a1-f11e-5e3e-910f-5807a4757324', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which organelle is commonly called the powerhouse of the cell?', 'difficulty' => 2, 'weight' => 304, 'alternatives' => [
                    ['id' => 'e9db96ab-c8c3-581f-845c-6a2328930abc', 'description' => 'Chloroplast', 'correct_answer' => false],
                    ['id' => 'f58809ab-a286-5ed4-8b28-cac8d0631f5a', 'description' => 'Mitochondrion', 'correct_answer' => true],
                    ['id' => '61a0c6d8-f575-5bd5-adbb-7a5352ef583b', 'description' => 'Peroxisome', 'correct_answer' => false],
                    ['id' => 'a1c2bf22-e7de-563d-84d9-4c45a0df0e9d', 'description' => 'Nucleus', 'correct_answer' => false],
                    ['id' => '815bcc8d-577d-53e0-9b86-4981b5eb86b9', 'description' => 'Endoplasmic reticulum', 'correct_answer' => false]
                ]],
        ['id' => '372e1a90-aab4-517f-aa33-3cda59babf8f', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which animal-cell structure organizes microtubules and helps form the mitotic spindle?', 'difficulty' => 2, 'weight' => 231, 'alternatives' => [
                    ['id' => 'cab72c0a-9a24-5f5c-91c7-9bcadc354983', 'description' => 'Mitochondrion', 'correct_answer' => false],
                    ['id' => 'ac1c6ddd-067c-5e5a-89fd-589c92b1646c', 'description' => 'Nucleus', 'correct_answer' => false],
                    ['id' => '821aa2d1-ea26-59d0-a1fa-7c10e06cb09b', 'description' => 'Vacuole', 'correct_answer' => false],
                    ['id' => 'aa00ce4c-0901-501e-81cd-0322a605decb', 'description' => 'Centrosome', 'correct_answer' => true],
                    ['id' => '78a83624-d193-5adc-9a5f-621191f9e261', 'description' => 'Chloroplast', 'correct_answer' => false]
                ]],
        ['id' => 'cf6b8345-4998-55dc-9e5f-11c377b2fac4', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which organelle contains enzymes that break down fatty acids and hydrogen peroxide?', 'difficulty' => 2, 'weight' => 285, 'alternatives' => [
                    ['id' => '503606c4-8325-507f-8d9b-bebf99feed4c', 'description' => 'Mitochondrion', 'correct_answer' => false],
                    ['id' => 'd9976aee-70dc-5ea9-8c02-d16759ddb850', 'description' => 'Ribosome', 'correct_answer' => false],
                    ['id' => 'bc54d2d9-5563-56b5-979d-711996a0e9ef', 'description' => 'Nucleus', 'correct_answer' => false],
                    ['id' => '7b75bc69-285c-5f37-b747-12e4d0cf263e', 'description' => 'Peroxisome', 'correct_answer' => true],
                    ['id' => '1b928ef2-f6c8-5627-87f8-316291d660e2', 'description' => 'Chloroplast', 'correct_answer' => false]
                ]],
        ['id' => 'f8e0b79a-932a-560c-a93a-d3a879b7282d', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which cellular structure translates messenger RNA into proteins?', 'difficulty' => 2, 'weight' => 251, 'alternatives' => [
                    ['id' => 'dff47ef6-eb27-552f-87e6-03664dfc6e52', 'description' => 'Lysosome', 'correct_answer' => false],
                    ['id' => '985ac3e3-e8eb-5d1f-99e3-b1877f9226ad', 'description' => 'Vacuole', 'correct_answer' => false],
                    ['id' => '71d5ad45-f4af-5463-98c8-92b222ff3ed7', 'description' => 'Ribosome', 'correct_answer' => true],
                    ['id' => 'd0296477-0917-59e1-9e5d-d44e143ec5cb', 'description' => 'Golgi apparatus', 'correct_answer' => false],
                    ['id' => '2e7e748d-702b-5bbe-b928-097b202e0486', 'description' => 'Peroxisome', 'correct_answer' => false]
                ]],
        ['id' => '08e6a933-04c3-5da5-b90a-1e88d75c9937', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which transition metal has the chemical symbol Fe?', 'difficulty' => 2, 'weight' => 275, 'alternatives' => [
                    ['id' => '0737d918-04ba-5a60-b92f-51cdb6aee3a5', 'description' => 'Copper', 'correct_answer' => false],
                    ['id' => '5b5ff7dd-78a0-582d-9f2a-727200ba75c9', 'description' => 'Tin', 'correct_answer' => false],
                    ['id' => 'dc399c92-645a-5505-8761-9545d7a1ddf8', 'description' => 'Gold', 'correct_answer' => false],
                    ['id' => 'f6d3cd20-d6f6-57a6-ba22-af73cdb85f62', 'description' => 'Mercury', 'correct_answer' => false],
                    ['id' => '60c26dbb-9d34-51f1-a319-bceab92b7d08', 'description' => 'Iron', 'correct_answer' => true]
                ]],
        ['id' => 'ae2d596e-16fa-5d52-8b90-15ff2eea4ebf', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which element has atomic number 11 and symbol Na?', 'difficulty' => 2, 'weight' => 361, 'alternatives' => [
                    ['id' => '20add613-8258-501f-a6f6-ec6d04cf9614', 'description' => 'Iron', 'correct_answer' => false],
                    ['id' => '97d33129-0a10-5d17-9852-6264d28bb0e9', 'description' => 'Lead', 'correct_answer' => false],
                    ['id' => '6a78d35d-88b5-5d98-b6cd-5a1c99bf589b', 'description' => 'Sodium', 'correct_answer' => true],
                    ['id' => 'b7cad6e4-ea9d-573d-8be2-81cc2261dc67', 'description' => 'Mercury', 'correct_answer' => false],
                    ['id' => '1c11234b-b3dd-56fa-ac77-ad051cc66165', 'description' => 'Tin', 'correct_answer' => false]
                ]],
        ['id' => '8cdcb02e-32bc-5357-a771-81605f23ea69', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which element has atomic number 19 and symbol K?', 'difficulty' => 2, 'weight' => 298, 'alternatives' => [
                    ['id' => '8a33154d-654c-5503-ab77-30c6377b400c', 'description' => 'Lead', 'correct_answer' => false],
                    ['id' => '51d5bdac-554a-51fb-ade9-65f4b605683c', 'description' => 'Copper', 'correct_answer' => false],
                    ['id' => '52893ddb-e18a-5c2f-bced-5ae7b37bcf09', 'description' => 'Mercury', 'correct_answer' => false],
                    ['id' => '6dac532a-613b-56b5-a092-b39e2ff1758c', 'description' => 'Tin', 'correct_answer' => false],
                    ['id' => 'f3630c8f-906c-5e8f-b12a-f86021c025e5', 'description' => 'Potassium', 'correct_answer' => true]
                ]],
        ['id' => 'fbb79408-c656-5c55-adb1-f9c72e1d1c22', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which reddish metal has the chemical symbol Cu?', 'difficulty' => 2, 'weight' => 366, 'alternatives' => [
                    ['id' => '6840e404-3dd9-5fa1-bc0c-994c608908ba', 'description' => 'Potassium', 'correct_answer' => false],
                    ['id' => '0ad76489-a5e7-5e5a-b659-28c6a3c77ec8', 'description' => 'Gold', 'correct_answer' => false],
                    ['id' => '242cedfb-7774-57b9-bdbc-23b8a93a8b18', 'description' => 'Copper', 'correct_answer' => true],
                    ['id' => 'e741ad7a-9495-5898-ad70-486d1a155c41', 'description' => 'Tin', 'correct_answer' => false],
                    ['id' => 'b76da614-4e81-5e22-b40f-d02266dbb763', 'description' => 'Iron', 'correct_answer' => false]
                ]],
        ['id' => '9ce2dd31-5f27-50f4-8a2f-ad0bf1e6dda4', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which heavy metal has the chemical symbol Pb?', 'difficulty' => 2, 'weight' => 291, 'alternatives' => [
                    ['id' => '788126f5-56ff-5dcf-935a-36429f08ef62', 'description' => 'Lead', 'correct_answer' => true],
                    ['id' => 'd73c1f72-0d31-5f58-8be9-5c0835e5ee76', 'description' => 'Tin', 'correct_answer' => false],
                    ['id' => '20b8ad10-554c-5f44-8af8-176549862c62', 'description' => 'Iron', 'correct_answer' => false],
                    ['id' => '591d8016-0676-50a5-b848-d0a99798c511', 'description' => 'Mercury', 'correct_answer' => false],
                    ['id' => 'a4b06088-6b26-5119-926f-4c8eacf9e219', 'description' => 'Copper', 'correct_answer' => false]
                ]],
        ['id' => 'd5f829da-8984-584a-893b-edefc119521d', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which metal has the chemical symbol Sn?', 'difficulty' => 2, 'weight' => 285, 'alternatives' => [
                    ['id' => 'fc08fba2-10be-5467-9c97-eaf3c5b7de5c', 'description' => 'Mercury', 'correct_answer' => false],
                    ['id' => 'f2d2ddcd-c510-5c75-9d4e-de128d7150e8', 'description' => 'Tin', 'correct_answer' => true],
                    ['id' => '18c681df-6ea3-5003-8506-52ce6447476d', 'description' => 'Copper', 'correct_answer' => false],
                    ['id' => '22b55ae0-f6c9-53ed-b7ec-11b5aa85c450', 'description' => 'Iron', 'correct_answer' => false],
                    ['id' => 'bf9e8fae-d1a2-5f58-ba8e-2b422463465e', 'description' => 'Silver', 'correct_answer' => false]
                ]],
        ['id' => 'd8ee5be4-3087-516d-ad98-95dadcaa4cae', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which precious metal has the chemical symbol Au?', 'difficulty' => 2, 'weight' => 328, 'alternatives' => [
                    ['id' => '734e66a2-9847-570d-a4be-a3476aa9886c', 'description' => 'Gold', 'correct_answer' => true],
                    ['id' => '8e279162-551d-5e21-afe1-042dd1ac999f', 'description' => 'Tungsten', 'correct_answer' => false],
                    ['id' => '7c1f1253-3f43-59e8-988e-f9bcf6dba0c5', 'description' => 'Lead', 'correct_answer' => false],
                    ['id' => '29462910-4b2e-5381-bc23-42966a9650ae', 'description' => 'Silver', 'correct_answer' => false],
                    ['id' => '0a18ecc7-15e3-561c-bcbe-135107d59bf4', 'description' => 'Sodium', 'correct_answer' => false]
                ]],
        ['id' => '47651e9e-8c92-5adf-a432-de3e88349b5a', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which precious metal has the chemical symbol Ag?', 'difficulty' => 2, 'weight' => 382, 'alternatives' => [
                    ['id' => 'c2a89de7-89b4-5cd3-85d0-7cfd5c16bd1c', 'description' => 'Copper', 'correct_answer' => false],
                    ['id' => 'da5848df-e714-561a-aec6-417073fd8073', 'description' => 'Tin', 'correct_answer' => false],
                    ['id' => '6d8540a7-7c95-5656-b011-243072f6aa9d', 'description' => 'Silver', 'correct_answer' => true],
                    ['id' => '2356bee3-5285-57e4-85ac-1d51947e023b', 'description' => 'Gold', 'correct_answer' => false],
                    ['id' => '87cebdc3-a96c-5f9f-bae7-6324a16207d8', 'description' => 'Mercury', 'correct_answer' => false]
                ]],
        ['id' => '0345ce04-baec-50a0-9298-39cf64981235', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which charged boson mediates the charged weak interaction?', 'difficulty' => 2, 'weight' => 201, 'alternatives' => [
                    ['id' => '075cf6e0-7c51-5682-ae59-7aad022e6ea2', 'description' => 'Higgs boson', 'correct_answer' => false],
                    ['id' => '5e10441b-f4e2-51d9-9e0c-28cdf3690cb7', 'description' => 'Positron', 'correct_answer' => false],
                    ['id' => '1d3d2d6c-bc5c-53a9-b00b-a18e9f80dff9', 'description' => 'Z boson', 'correct_answer' => false],
                    ['id' => 'b66df596-ae2c-5f33-9dc7-a50a290abccb', 'description' => 'Graviton', 'correct_answer' => false],
                    ['id' => '616e2e79-7585-5d3a-b5f0-f0100ff78e72', 'description' => 'W boson', 'correct_answer' => true]
                ]],
        ['id' => '1c321f02-c3be-5cae-9536-dcef78521bbb', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which neutral lepton interacts primarily through the weak interaction?', 'difficulty' => 2, 'weight' => 262, 'alternatives' => [
                    ['id' => '545fe4fc-bd82-5ac7-89ea-cc2fc9d5cbad', 'description' => 'Higgs boson', 'correct_answer' => false],
                    ['id' => '183126b2-e958-5227-b1cf-da9302d0a29b', 'description' => 'W boson', 'correct_answer' => false],
                    ['id' => '2f84b899-b428-5341-9815-bd5c4817575e', 'description' => 'Muon', 'correct_answer' => false],
                    ['id' => '02d3919f-c42e-55ca-942f-b748e8f5396e', 'description' => 'Neutrino', 'correct_answer' => true],
                    ['id' => '428dbb05-702a-50c6-a6af-850f80abac08', 'description' => 'Gluon', 'correct_answer' => false]
                ]],
        ['id' => '2b5d90b6-c603-560d-aec5-756331d627d9', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which neutral boson mediates the neutral weak interaction?', 'difficulty' => 2, 'weight' => 279, 'alternatives' => [
                    ['id' => '12e0a732-0777-5077-8dbe-53579ff7495e', 'description' => 'Photon', 'correct_answer' => false],
                    ['id' => '9d645f2e-07b5-50fb-85a3-d360426dd1cc', 'description' => 'Gluon', 'correct_answer' => false],
                    ['id' => '94d0f1c6-96f0-56f0-951d-a855dbf4faa6', 'description' => 'Muon', 'correct_answer' => false],
                    ['id' => '1db4990a-005a-5f76-9740-f3ca7389b387', 'description' => 'Higgs boson', 'correct_answer' => false],
                    ['id' => '23dad630-c60c-5339-b12a-21fd46733973', 'description' => 'Z boson', 'correct_answer' => true]
                ]],
        ['id' => '60c350ce-0c60-5f0a-87be-6ea547f9b781', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which boson mediates the strong nuclear interaction?', 'difficulty' => 2, 'weight' => 334, 'alternatives' => [
                    ['id' => '7e589f8e-b5ee-5b10-9b6a-7f43dd1f78c8', 'description' => 'Graviton', 'correct_answer' => false],
                    ['id' => '419ea8dd-49fc-5a4e-9ded-81c9ed522691', 'description' => 'Muon', 'correct_answer' => false],
                    ['id' => 'e7765d55-69c7-5a49-b096-67bd8fe1717d', 'description' => 'Higgs boson', 'correct_answer' => false],
                    ['id' => '12f60b3d-d5f9-504a-815d-75395257471b', 'description' => 'Z boson', 'correct_answer' => false],
                    ['id' => '458844d8-f488-5fbb-9b74-a9b809ee181a', 'description' => 'Gluon', 'correct_answer' => true]
                ]],
        ['id' => '13b6f6f0-a5d2-594e-a843-791a15e68bd9', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'What hypothetical quantum particle is proposed as the carrier of gravity?', 'difficulty' => 2, 'weight' => 302, 'alternatives' => [
                    ['id' => '80c25c7e-0219-5f05-862a-a7c6c51dcf27', 'description' => 'Positron', 'correct_answer' => false],
                    ['id' => '943f886c-d955-5aa8-972d-db2094203a9c', 'description' => 'Graviton', 'correct_answer' => true],
                    ['id' => 'fdd59d52-5ea7-584e-9168-a13831b14e38', 'description' => 'Z boson', 'correct_answer' => false],
                    ['id' => '124e3b47-92a3-50a2-9ada-79c3154f83ff', 'description' => 'Muon', 'correct_answer' => false],
                    ['id' => 'a4b7f908-2255-5133-a307-87a4a4057454', 'description' => 'Gluon', 'correct_answer' => false]
                ]],
        ['id' => 'cd599a1b-b86c-524c-b9b0-d714c8267abc', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which particle is the electron\'s antimatter counterpart?', 'difficulty' => 2, 'weight' => 256, 'alternatives' => [
                    ['id' => 'd9dad9c2-c11d-578b-99f3-fbdff6413c8e', 'description' => 'Z boson', 'correct_answer' => false],
                    ['id' => '8611bc8a-9952-59f2-80d7-bd40be3dab36', 'description' => 'Higgs boson', 'correct_answer' => false],
                    ['id' => 'f02223f3-7109-54da-a7df-e10457e9f1d8', 'description' => 'Neutrino', 'correct_answer' => false],
                    ['id' => 'cb2f45bb-a7ad-528b-be54-60541d66e71f', 'description' => 'Muon', 'correct_answer' => false],
                    ['id' => '975a22ae-2aec-59de-8059-752ad60b0571', 'description' => 'Positron', 'correct_answer' => true]
                ]],
        ['id' => '2636565e-7266-5fda-a8c3-34409a30928f', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which charged lepton is heavier than an electron but lighter than a tau?', 'difficulty' => 2, 'weight' => 380, 'alternatives' => [
                    ['id' => '4d277032-2ecf-5062-bc42-4c5533e1ca48', 'description' => 'W boson', 'correct_answer' => false],
                    ['id' => '1ddd5e1d-57d2-586f-b8e0-66a4f2a329d0', 'description' => 'Positron', 'correct_answer' => false],
                    ['id' => 'd3a9cda6-d6da-5fe0-afbd-2ff32fd2d21a', 'description' => 'Gluon', 'correct_answer' => false],
                    ['id' => '68acaf03-120c-53bd-bc75-cc03dd3d6608', 'description' => 'Muon', 'correct_answer' => true],
                    ['id' => '9c2810b4-40e9-51c9-b4a8-067a6f3c6a11', 'description' => 'Graviton', 'correct_answer' => false]
                ]],
        ['id' => '148ac063-c91b-56d1-b708-8b1e29f768d9', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which massless boson is the quantum of the electromagnetic field?', 'difficulty' => 2, 'weight' => 351, 'alternatives' => [
                    ['id' => '822dfc76-4f7f-5020-acec-b8e73315d319', 'description' => 'Photon', 'correct_answer' => true],
                    ['id' => 'd392de63-ec34-5f47-829a-4762a9f9bf49', 'description' => 'Tau', 'correct_answer' => false],
                    ['id' => '2e099c0d-843c-5570-9ffa-6db8dd52b186', 'description' => 'Gluon', 'correct_answer' => false],
                    ['id' => '1bfef472-7187-5d4d-bdb6-d0dc0b5786cd', 'description' => 'Muon', 'correct_answer' => false],
                    ['id' => '3f4e73c5-93bf-5e9c-9f9f-09b8372524d6', 'description' => 'Graviton', 'correct_answer' => false]
                ]],
        ['id' => 'ee6ebc89-55b0-5cf6-b26e-1861b8bd89e7', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which process releases energy from organic molecules to produce ATP?', 'difficulty' => 2, 'weight' => 341, 'alternatives' => [
                    ['id' => '06f53579-6945-5a51-b292-974520bb7368', 'description' => 'Diffusion', 'correct_answer' => false],
                    ['id' => 'dec0a551-48b1-5cd7-ae76-cd45445593c2', 'description' => 'Mitosis', 'correct_answer' => false],
                    ['id' => '045b3402-d4e2-5443-a88a-1fefccc5ced4', 'description' => 'Cellular respiration', 'correct_answer' => true],
                    ['id' => 'c5a6158f-44ec-5582-be78-40f20bc25f6e', 'description' => 'DNA replication', 'correct_answer' => false],
                    ['id' => '43bb911c-baaf-5991-a774-8ec20cbd1910', 'description' => 'Transcription', 'correct_answer' => false]
                ]],
        ['id' => '1694ba38-85ef-5547-9def-775e6011d0a1', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which cell-division process produces two genetically similar daughter cells?', 'difficulty' => 2, 'weight' => 209, 'alternatives' => [
                    ['id' => 'deef5a42-3870-5a24-a38d-41a34da81716', 'description' => 'Meiosis', 'correct_answer' => false],
                    ['id' => '00125797-e42d-5e9c-82f0-d056b2cdd9d7', 'description' => 'DNA replication', 'correct_answer' => false],
                    ['id' => 'f434f11b-1fa2-5965-a62f-a3eda1fd77f1', 'description' => 'Mitosis', 'correct_answer' => true],
                    ['id' => '9682f7c6-3760-5848-b146-50c0a71fd3b1', 'description' => 'Photosynthesis', 'correct_answer' => false],
                    ['id' => '191d74c5-66c8-5de6-8126-b5374f1a39d1', 'description' => 'Osmosis', 'correct_answer' => false]
                ]],
        ['id' => '48bbe287-a5d4-5f04-a391-bd24e0fdd5e0', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which metabolic process generates energy without an electron transport chain?', 'difficulty' => 2, 'weight' => 313, 'alternatives' => [
                    ['id' => 'c36ba535-13cc-5961-8a7f-14afc60757ca', 'description' => 'Mitosis', 'correct_answer' => false],
                    ['id' => '0d9e5e1c-01b9-5825-8e7b-c96919adec55', 'description' => 'Photosynthesis', 'correct_answer' => false],
                    ['id' => '4e23dd7e-8b20-529c-9af8-353d31689a4c', 'description' => 'Translation', 'correct_answer' => false],
                    ['id' => '34f960e6-439a-52b7-b4b8-bd41f8bd8965', 'description' => 'Fermentation', 'correct_answer' => true],
                    ['id' => '75757e7c-55d3-5bf1-82f1-2e4a307ddf8a', 'description' => 'Transcription', 'correct_answer' => false]
                ]],
        ['id' => '6540784d-eea7-54f6-bacf-11d5c310b935', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which molecular process synthesizes RNA from a DNA template?', 'difficulty' => 2, 'weight' => 219, 'alternatives' => [
                    ['id' => '2b172f95-529f-5af3-88f4-fdd0a8e1ad75', 'description' => 'Translation', 'correct_answer' => false],
                    ['id' => 'bb206750-4795-5044-94b8-ceb1051644a4', 'description' => 'Osmosis', 'correct_answer' => false],
                    ['id' => '3336542d-4f94-50e1-8db9-b5dae1572bd3', 'description' => 'Transcription', 'correct_answer' => true],
                    ['id' => 'aa49ecba-e217-597e-8ab4-a394e6c5e0ad', 'description' => 'Mitosis', 'correct_answer' => false],
                    ['id' => '7b924462-9aa3-51a1-adf9-a8b6eb44b15a', 'description' => 'Photosynthesis', 'correct_answer' => false]
                ]],
        ['id' => '1848d295-a90b-51bf-99da-d83c5a3cc680', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which process converts light energy into chemical energy in plants?', 'difficulty' => 2, 'weight' => 344, 'alternatives' => [
                    ['id' => '46a7594c-2084-58ce-b76c-3999ed6d39b3', 'description' => 'Mitosis', 'correct_answer' => false],
                    ['id' => '7b1c330a-c98b-512c-ab1c-b4ae760bb032', 'description' => 'Diffusion', 'correct_answer' => false],
                    ['id' => 'cc2159dc-4fd2-5193-9a57-d859b79948bc', 'description' => 'Cellular respiration', 'correct_answer' => false],
                    ['id' => '21e1b34b-4e33-5b67-b27f-d9c1a84feeb5', 'description' => 'Photosynthesis', 'correct_answer' => true],
                    ['id' => '6e783ded-6dce-5800-938a-61e4e4ebc1b6', 'description' => 'Translation', 'correct_answer' => false]
                ]],
        ['id' => 'edab05e2-fe1c-5ae4-9127-85f9a14f9ba6', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which process moves particles from higher to lower concentration?', 'difficulty' => 2, 'weight' => 370, 'alternatives' => [
                    ['id' => '4b937461-41b0-5a33-a758-ac093c5f505f', 'description' => 'Diffusion', 'correct_answer' => true],
                    ['id' => '63c9c9b7-bdb5-549b-885c-130b67924b17', 'description' => 'Transcription', 'correct_answer' => false],
                    ['id' => '2a87d9db-c298-5e1e-a034-89e87be7df56', 'description' => 'Osmosis', 'correct_answer' => false],
                    ['id' => 'b66cd090-ad60-578f-af4d-56e544186606', 'description' => 'Translation', 'correct_answer' => false],
                    ['id' => '0061299b-87d4-55fe-8977-43961dca917d', 'description' => 'Mitosis', 'correct_answer' => false]
                ]],
        ['id' => '9a17df7e-accd-548a-a1e5-b2bd3ccf380d', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which cell-division process produces haploid gametes or spores?', 'difficulty' => 2, 'weight' => 298, 'alternatives' => [
                    ['id' => 'f7e3b3ad-6c0a-5161-a001-91f072483a46', 'description' => 'Meiosis', 'correct_answer' => true],
                    ['id' => '7d79775c-7975-5612-9a84-e15633e2440e', 'description' => 'Osmosis', 'correct_answer' => false],
                    ['id' => '57b2a00e-e819-5df3-8041-a006d7606847', 'description' => 'Diffusion', 'correct_answer' => false],
                    ['id' => 'ac75e82b-1cb6-5d47-b3e5-867cbbd61d62', 'description' => 'Photosynthesis', 'correct_answer' => false],
                    ['id' => '9a633f1e-e479-5b29-bbe1-b361d22c8220', 'description' => 'Cellular respiration', 'correct_answer' => false]
                ]],
        ['id' => '45afe17d-398e-5734-9cde-a7fade1eea6e', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which process copies a cell\'s DNA before division?', 'difficulty' => 2, 'weight' => 264, 'alternatives' => [
                    ['id' => 'c236ac7b-afa8-5d7a-8be1-3e59a31d2a89', 'description' => 'Mitosis', 'correct_answer' => false],
                    ['id' => '60495faf-c520-5ffd-a652-8014ef9695f4', 'description' => 'DNA replication', 'correct_answer' => true],
                    ['id' => 'a57b9e94-d5d4-5acf-9eb2-759d30b803cb', 'description' => 'Translation', 'correct_answer' => false],
                    ['id' => '03a188c9-1586-5e84-a72e-85d6b5f13ad3', 'description' => 'Photosynthesis', 'correct_answer' => false],
                    ['id' => 'f7d16dec-91e3-5771-96f4-94d646cb501b', 'description' => 'Transcription', 'correct_answer' => false]
                ]],
        ['id' => '83449f28-ba2c-5ea7-954e-8e2e4b06bce9', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which concept describes gravitational balance between Earth\'s crust and mantle?', 'difficulty' => 2, 'weight' => 378, 'alternatives' => [
                    ['id' => '77e02e53-bf92-5b17-8611-e49f5a65129c', 'description' => 'Metamorphism', 'correct_answer' => false],
                    ['id' => '98873907-013a-5136-9a20-273631cd959f', 'description' => 'Continental drift', 'correct_answer' => false],
                    ['id' => '9d5cb8b5-30dd-5670-bef8-e7fc03c671a7', 'description' => 'Seafloor spreading', 'correct_answer' => false],
                    ['id' => 'b2d0640e-46ca-5030-bc46-4065fd68f98c', 'description' => 'Subduction', 'correct_answer' => false],
                    ['id' => '21f81e97-5a7c-5815-ba38-a07bceeaa909', 'description' => 'Isostasy', 'correct_answer' => true]
                ]],
        ['id' => '13131f32-70e0-5f6b-b86b-3e87f1afdc83', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which theory explains the movement of Earth\'s lithospheric plates?', 'difficulty' => 2, 'weight' => 249, 'alternatives' => [
                    ['id' => '657385d2-6652-5e43-ab95-736960c86f31', 'description' => 'Continental drift', 'correct_answer' => false],
                    ['id' => '17757737-8bed-5143-89e4-c03df00783b8', 'description' => 'Convection', 'correct_answer' => false],
                    ['id' => 'f026d567-1ce4-5983-9c30-526a0cc7d80f', 'description' => 'Isostasy', 'correct_answer' => false],
                    ['id' => 'a8e17f7b-bc07-5cf3-b12a-f7072c391166', 'description' => 'Erosion', 'correct_answer' => false],
                    ['id' => '0566b327-2ae5-5172-9002-df75d85cf5e5', 'description' => 'Plate tectonics', 'correct_answer' => true]
                ]],
        ['id' => 'de9fa348-d378-586c-8f6c-8ce6c1f3539a', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which hypothesis proposed that continents move over geological time and were once joined?', 'difficulty' => 2, 'weight' => 248, 'alternatives' => [
                    ['id' => 'ddb52aba-f89a-5e53-bef7-767d671fe55c', 'description' => 'Continental drift', 'correct_answer' => true],
                    ['id' => '51b5d07d-2fae-52d1-90aa-203305450945', 'description' => 'Seafloor spreading', 'correct_answer' => false],
                    ['id' => '8d3ffcd8-754b-530f-a740-f7e9e748a876', 'description' => 'Weathering', 'correct_answer' => false],
                    ['id' => '44f4f762-cbb3-5db4-9b39-7990f5f0e320', 'description' => 'Lithification', 'correct_answer' => false],
                    ['id' => '10218d49-c091-5d6c-b539-d1fe2f02b2e3', 'description' => 'Metamorphism', 'correct_answer' => false]
                ]],
        ['id' => '24ba4f04-8016-55e7-92f6-321ad6c003e6', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which process changes rock through heat, pressure, and chemically active fluids?', 'difficulty' => 2, 'weight' => 387, 'alternatives' => [
                    ['id' => '991bfc99-703c-5391-97a9-55e8f0ab176b', 'description' => 'Lithification', 'correct_answer' => false],
                    ['id' => 'eb4a2b82-baad-52d8-873e-ef29a643dc51', 'description' => 'Metamorphism', 'correct_answer' => true],
                    ['id' => '746e5da4-a54b-5efa-b914-461b861c5e87', 'description' => 'Subduction', 'correct_answer' => false],
                    ['id' => '2ef856ad-3242-50ea-afba-765790a7795a', 'description' => 'Erosion', 'correct_answer' => false],
                    ['id' => '45caec81-0b7b-5d82-81b5-daaa2aa36312', 'description' => 'Plate tectonics', 'correct_answer' => false]
                ]],
        ['id' => '3d0eccaa-00e7-5401-a618-07579718cbaa', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which heat-transfer process involves bulk movement of fluids?', 'difficulty' => 2, 'weight' => 355, 'alternatives' => [
                    ['id' => 'ecd54234-a661-5308-aeee-ae32a478c89d', 'description' => 'Subduction', 'correct_answer' => false],
                    ['id' => '4c2a6037-36e9-5929-86d3-15d02a9926dc', 'description' => 'Seafloor spreading', 'correct_answer' => false],
                    ['id' => 'ed13304c-9a56-5537-a892-e26092bd12e8', 'description' => 'Convection', 'correct_answer' => true],
                    ['id' => '0c30061a-c85d-5472-a53f-c7c990618e34', 'description' => 'Plate tectonics', 'correct_answer' => false],
                    ['id' => 'afc3b1d4-6bf2-59aa-8986-9c66efe7b7e3', 'description' => 'Weathering', 'correct_answer' => false]
                ]],
        ['id' => '579ad345-66fe-59fb-b4c1-80840e904a93', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which process transports weathered material by water, wind, ice, or gravity?', 'difficulty' => 2, 'weight' => 394, 'alternatives' => [
                    ['id' => 'bf1f72d1-7b72-5634-9ad5-e85478a1ba8b', 'description' => 'Erosion', 'correct_answer' => true],
                    ['id' => 'e1628af3-2239-5d8e-9eef-c690e3db9fa4', 'description' => 'Subduction', 'correct_answer' => false],
                    ['id' => '72a88265-fe88-5934-b5cc-e4e64917b2e8', 'description' => 'Weathering', 'correct_answer' => false],
                    ['id' => '88d2df9a-7a7e-5892-850e-aff8adb01e03', 'description' => 'Convection', 'correct_answer' => false],
                    ['id' => 'e61421c9-174c-588a-a412-db9a3be0393a', 'description' => 'Plate tectonics', 'correct_answer' => false]
                ]],
        ['id' => '2df53bac-473d-57b5-aa26-bbd63f9c7d13', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which process creates new oceanic crust at mid-ocean ridges?', 'difficulty' => 2, 'weight' => 244, 'alternatives' => [
                    ['id' => 'c5a1a621-1cf6-5a9d-a08b-5e59aac140bd', 'description' => 'Erosion', 'correct_answer' => false],
                    ['id' => 'b565db82-0811-5b1e-807a-450a6f48f1b1', 'description' => 'Weathering', 'correct_answer' => false],
                    ['id' => '947573c4-5001-57a4-b2f2-d5efbe04e02c', 'description' => 'Seafloor spreading', 'correct_answer' => true],
                    ['id' => 'a76cfab9-c6c1-5c3d-87bb-ec87be7804c1', 'description' => 'Lithification', 'correct_answer' => false],
                    ['id' => 'a7995a2b-8a3f-5d6b-9dbc-f9b881bb5da2', 'description' => 'Plate tectonics', 'correct_answer' => false]
                ]],
        ['id' => 'f4e48005-b568-5aa2-adf8-ae519da6574d', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which process breaks down rocks at or near Earth\'s surface?', 'difficulty' => 2, 'weight' => 236, 'alternatives' => [
                    ['id' => '3720346d-7ee3-5b11-b525-0e445a502fa6', 'description' => 'Isostasy', 'correct_answer' => false],
                    ['id' => '2cae1c40-766a-54d8-8ce3-2d2f95c2347f', 'description' => 'Seafloor spreading', 'correct_answer' => false],
                    ['id' => 'f0045c5c-cb5e-53f9-b588-e5a96d2cd0b5', 'description' => 'Metamorphism', 'correct_answer' => false],
                    ['id' => '37074965-f88f-57c9-bb1e-9acd71ffd45d', 'description' => 'Erosion', 'correct_answer' => false],
                    ['id' => 'f43288b4-1439-5471-9177-6f61e500d0a1', 'description' => 'Weathering', 'correct_answer' => true]
                ]],
        ['id' => '4194f2e3-53f7-5640-a542-20f4ba40d4af', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'What region around an orbiting body marks where its gravity dominates over a larger body\'s tidal influence?', 'difficulty' => 3, 'weight' => 567, 'alternatives' => [
                    ['id' => '7dda77b2-3d91-5891-85bb-13d3b079ea02', 'description' => 'Roche limit', 'correct_answer' => false],
                    ['id' => 'f02dcb91-d58c-5a8f-a876-f58b409806d1', 'description' => 'Tolman–Oppenheimer–Volkoff limit', 'correct_answer' => false],
                    ['id' => 'd5c92222-22ae-54bc-ad60-31e51abb53c1', 'description' => 'Schwarzschild radius', 'correct_answer' => false],
                    ['id' => '88038e47-1207-5f13-ab09-a3c7da8e9fd6', 'description' => 'Hill sphere', 'correct_answer' => true],
                    ['id' => '39b11bce-013a-55de-a47b-0bdafcc598ad', 'description' => 'Chandrasekhar limit', 'correct_answer' => false]
                ]],
        ['id' => 'ef4f0434-0bc5-5599-984a-5e63a5d4cc72', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'What approximate mass limit applies to a stable white dwarf supported by electron degeneracy pressure?', 'difficulty' => 3, 'weight' => 517, 'alternatives' => [
                    ['id' => 'a4dc6616-102a-57f3-bb33-24cf39126d59', 'description' => 'Chandrasekhar limit', 'correct_answer' => true],
                    ['id' => 'c08c19b0-b2e2-5fbb-89c6-06191fa882cd', 'description' => 'Hubble radius', 'correct_answer' => false],
                    ['id' => '3753ed06-24e7-5a42-b41a-321c2996e8f5', 'description' => 'Jeans length', 'correct_answer' => false],
                    ['id' => 'b029b0fd-9f4d-509b-aef8-f59a45850f8b', 'description' => 'Hill sphere', 'correct_answer' => false],
                    ['id' => '2a36edb1-5c9c-5acf-bf9a-df6967730f9e', 'description' => 'Sphere of influence', 'correct_answer' => false]
                ]],
        ['id' => '54f59aaf-6e8d-5577-841f-a1c8afb2bb73', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'What cosmological distance is defined by the speed of light divided by the Hubble parameter?', 'difficulty' => 3, 'weight' => 426, 'alternatives' => [
                    ['id' => 'd44b53dc-0b3f-5675-b849-deadd0d696c8', 'description' => 'Schwarzschild radius', 'correct_answer' => false],
                    ['id' => 'a875e836-7312-54ab-bf16-1d3ad15aa5e0', 'description' => 'Bondi radius', 'correct_answer' => false],
                    ['id' => 'c88ed21f-c09b-55aa-be4a-77da5a5743f5', 'description' => 'Hill sphere', 'correct_answer' => false],
                    ['id' => 'f72873b1-8c44-5f1f-992d-e95fdd5f44e9', 'description' => 'Hubble radius', 'correct_answer' => true],
                    ['id' => '7621efd8-4cfb-5d85-9734-13aebe9ccc7d', 'description' => 'Tolman–Oppenheimer–Volkoff limit', 'correct_answer' => false]
                ]],
        ['id' => '4157d11f-280b-5a21-8e1b-466f426bb0ac', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'What minimum orbital distance can cause a gravitationally bound satellite to break apart due to tidal forces?', 'difficulty' => 3, 'weight' => 419, 'alternatives' => [
                    ['id' => '50c9e410-1372-5bc7-9e2a-c9461bca851b', 'description' => 'Roche limit', 'correct_answer' => true],
                    ['id' => '58b1e988-519b-5a9d-b81f-8b868ec1fe84', 'description' => 'Schwarzschild radius', 'correct_answer' => false],
                    ['id' => '23bd21e6-73c4-5385-849b-8b347b7fef10', 'description' => 'Bondi radius', 'correct_answer' => false],
                    ['id' => 'f2340561-1e3f-5ef3-816b-5dfa9ffa1a39', 'description' => 'Hubble radius', 'correct_answer' => false],
                    ['id' => '76494203-ea29-560e-8fbb-827aa146f496', 'description' => 'Chandrasekhar limit', 'correct_answer' => false]
                ]],
        ['id' => 'df513668-e315-5a5a-98be-a25e5da9ae2b', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'What theoretical upper mass limit applies to a neutron star in hydrostatic equilibrium?', 'difficulty' => 3, 'weight' => 459, 'alternatives' => [
                    ['id' => 'ad11bbd6-d827-5d83-8a49-bb90c1ea3cf0', 'description' => 'Hubble radius', 'correct_answer' => false],
                    ['id' => 'aa353f96-1e21-53de-bab1-4f2aa709b0cb', 'description' => 'Jeans length', 'correct_answer' => false],
                    ['id' => '567f502f-6b00-5dc3-a2e1-cacf5621bef3', 'description' => 'Tolman–Oppenheimer–Volkoff limit', 'correct_answer' => true],
                    ['id' => '81622eb6-dd3f-5d07-a4fc-49cbbe3c1663', 'description' => 'Hill sphere', 'correct_answer' => false],
                    ['id' => '10c3278a-5472-5dba-9f5e-29be20a503e5', 'description' => 'Sphere of influence', 'correct_answer' => false]
                ]],
        ['id' => '0d3a849c-4477-5262-9469-5ff70b838641', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'What location in a two-body system allows a small object to remain fixed relative to the larger bodies?', 'difficulty' => 3, 'weight' => 415, 'alternatives' => [
                    ['id' => '85138961-e0d7-5875-a931-6812c474921e', 'description' => 'Hubble radius', 'correct_answer' => false],
                    ['id' => '509f79e8-98d3-560f-b3d4-25245b14e3a9', 'description' => 'Bondi radius', 'correct_answer' => false],
                    ['id' => '30779e07-677b-51d5-a673-3536ebbef9ca', 'description' => 'Schwarzschild radius', 'correct_answer' => false],
                    ['id' => '2d24a99f-d4b3-5642-af49-6c6a4956001d', 'description' => 'Lagrange point', 'correct_answer' => true],
                    ['id' => '60eccdb4-ed1e-59c5-9554-6468d548e88f', 'description' => 'Chandrasekhar limit', 'correct_answer' => false]
                ]],
        ['id' => 'fe7306d5-d2c6-5447-955c-bcd0aeec3439', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'What approximate region is used in patched-conic orbital analysis to identify the dominant gravitating body?', 'difficulty' => 3, 'weight' => 568, 'alternatives' => [
                    ['id' => '673b771e-8907-540f-a914-e27ab494df93', 'description' => 'Bondi radius', 'correct_answer' => false],
                    ['id' => 'c3e55500-ae10-574f-9818-ec6fc2814b53', 'description' => 'Roche limit', 'correct_answer' => false],
                    ['id' => '08c5ba99-1388-59a8-8ce3-1cb6d7801a99', 'description' => 'Tolman–Oppenheimer–Volkoff limit', 'correct_answer' => false],
                    ['id' => '9c44e964-9c14-5dbd-b2e6-da66d6bff3a8', 'description' => 'Hubble radius', 'correct_answer' => false],
                    ['id' => 'c4bbf641-337d-502c-9111-d35c07c280dd', 'description' => 'Sphere of influence', 'correct_answer' => true]
                ]],
        ['id' => '86ee33e5-b329-5229-a05e-4a5755c412d6', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'What characteristic radius describes the region where a gravitating object can capture surrounding gas?', 'difficulty' => 3, 'weight' => 499, 'alternatives' => [
                    ['id' => '8576d56d-6945-56fb-be6b-46b7b3de888d', 'description' => 'Bondi radius', 'correct_answer' => true],
                    ['id' => '33a269e0-255b-55b9-ad9f-f3ab15d97f3e', 'description' => 'Hubble radius', 'correct_answer' => false],
                    ['id' => '0b8a8f5c-db71-594c-b75a-3adc0b9a638a', 'description' => 'Sphere of influence', 'correct_answer' => false],
                    ['id' => 'e3770709-45a1-5e5c-9281-b5fb2a43a49f', 'description' => 'Schwarzschild radius', 'correct_answer' => false],
                    ['id' => '25c42171-0950-526b-9ca3-8ee250471fc1', 'description' => 'Tolman–Oppenheimer–Volkoff limit', 'correct_answer' => false]
                ]],
        ['id' => 'd99d0d45-fab6-55c4-b434-f98cbf225661', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which QCD property prevents isolated color-charged particles from being observed?', 'difficulty' => 3, 'weight' => 454, 'alternatives' => [
                    ['id' => 'd677ca46-6a65-5a95-bf19-7de229ed5e33', 'description' => 'Higgs mechanism', 'correct_answer' => false],
                    ['id' => '95e5c1f5-c3b2-5b4d-883f-d353e768d5d3', 'description' => 'Chiral symmetry breaking', 'correct_answer' => false],
                    ['id' => '8af6db38-5e24-5689-ae23-6fdef92dd9da', 'description' => 'Confinement', 'correct_answer' => true],
                    ['id' => 'f05b4199-1186-54a3-a53c-ba2a4bda1d18', 'description' => 'Gauge invariance', 'correct_answer' => false],
                    ['id' => 'b7a9421f-c7d9-5bc0-8a98-f4be39b9f794', 'description' => 'Asymptotic freedom', 'correct_answer' => false]
                ]],
        ['id' => '757ad315-f90f-50a2-acf2-0bfb691400c1', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which process occurs when a system\'s ground state has less symmetry than its governing equations?', 'difficulty' => 3, 'weight' => 516, 'alternatives' => [
                    ['id' => '92cf1580-a3cc-53ac-9464-a9f65e9759d5', 'description' => 'Spontaneous symmetry breaking', 'correct_answer' => true],
                    ['id' => 'f9c0e31b-b864-5d88-ae04-35a5e7d7cc87', 'description' => 'Confinement', 'correct_answer' => false],
                    ['id' => '647c83d5-f1a2-5ff5-b3ae-3a9ab6ad6557', 'description' => 'Electroweak unification', 'correct_answer' => false],
                    ['id' => 'be34e729-8411-5b57-8e3c-4bb29005a933', 'description' => 'Anomaly cancellation', 'correct_answer' => false],
                    ['id' => '8580838d-61e6-5e8d-b953-98626f4e09bb', 'description' => 'Renormalization', 'correct_answer' => false]
                ]],
        ['id' => '51e1ee46-ab4f-510d-bcee-d4b4e068d558', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which mathematical procedure removes infinities from quantities in quantum field theory?', 'difficulty' => 3, 'weight' => 424, 'alternatives' => [
                    ['id' => 'ff10e93b-e617-53de-a6b2-3a7b2251a504', 'description' => 'Anomaly cancellation', 'correct_answer' => false],
                    ['id' => '8e39aea8-9210-51d0-8cae-a069021346a7', 'description' => 'Renormalization', 'correct_answer' => true],
                    ['id' => '6b284f8d-19f0-5279-b4ea-1c76369a20b3', 'description' => 'Asymptotic freedom', 'correct_answer' => false],
                    ['id' => '5623a27b-a762-5f9f-9ce7-983e365a9661', 'description' => 'Effective field theory', 'correct_answer' => false],
                    ['id' => '566d0952-3ec5-5466-9ab4-700ed383ebdd', 'description' => 'Electroweak unification', 'correct_answer' => false]
                ]],
        ['id' => '9011d1ec-8641-503f-a985-13000e78422f', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which property makes the strong interaction weaker at very high energies?', 'difficulty' => 3, 'weight' => 501, 'alternatives' => [
                    ['id' => '43023aa1-ab75-5305-a39b-8cb1e02c1af2', 'description' => 'Confinement', 'correct_answer' => false],
                    ['id' => '9f68d799-c1c6-5f82-ae4c-2b19ab7f85c0', 'description' => 'Gauge invariance', 'correct_answer' => false],
                    ['id' => 'a86ab518-7f2c-5762-8d97-0d4ece4df96d', 'description' => 'Chiral symmetry breaking', 'correct_answer' => false],
                    ['id' => 'ff41cae5-ce8c-5202-a3a6-5481a757a875', 'description' => 'Asymptotic freedom', 'correct_answer' => true],
                    ['id' => '1f55c7c3-8454-503e-95d0-f45d350936de', 'description' => 'Spontaneous symmetry breaking', 'correct_answer' => false]
                ]],
        ['id' => 'cb307c92-bfd1-5c60-af24-ad0e154b7a93', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which principle states that certain transformations of fields leave observable physics unchanged?', 'difficulty' => 3, 'weight' => 527, 'alternatives' => [
                    ['id' => '851b7cb0-6fc6-5636-b3d0-dc4ab15fb780', 'description' => 'Confinement', 'correct_answer' => false],
                    ['id' => '60e3b4cd-6d33-5817-b8be-5f6c96dba964', 'description' => 'Gauge invariance', 'correct_answer' => true],
                    ['id' => '61ffb087-4863-52e4-b992-8a2275db005b', 'description' => 'Higgs mechanism', 'correct_answer' => false],
                    ['id' => 'c9f24e6c-0375-5445-b86f-3a764755ae84', 'description' => 'Chiral symmetry breaking', 'correct_answer' => false],
                    ['id' => 'dae6f292-e99e-5833-ba86-294fa01a9849', 'description' => 'Effective field theory', 'correct_answer' => false]
                ]],
        ['id' => '0b73051b-b839-54d0-b4a1-f2c5ebf5d4f3', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which mechanism explains how elementary particles acquire mass through interaction with a field?', 'difficulty' => 3, 'weight' => 403, 'alternatives' => [
                    ['id' => '2810f673-9aff-5c27-a1be-36591c10008c', 'description' => 'Asymptotic freedom', 'correct_answer' => false],
                    ['id' => '79269e55-b05b-56d6-a160-ca4e2756a0c2', 'description' => 'Chiral symmetry breaking', 'correct_answer' => false],
                    ['id' => '40f0b876-b477-5345-8f1e-7d677c5c1d73', 'description' => 'Spontaneous symmetry breaking', 'correct_answer' => false],
                    ['id' => 'e1846bb6-02f2-5ec6-9ca9-5eb7bc6f3156', 'description' => 'Gauge invariance', 'correct_answer' => false],
                    ['id' => '6e9b0c02-378b-54e5-8971-ea9ba27afccd', 'description' => 'Higgs mechanism', 'correct_answer' => true]
                ]],
        ['id' => '2615f196-4a67-552f-84bf-7ce1e1a84525', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which consistency requirement ensures certain quantum gauge theories remain mathematically well-defined?', 'difficulty' => 3, 'weight' => 569, 'alternatives' => [
                    ['id' => '351041e5-f3e5-58d8-865d-fc09e7b591d6', 'description' => 'Higgs mechanism', 'correct_answer' => false],
                    ['id' => '3823d29e-1b5d-5e03-a535-27b40c521940', 'description' => 'Confinement', 'correct_answer' => false],
                    ['id' => '983952fd-fb91-5973-9a30-05490950ba37', 'description' => 'Gauge invariance', 'correct_answer' => false],
                    ['id' => 'c231dbec-588c-5f24-a18d-ed4a086c8041', 'description' => 'Electroweak unification', 'correct_answer' => false],
                    ['id' => '268e84a3-437d-5891-be53-d488f6b98e46', 'description' => 'Anomaly cancellation', 'correct_answer' => true]
                ]],
        ['id' => '20398227-a122-58fd-af03-4e7389b3b9e5', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which framework describes low-energy physics without requiring a complete theory at all energy scales?', 'difficulty' => 3, 'weight' => 543, 'alternatives' => [
                    ['id' => 'a288ea10-86a4-56af-a741-b3489c5dcfaa', 'description' => 'Effective field theory', 'correct_answer' => true],
                    ['id' => 'f8c9e727-9904-5fa8-b82b-ea1beaf93482', 'description' => 'Confinement', 'correct_answer' => false],
                    ['id' => '3daad2f7-8ad4-58ec-b9de-c71b6e03eb7c', 'description' => 'Renormalization', 'correct_answer' => false],
                    ['id' => '1bf71990-0ad7-56bf-8afe-6e531a2add83', 'description' => 'Electroweak unification', 'correct_answer' => false],
                    ['id' => 'a422a74c-00d3-59c7-b079-f50d1ed7e727', 'description' => 'Asymptotic freedom', 'correct_answer' => false]
                ]],
        ['id' => '9f439b06-8198-54ef-918b-8995e70a5ad2', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which gene family encodes transcription factors involved in embryonic development and cell fate?', 'difficulty' => 3, 'weight' => 508, 'alternatives' => [
                    ['id' => '1c224f99-ab41-5e1e-a070-360106bff104', 'description' => 'Notch signaling', 'correct_answer' => false],
                    ['id' => '9282befc-0688-56f4-83b8-8d791d973a62', 'description' => 'Sox genes', 'correct_answer' => true],
                    ['id' => '9f921b48-5070-54ef-afd7-6599796d26a4', 'description' => 'Hox genes', 'correct_answer' => false],
                    ['id' => '14426fa4-7bc0-5e18-9729-8c5e32d0625b', 'description' => 'FGF signaling', 'correct_answer' => false],
                    ['id' => 'b5156f7b-8ee9-5c6e-bb2f-ede4087b1981', 'description' => 'Wnt signaling', 'correct_answer' => false]
                ]],
        ['id' => 'c7f97d9c-5c86-5b2d-b579-a17dd0ae732b', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which conserved DNA sequence encodes a DNA-binding domain found in many developmental regulators?', 'difficulty' => 3, 'weight' => 441, 'alternatives' => [
                    ['id' => 'd5d88430-4345-5469-9def-058ead36680a', 'description' => 'Retinoic acid signaling', 'correct_answer' => false],
                    ['id' => 'afe33828-db84-54d1-8fec-aef6b1e28639', 'description' => 'FGF signaling', 'correct_answer' => false],
                    ['id' => 'b57e9294-e29a-59e5-b08a-470f1d0aaa55', 'description' => 'Notch signaling', 'correct_answer' => false],
                    ['id' => '4bbdf704-7ec4-5cd3-93bf-106f2a0a1ce2', 'description' => 'Hox genes', 'correct_answer' => false],
                    ['id' => 'cee04c6b-f528-5ffc-8c1b-76987e9279c1', 'description' => 'Homeobox', 'correct_answer' => true]
                ]],
        ['id' => '2bee6183-08b1-5e51-9411-07162151ac96', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which developmental gene family helps specify the anterior-posterior body plan in animals?', 'difficulty' => 3, 'weight' => 528, 'alternatives' => [
                    ['id' => '370acdb7-bb21-59ce-bd13-49f082cef62e', 'description' => 'FGF signaling', 'correct_answer' => false],
                    ['id' => '6d6b7123-fabc-59cd-a0a1-8f54ae611016', 'description' => 'Pax genes', 'correct_answer' => false],
                    ['id' => 'bb40586d-385a-5931-9fd6-c99b5fb21e84', 'description' => 'Retinoic acid signaling', 'correct_answer' => false],
                    ['id' => 'f9a381e2-4041-5f3d-9079-9dfeeb040905', 'description' => 'Sox genes', 'correct_answer' => false],
                    ['id' => '1c0f867c-ee0b-5342-b877-d8236fd550d9', 'description' => 'Hox genes', 'correct_answer' => true]
                ]],
        ['id' => 'be1db786-e27e-5222-ac8b-39e1d71f87dc', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which conserved pathway regulates embryonic patterning, cell proliferation, and tissue homeostasis?', 'difficulty' => 3, 'weight' => 594, 'alternatives' => [
                    ['id' => '1013821d-e406-5b14-8985-25098d9acf42', 'description' => 'Pax genes', 'correct_answer' => false],
                    ['id' => '459b6f4e-00d3-5d14-9b57-d3d210a69068', 'description' => 'Wnt signaling', 'correct_answer' => true],
                    ['id' => '5490734b-5e78-5dbc-83d0-d8e9b9e95631', 'description' => 'Sox genes', 'correct_answer' => false],
                    ['id' => 'c25e5b02-26d5-5b26-85d8-39478f0f6e41', 'description' => 'Homeobox', 'correct_answer' => false],
                    ['id' => 'f7fdd5e0-681f-59ff-b6f2-0d3d18332092', 'description' => 'BMP signaling', 'correct_answer' => false]
                ]],
        ['id' => 'd43128d8-df80-5526-a384-6fe2f4dadb79', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which gene family encodes transcription factors important in eye and organ development?', 'difficulty' => 3, 'weight' => 565, 'alternatives' => [
                    ['id' => 'a3de3cf3-82fd-5d94-bfae-7edf58857784', 'description' => 'Wnt signaling', 'correct_answer' => false],
                    ['id' => '23c625e2-8dee-5b51-8a87-dee00c327ea5', 'description' => 'Retinoic acid signaling', 'correct_answer' => false],
                    ['id' => '254442b9-f9b1-5b7d-924d-12da6d264797', 'description' => 'Pax genes', 'correct_answer' => true],
                    ['id' => 'a15c42b6-6b15-5f4d-b557-92596b92473e', 'description' => 'Hox genes', 'correct_answer' => false],
                    ['id' => '139be948-72b0-5579-bd27-b1449284aa28', 'description' => 'FGF signaling', 'correct_answer' => false]
                ]],
        ['id' => 'd2c34b8b-ce92-5b7c-8b7e-9defbdfe8376', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which developmental pathway is named after a gene first identified in fruit flies?', 'difficulty' => 3, 'weight' => 598, 'alternatives' => [
                    ['id' => 'c9ea9956-42c8-5602-b643-48eaed556518', 'description' => 'Wnt signaling', 'correct_answer' => false],
                    ['id' => 'f6b77f3b-6224-58b6-ac70-aeba32388cbe', 'description' => 'Hedgehog signaling', 'correct_answer' => true],
                    ['id' => '31a73b53-440e-5e4e-91d8-81e6d01bd831', 'description' => 'Sox genes', 'correct_answer' => false],
                    ['id' => '77f14f78-a2e6-5ac2-a646-913163014661', 'description' => 'Hox genes', 'correct_answer' => false],
                    ['id' => '6732e2eb-576f-5323-bbc0-af11c801f5ea', 'description' => 'Homeobox', 'correct_answer' => false]
                ]],
        ['id' => 'cabfe726-e9e3-55f8-b26e-a930a5365f8e', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which growth-factor pathway is important in development, wound healing, and angiogenesis?', 'difficulty' => 3, 'weight' => 566, 'alternatives' => [
                    ['id' => '2402b649-2081-55cf-bb3d-4fd38a066de5', 'description' => 'Homeobox', 'correct_answer' => false],
                    ['id' => '03e1a4a2-b724-5e6e-b524-cdc20895ef63', 'description' => 'Sox genes', 'correct_answer' => false],
                    ['id' => '9b2e6c68-cca0-523d-a925-30547c406b48', 'description' => 'Pax genes', 'correct_answer' => false],
                    ['id' => 'ff43f51f-62ad-5fba-ae85-51a0901f9a58', 'description' => 'FGF signaling', 'correct_answer' => true],
                    ['id' => '907db02d-da0d-597c-9050-b340c5807c6a', 'description' => 'Hox genes', 'correct_answer' => false]
                ]],
        ['id' => '3ba52dc4-ea59-553d-9a1d-d56de519bbf2', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which vitamin-A-derived signaling system helps regulate embryonic patterning?', 'difficulty' => 3, 'weight' => 583, 'alternatives' => [
                    ['id' => '32db882d-3353-5800-a532-32257e57d297', 'description' => 'Pax genes', 'correct_answer' => false],
                    ['id' => 'f2f11f94-b828-51ee-875c-b0922be0b45b', 'description' => 'Hedgehog signaling', 'correct_answer' => false],
                    ['id' => '6c396da0-35ad-5d85-a619-18a87e2b460b', 'description' => 'Retinoic acid signaling', 'correct_answer' => true],
                    ['id' => '796d502c-3c96-53d6-9c9d-005ef36d1bba', 'description' => 'BMP signaling', 'correct_answer' => false],
                    ['id' => '8c01cbb6-86f7-570d-9ee8-c1c3bca6b20c', 'description' => 'FGF signaling', 'correct_answer' => false]
                ]],
        ['id' => 'd16c0c38-76f8-5ba9-aecd-41a31fbc4479', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which evolutionary mechanism explains behavior that increases the reproductive success of genetic relatives?', 'difficulty' => 3, 'weight' => 565, 'alternatives' => [
                    ['id' => '5fd078d7-aa9a-5138-8899-5711933c1714', 'description' => 'Serial endosymbiosis theory', 'correct_answer' => false],
                    ['id' => 'd08ecab1-a468-5330-a165-a84ae17851bc', 'description' => 'Punctuated equilibrium', 'correct_answer' => false],
                    ['id' => '2536cbaf-c146-513f-aeb7-e638379d77b8', 'description' => 'Kin selection', 'correct_answer' => true],
                    ['id' => 'aabddb2b-577b-5072-aefb-cb5072fb9dac', 'description' => 'Neutral theory of molecular evolution', 'correct_answer' => false],
                    ['id' => '5ce7a63c-999c-59c9-af61-9b27c7769203', 'description' => 'Inclusive fitness', 'correct_answer' => false]
                ]],
        ['id' => '3b1f3e90-613a-5691-84b0-6b5bc1cd9da3', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which theory proposes that most molecular evolutionary changes are selectively neutral?', 'difficulty' => 3, 'weight' => 494, 'alternatives' => [
                    ['id' => 'fa82035e-ad06-536a-9a48-9b6850519ee5', 'description' => 'Neutral theory of molecular evolution', 'correct_answer' => true],
                    ['id' => '592858d0-82ed-590d-a715-5eabd74323b9', 'description' => 'Inclusive fitness', 'correct_answer' => false],
                    ['id' => 'a435a0fe-f6fe-562a-a798-72e04884084c', 'description' => 'Serial endosymbiosis theory', 'correct_answer' => false],
                    ['id' => '3898d76f-1499-5fcb-a7c6-cdfb7b7d665c', 'description' => 'Mullerian mimicry', 'correct_answer' => false],
                    ['id' => 'bbd09fc1-8176-5d7e-a2d9-2230215d1721', 'description' => 'Adaptive radiation', 'correct_answer' => false]
                ]],
        ['id' => '9516e22b-21b0-532e-b771-7daa05c9eb94', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which form of selection makes a phenotype\'s fitness depend on how common it is?', 'difficulty' => 3, 'weight' => 413, 'alternatives' => [
                    ['id' => 'f2ed783b-fe61-538d-a9a5-00ed613fad18', 'description' => 'Punctuated equilibrium', 'correct_answer' => false],
                    ['id' => '316304c0-6616-5916-a2ec-5cd240966434', 'description' => 'Frequency-dependent selection', 'correct_answer' => true],
                    ['id' => 'c1a1cfc2-81ae-5c65-a572-50663c89b155', 'description' => 'Endosymbiotic theory', 'correct_answer' => false],
                    ['id' => '992dd8ca-3c5b-562a-9e28-1ee1efc1b40e', 'description' => 'Serial endosymbiosis theory', 'correct_answer' => false],
                    ['id' => '78b72c8e-0989-5643-9d0d-73171df0cf4c', 'description' => 'Kin selection', 'correct_answer' => false]
                ]],
        ['id' => '93229c38-722f-56e1-80d5-e069c1f2327c', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which phenomenon occurs when two or more harmful species evolve similar warning signals?', 'difficulty' => 3, 'weight' => 442, 'alternatives' => [
                    ['id' => 'b6199155-1656-52d7-9efd-64cf576909ba', 'description' => 'Kin selection', 'correct_answer' => false],
                    ['id' => '0eaeeb2e-5c77-5162-b7d0-83185e124379', 'description' => 'Endosymbiotic theory', 'correct_answer' => false],
                    ['id' => 'a6fa08fb-0224-5470-8674-254b9638d149', 'description' => 'Adaptive radiation', 'correct_answer' => false],
                    ['id' => '1331d5af-3270-5655-bed4-307d5839db72', 'description' => 'Mullerian mimicry', 'correct_answer' => true],
                    ['id' => 'e2111d38-7046-5278-8fdf-5e408ece18fb', 'description' => 'Serial endosymbiosis theory', 'correct_answer' => false]
                ]],
        ['id' => '8ddf339d-e885-5f5e-ab80-c78159b8260c', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which concept combines an individual\'s direct reproduction with effects on relatives\' reproduction?', 'difficulty' => 3, 'weight' => 455, 'alternatives' => [
                    ['id' => '32f3306f-a371-517d-ae79-f3a012a8273f', 'description' => 'Frequency-dependent selection', 'correct_answer' => false],
                    ['id' => '7140f942-f930-5945-a071-01e4925d8bfa', 'description' => 'Batesian mimicry', 'correct_answer' => false],
                    ['id' => '4291cbe9-6813-5f94-82b4-cc4bf61dfdb9', 'description' => 'Serial endosymbiosis theory', 'correct_answer' => false],
                    ['id' => 'ffd215dd-2c96-5f0c-a453-5c5039895bed', 'description' => 'Inclusive fitness', 'correct_answer' => true],
                    ['id' => '61dcb3a6-0fe7-597d-9d4b-3c9c5d6ecf20', 'description' => 'Neutral theory of molecular evolution', 'correct_answer' => false]
                ]],
        ['id' => '14fa6115-799b-55cd-bf77-6ffd81bf8c31', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which process produces many species from a common ancestor in different ecological niches?', 'difficulty' => 3, 'weight' => 474, 'alternatives' => [
                    ['id' => 'd66beb9d-7075-5d8b-90ba-d3653722ca4a', 'description' => 'Kin selection', 'correct_answer' => false],
                    ['id' => '461b550a-90a1-5cb3-9187-27354291374d', 'description' => 'Mullerian mimicry', 'correct_answer' => false],
                    ['id' => '721f1850-137f-5cd9-9141-e883ce0da89c', 'description' => 'Adaptive radiation', 'correct_answer' => true],
                    ['id' => 'de27fe7a-0772-5ea0-ba60-2343f619bd7e', 'description' => 'Frequency-dependent selection', 'correct_answer' => false],
                    ['id' => 'd5e1f3e5-b227-58a0-9301-0a6b8abbfab7', 'description' => 'Serial endosymbiosis theory', 'correct_answer' => false]
                ]],
        ['id' => '18db6222-80d9-529b-ab4e-4f0cd41489ba', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which model proposes long periods of stasis interrupted by brief episodes of evolutionary change?', 'difficulty' => 3, 'weight' => 417, 'alternatives' => [
                    ['id' => 'cb6010c4-1189-53c4-83fc-b18e2b896293', 'description' => 'Inclusive fitness', 'correct_answer' => false],
                    ['id' => '0cb6c688-e63e-59b5-bdd3-aaca18702ea2', 'description' => 'Kin selection', 'correct_answer' => false],
                    ['id' => 'b5e24090-177a-58df-a06e-d6a797f69473', 'description' => 'Neutral theory of molecular evolution', 'correct_answer' => false],
                    ['id' => '16e9b8a6-ba5a-546d-a394-2f13607a5975', 'description' => 'Punctuated equilibrium', 'correct_answer' => true],
                    ['id' => '1fc1f342-ae7f-5768-b635-45ba8c43bab7', 'description' => 'Frequency-dependent selection', 'correct_answer' => false]
                ]],
        ['id' => 'a1327303-8a2d-5403-a801-f121c3da711f', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which phenomenon occurs when a harmless species resembles a harmful or unpalatable one?', 'difficulty' => 3, 'weight' => 570, 'alternatives' => [
                    ['id' => '5359c3f3-cbb4-52b5-bfaa-5a08117fd3b2', 'description' => 'Kin selection', 'correct_answer' => false],
                    ['id' => 'fb5041d8-029a-5f19-9909-24c1d5e2189e', 'description' => 'Neutral theory of molecular evolution', 'correct_answer' => false],
                    ['id' => '28cbcff6-6128-543a-a658-0d069feceb9c', 'description' => 'Inclusive fitness', 'correct_answer' => false],
                    ['id' => '17880325-ac90-5759-af06-1a0fca80b4af', 'description' => 'Batesian mimicry', 'correct_answer' => true],
                    ['id' => '37d606c7-a19f-5142-8d38-ecc1fce12653', 'description' => 'Serial endosymbiosis theory', 'correct_answer' => false]
                ]],
        ['id' => '185dc4c6-f331-5f90-9218-93d9f032187e', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which boundary separates Earth\'s crust from the mantle?', 'difficulty' => 3, 'weight' => 600, 'alternatives' => [
                    ['id' => '25ebc143-104b-5c8b-b11e-f31fff57058e', 'description' => 'Mohorovičić discontinuity', 'correct_answer' => true],
                    ['id' => 'cac8870c-4f29-5b54-918e-838877ba92a9', 'description' => 'Mid-lithospheric discontinuity', 'correct_answer' => false],
                    ['id' => 'b378b273-678d-5df0-a064-849d1e74e886', 'description' => 'D\'\' layer', 'correct_answer' => false],
                    ['id' => '4d909772-05fb-5b73-8df3-af3ab1c6adee', 'description' => '660-kilometer discontinuity', 'correct_answer' => false],
                    ['id' => '367af151-e5bd-5392-9f31-3b3c59e5f7df', 'description' => 'Lehmann discontinuity', 'correct_answer' => false]
                ]],
        ['id' => 'db993422-9c52-56cd-81ba-25bab61bb276', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which boundary separates Earth\'s liquid outer core from its solid inner core?', 'difficulty' => 3, 'weight' => 562, 'alternatives' => [
                    ['id' => '09ba4f20-3cb3-507d-95a0-ae1227dff741', 'description' => 'D\'\' layer', 'correct_answer' => false],
                    ['id' => '02fd89ed-0112-5e7d-bb3f-3163f3a77c97', 'description' => '410-kilometer discontinuity', 'correct_answer' => false],
                    ['id' => 'a2b09cf4-a687-51e5-9f9b-c920f01e85ef', 'description' => 'Gutenberg discontinuity', 'correct_answer' => false],
                    ['id' => 'd8a70fb6-46df-55a1-8e58-f749ca68e26f', 'description' => 'Lehmann discontinuity', 'correct_answer' => true],
                    ['id' => 'bb9f9b16-983a-5d0c-b8e8-92b86928538b', 'description' => 'Mohorovičić discontinuity', 'correct_answer' => false]
                ]],
        ['id' => '96dd074d-da55-504b-99d2-b2c5139c4b89', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which upper-mantle region has reduced seismic-wave velocities?', 'difficulty' => 3, 'weight' => 514, 'alternatives' => [
                    ['id' => '6dfb2809-b998-5f84-8e4d-0179c04b3ddb', 'description' => 'Mohorovičić discontinuity', 'correct_answer' => false],
                    ['id' => '7d30ca66-4cb3-5f82-8165-9972b9dba90b', 'description' => 'Conrad discontinuity', 'correct_answer' => false],
                    ['id' => 'd3dc7547-973f-5e20-990e-0452e6c5691a', 'description' => 'D\'\' layer', 'correct_answer' => false],
                    ['id' => '676213b8-30d0-5290-b71d-5fb1fbf10e67', 'description' => 'Lehmann boundary', 'correct_answer' => false],
                    ['id' => 'eda885ed-134b-576d-9af6-568bafe34fc5', 'description' => 'Low-velocity zone', 'correct_answer' => true]
                ]],
        ['id' => '51aecda3-bb54-55a1-b1b9-658d6ce81d7d', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which mantle boundary is associated with ringwoodite transforming into bridgmanite and ferropericlase?', 'difficulty' => 3, 'weight' => 561, 'alternatives' => [
                    ['id' => '538a250a-2f04-539f-9bb3-6898b2d2781d', 'description' => 'Lehmann discontinuity', 'correct_answer' => false],
                    ['id' => '8da65f5c-2805-58ab-99bf-4e5f632c4352', 'description' => 'Gutenberg discontinuity', 'correct_answer' => false],
                    ['id' => '59783fc1-7624-550e-a713-73983e624301', 'description' => '660-kilometer discontinuity', 'correct_answer' => true],
                    ['id' => '9a536c03-6b7a-515d-a630-e15fc095ef8e', 'description' => 'D\'\' layer', 'correct_answer' => false],
                    ['id' => '418dabf5-a260-5a7c-8bdb-8be935c6a589', 'description' => 'Lehmann boundary', 'correct_answer' => false]
                ]],
        ['id' => 'ff6c8e62-577d-5faf-88f9-082224dbf869', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which proposed seismic boundary occurs within continental crust?', 'difficulty' => 3, 'weight' => 517, 'alternatives' => [
                    ['id' => 'fef3cd19-c54f-580b-ae67-1d7122a245e8', 'description' => 'Mohorovičić discontinuity', 'correct_answer' => false],
                    ['id' => '7e926aee-0fb7-54a9-92c9-9805b681e8ea', 'description' => 'Conrad discontinuity', 'correct_answer' => true],
                    ['id' => 'badedc90-8d02-5487-8876-20983f36c108', 'description' => 'Low-velocity zone', 'correct_answer' => false],
                    ['id' => '04fd70ef-55bf-5616-8919-bd40956adece', 'description' => 'Gutenberg discontinuity', 'correct_answer' => false],
                    ['id' => 'faeb09ae-3893-5fbd-b038-286e949e150f', 'description' => 'Lehmann discontinuity', 'correct_answer' => false]
                ]],
        ['id' => '7d9a67ef-d6b1-5a39-bc98-ea1bd9d7435b', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which mantle transition-zone boundary is associated with olivine transforming into wadsleyite?', 'difficulty' => 3, 'weight' => 597, 'alternatives' => [
                    ['id' => '158ceb2a-8ad6-5a78-a035-0c9fc5c546cc', 'description' => 'Gutenberg discontinuity', 'correct_answer' => false],
                    ['id' => '1cdc512a-b866-59f2-a349-593a28ccc068', 'description' => '410-kilometer discontinuity', 'correct_answer' => true],
                    ['id' => 'ad688dc3-441c-5304-9b95-7a082a43b240', 'description' => 'Lehmann discontinuity', 'correct_answer' => false],
                    ['id' => '15398421-a8d2-5f9e-94ae-0f58855b3274', 'description' => 'Mid-lithospheric discontinuity', 'correct_answer' => false],
                    ['id' => 'f563bc6a-53a4-5fc0-b624-1763e5d63cda', 'description' => 'Lehmann boundary', 'correct_answer' => false]
                ]],
        ['id' => '415f1a34-6646-5d73-9c41-f67868f62fa2', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which boundary separates Earth\'s mantle from its liquid outer core?', 'difficulty' => 3, 'weight' => 460, 'alternatives' => [
                    ['id' => '6e877b1a-f0a8-504c-890e-3de988ddb6b7', 'description' => 'Conrad discontinuity', 'correct_answer' => false],
                    ['id' => '26e50228-87e6-5202-989b-482cbeff78a6', 'description' => 'Lehmann boundary', 'correct_answer' => false],
                    ['id' => '13adf4e2-7287-5c10-82d4-06d911b1bcc3', 'description' => 'Gutenberg discontinuity', 'correct_answer' => true],
                    ['id' => 'aada01eb-a326-575c-a3ae-8816b881dec7', 'description' => 'Mid-lithospheric discontinuity', 'correct_answer' => false],
                    ['id' => 'f35e26e8-1716-58a9-81f7-ea6aecc2cc8c', 'description' => 'Mohorovičić discontinuity', 'correct_answer' => false]
                ]],
        ['id' => 'fb704554-23b0-57ea-b106-0992338d417d', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which seismic discontinuity is associated with the discovery of Earth\'s solid inner core?', 'difficulty' => 3, 'weight' => 597, 'alternatives' => [
                    ['id' => '59cd4e8b-02db-5522-8ef2-6ea0ad076d3c', 'description' => 'Mohorovičić discontinuity', 'correct_answer' => false],
                    ['id' => 'c21a016c-5199-5baf-bde3-d1a1f2f7699a', 'description' => 'Lehmann discontinuity', 'correct_answer' => false],
                    ['id' => '0abd4195-01cb-5d5a-a9f8-7a070afbb955', 'description' => 'Lehmann boundary', 'correct_answer' => true],
                    ['id' => 'b33b2602-9f4a-5f8d-972e-3f744173e395', 'description' => '660-kilometer discontinuity', 'correct_answer' => false],
                    ['id' => 'ec0aef8d-282b-5e3b-8c58-29c2bbc4feb7', 'description' => 'Low-velocity zone', 'correct_answer' => false]
                ]],
        ['id' => '543491b8-627c-5a2b-8a52-ec8f1b918907', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which Millennium Prize Problem concerns algebraic cycles and cohomology classes?', 'difficulty' => 4, 'weight' => 727, 'alternatives' => [
                    ['id' => 'd57f9273-eea9-5a98-97f2-121422459fbc', 'description' => 'Hodge conjecture', 'correct_answer' => true],
                    ['id' => '948890a4-f1ec-5b22-97a2-97a0707a8ea9', 'description' => 'Twin prime conjecture', 'correct_answer' => false],
                    ['id' => '421237c2-cda7-557c-a6f1-6e7e55cb48ba', 'description' => 'P versus NP', 'correct_answer' => false],
                    ['id' => '98543960-1c56-5271-a2e3-4833a181c7ff', 'description' => 'Birch and Swinnerton-Dyer conjecture', 'correct_answer' => false],
                    ['id' => '8ee0016a-158b-5b38-b29d-03d0676c8fde', 'description' => 'abc conjecture', 'correct_answer' => false]
                ]],
        ['id' => '3724e9b1-64a3-595f-8880-7ea842aa256d', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which computer science problem asks whether every efficiently verifiable problem is also efficiently solvable?', 'difficulty' => 4, 'weight' => 781, 'alternatives' => [
                    ['id' => '0a382c82-890b-550a-9145-c59966db3bf5', 'description' => 'Birch and Swinnerton-Dyer conjecture', 'correct_answer' => false],
                    ['id' => 'd4c039f0-ec7d-532b-bc42-227b7f580b8a', 'description' => 'Yang–Mills existence and mass gap', 'correct_answer' => false],
                    ['id' => 'b7bfea64-5226-5fb6-9e1c-2ace3428d6ac', 'description' => 'P versus NP', 'correct_answer' => true],
                    ['id' => '7c6f8ee1-9f57-5133-90e2-9e5737777dd2', 'description' => 'Twin prime conjecture', 'correct_answer' => false],
                    ['id' => 'b74f79e8-bafb-5dac-a48e-4344dafd4956', 'description' => 'abc conjecture', 'correct_answer' => false]
                ]],
        ['id' => '02c26164-bcea-5c5f-b638-b63d54273f49', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which Millennium Prize Problem asks for a rigorous quantum Yang–Mills theory with a positive mass gap?', 'difficulty' => 4, 'weight' => 730, 'alternatives' => [
                    ['id' => '9cb3e019-0cef-5afa-8912-f661c2209d66', 'description' => 'Collatz conjecture', 'correct_answer' => false],
                    ['id' => '01e70f5c-9f54-5499-b23e-bba0912cdac6', 'description' => 'Navier–Stokes existence and smoothness', 'correct_answer' => false],
                    ['id' => '6ad22d0a-2636-59d3-acbd-841f7f2e6bfe', 'description' => 'Hodge conjecture', 'correct_answer' => false],
                    ['id' => '30799508-f08f-56d5-9493-6540b476dc9d', 'description' => 'Goldbach conjecture', 'correct_answer' => false],
                    ['id' => '353e4624-d9ab-5c2e-8f95-18a78d3e0dc2', 'description' => 'Yang–Mills existence and mass gap', 'correct_answer' => true]
                ]],
        ['id' => 'd480deb1-53a3-5e0a-9512-0325a51e401b', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which conjecture relates the radical of a sum of coprime integers to their sizes?', 'difficulty' => 4, 'weight' => 611, 'alternatives' => [
                    ['id' => '3ef92f07-9c32-5f10-86ea-a098fa13aea3', 'description' => 'Riemann hypothesis', 'correct_answer' => false],
                    ['id' => '2340d4bb-59d1-5c18-af20-8513993e2fe2', 'description' => 'Navier–Stokes existence and smoothness', 'correct_answer' => false],
                    ['id' => '173e7fd5-4cf3-55df-a776-28579eed3897', 'description' => 'Hodge conjecture', 'correct_answer' => false],
                    ['id' => '37547d91-4bc7-55a5-86ad-0a71861a8278', 'description' => 'P versus NP', 'correct_answer' => false],
                    ['id' => '68d0e983-9c2c-559b-a505-7ed14d09889e', 'description' => 'abc conjecture', 'correct_answer' => true]
                ]],
        ['id' => 'ed55d070-1a4b-527b-9076-86d5c66e57f2', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which conjecture proposes infinitely many pairs of primes differing by exactly two?', 'difficulty' => 4, 'weight' => 790, 'alternatives' => [
                    ['id' => '3f945da1-d3bc-5480-be36-c19d9fff67a8', 'description' => 'Goldbach conjecture', 'correct_answer' => false],
                    ['id' => 'c0f90660-2fb9-517a-81aa-1b9de8ac2016', 'description' => 'Yang–Mills existence and mass gap', 'correct_answer' => false],
                    ['id' => '25b84e80-2f56-505d-8724-0d80c7145685', 'description' => 'Collatz conjecture', 'correct_answer' => false],
                    ['id' => 'fe88b71a-e5bc-5318-bf0f-0c4e9e511455', 'description' => 'abc conjecture', 'correct_answer' => false],
                    ['id' => '4eac1672-07ad-556c-ab2f-162808bc5112', 'description' => 'Twin prime conjecture', 'correct_answer' => true]
                ]],
        ['id' => '63a71c53-f939-593d-974b-39d93a5270b1', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which problem asks whether repeated application of an odd-even integer rule always reaches 1?', 'difficulty' => 4, 'weight' => 626, 'alternatives' => [
                    ['id' => '03cc8d8f-0694-558e-8679-fc85c568087d', 'description' => 'Twin prime conjecture', 'correct_answer' => false],
                    ['id' => '18323d1e-4ca6-57c5-96c2-a93275231478', 'description' => 'Riemann hypothesis', 'correct_answer' => false],
                    ['id' => 'd3b6e1b5-7ca0-5946-98cb-dbe242917c91', 'description' => 'Hodge conjecture', 'correct_answer' => false],
                    ['id' => '4d223cac-0b59-54e7-b8d4-54f7030a5cd5', 'description' => 'P versus NP', 'correct_answer' => false],
                    ['id' => '99655e12-6bc6-5d4f-ad92-463dd6a13005', 'description' => 'Collatz conjecture', 'correct_answer' => true]
                ]],
        ['id' => 'e3060f2d-7f97-5f35-9799-e2d8f086c454', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which unsolved conjecture concerns the nontrivial zeros of the Riemann zeta function?', 'difficulty' => 4, 'weight' => 702, 'alternatives' => [
                    ['id' => '4236e229-c3dc-5c56-869d-490cd4040fff', 'description' => 'Collatz conjecture', 'correct_answer' => false],
                    ['id' => 'd3e9e05b-a5e2-5f78-97ba-5866861a444a', 'description' => 'Navier–Stokes existence and smoothness', 'correct_answer' => false],
                    ['id' => 'ce977f86-2490-5cf8-beb6-2d8709e6561f', 'description' => 'P versus NP', 'correct_answer' => false],
                    ['id' => '5ad042a0-ecf6-5855-a37b-a50d303e6fb8', 'description' => 'Riemann hypothesis', 'correct_answer' => true],
                    ['id' => 'f9c29ab3-8dcb-5bf2-9844-51ff999af09a', 'description' => 'Twin prime conjecture', 'correct_answer' => false]
                ]],
        ['id' => '5bc50e64-fea0-59e4-9363-678b3ccdb25a', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which Millennium Prize Problem relates an elliptic curve\'s rank to its L-function?', 'difficulty' => 4, 'weight' => 664, 'alternatives' => [
                    ['id' => '98a80c54-d77b-502a-9754-e2f6ef15ae6d', 'description' => 'Riemann hypothesis', 'correct_answer' => false],
                    ['id' => '83061772-6752-5be1-a761-9a53026a9028', 'description' => 'abc conjecture', 'correct_answer' => false],
                    ['id' => '973c1caf-6e08-5d02-8750-9a88a0e675e5', 'description' => 'Hodge conjecture', 'correct_answer' => false],
                    ['id' => 'c8c91c55-388b-5cf5-839d-307fc0206105', 'description' => 'P versus NP', 'correct_answer' => false],
                    ['id' => '3bd69254-6d9d-5379-b959-47eead62ec4a', 'description' => 'Birch and Swinnerton-Dyer conjecture', 'correct_answer' => true]
                ]],
        ['id' => 'c6bfe39d-d321-57ce-8170-3fa968634457', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which theorem characterizes strongly continuous one-parameter unitary groups by self-adjoint generators?', 'difficulty' => 4, 'weight' => 772, 'alternatives' => [
                    ['id' => '4959c8fc-0223-5e01-bbcb-af1d698b4996', 'description' => 'Adiabatic theorem', 'correct_answer' => false],
                    ['id' => 'a5abdfd7-29f1-5a3e-a792-09b09a64454c', 'description' => 'Bell\'s theorem', 'correct_answer' => false],
                    ['id' => '34eb4f87-7536-5da8-ac20-ec8aeb15fc6c', 'description' => 'Noether\'s theorem', 'correct_answer' => false],
                    ['id' => 'c2ba5da9-b945-5e4a-bc01-c5f6c970a28e', 'description' => 'Ehrenfest theorem', 'correct_answer' => false],
                    ['id' => 'b87c4e44-6b61-5774-bb28-0d02db4f662c', 'description' => 'Stone\'s theorem', 'correct_answer' => true]
                ]],
        ['id' => 'c06e78d6-5edb-51e3-a521-18dc662d879f', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which theorem connects continuous symmetries of a physical system to conservation laws?', 'difficulty' => 4, 'weight' => 645, 'alternatives' => [
                    ['id' => '2b5ec0d1-c9fc-55c6-be84-62c8e7759f27', 'description' => 'KAM theorem', 'correct_answer' => false],
                    ['id' => '15b4f762-46f9-5def-abdf-e5c896cabbf9', 'description' => 'CPT theorem', 'correct_answer' => false],
                    ['id' => '6e898459-0ea3-5d6c-bbbf-8ebb9cc29bbd', 'description' => 'Stone\'s theorem', 'correct_answer' => false],
                    ['id' => 'ec1369b9-8303-5e87-a305-de168ab4a9a7', 'description' => 'Bell\'s theorem', 'correct_answer' => false],
                    ['id' => '1b5e3df9-eed1-557d-8da9-4e83390a4f89', 'description' => 'Noether\'s theorem', 'correct_answer' => true]
                ]],
        ['id' => 'edb38106-ade3-597d-96ca-a2fd1cabb3f1', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which Hamiltonian mechanics theorem states that phase-space volume is conserved?', 'difficulty' => 4, 'weight' => 751, 'alternatives' => [
                    ['id' => 'dbf724b7-938d-5502-bcb6-e150543aa87e', 'description' => 'Liouville\'s theorem', 'correct_answer' => true],
                    ['id' => '8773466d-e3d6-52a3-abe1-cde2c47b2449', 'description' => 'Stone\'s theorem', 'correct_answer' => false],
                    ['id' => 'd5e29a3a-ee92-51e7-a02d-64bc7e88db47', 'description' => 'Ehrenfest theorem', 'correct_answer' => false],
                    ['id' => 'cac3aae0-262d-5e34-8c92-19e0fedc9f09', 'description' => 'Adiabatic theorem', 'correct_answer' => false],
                    ['id' => 'abb82809-2be9-54de-90f9-a71177bc9f06', 'description' => 'KAM theorem', 'correct_answer' => false]
                ]],
        ['id' => '818dec13-c108-51f5-88c9-e8695c9ee985', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which quantum theorem describes evolution when a system\'s Hamiltonian changes sufficiently slowly?', 'difficulty' => 4, 'weight' => 721, 'alternatives' => [
                    ['id' => '543691ac-f070-5e8d-8e66-c774fcf6072d', 'description' => 'CPT theorem', 'correct_answer' => false],
                    ['id' => '8a924f5e-e168-5eb0-b1f5-3f35c9389ab0', 'description' => 'Liouville\'s theorem', 'correct_answer' => false],
                    ['id' => '54ac4b97-30e9-5b31-868c-5740ba7ddebd', 'description' => 'Wigner\'s theorem', 'correct_answer' => false],
                    ['id' => 'ce0273a0-48b3-5682-b72d-001f321b047f', 'description' => 'Adiabatic theorem', 'correct_answer' => true],
                    ['id' => '46425624-85a5-52e2-81a0-5beb82fa728e', 'description' => 'Bell\'s theorem', 'correct_answer' => false]
                ]],
        ['id' => 'df6f4a4b-b4ee-50a8-b46b-27d9b72ee183', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which theorem shows that local hidden-variable theories cannot reproduce all quantum predictions?', 'difficulty' => 4, 'weight' => 703, 'alternatives' => [
                    ['id' => 'bba98911-44a5-56a0-b286-f37d92405850', 'description' => 'KAM theorem', 'correct_answer' => false],
                    ['id' => 'ea948079-d8c0-51cf-9432-0e58b1459355', 'description' => 'Stone\'s theorem', 'correct_answer' => false],
                    ['id' => '45bb765c-891e-53b6-873a-48ebc3ef6976', 'description' => 'Bell\'s theorem', 'correct_answer' => true],
                    ['id' => '64765bff-be31-5d86-8db3-108bbe930a5d', 'description' => 'Liouville\'s theorem', 'correct_answer' => false],
                    ['id' => '661536d4-5913-5871-b9f3-0c649299f35b', 'description' => 'Kochen–Specker theorem', 'correct_answer' => false]
                ]],
        ['id' => 'eac76b16-c9d3-511a-bb80-8ee38a290608', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which quantum field theory theorem concerns combined charge, parity, and time-reversal symmetry?', 'difficulty' => 4, 'weight' => 604, 'alternatives' => [
                    ['id' => '691c426d-72e6-5f1b-afe9-264fb4826941', 'description' => 'Adiabatic theorem', 'correct_answer' => false],
                    ['id' => '5e56faa3-996f-555b-89c3-be0234a02180', 'description' => 'Liouville\'s theorem', 'correct_answer' => false],
                    ['id' => '3ab493df-978a-599e-8651-493ffb234c0b', 'description' => 'KAM theorem', 'correct_answer' => false],
                    ['id' => '6a3814cc-6521-5006-80ce-85aa96aba18a', 'description' => 'CPT theorem', 'correct_answer' => true],
                    ['id' => '3b6441a0-6309-58c6-b717-ef1519fbb58e', 'description' => 'Stone\'s theorem', 'correct_answer' => false]
                ]],
        ['id' => 'e392208a-6c64-5964-a51e-b2fe55e204a1', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which theorem concerns persistence of invariant tori in nearly integrable Hamiltonian systems?', 'difficulty' => 4, 'weight' => 657, 'alternatives' => [
                    ['id' => '66f9985c-5ed4-5df7-961c-9e0a5cff85c1', 'description' => 'KAM theorem', 'correct_answer' => true],
                    ['id' => '1c9cc1a7-627b-5404-ac1a-699c4d8cc927', 'description' => 'Bell\'s theorem', 'correct_answer' => false],
                    ['id' => 'dbea1167-a7bf-5c80-afc7-cc085a00e721', 'description' => 'Wigner\'s theorem', 'correct_answer' => false],
                    ['id' => 'ad6258b5-1f38-54bb-b006-8a33acfd4ceb', 'description' => 'CPT theorem', 'correct_answer' => false],
                    ['id' => '62fba601-2e78-5b0e-8e54-b362088205fa', 'description' => 'Ehrenfest theorem', 'correct_answer' => false]
                ]],
        ['id' => '96b1e550-6f17-56d9-b7b4-8f2464669a23', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which result relates time evolution of quantum expectation values to classical equations of motion?', 'difficulty' => 4, 'weight' => 797, 'alternatives' => [
                    ['id' => '12959207-0043-51db-a65e-e3182eca67ce', 'description' => 'Kochen–Specker theorem', 'correct_answer' => false],
                    ['id' => 'e53d34a8-ba21-5628-8ed0-201a19107ece', 'description' => 'Bell\'s theorem', 'correct_answer' => false],
                    ['id' => '43504728-4787-57c7-8ba0-31fb09f5ccb0', 'description' => 'Stone\'s theorem', 'correct_answer' => false],
                    ['id' => 'e49d5c46-2ae6-533c-9eb3-4a6440af50bf', 'description' => 'Ehrenfest theorem', 'correct_answer' => true],
                    ['id' => '91749bb5-bc83-56b1-8e75-bcebb550393a', 'description' => 'Liouville\'s theorem', 'correct_answer' => false]
                ]],
        ['id' => 'e3d77e77-c4fe-5d66-b265-f932ad9682aa', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which synthetic antisense oligomer is often used to block translation or splice sites?', 'difficulty' => 4, 'weight' => 762, 'alternatives' => [
                    ['id' => '5eda1678-96ee-5abb-bc5f-76000174c859', 'description' => 'Prime editing', 'correct_answer' => false],
                    ['id' => '7edf1c9e-86e6-5a31-b26b-50195ebfdeff', 'description' => 'TALENs', 'correct_answer' => false],
                    ['id' => '2faeff63-6f01-5922-b244-15f6d1905c1c', 'description' => 'Zinc-finger nucleases', 'correct_answer' => false],
                    ['id' => 'c4cb0132-1e94-553e-81c5-68a177101aa9', 'description' => 'Base editing', 'correct_answer' => false],
                    ['id' => '8dcba4dd-cbc4-5470-8675-b4d7d9bce8f0', 'description' => 'Morpholino', 'correct_answer' => true]
                ]],
        ['id' => 'f8917d35-d8c5-5692-8187-4df6c705b9f8', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which genome-editing tools use engineered TALE DNA-binding domains fused to nucleases?', 'difficulty' => 4, 'weight' => 755, 'alternatives' => [
                    ['id' => '84754274-d6b2-5e79-99d9-ada06982a369', 'description' => 'RNA interference', 'correct_answer' => false],
                    ['id' => '0d0ad15b-ca55-52a3-8287-c85f7a4479d0', 'description' => 'Homologous recombination', 'correct_answer' => false],
                    ['id' => '78677d67-192b-566c-bfcd-0dbac05b2781', 'description' => 'Morpholino', 'correct_answer' => false],
                    ['id' => '6e6843fa-49ba-56ed-a45f-7eba7ba2dd06', 'description' => 'CRISPR-Cas9', 'correct_answer' => false],
                    ['id' => '26c311d0-c802-53eb-90b0-b1416e5a4f21', 'description' => 'TALENs', 'correct_answer' => true]
                ]],
        ['id' => 'c93c3a02-2bd2-5dbf-85ba-906ca4857178', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which genome-editing approach changes one DNA base pair into another without a double-strand break?', 'difficulty' => 4, 'weight' => 773, 'alternatives' => [
                    ['id' => 'f293636e-85ab-5f37-9373-072505a0ffac', 'description' => 'Morpholino', 'correct_answer' => false],
                    ['id' => '4762b5ea-54cd-5038-b9ee-e48470ed6fef', 'description' => 'Zinc-finger nucleases', 'correct_answer' => false],
                    ['id' => '6a5aa5d4-a163-5313-9a6a-b62e6d6efa52', 'description' => 'Homologous recombination', 'correct_answer' => false],
                    ['id' => '532f3656-d9b7-5c23-bf8b-64f308784737', 'description' => 'Recombinase-mediated cassette exchange', 'correct_answer' => false],
                    ['id' => 'b234ec57-8e19-5bc0-99c8-64c74cc7dedb', 'description' => 'Base editing', 'correct_answer' => true]
                ]],
        ['id' => 'a2fb4ec0-5120-57ca-9b66-a201befe3842', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which short synthetic nucleic acid binds target RNA to alter processing or translation?', 'difficulty' => 4, 'weight' => 781, 'alternatives' => [
                    ['id' => '1a1805b8-4633-52f1-9444-116f2fee7ad0', 'description' => 'Prime editing', 'correct_answer' => false],
                    ['id' => '37de6fe5-3a96-566b-826f-8e08b568452d', 'description' => 'TALENs', 'correct_answer' => false],
                    ['id' => 'abef8980-da61-5cf9-afe0-be6e5b2b69eb', 'description' => 'Antisense oligonucleotide', 'correct_answer' => true],
                    ['id' => 'b463b133-74ef-5aae-bb19-3da2d21f967f', 'description' => 'Zinc-finger nucleases', 'correct_answer' => false],
                    ['id' => '36e1b091-865a-5eac-bec9-7030df65788e', 'description' => 'Homologous recombination', 'correct_answer' => false]
                ]],
        ['id' => '798a4a24-1bea-5f2d-bd4a-937d15df9e1e', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which genome-editing tools use engineered zinc-finger DNA-binding domains linked to a nuclease?', 'difficulty' => 4, 'weight' => 771, 'alternatives' => [
                    ['id' => '518319cb-1b34-503f-b1a6-5634525f4114', 'description' => 'Base editing', 'correct_answer' => false],
                    ['id' => 'b836f733-b396-56f8-9897-66f2b376896d', 'description' => 'Recombinase-mediated cassette exchange', 'correct_answer' => false],
                    ['id' => '9168364d-9c88-5722-92d1-d7b4a90a38f6', 'description' => 'Antisense oligonucleotide', 'correct_answer' => false],
                    ['id' => 'd5c60f1d-1c74-5647-8a95-0f718854c0e6', 'description' => 'Zinc-finger nucleases', 'correct_answer' => true],
                    ['id' => 'db3e2f9e-ed66-51d7-854b-a1e9cbcff8df', 'description' => 'Prime editing', 'correct_answer' => false]
                ]],
        ['id' => '7e90a587-ec2b-5235-ab83-efe5674ffe7f', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which genome-editing system uses guide RNA and Cas9 nuclease to target DNA?', 'difficulty' => 4, 'weight' => 718, 'alternatives' => [
                    ['id' => '0094fd8e-1b96-59c6-af13-927f4c038eea', 'description' => 'CRISPR-Cas9', 'correct_answer' => true],
                    ['id' => '051b2ce5-406f-58f9-8b46-276abd84a4e8', 'description' => 'Prime editing', 'correct_answer' => false],
                    ['id' => '7bf0c53a-91ad-5f4f-9cba-3acf75fc77d3', 'description' => 'Zinc-finger nucleases', 'correct_answer' => false],
                    ['id' => 'a7fd5180-cf67-5f49-9cda-503bd1b0aa2d', 'description' => 'RNA interference', 'correct_answer' => false],
                    ['id' => '371667a6-01b7-503c-a245-3d08e769e04c', 'description' => 'Homologous recombination', 'correct_answer' => false]
                ]],
        ['id' => '9876c6e3-ef2f-5433-a83f-7a3ef193bf78', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which DNA repair process uses a homologous sequence as a template?', 'difficulty' => 4, 'weight' => 702, 'alternatives' => [
                    ['id' => '3e913924-f094-5dd4-87da-d92fe0b0508d', 'description' => 'Homologous recombination', 'correct_answer' => true],
                    ['id' => 'f980fbcc-ed75-5fd3-b355-20c2d6039079', 'description' => 'RNA interference', 'correct_answer' => false],
                    ['id' => '697d3e77-99b9-540c-8537-c755ecc145d7', 'description' => 'CRISPR-Cas9', 'correct_answer' => false],
                    ['id' => 'ee8ea1c2-4b91-5b5c-90c0-5c0c161c4cb6', 'description' => 'Zinc-finger nucleases', 'correct_answer' => false],
                    ['id' => '6eeba373-3618-50f4-89ed-e026987914ed', 'description' => 'Antisense oligonucleotide', 'correct_answer' => false]
                ]],
        ['id' => '20a23d4c-d1ab-5c39-9621-620debd04656', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which genome-editing method uses a Cas9 nickase fused to reverse transcriptase?', 'difficulty' => 4, 'weight' => 636, 'alternatives' => [
                    ['id' => '21f2fbc7-334c-59ca-9130-818aa64ab906', 'description' => 'CRISPR-Cas9', 'correct_answer' => false],
                    ['id' => '0791b16a-f830-5d83-98be-b446a23525f5', 'description' => 'Zinc-finger nucleases', 'correct_answer' => false],
                    ['id' => '9aeff192-92b2-5da9-ae26-d7965fc52611', 'description' => 'Antisense oligonucleotide', 'correct_answer' => false],
                    ['id' => '9adef7ed-ce37-5bf1-9548-1d109229d9cd', 'description' => 'TALENs', 'correct_answer' => false],
                    ['id' => '7d0afcdf-7b27-52fa-bcbc-03122f25c3f5', 'description' => 'Prime editing', 'correct_answer' => true]
                ]],
        ['id' => 'e8427c96-64b0-5e2b-ab94-6df66e30be9a', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which tropical atmospheric disturbance propagates eastward and affects intraseasonal rainfall?', 'difficulty' => 4, 'weight' => 634, 'alternatives' => [
                    ['id' => 'c85d9252-0250-54e4-8e9e-036d8971b0f9', 'description' => 'Madden–Julian Oscillation', 'correct_answer' => true],
                    ['id' => 'c6e52e20-35a3-581d-9abc-c3f7ea28cf73', 'description' => 'Pacific Decadal Oscillation', 'correct_answer' => false],
                    ['id' => '290bca68-3d90-5d81-8002-422e79e121d0', 'description' => 'El Niño–Southern Oscillation', 'correct_answer' => false],
                    ['id' => 'd54a202e-6009-572f-a09a-90a9828328e9', 'description' => 'Coriolis effect', 'correct_answer' => false],
                    ['id' => '23f5e749-0aec-51d0-aaa3-e5c5fc42e446', 'description' => 'Geostrophic balance', 'correct_answer' => false]
                ]],
        ['id' => 'b3ef5123-ee8c-58c0-bb7e-2c4680ce369a', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which planetary wave is influenced by variation of the Coriolis parameter with latitude?', 'difficulty' => 4, 'weight' => 682, 'alternatives' => [
                    ['id' => 'fe9539e7-3db1-5b5d-bd78-62aa83e89e61', 'description' => 'Kelvin wave', 'correct_answer' => false],
                    ['id' => '82e29870-9b36-552c-b413-784a5312ad56', 'description' => 'Indian Ocean Dipole', 'correct_answer' => false],
                    ['id' => 'd61160b4-4c66-59d8-9e59-c64ddb90187f', 'description' => 'Coriolis effect', 'correct_answer' => false],
                    ['id' => '2aa86170-67d8-5fa9-931a-ffdfb6be7223', 'description' => 'Rossby wave', 'correct_answer' => true],
                    ['id' => 'c914a4be-7ffc-533f-83f3-a49c66249c81', 'description' => 'Atlantic Multidecadal Variability', 'correct_answer' => false]
                ]],
        ['id' => '3626fa5a-12cd-5117-af01-0404207797d2', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which apparent force in a rotating reference frame deflects moving objects relative to the surface?', 'difficulty' => 4, 'weight' => 762, 'alternatives' => [
                    ['id' => 'ca3145ca-9f6a-5917-9573-91750f3f4fbe', 'description' => 'Coriolis effect', 'correct_answer' => true],
                    ['id' => '460b9bd6-55dd-5e00-9562-3510a1459f52', 'description' => 'Atlantic Multidecadal Variability', 'correct_answer' => false],
                    ['id' => 'f24a7e02-7598-5a3f-951a-7003f20c4a82', 'description' => 'Madden–Julian Oscillation', 'correct_answer' => false],
                    ['id' => 'fa70edcb-5660-575e-bfbf-35f8483a603c', 'description' => 'Indian Ocean Dipole', 'correct_answer' => false],
                    ['id' => 'b51dbd44-d12d-5489-8b28-bf4986f54a18', 'description' => 'Geostrophic balance', 'correct_answer' => false]
                ]],
        ['id' => 'd870b207-6da9-5649-990a-d1c4b0539e86', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which balance between pressure-gradient force and Coriolis force describes large-scale flow?', 'difficulty' => 4, 'weight' => 698, 'alternatives' => [
                    ['id' => '6bee3de7-80fb-5b7f-a22b-d76982ade85b', 'description' => 'Kelvin wave', 'correct_answer' => false],
                    ['id' => 'f6da0a06-992a-5c6b-b83a-81784bfd72e6', 'description' => 'Madden–Julian Oscillation', 'correct_answer' => false],
                    ['id' => '37f34ed1-bd91-55f2-a5ce-caa3a3214645', 'description' => 'El Niño–Southern Oscillation', 'correct_answer' => false],
                    ['id' => '8b0330fb-43f5-5331-b33c-07355436f14d', 'description' => 'Indian Ocean Dipole', 'correct_answer' => false],
                    ['id' => '65a2e8ae-ea52-5e5d-b759-a62cc0a78c6c', 'description' => 'Geostrophic balance', 'correct_answer' => true]
                ]],
        ['id' => '200d9921-8dbc-530a-9ba9-268ede696c79', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which coupled ocean-atmosphere pattern involves periodic warming and cooling in the tropical Pacific?', 'difficulty' => 4, 'weight' => 763, 'alternatives' => [
                    ['id' => 'a89433a8-ccec-5de5-b85a-6d00124d68a8', 'description' => 'Indian Ocean Dipole', 'correct_answer' => false],
                    ['id' => '41af509c-1cb3-5f5e-957d-722d7a282586', 'description' => 'Geostrophic balance', 'correct_answer' => false],
                    ['id' => '48057f8e-cd89-54bd-958e-f1de7467016d', 'description' => 'Ekman spiral', 'correct_answer' => false],
                    ['id' => '41d7f1a4-5304-5b58-b56c-292a77061ddf', 'description' => 'El Niño–Southern Oscillation', 'correct_answer' => true],
                    ['id' => 'e82f793d-6b49-54bf-a12e-1f8c543ae9ba', 'description' => 'Pacific Decadal Oscillation', 'correct_answer' => false]
                ]],
        ['id' => 'a21e4298-e8ef-5ec0-8666-902589910efd', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which climate pattern describes multidecadal fluctuations in North Atlantic sea-surface temperatures?', 'difficulty' => 4, 'weight' => 642, 'alternatives' => [
                    ['id' => '42029aa4-7979-5212-9c82-209cdd7b7cb5', 'description' => 'Ekman spiral', 'correct_answer' => false],
                    ['id' => '59e4da2e-2ad5-5d33-888c-2cff309458ae', 'description' => 'Coriolis effect', 'correct_answer' => false],
                    ['id' => '69494fdd-28c0-570d-9a31-5b19277100c3', 'description' => 'Madden–Julian Oscillation', 'correct_answer' => false],
                    ['id' => 'd223fcaf-c308-5279-a184-9a665aea8d15', 'description' => 'Atlantic Multidecadal Variability', 'correct_answer' => true],
                    ['id' => 'a5a7287c-34f6-59d0-810d-d40f48160c54', 'description' => 'Geostrophic balance', 'correct_answer' => false]
                ]],
        ['id' => 'd4013519-8654-55f1-bc27-b27b61f7b59d', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which climate pattern involves opposing sea-surface temperature anomalies in the tropical Indian Ocean?', 'difficulty' => 4, 'weight' => 717, 'alternatives' => [
                    ['id' => 'bece205e-84a7-5491-b6ca-e3bf75ebf9c1', 'description' => 'Atlantic Multidecadal Variability', 'correct_answer' => false],
                    ['id' => 'a38f951e-8569-5090-976a-fc8781411bbd', 'description' => 'Ekman spiral', 'correct_answer' => false],
                    ['id' => '3359a39c-c8fe-51f5-9547-b0a1c9179931', 'description' => 'Indian Ocean Dipole', 'correct_answer' => true],
                    ['id' => 'a0e0a1cc-fbdd-54df-8d2a-3f659eb4320b', 'description' => 'Rossby wave', 'correct_answer' => false],
                    ['id' => '60b769e5-6675-5c99-8d5c-a5dc32a187ea', 'description' => 'El Niño–Southern Oscillation', 'correct_answer' => false]
                ]],
        ['id' => '2225d0ce-eaca-50cd-9ecd-2d6d13a36449', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which long-lived Pacific climate pattern shifts sea-surface temperature anomalies over decades?', 'difficulty' => 4, 'weight' => 644, 'alternatives' => [
                    ['id' => '9e78498f-3d7f-5373-b44d-396d9326c1e8', 'description' => 'Coriolis effect', 'correct_answer' => false],
                    ['id' => 'a34b71f1-f2c7-52bb-99ee-143eff049cff', 'description' => 'Pacific Decadal Oscillation', 'correct_answer' => true],
                    ['id' => '02ba6cdb-77d4-5aaa-b622-3299548ebdd4', 'description' => 'Indian Ocean Dipole', 'correct_answer' => false],
                    ['id' => '1c56cd21-aa48-549e-8d2b-5ca3aa5f3063', 'description' => 'Kelvin wave', 'correct_answer' => false],
                    ['id' => 'fd0eeb77-7ff2-5494-9301-42f753ee2410', 'description' => 'El Niño–Southern Oscillation', 'correct_answer' => false]
                ]],
        ['id' => 'b04f68d5-9b62-5ea9-b64a-0448339b583b', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which theoretical upper mass limit constrains a neutron star?', 'difficulty' => 4, 'weight' => 759, 'alternatives' => [
                    ['id' => '83a7f261-29de-5f1a-89d3-2cad9a4f4b77', 'description' => 'Eddington luminosity', 'correct_answer' => false],
                    ['id' => 'cd09f208-acd4-5761-aa90-a8843e00320a', 'description' => 'Toomre Q parameter', 'correct_answer' => false],
                    ['id' => '6434432d-38be-51c5-83c2-07a05f9d8796', 'description' => 'TOV limit', 'correct_answer' => true],
                    ['id' => '01ba2fc5-14bb-52e3-a4ab-76de685d5752', 'description' => 'Hayashi track', 'correct_answer' => false],
                    ['id' => 'b932fa01-82c0-54eb-8d3d-18338fa6ee0a', 'description' => 'Schönberg–Chandrasekhar limit', 'correct_answer' => false]
                ]],
        ['id' => '78c28b14-d2ad-587e-adb0-13a4313726f6', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which nearly vertical path in the Hertzsprung–Russell diagram is followed by a fully convective pre-main-sequence star?', 'difficulty' => 4, 'weight' => 703, 'alternatives' => [
                    ['id' => '6b5e8c11-0ba4-5f2f-a4b2-03ec01ae8856', 'description' => 'Eddington luminosity', 'correct_answer' => false],
                    ['id' => '299c11d6-a5a6-5d95-8c2e-ee0f8efd5686', 'description' => 'Oppenheimer–Volkoff limit', 'correct_answer' => false],
                    ['id' => '0a27e22c-30b1-5e0e-823d-ae02d1233f7c', 'description' => 'Hayashi track', 'correct_answer' => true],
                    ['id' => '0dda4841-819d-575c-822d-6c8124621a0e', 'description' => 'Jeans mass', 'correct_answer' => false],
                    ['id' => '48a84f0d-7f2d-57ad-8a07-3fe54e56f721', 'description' => 'Chandrasekhar limit', 'correct_answer' => false]
                ]],
        ['id' => '0510dc2c-1f9d-581c-acba-47e40cb5d8af', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which theoretical maximum luminosity balances radiation pressure against gravity?', 'difficulty' => 4, 'weight' => 645, 'alternatives' => [
                    ['id' => '748b74da-7f68-5c52-b884-364c1ad7db62', 'description' => 'Eddington luminosity', 'correct_answer' => true],
                    ['id' => '653d1c02-e7f0-5630-8f46-a6d483d2d972', 'description' => 'Oppenheimer–Volkoff limit', 'correct_answer' => false],
                    ['id' => 'd21cc19e-4204-5915-85f6-f3dc4ca97a48', 'description' => 'TOV limit', 'correct_answer' => false],
                    ['id' => 'a93a487b-0f27-5945-963f-b5d9fb174c60', 'description' => 'Toomre Q parameter', 'correct_answer' => false],
                    ['id' => '6b2b4917-9164-5c58-8238-f4faa7fcff52', 'description' => 'Tolman–Oppenheimer–Volkoff equation', 'correct_answer' => false]
                ]],
        ['id' => 'ab05ecf8-e351-5ab4-a564-ef397ba45ad0', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which early theoretical estimate concerns the maximum mass of a neutron star?', 'difficulty' => 4, 'weight' => 667, 'alternatives' => [
                    ['id' => 'd5a11ae6-2f19-5c43-beeb-9b5a20373cc2', 'description' => 'Tolman–Oppenheimer–Volkoff equation', 'correct_answer' => false],
                    ['id' => '7e4160e6-2e07-5ae4-82d4-75f189f3ebef', 'description' => 'Chandrasekhar limit', 'correct_answer' => false],
                    ['id' => 'f6e498f4-ba55-5dc8-a41d-55ffa265f2a8', 'description' => 'Schönberg–Chandrasekhar limit', 'correct_answer' => false],
                    ['id' => '3f5de68d-a066-5177-8ba4-a198931dba17', 'description' => 'Bonnor–Ebert mass', 'correct_answer' => false],
                    ['id' => '1fb3b932-4972-55cd-9308-e66fc01364cc', 'description' => 'Oppenheimer–Volkoff limit', 'correct_answer' => true]
                ]],
        ['id' => '1635ef00-e4be-5fb7-b225-686964da7cc2', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which critical mass determines whether a gas cloud can collapse against thermal pressure?', 'difficulty' => 4, 'weight' => 610, 'alternatives' => [
                    ['id' => '79c93db3-2ef0-5dc5-a8c5-080f2b5a06da', 'description' => 'Hayashi track', 'correct_answer' => false],
                    ['id' => 'e479aeee-2026-50eb-b19e-b74a05699b92', 'description' => 'Eddington luminosity', 'correct_answer' => false],
                    ['id' => 'dd694cd8-7914-528c-b51a-38c53c5f9de0', 'description' => 'Tolman–Oppenheimer–Volkoff equation', 'correct_answer' => false],
                    ['id' => 'd438869f-91be-5e5e-9cdf-3e7c1cb71d7a', 'description' => 'Bonnor–Ebert mass', 'correct_answer' => false],
                    ['id' => '86e78a44-319e-5ed4-b4b6-45fd90998206', 'description' => 'Jeans mass', 'correct_answer' => true]
                ]],
        ['id' => '1d723bf7-24df-553d-a9ca-22a344c70354', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which relativistic hydrostatic-equilibrium equation describes pressure inside a spherical neutron star?', 'difficulty' => 4, 'weight' => 739, 'alternatives' => [
                    ['id' => '3422867c-f30e-5599-a40f-92875d309f48', 'description' => 'Chandrasekhar limit', 'correct_answer' => false],
                    ['id' => '04a2acde-93da-5945-86bd-75c68835b400', 'description' => 'Hayashi track', 'correct_answer' => false],
                    ['id' => 'fa468585-13ad-5c28-9f5a-3f87dc563799', 'description' => 'Toomre Q parameter', 'correct_answer' => false],
                    ['id' => '7cf5d02f-f5b7-5cd4-8128-bef516bcd5ad', 'description' => 'Eddington luminosity', 'correct_answer' => false],
                    ['id' => 'c3aecbf0-c16a-5f52-bcfa-e5ee6ee0a1b7', 'description' => 'Tolman–Oppenheimer–Volkoff equation', 'correct_answer' => true]
                ]],
        ['id' => '4c60da2a-8ea5-580b-bb65-ccc13af09fca', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which dimensionless parameter measures disk stability against axisymmetric gravitational collapse?', 'difficulty' => 4, 'weight' => 668, 'alternatives' => [
                    ['id' => '9b7b34d9-389b-5013-8409-bc466e3086bd', 'description' => 'Tolman–Oppenheimer–Volkoff equation', 'correct_answer' => false],
                    ['id' => '4c782b8a-b8d1-5217-a91c-5ba987e048f7', 'description' => 'Chandrasekhar limit', 'correct_answer' => false],
                    ['id' => 'e08de36d-ac62-576b-9237-407d4e8a15df', 'description' => 'Oppenheimer–Volkoff limit', 'correct_answer' => false],
                    ['id' => '6ca2d5da-58e7-56d5-9c26-9b867acd0fc2', 'description' => 'Hayashi track', 'correct_answer' => false],
                    ['id' => '89ca0f1c-9f58-5d28-93eb-8388f14f78dd', 'description' => 'Toomre Q parameter', 'correct_answer' => true]
                ]],
        ['id' => '94240b46-d2a6-5646-993a-caa32d1a57e3', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which approximate mass threshold separates stable white dwarfs from collapse under electron degeneracy pressure?', 'difficulty' => 4, 'weight' => 759, 'alternatives' => [
                    ['id' => '209bdfdf-01ad-5c77-aa4c-02db7a44539f', 'description' => 'Hayashi track', 'correct_answer' => false],
                    ['id' => 'bccbdf0f-37a9-5a81-9a9d-cf33e86b9541', 'description' => 'TOV limit', 'correct_answer' => false],
                    ['id' => 'e4d6fd1c-18c6-550a-a322-f9c9dc2cdfd5', 'description' => 'Bonnor–Ebert mass', 'correct_answer' => false],
                    ['id' => '16d74091-d441-55d4-8662-c1fdfd783c4f', 'description' => 'Chandrasekhar limit', 'correct_answer' => true],
                    ['id' => '45b10891-bdce-56b9-8ed0-100ba57f91d8', 'description' => 'Tolman–Oppenheimer–Volkoff equation', 'correct_answer' => false]
                ]],
        ['id' => 'f933c853-5a7d-5c83-8e8c-4dffd6ea5028', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which QED phenomenon predicts electron-positron pair production in an extremely strong electric field?', 'difficulty' => 5, 'weight' => 885, 'alternatives' => [
                    ['id' => 'c06918fd-b7b5-5ba8-8cbb-33b2c892e4d2', 'description' => 'Schwinger effect', 'correct_answer' => true],
                    ['id' => '69a94e77-e5c6-5198-9af9-2ea83f4deee7', 'description' => 'Aharonov–Bohm effect', 'correct_answer' => false],
                    ['id' => 'e4eaa4df-8441-51cc-9d6c-0e5cc4121277', 'description' => 'Mössbauer effect', 'correct_answer' => false],
                    ['id' => '35916d00-57d8-5420-828f-636995243fca', 'description' => 'Sagnac effect', 'correct_answer' => false],
                    ['id' => '0a8adb60-05ac-53d4-bb3e-604986043ce6', 'description' => 'Kondo effect', 'correct_answer' => false]
                ]],
        ['id' => '0200b5bb-f68a-59db-8c5f-f9ac3495a42b', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which predicted phenomenon says an accelerating observer perceives a thermal bath in the Minkowski vacuum?', 'difficulty' => 5, 'weight' => 959, 'alternatives' => [
                    ['id' => '8fa2eab6-5d1d-5c3a-9a10-2376fc57836b', 'description' => 'Sagnac effect', 'correct_answer' => false],
                    ['id' => '49bc3e90-c422-5c23-b561-65d5266d37f0', 'description' => 'Berry phase', 'correct_answer' => false],
                    ['id' => '3381e689-6f29-519c-b5ff-94f2b3ec1b45', 'description' => 'Unruh effect', 'correct_answer' => true],
                    ['id' => 'cb99a3a8-b623-5324-ab29-25619c1b22f2', 'description' => 'Schwinger effect', 'correct_answer' => false],
                    ['id' => 'b3c433c3-826c-539f-84b0-ae4fd794d5e6', 'description' => 'Aharonov–Bohm effect', 'correct_answer' => false]
                ]],
        ['id' => '223c47cc-04e1-55bf-9391-ff86f29511fb', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which quantum phenomenon produces an attractive force between closely spaced conducting plates?', 'difficulty' => 5, 'weight' => 943, 'alternatives' => [
                    ['id' => 'd4ec6e6a-7bd1-5fe8-ba00-322ec0c244fd', 'description' => 'Hawking radiation', 'correct_answer' => false],
                    ['id' => '21141f69-8829-5816-8a03-cb1324b55728', 'description' => 'Unruh effect', 'correct_answer' => false],
                    ['id' => '2e2f4768-aa2c-52fd-ad3a-d46347287b7f', 'description' => 'Lamb shift', 'correct_answer' => false],
                    ['id' => '54538d2a-6516-5564-9e02-7a842544b423', 'description' => 'Berry phase', 'correct_answer' => false],
                    ['id' => 'df5a94f8-4c00-5f6b-9858-dea11fd4fac1', 'description' => 'Casimir effect', 'correct_answer' => true]
                ]],
        ['id' => '7997c502-68dd-537d-b3dc-2bd63be3c1ef', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which small energy difference in hydrogen is explained by quantum electrodynamic effects?', 'difficulty' => 5, 'weight' => 935, 'alternatives' => [
                    ['id' => 'c8ca80d9-35fb-5907-80e8-fd55862a7bd9', 'description' => 'Sagnac effect', 'correct_answer' => false],
                    ['id' => 'ff08fa5b-d235-50f4-965c-f2ee1bfd7fa3', 'description' => 'Mössbauer effect', 'correct_answer' => false],
                    ['id' => '86b96953-f2c0-581a-ab63-0d78ad7528fa', 'description' => 'Berry phase', 'correct_answer' => false],
                    ['id' => '84edb1de-ba37-5fa9-a0e2-7f34fccac455', 'description' => 'Lamb shift', 'correct_answer' => true],
                    ['id' => '4c2047aa-5bb3-5088-b4a4-37ea53cbf0f1', 'description' => 'Hawking radiation', 'correct_answer' => false]
                ]],
        ['id' => 'dc2c14f7-e7f4-59be-bd66-0a449e78f4ef', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which condensed-matter phenomenon involves conduction electrons scattering from magnetic impurities at low temperatures?', 'difficulty' => 5, 'weight' => 857, 'alternatives' => [
                    ['id' => 'aaedd2bc-8686-5ed9-a553-41ceb5dc1baa', 'description' => 'Kondo effect', 'correct_answer' => true],
                    ['id' => '575ebd86-0a56-5bab-b673-579222417be4', 'description' => 'Schwinger effect', 'correct_answer' => false],
                    ['id' => 'c5a8c422-8e44-5779-a6d8-34b44dfdf83f', 'description' => 'Casimir effect', 'correct_answer' => false],
                    ['id' => '6fc58a33-5142-50a3-a56d-a76f563ae50a', 'description' => 'Hawking radiation', 'correct_answer' => false],
                    ['id' => '3e79aa3b-992f-5131-9d97-fe943332660b', 'description' => 'Aharonov–Bohm effect', 'correct_answer' => false]
                ]],
        ['id' => 'ad1541c8-fc91-59ac-8a33-5f4923f4fd3b', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which phenomenon causes counter-propagating light beams on a rotating platform to accumulate a phase difference?', 'difficulty' => 5, 'weight' => 897, 'alternatives' => [
                    ['id' => '68bb43fc-175f-59df-81f0-b8f4c2469817', 'description' => 'Kondo effect', 'correct_answer' => false],
                    ['id' => '01851c8f-96e1-5d4d-960f-b2a6f1684e6c', 'description' => 'Berry phase', 'correct_answer' => false],
                    ['id' => 'b39c050d-24bd-5561-b87e-d98bc2a135d9', 'description' => 'Lamb shift', 'correct_answer' => false],
                    ['id' => 'a66176a3-84c9-5213-8f7e-65922038be3b', 'description' => 'Sagnac effect', 'correct_answer' => true],
                    ['id' => '27840200-10c5-5bcb-b96a-2d1a8befb152', 'description' => 'Hawking radiation', 'correct_answer' => false]
                ]],
        ['id' => '47669575-028e-5dc9-bec4-2767e256d854', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which geometric phase is acquired when quantum-system parameters vary adiabatically around a closed loop?', 'difficulty' => 5, 'weight' => 950, 'alternatives' => [
                    ['id' => '11ff84b6-c420-5b15-ba95-6bf1337a206c', 'description' => 'Sagnac effect', 'correct_answer' => false],
                    ['id' => '0906f421-60f7-5410-bb58-2286bfa53609', 'description' => 'Unruh effect', 'correct_answer' => false],
                    ['id' => 'e545daa7-9a6f-5966-8375-cb47507080cb', 'description' => 'Schwinger effect', 'correct_answer' => false],
                    ['id' => 'cc02eb43-027e-5ef1-8075-2f07596210e6', 'description' => 'Berry phase', 'correct_answer' => true],
                    ['id' => 'b30b2277-9212-52ca-ab9e-d2a3777e6f8a', 'description' => 'Hawking radiation', 'correct_answer' => false]
                ]],
        ['id' => '3d1e8743-5247-50e0-abe5-8c2267eed21c', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which nuclear phenomenon allows recoil-free resonant emission and absorption of gamma rays in solids?', 'difficulty' => 5, 'weight' => 841, 'alternatives' => [
                    ['id' => '3ea8e8ee-20ca-56c7-a3cb-87a712fbb589', 'description' => 'Schwinger effect', 'correct_answer' => false],
                    ['id' => '028fb028-3e1a-5be7-9ddf-59c15dec5ae5', 'description' => 'Kondo effect', 'correct_answer' => false],
                    ['id' => '62f85548-a651-569d-b9e3-76931662fd44', 'description' => 'Mössbauer effect', 'correct_answer' => true],
                    ['id' => '20277f8f-cc58-59f9-a7d2-3fbd6f4cfcb8', 'description' => 'Unruh effect', 'correct_answer' => false],
                    ['id' => '4080df4e-3e7c-546a-93bf-a46e70542f22', 'description' => 'Hawking radiation', 'correct_answer' => false]
                ]],
        ['id' => '63975d93-0477-538b-bff5-a446ceb4ad0e', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which framework relates supersymmetric gauge theories to low-energy effective descriptions and moduli spaces?', 'difficulty' => 5, 'weight' => 858, 'alternatives' => [
                    ['id' => '34259e78-fa94-5b6e-94e4-23efd67c4bc6', 'description' => 'Conformal bootstrap', 'correct_answer' => false],
                    ['id' => 'a2d3c94e-541e-5d39-814f-4a37c98ab8fb', 'description' => 'BRST symmetry', 'correct_answer' => false],
                    ['id' => 'e04b1503-2713-5830-923e-27ee4a6d396a', 'description' => 'String landscape', 'correct_answer' => false],
                    ['id' => 'd0afcfcc-d5e1-56fa-b0b9-8d3b024b313a', 'description' => 'Maldacena correspondence', 'correct_answer' => false],
                    ['id' => '60b107a9-b79d-5c97-9858-c3e11347a5e9', 'description' => 'Seiberg–Witten theory', 'correct_answer' => true]
                ]],
        ['id' => '79db53c7-b8bf-5295-9a71-9310e313bd5b', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which research program seeks criteria distinguishing theories compatible with quantum gravity from those that are not?', 'difficulty' => 5, 'weight' => 970, 'alternatives' => [
                    ['id' => 'dcd960fa-1363-5403-a956-9b3dfe5e8c41', 'description' => 'Swampland program', 'correct_answer' => true],
                    ['id' => 'b6e48c5e-9190-5418-9d1b-9e924e084550', 'description' => 'Maldacena correspondence', 'correct_answer' => false],
                    ['id' => 'c449f169-d7ee-5849-b079-f415848f77a5', 'description' => 'AdS/CFT correspondence', 'correct_answer' => false],
                    ['id' => '786117f2-0190-5a9f-9c16-3d35762a5ed1', 'description' => 'String landscape', 'correct_answer' => false],
                    ['id' => '3f13770e-97a3-5608-a5ff-2c632fff83ed', 'description' => 'Conformal bootstrap', 'correct_answer' => false]
                ]],
        ['id' => '4d16f1b2-64bc-5f11-b1ee-06e467e65150', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which method constrains conformal field theories using consistency conditions on correlation functions?', 'difficulty' => 5, 'weight' => 848, 'alternatives' => [
                    ['id' => 'bdb12c32-ef55-5bc5-aa2b-9200128abb10', 'description' => 'Swampland program', 'correct_answer' => false],
                    ['id' => '00d92c35-c039-59b2-8d05-0ac0e4bb2f8b', 'description' => 'Holographic principle', 'correct_answer' => false],
                    ['id' => 'a51e5d27-c218-58ee-9f4b-ac30a7845ce3', 'description' => 'Batalin–Vilkovisky formalism', 'correct_answer' => false],
                    ['id' => '0e60df95-2c3a-54a0-b966-aecd1b5d6744', 'description' => 'Maldacena correspondence', 'correct_answer' => false],
                    ['id' => '2bbef8dd-3149-566a-b1cd-b2edef4ecdc3', 'description' => 'Conformal bootstrap', 'correct_answer' => true]
                ]],
        ['id' => '30268341-e174-54dd-a170-f276c752161f', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which term describes the vast set of possible vacuum solutions in string theory?', 'difficulty' => 5, 'weight' => 830, 'alternatives' => [
                    ['id' => 'b06fd770-226a-506c-8a37-6b69cbd5f576', 'description' => 'Holographic principle', 'correct_answer' => false],
                    ['id' => 'b834a4ab-e37d-5494-8c07-a9290b603670', 'description' => 'BRST symmetry', 'correct_answer' => false],
                    ['id' => '267e128a-f7f6-59e6-a313-8bc803032069', 'description' => 'Faddeev–Popov procedure', 'correct_answer' => false],
                    ['id' => '2fbcd5f7-4442-5e27-824d-78f11babbc78', 'description' => 'String landscape', 'correct_answer' => true],
                    ['id' => '6bb0e58e-79c4-599a-bc9d-596ef0a5a0db', 'description' => 'Maldacena correspondence', 'correct_answer' => false]
                ]],
        ['id' => 'ff4d4ad9-ddf9-56e0-add0-2641acfbd01f', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which method introduces ghost fields when quantizing gauge theories through functional integrals?', 'difficulty' => 5, 'weight' => 874, 'alternatives' => [
                    ['id' => '4a86eab2-9968-56f1-88b9-e3e1731b8ab8', 'description' => 'String landscape', 'correct_answer' => false],
                    ['id' => 'f32dccc7-27c5-5234-91c7-12ebadd40052', 'description' => 'Seiberg–Witten theory', 'correct_answer' => false],
                    ['id' => '38be5ac2-ab21-5972-8bc8-b2ee9123c942', 'description' => 'Faddeev–Popov procedure', 'correct_answer' => true],
                    ['id' => 'd7badbb8-c671-54b3-bb37-d7b76e640e53', 'description' => 'Holographic principle', 'correct_answer' => false],
                    ['id' => '3f252611-7b02-52e1-b5de-463897e2ddd0', 'description' => 'BRST symmetry', 'correct_answer' => false]
                ]],
        ['id' => 'f355d67e-8281-50e1-bd50-f92dba4417d1', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which framework extends BRST quantization to gauge theories with more general gauge symmetries?', 'difficulty' => 5, 'weight' => 937, 'alternatives' => [
                    ['id' => '4d92b8b8-7fe0-5373-9e16-489ae90026eb', 'description' => 'String landscape', 'correct_answer' => false],
                    ['id' => 'f18af571-091b-59ac-bcb5-0875ba6bf2a0', 'description' => 'Seiberg–Witten theory', 'correct_answer' => false],
                    ['id' => 'c75accab-a4cc-5f0b-ad3b-73ce7490f6d0', 'description' => 'BRST symmetry', 'correct_answer' => false],
                    ['id' => '555ed145-2a15-567a-9675-4f71095d7d16', 'description' => 'Batalin–Vilkovisky formalism', 'correct_answer' => true],
                    ['id' => '4052513a-5706-51e6-ad25-22e6e564ce66', 'description' => 'Holographic principle', 'correct_answer' => false]
                ]],
        ['id' => 'dce10456-7c39-5a2e-a151-1c7637333618', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'What is another name for the AdS/CFT duality proposed by Juan Maldacena?', 'difficulty' => 5, 'weight' => 831, 'alternatives' => [
                    ['id' => 'd811ce8a-3d78-573d-8ca8-4564a678a872', 'description' => 'AdS/CFT correspondence', 'correct_answer' => false],
                    ['id' => '9e9bc793-7c6e-5ceb-b8a4-261a25d34df5', 'description' => 'Holographic principle', 'correct_answer' => false],
                    ['id' => '39d7dba0-fef0-5650-9cc0-cf92e81b8b35', 'description' => 'Seiberg–Witten theory', 'correct_answer' => false],
                    ['id' => 'b44bc6c3-063e-5c47-8eca-2acf988d4501', 'description' => 'BRST symmetry', 'correct_answer' => false],
                    ['id' => '55406d7a-3fe9-510c-ae75-5261e96007aa', 'description' => 'Maldacena correspondence', 'correct_answer' => true]
                ]],
        ['id' => 'd864b683-eb5d-5f6a-bcd3-d596b6c181a3', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which conjectured duality relates gravity in anti-de Sitter space to a conformal field theory on its boundary?', 'difficulty' => 5, 'weight' => 982, 'alternatives' => [
                    ['id' => '14627607-c297-54bd-99ac-95d2823f1731', 'description' => 'AdS/CFT correspondence', 'correct_answer' => true],
                    ['id' => '76c0d54a-19ff-5fef-a4e5-e86e333155aa', 'description' => 'Faddeev–Popov procedure', 'correct_answer' => false],
                    ['id' => 'fbefbfb5-b680-5339-b7e6-f9c45aaa5687', 'description' => 'Maldacena correspondence', 'correct_answer' => false],
                    ['id' => '63588ef1-fc1d-5e54-bcc4-b9fd974e619b', 'description' => 'String landscape', 'correct_answer' => false],
                    ['id' => '1d5550bf-6b63-5ff2-bbec-4ff3f5aa1733', 'description' => 'Conformal bootstrap', 'correct_answer' => false]
                ]],
        ['id' => '1704e3aa-4856-5544-ad1c-9213a122dfbd', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which Eocene fossil site in Germany preserves detailed mammals, birds, and insects?', 'difficulty' => 5, 'weight' => 983, 'alternatives' => [
                    ['id' => '906a5563-78ec-5111-8d3b-df26ff90b19c', 'description' => 'Sirius Passet', 'correct_answer' => false],
                    ['id' => '3f4ab46c-0b55-5024-8589-ac3d7d37c206', 'description' => 'Burgess Shale', 'correct_answer' => false],
                    ['id' => '4c97e0eb-20d1-5df9-a92f-2250eed7f579', 'description' => 'Rhynie chert', 'correct_answer' => false],
                    ['id' => '3adc822a-3b76-5315-887e-7cae5dd26bf0', 'description' => 'Chengjiang biota', 'correct_answer' => false],
                    ['id' => 'fd57d2d1-458c-5aaf-a2b6-f05c1e1e0b86', 'description' => 'Messel pit', 'correct_answer' => true]
                ]],
        ['id' => 'b2e60513-10ca-5a8e-9467-1156e56f66b0', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which Pleistocene fossil deposit in Los Angeles is rich in dire wolves and saber-toothed cats?', 'difficulty' => 5, 'weight' => 971, 'alternatives' => [
                    ['id' => 'db12dafe-0c38-5af4-9bb4-d85b42bce523', 'description' => 'Doushantuo biota', 'correct_answer' => false],
                    ['id' => '29385f6e-495e-5f7e-9080-92780abf8448', 'description' => 'Sirius Passet', 'correct_answer' => false],
                    ['id' => '9ade2edf-31b4-5206-80a0-fe0f9cc2cb26', 'description' => 'Solnhofen limestone', 'correct_answer' => false],
                    ['id' => 'af77b448-5c03-5fed-90e0-bdd628a11423', 'description' => 'Burgess Shale', 'correct_answer' => false],
                    ['id' => '45831f50-86b8-5ad5-853b-8de4fba4307e', 'description' => 'La Brea Tar Pits', 'correct_answer' => true]
                ]],
        ['id' => '1a2a84c6-e6ea-5ad7-a47f-f0d51fd499ab', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which early Cambrian fossil assemblage in Yunnan, China, preserves soft-bodied organisms?', 'difficulty' => 5, 'weight' => 805, 'alternatives' => [
                    ['id' => 'e393c55c-3fb8-5dc5-8e78-2c5093673714', 'description' => 'Burgess Shale', 'correct_answer' => false],
                    ['id' => '0ddad942-7e1a-56a4-a2d7-8afc438b2290', 'description' => 'Sirius Passet', 'correct_answer' => false],
                    ['id' => '0343c748-1444-5ebe-bdd3-ec5f297d22f9', 'description' => 'Doushantuo biota', 'correct_answer' => false],
                    ['id' => 'dab42dcb-c07a-55d7-9bdc-b1474ad74294', 'description' => 'Chengjiang biota', 'correct_answer' => true],
                    ['id' => '4ad616a0-6504-522b-9c61-5fdb9da4e5ff', 'description' => 'Rhynie chert', 'correct_answer' => false]
                ]],
        ['id' => '47804b31-41b0-568b-850c-45e39ed00a14', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which Neoproterozoic fossil assemblage in China includes microscopic fossils and possible animal embryos?', 'difficulty' => 5, 'weight' => 914, 'alternatives' => [
                    ['id' => '40c611b8-92ae-5d28-92c5-63b6a6b5446b', 'description' => 'Doushantuo biota', 'correct_answer' => true],
                    ['id' => '72191bc3-5ced-56d5-a61a-dc246dd7712d', 'description' => 'Burgess Shale', 'correct_answer' => false],
                    ['id' => '61eed1d5-d952-5864-9b01-dd0502f6d862', 'description' => 'Messel pit', 'correct_answer' => false],
                    ['id' => '3c4e3f48-8dfe-556f-8b45-b30351e41e82', 'description' => 'Chengjiang biota', 'correct_answer' => false],
                    ['id' => '19efa610-d451-5590-b110-7df3df5afcaf', 'description' => 'La Brea Tar Pits', 'correct_answer' => false]
                ]],
        ['id' => 'de7fe186-6519-52e3-ae9f-eb7805a8e99e', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which early Cambrian fossil locality is found in North Greenland?', 'difficulty' => 5, 'weight' => 964, 'alternatives' => [
                    ['id' => 'addd8333-1267-5552-83b1-aa43da225412', 'description' => 'Sirius Passet', 'correct_answer' => true],
                    ['id' => '4cf49b08-77ce-50e2-b010-2ef53a8eeb76', 'description' => 'Mazon Creek', 'correct_answer' => false],
                    ['id' => 'dad94dd9-a4b0-5207-a392-c1ae8df9fc22', 'description' => 'Doushantuo biota', 'correct_answer' => false],
                    ['id' => 'e01ad683-ec9b-5d46-94fa-f9c745a0811a', 'description' => 'Solnhofen limestone', 'correct_answer' => false],
                    ['id' => 'fe0682ca-84e9-5814-9f27-8fd07bc086ab', 'description' => 'Ediacaran biota', 'correct_answer' => false]
                ]],
        ['id' => '6a0d9d20-5f99-5835-a8c3-f5cc8fab39b7', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'What name is given to mostly soft-bodied organisms that lived before the Cambrian explosion?', 'difficulty' => 5, 'weight' => 817, 'alternatives' => [
                    ['id' => 'e120e875-9903-5138-bf8e-2649b3723d66', 'description' => 'Solnhofen limestone', 'correct_answer' => false],
                    ['id' => '6705723b-705a-56fc-8be6-1494c08b5e5e', 'description' => 'Chengjiang biota', 'correct_answer' => false],
                    ['id' => '8e985b8a-e7a5-5978-92f0-b787ba19105e', 'description' => 'Messel pit', 'correct_answer' => false],
                    ['id' => '66b6e778-bf34-5ec3-a41c-942cdea0837c', 'description' => 'Burgess Shale', 'correct_answer' => false],
                    ['id' => '1cc9f9c1-45f6-55c3-9035-d23c6ff33ce6', 'description' => 'Ediacaran biota', 'correct_answer' => true]
                ]],
        ['id' => '75464ba9-a99d-5617-939c-a749c4f35281', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which Carboniferous fossil deposit in Illinois is known for ironstone concretions?', 'difficulty' => 5, 'weight' => 1000, 'alternatives' => [
                    ['id' => '3b533ef4-145e-5ea9-84e8-d5f648dd0b58', 'description' => 'Rhynie chert', 'correct_answer' => false],
                    ['id' => 'dd3bf21a-2197-5d7b-9d4a-81afb58b1661', 'description' => 'Doushantuo biota', 'correct_answer' => false],
                    ['id' => 'e5cee12c-56b2-5aab-9a0e-c9c07928a9dd', 'description' => 'Mazon Creek', 'correct_answer' => true],
                    ['id' => '0c11d929-0593-5575-8a6b-773654620934', 'description' => 'Messel pit', 'correct_answer' => false],
                    ['id' => 'd87e276c-b089-5cbc-9967-d3cdd9ab7b42', 'description' => 'Chengjiang biota', 'correct_answer' => false]
                ]],
        ['id' => 'a69a19d8-f9f0-55a1-8f4a-36669c98316e', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which Late Jurassic fossil deposit in Germany is famous for Archaeopteryx specimens?', 'difficulty' => 5, 'weight' => 927, 'alternatives' => [
                    ['id' => '147213c4-7560-5754-b7d2-178bf98c1216', 'description' => 'La Brea Tar Pits', 'correct_answer' => false],
                    ['id' => 'f1b8e314-2238-5d5b-a100-904e04054e61', 'description' => 'Rhynie chert', 'correct_answer' => false],
                    ['id' => 'f57cecac-62c4-5859-a3f8-c25f7a81d596', 'description' => 'Doushantuo biota', 'correct_answer' => false],
                    ['id' => '7974f963-e52e-558a-b943-cd0666ef233d', 'description' => 'Burgess Shale', 'correct_answer' => false],
                    ['id' => '86578f9a-441c-57a1-a7ba-6e523d4c4b38', 'description' => 'Solnhofen limestone', 'correct_answer' => true]
                ]],
        ['id' => '7ea7b6d2-d1c0-5e2f-932d-a4b9072e1c74', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which developmental gene family helps establish the anterior-posterior body plan in animals?', 'difficulty' => 5, 'weight' => 995, 'alternatives' => [
                    ['id' => '980acad5-c43d-596b-ac41-856725a04f1c', 'description' => 'Hox genes', 'correct_answer' => true],
                    ['id' => 'e2e2afce-7bb3-5b44-ae3f-dc2cd633f35e', 'description' => 'MyoD', 'correct_answer' => false],
                    ['id' => 'c472cf68-6172-5680-97d7-6e0eeb15f0f1', 'description' => 'Sonic hedgehog', 'correct_answer' => false],
                    ['id' => 'c012715d-1bb3-5628-93e6-82a0faa15538', 'description' => 'Pax6', 'correct_answer' => false],
                    ['id' => 'e9bd0fe1-2c0b-5ac0-a727-50ccc552f62f', 'description' => 'Dorsal', 'correct_answer' => false]
                ]],
        ['id' => 'bc5f90ef-4be5-5ae7-ab12-95101d4c2a16', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which master regulatory gene is strongly associated with eye development?', 'difficulty' => 5, 'weight' => 889, 'alternatives' => [
                    ['id' => '578727fe-0eb7-5e08-9ca1-a071f3cb4b34', 'description' => 'Bicoid', 'correct_answer' => false],
                    ['id' => 'edd46c28-7f01-5348-abee-c386dc88408a', 'description' => 'MyoD', 'correct_answer' => false],
                    ['id' => '4a1b8cb1-249f-5a6d-80b5-da33d41b1af5', 'description' => 'Snail', 'correct_answer' => false],
                    ['id' => '01d48598-b359-5cc8-9b7e-e2eade43d23e', 'description' => 'Pax6', 'correct_answer' => true],
                    ['id' => 'e3145afd-ef93-5684-b86e-11b5d5991792', 'description' => 'Nanos', 'correct_answer' => false]
                ]],
        ['id' => '8a06dfc7-7b64-5fce-b7fd-9b35fcfe3375', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which maternal-effect morphogen establishes anterior patterning in Drosophila embryos?', 'difficulty' => 5, 'weight' => 961, 'alternatives' => [
                    ['id' => '91d2bf94-ef97-5487-bf25-751557cbd559', 'description' => 'Snail', 'correct_answer' => false],
                    ['id' => '879e7544-1c07-5d2a-8269-c0a872f518d0', 'description' => 'Sonic hedgehog', 'correct_answer' => false],
                    ['id' => '76665587-c8be-5f95-b4b9-e607694f7992', 'description' => 'Twist', 'correct_answer' => false],
                    ['id' => '4396452a-fdf2-560e-b942-ea464690f37d', 'description' => 'Bicoid', 'correct_answer' => true],
                    ['id' => '55ad9400-a66e-545a-8275-668844b4a288', 'description' => 'MyoD', 'correct_answer' => false]
                ]],
        ['id' => 'd1fa0668-d16e-5c43-99f8-108976dd1083', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which signaling protein is crucial for patterning the vertebrate neural tube and limbs?', 'difficulty' => 5, 'weight' => 912, 'alternatives' => [
                    ['id' => '870d6bfc-673a-542c-82fb-a0a9de077762', 'description' => 'Tbx5', 'correct_answer' => false],
                    ['id' => '040c54d8-e112-522e-8a06-d7428ca69216', 'description' => 'MyoD', 'correct_answer' => false],
                    ['id' => '8a4e2b8e-d56a-5126-ab2b-9c1f551cfd6a', 'description' => 'Twist', 'correct_answer' => false],
                    ['id' => '2948c6b0-d855-5029-a69c-6fb674a21ecf', 'description' => 'Bicoid', 'correct_answer' => false],
                    ['id' => '4e8070cf-225c-586e-b9c5-224e40c91aac', 'description' => 'Sonic hedgehog', 'correct_answer' => true]
                ]],
        ['id' => '2aa42737-8830-54a2-8c27-939c5066f868', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which T-box transcription factor is associated with heart and forelimb development and Holt-Oram syndrome?', 'difficulty' => 5, 'weight' => 814, 'alternatives' => [
                    ['id' => '5425df1f-2674-5135-981d-84d8f4fca66b', 'description' => 'Hox genes', 'correct_answer' => false],
                    ['id' => '916a90a3-420f-58d1-b3f5-ff959045b75a', 'description' => 'MyoD', 'correct_answer' => false],
                    ['id' => '9741414a-c150-5c33-9a62-ff25a892bf51', 'description' => 'Tbx5', 'correct_answer' => true],
                    ['id' => '86c5c7e0-4782-50f8-bbea-707e7c099933', 'description' => 'Dorsal', 'correct_answer' => false],
                    ['id' => '0bc0d764-43f1-5327-87c4-ddf19fff4ac6', 'description' => 'Nanos', 'correct_answer' => false]
                ]],
        ['id' => '58017271-f825-5578-8e52-7f44caea4c34', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which Drosophila transcription factor forms a nuclear gradient that helps specify the dorsoventral axis?', 'difficulty' => 5, 'weight' => 944, 'alternatives' => [
                    ['id' => '6d7ac85b-0248-5701-88d3-363874315c63', 'description' => 'Hox genes', 'correct_answer' => false],
                    ['id' => '90e66c1d-bbbe-5227-a6e1-575e865565d7', 'description' => 'Sonic hedgehog', 'correct_answer' => false],
                    ['id' => 'c21fb304-c40c-5025-959b-ea58c201dca4', 'description' => 'Pax6', 'correct_answer' => false],
                    ['id' => '26c6f943-8fd8-5030-b5cf-154e086bb32e', 'description' => 'Dorsal', 'correct_answer' => true],
                    ['id' => 'c500a3c5-676f-508b-be1c-0f7927e9a7a6', 'description' => 'Nanos', 'correct_answer' => false]
                ]],
        ['id' => '874ee3d1-44b3-5695-8b4d-45ac9f6810ca', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which transcription factor is involved in mesoderm formation and epithelial-to-mesenchymal transition?', 'difficulty' => 5, 'weight' => 891, 'alternatives' => [
                    ['id' => '31baf07f-5c96-5935-93d6-fc11dfe1124c', 'description' => 'Twist', 'correct_answer' => true],
                    ['id' => '8847573f-3fc7-5f60-81c0-30766cd6b0e4', 'description' => 'Hox genes', 'correct_answer' => false],
                    ['id' => '584c5cd8-d0b3-55f5-8bfe-073caeec73f4', 'description' => 'Sonic hedgehog', 'correct_answer' => false],
                    ['id' => 'efddb9d7-ad09-5727-95af-877108ec5b0d', 'description' => 'MyoD', 'correct_answer' => false],
                    ['id' => '3a3dbcda-76c4-58bb-ab6e-d2276f4cb9ba', 'description' => 'Pax6', 'correct_answer' => false]
                ]],
        ['id' => 'f8b3f6df-cd2c-5702-aa55-65c2b2758009', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which transcription-factor family represses epithelial genes and promotes epithelial-to-mesenchymal transition?', 'difficulty' => 5, 'weight' => 965, 'alternatives' => [
                    ['id' => '767257b5-791f-5f2d-9ccd-7d95b6ab6efc', 'description' => 'Snail', 'correct_answer' => true],
                    ['id' => '6c2b2829-5eeb-5488-9bbd-a8a0da88ef56', 'description' => 'Tbx5', 'correct_answer' => false],
                    ['id' => 'fff33698-b5b1-5711-b4f7-e4f6f439010a', 'description' => 'Sonic hedgehog', 'correct_answer' => false],
                    ['id' => 'f4e82339-7ec1-52f6-88d5-f6fe0f4caea8', 'description' => 'Hox genes', 'correct_answer' => false],
                    ['id' => '0436a4c0-7f68-5be4-ba85-73d185d217da', 'description' => 'Dorsal', 'correct_answer' => false]
                ]],
        ['id' => '49582940-2c04-56b1-b9e7-554e77b37023', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which poorly understood Bronze Age script is attested on inscriptions from Byblos?', 'difficulty' => 5, 'weight' => 844, 'alternatives' => [
                    ['id' => 'a17bd26f-7bd4-502c-880b-d190905fdef4', 'description' => 'Cypro-Minoan', 'correct_answer' => false],
                    ['id' => 'dc9ee223-ee33-565c-a903-a36d56005480', 'description' => 'Rongorongo', 'correct_answer' => false],
                    ['id' => 'd64d500e-991a-578e-a66d-0d38a852c436', 'description' => 'Indus script', 'correct_answer' => false],
                    ['id' => 'f7268b7f-ede3-53da-9615-3f96b70d9207', 'description' => 'Proto-Elamite', 'correct_answer' => false],
                    ['id' => 'f9e4f126-ff4f-5d06-a6ea-549ac052c57a', 'description' => 'Byblos syllabary', 'correct_answer' => true]
                ]],
        ['id' => '177c169f-8bb4-530c-ab16-9a75aad3d95a', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which undeciphered Bronze Age syllabic script was used on Cyprus?', 'difficulty' => 5, 'weight' => 817, 'alternatives' => [
                    ['id' => '38aeb388-4082-509c-bb03-36349242303f', 'description' => 'Cypro-Minoan', 'correct_answer' => true],
                    ['id' => 'fa8f463d-e2d8-5cae-8c05-c546e8c92988', 'description' => 'Khipu', 'correct_answer' => false],
                    ['id' => '8a3efefa-c205-511a-a7e0-0458f23afc71', 'description' => 'Meroitic cursive', 'correct_answer' => false],
                    ['id' => 'd04ecf7e-e034-5a00-be69-7d8e78b4911b', 'description' => 'Proto-Elamite', 'correct_answer' => false],
                    ['id' => '4231aefe-1e76-5578-b200-fd65da1ad8e8', 'description' => 'Epi-Olmec script', 'correct_answer' => false]
                ]],
        ['id' => '062faa51-d05c-549b-91af-f4645f314b4d', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which undeciphered writing system was used in ancient Iran in the late fourth and early third millennia BCE?', 'difficulty' => 5, 'weight' => 996, 'alternatives' => [
                    ['id' => '59acfc29-1be3-5a5d-875b-d13fb4171285', 'description' => 'Khipu', 'correct_answer' => false],
                    ['id' => 'e0d7e883-b18c-5ad0-b4b3-1aad3f51737e', 'description' => 'Proto-Elamite', 'correct_answer' => true],
                    ['id' => '0fd95729-9762-52cb-ac96-86bd02c314b3', 'description' => 'Epi-Olmec script', 'correct_answer' => false],
                    ['id' => '735a7ee8-eac3-53f1-a259-662916776c5c', 'description' => 'Linear A', 'correct_answer' => false],
                    ['id' => '4812aa8f-be86-5bc8-a3f4-4fbd3042b513', 'description' => 'Rongorongo', 'correct_answer' => false]
                ]],
        ['id' => '2c98666c-b85a-548e-bcc8-f07d24ffc750', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which undeciphered Bronze Age script was used by the Minoans on Crete?', 'difficulty' => 5, 'weight' => 802, 'alternatives' => [
                    ['id' => '71ca7bec-c303-5f96-ac42-21d0155315d2', 'description' => 'Byblos syllabary', 'correct_answer' => false],
                    ['id' => '8d1dde3e-14c0-5652-899a-a54457e35390', 'description' => 'Rongorongo', 'correct_answer' => false],
                    ['id' => '7b246804-86a6-50f8-9a6a-19c92f4d961e', 'description' => 'Indus script', 'correct_answer' => false],
                    ['id' => 'a0a10f45-b993-527d-ad6b-eb7383deb139', 'description' => 'Linear A', 'correct_answer' => true],
                    ['id' => 'da1426a9-353f-590b-8bfb-e253ce68d164', 'description' => 'Khipu', 'correct_answer' => false]
                ]],
        ['id' => 'dd066c8e-5bab-50ff-8d36-ff2640d9df38', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which undeciphered sign system appears on seals from the Harappan civilization?', 'difficulty' => 5, 'weight' => 818, 'alternatives' => [
                    ['id' => 'e940229d-06ca-5439-a4a7-9fdda18fb1a6', 'description' => 'Linear A', 'correct_answer' => false],
                    ['id' => '4a95c789-38e4-56ee-a4be-16fd2946dbbc', 'description' => 'Indus script', 'correct_answer' => true],
                    ['id' => '2c21cf5b-0f47-5c21-b269-fb27a0fe5fb3', 'description' => 'Proto-Elamite', 'correct_answer' => false],
                    ['id' => '765bc517-80c2-57d4-b96a-76258680e49a', 'description' => 'Cypro-Minoan', 'correct_answer' => false],
                    ['id' => '5a9de7e0-febe-541c-a357-aa3a4ecd322e', 'description' => 'Khipu', 'correct_answer' => false]
                ]],
        ['id' => 'f3beeb56-7128-5ec8-a2d4-891afb5d70e6', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which undeciphered glyph system is associated with Rapa Nui?', 'difficulty' => 5, 'weight' => 1000, 'alternatives' => [
                    ['id' => '89582cdb-27fa-5fa1-84ed-21facfdfc9a7', 'description' => 'Epi-Olmec script', 'correct_answer' => false],
                    ['id' => '16a1c005-e43f-59b1-bc58-295a588c8e69', 'description' => 'Khipu', 'correct_answer' => false],
                    ['id' => 'e04a629b-3d41-5511-91b4-f80d346a4c18', 'description' => 'Rongorongo', 'correct_answer' => true],
                    ['id' => '5e3683e9-188f-5711-9e28-689ab4462774', 'description' => 'Proto-Elamite', 'correct_answer' => false],
                    ['id' => '9eb33f19-50ba-5df5-a310-3254dfe00998', 'description' => 'Meroitic cursive', 'correct_answer' => false]
                ]],
        ['id' => '9d60a8db-946c-5c59-a428-4bae9a8fbf15', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which Kushite script can be read phonetically although its language remains incompletely understood?', 'difficulty' => 5, 'weight' => 813, 'alternatives' => [
                    ['id' => 'd897d5e0-a3a6-5372-9400-76b27b28b2b4', 'description' => 'Meroitic cursive', 'correct_answer' => true],
                    ['id' => '9a4f55e8-e06a-51d9-a2f9-3e6ead8fbd74', 'description' => 'Indus script', 'correct_answer' => false],
                    ['id' => '8bbb8035-5987-5f4b-880a-8b41f6d587f3', 'description' => 'Epi-Olmec script', 'correct_answer' => false],
                    ['id' => '055e5725-5421-53d6-b7f2-1e7af2aac9ff', 'description' => 'Rongorongo', 'correct_answer' => false],
                    ['id' => '8f2eddf2-5ca0-55c8-aa96-688bc18a39c0', 'description' => 'Proto-Elamite', 'correct_answer' => false]
                ]],
        ['id' => 'adf1006b-17c3-564c-b302-2b0d262768c1', 'locale' => 'en-US', 'category' => 'c110d24f-cd12-50f3-9e4f-f5fe0597998d', 'question' => 'Which arrangement of stamped symbols on a unique Cretan clay disc remains undeciphered?', 'difficulty' => 5, 'weight' => 954, 'alternatives' => [
                    ['id' => '0e912218-4247-51e6-9894-a4671d41b941', 'description' => 'Khipu', 'correct_answer' => false],
                    ['id' => '589068bb-5820-5bfa-872a-2c75a6af9dd4', 'description' => 'Phaistos Disc script', 'correct_answer' => true],
                    ['id' => 'd24e0616-87aa-5ef6-8270-45f08d37cd70', 'description' => 'Proto-Elamite', 'correct_answer' => false],
                    ['id' => 'bbfb2c6b-932b-5b2a-99d9-33f99624ba89', 'description' => 'Epi-Olmec script', 'correct_answer' => false],
                    ['id' => '085da146-a44c-5da8-b07e-6a60ea873beb', 'description' => 'Byblos syllabary', 'correct_answer' => false]
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
