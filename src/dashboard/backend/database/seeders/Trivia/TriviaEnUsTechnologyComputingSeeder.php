<?php

namespace Database\Seeders\Trivia;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TriviaEnUsTechnologyComputingSeeder extends Seeder
{
    private const CATEGORY = ['id' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'created_by' => 'SYSTEM', 'short_description' => 'technology_computing', 'description' => 'Technology Computing'];

    private const QUESTIONS = [
        ['id' => 'b1f34572-0b82-596c-889a-f029b28027f6', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which language was developed at Bell Labs and influenced many later languages?', 'difficulty' => 1, 'weight' => 156, 'alternatives' => [
                    ['id' => '57d12a92-aa72-5f19-86e7-f05e4e8f8894', 'description' => 'PHP', 'correct_answer' => false],
                    ['id' => 'd2372327-837c-58c9-9beb-310462885f1d', 'description' => 'Ruby', 'correct_answer' => false],
                    ['id' => '95717098-9fd3-52cf-a8c2-070836af16ea', 'description' => 'Swift', 'correct_answer' => false],
                    ['id' => '614c4f0a-f153-5018-a083-b742aa2b79cf', 'description' => 'C', 'correct_answer' => true],
                    ['id' => '2bae467a-0676-5f99-91b1-293faf5b31fc', 'description' => 'C++', 'correct_answer' => false]
                ]],
        ['id' => '19e45741-2e77-5387-a70c-72f0889186ea', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which language is widely used for scripting and data science?', 'difficulty' => 1, 'weight' => 197, 'alternatives' => [
                    ['id' => '5c9c70fd-da23-5187-bb47-996c581a4f57', 'description' => 'Kotlin', 'correct_answer' => false],
                    ['id' => 'a16f74da-434a-5951-a9e1-378fe4ef7c6d', 'description' => 'Python', 'correct_answer' => true],
                    ['id' => '532d3f7b-e8b6-51af-b44f-2d5868738f47', 'description' => 'Ruby', 'correct_answer' => false],
                    ['id' => '2257628a-f8a1-5d37-86d9-47c5ced31f78', 'description' => 'C++', 'correct_answer' => false],
                    ['id' => 'acba3b09-11c1-5609-82b8-4d31482befa7', 'description' => 'Java', 'correct_answer' => false]
                ]],
        ['id' => '042a3052-1486-5803-8f2f-90af90025fa1', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which language was created by Yukihiro Matsumoto?', 'difficulty' => 1, 'weight' => 182, 'alternatives' => [
                    ['id' => '79e79430-fa75-5544-8661-341b66712202', 'description' => 'PHP', 'correct_answer' => false],
                    ['id' => 'd20a7809-7da4-5e00-b4b9-d56ee4089fc7', 'description' => 'Ruby', 'correct_answer' => true],
                    ['id' => 'b5f979d1-65bb-56f3-a8d2-b78f6b853d5e', 'description' => 'Go', 'correct_answer' => false],
                    ['id' => '6bba15e1-5e9b-553c-ab51-585e3e177757', 'description' => 'Swift', 'correct_answer' => false],
                    ['id' => 'c41f8799-d5e1-5d24-a8f3-8986bb63c0cf', 'description' => 'C++', 'correct_answer' => false]
                ]],
        ['id' => '7c73b69c-951a-55d0-8134-995a63bb1d27', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which language is officially supported for Android development?', 'difficulty' => 1, 'weight' => 158, 'alternatives' => [
                    ['id' => 'b279f843-e6d9-5922-92de-0b903dffbbba', 'description' => 'Kotlin', 'correct_answer' => true],
                    ['id' => 'e08f16f8-abfc-5a93-97e7-eea6cb995d40', 'description' => 'JavaScript', 'correct_answer' => false],
                    ['id' => '6e3fec66-dccd-5b26-94ef-242100eaee50', 'description' => 'Go', 'correct_answer' => false],
                    ['id' => 'e2748d19-d629-57e8-88e2-c7bcf406e91d', 'description' => 'C', 'correct_answer' => false],
                    ['id' => 'b4b71f67-4c65-5fcf-a531-a8dd6003d2bb', 'description' => 'Python', 'correct_answer' => false]
                ]],
        ['id' => 'dc35082a-e780-50f0-b95a-fb294b9c5e55', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which language is commonly used to develop Apple-platform apps?', 'difficulty' => 1, 'weight' => 152, 'alternatives' => [
                    ['id' => '91c70e3e-3787-5ff0-a323-093d9b57480b', 'description' => 'Kotlin', 'correct_answer' => false],
                    ['id' => 'e094fcc0-396f-577f-826e-09a5bc6653f2', 'description' => 'Swift', 'correct_answer' => true],
                    ['id' => 'b942977f-e311-568f-b7d9-c1467d613319', 'description' => 'JavaScript', 'correct_answer' => false],
                    ['id' => 'c745df4f-4a91-5923-a2f4-da3d4f7527ec', 'description' => 'Python', 'correct_answer' => false],
                    ['id' => 'faf4d392-78b5-5e93-ae30-39c80cd46a14', 'description' => 'Ruby', 'correct_answer' => false]
                ]],
        ['id' => '49ef1325-c012-5b5f-a683-9bfb3f2b102a', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which language extends C with object-oriented features?', 'difficulty' => 1, 'weight' => 153, 'alternatives' => [
                    ['id' => '66adc6d0-e74c-5503-ac31-ce86dbddad4b', 'description' => 'PHP', 'correct_answer' => false],
                    ['id' => '2cf69043-dd27-5294-8015-6dca3dc6add0', 'description' => 'Swift', 'correct_answer' => false],
                    ['id' => '8e6ac4ff-5987-5781-972a-2daacb7276fd', 'description' => 'Java', 'correct_answer' => false],
                    ['id' => '8a1aa4c2-14fb-5dae-b37b-7ebf30bce14c', 'description' => 'Python', 'correct_answer' => false],
                    ['id' => '96845be3-e9ca-545b-862e-ad52579803b6', 'description' => 'C++', 'correct_answer' => true]
                ]],
        ['id' => '0d9ba5c5-0e24-55bf-bf36-9203d38b20c8', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which language is the standard scripting language of web browsers?', 'difficulty' => 1, 'weight' => 199, 'alternatives' => [
                    ['id' => '39c3f3ef-1082-585f-8495-84a11df088a6', 'description' => 'Go', 'correct_answer' => false],
                    ['id' => '3aa789b9-42d3-5154-ab4a-969e7085b707', 'description' => 'Swift', 'correct_answer' => false],
                    ['id' => '359db7d2-6a47-56b5-9bdb-9c3ab331e020', 'description' => 'Java', 'correct_answer' => false],
                    ['id' => '0213dd4e-cb51-5bc3-8fcf-1c6d776dcdc2', 'description' => 'JavaScript', 'correct_answer' => true],
                    ['id' => '2ec311d3-8566-506b-bb11-0718eec82796', 'description' => 'C++', 'correct_answer' => false]
                ]],
        ['id' => 'e1d40289-2918-5f34-abd2-94b13505d34a', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which language was developed at Google and has built-in concurrency support?', 'difficulty' => 1, 'weight' => 180, 'alternatives' => [
                    ['id' => 'd39df3e9-6205-5380-8a03-bec6080051c5', 'description' => 'Python', 'correct_answer' => false],
                    ['id' => 'c103c7cf-9cdb-5ef3-bb97-d33966d26592', 'description' => 'C', 'correct_answer' => false],
                    ['id' => 'bbaa2b6e-74e8-52fe-9307-7a288f0713ec', 'description' => 'Go', 'correct_answer' => true],
                    ['id' => 'e2cf4ed2-ed2c-5150-9132-db3fca42cd91', 'description' => 'Java', 'correct_answer' => false],
                    ['id' => '17ecd8ab-a6af-5429-8dbe-a070bf5d7dc9', 'description' => 'PHP', 'correct_answer' => false]
                ]],
        ['id' => '559cfbbe-57ae-5325-a583-02aeec7571a9', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which API query language was developed by Facebook?', 'difficulty' => 1, 'weight' => 122, 'alternatives' => [
                    ['id' => 'b0e351ab-876a-5a4a-a5f9-4940c60dc022', 'description' => 'JSON', 'correct_answer' => false],
                    ['id' => '4d6d9baf-a4e1-5873-ad8b-4d36b14917fa', 'description' => 'CSS', 'correct_answer' => false],
                    ['id' => 'c1dcd130-be9d-526d-ba68-66ba74d80e91', 'description' => 'HTML', 'correct_answer' => false],
                    ['id' => '882e118c-6821-5544-b99f-d56098bcfcff', 'description' => 'TOML', 'correct_answer' => false],
                    ['id' => 'e1bb4f7d-e2aa-5b2a-a9ab-76488494b5aa', 'description' => 'GraphQL', 'correct_answer' => true]
                ]],
        ['id' => 'ed2fbaa3-ca51-542b-bf84-f049f7e71d09', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which lightweight markup language uses symbols such as # for headings?', 'difficulty' => 1, 'weight' => 129, 'alternatives' => [
                    ['id' => 'fe14ebdb-77a4-568b-ad4d-eb272e823525', 'description' => 'HTML', 'correct_answer' => false],
                    ['id' => 'b2e92150-54b9-58bd-9e12-9062956ebd4a', 'description' => 'CSV', 'correct_answer' => false],
                    ['id' => '3ce4c4e0-047c-50b1-877e-eef0036b31c2', 'description' => 'Markdown', 'correct_answer' => true],
                    ['id' => '43ae9024-7f79-5288-81db-9c477193ad57', 'description' => 'YAML', 'correct_answer' => false],
                    ['id' => 'e5b0cc16-f39e-53b4-a01c-6ed750251dee', 'description' => 'JSON', 'correct_answer' => false]
                ]],
        ['id' => '75b18e6d-d143-55fe-9d50-97bae88ff251', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which text format stores tables using comma-separated values?', 'difficulty' => 1, 'weight' => 148, 'alternatives' => [
                    ['id' => '2b0fa81e-ae93-597f-9744-e3065db54966', 'description' => 'XML', 'correct_answer' => false],
                    ['id' => 'd63ccd11-cf78-5762-8c59-7aebd77742d5', 'description' => 'YAML', 'correct_answer' => false],
                    ['id' => 'f775b322-aa43-5eb0-b569-8c78d9b711bb', 'description' => 'SQL', 'correct_answer' => false],
                    ['id' => '06011dc7-a10e-5302-8a7b-c20dbc6ceee7', 'description' => 'GraphQL', 'correct_answer' => false],
                    ['id' => 'd8ad80cc-28a6-548a-bdd5-7197be255da1', 'description' => 'CSV', 'correct_answer' => true]
                ]],
        ['id' => 'c4ddda00-dc03-5e82-b2cb-ba0db9a7b321', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which configuration format uses tables and key-value pairs?', 'difficulty' => 1, 'weight' => 122, 'alternatives' => [
                    ['id' => 'd2329ea0-7ca3-5fd5-922c-2f55a05326bb', 'description' => 'GraphQL', 'correct_answer' => false],
                    ['id' => '803e9006-4dc7-5dba-ab39-41abb5f8a576', 'description' => 'XML', 'correct_answer' => false],
                    ['id' => '40798d57-1cd1-5254-8bdd-c47b5d3d2c2e', 'description' => 'CSS', 'correct_answer' => false],
                    ['id' => 'cdf4eb5d-4280-510b-93ed-e0a310fc8493', 'description' => 'TOML', 'correct_answer' => true],
                    ['id' => 'd22ed91e-1c24-5b3f-864b-26608ec95abe', 'description' => 'JSON', 'correct_answer' => false]
                ]],
        ['id' => '04cea565-7a61-5e41-8093-b2fbbb254775', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which human-readable data format commonly uses indentation?', 'difficulty' => 1, 'weight' => 164, 'alternatives' => [
                    ['id' => '1b83b890-2ff3-50a1-8ac4-590df34d286a', 'description' => 'XML', 'correct_answer' => false],
                    ['id' => '4d122854-7548-5945-8479-8797735a1dae', 'description' => 'YAML', 'correct_answer' => true],
                    ['id' => '0977e8d3-9392-5fe0-bd14-47606e369b7f', 'description' => 'HTML', 'correct_answer' => false],
                    ['id' => 'acc0af99-bd06-56bf-98a3-2a6f975e2e3b', 'description' => 'GraphQL', 'correct_answer' => false],
                    ['id' => 'e5b232cb-c64f-5c4d-8056-ab1bbccb469f', 'description' => 'Markdown', 'correct_answer' => false]
                ]],
        ['id' => '19ef0a4c-8a28-5f3c-b183-1766eebdaa19', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which lightweight data format represents objects as key-value pairs?', 'difficulty' => 1, 'weight' => 180, 'alternatives' => [
                    ['id' => 'a48bd8b6-684f-5df6-ab34-66f93168fc3d', 'description' => 'CSV', 'correct_answer' => false],
                    ['id' => 'a44a10e9-41d9-5b7a-936f-b0f3d45c0455', 'description' => 'Markdown', 'correct_answer' => false],
                    ['id' => 'aeb8519f-e1b8-5125-b009-a9f499d29323', 'description' => 'HTML', 'correct_answer' => false],
                    ['id' => 'aef81edd-e498-56a7-8c33-00e4a4986bb5', 'description' => 'JSON', 'correct_answer' => true],
                    ['id' => 'c0d702a0-cbf8-519b-814e-1ca32491459d', 'description' => 'XML', 'correct_answer' => false]
                ]],
        ['id' => '6edafb0c-f4b3-5c3e-89f3-76d1f59bff6d', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which stylesheet language controls web-page presentation?', 'difficulty' => 1, 'weight' => 138, 'alternatives' => [
                    ['id' => 'bed55966-8ae0-53fc-ba5f-190d908b7400', 'description' => 'Markdown', 'correct_answer' => false],
                    ['id' => 'bca6f251-047d-5008-8e59-d29528c2d7f5', 'description' => 'CSS', 'correct_answer' => true],
                    ['id' => 'aef7dd34-f397-5759-ac33-60be002144ca', 'description' => 'GraphQL', 'correct_answer' => false],
                    ['id' => '77a1ddde-2823-5a1c-8ad9-005f4db7906a', 'description' => 'XML', 'correct_answer' => false],
                    ['id' => '8b74081f-fda0-5418-9445-7f007f70854f', 'description' => 'JSON', 'correct_answer' => false]
                ]],
        ['id' => '4e8dfc63-86b3-5943-812e-24ffd85a919f', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which language is used to query relational databases?', 'difficulty' => 1, 'weight' => 179, 'alternatives' => [
                    ['id' => 'ff71a324-fc74-58a4-b1d3-40e89322ced5', 'description' => 'GraphQL', 'correct_answer' => false],
                    ['id' => 'f85b81be-0621-5344-b5b3-81ba428d7597', 'description' => 'TOML', 'correct_answer' => false],
                    ['id' => 'c225205d-114c-58d8-9bac-d27ccb34e233', 'description' => 'SQL', 'correct_answer' => true],
                    ['id' => '388e5263-3225-56c4-b306-bf79aae7ea15', 'description' => 'YAML', 'correct_answer' => false],
                    ['id' => '1502eae4-7ccc-5c20-866e-65fb1bdc25b1', 'description' => 'CSS', 'correct_answer' => false]
                ]],
        ['id' => '41f66550-aca3-5075-accd-e2e0410d8bc3', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which computer component executes instructions and general-purpose processing?', 'difficulty' => 1, 'weight' => 142, 'alternatives' => [
                    ['id' => '0bd0b09c-aff3-5c58-ab1d-19650d004dbe', 'description' => 'GPU', 'correct_answer' => false],
                    ['id' => '121dfb47-5649-5e82-bcbe-cff7b6463eea', 'description' => 'CPU', 'correct_answer' => true],
                    ['id' => '25873f48-9505-5bfe-985d-07d0a461e993', 'description' => 'Motherboard', 'correct_answer' => false],
                    ['id' => 'ea277913-2c06-5712-99d7-0f323e935ce0', 'description' => 'Power supply', 'correct_answer' => false],
                    ['id' => '18a39c63-7085-55f7-ad52-c52963a3502a', 'description' => 'HDD', 'correct_answer' => false]
                ]],
        ['id' => '2c4a1123-8a9d-5018-8a57-29502adfc284', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which component specializes in parallel graphics and compute workloads?', 'difficulty' => 1, 'weight' => 111, 'alternatives' => [
                    ['id' => 'a5ea6203-a44e-5d2e-b1ad-738e98eb66aa', 'description' => 'Power supply', 'correct_answer' => false],
                    ['id' => '7a0f6c50-4a92-5c5c-823d-2042972dc812', 'description' => 'GPU', 'correct_answer' => true],
                    ['id' => '3d5729ed-5eaa-5e77-b31d-c5a8aa9fa2b6', 'description' => 'SSD', 'correct_answer' => false],
                    ['id' => '423821a3-172f-57b1-b7a9-c1384d40384c', 'description' => 'HDD', 'correct_answer' => false],
                    ['id' => '4e6b2894-4e21-5e65-bbbd-e8bcb6df93c9', 'description' => 'CPU', 'correct_answer' => false]
                ]],
        ['id' => 'd1509773-72c0-5c02-a429-faf84ca01f16', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which component connects the processor, memory, storage, and peripherals?', 'difficulty' => 1, 'weight' => 145, 'alternatives' => [
                    ['id' => '7d374810-cfdc-5084-9660-88881c825c36', 'description' => 'Motherboard', 'correct_answer' => true],
                    ['id' => '0d810693-a1c2-58ae-a48f-82f9db05398d', 'description' => 'CPU', 'correct_answer' => false],
                    ['id' => 'bcd1a16d-e462-5f99-913a-a640a6dcd2d1', 'description' => 'Network interface card', 'correct_answer' => false],
                    ['id' => '66b83ea6-9915-5c7d-a3d7-3b1166f8f511', 'description' => 'Sound card', 'correct_answer' => false],
                    ['id' => '3241d671-4525-5a11-a8b3-3d9d7593542f', 'description' => 'SSD', 'correct_answer' => false]
                ]],
        ['id' => '703c1599-94ae-5d1a-8a6a-280031815234', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which passive cooling component transfers heat away from a processor?', 'difficulty' => 1, 'weight' => 196, 'alternatives' => [
                    ['id' => '3db147fd-c23c-5997-9bf1-14a1cab9f557', 'description' => 'Sound card', 'correct_answer' => false],
                    ['id' => '84a9708a-b1e3-5485-bcbf-50dd09345f47', 'description' => 'RAM', 'correct_answer' => false],
                    ['id' => '95f3e388-1aa8-559a-956c-62a17e75d8e6', 'description' => 'Heat sink', 'correct_answer' => true],
                    ['id' => '4b3272fa-6d8d-5f1e-8315-cc6c3f06b3cc', 'description' => 'CPU', 'correct_answer' => false],
                    ['id' => 'dd628c82-7dcb-59d6-95c9-9baed3303514', 'description' => 'Motherboard', 'correct_answer' => false]
                ]],
        ['id' => '22dab21f-9d3e-528c-82b0-ff466760c824', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which component handles audio input and output?', 'difficulty' => 1, 'weight' => 186, 'alternatives' => [
                    ['id' => '172eb7c8-2a5e-506d-9ad4-deefe2f675a8', 'description' => 'CPU', 'correct_answer' => false],
                    ['id' => '8a4f7b89-6e3d-551f-af75-fe3e71a6ed9d', 'description' => 'Sound card', 'correct_answer' => true],
                    ['id' => '00beb016-a531-5e74-8dae-ec8d13bc564e', 'description' => 'GPU', 'correct_answer' => false],
                    ['id' => '5316b247-3f81-5f64-918d-914cdd739644', 'description' => 'Heat sink', 'correct_answer' => false],
                    ['id' => 'a6c61de2-8792-5b80-9866-49c0da8005fb', 'description' => 'Network interface card', 'correct_answer' => false]
                ]],
        ['id' => '7e257e2f-2e93-5436-9f48-f47c834dcfca', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which volatile memory stores data currently in use?', 'difficulty' => 1, 'weight' => 157, 'alternatives' => [
                    ['id' => '62ac66c3-5290-542f-bf96-1e914c05ec00', 'description' => 'Network interface card', 'correct_answer' => false],
                    ['id' => 'f0ea2e19-c21d-5c95-970e-34895a4fe8f1', 'description' => 'HDD', 'correct_answer' => false],
                    ['id' => '101c84d0-83a0-55c1-84ef-581a1b5fd0d5', 'description' => 'Sound card', 'correct_answer' => false],
                    ['id' => '58c871f5-e5b9-59fc-81b0-d9559f008f34', 'description' => 'GPU', 'correct_answer' => false],
                    ['id' => '0ab1893e-469a-5134-b7fc-ebcff056d7a7', 'description' => 'RAM', 'correct_answer' => true]
                ]],
        ['id' => 'bef4f19b-a45d-54fb-a003-ff059705c5f3', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which storage device uses rotating magnetic platters?', 'difficulty' => 1, 'weight' => 105, 'alternatives' => [
                    ['id' => 'e1c7d632-7033-5a43-a018-97cb1de45cba', 'description' => 'HDD', 'correct_answer' => true],
                    ['id' => '6bea5d8a-5690-5a9b-843b-b67bac0ff1b8', 'description' => 'RAM', 'correct_answer' => false],
                    ['id' => '47ec6bce-e6fd-599d-832b-d6b60b89e5da', 'description' => 'CPU', 'correct_answer' => false],
                    ['id' => '2a31dbf7-13ab-53d4-8726-86e635441064', 'description' => 'Power supply', 'correct_answer' => false],
                    ['id' => '9167679d-94ea-59c6-8668-379d38210cee', 'description' => 'GPU', 'correct_answer' => false]
                ]],
        ['id' => '074cfd60-714a-5911-ae3b-1f09fd090d06', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which component converts wall power into regulated DC power?', 'difficulty' => 1, 'weight' => 164, 'alternatives' => [
                    ['id' => '1faf552a-4be9-5e39-b10c-3b3964b5b8d0', 'description' => 'Motherboard', 'correct_answer' => false],
                    ['id' => '052bad66-2680-5922-995f-238b5c3b70a3', 'description' => 'Power supply', 'correct_answer' => true],
                    ['id' => '3af46078-5294-5b3f-ad6e-42d104951722', 'description' => 'HDD', 'correct_answer' => false],
                    ['id' => '838c17b4-3657-5cc0-866e-0f969b59bbc2', 'description' => 'Heat sink', 'correct_answer' => false],
                    ['id' => '26b5a298-8b20-5bd4-8526-f2a6fed2be7a', 'description' => 'Sound card', 'correct_answer' => false]
                ]],
        ['id' => '38209ae4-56c2-5e8f-875c-4bb807c0fc17', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which application-layer protocol transfers web resources?', 'difficulty' => 1, 'weight' => 153, 'alternatives' => [
                    ['id' => '04c7d2ca-609b-5ec1-bd6c-1ae876d1c43d', 'description' => 'DNS', 'correct_answer' => false],
                    ['id' => '4fe7cab4-f01a-5b60-ae3b-409b365da07a', 'description' => 'HTTPS', 'correct_answer' => false],
                    ['id' => '994ea9fc-d315-59a3-92d6-a23e5875b394', 'description' => 'SSH', 'correct_answer' => false],
                    ['id' => '4ed0b339-8583-584a-bd22-8f86ab0fe420', 'description' => 'DHCP', 'correct_answer' => false],
                    ['id' => '00c0c523-b339-5d01-beb0-261b3dfd48c8', 'description' => 'HTTP', 'correct_answer' => true]
                ]],
        ['id' => '84fd7092-45df-5e9b-a1b7-33329f810cf6', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which secure form of HTTP uses TLS?', 'difficulty' => 1, 'weight' => 171, 'alternatives' => [
                    ['id' => 'b7b57255-7e27-5e14-af25-b10f8ffbc605', 'description' => 'NTP', 'correct_answer' => false],
                    ['id' => 'd05c7dff-92e1-59da-a33b-d520fce49c16', 'description' => 'HTTP', 'correct_answer' => false],
                    ['id' => '22de747e-6f54-54ae-8bdb-c4cd3828d46d', 'description' => 'SSH', 'correct_answer' => false],
                    ['id' => 'f6274523-e0e9-53b6-87cb-25c5eaef7282', 'description' => 'HTTPS', 'correct_answer' => true],
                    ['id' => '1da32eda-eebe-56b2-a9f7-141b29c24bad', 'description' => 'SMTP', 'correct_answer' => false]
                ]],
        ['id' => '6ed9846c-71db-5979-8211-190a1cd60369', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which protocol automatically assigns IP configuration to devices?', 'difficulty' => 1, 'weight' => 125, 'alternatives' => [
                    ['id' => '78877359-e6e2-5cf0-aa52-552ed74ac247', 'description' => 'HTTP', 'correct_answer' => false],
                    ['id' => '3b5eddfa-d9f1-552d-af70-64056f5e2427', 'description' => 'SSH', 'correct_answer' => false],
                    ['id' => 'eb37bd93-96c4-5e79-9fb4-b40b860b5d2d', 'description' => 'HTTPS', 'correct_answer' => false],
                    ['id' => '84a61378-fc96-5291-b213-76ca6bbcf9cb', 'description' => 'FTP', 'correct_answer' => false],
                    ['id' => 'c6567261-7be5-5346-8b70-e205628df32a', 'description' => 'DHCP', 'correct_answer' => true]
                ]],
        ['id' => '1dfafaf2-cd6b-5514-a69a-9e845715a522', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which protocol was designed for transferring files between systems?', 'difficulty' => 1, 'weight' => 160, 'alternatives' => [
                    ['id' => 'f300fb6e-608e-5be0-b7aa-95e20e1c834e', 'description' => 'IMAP', 'correct_answer' => false],
                    ['id' => '45440067-4043-59f8-825a-e7ae1d2afeae', 'description' => 'HTTPS', 'correct_answer' => false],
                    ['id' => 'bbc035f3-6555-55cd-8e58-201b969854a2', 'description' => 'FTP', 'correct_answer' => true],
                    ['id' => '05ccd2ac-f0da-5b3a-bc9e-6c248bc4c83c', 'description' => 'NTP', 'correct_answer' => false],
                    ['id' => 'b7b6d6d6-8dc5-556f-ab4e-3f76a6e01458', 'description' => 'SNMP', 'correct_answer' => false]
                ]],
        ['id' => '516c0b19-099f-5966-b126-aa7f98433f70', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which protocol synchronizes computer clocks over a network?', 'difficulty' => 1, 'weight' => 142, 'alternatives' => [
                    ['id' => '6475996f-9cf0-53f6-b303-82acc9c13fde', 'description' => 'DNS', 'correct_answer' => false],
                    ['id' => 'becf64ac-9d39-537b-acc1-e18481734131', 'description' => 'NTP', 'correct_answer' => true],
                    ['id' => 'a39e5369-b3f9-581e-ba37-b75665c81eb6', 'description' => 'HTTPS', 'correct_answer' => false],
                    ['id' => 'f121cc47-51cb-55e0-9101-e6f4edf7e16f', 'description' => 'SSH', 'correct_answer' => false],
                    ['id' => 'a5a8286f-7b58-5e81-8c1d-03412dd82057', 'description' => 'SMTP', 'correct_answer' => false]
                ]],
        ['id' => '61151bb6-9577-5a57-ae09-1f8a3606fa0b', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which system translates domain names into IP addresses?', 'difficulty' => 1, 'weight' => 118, 'alternatives' => [
                    ['id' => 'a0247927-31d7-5470-941f-02db296a1bc4', 'description' => 'HTTP', 'correct_answer' => false],
                    ['id' => '17efc3bd-7445-5043-901c-91d274fc49ba', 'description' => 'SNMP', 'correct_answer' => false],
                    ['id' => '3cfddad5-e962-5b9e-a90a-8878fa01fa85', 'description' => 'DNS', 'correct_answer' => true],
                    ['id' => '7c4383eb-a5e2-505b-8d02-5f92c4f3aab9', 'description' => 'SMTP', 'correct_answer' => false],
                    ['id' => '6fcf2d64-2696-5a40-b28b-6f9b21eb9d55', 'description' => 'NTP', 'correct_answer' => false]
                ]],
        ['id' => '1e88282c-7039-5c01-a113-aa428c93e730', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which protocol is commonly used to send email between mail servers?', 'difficulty' => 1, 'weight' => 140, 'alternatives' => [
                    ['id' => '1cba6e1a-3c89-5be9-9ec6-3fb4ffb231f0', 'description' => 'NTP', 'correct_answer' => false],
                    ['id' => '29233f3f-0c23-5016-81a3-2e2db8b80845', 'description' => 'SNMP', 'correct_answer' => false],
                    ['id' => 'cf58d846-1c9a-550c-a961-0614e9fc5d45', 'description' => 'HTTPS', 'correct_answer' => false],
                    ['id' => 'a5837e28-d040-51d6-892e-91f309dbae14', 'description' => 'SMTP', 'correct_answer' => true],
                    ['id' => '7b5e65fc-d6b6-5725-8537-cb138b282d73', 'description' => 'SSH', 'correct_answer' => false]
                ]],
        ['id' => '82ea712b-0346-57e6-9238-5ea388b57c17', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which email protocol synchronizes messages with a server?', 'difficulty' => 1, 'weight' => 151, 'alternatives' => [
                    ['id' => '6aff93ea-7a61-51f4-b78c-060a75206dc1', 'description' => 'IMAP', 'correct_answer' => true],
                    ['id' => '068e8309-9c9c-5ddb-a8a6-81babe4c8a3a', 'description' => 'SSH', 'correct_answer' => false],
                    ['id' => 'c266aabe-c992-577d-ab0a-175d5530d855', 'description' => 'FTP', 'correct_answer' => false],
                    ['id' => 'd58d0f15-2007-59b4-8468-2314fd6b9f76', 'description' => 'DNS', 'correct_answer' => false],
                    ['id' => '5c45accc-abb8-5647-b268-a95b65fd8c72', 'description' => 'HTTPS', 'correct_answer' => false]
                ]],
        ['id' => 'd7f58dda-8f0b-5ad8-99df-bbac75ff701b', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which Google operating system is centered on the Chrome browser?', 'difficulty' => 1, 'weight' => 160, 'alternatives' => [
                    ['id' => '5f797e99-5582-5c0e-80d8-e81b4e20369f', 'description' => 'ChromeOS', 'correct_answer' => true],
                    ['id' => 'a07c73cc-4a0e-526e-a3d5-381d606de993', 'description' => 'macOS', 'correct_answer' => false],
                    ['id' => '2b930205-5288-5bd3-97b7-fa71769548df', 'description' => 'FreeBSD', 'correct_answer' => false],
                    ['id' => '308c0e3d-f64c-502a-82ad-92dc8e8ca41c', 'description' => 'Fedora', 'correct_answer' => false],
                    ['id' => 'eed899c4-24ea-58c2-a4d0-3e9106aba19b', 'description' => 'Debian', 'correct_answer' => false]
                ]],
        ['id' => 'c5bc8608-8d95-5261-b759-fbee15284f43', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which Linux distribution is known for community governance and a large package archive?', 'difficulty' => 1, 'weight' => 131, 'alternatives' => [
                    ['id' => '968005de-2d56-596c-b0ff-5a209a696e25', 'description' => 'ChromeOS', 'correct_answer' => false],
                    ['id' => 'f3ac3bd5-c828-504c-bf63-e25c50d2f8fc', 'description' => 'Fedora', 'correct_answer' => false],
                    ['id' => 'b4fb3169-6e7c-54ee-a16f-b8d1bbdc27a9', 'description' => 'macOS', 'correct_answer' => false],
                    ['id' => '54841404-a874-5f1b-91d2-b18c1b2b5a4c', 'description' => 'Linux', 'correct_answer' => false],
                    ['id' => '7abb9369-f794-5d3a-8e3e-7297bc1f97df', 'description' => 'Debian', 'correct_answer' => true]
                ]],
        ['id' => '2f3c1479-fa8d-5312-9fd8-4e1d51433889', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which family of open-source operating systems is built around the Linux kernel?', 'difficulty' => 1, 'weight' => 114, 'alternatives' => [
                    ['id' => '8529b5c1-c551-52e5-b5b2-f0a8dc7c1a6c', 'description' => 'Android', 'correct_answer' => false],
                    ['id' => '1938cb95-6cba-5b28-a33c-940c4c9ee0d6', 'description' => 'iOS', 'correct_answer' => false],
                    ['id' => 'd287bcca-e781-58e5-be45-53cf6f9efcc8', 'description' => 'Windows', 'correct_answer' => false],
                    ['id' => '9c914b7d-98d0-5a95-8610-5b91caa3b501', 'description' => 'Linux', 'correct_answer' => true],
                    ['id' => '98eabf89-901b-50a2-ab34-d8da312390cf', 'description' => 'Fedora', 'correct_answer' => false]
                ]],
        ['id' => '8ffe5a2c-8a5e-5ab1-b3a0-c623228051c0', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which desktop operating system is developed by Apple for Mac computers?', 'difficulty' => 1, 'weight' => 106, 'alternatives' => [
                    ['id' => '82ffcce4-1aaf-5d91-bbc0-86cc8252371a', 'description' => 'Debian', 'correct_answer' => false],
                    ['id' => '470ec0f7-49df-5b67-b880-150532aa29e6', 'description' => 'FreeBSD', 'correct_answer' => false],
                    ['id' => '1f11c18e-c021-53e2-b4c4-8dad3df22f43', 'description' => 'Linux', 'correct_answer' => false],
                    ['id' => 'b1335170-9d8b-5311-9f14-3e7c5abc63f4', 'description' => 'macOS', 'correct_answer' => true],
                    ['id' => 'da835e71-f7f0-5804-9418-bce5ba56a8fc', 'description' => 'Ubuntu', 'correct_answer' => false]
                ]],
        ['id' => 'abba5399-f436-5fbe-b2bc-e3a107b7439f', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which popular Linux distribution is developed by Canonical?', 'difficulty' => 1, 'weight' => 133, 'alternatives' => [
                    ['id' => 'e4386659-56c5-5f38-9189-cf8f24122155', 'description' => 'iOS', 'correct_answer' => false],
                    ['id' => 'ff8193b9-bc4e-52e9-b95c-72b74426f875', 'description' => 'Linux', 'correct_answer' => false],
                    ['id' => '54b25594-0d5a-5e1a-a32a-f1dc229940a7', 'description' => 'FreeBSD', 'correct_answer' => false],
                    ['id' => 'e495d27b-a444-5e5e-b453-6baa6eb624e3', 'description' => 'Ubuntu', 'correct_answer' => true],
                    ['id' => '0953f895-a03f-59cb-aefd-89f4e859dafe', 'description' => 'Android', 'correct_answer' => false]
                ]],
        ['id' => '25916e26-e14f-50f5-857c-92b10a2ff799', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which Unix-like operating system descends from Berkeley Software Distribution?', 'difficulty' => 1, 'weight' => 108, 'alternatives' => [
                    ['id' => 'c9f5d8ad-a9cb-5350-b285-c665a8c9007f', 'description' => 'Ubuntu', 'correct_answer' => false],
                    ['id' => 'ae96cb48-6287-5abc-85a0-60e7de56586f', 'description' => 'FreeBSD', 'correct_answer' => true],
                    ['id' => 'db0cf032-1a3e-52dc-a616-9a88538de58f', 'description' => 'iOS', 'correct_answer' => false],
                    ['id' => '2e582299-b8b4-5445-b72e-03f3c0447160', 'description' => 'Windows', 'correct_answer' => false],
                    ['id' => '19d09b45-e66b-5e4f-b893-46a93bdad2a0', 'description' => 'Fedora', 'correct_answer' => false]
                ]],
        ['id' => 'ff4954fb-c342-5a0a-8d5e-edde6abf7218', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which mobile operating system is based on the Linux kernel and developed primarily by Google?', 'difficulty' => 1, 'weight' => 137, 'alternatives' => [
                    ['id' => 'b875c3ce-3ec8-5689-af77-015e1b7b1670', 'description' => 'Debian', 'correct_answer' => false],
                    ['id' => 'd41176e9-e103-56ed-8be6-0e9c5e15ae31', 'description' => 'Android', 'correct_answer' => true],
                    ['id' => 'e525fa3e-b924-595e-97a9-057b57faaca6', 'description' => 'macOS', 'correct_answer' => false],
                    ['id' => 'efea9d65-11c2-594d-a04a-82d8c4e79e59', 'description' => 'ChromeOS', 'correct_answer' => false],
                    ['id' => '922e1edf-a2d2-5664-a67c-bf4638e21426', 'description' => 'Linux', 'correct_answer' => false]
                ]],
        ['id' => 'a47be33f-b0bd-50b1-8ad3-f6d69c914c36', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which desktop operating system is developed by Microsoft?', 'difficulty' => 1, 'weight' => 147, 'alternatives' => [
                    ['id' => 'abf45797-d3cb-580e-b5ce-ba11d1cffd15', 'description' => 'ChromeOS', 'correct_answer' => false],
                    ['id' => '3dee043f-fed8-5c32-bba0-b41534f1095f', 'description' => 'Debian', 'correct_answer' => false],
                    ['id' => '2e3c9303-f5b0-55a0-ad77-f6b0c9c04f4c', 'description' => 'Linux', 'correct_answer' => false],
                    ['id' => '75ee51df-63bd-5952-8ca2-0e648128456e', 'description' => 'macOS', 'correct_answer' => false],
                    ['id' => 'dabce51c-18b9-53d6-a86b-ed8830a6e3ec', 'description' => 'Windows', 'correct_answer' => true]
                ]],
        ['id' => '5588347c-866c-526b-b91d-333302e5819f', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which commercial relational database is developed by Oracle?', 'difficulty' => 2, 'weight' => 261, 'alternatives' => [
                    ['id' => '648639c6-dc9f-5aa6-9675-b488eed340cd', 'description' => 'Cassandra', 'correct_answer' => false],
                    ['id' => '3b8b5e82-6261-5d8c-b4cd-846317d2c140', 'description' => 'Oracle Database', 'correct_answer' => true],
                    ['id' => '9d3997ed-f0b2-5a66-b284-3f0b08bb2368', 'description' => 'SQLite', 'correct_answer' => false],
                    ['id' => '44b3d0c2-b23d-5bb9-b433-1b890274207e', 'description' => 'PostgreSQL', 'correct_answer' => false],
                    ['id' => '2eeaeb1d-8937-5c4d-8295-54e04282455f', 'description' => 'MongoDB', 'correct_answer' => false]
                ]],
        ['id' => '8ac76b85-268d-56ea-9721-a7fed012695c', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which in-memory data store is often used for caching?', 'difficulty' => 2, 'weight' => 305, 'alternatives' => [
                    ['id' => 'dd8b6f13-4037-5e9b-aba3-25bc1970e23b', 'description' => 'CouchDB', 'correct_answer' => false],
                    ['id' => '426a811a-b79d-5287-a8a4-5959393f2b78', 'description' => 'MongoDB', 'correct_answer' => false],
                    ['id' => 'e081dc53-07b4-53d9-bd52-6ebdfc258511', 'description' => 'Redis', 'correct_answer' => true],
                    ['id' => '2e2f8699-6126-55d9-af21-239b450b5cb1', 'description' => 'MariaDB', 'correct_answer' => false],
                    ['id' => 'ade242fa-e285-5f28-b616-4960972391fd', 'description' => 'SQL Server', 'correct_answer' => false]
                ]],
        ['id' => 'a993e949-1934-5d82-9999-826c0bb115b5', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which document database stores records in BSON documents?', 'difficulty' => 2, 'weight' => 368, 'alternatives' => [
                    ['id' => 'ecdeca2e-2d78-59d6-829f-14f862208b9c', 'description' => 'SQLite', 'correct_answer' => false],
                    ['id' => '0966fa0a-6b27-5302-bf30-3b81c486100f', 'description' => 'MongoDB', 'correct_answer' => true],
                    ['id' => '8c57f079-80f6-565f-8b3f-a5ffc28be18f', 'description' => 'MariaDB', 'correct_answer' => false],
                    ['id' => 'c9641efe-4cac-529c-a1ea-5411f091bd8d', 'description' => 'Redis', 'correct_answer' => false],
                    ['id' => '369910d1-6fa4-5547-9276-824e8fa9ee77', 'description' => 'CouchDB', 'correct_answer' => false]
                ]],
        ['id' => '9bc2286e-39a6-5490-b811-8d0b07c5b56e', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which open-source relational database is known for extensibility?', 'difficulty' => 2, 'weight' => 350, 'alternatives' => [
                    ['id' => '8dd24905-42d6-5a65-876f-1c9d4d9aa606', 'description' => 'Cassandra', 'correct_answer' => false],
                    ['id' => '438cdb34-023a-53ca-8cac-f6a6372be222', 'description' => 'MongoDB', 'correct_answer' => false],
                    ['id' => 'ac3a6036-3279-546f-8b0b-e08f90df4dac', 'description' => 'CouchDB', 'correct_answer' => false],
                    ['id' => '7170596b-e328-51da-93c7-47258ac7a135', 'description' => 'MariaDB', 'correct_answer' => false],
                    ['id' => 'fac28efa-0742-5312-9adb-de2c2eb93329', 'description' => 'PostgreSQL', 'correct_answer' => true]
                ]],
        ['id' => '0c384f45-91a6-5f01-8f3d-482ef8ccef1b', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which relational database management system is developed by Microsoft?', 'difficulty' => 2, 'weight' => 364, 'alternatives' => [
                    ['id' => '1fa615e0-e81e-52a6-be1a-28d3bd47b335', 'description' => 'CouchDB', 'correct_answer' => false],
                    ['id' => 'a894dd36-3a66-5b30-be0b-615d64f6968d', 'description' => 'Redis', 'correct_answer' => false],
                    ['id' => 'f0ec736d-a007-50a6-b7a7-41d821cd8668', 'description' => 'MySQL', 'correct_answer' => false],
                    ['id' => '0b5d3152-12ad-58dc-937a-ad9e3e7dc9ed', 'description' => 'SQL Server', 'correct_answer' => true],
                    ['id' => '8cc085e3-61b3-55e6-ab84-dabc15bb1418', 'description' => 'SQLite', 'correct_answer' => false]
                ]],
        ['id' => '33b6b14f-ba6c-5f0a-b01f-e43b333f1da4', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which database was created as a community-developed fork of MySQL?', 'difficulty' => 2, 'weight' => 377, 'alternatives' => [
                    ['id' => 'c9c9a82c-6d10-5cc9-9cb0-8492211d53dd', 'description' => 'Oracle Database', 'correct_answer' => false],
                    ['id' => 'f4bfff8a-4ca7-5bcd-9060-9740d5c7bc08', 'description' => 'MySQL', 'correct_answer' => false],
                    ['id' => '614f2eb9-64ba-5a7f-b26d-ec450d8cd452', 'description' => 'MariaDB', 'correct_answer' => true],
                    ['id' => '35e7f155-f196-5440-9e85-bd306719363b', 'description' => 'Cassandra', 'correct_answer' => false],
                    ['id' => '4ce4a4fb-e05d-59a9-800f-8ccbdbb808ba', 'description' => 'SQLite', 'correct_answer' => false]
                ]],
        ['id' => '8314fc80-c622-5fc7-b295-bb2f29009957', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which document database uses JSON documents and an HTTP API?', 'difficulty' => 2, 'weight' => 294, 'alternatives' => [
                    ['id' => '22a1c88a-8f38-5686-bb2d-27239925e836', 'description' => 'MongoDB', 'correct_answer' => false],
                    ['id' => '5b102299-1fe4-5aba-83ab-de31824a5cf5', 'description' => 'PostgreSQL', 'correct_answer' => false],
                    ['id' => '9d8ad6e5-6396-5977-af26-6ad578aa8523', 'description' => 'CouchDB', 'correct_answer' => true],
                    ['id' => '448fb753-671f-56fb-b69f-eb61a2f9a877', 'description' => 'MySQL', 'correct_answer' => false],
                    ['id' => 'da67d68d-8911-578a-8b97-7da8adcd07c6', 'description' => 'MariaDB', 'correct_answer' => false]
                ]],
        ['id' => 'c4c77b73-e205-5ab8-8d12-ad22dbd51290', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which embedded database stores an entire database in a single file?', 'difficulty' => 2, 'weight' => 367, 'alternatives' => [
                    ['id' => '9ecf3ded-1591-5ac8-a416-c523be53f72c', 'description' => 'SQLite', 'correct_answer' => true],
                    ['id' => 'ed02e521-d0d2-5e84-8ebe-533b36325456', 'description' => 'Redis', 'correct_answer' => false],
                    ['id' => '74bf0a97-0833-5801-b510-d39981b02e9f', 'description' => 'SQL Server', 'correct_answer' => false],
                    ['id' => 'ac5d9940-3021-50fe-8752-b8066781a709', 'description' => 'MariaDB', 'correct_answer' => false],
                    ['id' => '53fc483d-ff17-58be-a748-410f4eebb2e7', 'description' => 'Oracle Database', 'correct_answer' => false]
                ]],
        ['id' => '1671649f-52a2-57c8-b734-551133bc62ca', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which lightweight alternative to React aims for a smaller footprint?', 'difficulty' => 2, 'weight' => 395, 'alternatives' => [
                    ['id' => 'a183d91f-7463-56f0-9a87-9ab5b3bba6f3', 'description' => 'Angular', 'correct_answer' => false],
                    ['id' => '73af2116-a165-5712-b37f-20198f3e7960', 'description' => 'SolidJS', 'correct_answer' => false],
                    ['id' => '85d75f53-7b9a-554d-ab07-a7ffd9542791', 'description' => 'Svelte', 'correct_answer' => false],
                    ['id' => '542ab77d-2054-5a28-92cf-a5438f085482', 'description' => 'Preact', 'correct_answer' => true],
                    ['id' => '76da759e-b13c-5060-8bf9-122b3f49e399', 'description' => 'Alpine.js', 'correct_answer' => false]
                ]],
        ['id' => 'a538f671-cbac-5311-8002-95cedad9dd0b', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which progressive JavaScript framework was created by Evan You?', 'difficulty' => 2, 'weight' => 388, 'alternatives' => [
                    ['id' => '6b6ebde8-9ca3-5622-a4ee-c25be8e30081', 'description' => 'Vue.js', 'correct_answer' => true],
                    ['id' => '5e5f1c18-b12e-508c-a6a3-f434421dbfc6', 'description' => 'Alpine.js', 'correct_answer' => false],
                    ['id' => 'dbf9c48a-bfa9-5a2d-bb61-f59b26bad89a', 'description' => 'Angular', 'correct_answer' => false],
                    ['id' => '93a02069-5f51-5a6c-b1ce-9c37002a8427', 'description' => 'SolidJS', 'correct_answer' => false],
                    ['id' => 'e988e4f7-9d4e-50ad-add8-2d760468cd2f', 'description' => 'Ember.js', 'correct_answer' => false]
                ]],
        ['id' => '8ac38f0b-3599-537b-ad65-a8df6994d54b', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which TypeScript-based web framework is maintained by Google?', 'difficulty' => 2, 'weight' => 248, 'alternatives' => [
                    ['id' => '319154d5-d900-5c93-9296-a920cdd8646a', 'description' => 'Preact', 'correct_answer' => false],
                    ['id' => 'dc83b16b-4647-5062-acd9-12e21aea8006', 'description' => 'Backbone.js', 'correct_answer' => false],
                    ['id' => '36221dc0-f240-541d-ab99-2b870ff0c770', 'description' => 'Svelte', 'correct_answer' => false],
                    ['id' => '4028d904-baab-5057-aa17-0a23a14313e2', 'description' => 'React', 'correct_answer' => false],
                    ['id' => 'b112c179-d7ef-5a2f-ade4-d8a72b88eb65', 'description' => 'Angular', 'correct_answer' => true]
                ]],
        ['id' => 'cbb198d6-eead-5173-896b-f17319066b3c', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which JavaScript library provides models, collections, and views?', 'difficulty' => 2, 'weight' => 298, 'alternatives' => [
                    ['id' => '31b725b2-75ad-5cb0-bb9f-3b8d8c34d5e1', 'description' => 'Ember.js', 'correct_answer' => false],
                    ['id' => '44682d7a-3043-51a8-9f31-fe062bd513cf', 'description' => 'SolidJS', 'correct_answer' => false],
                    ['id' => 'ce4b777e-15e8-5987-87c0-7a408cc001c9', 'description' => 'Alpine.js', 'correct_answer' => false],
                    ['id' => 'd5709418-6ff5-5cf3-95e2-c88019585b77', 'description' => 'Backbone.js', 'correct_answer' => true],
                    ['id' => '31912f49-b4ea-5741-8d39-2513f412758f', 'description' => 'Svelte', 'correct_answer' => false]
                ]],
        ['id' => 'a4dcaab9-a603-520c-94f5-2879d0c14f1e', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which UI library for JavaScript was developed by Meta?', 'difficulty' => 2, 'weight' => 335, 'alternatives' => [
                    ['id' => '7e711e08-9bd0-5e26-accd-76cc84624639', 'description' => 'Backbone.js', 'correct_answer' => false],
                    ['id' => 'e7a2a5b5-0dd2-5066-8e91-ea95b504558c', 'description' => 'React', 'correct_answer' => true],
                    ['id' => '0b7d5715-d01c-50bb-ac4a-238fc38f9fe1', 'description' => 'Vue.js', 'correct_answer' => false],
                    ['id' => 'bf944a13-9c13-5c2b-b6df-6d182575d1e6', 'description' => 'Lit', 'correct_answer' => false],
                    ['id' => '6d9eb9fe-acc9-54ae-9d9f-1b004fc3b8f6', 'description' => 'Angular', 'correct_answer' => false]
                ]],
        ['id' => '448b303e-82bc-54cc-b429-4eced5be07b8', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which reactive UI library uses fine-grained reactivity without a virtual DOM?', 'difficulty' => 2, 'weight' => 242, 'alternatives' => [
                    ['id' => 'f29afbe0-f5a2-589c-bd3a-eeb42c195da2', 'description' => 'SolidJS', 'correct_answer' => true],
                    ['id' => '19b3db8a-097c-5915-a970-3de3151b2b5d', 'description' => 'Vue.js', 'correct_answer' => false],
                    ['id' => 'a05594d9-e038-576a-804c-d1432890e94d', 'description' => 'Angular', 'correct_answer' => false],
                    ['id' => '3a0d9ce3-cde4-5b9c-b2e4-959160af4585', 'description' => 'Svelte', 'correct_answer' => false],
                    ['id' => '365a2ede-6348-53c0-b20d-9735e370471d', 'description' => 'Preact', 'correct_answer' => false]
                ]],
        ['id' => 'f013467f-5701-57d7-9818-67c71a42b20b', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which library helps build web components using tagged template literals?', 'difficulty' => 2, 'weight' => 323, 'alternatives' => [
                    ['id' => 'c83f3c8d-c7c0-5bb9-8e09-10cbd00524f4', 'description' => 'Backbone.js', 'correct_answer' => false],
                    ['id' => '82a98812-166e-5259-b76b-e4541066f472', 'description' => 'Svelte', 'correct_answer' => false],
                    ['id' => 'db6aaac6-6a15-58db-9364-429988cffc1a', 'description' => 'Lit', 'correct_answer' => true],
                    ['id' => 'b8e63f5f-a185-5409-b8c3-0ef27c7a25fc', 'description' => 'SolidJS', 'correct_answer' => false],
                    ['id' => '4584ad4d-afc9-5c01-be92-bdad4d76040b', 'description' => 'Preact', 'correct_answer' => false]
                ]],
        ['id' => '39b7b330-c809-5ad3-96ff-bb518f12c3fb', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which frontend framework shifts much work from runtime to compile time?', 'difficulty' => 2, 'weight' => 307, 'alternatives' => [
                    ['id' => 'c837212d-e9ee-5632-b796-74c0746a3191', 'description' => 'Svelte', 'correct_answer' => true],
                    ['id' => 'ac904f98-5ef9-5cd0-ba1b-14bd7b049cd0', 'description' => 'Alpine.js', 'correct_answer' => false],
                    ['id' => 'c1472e84-584b-5aab-be27-dea1260cdb6e', 'description' => 'SolidJS', 'correct_answer' => false],
                    ['id' => '52cedbf7-bc14-5a89-a09d-9c36054d2818', 'description' => 'Lit', 'correct_answer' => false],
                    ['id' => '51d00be0-673b-5090-a63f-d58b83d8513e', 'description' => 'Preact', 'correct_answer' => false]
                ]],
        ['id' => 'd6129284-2ee1-5eef-a28c-5b2a4dd494a4', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which container runtime is used by Docker and Kubernetes environments?', 'difficulty' => 2, 'weight' => 224, 'alternatives' => [
                    ['id' => '253b92e7-0bc4-572b-b78f-eca51a150768', 'description' => 'Podman', 'correct_answer' => false],
                    ['id' => '74a789c9-c731-555d-9335-dc4a13da5ce6', 'description' => 'OpenShift', 'correct_answer' => false],
                    ['id' => '4090da25-1b3d-5dc3-8317-5eea8a3f0523', 'description' => 'Kubernetes', 'correct_answer' => false],
                    ['id' => '2bf64c54-0d84-59fd-8f11-6fa16b08b574', 'description' => 'containerd', 'correct_answer' => true],
                    ['id' => 'f5b60b80-b1e5-5999-a9af-efabae5c9521', 'description' => 'Helm', 'correct_answer' => false]
                ]],
        ['id' => 'e9e6b36f-676e-5355-aa54-09b10fc1a1b7', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which platform packages applications and dependencies into portable containers?', 'difficulty' => 2, 'weight' => 349, 'alternatives' => [
                    ['id' => '3f011c6e-9c06-5d53-9b7a-0ee93e3c7371', 'description' => 'Podman', 'correct_answer' => false],
                    ['id' => 'a45fdf58-e8fc-55dd-b12f-63f7b0b4f275', 'description' => 'Nomad', 'correct_answer' => false],
                    ['id' => '02a4ecc8-505e-5852-85b0-bd2c50e8a187', 'description' => 'Docker', 'correct_answer' => true],
                    ['id' => '26b019d9-6ddc-55e6-86d4-f0d96dcaec57', 'description' => 'Buildah', 'correct_answer' => false],
                    ['id' => '49f607f7-d8d5-5a02-aa50-fb65091a918a', 'description' => 'LXC', 'correct_answer' => false]
                ]],
        ['id' => 'ce4250d8-772c-5e68-936d-9f7f70946a83', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which enterprise container platform is built around Kubernetes and developed by Red Hat?', 'difficulty' => 2, 'weight' => 269, 'alternatives' => [
                    ['id' => '96f30af4-d6b0-587a-aa5f-4b84fe1f11f9', 'description' => 'containerd', 'correct_answer' => false],
                    ['id' => '09ed603f-8071-530e-abad-8dbfb93870d7', 'description' => 'Docker', 'correct_answer' => false],
                    ['id' => 'f45b394b-dcd0-59bd-9ed1-7d6755beeda2', 'description' => 'CRI-O', 'correct_answer' => false],
                    ['id' => '1e12a230-627a-5ffb-8002-119c0ebc2fb1', 'description' => 'LXC', 'correct_answer' => false],
                    ['id' => 'd3467897-60c2-552a-9aa6-8e17969da537', 'description' => 'OpenShift', 'correct_answer' => true]
                ]],
        ['id' => 'a1208df8-edb7-53f1-9095-a9a5d60bce7e', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which operating-system-level virtualization technology provides system containers?', 'difficulty' => 2, 'weight' => 211, 'alternatives' => [
                    ['id' => '84cc2059-5559-5fa1-b01d-b7d5cd2942b1', 'description' => 'Podman', 'correct_answer' => false],
                    ['id' => 'a4e3815a-305e-5de0-87a2-dd9ffc5ba53b', 'description' => 'Docker', 'correct_answer' => false],
                    ['id' => '6bfede0f-874b-5247-b442-ced0c96e976e', 'description' => 'Helm', 'correct_answer' => false],
                    ['id' => 'e521e9da-df7a-5a86-a465-f082644e7445', 'description' => 'CRI-O', 'correct_answer' => false],
                    ['id' => 'b05aa8fd-ea3c-5cff-9310-6f909c12a150', 'description' => 'LXC', 'correct_answer' => true]
                ]],
        ['id' => '6198e4fa-f139-5ef8-9756-c22249b3e4da', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which tool builds OCI container images without requiring a Docker daemon?', 'difficulty' => 2, 'weight' => 397, 'alternatives' => [
                    ['id' => '016064e1-cfa1-5a84-bef8-9a75212170e0', 'description' => 'Kubernetes', 'correct_answer' => false],
                    ['id' => '40fd1b5c-46b4-5819-8758-969f2c418015', 'description' => 'Buildah', 'correct_answer' => true],
                    ['id' => 'db502431-1f85-5e74-9745-6f1cd4f2c088', 'description' => 'OpenShift', 'correct_answer' => false],
                    ['id' => '10891589-9550-5953-a992-944a62056ddb', 'description' => 'containerd', 'correct_answer' => false],
                    ['id' => '9d025418-c2bf-5761-859e-018413dd2df4', 'description' => 'Podman', 'correct_answer' => false]
                ]],
        ['id' => 'e8786a5f-dece-53d7-bb39-a700415e32bd', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which HashiCorp scheduler orchestrates containers and other workloads?', 'difficulty' => 2, 'weight' => 320, 'alternatives' => [
                    ['id' => 'e86c1270-53e7-566c-9359-49a5cd9ed29c', 'description' => 'Nomad', 'correct_answer' => true],
                    ['id' => '2cd84d79-0540-5cda-8d73-bad63881c736', 'description' => 'OpenShift', 'correct_answer' => false],
                    ['id' => 'a93e0670-fefc-5ffd-9254-a0dc9c438089', 'description' => 'containerd', 'correct_answer' => false],
                    ['id' => '82934f07-a767-5320-b351-04d0a9c5db76', 'description' => 'LXC', 'correct_answer' => false],
                    ['id' => '896332d8-b91d-54ef-9a3f-b9e9b0b0e3fd', 'description' => 'CRI-O', 'correct_answer' => false]
                ]],
        ['id' => '32e77c43-ffe2-5705-be68-791eb6046c9f', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which container runtime is designed specifically for Kubernetes through CRI?', 'difficulty' => 2, 'weight' => 248, 'alternatives' => [
                    ['id' => 'dd3b4539-be94-5671-83fd-4759a4be0b4d', 'description' => 'LXC', 'correct_answer' => false],
                    ['id' => 'dd0e0166-0ead-5f66-ab66-56b122de5f74', 'description' => 'CRI-O', 'correct_answer' => true],
                    ['id' => 'f592613f-ddba-5294-b40c-58d2cdc2d78d', 'description' => 'Helm', 'correct_answer' => false],
                    ['id' => '6fcae9fd-4933-5ec5-8956-a197cf48eae8', 'description' => 'Buildah', 'correct_answer' => false],
                    ['id' => '3a4f4b7e-c9c5-52de-805e-044ec215f205', 'description' => 'Docker', 'correct_answer' => false]
                ]],
        ['id' => '02d30362-42d8-5c21-a6cf-2fb4d2d9045f', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which daemonless container engine supports many Docker-compatible commands?', 'difficulty' => 2, 'weight' => 314, 'alternatives' => [
                    ['id' => '722507b7-5156-5ff8-9068-7bbc86b600fc', 'description' => 'Docker', 'correct_answer' => false],
                    ['id' => 'cf8c4379-0249-5c84-8eb0-17e12c49958a', 'description' => 'LXC', 'correct_answer' => false],
                    ['id' => 'a9811a5e-c408-57ea-9e65-81f748126659', 'description' => 'Nomad', 'correct_answer' => false],
                    ['id' => 'ecb107ef-e4be-5d73-98aa-20731ff3178b', 'description' => 'Podman', 'correct_answer' => true],
                    ['id' => '5847d071-4954-569c-80e2-1e32e2cc9aea', 'description' => 'CRI-O', 'correct_answer' => false]
                ]],
        ['id' => 'b9448613-5b95-55b1-b43c-05c000cf8504', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which symmetric block cipher was an AES finalist?', 'difficulty' => 2, 'weight' => 212, 'alternatives' => [
                    ['id' => '0417660c-e721-5c00-b668-ad627fda0b25', 'description' => 'IDEA', 'correct_answer' => false],
                    ['id' => '74626700-79c4-563a-a5d3-ff8e674ba4d9', 'description' => 'Twofish', 'correct_answer' => true],
                    ['id' => '34b8a4d9-6422-5f29-ab72-718eda3b2be1', 'description' => 'RSA', 'correct_answer' => false],
                    ['id' => 'a00f853c-8dbf-5396-977e-60acf06f4131', 'description' => 'Camellia', 'correct_answer' => false],
                    ['id' => '53e871f6-543f-5f46-91ba-f86f36947c60', 'description' => 'Serpent', 'correct_answer' => false]
                ]],
        ['id' => '26a809d4-203f-5743-9c64-5d4f70fcac91', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which symmetric block cipher was designed by Bruce Schneier in 1993?', 'difficulty' => 2, 'weight' => 318, 'alternatives' => [
                    ['id' => 'dd514046-ed7a-560c-9681-2b4068b91d4e', 'description' => 'ChaCha20', 'correct_answer' => false],
                    ['id' => '8837f165-64df-5955-86b7-6250f17d614f', 'description' => 'RSA', 'correct_answer' => false],
                    ['id' => 'b66cf1df-b4a4-5140-be0f-412d8a6c66c3', 'description' => 'ECC', 'correct_answer' => false],
                    ['id' => 'abfb6e71-406e-5cc9-9d2d-286fa3d18574', 'description' => 'Blowfish', 'correct_answer' => true],
                    ['id' => 'abfa1010-f97c-5302-b18a-98bf0f4ce126', 'description' => 'Camellia', 'correct_answer' => false]
                ]],
        ['id' => '0c28bf39-de9f-5395-b423-23ead68dc2d6', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which public-key cryptosystem is based on the difficulty of factoring large integers?', 'difficulty' => 2, 'weight' => 355, 'alternatives' => [
                    ['id' => '00d5254f-f353-55ab-ad2c-ab53a537f232', 'description' => 'RSA', 'correct_answer' => true],
                    ['id' => '443ac256-013e-5646-829c-f6172422d541', 'description' => 'Twofish', 'correct_answer' => false],
                    ['id' => 'baf1bc60-5f5e-5f07-b0ea-4508754f0eba', 'description' => 'Blowfish', 'correct_answer' => false],
                    ['id' => '7f765579-360a-5161-84fe-9cfcda501254', 'description' => 'IDEA', 'correct_answer' => false],
                    ['id' => '3abd19c2-d821-53af-a3bf-44d72c5b680b', 'description' => 'ChaCha20', 'correct_answer' => false]
                ]],
        ['id' => '2306bc54-97f6-5ef6-a9d2-b9ab16bc401a', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which block cipher was used in early versions of PGP?', 'difficulty' => 2, 'weight' => 209, 'alternatives' => [
                    ['id' => '21d42d4b-438f-5dd2-acdb-ab05ae95acbe', 'description' => 'RSA', 'correct_answer' => false],
                    ['id' => '2df23524-872a-5765-a11d-7df137c9c230', 'description' => 'Serpent', 'correct_answer' => false],
                    ['id' => '714ea6b0-d713-546f-b44a-416df62d4fdd', 'description' => '3DES', 'correct_answer' => false],
                    ['id' => '834b3004-805f-5169-b805-0565173f2b20', 'description' => 'ChaCha20', 'correct_answer' => false],
                    ['id' => '93b0b393-c80c-582d-97a9-0263f732bf07', 'description' => 'IDEA', 'correct_answer' => true]
                ]],
        ['id' => 'a5f254a1-34c3-5e97-b5e3-979710824b9c', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which symmetric encryption algorithm is standardized as the Advanced Encryption Standard?', 'difficulty' => 2, 'weight' => 335, 'alternatives' => [
                    ['id' => '5cee676b-0204-58ff-b6ef-ee0660a8de62', 'description' => 'AES', 'correct_answer' => true],
                    ['id' => '4f98551d-2913-59d5-ac6d-15fd0f2b7651', 'description' => 'ECC', 'correct_answer' => false],
                    ['id' => 'ded3e94c-4c00-509c-b679-a378230245ef', 'description' => 'Blowfish', 'correct_answer' => false],
                    ['id' => '78f96c38-21ca-56b3-93f7-62cc1819face', 'description' => '3DES', 'correct_answer' => false],
                    ['id' => '46538956-96b3-551f-93da-274e4d012c8d', 'description' => 'Twofish', 'correct_answer' => false]
                ]],
        ['id' => 'd46f6760-9b75-57c9-b3cb-462518246594', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which 128-bit block cipher was one of the five AES finalists?', 'difficulty' => 2, 'weight' => 392, 'alternatives' => [
                    ['id' => '5c552fa2-8c95-56e4-88d2-58243e9a8f82', 'description' => 'ECC', 'correct_answer' => false],
                    ['id' => '925ce4f9-2fe2-51a9-8e6a-6f82c0a1669f', 'description' => '3DES', 'correct_answer' => false],
                    ['id' => 'ad34fd67-d89b-5438-8e72-7b6f74e89e03', 'description' => 'Twofish', 'correct_answer' => false],
                    ['id' => '0e5d625a-fb76-52a8-93fc-289b04c68bd5', 'description' => 'Serpent', 'correct_answer' => true],
                    ['id' => '177bd2f8-2930-5ca3-858a-efd5de2c0aef', 'description' => 'RSA', 'correct_answer' => false]
                ]],
        ['id' => 'a3d5157b-4994-5532-ac1d-a181057bf1bf', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which block cipher was jointly developed by Mitsubishi Electric and NTT?', 'difficulty' => 2, 'weight' => 329, 'alternatives' => [
                    ['id' => '300a3c6b-5145-5c5e-84d1-1da1edf2eeb2', 'description' => 'Blowfish', 'correct_answer' => false],
                    ['id' => 'c4355ffa-1d19-5c14-bff8-a81210f3c8ca', 'description' => 'RSA', 'correct_answer' => false],
                    ['id' => '15ae1f9c-0166-5f3c-b17f-7b7aac7f7406', 'description' => 'AES', 'correct_answer' => false],
                    ['id' => '92441999-38b6-5cd3-a030-5fd79bb85687', 'description' => '3DES', 'correct_answer' => false],
                    ['id' => '3a363654-acde-5604-81c9-3b3c526f5d37', 'description' => 'Camellia', 'correct_answer' => true]
                ]],
        ['id' => '23755273-47aa-5665-b276-960a72340c86', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which stream cipher is often paired with Poly1305?', 'difficulty' => 2, 'weight' => 259, 'alternatives' => [
                    ['id' => '40bf61f6-0ed0-59e2-82e6-55f8072325cc', 'description' => 'AES', 'correct_answer' => false],
                    ['id' => 'e202cda1-2b01-5434-a079-022e66b94ac4', 'description' => '3DES', 'correct_answer' => false],
                    ['id' => '51f2dbe8-1add-5a0d-aee8-798636ac8203', 'description' => 'Twofish', 'correct_answer' => false],
                    ['id' => '83150fbd-e555-5f8d-b19b-36d0931ff20a', 'description' => 'ChaCha20', 'correct_answer' => true],
                    ['id' => 'e0bc086e-76d3-5d07-b00b-bff47022c008', 'description' => 'IDEA', 'correct_answer' => false]
                ]],
        ['id' => 'e26e7751-e53c-59df-853d-2bf9d5e8deea', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which older centralized version-control system uses the command-line client cvs?', 'difficulty' => 2, 'weight' => 213, 'alternatives' => [
                    ['id' => 'd56e6c14-6ccf-55bf-a88f-8a85fa4793a7', 'description' => 'Git', 'correct_answer' => false],
                    ['id' => '06fb4c29-8ed7-5059-9ba2-57cc291cec33', 'description' => 'Monotone', 'correct_answer' => false],
                    ['id' => 'fd4017d4-3402-53f3-b472-846476695381', 'description' => 'Fossil', 'correct_answer' => false],
                    ['id' => '542c6d09-6767-5580-b95b-d36b93ca0d8e', 'description' => 'CVS', 'correct_answer' => true],
                    ['id' => '55f7d0c4-55c8-5718-9f75-2148d4690de4', 'description' => 'Darcs', 'correct_answer' => false]
                ]],
        ['id' => 'b9bf67ce-3deb-5b4d-84e5-839bec945b24', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which version-control system is based on a theory of patches?', 'difficulty' => 2, 'weight' => 283, 'alternatives' => [
                    ['id' => '0e9508c8-35eb-5734-82d4-dfc6bcb90e15', 'description' => 'Subversion', 'correct_answer' => false],
                    ['id' => '228c4559-5ec5-5512-b3ff-116824122b9d', 'description' => 'Darcs', 'correct_answer' => true],
                    ['id' => '26e3278f-c29d-5d9e-b728-e114321931fa', 'description' => 'Unity Version Control', 'correct_answer' => false],
                    ['id' => 'f256aef4-5384-5e09-a858-8a357d390c80', 'description' => 'Mercurial', 'correct_answer' => false],
                    ['id' => 'ccde1c43-364e-5f07-9f72-acfc312ddcea', 'description' => 'Git', 'correct_answer' => false]
                ]],
        ['id' => '03e69d3e-4f10-5745-91b8-2ade339450a3', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which version-control system includes an integrated bug tracker and wiki?', 'difficulty' => 2, 'weight' => 255, 'alternatives' => [
                    ['id' => '5f3a57e9-b63c-54bd-9ccc-3872d605170d', 'description' => 'Mercurial', 'correct_answer' => false],
                    ['id' => '57a96b68-fa1e-5d93-aa6b-c571bf6efe2a', 'description' => 'Fossil', 'correct_answer' => true],
                    ['id' => 'daed3155-3538-58f0-a84e-ac33e66defc3', 'description' => 'Git', 'correct_answer' => false],
                    ['id' => 'c86f9d95-ac2a-5c51-ba11-e814c0d7cde9', 'description' => 'CVS', 'correct_answer' => false],
                    ['id' => 'd78d2239-9bf9-57f7-bac5-31bb1dab8f4a', 'description' => 'Darcs', 'correct_answer' => false]
                ]],
        ['id' => '3a71c32e-7843-5dda-b401-6bb282022afb', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which version-control system was formerly known as Plastic SCM?', 'difficulty' => 2, 'weight' => 237, 'alternatives' => [
                    ['id' => '80119578-128e-544c-a82b-a8fdf58fbd43', 'description' => 'Unity Version Control', 'correct_answer' => true],
                    ['id' => '2a7f3eb3-68cf-5709-9682-359e4fab9dbf', 'description' => 'Fossil', 'correct_answer' => false],
                    ['id' => '4deabb42-08ac-55b9-8904-87c1c9f1e213', 'description' => 'Darcs', 'correct_answer' => false],
                    ['id' => 'e3af2585-03d2-5a6f-97a4-8c52b53d19f8', 'description' => 'Perforce Helix Core', 'correct_answer' => false],
                    ['id' => '56410862-357f-5b86-8319-498302faee73', 'description' => 'Git', 'correct_answer' => false]
                ]],
        ['id' => 'a7358a6a-ad5b-5180-b067-c10e3c2db111', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which distributed version-control system was developed by Canonical?', 'difficulty' => 2, 'weight' => 218, 'alternatives' => [
                    ['id' => '9bb11cb4-9f97-5a48-b1aa-08d0f34fae15', 'description' => 'Bazaar', 'correct_answer' => true],
                    ['id' => '433874fb-0c0a-558e-b2d0-643c9e1b4b23', 'description' => 'Unity Version Control', 'correct_answer' => false],
                    ['id' => '97bdb488-68eb-5947-b81c-1c5d3065418c', 'description' => 'Mercurial', 'correct_answer' => false],
                    ['id' => 'c9df0410-a694-5d92-b6b2-c565baa9d37e', 'description' => 'Fossil', 'correct_answer' => false],
                    ['id' => 'eb28b867-b797-5809-9ba9-ac614e105600', 'description' => 'Darcs', 'correct_answer' => false]
                ]],
        ['id' => 'fe2fedd0-1311-5892-83e0-055ea3758315', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which version-control system is widely used for large binary assets in game development?', 'difficulty' => 2, 'weight' => 347, 'alternatives' => [
                    ['id' => '11105cb7-2b3b-5c56-a48d-874447cbc9db', 'description' => 'Fossil', 'correct_answer' => false],
                    ['id' => 'bfea2d11-7a1b-56fd-a0a4-2faa96463f99', 'description' => 'Perforce Helix Core', 'correct_answer' => true],
                    ['id' => '5d48e7fa-c449-5146-bb44-16f6ac6e2bfd', 'description' => 'CVS', 'correct_answer' => false],
                    ['id' => 'bf8109f3-cf72-5ef5-97e0-9782e6475e19', 'description' => 'Darcs', 'correct_answer' => false],
                    ['id' => '41ca190d-4e3b-5f22-831f-5c0cc7312e04', 'description' => 'Unity Version Control', 'correct_answer' => false]
                ]],
        ['id' => 'e1bbe040-7fd7-54e0-b073-7663e4be8826', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which distributed version-control system was created by Linus Torvalds?', 'difficulty' => 2, 'weight' => 268, 'alternatives' => [
                    ['id' => 'ecb22669-cf42-5874-94c3-cbbad944f44f', 'description' => 'Subversion', 'correct_answer' => false],
                    ['id' => 'a8ddcbf4-3e5a-58ae-b496-3f45f6efd69a', 'description' => 'CVS', 'correct_answer' => false],
                    ['id' => 'd3f2ebb1-2bed-5e27-a164-34ed96fe509d', 'description' => 'Git', 'correct_answer' => true],
                    ['id' => '848ef39b-5237-59c8-8bff-44b5756601a0', 'description' => 'Perforce Helix Core', 'correct_answer' => false],
                    ['id' => '9a66f271-1cc5-58dd-bb1d-e95be2dc7904', 'description' => 'Mercurial', 'correct_answer' => false]
                ]],
        ['id' => '62cde299-2df5-5cab-b63e-89b9e68b861b', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which centralized version-control system is commonly abbreviated SVN?', 'difficulty' => 2, 'weight' => 219, 'alternatives' => [
                    ['id' => '06741be2-df4c-51cb-bdb2-b0f3e0a1f3e1', 'description' => 'Darcs', 'correct_answer' => false],
                    ['id' => 'a4306238-2fb2-552a-84df-dfcea74209b1', 'description' => 'Unity Version Control', 'correct_answer' => false],
                    ['id' => '77f3d14a-4656-597b-b862-925cf19e9c0e', 'description' => 'Subversion', 'correct_answer' => true],
                    ['id' => 'be645dc2-e869-5f6e-894d-8ca8e59f9db3', 'description' => 'Git', 'correct_answer' => false],
                    ['id' => 'eb4a2bba-9d36-5ed1-ad8d-a5aef9d477f5', 'description' => 'CVS', 'correct_answer' => false]
                ]],
        ['id' => '1b57bf39-eb4e-5918-bd79-50b6a94c54dd', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which tree-like structure stores keys by shared prefixes?', 'difficulty' => 3, 'weight' => 511, 'alternatives' => [
                    ['id' => 'cf87f21b-add3-5f54-b50a-888f66d12aff', 'description' => 'R-tree', 'correct_answer' => false],
                    ['id' => '9033e294-83b5-5c1f-a962-f9c77dad47ee', 'description' => 'Red-black tree', 'correct_answer' => false],
                    ['id' => 'e8183309-8f30-536f-a338-380d1e44920a', 'description' => 'Fenwick tree', 'correct_answer' => false],
                    ['id' => '98906201-3cb9-559e-88bf-a4d08d0692f1', 'description' => 'Trie', 'correct_answer' => true],
                    ['id' => '63519d72-f6e7-5055-b3ad-aead2270c953', 'description' => 'AVL tree', 'correct_answer' => false]
                ]],
        ['id' => 'd90b9198-d845-59c8-b31c-a7a6c589b5cf', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which binary indexed tree supports prefix-sum queries and point updates?', 'difficulty' => 3, 'weight' => 509, 'alternatives' => [
                    ['id' => 'aadbc118-e9be-5417-b51a-9e42b34477b9', 'description' => 'Red-black tree', 'correct_answer' => false],
                    ['id' => 'd96795fd-c575-5b63-9824-ba03c8babb4f', 'description' => 'Segment tree', 'correct_answer' => false],
                    ['id' => 'd715a924-40c3-5b5c-b3c6-1966040e8bfe', 'description' => 'Interval tree', 'correct_answer' => false],
                    ['id' => '742141fc-ea0d-5154-8082-9698925e464f', 'description' => 'Fenwick tree', 'correct_answer' => true],
                    ['id' => '44b8b756-58d0-5018-9995-03b3daa9cdcb', 'description' => 'AVL tree', 'correct_answer' => false]
                ]],
        ['id' => 'bffd9837-c33c-5366-a7fe-8ae6f82541dc', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which self-balancing binary search tree uses node colors to maintain logarithmic height?', 'difficulty' => 3, 'weight' => 435, 'alternatives' => [
                    ['id' => '534e8a02-e78a-5233-8275-edad00b21033', 'description' => 'B-tree', 'correct_answer' => false],
                    ['id' => '1d06f9e1-aede-5d6e-8429-85a32b2c73a0', 'description' => 'Segment tree', 'correct_answer' => false],
                    ['id' => 'a074ad49-4458-5e50-bc34-2bdf53d39195', 'description' => 'Interval tree', 'correct_answer' => false],
                    ['id' => 'e93d4ff8-7c3a-51f0-9a31-772c18c9e683', 'description' => 'Red-black tree', 'correct_answer' => true],
                    ['id' => '7e7a1efa-562b-59b9-8b22-b91a0fb6c4a8', 'description' => 'Suffix tree', 'correct_answer' => false]
                ]],
        ['id' => '9b0fb7e9-d809-5c75-827d-4798a478f7ff', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which data structure stores intervals and supports overlap queries?', 'difficulty' => 3, 'weight' => 578, 'alternatives' => [
                    ['id' => '6f136831-d162-54e7-b0a4-036f9e6a1f80', 'description' => 'R-tree', 'correct_answer' => false],
                    ['id' => '0f38ba41-4581-5d38-b02d-56a45c983ffe', 'description' => 'AVL tree', 'correct_answer' => false],
                    ['id' => 'd99e8d6e-8abc-57ce-989d-83d77407ac61', 'description' => 'B+ tree', 'correct_answer' => false],
                    ['id' => 'c2620488-57a8-58e4-b01e-b8ef8408a757', 'description' => 'Interval tree', 'correct_answer' => true],
                    ['id' => '6ca95053-e7c5-5831-a419-d6f4c3a1ac93', 'description' => 'Red-black tree', 'correct_answer' => false]
                ]],
        ['id' => '6dea101d-4235-5c60-a4c5-cf9801931ccf', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which balanced tree structure is commonly used for database indexes on disk?', 'difficulty' => 3, 'weight' => 440, 'alternatives' => [
                    ['id' => 'ef7cbce8-a837-5073-ba46-d0ced852b8d5', 'description' => 'B+ tree', 'correct_answer' => false],
                    ['id' => '38aeb3de-5123-5dd9-a4fc-331922337ca1', 'description' => 'Segment tree', 'correct_answer' => false],
                    ['id' => '7c74cfda-5c97-523b-9953-2d090ec4ce5f', 'description' => 'Trie', 'correct_answer' => false],
                    ['id' => '460631ee-cea1-570f-abe3-cf8698c76455', 'description' => 'Interval tree', 'correct_answer' => false],
                    ['id' => '29c661cb-b729-5894-9d9d-44e224e42380', 'description' => 'B-tree', 'correct_answer' => true]
                ]],
        ['id' => '910557a9-5f2a-584b-8c6b-e84082bb2c24', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which tree supports efficient range queries and updates over an array?', 'difficulty' => 3, 'weight' => 571, 'alternatives' => [
                    ['id' => '7b1c68a0-c446-53c6-aa64-9af3f7f6cd16', 'description' => 'Segment tree', 'correct_answer' => true],
                    ['id' => '42f42d41-c1ff-57ad-aabf-34925d751f19', 'description' => 'AVL tree', 'correct_answer' => false],
                    ['id' => '831b1999-0feb-578e-8d9d-43e0d8afed0a', 'description' => 'Fenwick tree', 'correct_answer' => false],
                    ['id' => '07975d6d-daf5-5aad-ab98-f1c8cd2893b0', 'description' => 'B-tree', 'correct_answer' => false],
                    ['id' => '71d226e6-5c27-5898-8463-affbe2445556', 'description' => 'Red-black tree', 'correct_answer' => false]
                ]],
        ['id' => 'a88ec359-94d8-507f-8214-e9d4a7708b9a', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which index structure stores records or pointers at leaf level and links leaves sequentially?', 'difficulty' => 3, 'weight' => 566, 'alternatives' => [
                    ['id' => '88d5cd6f-b5ff-5247-bc31-1489ca05e84b', 'description' => 'B-tree', 'correct_answer' => false],
                    ['id' => 'ad80a307-3d31-58ef-a7af-c6868d9dde8d', 'description' => 'Trie', 'correct_answer' => false],
                    ['id' => '4b493fb7-81d9-5dd0-ba5a-b2c35a350bc8', 'description' => 'AVL tree', 'correct_answer' => false],
                    ['id' => 'c4f722f6-faa7-539a-a335-12de0fd8028b', 'description' => 'B+ tree', 'correct_answer' => true],
                    ['id' => 'f1f42169-021e-5d7f-b401-b91f01828184', 'description' => 'Interval tree', 'correct_answer' => false]
                ]],
        ['id' => '22eac7f1-b734-5558-957b-54c6c82aa16a', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which compressed trie represents all suffixes of a string?', 'difficulty' => 3, 'weight' => 590, 'alternatives' => [
                    ['id' => '87c427f1-fb32-5511-b196-f0cbd84acd88', 'description' => 'R-tree', 'correct_answer' => false],
                    ['id' => 'ee8760da-9a81-529c-8c2a-a6950477274c', 'description' => 'Suffix tree', 'correct_answer' => true],
                    ['id' => '1ca5334e-584d-5a10-83aa-0c24c320317f', 'description' => 'Segment tree', 'correct_answer' => false],
                    ['id' => '23a35548-fbb3-50d5-9e62-3b55bfd41687', 'description' => 'B+ tree', 'correct_answer' => false],
                    ['id' => '8720fb18-1d4b-57c1-a474-f25b5c63edb1', 'description' => 'Fenwick tree', 'correct_answer' => false]
                ]],
        ['id' => '7dd87b5c-2eba-55ea-bcf5-a87b329c07e0', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which Paxos optimization uses a stable leader for multiple consensus instances?', 'difficulty' => 3, 'weight' => 417, 'alternatives' => [
                    ['id' => 'fdfb771d-8019-5638-af76-4c657574831c', 'description' => 'EPaxos', 'correct_answer' => false],
                    ['id' => '8f4b73b9-78d6-5ce8-a849-0ade8370fb4b', 'description' => 'Zab', 'correct_answer' => false],
                    ['id' => '56cf0f9a-09c4-5b49-b878-86af7a5367a0', 'description' => 'Multi-Paxos', 'correct_answer' => true],
                    ['id' => 'a17619e8-a491-513a-9452-ff9df1b96842', 'description' => 'Mencius', 'correct_answer' => false],
                    ['id' => '99ffde84-8e1e-5e56-9742-ab32fb838447', 'description' => 'Tendermint', 'correct_answer' => false]
                ]],
        ['id' => '0dff4574-8fcc-59ad-bc00-91c2cb2ad187', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which distributed consensus algorithm uses leader election and is designed to be understandable?', 'difficulty' => 3, 'weight' => 401, 'alternatives' => [
                    ['id' => '28a20b59-3c0b-540f-8d52-3d97e671411c', 'description' => 'Zab', 'correct_answer' => false],
                    ['id' => '7e743783-4908-5628-905c-d4d6cfb701bb', 'description' => 'Mencius', 'correct_answer' => false],
                    ['id' => 'bbc1cbc7-5803-5441-ad4f-f55a0e9aa68a', 'description' => 'PBFT', 'correct_answer' => false],
                    ['id' => 'f4fc27fe-f5c5-5f66-b8ae-8e390d713fe7', 'description' => 'Multi-Paxos', 'correct_answer' => false],
                    ['id' => '30ff7137-284c-54c3-98c7-1990db1dcb7d', 'description' => 'Raft', 'correct_answer' => true]
                ]],
        ['id' => '3fe4953d-348d-5525-86a7-385141d05fcd', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which consensus protocol rotates leadership among nodes to balance proposal load?', 'difficulty' => 3, 'weight' => 559, 'alternatives' => [
                    ['id' => '5795c2c2-985b-5787-a344-4db176714aed', 'description' => 'Paxos', 'correct_answer' => false],
                    ['id' => '4de090b1-32f5-5175-9998-59dd6e263a20', 'description' => 'Mencius', 'correct_answer' => true],
                    ['id' => '6e00b5d2-566e-5d82-b72b-d4d165517697', 'description' => 'Zab', 'correct_answer' => false],
                    ['id' => '5af342c9-125e-560f-9ca2-9608495628d1', 'description' => 'PBFT', 'correct_answer' => false],
                    ['id' => 'fc72fbb2-b6a4-5467-a510-081962d671b0', 'description' => 'Viewstamped Replication', 'correct_answer' => false]
                ]],
        ['id' => '5dd68f05-0c25-5612-9c49-8a08371c76f6', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which Byzantine fault-tolerant protocol uses chained quorum certificates?', 'difficulty' => 3, 'weight' => 539, 'alternatives' => [
                    ['id' => '4e7cf234-38f9-5911-ac06-975e96696d49', 'description' => 'Multi-Paxos', 'correct_answer' => false],
                    ['id' => 'bfe5a4f1-aa5d-5084-87f0-f69baec77f2a', 'description' => 'HotStuff', 'correct_answer' => true],
                    ['id' => '383be216-9912-5f3a-9575-86254195b316', 'description' => 'Paxos', 'correct_answer' => false],
                    ['id' => 'c44bef36-964b-5a84-9ef4-8c1e49d768c1', 'description' => 'Viewstamped Replication', 'correct_answer' => false],
                    ['id' => 'e346ffe8-d7ee-5c19-8e49-32eaffb869ef', 'description' => 'Raft', 'correct_answer' => false]
                ]],
        ['id' => '1e02f7a1-50dd-5951-a095-6a6ef721f869', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which Byzantine fault-tolerant consensus engine uses rounds and locking?', 'difficulty' => 3, 'weight' => 596, 'alternatives' => [
                    ['id' => '1b0f3853-7ba2-5593-bb70-08bfa1147ea8', 'description' => 'Zab', 'correct_answer' => false],
                    ['id' => '6286986c-dad4-535e-adc5-63698f14e7be', 'description' => 'Tendermint', 'correct_answer' => true],
                    ['id' => 'ac68169a-e3a8-5317-a6c6-24e494a6346a', 'description' => 'PBFT', 'correct_answer' => false],
                    ['id' => 'c3a13978-3d7b-55ed-9603-5410782041ec', 'description' => 'Raft', 'correct_answer' => false],
                    ['id' => 'b1209ab4-9787-582c-a8ac-d9bf5b05063b', 'description' => 'Paxos', 'correct_answer' => false]
                ]],
        ['id' => 'ccf74c5c-ad3e-5e3e-92d9-bda033702a04', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which protocol name expands to Practical Byzantine Fault Tolerance?', 'difficulty' => 3, 'weight' => 468, 'alternatives' => [
                    ['id' => 'a3d01a0b-8a82-5e14-9306-84ca259b1523', 'description' => 'HotStuff', 'correct_answer' => false],
                    ['id' => '3912bcbf-8376-5a0c-a7af-90f601c726cc', 'description' => 'PBFT', 'correct_answer' => true],
                    ['id' => '613dd306-d579-57af-a2f7-d0a2641fec95', 'description' => 'Zab', 'correct_answer' => false],
                    ['id' => '32fdf831-6132-54ae-8be3-ba89139306b6', 'description' => 'Paxos', 'correct_answer' => false],
                    ['id' => '4c7cbad4-ce96-514b-ae7f-b66eb5a97167', 'description' => 'Multi-Paxos', 'correct_answer' => false]
                ]],
        ['id' => 'fbd588d7-e81a-53b0-a7e9-8635ff38411c', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which protocol can commit commands without a single fixed leader for every operation?', 'difficulty' => 3, 'weight' => 556, 'alternatives' => [
                    ['id' => 'b74b791b-5b58-56d7-94a4-3b5006fcd13f', 'description' => 'Raft', 'correct_answer' => false],
                    ['id' => '12a7e7b1-8e06-5af6-8ef0-d64476fbd9b6', 'description' => 'EPaxos', 'correct_answer' => true],
                    ['id' => 'c259ddf7-dd84-5f93-a443-2ee21239d16a', 'description' => 'Mencius', 'correct_answer' => false],
                    ['id' => '0904d8b6-6565-518f-b7b9-44006ac65f77', 'description' => 'Multi-Paxos', 'correct_answer' => false],
                    ['id' => 'df62b0ef-e2fe-5a7c-8595-112c4a718c23', 'description' => 'PBFT', 'correct_answer' => false]
                ]],
        ['id' => 'dcc9a229-5df3-50e2-8e15-9a4a2b7ad1e1', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which replication protocol uses a primary-backup model and view changes?', 'difficulty' => 3, 'weight' => 506, 'alternatives' => [
                    ['id' => '67f1ee06-c98c-538c-ad24-4319626f1d74', 'description' => 'HotStuff', 'correct_answer' => false],
                    ['id' => 'cd814f35-5c27-58f2-9f47-121aea5a97a9', 'description' => 'Viewstamped Replication', 'correct_answer' => true],
                    ['id' => 'cc350ef6-3f44-5d5c-a3a3-7b92e5af6f5a', 'description' => 'Zab', 'correct_answer' => false],
                    ['id' => '12ccb599-92d8-5330-9555-0aeeee586da3', 'description' => 'Mencius', 'correct_answer' => false],
                    ['id' => '849403c8-ccb9-5da7-96bf-f6c63a11b200', 'description' => 'EPaxos', 'correct_answer' => false]
                ]],
        ['id' => '0faf6530-7c98-585a-a317-bba50b47d6d0', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which distributed-systems principle describes the trade-off among consistency, availability, and partition tolerance?', 'difficulty' => 3, 'weight' => 407, 'alternatives' => [
                    ['id' => '581cfef6-c97b-5a2c-befe-1cb42f55340a', 'description' => 'CAP theorem', 'correct_answer' => true],
                    ['id' => '2d6e9c3a-8713-5b4a-b325-8a2eb05b7001', 'description' => 'Three-phase commit', 'correct_answer' => false],
                    ['id' => '06ab79dd-1d8d-520d-9093-ffcdc3f6f6f1', 'description' => 'Two-phase commit', 'correct_answer' => false],
                    ['id' => '3872a43e-dbd4-5593-8524-a397da8e9abd', 'description' => 'Circuit breaker pattern', 'correct_answer' => false],
                    ['id' => 'bb4ebf4b-5a4a-5193-88a8-20081a58b5e3', 'description' => 'CQRS', 'correct_answer' => false]
                ]],
        ['id' => '505c6aa3-7b3e-5bd5-b811-00c66507d5fb', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which resilience pattern temporarily stops calls to a failing dependency?', 'difficulty' => 3, 'weight' => 509, 'alternatives' => [
                    ['id' => '1705c4a8-7253-5dc0-92a6-c3c5eb5fb4ec', 'description' => 'Circuit breaker pattern', 'correct_answer' => true],
                    ['id' => '65fa738a-406b-58fd-ba28-3fdf4f4dc275', 'description' => 'Event sourcing', 'correct_answer' => false],
                    ['id' => '8c13b430-0856-560a-9c1d-89e39cd8377c', 'description' => 'Two-phase commit', 'correct_answer' => false],
                    ['id' => 'c1c5a851-42ad-540d-96b8-0f4cf74a413b', 'description' => 'Outbox pattern', 'correct_answer' => false],
                    ['id' => 'd9a330af-dad5-5618-8d18-459a9f602d0a', 'description' => 'PACELC theorem', 'correct_answer' => false]
                ]],
        ['id' => '746c1e3c-656b-5adb-b62b-36014f4570b5', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which distributed transaction protocol uses prepare followed by commit or abort?', 'difficulty' => 3, 'weight' => 551, 'alternatives' => [
                    ['id' => '31190454-ef3c-5893-8148-de30a1f7d919', 'description' => 'Bulkhead pattern', 'correct_answer' => false],
                    ['id' => '2039c327-4caf-5407-9039-82cff9baf0ad', 'description' => 'CAP theorem', 'correct_answer' => false],
                    ['id' => 'dd553cd2-902b-5a99-b386-eb68c0a03e14', 'description' => 'Two-phase commit', 'correct_answer' => true],
                    ['id' => 'e6197597-0ace-5475-9284-fdf699eb56d3', 'description' => 'Outbox pattern', 'correct_answer' => false],
                    ['id' => '6685a275-6d9e-531f-86e5-bed7c05a79ac', 'description' => 'Event sourcing', 'correct_answer' => false]
                ]],
        ['id' => '728ab23b-af71-5cd4-859b-e8b53b203228', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which resilience pattern isolates resources to prevent cascading exhaustion?', 'difficulty' => 3, 'weight' => 532, 'alternatives' => [
                    ['id' => '79c4ba76-ce22-5db5-9e02-e01b1c467d5b', 'description' => 'Outbox pattern', 'correct_answer' => false],
                    ['id' => '1fdcf13a-0f15-5b07-ab12-8b54820d87d4', 'description' => 'Bulkhead pattern', 'correct_answer' => true],
                    ['id' => '6910d484-6398-5cab-8138-33e895905fd4', 'description' => 'Three-phase commit', 'correct_answer' => false],
                    ['id' => 'e39bc088-b883-52c5-86f7-73a0dd1f37eb', 'description' => 'Circuit breaker pattern', 'correct_answer' => false],
                    ['id' => '905d2222-c71c-5f19-b137-d52371f24d70', 'description' => 'PACELC theorem', 'correct_answer' => false]
                ]],
        ['id' => '93d53365-5fac-57a4-ba16-1ebcbf5cf186', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which architecture separates command handling from query models?', 'difficulty' => 3, 'weight' => 419, 'alternatives' => [
                    ['id' => '998b6f02-3d10-510a-a42e-a7783d9ea251', 'description' => 'Circuit breaker pattern', 'correct_answer' => false],
                    ['id' => '8fa65d3b-34ac-5a8c-b2d3-fc26458685d7', 'description' => 'Saga pattern', 'correct_answer' => false],
                    ['id' => '65a40d74-a6e2-5069-8ab4-503410672fb9', 'description' => 'Three-phase commit', 'correct_answer' => false],
                    ['id' => '92772883-81b1-5e6f-b156-07686f0326ae', 'description' => 'Two-phase commit', 'correct_answer' => false],
                    ['id' => 'afe2522e-1822-50d5-b91d-c361de98e4a1', 'description' => 'CQRS', 'correct_answer' => true]
                ]],
        ['id' => '5fca3407-3460-56a0-a45b-9cc8f83e724c', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which reliability pattern stores an event in the same transaction as a business change?', 'difficulty' => 3, 'weight' => 565, 'alternatives' => [
                    ['id' => 'd2262cfc-bfd5-5ecc-bfa6-a0424be8a4b7', 'description' => 'Two-phase commit', 'correct_answer' => false],
                    ['id' => '86356561-bdb0-5bda-b606-2a7a0db58f6b', 'description' => 'Circuit breaker pattern', 'correct_answer' => false],
                    ['id' => 'fcca34fe-9e65-5add-8f48-0562d7084b5a', 'description' => 'Three-phase commit', 'correct_answer' => false],
                    ['id' => 'ac6f2e83-39db-54f2-a150-4edb9cb85ef7', 'description' => 'Outbox pattern', 'correct_answer' => true],
                    ['id' => '2e91acc2-f743-5431-92dc-e1b4c9dfd7a5', 'description' => 'CQRS', 'correct_answer' => false]
                ]],
        ['id' => 'b6830410-dc53-5477-a3d3-2bd5b5ca7c11', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which model extends CAP by considering latency versus consistency when no partition occurs?', 'difficulty' => 3, 'weight' => 523, 'alternatives' => [
                    ['id' => '089251fb-b89e-5000-98bf-1d632c4e9ea7', 'description' => 'PACELC theorem', 'correct_answer' => true],
                    ['id' => '88d00e0a-e9f2-51a2-a688-c2a9ad39fc57', 'description' => 'Three-phase commit', 'correct_answer' => false],
                    ['id' => '6dc417aa-822b-5406-808f-c16a34afd2d1', 'description' => 'Two-phase commit', 'correct_answer' => false],
                    ['id' => '6ac8d99d-22a7-52e6-80f2-02a422255438', 'description' => 'Outbox pattern', 'correct_answer' => false],
                    ['id' => 'cf26af1a-b1e7-5b58-9cbe-11d339c13e05', 'description' => 'Bulkhead pattern', 'correct_answer' => false]
                ]],
        ['id' => 'a4193d56-c0f4-531e-bbc3-61361ac9515d', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which architecture stores state changes as an append-only sequence of events?', 'difficulty' => 3, 'weight' => 536, 'alternatives' => [
                    ['id' => 'c81e2517-bf4a-58a0-bba9-28a9e13ec498', 'description' => 'Saga pattern', 'correct_answer' => false],
                    ['id' => '53d6ef13-1849-5930-b82e-520383898040', 'description' => 'Three-phase commit', 'correct_answer' => false],
                    ['id' => '680cba95-5b11-538d-afc0-89d258aeef43', 'description' => 'Circuit breaker pattern', 'correct_answer' => false],
                    ['id' => '2f123bcb-2fb7-5ab5-badb-9680d031b77f', 'description' => 'Bulkhead pattern', 'correct_answer' => false],
                    ['id' => 'bb4aadd9-6d62-5154-a07f-46dee21dbb40', 'description' => 'Event sourcing', 'correct_answer' => true]
                ]],
        ['id' => '01b7d70b-a1a3-5ea9-bde0-ba94729d8013', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which 160-bit hash was deprecated for digital-signature security after collision attacks?', 'difficulty' => 3, 'weight' => 459, 'alternatives' => [
                    ['id' => '0eebd255-7635-5713-9d07-bc53d82d23cf', 'description' => 'BLAKE3', 'correct_answer' => false],
                    ['id' => '90a7ae7c-a752-5813-9879-5561c2b2df6c', 'description' => 'Whirlpool', 'correct_answer' => false],
                    ['id' => '1669ef0d-25b6-569a-885b-10aed448ed24', 'description' => 'scrypt', 'correct_answer' => false],
                    ['id' => '921b8f8f-6de7-54d8-831a-ca32d8b68e25', 'description' => 'SHA-256', 'correct_answer' => false],
                    ['id' => '7b48e963-26fd-5e11-85a5-83d7fa488cc2', 'description' => 'SHA-1', 'correct_answer' => true]
                ]],
        ['id' => 'b30c3c2c-424f-58a5-8948-5eaa5abfc22a', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which hash standard is based on the Keccak sponge construction?', 'difficulty' => 3, 'weight' => 483, 'alternatives' => [
                    ['id' => '56844905-da85-5e51-8752-6ce3d08412a2', 'description' => 'BLAKE2', 'correct_answer' => false],
                    ['id' => '89d1bbb3-b9cf-587d-bc70-977f56f403e5', 'description' => 'SHA-3', 'correct_answer' => true],
                    ['id' => 'b48d09b4-aebc-5d1e-bb9b-b0695b33da39', 'description' => 'scrypt', 'correct_answer' => false],
                    ['id' => '8763e1e2-5355-574c-9dcd-85fe33abdb77', 'description' => 'Whirlpool', 'correct_answer' => false],
                    ['id' => '61c95bc8-ca82-5af3-920c-67991c3793a9', 'description' => 'Argon2', 'correct_answer' => false]
                ]],
        ['id' => '2e16bb0a-ad8b-5ae1-8ea1-c20199c4016b', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which 512-bit hash uses a block-cipher-like construction?', 'difficulty' => 3, 'weight' => 597, 'alternatives' => [
                    ['id' => '6aede60b-18c8-5d49-8ee4-bda05011c3a1', 'description' => 'SHA-256', 'correct_answer' => false],
                    ['id' => 'd4ed1e62-0c5b-529d-af20-e85f08e9cc66', 'description' => 'scrypt', 'correct_answer' => false],
                    ['id' => '62dc2c27-efb8-51bc-8a0e-bc38c1964d6f', 'description' => 'Whirlpool', 'correct_answer' => true],
                    ['id' => 'a199ddc0-3d35-525d-891b-584c9abbd4b8', 'description' => 'RIPEMD-160', 'correct_answer' => false],
                    ['id' => 'dd754c2d-a465-5bc7-80b9-5b2bd02956cf', 'description' => 'SHA-1', 'correct_answer' => false]
                ]],
        ['id' => '44d33261-52b3-5ec5-9ec8-b10cbc343b77', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which 128-bit hash is unsuitable for collision-resistant security?', 'difficulty' => 3, 'weight' => 537, 'alternatives' => [
                    ['id' => 'd4b70352-f428-5b73-8e02-c328f6bb1933', 'description' => 'SHA-256', 'correct_answer' => false],
                    ['id' => '2a8dfdea-1780-50c7-86d8-8ac647ee7535', 'description' => 'RIPEMD-160', 'correct_answer' => false],
                    ['id' => '4486752d-a842-5ae1-976d-6c5d4b93c435', 'description' => 'scrypt', 'correct_answer' => false],
                    ['id' => '86c25dd5-47e3-526c-8994-f48367c13f21', 'description' => 'MD5', 'correct_answer' => true],
                    ['id' => '0fd61bf2-808d-55dd-9557-39ac0db0ba17', 'description' => 'BLAKE2', 'correct_answer' => false]
                ]],
        ['id' => 'c02cebf4-5362-5b1a-9365-f6bb0f69d2ed', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which password-based key derivation function is designed to be memory-hard?', 'difficulty' => 3, 'weight' => 417, 'alternatives' => [
                    ['id' => 'dd447a78-3515-56ff-966e-02497bc4f554', 'description' => 'SHA-3', 'correct_answer' => false],
                    ['id' => 'faf0da33-f01a-5b97-bd21-ab6986e67137', 'description' => 'Argon2', 'correct_answer' => false],
                    ['id' => '394a4d5d-1ee8-5d49-9b18-1355d6fc972c', 'description' => 'SHA-256', 'correct_answer' => false],
                    ['id' => '66d284fb-57d5-557d-b2d5-28dd547e99ff', 'description' => 'BLAKE2', 'correct_answer' => false],
                    ['id' => 'b910c6f4-0a10-5861-816b-2b6b64b61c3c', 'description' => 'scrypt', 'correct_answer' => true]
                ]],
        ['id' => '20a74cdd-d561-5b54-8120-660ee2467beb', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which cryptographic hash was designed as a fast alternative to SHA-3 in many contexts?', 'difficulty' => 3, 'weight' => 404, 'alternatives' => [
                    ['id' => 'cf5320df-3274-559b-9939-bbe2802189db', 'description' => 'MD5', 'correct_answer' => false],
                    ['id' => 'acda7b2e-e19c-59f6-8dc1-8c51fb4b8e1a', 'description' => 'Argon2', 'correct_answer' => false],
                    ['id' => '476eb1f2-4d77-5ddb-865d-e3ec071c2c51', 'description' => 'BLAKE2', 'correct_answer' => true],
                    ['id' => '60a37ef9-50f0-5622-bc9b-e8ce13d026c9', 'description' => 'SHA-1', 'correct_answer' => false],
                    ['id' => '4ed8362d-0690-5c08-beeb-35f70636ba42', 'description' => 'Whirlpool', 'correct_answer' => false]
                ]],
        ['id' => 'aa3dadf2-4be4-59b2-bf7d-63254f281a52', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which 160-bit hash was developed in the European RIPE project?', 'difficulty' => 3, 'weight' => 567, 'alternatives' => [
                    ['id' => 'b2b47bb6-e963-50c5-982f-a11edac883a9', 'description' => 'RIPEMD-160', 'correct_answer' => true],
                    ['id' => 'da715fb5-ad3d-5222-b69e-33d00ed4d0e5', 'description' => 'BLAKE2', 'correct_answer' => false],
                    ['id' => 'abe463fc-f621-5029-bec4-ba4fc87caf06', 'description' => 'SHA-256', 'correct_answer' => false],
                    ['id' => '831ea8b8-bc89-5a89-847a-6eb997bbc527', 'description' => 'Whirlpool', 'correct_answer' => false],
                    ['id' => '736bd15c-d1c9-556b-9a5c-297b955b6dae', 'description' => 'scrypt', 'correct_answer' => false]
                ]],
        ['id' => '667b1650-6484-54df-81bf-aa4676c7d6ed', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which SHA-2 hash function produces a 256-bit digest?', 'difficulty' => 3, 'weight' => 503, 'alternatives' => [
                    ['id' => 'fb9d92f6-7107-52df-9cba-9e6d63d4c7f8', 'description' => 'SHA-3', 'correct_answer' => false],
                    ['id' => 'b8949918-c5e7-55f8-992b-afcddf876f36', 'description' => 'BLAKE3', 'correct_answer' => false],
                    ['id' => 'af7fb2c8-782e-56c4-a796-e33dcad0b017', 'description' => 'SHA-256', 'correct_answer' => true],
                    ['id' => 'd608b753-f5b7-5020-a911-6a1e457b6242', 'description' => 'Argon2', 'correct_answer' => false],
                    ['id' => 'bf89a026-c872-5692-bddd-314e3ea781f8', 'description' => 'Whirlpool', 'correct_answer' => false]
                ]],
        ['id' => 'e44d3370-047a-59f5-ae76-6e2e3252673e', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which identity layer is built on OAuth 2.0 and provides authentication?', 'difficulty' => 3, 'weight' => 504, 'alternatives' => [
                    ['id' => 'ad0dd1c0-dd42-5251-9132-9fb4eff11042', 'description' => 'RADIUS', 'correct_answer' => false],
                    ['id' => 'ae341b65-0b1f-5ffd-8509-0aaaebeb02d8', 'description' => 'WebAuthn', 'correct_answer' => false],
                    ['id' => '68306e78-b369-5f57-8b05-40e60958117f', 'description' => 'Kerberos', 'correct_answer' => false],
                    ['id' => 'a34d8991-ed54-5e1a-9a96-f9f97f1ad92b', 'description' => 'OpenID Connect', 'correct_answer' => true],
                    ['id' => 'e04ab4e5-586d-5a49-b34d-4c6d40d408a6', 'description' => 'TACACS+', 'correct_answer' => false]
                ]],
        ['id' => 'bc335a40-1246-55f6-96df-fbe8181207cd', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which network authentication protocol uses tickets and a trusted key distribution center?', 'difficulty' => 3, 'weight' => 423, 'alternatives' => [
                    ['id' => 'a4d28570-c321-567a-b0ca-8808d9012649', 'description' => 'SCIM', 'correct_answer' => false],
                    ['id' => '92ce19d1-ab21-5163-acdd-5b4de99ebf13', 'description' => 'Kerberos', 'correct_answer' => true],
                    ['id' => '5e90ebc4-19d1-53c3-b674-e7d30adbba62', 'description' => 'RADIUS', 'correct_answer' => false],
                    ['id' => 'f5971e52-1b0d-5c33-bb05-403f17029aca', 'description' => 'FIDO2', 'correct_answer' => false],
                    ['id' => 'da39953c-01be-58be-a20d-cbb77dd48fc4', 'description' => 'LDAP', 'correct_answer' => false]
                ]],
        ['id' => '5e319e7a-5054-5db7-ae79-464e1bfb3587', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which authentication standards enable passwordless authentication with public-key cryptography?', 'difficulty' => 3, 'weight' => 446, 'alternatives' => [
                    ['id' => '0cf565c3-abbf-5f3d-92ad-4a63b3adb30c', 'description' => 'LDAP', 'correct_answer' => false],
                    ['id' => '12a2d643-1ca0-5d98-ac9a-6e0cd1c4a740', 'description' => 'OpenID Connect', 'correct_answer' => false],
                    ['id' => '027c0c7a-9095-5014-8e40-5eb8b1a1b711', 'description' => 'OAuth 2.0', 'correct_answer' => false],
                    ['id' => 'bf9369ae-1428-57d2-ad91-ed2bb713167e', 'description' => 'WebAuthn', 'correct_answer' => false],
                    ['id' => '8c45cb72-13fa-58eb-8e42-5626e9d82c73', 'description' => 'FIDO2', 'correct_answer' => true]
                ]],
        ['id' => 'aab9637e-7b60-58b1-b643-6337967a9c00', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which protocol provides centralized authentication, authorization, and accounting for network access?', 'difficulty' => 3, 'weight' => 585, 'alternatives' => [
                    ['id' => 'aac7af71-431a-58eb-8b4e-878b7c92b20a', 'description' => 'RADIUS', 'correct_answer' => true],
                    ['id' => 'df6d5f64-6396-510d-87f0-c9dca6ac915b', 'description' => 'SCIM', 'correct_answer' => false],
                    ['id' => '78dd8b38-046b-5166-9918-e8a8b5a58e76', 'description' => 'Kerberos', 'correct_answer' => false],
                    ['id' => 'c6310415-1a9b-555e-bb25-0f2474699b00', 'description' => 'SAML', 'correct_answer' => false],
                    ['id' => 'c4e0a485-e2c2-5ea2-b56f-97301bed67fb', 'description' => 'OAuth 2.0', 'correct_answer' => false]
                ]],
        ['id' => 'b520c47c-882d-5146-8223-d0e636899851', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which authorization framework allows applications limited access to HTTP services?', 'difficulty' => 3, 'weight' => 455, 'alternatives' => [
                    ['id' => 'f1c47d5d-b659-57e2-a02d-023121cb0dbc', 'description' => 'LDAP', 'correct_answer' => false],
                    ['id' => '17b90731-8b44-5567-a20b-75a687cd7276', 'description' => 'Kerberos', 'correct_answer' => false],
                    ['id' => 'b634ae89-cb6e-580a-8349-397ade713d8d', 'description' => 'WebAuthn', 'correct_answer' => false],
                    ['id' => 'cfd8fecc-cd5d-5cac-b087-92bccc252b06', 'description' => 'OAuth 2.0', 'correct_answer' => true],
                    ['id' => 'a654c1f4-2236-5c83-846d-62a08d8b8266', 'description' => 'RADIUS', 'correct_answer' => false]
                ]],
        ['id' => '22e43722-1472-5546-bf58-5b0fe0c8e719', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which standard automates exchange of user identity information between cloud services?', 'difficulty' => 3, 'weight' => 544, 'alternatives' => [
                    ['id' => 'dbd55fec-ce69-597a-9bfa-226fd7a2ab20', 'description' => 'Kerberos', 'correct_answer' => false],
                    ['id' => '3d8fbea9-b176-58a9-ba00-274d2afea3ab', 'description' => 'RADIUS', 'correct_answer' => false],
                    ['id' => '07ece45b-873e-50ee-8870-82b56408f676', 'description' => 'OAuth 2.0', 'correct_answer' => false],
                    ['id' => 'ee6d72c2-d8c5-5604-8748-31e9b49f1377', 'description' => 'SCIM', 'correct_answer' => true],
                    ['id' => 'e17993bf-232e-5c02-ac02-936f864326e3', 'description' => 'FIDO2', 'correct_answer' => false]
                ]],
        ['id' => '3073a05d-19da-5e60-9daf-67b25c95bf0b', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which W3C standard lets websites use public-key credentials for authentication?', 'difficulty' => 3, 'weight' => 414, 'alternatives' => [
                    ['id' => 'de9d0a5c-e9cd-5423-8781-b4b87e2e57d3', 'description' => 'WebAuthn', 'correct_answer' => true],
                    ['id' => 'd2c4e2c7-dda6-5eea-b52f-00f0c821d1cb', 'description' => 'RADIUS', 'correct_answer' => false],
                    ['id' => '145f38c6-fe06-5a27-a4b5-5a44d831016d', 'description' => 'OpenID Connect', 'correct_answer' => false],
                    ['id' => '83f944f8-ce68-51b8-aeeb-6325065853e5', 'description' => 'LDAP', 'correct_answer' => false],
                    ['id' => 'b281468e-499c-5d73-8f8d-0535fbb2d93a', 'description' => 'SCIM', 'correct_answer' => false]
                ]],
        ['id' => '7d0cb534-281f-5766-9324-d852970afc84', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which XML-based standard exchanges authentication data between identity providers and services?', 'difficulty' => 3, 'weight' => 523, 'alternatives' => [
                    ['id' => '231a7856-5990-5596-9992-4bad9ebe26c5', 'description' => 'SCIM', 'correct_answer' => false],
                    ['id' => 'df32fa57-a0ee-53fd-9d03-74f483ebbd66', 'description' => 'RADIUS', 'correct_answer' => false],
                    ['id' => '5e5c6463-9bde-5ae9-9be0-d69f0c84f7aa', 'description' => 'FIDO2', 'correct_answer' => false],
                    ['id' => 'b010e0ca-3695-5f32-b9ab-675bf64894db', 'description' => 'WebAuthn', 'correct_answer' => false],
                    ['id' => '17fdf7a6-a3b5-52b7-9542-804a67eb767c', 'description' => 'SAML', 'correct_answer' => true]
                ]],
        ['id' => '9c9cfad5-0328-54b0-8785-1736835fcd59', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'What general class of clock tracks event ordering without synchronized physical time?', 'difficulty' => 4, 'weight' => 647, 'alternatives' => [
                    ['id' => 'af246e1c-965c-5853-94b4-a46484e42ab3', 'description' => 'Lamport timestamp', 'correct_answer' => false],
                    ['id' => 'e6af9472-af19-50fa-8964-8321c9228b73', 'description' => 'Physical clock', 'correct_answer' => false],
                    ['id' => 'b92831d6-1112-5593-bb41-98367b0ae7cf', 'description' => 'Logical clock', 'correct_answer' => true],
                    ['id' => 'cec8fc16-138a-52b7-8dbf-899326b8f17f', 'description' => 'Vector clock', 'correct_answer' => false],
                    ['id' => 'df4fb27b-503d-5975-80ca-ff341fdb352c', 'description' => 'Hybrid logical clock', 'correct_answer' => false]
                ]],
        ['id' => '47ee7d9e-c2a8-50c1-af3e-ea5199e0588c', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which clock combines physical time with logical counters while preserving causality?', 'difficulty' => 4, 'weight' => 712, 'alternatives' => [
                    ['id' => 'c4260a2c-5161-501d-98ee-0ab866e4f505', 'description' => 'Vector clock', 'correct_answer' => false],
                    ['id' => '67ef4bd0-5202-5510-acf8-aad455563861', 'description' => 'Hybrid logical clock', 'correct_answer' => true],
                    ['id' => '7b35952a-8b03-596f-aa58-b7078e41d471', 'description' => 'Logical clock', 'correct_answer' => false],
                    ['id' => 'e979b779-57fa-5cc0-ab28-4e5f046d7c0c', 'description' => 'Version vector', 'correct_answer' => false],
                    ['id' => 'bf290e59-4e61-5dc8-86cc-584925e85a8e', 'description' => 'Physical clock', 'correct_answer' => false]
                ]],
        ['id' => '45287cda-c8cb-5405-8ec2-8fbfa186f43c', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which clock measures time using an oscillator or external time source?', 'difficulty' => 4, 'weight' => 733, 'alternatives' => [
                    ['id' => 'ad602245-652f-5a35-9ac8-0df02d4f2f8e', 'description' => 'Version vector', 'correct_answer' => false],
                    ['id' => '310c2215-c70b-5474-aaac-5ff6eb8ec9b8', 'description' => 'Lamport timestamp', 'correct_answer' => false],
                    ['id' => '09ac1f74-244b-598f-8720-67ec892e1aff', 'description' => 'Vector clock', 'correct_answer' => false],
                    ['id' => 'e9bbae5d-db7e-59ca-a1d6-44a424142294', 'description' => 'Physical clock', 'correct_answer' => true],
                    ['id' => 'c8118ad6-eb47-514c-99e6-67759515dff6', 'description' => 'Logical clock', 'correct_answer' => false]
                ]],
        ['id' => '30cb95e0-3bec-5ff3-b0df-507a96483f30', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which logical clock uses a vector of counters to track causal relationships?', 'difficulty' => 4, 'weight' => 759, 'alternatives' => [
                    ['id' => 'dff77b76-cd34-50b8-8f36-e162ad923609', 'description' => 'TrueTime', 'correct_answer' => false],
                    ['id' => 'ddbe0b6f-8e63-5ee9-ad5f-18b8b736301f', 'description' => 'Logical clock', 'correct_answer' => false],
                    ['id' => 'bcd1e879-79da-598f-bb92-b3dac6d3192f', 'description' => 'Version vector', 'correct_answer' => false],
                    ['id' => 'c9169214-5c5f-53ca-b43a-8084132ada82', 'description' => 'Interval tree clock', 'correct_answer' => false],
                    ['id' => '1e56c64e-72ad-532e-9020-1772a06447a8', 'description' => 'Vector clock', 'correct_answer' => true]
                ]],
        ['id' => '75c843c4-6958-5182-be4e-3c246b716d7e', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which causal metadata structure combines a version vector with a single event dot?', 'difficulty' => 4, 'weight' => 761, 'alternatives' => [
                    ['id' => 'a3d7815b-b452-5a85-a617-a82b84c9b5ba', 'description' => 'Hybrid logical clock', 'correct_answer' => false],
                    ['id' => '0eec6f00-cc2f-584e-89ea-3fa9923404fa', 'description' => 'Logical clock', 'correct_answer' => false],
                    ['id' => 'cd4e9954-01d3-59e2-bda6-6d4b8a8b8672', 'description' => 'TrueTime', 'correct_answer' => false],
                    ['id' => 'b7c839f7-26d9-5d0d-83ee-8ae08c95a8e7', 'description' => 'Interval tree clock', 'correct_answer' => false],
                    ['id' => 'b9546140-ee72-54e7-b249-51703f8e2f0f', 'description' => 'Dotted version vector', 'correct_answer' => true]
                ]],
        ['id' => 'bfbc3876-f51b-5d1c-acae-c9601ab970d7', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which time API exposes bounded uncertainty intervals and is used by Google Spanner?', 'difficulty' => 4, 'weight' => 623, 'alternatives' => [
                    ['id' => '9a53bd2e-37bd-5177-9fee-36c1dae61272', 'description' => 'Interval tree clock', 'correct_answer' => false],
                    ['id' => '5baa4dba-ef27-568d-bf4e-e869642d3242', 'description' => 'Dotted version vector', 'correct_answer' => false],
                    ['id' => '0c9ed4c8-8c1c-5b69-9139-f447a4725114', 'description' => 'TrueTime', 'correct_answer' => true],
                    ['id' => '42a8f176-4c7c-5890-9dff-097bcf321eb7', 'description' => 'Spanner timestamp', 'correct_answer' => false],
                    ['id' => '83bf6ee3-2ae4-5ae1-9bcc-f999f4000f95', 'description' => 'Hybrid logical clock', 'correct_answer' => false]
                ]],
        ['id' => '4c409a7d-1be9-538f-beb5-e64c4f7b7804', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which metadata structure tracks causality among replicas using per-replica counters?', 'difficulty' => 4, 'weight' => 684, 'alternatives' => [
                    ['id' => '0430d774-41f1-5571-9ffa-0b3107760d33', 'description' => 'Interval tree clock', 'correct_answer' => false],
                    ['id' => '03614e7e-ee9a-59d5-a21a-582b3e08f1ad', 'description' => 'Vector clock', 'correct_answer' => false],
                    ['id' => 'edaa83b9-ba3f-574b-a399-619b6666ca3f', 'description' => 'Hybrid logical clock', 'correct_answer' => false],
                    ['id' => '0f593cda-201d-5ae2-a425-18c67f636622', 'description' => 'Version vector', 'correct_answer' => true],
                    ['id' => 'fe6ff55b-bbf6-5d31-ae9c-83a4c1661fec', 'description' => 'Lamport timestamp', 'correct_answer' => false]
                ]],
        ['id' => '0ae1e103-ec9f-5673-928a-01e3f9d33e48', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which globally ordered timestamp mechanism uses TrueTime to support external consistency?', 'difficulty' => 4, 'weight' => 697, 'alternatives' => [
                    ['id' => '884f75a0-cc14-5975-b26c-b20307d8a39d', 'description' => 'Dotted version vector', 'correct_answer' => false],
                    ['id' => 'd459c8a2-7fe6-53d4-b5b6-fdc8f35057a2', 'description' => 'Version vector', 'correct_answer' => false],
                    ['id' => '0dab655f-f424-56c8-90df-6135888c6e6e', 'description' => 'Physical clock', 'correct_answer' => false],
                    ['id' => '80735ce5-d1c4-5cf8-8be2-6d1526a4293a', 'description' => 'Logical clock', 'correct_answer' => false],
                    ['id' => '5f1850bd-794d-559a-b3cd-8198dfb16966', 'description' => 'Spanner timestamp', 'correct_answer' => true]
                ]],
        ['id' => '3385240c-9c0f-5e48-80d4-65ed6a61fb26', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which probabilistic layered linked structure supports expected logarithmic search?', 'difficulty' => 4, 'weight' => 697, 'alternatives' => [
                    ['id' => '8b484c4c-9efb-5af9-b774-f19b97324bbd', 'description' => 'HAMT', 'correct_answer' => false],
                    ['id' => '967e0898-6b6f-5254-987e-68d89f680910', 'description' => 'Merkle DAG', 'correct_answer' => false],
                    ['id' => 'dbfa408e-ab2c-5431-8395-a1b0742adc44', 'description' => 'Radix tree', 'correct_answer' => false],
                    ['id' => '72eac3cc-ba54-53ef-8cbb-536c5e80a879', 'description' => 'Merkle tree', 'correct_answer' => false],
                    ['id' => '1c859c0f-ede7-5825-9223-92b716e6ff2c', 'description' => 'Skip list', 'correct_answer' => true]
                ]],
        ['id' => '72e684ef-60ed-5125-a0ee-24f922709955', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which data structure supports verifiable membership and non-membership proofs?', 'difficulty' => 4, 'weight' => 604, 'alternatives' => [
                    ['id' => '71e1b8b1-35f0-5204-bc96-4924908639d3', 'description' => 'Radix tree', 'correct_answer' => false],
                    ['id' => '76e00f31-e5f1-5b0a-b242-659c8546d804', 'description' => 'Authenticated dictionary', 'correct_answer' => true],
                    ['id' => 'a439e2be-0c7b-52c7-89de-f0b313303d5b', 'description' => 'Sparse Merkle tree', 'correct_answer' => false],
                    ['id' => '5ad7a63d-9b3e-5bdf-a57b-9e9b13564782', 'description' => 'Merkle DAG', 'correct_answer' => false],
                    ['id' => 'ada26b9c-e1cd-500a-b062-e58bba9c3221', 'description' => 'Verkle tree', 'correct_answer' => false]
                ]],
        ['id' => 'be796b2f-872b-5931-a2ce-b6c495f50bc4', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which randomized search tree combines binary-search ordering with heap priorities?', 'difficulty' => 4, 'weight' => 673, 'alternatives' => [
                    ['id' => '3731f7d2-766a-5573-a8ea-9cf788a631cf', 'description' => 'Skip list', 'correct_answer' => false],
                    ['id' => '7928373b-b97a-514d-8623-8faf3bbdd00b', 'description' => 'Verkle tree', 'correct_answer' => false],
                    ['id' => 'ec56b102-e977-5eb1-8381-1631624e0621', 'description' => 'Merkle DAG', 'correct_answer' => false],
                    ['id' => '90d35b65-1183-5bfe-95bb-5a71c15b54b7', 'description' => 'Treap', 'correct_answer' => true],
                    ['id' => 'e58f4a19-f806-57ec-be9d-46d844480484', 'description' => 'Authenticated dictionary', 'correct_answer' => false]
                ]],
        ['id' => '54173acc-4b34-5f30-b373-5e41f5d1edba', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which immutable map structure uses a hash array mapped trie?', 'difficulty' => 4, 'weight' => 629, 'alternatives' => [
                    ['id' => 'acbabf42-c9d1-5da8-a859-549603fa4ca0', 'description' => 'Merkle tree', 'correct_answer' => false],
                    ['id' => 'e2b9b3b9-9e40-598e-967f-4b1365bb403a', 'description' => 'Treap', 'correct_answer' => false],
                    ['id' => '8dadc7f8-b878-56c4-86c6-865802cf1a1e', 'description' => 'Authenticated dictionary', 'correct_answer' => false],
                    ['id' => '42d816a7-2261-527c-b3a5-a05e7bd49c49', 'description' => 'HAMT', 'correct_answer' => true],
                    ['id' => '5bacc8c0-0cc9-529e-ae63-7b558fd8a445', 'description' => 'Radix tree', 'correct_answer' => false]
                ]],
        ['id' => '60aab955-e27c-5bdd-b153-9b8ebb2ff820', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which hash-based tree allows efficient verification that data belongs to a larger dataset?', 'difficulty' => 4, 'weight' => 752, 'alternatives' => [
                    ['id' => 'dea800f5-8786-54d1-b1b5-b0a9ef87fff6', 'description' => 'Merkle DAG', 'correct_answer' => false],
                    ['id' => '0c5ca362-6735-5456-a021-3d25a54ddf2c', 'description' => 'Sparse Merkle tree', 'correct_answer' => false],
                    ['id' => '91189cc8-97bb-558f-847b-a7bf95593599', 'description' => 'Merkle tree', 'correct_answer' => true],
                    ['id' => '05289795-a342-57b2-9960-4a18665064ac', 'description' => 'Authenticated dictionary', 'correct_answer' => false],
                    ['id' => 'faf46362-0893-5741-b883-88df6b1077ce', 'description' => 'Patricia trie', 'correct_answer' => false]
                ]],
        ['id' => '84a533fe-4e66-5010-9061-36797c7fb6b1', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which compressed trie is used for prefix lookup in Ethereum\'s state representation?', 'difficulty' => 4, 'weight' => 628, 'alternatives' => [
                    ['id' => '63cab01a-87b6-5e71-8c73-6cf371387534', 'description' => 'Verkle tree', 'correct_answer' => false],
                    ['id' => '3579bf57-334a-5a85-8f71-6059612812f8', 'description' => 'Skip list', 'correct_answer' => false],
                    ['id' => '7a6e31a4-23d5-5cd0-b5df-eb02b6b44e6a', 'description' => 'Merkle tree', 'correct_answer' => false],
                    ['id' => '95b15a5f-36ae-5dd7-955f-924d7b15e54a', 'description' => 'Authenticated dictionary', 'correct_answer' => false],
                    ['id' => 'ba1ee686-7229-57b2-870c-5d267cd08518', 'description' => 'Patricia trie', 'correct_answer' => true]
                ]],
        ['id' => '7db36d64-a126-5987-bccc-cb3e6bafa43e', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which directed acyclic graph uses cryptographic hashes as node identifiers?', 'difficulty' => 4, 'weight' => 730, 'alternatives' => [
                    ['id' => '58929693-7201-5b34-b08b-906649732248', 'description' => 'Verkle tree', 'correct_answer' => false],
                    ['id' => '99508228-0918-5078-8bfd-203a485b7000', 'description' => 'Merkle DAG', 'correct_answer' => true],
                    ['id' => '42f2e0b3-48cc-5a60-855e-bc988336788d', 'description' => 'HAMT', 'correct_answer' => false],
                    ['id' => 'd562c639-b250-5064-b411-4e8b4cec93be', 'description' => 'Skip list', 'correct_answer' => false],
                    ['id' => '1ac6ac58-65fe-5aa0-b792-fd51ad260e1f', 'description' => 'Authenticated dictionary', 'correct_answer' => false]
                ]],
        ['id' => '94c2f0f6-9e4c-5354-b8f6-4ceb24f02d22', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which commitment tree uses vector commitments to reduce proof sizes?', 'difficulty' => 4, 'weight' => 795, 'alternatives' => [
                    ['id' => '24423f18-63f0-5e2a-8d18-bdc371bdeac8', 'description' => 'Sparse Merkle tree', 'correct_answer' => false],
                    ['id' => '7eb606a0-7f73-540a-976b-f0245f760eea', 'description' => 'HAMT', 'correct_answer' => false],
                    ['id' => 'c6691c42-c3aa-5bcc-87e9-3b8ad1929dac', 'description' => 'Skip list', 'correct_answer' => false],
                    ['id' => '3add7eb5-d24d-563c-a205-4bc3918f0f9d', 'description' => 'Verkle tree', 'correct_answer' => true],
                    ['id' => '565cdba5-8656-5217-9396-28119e138bb2', 'description' => 'Radix tree', 'correct_answer' => false]
                ]],
        ['id' => '28015f03-6b23-5214-990e-489a9e9ba943', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which synchronization problem concerns shared data accessed by readers and exclusive writers?', 'difficulty' => 4, 'weight' => 725, 'alternatives' => [
                    ['id' => '67ddb47f-595a-5172-b689-ec2315107ac1', 'description' => 'Ricart-Agrawala algorithm', 'correct_answer' => false],
                    ['id' => '7410d0aa-3869-57be-b1c1-6db25fe38b2e', 'description' => 'Peterson\'s algorithm', 'correct_answer' => false],
                    ['id' => 'b6dde6a3-7296-5455-9c43-996aab031f6f', 'description' => 'Dekker\'s algorithm', 'correct_answer' => false],
                    ['id' => 'a5a70f86-17d3-5313-a607-c16eebcda011', 'description' => 'Sleeping barber problem', 'correct_answer' => false],
                    ['id' => '53ac34e4-b32f-575a-afd9-6300e6ad522a', 'description' => 'Readers-writers problem', 'correct_answer' => true]
                ]],
        ['id' => 'd03f3be7-2fa8-5875-b86b-198180622069', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which early software-only mutual-exclusion algorithm coordinates two processes with flags and turn?', 'difficulty' => 4, 'weight' => 747, 'alternatives' => [
                    ['id' => 'cb81a1ef-f751-5d67-bad3-cdcab101ea64', 'description' => 'Lamport bakery algorithm', 'correct_answer' => false],
                    ['id' => '536c3be0-daa4-5f2b-b456-f1e4ee211a7d', 'description' => 'Readers-writers problem', 'correct_answer' => false],
                    ['id' => 'f465a02b-1321-5390-8408-e46c6d8b68b3', 'description' => 'Dining philosophers problem', 'correct_answer' => false],
                    ['id' => 'f9c95bf2-2900-57e9-bf3d-95327652b696', 'description' => 'Dekker\'s algorithm', 'correct_answer' => true],
                    ['id' => 'f2e272a0-061a-5300-995e-06ea2b3d1eb3', 'description' => 'Test-and-set lock', 'correct_answer' => false]
                ]],
        ['id' => '70d98073-7d04-57d1-bb0f-23a2d4b33f83', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which distributed mutual-exclusion algorithm uses timestamped request and reply messages?', 'difficulty' => 4, 'weight' => 664, 'alternatives' => [
                    ['id' => '77a144bb-3885-5e2f-bfbe-ad2c245f876b', 'description' => 'Ricart-Agrawala algorithm', 'correct_answer' => true],
                    ['id' => '406091de-6757-51b9-b000-9fa61021056a', 'description' => 'Lamport bakery algorithm', 'correct_answer' => false],
                    ['id' => '1229c940-bde3-5260-974f-855588c4fe1c', 'description' => 'Readers-writers problem', 'correct_answer' => false],
                    ['id' => 'bdfc9a21-13b8-5d26-82ad-184e12110924', 'description' => 'Dining philosophers problem', 'correct_answer' => false],
                    ['id' => '63b087fa-890f-5568-baf7-5ef5cc6e2dbd', 'description' => 'Peterson\'s algorithm', 'correct_answer' => false]
                ]],
        ['id' => '7b41e974-012e-53ed-a418-ad3e93f8d87b', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which mutual-exclusion algorithm assigns numbered tickets to processes?', 'difficulty' => 4, 'weight' => 714, 'alternatives' => [
                    ['id' => '769675c5-643b-5699-b8b9-07777d19945c', 'description' => 'Chandy-Lamport algorithm', 'correct_answer' => false],
                    ['id' => '875e65b6-8a41-54c6-a60d-522c31fad59a', 'description' => 'Lamport bakery algorithm', 'correct_answer' => true],
                    ['id' => '8ba6adb5-8c7c-5a96-8a3a-93ef2cfc1ee6', 'description' => 'Dining philosophers problem', 'correct_answer' => false],
                    ['id' => 'b7ac6df1-6d41-5f53-ae5a-5c8a324b5c57', 'description' => 'Readers-writers problem', 'correct_answer' => false],
                    ['id' => '93bf8177-57b2-52fa-a3e3-608b51d28fbc', 'description' => 'Banker\'s algorithm', 'correct_answer' => false]
                ]],
        ['id' => '0963311c-2322-5689-931f-53dcb5351155', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which two-process mutual-exclusion algorithm uses flags and a turn variable?', 'difficulty' => 4, 'weight' => 685, 'alternatives' => [
                    ['id' => '35bbf386-e4f2-59f6-987f-c935c8aca09c', 'description' => 'Ricart-Agrawala algorithm', 'correct_answer' => false],
                    ['id' => '7d07d014-9ef1-5700-aaa0-397973a24afe', 'description' => 'Chandy-Lamport algorithm', 'correct_answer' => false],
                    ['id' => '6d37c9a8-1e28-549f-bb8a-28abecc092ea', 'description' => 'Banker\'s algorithm', 'correct_answer' => false],
                    ['id' => '5b2241bd-fc8d-52a6-8059-60d0ee415853', 'description' => 'Lamport bakery algorithm', 'correct_answer' => false],
                    ['id' => '3f407529-e5c6-594b-b856-5e9b874040b7', 'description' => 'Peterson\'s algorithm', 'correct_answer' => true]
                ]],
        ['id' => '954dbf41-89de-50b9-b980-110e74ee5d56', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which distributed algorithm records a consistent global snapshot without stopping computation?', 'difficulty' => 4, 'weight' => 773, 'alternatives' => [
                    ['id' => 'e4bca02a-eecc-5558-97d7-f9f1d3d0632a', 'description' => 'Chandy-Lamport algorithm', 'correct_answer' => true],
                    ['id' => 'd9808b7c-ce96-5e4e-9da5-4d88bae98fbf', 'description' => 'Ricart-Agrawala algorithm', 'correct_answer' => false],
                    ['id' => '145364db-b33b-56f6-a5f6-a1e84bb9ac51', 'description' => 'Banker\'s algorithm', 'correct_answer' => false],
                    ['id' => '62a57562-314d-5c82-b3e7-d66974964bfc', 'description' => 'Readers-writers problem', 'correct_answer' => false],
                    ['id' => '096e4748-9abe-555e-a0f9-6f7d48de9dba', 'description' => 'Dekker\'s algorithm', 'correct_answer' => false]
                ]],
        ['id' => 'dd28d65b-7e83-5490-8f36-b21ada34b129', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which concurrency problem models a barber shop with limited waiting-room capacity?', 'difficulty' => 4, 'weight' => 646, 'alternatives' => [
                    ['id' => '0cb8f962-bb89-55d8-b468-9a9e8b3dbbf9', 'description' => 'Ricart-Agrawala algorithm', 'correct_answer' => false],
                    ['id' => 'df5eae41-6488-5917-835f-4813c325bfa5', 'description' => 'Sleeping barber problem', 'correct_answer' => true],
                    ['id' => 'e266869e-156e-5583-bf8f-29c39fb11a86', 'description' => 'Test-and-set lock', 'correct_answer' => false],
                    ['id' => 'e37265e5-413a-5516-aaea-d7bc005ec1a9', 'description' => 'Peterson\'s algorithm', 'correct_answer' => false],
                    ['id' => 'd8959380-133a-536f-b79e-ae5684045ef2', 'description' => 'Chandy-Lamport algorithm', 'correct_answer' => false]
                ]],
        ['id' => '8c08f2e3-69e9-50e1-891d-f5b1f33b9cf9', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which resource-allocation algorithm avoids deadlock by checking for a safe state?', 'difficulty' => 4, 'weight' => 636, 'alternatives' => [
                    ['id' => 'acdf2c1d-effc-5c02-b056-39eb97673549', 'description' => 'Readers-writers problem', 'correct_answer' => false],
                    ['id' => 'd58370b6-f9bb-5aa7-a7e6-d89d6c1adc23', 'description' => 'Banker\'s algorithm', 'correct_answer' => true],
                    ['id' => 'ecd578aa-2b42-5455-8924-efc6476f3048', 'description' => 'Ricart-Agrawala algorithm', 'correct_answer' => false],
                    ['id' => 'e6b2bd9f-5bf9-5257-b86a-e2e58503f195', 'description' => 'Chandy-Lamport algorithm', 'correct_answer' => false],
                    ['id' => '461eb7f2-997f-5ea9-bb29-d36c2a0e1733', 'description' => 'Test-and-set lock', 'correct_answer' => false]
                ]],
        ['id' => '8536a8d7-ed20-594f-8e3f-c7a8ee6df301', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which Lisp-family language is used for language-oriented programming and education?', 'difficulty' => 4, 'weight' => 735, 'alternatives' => [
                    ['id' => 'febf2902-018b-5fcb-8e84-c1152e93e35c', 'description' => 'Clojure', 'correct_answer' => false],
                    ['id' => '95847916-25d1-5027-b7ea-abd83ac6ad01', 'description' => 'F#', 'correct_answer' => false],
                    ['id' => '21ba9069-8dea-51db-a5f9-6d82697a0447', 'description' => 'Standard ML', 'correct_answer' => false],
                    ['id' => '4184ff88-36dd-546e-803e-2cedd5da599a', 'description' => 'Racket', 'correct_answer' => true],
                    ['id' => 'cfb5e16f-ce08-5469-aa7a-e39095059e24', 'description' => 'Scheme', 'correct_answer' => false]
                ]],
        ['id' => '21546b9b-7a2d-5b1c-98f1-7a86fa9660be', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which functional language runs on the BEAM virtual machine and was created by José Valim?', 'difficulty' => 4, 'weight' => 744, 'alternatives' => [
                    ['id' => '042327c7-b03e-5d02-8dba-bebd9fdd8643', 'description' => 'Racket', 'correct_answer' => false],
                    ['id' => '2952a33f-a667-54f0-b281-282397e37637', 'description' => 'Erlang', 'correct_answer' => false],
                    ['id' => '0641ba2d-f4a1-5ebe-9b09-8e13de54f1d4', 'description' => 'Clojure', 'correct_answer' => false],
                    ['id' => '4264686e-19c2-5e12-b836-e66230381646', 'description' => 'Elixir', 'correct_answer' => true],
                    ['id' => '90a54451-b65c-580b-bc8b-a40bad06d58e', 'description' => 'Scheme', 'correct_answer' => false]
                ]],
        ['id' => '1fff6357-8a8a-5b46-9e5e-62253d3e69a1', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which minimalist Lisp dialect is known for lexical scoping and proper tail recursion?', 'difficulty' => 4, 'weight' => 800, 'alternatives' => [
                    ['id' => 'c104470f-e697-5790-8fe7-dab4f2ff7b87', 'description' => 'Standard ML', 'correct_answer' => false],
                    ['id' => '8a08bef2-fd13-587e-b6f9-961794103a24', 'description' => 'Clojure', 'correct_answer' => false],
                    ['id' => '774db71e-5d48-5681-9645-1c9180d1371c', 'description' => 'Erlang', 'correct_answer' => false],
                    ['id' => '68e16eff-4dc4-5b00-8c0b-0f7b80cd33f1', 'description' => 'Scheme', 'correct_answer' => true],
                    ['id' => 'b01a9b40-91af-54da-ba9d-66c4f3017c52', 'description' => 'Haskell', 'correct_answer' => false]
                ]],
        ['id' => 'f1b8ab70-d4a7-5f8f-be08-b822ca6e63e6', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which Lisp dialect runs on the JVM and emphasizes immutable data structures?', 'difficulty' => 4, 'weight' => 647, 'alternatives' => [
                    ['id' => 'ee110cea-fa1d-5725-aeb5-bede59bfbd0d', 'description' => 'Scheme', 'correct_answer' => false],
                    ['id' => '6cadd5ed-02b9-5dcf-98e6-60ec6a5fe092', 'description' => 'OCaml', 'correct_answer' => false],
                    ['id' => '06d9ce94-47b6-5c7a-b6b3-d01619b8d990', 'description' => 'Clojure', 'correct_answer' => true],
                    ['id' => '22f103a8-2390-5be8-bc64-78271786e6fa', 'description' => 'F#', 'correct_answer' => false],
                    ['id' => 'cdfa7bef-0931-5566-86d5-7c34784a3de4', 'description' => 'Erlang', 'correct_answer' => false]
                ]],
        ['id' => 'd1e86199-69d2-5de8-b0f5-c7e0fadf0c4a', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which statically typed functional language belongs to the ML family?', 'difficulty' => 4, 'weight' => 646, 'alternatives' => [
                    ['id' => 'e1f05ea7-01b2-5c9a-bdad-45363e4278aa', 'description' => 'Haskell', 'correct_answer' => false],
                    ['id' => '843b9141-d8a7-59a2-ac9d-761834a6cd5c', 'description' => 'F#', 'correct_answer' => false],
                    ['id' => 'ac7f8096-0683-54ed-9e16-e491db180d74', 'description' => 'Racket', 'correct_answer' => false],
                    ['id' => 'b368c22e-76d0-5c1a-a93d-d91450c7ba93', 'description' => 'OCaml', 'correct_answer' => true],
                    ['id' => '40675dd3-49cb-583e-ac91-f24f357f5891', 'description' => 'Clojure', 'correct_answer' => false]
                ]],
        ['id' => 'f3857561-7998-5b6b-9a0f-d9149591ac35', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which purely functional language is named after logician Haskell Curry?', 'difficulty' => 4, 'weight' => 663, 'alternatives' => [
                    ['id' => 'f02fe6c4-f02c-5676-aa50-712ab20f8e54', 'description' => 'F#', 'correct_answer' => false],
                    ['id' => 'ffc41351-7da3-51fc-a76e-709743c52be5', 'description' => 'Standard ML', 'correct_answer' => false],
                    ['id' => '47e9b8ac-f902-544c-b6cf-78039db2e303', 'description' => 'Elixir', 'correct_answer' => false],
                    ['id' => '94504d38-37ac-5aa2-84ff-1cc03ab78a53', 'description' => 'Scheme', 'correct_answer' => false],
                    ['id' => '87bbbba3-6fc2-564d-a0f3-6b06020dbb9b', 'description' => 'Haskell', 'correct_answer' => true]
                ]],
        ['id' => 'b00426de-d849-59ef-b796-88fdf9ee53ae', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which .NET language is influenced by the ML family?', 'difficulty' => 4, 'weight' => 761, 'alternatives' => [
                    ['id' => 'e5e37402-ed0c-5320-9bf2-ab755756de23', 'description' => 'OCaml', 'correct_answer' => false],
                    ['id' => 'fae7f5db-9325-5322-8459-bf601e320069', 'description' => 'Scheme', 'correct_answer' => false],
                    ['id' => 'd94e6f85-a2ac-5784-b0c7-5e14a64034ba', 'description' => 'Racket', 'correct_answer' => false],
                    ['id' => '54839ca0-cf77-5871-b9f8-7f399ceb6d42', 'description' => 'Elixir', 'correct_answer' => false],
                    ['id' => '4a9aed9e-014b-50c3-8015-bafbed7ab858', 'description' => 'F#', 'correct_answer' => true]
                ]],
        ['id' => 'ec273733-cd86-5159-980d-5c0ed9d9ab23', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which functional language uses lightweight processes and message passing and originated at Ericsson?', 'difficulty' => 4, 'weight' => 747, 'alternatives' => [
                    ['id' => '075897e1-3365-5b39-891f-e80f50279071', 'description' => 'Scala', 'correct_answer' => false],
                    ['id' => 'f3d1ad20-1f27-53d6-a783-28cb1c57dd7a', 'description' => 'F#', 'correct_answer' => false],
                    ['id' => '3f33b326-b658-57b0-ba22-e17599fa8b09', 'description' => 'Standard ML', 'correct_answer' => false],
                    ['id' => '83b6e057-e201-5aed-8e0d-9119b381e9d7', 'description' => 'Haskell', 'correct_answer' => false],
                    ['id' => 'a4ef5750-70c1-54ca-bc5e-748be3272dcc', 'description' => 'Erlang', 'correct_answer' => true]
                ]],
        ['id' => '07372301-3976-5726-b106-0df37ccbd2bf', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which TLS version removed older cipher-suite negotiation options and reduced handshake round trips?', 'difficulty' => 4, 'weight' => 676, 'alternatives' => [
                    ['id' => '813049c0-3281-533d-86e9-044ba1297384', 'description' => 'SRTP', 'correct_answer' => false],
                    ['id' => '1504d9fd-a78a-581a-a516-d7e675591c33', 'description' => 'DANE', 'correct_answer' => false],
                    ['id' => '3dcee47b-a510-5c89-a0b4-0ecc5d9a5921', 'description' => 'OCSP', 'correct_answer' => false],
                    ['id' => '9b422eb7-cb7b-5e73-9d49-5f904f7ce2e8', 'description' => 'IPsec', 'correct_answer' => false],
                    ['id' => 'c1c3e1be-56fa-536b-9622-608b899031ba', 'description' => 'TLS 1.3', 'correct_answer' => true]
                ]],
        ['id' => '5af907d0-9303-5bc7-b819-2e150d2fd4a8', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which protocol provides encryption and authentication for real-time audio and video?', 'difficulty' => 4, 'weight' => 631, 'alternatives' => [
                    ['id' => '34e2b0ef-597c-5f7a-a6d2-c6f3fb5975e6', 'description' => 'WireGuard', 'correct_answer' => false],
                    ['id' => 'c24b21d1-5519-5a3f-b7e8-34f14b79c9be', 'description' => 'IPsec', 'correct_answer' => false],
                    ['id' => '275a4d5a-1416-5e32-8ba8-556a228617a9', 'description' => 'SRTP', 'correct_answer' => true],
                    ['id' => 'da7706b5-fc5e-5e2b-8866-9449dd99668d', 'description' => 'TLS 1.3', 'correct_answer' => false],
                    ['id' => '529de838-6cf1-5b0b-b443-ad275fd2b3df', 'description' => 'SSH', 'correct_answer' => false]
                ]],
        ['id' => 'b6f5309f-480b-510f-890a-be12ef731491', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which transport protocol runs over UDP and underpins HTTP/3?', 'difficulty' => 4, 'weight' => 770, 'alternatives' => [
                    ['id' => 'b6a03580-b250-51b2-ae19-3321f186ca21', 'description' => 'OCSP', 'correct_answer' => false],
                    ['id' => '299b41c5-d0ff-549b-a718-64278db51b6c', 'description' => 'TLS 1.3', 'correct_answer' => false],
                    ['id' => '0a56067f-c250-54a8-a2df-1fb9667153bc', 'description' => 'SRTP', 'correct_answer' => false],
                    ['id' => '0e7020f4-e08c-5fd8-ace3-5aeed4c7fce5', 'description' => 'WireGuard', 'correct_answer' => false],
                    ['id' => '99630210-5442-5226-8089-a9a7d025fcf9', 'description' => 'QUIC', 'correct_answer' => true]
                ]],
        ['id' => '08a09af0-f293-5933-a930-60074e02276c', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which mechanism uses DNSSEC to associate certificates with domain names?', 'difficulty' => 4, 'weight' => 630, 'alternatives' => [
                    ['id' => '80927e37-9a40-5772-9db4-3e0dfc5b049b', 'description' => 'DANE', 'correct_answer' => true],
                    ['id' => '441c4a71-9729-5e6c-ba14-ade5e157d97b', 'description' => 'IPsec', 'correct_answer' => false],
                    ['id' => 'c650c0ec-36d9-56b6-8173-abdadedbc785', 'description' => 'SRTP', 'correct_answer' => false],
                    ['id' => 'baf538ef-f2d0-5eb4-a80c-36b1a03c35d4', 'description' => 'DTLS', 'correct_answer' => false],
                    ['id' => 'cd3d9938-bfa7-5f72-82db-b0f6828f41cb', 'description' => 'QUIC', 'correct_answer' => false]
                ]],
        ['id' => 'c12c0c61-d335-5be7-9976-4eb003077f3f', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which protocol lets clients check the revocation status of digital certificates?', 'difficulty' => 4, 'weight' => 665, 'alternatives' => [
                    ['id' => '11069dfa-0f5f-5117-9d3a-547917bd0060', 'description' => 'OCSP', 'correct_answer' => true],
                    ['id' => '8dce4b1d-e40d-5594-b63f-2ef2972abf7e', 'description' => 'QUIC', 'correct_answer' => false],
                    ['id' => '1c8f2547-db92-52eb-a9a6-3000ffb01ec9', 'description' => 'DANE', 'correct_answer' => false],
                    ['id' => '5c00f44c-e935-5794-a86e-95c683e37c9f', 'description' => 'SSH', 'correct_answer' => false],
                    ['id' => 'cd97b91a-2a8b-5c1a-b8be-5a564a53ce9b', 'description' => 'SRTP', 'correct_answer' => false]
                ]],
        ['id' => 'f36994bf-a263-50c3-ad92-825e81aafb1c', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which modern VPN protocol has a compact codebase and a small set of cryptographic primitives?', 'difficulty' => 4, 'weight' => 729, 'alternatives' => [
                    ['id' => '03038a68-d9cd-5d18-89a6-2c76f72ad044', 'description' => 'TLS 1.3', 'correct_answer' => false],
                    ['id' => '4da06cdf-7558-5bdb-8e7c-eeebf6a5cf0a', 'description' => 'QUIC', 'correct_answer' => false],
                    ['id' => '75cec1ab-0f79-5fcf-b769-f8e6cbbe80b2', 'description' => 'SSH', 'correct_answer' => false],
                    ['id' => '7c57f1a4-2e5b-5aa5-bd89-bf8b2717d5a5', 'description' => 'IPsec', 'correct_answer' => false],
                    ['id' => '2dcd7b34-9ce3-5f68-8839-08d5bc6637a8', 'description' => 'WireGuard', 'correct_answer' => true]
                ]],
        ['id' => '06a83b1c-7c81-5ab5-9b1a-807820e1b6d1', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which protocol provides TLS-like security for datagram-based applications?', 'difficulty' => 4, 'weight' => 794, 'alternatives' => [
                    ['id' => 'f4d1d88c-70eb-5e46-80f5-f3e83ec5ff1b', 'description' => 'OCSP', 'correct_answer' => false],
                    ['id' => 'dad0b258-6fda-5069-8eb2-e7d7ef7b6593', 'description' => 'DTLS', 'correct_answer' => true],
                    ['id' => 'd7b466e7-b2e1-5857-a9e4-a19f153dcc00', 'description' => 'SSH', 'correct_answer' => false],
                    ['id' => 'd61b7aa6-c096-50da-ae23-d870c81807e4', 'description' => 'DNSSEC', 'correct_answer' => false],
                    ['id' => '742079b8-037c-5154-8c07-6c4d70ee8be4', 'description' => 'WireGuard', 'correct_answer' => false]
                ]],
        ['id' => '6a424004-0284-57db-a0ca-4f5ab20e33ae', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which DNS extension uses digital signatures to authenticate DNS data?', 'difficulty' => 4, 'weight' => 764, 'alternatives' => [
                    ['id' => '92cfba38-4cfe-52ed-a3e2-5158d3fa59cc', 'description' => 'DANE', 'correct_answer' => false],
                    ['id' => 'b2a1cad4-fa61-5108-8bab-5affb7b0391c', 'description' => 'DNSSEC', 'correct_answer' => true],
                    ['id' => 'ae737a1f-266e-5020-9536-97d70cf32704', 'description' => 'SRTP', 'correct_answer' => false],
                    ['id' => 'bc1af26d-7087-52a7-b40b-2cb58da3e2e8', 'description' => 'SSH', 'correct_answer' => false],
                    ['id' => 'e2932e7c-2a8a-5e72-9860-05eb6bb2ed9f', 'description' => 'IPsec', 'correct_answer' => false]
                ]],
        ['id' => '7338e234-7dfb-56cd-973c-5d592a918596', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which consensus algorithm is associated with Lamport\'s paper \'The Part-Time Parliament\'?', 'difficulty' => 5, 'weight' => 932, 'alternatives' => [
                    ['id' => '2ed5509f-95ef-56fe-ba6e-b180d21fca63', 'description' => 'Paxos', 'correct_answer' => true],
                    ['id' => 'ef2d4f98-b686-5067-9a52-27eec94420d2', 'description' => 'Mencius', 'correct_answer' => false],
                    ['id' => 'c08aaae5-1917-5a3c-9820-2f726f596332', 'description' => 'Cheap Paxos', 'correct_answer' => false],
                    ['id' => 'a9efd158-217c-5302-bc31-f4cd57d51200', 'description' => 'Vertical Paxos', 'correct_answer' => false],
                    ['id' => '044f455a-1cb8-5205-89fe-f7bb480aebde', 'description' => 'Fast Paxos', 'correct_answer' => false]
                ]],
        ['id' => 'f93ba07c-0218-5cad-a898-6a2518c52fdd', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which geo-replicated consensus protocol uses generalized dependency tracking?', 'difficulty' => 5, 'weight' => 892, 'alternatives' => [
                    ['id' => '5f600a6d-0981-5056-a007-423d02a9b0e9', 'description' => 'Cheap Paxos', 'correct_answer' => false],
                    ['id' => '417a1807-6442-5810-adea-ef8d166f2d1d', 'description' => 'Vertical Paxos', 'correct_answer' => false],
                    ['id' => 'b67a62cd-9d18-5520-9656-f87451b1c79d', 'description' => 'Fast Paxos', 'correct_answer' => false],
                    ['id' => '78fda882-6a75-539d-b845-65929d0e052e', 'description' => 'Atlas', 'correct_answer' => true],
                    ['id' => '0710ca1e-53a1-5670-8327-7a2569c8ff28', 'description' => 'EPaxos', 'correct_answer' => false]
                ]],
        ['id' => '0a605488-6e2d-5fd4-9441-c2623b76698c', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which geo-replicated consensus protocol uses dependency ordering and a leader-based approach?', 'difficulty' => 5, 'weight' => 919, 'alternatives' => [
                    ['id' => '698bd0b7-037f-55fd-b8b4-3a58a9bb756c', 'description' => 'Generalized Paxos', 'correct_answer' => false],
                    ['id' => 'bb771b55-166a-5b0d-9e98-74a0946b15e7', 'description' => 'Cheap Paxos', 'correct_answer' => false],
                    ['id' => '1316a822-41dd-57fd-90e9-2db15a7dc522', 'description' => 'Fast Paxos', 'correct_answer' => false],
                    ['id' => 'cead28a2-14ba-57b4-b853-073c9d28628e', 'description' => 'Vertical Paxos', 'correct_answer' => false],
                    ['id' => '63aab51d-5ab2-5491-abe0-2ba219aee7b6', 'description' => 'Caesar', 'correct_answer' => true]
                ]],
        ['id' => '6e3a1e71-49c9-57a0-9b70-69d1185703a2', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which variant allows compatible commands to be learned without ordering all commands totally?', 'difficulty' => 5, 'weight' => 933, 'alternatives' => [
                    ['id' => '0c79064e-ae07-5500-b3d6-7ebc8e766f20', 'description' => 'Vertical Paxos', 'correct_answer' => false],
                    ['id' => 'feb5ca74-9f25-5668-8c7f-9624ea6e7409', 'description' => 'EPaxos', 'correct_answer' => false],
                    ['id' => 'a3c1edad-56c1-54eb-a290-f8ecb810702c', 'description' => 'Generalized Paxos', 'correct_answer' => true],
                    ['id' => '08c60972-6fe7-551a-8c19-6c337335eec8', 'description' => 'Paxos', 'correct_answer' => false],
                    ['id' => '88df3058-35ca-5599-966e-b216721c5279', 'description' => 'Caesar', 'correct_answer' => false]
                ]],
        ['id' => 'c6fea8ee-5012-5fe6-b2ce-c67e3a26e6d4', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which Paxos variant can reduce message delays when proposals do not conflict?', 'difficulty' => 5, 'weight' => 854, 'alternatives' => [
                    ['id' => 'ad1e2df0-49de-5abd-b2ec-f906e007bede', 'description' => 'Fast Paxos', 'correct_answer' => true],
                    ['id' => 'b8dec95a-7878-5a57-80cb-90a807384d67', 'description' => 'Paxos', 'correct_answer' => false],
                    ['id' => 'd31d7202-ebaa-54c1-b98e-8cdbc45e2dff', 'description' => 'Caesar', 'correct_answer' => false],
                    ['id' => 'c35f4e9b-8b4d-5c3e-a1b3-c60ab0d4ae30', 'description' => 'Flexible Paxos', 'correct_answer' => false],
                    ['id' => '3f103155-f976-58cc-ad27-d9807f989fd1', 'description' => 'EPaxos', 'correct_answer' => false]
                ]],
        ['id' => '68252afb-2f8e-5c8c-b0c1-e33c6e9f383f', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which variant uses fewer active processors in normal operation and auxiliary processors for recovery?', 'difficulty' => 5, 'weight' => 866, 'alternatives' => [
                    ['id' => 'a1ec1001-6be0-5c1d-85a7-c217f11a54ae', 'description' => 'Paxos', 'correct_answer' => false],
                    ['id' => '1a75de3a-a125-5f90-88d3-c0f3e2fb6c2b', 'description' => 'Generalized Paxos', 'correct_answer' => false],
                    ['id' => 'c91a9109-b468-58e2-9096-842926db9891', 'description' => 'Fast Paxos', 'correct_answer' => false],
                    ['id' => '8c5de5fc-b438-5a43-bb2e-b1f2f462c755', 'description' => 'Cheap Paxos', 'correct_answer' => true],
                    ['id' => 'a858479b-82ac-59db-bd3f-27c036ab2bc7', 'description' => 'Vertical Paxos', 'correct_answer' => false]
                ]],
        ['id' => '96c37639-8734-518f-b3a5-d338660d5f46', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which consensus protocol assigns leaders in a rotating sequence?', 'difficulty' => 5, 'weight' => 882, 'alternatives' => [
                    ['id' => '67c0cf0a-92db-5609-a404-706eb5bf2b61', 'description' => 'Mencius', 'correct_answer' => true],
                    ['id' => '50354850-ded1-54d6-972d-0da62b1514e0', 'description' => 'Flexible Paxos', 'correct_answer' => false],
                    ['id' => '3144a937-784e-5818-a2f4-9a33b3fb4f96', 'description' => 'Paxos', 'correct_answer' => false],
                    ['id' => 'fa5aeefd-ec08-5ebd-8e06-09235cfde5d7', 'description' => 'Fast Paxos', 'correct_answer' => false],
                    ['id' => '8ad2b61e-9cd0-5289-a6dc-b05e0716f88c', 'description' => 'EPaxos', 'correct_answer' => false]
                ]],
        ['id' => '912d9f18-78e2-50de-8961-12bdcffed66c', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which leaderless consensus protocol exploits command commutativity?', 'difficulty' => 5, 'weight' => 824, 'alternatives' => [
                    ['id' => 'e771722c-c9a5-570f-b481-93c59baa0a15', 'description' => 'Atlas', 'correct_answer' => false],
                    ['id' => '42e54f54-e691-573e-8cc6-a5f2ebcd8a59', 'description' => 'EPaxos', 'correct_answer' => true],
                    ['id' => '95ff7330-db48-5bce-bff9-c616b61a661f', 'description' => 'Caesar', 'correct_answer' => false],
                    ['id' => 'fdb34f99-8e84-5259-a0f6-dcd158e458cf', 'description' => 'Vertical Paxos', 'correct_answer' => false],
                    ['id' => 'be696d83-9cd1-5c43-959f-2ae8ea53da6d', 'description' => 'Fast Paxos', 'correct_answer' => false]
                ]],
        ['id' => '56fbbce5-04df-5ffb-94b4-6163ab67b286', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which CRDT register resolves concurrent writes using the greatest timestamp?', 'difficulty' => 5, 'weight' => 891, 'alternatives' => [
                    ['id' => '96faa079-6db0-5560-b067-2058f6a7a2fb', 'description' => 'CRDT', 'correct_answer' => false],
                    ['id' => '1ff11a4a-1e8f-5df7-8182-8b97de62b2ad', 'description' => 'Automerge', 'correct_answer' => false],
                    ['id' => 'f94d3b0c-1fb0-5e67-9807-59e949207a7d', 'description' => 'Differential Synchronization', 'correct_answer' => false],
                    ['id' => '5302b3b1-3aa7-5ccd-9dac-85ecb0b6be50', 'description' => 'G-Counter', 'correct_answer' => false],
                    ['id' => '18e48ea8-bc0f-51ac-bb93-0d1ab57520c8', 'description' => 'LWW-Register', 'correct_answer' => true]
                ]],
        ['id' => 'd3bcf533-72cc-5e65-b27a-4e06933647fd', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which observed-remove set CRDT preserves concurrent additions?', 'difficulty' => 5, 'weight' => 952, 'alternatives' => [
                    ['id' => 'c12b8524-9271-5b24-9e24-ef16d7fdab79', 'description' => 'CRDT', 'correct_answer' => false],
                    ['id' => '24d7ad2a-7bf8-59d5-8529-ec24b22548c1', 'description' => 'RGA', 'correct_answer' => false],
                    ['id' => '14179e5e-b507-58c8-9a35-f0e9277f46a4', 'description' => 'G-Counter', 'correct_answer' => false],
                    ['id' => '3bc7abf6-2332-5382-a533-54b6c360cb8e', 'description' => 'PN-Counter', 'correct_answer' => false],
                    ['id' => '0223c366-947a-55f6-b562-69064b1a7e6b', 'description' => 'OR-Set', 'correct_answer' => true]
                ]],
        ['id' => '9d959b97-6b28-5166-9133-9ec0baf44915', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which JSON-like CRDT library supports local-first collaborative applications?', 'difficulty' => 5, 'weight' => 802, 'alternatives' => [
                    ['id' => '2c79e81a-850b-56b7-bc2b-7cca91b2489d', 'description' => 'Automerge', 'correct_answer' => true],
                    ['id' => '98cf9547-f1da-5028-ac89-7b72ba896c7d', 'description' => 'Differential Synchronization', 'correct_answer' => false],
                    ['id' => '2e0fe322-c543-53e1-bbbe-94f56badd0c7', 'description' => 'WOOT', 'correct_answer' => false],
                    ['id' => '52ad2db9-57d2-518d-9eb9-4bb6156697a8', 'description' => 'Yjs', 'correct_answer' => false],
                    ['id' => 'a794f26c-6765-5700-9b83-379db884abe1', 'description' => 'OR-Set', 'correct_answer' => false]
                ]],
        ['id' => '928016bd-4726-5f5f-b86a-9c8e8b73a8b8', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which data type lets replicas merge deterministically and converge without coordination?', 'difficulty' => 5, 'weight' => 814, 'alternatives' => [
                    ['id' => 'a62037b4-ef12-5ed4-934d-8f17f18a4728', 'description' => 'PN-Counter', 'correct_answer' => false],
                    ['id' => 'e8aafe93-393d-52da-a1c9-21b305ac6265', 'description' => 'LWW-Register', 'correct_answer' => false],
                    ['id' => 'adada822-728e-5072-aa0c-a7b4c157a92c', 'description' => 'WOOT', 'correct_answer' => false],
                    ['id' => 'a837d9ae-ad59-53c7-a537-3b0136bdbf87', 'description' => 'CRDT', 'correct_answer' => true],
                    ['id' => 'b35d922b-e5b9-5da1-b7d6-e1e40778e3a5', 'description' => 'Differential Synchronization', 'correct_answer' => false]
                ]],
        ['id' => '08d17531-b4e5-59e2-94bc-d7681b5fd128', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which counter CRDT supports increments and decrements with separate positive and negative components?', 'difficulty' => 5, 'weight' => 827, 'alternatives' => [
                    ['id' => '5ae54a46-0fc8-5233-b42f-c1eded27a0f2', 'description' => 'PN-Counter', 'correct_answer' => true],
                    ['id' => '9d9aaade-6b09-510c-811f-846607830cfb', 'description' => 'WOOT', 'correct_answer' => false],
                    ['id' => '83de09e0-3449-53f5-9253-6fd1d3fb9ed0', 'description' => 'RGA', 'correct_answer' => false],
                    ['id' => 'b809e4ad-797d-5eec-b191-61d3ddcd920c', 'description' => 'Automerge', 'correct_answer' => false],
                    ['id' => 'ddae3866-b52a-52e2-bed4-63a0e359180d', 'description' => 'LWW-Register', 'correct_answer' => false]
                ]],
        ['id' => '7945a27f-3504-5c8b-8ac9-084729ef74d3', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which grow-only counter merges per-replica counts using component-wise maxima?', 'difficulty' => 5, 'weight' => 940, 'alternatives' => [
                    ['id' => '3a4913b7-5beb-5766-8550-5bdd770eee72', 'description' => 'Yjs', 'correct_answer' => false],
                    ['id' => '129257de-7e90-5a5d-91aa-3e89786fd533', 'description' => 'LWW-Register', 'correct_answer' => false],
                    ['id' => '605e3530-7e73-5088-8b12-ce3408e5f23f', 'description' => 'G-Counter', 'correct_answer' => true],
                    ['id' => 'a570a419-f784-5c41-b5fe-889984db2af0', 'description' => 'Automerge', 'correct_answer' => false],
                    ['id' => '1aa4e854-b188-579d-bc83-00f43a3a6216', 'description' => 'OR-Set', 'correct_answer' => false]
                ]],
        ['id' => 'c80038a6-509e-541a-92bf-3f97bbdefa5f', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which replicated growable array CRDT represents sequences with concurrent insertions?', 'difficulty' => 5, 'weight' => 825, 'alternatives' => [
                    ['id' => '702bea6e-3ce0-5e8d-9381-2f2393bf0b51', 'description' => 'Differential Synchronization', 'correct_answer' => false],
                    ['id' => 'c3f31713-840c-5766-bd3a-067d31fe0426', 'description' => 'RGA', 'correct_answer' => true],
                    ['id' => '1754fecd-6a78-58c6-b74f-8ace6a53e2dc', 'description' => 'PN-Counter', 'correct_answer' => false],
                    ['id' => '748aee56-c05d-5e9d-b42a-c4e075550062', 'description' => 'WOOT', 'correct_answer' => false],
                    ['id' => 'd026551b-075a-5315-8b96-ab872ec5e2bd', 'description' => 'Yjs', 'correct_answer' => false]
                ]],
        ['id' => 'fe7b813a-5487-5327-96dc-c93946dba2d3', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which CRDT framework is widely used for collaborative editing and shared data types?', 'difficulty' => 5, 'weight' => 832, 'alternatives' => [
                    ['id' => '4f4586bf-e7e3-52c0-bca4-ec5a3f446ab3', 'description' => 'Yjs', 'correct_answer' => true],
                    ['id' => '63cdf61b-f16a-5c21-bc3b-c1f8620d23c2', 'description' => 'CRDT', 'correct_answer' => false],
                    ['id' => '987f7f4b-782b-537e-88d8-b25871ef1629', 'description' => 'PN-Counter', 'correct_answer' => false],
                    ['id' => '977f7a7c-47ac-515d-8480-6431faeed6d1', 'description' => 'OR-Set', 'correct_answer' => false],
                    ['id' => 'a791bb06-5ba4-5702-be59-f6c3d932e720', 'description' => 'WOOT', 'correct_answer' => false]
                ]],
        ['id' => 'b65ed419-5935-544b-b4eb-7bdd52c12701', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which Google cluster manager inspired Kubernetes and schedules workloads across large clusters?', 'difficulty' => 5, 'weight' => 837, 'alternatives' => [
                    ['id' => '0b1ff45b-0625-558c-b9d2-33a43a9c49cf', 'description' => 'Nomad', 'correct_answer' => false],
                    ['id' => '80fb1cf2-1fb4-5ca8-95af-c02edda69333', 'description' => 'Borg', 'correct_answer' => true],
                    ['id' => 'c683040b-41d8-5193-9ddc-6310d9885d28', 'description' => 'YARN', 'correct_answer' => false],
                    ['id' => '9ce1aa2d-2542-5e45-a00d-a7a74037e206', 'description' => 'Aurora', 'correct_answer' => false],
                    ['id' => 'eaa1f266-eb1d-5e69-a6cc-4da4d9c5dc4f', 'description' => 'Mesos', 'correct_answer' => false]
                ]],
        ['id' => '10318ce7-cfa3-55ea-b9cb-44c16e783c75', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which Google cluster-management architecture explored shared-state scheduling with optimistic concurrency control?', 'difficulty' => 5, 'weight' => 918, 'alternatives' => [
                    ['id' => '73d13c3b-c04c-59c0-bdd1-75bfe35db0d8', 'description' => 'HTCondor', 'correct_answer' => false],
                    ['id' => '997f0a02-3c35-5ffe-9124-1ce4990e9a86', 'description' => 'Borg', 'correct_answer' => false],
                    ['id' => '7b3c033c-0164-5784-b6b1-ec5fbc4f7f84', 'description' => 'Mesos', 'correct_answer' => false],
                    ['id' => 'd019aa47-3589-557b-9e4e-847e25aae7d2', 'description' => 'YARN', 'correct_answer' => false],
                    ['id' => '85f9e78d-8a72-567d-a235-9a1617566399', 'description' => 'Omega', 'correct_answer' => true]
                ]],
        ['id' => '07a04469-f5fc-5fdc-920b-f62a4ac700e0', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which workload scheduler manages batch jobs on high-performance computing systems?', 'difficulty' => 5, 'weight' => 870, 'alternatives' => [
                    ['id' => '213f430f-a1ce-535f-893f-d2d86a494946', 'description' => 'Aurora', 'correct_answer' => false],
                    ['id' => '6c16f5e1-1be0-5564-90a6-0b2a516f8548', 'description' => 'Borg', 'correct_answer' => false],
                    ['id' => '007f74bb-e9ac-5167-8b50-a16081bd54d2', 'description' => 'Nomad', 'correct_answer' => false],
                    ['id' => '78b7ab23-c227-51ae-895b-9d3649e92630', 'description' => 'OpenPBS', 'correct_answer' => true],
                    ['id' => '8f5ec81f-f394-5443-8ddc-6ac6ff1b2db7', 'description' => 'HTCondor', 'correct_answer' => false]
                ]],
        ['id' => '99103907-a0dd-5de3-9e24-9fe0d8c710f3', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which scheduling framework was developed at Twitter to manage services on Mesos?', 'difficulty' => 5, 'weight' => 949, 'alternatives' => [
                    ['id' => '88514b42-60dc-5cce-a478-37d6c3333f42', 'description' => 'Omega', 'correct_answer' => false],
                    ['id' => '0b65e98a-73ae-5d7a-9ef8-5b043978a0d8', 'description' => 'Nomad', 'correct_answer' => false],
                    ['id' => '73b9a3af-314c-55e5-9947-94465997ba3a', 'description' => 'Borg', 'correct_answer' => false],
                    ['id' => 'a0810854-6432-5a55-8846-5ec8a2084673', 'description' => 'YARN', 'correct_answer' => false],
                    ['id' => '8ba16661-6a3c-5400-92dc-57c40e901ed3', 'description' => 'Aurora', 'correct_answer' => true]
                ]],
        ['id' => 'f6e4dd4e-a151-5f87-aad7-965582eaa389', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which orchestration system uses declarative desired state and a control plane?', 'difficulty' => 5, 'weight' => 837, 'alternatives' => [
                    ['id' => 'f3fa86e2-c641-5ba3-b0df-95ebce676982', 'description' => 'Aurora', 'correct_answer' => false],
                    ['id' => '40e6266e-3bf8-502c-9c45-700d19e229cb', 'description' => 'OpenPBS', 'correct_answer' => false],
                    ['id' => '5379d3fe-0fb3-530a-849c-21e11212293d', 'description' => 'Kubernetes', 'correct_answer' => true],
                    ['id' => 'a868378d-0e78-5c4d-8023-5e6976cd29c3', 'description' => 'Slurm', 'correct_answer' => false],
                    ['id' => '52024875-8edb-54df-8af8-6e8a6cc7fd6e', 'description' => 'Mesos', 'correct_answer' => false]
                ]],
        ['id' => 'be205df6-8a03-5c82-ac05-40a3248da358', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which workload manager is widely used on high-performance computing clusters?', 'difficulty' => 5, 'weight' => 994, 'alternatives' => [
                    ['id' => 'b12e8dab-c7f3-5d6e-bc47-7040bd1e4630', 'description' => 'Borg', 'correct_answer' => false],
                    ['id' => '98b8c0b1-ae9e-576f-be84-c86b2636a9a2', 'description' => 'Nomad', 'correct_answer' => false],
                    ['id' => '3ca41215-dc8b-5074-a1a7-605acb44b495', 'description' => 'Kubernetes', 'correct_answer' => false],
                    ['id' => '4b253691-9e5b-58b8-bb29-e31a6853cd6e', 'description' => 'OpenPBS', 'correct_answer' => false],
                    ['id' => 'ab6c5049-b5ea-5d8d-acd2-398a3492d9ed', 'description' => 'Slurm', 'correct_answer' => true]
                ]],
        ['id' => 'ca1105b1-9431-5646-b70a-f1788dfb54be', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which cluster manager introduced a two-level scheduling architecture with resource offers?', 'difficulty' => 5, 'weight' => 972, 'alternatives' => [
                    ['id' => 'e3355aa4-d5cc-5225-8fc3-76b9445dac1d', 'description' => 'Mesos', 'correct_answer' => true],
                    ['id' => '1e0d7f43-caaf-57dc-8243-d80ab224a78a', 'description' => 'Kubernetes', 'correct_answer' => false],
                    ['id' => '28b81d0e-3afb-5f8f-a8fc-0d49b87b438a', 'description' => 'Nomad', 'correct_answer' => false],
                    ['id' => '7cffac22-3c0c-51c1-b3c5-b06355be44da', 'description' => 'Borg', 'correct_answer' => false],
                    ['id' => '68e5338c-415a-5e46-8082-a66426f6e9e5', 'description' => 'YARN', 'correct_answer' => false]
                ]],
        ['id' => '8e42b9fd-c336-5690-8942-ca419341ea6f', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which Hadoop resource-management layer separates resource management from application scheduling?', 'difficulty' => 5, 'weight' => 1000, 'alternatives' => [
                    ['id' => '3ff9f16e-8498-5b0a-b866-e3e5ebc7b606', 'description' => 'YARN', 'correct_answer' => true],
                    ['id' => '127082a9-cd11-58f5-86e0-2430af0d0766', 'description' => 'Slurm', 'correct_answer' => false],
                    ['id' => 'f798c17b-025d-51ad-8bc1-43ef3e349094', 'description' => 'Nomad', 'correct_answer' => false],
                    ['id' => '387e82a2-f2c1-5006-b51f-5dbb82901023', 'description' => 'Mesos', 'correct_answer' => false],
                    ['id' => 'f5c60fa2-74bf-5539-a78c-0d5e68c4070a', 'description' => 'Kubernetes', 'correct_answer' => false]
                ]],
        ['id' => 'e943ef47-4541-5322-9d25-54bdb4676bf4', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which distributed SQL database uses ranges and the Raft consensus algorithm?', 'difficulty' => 5, 'weight' => 988, 'alternatives' => [
                    ['id' => '6b86decc-a500-50ed-b998-20e49819af96', 'description' => 'Spanner', 'correct_answer' => false],
                    ['id' => '831ac299-6714-529b-b307-8a731c4520c1', 'description' => 'FoundationDB', 'correct_answer' => false],
                    ['id' => 'e37f7e51-eefc-5d55-ae0e-c70f9a9c1488', 'description' => 'CockroachDB', 'correct_answer' => true],
                    ['id' => '80326004-6d3c-53c8-8ebe-8909c8935e8e', 'description' => 'YugabyteDB', 'correct_answer' => false],
                    ['id' => '5e0f2c9f-bc20-5e78-b2a1-4a0e4bced70b', 'description' => 'Bigtable', 'correct_answer' => false]
                ]],
        ['id' => 'd36101cd-4a4e-5d5f-aa50-f8d6a9d385e2', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which distributed SQL database separates compute from storage and uses TiKV?', 'difficulty' => 5, 'weight' => 860, 'alternatives' => [
                    ['id' => '3dfed0a8-03a0-52ff-98be-624b49cb76a7', 'description' => 'Fauna', 'correct_answer' => false],
                    ['id' => '3e7ca368-6aa8-547b-9a24-a86f56c838ff', 'description' => 'TiDB', 'correct_answer' => true],
                    ['id' => 'fb90d591-cae5-54f8-9653-2c7d4ae6b2dc', 'description' => 'YugabyteDB', 'correct_answer' => false],
                    ['id' => 'e0bb6264-5cf4-5bc4-9a0d-a1b8362a7e9b', 'description' => 'Dynamo', 'correct_answer' => false],
                    ['id' => '2457470e-d357-5422-badd-7b2645447618', 'description' => 'Bigtable', 'correct_answer' => false]
                ]],
        ['id' => '7e840ec1-c2e8-527a-8db2-ce50bde4cada', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which Google database combines synchronous replication with externally consistent transactions?', 'difficulty' => 5, 'weight' => 893, 'alternatives' => [
                    ['id' => 'd3d65d69-fb5e-5df0-ba64-4efc2496734f', 'description' => 'FoundationDB', 'correct_answer' => false],
                    ['id' => '6fb0ec6a-16e3-5b4d-9714-e0e1bf2d14da', 'description' => 'Megastore', 'correct_answer' => false],
                    ['id' => '9e069641-4cf4-5fe2-8478-6bf245e7d14a', 'description' => 'Fauna', 'correct_answer' => false],
                    ['id' => '216c44a7-33be-589c-94d1-efd41cc15d02', 'description' => 'Spanner', 'correct_answer' => true],
                    ['id' => '6467c607-0c24-5ec6-8bbc-191403cd6fa9', 'description' => 'CockroachDB', 'correct_answer' => false]
                ]],
        ['id' => '8a4c6fe3-f39e-5150-a7ee-2157394c6ef4', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which Google storage system provided transactional semantics over replicated data before Spanner?', 'difficulty' => 5, 'weight' => 970, 'alternatives' => [
                    ['id' => 'fcd3f560-b7d5-568e-9eed-aa3c82530edc', 'description' => 'FoundationDB', 'correct_answer' => false],
                    ['id' => 'e2cb1801-c026-5f7b-a527-84d4bf58436d', 'description' => 'Megastore', 'correct_answer' => true],
                    ['id' => '59fea0d5-4af6-5fd4-b682-a749a8a2c8d3', 'description' => 'CockroachDB', 'correct_answer' => false],
                    ['id' => '150cb99e-b9cc-5b83-bbf4-2a17ee16acc0', 'description' => 'Dynamo', 'correct_answer' => false],
                    ['id' => '66dd7ff5-ec5a-5ca8-a495-7e400dd680d2', 'description' => 'Spanner', 'correct_answer' => false]
                ]],
        ['id' => '662959f3-4d91-5100-9f59-17bbd667556c', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which Google storage system organizes data as a sparse, persistent multidimensional sorted map?', 'difficulty' => 5, 'weight' => 960, 'alternatives' => [
                    ['id' => '94922436-ed20-523a-a251-6ad9f6a8f991', 'description' => 'Fauna', 'correct_answer' => false],
                    ['id' => '80341b6e-121e-5283-9fdb-1329b9a3279f', 'description' => 'CockroachDB', 'correct_answer' => false],
                    ['id' => 'b762789b-5914-5fca-a317-ae107791bca0', 'description' => 'VoltDB', 'correct_answer' => false],
                    ['id' => '62a4f040-f4f6-5b17-b24c-4225de92c485', 'description' => 'Bigtable', 'correct_answer' => true],
                    ['id' => '3c3a0454-40e3-5ad4-b4e9-c20828c9e5e3', 'description' => 'Dynamo', 'correct_answer' => false]
                ]],
        ['id' => '29c78877-e847-5bfa-82f9-1040c790a495', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which globally distributed database offers transactional consistency through a serverless API?', 'difficulty' => 5, 'weight' => 922, 'alternatives' => [
                    ['id' => 'e0ae907b-0888-5e90-b46b-78d1de63e8ac', 'description' => 'Megastore', 'correct_answer' => false],
                    ['id' => '6fc59349-5179-5891-9de0-8968ab5969dd', 'description' => 'CockroachDB', 'correct_answer' => false],
                    ['id' => '21ee33d3-cabf-52ea-8b25-6fb0e90f67ee', 'description' => 'Fauna', 'correct_answer' => true],
                    ['id' => '5c2df9ba-3266-5c6f-b4dc-a9a1c9afd81d', 'description' => 'VoltDB', 'correct_answer' => false],
                    ['id' => '4f1fe64b-d8e8-538c-a6eb-9590efba37c8', 'description' => 'YugabyteDB', 'correct_answer' => false]
                ]],
        ['id' => 'ad49ad75-397d-51fd-be72-043ec12b597f', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which distributed SQL database is PostgreSQL-compatible and uses a distributed document store?', 'difficulty' => 5, 'weight' => 931, 'alternatives' => [
                    ['id' => 'c5c40c29-614f-5858-a842-b17960e7d9ff', 'description' => 'FoundationDB', 'correct_answer' => false],
                    ['id' => '5570ffa7-2f19-5eb7-be9b-a9cf800226f4', 'description' => 'TiDB', 'correct_answer' => false],
                    ['id' => 'e2197aa5-40d4-59c6-a7e3-c795118365df', 'description' => 'VoltDB', 'correct_answer' => false],
                    ['id' => '0ed1ba9e-61fd-5860-9465-f4f0ee9f32bc', 'description' => 'YugabyteDB', 'correct_answer' => true],
                    ['id' => '81bde8b9-9197-5561-9a79-be6c52ddb98f', 'description' => 'Megastore', 'correct_answer' => false]
                ]],
        ['id' => '92b8ea20-61ea-53d6-90ec-37a6ef44e71f', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which Amazon-originated distributed key-value store inspired the Dynamo paper?', 'difficulty' => 5, 'weight' => 895, 'alternatives' => [
                    ['id' => '37607f00-4094-5e9f-8615-db7b686ccf50', 'description' => 'YugabyteDB', 'correct_answer' => false],
                    ['id' => '38665224-6ecc-5791-aaf5-bb812ea0c694', 'description' => 'TiDB', 'correct_answer' => false],
                    ['id' => '5fc3cfa3-d7ed-5816-b187-1c1e959cc88e', 'description' => 'Spanner', 'correct_answer' => false],
                    ['id' => '0b1ea705-3210-5d0d-8bf4-c0a56a01ea06', 'description' => 'Dynamo', 'correct_answer' => true],
                    ['id' => '7c46a26c-c2cc-5715-97c6-9617b6c3a09e', 'description' => 'Fauna', 'correct_answer' => false]
                ]],
        ['id' => 'fbafbded-7d7e-5c34-b22e-c5bb8fb34ece', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which probabilistic padding scheme is recommended for RSA digital signatures?', 'difficulty' => 5, 'weight' => 839, 'alternatives' => [
                    ['id' => '5c9b15aa-6789-52db-8fb8-bbd8bca5c08a', 'description' => 'Shamir\'s Secret Sharing', 'correct_answer' => false],
                    ['id' => '808296c4-a90d-5d75-b63f-9ec7e17108c3', 'description' => 'RSA-OAEP', 'correct_answer' => false],
                    ['id' => '671af537-b7e1-5ecd-9165-fcaee4e3ebb4', 'description' => 'Threshold signatures', 'correct_answer' => false],
                    ['id' => '5761ef50-532e-52ad-b253-5c0a37813e4b', 'description' => 'RSA-PSS', 'correct_answer' => true],
                    ['id' => '7189fa34-24b5-5a27-a672-9b1f43e4eb72', 'description' => 'ECDH', 'correct_answer' => false]
                ]],
        ['id' => '71a10577-7577-576b-960a-b6f86d2b5ee4', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which secret-sharing method represents shares as hyperplanes intersecting at a secret point?', 'difficulty' => 5, 'weight' => 929, 'alternatives' => [
                    ['id' => '6699e4c9-3bcd-5369-aa0b-b1c3c1953c5e', 'description' => 'ECDH', 'correct_answer' => false],
                    ['id' => '6c3c353b-d685-5f93-a26e-73503ff53a4a', 'description' => 'Shamir\'s Secret Sharing', 'correct_answer' => false],
                    ['id' => '7dded8bf-5d74-5806-a187-b9a531e3fa32', 'description' => 'Blakley scheme', 'correct_answer' => true],
                    ['id' => '3d926e5a-753b-5a68-b509-a3cbde5261e9', 'description' => 'Schnorr signatures', 'correct_answer' => false],
                    ['id' => 'c35c2d90-35bc-5c31-8d7c-982afda8bbc4', 'description' => 'BLS signatures', 'correct_answer' => false]
                ]],
        ['id' => 'ed298786-314f-56c7-8d8f-cbcc88e2b8db', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which signature scheme supports aggregation and uses pairings over elliptic curves?', 'difficulty' => 5, 'weight' => 982, 'alternatives' => [
                    ['id' => '19e7c3ba-f233-5add-8a30-3a53d1af56b8', 'description' => 'RSA-PSS', 'correct_answer' => false],
                    ['id' => '846912f0-ab31-5084-93c3-c3361f20182e', 'description' => 'Shamir\'s Secret Sharing', 'correct_answer' => false],
                    ['id' => 'e446a71a-7600-5820-94a2-6bc984a262ef', 'description' => 'ECDH', 'correct_answer' => false],
                    ['id' => 'cf7c1f6c-458c-5e04-8335-5a8dfd378c60', 'description' => 'BLS signatures', 'correct_answer' => true],
                    ['id' => '69d6feb6-938c-5721-80c5-6beb8c4587fc', 'description' => 'Blakley scheme', 'correct_answer' => false]
                ]],
        ['id' => '398ce545-53ed-57ed-9766-d65f5dc5237e', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which cryptographic method requires a threshold of participants to cooperate in signing?', 'difficulty' => 5, 'weight' => 943, 'alternatives' => [
                    ['id' => '9d480927-5c7b-56ff-9e24-c3c86956090e', 'description' => 'Threshold signatures', 'correct_answer' => true],
                    ['id' => '72bbbdc2-9968-51d2-8cfe-427047f1ec50', 'description' => 'RSA-OAEP', 'correct_answer' => false],
                    ['id' => 'c262a863-aa93-584e-ba50-ae07a4ea1d34', 'description' => 'RSA-PSS', 'correct_answer' => false],
                    ['id' => 'e8eda023-99a3-5866-b9fe-50ee3678ab90', 'description' => 'Shamir\'s Secret Sharing', 'correct_answer' => false],
                    ['id' => '923efbe0-edcd-5dc9-bb02-3891dd750c5d', 'description' => 'X25519', 'correct_answer' => false]
                ]],
        ['id' => '41856433-8d50-5aa7-a891-9cdf713ba0d2', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which padding scheme is used for secure encryption with RSA?', 'difficulty' => 5, 'weight' => 940, 'alternatives' => [
                    ['id' => 'e97d5bd6-0e17-56e8-8ff0-6d34164cb659', 'description' => 'RSA-PSS', 'correct_answer' => false],
                    ['id' => 'acb90bee-3299-56a0-b097-b739b976ef34', 'description' => 'Shamir\'s Secret Sharing', 'correct_answer' => false],
                    ['id' => '6da99a63-4d4c-5552-9e4d-b9704a80320c', 'description' => 'Schnorr signatures', 'correct_answer' => false],
                    ['id' => '2c4c0ee6-cf0d-5111-a247-447e12eeb6b0', 'description' => 'Threshold signatures', 'correct_answer' => false],
                    ['id' => 'a28fffe7-99ea-5159-a558-cbb37874088d', 'description' => 'RSA-OAEP', 'correct_answer' => true]
                ]],
        ['id' => 'aff0d24b-c175-5aba-8882-041a987c94d4', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which signature scheme has a linear structure useful for multisignatures?', 'difficulty' => 5, 'weight' => 888, 'alternatives' => [
                    ['id' => 'ec135cd0-d1b5-5375-a84b-53c30e095472', 'description' => 'Schnorr signatures', 'correct_answer' => true],
                    ['id' => 'f088b861-2b6d-5ad5-8462-24b75ab30b9e', 'description' => 'ECDH', 'correct_answer' => false],
                    ['id' => '20e9d634-4469-54da-9949-5e30030b2635', 'description' => 'Threshold signatures', 'correct_answer' => false],
                    ['id' => 'f7dde614-e0ef-53f3-960c-404dfe042d5e', 'description' => 'Shamir\'s Secret Sharing', 'correct_answer' => false],
                    ['id' => 'd2107b12-cc47-5803-a1c2-9557564ce879', 'description' => 'BLS signatures', 'correct_answer' => false]
                ]],
        ['id' => 'ed933f62-daeb-5a32-b152-3aa7f1875355', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which key-agreement protocol uses elliptic-curve cryptography to establish a shared secret?', 'difficulty' => 5, 'weight' => 991, 'alternatives' => [
                    ['id' => 'bc096dd3-bd34-5bdd-aff7-180f18da8cad', 'description' => 'Shamir\'s Secret Sharing', 'correct_answer' => false],
                    ['id' => '194b4970-4a33-551d-b949-4e139a218a42', 'description' => 'Ed25519', 'correct_answer' => false],
                    ['id' => 'd5d0eb1f-8968-596d-a3e7-eba0b2e2200c', 'description' => 'ECDH', 'correct_answer' => true],
                    ['id' => '42dab990-4d20-5746-a808-4cc959a845e0', 'description' => 'BLS signatures', 'correct_answer' => false],
                    ['id' => '2cf947dc-04ec-5b9d-a4e6-c32d95f49d1b', 'description' => 'RSA-OAEP', 'correct_answer' => false]
                ]],
        ['id' => '6093d47f-5c4c-59bb-9171-056fe514f2c8', 'locale' => 'en-US', 'category' => 'd9f8f642-03ef-5a05-987e-a7c5142d9782', 'question' => 'Which digital signature scheme is based on the Edwards curve Curve25519?', 'difficulty' => 5, 'weight' => 995, 'alternatives' => [
                    ['id' => '34d307b2-a90e-5dfa-b6f6-7426a96b7e34', 'description' => 'X25519', 'correct_answer' => false],
                    ['id' => 'eec4d8b3-dc3a-5ef1-b5be-2c766fa5b810', 'description' => 'BLS signatures', 'correct_answer' => false],
                    ['id' => '8456a0bf-b33d-5ada-b21a-746b901fbad0', 'description' => 'Shamir\'s Secret Sharing', 'correct_answer' => false],
                    ['id' => '1baf6e19-2ce9-52f4-88cd-f1ea118035a6', 'description' => 'ECDH', 'correct_answer' => false],
                    ['id' => 'd36e48c8-4d91-58f2-9e0c-8437a3c6e501', 'description' => 'Ed25519', 'correct_answer' => true]
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
