<?php

namespace Database\Seeders\Trivia;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TriviaEnUsTvSeriesSeeder extends Seeder
{
    private const CATEGORY = ['id' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'created_by' => 'SYSTEM', 'short_description' => 'tv_series', 'description' => 'Tv Series'];

    private const QUESTIONS = [
        ['id' => 'cadfb07a-8edc-5f43-81fc-080137564f75', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which comedy follows employees at the Scranton branch of Dunder Mifflin?', 'difficulty' => 1, 'weight' => 200, 'alternatives' => [
                    ['id' => '486d371a-4102-5cbe-93c6-9de2af2f213b', 'description' => 'Game of Thrones', 'correct_answer' => false],
                    ['id' => 'fbbb847f-af6c-5c8b-b940-8d2f541f7dca', 'description' => 'The Big Bang Theory', 'correct_answer' => false],
                    ['id' => '69369f5d-f45c-5349-a07d-ef8570f0943e', 'description' => 'Friends', 'correct_answer' => false],
                    ['id' => '471b76a2-8479-5093-b219-27c8d25b7d92', 'description' => 'The Office', 'correct_answer' => true],
                    ['id' => 'b9396449-b17f-5930-b5eb-500cf582c8ed', 'description' => 'The Walking Dead', 'correct_answer' => false]
                ]],
        ['id' => 'ff91fd2b-97fd-5445-bcf5-ee50480c9c9f', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which fantasy series follows rival families competing for the Iron Throne?', 'difficulty' => 1, 'weight' => 107, 'alternatives' => [
                    ['id' => '2301ebbb-afc0-50ea-b697-62b54701b8f7', 'description' => 'Game of Thrones', 'correct_answer' => true],
                    ['id' => '50ea3c4c-acea-5675-9117-949b84761501', 'description' => 'Grey\'s Anatomy', 'correct_answer' => false],
                    ['id' => 'd2ed596d-2b1f-5f9e-8ad2-626ec8dcb8f6', 'description' => 'The Simpsons', 'correct_answer' => false],
                    ['id' => '57352c28-2d35-53ff-af02-77d4d06e7416', 'description' => 'Friends', 'correct_answer' => false],
                    ['id' => 'f95aa0f0-a3fb-5c07-bb65-f9ca4fbfba03', 'description' => 'The Office', 'correct_answer' => false]
                ]],
        ['id' => '471fdeb5-e3a6-5b7a-bd42-1866669ff071', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which series follows chemistry teacher Walter White as he begins manufacturing methamphetamine?', 'difficulty' => 1, 'weight' => 160, 'alternatives' => [
                    ['id' => '4399dbcf-df9c-5ddd-ab4c-3d5f4e7b0408', 'description' => 'The Office', 'correct_answer' => false],
                    ['id' => '8db88499-8453-5ed0-9ab1-c68649eab2b1', 'description' => 'Grey\'s Anatomy', 'correct_answer' => false],
                    ['id' => 'eb9491d8-81bc-5dae-a4c2-b7ecd6af6e0b', 'description' => 'Breaking Bad', 'correct_answer' => true],
                    ['id' => '527ca1fe-0b97-584a-b13d-fa0ed62bd981', 'description' => 'Money Heist', 'correct_answer' => false],
                    ['id' => '5faa69bf-dffa-5be8-98c7-75033a9cc583', 'description' => 'The Walking Dead', 'correct_answer' => false]
                ]],
        ['id' => 'fd298133-d16a-50b4-864c-b82bda76cca7', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which series begins with Will Byers\'s disappearance in the town of Hawkins?', 'difficulty' => 1, 'weight' => 114, 'alternatives' => [
                    ['id' => '3e400f19-36ea-5f74-9200-ae3b4d30d03e', 'description' => 'The Simpsons', 'correct_answer' => false],
                    ['id' => '97f7be88-4120-5582-b173-9ea62a298115', 'description' => 'Grey\'s Anatomy', 'correct_answer' => false],
                    ['id' => '9ddcb9f3-f4e8-52be-b776-c7c8e65d387b', 'description' => 'Stranger Things', 'correct_answer' => true],
                    ['id' => 'e344ad57-a05a-5824-a00c-e13d49fbf7a3', 'description' => 'Friends', 'correct_answer' => false],
                    ['id' => '931e2cfe-0916-52ec-b85f-759928352020', 'description' => 'The Big Bang Theory', 'correct_answer' => false]
                ]],
        ['id' => '3c4a637d-71bb-50c3-abef-7c21a2e6114a', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which animated sitcom follows the Simpson family in Springfield?', 'difficulty' => 1, 'weight' => 116, 'alternatives' => [
                    ['id' => '0445071e-dece-5e48-83bf-1352006c0bc1', 'description' => 'The Simpsons', 'correct_answer' => true],
                    ['id' => '0da1737a-cca6-55e4-b22a-c19c87446e4c', 'description' => 'Grey\'s Anatomy', 'correct_answer' => false],
                    ['id' => 'b703bd1c-414a-56f7-a40a-d38b73f2d632', 'description' => 'The Big Bang Theory', 'correct_answer' => false],
                    ['id' => '8b7be4b5-a023-59c8-a866-69c5a859342e', 'description' => 'The Walking Dead', 'correct_answer' => false],
                    ['id' => '1cf5d676-656a-5d04-9719-6a81db96a330', 'description' => 'Money Heist', 'correct_answer' => false]
                ]],
        ['id' => '01ef33ed-86ac-57d5-baca-c42729800746', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which series follows survivors in a world overrun by zombies?', 'difficulty' => 1, 'weight' => 144, 'alternatives' => [
                    ['id' => '18899dda-4860-5496-8238-7f220acdc14f', 'description' => 'The Simpsons', 'correct_answer' => false],
                    ['id' => '3beee7dc-d1d5-5f26-af71-b697f3942d51', 'description' => 'Stranger Things', 'correct_answer' => false],
                    ['id' => '232c4fbe-ef85-5404-bbbd-7928efdf38a9', 'description' => 'Friends', 'correct_answer' => false],
                    ['id' => 'b1d7d7d1-83cb-51ab-a7a0-0921f93253c5', 'description' => 'The Walking Dead', 'correct_answer' => true],
                    ['id' => 'c84d6291-7956-5d84-9b4a-36856d2482c3', 'description' => 'Grey\'s Anatomy', 'correct_answer' => false]
                ]],
        ['id' => 'f70b05dc-76df-58b1-bc66-b5ffe08d2354', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which sitcom follows six friends living in New York City and meeting at Central Perk?', 'difficulty' => 1, 'weight' => 110, 'alternatives' => [
                    ['id' => 'af3e3680-197d-5e81-8c86-94ede50f51cd', 'description' => 'Friends', 'correct_answer' => true],
                    ['id' => 'e4647e58-129a-5bd8-bffb-0c6a6298ec70', 'description' => 'The Big Bang Theory', 'correct_answer' => false],
                    ['id' => '8a2ceaba-5226-51df-8c20-87e44a70b5c6', 'description' => 'Grey\'s Anatomy', 'correct_answer' => false],
                    ['id' => 'fcb862bc-f76b-55bd-9b45-0b554cff0bfd', 'description' => 'Money Heist', 'correct_answer' => false],
                    ['id' => 'aa9bae4d-021f-58ea-aeb6-8ce60b0cc132', 'description' => 'The Simpsons', 'correct_answer' => false]
                ]],
        ['id' => '25ec837a-0b8a-5d9b-b798-012ca886dca6', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which Spanish series follows a group carrying out robberies planned by the Professor?', 'difficulty' => 1, 'weight' => 183, 'alternatives' => [
                    ['id' => '50c2f9b2-a6b6-5cf6-82ec-99800ae60793', 'description' => 'Grey\'s Anatomy', 'correct_answer' => false],
                    ['id' => 'd2672752-cc20-5b2b-a4bd-4a19a21eb479', 'description' => 'Game of Thrones', 'correct_answer' => false],
                    ['id' => '868f95ed-1f7f-511e-834f-31ba7d69d081', 'description' => 'Friends', 'correct_answer' => false],
                    ['id' => 'cf3c8c9c-c51c-5c9e-8375-0b563bf76f20', 'description' => 'Breaking Bad', 'correct_answer' => false],
                    ['id' => '94bee356-b7b7-5f26-af8d-d528df546ac6', 'description' => 'Money Heist', 'correct_answer' => true]
                ]],
        ['id' => '1713ed1b-301f-5be2-b240-8a03acd367b1', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which superhero series follows Oliver Queen as a masked vigilante?', 'difficulty' => 1, 'weight' => 147, 'alternatives' => [
                    ['id' => '56b81690-b274-506d-b5b8-833cf53dfe25', 'description' => 'Prison Break', 'correct_answer' => false],
                    ['id' => 'c2ffd5c4-68f0-5193-a126-d53d0bec3e12', 'description' => 'Lost', 'correct_answer' => false],
                    ['id' => '6b0a1ced-ca5c-564c-b3e9-791be629c75d', 'description' => 'The Vampire Diaries', 'correct_answer' => false],
                    ['id' => '60333947-2b6b-520d-8b6a-5b0188e3ce69', 'description' => 'Arrow', 'correct_answer' => true],
                    ['id' => '6d0e640a-3726-56d1-a87d-8c21d34eade1', 'description' => 'Dexter', 'correct_answer' => false]
                ]],
        ['id' => 'e85fd22e-d0c0-5a88-835a-f12f0d2b566f', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which series follows Elena Gilbert and vampire brothers Stefan and Damon?', 'difficulty' => 1, 'weight' => 197, 'alternatives' => [
                    ['id' => '7386aad6-be71-5e8f-8dc2-381d680df5f7', 'description' => 'Dexter', 'correct_answer' => false],
                    ['id' => 'b3b9380e-efce-5fd9-acd6-70698480f447', 'description' => 'The Vampire Diaries', 'correct_answer' => true],
                    ['id' => 'eecf218d-5d9b-55c6-9b6f-27fc51f68851', 'description' => 'How I Met Your Mother', 'correct_answer' => false],
                    ['id' => '2c058884-83aa-568b-a780-41e7f549ff0d', 'description' => 'Prison Break', 'correct_answer' => false],
                    ['id' => '054c9a4a-b4da-5977-b74d-7a655bdaee36', 'description' => 'Supernatural', 'correct_answer' => false]
                ]],
        ['id' => '896a90c9-49c4-51ac-b548-bed569f47cba', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which series follows Michael Scofield\'s plan to break his brother out of prison?', 'difficulty' => 1, 'weight' => 140, 'alternatives' => [
                    ['id' => '7b37eb86-8807-5951-afba-f00817ea5313', 'description' => 'House', 'correct_answer' => false],
                    ['id' => 'd99d5c9f-e4fa-53d3-83cb-17c2217b3c3f', 'description' => 'Prison Break', 'correct_answer' => true],
                    ['id' => 'c8b114fc-78e5-513a-aef7-876855bcda28', 'description' => 'The Vampire Diaries', 'correct_answer' => false],
                    ['id' => '6238178e-ddb5-502b-b431-8b3d2ba6fb33', 'description' => 'Dexter', 'correct_answer' => false],
                    ['id' => '25cfefc4-bfe6-5185-9eac-aa7b15f5d8c9', 'description' => 'Sherlock', 'correct_answer' => false]
                ]],
        ['id' => '67b5f71e-1e23-51ec-b083-09b7c419082a', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which series begins after a passenger plane crashes on a mysterious island?', 'difficulty' => 1, 'weight' => 120, 'alternatives' => [
                    ['id' => 'f9bda97a-c96f-5c67-89b0-0a6bd26327c6', 'description' => 'House', 'correct_answer' => false],
                    ['id' => '51d9c2de-a838-555b-8d06-2a06565a667d', 'description' => 'Lost', 'correct_answer' => true],
                    ['id' => '9426e060-182b-5218-934d-d17f117b476a', 'description' => 'Sherlock', 'correct_answer' => false],
                    ['id' => 'c43781ca-c29c-5188-b225-42a58ca30fad', 'description' => 'The Vampire Diaries', 'correct_answer' => false],
                    ['id' => 'f733ccfa-506b-5f5c-ae3b-77b8c6a18f51', 'description' => 'Prison Break', 'correct_answer' => false]
                ]],
        ['id' => '3d7fd8cb-b098-5a00-84cb-8466db812bff', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which series follows a forensic specialist who secretly kills criminals?', 'difficulty' => 1, 'weight' => 105, 'alternatives' => [
                    ['id' => 'a9c4176c-269d-5534-a1b2-fb9e29f8258d', 'description' => 'Dexter', 'correct_answer' => true],
                    ['id' => '4eb34949-59c9-56b5-ad28-85e735728cd6', 'description' => 'Lost', 'correct_answer' => false],
                    ['id' => 'ee245322-fc5c-5aea-8092-010c01b967d1', 'description' => 'Arrow', 'correct_answer' => false],
                    ['id' => 'a82ba516-1412-5d00-b9ec-d83f45034108', 'description' => 'The Vampire Diaries', 'correct_answer' => false],
                    ['id' => '6afbaf2e-ae18-5a44-8880-006a0601797a', 'description' => 'Sherlock', 'correct_answer' => false]
                ]],
        ['id' => '63931aac-c497-5bf4-a346-819eeb3211ce', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which comedy follows three connected family households in mockumentary style?', 'difficulty' => 1, 'weight' => 157, 'alternatives' => [
                    ['id' => 'd7965878-8afe-56a2-bba5-3309214dca1f', 'description' => 'Modern Family', 'correct_answer' => true],
                    ['id' => 'b32597c5-6786-5564-a21c-46b8c62031d3', 'description' => 'Lost', 'correct_answer' => false],
                    ['id' => '156393fd-52c5-57d0-8c08-db03df991cfa', 'description' => 'The Vampire Diaries', 'correct_answer' => false],
                    ['id' => 'f5e0e5a2-8b0d-523a-bb88-f87cda403f94', 'description' => 'Dexter', 'correct_answer' => false],
                    ['id' => '4589f083-6c66-5382-b90c-11679b9aa1ee', 'description' => 'How I Met Your Mother', 'correct_answer' => false]
                ]],
        ['id' => '79d26201-7809-551e-ad50-ec243bb21662', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which medical drama stars Gregory House, a brilliant doctor known for his difficult personality?', 'difficulty' => 1, 'weight' => 189, 'alternatives' => [
                    ['id' => 'db18cc83-2a69-507b-a44e-215d7427e671', 'description' => 'Lost', 'correct_answer' => false],
                    ['id' => '3a34f1ea-2eb0-5f48-9bf9-7f4ca3328867', 'description' => 'The Vampire Diaries', 'correct_answer' => false],
                    ['id' => 'ab0d41dd-0fce-5a4d-9cba-396919fb8085', 'description' => 'Modern Family', 'correct_answer' => false],
                    ['id' => 'ff652a6d-beaf-5cc6-802d-7cdb51ac847d', 'description' => 'How I Met Your Mother', 'correct_answer' => false],
                    ['id' => 'db54c9aa-4a70-5fa8-abeb-3cc9710c81f4', 'description' => 'House', 'correct_answer' => true]
                ]],
        ['id' => '397de207-ddca-52cc-8b11-c7fb81dc1427', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which BBC series presents Sherlock Holmes and John Watson in contemporary London?', 'difficulty' => 1, 'weight' => 131, 'alternatives' => [
                    ['id' => '11976330-77ca-5f6e-b5e4-6a4bde202ea5', 'description' => 'Arrow', 'correct_answer' => false],
                    ['id' => 'e0a58afe-d2d3-5898-8423-091b44a37a1e', 'description' => 'Dexter', 'correct_answer' => false],
                    ['id' => '07908db5-947b-5956-af52-d0724817fde7', 'description' => 'Modern Family', 'correct_answer' => false],
                    ['id' => 'fa3810a7-0bd8-55ef-afef-c0ad8e8ba4b4', 'description' => 'The Vampire Diaries', 'correct_answer' => false],
                    ['id' => '7f5f7c45-d8b6-5bde-bddf-0b43befa2833', 'description' => 'Sherlock', 'correct_answer' => true]
                ]],
        ['id' => 'ffe1e0f9-d30f-56b9-beb0-746fa1265bf6', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which anthology series presents standalone stories about technology and society?', 'difficulty' => 1, 'weight' => 189, 'alternatives' => [
                    ['id' => 'cbfc37b1-e153-55a2-91fd-814f8128f63b', 'description' => 'Black Mirror', 'correct_answer' => true],
                    ['id' => 'd50bac8f-2b0f-572e-9284-27ec8476df75', 'description' => 'The Flash', 'correct_answer' => false],
                    ['id' => 'f82a3064-c832-51b3-8716-00b10cebda19', 'description' => 'Narcos', 'correct_answer' => false],
                    ['id' => 'c2339d33-ff71-5ceb-8ecd-6abf7f769daf', 'description' => 'Brooklyn Nine-Nine', 'correct_answer' => false],
                    ['id' => '8700bf21-ba1e-531c-9055-3de6bb8a342a', 'description' => 'Lucifer', 'correct_answer' => false]
                ]],
        ['id' => 'f6c1696c-2b0a-5c2c-865e-850035533457', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which superhero series follows Barry Allen after he gains super-speed?', 'difficulty' => 1, 'weight' => 179, 'alternatives' => [
                    ['id' => '2e701463-ebd1-5f8f-b2e0-963fab8b7408', 'description' => 'Vikings', 'correct_answer' => false],
                    ['id' => '388ddd16-2a46-53b7-8a22-6b4b03df5681', 'description' => 'Brooklyn Nine-Nine', 'correct_answer' => false],
                    ['id' => '94291f0c-b03c-564e-af36-5bec87054bb0', 'description' => 'The 100', 'correct_answer' => false],
                    ['id' => 'f1beee05-05a1-52e0-8089-2f6210a2b5b8', 'description' => 'Lucifer', 'correct_answer' => false],
                    ['id' => '4e35a6e1-02c0-5aa9-bfd4-8e19d185db11', 'description' => 'The Flash', 'correct_answer' => true]
                ]],
        ['id' => 'e9a8678e-fa1f-5cc0-840e-af54fd7f784d', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which drama chronicles Queen Elizabeth II\'s reign and the British royal family?', 'difficulty' => 1, 'weight' => 129, 'alternatives' => [
                    ['id' => 'bf79481b-b213-5077-bd5c-64fb208ecbc6', 'description' => 'Orange Is the New Black', 'correct_answer' => false],
                    ['id' => 'c8ca13ad-2506-51fa-b917-5db8385e6bd4', 'description' => 'Narcos', 'correct_answer' => false],
                    ['id' => '3a44afc5-6ced-5a2b-bdf3-6c7f33d2db73', 'description' => 'The Crown', 'correct_answer' => true],
                    ['id' => '3cc54a2e-69c1-543e-ba52-95d5ee79c0fc', 'description' => 'Vikings', 'correct_answer' => false],
                    ['id' => 'ae8fe203-ac55-5d7b-b9a3-cb99c261ca3e', 'description' => 'Brooklyn Nine-Nine', 'correct_answer' => false]
                ]],
        ['id' => 'c1c80197-0248-51bb-8f9d-aa3543721eb5', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which legal drama follows Harvey Specter and Mike Ross at a law firm?', 'difficulty' => 1, 'weight' => 143, 'alternatives' => [
                    ['id' => '1bf3be5f-619d-5a8c-8b52-920d35163253', 'description' => 'Lucifer', 'correct_answer' => false],
                    ['id' => 'd2a4cbba-4bf9-5a82-8d06-56853c02a366', 'description' => 'The Crown', 'correct_answer' => false],
                    ['id' => '593dd33a-d6b9-555a-bee6-c4c7fb9a9346', 'description' => 'Black Mirror', 'correct_answer' => false],
                    ['id' => '9d08b816-15c8-530e-87f8-eae42609843a', 'description' => 'Suits', 'correct_answer' => true],
                    ['id' => '46e7a713-cc6d-5af7-92fd-4c2875e2a47f', 'description' => 'Vikings', 'correct_answer' => false]
                ]],
        ['id' => 'fa9ffeba-8308-5309-9a15-a50d39cad0a7', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which series dramatizes the drug trade in Colombia, including Pablo Escobar?', 'difficulty' => 1, 'weight' => 114, 'alternatives' => [
                    ['id' => 'f182dae5-d454-5f07-b6b0-6281d5b226fd', 'description' => 'The 100', 'correct_answer' => false],
                    ['id' => 'd6b6d02e-3406-53f0-90b2-dc95ba2a39c6', 'description' => 'The Crown', 'correct_answer' => false],
                    ['id' => '9e126a51-62e2-5500-8cab-997dc273722a', 'description' => 'Lucifer', 'correct_answer' => false],
                    ['id' => 'cfb1832f-54b2-55f2-b83d-6bd48800a655', 'description' => 'The Flash', 'correct_answer' => false],
                    ['id' => '7002a47e-e9b9-527e-9db1-deeccb8a9b3b', 'description' => 'Narcos', 'correct_answer' => true]
                ]],
        ['id' => '2c4d371a-078d-5806-9fe6-3b1d262e8be5', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which series follows the Devil after he leaves Hell and works with Los Angeles police?', 'difficulty' => 1, 'weight' => 127, 'alternatives' => [
                    ['id' => 'f28e823a-8387-5d91-9e9a-cebb7ee61c01', 'description' => 'The 100', 'correct_answer' => false],
                    ['id' => 'a94e8ac4-f4aa-56d9-b9ca-8a6a195e0bb6', 'description' => 'Suits', 'correct_answer' => false],
                    ['id' => '31e51d94-1378-556f-9541-98c1a4322cff', 'description' => 'Brooklyn Nine-Nine', 'correct_answer' => false],
                    ['id' => 'bc7e0892-f974-5d66-8cfb-143bddf97039', 'description' => 'Black Mirror', 'correct_answer' => false],
                    ['id' => '5b490dc5-cc46-5fb5-8640-f1f11c68d55f', 'description' => 'Lucifer', 'correct_answer' => true]
                ]],
        ['id' => 'ad52b898-d463-5c86-a87f-2b841bc3f703', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which science-fiction series sends young people from a space station to a potentially habitable Earth?', 'difficulty' => 1, 'weight' => 196, 'alternatives' => [
                    ['id' => 'aa91477c-e5b5-58ed-9b7f-41c713acf2be', 'description' => 'The Crown', 'correct_answer' => false],
                    ['id' => '07c723cb-4791-5bb7-ab4e-096de4d73735', 'description' => 'Vikings', 'correct_answer' => false],
                    ['id' => '37b48c78-6f35-5cd3-a044-d295f85710b8', 'description' => 'The 100', 'correct_answer' => true],
                    ['id' => 'bb5ad425-cebb-5124-b425-1e2abdf95920', 'description' => 'The Flash', 'correct_answer' => false],
                    ['id' => 'f6133955-f54a-557b-870f-c3194f2f30a1', 'description' => 'Orange Is the New Black', 'correct_answer' => false]
                ]],
        ['id' => 'a385176d-e62f-56eb-8a47-89b11dcd7e2c', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which historical drama follows Ragnar Lothbrok and other Norse characters?', 'difficulty' => 1, 'weight' => 146, 'alternatives' => [
                    ['id' => '13257b08-f3cd-58f7-832f-df923ca9fc62', 'description' => 'Vikings', 'correct_answer' => true],
                    ['id' => '771279f7-9659-5a4d-9c4d-8432cb7f35df', 'description' => 'The Crown', 'correct_answer' => false],
                    ['id' => '35616df3-9693-5507-8a10-9c2c23349ece', 'description' => 'Brooklyn Nine-Nine', 'correct_answer' => false],
                    ['id' => '19bbe6d5-6392-551c-88fb-2e1f3d619c9c', 'description' => 'The Flash', 'correct_answer' => false],
                    ['id' => '46c907bb-c467-50bd-890f-30a299fa09b3', 'description' => 'Orange Is the New Black', 'correct_answer' => false]
                ]],
        ['id' => 'd1d89baf-0b2a-516f-9ae8-55494ad74a8e', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which fantasy series follows monster hunter Geralt of Rivia?', 'difficulty' => 1, 'weight' => 125, 'alternatives' => [
                    ['id' => '34382eb1-b052-5865-9f92-0e5c29a64cfd', 'description' => 'The Witcher', 'correct_answer' => true],
                    ['id' => '6959b61b-3ebc-53b9-a1a4-f41a88bf781e', 'description' => 'Bridgerton', 'correct_answer' => false],
                    ['id' => '152cc2b9-5432-5a1d-9027-a044f770a26c', 'description' => 'Squid Game', 'correct_answer' => false],
                    ['id' => 'a7f2c027-208e-5f03-af41-cdc00a31d324', 'description' => 'Elite', 'correct_answer' => false],
                    ['id' => '781cebe8-753b-51a2-9ba3-fc44df6e35a3', 'description' => 'Cobra Kai', 'correct_answer' => false]
                ]],
        ['id' => '7b5026c1-6333-5ca0-b994-9d97b69f98cb', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which South Korean series brings indebted contestants together for deadly children\'s games?', 'difficulty' => 1, 'weight' => 104, 'alternatives' => [
                    ['id' => 'f9d388d0-7682-5db1-aff8-46a115e5edbd', 'description' => 'Cobra Kai', 'correct_answer' => false],
                    ['id' => '0db12b58-985b-5722-b8ca-ca6fa3adadd8', 'description' => 'The Good Doctor', 'correct_answer' => false],
                    ['id' => '82ec26fa-9a4b-514c-8ab1-38787e8aac51', 'description' => 'Euphoria', 'correct_answer' => false],
                    ['id' => '399e4531-c00a-5bd5-9b75-123b41541c5d', 'description' => 'Squid Game', 'correct_answer' => true],
                    ['id' => '58b92e1a-bb0e-5484-a3bc-eb71a9fdebbe', 'description' => 'The Witcher', 'correct_answer' => false]
                ]],
        ['id' => '3753a8be-57d0-5988-8f95-6237e35c7f91', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which Spanish series follows students at the private school Las Encinas?', 'difficulty' => 1, 'weight' => 111, 'alternatives' => [
                    ['id' => 'a11127a9-53ee-5d94-8938-1e64e46f0f22', 'description' => 'Cobra Kai', 'correct_answer' => false],
                    ['id' => '35b309bb-4b04-58bf-83fb-e46b51672d95', 'description' => 'Elite', 'correct_answer' => true],
                    ['id' => '5a146577-fa61-55ce-a5a2-6ecc6ce531de', 'description' => 'Lupin', 'correct_answer' => false],
                    ['id' => 'c5b5425a-f1a2-572e-9d8e-2834727639f3', 'description' => 'The Witcher', 'correct_answer' => false],
                    ['id' => '706b5d26-0c76-55e7-b057-ad2efdeb8fab', 'description' => 'Euphoria', 'correct_answer' => false]
                ]],
        ['id' => '63ca7ad5-4367-51ed-b823-6709e9fbaad6', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which French series follows Assane Diop, inspired by the gentleman thief Arsène Lupin?', 'difficulty' => 1, 'weight' => 140, 'alternatives' => [
                    ['id' => '78f982db-2c18-523d-bb5a-79579828b759', 'description' => 'Lupin', 'correct_answer' => true],
                    ['id' => '6f778683-85c3-5f26-8153-53bd7c9495b0', 'description' => 'Cobra Kai', 'correct_answer' => false],
                    ['id' => 'aeca083c-c21b-5244-8736-593d0ac1310c', 'description' => 'Wednesday', 'correct_answer' => false],
                    ['id' => 'fd5f45a9-bea0-51b8-9ff1-a3d92659e4d4', 'description' => 'You', 'correct_answer' => false],
                    ['id' => '40c39095-23e3-54d7-b23e-05819d6c4fff', 'description' => 'Squid Game', 'correct_answer' => false]
                ]],
        ['id' => '334b3cd0-ab40-5efe-8655-24aff55dd296', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which medical drama follows Shaun Murphy, a young surgeon with autism and savant syndrome?', 'difficulty' => 1, 'weight' => 172, 'alternatives' => [
                    ['id' => 'b032e75d-ab4c-56e3-adbd-46b1965aea72', 'description' => 'The Witcher', 'correct_answer' => false],
                    ['id' => '3cb47171-34a6-5010-b62f-47a623f17b51', 'description' => 'Cobra Kai', 'correct_answer' => false],
                    ['id' => '6d1f0152-e759-5e2b-9e3b-10c26fc210e6', 'description' => 'Squid Game', 'correct_answer' => false],
                    ['id' => '725f7c92-709b-5857-bff4-334bf351a5c6', 'description' => 'The Good Doctor', 'correct_answer' => true],
                    ['id' => 'a9b324cb-edbb-59e9-b183-48e74ee95938', 'description' => 'Elite', 'correct_answer' => false]
                ]],
        ['id' => 'c005d69b-5d02-5dc5-a34b-8b9397d799a1', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which series revisits the rivalry between Daniel LaRusso and Johnny Lawrence?', 'difficulty' => 1, 'weight' => 175, 'alternatives' => [
                    ['id' => '4c78dfd7-2760-5bed-ab3c-425205143d09', 'description' => 'Elite', 'correct_answer' => false],
                    ['id' => '60bb1c71-9f4e-5ddf-abbd-0e9d2e1d664c', 'description' => 'Lupin', 'correct_answer' => false],
                    ['id' => 'c21eb181-728f-5feb-90f4-28b6b89e3480', 'description' => 'You', 'correct_answer' => false],
                    ['id' => '4d310a8e-c9b2-5906-9f19-b0ab3c4cbf8f', 'description' => 'Cobra Kai', 'correct_answer' => true],
                    ['id' => '0ab2367d-09ae-5ce7-badd-78e176d388e7', 'description' => 'Squid Game', 'correct_answer' => false]
                ]],
        ['id' => 'a6bb0d31-bfdf-5e3b-a165-c8830909e7e5', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which thriller follows Joe Goldberg, a man who develops dangerous obsessions?', 'difficulty' => 1, 'weight' => 160, 'alternatives' => [
                    ['id' => '6ea796de-0d4a-5ff4-bede-315fbf2f0ab5', 'description' => 'You', 'correct_answer' => true],
                    ['id' => '65fe234b-2d6a-5e37-9687-5cd61b222289', 'description' => 'Squid Game', 'correct_answer' => false],
                    ['id' => '33ca8a7d-fe8d-5ef0-b35b-8deb77959681', 'description' => 'The Witcher', 'correct_answer' => false],
                    ['id' => '759f55bc-057a-526c-8e76-1878334e9b5f', 'description' => 'The Good Doctor', 'correct_answer' => false],
                    ['id' => '07910c8c-67b9-56f2-8834-a6dbc2428a83', 'description' => 'Euphoria', 'correct_answer' => false]
                ]],
        ['id' => '207697ef-c734-5ef4-9545-54707649afd1', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which period drama follows families in London\'s high society seeking advantageous marriages?', 'difficulty' => 1, 'weight' => 194, 'alternatives' => [
                    ['id' => 'a4dfb633-1d50-50f7-8643-11443e477d50', 'description' => 'Cobra Kai', 'correct_answer' => false],
                    ['id' => 'e7f3e14c-e524-5006-ad79-4b38b9f68e4f', 'description' => 'Elite', 'correct_answer' => false],
                    ['id' => 'a64cd30e-34a7-522d-b1f8-4154072aaf79', 'description' => 'Lupin', 'correct_answer' => false],
                    ['id' => '5eaf3d63-8a55-52fc-a1d9-155ac49f2749', 'description' => 'Squid Game', 'correct_answer' => false],
                    ['id' => '4eee695a-5581-522b-8184-631314dec2cd', 'description' => 'Bridgerton', 'correct_answer' => true]
                ]],
        ['id' => '0b85f935-c0d4-5d50-b76e-abeebc2045e1', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which Brazilian drama follows staff at a public hospital in Rio de Janeiro?', 'difficulty' => 1, 'weight' => 129, 'alternatives' => [
                    ['id' => 'c718a957-f898-5424-9882-376a8aa543ec', 'description' => '3%', 'correct_answer' => false],
                    ['id' => 'bea1253b-82f4-5645-9b06-1dbeea1b8c3a', 'description' => 'Chaves', 'correct_answer' => false],
                    ['id' => '2bd14f1b-d25d-52af-90a5-9b7b8e0475f9', 'description' => 'The Great Family', 'correct_answer' => false],
                    ['id' => '85b7aba6-1dbd-5cdf-81ba-2696d2046c0f', 'description' => 'The Normals', 'correct_answer' => false],
                    ['id' => 'ee6629dd-7293-56ef-8379-b60eb2a317cf', 'description' => 'Under Pressure', 'correct_answer' => true]
                ]],
        ['id' => 'c6f38b90-9707-507f-91c8-5f9e70f383d3', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which Mexican comedy features a clumsy superhero with a chipote chillón?', 'difficulty' => 1, 'weight' => 111, 'alternatives' => [
                    ['id' => 'da006070-53fe-506a-b003-4c980aff47ed', 'description' => 'Invisible City', 'correct_answer' => false],
                    ['id' => '0ab6f590-f610-5b65-ab51-505b90dd41cb', 'description' => 'Chaves', 'correct_answer' => false],
                    ['id' => '93d56be2-8f02-5bc5-9cf2-6eec41ff6f68', 'description' => 'The Normals', 'correct_answer' => false],
                    ['id' => '1167a5be-dfb2-59f0-96e8-f7441e949e39', 'description' => 'El Chapulín Colorado', 'correct_answer' => true],
                    ['id' => '483575f1-5528-52c0-b258-411920bed3e5', 'description' => 'The Great Family', 'correct_answer' => false]
                ]],
        ['id' => '64589935-d083-52c9-b210-b7699b11d4f3', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which Brazilian series mixes a police investigation with figures from Brazilian folklore?', 'difficulty' => 1, 'weight' => 157, 'alternatives' => [
                    ['id' => 'a3e070f5-b6a8-5b98-b028-3fc7960547d0', 'description' => 'Invisible City', 'correct_answer' => true],
                    ['id' => '6439cd94-655e-5666-80fd-ecdede12dd6b', 'description' => 'Under Pressure', 'correct_answer' => false],
                    ['id' => 'cb8a92c4-4316-5bb6-8fac-f647f720b5ed', 'description' => 'Avenida Brasil', 'correct_answer' => false],
                    ['id' => 'bc8211e4-2789-5b19-bb04-56e5053f3a14', 'description' => 'Chaves', 'correct_answer' => false],
                    ['id' => 'f0071a02-2dd0-56d8-8d4b-07a9c6df5ba1', 'description' => 'Tapas & Beijos', 'correct_answer' => false]
                ]],
        ['id' => 'afe7020a-6c06-5051-8370-15ad62678fcf', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which Brazilian sitcom follows Lineu, Nenê, Tuco, and Bebel?', 'difficulty' => 1, 'weight' => 182, 'alternatives' => [
                    ['id' => 'b807ff52-5843-53f1-9dd1-e384e8955e65', 'description' => 'Invisible City', 'correct_answer' => false],
                    ['id' => '68d6d3a0-48e5-5acf-a634-bdaed52fee4a', 'description' => 'The Great Family', 'correct_answer' => true],
                    ['id' => '8a8e96e4-6282-5e42-a072-0614a317e174', 'description' => 'Avenida Brasil', 'correct_answer' => false],
                    ['id' => '8f80d586-2aa1-5cc1-9280-e8fc1a8ca0c8', 'description' => 'Sai de Baixo', 'correct_answer' => false],
                    ['id' => '5eaa888c-2b10-5315-ae86-323b1899ef7a', 'description' => 'The Normals', 'correct_answer' => false]
                ]],
        ['id' => 'd77350e2-5d12-52fa-89bb-3248bbb2ec2b', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which Brazilian telenovela follows Nina\'s plan for revenge against Carminha?', 'difficulty' => 1, 'weight' => 107, 'alternatives' => [
                    ['id' => '9f2cfc3b-dc5e-5c4c-aa16-341ff223d394', 'description' => 'Sai de Baixo', 'correct_answer' => false],
                    ['id' => '81cb77d5-7626-5807-9199-ddf74a32fe6b', 'description' => 'The Normals', 'correct_answer' => false],
                    ['id' => '2e7da698-5ebc-5da7-8508-91f8294de92a', 'description' => 'Chaves', 'correct_answer' => false],
                    ['id' => 'fa45a1bd-71f8-524d-859c-67e6eb40aaa9', 'description' => 'Avenida Brasil', 'correct_answer' => true],
                    ['id' => '30543b0d-6a50-5ca4-a857-d474f89e116e', 'description' => 'El Chapulín Colorado', 'correct_answer' => false]
                ]],
        ['id' => '2e7ca2df-0642-501d-a7d0-e4e49b60dd04', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which Brazilian sitcom is set mainly in the apartment of Vavá\'s family?', 'difficulty' => 1, 'weight' => 168, 'alternatives' => [
                    ['id' => '5511be36-a07d-56b1-ab67-ff630761a16c', 'description' => '3%', 'correct_answer' => false],
                    ['id' => '80355c30-c461-57ee-81ff-1b6dae81efc3', 'description' => 'Avenida Brasil', 'correct_answer' => false],
                    ['id' => '8b5a131e-9c31-514d-80ea-4b8e1c9f278e', 'description' => 'Sai de Baixo', 'correct_answer' => true],
                    ['id' => '6b4ba72b-08d6-5ad5-8076-225d4d8e3736', 'description' => 'Tapas & Beijos', 'correct_answer' => false],
                    ['id' => '5389c4e3-6cb3-525e-a613-63b889f549a1', 'description' => 'El Chapulín Colorado', 'correct_answer' => false]
                ]],
        ['id' => '2a7b9371-9b7a-5d13-8a62-5a397e1fb51a', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which Brazilian comedy follows Rui and Vani in absurd everyday situations?', 'difficulty' => 1, 'weight' => 132, 'alternatives' => [
                    ['id' => '51780592-c3e9-5760-b6ad-08dfd73dfd06', 'description' => 'Invisible City', 'correct_answer' => false],
                    ['id' => '24d1ff5b-362f-5549-b06e-fc370bcec17f', 'description' => 'El Chapulín Colorado', 'correct_answer' => false],
                    ['id' => 'eb8a9af2-8be8-5486-928f-3440f68ad42b', 'description' => 'The Great Family', 'correct_answer' => false],
                    ['id' => '3c0192af-f311-5b5f-980a-32debb9dd85d', 'description' => 'The Normals', 'correct_answer' => true],
                    ['id' => '2cba46f4-6f8e-5f7a-b3c9-b0f659c0fc15', 'description' => 'Avenida Brasil', 'correct_answer' => false]
                ]],
        ['id' => '4593f3c3-9dd2-5a33-bbd1-13af13760a0c', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which Brazilian comedy follows two women working at a bridal shop?', 'difficulty' => 1, 'weight' => 122, 'alternatives' => [
                    ['id' => 'bbb43b28-306e-56c5-86b2-aa22d1a469c6', 'description' => 'Invisible City', 'correct_answer' => false],
                    ['id' => 'dea2f14f-92d7-51b7-9770-db81acadf392', 'description' => 'Tapas & Beijos', 'correct_answer' => true],
                    ['id' => '3bd62848-ebea-5283-ab91-251601c90fc5', 'description' => 'El Chapulín Colorado', 'correct_answer' => false],
                    ['id' => 'ddc4bf2d-e33a-52bb-837d-48cef147719e', 'description' => '3%', 'correct_answer' => false],
                    ['id' => '9e33817d-5805-5f37-bc7e-b8e3448ed185', 'description' => 'Under Pressure', 'correct_answer' => false]
                ]],
        ['id' => '5c8a85c2-db39-59a7-a2c7-97ba7a748475', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which David Simon drama examines institutions in Baltimore, including police and politics?', 'difficulty' => 2, 'weight' => 390, 'alternatives' => [
                    ['id' => '71e59967-72cc-5921-9c00-a14aa4e5ca63', 'description' => 'The Sopranos', 'correct_answer' => false],
                    ['id' => '47393408-6f33-55ab-b5d9-9f51e7b3abc8', 'description' => 'Fargo', 'correct_answer' => false],
                    ['id' => '36fb9fda-2743-5ddc-bd1f-f8d7c2a0cef2', 'description' => 'Sons of Anarchy', 'correct_answer' => false],
                    ['id' => 'c4b45252-44f9-5047-bb42-e5f14a76b8f1', 'description' => 'The Wire', 'correct_answer' => true],
                    ['id' => '251b153e-a0f1-531f-a6ec-812c8f774717', 'description' => 'Better Call Saul', 'correct_answer' => false]
                ]],
        ['id' => '3906673f-3d13-5beb-b075-3c50bd48f230', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which crime anthology is set mainly in Minnesota and shares thematic links with the film?', 'difficulty' => 2, 'weight' => 260, 'alternatives' => [
                    ['id' => '7f338779-b1a6-5fe5-8b38-cc2c51a2bdd4', 'description' => 'Sons of Anarchy', 'correct_answer' => false],
                    ['id' => 'a9bccce2-d241-52d3-ab91-7f7389cea42d', 'description' => 'Better Call Saul', 'correct_answer' => false],
                    ['id' => 'd425b84e-2e5c-51c1-89b4-789c36eb0b9d', 'description' => 'Peaky Blinders', 'correct_answer' => false],
                    ['id' => 'ba7e216f-fb94-52fd-b4f1-5504295de1fd', 'description' => 'Mad Men', 'correct_answer' => false],
                    ['id' => '7c091847-500a-5a05-8ca1-1e77d6a5df40', 'description' => 'Fargo', 'correct_answer' => true]
                ]],
        ['id' => '18329fe7-5143-5127-84d0-dd91b310172e', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which series follows Jimmy McGill\'s transformation into lawyer Saul Goodman before Breaking Bad?', 'difficulty' => 2, 'weight' => 306, 'alternatives' => [
                    ['id' => 'cea2b2c8-5bbd-5f03-a5da-16e9fcff6899', 'description' => 'Better Call Saul', 'correct_answer' => true],
                    ['id' => '7166421b-1fdc-5521-a542-8cf7e73541e5', 'description' => 'Fargo', 'correct_answer' => false],
                    ['id' => '16da7ebb-6c27-597f-b821-f2bede5feb93', 'description' => 'The Sopranos', 'correct_answer' => false],
                    ['id' => 'eda24079-12e4-58e9-90ab-7d0b8521332e', 'description' => 'Mad Men', 'correct_answer' => false],
                    ['id' => 'd06785df-8278-5e69-8344-bd2a1a3c50dd', 'description' => 'True Detective', 'correct_answer' => false]
                ]],
        ['id' => 'ad6c65c8-305c-589e-8878-d2949769f96c', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which crime anthology began with a season starring Rust Cohle and Marty Hart?', 'difficulty' => 2, 'weight' => 386, 'alternatives' => [
                    ['id' => '21a7e872-9962-58fa-909b-8c39064622d2', 'description' => 'Better Call Saul', 'correct_answer' => false],
                    ['id' => 'b9ba8686-1f1a-5326-a61d-ae2b6010113d', 'description' => 'The Wire', 'correct_answer' => false],
                    ['id' => '0f516c67-b715-5d01-8cbe-43c0dd5eb89e', 'description' => 'True Detective', 'correct_answer' => true],
                    ['id' => 'e186b588-8232-5cb4-9848-5dbdafe894e9', 'description' => 'Boardwalk Empire', 'correct_answer' => false],
                    ['id' => '39692b65-de38-5204-b171-52be514944f9', 'description' => 'The Sopranos', 'correct_answer' => false]
                ]],
        ['id' => '2f8e4c5e-cd3a-51cb-a4f7-aeaed789a456', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which series follows the Shelby crime family in Birmingham after World War I?', 'difficulty' => 2, 'weight' => 213, 'alternatives' => [
                    ['id' => 'b94c3d50-04d6-59de-a9b5-8ba63ce8d486', 'description' => 'True Detective', 'correct_answer' => false],
                    ['id' => '6273cd20-5cd1-5f5a-a793-fbfb84039d72', 'description' => 'Fargo', 'correct_answer' => false],
                    ['id' => '432dd680-20d6-5ac1-b2a3-93523dcf5401', 'description' => 'Peaky Blinders', 'correct_answer' => true],
                    ['id' => 'ec90e0f8-c4b9-56d3-9b8b-d2996582ad05', 'description' => 'Sons of Anarchy', 'correct_answer' => false],
                    ['id' => 'fc05e835-7a59-522b-a8ef-7cccc6ad5827', 'description' => 'Ozark', 'correct_answer' => false]
                ]],
        ['id' => '93c73c56-d163-5270-b5bb-3ae7d10bf7d2', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which series follows financial adviser Marty Byrde as he launders money for a cartel?', 'difficulty' => 2, 'weight' => 232, 'alternatives' => [
                    ['id' => 'c765f9fc-ca9b-5a21-a0b8-9dd685d3efea', 'description' => 'Ozark', 'correct_answer' => true],
                    ['id' => '134ce3e8-49b6-52e3-b362-4f3e2ba685e7', 'description' => 'True Detective', 'correct_answer' => false],
                    ['id' => '4184ff93-50b7-5a5c-8ee9-a8bb5d0e3d80', 'description' => 'The Wire', 'correct_answer' => false],
                    ['id' => 'e4e4a9d6-5b78-5957-9305-7e37ca03f3c4', 'description' => 'Boardwalk Empire', 'correct_answer' => false],
                    ['id' => '18a61c92-a15c-5543-829f-b2c8246e2581', 'description' => 'Mad Men', 'correct_answer' => false]
                ]],
        ['id' => '5772814a-a92b-5d7f-b9ee-c074c3c5073f', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which series follows politician and bootlegger Enoch Thompson during Prohibition?', 'difficulty' => 2, 'weight' => 226, 'alternatives' => [
                    ['id' => '31190178-dffa-585c-8f9a-12a4e428510b', 'description' => 'Better Call Saul', 'correct_answer' => false],
                    ['id' => 'c5a01d21-3cef-5ac9-8ce5-a202ca4d3bd2', 'description' => 'Mad Men', 'correct_answer' => false],
                    ['id' => 'c1992dba-bd8d-5635-82b3-cdfb6946816e', 'description' => 'Boardwalk Empire', 'correct_answer' => true],
                    ['id' => 'e029b84b-381a-5333-9155-a6e0616f8587', 'description' => 'Ozark', 'correct_answer' => false],
                    ['id' => '6fcabdf6-965b-585f-a24b-e0b551947d56', 'description' => 'The Wire', 'correct_answer' => false]
                ]],
        ['id' => '9a07e906-941a-5921-8eca-fb7b4d2580a6', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which drama follows advertising executives at a New York agency during the 1960s?', 'difficulty' => 2, 'weight' => 337, 'alternatives' => [
                    ['id' => 'ba61db47-f0a4-5375-8277-fb78bf8a6e1a', 'description' => 'Mad Men', 'correct_answer' => true],
                    ['id' => '9b8d7ef6-9eae-5c28-a311-e1cba8102b37', 'description' => 'Sons of Anarchy', 'correct_answer' => false],
                    ['id' => '8e829b15-2564-5f12-a777-d08ef9cc5d58', 'description' => 'Ozark', 'correct_answer' => false],
                    ['id' => 'fe5be2c1-d40c-5539-b08f-9ad240212f71', 'description' => 'The Sopranos', 'correct_answer' => false],
                    ['id' => '175ba803-2325-5dbe-8ca0-91e31600198d', 'description' => 'Better Call Saul', 'correct_answer' => false]
                ]],
        ['id' => '0ec540fc-784a-55c3-9451-e29ec625414d', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which series follows an FBI division investigating unexplained scientific phenomena?', 'difficulty' => 2, 'weight' => 350, 'alternatives' => [
                    ['id' => '4364ad92-a6ec-5fd7-973d-6bc30ad58c13', 'description' => 'The Handmaid\'s Tale', 'correct_answer' => false],
                    ['id' => '4ecf6f15-e730-5759-ab2e-a4990879fc8b', 'description' => 'Sense8', 'correct_answer' => false],
                    ['id' => '6eec6592-6353-5398-bed1-bc1ba8a6c02c', 'description' => 'The Expanse', 'correct_answer' => false],
                    ['id' => '048df116-14d7-538a-ac24-3d19ed7e98a6', 'description' => 'Fringe', 'correct_answer' => true],
                    ['id' => '454567b9-47c3-52bf-99d0-fa025d7d4f86', 'description' => 'Severance', 'correct_answer' => false]
                ]],
        ['id' => 'a98f85d5-73cd-54c6-98bf-270bb8edd6d1', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which series follows human survivors pursued by Cylons after the Twelve Colonies are destroyed?', 'difficulty' => 2, 'weight' => 273, 'alternatives' => [
                    ['id' => '57396401-e7b3-5780-9969-378a735309f4', 'description' => 'Westworld', 'correct_answer' => false],
                    ['id' => '28c0db7a-be79-5c08-a42e-f5956a5eb3b2', 'description' => 'Fringe', 'correct_answer' => false],
                    ['id' => '559eb61b-4a84-5371-a671-25c369488371', 'description' => 'Battlestar Galactica', 'correct_answer' => true],
                    ['id' => '0c13d536-3c9b-57a6-b33a-fd9c3bde20d5', 'description' => 'Dark', 'correct_answer' => false],
                    ['id' => '5edbe47c-139c-5da1-bd5f-2a89e3a33275', 'description' => 'The Expanse', 'correct_answer' => false]
                ]],
        ['id' => '82d70154-31e1-5a41-ba85-e145c7859784', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which series follows Prairie Johnson after she returns from a seven-year disappearance?', 'difficulty' => 2, 'weight' => 202, 'alternatives' => [
                    ['id' => 'b56a3017-81bb-561c-9efa-2bd54a993955', 'description' => 'Westworld', 'correct_answer' => false],
                    ['id' => '4430b6b9-0039-50c5-9ac0-4cfbcd3a5cd4', 'description' => 'Dark', 'correct_answer' => false],
                    ['id' => '1914715b-beb8-5c97-b266-6a1390c3da9f', 'description' => 'The OA', 'correct_answer' => true],
                    ['id' => 'f5a5d3ed-bf3c-5584-9f89-ff2663053f67', 'description' => 'Battlestar Galactica', 'correct_answer' => false],
                    ['id' => '3496f116-c707-50df-9bff-15589968ab5b', 'description' => 'The Handmaid\'s Tale', 'correct_answer' => false]
                ]],
        ['id' => '35867247-5b4f-55a2-9e13-8e4c67be5b1c', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which science-fiction series follows political tensions among Earth, Mars, and the Asteroid Belt?', 'difficulty' => 2, 'weight' => 346, 'alternatives' => [
                    ['id' => '33304744-5527-5af9-9015-9e0ad3832621', 'description' => 'Dark', 'correct_answer' => false],
                    ['id' => 'a16e511f-5dcf-5a22-881b-1b8bef0fd5dd', 'description' => 'Battlestar Galactica', 'correct_answer' => false],
                    ['id' => 'c7693dda-0ad3-5558-a8c3-2df4c9104fdf', 'description' => 'Orphan Black', 'correct_answer' => false],
                    ['id' => 'a2051822-854e-599d-8d9e-a724407010e5', 'description' => 'The Expanse', 'correct_answer' => true],
                    ['id' => 'c7a654c5-5437-5b42-a46f-01435c9bbfec', 'description' => 'Sense8', 'correct_answer' => false]
                ]],
        ['id' => '3579269b-68a0-5642-9311-a048c17e0706', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which series follows eight strangers who become mentally and emotionally connected?', 'difficulty' => 2, 'weight' => 366, 'alternatives' => [
                    ['id' => '38567c87-69a7-5e45-b511-8f0b22ff4367', 'description' => 'The Expanse', 'correct_answer' => false],
                    ['id' => '218c1b98-fdf7-5dbc-a58c-f2384cc8102a', 'description' => 'Battlestar Galactica', 'correct_answer' => false],
                    ['id' => 'eb48e471-9d92-509c-83c5-15aa5e483156', 'description' => 'Sense8', 'correct_answer' => true],
                    ['id' => '99dc0f70-bcbf-5239-9614-ce985439f8b7', 'description' => 'The Handmaid\'s Tale', 'correct_answer' => false],
                    ['id' => '11a018f7-8c37-5757-b5b9-82080c1ef04f', 'description' => 'The OA', 'correct_answer' => false]
                ]],
        ['id' => 'eb607b18-a589-53dd-8d00-93e464dd679d', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which German series begins with a child\'s disappearance in Winden and involves time travel?', 'difficulty' => 2, 'weight' => 306, 'alternatives' => [
                    ['id' => 'ec69ef03-b1ee-5a0b-8ab5-e1e809074318', 'description' => 'Severance', 'correct_answer' => false],
                    ['id' => '3aafdc63-8a42-5dd2-b86a-6687039b2903', 'description' => 'The Handmaid\'s Tale', 'correct_answer' => false],
                    ['id' => '5277e3e3-6c95-5d77-8a9f-76860850a555', 'description' => 'Fringe', 'correct_answer' => false],
                    ['id' => 'b63a3d37-594f-5f39-944b-18c1b5df706d', 'description' => 'Dark', 'correct_answer' => true],
                    ['id' => '8b680f1f-be34-5e5b-a8ef-562ad4c7a60c', 'description' => 'Orphan Black', 'correct_answer' => false]
                ]],
        ['id' => 'd118fc94-1472-5863-a87a-1422440bcbc4', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which series follows Sarah Manning after she discovers she is one of several genetically identical women?', 'difficulty' => 2, 'weight' => 325, 'alternatives' => [
                    ['id' => 'd3645858-dfbf-5069-a585-9261b6870116', 'description' => 'Battlestar Galactica', 'correct_answer' => false],
                    ['id' => '1a04ecf6-aca6-5c93-a32d-db33b646aab2', 'description' => 'Dark', 'correct_answer' => false],
                    ['id' => 'c89998c9-f0f4-54b9-a6d2-7a63200f5ca7', 'description' => 'The Handmaid\'s Tale', 'correct_answer' => false],
                    ['id' => 'd92b1d2d-d0b6-5f61-98d1-0023bffe8b79', 'description' => 'Westworld', 'correct_answer' => false],
                    ['id' => '371ec789-9dd1-5a24-9e14-5874c2552a3f', 'description' => 'Orphan Black', 'correct_answer' => true]
                ]],
        ['id' => '195d07e6-c9d4-54a9-8f8c-ee615867d048', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which series adapts Margaret Atwood\'s novel about a theocratic society that subjugates fertile women?', 'difficulty' => 2, 'weight' => 350, 'alternatives' => [
                    ['id' => 'aaf094c1-e5ac-5223-9126-d913e3eaaabe', 'description' => 'Fringe', 'correct_answer' => false],
                    ['id' => 'd722c1d3-5dbd-542a-999d-f1cf5daf5f91', 'description' => 'Sense8', 'correct_answer' => false],
                    ['id' => '317ee0f3-8fbc-571d-a3c9-6ac729706d19', 'description' => 'Orphan Black', 'correct_answer' => false],
                    ['id' => '2e6811ef-8199-510d-89a7-f53f70b4c231', 'description' => 'Dark', 'correct_answer' => false],
                    ['id' => 'e7023392-7dfd-5586-965d-11124d889dbe', 'description' => 'The Handmaid\'s Tale', 'correct_answer' => true]
                ]],
        ['id' => 'f6ce0529-1c84-521a-91c0-26bb1d38a25b', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which miniseries follows investigators connecting rape cases after a young woman is disbelieved?', 'difficulty' => 2, 'weight' => 364, 'alternatives' => [
                    ['id' => 'a2b0e886-dcee-5666-a9d4-215304d1e99b', 'description' => 'The Queen\'s Gambit', 'correct_answer' => false],
                    ['id' => 'dc64b1e5-3f9b-51f0-ae01-0d7e14238292', 'description' => 'Olive Kitteridge', 'correct_answer' => false],
                    ['id' => '8dff9e10-e2e3-544a-8774-d963fc7a4415', 'description' => 'Chernobyl', 'correct_answer' => false],
                    ['id' => '1ec0c5e3-54c2-5518-a1cf-83040d203088', 'description' => 'Unbelievable', 'correct_answer' => true],
                    ['id' => 'da33d1e8-faa7-5e04-ba59-9d873c4b9eef', 'description' => 'When They See Us', 'correct_answer' => false]
                ]],
        ['id' => 'e81dfdea-07da-58d1-9288-31e804fe4482', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which miniseries follows a young man accused of murder after a night in New York?', 'difficulty' => 2, 'weight' => 248, 'alternatives' => [
                    ['id' => '89e79d6d-3211-5153-917c-29825ceca8b1', 'description' => 'Unbelievable', 'correct_answer' => false],
                    ['id' => 'ac318ef9-1ef8-5ad6-af00-6bf55790bdb6', 'description' => 'When They See Us', 'correct_answer' => false],
                    ['id' => '4dfe2332-42af-53f6-b3ab-a87cc726081a', 'description' => 'Olive Kitteridge', 'correct_answer' => false],
                    ['id' => 'e218df6a-7f41-5c8c-bb58-c82c086c1172', 'description' => 'The Queen\'s Gambit', 'correct_answer' => false],
                    ['id' => 'fbf00333-5e14-598f-8fde-256d96068ffb', 'description' => 'The Night Of', 'correct_answer' => true]
                ]],
        ['id' => '4ec5f885-2d46-557e-8d76-5b2a03a959ec', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which miniseries follows Alex, a young mother working as a cleaner to escape an abusive relationship?', 'difficulty' => 2, 'weight' => 382, 'alternatives' => [
                    ['id' => 'd1e02cd1-af29-5972-874d-224f7fe7545d', 'description' => 'Dopesick', 'correct_answer' => false],
                    ['id' => '15cef99b-3764-546c-a193-d9400aa8ee16', 'description' => 'The Night Of', 'correct_answer' => false],
                    ['id' => 'c9b6ffca-f72d-5291-a31f-5ecb7beb2344', 'description' => 'Maid', 'correct_answer' => true],
                    ['id' => 'f21f422e-e097-5148-950f-b012533f2924', 'description' => 'When They See Us', 'correct_answer' => false],
                    ['id' => '0ba342c3-f433-5953-81d3-f66bcac04199', 'description' => 'The Pacific', 'correct_answer' => false]
                ]],
        ['id' => '609b73f8-565f-5e3d-84fb-48813ad21b71', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which miniseries dramatizes the 1986 nuclear disaster and its aftermath?', 'difficulty' => 2, 'weight' => 249, 'alternatives' => [
                    ['id' => '535bca0d-5237-5332-a75f-d1128f4e2221', 'description' => 'Dopesick', 'correct_answer' => false],
                    ['id' => 'c4988a6e-6266-5c61-b624-1c5c43f98c0a', 'description' => 'Band of Brothers', 'correct_answer' => false],
                    ['id' => '70e4a06a-9e6e-50fc-b9f6-b06d11559c94', 'description' => 'Unbelievable', 'correct_answer' => false],
                    ['id' => '12a3a490-aba0-5c78-9aed-d1b873b2f4a5', 'description' => 'Chernobyl', 'correct_answer' => true],
                    ['id' => 'decaaf5e-e70a-5611-9132-5b69b7d508f3', 'description' => 'Olive Kitteridge', 'correct_answer' => false]
                ]],
        ['id' => '60fd08b7-8914-5b19-8ec5-16dcfc04a2c5', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which miniseries dramatizes the opioid crisis and the marketing of OxyContin?', 'difficulty' => 2, 'weight' => 373, 'alternatives' => [
                    ['id' => 'a3254b08-bbd6-5a8c-b169-57a992350e46', 'description' => 'The Pacific', 'correct_answer' => false],
                    ['id' => '2a1bf012-eeac-5f30-bf0e-68389cff1479', 'description' => 'Dopesick', 'correct_answer' => true],
                    ['id' => 'b4dc1f9e-b344-5af2-b0bb-72acaeef5f53', 'description' => 'Unbelievable', 'correct_answer' => false],
                    ['id' => '792149ba-aa32-53d4-ad8b-e291f0022ac1', 'description' => 'Olive Kitteridge', 'correct_answer' => false],
                    ['id' => 'd1aaf704-639b-5932-bda6-e0d33a56435a', 'description' => 'The Night Of', 'correct_answer' => false]
                ]],
        ['id' => '23196684-d057-5e87-a1ca-4b8b372a4bad', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which miniseries follows chess prodigy Beth Harmon during the Cold War?', 'difficulty' => 2, 'weight' => 360, 'alternatives' => [
                    ['id' => '54e8ce2e-37fa-5aa5-a9dc-65898230e05f', 'description' => 'The Queen\'s Gambit', 'correct_answer' => true],
                    ['id' => '78341296-9ba2-543d-ab8e-7e1cf125f694', 'description' => 'Unbelievable', 'correct_answer' => false],
                    ['id' => 'e210aa4b-f2ad-5a4d-938e-1b81d55c7acb', 'description' => 'Maid', 'correct_answer' => false],
                    ['id' => 'a8947a67-e06e-5909-bf90-a08adb9216bf', 'description' => 'Band of Brothers', 'correct_answer' => false],
                    ['id' => 'c665dfda-8952-548c-9189-31abb7d9fbfd', 'description' => 'Chernobyl', 'correct_answer' => false]
                ]],
        ['id' => '7ab573f4-f839-5e72-8f15-e324bd6fb29d', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which miniseries follows Easy Company during World War II?', 'difficulty' => 2, 'weight' => 365, 'alternatives' => [
                    ['id' => 'cc8bfcf5-20ef-574b-88d6-476420843949', 'description' => 'Olive Kitteridge', 'correct_answer' => false],
                    ['id' => '95d2deb2-5362-5f32-b2b0-dadad480aaac', 'description' => 'When They See Us', 'correct_answer' => false],
                    ['id' => 'dd7f5f6b-f852-54f0-91f7-d68e582d31d5', 'description' => 'Maid', 'correct_answer' => false],
                    ['id' => '7387a55a-2384-5a39-9bec-79fd97626498', 'description' => 'Band of Brothers', 'correct_answer' => true],
                    ['id' => '8c3fcb30-d867-56c6-a955-5cc3b34d671b', 'description' => 'Chernobyl', 'correct_answer' => false]
                ]],
        ['id' => 'dd869bd7-60d5-51e9-bdf9-f5537e034a93', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which miniseries dramatizes the case of the teenagers known as the Central Park Five?', 'difficulty' => 2, 'weight' => 218, 'alternatives' => [
                    ['id' => '47234797-e4c2-58b3-8d12-b4a862bd5ec6', 'description' => 'The Queen\'s Gambit', 'correct_answer' => false],
                    ['id' => '34188cd7-ab2f-5367-8260-045b91c8aa8b', 'description' => 'Maid', 'correct_answer' => false],
                    ['id' => '6a1fa962-ecb2-50bf-abe6-699356c2341a', 'description' => 'When They See Us', 'correct_answer' => true],
                    ['id' => '669d14f2-44c8-53c2-a199-5a294e1466c1', 'description' => 'Olive Kitteridge', 'correct_answer' => false],
                    ['id' => '3973b77c-21b9-55a7-86b0-eee788bc8b47', 'description' => 'Unbelievable', 'correct_answer' => false]
                ]],
        ['id' => '40fd81dd-69b4-5757-8ada-b00522be5e1c', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which series follows an Egyptian-American man balancing faith, family, and modern life?', 'difficulty' => 2, 'weight' => 307, 'alternatives' => [
                    ['id' => '83403ae4-2157-573f-8b2f-97ec6e717a0e', 'description' => 'Barry', 'correct_answer' => false],
                    ['id' => '7bf5b52f-5639-52cc-b2ea-de0f7b33e981', 'description' => 'Reservation Dogs', 'correct_answer' => false],
                    ['id' => 'd9fd49a7-ad38-5cf2-b634-2b6d4de8f021', 'description' => 'Insecure', 'correct_answer' => false],
                    ['id' => '9d22c809-3689-59c3-ac83-60b02a5723cd', 'description' => 'Californication', 'correct_answer' => false],
                    ['id' => '6f3e576d-a621-5b62-8eab-ac88bd5dec63', 'description' => 'Ramy', 'correct_answer' => true]
                ]],
        ['id' => 'f229aa73-9881-5b89-9522-c22db6da1e23', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which comedy-drama follows a hitman who begins taking acting classes in Los Angeles?', 'difficulty' => 2, 'weight' => 360, 'alternatives' => [
                    ['id' => 'aa355362-7ed2-5fb3-8a1b-3686bc71f689', 'description' => 'Atlanta', 'correct_answer' => false],
                    ['id' => '95da5f36-6c87-5253-9d8b-fe1a784b6564', 'description' => 'Louie', 'correct_answer' => false],
                    ['id' => 'a15ed0b9-7bb0-5c98-95af-68567dca0893', 'description' => 'Barry', 'correct_answer' => true],
                    ['id' => '70544de1-66fa-52c4-acbc-492753758fb6', 'description' => 'Fleabag', 'correct_answer' => false],
                    ['id' => '91bb0d7c-338d-55b7-a486-ebd883b21b0f', 'description' => 'Girls', 'correct_answer' => false]
                ]],
        ['id' => '17b45f80-8014-5e29-b123-dcfaed9eb883', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which comedy-drama follows Dev, an actor of Indian descent living in New York?', 'difficulty' => 2, 'weight' => 259, 'alternatives' => [
                    ['id' => '966956b4-6c68-5f9d-9759-0116e24dd6ed', 'description' => 'Ramy', 'correct_answer' => false],
                    ['id' => 'a5a86d1b-c883-5abe-acee-6c6b76b2cd52', 'description' => 'Californication', 'correct_answer' => false],
                    ['id' => '2c6eb9c0-8982-5d63-aafc-183d7f2fc019', 'description' => 'Girls', 'correct_answer' => false],
                    ['id' => 'f9fe40a3-e696-5d68-98db-f62bf74f3aba', 'description' => 'Barry', 'correct_answer' => false],
                    ['id' => 'c7c62c41-1b74-535e-ba53-7c669ee2e61f', 'description' => 'Master of None', 'correct_answer' => true]
                ]],
        ['id' => 'dfc32541-5886-5ada-a5cf-ddfdddd5a4de', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which series follows four young women trying to find their way in New York?', 'difficulty' => 2, 'weight' => 367, 'alternatives' => [
                    ['id' => '771d5121-9182-56a7-8585-d8f482315512', 'description' => 'Louie', 'correct_answer' => false],
                    ['id' => '70d7f773-5ca2-55e6-91c0-a60fa3dda46c', 'description' => 'Ramy', 'correct_answer' => false],
                    ['id' => '709f7c85-e652-5543-a08a-972e8042d076', 'description' => 'Girls', 'correct_answer' => true],
                    ['id' => '39eac348-50a8-5562-a2c2-117de316c29a', 'description' => 'Californication', 'correct_answer' => false],
                    ['id' => 'cd15b7b7-e0ca-5646-8900-736c64ec9ca5', 'description' => 'Master of None', 'correct_answer' => false]
                ]],
        ['id' => 'ce610ae7-7477-587a-8e40-1533535941fe', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which comedy series follows a fictionalized version of comedian Louis C.K.\'s life?', 'difficulty' => 2, 'weight' => 292, 'alternatives' => [
                    ['id' => '0dfac5f1-1eaf-54a8-9b90-715b3111d169', 'description' => 'Louie', 'correct_answer' => true],
                    ['id' => '1e211b5b-9343-5e39-b7c0-942c75d98a79', 'description' => 'Master of None', 'correct_answer' => false],
                    ['id' => '00ecbcd7-a585-50ca-af11-4d83eb1a7998', 'description' => 'Ramy', 'correct_answer' => false],
                    ['id' => '99fa22bf-a7be-598f-bf64-cd8db8d6ee0b', 'description' => 'Girls', 'correct_answer' => false],
                    ['id' => '19d04c0b-423a-566d-982f-b5d6a3795009', 'description' => 'Insecure', 'correct_answer' => false]
                ]],
        ['id' => 'c2a777bd-7c07-5606-84d3-fdfd3f275648', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which series follows Earn and his cousin Paper Boi as they pursue a music career?', 'difficulty' => 2, 'weight' => 246, 'alternatives' => [
                    ['id' => '00b35a58-ebd5-5c58-8e2d-2947d8fed276', 'description' => 'Ramy', 'correct_answer' => false],
                    ['id' => 'd224bc3f-745e-5996-afb9-a2528552ef60', 'description' => 'Atlanta', 'correct_answer' => true],
                    ['id' => '193ef3af-8cc7-566f-987f-ddf75fd16a32', 'description' => 'Girls', 'correct_answer' => false],
                    ['id' => 'c7ce922e-6d58-5253-a62c-2e59cb1db38d', 'description' => 'Fleabag', 'correct_answer' => false],
                    ['id' => '5deb40b0-656e-5769-b42c-c5f44748434c', 'description' => 'Californication', 'correct_answer' => false]
                ]],
        ['id' => '96a79d72-6501-554c-a25c-dca1256559cd', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which British comedy-drama follows a London woman who often speaks directly to the camera?', 'difficulty' => 2, 'weight' => 209, 'alternatives' => [
                    ['id' => 'bc151cf7-0be6-57e5-8562-97c5ab7016f9', 'description' => 'Master of None', 'correct_answer' => false],
                    ['id' => 'da24ecbc-806b-5466-bd7f-89fffa914278', 'description' => 'Atlanta', 'correct_answer' => false],
                    ['id' => '5a993591-c31f-5256-8899-015c23e52f24', 'description' => 'Fleabag', 'correct_answer' => true],
                    ['id' => '86f09e30-6939-5752-bd3c-cbca7cdc2783', 'description' => 'Barry', 'correct_answer' => false],
                    ['id' => 'fd70945b-26f8-5254-807f-ea0301977ab1', 'description' => 'Insecure', 'correct_answer' => false]
                ]],
        ['id' => 'd1835fb5-8b52-5e59-a7ae-c1b20313604e', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which series follows writer Hank Moody amid career crises and relationships in Los Angeles?', 'difficulty' => 2, 'weight' => 227, 'alternatives' => [
                    ['id' => '9b48a756-95fd-5e12-a1ce-0e783f454818', 'description' => 'Californication', 'correct_answer' => true],
                    ['id' => '617fc776-ffed-5ba3-b67a-f1d87383f53f', 'description' => 'Ramy', 'correct_answer' => false],
                    ['id' => '33175a03-2228-5180-bf62-7e28c2901063', 'description' => 'Barry', 'correct_answer' => false],
                    ['id' => '92b02266-fcdb-5170-af49-e9a27eb822cf', 'description' => 'Fleabag', 'correct_answer' => false],
                    ['id' => '031a3539-c6d7-5f27-9069-a5b6eeb44426', 'description' => 'Reservation Dogs', 'correct_answer' => false]
                ]],
        ['id' => '7321396d-8bb2-502b-9290-aad4bd759158', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which series follows a group of marginalized heroes led by a scientist known as the Chief?', 'difficulty' => 2, 'weight' => 278, 'alternatives' => [
                    ['id' => '9940c0e0-6423-5de6-a79c-f9462386c63e', 'description' => 'The Last of Us', 'correct_answer' => false],
                    ['id' => '635a4756-b47b-511a-8756-b3003ebca2e0', 'description' => 'Peacemaker', 'correct_answer' => false],
                    ['id' => '2d0c74ad-f234-5f7e-8224-014dfed85e72', 'description' => 'Arcane', 'correct_answer' => false],
                    ['id' => 'dcda1fa1-b64f-58e9-a905-39919135ce26', 'description' => 'Watchmen', 'correct_answer' => false],
                    ['id' => 'faac9fba-4c58-50b9-aeee-a2dd2190d5f8', 'description' => 'Doom Patrol', 'correct_answer' => true]
                ]],
        ['id' => '864a46e2-5d0b-5a39-ae1c-7b1d03f60cc2', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which HBO miniseries continues the graphic novel\'s universe in Tulsa?', 'difficulty' => 2, 'weight' => 341, 'alternatives' => [
                    ['id' => '829c18ef-34e9-5a16-aa04-b7fc639dc9e4', 'description' => 'Arcane', 'correct_answer' => false],
                    ['id' => 'f6d47d26-0d04-505d-be59-595e7e2f370a', 'description' => 'Doom Patrol', 'correct_answer' => false],
                    ['id' => '1f5e09e9-f1a6-5436-b3fe-949b95ff737d', 'description' => 'Watchmen', 'correct_answer' => true],
                    ['id' => 'da11763c-1da0-5d71-ac17-d702fef3e99c', 'description' => 'Legion', 'correct_answer' => false],
                    ['id' => '3a9c3aeb-d0c3-5a91-90eb-d6398c112c7b', 'description' => 'Jessica Jones', 'correct_answer' => false]
                ]],
        ['id' => 'd1542458-a27c-561f-8c05-3127e26ef35a', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which animated series based on League of Legends follows Piltover and Zaun?', 'difficulty' => 2, 'weight' => 354, 'alternatives' => [
                    ['id' => '9c1902dc-c6a6-56be-ac65-941338d428c6', 'description' => 'Arcane', 'correct_answer' => true],
                    ['id' => 'f63a2b01-dc4e-5f8f-ac39-ff6420cf9bf9', 'description' => 'Daredevil', 'correct_answer' => false],
                    ['id' => '6a0f44af-5208-54e8-9829-71e23a8f9f7b', 'description' => 'Watchmen', 'correct_answer' => false],
                    ['id' => '5cee29b8-b71a-5a7a-9617-92d59eba77dd', 'description' => 'The Boys', 'correct_answer' => false],
                    ['id' => 'd4243143-3346-5d52-a252-5114e4f20646', 'description' => 'Legion', 'correct_answer' => false]
                ]],
        ['id' => '6068d0e1-68b8-53c2-8d94-fe8c70200b4a', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which series follows a superpowered private investigator in New York?', 'difficulty' => 2, 'weight' => 290, 'alternatives' => [
                    ['id' => '1803d63c-b0f6-5469-be81-00b721ff11c6', 'description' => 'Daredevil', 'correct_answer' => false],
                    ['id' => '7e169365-3907-5019-8128-3d0da0935786', 'description' => 'Jessica Jones', 'correct_answer' => true],
                    ['id' => '17d63e31-eb6b-5648-bc2c-364255e919a1', 'description' => 'Peacemaker', 'correct_answer' => false],
                    ['id' => 'efdf678b-d27a-5e9d-b435-d0bdc19c1002', 'description' => 'Legion', 'correct_answer' => false],
                    ['id' => '79a7ae96-c84a-50f7-8a1a-4cdb52be1866', 'description' => 'Watchmen', 'correct_answer' => false]
                ]],
        ['id' => '2ed63603-9777-5043-8f33-a98252565aed', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which series follows Matt Murdock, a blind lawyer who fights crime in Hell\'s Kitchen?', 'difficulty' => 2, 'weight' => 260, 'alternatives' => [
                    ['id' => 'ac603475-cb56-58b7-bc98-d1363dbeb289', 'description' => 'Legion', 'correct_answer' => false],
                    ['id' => '9d3e960a-89d2-5fa9-b762-9b9c026b8df2', 'description' => 'Peacemaker', 'correct_answer' => false],
                    ['id' => '0c91f6f5-1c3b-5698-b668-b4df34c982af', 'description' => 'The Last of Us', 'correct_answer' => false],
                    ['id' => 'd6926b3b-4843-548b-8f4d-02fcd639bda7', 'description' => 'Jessica Jones', 'correct_answer' => false],
                    ['id' => '735a8c60-8a71-59e2-b814-9d1790283a0f', 'description' => 'Daredevil', 'correct_answer' => true]
                ]],
        ['id' => 'a8ff41d4-0457-56c0-8353-be511c8beb18', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which animated series follows Mark Grayson, the son of a powerful superhero?', 'difficulty' => 2, 'weight' => 256, 'alternatives' => [
                    ['id' => '38d97f62-2a40-525e-bd30-cb9eb38063a4', 'description' => 'Peacemaker', 'correct_answer' => false],
                    ['id' => 'a2dccc31-cc82-5f86-8c13-106bdb9b36b8', 'description' => 'Invincible', 'correct_answer' => true],
                    ['id' => '99ca0aa0-ec82-565e-bf62-79bba482e0b2', 'description' => 'Legion', 'correct_answer' => false],
                    ['id' => '2fa8243d-c871-521e-a490-fde128fad34a', 'description' => 'Watchmen', 'correct_answer' => false],
                    ['id' => 'e9d2a023-eb41-5839-bce5-3a7167177839', 'description' => 'The Boys', 'correct_answer' => false]
                ]],
        ['id' => 'bb28016b-5e67-5c25-9db8-fe433032cb73', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which series follows a group trying to expose corrupt, corporate superheroes?', 'difficulty' => 2, 'weight' => 366, 'alternatives' => [
                    ['id' => 'd704a568-9eb2-5263-bc3f-a45136f6e57c', 'description' => 'Invincible', 'correct_answer' => false],
                    ['id' => '53cdf113-37c8-513e-831d-b29754ef5fbf', 'description' => 'Arcane', 'correct_answer' => false],
                    ['id' => 'e068b040-5fa9-5a24-af74-6970f53fa393', 'description' => 'Jessica Jones', 'correct_answer' => false],
                    ['id' => '8d633f88-f645-59d1-a6ec-16082c912a68', 'description' => 'Peacemaker', 'correct_answer' => false],
                    ['id' => '5fdc7099-120b-5503-9cda-0e3098f11dd0', 'description' => 'The Boys', 'correct_answer' => true]
                ]],
        ['id' => '79971ff5-33ee-5ae8-ab0f-7e6c4236e04c', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which series follows Christopher Smith, a vigilante obsessed with peace?', 'difficulty' => 2, 'weight' => 257, 'alternatives' => [
                    ['id' => '8d0c4997-7929-5595-ba0a-4aa653610d49', 'description' => 'Arcane', 'correct_answer' => false],
                    ['id' => 'e6f3353e-de19-50cc-ad27-5ade338fa6ab', 'description' => 'Jessica Jones', 'correct_answer' => false],
                    ['id' => '3e9ff40c-d476-507f-98db-6fd40b272831', 'description' => 'Daredevil', 'correct_answer' => false],
                    ['id' => '6ca6a2df-fef5-5a1c-9b5a-617648127970', 'description' => 'Peacemaker', 'correct_answer' => true],
                    ['id' => '4600bcfa-efb5-5d60-bb2b-4823dfc273b9', 'description' => 'Watchmen', 'correct_answer' => false]
                ]],
        ['id' => '8bb7ab01-7484-5172-8a32-e3ab9d697358', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which series set during the Great Depression follows a traveling carnival and a preacher?', 'difficulty' => 3, 'weight' => 532, 'alternatives' => [
                    ['id' => '816fb427-4775-5282-8449-9bafb2410fa0', 'description' => 'Deadwood', 'correct_answer' => false],
                    ['id' => '06c28bcf-95bd-5ba7-9b87-3f2d50c124fb', 'description' => 'The Leftovers', 'correct_answer' => false],
                    ['id' => '4be4772b-b5a1-5934-a617-7a8dd3b098c5', 'description' => 'Carnivàle', 'correct_answer' => true],
                    ['id' => '06f88dba-4a26-59e0-9644-9fa12cefa47d', 'description' => 'Twin Peaks', 'correct_answer' => false],
                    ['id' => 'fa8c8ded-8097-5f0a-bf52-cc6b68d59d67', 'description' => 'The Knick', 'correct_answer' => false]
                ]],
        ['id' => '9bdb823f-5bcc-592a-89c7-4a3919037457', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which drama follows the Fisher family, owners of a funeral home in Los Angeles?', 'difficulty' => 3, 'weight' => 420, 'alternatives' => [
                    ['id' => '29c34252-1588-524f-adb6-6c64ff4f68c0', 'description' => 'Deutschland 83', 'correct_answer' => false],
                    ['id' => '821b6a45-d175-5f73-907f-afd429283ce5', 'description' => 'The Leftovers', 'correct_answer' => false],
                    ['id' => 'a720195d-95b3-5722-9ffb-c725380d65ed', 'description' => 'Six Feet Under', 'correct_answer' => true],
                    ['id' => '77c6b772-f436-54d3-abd0-33ec55b17e7a', 'description' => 'The Americans', 'correct_answer' => false],
                    ['id' => '7edfc96c-6ba0-54b1-be01-bcec0d19b411', 'description' => 'Halt and Catch Fire', 'correct_answer' => false]
                ]],
        ['id' => '66e9b82f-7f69-5721-9fad-2abffedaf8f6', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which historical drama follows surgeons and staff at a New York hospital in the early twentieth century?', 'difficulty' => 3, 'weight' => 501, 'alternatives' => [
                    ['id' => 'faa78b93-b2b9-5d43-8a04-d701ad4d24c2', 'description' => 'The Leftovers', 'correct_answer' => false],
                    ['id' => 'b5f13fb7-8c99-593b-a462-6f0f385ec6c8', 'description' => 'Deutschland 83', 'correct_answer' => false],
                    ['id' => '0f3bbe4d-2195-5fa6-a77d-cd3d27526e34', 'description' => 'Halt and Catch Fire', 'correct_answer' => false],
                    ['id' => '18d0be69-a452-53c4-9fd2-927bee57098d', 'description' => 'Deadwood', 'correct_answer' => false],
                    ['id' => '7ee707e8-8c63-5f2e-94fc-f0090411b6c7', 'description' => 'The Knick', 'correct_answer' => true]
                ]],
        ['id' => '889c0481-8d97-5568-b10a-9189783456d3', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which series by David Lynch and Mark Frost begins with the investigation of Laura Palmer\'s murder?', 'difficulty' => 3, 'weight' => 488, 'alternatives' => [
                    ['id' => 'f888ee46-adc2-564a-a351-cd858871ff42', 'description' => 'The Americans', 'correct_answer' => false],
                    ['id' => '0e84a2ee-8c37-5f23-9bfc-3f012a78df4b', 'description' => 'Deadwood', 'correct_answer' => false],
                    ['id' => '04cd5f90-e396-5698-a1c0-17236957bd60', 'description' => 'Twin Peaks', 'correct_answer' => true],
                    ['id' => '46900794-94b9-5981-9b39-446a2532d126', 'description' => 'Carnivàle', 'correct_answer' => false],
                    ['id' => 'b0b0095d-a29b-573a-8386-85f7425ae288', 'description' => 'The Knick', 'correct_answer' => false]
                ]],
        ['id' => '00247934-1410-50a2-b6f0-c5f438dbcf19', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which series follows Daniel Holden after his release from death row after nearly two decades?', 'difficulty' => 3, 'weight' => 567, 'alternatives' => [
                    ['id' => 'ae418877-e811-5c36-a173-71f25022035b', 'description' => 'Twin Peaks', 'correct_answer' => false],
                    ['id' => '2e48e3cd-c79a-5f73-a0d4-22d545883863', 'description' => 'The Knick', 'correct_answer' => false],
                    ['id' => '0c0a9d8a-353a-512d-8672-097d5a0345b2', 'description' => 'The Leftovers', 'correct_answer' => false],
                    ['id' => '8569b393-b013-5378-bfb7-ce98ebc51e59', 'description' => 'Rectify', 'correct_answer' => true],
                    ['id' => '63dcf6e6-7c56-5cd4-9564-e6ff9d2d3399', 'description' => 'Deadwood', 'correct_answer' => false]
                ]],
        ['id' => '3f209329-d23b-58a6-b2cc-6c2cc0505fa6', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which western series follows a mining community in South Dakota during the 1870s?', 'difficulty' => 3, 'weight' => 557, 'alternatives' => [
                    ['id' => 'd0e39315-8773-5510-83b6-72c0524bbc9e', 'description' => 'Halt and Catch Fire', 'correct_answer' => false],
                    ['id' => '873ccdfb-8f80-540d-98a0-7d32c6c9602b', 'description' => 'Deadwood', 'correct_answer' => true],
                    ['id' => '4c8f565c-4657-5795-98f5-ededc7200acc', 'description' => 'Twin Peaks', 'correct_answer' => false],
                    ['id' => 'a7349e70-d0a6-5caf-ba0b-46ffaaf7e4bb', 'description' => 'The Americans', 'correct_answer' => false],
                    ['id' => '1c23f4f8-e007-5dfd-b965-92ed203719d3', 'description' => 'Six Feet Under', 'correct_answer' => false]
                ]],
        ['id' => '9143b031-8056-55c8-bd07-35585050fe02', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which series follows people involved in the personal-computer and internet revolutions?', 'difficulty' => 3, 'weight' => 478, 'alternatives' => [
                    ['id' => '025ff460-e49e-545f-8848-c3d67433cdef', 'description' => 'The Americans', 'correct_answer' => false],
                    ['id' => '484f3616-9f8b-56f4-afe1-bc5490055bb2', 'description' => 'Twin Peaks', 'correct_answer' => false],
                    ['id' => '2d33ed10-c2e8-5647-bf47-02f9c3a04832', 'description' => 'Six Feet Under', 'correct_answer' => false],
                    ['id' => '4463ff1d-b2ff-5e12-bf17-a0584d1bce1f', 'description' => 'Halt and Catch Fire', 'correct_answer' => true],
                    ['id' => '6b931573-31a8-5416-8c37-5d9772eca840', 'description' => 'Carnivàle', 'correct_answer' => false]
                ]],
        ['id' => '56118995-a988-583c-b839-8bc70222f805', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which series follows people who remain after two percent of the world\'s population suddenly disappears?', 'difficulty' => 3, 'weight' => 507, 'alternatives' => [
                    ['id' => '1f6b4ac3-5331-5bf5-9434-48ba37e5484f', 'description' => 'Carnivàle', 'correct_answer' => false],
                    ['id' => '3a044207-8f3f-56d9-9da1-3dec457ed06d', 'description' => 'Halt and Catch Fire', 'correct_answer' => false],
                    ['id' => '5b3685a7-5613-5ddb-83db-ab6a77d692fc', 'description' => 'Deutschland 83', 'correct_answer' => false],
                    ['id' => 'b3d7817e-d9b4-56be-8263-a82da5df1b40', 'description' => 'Deadwood', 'correct_answer' => false],
                    ['id' => 'e6779bfb-d8be-5159-9345-dc792fc3f754', 'description' => 'The Leftovers', 'correct_answer' => true]
                ]],
        ['id' => '43d95437-6451-5a5d-8770-7e00d59a1ba8', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which Dennis Potter miniseries follows a hospitalized writer whose imagined detective story blends with his life?', 'difficulty' => 3, 'weight' => 506, 'alternatives' => [
                    ['id' => 'e0a8b0bf-37c7-58cb-abf3-72222980f7e3', 'description' => 'Our Friends in the North', 'correct_answer' => false],
                    ['id' => '1a6da62b-6d2f-597b-9862-dcc56e7a7234', 'description' => 'Edge of Darkness', 'correct_answer' => false],
                    ['id' => 'a3b23949-1ccc-5dc4-a05f-3b37b229f6b5', 'description' => 'The Singing Detective', 'correct_answer' => true],
                    ['id' => '8af6c72e-322f-54be-8f62-fa5c1e0e68c5', 'description' => 'State of Play', 'correct_answer' => false],
                    ['id' => '6ecf981a-1c22-5704-a05d-4b9cc401e325', 'description' => 'Yes Minister', 'correct_answer' => false]
                ]],
        ['id' => '6778fc79-e994-5797-85bf-398a8c9fb32a', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which BBC historical series dramatizes intrigue in the Julio-Claudian dynasty?', 'difficulty' => 3, 'weight' => 513, 'alternatives' => [
                    ['id' => '7d42490b-06ae-5384-827d-35688dc73b3f', 'description' => 'The Thick of It', 'correct_answer' => false],
                    ['id' => 'c1f62273-3742-5062-ab7b-28b38728066d', 'description' => 'Edge of Darkness', 'correct_answer' => false],
                    ['id' => '6a8f6277-1d27-5937-9045-4903f3a8cfa1', 'description' => 'I, Claudius', 'correct_answer' => true],
                    ['id' => '221a742e-4816-5c27-96ff-513e9383f517', 'description' => 'Brideshead Revisited', 'correct_answer' => false],
                    ['id' => 'deb3c4d8-0ba2-5c1d-9948-2e8da16f399c', 'description' => 'The Prisoner', 'correct_answer' => false]
                ]],
        ['id' => '8cffec5a-6353-5bb0-a4a1-f0964385d2e7', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which British drama follows four friends from Newcastle across several decades?', 'difficulty' => 3, 'weight' => 460, 'alternatives' => [
                    ['id' => 'c91a9dae-31c0-582b-b7c9-dbc95f14a784', 'description' => 'Brideshead Revisited', 'correct_answer' => false],
                    ['id' => '1a746d5a-e3b6-508d-ad53-f030cf700f83', 'description' => 'The Singing Detective', 'correct_answer' => false],
                    ['id' => 'ac551b1d-7d94-5317-8445-af3134f5d068', 'description' => 'I, Claudius', 'correct_answer' => false],
                    ['id' => '61ed36a4-966c-5fa9-89c1-8a3257499195', 'description' => 'The Prisoner', 'correct_answer' => false],
                    ['id' => '4a9a23ce-c9d1-5b1e-b9ff-a8933fe13d95', 'description' => 'Our Friends in the North', 'correct_answer' => true]
                ]],
        ['id' => 'b65c3af6-b4c6-5b81-a8a5-9f92daf323c0', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which political satire follows a government department\'s communications team?', 'difficulty' => 3, 'weight' => 501, 'alternatives' => [
                    ['id' => 'a99c4916-eb13-53d8-8e1c-f32a601aa6a5', 'description' => 'The Thick of It', 'correct_answer' => true],
                    ['id' => '8695ecd8-4a8a-5f73-a0ae-16719c69fad4', 'description' => 'State of Play', 'correct_answer' => false],
                    ['id' => '2f93bbf0-32d8-517c-8d7b-da991be6fac3', 'description' => 'Utopia', 'correct_answer' => false],
                    ['id' => '7a2b9bff-150e-5012-abe2-152694eb4b4c', 'description' => 'I, Claudius', 'correct_answer' => false],
                    ['id' => '2c2bbc83-77ce-56ab-8f5f-bf5582240b81', 'description' => 'Yes Minister', 'correct_answer' => false]
                ]],
        ['id' => '700c1ed5-1b7e-5be9-96e7-1314d918515e', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which British miniseries adapts Evelyn Waugh\'s novel about Charles Ryder and the Flyte family?', 'difficulty' => 3, 'weight' => 500, 'alternatives' => [
                    ['id' => '4f8767fc-d478-5eda-91da-66ac02a73db7', 'description' => 'Utopia', 'correct_answer' => false],
                    ['id' => 'dc80114c-1333-5ee2-8685-128121a4a9cf', 'description' => 'Yes Minister', 'correct_answer' => false],
                    ['id' => '0554ca1c-5e7f-5e44-9543-afaee20406c3', 'description' => 'Our Friends in the North', 'correct_answer' => false],
                    ['id' => '0d96f1d4-d6f5-5e5c-aa1b-9a9a3f75dca6', 'description' => 'Brideshead Revisited', 'correct_answer' => true],
                    ['id' => '77bc61f1-8fd2-5767-acff-2d3497ff674e', 'description' => 'The Thick of It', 'correct_answer' => false]
                ]],
        ['id' => '9ca5010f-1d7e-5eb3-869c-b3ce39fd4c21', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which British sitcom follows minister Jim Hacker and permanent secretary Humphrey Appleby?', 'difficulty' => 3, 'weight' => 507, 'alternatives' => [
                    ['id' => '9cd194c3-695c-5a28-a26a-9d41c2b92d7e', 'description' => 'Yes Minister', 'correct_answer' => true],
                    ['id' => 'b3cff850-9923-51d5-9230-e85bd45fa9fc', 'description' => 'The Thick of It', 'correct_answer' => false],
                    ['id' => '52e0a2f4-d791-52fa-8169-a309f77a9bc9', 'description' => 'State of Play', 'correct_answer' => false],
                    ['id' => '6f4e140f-bb22-5a29-acd0-4c5526393766', 'description' => 'Our Friends in the North', 'correct_answer' => false],
                    ['id' => 'b4b52c78-caba-5ec9-9a62-be2d71996aba', 'description' => 'I, Claudius', 'correct_answer' => false]
                ]],
        ['id' => '408b4fe4-aba9-5035-a09a-f97988361896', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which British miniseries follows a police officer investigating his activist daughter\'s murder?', 'difficulty' => 3, 'weight' => 474, 'alternatives' => [
                    ['id' => 'c25691cc-16cc-53d1-9b82-b8a813a864b0', 'description' => 'The Singing Detective', 'correct_answer' => false],
                    ['id' => '28b48131-a792-54fe-ba91-861cb21b0dfb', 'description' => 'Edge of Darkness', 'correct_answer' => true],
                    ['id' => '5ec233db-55ae-5913-a24c-199a0e942c8b', 'description' => 'The Thick of It', 'correct_answer' => false],
                    ['id' => '9bf4319e-6210-5035-a0f4-80e4e302770d', 'description' => 'Yes Minister', 'correct_answer' => false],
                    ['id' => '599759e9-cf3f-543d-9e93-fd151a203b51', 'description' => 'Brideshead Revisited', 'correct_answer' => false]
                ]],
        ['id' => 'aa2895fa-8767-512d-961b-1e5fdf86cebb', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which British miniseries follows journalists investigating the death of a politician\'s assistant?', 'difficulty' => 3, 'weight' => 569, 'alternatives' => [
                    ['id' => 'd13ce576-d64b-5959-8fef-c8fcedeef186', 'description' => 'Edge of Darkness', 'correct_answer' => false],
                    ['id' => 'ac4446c6-1b0e-5a55-8caa-e766f97b0cca', 'description' => 'Our Friends in the North', 'correct_answer' => false],
                    ['id' => 'b05d2cde-6ca9-57bc-91f8-a96b8a32fd64', 'description' => 'Utopia', 'correct_answer' => false],
                    ['id' => '91d8a8c6-df77-5f7d-adbb-9ff7f8b4e777', 'description' => 'State of Play', 'correct_answer' => true],
                    ['id' => '0de5bec9-afe5-5d89-b553-ab3e96ec0f5c', 'description' => 'I, Claudius', 'correct_answer' => false]
                ]],
        ['id' => '5257c94e-249e-5dc4-a24c-820854e60062', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which Nordic crime series begins with a body found on the Denmark-Sweden border?', 'difficulty' => 3, 'weight' => 592, 'alternatives' => [
                    ['id' => '2638b212-2956-5c8f-ab08-942e5317918d', 'description' => 'Pustina', 'correct_answer' => false],
                    ['id' => '161f11d6-2684-5276-aa8c-52b8dd20344f', 'description' => 'The Kingdom', 'correct_answer' => false],
                    ['id' => '33c0779f-2300-5cce-911e-49f47f2d2328', 'description' => 'Dekalog', 'correct_answer' => false],
                    ['id' => 'c1460486-d6e2-55fd-aaa5-2d461d0f1798', 'description' => 'The Bridge', 'correct_answer' => true],
                    ['id' => '64d88b27-a257-596c-87fc-4fa93eb93b0a', 'description' => 'My Brilliant Friend', 'correct_answer' => false]
                ]],
        ['id' => 'e163d371-9904-561a-b1f7-7d58d85928ce', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which Fassbinder miniseries adapts Alfred Döblin\'s novel about Franz Biberkopf?', 'difficulty' => 3, 'weight' => 456, 'alternatives' => [
                    ['id' => '1b257baa-cffe-5f1f-8ea5-c30bb10553e5', 'description' => 'Berlin Alexanderplatz', 'correct_answer' => true],
                    ['id' => 'cd48c63e-7478-5d8f-b734-bcdc34823c27', 'description' => 'Borgen', 'correct_answer' => false],
                    ['id' => 'c13ad50f-3abc-5e0c-adca-0bb84984f663', 'description' => 'My Brilliant Friend', 'correct_answer' => false],
                    ['id' => 'c395be21-fc31-55f4-b333-bb7dda488b4a', 'description' => 'Gomorrah', 'correct_answer' => false],
                    ['id' => '84b41de3-9edc-5682-b4e3-af1689693748', 'description' => 'Heimat', 'correct_answer' => false]
                ]],
        ['id' => '60e93c7d-53b8-5983-8040-c1e27f9b0a4a', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which Italian series adapts Elena Ferrante\'s novels about Elena and Lila?', 'difficulty' => 3, 'weight' => 441, 'alternatives' => [
                    ['id' => '3be6576b-25dd-50d1-8ab4-798288c11bfc', 'description' => 'My Brilliant Friend', 'correct_answer' => true],
                    ['id' => 'd5f59143-61e1-5110-8dbc-492874308e36', 'description' => 'Pustina', 'correct_answer' => false],
                    ['id' => '71ea082f-c4a1-59bb-98ea-51a9dd00e235', 'description' => 'The Kingdom', 'correct_answer' => false],
                    ['id' => '1de376a8-02d5-5bb3-a1b6-7e5d8c310b0b', 'description' => 'Berlin Alexanderplatz', 'correct_answer' => false],
                    ['id' => '4e38ef6d-d9c5-5890-a252-3ef8e2159bfb', 'description' => 'Borgen', 'correct_answer' => false]
                ]],
        ['id' => 'de292a92-e327-5051-b3a4-e064c41d6c61', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which Edgar Reitz saga follows generations of a family in the fictional village of Schabbach?', 'difficulty' => 3, 'weight' => 518, 'alternatives' => [
                    ['id' => 'a6a75cbd-7bbd-508b-ba2c-01368e73a3a5', 'description' => 'Heimat', 'correct_answer' => true],
                    ['id' => '118673a6-587d-580f-8bdd-49749075d097', 'description' => 'My Brilliant Friend', 'correct_answer' => false],
                    ['id' => 'b2a7a944-a9c6-5af8-bef8-1e82e26021b2', 'description' => 'Dekalog', 'correct_answer' => false],
                    ['id' => 'f9fb712b-fd1e-57e8-a9a7-824c4a7e8040', 'description' => 'Gomorrah', 'correct_answer' => false],
                    ['id' => '995b9210-0f02-5f56-8c1a-01f76191b6a4', 'description' => 'Berlin Alexanderplatz', 'correct_answer' => false]
                ]],
        ['id' => 'f0caaa5c-4d1f-550c-bbee-641606550279', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which cycle of television films by Kieślowski is structured around the Ten Commandments?', 'difficulty' => 3, 'weight' => 539, 'alternatives' => [
                    ['id' => '8e38ca54-6229-5c81-8118-5595301e3e46', 'description' => 'Pustina', 'correct_answer' => false],
                    ['id' => '530981c8-0ebc-5ff8-af25-773a5532cf9f', 'description' => 'Gomorrah', 'correct_answer' => false],
                    ['id' => '6d36c6da-9ba3-5330-815a-eff25b246b2a', 'description' => 'My Brilliant Friend', 'correct_answer' => false],
                    ['id' => 'f0f5e427-5ac3-5933-9092-73c2b40c5220', 'description' => 'Dekalog', 'correct_answer' => true],
                    ['id' => '7fc6aabc-55d4-52d8-aec5-24c2f5a2f785', 'description' => 'The Kingdom', 'correct_answer' => false]
                ]],
        ['id' => 'e7767057-5d41-5dd8-bf85-d8b507276e72', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which Lars von Trier series is set in a Copenhagen hospital and blends supernatural horror with comedy?', 'difficulty' => 3, 'weight' => 434, 'alternatives' => [
                    ['id' => '68d18263-251e-5ef3-bcb8-d97f9e566054', 'description' => 'Berlin Alexanderplatz', 'correct_answer' => false],
                    ['id' => '9ca44561-2d72-56e7-92be-45a5741d8daa', 'description' => 'Scenes from a Marriage', 'correct_answer' => false],
                    ['id' => 'd001edda-16d4-581b-926e-67d5b42eb9e9', 'description' => 'The Kingdom', 'correct_answer' => true],
                    ['id' => '1668455b-53b3-5f93-8fa2-d1ca726fd4e0', 'description' => 'Pustina', 'correct_answer' => false],
                    ['id' => 'c65c83e9-d9d4-5432-b883-32adab5d2142', 'description' => 'Dekalog', 'correct_answer' => false]
                ]],
        ['id' => '119b2e91-e32c-5612-a992-11a7d4664bc3', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which Danish series follows Birgitte Nyborg\'s rise to become prime minister?', 'difficulty' => 3, 'weight' => 473, 'alternatives' => [
                    ['id' => '19e6dbd0-ff20-5ecc-89e9-d5dde75a7d46', 'description' => 'Pustina', 'correct_answer' => false],
                    ['id' => '9f9d0758-5dba-55eb-8c85-93c34658bb10', 'description' => 'Heimat', 'correct_answer' => false],
                    ['id' => '3c058aa7-6329-5373-84c9-d72d7aeae154', 'description' => 'The Kingdom', 'correct_answer' => false],
                    ['id' => '0c69ceb0-ea46-5cf3-8243-fde473698cc4', 'description' => 'My Brilliant Friend', 'correct_answer' => false],
                    ['id' => 'ffb85916-2d8e-5571-bfd2-14f10650d4be', 'description' => 'Borgen', 'correct_answer' => true]
                ]],
        ['id' => '0261a75d-ebd8-5967-b9bc-15b41ae2acb2', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which Bergman miniseries follows the changing marriage of Johan and Marianne?', 'difficulty' => 3, 'weight' => 434, 'alternatives' => [
                    ['id' => '0e58bb2c-00ee-50b6-9e95-e60709672320', 'description' => 'Dekalog', 'correct_answer' => false],
                    ['id' => '7fa69c71-f01d-5b4d-93c2-fe1f0768506c', 'description' => 'Scenes from a Marriage', 'correct_answer' => true],
                    ['id' => 'c145c22f-a539-54d8-b206-37b883a9e1e2', 'description' => 'The Kingdom', 'correct_answer' => false],
                    ['id' => '2a57c824-aab1-5935-b0ae-3f17726def72', 'description' => 'Pustina', 'correct_answer' => false],
                    ['id' => 'f22bdc4e-59f8-5681-934f-88040929efc6', 'description' => 'Gomorrah', 'correct_answer' => false]
                ]],
        ['id' => '7a8be370-7423-585b-b76a-863275e10dfd', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which miniseries imagines an alternate history in which Charles Lindbergh wins the 1940 election?', 'difficulty' => 3, 'weight' => 413, 'alternatives' => [
                    ['id' => '79b18336-7e11-5ae8-b91b-214dc28b5c62', 'description' => 'Show Me a Hero', 'correct_answer' => false],
                    ['id' => '02cff8a7-d16b-57c4-8164-b422c1c8baed', 'description' => 'The Plot Against America', 'correct_answer' => true],
                    ['id' => '4b06ae11-b2fd-5236-a5ab-fb9dfc10bb13', 'description' => 'The Night Of', 'correct_answer' => false],
                    ['id' => 'bee4a723-1a72-5d08-9798-22f482e15565', 'description' => 'The Looming Tower', 'correct_answer' => false],
                    ['id' => '07250dca-15cd-52da-b8f8-dcad76fdcfd9', 'description' => 'The Honourable Woman', 'correct_answer' => false]
                ]],
        ['id' => '1fad63fb-d220-5e86-ad7a-30d2860182a9', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which miniseries follows a British-Israeli businesswoman amid political conflict in the Middle East?', 'difficulty' => 3, 'weight' => 571, 'alternatives' => [
                    ['id' => '842231da-0f34-5fa3-96fd-83adf2100af2', 'description' => 'The Plot Against America', 'correct_answer' => false],
                    ['id' => 'c5cbb31a-7214-5936-ad9c-df5d8c1bf8f6', 'description' => 'Years and Years', 'correct_answer' => false],
                    ['id' => '4500e266-08bd-5f8c-a58b-944cc761ec01', 'description' => 'Show Me a Hero', 'correct_answer' => false],
                    ['id' => '45413c23-1d28-5b9a-a664-a5fd712a2256', 'description' => 'The Deuce', 'correct_answer' => false],
                    ['id' => '01d0388d-c86e-54a4-b573-3c908d37b24b', 'description' => 'The Honourable Woman', 'correct_answer' => true]
                ]],
        ['id' => '91adad9a-0d79-500f-b167-3badceff634a', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which miniseries dramatizes a public-housing dispute in Yonkers, New York?', 'difficulty' => 3, 'weight' => 518, 'alternatives' => [
                    ['id' => 'e132cfd7-5208-5b6f-b510-21db6bab3464', 'description' => 'Treme', 'correct_answer' => false],
                    ['id' => '3433abbe-55ae-5a54-ac64-3917f2897111', 'description' => 'We Own This City', 'correct_answer' => false],
                    ['id' => '9ee513fb-e4cd-509f-988c-926a0613ea0a', 'description' => 'The Honourable Woman', 'correct_answer' => false],
                    ['id' => 'e524c14a-2235-5ed6-9fa6-ca05420694fe', 'description' => 'The Deuce', 'correct_answer' => false],
                    ['id' => 'c643e481-f553-5686-b342-06afb25055db', 'description' => 'Show Me a Hero', 'correct_answer' => true]
                ]],
        ['id' => '194d1549-cede-522c-af07-830afe106fe1', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which British miniseries follows a Manchester family through fifteen years of political and technological change?', 'difficulty' => 3, 'weight' => 519, 'alternatives' => [
                    ['id' => '72696061-3614-5af0-af6e-7adfab448784', 'description' => 'The Honourable Woman', 'correct_answer' => false],
                    ['id' => '94d5f69a-55b0-5ec4-9113-99dd993645c1', 'description' => 'The Night Of', 'correct_answer' => false],
                    ['id' => '84d7f47b-de60-5405-b308-4b253101a63c', 'description' => 'Years and Years', 'correct_answer' => true],
                    ['id' => 'ec525376-6fe9-5f8e-9412-2166d4cacff0', 'description' => 'We Own This City', 'correct_answer' => false],
                    ['id' => 'ff7a414a-5ddd-566e-9796-f4f792a26bb6', 'description' => 'The Deuce', 'correct_answer' => false]
                ]],
        ['id' => '7e7daacd-b01a-543d-9bd4-26dbeaed29f4', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which miniseries follows U.S. Marines in a reconnaissance unit during the 2003 Iraq invasion?', 'difficulty' => 3, 'weight' => 563, 'alternatives' => [
                    ['id' => '459cfe46-ab1f-533d-94df-8a2e67cff70e', 'description' => 'Treme', 'correct_answer' => false],
                    ['id' => '7b6fc2c1-caab-56f7-a7ae-ebfeb323cc27', 'description' => 'Generation Kill', 'correct_answer' => true],
                    ['id' => '88d09144-82cc-55ec-8f24-e65a945c979c', 'description' => 'Years and Years', 'correct_answer' => false],
                    ['id' => '66496a07-f001-53f1-bd00-e51971f3310e', 'description' => 'The Deuce', 'correct_answer' => false],
                    ['id' => '937c310c-346a-551e-b4ac-62b64378bc00', 'description' => 'We Own This City', 'correct_answer' => false]
                ]],
        ['id' => '7ff271b9-3356-513e-8e46-e30d734b2946', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which miniseries follows a murder accusation and the criminal justice system in New York?', 'difficulty' => 3, 'weight' => 495, 'alternatives' => [
                    ['id' => 'f3b3ce77-774a-5c70-a6bf-bf9091471f57', 'description' => 'The Night Of', 'correct_answer' => true],
                    ['id' => 'a790aee0-856e-55bb-b9a8-d69dc4140f2f', 'description' => 'Treme', 'correct_answer' => false],
                    ['id' => 'b7b7dddd-9c75-5f5b-8af3-3cff997fa456', 'description' => 'The Honourable Woman', 'correct_answer' => false],
                    ['id' => '0bc6cf31-9d4b-519d-b6f0-875f95d02983', 'description' => 'We Own This City', 'correct_answer' => false],
                    ['id' => '0d30c284-66e0-58bd-917d-3b6e6bd4bca5', 'description' => 'The Plot Against America', 'correct_answer' => false]
                ]],
        ['id' => '6954ef4f-1905-5407-977b-ac885d75d684', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which David Simon series follows musicians and residents of New Orleans after Hurricane Katrina?', 'difficulty' => 3, 'weight' => 576, 'alternatives' => [
                    ['id' => '6a1c311c-de9f-5a8f-a04f-5f44d134c812', 'description' => 'We Own This City', 'correct_answer' => false],
                    ['id' => '71cb78d5-c16a-57db-8606-2829c0e4a5ca', 'description' => 'Treme', 'correct_answer' => true],
                    ['id' => 'f1fd34cc-54f2-54a5-80e7-06069df85c89', 'description' => 'The Plot Against America', 'correct_answer' => false],
                    ['id' => '0604dea9-a71f-52c9-8931-feb7c0b64884', 'description' => 'Generation Kill', 'correct_answer' => false],
                    ['id' => 'fc6bccdf-fe7e-5e35-ba10-c290c715525b', 'description' => 'The Honourable Woman', 'correct_answer' => false]
                ]],
        ['id' => '5d367289-d660-5391-a652-82c24ea62ea9', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which series follows the rise of the commercial pornography industry in New York?', 'difficulty' => 3, 'weight' => 425, 'alternatives' => [
                    ['id' => '3973e9cc-58e8-5615-969d-dff1f56b04ec', 'description' => 'Generation Kill', 'correct_answer' => false],
                    ['id' => '806b52d1-3d49-5315-917a-ca4546a5d2ac', 'description' => 'We Own This City', 'correct_answer' => false],
                    ['id' => '4f4ff75c-c6c9-5164-b2f5-141a964382a8', 'description' => 'The Deuce', 'correct_answer' => true],
                    ['id' => '84a97fd1-89bc-58c5-b89c-e0c029da906b', 'description' => 'Years and Years', 'correct_answer' => false],
                    ['id' => '9eb56525-95ff-5447-a778-c92beb099a01', 'description' => 'The Looming Tower', 'correct_answer' => false]
                ]],
        ['id' => 'a8228fda-fe5c-5ebf-a45a-dc7da01fe10b', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which miniseries dramatizes the friendship between Nicholas Elliott and Kim Philby?', 'difficulty' => 3, 'weight' => 428, 'alternatives' => [
                    ['id' => '443f9e98-21b6-5449-bf66-2b38878a744f', 'description' => 'Deutschland 89', 'correct_answer' => false],
                    ['id' => '7f470ff7-a384-5253-b1ec-b30d471a7e26', 'description' => 'Slow Horses', 'correct_answer' => false],
                    ['id' => 'b254a2c3-43b5-516d-ad8f-6afaabe94500', 'description' => 'The Night Manager', 'correct_answer' => false],
                    ['id' => 'af684cea-5a65-510a-9803-d43cd977e36f', 'description' => 'A Spy Among Friends', 'correct_answer' => true],
                    ['id' => 'fc0bea61-a522-5495-a23b-048a9451cd3f', 'description' => 'Deutschland 86', 'correct_answer' => false]
                ]],
        ['id' => '92539d32-3177-5d9f-b883-4e1e9fd400dd', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which French series follows DGSE agents operating under deep-cover identities?', 'difficulty' => 3, 'weight' => 519, 'alternatives' => [
                    ['id' => '6339f778-1480-5271-b19a-c4a781086420', 'description' => 'Smiley\'s People', 'correct_answer' => false],
                    ['id' => 'edda2d44-c715-57df-a4b2-55e57fb1baef', 'description' => 'Tinker Tailor Soldier Spy', 'correct_answer' => false],
                    ['id' => '9167530a-7691-508d-a665-e505d08c30c1', 'description' => 'Slow Horses', 'correct_answer' => false],
                    ['id' => '4445686c-b89e-59ac-b4c9-b63c0399af2a', 'description' => 'The Sandbaggers', 'correct_answer' => false],
                    ['id' => '19fffe52-67a8-5795-882b-21f4fb778802', 'description' => 'The Bureau', 'correct_answer' => true]
                ]],
        ['id' => '47e9cb6e-4ddc-5efc-ab38-edf5dfe58cd7', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which Park Chan-wook miniseries follows an actress recruited for an intelligence operation?', 'difficulty' => 3, 'weight' => 464, 'alternatives' => [
                    ['id' => 'b757033b-a9f9-589f-94b0-8f8f89b5c999', 'description' => 'The Little Drummer Girl', 'correct_answer' => true],
                    ['id' => '9b21937e-d52c-5faa-91d6-905448eb0c7e', 'description' => 'The Sandbaggers', 'correct_answer' => false],
                    ['id' => 'db65a0ea-125e-582c-a983-2e93873ac207', 'description' => 'Deutschland 86', 'correct_answer' => false],
                    ['id' => '44658c58-6be5-59db-9eb0-71a8bd2f9a20', 'description' => 'The Night Manager', 'correct_answer' => false],
                    ['id' => 'dfcbf85d-0f8c-5d54-a688-42956b194497', 'description' => 'The Bureau', 'correct_answer' => false]
                ]],
        ['id' => 'b908657c-ead2-5f5f-aa16-62db42a0b093', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which season follows East German intelligence-linked characters during the fall of the Berlin Wall?', 'difficulty' => 3, 'weight' => 570, 'alternatives' => [
                    ['id' => '29767d37-84c6-5bf1-b4f8-c44dd440de54', 'description' => 'Deutschland 86', 'correct_answer' => false],
                    ['id' => 'da0e5246-080b-5496-8bfe-cdcc1a53dca4', 'description' => 'Slow Horses', 'correct_answer' => false],
                    ['id' => 'ba8d5107-15da-5714-b60c-f7fe96767ada', 'description' => 'The Bureau', 'correct_answer' => false],
                    ['id' => '67670678-5230-5d89-8597-5dc51e0dfbce', 'description' => 'Deutschland 89', 'correct_answer' => true],
                    ['id' => '178c1a9f-ca94-5133-82c2-2a741648f5d2', 'description' => 'The Sandbaggers', 'correct_answer' => false]
                ]],
        ['id' => 'ddb7c4de-17b0-5180-8335-d156b75d0503', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which miniseries follows a former soldier infiltrating an arms dealer\'s circle?', 'difficulty' => 3, 'weight' => 494, 'alternatives' => [
                    ['id' => '53cea838-5ac4-53d3-9d44-3e1c27ab0733', 'description' => 'Tinker Tailor Soldier Spy', 'correct_answer' => false],
                    ['id' => 'dbcbe3c9-66b4-578b-97c1-ebb3ff3fd518', 'description' => 'Deutschland 89', 'correct_answer' => false],
                    ['id' => '94d892fa-9d1c-5781-8757-c2b0cdcdeda4', 'description' => 'A Spy Among Friends', 'correct_answer' => false],
                    ['id' => 'de1c78c7-3fda-5e57-a079-98a82867a988', 'description' => 'The Night Manager', 'correct_answer' => true],
                    ['id' => '3583b4f2-ca71-5b39-bb78-ff6e2410fcea', 'description' => 'The Little Drummer Girl', 'correct_answer' => false]
                ]],
        ['id' => '3851f0be-c5c5-5c83-8a3c-5761402ce227', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which series follows MI5 agents assigned to the marginalized Slough House unit?', 'difficulty' => 3, 'weight' => 485, 'alternatives' => [
                    ['id' => '2c4d587b-2dcb-504a-921e-b69b67faa1cb', 'description' => 'Deutschland 86', 'correct_answer' => false],
                    ['id' => '81a853fe-04ad-574b-9500-050ea56e7275', 'description' => 'A Spy Among Friends', 'correct_answer' => false],
                    ['id' => '4b6f02b5-2742-5d10-b94b-4cf702c3abbc', 'description' => 'The Night Manager', 'correct_answer' => false],
                    ['id' => '011083a2-8164-5120-8cc9-249f985f417a', 'description' => 'Slow Horses', 'correct_answer' => true],
                    ['id' => 'ee733b78-72ef-5b0c-b789-15b4ef0e04fc', 'description' => 'Smiley\'s People', 'correct_answer' => false]
                ]],
        ['id' => '364accd0-475a-5869-9f2b-3f4d3655383d', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which sequel follows Martin Rauch on international missions during the Cold War?', 'difficulty' => 3, 'weight' => 423, 'alternatives' => [
                    ['id' => '6c1e8aca-a806-5378-9da5-7636e98dcd88', 'description' => 'Slow Horses', 'correct_answer' => false],
                    ['id' => 'd258bdd7-5006-535e-8b39-aef8ec64ba3d', 'description' => 'Tinker Tailor Soldier Spy', 'correct_answer' => false],
                    ['id' => '20284b1e-6aa0-5967-8b2e-3410519a46f2', 'description' => 'Deutschland 89', 'correct_answer' => false],
                    ['id' => '4d227ecb-c3ba-50f6-8378-0c8f1e8b5fc6', 'description' => 'Deutschland 86', 'correct_answer' => true],
                    ['id' => '882a5791-8ab2-5818-b87d-7f7b199fd1c3', 'description' => 'A Spy Among Friends', 'correct_answer' => false]
                ]],
        ['id' => 'e33f40bd-8721-5aaa-b578-c85d9a2a9934', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which British espionage series follows a covert operations unit within SIS?', 'difficulty' => 3, 'weight' => 577, 'alternatives' => [
                    ['id' => 'fa0b0995-158b-5d94-b9fc-f76fabe7c395', 'description' => 'The Bureau', 'correct_answer' => false],
                    ['id' => '306fbe01-fa13-53d4-8302-3f8e185f9a68', 'description' => 'The Sandbaggers', 'correct_answer' => true],
                    ['id' => '64347174-f45a-5343-8788-8a44c601f03c', 'description' => 'Tinker Tailor Soldier Spy', 'correct_answer' => false],
                    ['id' => 'dd29125c-87fa-58f2-8efe-dc7b93bc2de3', 'description' => 'The Little Drummer Girl', 'correct_answer' => false],
                    ['id' => '0a6be9a2-53af-52b3-9a7b-fd2eefa75f74', 'description' => 'The Night Manager', 'correct_answer' => false]
                ]],
        ['id' => 'c7a3a20c-f72b-5e6e-bb5b-70b9f636fd9e', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which police drama was inspired by David Simon\'s book about Baltimore homicide detectives?', 'difficulty' => 4, 'weight' => 746, 'alternatives' => [
                    ['id' => 'fba682db-5303-5ebe-845a-2a1b6ed40e6d', 'description' => 'Southland', 'correct_answer' => false],
                    ['id' => 'b364b0fb-308d-5586-a29b-bc0406c3be2e', 'description' => 'The Fall', 'correct_answer' => false],
                    ['id' => 'f8bd4b24-0caa-551a-92d8-3d8d286789c3', 'description' => 'The Shield', 'correct_answer' => false],
                    ['id' => '2432a3f5-cd50-5335-82d2-07bf113e4c9b', 'description' => 'Prime Suspect', 'correct_answer' => false],
                    ['id' => '385258bf-b7a4-5a72-bead-a1091c0cb0e9', 'description' => 'Homicide: Life on the Street', 'correct_answer' => true]
                ]],
        ['id' => '80d2add4-a397-561e-a3a3-e4c62aff4e6c', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which crime drama follows Vic Mackey and the Strike Team at a fictional Los Angeles precinct?', 'difficulty' => 4, 'weight' => 639, 'alternatives' => [
                    ['id' => '5f1edc4d-18b0-5830-aa46-b5b786dbc47d', 'description' => 'Homicide: Life on the Street', 'correct_answer' => false],
                    ['id' => 'e55af592-a748-5b4c-8b74-b67eacf3b835', 'description' => 'Happy Valley', 'correct_answer' => false],
                    ['id' => 'd1a36027-c9a8-54fc-850b-2ad3e379d0a0', 'description' => 'Hill Street Blues', 'correct_answer' => false],
                    ['id' => 'a7dbb75d-9c84-5a06-b8d3-4c3e40559da8', 'description' => 'Unforgotten', 'correct_answer' => false],
                    ['id' => 'a0b3f36e-c519-51eb-951a-6b19a5fa4e81', 'description' => 'The Shield', 'correct_answer' => true]
                ]],
        ['id' => '8689713b-1f9d-58e5-95aa-2355c3e801ae', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which British crime series stars Helen Mirren as detective Jane Tennison?', 'difficulty' => 4, 'weight' => 783, 'alternatives' => [
                    ['id' => 'ad05c5d5-3030-52f5-97de-689728500898', 'description' => 'Unforgotten', 'correct_answer' => false],
                    ['id' => '2ea15e4c-109f-5263-bb03-fe5f097d378b', 'description' => 'Happy Valley', 'correct_answer' => false],
                    ['id' => 'a1f96ad3-7ca1-503f-9439-396e42e3d93c', 'description' => 'Line of Duty', 'correct_answer' => false],
                    ['id' => '60a552b8-cd11-5c7a-b07b-744d4f05930d', 'description' => 'Prime Suspect', 'correct_answer' => true],
                    ['id' => 'b02e8847-dc8d-51ac-84fe-d3df9bece7b8', 'description' => 'Homicide: Life on the Street', 'correct_answer' => false]
                ]],
        ['id' => 'f141cb39-01ea-5b69-bd53-d11de7c89002', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which series follows a London detective investigating a serial killer in Belfast?', 'difficulty' => 4, 'weight' => 784, 'alternatives' => [
                    ['id' => '4e0e0a43-9c75-5090-b210-3f973303d3fb', 'description' => 'The Fall', 'correct_answer' => true],
                    ['id' => 'efa8e17e-7b6f-550d-91cb-d3900a781021', 'description' => 'Happy Valley', 'correct_answer' => false],
                    ['id' => '2ba84879-5b7e-5327-a7f3-2ac14c8a753a', 'description' => 'The Shield', 'correct_answer' => false],
                    ['id' => 'c7ba86b7-ff6c-5907-9133-579b5cf9e32d', 'description' => 'Prime Suspect', 'correct_answer' => false],
                    ['id' => 'ef35fa63-bedb-5ff9-b254-a1dc3ed65dad', 'description' => 'Line of Duty', 'correct_answer' => false]
                ]],
        ['id' => '501d4fb8-cac9-54e6-a80d-63b41d13842a', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which British crime drama follows Sergeant Catherine Cawood in West Yorkshire?', 'difficulty' => 4, 'weight' => 640, 'alternatives' => [
                    ['id' => '3fe96225-613f-5621-8229-b3a59af74568', 'description' => 'The Fall', 'correct_answer' => false],
                    ['id' => '4d68615f-a867-5bb9-8e0c-ca53ffad8cda', 'description' => 'Unforgotten', 'correct_answer' => false],
                    ['id' => '40620386-1a74-5400-924b-9d3e1357a42b', 'description' => 'Prime Suspect', 'correct_answer' => false],
                    ['id' => '52755b10-f272-5276-abef-8486702ff563', 'description' => 'Happy Valley', 'correct_answer' => true],
                    ['id' => '6f96d2a6-2d6b-5800-bf44-5deb7d429b72', 'description' => 'The Shield', 'correct_answer' => false]
                ]],
        ['id' => '90dd93de-f96b-5305-b3a2-ca3f3d26d2e2', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which police drama created by Steven Bochco and David Milch follows Manhattan\'s 15th precinct?', 'difficulty' => 4, 'weight' => 798, 'alternatives' => [
                    ['id' => '9b8c646d-ea58-5161-8053-656f23723d21', 'description' => 'Hill Street Blues', 'correct_answer' => false],
                    ['id' => 'af9958cd-5d3d-5e5a-8889-fadca3a4960a', 'description' => 'NYPD Blue', 'correct_answer' => true],
                    ['id' => '03ca95ac-be7d-5f08-8e5b-adfac96e1337', 'description' => 'Homicide: Life on the Street', 'correct_answer' => false],
                    ['id' => '574543b6-c59c-5404-a5d0-5aa48a0eee7e', 'description' => 'The Fall', 'correct_answer' => false],
                    ['id' => 'eb180024-e26f-5858-afe3-005079a9fdfa', 'description' => 'Prime Suspect', 'correct_answer' => false]
                ]],
        ['id' => '1bf1f1c4-edc6-539c-a05e-8042e60dfbfb', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which British series follows an anti-corruption unit investigating police misconduct?', 'difficulty' => 4, 'weight' => 715, 'alternatives' => [
                    ['id' => '7480e90d-422b-5b33-8f9d-12a15b57114f', 'description' => 'Homicide: Life on the Street', 'correct_answer' => false],
                    ['id' => 'b30bd460-691b-51f6-8453-76457b20f2e2', 'description' => 'Line of Duty', 'correct_answer' => true],
                    ['id' => 'be6b6432-177a-5b73-a101-1a57f8762e33', 'description' => 'The Fall', 'correct_answer' => false],
                    ['id' => '3bac4450-253b-5ea1-9408-c9be3381ff69', 'description' => 'Unforgotten', 'correct_answer' => false],
                    ['id' => '9ce13eb5-b96c-54e1-bc40-5a92793f0a7e', 'description' => 'Happy Valley', 'correct_answer' => false]
                ]],
        ['id' => 'ad1f5d40-3695-56fb-88e6-6653d67a6d27', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which police drama follows patrol officers and detectives of the Los Angeles Police Department?', 'difficulty' => 4, 'weight' => 624, 'alternatives' => [
                    ['id' => 'd62dd9cb-508c-5633-807d-34a937b5257e', 'description' => 'Prime Suspect', 'correct_answer' => false],
                    ['id' => '031bc29b-932a-5e04-ac23-b2338638578c', 'description' => 'Hill Street Blues', 'correct_answer' => false],
                    ['id' => 'be6b38a2-1eb6-5530-9973-2d4f5fed82eb', 'description' => 'Southland', 'correct_answer' => true],
                    ['id' => '0907dc77-9ae6-560b-96f9-f94020b831cc', 'description' => 'The Fall', 'correct_answer' => false],
                    ['id' => 'df962e4b-b61f-5496-b663-cc1513d69e99', 'description' => 'The Shield', 'correct_answer' => false]
                ]],
        ['id' => 'df252854-37d5-59ea-9844-3955cea6ead2', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which British historical drama follows the monarchy during Elizabeth II\'s reign?', 'difficulty' => 4, 'weight' => 718, 'alternatives' => [
                    ['id' => '688e9cf0-550d-523c-8a83-13b1fb7bd12e', 'description' => 'The Borgias', 'correct_answer' => false],
                    ['id' => '381ac840-c441-5e90-a3ce-8e9e9da7d976', 'description' => 'The Serpent', 'correct_answer' => false],
                    ['id' => '759593eb-2257-5796-aad0-1dce0325fee5', 'description' => 'The Young Pope', 'correct_answer' => false],
                    ['id' => '259aab1a-4c8a-57a4-84a4-c836ca84dcc2', 'description' => 'The Crown', 'correct_answer' => true],
                    ['id' => 'd758cf86-d86b-5152-b584-8e39e8d6094b', 'description' => 'Medici', 'correct_answer' => false]
                ]],
        ['id' => '3f57a75a-e8ff-537f-8d2e-ce1e874d41c7', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which miniseries dramatizes Charles Sobhraj\'s crimes against travelers in Asia during the 1970s?', 'difficulty' => 4, 'weight' => 784, 'alternatives' => [
                    ['id' => 'a2313c43-99ff-5c49-b038-989c00e85b92', 'description' => 'Versailles', 'correct_answer' => false],
                    ['id' => '402116a7-5c46-528c-9819-239d661a5b19', 'description' => 'A Very English Scandal', 'correct_answer' => false],
                    ['id' => '4bfba082-4b5e-549c-a8ac-b914b6d10ccf', 'description' => 'The Serpent', 'correct_answer' => true],
                    ['id' => '40590a40-9c87-5c78-ad74-5e05e01c7c86', 'description' => 'Medici', 'correct_answer' => false],
                    ['id' => '18c732ea-303a-513f-b48c-b196fdaa5f6b', 'description' => 'The Crown', 'correct_answer' => false]
                ]],
        ['id' => '3a881293-389f-5a79-b5cc-aba2098770c3', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which historical drama follows Thomas Cromwell at Henry VIII\'s court?', 'difficulty' => 4, 'weight' => 796, 'alternatives' => [
                    ['id' => '940658ec-7078-5ce3-bc26-6db11183b371', 'description' => 'The Borgias', 'correct_answer' => false],
                    ['id' => 'c9ab5970-38be-5a63-ad8b-6eb5b88a3dff', 'description' => 'A Very English Scandal', 'correct_answer' => false],
                    ['id' => '48776df4-46cc-5eab-89c4-a31533cc934d', 'description' => 'The Young Pope', 'correct_answer' => false],
                    ['id' => 'fd4bd6cf-260b-5850-91d6-c3d7fb6ff5de', 'description' => 'The New Pope', 'correct_answer' => false],
                    ['id' => '911ec9ce-6dc4-5d37-985b-bf17823d9f93', 'description' => 'Wolf Hall', 'correct_answer' => true]
                ]],
        ['id' => '3f68a58f-0f22-54d0-a606-3ccc340cf9f7', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which historical series follows the Medici family in Renaissance Florence?', 'difficulty' => 4, 'weight' => 700, 'alternatives' => [
                    ['id' => '03d75c75-9230-5d08-81af-641fe0b50fba', 'description' => 'Wolf Hall', 'correct_answer' => false],
                    ['id' => '8291d394-1cc1-5c95-926a-a28c2c97ab55', 'description' => 'Medici', 'correct_answer' => true],
                    ['id' => 'c5af0953-de17-525b-b60e-cc9414352e57', 'description' => 'The Tudors', 'correct_answer' => false],
                    ['id' => 'a677b160-98b2-5a50-aec0-fec642b346af', 'description' => 'A Very English Scandal', 'correct_answer' => false],
                    ['id' => 'b2d69a1a-4e5f-5a81-8451-be2bb5c9aa58', 'description' => 'The Borgias', 'correct_answer' => false]
                ]],
        ['id' => 'a8443281-c71f-5f03-b6ec-641811c39cd2', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which series follows the Borgia family and its influence during the Renaissance?', 'difficulty' => 4, 'weight' => 601, 'alternatives' => [
                    ['id' => 'e2f53166-d68a-5f1c-b34f-cee4a32ad888', 'description' => 'Medici', 'correct_answer' => false],
                    ['id' => 'b429907f-fb12-5b61-8b78-cbc0aacf9e28', 'description' => 'The Borgias', 'correct_answer' => true],
                    ['id' => 'fbd8f712-494e-5001-80dd-b8557f99bd75', 'description' => 'The Serpent', 'correct_answer' => false],
                    ['id' => 'd7bbaf4e-3830-5f60-8c12-6450e20dde09', 'description' => 'Wolf Hall', 'correct_answer' => false],
                    ['id' => '33dc3736-4f89-552b-83b2-600714f3df0f', 'description' => 'Versailles', 'correct_answer' => false]
                ]],
        ['id' => 'a3d57384-9369-5ca4-a6fc-0591a13ec979', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which Paolo Sorrentino series follows a fictional American pope known as Pius XIII?', 'difficulty' => 4, 'weight' => 693, 'alternatives' => [
                    ['id' => 'bbfabcf2-658a-541e-a0fe-7400f15d54b9', 'description' => 'The Borgias', 'correct_answer' => false],
                    ['id' => '3b72d4ed-7caa-5b0a-b6bb-e9e661a7e78c', 'description' => 'The Young Pope', 'correct_answer' => true],
                    ['id' => 'b7cf96b6-d95b-5408-a1a3-2e6c644a8940', 'description' => 'The Crown', 'correct_answer' => false],
                    ['id' => '036974b9-0a7b-54cf-a740-675799f563d2', 'description' => 'The New Pope', 'correct_answer' => false],
                    ['id' => 'cfcf3be6-be45-5572-83e8-e094236a9a99', 'description' => 'Medici', 'correct_answer' => false]
                ]],
        ['id' => 'b96c3f83-6147-50b9-8c3c-7deac4c905e8', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which sequel to The Young Pope introduces John Paul III to the Vatican?', 'difficulty' => 4, 'weight' => 769, 'alternatives' => [
                    ['id' => '003c7d79-1daf-55e5-a272-41cd7585b961', 'description' => 'The Crown', 'correct_answer' => false],
                    ['id' => '0f4a1f2d-c2cc-5eaf-9329-5bc94e0f7ed0', 'description' => 'Wolf Hall', 'correct_answer' => false],
                    ['id' => '29fd41cc-46d0-58a4-a027-4131e26d7e27', 'description' => 'The New Pope', 'correct_answer' => true],
                    ['id' => 'b745d224-30ce-5119-8f57-c51fb3a4e514', 'description' => 'The Serpent', 'correct_answer' => false],
                    ['id' => 'eb4adf7a-3f5e-586d-b070-11ed141847a5', 'description' => 'The Borgias', 'correct_answer' => false]
                ]],
        ['id' => '68515ba4-5c1b-5e9c-9aa3-29140af9acaa', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which miniseries dramatizes the political scandal involving Jeremy Thorpe and Norman Scott?', 'difficulty' => 4, 'weight' => 770, 'alternatives' => [
                    ['id' => 'd570d193-17d3-514d-b147-7925bf3377b8', 'description' => 'The Crown', 'correct_answer' => false],
                    ['id' => 'd6ee72a7-3937-5293-8c1b-7102abfb6646', 'description' => 'The New Pope', 'correct_answer' => false],
                    ['id' => '52b28a4e-22f2-5ae1-8ee9-85507b3c6732', 'description' => 'Wolf Hall', 'correct_answer' => false],
                    ['id' => '6471c5e8-0d28-560d-a256-4f04c864e2cb', 'description' => 'A Very English Scandal', 'correct_answer' => true],
                    ['id' => '6ce914f3-9f24-53a6-9e92-8373105d0800', 'description' => 'The Serpent', 'correct_answer' => false]
                ]],
        ['id' => 'ebe566e1-913e-5271-936b-c6bd811a9e90', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which Alex Garland miniseries follows an engineer investigating a secret quantum-computing division?', 'difficulty' => 4, 'weight' => 618, 'alternatives' => [
                    ['id' => '54c16f40-b8bc-5e8d-8432-6505240e7d09', 'description' => 'Station Eleven', 'correct_answer' => false],
                    ['id' => 'f33ae5bc-6710-5824-a981-18db5a77872e', 'description' => 'Tales from the Loop', 'correct_answer' => false],
                    ['id' => '8cf61a13-7cdc-521e-9eb0-81aad51faf46', 'description' => 'The Peripheral', 'correct_answer' => false],
                    ['id' => '349c24ca-2069-56bc-96db-6f1b73617255', 'description' => 'The OA', 'correct_answer' => false],
                    ['id' => '76478557-019c-5730-9a46-441d7d97a465', 'description' => 'Devs', 'correct_answer' => true]
                ]],
        ['id' => '49c8b73b-b299-5493-be16-a9dd9b38e1da', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which series begins with Prairie Johnson returning after seven years and taking a new identity?', 'difficulty' => 4, 'weight' => 752, 'alternatives' => [
                    ['id' => '44e2be4d-0155-5958-98fa-4b3b54afdd3e', 'description' => 'Station Eleven', 'correct_answer' => false],
                    ['id' => '83807d27-85da-5e0e-b73f-ba6ccbef6215', 'description' => 'Devs', 'correct_answer' => false],
                    ['id' => '3b9ac94f-068f-5614-806b-120638765cc3', 'description' => '1899', 'correct_answer' => false],
                    ['id' => 'b7e38e1d-6b64-5ccf-953a-ae62386c0d6b', 'description' => 'The OA', 'correct_answer' => true],
                    ['id' => 'f3c147c8-a0fc-5736-afd8-9b4caba6aedb', 'description' => 'Tales from the Loop', 'correct_answer' => false]
                ]],
        ['id' => 'd698868f-6092-535b-87f1-b9c4b43417c7', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which series adapts William Gibson\'s novel about a woman accessing a future reality?', 'difficulty' => 4, 'weight' => 737, 'alternatives' => [
                    ['id' => '438748a7-9cf9-58be-86a0-6d9a492178b8', 'description' => '1899', 'correct_answer' => false],
                    ['id' => 'a6a6cad5-edaa-5c0f-ae52-02782042ada8', 'description' => 'Counterpart', 'correct_answer' => false],
                    ['id' => 'd1cf670f-4fff-56ec-8da6-4aa9c412bc34', 'description' => 'Station Eleven', 'correct_answer' => false],
                    ['id' => 'f0a04d49-1cff-538c-925f-b1d133660913', 'description' => 'Raised by Wolves', 'correct_answer' => false],
                    ['id' => '5cf21152-d4a6-54df-b473-b59923774b16', 'description' => 'The Peripheral', 'correct_answer' => true]
                ]],
        ['id' => '8420ccb3-2328-5240-8ada-731b5444f741', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which miniseries adapts a novel about pandemic survivors and a traveling theater troupe?', 'difficulty' => 4, 'weight' => 767, 'alternatives' => [
                    ['id' => '2add3d61-074e-5dc6-9622-7f3cdbc84065', 'description' => 'Devs', 'correct_answer' => false],
                    ['id' => '8bc3f6a6-b1ae-5a52-871f-070c51ca1b75', 'description' => 'Maniac', 'correct_answer' => false],
                    ['id' => '20498241-3b8d-5775-9b66-5ac72d14100f', 'description' => 'The Third Day', 'correct_answer' => false],
                    ['id' => 'd7f52367-29b1-58e2-9793-2c1e858acb84', 'description' => 'Raised by Wolves', 'correct_answer' => false],
                    ['id' => '80fc5ec3-0225-58ad-b482-6eeac98483d2', 'description' => 'Station Eleven', 'correct_answer' => true]
                ]],
        ['id' => '3d909e87-80f2-52a9-bd11-c2743ac02ba5', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which miniseries follows visitors to an isolated British island with unsettling rituals?', 'difficulty' => 4, 'weight' => 744, 'alternatives' => [
                    ['id' => 'ce5b7a5a-b425-5f87-9453-398f69a4d2ef', 'description' => 'The Third Day', 'correct_answer' => true],
                    ['id' => '20d76c11-ba41-50f6-9c76-a7680df90196', 'description' => 'Maniac', 'correct_answer' => false],
                    ['id' => '95d47578-59fc-5723-8e32-606daa3ab5aa', 'description' => 'Counterpart', 'correct_answer' => false],
                    ['id' => '1180af6f-2faa-554c-ba15-e2ae2ce361c9', 'description' => 'Raised by Wolves', 'correct_answer' => false],
                    ['id' => '7e8953e4-b957-574b-9dd0-63e9cdac8934', 'description' => 'The OA', 'correct_answer' => false]
                ]],
        ['id' => 'f1b13d80-6377-59ab-9a91-fc357375303f', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which science-fiction series follows androids raising human children on a distant planet?', 'difficulty' => 4, 'weight' => 667, 'alternatives' => [
                    ['id' => '43acb5fe-2abb-566e-a455-9d84398c0f6f', 'description' => 'Raised by Wolves', 'correct_answer' => true],
                    ['id' => '862060a9-c3d4-56f0-8d2a-87492b271bec', 'description' => '1899', 'correct_answer' => false],
                    ['id' => '8890ac19-865d-56b4-9229-0d64907e149e', 'description' => 'Counterpart', 'correct_answer' => false],
                    ['id' => '136b2d20-db2c-5f6f-b0b6-6c29b734a000', 'description' => 'The OA', 'correct_answer' => false],
                    ['id' => '63e0674b-c2fc-5680-9549-43b263811750', 'description' => 'Maniac', 'correct_answer' => false]
                ]],
        ['id' => 'b4359548-afe6-5b3a-9e76-ed6d5168b93f', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which series from the creators of Dark follows migrants aboard a ship that encounters a missing vessel?', 'difficulty' => 4, 'weight' => 613, 'alternatives' => [
                    ['id' => 'ed9ce222-46d6-5ce4-9627-b9d149e665f0', 'description' => 'Station Eleven', 'correct_answer' => false],
                    ['id' => 'c8771633-cd3e-5b38-a037-3cd742495cf6', 'description' => '1899', 'correct_answer' => true],
                    ['id' => 'c197b593-d218-5ea5-9ba1-3b368e0bdd14', 'description' => 'Counterpart', 'correct_answer' => false],
                    ['id' => 'e95a7861-d2f7-5a35-bbe3-5118533f73f1', 'description' => 'The Third Day', 'correct_answer' => false],
                    ['id' => '842884e4-9385-56a5-a4d2-891e2dc1d6dd', 'description' => 'Raised by Wolves', 'correct_answer' => false]
                ]],
        ['id' => '95b22766-8185-546f-8084-6d9bfeea4f62', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which science-fiction series is set in a town built above an experimental facility called the Loop?', 'difficulty' => 4, 'weight' => 737, 'alternatives' => [
                    ['id' => '8d74906e-b075-5620-a78c-229eb4ac22fd', 'description' => 'Tales from the Loop', 'correct_answer' => true],
                    ['id' => '5ba66080-29de-5c92-addf-6ae92056e1a7', 'description' => 'Raised by Wolves', 'correct_answer' => false],
                    ['id' => '74ec9465-9436-5b36-b872-b3ea65a42fbe', 'description' => 'The OA', 'correct_answer' => false],
                    ['id' => '99107f49-3ef2-5e78-a9db-ab594c4ec98f', 'description' => 'Maniac', 'correct_answer' => false],
                    ['id' => 'f3b5db5d-f1b2-5ecd-8cde-6f38e0284976', 'description' => 'The Peripheral', 'correct_answer' => false]
                ]],
        ['id' => 'cafef318-78b5-5eab-a255-4f3a4c5e80aa', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which series follows Jonathan Pine as he infiltrates arms dealer Richard Roper\'s organization?', 'difficulty' => 4, 'weight' => 694, 'alternatives' => [
                    ['id' => 'f937b61e-e768-5c8a-80cd-f6f5dcc3b62d', 'description' => 'The Night Manager', 'correct_answer' => true],
                    ['id' => '8ea18157-6777-5684-9669-04b9413b16ca', 'description' => 'The Little Drummer Girl', 'correct_answer' => false],
                    ['id' => 'c2932dac-0a5c-522e-b2a5-df681e05fd33', 'description' => 'A Perfect Spy', 'correct_answer' => false],
                    ['id' => 'dd19a1ed-ba0d-5eb7-a5d8-f7422c6d4589', 'description' => 'The Bureau', 'correct_answer' => false],
                    ['id' => '4f7f39bd-a0c0-547e-ac3e-f2f453c03fd3', 'description' => 'Smiley\'s People', 'correct_answer' => false]
                ]],
        ['id' => '0fc7c543-7ab1-5856-b44a-9dd218e30554', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which miniseries adapts John le Carré\'s novel about Magnus Pym and his father?', 'difficulty' => 4, 'weight' => 626, 'alternatives' => [
                    ['id' => '2019974e-25e5-5629-99c8-c87b1e964b2c', 'description' => 'A Perfect Spy', 'correct_answer' => true],
                    ['id' => '3c4fe292-36ec-5c86-9125-5097f4fbbe09', 'description' => 'The Bureau', 'correct_answer' => false],
                    ['id' => 'bb97b5bb-0de6-5fd7-bdb3-739b7629bf8f', 'description' => 'Slow Horses', 'correct_answer' => false],
                    ['id' => '4833932b-b417-55d2-9c6e-963cdac905bf', 'description' => 'The Sandbaggers', 'correct_answer' => false],
                    ['id' => '0ce254d4-c429-590e-806f-7a95270c0fd6', 'description' => 'Smiley\'s People', 'correct_answer' => false]
                ]],
        ['id' => '78ecf692-8aa4-5842-a9ae-f4c417a8ad01', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which spy series follows disgraced MI5 agents led by Jackson Lamb?', 'difficulty' => 4, 'weight' => 729, 'alternatives' => [
                    ['id' => '756efed6-0ea8-5c15-875c-ee30b8e83fd2', 'description' => 'Tinker Tailor Soldier Spy', 'correct_answer' => false],
                    ['id' => 'ad21d8ee-161a-54ed-84e1-f20244e6cbc3', 'description' => 'The Honourable Woman', 'correct_answer' => false],
                    ['id' => '5df18dbb-5f18-50a0-925f-bd041f7598ef', 'description' => 'The Bureau', 'correct_answer' => false],
                    ['id' => '389f4008-84f4-52cd-a2a0-bf2e90ab2a34', 'description' => 'Slow Horses', 'correct_answer' => true],
                    ['id' => 'e485b49c-4d3a-5eb5-92e7-c8fb454e02bb', 'description' => 'The Little Drummer Girl', 'correct_answer' => false]
                ]],
        ['id' => 'bc6bcb20-0a75-531f-b288-12ce91efa2ea', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which 1982 miniseries continues George Smiley\'s story?', 'difficulty' => 4, 'weight' => 716, 'alternatives' => [
                    ['id' => '684b0e2d-3029-5a7e-b3cb-c59b900460aa', 'description' => 'The Honourable Woman', 'correct_answer' => false],
                    ['id' => '28d3239e-5c78-515c-ae0d-429abaafc95e', 'description' => 'Smiley\'s People', 'correct_answer' => true],
                    ['id' => 'e1b39836-bba6-5c35-b7c4-1606f5c4ddbf', 'description' => 'Slow Horses', 'correct_answer' => false],
                    ['id' => '5ec81a29-122a-5d12-92f6-cb4ad5a84d81', 'description' => 'A Spy Among Friends', 'correct_answer' => false],
                    ['id' => '9c9afadc-c1ef-5076-8742-a73e48a905a5', 'description' => 'The Little Drummer Girl', 'correct_answer' => false]
                ]],
        ['id' => '4621dd2e-e660-593a-a90e-336dab01dbc9', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which British spy drama follows Neil Burnside and covert SIS operations?', 'difficulty' => 4, 'weight' => 611, 'alternatives' => [
                    ['id' => 'a048c68b-ec9b-54be-85a7-9106110f321f', 'description' => 'Slow Horses', 'correct_answer' => false],
                    ['id' => '2269bfe1-45a9-5a3f-8c7c-d0803cc0fad5', 'description' => 'Tinker Tailor Soldier Spy', 'correct_answer' => false],
                    ['id' => '9b363635-1efb-5f99-943b-bb2bb3d3d395', 'description' => 'The Little Drummer Girl', 'correct_answer' => false],
                    ['id' => '0c86612b-a864-5e0c-82db-859a1d31e399', 'description' => 'A Spy Among Friends', 'correct_answer' => false],
                    ['id' => '96321487-84a8-5611-9598-39eb983b49dd', 'description' => 'The Sandbaggers', 'correct_answer' => true]
                ]],
        ['id' => '52d0c2c1-c388-5aca-9d06-087b933406e7', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which miniseries stars Alec Guinness as George Smiley investigating a mole in MI6?', 'difficulty' => 4, 'weight' => 717, 'alternatives' => [
                    ['id' => '6ed7f9aa-ee91-5235-99ef-623a923c3f9b', 'description' => 'The Little Drummer Girl', 'correct_answer' => false],
                    ['id' => 'b06221b9-6455-5fee-8f2c-00f82d39c1f8', 'description' => 'The Honourable Woman', 'correct_answer' => false],
                    ['id' => '13dbac42-ed61-5fb5-84e7-ae0528eeddbb', 'description' => 'Tinker Tailor Soldier Spy', 'correct_answer' => true],
                    ['id' => '00aec4bc-196a-576c-9c2a-024bb6363ef8', 'description' => 'A Perfect Spy', 'correct_answer' => false],
                    ['id' => 'b175d159-474b-51f7-b82c-499d8c751247', 'description' => 'The Sandbaggers', 'correct_answer' => false]
                ]],
        ['id' => 'a81dd532-ddd6-5575-9314-2d2926146ce9', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which series dramatizes the relationship between MI6 officer Nicholas Elliott and Kim Philby?', 'difficulty' => 4, 'weight' => 636, 'alternatives' => [
                    ['id' => 'c1e37f57-8855-58c3-a528-4235ea0f3375', 'description' => 'Tinker Tailor Soldier Spy', 'correct_answer' => false],
                    ['id' => '359f748f-3a9b-583c-a9c4-c71f34a7ebed', 'description' => 'A Spy Among Friends', 'correct_answer' => true],
                    ['id' => '844e350e-0462-5b87-b52b-a6976af4030f', 'description' => 'A Perfect Spy', 'correct_answer' => false],
                    ['id' => '0df6a20a-031e-5b87-bbf8-acdd88b52f00', 'description' => 'The Honourable Woman', 'correct_answer' => false],
                    ['id' => 'ad7927ec-1553-51cf-89e0-5b6c58139b5f', 'description' => 'The Night Manager', 'correct_answer' => false]
                ]],
        ['id' => '1d370d24-20aa-512e-8707-2696f667339c', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which French espionage drama centers on DGSE agents working under fabricated identities?', 'difficulty' => 4, 'weight' => 615, 'alternatives' => [
                    ['id' => '67f25213-5ef9-5fd9-9ca3-5646e0606c6f', 'description' => 'A Perfect Spy', 'correct_answer' => false],
                    ['id' => 'c639ccca-429a-5ace-8575-d9ee57060504', 'description' => 'Slow Horses', 'correct_answer' => false],
                    ['id' => '34bb698d-329b-5883-bc96-bfb171e31cfa', 'description' => 'A Spy Among Friends', 'correct_answer' => false],
                    ['id' => '8e9f79b4-3d8b-564a-99ce-dd853c29a3b9', 'description' => 'Smiley\'s People', 'correct_answer' => false],
                    ['id' => '3f561e7b-69b3-5461-9a68-8da51d6767fa', 'description' => 'The Bureau', 'correct_answer' => true]
                ]],
        ['id' => '0f64d7dd-dbbd-568b-a5f8-665e27e10da5', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which British political satire created by Armando Iannucci features communications director Malcolm Tucker?', 'difficulty' => 4, 'weight' => 728, 'alternatives' => [
                    ['id' => '76bc671c-75c0-5452-8692-f2ce37e997cb', 'description' => 'The Thick of It', 'correct_answer' => true],
                    ['id' => '9aaf9255-03ad-5167-bb05-de2c0474fcff', 'description' => 'The Night Of', 'correct_answer' => false],
                    ['id' => 'c015ba3e-1b94-52e4-908e-90db3957720e', 'description' => 'Goliath', 'correct_answer' => false],
                    ['id' => '80e06f57-bbc2-5a0a-9e7e-8ea5ac522668', 'description' => 'The Good Wife', 'correct_answer' => false],
                    ['id' => '68394bcc-7355-570a-afbf-85da1b15f9e6', 'description' => 'Damages', 'correct_answer' => false]
                ]],
        ['id' => '524e18c2-e33c-59cd-adee-22070e0bc90e', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which legal thriller follows attorney Patty Hewes and her protégé Ellen Parsons?', 'difficulty' => 4, 'weight' => 781, 'alternatives' => [
                    ['id' => '9ea69a39-6bc2-5b7b-a163-e2fdfa19de95', 'description' => 'Damages', 'correct_answer' => true],
                    ['id' => '603339bd-cac9-573e-b550-6916d230d64b', 'description' => 'The Newsroom', 'correct_answer' => false],
                    ['id' => '00c3d235-2d61-56c8-8ffc-0e4ae95a7aa0', 'description' => 'The Thick of It', 'correct_answer' => false],
                    ['id' => '18339f84-eb39-5c60-a0b8-e5a4e4c274f8', 'description' => 'Veep', 'correct_answer' => false],
                    ['id' => 'd644301d-899b-5b49-b845-9e835487f7d5', 'description' => 'Borgen', 'correct_answer' => false]
                ]],
        ['id' => 'a379d254-d75c-5de9-a293-d4589e57338e', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which series follows Diane Lockhart at a law firm after a financial scandal?', 'difficulty' => 4, 'weight' => 700, 'alternatives' => [
                    ['id' => 'af6bd90c-b1d4-5946-bc99-25a01137a067', 'description' => 'The Good Fight', 'correct_answer' => true],
                    ['id' => 'de7ca367-5d68-5c77-9eaa-a5c0d6aae9af', 'description' => 'The Newsroom', 'correct_answer' => false],
                    ['id' => '67ab7e2c-5a27-5edb-847b-5a1e2735c201', 'description' => 'The Thick of It', 'correct_answer' => false],
                    ['id' => '27c2a1e3-914b-5d91-989c-6c3713f34829', 'description' => 'The Good Wife', 'correct_answer' => false],
                    ['id' => '6c2a7e5e-a52e-5a1b-840c-ea96155b83fc', 'description' => 'Goliath', 'correct_answer' => false]
                ]],
        ['id' => '587365e6-97e2-509a-a466-3f07b18cfee4', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which comedy follows Selina Meyer, a U.S. vice president who later runs for president?', 'difficulty' => 4, 'weight' => 771, 'alternatives' => [
                    ['id' => 'cfbf68f3-1ecc-5ed2-8081-7f34aaa69425', 'description' => 'The Good Fight', 'correct_answer' => false],
                    ['id' => '8f7cd7a1-7fd6-58a5-bdad-cbd25343ba52', 'description' => 'The West Wing', 'correct_answer' => false],
                    ['id' => '02f2bdc5-96ec-5cd6-b265-3d6eb5877dbd', 'description' => 'Veep', 'correct_answer' => true],
                    ['id' => 'd2e9b1fa-adef-5f82-b1f6-4d7e54ef0f73', 'description' => 'Damages', 'correct_answer' => false],
                    ['id' => '8d97e6bb-4621-5be3-8b1e-e24a17fdad0b', 'description' => 'Goliath', 'correct_answer' => false]
                ]],
        ['id' => '6486f8d8-c577-566c-9302-a7068d837e03', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which legal drama follows Alicia Florrick as she returns to law after her husband\'s scandal?', 'difficulty' => 4, 'weight' => 664, 'alternatives' => [
                    ['id' => '61cd5ab9-2c86-51d5-b60a-43d351974d8a', 'description' => 'The Newsroom', 'correct_answer' => false],
                    ['id' => 'd134c441-d855-59ed-b80d-5f33c0366c39', 'description' => 'Damages', 'correct_answer' => false],
                    ['id' => 'c41ecea6-f871-5838-a11d-cc750ea52872', 'description' => 'The Night Of', 'correct_answer' => false],
                    ['id' => 'ab357374-e626-5fbd-9d3a-6719ca69c450', 'description' => 'Veep', 'correct_answer' => false],
                    ['id' => '09286829-8142-5ac0-a1ad-a9bdbee93848', 'description' => 'The Good Wife', 'correct_answer' => true]
                ]],
        ['id' => '3db848bb-6441-5b8d-a01f-e0a225550ad9', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which miniseries examines New York\'s criminal justice system after a murder accusation?', 'difficulty' => 4, 'weight' => 609, 'alternatives' => [
                    ['id' => 'd1abe21a-5cf9-5c5a-9704-08f1afa939f5', 'description' => 'The Night Of', 'correct_answer' => true],
                    ['id' => 'aaeaf308-03b3-59a8-be19-90cb780a9ecd', 'description' => 'Veep', 'correct_answer' => false],
                    ['id' => '0d6a4c48-cda3-5f2e-a36d-00120ca048f2', 'description' => 'Borgen', 'correct_answer' => false],
                    ['id' => 'f976cf12-ea26-5e66-9d3e-57e8fce8289c', 'description' => 'The Good Wife', 'correct_answer' => false],
                    ['id' => '2bee317d-e880-5296-9ec0-4a13584fd618', 'description' => 'Goliath', 'correct_answer' => false]
                ]],
        ['id' => '39b03de9-036a-5357-9fa3-12bfac85e64f', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which political drama follows staff of fictional U.S. President Josiah Bartlet?', 'difficulty' => 4, 'weight' => 672, 'alternatives' => [
                    ['id' => 'ba8c30ca-b8cd-5a3b-9932-8950ffa2062d', 'description' => 'The Night Of', 'correct_answer' => false],
                    ['id' => 'd748aad0-37fa-54a8-9b90-318c4a514e05', 'description' => 'Damages', 'correct_answer' => false],
                    ['id' => 'd849fb9b-de5d-575c-968a-b86337133a08', 'description' => 'The Good Fight', 'correct_answer' => false],
                    ['id' => '00cbad8d-7178-568e-a9b4-fdab63d51e26', 'description' => 'Borgen', 'correct_answer' => false],
                    ['id' => 'b7213f85-4268-531a-84e5-f32eed2de9da', 'description' => 'The West Wing', 'correct_answer' => true]
                ]],
        ['id' => '0679c06f-f742-5562-b329-6485a0ff3970', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which series follows lawyer Billy McBride as he takes on powerful corporations?', 'difficulty' => 4, 'weight' => 608, 'alternatives' => [
                    ['id' => '1fe68878-ecda-5730-8ad3-b3ea260fac96', 'description' => 'The Newsroom', 'correct_answer' => false],
                    ['id' => 'c621b02f-9b27-5f46-af92-a2347c0f81e9', 'description' => 'The Good Wife', 'correct_answer' => false],
                    ['id' => 'b10b2881-0b90-523f-a84f-7b54325b31b2', 'description' => 'Damages', 'correct_answer' => false],
                    ['id' => '9e928805-e111-5016-9f5c-3366c0ab362c', 'description' => 'Goliath', 'correct_answer' => true],
                    ['id' => '658b983e-4b0b-5e0e-a31e-02280eeb5dd3', 'description' => 'The Good Fight', 'correct_answer' => false]
                ]],
        ['id' => 'dd8b2651-4aaa-59b7-b00d-6a2e227667a5', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which Dennis Potter miniseries alternates Philip Marlow\'s hospital stay with a fictional detective narrative?', 'difficulty' => 5, 'weight' => 932, 'alternatives' => [
                    ['id' => '02221976-15a1-5c76-9ab6-91ea71ebaa8d', 'description' => 'Brideshead Revisited', 'correct_answer' => false],
                    ['id' => '25d41a9e-8ca3-5029-9419-65a818b15585', 'description' => 'Dekalog', 'correct_answer' => false],
                    ['id' => '8a2d6d08-e782-5c65-8b08-f3e03220bfaf', 'description' => 'Our Friends in the North', 'correct_answer' => false],
                    ['id' => '0ec65bd9-274b-5a4a-b795-3452cdca859b', 'description' => 'The Singing Detective', 'correct_answer' => true],
                    ['id' => '3ae18e90-4c8b-5489-9514-6956a47b6a16', 'description' => 'Edge of Darkness', 'correct_answer' => false]
                ]],
        ['id' => '4656359b-0305-52fe-a824-49cbfbefc6bf', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which Kieślowski television cycle consists of ten films, each engaging with one of the biblical commandments?', 'difficulty' => 5, 'weight' => 971, 'alternatives' => [
                    ['id' => '34d3bdb3-0aed-5194-9776-2724e09e6214', 'description' => 'Brideshead Revisited', 'correct_answer' => false],
                    ['id' => '0adec0da-2fd5-5b52-85ff-6de861e04958', 'description' => 'Berlin Alexanderplatz', 'correct_answer' => false],
                    ['id' => 'fcab4db2-5056-5fce-afd6-6c1dc7f338fa', 'description' => 'The Jewel in the Crown', 'correct_answer' => false],
                    ['id' => '6b90f517-3e2b-5e06-81e4-29fb17db7999', 'description' => 'Dekalog', 'correct_answer' => true],
                    ['id' => '52bae876-53cb-5ae8-bf63-dbea5333b3d1', 'description' => 'Heimat', 'correct_answer' => false]
                ]],
        ['id' => '8ec36905-11c2-536b-a6cc-605b25c05ab1', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which Lars von Trier television production was shot in a documentary-like style in Copenhagen\'s Rigshospitalet?', 'difficulty' => 5, 'weight' => 855, 'alternatives' => [
                    ['id' => '1654e7be-09b3-516f-a8cd-68b89494a204', 'description' => 'The Life and Times of David Lloyd George', 'correct_answer' => false],
                    ['id' => '614c8de5-535b-57aa-b05c-c28a08e860e1', 'description' => 'The Kingdom', 'correct_answer' => true],
                    ['id' => 'e4b26f98-59c4-5721-8908-bdb574e751bf', 'description' => 'Heimat', 'correct_answer' => false],
                    ['id' => '23a9c41c-7ef4-5c35-ab78-12b612e4241c', 'description' => 'Dekalog', 'correct_answer' => false],
                    ['id' => '7343207d-0e5d-5cd9-a385-dc0b55b4590b', 'description' => 'The Singing Detective', 'correct_answer' => false]
                ]],
        ['id' => 'e0a563ce-561a-557d-846f-1fd53ac988fb', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which 1981 Granada Television adaptation stars Jeremy Irons as Charles Ryder?', 'difficulty' => 5, 'weight' => 951, 'alternatives' => [
                    ['id' => 'e1c7c30e-1ccd-526d-bb25-0212158b604f', 'description' => 'Brideshead Revisited', 'correct_answer' => true],
                    ['id' => 'acb42250-1b81-5fff-9a67-fe8fb0ea41a6', 'description' => 'Heimat', 'correct_answer' => false],
                    ['id' => '2c1b3e34-df4b-5625-be65-3565b04adcd9', 'description' => 'Edge of Darkness', 'correct_answer' => false],
                    ['id' => '77fc7917-9809-5ec9-87e1-263d00584c99', 'description' => 'The Life and Times of David Lloyd George', 'correct_answer' => false],
                    ['id' => '884dd390-bc72-5be3-9f78-83ba4ba446f8', 'description' => 'Berlin Alexanderplatz', 'correct_answer' => false]
                ]],
        ['id' => 'df833477-17b9-5347-bb3a-9501e7d04c59', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which BBC drama follows four friends from Newcastle over three decades?', 'difficulty' => 5, 'weight' => 825, 'alternatives' => [
                    ['id' => '4f897ebd-f946-59bb-9f0f-c443f844b9c1', 'description' => 'Brideshead Revisited', 'correct_answer' => false],
                    ['id' => '7efe3b4d-1bf9-5410-adf1-194faefea39c', 'description' => 'Our Friends in the North', 'correct_answer' => true],
                    ['id' => '5839ca92-cb61-5ff5-8d5b-1e3c005f2356', 'description' => 'Berlin Alexanderplatz', 'correct_answer' => false],
                    ['id' => 'd6f428b4-9a21-51d7-8fd5-7bf7621e5697', 'description' => 'The Life and Times of David Lloyd George', 'correct_answer' => false],
                    ['id' => 'f9d0d55f-7aaf-50cb-99d9-aad806728099', 'description' => 'Heimat', 'correct_answer' => false]
                ]],
        ['id' => '0173a9f2-7403-569f-9de3-829afe521f9e', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which 1985 miniseries follows Ronald Craven after his daughter Emma is murdered?', 'difficulty' => 5, 'weight' => 881, 'alternatives' => [
                    ['id' => '0da0b2e0-734d-5165-9036-bff4ba7bea7e', 'description' => 'The Life and Times of David Lloyd George', 'correct_answer' => false],
                    ['id' => '909a9c3a-79ce-5901-9926-baa0f3ca6dcd', 'description' => 'Dekalog', 'correct_answer' => false],
                    ['id' => '0c6f7598-cc2a-5160-993c-8145f729f145', 'description' => 'Heimat', 'correct_answer' => false],
                    ['id' => 'e56ec3bf-1668-5477-b0e4-86b7f5cca415', 'description' => 'Our Friends in the North', 'correct_answer' => false],
                    ['id' => '1942ce93-efef-5e70-b063-b8fa91ddc648', 'description' => 'Edge of Darkness', 'correct_answer' => true]
                ]],
        ['id' => 'e39c920c-9cee-5155-9f3d-502aa18dbb14', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which Edgar Reitz project traces German history through the Simon family and Schabbach?', 'difficulty' => 5, 'weight' => 947, 'alternatives' => [
                    ['id' => '151e06d6-a1d4-5c18-8f88-bbe02c2ac9b1', 'description' => 'The Life and Times of David Lloyd George', 'correct_answer' => false],
                    ['id' => '5d0e349d-72a7-50b3-b7b7-1b15e3a27271', 'description' => 'Our Friends in the North', 'correct_answer' => false],
                    ['id' => '853c859d-ab88-528a-95bc-b297e46997b7', 'description' => 'The Kingdom', 'correct_answer' => false],
                    ['id' => 'b31a19d4-3be8-54ae-9c3c-bc47677d16cd', 'description' => 'Dekalog', 'correct_answer' => false],
                    ['id' => 'dbb72237-6b27-59a5-bd01-ccecd4af6e11', 'description' => 'Heimat', 'correct_answer' => true]
                ]],
        ['id' => '195a94f0-8ee4-52ad-8b36-34984cfa6bb9', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which Fassbinder television work adapts Döblin\'s novel in fourteen episodes and an epilogue?', 'difficulty' => 5, 'weight' => 935, 'alternatives' => [
                    ['id' => '56394473-7600-5357-814b-efe3df9f6a6c', 'description' => 'Heimat', 'correct_answer' => false],
                    ['id' => '2dbfe1e3-66e6-5359-a448-7cee6ba3afd8', 'description' => 'Berlin Alexanderplatz', 'correct_answer' => true],
                    ['id' => 'f88a12db-6eeb-5c79-8860-90b382501a92', 'description' => 'The Jewel in the Crown', 'correct_answer' => false],
                    ['id' => 'b03d0451-381e-5b05-9a0f-01453fed2063', 'description' => 'Brideshead Revisited', 'correct_answer' => false],
                    ['id' => 'd51a35a3-a045-51f3-acaa-caf551823430', 'description' => 'The Life and Times of David Lloyd George', 'correct_answer' => false]
                ]],
        ['id' => 'b5e7f953-f59e-5143-9b76-0d837ceca190', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which Italian crime series follows a prosecutor who is framed and becomes entangled with the mafia?', 'difficulty' => 5, 'weight' => 832, 'alternatives' => [
                    ['id' => 'a588e734-b3f0-5067-8d93-a9c9e8a54797', 'description' => '1994', 'correct_answer' => false],
                    ['id' => 'f986ffd4-92f0-52b9-8fde-d189174ff8c4', 'description' => 'The Bad Guy', 'correct_answer' => true],
                    ['id' => '28a3a807-7c3f-5777-95c1-e29e5171327e', 'description' => '1993', 'correct_answer' => false],
                    ['id' => '05503c73-3ad9-5fae-83da-3a5e6e0c7415', 'description' => 'Suburra: Blood on Rome', 'correct_answer' => false],
                    ['id' => '724152f4-a58f-52d5-8374-ee14d90337d8', 'description' => '1992', 'correct_answer' => false]
                ]],
        ['id' => '58fec795-70bc-5737-88e7-ff4b77970aa4', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which Italian prison drama stars Luca Zingaretti as a prison director facing a crisis?', 'difficulty' => 5, 'weight' => 863, 'alternatives' => [
                    ['id' => '66242d90-1491-5590-bd3a-13e236280c1e', 'description' => 'The King', 'correct_answer' => true],
                    ['id' => '7eb7760b-9c8c-5820-af1a-bb0a91b436dd', 'description' => 'Il Miracolo', 'correct_answer' => false],
                    ['id' => '21ea200e-070f-5719-b4f2-01532ef0c76d', 'description' => '1992', 'correct_answer' => false],
                    ['id' => '6d6dbec7-ad33-5f5c-b71b-5273b53c6d28', 'description' => 'The Young Pope', 'correct_answer' => false],
                    ['id' => '7c05ab62-2ce8-5f10-83bd-f8ac4675780e', 'description' => '1993', 'correct_answer' => false]
                ]],
        ['id' => '5ae4a1fd-83a2-5303-ab11-2d13d2e0f038', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which Italian series follows crime groups, politicians, and the Church competing over land in Rome?', 'difficulty' => 5, 'weight' => 809, 'alternatives' => [
                    ['id' => '50c18a46-b457-5f18-852e-b6215ebbb34f', 'description' => '1992', 'correct_answer' => false],
                    ['id' => '37a45090-c5fe-5a99-894c-ba4f8a446be6', 'description' => 'Romanzo Criminale', 'correct_answer' => false],
                    ['id' => 'b374c22b-a05b-5326-9d0c-83021cfc5e7f', 'description' => 'Suburra: Blood on Rome', 'correct_answer' => true],
                    ['id' => '4dcd678d-95a9-5fbe-bc56-49d4423bb876', 'description' => '1994', 'correct_answer' => false],
                    ['id' => '48496418-1810-5f70-98b4-36dc777e3da1', 'description' => 'The Young Pope', 'correct_answer' => false]
                ]],
        ['id' => 'ac019836-fd92-5f24-9186-f1f5c70da7c2', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which Italian crime series is based on Roberto Saviano\'s book and features Ciro Di Marzio?', 'difficulty' => 5, 'weight' => 972, 'alternatives' => [
                    ['id' => 'ff60e89d-fac6-5d77-ae34-02d3208e1b17', 'description' => 'Gomorrah', 'correct_answer' => true],
                    ['id' => '7222664e-eb25-5219-8545-caf054b5fe5d', 'description' => 'The Bad Guy', 'correct_answer' => false],
                    ['id' => 'df92a977-aa6a-5631-ae0c-e35423a5dfd8', 'description' => '1993', 'correct_answer' => false],
                    ['id' => '42726d71-19b7-507c-8057-753711d43c21', 'description' => '1994', 'correct_answer' => false],
                    ['id' => 'bae6f1cf-5641-51aa-9b89-8f647d23e6b7', 'description' => 'Romanzo Criminale', 'correct_answer' => false]
                ]],
        ['id' => '6b0f3bb7-adab-5bff-9991-7f5449538439', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which Sorrentino series follows fictional pope Lenny Belardo, known as Pius XIII?', 'difficulty' => 5, 'weight' => 949, 'alternatives' => [
                    ['id' => 'c832e88a-b95d-5f32-af7f-6089dd628443', 'description' => 'The Young Pope', 'correct_answer' => true],
                    ['id' => '6b75598b-e3e7-5eba-89c1-5bef164dcec6', 'description' => 'Il Miracolo', 'correct_answer' => false],
                    ['id' => 'f597e27d-0065-5b1d-b51c-34105d40f86d', 'description' => '1994', 'correct_answer' => false],
                    ['id' => 'f9f624a6-b1b9-55c8-be4a-30b8f4b9832f', 'description' => '1993', 'correct_answer' => false],
                    ['id' => '4477fe53-2572-5bdf-8346-41afc38be603', 'description' => 'Suburra: Blood on Rome', 'correct_answer' => false]
                ]],
        ['id' => 'b8b6dd10-49cf-582e-9574-1994f8c27021', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which sequel continues the Italian political and business story set in the year named by its title?', 'difficulty' => 5, 'weight' => 940, 'alternatives' => [
                    ['id' => '5c81c6aa-eac5-5d85-9f9b-13866acb4a31', 'description' => 'The King', 'correct_answer' => false],
                    ['id' => '82f5dc47-448b-5da5-9132-922e0a2a78a0', 'description' => 'Il Miracolo', 'correct_answer' => false],
                    ['id' => '4dc4315c-a211-5682-b46d-c414aede9526', 'description' => 'The Young Pope', 'correct_answer' => false],
                    ['id' => '082d5b5a-d253-5aff-9466-599638548f18', 'description' => 'Gomorrah', 'correct_answer' => false],
                    ['id' => '2739aede-a031-586e-a1d1-34501140af83', 'description' => '1993', 'correct_answer' => true]
                ]],
        ['id' => 'b6108807-4d6d-5b8e-96ab-25ecab526c55', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which Italian series begins with a statue of the Virgin Mary that weeps blood?', 'difficulty' => 5, 'weight' => 997, 'alternatives' => [
                    ['id' => '51b8299b-470c-58e5-9139-ee661e7fd2d5', 'description' => '1994', 'correct_answer' => false],
                    ['id' => 'e88bf8e0-39f6-5a46-9539-b0ae4408f7f3', 'description' => 'The Young Pope', 'correct_answer' => false],
                    ['id' => '2dcaebc0-a3ef-5c1e-ad1b-cd9920845a78', 'description' => 'Romanzo Criminale', 'correct_answer' => false],
                    ['id' => 'ae5ea532-aae6-52bc-8cb0-27d1b1c063b0', 'description' => 'Il Miracolo', 'correct_answer' => true],
                    ['id' => '224ef7ec-5441-546d-84b5-e09608d08937', 'description' => 'The King', 'correct_answer' => false]
                ]],
        ['id' => '7380dfc6-5b3f-5170-9c7a-d47deb853a51', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which Italian series follows the rise and fall of the Banda della Magliana in Rome?', 'difficulty' => 5, 'weight' => 887, 'alternatives' => [
                    ['id' => '194fc122-5fed-580c-b002-0e72abda8174', 'description' => 'Il Miracolo', 'correct_answer' => false],
                    ['id' => '19b3eec4-8d47-538e-aa35-55f3e0a12865', 'description' => '1993', 'correct_answer' => false],
                    ['id' => '8d512701-1dee-5bf3-bbfe-4375a725f8ff', 'description' => 'Romanzo Criminale', 'correct_answer' => true],
                    ['id' => '4c8f1f79-9f4e-5623-a7be-e2f9cde394c4', 'description' => 'Suburra: Blood on Rome', 'correct_answer' => false],
                    ['id' => '61199e60-9985-5fb2-8bda-ed274eca704b', 'description' => 'The Bad Guy', 'correct_answer' => false]
                ]],
        ['id' => 'b6d9b416-5466-5e5a-8ab2-d5a7b54d7419', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which Bergman work was first broadcast in six episodes on Swedish television before a theatrical cut?', 'difficulty' => 5, 'weight' => 803, 'alternatives' => [
                    ['id' => '4ad68730-a55e-5d99-8941-799b9d5fc95e', 'description' => 'I, Claudius', 'correct_answer' => false],
                    ['id' => '8276c91b-0ef2-5b3a-ac9b-647a23a84da4', 'description' => 'Heimat 2', 'correct_answer' => false],
                    ['id' => '8cca21f8-295e-59bd-849f-84bc4f57263f', 'description' => 'Fanny and Alexander', 'correct_answer' => false],
                    ['id' => '9ef75cd4-6d28-5a83-a2ba-63fa67b30d65', 'description' => 'Heimat 3', 'correct_answer' => false],
                    ['id' => '26b9db63-bb27-53be-a2d6-b12aa76d2844', 'description' => 'Scenes from a Marriage', 'correct_answer' => true]
                ]],
        ['id' => '35d64c8b-88c8-5829-889a-7073a4a59f77', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which continuation of Edgar Reitz\'s saga follows young artists in Munich during the 1960s?', 'difficulty' => 5, 'weight' => 1000, 'alternatives' => [
                    ['id' => '6a13fdb9-c563-593b-bf9a-05436f927b82', 'description' => 'Heimat 2', 'correct_answer' => true],
                    ['id' => 'ff47db48-4e11-59df-adef-c6af73bd1d93', 'description' => 'The Adventures of Sherlock Holmes', 'correct_answer' => false],
                    ['id' => '6ba2b462-064e-50ea-a055-a548c07967f3', 'description' => 'Scenes from a Marriage', 'correct_answer' => false],
                    ['id' => 'c1e60806-d4b8-52f5-bdc2-432b4a3a0e3e', 'description' => 'I, Claudius', 'correct_answer' => false],
                    ['id' => 'eb8d6eb4-7c31-53e8-b77b-35c7ce893cd4', 'description' => 'Fanny and Alexander', 'correct_answer' => false]
                ]],
        ['id' => '76b8c06c-a878-5b9b-b355-eff09990fda3', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which Bergman work was conceived as a television miniseries and follows two children in the Ekdahl family?', 'difficulty' => 5, 'weight' => 934, 'alternatives' => [
                    ['id' => 'cb241872-d871-52c7-a786-6d8815088d02', 'description' => 'The Adventures of Sherlock Holmes', 'correct_answer' => false],
                    ['id' => '24009e36-a086-58ab-bb56-7126ed02bbf3', 'description' => 'Fanny and Alexander', 'correct_answer' => true],
                    ['id' => '3c602b39-ee63-5214-907c-d4b9cabd72b9', 'description' => 'The Singing Detective', 'correct_answer' => false],
                    ['id' => '207c68e9-1513-56eb-9cb3-08ae5dfd25fe', 'description' => 'I, Claudius', 'correct_answer' => false],
                    ['id' => '54f2377b-fc5a-5f4e-82d7-1859c3ea26cc', 'description' => 'Pennies from Heaven', 'correct_answer' => false]
                ]],
        ['id' => '3c7e3965-df42-5cf6-975c-0155996620e0', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which Granada Television series stars Jeremy Brett as Sherlock Holmes?', 'difficulty' => 5, 'weight' => 815, 'alternatives' => [
                    ['id' => 'f0a732c7-88e4-5f77-904f-32e1c31b580b', 'description' => 'The Adventures of Sherlock Holmes', 'correct_answer' => true],
                    ['id' => '87252998-bb66-55f4-9c6f-f87fd60d9c06', 'description' => 'The Kingdom', 'correct_answer' => false],
                    ['id' => 'e201e0a5-7999-5f13-a491-626641bcbf6b', 'description' => 'Heimat 3', 'correct_answer' => false],
                    ['id' => '6bcdb0f3-6ecb-53e0-b32b-1056c715608d', 'description' => 'Scenes from a Marriage', 'correct_answer' => false],
                    ['id' => 'f2888518-cde5-5b19-873c-64cf74efdf05', 'description' => 'Heimat 2', 'correct_answer' => false]
                ]],
        ['id' => '9e2f4491-fd7a-5588-a782-358db2e90e36', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which part of the Heimat saga follows German reunification and its effects on Schabbach?', 'difficulty' => 5, 'weight' => 937, 'alternatives' => [
                    ['id' => '4d467b72-abdf-5f2c-a3ef-ef1bd69b0724', 'description' => 'The Decalogue', 'correct_answer' => false],
                    ['id' => '98ea500a-bc18-57d3-b129-d72c38aa07f5', 'description' => 'I, Claudius', 'correct_answer' => false],
                    ['id' => 'acaf721a-bdab-52b1-97a7-2fcc849ac842', 'description' => 'Heimat 3', 'correct_answer' => true],
                    ['id' => 'a986d05c-cd36-5beb-96f3-881bca610a6d', 'description' => 'Pennies from Heaven', 'correct_answer' => false],
                    ['id' => '087d3af2-f8da-53be-8bd7-1e2054da7f0f', 'description' => 'The Singing Detective', 'correct_answer' => false]
                ]],
        ['id' => 'd688e683-d198-5fd2-bd4d-46e9bf907bf8', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which Danish series returned with a third season decades after its first two seasons?', 'difficulty' => 5, 'weight' => 925, 'alternatives' => [
                    ['id' => 'aa2bc1ed-8a81-54bb-b24a-3f8e1fc3a8a6', 'description' => 'The Kingdom', 'correct_answer' => true],
                    ['id' => '5adb11c8-9847-5c8f-998e-b92b6f49660d', 'description' => 'Heimat 2', 'correct_answer' => false],
                    ['id' => 'c7a2869f-711e-50c8-9409-19e997b75845', 'description' => 'Pennies from Heaven', 'correct_answer' => false],
                    ['id' => '522ca566-3d09-5cb3-875a-bcd277baf949', 'description' => 'The Decalogue', 'correct_answer' => false],
                    ['id' => 'f83fad15-0f42-55d4-83e7-827cb6cb7bd0', 'description' => 'Heimat 3', 'correct_answer' => false]
                ]],
        ['id' => '0f137216-0352-5425-b4bb-c6e389a8fc79', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which Dennis Potter miniseries follows a sheet-music salesman during the Great Depression?', 'difficulty' => 5, 'weight' => 834, 'alternatives' => [
                    ['id' => 'c14336c8-a93e-5b00-a071-81ff492cbb4a', 'description' => 'Fanny and Alexander', 'correct_answer' => false],
                    ['id' => '6f03b5d8-aa27-5e14-ab2a-cdfda23a3776', 'description' => 'I, Claudius', 'correct_answer' => false],
                    ['id' => 'a86faa62-ba95-5dd8-9947-216d21bc101a', 'description' => 'Heimat 3', 'correct_answer' => false],
                    ['id' => '2fba2776-eb3d-5818-a708-416c8f854de4', 'description' => 'The Adventures of Sherlock Holmes', 'correct_answer' => false],
                    ['id' => 'c1420a6f-5123-5801-a16b-0aa545a42883', 'description' => 'Pennies from Heaven', 'correct_answer' => true]
                ]],
        ['id' => '516f99cf-03f8-5b92-a590-c41c6527b66f', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which English-language title is commonly used for Kieślowski\'s ten-film television cycle?', 'difficulty' => 5, 'weight' => 819, 'alternatives' => [
                    ['id' => 'eacc8478-45ad-5e4c-bd65-bcfbe6d8fbf3', 'description' => 'The Decalogue', 'correct_answer' => true],
                    ['id' => '5da5d827-31ad-583f-b6d6-bd3619544b5f', 'description' => 'Heimat 2', 'correct_answer' => false],
                    ['id' => '9d99f62d-4b1b-51a4-a61c-a1a2d36ee1a6', 'description' => 'The Adventures of Sherlock Holmes', 'correct_answer' => false],
                    ['id' => 'c89eb13c-b32d-587b-8b5c-e8433d55399c', 'description' => 'Pennies from Heaven', 'correct_answer' => false],
                    ['id' => 'e49642d6-fae5-51da-a6b8-3263ef72953e', 'description' => 'The Singing Detective', 'correct_answer' => false]
                ]],
        ['id' => 'f312359a-fa35-5967-8c49-c5665ab6bd6e', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which ITV espionage drama created by Ian Mackintosh follows Neil Burnside and the SIS?', 'difficulty' => 5, 'weight' => 998, 'alternatives' => [
                    ['id' => '914877f4-1004-59b5-adb7-f3617d64ccc6', 'description' => 'A Very English Scandal', 'correct_answer' => false],
                    ['id' => '0945b015-338d-5c7f-b84f-3a1aaa641a72', 'description' => 'The Little Drummer Girl', 'correct_answer' => false],
                    ['id' => '8da442dd-cfab-5d78-a94e-5ef07db56e95', 'description' => 'The Sandbaggers', 'correct_answer' => true],
                    ['id' => '163795df-aa56-5456-bb06-14fcac63ab11', 'description' => 'The Shadow Line', 'correct_answer' => false],
                    ['id' => 'f688d9d6-503a-533e-95c3-43701752ae97', 'description' => 'Callan', 'correct_answer' => false]
                ]],
        ['id' => '8dd7d71f-46f1-5a71-ba7a-08883622cf3a', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which 1982 miniseries continues George Smiley\'s story after Tinker Tailor Soldier Spy?', 'difficulty' => 5, 'weight' => 869, 'alternatives' => [
                    ['id' => 'bb22cda4-0258-501d-85e4-7d0a63ea9222', 'description' => 'A Very English Scandal', 'correct_answer' => false],
                    ['id' => '2f68b64c-7cdd-5e57-b357-a3769d2d95c2', 'description' => 'Callan', 'correct_answer' => false],
                    ['id' => '9889186e-97f5-55bc-8783-fa39a2cafc69', 'description' => 'Tinker Tailor Soldier Spy', 'correct_answer' => false],
                    ['id' => '28d73dde-c957-5704-9ecf-bc3cf845f27a', 'description' => 'The Sandbaggers', 'correct_answer' => false],
                    ['id' => 'cb27d3d2-b486-50ca-9b9e-1d1ad74a0632', 'description' => 'Smiley\'s People', 'correct_answer' => true]
                ]],
        ['id' => '4cf21478-18d3-54d1-b4d4-eb1f4f590c1e', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which 2018 miniseries was directed by Park Chan-wook and follows actress Charlie?', 'difficulty' => 5, 'weight' => 969, 'alternatives' => [
                    ['id' => 'dd0d8b39-b531-54ff-9fbd-51f25ac46faa', 'description' => 'Smiley\'s People', 'correct_answer' => false],
                    ['id' => 'f89ab963-15c3-539b-83fb-d0b6c65a3ac7', 'description' => 'The Shadow Line', 'correct_answer' => false],
                    ['id' => 'b6bf7d3d-40cf-5861-a6e0-20da9ddf3c02', 'description' => 'A Perfect Spy', 'correct_answer' => false],
                    ['id' => '1d4d2ba3-4210-5c98-9b71-8c79a1087819', 'description' => 'The Little Drummer Girl', 'correct_answer' => true],
                    ['id' => '593e1ddf-866c-5de7-b37f-53b0011e5265', 'description' => 'A Very English Scandal', 'correct_answer' => false]
                ]],
        ['id' => '18725b4c-ffae-5ab8-bae2-8921c0275500', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which 1979 adaptation stars Alec Guinness as George Smiley investigating a mole?', 'difficulty' => 5, 'weight' => 980, 'alternatives' => [
                    ['id' => '4d24c9c4-24d6-531d-aeb5-1ef6e1eaf0e3', 'description' => 'Tinker Tailor Soldier Spy', 'correct_answer' => true],
                    ['id' => 'f62df521-8bf4-59f6-b08c-a4a2ee01f6cd', 'description' => 'The Honourable Woman', 'correct_answer' => false],
                    ['id' => 'cd3198ea-7228-5635-a70b-2d7d4ceefbbe', 'description' => 'The Sandbaggers', 'correct_answer' => false],
                    ['id' => 'a3570272-358f-5fe0-92df-e8c4fc70c4d3', 'description' => 'The Prisoner', 'correct_answer' => false],
                    ['id' => '48e2a8d6-29ab-58df-b652-7a1f7bdd79f5', 'description' => 'The Little Drummer Girl', 'correct_answer' => false]
                ]],
        ['id' => 'ab5a7c78-28cc-551d-8e92-fb1d5ab1e184', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which 1967 British series stars Patrick McGoohan as a former agent known only as Number Six?', 'difficulty' => 5, 'weight' => 907, 'alternatives' => [
                    ['id' => '6d40a82b-51b3-553b-ac78-d68ec2339a6a', 'description' => 'Smiley\'s People', 'correct_answer' => false],
                    ['id' => '5354756d-a583-5a12-a766-7c34a07cb125', 'description' => 'A Very English Scandal', 'correct_answer' => false],
                    ['id' => 'dd9cc9b9-b7d5-57fd-889a-3d120ecdd4a0', 'description' => 'The Shadow Line', 'correct_answer' => false],
                    ['id' => 'c74a1be8-e170-5f2c-bef1-7c8287b30ebc', 'description' => 'The Prisoner', 'correct_answer' => true],
                    ['id' => 'd4e262ab-2cab-555e-bb47-3b5291d2f390', 'description' => 'The Sandbaggers', 'correct_answer' => false]
                ]],
        ['id' => '26e67856-b796-5862-8bb8-5c8445016e19', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which British spy series stars Edward Woodward as reluctant intelligence operative David Callan?', 'difficulty' => 5, 'weight' => 816, 'alternatives' => [
                    ['id' => 'a13944ab-dec1-5028-8ff8-46250d554336', 'description' => 'Callan', 'correct_answer' => true],
                    ['id' => 'cd08209e-34c1-53c4-9df1-63ae85848119', 'description' => 'The Honourable Woman', 'correct_answer' => false],
                    ['id' => '0af1e8f1-caa6-5464-8065-15a0d7d016bb', 'description' => 'The Prisoner', 'correct_answer' => false],
                    ['id' => '8caf98f1-1658-53c5-a417-a0c818285f4f', 'description' => 'The Shadow Line', 'correct_answer' => false],
                    ['id' => '6eed7891-8b6c-5893-94b3-2f78e47a2e86', 'description' => 'The Sandbaggers', 'correct_answer' => false]
                ]],
        ['id' => '93b97655-5a57-5c62-9619-5c5910f24434', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which Hugo Blick miniseries stars Maggie Gyllenhaal as Nessa Stein?', 'difficulty' => 5, 'weight' => 925, 'alternatives' => [
                    ['id' => 'afb1e985-0427-5ea7-82d8-cca927fd997b', 'description' => 'Smiley\'s People', 'correct_answer' => false],
                    ['id' => '63c7c0e6-f32e-5923-a40c-4b0e0224934b', 'description' => 'The Little Drummer Girl', 'correct_answer' => false],
                    ['id' => '6f41348c-bb0e-537b-9bec-8722339b5f5a', 'description' => 'A Very English Scandal', 'correct_answer' => false],
                    ['id' => 'ca4518ae-e11e-5ca1-a372-ad5152c46e0b', 'description' => 'The Honourable Woman', 'correct_answer' => true],
                    ['id' => '6039ed81-61fb-536d-8bdf-4015d3bccd82', 'description' => 'The Shadow Line', 'correct_answer' => false]
                ]],
        ['id' => 'a00a200f-1739-5eb3-9b68-afe106319e24', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which Russell T Davies miniseries stars Hugh Grant as Jeremy Thorpe?', 'difficulty' => 5, 'weight' => 870, 'alternatives' => [
                    ['id' => '1f73311b-c9ca-55dd-8750-0f23db0e087d', 'description' => 'The Little Drummer Girl', 'correct_answer' => false],
                    ['id' => '7e117e68-517c-5773-a610-8aeaff67495e', 'description' => 'Tinker Tailor Soldier Spy', 'correct_answer' => false],
                    ['id' => 'b34b937b-0155-5acf-b957-416d4bdb9502', 'description' => 'A Very English Scandal', 'correct_answer' => true],
                    ['id' => 'e2929b09-7d2b-5cae-b490-efb30c6b3979', 'description' => 'Smiley\'s People', 'correct_answer' => false],
                    ['id' => 'ebcb04df-aaef-5384-86b0-ec94c8dea650', 'description' => 'A Perfect Spy', 'correct_answer' => false]
                ]],
        ['id' => 'be9f7b78-17e6-5ea3-8300-f7033750a4b6', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which Australian series follows a detective investigating a murder with possible supernatural connections in Tasmania?', 'difficulty' => 5, 'weight' => 826, 'alternatives' => [
                    ['id' => 'da0b5a39-8811-5965-bfd5-7fd3049acfc2', 'description' => 'Pustina', 'correct_answer' => false],
                    ['id' => 'a5089255-31df-5a0e-82e3-50e18ac305fa', 'description' => 'The Kettering Incident', 'correct_answer' => false],
                    ['id' => '4f2c3ed3-4676-5b90-ae5f-573796aaaa66', 'description' => 'Deadwind', 'correct_answer' => false],
                    ['id' => 'b6d16667-b0bc-5ca0-ae5e-c67f28193fe6', 'description' => 'The Gloaming', 'correct_answer' => true],
                    ['id' => '91b79bd1-4a4f-5ae0-ae4d-acc9fbe609de', 'description' => 'Fortitude', 'correct_answer' => false]
                ]],
        ['id' => 'a5d598b2-b3e7-56d8-baba-d446e294fde5', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which Finnish series follows investigator Sofia Karppi after the death of a woman linked to a construction company?', 'difficulty' => 5, 'weight' => 958, 'alternatives' => [
                    ['id' => '81a8a2a8-ba9f-5e02-b728-f8b2e8b2cf17', 'description' => 'The Valhalla Murders', 'correct_answer' => false],
                    ['id' => '0576cdba-25a8-594f-8bda-9642ee8f34ee', 'description' => 'The Chestnut Man', 'correct_answer' => false],
                    ['id' => '7bd849ca-ebb4-570d-b58d-933855e5eb8e', 'description' => 'Top of the Lake', 'correct_answer' => false],
                    ['id' => '6a1aeb1a-00d2-5a79-91b7-39f723186707', 'description' => 'Deadwind', 'correct_answer' => true],
                    ['id' => '2eb39c02-5b15-5a96-96af-de8c99fb02f3', 'description' => 'Trapped', 'correct_answer' => false]
                ]],
        ['id' => '1b5922be-e5da-56bb-8313-cd6bed510358', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which Jane Campion series follows detective Robin Griffin investigating a girl\'s disappearance in New Zealand?', 'difficulty' => 5, 'weight' => 851, 'alternatives' => [
                    ['id' => 'a35103de-5e9c-57c9-b5d0-49e7734ba0f8', 'description' => 'Deadwind', 'correct_answer' => false],
                    ['id' => '59aa61d9-602f-5202-b082-7f6d035e5b9b', 'description' => 'Top of the Lake', 'correct_answer' => true],
                    ['id' => 'b80e7ba9-d66a-545d-a101-a03f168af048', 'description' => 'The Chestnut Man', 'correct_answer' => false],
                    ['id' => 'cabcdf91-6ef8-5e9d-a856-a21d5a99c418', 'description' => 'Pustina', 'correct_answer' => false],
                    ['id' => '4dca35a9-5889-5cd9-a2f2-b14f3eaa90e8', 'description' => 'The Valhalla Murders', 'correct_answer' => false]
                ]],
        ['id' => '788f1aea-9d3f-58fd-8468-ddb2b5d6987d', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which British series is set in a fictional Arctic community and begins with an unusual murder?', 'difficulty' => 5, 'weight' => 887, 'alternatives' => [
                    ['id' => '622cc67a-f070-5ef8-afc6-c51fbfa23983', 'description' => 'Pustina', 'correct_answer' => false],
                    ['id' => '7132997a-441d-570e-8bb9-9b1377596aca', 'description' => 'The Valhalla Murders', 'correct_answer' => false],
                    ['id' => 'c443149c-5076-50fe-8084-14959cda7d74', 'description' => 'Deadwind', 'correct_answer' => false],
                    ['id' => '5f2a96cb-3d49-56cd-b409-2c4a5e409d5f', 'description' => 'Fortitude', 'correct_answer' => true],
                    ['id' => '42695d22-74e2-554f-8f52-fd0beab47faa', 'description' => 'The Chestnut Man', 'correct_answer' => false]
                ]],
        ['id' => '77afa154-79d3-5661-b0af-5faff19a3d65', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which Australian series follows a doctor returning to Tasmania and becoming linked to two girls\' disappearance?', 'difficulty' => 5, 'weight' => 867, 'alternatives' => [
                    ['id' => 'd3e5d65c-c205-54c9-b26c-d388f7ebccc4', 'description' => 'Deadwind', 'correct_answer' => false],
                    ['id' => '4d9f4ad3-95f3-5716-a9ab-b8d708d85073', 'description' => 'Fortitude', 'correct_answer' => false],
                    ['id' => 'f26ddc97-0c89-5756-be96-543a40dff8f6', 'description' => 'The Kettering Incident', 'correct_answer' => true],
                    ['id' => 'f7ace046-f117-57e4-83ab-e040539504b5', 'description' => 'Trapped', 'correct_answer' => false],
                    ['id' => '7b6d8f64-256b-594a-9f5e-96a77e34f076', 'description' => 'The Gloaming', 'correct_answer' => false]
                ]],
        ['id' => '865a030a-6cdc-5a81-a96f-e6c1bdfc1b81', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which Icelandic series follows a police chief in a snowbound town after a body is discovered?', 'difficulty' => 5, 'weight' => 953, 'alternatives' => [
                    ['id' => '5d903742-a469-5e96-b747-488835ecf6a9', 'description' => 'Fortitude', 'correct_answer' => false],
                    ['id' => '395e96c9-220d-53ad-8f10-5ab29e00eed7', 'description' => 'Trapped', 'correct_answer' => true],
                    ['id' => '8f8083a3-6b48-535d-a71a-889c929ad61c', 'description' => 'Pustina', 'correct_answer' => false],
                    ['id' => 'abce4f82-16d9-5de3-b577-836793ce3f5f', 'description' => 'Deadwind', 'correct_answer' => false],
                    ['id' => '3207e668-ad8c-5dba-95fb-aaecf0922430', 'description' => 'The Kettering Incident', 'correct_answer' => false]
                ]],
        ['id' => 'e790563f-f31e-5c32-8e7b-cda32c248e67', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which Danish crime series follows investigators who find chestnut figurines at murder scenes?', 'difficulty' => 5, 'weight' => 830, 'alternatives' => [
                    ['id' => 'ae44694a-15db-59be-a3dc-de4321b0401b', 'description' => 'Fortitude', 'correct_answer' => false],
                    ['id' => '365d6290-871c-5200-b393-f8981da7fc6a', 'description' => 'Bordertown', 'correct_answer' => false],
                    ['id' => '23448071-4fb3-5c47-bc8b-82691cad8e3e', 'description' => 'The Gloaming', 'correct_answer' => false],
                    ['id' => 'b42eea3f-6727-55da-905a-14952fb032f1', 'description' => 'Pustina', 'correct_answer' => false],
                    ['id' => 'e9c8f9a1-563a-5a7d-945b-2bdeb563cb99', 'description' => 'The Chestnut Man', 'correct_answer' => true]
                ]],
        ['id' => 'b8d56e45-d89a-5c10-8b7a-a39f9b223345', 'locale' => 'en-US', 'category' => 'c0a63e4e-7e2f-575e-be3a-7073a44b6572', 'question' => 'Which Icelandic series follows investigations linked to a former children\'s home in Reykjavík?', 'difficulty' => 5, 'weight' => 931, 'alternatives' => [
                    ['id' => 'b8b1d484-2c8f-57c1-9df8-1b0a77fbea58', 'description' => 'Bordertown', 'correct_answer' => false],
                    ['id' => '4e287417-4e71-59c2-a0a9-f983ae974816', 'description' => 'Top of the Lake', 'correct_answer' => false],
                    ['id' => 'aa1b3ed5-7827-5c20-bf79-8cc4fb38fc16', 'description' => 'The Chestnut Man', 'correct_answer' => false],
                    ['id' => 'fa888539-cc56-5448-a86d-b68db314f09e', 'description' => 'The Valhalla Murders', 'correct_answer' => true],
                    ['id' => '1f0452c8-e226-5d28-a353-ef9f76bc0e9e', 'description' => 'Fortitude', 'correct_answer' => false]
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
