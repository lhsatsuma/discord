<?php

namespace Database\Seeders\Trivia;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TriviaEnUsHistorySeeder extends Seeder
{
    private const CATEGORY = ['id' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'created_by' => 'SYSTEM', 'short_description' => 'history', 'description' => 'History'];

    private const QUESTIONS = [
        ['id' => 'f5ebff4d-2381-58f5-8057-cec7a1a045d3', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which ancient empire had its capital at Rome and later Constantinople?', 'difficulty' => 1, 'weight' => 189, 'alternatives' => [
                    ['id' => 'bb3568e4-200b-57d1-884b-65c5b059a351', 'description' => 'Roman Empire', 'correct_answer' => true],
                    ['id' => 'b301fad4-5ed2-5a8a-82dd-aa52169400bc', 'description' => 'Ancient China', 'correct_answer' => false],
                    ['id' => 'cc76bdfb-0db8-5ca8-b2c4-17c8c7c5b703', 'description' => 'Ancient Greece', 'correct_answer' => false],
                    ['id' => '0695514d-9ee7-557d-bd1b-7d8e8f44965c', 'description' => 'Maya civilization', 'correct_answer' => false],
                    ['id' => 'e5bea9cd-8c90-57ce-bb5d-0ff279daeb5b', 'description' => 'Ancient Egypt', 'correct_answer' => false]
                ]],
        ['id' => '9769492a-7c41-5eb3-b6cd-7c7dbe3fa3d6', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which ancient Mediterranean people were renowned maritime traders and spread an alphabetic script?', 'difficulty' => 1, 'weight' => 151, 'alternatives' => [
                    ['id' => '2cb28498-542f-5ee3-80a9-9b69de346865', 'description' => 'Maya civilization', 'correct_answer' => false],
                    ['id' => 'd1f5d1bc-05db-58a1-95b9-790546f29068', 'description' => 'Phoenicians', 'correct_answer' => true],
                    ['id' => '78978dd9-bb17-5806-9fc4-e015ea999d92', 'description' => 'Aztec Empire', 'correct_answer' => false],
                    ['id' => '1c692f75-5e91-5eee-98ae-fa46935b72c0', 'description' => 'Persian Empire', 'correct_answer' => false],
                    ['id' => '7aa43d67-fb1d-5b66-b904-c029728ee633', 'description' => 'Inca Empire', 'correct_answer' => false]
                ]],
        ['id' => '7cf1c322-0757-5299-8d6d-c7bbafc7406d', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which Mesoamerican empire had its capital at Tenochtitlan?', 'difficulty' => 1, 'weight' => 191, 'alternatives' => [
                    ['id' => '701025b2-bf41-53e1-8fff-fb20c6c4a9c2', 'description' => 'Ancient Egypt', 'correct_answer' => false],
                    ['id' => '94088088-4926-5cc5-8052-f51d3c257786', 'description' => 'Persian Empire', 'correct_answer' => false],
                    ['id' => '093d4f8a-1344-5e8e-a683-2f5a46b2152d', 'description' => 'Aztec Empire', 'correct_answer' => true],
                    ['id' => '2c78936e-b566-5921-ba6c-96c136b06d61', 'description' => 'Indus Valley Civilization', 'correct_answer' => false],
                    ['id' => '28190606-e36b-5ea4-b0f2-c375f208b752', 'description' => 'Inca Empire', 'correct_answer' => false]
                ]],
        ['id' => '83105af4-c0e6-594d-8a86-6ba80720ab87', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which civilization built the pyramids at Giza?', 'difficulty' => 1, 'weight' => 131, 'alternatives' => [
                    ['id' => 'b5cfff99-9af3-5807-be23-5bae086e35ed', 'description' => 'Ancient Egypt', 'correct_answer' => true],
                    ['id' => '9a1c29ec-a7ca-5382-bad4-7750aeb7e685', 'description' => 'Maya civilization', 'correct_answer' => false],
                    ['id' => 'b3273152-ede1-5eaa-aaff-02ca199fd5c5', 'description' => 'Phoenicians', 'correct_answer' => false],
                    ['id' => '9163dc02-e4e6-5d31-9b46-d172a4b2d76e', 'description' => 'Indus Valley Civilization', 'correct_answer' => false],
                    ['id' => '4d430e84-682a-513a-8a9c-eef610e67712', 'description' => 'Roman Empire', 'correct_answer' => false]
                ]],
        ['id' => 'c79f30c5-8a82-5de1-9bba-e9626734a185', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which civilization developed early dynasties such as the Shang and Zhou?', 'difficulty' => 1, 'weight' => 166, 'alternatives' => [
                    ['id' => '2c68650c-0c0b-502e-8256-e6ec4dff018d', 'description' => 'Ancient Egypt', 'correct_answer' => false],
                    ['id' => '1299560a-90c4-5ba4-83f0-3543c34f07b1', 'description' => 'Ancient China', 'correct_answer' => true],
                    ['id' => '665ed2d4-5685-5891-9b20-5596dbaa6444', 'description' => 'Indus Valley Civilization', 'correct_answer' => false],
                    ['id' => '3f5cc8db-8281-5c13-a141-0f240808c757', 'description' => 'Ancient Greece', 'correct_answer' => false],
                    ['id' => '4b7b1522-c615-5a58-9ff0-76b5f5ed636d', 'description' => 'Persian Empire', 'correct_answer' => false]
                ]],
        ['id' => '7b571c34-c22b-5ec8-a374-dbe895a09c4a', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which ancient empire was founded by Cyrus the Great?', 'difficulty' => 1, 'weight' => 135, 'alternatives' => [
                    ['id' => 'f65d6d9c-14a2-5f52-83bb-44b0c9cf482a', 'description' => 'Persian Empire', 'correct_answer' => true],
                    ['id' => '3422279f-11ce-5a90-8084-fb5dcdeda077', 'description' => 'Inca Empire', 'correct_answer' => false],
                    ['id' => 'd3422861-7ded-5d42-89d7-41f2c2932b56', 'description' => 'Ancient Greece', 'correct_answer' => false],
                    ['id' => '4d2e266f-8a30-53ae-9822-f5709ef551a5', 'description' => 'Maya civilization', 'correct_answer' => false],
                    ['id' => '3e1ffb3f-929c-56ae-a834-5dee8ffc3b20', 'description' => 'Aztec Empire', 'correct_answer' => false]
                ]],
        ['id' => 'f9b155df-1135-5d1f-8d83-b6654ecdda8d', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which Mesoamerican civilization built cities such as Tikal and Palenque?', 'difficulty' => 1, 'weight' => 139, 'alternatives' => [
                    ['id' => 'a40c6a44-1c0d-5f58-b6f7-14fca0ad1cee', 'description' => 'Ancient Greece', 'correct_answer' => false],
                    ['id' => '849780e2-7735-5197-ad36-f7652b55940e', 'description' => 'Phoenicians', 'correct_answer' => false],
                    ['id' => '7578d150-afee-58be-862c-0ad50e7a4341', 'description' => 'Indus Valley Civilization', 'correct_answer' => false],
                    ['id' => '24c4a94e-3ebf-5f1b-9081-be7e36acdf58', 'description' => 'Persian Empire', 'correct_answer' => false],
                    ['id' => '86c287df-79bd-5fe3-83c9-0fd1d9c6fe65', 'description' => 'Maya civilization', 'correct_answer' => true]
                ]],
        ['id' => '293eb10a-5ad2-5682-aea6-a0a15c85ae79', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which civilization developed the city-states of Athens and Sparta?', 'difficulty' => 1, 'weight' => 171, 'alternatives' => [
                    ['id' => '93b6e20a-1b9f-578a-be49-e0bf31ef60aa', 'description' => 'Maya civilization', 'correct_answer' => false],
                    ['id' => 'f81440b7-fd12-57df-b721-b017f4a3920e', 'description' => 'Ancient Greece', 'correct_answer' => true],
                    ['id' => '4ebca16b-a05c-5ec8-b7e6-bda211fe2a61', 'description' => 'Roman Empire', 'correct_answer' => false],
                    ['id' => '2a61d603-c10e-552d-b016-98686a514aa0', 'description' => 'Phoenicians', 'correct_answer' => false],
                    ['id' => '62e3e63c-aaba-5ef0-a2f4-9ddb72574d18', 'description' => 'Ancient China', 'correct_answer' => false]
                ]],
        ['id' => '6cccb863-f46e-5fc9-b0b4-58517ed31271', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which 1917 revolution ended the Russian Empire and brought the Bolsheviks to power?', 'difficulty' => 1, 'weight' => 184, 'alternatives' => [
                    ['id' => '33ab61fe-bef1-517c-8ec3-c8ca00f8130c', 'description' => 'French Revolution', 'correct_answer' => false],
                    ['id' => '449e2c49-1e4b-5bf9-a556-7c22fb197f40', 'description' => 'World War I', 'correct_answer' => false],
                    ['id' => '471b4c9c-df6b-5e39-b4a1-d4d763d422a5', 'description' => 'World War II', 'correct_answer' => false],
                    ['id' => '79b95fa4-d253-5b9c-8e2c-3d0229cc5243', 'description' => 'Spanish Civil War', 'correct_answer' => false],
                    ['id' => '0fca3789-1dc5-51e4-8045-f72ebf1a86ab', 'description' => 'Russian Revolution', 'correct_answer' => true]
                ]],
        ['id' => 'a0ae4882-9914-5dbe-b859-e1435e30c3e7', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which war was fought in the United States from 1861 to 1865?', 'difficulty' => 1, 'weight' => 155, 'alternatives' => [
                    ['id' => '4751b58c-d16b-5b39-9b7f-0327e79483ed', 'description' => 'American Civil War', 'correct_answer' => true],
                    ['id' => '91c77cb8-30c8-531e-a037-c52e68d0def7', 'description' => 'Spanish Civil War', 'correct_answer' => false],
                    ['id' => '58e16824-153f-57aa-aae1-360a9f62c11e', 'description' => 'Russian Revolution', 'correct_answer' => false],
                    ['id' => 'aa04dcdc-0a8d-5088-b49e-fafe9bc50cf8', 'description' => 'World War II', 'correct_answer' => false],
                    ['id' => 'e7af57c2-83b3-5ae7-8096-4a9ce42f55ff', 'description' => 'Cold War', 'correct_answer' => false]
                ]],
        ['id' => '125aa69e-dfe2-5bff-8ad7-81ec78009d68', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which conflict involved North Vietnam, South Vietnam, and major U.S. intervention?', 'difficulty' => 1, 'weight' => 171, 'alternatives' => [
                    ['id' => 'a263ce7f-f4f8-53e6-b8a3-a1ec6c584513', 'description' => 'Korean War', 'correct_answer' => false],
                    ['id' => 'efde0515-3cb3-56a0-9410-22db0ec9c900', 'description' => 'Vietnam War', 'correct_answer' => true],
                    ['id' => '184f02c7-a6ac-523b-8e48-5d94efa6a65c', 'description' => 'Cold War', 'correct_answer' => false],
                    ['id' => '1ac89864-89d9-59ec-afb8-5c2e5a0bb060', 'description' => 'American Civil War', 'correct_answer' => false],
                    ['id' => '98a836cd-2631-5dfc-a2ce-8a134052fad2', 'description' => 'French Revolution', 'correct_answer' => false]
                ]],
        ['id' => 'd4b44a3b-f5ca-59fd-ae47-a71319257c3a', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'What period of geopolitical tension between the United States and Soviet Union followed World War II?', 'difficulty' => 1, 'weight' => 109, 'alternatives' => [
                    ['id' => 'c90995ea-807d-5c4d-983b-d648f8fce580', 'description' => 'Vietnam War', 'correct_answer' => false],
                    ['id' => '7c14f5e3-f51b-5dd4-8940-37866ce18b08', 'description' => 'Spanish Civil War', 'correct_answer' => false],
                    ['id' => 'c346963e-4780-53b4-b69a-55358e5462c6', 'description' => 'Cold War', 'correct_answer' => true],
                    ['id' => 'f6d33167-3913-556e-af04-b59b7415c60f', 'description' => 'Korean War', 'correct_answer' => false],
                    ['id' => '6d5a2e1e-a16a-59b0-8d34-1e6ac8cc43bd', 'description' => 'World War II', 'correct_answer' => false]
                ]],
        ['id' => '8d6fa6f7-8788-5443-8ef6-86b380ece963', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which 1618–1648 European conflict ended with the Peace of Westphalia?', 'difficulty' => 1, 'weight' => 104, 'alternatives' => [
                    ['id' => 'f0711a0a-69ce-5c2b-84ec-bb6f330c963d', 'description' => 'Cold War', 'correct_answer' => false],
                    ['id' => 'b27db7ef-afeb-5ef1-86bf-ede4e348502d', 'description' => 'Vietnam War', 'correct_answer' => false],
                    ['id' => 'bb85e1e2-797b-5dc7-ab81-7791a7279ce4', 'description' => 'Thirty Years\' War', 'correct_answer' => true],
                    ['id' => '22c39e22-ff15-54d8-8d08-ab8b01a2f560', 'description' => 'Korean War', 'correct_answer' => false],
                    ['id' => '0c7dd723-bb62-55c8-b781-edd886504b23', 'description' => 'World War II', 'correct_answer' => false]
                ]],
        ['id' => 'fc2b4fc4-8191-56fa-ae16-4ab6cdb71013', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which global conflict began in 1914 and ended in 1918?', 'difficulty' => 1, 'weight' => 137, 'alternatives' => [
                    ['id' => '22b8e62c-c338-54f2-8f5a-758be123ce8f', 'description' => 'World War II', 'correct_answer' => false],
                    ['id' => 'a085fdce-28e1-5896-a865-78df901a0eec', 'description' => 'Vietnam War', 'correct_answer' => false],
                    ['id' => '63c2c7a7-2f73-525b-b1e6-30951bb29699', 'description' => 'World War I', 'correct_answer' => true],
                    ['id' => 'ab9d6a66-1b2c-5990-94d2-db1df8c2fc56', 'description' => 'Cold War', 'correct_answer' => false],
                    ['id' => 'e0f5a04f-1f03-56ab-9645-a4ee63a3303f', 'description' => 'French Revolution', 'correct_answer' => false]
                ]],
        ['id' => '57c274fe-f520-5c29-868a-c1000306a01d', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which 1936–1939 conflict ended with Franco\'s Nationalist victory?', 'difficulty' => 1, 'weight' => 181, 'alternatives' => [
                    ['id' => 'e5e89b4c-18f9-5d19-bd69-3931868f85eb', 'description' => 'Cold War', 'correct_answer' => false],
                    ['id' => 'af38a742-d951-5eaf-b5f5-507b7e91a955', 'description' => 'Spanish Civil War', 'correct_answer' => true],
                    ['id' => 'c60aca7c-5771-5972-a42d-a20df27eec19', 'description' => 'World War I', 'correct_answer' => false],
                    ['id' => 'd190bb7b-fc25-5234-a1d6-9f41713f6f6f', 'description' => 'French Revolution', 'correct_answer' => false],
                    ['id' => 'b92a8e6d-6ccb-5205-9aa0-da49f5d2b391', 'description' => 'Korean War', 'correct_answer' => false]
                ]],
        ['id' => '057a8430-8432-5e5f-8099-f4bb4cd7b5e6', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which 1950–1953 conflict ended with an armistice near the 38th parallel?', 'difficulty' => 1, 'weight' => 130, 'alternatives' => [
                    ['id' => '96c8deb9-f978-5051-9e6b-a780aa6aa477', 'description' => 'Vietnam War', 'correct_answer' => false],
                    ['id' => '9ab17e8f-db4f-58a8-9bef-b567d506e16f', 'description' => 'World War II', 'correct_answer' => false],
                    ['id' => '524502b3-b6ba-5b68-a0a4-cebee118623e', 'description' => 'Korean War', 'correct_answer' => true],
                    ['id' => 'a69bd4d6-4f39-5b1e-b542-18e905f42cf3', 'description' => 'World War I', 'correct_answer' => false],
                    ['id' => 'c88b0d9b-275a-553a-bf81-e2ff82bc7907', 'description' => 'American Civil War', 'correct_answer' => false]
                ]],
        ['id' => '9248b29a-cd1f-5aad-8c68-7ec60f3c1bcb', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which president was associated with the Square Deal and conservation policies?', 'difficulty' => 1, 'weight' => 132, 'alternatives' => [
                    ['id' => '762968ac-94cc-57c5-9475-0539d8d4d9c6', 'description' => 'Harry S. Truman', 'correct_answer' => false],
                    ['id' => '2249acbc-73df-5af7-ba66-24afe44bfba1', 'description' => 'George Washington', 'correct_answer' => false],
                    ['id' => '34337bdf-2c2b-5ac3-81ca-dea455ee826b', 'description' => 'Abraham Lincoln', 'correct_answer' => false],
                    ['id' => '405f51db-7699-5536-9d8d-88f7834a571b', 'description' => 'Theodore Roosevelt', 'correct_answer' => true],
                    ['id' => '001f86a0-6290-5ff5-9f12-49668c890cf5', 'description' => 'Dwight D. Eisenhower', 'correct_answer' => false]
                ]],
        ['id' => '4f04ba0b-5013-59ba-807a-797178699918', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which U.S. president authorized atomic bombings of Japan in 1945?', 'difficulty' => 1, 'weight' => 144, 'alternatives' => [
                    ['id' => '66e2e5d7-a000-5437-9108-58ffc40f1156', 'description' => 'Abraham Lincoln', 'correct_answer' => false],
                    ['id' => 'd90572d2-f9c8-5f95-957f-ec77c98de0ab', 'description' => 'John F. Kennedy', 'correct_answer' => false],
                    ['id' => 'dc146ead-4eda-5124-b8a8-a984b0a4ced6', 'description' => 'Harry S. Truman', 'correct_answer' => true],
                    ['id' => '2be543e3-fea9-5bc3-8bf7-850adb3e2190', 'description' => 'Thomas Jefferson', 'correct_answer' => false],
                    ['id' => '5e52fa84-9dc4-5031-8fb4-0c5ba450619c', 'description' => 'Theodore Roosevelt', 'correct_answer' => false]
                ]],
        ['id' => '5e2b1d3a-c560-5105-8153-0509a67d442f', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which U.S. president was assassinated in Dallas in 1963?', 'difficulty' => 1, 'weight' => 157, 'alternatives' => [
                    ['id' => '1e67d8cd-fab7-5322-8eea-d28245bbceb3', 'description' => 'Theodore Roosevelt', 'correct_answer' => false],
                    ['id' => '0e82402a-9b39-5dd9-9667-f634af041d6e', 'description' => 'Franklin D. Roosevelt', 'correct_answer' => false],
                    ['id' => '875afe45-48b2-571c-b2ba-5e5716023a4d', 'description' => 'John F. Kennedy', 'correct_answer' => true],
                    ['id' => 'b46b1f39-d24b-578c-8c67-1c2ba210e8e1', 'description' => 'George Washington', 'correct_answer' => false],
                    ['id' => '9d2b0a5a-a3b0-5745-b446-61c2c60a0bf4', 'description' => 'Dwight D. Eisenhower', 'correct_answer' => false]
                ]],
        ['id' => 'b6199d83-d70a-5de6-a309-e7b6b2641f01', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which U.S. president served from 1981 to 1989 and played a major role in late Cold War diplomacy?', 'difficulty' => 1, 'weight' => 163, 'alternatives' => [
                    ['id' => 'aa0fb39e-62e2-5754-a44d-26ce93c38d72', 'description' => 'Ronald Reagan', 'correct_answer' => true],
                    ['id' => '3cf0a659-edb1-542a-ba93-6e03a1dfb7a7', 'description' => 'Thomas Jefferson', 'correct_answer' => false],
                    ['id' => 'a35e0a80-caba-57ea-95c8-5aa0174d9ba8', 'description' => 'George Washington', 'correct_answer' => false],
                    ['id' => '95ac9938-dc26-51e1-bfe4-12826bc1f54c', 'description' => 'Abraham Lincoln', 'correct_answer' => false],
                    ['id' => 'd9e4218a-4480-54fa-86b1-42782c7fa881', 'description' => 'Harry S. Truman', 'correct_answer' => false]
                ]],
        ['id' => 'beea4fc8-3c8e-5984-b03a-f45483b0ed48', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which president led the United States through most of the Great Depression and World War II?', 'difficulty' => 1, 'weight' => 189, 'alternatives' => [
                    ['id' => 'cd989b44-fce3-57af-b8f0-41946a445065', 'description' => 'Harry S. Truman', 'correct_answer' => false],
                    ['id' => 'cb55aabe-365f-56bb-9f35-23b484e53bff', 'description' => 'George Washington', 'correct_answer' => false],
                    ['id' => '2aafabd5-278e-5580-a10d-59f4a0792f95', 'description' => 'John F. Kennedy', 'correct_answer' => false],
                    ['id' => 'bc124545-3f08-564e-a07c-9f9a5c49d621', 'description' => 'Franklin D. Roosevelt', 'correct_answer' => true],
                    ['id' => 'ac35428d-c4d5-5b99-b60a-f0e0549e3c88', 'description' => 'Dwight D. Eisenhower', 'correct_answer' => false]
                ]],
        ['id' => 'a2a73088-6748-5e4c-a2d3-48dee6bb6127', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which U.S. president was Supreme Allied Commander in Europe during World War II?', 'difficulty' => 1, 'weight' => 171, 'alternatives' => [
                    ['id' => '84f82974-bcca-5bdc-8efc-fe2e0c4511c1', 'description' => 'Abraham Lincoln', 'correct_answer' => false],
                    ['id' => 'aa94ea92-729d-5170-a973-f84a55e282ff', 'description' => 'Franklin D. Roosevelt', 'correct_answer' => false],
                    ['id' => '60ff6377-4ed7-5188-942a-317b2feecc67', 'description' => 'John F. Kennedy', 'correct_answer' => false],
                    ['id' => '64ca90a5-51bd-549f-8d32-027ef03b7dd0', 'description' => 'Dwight D. Eisenhower', 'correct_answer' => true],
                    ['id' => 'cf0f8010-2d5d-5075-a8e8-b7f90342c054', 'description' => 'Ronald Reagan', 'correct_answer' => false]
                ]],
        ['id' => '4e9e051c-c793-52cf-b3a9-d407529faa68', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which U.S. president issued the Emancipation Proclamation during the Civil War?', 'difficulty' => 1, 'weight' => 158, 'alternatives' => [
                    ['id' => '3b5a5513-21a8-5805-89b2-7385366770d3', 'description' => 'Abraham Lincoln', 'correct_answer' => true],
                    ['id' => '850b1bf6-18ac-501b-b232-b439754e8cb6', 'description' => 'Theodore Roosevelt', 'correct_answer' => false],
                    ['id' => 'b9c351c0-2e07-56c9-9597-a807e569cd38', 'description' => 'Harry S. Truman', 'correct_answer' => false],
                    ['id' => '5e312009-d763-51bf-abdf-19e4bfd405c0', 'description' => 'George Washington', 'correct_answer' => false],
                    ['id' => 'c5e236ba-0c0a-5ca9-8c76-1e97975df2c1', 'description' => 'Ronald Reagan', 'correct_answer' => false]
                ]],
        ['id' => '67a17d19-2668-5872-93ba-ba2d284f8ca9', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Who was the first president of the United States?', 'difficulty' => 1, 'weight' => 171, 'alternatives' => [
                    ['id' => '5db14deb-a8f5-5360-a7cb-f5fbac2ddf6a', 'description' => 'Ronald Reagan', 'correct_answer' => false],
                    ['id' => 'bd33b0f8-ea8b-50bc-9b84-3dfe43fadb94', 'description' => 'Franklin D. Roosevelt', 'correct_answer' => false],
                    ['id' => 'd3e2e6d2-9600-5336-9884-c0981e15d7cd', 'description' => 'Dwight D. Eisenhower', 'correct_answer' => false],
                    ['id' => 'b0ac12cd-13d3-5d04-b03e-a248c3075da2', 'description' => 'George Washington', 'correct_answer' => true],
                    ['id' => '3b34dd3a-e76e-59a8-8f6b-f79e1c4e377b', 'description' => 'Thomas Jefferson', 'correct_answer' => false]
                ]],
        ['id' => '31e78f52-1c67-5bc9-97c4-2dc4c96399bc', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which 1948 United Nations document sets out a common standard of human rights?', 'difficulty' => 1, 'weight' => 180, 'alternatives' => [
                    ['id' => '247b7922-5bba-54d8-9367-a7a2dea7f371', 'description' => 'Declaration of Independence', 'correct_answer' => false],
                    ['id' => 'aae9e8b2-4f7c-5a6b-a482-f25ddb8d06d0', 'description' => 'Universal Declaration of Human Rights', 'correct_answer' => true],
                    ['id' => '0d7f00db-491b-56ed-9df4-8c59aca481ff', 'description' => 'Gettysburg Address', 'correct_answer' => false],
                    ['id' => 'd82fa997-ae01-550c-b1bf-33a96ab07c88', 'description' => 'Edict of Milan', 'correct_answer' => false],
                    ['id' => '9c27591b-acd5-5385-bf8f-5d7b22600642', 'description' => 'Code of Hammurabi', 'correct_answer' => false]
                ]],
        ['id' => 'c0638042-e056-5329-9574-a47d67d151fd', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which 1776 document announced the American colonies\' separation from Britain?', 'difficulty' => 1, 'weight' => 189, 'alternatives' => [
                    ['id' => '0773ea5d-bc91-52e8-a1e3-55e27a3274e2', 'description' => 'Declaration of Independence', 'correct_answer' => true],
                    ['id' => '2e6cce87-e5f3-5b77-a842-8f4c2d0b994f', 'description' => 'Magna Carta', 'correct_answer' => false],
                    ['id' => '95dc7ec3-95f1-53f3-a66c-c1b74cb0d5c8', 'description' => 'Edict of Milan', 'correct_answer' => false],
                    ['id' => '827f8c19-7ff7-5f3f-871c-630d1642919d', 'description' => 'Treaty of Versailles', 'correct_answer' => false],
                    ['id' => 'dea23d2c-6715-5c53-ac00-69d8452ef80e', 'description' => 'Emancipation Proclamation', 'correct_answer' => false]
                ]],
        ['id' => '44a1e3b2-2bce-5ca3-9897-f308ddcd9e13', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which 1787 document established the framework of the U.S. federal government?', 'difficulty' => 1, 'weight' => 154, 'alternatives' => [
                    ['id' => 'd1ee91d8-352d-52c0-bef7-2ad2f8ef679d', 'description' => 'Declaration of Independence', 'correct_answer' => false],
                    ['id' => '19871be3-2e5f-5aca-9b8c-317201be8ad3', 'description' => 'Gettysburg Address', 'correct_answer' => false],
                    ['id' => '28d13b44-82b5-599d-a6eb-c56a1812611b', 'description' => 'Emancipation Proclamation', 'correct_answer' => false],
                    ['id' => 'e409f04e-f9b3-589d-b647-7382aea61478', 'description' => 'U.S. Constitution', 'correct_answer' => true],
                    ['id' => 'e1e64f54-6b72-5bfb-a69e-309fae5b8c63', 'description' => 'Code of Hammurabi', 'correct_answer' => false]
                ]],
        ['id' => 'fb9c0848-4d33-5134-93f2-b2835bdb7e51', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which 313 agreement established religious toleration for Christians in the Roman Empire?', 'difficulty' => 1, 'weight' => 195, 'alternatives' => [
                    ['id' => '86b5eda4-098b-5182-a4a4-79d99f055f50', 'description' => 'Edict of Milan', 'correct_answer' => true],
                    ['id' => '700d19a4-612e-5d62-be79-3be9ae4bb941', 'description' => 'Declaration of Independence', 'correct_answer' => false],
                    ['id' => '450f7ffe-92b2-59a0-b7e0-2ced36e9f1cf', 'description' => 'Gettysburg Address', 'correct_answer' => false],
                    ['id' => 'b8eabb2d-5fb5-543f-8e5c-6de76d7b7c43', 'description' => 'Universal Declaration of Human Rights', 'correct_answer' => false],
                    ['id' => '6b738d63-ef53-58c5-90e2-0dcd4f096cd0', 'description' => 'Magna Carta', 'correct_answer' => false]
                ]],
        ['id' => '7199e719-5e8d-5a85-b680-fa9bd22dec80', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'What name is given to the first ten amendments to the U.S. Constitution?', 'difficulty' => 1, 'weight' => 158, 'alternatives' => [
                    ['id' => 'babb0814-2ce8-54ab-90a5-eabcee18f106', 'description' => 'Treaty of Versailles', 'correct_answer' => false],
                    ['id' => '8ee75de7-5d75-53ba-913a-6d749045bdc2', 'description' => 'Code of Hammurabi', 'correct_answer' => false],
                    ['id' => '8cd65b79-6059-5284-885f-c84687813892', 'description' => 'Gettysburg Address', 'correct_answer' => false],
                    ['id' => 'cc3fccf5-9206-5971-b93f-f48cf07a3f21', 'description' => 'Bill of Rights', 'correct_answer' => true],
                    ['id' => '5ddcc474-913f-5894-907c-89f647155d06', 'description' => 'Magna Carta', 'correct_answer' => false]
                ]],
        ['id' => 'f9abbaa9-a40b-517a-bd6b-eda4b5363c5d', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which 1215 charter limited certain powers of the English king?', 'difficulty' => 1, 'weight' => 171, 'alternatives' => [
                    ['id' => '6d82cdd4-1fd6-58a2-a4c2-a15e8176cb6b', 'description' => 'Magna Carta', 'correct_answer' => true],
                    ['id' => 'cd05b96f-4b98-573c-b913-908107a65192', 'description' => 'Emancipation Proclamation', 'correct_answer' => false],
                    ['id' => '0142d14e-cdd2-58c6-a0bd-78b2a0029176', 'description' => 'U.S. Constitution', 'correct_answer' => false],
                    ['id' => 'f5c218a9-f4a4-5b69-9f79-4acb13422605', 'description' => 'Treaty of Versailles', 'correct_answer' => false],
                    ['id' => 'ebfca7cc-2039-5a4e-afa2-b23f1b6d28d9', 'description' => 'Bill of Rights', 'correct_answer' => false]
                ]],
        ['id' => '73143a64-cf96-5b22-9d2b-f59fb6054806', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which ancient Babylonian law collection is associated with King Hammurabi?', 'difficulty' => 1, 'weight' => 106, 'alternatives' => [
                    ['id' => '530015ac-2949-5e8b-9025-f4f64f923e1f', 'description' => 'Edict of Milan', 'correct_answer' => false],
                    ['id' => 'ce85c2a9-4e9c-5998-aa24-c59557ef02e8', 'description' => 'Code of Hammurabi', 'correct_answer' => true],
                    ['id' => 'b1776118-e252-52b2-bd4b-92e1fc403489', 'description' => 'U.S. Constitution', 'correct_answer' => false],
                    ['id' => '40af46df-5bec-59c1-acf3-12891eaeda07', 'description' => 'Gettysburg Address', 'correct_answer' => false],
                    ['id' => 'e25e4d95-bb32-5066-bdd4-3681e6a24e45', 'description' => 'Declaration of Independence', 'correct_answer' => false]
                ]],
        ['id' => '6d1bafda-d87e-50cd-9875-11f6fbb81cef', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which 1919 treaty formally ended the state of war between Germany and the Allied Powers?', 'difficulty' => 1, 'weight' => 118, 'alternatives' => [
                    ['id' => '891ba6bd-2654-5382-87cf-793d6b7bca81', 'description' => 'U.S. Constitution', 'correct_answer' => false],
                    ['id' => 'ebc1b348-2f2c-5d6f-81ca-bd51c7ebe434', 'description' => 'Treaty of Versailles', 'correct_answer' => true],
                    ['id' => '9d4014fb-a1fc-5f37-9b17-9affb5783b00', 'description' => 'Bill of Rights', 'correct_answer' => false],
                    ['id' => '20634f5c-fe8e-5cdf-ba84-838805d8263e', 'description' => 'Edict of Milan', 'correct_answer' => false],
                    ['id' => 'fe8310b0-a797-5bde-9347-f2b222065b16', 'description' => 'Code of Hammurabi', 'correct_answer' => false]
                ]],
        ['id' => '7768cc1a-19d3-5a48-b804-b99117c3d0da', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which Venetian traveler\'s account described journeys through Asia?', 'difficulty' => 1, 'weight' => 109, 'alternatives' => [
                    ['id' => '106d5b0d-3934-56d8-a6c4-c46986cb845d', 'description' => 'James Cook', 'correct_answer' => false],
                    ['id' => '7a4e1d7b-9600-5339-a946-e3720c449bae', 'description' => 'Ferdinand Magellan', 'correct_answer' => false],
                    ['id' => '9872acd5-f97b-5a19-8de9-f78bd84b15c9', 'description' => 'Marco Polo', 'correct_answer' => true],
                    ['id' => '30bcd4c5-0e93-579c-8ed4-191d7b6fc7a3', 'description' => 'Ernest Shackleton', 'correct_answer' => false],
                    ['id' => 'aab05e26-81db-5826-8a91-af511542742f', 'description' => 'Zheng He', 'correct_answer' => false]
                ]],
        ['id' => '29876960-7402-56e7-9577-9f37c8bfb499', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which Antarctic explorer led the Endurance expedition?', 'difficulty' => 1, 'weight' => 121, 'alternatives' => [
                    ['id' => '87db687b-3377-528d-ac84-cd5582c0aa5a', 'description' => 'Christopher Columbus', 'correct_answer' => false],
                    ['id' => 'cc1bf832-4e29-52f9-b138-c3d292de7075', 'description' => 'Marco Polo', 'correct_answer' => false],
                    ['id' => '01081785-cda2-5bdb-b046-668e6f69fce4', 'description' => 'Ernest Shackleton', 'correct_answer' => true],
                    ['id' => '41f0cb13-8796-5bb8-b393-37c0ec414620', 'description' => 'Vasco da Gama', 'correct_answer' => false],
                    ['id' => '8c04c03d-34c3-59a1-bdfc-8b4b15928c98', 'description' => 'Roald Amundsen', 'correct_answer' => false]
                ]],
        ['id' => '35d46976-a3e5-5bc2-884f-c83f548480b3', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Whose expedition completed the first circumnavigation of Earth, although he died before it finished?', 'difficulty' => 1, 'weight' => 101, 'alternatives' => [
                    ['id' => '0a6b9e3e-c6ac-509c-a8e7-8838e2ab318f', 'description' => 'Roald Amundsen', 'correct_answer' => false],
                    ['id' => 'a0ba18bc-40fc-5196-8063-e87f80488892', 'description' => 'Ferdinand Magellan', 'correct_answer' => true],
                    ['id' => '13042470-d13d-5fb3-931b-f0b2a66d841f', 'description' => 'Amerigo Vespucci', 'correct_answer' => false],
                    ['id' => '644ebad7-045e-5bb6-8290-5f25bc5dd92d', 'description' => 'Ernest Shackleton', 'correct_answer' => false],
                    ['id' => 'e293823b-7bc5-5c9c-8782-61ac797e4da5', 'description' => 'Vasco da Gama', 'correct_answer' => false]
                ]],
        ['id' => 'c7417984-540d-57f6-bfcc-95829a57f5bb', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which Ming dynasty admiral led major treasure voyages across the Indian Ocean?', 'difficulty' => 1, 'weight' => 189, 'alternatives' => [
                    ['id' => 'e12bcfff-f235-574c-aa65-f3f48ce5b867', 'description' => 'Christopher Columbus', 'correct_answer' => false],
                    ['id' => 'aa666192-b836-5305-a59b-c8dcb8ec5bd1', 'description' => 'Ibn Battuta', 'correct_answer' => false],
                    ['id' => '6c70f349-1d87-56f5-9d1d-4c1af1a7cba0', 'description' => 'Ferdinand Magellan', 'correct_answer' => false],
                    ['id' => 'a414aba4-3825-50a1-ba05-04e902c308d0', 'description' => 'Roald Amundsen', 'correct_answer' => false],
                    ['id' => 'a056605b-b424-5dab-86cb-7e58d8c20317', 'description' => 'Zheng He', 'correct_answer' => true]
                ]],
        ['id' => '5b79cb48-dece-5b43-a9aa-afa7454ce22f', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which Portuguese explorer reached India by sea around the Cape of Good Hope in 1498?', 'difficulty' => 1, 'weight' => 151, 'alternatives' => [
                    ['id' => '18e8dd2d-f6ef-502a-922c-d516a493126c', 'description' => 'Ibn Battuta', 'correct_answer' => false],
                    ['id' => '9461b0b2-1644-523d-ad55-c5acef1fc676', 'description' => 'Zheng He', 'correct_answer' => false],
                    ['id' => '2ff10350-a8e4-51a8-a59b-7e4e00d0e259', 'description' => 'Vasco da Gama', 'correct_answer' => true],
                    ['id' => '82ab687d-bb59-5f89-b528-f5f11e359334', 'description' => 'Ernest Shackleton', 'correct_answer' => false],
                    ['id' => 'e60558c6-9ebc-59d3-a6f1-331590772c18', 'description' => 'Roald Amundsen', 'correct_answer' => false]
                ]],
        ['id' => 'e6e4d617-3c62-5f69-8383-129f0a66df8c', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which explorer\'s name became the basis for the name America?', 'difficulty' => 1, 'weight' => 110, 'alternatives' => [
                    ['id' => '7eb7875d-7b4c-550d-9589-d2c1cb184b9f', 'description' => 'Amerigo Vespucci', 'correct_answer' => true],
                    ['id' => '0bccf9aa-9a7c-5ef5-a03b-a35edd0211d6', 'description' => 'Marco Polo', 'correct_answer' => false],
                    ['id' => 'c879fba0-c2fe-57f3-a604-88d232039893', 'description' => 'Ferdinand Magellan', 'correct_answer' => false],
                    ['id' => '84ebf96d-f11b-56ac-9c43-56f2524fe353', 'description' => 'Ernest Shackleton', 'correct_answer' => false],
                    ['id' => '4b57cb02-288b-5ffc-8c6e-0415b2a5dbaf', 'description' => 'Vasco da Gama', 'correct_answer' => false]
                ]],
        ['id' => 'ce84978b-b667-51e0-9c37-d26da376a6c5', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which Moroccan traveler journeyed extensively across Africa, Asia, and Europe in the fourteenth century?', 'difficulty' => 1, 'weight' => 160, 'alternatives' => [
                    ['id' => '002ac18f-5a4b-581c-9a47-598a96e90efe', 'description' => 'Ferdinand Magellan', 'correct_answer' => false],
                    ['id' => '5a43d025-436b-5716-b7c0-e5e3d20d82c0', 'description' => 'Ernest Shackleton', 'correct_answer' => false],
                    ['id' => 'b1eb7410-dadf-5516-9456-ad1dc399d32a', 'description' => 'Ibn Battuta', 'correct_answer' => true],
                    ['id' => '32119750-2759-501b-9ecf-664114bf112f', 'description' => 'Vasco da Gama', 'correct_answer' => false],
                    ['id' => '20ddc2d4-19b7-582b-9a42-5c8f560c2ed7', 'description' => 'Roald Amundsen', 'correct_answer' => false]
                ]],
        ['id' => '5451ad40-ae33-57cd-87c7-8fb83c74c98f', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which British explorer charted parts of the Pacific, including eastern Australia and New Zealand?', 'difficulty' => 1, 'weight' => 154, 'alternatives' => [
                    ['id' => 'd1ced5bc-9a4a-5675-b682-bceed2039b5e', 'description' => 'Ferdinand Magellan', 'correct_answer' => false],
                    ['id' => '3009ffac-1ac6-54a9-adfa-2f60e5c8aa44', 'description' => 'Roald Amundsen', 'correct_answer' => false],
                    ['id' => '4a35b8cc-bf73-5641-bb44-6c4abc06c903', 'description' => 'Vasco da Gama', 'correct_answer' => false],
                    ['id' => 'aa4fbfed-5d06-562b-b066-bad93af66820', 'description' => 'James Cook', 'correct_answer' => true],
                    ['id' => '8e072b93-ebf4-5ec3-9269-15f647f7c267', 'description' => 'Ibn Battuta', 'correct_answer' => false]
                ]],
        ['id' => '1b90f75d-494c-5c02-9226-ae1513e6d614', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which 1942–1943 battle was a major turning point on the Eastern Front?', 'difficulty' => 2, 'weight' => 342, 'alternatives' => [
                    ['id' => '685daf75-ec0b-5c1d-bd74-a2d904e4e3b6', 'description' => 'Battle of Gettysburg', 'correct_answer' => false],
                    ['id' => '8c5d0c08-4491-5f59-9e70-d2b81f4e34ad', 'description' => 'Battle of Agincourt', 'correct_answer' => false],
                    ['id' => 'eabf7547-f48a-5462-93f3-66ab0d64ec8f', 'description' => 'Battle of Midway', 'correct_answer' => false],
                    ['id' => 'd228b818-a246-554a-9313-4e6611064d98', 'description' => 'Battle of Cannae', 'correct_answer' => false],
                    ['id' => '18fe5a72-12b0-5129-8ac6-a36dab1b7c01', 'description' => 'Battle of Stalingrad', 'correct_answer' => true]
                ]],
        ['id' => 'c097c345-c081-55cf-b6a7-e8091aa04524', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which 732 battle is traditionally associated with Charles Martel\'s victory over an Umayyad force?', 'difficulty' => 2, 'weight' => 309, 'alternatives' => [
                    ['id' => '8e8268c2-d35a-56aa-a710-a3d7371b6a06', 'description' => 'Battle of Gettysburg', 'correct_answer' => false],
                    ['id' => 'f49bf321-2eba-5e23-9ce4-5542db8f8c06', 'description' => 'Battle of Agincourt', 'correct_answer' => false],
                    ['id' => '163083c7-116c-566f-a5c7-0aceade38fa7', 'description' => 'Battle of Tours', 'correct_answer' => true],
                    ['id' => 'b14d903c-ac51-5c17-a62d-5c8b724cbc13', 'description' => 'Battle of Hastings', 'correct_answer' => false],
                    ['id' => '38e8ef13-15d7-5b06-ad99-ae658ab0da84', 'description' => 'Battle of Trafalgar', 'correct_answer' => false]
                ]],
        ['id' => '8ea7539f-dc4e-5583-bb84-90d34f78e938', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which 1815 battle ended Napoleon Bonaparte\'s rule?', 'difficulty' => 2, 'weight' => 246, 'alternatives' => [
                    ['id' => '2f543ba3-1fee-5005-aaf8-8fba7c028cd1', 'description' => 'Battle of Stalingrad', 'correct_answer' => false],
                    ['id' => 'ec7949d3-555f-54dd-b5c1-c2f783e0822e', 'description' => 'Battle of Trafalgar', 'correct_answer' => false],
                    ['id' => 'eacefcf8-f57f-5309-b039-726eeaeb63d3', 'description' => 'Battle of Waterloo', 'correct_answer' => true],
                    ['id' => '434770d5-c79f-5f42-923c-6bb8e8ade9d8', 'description' => 'Battle of Midway', 'correct_answer' => false],
                    ['id' => 'c64f2f4a-d444-55f6-b8fd-abecb26a503b', 'description' => 'Battle of Agincourt', 'correct_answer' => false]
                ]],
        ['id' => 'f8e2b97b-bd8b-5692-83b8-aa39d2774bb3', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which 1805 battle is often called Napoleon\'s greatest victory?', 'difficulty' => 2, 'weight' => 302, 'alternatives' => [
                    ['id' => 'e826996d-1efd-5cfc-9938-6719b87cf363', 'description' => 'Battle of Midway', 'correct_answer' => false],
                    ['id' => 'd9cb1f2d-31da-5667-80cf-b752c6c1f912', 'description' => 'Battle of Hastings', 'correct_answer' => false],
                    ['id' => 'd924cfae-45bb-5f5c-b871-034003b0ef58', 'description' => 'Battle of Austerlitz', 'correct_answer' => true],
                    ['id' => '8e9e7e0d-3e36-5e4f-81a9-a7b540b7e01f', 'description' => 'Battle of Cannae', 'correct_answer' => false],
                    ['id' => 'a70e258c-bd3d-591e-a3bd-a426b26cb423', 'description' => 'Battle of Trafalgar', 'correct_answer' => false]
                ]],
        ['id' => '9e093448-7d82-550d-9f69-530db07863a9', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which 1805 naval battle established British naval supremacy during the Napoleonic Wars?', 'difficulty' => 2, 'weight' => 318, 'alternatives' => [
                    ['id' => 'ad4540b0-d694-5df4-bb12-0d793cc42c09', 'description' => 'Battle of Gettysburg', 'correct_answer' => false],
                    ['id' => '9b26f6de-a4a8-5c81-81de-07b9aac1f819', 'description' => 'Battle of Cannae', 'correct_answer' => false],
                    ['id' => '2186836d-6d78-5b07-8d9e-3f4f77394b51', 'description' => 'Battle of Austerlitz', 'correct_answer' => false],
                    ['id' => '99959d67-5cb8-5fe6-92b4-17f55ae24044', 'description' => 'Battle of Hastings', 'correct_answer' => false],
                    ['id' => '2619790d-bfe2-544e-a967-cfb896f16ed8', 'description' => 'Battle of Trafalgar', 'correct_answer' => true]
                ]],
        ['id' => '3e4c6e5a-8ee5-5e09-b9ac-aedf845e2b58', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which 1066 battle resulted in William the Conqueror becoming king of England?', 'difficulty' => 2, 'weight' => 255, 'alternatives' => [
                    ['id' => 'f355e5b1-e287-5e0c-b1a4-467a9ee7ee38', 'description' => 'Battle of Hastings', 'correct_answer' => true],
                    ['id' => '2079c0f6-1773-5f79-9f0a-1765e0a91f21', 'description' => 'Battle of Waterloo', 'correct_answer' => false],
                    ['id' => '8e85ed8f-4631-5a15-b5ce-d8e0befe54a1', 'description' => 'Battle of Stalingrad', 'correct_answer' => false],
                    ['id' => 'c70e4167-5a38-5fac-8cd6-3c14c3bcb28b', 'description' => 'Battle of Cannae', 'correct_answer' => false],
                    ['id' => '2b4122d6-fc3b-5ed6-992f-63c502b1fcb3', 'description' => 'Battle of Gettysburg', 'correct_answer' => false]
                ]],
        ['id' => '8fde0607-39c9-5f2e-8630-2ba9e931bc06', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which 1415 battle saw Henry V\'s English army defeat a larger French force?', 'difficulty' => 2, 'weight' => 214, 'alternatives' => [
                    ['id' => '5d4d4012-e019-5877-92a6-5bdc1a2c40e6', 'description' => 'Battle of Waterloo', 'correct_answer' => false],
                    ['id' => 'dbd7682b-536b-5054-ad40-cc1893ddcee4', 'description' => 'Battle of Trafalgar', 'correct_answer' => false],
                    ['id' => '0a49a11e-5db4-5ea7-8a30-1fc007fa6ca6', 'description' => 'Battle of Tours', 'correct_answer' => false],
                    ['id' => 'af3cbf07-0c32-5456-9427-93cb10d20d5a', 'description' => 'Battle of Agincourt', 'correct_answer' => true],
                    ['id' => '4f11c0f6-dda3-5b3d-9a6d-097ecff92fcc', 'description' => 'Battle of Gettysburg', 'correct_answer' => false]
                ]],
        ['id' => '61282592-acb6-5bd5-8ad8-0be1eb10cdb3', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which 1942 naval battle was a decisive turning point in the Pacific War?', 'difficulty' => 2, 'weight' => 245, 'alternatives' => [
                    ['id' => 'e4fa1e2f-60f9-5762-b96f-f9620219d1ba', 'description' => 'Battle of Austerlitz', 'correct_answer' => false],
                    ['id' => '3fdf1392-6be7-5cc4-9dd7-6c6eaf2d681f', 'description' => 'Battle of Waterloo', 'correct_answer' => false],
                    ['id' => '7235ae2e-d842-5812-82ee-c0e94fdd1f60', 'description' => 'Battle of Hastings', 'correct_answer' => false],
                    ['id' => 'f59a6f5e-56ac-59e8-8610-636070cf9023', 'description' => 'Battle of Midway', 'correct_answer' => true],
                    ['id' => 'dccfdb04-987c-5cc8-ada9-c71c4819908c', 'description' => 'Battle of Stalingrad', 'correct_answer' => false]
                ]],
        ['id' => 'ef41c026-eeb6-5e93-a71a-c5ccf156fc46', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which ruler expanded and reformed the Songhai Empire in the late fifteenth century?', 'difficulty' => 2, 'weight' => 341, 'alternatives' => [
                    ['id' => '7a168bcf-aae4-59a2-873a-3337d4764120', 'description' => 'Sunni Ali', 'correct_answer' => false],
                    ['id' => '5275be14-9421-5df4-8d5a-0d968fbfdb55', 'description' => 'Behanzin', 'correct_answer' => false],
                    ['id' => 'af4b86da-7c07-5a85-a5b9-8e1446964f4c', 'description' => 'Askia Muhammad', 'correct_answer' => true],
                    ['id' => '1c4aa32e-2ab2-5bd8-b739-34fb468d9a5f', 'description' => 'Sundiata Keita', 'correct_answer' => false],
                    ['id' => 'f5286c31-639d-53fe-b91b-7b49c993c0d7', 'description' => 'Osei Tutu', 'correct_answer' => false]
                ]],
        ['id' => 'c03c8db4-73a0-5c19-97fa-45a36683367a', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which founder of the Mali Empire is the central hero of the Epic of Sundiata?', 'difficulty' => 2, 'weight' => 208, 'alternatives' => [
                    ['id' => '94b1f2b3-79c0-5863-bad8-33e7993aa445', 'description' => 'Sundiata Keita', 'correct_answer' => true],
                    ['id' => 'd84fb880-060d-51c2-8198-7fb99270003c', 'description' => 'Shaka Zulu', 'correct_answer' => false],
                    ['id' => 'ff7267f1-c6b1-541d-9d7e-5e8068109cf7', 'description' => 'Mansa Musa', 'correct_answer' => false],
                    ['id' => 'b3ca9ffc-239f-5379-9367-6d96a85c6772', 'description' => 'Behanzin', 'correct_answer' => false],
                    ['id' => '51cf0b70-c76c-52f8-90e2-55789798ab53', 'description' => 'Askia Muhammad', 'correct_answer' => false]
                ]],
        ['id' => 'd0f80b9d-b131-5746-ac3e-3c7ba861e763', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which nineteenth-century leader transformed the Zulu kingdom into a major regional power?', 'difficulty' => 2, 'weight' => 217, 'alternatives' => [
                    ['id' => '67b51dbe-ab08-581e-84f8-ca1108db5bf7', 'description' => 'Osei Tutu', 'correct_answer' => false],
                    ['id' => '8b74c92d-be00-56ca-a237-65b143689d6d', 'description' => 'Shaka Zulu', 'correct_answer' => true],
                    ['id' => '4d0aa217-1a1b-51e4-baa4-302e896f9a52', 'description' => 'Idris Alooma', 'correct_answer' => false],
                    ['id' => 'ef8ccd4f-93e8-50b1-968b-768694cb7987', 'description' => 'Askia Dawud', 'correct_answer' => false],
                    ['id' => '904f63d6-ee88-5551-93c9-a7fd6aca7742', 'description' => 'Behanzin', 'correct_answer' => false]
                ]],
        ['id' => 'e53d97d9-b180-538f-a06f-4e1b9d6ebcb0', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which ruler established Songhai as a major West African empire through military expansion?', 'difficulty' => 2, 'weight' => 248, 'alternatives' => [
                    ['id' => 'e01dc205-8b2a-5257-9e88-92276b3ac77b', 'description' => 'Osei Tutu', 'correct_answer' => false],
                    ['id' => '222d792a-2c8a-558e-b943-b03931d1eacf', 'description' => 'Shaka Zulu', 'correct_answer' => false],
                    ['id' => 'b43c7214-02c9-55ee-8755-c3afc74ecda1', 'description' => 'Behanzin', 'correct_answer' => false],
                    ['id' => '5ec57197-8095-5bfb-b5a0-71ffa7cac989', 'description' => 'Sunni Ali', 'correct_answer' => true],
                    ['id' => '794300c9-dfac-5088-bf0c-8c0790fc1b0d', 'description' => 'Sundiata Keita', 'correct_answer' => false]
                ]],
        ['id' => '16142a48-961b-5d55-9ae5-98700ccd4416', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which sixteenth-century ruler of Kanem-Bornu is known for military and administrative reforms?', 'difficulty' => 2, 'weight' => 299, 'alternatives' => [
                    ['id' => 'd394906b-49ca-57c3-a11e-007503085c2b', 'description' => 'Ewuare the Great', 'correct_answer' => false],
                    ['id' => '330779c2-6f93-5576-9747-329809622350', 'description' => 'Behanzin', 'correct_answer' => false],
                    ['id' => 'bc9e1647-c900-585e-bfe8-ec8211d4ca6c', 'description' => 'Askia Muhammad', 'correct_answer' => false],
                    ['id' => '8e9057d3-409f-5f24-93bb-ed00e4290fd2', 'description' => 'Mansa Musa', 'correct_answer' => false],
                    ['id' => '3d7e6ac5-3f8a-53cb-a7df-05a16c3652ab', 'description' => 'Idris Alooma', 'correct_answer' => true]
                ]],
        ['id' => '136d6c29-05fb-5f91-94d3-91fbee930cbe', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which ruler helped establish the Asante Empire in present-day Ghana?', 'difficulty' => 2, 'weight' => 268, 'alternatives' => [
                    ['id' => 'd1dd39a0-2b5e-538c-9c0a-3bf76ad6ac27', 'description' => 'Ewuare the Great', 'correct_answer' => false],
                    ['id' => '9ebfb1ae-6d64-591b-9414-3a4c7d13a5c3', 'description' => 'Behanzin', 'correct_answer' => false],
                    ['id' => '31b84cd2-0b71-55eb-a37c-16eeefd644ac', 'description' => 'Askia Muhammad', 'correct_answer' => false],
                    ['id' => 'f942aefe-9205-5c66-a790-c96b14adff73', 'description' => 'Osei Tutu', 'correct_answer' => true],
                    ['id' => 'b43dffb5-e1e2-54c8-8541-38035d93940e', 'description' => 'Sunni Ali', 'correct_answer' => false]
                ]],
        ['id' => '04da2596-4565-51c5-a87a-4b9329d06b11', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which fourteenth-century ruler of Mali is famous for his pilgrimage to Mecca?', 'difficulty' => 2, 'weight' => 320, 'alternatives' => [
                    ['id' => '7b7302c0-04fd-5f5a-b974-76649df8ab8e', 'description' => 'Askia Muhammad', 'correct_answer' => false],
                    ['id' => '7a468199-2f51-5737-a525-aa6d1347101c', 'description' => 'Behanzin', 'correct_answer' => false],
                    ['id' => '1031fd4f-b07a-5074-8b36-d68ce815b058', 'description' => 'Askia Dawud', 'correct_answer' => false],
                    ['id' => '4960ad49-ec19-5676-bc45-b9654e8bce2d', 'description' => 'Mansa Musa', 'correct_answer' => true],
                    ['id' => 'dfb52d58-4005-5192-bac9-c62ec3f5785a', 'description' => 'Idris Alooma', 'correct_answer' => false]
                ]],
        ['id' => '46536c89-97c1-5344-a5c4-b81dcbcffbf5', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which late nineteenth-century king of Dahomey resisted French conquest?', 'difficulty' => 2, 'weight' => 281, 'alternatives' => [
                    ['id' => '3a08b801-e27a-5748-8541-f76cac7da776', 'description' => 'Ewuare the Great', 'correct_answer' => false],
                    ['id' => '0c6ed483-4baa-5111-94ce-0fba362785d8', 'description' => 'Idris Alooma', 'correct_answer' => false],
                    ['id' => '29437f85-e056-59cf-a6b5-af5efaab3bc2', 'description' => 'Behanzin', 'correct_answer' => true],
                    ['id' => 'c5569337-6112-5b2e-8c50-01b3d6ebad13', 'description' => 'Shaka Zulu', 'correct_answer' => false],
                    ['id' => '1c376c08-8282-5db9-9fa3-49b2069bd703', 'description' => 'Mansa Musa', 'correct_answer' => false]
                ]],
        ['id' => 'df63ca2d-a89e-5f9e-81ee-7ad6df38ff42', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which 1911 revolution overthrew China\'s Qing dynasty?', 'difficulty' => 2, 'weight' => 303, 'alternatives' => [
                    ['id' => '22f5b177-d019-58df-883b-c6be9d2fe651', 'description' => 'Cuban Revolution', 'correct_answer' => false],
                    ['id' => '159bd268-2c73-5b18-b87d-c5bcf5b576af', 'description' => 'Iranian Revolution', 'correct_answer' => false],
                    ['id' => 'b4731544-9c60-5d75-9052-278da169a9f9', 'description' => 'Young Turk Revolution', 'correct_answer' => false],
                    ['id' => '3b95a8df-d03a-5928-9096-3ca93335aef4', 'description' => 'Glorious Revolution', 'correct_answer' => false],
                    ['id' => 'c18cb70f-8eb3-5009-827a-86224b18f6f3', 'description' => 'Xinhai Revolution', 'correct_answer' => true]
                ]],
        ['id' => '60f954e4-ad67-5853-bd75-f1024ae47617', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which 1791–1804 revolution created the first independent Black republic?', 'difficulty' => 2, 'weight' => 283, 'alternatives' => [
                    ['id' => '6f5a6f4c-2ea3-5934-b5b2-d6b0d8d7c2be', 'description' => 'Haitian Revolution', 'correct_answer' => true],
                    ['id' => '0db7a131-2c11-567f-8986-742ca1d10486', 'description' => 'Glorious Revolution', 'correct_answer' => false],
                    ['id' => '74df77d0-47ff-51cb-a27f-3088fd4aae86', 'description' => 'Iranian Revolution', 'correct_answer' => false],
                    ['id' => '2fe53265-f665-5f85-97c0-b19c4010549c', 'description' => 'Meiji Restoration', 'correct_answer' => false],
                    ['id' => '732d4677-68ef-5b49-9901-9388ec10a3f3', 'description' => 'Cuban Revolution', 'correct_answer' => false]
                ]],
        ['id' => '6f5e93c1-04ae-50ed-b297-166a1bacdc95', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which 1868 transformation restored imperial rule and initiated rapid modernization in Japan?', 'difficulty' => 2, 'weight' => 298, 'alternatives' => [
                    ['id' => 'f46315d4-7f99-5819-8f09-36fccd6e155c', 'description' => 'Meiji Restoration', 'correct_answer' => true],
                    ['id' => 'f888e6ff-a014-5f43-b807-ca4c10c13acd', 'description' => 'Xinhai Revolution', 'correct_answer' => false],
                    ['id' => '3af8075b-785e-55a6-aad4-b64e92a07e64', 'description' => 'Cuban Revolution', 'correct_answer' => false],
                    ['id' => '4ecbcc46-7e43-5fa7-8523-58d5b7375054', 'description' => 'Velvet Revolution', 'correct_answer' => false],
                    ['id' => 'dc8dd4ce-4816-5104-a2a4-3312069938cd', 'description' => 'October Revolution', 'correct_answer' => false]
                ]],
        ['id' => 'a6c473f3-5d8e-5e69-8a16-0387624324a6', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which 1917 uprising brought the Bolsheviks to power in Russia?', 'difficulty' => 2, 'weight' => 319, 'alternatives' => [
                    ['id' => '9d544888-7f24-5f0a-83b3-ac62730775b8', 'description' => 'Glorious Revolution', 'correct_answer' => false],
                    ['id' => 'b795df69-8684-584f-879b-84339cec1b53', 'description' => 'Young Turk Revolution', 'correct_answer' => false],
                    ['id' => '8ed60bd1-c7a8-5732-8d55-51ad18e8ef28', 'description' => 'Haitian Revolution', 'correct_answer' => false],
                    ['id' => '6bae7aba-9064-54c0-ba00-73f550529e5d', 'description' => 'Carnation Revolution', 'correct_answer' => false],
                    ['id' => '56245c75-614d-53d7-a82d-70077910125f', 'description' => 'October Revolution', 'correct_answer' => true]
                ]],
        ['id' => 'f7bf4869-4803-5b7b-9d36-c369c5dde221', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which 1989 peaceful revolution ended communist rule in Czechoslovakia?', 'difficulty' => 2, 'weight' => 315, 'alternatives' => [
                    ['id' => '1c99f7c9-d4c4-5942-9309-042974101c4d', 'description' => 'Young Turk Revolution', 'correct_answer' => false],
                    ['id' => 'd2fcdb58-c71e-55dd-8aab-b4dbbfbf1bc2', 'description' => 'Velvet Revolution', 'correct_answer' => true],
                    ['id' => 'da2486de-5155-5eb9-83e1-2e2bc145c20d', 'description' => 'Cuban Revolution', 'correct_answer' => false],
                    ['id' => '9cfb5215-bbf5-538e-be99-b86e5903de81', 'description' => 'Iranian Revolution', 'correct_answer' => false],
                    ['id' => '12e69e48-7c78-5189-b715-12afe0ff877d', 'description' => 'Haitian Revolution', 'correct_answer' => false]
                ]],
        ['id' => '378cdf02-08c8-5e2b-8015-0e43671a4f9d', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which revolution brought Fidel Castro\'s movement to power in Cuba in 1959?', 'difficulty' => 2, 'weight' => 389, 'alternatives' => [
                    ['id' => '91b4204e-3cfb-52c1-accf-8a07a1ddae26', 'description' => 'Haitian Revolution', 'correct_answer' => false],
                    ['id' => '0036a49d-6f3e-55b3-8854-5bf4b31dd211', 'description' => 'Carnation Revolution', 'correct_answer' => false],
                    ['id' => '8f7724bd-78e7-5427-b6b7-6e1dbe700133', 'description' => 'October Revolution', 'correct_answer' => false],
                    ['id' => '8180c482-ed09-5b07-a8c6-ff5eb116cb20', 'description' => 'Xinhai Revolution', 'correct_answer' => false],
                    ['id' => '6b4d98f2-8395-50ca-8b79-eb3f9cffc2ee', 'description' => 'Cuban Revolution', 'correct_answer' => true]
                ]],
        ['id' => '2bd9a2df-76ff-568f-97cb-1a2c2c1dae1d', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which 1908 movement restored constitutional government in the Ottoman Empire?', 'difficulty' => 2, 'weight' => 281, 'alternatives' => [
                    ['id' => '681fd8a8-72e9-50d2-b1eb-585f0d04860a', 'description' => 'Young Turk Revolution', 'correct_answer' => true],
                    ['id' => '23cde93f-19fd-5368-8bf6-ec86339c0463', 'description' => 'Glorious Revolution', 'correct_answer' => false],
                    ['id' => '4fda58ec-8256-5178-96c6-e77835181673', 'description' => 'Iranian Revolution', 'correct_answer' => false],
                    ['id' => '25f4479a-27ed-562e-9583-65e5f6bc79da', 'description' => 'Meiji Restoration', 'correct_answer' => false],
                    ['id' => '05f4cf02-eec2-548e-8213-f63c765e84f9', 'description' => 'Xinhai Revolution', 'correct_answer' => false]
                ]],
        ['id' => 'd3c30b4a-2c10-5142-903e-314edabf1dbb', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which 1979 revolution overthrew Mohammad Reza Pahlavi?', 'difficulty' => 2, 'weight' => 366, 'alternatives' => [
                    ['id' => 'ffe314cf-869e-5526-b892-32703fc29f8d', 'description' => 'Iranian Revolution', 'correct_answer' => true],
                    ['id' => '64394ad3-7e01-5841-a163-47ec81cef4c3', 'description' => 'Carnation Revolution', 'correct_answer' => false],
                    ['id' => 'bfb68f0b-70d2-546a-a390-e4c8375d9db2', 'description' => 'Meiji Restoration', 'correct_answer' => false],
                    ['id' => '49355819-756a-5139-bf8e-eb2e107942fd', 'description' => 'Cuban Revolution', 'correct_answer' => false],
                    ['id' => 'd921cb71-27f3-50d3-aae6-b0801e0f82ca', 'description' => 'Glorious Revolution', 'correct_answer' => false]
                ]],
        ['id' => '1032da92-7477-52e1-aa1a-630e47c561f2', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which 1494 treaty divided newly claimed overseas territories between Portugal and Spain?', 'difficulty' => 2, 'weight' => 394, 'alternatives' => [
                    ['id' => '297805f9-d8ba-5fd5-8519-e0a5f15d4a3e', 'description' => 'Treaty of Portsmouth', 'correct_answer' => false],
                    ['id' => 'e4009efb-9f70-56f6-b1a1-9c2f4835d751', 'description' => 'Treaty of Lausanne', 'correct_answer' => false],
                    ['id' => '82572dcd-6afd-5f95-9dc5-1766e8110993', 'description' => 'Peace of Westphalia', 'correct_answer' => false],
                    ['id' => '219f385a-2c57-5200-9ed6-fb5ca4e9766d', 'description' => 'Treaty of Paris (1763)', 'correct_answer' => false],
                    ['id' => '9f7adb52-411e-593a-964c-bf67babe836d', 'description' => 'Treaty of Tordesillas', 'correct_answer' => true]
                ]],
        ['id' => 'ec0d5990-352b-5b7f-9a7e-144b7689a591', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which 1814 treaty ended the War of 1812?', 'difficulty' => 2, 'weight' => 351, 'alternatives' => [
                    ['id' => '35bf8a05-cf97-5db2-8de5-83885f9268ba', 'description' => 'Treaty of Guadalupe Hidalgo', 'correct_answer' => false],
                    ['id' => '82da462a-9670-5a6e-aedd-719633d62c14', 'description' => 'Treaty of Paris (1763)', 'correct_answer' => false],
                    ['id' => '0fa70316-9bb1-5b4c-ba39-1591d81d2fe6', 'description' => 'Treaty of Lausanne', 'correct_answer' => false],
                    ['id' => '2305dff1-3d94-555e-a179-377838abe34f', 'description' => 'Treaty of Ghent', 'correct_answer' => true],
                    ['id' => '03ee8818-0fa3-5e7d-bf8a-c98924775b98', 'description' => 'Peace of Westphalia', 'correct_answer' => false]
                ]],
        ['id' => '60374b5b-5460-5399-b875-6b26a863ddf0', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which 1905 treaty ended the Russo-Japanese War?', 'difficulty' => 2, 'weight' => 399, 'alternatives' => [
                    ['id' => '86d009d3-7a12-5c77-baef-a327203306fc', 'description' => 'Treaty of Tordesillas', 'correct_answer' => false],
                    ['id' => '72b747b1-ae12-5f80-8c5a-bb74d5811797', 'description' => 'Treaty of Utrecht', 'correct_answer' => false],
                    ['id' => 'f21873cf-9e31-57fd-ae54-afb107900874', 'description' => 'Treaty of Brest-Litovsk', 'correct_answer' => false],
                    ['id' => '1d7dcac2-1d2c-54e7-b8bd-dd819ae171fd', 'description' => 'Treaty of Portsmouth', 'correct_answer' => true],
                    ['id' => '075c50f3-ec87-58e0-b3a8-d379757391dc', 'description' => 'Peace of Westphalia', 'correct_answer' => false]
                ]],
        ['id' => '742295d3-0811-522e-8911-b1bfdcc68e4b', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which 1648 agreements ended the Thirty Years\' War in the Holy Roman Empire?', 'difficulty' => 2, 'weight' => 245, 'alternatives' => [
                    ['id' => '7159975e-dc89-58b0-89a6-d699db4efc61', 'description' => 'Treaty of Paris (1763)', 'correct_answer' => false],
                    ['id' => '1752932d-f402-527c-a572-6370b816f5a8', 'description' => 'Treaty of Utrecht', 'correct_answer' => false],
                    ['id' => '93b8ae3f-156b-54a6-8c5a-f8ba02967929', 'description' => 'Treaty of Nanking', 'correct_answer' => false],
                    ['id' => '8c6b0a3e-5cc5-5ae8-b4a7-2a39e9a4045f', 'description' => 'Treaty of Brest-Litovsk', 'correct_answer' => false],
                    ['id' => '966d8aa3-f788-5165-84e3-03dd228773e1', 'description' => 'Peace of Westphalia', 'correct_answer' => true]
                ]],
        ['id' => '124dad28-18e7-521a-a7d0-7be17e004723', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which 1713 agreements helped end the War of the Spanish Succession?', 'difficulty' => 2, 'weight' => 279, 'alternatives' => [
                    ['id' => 'def12d2e-7884-5c44-8df1-adb938001ef3', 'description' => 'Treaty of Portsmouth', 'correct_answer' => false],
                    ['id' => '3a1d8fe9-eef2-56bf-9bed-48f4f84dd52a', 'description' => 'Peace of Westphalia', 'correct_answer' => false],
                    ['id' => 'b40277d1-4ce5-5b3b-a9b9-6f203d5fd23b', 'description' => 'Treaty of Tordesillas', 'correct_answer' => false],
                    ['id' => '1cbb449c-ee3d-5dff-b0ad-c005f4b36e6a', 'description' => 'Treaty of Ghent', 'correct_answer' => false],
                    ['id' => '23d37140-ecc5-532e-af40-99aee31757d4', 'description' => 'Treaty of Utrecht', 'correct_answer' => true]
                ]],
        ['id' => '1e5669c6-f29a-57bb-bba1-92ab09a7b28a', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which 1842 treaty ended the First Opium War and ceded Hong Kong Island to Britain?', 'difficulty' => 2, 'weight' => 293, 'alternatives' => [
                    ['id' => 'd992c360-7e96-555a-ab60-1b38bed28a52', 'description' => 'Peace of Westphalia', 'correct_answer' => false],
                    ['id' => 'f7e19869-db1a-5cc4-90e8-83721c1cd871', 'description' => 'Treaty of Utrecht', 'correct_answer' => false],
                    ['id' => '4093ccc8-2ded-5d45-ae4c-c522c7b97bdd', 'description' => 'Treaty of Nanking', 'correct_answer' => true],
                    ['id' => '3e43b57f-fb58-5b66-b5fd-6c9a350a620d', 'description' => 'Treaty of Paris (1763)', 'correct_answer' => false],
                    ['id' => '195d7e0f-d1ad-58ac-8bb0-9f6e708553c0', 'description' => 'Treaty of Tordesillas', 'correct_answer' => false]
                ]],
        ['id' => '64bbcaae-8dcb-5d6a-9426-3499893a179d', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which 1918 treaty removed Soviet Russia from World War I?', 'difficulty' => 2, 'weight' => 303, 'alternatives' => [
                    ['id' => '85dbacbe-78d2-5284-a3e1-468744e3816b', 'description' => 'Treaty of Ghent', 'correct_answer' => false],
                    ['id' => '0351fae9-5ebf-50aa-9867-bfa6e9952d28', 'description' => 'Peace of Westphalia', 'correct_answer' => false],
                    ['id' => '522011c7-ef26-5530-8311-f7ec5a6f8210', 'description' => 'Treaty of Portsmouth', 'correct_answer' => false],
                    ['id' => '77011800-d38b-5ea8-b35b-4408ed3cbd0a', 'description' => 'Treaty of Guadalupe Hidalgo', 'correct_answer' => false],
                    ['id' => 'f7054e22-bc83-510f-97dd-d7185db1652a', 'description' => 'Treaty of Brest-Litovsk', 'correct_answer' => true]
                ]],
        ['id' => '26209b1b-5562-57a2-bb4e-db658b7114b4', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which 1848 treaty ended the Mexican-American War?', 'difficulty' => 2, 'weight' => 269, 'alternatives' => [
                    ['id' => '8b2f3a6f-626b-5dee-bb26-44ec60be768f', 'description' => 'Treaty of Paris (1763)', 'correct_answer' => false],
                    ['id' => 'f2f98ceb-27f2-5bbe-b3f8-15be301d2774', 'description' => 'Treaty of Brest-Litovsk', 'correct_answer' => false],
                    ['id' => '43039a03-3728-5f1d-84a8-b26537805510', 'description' => 'Treaty of Guadalupe Hidalgo', 'correct_answer' => true],
                    ['id' => 'c8273f8d-7739-583f-90d0-c0cf2c5f3259', 'description' => 'Treaty of Ghent', 'correct_answer' => false],
                    ['id' => '7face1e3-6825-5db9-ac97-cd127d4ade96', 'description' => 'Peace of Westphalia', 'correct_answer' => false]
                ]],
        ['id' => 'b692ea11-719b-5044-9617-14ac42ad37db', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which series of pandemics was caused by the bacterium Vibrio cholerae?', 'difficulty' => 2, 'weight' => 386, 'alternatives' => [
                    ['id' => '90efd654-f946-55b4-a095-de725c6e78ea', 'description' => 'COVID-19 pandemic', 'correct_answer' => false],
                    ['id' => 'ceb447b8-feb6-5199-b48b-cae5c0e1642c', 'description' => 'Cholera pandemics', 'correct_answer' => true],
                    ['id' => '17fccc2c-011d-5a82-a764-31319aa027a4', 'description' => 'Antonine Plague', 'correct_answer' => false],
                    ['id' => 'a0075fc4-1bf2-516a-a85f-3edb67258c1b', 'description' => '1918 influenza pandemic', 'correct_answer' => false],
                    ['id' => '16d210f2-2228-5c63-930c-343202a63d31', 'description' => 'Black Death', 'correct_answer' => false]
                ]],
        ['id' => 'f21069b5-27dc-5c94-a9b3-a0def68ef009', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which 1918–1920 influenza pandemic caused tens of millions of deaths worldwide?', 'difficulty' => 2, 'weight' => 369, 'alternatives' => [
                    ['id' => '7984f700-1b91-525b-adec-6153792ab8ad', 'description' => 'Black Death', 'correct_answer' => false],
                    ['id' => 'bf299de7-dce6-5818-bef4-d4946ddad8fc', 'description' => 'Plague of Justinian', 'correct_answer' => false],
                    ['id' => 'aaf02a28-3ddb-576c-a0f5-036ae991bb81', 'description' => 'COVID-19 pandemic', 'correct_answer' => false],
                    ['id' => 'e384d4c4-8a88-5e52-a75a-f6c06223647e', 'description' => 'Cholera pandemics', 'correct_answer' => false],
                    ['id' => '221bfd54-22dd-5dae-9476-ebd96dcdf7fd', 'description' => 'Spanish flu', 'correct_answer' => true]
                ]],
        ['id' => '41ab26d4-7814-56ef-aa80-ec4a52cab36a', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which pandemic was caused by the coronavirus SARS-CoV-2?', 'difficulty' => 2, 'weight' => 272, 'alternatives' => [
                    ['id' => '7dcf2b7e-a0c3-5e6d-b012-99fb8fa1afc6', 'description' => 'Black Death', 'correct_answer' => false],
                    ['id' => '67f55473-17f3-5b30-8b77-bbad2398fd04', 'description' => 'HIV/AIDS pandemic', 'correct_answer' => false],
                    ['id' => '44ad783a-24f6-5ded-84b5-ce8e416e2a85', 'description' => 'Spanish flu', 'correct_answer' => false],
                    ['id' => 'd174bb13-283a-58f8-8cb3-5e1e0a53d785', 'description' => 'COVID-19 pandemic', 'correct_answer' => true],
                    ['id' => 'ae964620-2391-5c57-ace2-70e2a5c4ba2c', 'description' => '1918 influenza pandemic', 'correct_answer' => false]
                ]],
        ['id' => 'ef4ded9e-1584-5023-948d-22df9e3f7581', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which infectious disease was eradicated globally, with eradication declared in 1980?', 'difficulty' => 2, 'weight' => 368, 'alternatives' => [
                    ['id' => 'cf8cc6ff-5e6e-58fb-9f4d-bd6ff2becdc9', 'description' => 'Cholera pandemics', 'correct_answer' => false],
                    ['id' => 'cddcf95f-682d-5941-a57d-c622a89deeec', 'description' => '1918 influenza pandemic', 'correct_answer' => false],
                    ['id' => '199aeab5-b8a3-5a3f-977a-f91e7caf0627', 'description' => 'Antonine Plague', 'correct_answer' => false],
                    ['id' => '8abfba0c-e608-55f1-a8b4-2540c3b21f01', 'description' => 'Smallpox', 'correct_answer' => true],
                    ['id' => 'c6933c6e-0dc2-5e21-b019-d861e6bd782d', 'description' => 'HIV/AIDS pandemic', 'correct_answer' => false]
                ]],
        ['id' => 'b223809e-633b-5257-9cb6-fb3e4ccb887d', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which plague pandemic began in China in the nineteenth century and spread globally?', 'difficulty' => 2, 'weight' => 242, 'alternatives' => [
                    ['id' => 'f493134f-2aa6-5ef8-b98d-a1baefef6afb', 'description' => 'Spanish flu', 'correct_answer' => false],
                    ['id' => 'bdc11075-804f-5d7c-aed3-ff51cbb1e0ef', 'description' => 'Antonine Plague', 'correct_answer' => false],
                    ['id' => 'a998d237-01dd-503b-90e6-ddf5385a41de', 'description' => '1918 influenza pandemic', 'correct_answer' => false],
                    ['id' => '555bde34-83a0-53c6-aa5c-15423a9749b7', 'description' => 'Third Plague Pandemic', 'correct_answer' => true],
                    ['id' => '21049894-9a68-5783-93f9-02d640e82053', 'description' => 'Smallpox', 'correct_answer' => false]
                ]],
        ['id' => '98e19cac-dc7e-533f-941d-098f521e4ded', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which pandemic devastated Europe, Asia, and North Africa during the mid-fourteenth century?', 'difficulty' => 2, 'weight' => 392, 'alternatives' => [
                    ['id' => 'f2ddbe36-19c6-5a50-b0fa-7f3d29570ace', 'description' => 'COVID-19 pandemic', 'correct_answer' => false],
                    ['id' => '1c1ed780-e7e3-5f87-a76d-9dd23c60b5ac', 'description' => 'HIV/AIDS pandemic', 'correct_answer' => false],
                    ['id' => '05c59754-334e-5faf-be71-6710f162e171', 'description' => 'Plague of Justinian', 'correct_answer' => false],
                    ['id' => '70cacb9f-5c12-51c3-ba29-3c6e267682d1', 'description' => 'Cholera pandemics', 'correct_answer' => false],
                    ['id' => 'cbc42a95-333a-51a9-8df7-b608768ca263', 'description' => 'Black Death', 'correct_answer' => true]
                ]],
        ['id' => '09aa068f-142b-5335-85e2-494f7f6c0b16', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which sixth-century pandemic affected the Byzantine Empire during Justinian I\'s reign?', 'difficulty' => 2, 'weight' => 358, 'alternatives' => [
                    ['id' => '0fcd69e2-65ca-54be-8dea-1d7feae45519', 'description' => 'Cholera pandemics', 'correct_answer' => false],
                    ['id' => '20d0d5bf-1b14-5ab7-ac89-4e0943cf103f', 'description' => 'Third Plague Pandemic', 'correct_answer' => false],
                    ['id' => 'd11b98b3-57b4-5717-ad24-b75de205b900', 'description' => '1918 influenza pandemic', 'correct_answer' => false],
                    ['id' => '1cbe39a4-3035-5bba-8d96-0cf871198e5e', 'description' => 'Plague of Justinian', 'correct_answer' => true],
                    ['id' => '798de40e-1dd6-5803-9315-206f7fafe0f5', 'description' => 'Spanish flu', 'correct_answer' => false]
                ]],
        ['id' => 'd72a92cc-42d7-5a90-939d-88c016d2040c', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which second-century pandemic affected the Roman Empire during Marcus Aurelius\'s reign?', 'difficulty' => 2, 'weight' => 262, 'alternatives' => [
                    ['id' => 'a53f1de2-a3b7-5ae0-be69-d4b22c62560a', 'description' => '1918 influenza pandemic', 'correct_answer' => false],
                    ['id' => '642a2bb4-82ed-5447-97dd-db07cd26e508', 'description' => 'Antonine Plague', 'correct_answer' => true],
                    ['id' => 'bb127c09-0e1f-5a03-a759-25058acdc0f9', 'description' => 'Black Death', 'correct_answer' => false],
                    ['id' => '767e1a66-a908-5294-b6ed-f3bbdaae19be', 'description' => 'Cholera pandemics', 'correct_answer' => false],
                    ['id' => '8b58ebb3-a4a2-548c-863b-2dbb34fdbfb8', 'description' => 'Smallpox', 'correct_answer' => false]
                ]],
        ['id' => 'a7982974-37f2-54cd-86a7-d604ce04068c', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which 1998 agreement established a framework for peace and power-sharing in Northern Ireland?', 'difficulty' => 3, 'weight' => 496, 'alternatives' => [
                    ['id' => '80b57142-bea6-54ff-988a-ac6e561f1466', 'description' => 'Dayton Agreement', 'correct_answer' => false],
                    ['id' => 'fe0a3b1d-10ed-55c0-ad06-8ad0ba4ca0af', 'description' => 'Sykes–Picot Agreement', 'correct_answer' => false],
                    ['id' => '48405d40-02bf-5261-aa71-be4722f37005', 'description' => 'Yalta Conference', 'correct_answer' => false],
                    ['id' => '3a6f8584-9d05-5b81-9143-feaf39933cd6', 'description' => 'Alma-Ata Declaration', 'correct_answer' => false],
                    ['id' => 'f48756bd-7f35-5032-b838-72e3a422bc88', 'description' => 'Good Friday Agreement', 'correct_answer' => true]
                ]],
        ['id' => 'ae0efd38-dac6-5e6a-a4f0-f2ebe20ad857', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which secret 1916 agreement outlined British and French spheres of influence in parts of the Ottoman Empire?', 'difficulty' => 3, 'weight' => 474, 'alternatives' => [
                    ['id' => '5cf9ffa8-93a0-593e-8642-29de053faac7', 'description' => 'Good Friday Agreement', 'correct_answer' => false],
                    ['id' => '436b9e4f-18c0-5889-88ec-e776ff46e82d', 'description' => 'Alma-Ata Declaration', 'correct_answer' => false],
                    ['id' => '039dfc6d-83bc-51d8-989a-53a72802ba4e', 'description' => 'Camp David Accords', 'correct_answer' => false],
                    ['id' => '2cf951a4-2d76-5749-99c9-d174dc05d6a6', 'description' => 'Potsdam Agreement', 'correct_answer' => false],
                    ['id' => 'a2edd7b4-75f1-5afc-8e6c-fdbd6fc5696c', 'description' => 'Sykes–Picot Agreement', 'correct_answer' => true]
                ]],
        ['id' => '5f24ca31-12de-5053-9408-42eb3de1dcc6', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which 1945 meeting brought Roosevelt, Churchill, and Stalin together to discuss postwar Europe?', 'difficulty' => 3, 'weight' => 445, 'alternatives' => [
                    ['id' => '45716fe5-f4ad-5635-a75d-549c9c578f4d', 'description' => 'Good Friday Agreement', 'correct_answer' => false],
                    ['id' => '73f4f0a5-d497-5e0c-83d1-cc8f06adf268', 'description' => 'Yalta Conference', 'correct_answer' => true],
                    ['id' => '81b73d85-ec0d-578a-89d9-79bbeb29b167', 'description' => 'Helsinki Accords', 'correct_answer' => false],
                    ['id' => '14885a7b-f4fa-5749-a1e1-5f1bb19b388c', 'description' => 'Dayton Agreement', 'correct_answer' => false],
                    ['id' => '1f03d79a-915d-5ab5-b4cb-920054ad689c', 'description' => 'Camp David Accords', 'correct_answer' => false]
                ]],
        ['id' => 'b5e0bb6b-c078-593e-82d2-e5f53f41fd54', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which 1995 agreement ended the war in Bosnia and Herzegovina?', 'difficulty' => 3, 'weight' => 580, 'alternatives' => [
                    ['id' => 'a0f1aeb3-068e-56ce-b22a-d86d81478b21', 'description' => 'Potsdam Agreement', 'correct_answer' => false],
                    ['id' => '3e02e30c-2a48-5da0-835f-3b51f533150c', 'description' => 'Dayton Agreement', 'correct_answer' => true],
                    ['id' => '70763adb-d0fa-581c-96ec-dea767850e97', 'description' => 'Balfour Declaration', 'correct_answer' => false],
                    ['id' => 'a7e0b287-c9e4-5b49-b0df-c264a3cbc585', 'description' => 'Treaty of San Francisco', 'correct_answer' => false],
                    ['id' => 'e03ffff7-42c2-50b5-9420-fe6f5903b476', 'description' => 'Camp David Accords', 'correct_answer' => false]
                ]],
        ['id' => 'c1391be2-51a4-524f-823c-38ecd2d72478', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which 1978 agreements paved the way for a peace treaty between Egypt and Israel?', 'difficulty' => 3, 'weight' => 441, 'alternatives' => [
                    ['id' => '27d9a0cd-6d79-5522-a991-fa708322e987', 'description' => 'Alma-Ata Declaration', 'correct_answer' => false],
                    ['id' => '4b68eb07-6986-5e01-a6f7-23ebb4db7712', 'description' => 'Potsdam Agreement', 'correct_answer' => false],
                    ['id' => '0bc16249-d780-5863-a6af-2b1e3f54d96a', 'description' => 'Sykes–Picot Agreement', 'correct_answer' => false],
                    ['id' => '85519328-7351-58c9-92af-ed448308e548', 'description' => 'Camp David Accords', 'correct_answer' => true],
                    ['id' => 'd7190445-e3ca-5fbc-9ed3-d4f609e10521', 'description' => 'Yalta Conference', 'correct_answer' => false]
                ]],
        ['id' => '3f9b77fc-75cb-5882-b015-d895be8e119f', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which 1975 agreement addressed European security, cooperation, and human rights during the Cold War?', 'difficulty' => 3, 'weight' => 549, 'alternatives' => [
                    ['id' => '29aac98a-e3bb-5928-a1a3-cb8bb132e904', 'description' => 'Balfour Declaration', 'correct_answer' => false],
                    ['id' => '65328b57-7b23-57f3-914a-f311bcc9bdcf', 'description' => 'Alma-Ata Declaration', 'correct_answer' => false],
                    ['id' => '1d0f768a-826a-55d9-acf1-855b22ad05fe', 'description' => 'Sykes–Picot Agreement', 'correct_answer' => false],
                    ['id' => '4b4f16fb-461f-5c8e-9c5e-36e55fa4f86d', 'description' => 'Helsinki Accords', 'correct_answer' => true],
                    ['id' => 'a9e7cea2-8eef-530e-a919-f5f1eb215eb3', 'description' => 'Dayton Agreement', 'correct_answer' => false]
                ]],
        ['id' => '59eec063-a350-5f91-85ed-845eb6caffe9', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which 1917 British statement expressed support for a national home for the Jewish people in Palestine?', 'difficulty' => 3, 'weight' => 535, 'alternatives' => [
                    ['id' => 'e627326a-83ed-5577-a5a2-59cc708076cf', 'description' => 'Yalta Conference', 'correct_answer' => false],
                    ['id' => '06ab83e1-2c48-5b6f-a1bc-abacd682793b', 'description' => 'Dayton Agreement', 'correct_answer' => false],
                    ['id' => '517e08c6-dffc-543d-be94-65757152f786', 'description' => 'Helsinki Accords', 'correct_answer' => false],
                    ['id' => '151474f9-d93d-57dc-bb6f-bb36ce3e46c2', 'description' => 'Camp David Accords', 'correct_answer' => false],
                    ['id' => 'fe53cf42-c963-5855-b37a-462dcf76c1e4', 'description' => 'Balfour Declaration', 'correct_answer' => true]
                ]],
        ['id' => 'eb9c0424-b68c-5dd5-8dc7-7ac47f5d1987', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which 1951 peace treaty formally ended the state of war between Japan and many Allied powers?', 'difficulty' => 3, 'weight' => 438, 'alternatives' => [
                    ['id' => '2ddf825f-6899-5cf6-8221-6ed767af0a8d', 'description' => 'Sykes–Picot Agreement', 'correct_answer' => false],
                    ['id' => '298eec25-df9e-54f3-bc34-23b52ac67230', 'description' => 'Camp David Accords', 'correct_answer' => false],
                    ['id' => '5f7c87b1-6180-5c6f-9b78-7acdca127ac2', 'description' => 'Yalta Conference', 'correct_answer' => false],
                    ['id' => 'dabd28de-ae52-50a4-b516-1194dc5d7c56', 'description' => 'Potsdam Agreement', 'correct_answer' => false],
                    ['id' => '7d9dc853-c561-5327-a343-afd6d5bd29a0', 'description' => 'Treaty of San Francisco', 'correct_answer' => true]
                ]],
        ['id' => '55d85709-483d-5f28-9f61-d392924528df', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'What name is given to conflicts among Alexander the Great\'s successors?', 'difficulty' => 3, 'weight' => 508, 'alternatives' => [
                    ['id' => 'dce0bfe0-3f74-5b0b-94f8-e329406c13e2', 'description' => 'Crimean War', 'correct_answer' => false],
                    ['id' => 'be0182fd-d668-5d5f-9e0d-bc0c99d83983', 'description' => 'Wars of the Diadochi', 'correct_answer' => true],
                    ['id' => '155390e7-d600-5c0b-ab3a-f5f5c6ad5bf4', 'description' => 'Wars of the Roses', 'correct_answer' => false],
                    ['id' => 'dab2de01-33bd-5d52-bea5-dbe7fcc2b857', 'description' => 'Punic Wars', 'correct_answer' => false],
                    ['id' => '0ff43bba-07d3-5832-aa54-45dfbfe6e916', 'description' => 'War of the Spanish Succession', 'correct_answer' => false]
                ]],
        ['id' => '19ca38cd-68f0-527d-86a2-7e9c12657612', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which English civil wars involved the houses of Lancaster and York?', 'difficulty' => 3, 'weight' => 500, 'alternatives' => [
                    ['id' => '20ba9f35-a137-5c94-81e4-d900d8064166', 'description' => 'Wars of the Roses', 'correct_answer' => true],
                    ['id' => 'f53f0a76-977f-5e21-8ede-189742c472cd', 'description' => 'Peloponnesian War', 'correct_answer' => false],
                    ['id' => '459ecc8e-d08d-5715-9498-30d9ce87aa6c', 'description' => 'Hundred Years\' War', 'correct_answer' => false],
                    ['id' => '8e75e2f1-863b-5331-97b4-6420c4534d28', 'description' => 'Seven Years\' War', 'correct_answer' => false],
                    ['id' => '3e2a2c83-b7f0-5777-bd00-6a415be3e633', 'description' => 'War of the Spanish Succession', 'correct_answer' => false]
                ]],
        ['id' => 'ef296fd3-2565-5c7b-bf27-085563eee746', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which 1756–1763 global conflict involved major European powers in North America and India?', 'difficulty' => 3, 'weight' => 419, 'alternatives' => [
                    ['id' => '4ec1a3d7-7502-55a2-900d-a06eb081b6b5', 'description' => 'Seven Years\' War', 'correct_answer' => true],
                    ['id' => '86902386-d80e-5682-bf86-b6f1e56cd4ef', 'description' => 'War of the Spanish Succession', 'correct_answer' => false],
                    ['id' => 'd854da8d-f859-5f85-baf2-6f1fd8cfd53e', 'description' => 'Wars of the Roses', 'correct_answer' => false],
                    ['id' => 'f2af5acd-a4e2-5c98-a9b6-57608e1e63dc', 'description' => 'Crimean War', 'correct_answer' => false],
                    ['id' => '2c1354c4-42b8-5986-81f4-cde8cbe982c5', 'description' => 'Punic Wars', 'correct_answer' => false]
                ]],
        ['id' => '9aa90bbd-4e65-5e3b-bd54-297702c3699c', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which series of conflicts between England and France lasted from 1337 to 1453?', 'difficulty' => 3, 'weight' => 425, 'alternatives' => [
                    ['id' => 'b99b7a8b-8d65-5a27-8b9d-d600db187b44', 'description' => 'Peloponnesian War', 'correct_answer' => false],
                    ['id' => '31b2e094-b6c6-5aa3-bec9-66a3b1e9c1ab', 'description' => 'Crimean War', 'correct_answer' => false],
                    ['id' => 'ccb81d59-e923-5af2-a1fc-5b4a1881c7bd', 'description' => 'War of the Spanish Succession', 'correct_answer' => false],
                    ['id' => '46282b22-084a-5572-b86a-c062b938cfa1', 'description' => 'Great Northern War', 'correct_answer' => false],
                    ['id' => '2a1d9345-82ff-50e9-b335-b6886d1015d5', 'description' => 'Hundred Years\' War', 'correct_answer' => true]
                ]],
        ['id' => 'aca4758e-a9bf-5de0-a7a1-fc3fec79d315', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which war between Athens and Sparta lasted from 431 to 404 BCE?', 'difficulty' => 3, 'weight' => 537, 'alternatives' => [
                    ['id' => 'd719725d-3b2e-5f6c-a600-6b0d0cab286c', 'description' => 'Taiping Rebellion', 'correct_answer' => false],
                    ['id' => '4a81bd3a-dde2-5183-9df3-c03f00ec9646', 'description' => 'Peloponnesian War', 'correct_answer' => true],
                    ['id' => '0b22e1f3-7eb4-5e68-96f9-2a53fef4766d', 'description' => 'Seven Years\' War', 'correct_answer' => false],
                    ['id' => '8aec3d09-41f0-5ecb-ab4c-07b613e6219d', 'description' => 'Wars of the Diadochi', 'correct_answer' => false],
                    ['id' => '7208d812-5dbb-593f-9355-3d512bc6e28c', 'description' => 'Wars of the Roses', 'correct_answer' => false]
                ]],
        ['id' => 'e5548745-403c-577c-9a11-8a4a90180108', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which massive nineteenth-century civil war in China was led by Hong Xiuquan?', 'difficulty' => 3, 'weight' => 403, 'alternatives' => [
                    ['id' => 'b443388a-1b34-5841-b017-67b18f1ac914', 'description' => 'Taiping Rebellion', 'correct_answer' => true],
                    ['id' => '7627be26-f8c7-59e6-9e56-ca79d293b0d6', 'description' => 'Wars of the Roses', 'correct_answer' => false],
                    ['id' => 'db82dc9a-0b24-537e-bf0d-ebec98bae246', 'description' => 'Hundred Years\' War', 'correct_answer' => false],
                    ['id' => '05c59a1e-5c20-5d2d-914b-a21c09aca777', 'description' => 'Peloponnesian War', 'correct_answer' => false],
                    ['id' => '6b2d5d2c-1630-5871-b5d9-5b180bcd1928', 'description' => 'Punic Wars', 'correct_answer' => false]
                ]],
        ['id' => 'd9916635-3318-5a18-8d1e-f33644883c32', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which 1853–1856 conflict involved Russia against an alliance including the Ottoman Empire, Britain, and France?', 'difficulty' => 3, 'weight' => 433, 'alternatives' => [
                    ['id' => '50f858d8-e4ad-59ab-a449-ae980aeb79ec', 'description' => 'Punic Wars', 'correct_answer' => false],
                    ['id' => 'd840b813-8c95-5ec9-84ea-f672bc556bc6', 'description' => 'Taiping Rebellion', 'correct_answer' => false],
                    ['id' => '81880b43-c5df-57f8-b629-a86d02834327', 'description' => 'Crimean War', 'correct_answer' => true],
                    ['id' => 'ab8a561b-413a-5521-859f-cfa78bc6b689', 'description' => 'Seven Years\' War', 'correct_answer' => false],
                    ['id' => 'abf166aa-7111-5dea-b929-b6eaac057b07', 'description' => 'Hundred Years\' War', 'correct_answer' => false]
                ]],
        ['id' => 'd2d9cf2b-1479-51a6-90ba-e7579f680c21', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'What name is given to the three wars fought between Rome and Carthage?', 'difficulty' => 3, 'weight' => 521, 'alternatives' => [
                    ['id' => 'a4d3f26a-2eb5-5e1f-a705-d5d3a8807541', 'description' => 'Peloponnesian War', 'correct_answer' => false],
                    ['id' => 'b7b105ec-73a4-5d62-a5f4-5225166b410b', 'description' => 'Punic Wars', 'correct_answer' => true],
                    ['id' => '514e8127-f778-5daf-81fe-48f410e7a534', 'description' => 'Great Northern War', 'correct_answer' => false],
                    ['id' => '97db5321-d44c-5e55-ac28-c7c7d899de93', 'description' => 'Wars of the Roses', 'correct_answer' => false],
                    ['id' => '4bf5a225-5e42-53c5-9b3c-f7769e3d668e', 'description' => 'Crimean War', 'correct_answer' => false]
                ]],
        ['id' => '597b360c-b81f-529a-aa1d-16b1b2c3f239', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which Persian dynasty ruled from Cyrus the Great through Darius III?', 'difficulty' => 3, 'weight' => 560, 'alternatives' => [
                    ['id' => 'bc4f0d3d-0147-5164-962c-08605a081600', 'description' => 'Khmer Empire', 'correct_answer' => false],
                    ['id' => '620d3964-6842-5def-80da-d2f5bc59d708', 'description' => 'Sasanian Empire', 'correct_answer' => false],
                    ['id' => '65135c33-0a1e-57df-aef1-f6525e57d41d', 'description' => 'Seleucid Empire', 'correct_answer' => false],
                    ['id' => '3ebe02fe-de78-58f1-b030-b58e8a6514b9', 'description' => 'Ptolemaic Kingdom', 'correct_answer' => false],
                    ['id' => '8f7ca511-50dd-51aa-a12f-d1279e5bce75', 'description' => 'Achaemenid Empire', 'correct_answer' => true]
                ]],
        ['id' => 'c10e339b-51fc-5d47-bfdb-912210ff2f04', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which Hellenistic kingdom was founded by Seleucus I after Alexander\'s death?', 'difficulty' => 3, 'weight' => 546, 'alternatives' => [
                    ['id' => 'dad38f76-0c56-5eae-8e50-4b4e7f2a5c30', 'description' => 'Khmer Empire', 'correct_answer' => false],
                    ['id' => '76c1a267-80f7-5282-8ba0-551ff022bf97', 'description' => 'Parthian Empire', 'correct_answer' => false],
                    ['id' => '746a3ee3-126a-5b15-8df2-cfdac5c4dd87', 'description' => 'Gupta Empire', 'correct_answer' => false],
                    ['id' => '2fa0c08f-9e4f-5e48-b3e5-3c3548d45d28', 'description' => 'Seleucid Empire', 'correct_answer' => true],
                    ['id' => '83328eeb-dbf6-5cac-9e99-0e113246e0fd', 'description' => 'Kushan Empire', 'correct_answer' => false]
                ]],
        ['id' => '61ed17e6-81b2-59e5-95d4-0998f65963b8', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which Hellenistic kingdom ruled Egypt until Cleopatra VII?', 'difficulty' => 3, 'weight' => 599, 'alternatives' => [
                    ['id' => 'e54a1653-ce7f-545b-98dc-3a98f4e20462', 'description' => 'Xiongnu Confederation', 'correct_answer' => false],
                    ['id' => 'b436637c-a38c-5ec6-b979-cc3c3b0e5f45', 'description' => 'Gupta Empire', 'correct_answer' => false],
                    ['id' => '811969ef-0398-5d99-a0f3-4e8cdaa44476', 'description' => 'Ptolemaic Kingdom', 'correct_answer' => true],
                    ['id' => '3718e22a-7f7a-5442-b31b-ec8a79eb1fe7', 'description' => 'Kushan Empire', 'correct_answer' => false],
                    ['id' => '25a24fe2-b00d-504b-90ef-abad5ef5c0d5', 'description' => 'Seleucid Empire', 'correct_answer' => false]
                ]],
        ['id' => 'ea4f7a16-6fd9-5882-8a86-630509870a17', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which Persian empire was founded by Ardashir I in the third century CE?', 'difficulty' => 3, 'weight' => 463, 'alternatives' => [
                    ['id' => '641a9fce-a396-51fd-b53b-e771272307a1', 'description' => 'Khmer Empire', 'correct_answer' => false],
                    ['id' => 'c21cbcae-dd23-5083-9188-a010c9bd8e57', 'description' => 'Seleucid Empire', 'correct_answer' => false],
                    ['id' => '8605c9e0-c085-57b6-9ced-8248ead5b00a', 'description' => 'Sasanian Empire', 'correct_answer' => true],
                    ['id' => '2b7aa931-fc24-5c04-8547-d52c1f49476f', 'description' => 'Parthian Empire', 'correct_answer' => false],
                    ['id' => '92f1d4f3-62d3-51f2-b7f2-462e1f0269b1', 'description' => 'Xiongnu Confederation', 'correct_answer' => false]
                ]],
        ['id' => '9578dddc-d478-5ee8-a5b3-9bc9a73fd738', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which Central Asian empire under Kanishka supported Buddhist institutions and trade?', 'difficulty' => 3, 'weight' => 570, 'alternatives' => [
                    ['id' => '99052752-5922-5e58-9367-24aa49456a7b', 'description' => 'Khmer Empire', 'correct_answer' => false],
                    ['id' => '0cffe5b6-c6bc-5803-9097-65f4ded26c3e', 'description' => 'Kushan Empire', 'correct_answer' => true],
                    ['id' => '5ae8297a-043c-5678-8da4-ecf81b80d3e6', 'description' => 'Sasanian Empire', 'correct_answer' => false],
                    ['id' => '36a833b1-3f8d-5c9b-b9db-b4814bb57f7a', 'description' => 'Achaemenid Empire', 'correct_answer' => false],
                    ['id' => '78f87a10-2b90-5f0a-a74f-2bd289d5bad0', 'description' => 'Parthian Empire', 'correct_answer' => false]
                ]],
        ['id' => 'c6142534-e400-5186-b33e-2f44f6ba2fcd', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which Iranian empire ruled much of the Near East before the Sasanians?', 'difficulty' => 3, 'weight' => 462, 'alternatives' => [
                    ['id' => '0968147d-2675-55e4-a5b4-f4d79570f265', 'description' => 'Khmer Empire', 'correct_answer' => false],
                    ['id' => '1275067b-df3f-50d9-ba40-b94787a1f6f5', 'description' => 'Gupta Empire', 'correct_answer' => false],
                    ['id' => '15c61d81-0661-5138-813d-63433a6d43a8', 'description' => 'Parthian Empire', 'correct_answer' => true],
                    ['id' => '9b20c2af-4611-5336-9fcc-f5235a1764c8', 'description' => 'Sasanian Empire', 'correct_answer' => false],
                    ['id' => '73d00f9a-f42c-5fde-88ea-03cacfa032dc', 'description' => 'Kushan Empire', 'correct_answer' => false]
                ]],
        ['id' => '93d89677-b54f-52f6-9e5c-8fbe339b23c6', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which Southeast Asian empire built Angkor Wat and dominated much of mainland Southeast Asia?', 'difficulty' => 3, 'weight' => 430, 'alternatives' => [
                    ['id' => 'e865e748-6322-5ef5-9924-9fd35515b241', 'description' => 'Parthian Empire', 'correct_answer' => false],
                    ['id' => '7845a183-43d1-51d5-9e52-6877e339cfc2', 'description' => 'Achaemenid Empire', 'correct_answer' => false],
                    ['id' => '966de93f-93d7-57c0-b493-212240e7d10c', 'description' => 'Khmer Empire', 'correct_answer' => true],
                    ['id' => '6ca068be-a058-519f-a892-173922b4eba0', 'description' => 'Maurya Empire', 'correct_answer' => false],
                    ['id' => '002f8f86-69a1-5e05-8e11-9d1e5110cd8b', 'description' => 'Xiongnu Confederation', 'correct_answer' => false]
                ]],
        ['id' => 'bfa565dd-c6f2-579d-a486-d1699ba2678f', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which nomadic confederation was a major rival of Han China?', 'difficulty' => 3, 'weight' => 594, 'alternatives' => [
                    ['id' => '39c96bc9-2b8c-518b-8307-79b2fdda89a1', 'description' => 'Xiongnu Confederation', 'correct_answer' => true],
                    ['id' => 'fdfe03f2-95a8-5deb-b916-799abca58fd9', 'description' => 'Khmer Empire', 'correct_answer' => false],
                    ['id' => '63142565-7b45-5499-a6b2-1fb3a25941db', 'description' => 'Achaemenid Empire', 'correct_answer' => false],
                    ['id' => '84f72381-ff11-5ce7-b760-edb61f1adb69', 'description' => 'Seleucid Empire', 'correct_answer' => false],
                    ['id' => 'da310924-2dab-564c-a8c3-b4a988f06e70', 'description' => 'Parthian Empire', 'correct_answer' => false]
                ]],
        ['id' => 'cce9817d-07aa-5632-84ae-8fa436989f7a', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which 313 agreement by Constantine and Licinius established religious toleration in the Roman Empire?', 'difficulty' => 3, 'weight' => 462, 'alternatives' => [
                    ['id' => 'b9447083-088c-5e3f-8529-390c75b2014b', 'description' => 'Edict of Thessalonica', 'correct_answer' => false],
                    ['id' => '23c38e91-3adb-50ea-8269-0af4bfaf7ef0', 'description' => 'Edict of Milan', 'correct_answer' => true],
                    ['id' => '942bd1d5-20e5-537d-8d9c-6cc28d7df0b6', 'description' => 'Peace of Augsburg', 'correct_answer' => false],
                    ['id' => 'f9aeee9b-5e95-59cc-9d11-afe3420e37d3', 'description' => 'Pragmatic Sanction of 1713', 'correct_answer' => false],
                    ['id' => 'c9c761d3-346c-50b8-b3ea-ee223ca2fd62', 'description' => 'Concordat of Worms', 'correct_answer' => false]
                ]],
        ['id' => '1b31d112-8c65-5d28-8602-973c6968b9fc', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which decree issued by Charles IV regulated the election of the Holy Roman Emperor?', 'difficulty' => 3, 'weight' => 443, 'alternatives' => [
                    ['id' => 'eb976d1d-4776-5d11-ad73-608845e68402', 'description' => 'Twelve Tables', 'correct_answer' => false],
                    ['id' => '99972f86-d01a-5eab-b9e9-2efeffbb493a', 'description' => 'Peace of Augsburg', 'correct_answer' => false],
                    ['id' => 'f78cf7dc-6b45-5aba-98e4-7e261a113655', 'description' => 'Golden Bull of 1356', 'correct_answer' => true],
                    ['id' => 'fa5964f4-aaa0-58f3-8e47-b44fcdd72edc', 'description' => 'Edict of Milan', 'correct_answer' => false],
                    ['id' => '769d3a54-1409-5ab6-a3ee-9eab7720d9f0', 'description' => 'Lex Hortensia', 'correct_answer' => false]
                ]],
        ['id' => 'd5644e37-24e5-5951-b345-5bc75a913305', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which 287 BCE Roman law made plebiscites binding on all Roman citizens?', 'difficulty' => 3, 'weight' => 409, 'alternatives' => [
                    ['id' => '8e6724eb-e05c-5e5a-8eda-4d5f5f012368', 'description' => 'Peace of Augsburg', 'correct_answer' => false],
                    ['id' => '5513b08c-3465-5bba-9dac-d265e4076bc2', 'description' => 'Twelve Tables', 'correct_answer' => false],
                    ['id' => 'f532e44b-4a04-57c6-8753-4bc06511d550', 'description' => 'Pragmatic Sanction of 1713', 'correct_answer' => false],
                    ['id' => '8d9856f3-cb0b-5548-919a-5bac504eab6f', 'description' => 'Lex Hortensia', 'correct_answer' => true],
                    ['id' => '17104277-a117-5c00-ace5-a00902b54bfc', 'description' => 'Corpus Juris Civilis', 'correct_answer' => false]
                ]],
        ['id' => '70d375a6-174c-5b00-813d-d8d2b84034a2', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which compilation of Roman law was commissioned by Justinian I?', 'difficulty' => 3, 'weight' => 503, 'alternatives' => [
                    ['id' => '42af053e-4ee0-57a2-b69d-20cb12aad797', 'description' => 'Edict of Thessalonica', 'correct_answer' => false],
                    ['id' => 'a3a7c8e6-3a0c-5090-8087-fe8d0b7f0c7c', 'description' => 'Constitutio Antoniniana', 'correct_answer' => false],
                    ['id' => '1a2af591-67cc-54fe-a0a2-e9e3dc76b44e', 'description' => 'Golden Bull of 1356', 'correct_answer' => false],
                    ['id' => '3c428728-904d-50e4-adfe-d851848e02de', 'description' => 'Twelve Tables', 'correct_answer' => false],
                    ['id' => 'f04280c4-c481-5a5a-bcf1-80b29d15fc78', 'description' => 'Corpus Juris Civilis', 'correct_answer' => true]
                ]],
        ['id' => '5bda0d5a-1ca6-5139-bcb3-b778033cc1f8', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which 1555 settlement allowed rulers in the Holy Roman Empire to choose between Catholicism and Lutheranism?', 'difficulty' => 3, 'weight' => 490, 'alternatives' => [
                    ['id' => 'bdebbd3c-f7c4-5967-a948-636ac8c19393', 'description' => 'Edict of Thessalonica', 'correct_answer' => false],
                    ['id' => '1bbf96ad-acb0-5177-af69-7b9e872c8bad', 'description' => 'Concordat of Worms', 'correct_answer' => false],
                    ['id' => 'eb321312-d0f9-50a3-9696-f07a70dc93e9', 'description' => 'Constitutio Antoniniana', 'correct_answer' => false],
                    ['id' => '18383f31-2d7b-575b-bc08-836a22f0ee92', 'description' => 'Lex Hortensia', 'correct_answer' => false],
                    ['id' => '1ed6ce15-0c0d-52d7-8d59-3d9c2f7498c2', 'description' => 'Peace of Augsburg', 'correct_answer' => true]
                ]],
        ['id' => 'dab3c1e5-076e-5157-945f-dc7126cd6594', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which 212 decree by Caracalla extended Roman citizenship to nearly all free inhabitants?', 'difficulty' => 3, 'weight' => 580, 'alternatives' => [
                    ['id' => 'b8c2a3ec-6646-5061-96cc-adc55390fe25', 'description' => 'Twelve Tables', 'correct_answer' => false],
                    ['id' => 'aeadee17-fcd5-50a5-b040-fd9730921b16', 'description' => 'Constitutio Antoniniana', 'correct_answer' => true],
                    ['id' => '53f05069-afe0-54b9-a5e4-f5452ea809fb', 'description' => 'Concordat of Worms', 'correct_answer' => false],
                    ['id' => 'b85bbe7c-ad44-5df7-8199-d5622b7f6e98', 'description' => 'Corpus Juris Civilis', 'correct_answer' => false],
                    ['id' => '58f8c2ee-9b4b-58ed-a3f2-6b31e0f96a1b', 'description' => 'Edict of Milan', 'correct_answer' => false]
                ]],
        ['id' => 'b10b0612-d5e8-559b-bb60-87ac0842da9d', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which 380 decree by Theodosius I made Nicene Christianity the official religion of the Roman Empire?', 'difficulty' => 3, 'weight' => 426, 'alternatives' => [
                    ['id' => 'ba0a8b74-53b3-5ed9-a2c9-35de2bf802cb', 'description' => 'Concordat of Worms', 'correct_answer' => false],
                    ['id' => '162d5bc8-9ee7-5003-97bd-a3c23f90a3d8', 'description' => 'Golden Bull of 1356', 'correct_answer' => false],
                    ['id' => 'b9e68f0b-95d1-58f8-8c94-b130015152b9', 'description' => 'Peace of Augsburg', 'correct_answer' => false],
                    ['id' => 'df854f90-1abf-5abf-828e-300640e4bddb', 'description' => 'Edict of Thessalonica', 'correct_answer' => true],
                    ['id' => 'dc9af688-3164-5f60-988f-17e3ea282d19', 'description' => 'Constitutio Antoniniana', 'correct_answer' => false]
                ]],
        ['id' => '7a9d9fb2-a7d0-5985-8416-19ecb1e4a005', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'What name is given to the earliest written codification of Roman law?', 'difficulty' => 3, 'weight' => 596, 'alternatives' => [
                    ['id' => 'ab7eb3a3-518f-586e-bd3b-443f06f2dc49', 'description' => 'Twelve Tables', 'correct_answer' => true],
                    ['id' => '71ad6d1d-bcb9-5782-b3de-81e7fc77670d', 'description' => 'Pragmatic Sanction of 1713', 'correct_answer' => false],
                    ['id' => 'f29d90f3-bfc1-5bba-b522-cc21b684fbb0', 'description' => 'Corpus Juris Civilis', 'correct_answer' => false],
                    ['id' => '3fe7e28c-5ada-5ed7-bc7b-966f79f22bc4', 'description' => 'Constitutio Antoniniana', 'correct_answer' => false],
                    ['id' => '7179557a-71f2-5ef0-9df7-ea3d3c6119ef', 'description' => 'Edict of Thessalonica', 'correct_answer' => false]
                ]],
        ['id' => '24c56155-38b0-5dff-b858-8f7b4e15a2a3', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which Harappan site in Gujarat is associated with debated evidence of horse remains?', 'difficulty' => 3, 'weight' => 569, 'alternatives' => [
                    ['id' => '0124e77f-ce9a-5290-a315-db06713eed83', 'description' => 'Ganweriwala', 'correct_answer' => false],
                    ['id' => 'c92a372f-33b3-5f18-92e5-847b24ae2533', 'description' => 'Rakhigarhi', 'correct_answer' => false],
                    ['id' => '1020ac25-a347-5d5a-943e-dcb470e69aff', 'description' => 'Dholavira', 'correct_answer' => false],
                    ['id' => '0c79488f-9025-5593-9cf1-3b53e3476b07', 'description' => 'Surkotada', 'correct_answer' => true],
                    ['id' => '8a33bd80-defd-57a7-bb2e-1bc11c2ad763', 'description' => 'Shortugai', 'correct_answer' => false]
                ]],
        ['id' => 'ad468483-5e89-59b7-b585-99d2bd0adc93', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which Indus Valley city in Gujarat is known for sophisticated water management?', 'difficulty' => 3, 'weight' => 577, 'alternatives' => [
                    ['id' => '217a3e79-f55d-5acd-a8e9-a6b0f419378e', 'description' => 'Ganweriwala', 'correct_answer' => false],
                    ['id' => 'caa3ba66-094e-5883-8e2a-bddbcae158ad', 'description' => 'Dholavira', 'correct_answer' => true],
                    ['id' => '28604a6b-7019-5aa5-9998-4915bcbf4824', 'description' => 'Rakhigarhi', 'correct_answer' => false],
                    ['id' => 'b7c19f0a-7390-5fd6-8761-d9f09aa2b530', 'description' => 'Banawali', 'correct_answer' => false],
                    ['id' => '4ec13fc5-33f3-53df-863b-064e7a0b9f6f', 'description' => 'Kalibangan', 'correct_answer' => false]
                ]],
        ['id' => '8485c0f8-403d-5c4d-bad0-19fb0913f53f', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which major Indus Valley city is located in present-day Sindh, Pakistan?', 'difficulty' => 3, 'weight' => 466, 'alternatives' => [
                    ['id' => '3613dda7-23f1-568c-a73d-41ed302933d9', 'description' => 'Harappa', 'correct_answer' => false],
                    ['id' => '3423cbe9-9f56-5867-bdb0-0467855e7dcb', 'description' => 'Mohenjo-daro', 'correct_answer' => true],
                    ['id' => 'f1c3aa4d-2328-5f7c-a355-b1c0362b3816', 'description' => 'Banawali', 'correct_answer' => false],
                    ['id' => '41ce858c-bfff-5d86-9749-c8d57842497d', 'description' => 'Kalibangan', 'correct_answer' => false],
                    ['id' => '732ef2aa-6ed0-58e3-878b-475d9ec593f0', 'description' => 'Dholavira', 'correct_answer' => false]
                ]],
        ['id' => '6d25cee7-2485-53d7-85c9-2f662b7d1646', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which large Harappan archaeological site is located in Haryana, India?', 'difficulty' => 3, 'weight' => 505, 'alternatives' => [
                    ['id' => '11985e9d-acf7-5726-8f18-438e06371046', 'description' => 'Kalibangan', 'correct_answer' => false],
                    ['id' => '48cbd221-c799-5d7b-a93b-b8f1c0d2ddea', 'description' => 'Surkotada', 'correct_answer' => false],
                    ['id' => 'e7b854ca-9bca-5549-9af5-bfb200eccf69', 'description' => 'Mohenjo-daro', 'correct_answer' => false],
                    ['id' => 'caefb41d-52b6-5f8c-8a60-8d9c76160e49', 'description' => 'Lothal', 'correct_answer' => false],
                    ['id' => '053148bf-de30-58d1-b947-0ec8e6a72282', 'description' => 'Rakhigarhi', 'correct_answer' => true]
                ]],
        ['id' => 'd54f7001-d0f8-576c-8723-b8eac2f98780', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which Indus Valley site in Gujarat has a large basin often interpreted as a dockyard?', 'difficulty' => 3, 'weight' => 521, 'alternatives' => [
                    ['id' => '0031594a-31c1-52d6-8a28-cfc438422db5', 'description' => 'Banawali', 'correct_answer' => false],
                    ['id' => '406cd903-f57e-559e-b3bd-f88a139fc6c2', 'description' => 'Kalibangan', 'correct_answer' => false],
                    ['id' => 'fd869066-fc4b-5134-aba3-54ff6cd29c90', 'description' => 'Surkotada', 'correct_answer' => false],
                    ['id' => '7475eba4-bcdb-55f4-84b4-efef23c0b7d5', 'description' => 'Mohenjo-daro', 'correct_answer' => false],
                    ['id' => '0b95be3a-d8d1-5500-87bf-e52d63431e11', 'description' => 'Lothal', 'correct_answer' => true]
                ]],
        ['id' => '7e55bfe6-b90a-58e4-95d0-c5b4dface99e', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which archaeological site gave its name to the Harappan civilization?', 'difficulty' => 3, 'weight' => 510, 'alternatives' => [
                    ['id' => '98b45fad-045a-5d1e-9ee2-78368056c71a', 'description' => 'Mohenjo-daro', 'correct_answer' => false],
                    ['id' => '6a65a911-7405-54aa-b370-fa27a43034e1', 'description' => 'Banawali', 'correct_answer' => false],
                    ['id' => '8a1ba190-3e41-5fd7-8aa5-096dd97155af', 'description' => 'Shortugai', 'correct_answer' => false],
                    ['id' => '9a34b93a-3915-5cd9-b504-8166bc689ce5', 'description' => 'Harappa', 'correct_answer' => true],
                    ['id' => '126b77c0-0306-597c-9ad2-84b676c659c6', 'description' => 'Lothal', 'correct_answer' => false]
                ]],
        ['id' => '9b995d2d-6ffb-5174-bf10-41416627c39d', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which Harappan trading outpost was located in northern Afghanistan near lapis lazuli sources?', 'difficulty' => 3, 'weight' => 523, 'alternatives' => [
                    ['id' => '3e9b5480-ec81-56d0-8bef-f43e99958074', 'description' => 'Banawali', 'correct_answer' => false],
                    ['id' => 'e3946890-c282-5524-ad2b-4b299f40f86e', 'description' => 'Shortugai', 'correct_answer' => true],
                    ['id' => 'a7751f4b-720c-5730-b27f-cfd15331149f', 'description' => 'Dholavira', 'correct_answer' => false],
                    ['id' => 'd95a3f10-7db9-5485-97ad-6c146c298729', 'description' => 'Ganweriwala', 'correct_answer' => false],
                    ['id' => 'f11590dd-558d-5df4-9241-3bf99199f585', 'description' => 'Harappa', 'correct_answer' => false]
                ]],
        ['id' => '03c1f7a8-dcd5-5daf-9b79-78a5b00be6b9', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which major Harappan site is located in Pakistan\'s Cholistan Desert?', 'difficulty' => 3, 'weight' => 472, 'alternatives' => [
                    ['id' => '2f8b13c1-9518-5092-8770-929f1613e890', 'description' => 'Mohenjo-daro', 'correct_answer' => false],
                    ['id' => '3b623d44-96de-5cbf-8764-9f7204914296', 'description' => 'Ganweriwala', 'correct_answer' => true],
                    ['id' => 'd8cc1161-68bf-5582-a665-ace1deb872c5', 'description' => 'Lothal', 'correct_answer' => false],
                    ['id' => 'b4efc36b-d1a1-5127-91e4-1de74a104bdb', 'description' => 'Shortugai', 'correct_answer' => false],
                    ['id' => '1b3034ba-708b-54f5-9dc9-834de1de2169', 'description' => 'Kalibangan', 'correct_answer' => false]
                ]],
        ['id' => 'c8a20929-cc9b-55a5-b140-2588c5b6921d', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which 636 battle was a decisive Rashidun Caliphate victory over the Byzantine Empire?', 'difficulty' => 4, 'weight' => 654, 'alternatives' => [
                    ['id' => '45a8f9ea-8eb3-5bfe-9d30-cb5abd830a35', 'description' => 'Battle of Kosovo', 'correct_answer' => false],
                    ['id' => 'b7410f92-a2da-5324-a7f6-c3ad18159631', 'description' => 'Battle of Ankara', 'correct_answer' => false],
                    ['id' => '66c0fd1f-b188-502c-9759-c5aa7b376a52', 'description' => 'Battle of Yarmouk', 'correct_answer' => true],
                    ['id' => 'cad0ff9f-24c8-54ef-935f-759c10c34e31', 'description' => 'Battle of Dara', 'correct_answer' => false],
                    ['id' => 'e04a8968-e1b9-5b65-b3ef-5caab685d194', 'description' => 'Battle of Talas', 'correct_answer' => false]
                ]],
        ['id' => '0afdc934-e437-5b93-aab1-14a426748e86', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which 1402 battle saw Timur defeat and capture Ottoman Sultan Bayezid I?', 'difficulty' => 4, 'weight' => 687, 'alternatives' => [
                    ['id' => '65e769dc-f518-588d-a8c0-7a01b1c07496', 'description' => 'Battle of Dara', 'correct_answer' => false],
                    ['id' => '0ee19079-2d99-57b5-a9b7-d026c79fe60d', 'description' => 'Battle of Talas', 'correct_answer' => false],
                    ['id' => 'be546c56-9411-54b9-9f1c-49809e14b2d5', 'description' => 'Battle of Kosovo', 'correct_answer' => false],
                    ['id' => 'b83ff253-a152-5ddd-a08f-467d4a9c9905', 'description' => 'Battle of Ankara', 'correct_answer' => true],
                    ['id' => 'af1e8408-3984-56ac-b367-d1b7b2f4b191', 'description' => 'Battle of Manzikert', 'correct_answer' => false]
                ]],
        ['id' => 'aac80cfe-7619-56ce-a2eb-d34fcf55c962', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which 1071 battle resulted in a major Seljuk victory over the Byzantine Empire?', 'difficulty' => 4, 'weight' => 657, 'alternatives' => [
                    ['id' => '2c048c20-c4ed-52eb-928c-ea1898a5fc1a', 'description' => 'Battle of Ankara', 'correct_answer' => false],
                    ['id' => '68f7512c-0410-5a6a-a036-28cb98c8b2be', 'description' => 'Battle of Manzikert', 'correct_answer' => true],
                    ['id' => '4c6a64a0-1c3c-521e-8cc5-83de17bea0f3', 'description' => 'Battle of Dara', 'correct_answer' => false],
                    ['id' => 'a4fd63f0-161d-5417-a406-c99e58fdaf3b', 'description' => 'Battle of Lepanto', 'correct_answer' => false],
                    ['id' => 'bedde0cc-4ea9-597f-9cc2-c480af0380ae', 'description' => 'Battle of Kosovo', 'correct_answer' => false]
                ]],
        ['id' => 'b6577c28-ceee-5508-8dff-e113fa709405', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which 1389 battle involved Ottoman forces and a coalition led by Serbian rulers?', 'difficulty' => 4, 'weight' => 773, 'alternatives' => [
                    ['id' => '2e85148b-3fd6-59c4-bd2f-aee39d4f5a25', 'description' => 'Battle of Manzikert', 'correct_answer' => false],
                    ['id' => 'b73cd329-6bd4-5940-93ad-0256bd8bcbb7', 'description' => 'Battle of Kosovo', 'correct_answer' => true],
                    ['id' => '8af013a8-48c3-5eef-a188-6c8c6039d286', 'description' => 'Battle of Ain Jalut', 'correct_answer' => false],
                    ['id' => 'cb4eff28-8577-5183-9353-32d4b089ecfe', 'description' => 'Battle of Nicopolis', 'correct_answer' => false],
                    ['id' => '0230e4ff-0772-5506-bb12-ca421d2a9a8d', 'description' => 'Battle of Ankara', 'correct_answer' => false]
                ]],
        ['id' => 'b5d7af17-a31a-5c8f-8843-13a67b81bfcc', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which 751 battle between Abbasid forces and Tang China is associated with the westward spread of papermaking?', 'difficulty' => 4, 'weight' => 727, 'alternatives' => [
                    ['id' => '2a43ac52-c402-5ff5-b48e-e67f36365a32', 'description' => 'Battle of Yarmouk', 'correct_answer' => false],
                    ['id' => '9bfcae7b-ba3f-5642-94de-24877d810e9c', 'description' => 'Battle of Talas', 'correct_answer' => true],
                    ['id' => '73ef5d41-4dde-52c2-ad69-56073db0e7ff', 'description' => 'Battle of Ain Jalut', 'correct_answer' => false],
                    ['id' => '6f92383b-218e-5d1f-b0ac-6c40b2eed63d', 'description' => 'Battle of Ankara', 'correct_answer' => false],
                    ['id' => '3e37cc3e-7fce-5b2d-96d0-f6c7dc9b3a4e', 'description' => 'Battle of Mohács', 'correct_answer' => false]
                ]],
        ['id' => '3caa044d-c3ce-5647-9fa7-a2ff9aa5a523', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which 1571 naval battle saw the Holy League defeat an Ottoman fleet?', 'difficulty' => 4, 'weight' => 668, 'alternatives' => [
                    ['id' => 'ed239200-df9d-5c27-8859-2be64db571f0', 'description' => 'Battle of Kosovo', 'correct_answer' => false],
                    ['id' => '3881fc08-4628-5f59-b4e7-9496c23a966f', 'description' => 'Battle of Lepanto', 'correct_answer' => true],
                    ['id' => '5c5a3b73-5b76-50f1-a5ad-d503410f7b9b', 'description' => 'Battle of Talas', 'correct_answer' => false],
                    ['id' => 'f0749e43-ec2d-533a-8fc7-835ab416a1e7', 'description' => 'Battle of Ankara', 'correct_answer' => false],
                    ['id' => 'bb43fce9-973e-5dea-a1ee-cf2ebb25e567', 'description' => 'Battle of Nicopolis', 'correct_answer' => false]
                ]],
        ['id' => '82ee3345-2f84-5853-bce1-ca99ba71673c', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which 530 engagement near the Persian frontier was a major victory for Belisarius during the Iberian War?', 'difficulty' => 4, 'weight' => 776, 'alternatives' => [
                    ['id' => '1c8e548c-4408-5f23-97e0-de64a3744f3d', 'description' => 'Battle of Talas', 'correct_answer' => false],
                    ['id' => '8ca5dfbe-73e7-5ea0-b759-91fcdbc0e6ca', 'description' => 'Battle of Manzikert', 'correct_answer' => false],
                    ['id' => '2bfbc78f-51a5-595e-9571-3cff71e56fe9', 'description' => 'Battle of Ankara', 'correct_answer' => false],
                    ['id' => '21196954-ca09-5b43-822a-26dfde6c6d86', 'description' => 'Battle of Dara', 'correct_answer' => true],
                    ['id' => 'a1e50cfc-3e2c-5de3-b1b7-c05877149a1e', 'description' => 'Battle of Mohács', 'correct_answer' => false]
                ]],
        ['id' => '9eea290d-c130-5a14-8703-b6d8e2ade0f7', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which 1526 battle resulted in a major Ottoman victory over the Kingdom of Hungary?', 'difficulty' => 4, 'weight' => 613, 'alternatives' => [
                    ['id' => '2b17aa4f-0c40-50a4-9ece-44faa69004fc', 'description' => 'Battle of Nicopolis', 'correct_answer' => false],
                    ['id' => '0c8c134e-8891-5c6f-8b7d-22750868f351', 'description' => 'Battle of Dara', 'correct_answer' => false],
                    ['id' => 'd06f6343-f6b8-5034-85a5-3019f233d365', 'description' => 'Battle of Mohács', 'correct_answer' => true],
                    ['id' => 'b4ef96dd-ef91-5313-85ae-7d044f938acb', 'description' => 'Battle of Manzikert', 'correct_answer' => false],
                    ['id' => '7ad5f0ab-4bb0-542f-b23b-8d9e445f0e20', 'description' => 'Battle of Lepanto', 'correct_answer' => false]
                ]],
        ['id' => 'db1cfaff-fd69-5877-87d4-02efe87ecf4f', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which 1648 settlement helped establish principles of territorial sovereignty in Europe?', 'difficulty' => 4, 'weight' => 742, 'alternatives' => [
                    ['id' => 'c33aff57-a2f1-59c9-8634-a79030e4b8c0', 'description' => 'Concordat of Bologna', 'correct_answer' => false],
                    ['id' => 'a00f4583-a93e-5d9e-9492-fa5bd8a6151b', 'description' => 'Peace of Westphalia', 'correct_answer' => true],
                    ['id' => '94762e32-bbc8-562e-9827-0aa0fe891163', 'description' => 'Council of Constance', 'correct_answer' => false],
                    ['id' => '63d2bd97-ec19-5b88-a216-fb197631f4ab', 'description' => 'Great Schism of 1054', 'correct_answer' => false],
                    ['id' => 'b475835e-4212-5d73-8f30-3ef89aba2cb6', 'description' => 'Council of Trent', 'correct_answer' => false]
                ]],
        ['id' => '339a4939-c2a0-5697-891b-4dfc4a2ae367', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which event formalized the separation between the Roman Catholic and Eastern Orthodox churches?', 'difficulty' => 4, 'weight' => 605, 'alternatives' => [
                    ['id' => 'f9967d91-684f-5ed2-b6e1-91f88994cb53', 'description' => 'Diet of Worms', 'correct_answer' => false],
                    ['id' => '309deee4-9ff9-5d88-8242-76e7c8582709', 'description' => 'Peace of Westphalia', 'correct_answer' => false],
                    ['id' => 'd7929582-373e-550c-a69e-d9ac96888645', 'description' => 'Concordat of Bologna', 'correct_answer' => false],
                    ['id' => 'c2ef60d8-c476-5677-a92d-7877915a2688', 'description' => 'Concordat of Worms', 'correct_answer' => false],
                    ['id' => 'd4d5f93f-b5ea-5a5d-be20-a398cea10408', 'description' => 'Great Schism of 1054', 'correct_answer' => true]
                ]],
        ['id' => '40e50985-8698-5abd-be70-7138a1202b0c', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which late medieval crisis involved rival claimants to the papacy in Rome and Avignon?', 'difficulty' => 4, 'weight' => 731, 'alternatives' => [
                    ['id' => '072e4ba6-8f23-5ef3-9f6d-58d975ad0f3e', 'description' => 'Investiture Controversy', 'correct_answer' => false],
                    ['id' => '17b8c272-0e2d-5f80-8e57-e7ef33505261', 'description' => 'Peace of Westphalia', 'correct_answer' => false],
                    ['id' => 'd0d66bba-a467-5650-af04-4008fa7c419e', 'description' => 'Western Schism', 'correct_answer' => true],
                    ['id' => '63c535b8-e771-5479-a425-12ae3c8f6b2a', 'description' => 'Diet of Worms', 'correct_answer' => false],
                    ['id' => '435e604f-9e59-583d-8811-a7190d8051e0', 'description' => 'Avignon Papacy', 'correct_answer' => false]
                ]],
        ['id' => '1d6f2d2c-d307-5320-bfe2-2cce3d9fc29d', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which 1516 agreement between Francis I and Pope Leo X regulated the French Church?', 'difficulty' => 4, 'weight' => 761, 'alternatives' => [
                    ['id' => 'f5f063a6-3b4e-5ba6-b765-a417d4004d32', 'description' => 'Council of Constance', 'correct_answer' => false],
                    ['id' => 'c7370a70-edd2-5cc7-9e99-832afc1e73e2', 'description' => 'Great Schism of 1054', 'correct_answer' => false],
                    ['id' => '9f56a824-bf36-5f55-bbe1-1a3edb7335b1', 'description' => 'Concordat of Bologna', 'correct_answer' => true],
                    ['id' => '17143180-3ee8-56c7-bd52-f3091701a246', 'description' => 'Avignon Papacy', 'correct_answer' => false],
                    ['id' => '2950e785-955d-51f1-a564-0e533e988ac3', 'description' => 'Investiture Controversy', 'correct_answer' => false]
                ]],
        ['id' => '466a7aa7-bcde-5cca-a476-615025c8d820', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which medieval conflict concerned the authority to appoint bishops and abbots?', 'difficulty' => 4, 'weight' => 792, 'alternatives' => [
                    ['id' => '90556070-6794-5c3c-8b75-4320b6970c4b', 'description' => 'Peace of Westphalia', 'correct_answer' => false],
                    ['id' => '062b4d88-dfe0-5e05-9051-fc987224d8a0', 'description' => 'Concordat of Worms', 'correct_answer' => false],
                    ['id' => '2f5fd0a9-31ca-5950-8e88-fe56157fbe12', 'description' => 'Council of Constance', 'correct_answer' => false],
                    ['id' => '525772ab-3baf-52d7-b5f3-8f22c34dc191', 'description' => 'Great Schism of 1054', 'correct_answer' => false],
                    ['id' => 'c0e08b22-f520-5090-850e-44fb8d78e833', 'description' => 'Investiture Controversy', 'correct_answer' => true]
                ]],
        ['id' => '69594f07-08fa-5322-a6b6-f7a6548faf3a', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which 1122 settlement ended the Investiture Controversy between Henry V and Pope Calixtus II?', 'difficulty' => 4, 'weight' => 787, 'alternatives' => [
                    ['id' => '95b2bebc-20e0-5479-8bb9-1c3da60e0f71', 'description' => 'Avignon Papacy', 'correct_answer' => false],
                    ['id' => 'e54bf0ec-bfba-5985-bd6d-4a89e5230592', 'description' => 'Diet of Worms', 'correct_answer' => false],
                    ['id' => '8f898d0a-0690-5551-8415-70f75afd167b', 'description' => 'Concordat of Bologna', 'correct_answer' => false],
                    ['id' => '4e43af77-c7f1-5a5e-b0ba-8de52ffe7be1', 'description' => 'Great Schism of 1054', 'correct_answer' => false],
                    ['id' => '15cc6df0-b507-55b8-b227-1cde67163404', 'description' => 'Concordat of Worms', 'correct_answer' => true]
                ]],
        ['id' => 'b21723d1-c341-53a5-8b74-8f961424b3f5', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which Catholic council from 1545 to 1563 was central to the Counter-Reformation?', 'difficulty' => 4, 'weight' => 798, 'alternatives' => [
                    ['id' => '21b4714f-d64e-5e80-9f92-4a211d7a897b', 'description' => 'Peace of Westphalia', 'correct_answer' => false],
                    ['id' => '82adb71d-8719-5004-9d69-4f501f226f58', 'description' => 'Avignon Papacy', 'correct_answer' => false],
                    ['id' => '125fbec3-18dd-570e-83fe-5822d83ea662', 'description' => 'Council of Trent', 'correct_answer' => true],
                    ['id' => 'bec0e183-3ae9-5a57-9ddc-3eb511a8155b', 'description' => 'Diet of Worms', 'correct_answer' => false],
                    ['id' => 'ac83f523-082e-5f67-9df2-907b94fab320', 'description' => 'Council of Constance', 'correct_answer' => false]
                ]],
        ['id' => '9a41fad9-beba-58c4-aaba-ee57cad08808', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which 1414–1418 council ended the Western Schism and condemned Jan Hus?', 'difficulty' => 4, 'weight' => 602, 'alternatives' => [
                    ['id' => '949d9638-488f-5236-a471-7e97f4235d44', 'description' => 'Diet of Worms', 'correct_answer' => false],
                    ['id' => '48437efc-9aa3-5484-8f6d-debf21fa7ab5', 'description' => 'Concordat of Bologna', 'correct_answer' => false],
                    ['id' => '438d5156-7667-5c19-ab5d-df0b405c3fbd', 'description' => 'Concordat of Worms', 'correct_answer' => false],
                    ['id' => '7a8f5015-d324-5649-bbbd-4337389171b1', 'description' => 'Council of Trent', 'correct_answer' => false],
                    ['id' => '576f705e-67b5-539d-8603-7d093def8d9b', 'description' => 'Council of Constance', 'correct_answer' => true]
                ]],
        ['id' => '12516ae1-9967-548c-acf9-8b4a14cec994', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which Achaemenid king reorganized the empire into satrapies and commissioned the Behistun Inscription?', 'difficulty' => 4, 'weight' => 750, 'alternatives' => [
                    ['id' => 'd3b1bede-7667-5399-b315-4b6eed73412c', 'description' => 'Darius I', 'correct_answer' => true],
                    ['id' => '8da1ad6d-a4b7-5cba-9963-09f79ca9cec7', 'description' => 'Xerxes I', 'correct_answer' => false],
                    ['id' => 'f4397539-ff96-5bfa-bdfb-d89960927461', 'description' => 'Ariobarzanes', 'correct_answer' => false],
                    ['id' => 'a38872fe-41b8-55a0-902f-f8a921a8d567', 'description' => 'Artaxerxes III', 'correct_answer' => false],
                    ['id' => '2a8a97c0-ecc3-53cf-85a0-5e515218f35f', 'description' => 'Cambyses II', 'correct_answer' => false]
                ]],
        ['id' => '27a6bedb-ae98-5502-9601-db73357b57b1', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which son of Cyrus the Great conquered Egypt for the Achaemenid Empire?', 'difficulty' => 4, 'weight' => 666, 'alternatives' => [
                    ['id' => '5e044ddb-d77a-5388-8c2c-364c5f179a4d', 'description' => 'Ariobarzanes', 'correct_answer' => false],
                    ['id' => 'ee96e373-e5db-5758-9488-d8bb1c9465ff', 'description' => 'Cambyses II', 'correct_answer' => true],
                    ['id' => 'd4600436-74c8-5551-8fb7-7330244cf05a', 'description' => 'Darius III', 'correct_answer' => false],
                    ['id' => 'f62eb9a8-194f-50e5-97f8-c337a5721acc', 'description' => 'Artaxerxes I', 'correct_answer' => false],
                    ['id' => '40ab060d-523c-5266-8883-db66007e091e', 'description' => 'Bardiya', 'correct_answer' => false]
                ]],
        ['id' => '8e470ac2-62d7-598d-a323-77bcd39a7d34', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which Achaemenid king ruled during the period associated with Ezra and Nehemiah?', 'difficulty' => 4, 'weight' => 787, 'alternatives' => [
                    ['id' => 'c7cfc71e-2e84-5580-a758-2fe1c49b2e75', 'description' => 'Artaxerxes III', 'correct_answer' => false],
                    ['id' => '50d55b40-b662-54ac-8197-4e1dcadf91b6', 'description' => 'Cambyses II', 'correct_answer' => false],
                    ['id' => '9c74361b-099c-59e6-8e08-aa66a6db484e', 'description' => 'Artaxerxes I', 'correct_answer' => true],
                    ['id' => '0de9c3bb-9163-540e-b5d2-c058df3ba138', 'description' => 'Darius I', 'correct_answer' => false],
                    ['id' => 'e5622633-a682-542a-ad7b-7d7d842d8628', 'description' => 'Artaxerxes II', 'correct_answer' => false]
                ]],
        ['id' => 'b573fd9b-fabe-5577-a0a1-c22fac803433', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which was the last Achaemenid king, defeated by Alexander the Great?', 'difficulty' => 4, 'weight' => 689, 'alternatives' => [
                    ['id' => 'f9cadc76-9618-5b87-a180-09f9530b92c3', 'description' => 'Darius III', 'correct_answer' => true],
                    ['id' => 'fd101884-955b-59c9-8501-f2964dedf380', 'description' => 'Bardiya', 'correct_answer' => false],
                    ['id' => '28a8fc14-ae38-5c58-9d83-a78d36ce268d', 'description' => 'Artaxerxes II', 'correct_answer' => false],
                    ['id' => '1cdb6d01-8dbc-5fdb-91c1-7f6a6b4a549a', 'description' => 'Cyrus the Great', 'correct_answer' => false],
                    ['id' => '8bde30e9-4e51-5025-89d5-645e607ce955', 'description' => 'Xerxes I', 'correct_answer' => false]
                ]],
        ['id' => '8c7c46e9-f030-52b3-ae59-ed2dea0a1936', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which Persian king invaded Greece and fought at Thermopylae and Salamis?', 'difficulty' => 4, 'weight' => 638, 'alternatives' => [
                    ['id' => '7e809dcb-fc22-5518-b1b9-353a726e2ab4', 'description' => 'Cambyses II', 'correct_answer' => false],
                    ['id' => 'c1631ed9-1423-57b9-8d15-3a49ee79f290', 'description' => 'Artaxerxes I', 'correct_answer' => false],
                    ['id' => '755a00ed-e859-5f17-b7fb-8ee6eb915bb1', 'description' => 'Bardiya', 'correct_answer' => false],
                    ['id' => 'cd065e5b-4fe3-5f56-9013-33b480ccb852', 'description' => 'Artaxerxes III', 'correct_answer' => false],
                    ['id' => 'c8355d88-f7d2-5c05-bbd3-3e42b0a5d656', 'description' => 'Xerxes I', 'correct_answer' => true]
                ]],
        ['id' => '797b5571-78a5-5a59-a7d5-aae73304c7c2', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which Persian commander defended the Persian Gates against Alexander\'s army?', 'difficulty' => 4, 'weight' => 674, 'alternatives' => [
                    ['id' => '8ad3e747-4ddb-593d-920c-9b014d81dc31', 'description' => 'Ariobarzanes', 'correct_answer' => true],
                    ['id' => 'd081c049-c43c-5c36-9f41-e1d7a9acfa3d', 'description' => 'Cambyses II', 'correct_answer' => false],
                    ['id' => '610ed1a0-7021-57e8-b4c0-bcb8d8f34558', 'description' => 'Artaxerxes III', 'correct_answer' => false],
                    ['id' => 'bd295a65-07c5-5612-98c1-72cf353a24e7', 'description' => 'Darius III', 'correct_answer' => false],
                    ['id' => 'ba9d165c-75e1-5804-86f5-8f4541615806', 'description' => 'Darius I', 'correct_answer' => false]
                ]],
        ['id' => '5dae92e9-6724-52cb-8537-b420e3038425', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which Achaemenid king reigned during the Battle of Cunaxa?', 'difficulty' => 4, 'weight' => 800, 'alternatives' => [
                    ['id' => '4c9954c7-3aeb-5f77-846e-369ccb298304', 'description' => 'Cyrus the Great', 'correct_answer' => false],
                    ['id' => 'e1aa1b5d-b737-578b-b4d6-e9250f5fd644', 'description' => 'Xerxes I', 'correct_answer' => false],
                    ['id' => '2fd6dbda-8b42-5779-82e6-7086136b0d5a', 'description' => 'Darius III', 'correct_answer' => false],
                    ['id' => '3e501a60-fece-55f6-9a3c-3b04bd95292b', 'description' => 'Artaxerxes I', 'correct_answer' => false],
                    ['id' => '582ef5bf-8290-570d-960f-4db4b23ac54d', 'description' => 'Artaxerxes II', 'correct_answer' => true]
                ]],
        ['id' => 'b36451a0-5fa5-5529-ba5f-4259733f5df9', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which figure\'s disputed claim to the Persian throne was central to Darius I\'s rise?', 'difficulty' => 4, 'weight' => 624, 'alternatives' => [
                    ['id' => '3a1b41dc-6b5b-57e2-8f2b-8a847f6c5f8a', 'description' => 'Artaxerxes I', 'correct_answer' => false],
                    ['id' => '4216714c-2573-584f-b20d-3e92ff72f86b', 'description' => 'Ariobarzanes', 'correct_answer' => false],
                    ['id' => '6a1390e2-67a7-52ad-b83b-65257a5e67f7', 'description' => 'Darius III', 'correct_answer' => false],
                    ['id' => '3dbcb94b-e9de-5c04-a4b5-f4ef70fb2aa5', 'description' => 'Bardiya', 'correct_answer' => true],
                    ['id' => '8af2d89e-9742-5376-989d-0ae3b26b579b', 'description' => 'Artaxerxes III', 'correct_answer' => false]
                ]],
        ['id' => 'a4110d3f-5d09-5d4c-9ccc-69aab5c7d8a1', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which 1718 treaty reshaped Ottoman and Habsburg borders in southeastern Europe?', 'difficulty' => 4, 'weight' => 625, 'alternatives' => [
                    ['id' => 'adbe288f-dd6b-5850-b06a-9f102da3439d', 'description' => 'Treaty of London (1913)', 'correct_answer' => false],
                    ['id' => 'e7b8c9cc-0539-5219-8c69-76da8e50db87', 'description' => 'Treaty of Passarowitz', 'correct_answer' => true],
                    ['id' => '9e471ce2-1521-5712-8445-86a6b63adf65', 'description' => 'Treaty of Jassy', 'correct_answer' => false],
                    ['id' => '2e33920f-9aac-549a-bdeb-06dc712c0721', 'description' => 'Treaty of Küçük Kaynarca', 'correct_answer' => false],
                    ['id' => 'fb5aa994-8964-5f94-a771-b00639a27186', 'description' => 'Treaty of Sèvres', 'correct_answer' => false]
                ]],
        ['id' => '40a53125-3044-5cee-bfb7-f5dc3acc94ac', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which treaty ended the First Balkan War?', 'difficulty' => 4, 'weight' => 641, 'alternatives' => [
                    ['id' => 'd9ba29d0-e96e-53fd-bfba-1084fb615813', 'description' => 'Treaty of Berlin (1878)', 'correct_answer' => false],
                    ['id' => '8eff0ed2-95d6-50da-9a64-8b2f295141b9', 'description' => 'Treaty of San Stefano', 'correct_answer' => false],
                    ['id' => '90fa0a3c-9fff-5714-b7eb-b595eeb66f63', 'description' => 'Treaty of London (1913)', 'correct_answer' => true],
                    ['id' => 'bcf53c7f-ee64-55b1-98a1-1e4481370659', 'description' => 'Treaty of Karlowitz', 'correct_answer' => false],
                    ['id' => '23988bd4-2da2-5bc4-b42d-3434ecbd9b08', 'description' => 'Treaty of Jassy', 'correct_answer' => false]
                ]],
        ['id' => 'c2c76023-0e9a-5930-b76c-9e8768ef1423', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which treaty ended the Second Balkan War?', 'difficulty' => 4, 'weight' => 603, 'alternatives' => [
                    ['id' => 'ec4a6ad0-fa5f-5a02-bb59-e61db4520e15', 'description' => 'Treaty of Bucharest (1913)', 'correct_answer' => true],
                    ['id' => '47ed6395-0b1c-56b4-bdb6-be30b6d83f0f', 'description' => 'Treaty of Jassy', 'correct_answer' => false],
                    ['id' => '8b90115d-ab64-5c5d-9433-2f402ebfc2e1', 'description' => 'Treaty of Karlowitz', 'correct_answer' => false],
                    ['id' => '4cc65d0d-54d8-5e16-805a-21e14a57d7cf', 'description' => 'Treaty of Berlin (1878)', 'correct_answer' => false],
                    ['id' => 'c6e69269-2882-5b8b-ab91-53924dcc88da', 'description' => 'Treaty of Sèvres', 'correct_answer' => false]
                ]],
        ['id' => 'a9198d0a-c33d-5513-9cc2-9e1a30b46e45', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which 1699 treaty marked a major Ottoman territorial retreat in Central Europe?', 'difficulty' => 4, 'weight' => 740, 'alternatives' => [
                    ['id' => '3e2e697d-d322-5a03-94fa-8a92c47e51c1', 'description' => 'Treaty of Adrianople', 'correct_answer' => false],
                    ['id' => 'ea208322-9f5a-5a74-9946-51f6808eff69', 'description' => 'Treaty of Passarowitz', 'correct_answer' => false],
                    ['id' => 'b708be37-847a-5f56-8f8c-e99f8d9e2dc0', 'description' => 'Treaty of Karlowitz', 'correct_answer' => true],
                    ['id' => '4d4748f4-1084-52b4-9b41-cb8881233a9c', 'description' => 'Treaty of London (1913)', 'correct_answer' => false],
                    ['id' => '1781df91-805f-5b8c-8f24-37259aacad9c', 'description' => 'Treaty of Bucharest (1913)', 'correct_answer' => false]
                ]],
        ['id' => 'b8258107-864e-5ee7-ac55-f382dd1cc206', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which 1829 treaty ended the Russo-Turkish War of 1828–1829?', 'difficulty' => 4, 'weight' => 715, 'alternatives' => [
                    ['id' => '9308681d-af43-5204-93b5-e57d7b4a9d5a', 'description' => 'Treaty of Adrianople', 'correct_answer' => true],
                    ['id' => '5ba33023-7244-506c-8b13-c854254db9fc', 'description' => 'Treaty of Bucharest (1913)', 'correct_answer' => false],
                    ['id' => 'd89fbc4c-880a-564c-92fe-c1a3efa9b1a2', 'description' => 'Treaty of Küçük Kaynarca', 'correct_answer' => false],
                    ['id' => '8eabf324-ad26-5d0e-a51f-38aa65af5be2', 'description' => 'Treaty of Berlin (1878)', 'correct_answer' => false],
                    ['id' => '7044dcfd-5554-54c0-9f8d-8290a1ef7e11', 'description' => 'Treaty of Karlowitz', 'correct_answer' => false]
                ]],
        ['id' => '83b03045-b8d9-5c8b-b1be-cc9af9cd4f14', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which 1878 treaty created a large Bulgarian state before revision at the Congress of Berlin?', 'difficulty' => 4, 'weight' => 651, 'alternatives' => [
                    ['id' => '5880b0ba-1e22-57a9-8d3a-dc69e9fe4c59', 'description' => 'Treaty of Bucharest (1913)', 'correct_answer' => false],
                    ['id' => '839f2045-671d-57bf-95e7-88251c92e863', 'description' => 'Treaty of Passarowitz', 'correct_answer' => false],
                    ['id' => 'c9c48f30-8552-574f-b3b3-ac2b233aa067', 'description' => 'Treaty of Sèvres', 'correct_answer' => false],
                    ['id' => 'fe837d26-4b16-5c4c-8bee-4a9be24e6d37', 'description' => 'Treaty of San Stefano', 'correct_answer' => true],
                    ['id' => '43cbe7ab-f6dc-5b47-9b72-c36eb0290502', 'description' => 'Treaty of Adrianople', 'correct_answer' => false]
                ]],
        ['id' => 'a3d0b42f-7541-507d-82fd-3aa8a9fdb580', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which agreement revised the Treaty of San Stefano and reshaped the Balkans?', 'difficulty' => 4, 'weight' => 798, 'alternatives' => [
                    ['id' => '6b7defb4-02ec-5d1c-b506-6018d8d590ea', 'description' => 'Treaty of San Stefano', 'correct_answer' => false],
                    ['id' => 'e377bbe5-c466-51cc-89af-145deb29ac68', 'description' => 'Treaty of Adrianople', 'correct_answer' => false],
                    ['id' => 'eaa8be81-d4d4-5aa1-b8bb-0ef502fbd1c8', 'description' => 'Treaty of Berlin (1878)', 'correct_answer' => true],
                    ['id' => '552f3a9c-24b6-516d-985b-d52f92fafca0', 'description' => 'Treaty of London (1913)', 'correct_answer' => false],
                    ['id' => 'd2a9843a-a45e-55e2-882a-02af76a2cc53', 'description' => 'Treaty of Sèvres', 'correct_answer' => false]
                ]],
        ['id' => '2c6f54ed-71d2-594e-90c4-a10bc719648f', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which 1774 treaty ended the Russo-Turkish War and expanded Russian influence around the Black Sea?', 'difficulty' => 4, 'weight' => 656, 'alternatives' => [
                    ['id' => '75dbe966-3094-555c-9bff-48019790c517', 'description' => 'Treaty of Adrianople', 'correct_answer' => false],
                    ['id' => 'bac9547f-761d-53d1-b95e-2cfec992416d', 'description' => 'Treaty of Küçük Kaynarca', 'correct_answer' => true],
                    ['id' => '091a8770-0197-565a-af79-6fbab465a253', 'description' => 'Treaty of Jassy', 'correct_answer' => false],
                    ['id' => '5114c738-b6c8-53b1-96a3-f167e78d6099', 'description' => 'Treaty of Berlin (1878)', 'correct_answer' => false],
                    ['id' => 'f18b7191-f461-524b-a17f-bbbca497fd48', 'description' => 'Treaty of Karlowitz', 'correct_answer' => false]
                ]],
        ['id' => 'c5318274-bbce-5dd5-b475-ba7dbaa42d9e', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which eighth-century Byzantine legal code was promulgated under Leo III and Constantine V?', 'difficulty' => 4, 'weight' => 602, 'alternatives' => [
                    ['id' => 'ba19594d-9475-5363-a2c5-8d09a90b03c4', 'description' => 'Codex Theodosianus', 'correct_answer' => false],
                    ['id' => '9eb03f77-b727-5550-bc66-0bfb24e2b88a', 'description' => 'Ecloga', 'correct_answer' => true],
                    ['id' => '3338e386-0492-59b5-bad8-2eb206616d9c', 'description' => 'Twelve Tables', 'correct_answer' => false],
                    ['id' => '0b20d569-7aa2-554f-a6b0-5b5430b2c4e2', 'description' => 'Constitutio Antoniniana', 'correct_answer' => false],
                    ['id' => 'bccac559-ca0a-50f8-907c-4302b4e61756', 'description' => 'Pragmatic Sanction of 1713', 'correct_answer' => false]
                ]],
        ['id' => 'd12e81dc-6059-5944-8b17-0b9ce96b055a', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which group of Roman laws under Augustus addressed marriage and adultery?', 'difficulty' => 4, 'weight' => 747, 'alternatives' => [
                    ['id' => '26401656-5e83-5f68-bdb6-b1f11590f007', 'description' => 'Golden Bull of 1356', 'correct_answer' => false],
                    ['id' => '72f1819b-7450-5677-9f25-254c44d4f091', 'description' => 'Lex Aquilia', 'correct_answer' => false],
                    ['id' => '2bb918ce-9786-5fde-a2a5-451085dbfcdf', 'description' => 'Ecloga', 'correct_answer' => false],
                    ['id' => 'a1293559-ee79-5370-ac0a-4220855b3048', 'description' => 'Lex Julia', 'correct_answer' => true],
                    ['id' => 'f2891352-c2b7-5174-9349-02e1215c4f55', 'description' => 'Twelve Tables', 'correct_answer' => false]
                ]],
        ['id' => '5d66d488-168c-5c89-9adc-b18a90f1c4a6', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which Justinianic compilation includes the Digest, Institutes, Code, and Novels?', 'difficulty' => 4, 'weight' => 670, 'alternatives' => [
                    ['id' => 'f82554e9-08da-557b-a58d-799ac275df62', 'description' => 'Twelve Tables', 'correct_answer' => false],
                    ['id' => '024e69d4-7504-50cf-b509-5692a29cc2db', 'description' => 'Lex Julia', 'correct_answer' => false],
                    ['id' => '2c39e12b-4539-55fb-9b71-6e0fc2bb03d5', 'description' => 'Corpus Juris Civilis', 'correct_answer' => true],
                    ['id' => 'b31770f8-67eb-534c-a046-2c6137c9a6e1', 'description' => 'Ecloga', 'correct_answer' => false],
                    ['id' => 'fe2866fc-d1e2-5578-89e9-0b8845cef25e', 'description' => 'Golden Bull of 1356', 'correct_answer' => false]
                ]],
        ['id' => 'f2501fcb-654f-5639-a0d0-fc80c5da3881', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which Roman law made plebiscites binding on all Roman citizens?', 'difficulty' => 4, 'weight' => 660, 'alternatives' => [
                    ['id' => 'd0219c79-5ca9-53d1-84f3-1a8d1fb83f3c', 'description' => 'Pragmatic Sanction of 1713', 'correct_answer' => false],
                    ['id' => '8e9d0e73-a80d-5922-a0d7-efc419f7751f', 'description' => 'Corpus Juris Civilis', 'correct_answer' => false],
                    ['id' => '9c24d12f-69b9-529c-9344-e8c7a796f127', 'description' => 'Twelve Tables', 'correct_answer' => false],
                    ['id' => 'ec8c6d37-dfe5-5f3c-bb22-3d3d28dc28f1', 'description' => 'Lex Aquilia', 'correct_answer' => false],
                    ['id' => '47006d27-386e-5c93-b636-af345f47614e', 'description' => 'Lex Hortensia', 'correct_answer' => true]
                ]],
        ['id' => 'a6518c1c-a7cf-5437-acf3-d196927d606f', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which Habsburg succession instrument was issued by Charles VI?', 'difficulty' => 4, 'weight' => 743, 'alternatives' => [
                    ['id' => '6e19ee58-e379-521a-a0e8-1c28b92e4e5c', 'description' => 'Ecloga', 'correct_answer' => false],
                    ['id' => '645288cd-6243-53c6-9ae9-099a5aac2702', 'description' => 'Pragmatic Sanction of 1713', 'correct_answer' => true],
                    ['id' => '280dd07b-13e0-5f7f-9a76-f2fe78a571db', 'description' => 'Twelve Tables', 'correct_answer' => false],
                    ['id' => 'f1399862-6ad7-506d-bd1e-14b02c554ed6', 'description' => 'Corpus Juris Civilis', 'correct_answer' => false],
                    ['id' => '41f217ee-cba6-5741-8096-23447acf4f2c', 'description' => 'Codex Theodosianus', 'correct_answer' => false]
                ]],
        ['id' => '4bc15ecd-53f7-5d20-a47f-48c599bfd19a', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which Roman statute established liability for wrongful damage to property?', 'difficulty' => 4, 'weight' => 759, 'alternatives' => [
                    ['id' => '079c5dcd-6e17-5118-94db-712d8c9a685d', 'description' => 'Corpus Juris Civilis', 'correct_answer' => false],
                    ['id' => '39f81587-ff46-5b41-84b5-a2e24076516f', 'description' => 'Codex Theodosianus', 'correct_answer' => false],
                    ['id' => '4792af25-4f17-5703-a912-639992edcee1', 'description' => 'Lex Julia', 'correct_answer' => false],
                    ['id' => 'b67a6031-d0f1-52d5-aeb2-b12f58227fde', 'description' => 'Pragmatic Sanction of 1713', 'correct_answer' => false],
                    ['id' => '74e9d1b2-6461-5f53-98fb-4d09afd2f866', 'description' => 'Lex Aquilia', 'correct_answer' => true]
                ]],
        ['id' => '648837ef-2558-5e27-8bb5-456b3b84d5ea', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which early Roman legal code was traditionally displayed in the Forum?', 'difficulty' => 4, 'weight' => 616, 'alternatives' => [
                    ['id' => 'effd1984-13e7-5239-91f9-ab6ba9b97756', 'description' => 'Twelve Tables', 'correct_answer' => true],
                    ['id' => '307cb68b-9576-5287-926d-0cae4cad9971', 'description' => 'Corpus Juris Civilis', 'correct_answer' => false],
                    ['id' => 'bc7fd4b4-b998-57ae-ae35-784b26f3604a', 'description' => 'Ecloga', 'correct_answer' => false],
                    ['id' => 'e0dcb084-835c-56e4-856e-1a9b1c1739ff', 'description' => 'Codex Theodosianus', 'correct_answer' => false],
                    ['id' => '78b0403c-e83f-5338-8f34-05b4afd87fb0', 'description' => 'Lex Hortensia', 'correct_answer' => false]
                ]],
        ['id' => 'c1e36632-9012-50a7-a203-265c690885ba', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which Roman edict extended citizenship to nearly all free inhabitants in 212 CE?', 'difficulty' => 4, 'weight' => 755, 'alternatives' => [
                    ['id' => '4eb04842-afaa-51c4-a0ed-6913d7b36506', 'description' => 'Constitutio Antoniniana', 'correct_answer' => true],
                    ['id' => '159651bb-455c-5a2c-9078-ab044e6ce344', 'description' => 'Twelve Tables', 'correct_answer' => false],
                    ['id' => 'a0bc15b2-8a57-5deb-a1ee-a6a249765874', 'description' => 'Ecloga', 'correct_answer' => false],
                    ['id' => 'c3b3e2a0-5988-53e7-8eb0-2afae9d1e2f1', 'description' => 'Corpus Juris Civilis', 'correct_answer' => false],
                    ['id' => '70d9dfd0-ecc3-5e61-9e84-ab9519742085', 'description' => 'Golden Bull of 1356', 'correct_answer' => false]
                ]],
        ['id' => '7fdcebcf-040e-5d28-9826-259cd316a82b', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which seventh-century battle was a major Rashidun victory over the Sasanians?', 'difficulty' => 5, 'weight' => 890, 'alternatives' => [
                    ['id' => 'ed31535a-f7c0-5654-8989-4cb0ab585910', 'description' => 'Battle of al-Qadisiyyah', 'correct_answer' => true],
                    ['id' => 'a6700ab0-0fe1-5902-aa64-2470129d2239', 'description' => 'Battle of Carrhae', 'correct_answer' => false],
                    ['id' => '055a9534-5b74-5144-84d8-001157e939d7', 'description' => 'Battle of Nineveh (627)', 'correct_answer' => false],
                    ['id' => '03f8c69d-7826-5cf5-a9ed-86c1dd1eef9b', 'description' => 'Battle of Talas', 'correct_answer' => false],
                    ['id' => '6d90f596-8e2b-5c50-a4d7-8430aafc1f1c', 'description' => 'Battle of Edessa', 'correct_answer' => false]
                ]],
        ['id' => '9a7f7556-a650-5a53-ab3e-7cabeeea4789', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which 751 battle involved Abbasid and Tang forces in Central Asia?', 'difficulty' => 5, 'weight' => 961, 'alternatives' => [
                    ['id' => '46c1b234-8554-5629-bd31-9460cb6098c6', 'description' => 'Battle of Callinicum', 'correct_answer' => false],
                    ['id' => '71d4bc0d-3186-50bb-a682-16222fd8629d', 'description' => 'Battle of Ctesiphon (363)', 'correct_answer' => false],
                    ['id' => '04b5e79b-001d-5023-b5ea-86dace913982', 'description' => 'Battle of Talas', 'correct_answer' => true],
                    ['id' => 'ef892941-9d6a-50b8-8c43-9e04be8af06d', 'description' => 'Battle of Dara', 'correct_answer' => false],
                    ['id' => '7a4deb1d-c298-5375-b743-3ab190006366', 'description' => 'Battle of Nihavand', 'correct_answer' => false]
                ]],
        ['id' => '23c7ae64-4088-5f5d-bc61-648533c38000', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which battle preceded Julian\'s retreat from the Sasanian capital?', 'difficulty' => 5, 'weight' => 992, 'alternatives' => [
                    ['id' => 'e92e905f-7bff-5b69-aee6-99f328932196', 'description' => 'Battle of al-Qadisiyyah', 'correct_answer' => false],
                    ['id' => '52b95d98-d3a5-5e0a-bfdc-a3b389a884e9', 'description' => 'Battle of Dara', 'correct_answer' => false],
                    ['id' => 'cd91b7fc-5545-5b3a-997b-de6f8d2ca42a', 'description' => 'Battle of Nineveh (627)', 'correct_answer' => false],
                    ['id' => '1a74a1ad-3716-5cea-b5c9-aab35f0ca727', 'description' => 'Battle of Edessa', 'correct_answer' => false],
                    ['id' => '99fdabb6-8454-5d67-aeda-f3f6c42f0181', 'description' => 'Battle of Ctesiphon (363)', 'correct_answer' => true]
                ]],
        ['id' => 'd8bdcfdc-a605-5666-a624-d009677422a1', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which 642 battle is sometimes called the Victory of Victories and helped end Sasanian resistance?', 'difficulty' => 5, 'weight' => 888, 'alternatives' => [
                    ['id' => '3dbfd56a-6f27-52e8-84b0-28b709eb74cf', 'description' => 'Battle of Ctesiphon (363)', 'correct_answer' => false],
                    ['id' => 'f146b35b-6006-5be9-a6c6-188249b23cb5', 'description' => 'Battle of Carrhae', 'correct_answer' => false],
                    ['id' => 'b3e51a4d-b9e7-5ec3-87d8-e870db5d0a3d', 'description' => 'Battle of Nineveh (627)', 'correct_answer' => false],
                    ['id' => '4f7b4943-fee2-5c7e-8f53-bc99de1112ee', 'description' => 'Battle of Dara', 'correct_answer' => false],
                    ['id' => '3c5805ba-9aa3-5f4c-84e7-7e04f5343a25', 'description' => 'Battle of Nihavand', 'correct_answer' => true]
                ]],
        ['id' => 'fbb96b91-4e40-512c-85e4-76e5bfb17d7b', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which 260 CE battle resulted in Emperor Valerian\'s capture by Shapur I?', 'difficulty' => 5, 'weight' => 967, 'alternatives' => [
                    ['id' => 'e48a2858-9f33-5f1a-be64-a52379c274bd', 'description' => 'Battle of Edessa', 'correct_answer' => true],
                    ['id' => 'e3a47de3-40ff-545e-a213-14631923be34', 'description' => 'Battle of Ctesiphon (363)', 'correct_answer' => false],
                    ['id' => 'e7c1735a-7b94-59ad-a5f9-13bee53c896a', 'description' => 'Battle of the Zab', 'correct_answer' => false],
                    ['id' => 'cd43e6e9-d6ec-5375-94a9-d852a9ca8e47', 'description' => 'Battle of Dara', 'correct_answer' => false],
                    ['id' => '707a7c84-3f3c-5e6a-9ff5-1cfead4dc31a', 'description' => 'Battle of Nineveh (627)', 'correct_answer' => false]
                ]],
        ['id' => '60d88be6-0def-536f-b39f-43f0ec9a24d7', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which battle was a decisive Byzantine victory over the Sasanian Empire under Heraclius?', 'difficulty' => 5, 'weight' => 965, 'alternatives' => [
                    ['id' => '14d30abb-cec4-5e02-8ceb-518230746683', 'description' => 'Battle of Nihavand', 'correct_answer' => false],
                    ['id' => '250d609e-4443-5d61-bf85-2164b75d342c', 'description' => 'Battle of al-Qadisiyyah', 'correct_answer' => false],
                    ['id' => 'f56dc634-73f7-59d2-95d1-58178a2fbde2', 'description' => 'Battle of Nineveh (627)', 'correct_answer' => true],
                    ['id' => 'ada571b0-285b-55fc-bd87-19d2fa6ceed0', 'description' => 'Battle of Callinicum', 'correct_answer' => false],
                    ['id' => '02548006-def8-5e85-b39c-1556d5048edf', 'description' => 'Battle of Talas', 'correct_answer' => false]
                ]],
        ['id' => '7c86ec8d-9c7f-5b52-b047-159b22bd4a28', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which 750 battle ended Umayyad rule in favor of the Abbasids?', 'difficulty' => 5, 'weight' => 931, 'alternatives' => [
                    ['id' => 'fb2122d5-a715-5075-b437-8fd006ebf19d', 'description' => 'Battle of Talas', 'correct_answer' => false],
                    ['id' => 'c2a2330d-b5f5-583c-8c7c-6fd41375eeb2', 'description' => 'Battle of Ctesiphon (363)', 'correct_answer' => false],
                    ['id' => 'bda5f3dd-02a6-558c-95b6-b1b5246fb256', 'description' => 'Battle of Carrhae', 'correct_answer' => false],
                    ['id' => '9da95e2c-dc85-59a7-b7bd-ffae5aa344bb', 'description' => 'Battle of the Zab', 'correct_answer' => true],
                    ['id' => '112d093c-348c-50c0-bef0-819987388eb8', 'description' => 'Battle of Edessa', 'correct_answer' => false]
                ]],
        ['id' => '9450933b-607a-562e-b06e-79f882f9ea77', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which 531 battle between Byzantine and Sasanian forces ended without a decisive strategic result?', 'difficulty' => 5, 'weight' => 877, 'alternatives' => [
                    ['id' => '1df8f0ba-57d9-5ba2-90cd-5e8ae96f5196', 'description' => 'Battle of Nineveh (627)', 'correct_answer' => false],
                    ['id' => '5fa609f4-4702-5e8f-a1f2-67016e64edbc', 'description' => 'Battle of Carrhae', 'correct_answer' => false],
                    ['id' => 'be0486da-3d27-51c1-babf-7fd0a3a035f5', 'description' => 'Battle of Callinicum', 'correct_answer' => true],
                    ['id' => 'db03fed4-093c-575a-b976-a10a546d70b4', 'description' => 'Battle of Talas', 'correct_answer' => false],
                    ['id' => 'd7b1fdaf-d06e-5c58-a86b-3251e1157dc7', 'description' => 'Battle of Edessa', 'correct_answer' => false]
                ]],
        ['id' => '3133c1f8-e487-52fc-b623-a52860c1ce56', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which theological dispute about the relationship between Father and Son was addressed at Nicaea in 325?', 'difficulty' => 5, 'weight' => 965, 'alternatives' => [
                    ['id' => 'eea452a0-3b27-5fb5-b7db-3cb7222ca168', 'description' => 'Monophysite controversy', 'correct_answer' => false],
                    ['id' => '2157d1b9-1623-5856-a3a7-db84834025ac', 'description' => 'Monothelite controversy', 'correct_answer' => false],
                    ['id' => 'f02bd2c5-3d67-51bf-8cc5-710164f37ee3', 'description' => 'Donatist controversy', 'correct_answer' => false],
                    ['id' => 'b01efe1a-84d8-5e95-b110-94093745de40', 'description' => 'Arian controversy', 'correct_answer' => true],
                    ['id' => '0e46fc8a-7aa6-5c50-8aeb-5e64c530b475', 'description' => 'Pelagian controversy', 'correct_answer' => false]
                ]],
        ['id' => 'e890d71f-9c7f-51fa-ac6a-3c81d5e88a14', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which Christological dispute concerned whether Christ had one nature or two?', 'difficulty' => 5, 'weight' => 906, 'alternatives' => [
                    ['id' => '593a8d05-4abf-5120-b41f-df49852f85a6', 'description' => 'Pelagian controversy', 'correct_answer' => false],
                    ['id' => '971c9c10-9013-5cce-8032-b0bb1993feb9', 'description' => 'Nestorian controversy', 'correct_answer' => false],
                    ['id' => '7cba2a26-bd13-587c-b944-cce0047d95fa', 'description' => 'Monophysite controversy', 'correct_answer' => true],
                    ['id' => 'fbc16d98-1e81-540c-996d-f024a47d7c6b', 'description' => 'Filioque controversy', 'correct_answer' => false],
                    ['id' => '9e632db7-0bba-5b64-8020-688ed4936401', 'description' => 'Three Chapters controversy', 'correct_answer' => false]
                ]],
        ['id' => 'bdbd1e68-cf48-5e37-b5a4-f26895332367', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which sixth-century dispute involved the condemnation of writings associated with Theodore of Mopsuestia?', 'difficulty' => 5, 'weight' => 849, 'alternatives' => [
                    ['id' => '7c1666a7-b948-559d-9f9b-1a36067ee483', 'description' => 'Arian controversy', 'correct_answer' => false],
                    ['id' => '51609f2b-c0fb-50b1-9596-06d6d74ddcb5', 'description' => 'Monophysite controversy', 'correct_answer' => false],
                    ['id' => 'ecebae12-9205-586c-a2fa-bd4a5b84e95c', 'description' => 'Iconoclast controversy', 'correct_answer' => false],
                    ['id' => '17a3fea5-0f3e-52c0-9ef0-4a247d64bc33', 'description' => 'Donatist controversy', 'correct_answer' => false],
                    ['id' => 'a4d009fc-7725-5c76-b5a8-47f9120cc692', 'description' => 'Three Chapters controversy', 'correct_answer' => true]
                ]],
        ['id' => '9c9001f8-fd5b-5bb5-b359-7c44d7cc8a5f', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which fifth-century dispute concerned Christ\'s natures and the title Theotokos?', 'difficulty' => 5, 'weight' => 817, 'alternatives' => [
                    ['id' => '8c37785f-ae5c-5b75-8eee-bc3d0178cd32', 'description' => 'Pelagian controversy', 'correct_answer' => false],
                    ['id' => '0007a736-1510-5152-aef9-534c19176849', 'description' => 'Investiture Controversy', 'correct_answer' => false],
                    ['id' => 'aa184b73-a4f2-5c2d-b8db-8ab126febfaa', 'description' => 'Arian controversy', 'correct_answer' => false],
                    ['id' => 'ee994171-4251-56ec-a00b-9fe69493aa33', 'description' => 'Nestorian controversy', 'correct_answer' => true],
                    ['id' => 'b417e6b6-7d6a-5272-ac9b-45df14174483', 'description' => 'Iconoclast controversy', 'correct_answer' => false]
                ]],
        ['id' => 'f418f577-f556-56e8-a7c7-e8e37a5da80d', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which seventh-century dispute concerned whether Christ had one will or two?', 'difficulty' => 5, 'weight' => 946, 'alternatives' => [
                    ['id' => 'e7832f3e-6a4a-51bb-a609-7dc674f77409', 'description' => 'Monothelite controversy', 'correct_answer' => true],
                    ['id' => '00bc3739-91b6-55a8-aa61-64cb7b66045b', 'description' => 'Donatist controversy', 'correct_answer' => false],
                    ['id' => '5e75b6cd-14ce-5bf8-b9a0-ca79dec491ef', 'description' => 'Investiture Controversy', 'correct_answer' => false],
                    ['id' => 'c33575fd-2f64-5ee9-9157-87ab1690298e', 'description' => 'Iconoclast controversy', 'correct_answer' => false],
                    ['id' => '82bb9b54-bef5-5be2-9e33-8d1e30d4729f', 'description' => 'Nestorian controversy', 'correct_answer' => false]
                ]],
        ['id' => 'c248f87e-b717-52e4-9a79-9cd7de75c910', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which conflict culminated in the 1077 Canossa episode involving Henry IV and Gregory VII?', 'difficulty' => 5, 'weight' => 878, 'alternatives' => [
                    ['id' => '25536043-67a5-5a01-94c6-57f8dde92b79', 'description' => 'Investiture Controversy', 'correct_answer' => true],
                    ['id' => '323f7b38-b54e-543b-87c3-c3318b32ecc0', 'description' => 'Monophysite controversy', 'correct_answer' => false],
                    ['id' => '8706ea0a-2aed-5bf9-a83f-b0b113a607fa', 'description' => 'Donatist controversy', 'correct_answer' => false],
                    ['id' => '1bad0a49-b2e5-5d69-bb03-cb501aaf62ca', 'description' => 'Three Chapters controversy', 'correct_answer' => false],
                    ['id' => '601ce710-efcd-5606-be49-dd8840ab8ce7', 'description' => 'Monothelite controversy', 'correct_answer' => false]
                ]],
        ['id' => 'f1097693-3043-592e-9387-932e17f20973', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which Byzantine religious conflict concerned the legitimacy of religious images?', 'difficulty' => 5, 'weight' => 848, 'alternatives' => [
                    ['id' => '091064d3-16f1-5abb-8c9a-35ef3292cb45', 'description' => 'Iconoclast controversy', 'correct_answer' => true],
                    ['id' => '9bd76d01-6197-5237-a215-4ce63ca70890', 'description' => 'Nestorian controversy', 'correct_answer' => false],
                    ['id' => '8f52ed4c-7d97-5187-bcc4-4d9caf544d4c', 'description' => 'Three Chapters controversy', 'correct_answer' => false],
                    ['id' => '45c4f14d-d42e-5b5d-a5c3-a7c543809094', 'description' => 'Monothelite controversy', 'correct_answer' => false],
                    ['id' => 'ca0ba1c9-a002-5985-8f58-875902c49710', 'description' => 'Pelagian controversy', 'correct_answer' => false]
                ]],
        ['id' => 'd23b8438-d9fa-515c-b06e-b1a22e54a8d9', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which theological dispute concerned original sin, grace, and human free will?', 'difficulty' => 5, 'weight' => 930, 'alternatives' => [
                    ['id' => 'f301bab1-b5e0-5386-a887-8a344ed89224', 'description' => 'Donatist controversy', 'correct_answer' => false],
                    ['id' => 'd5aa8a02-070e-5e5f-a80c-ec22d29da716', 'description' => 'Monophysite controversy', 'correct_answer' => false],
                    ['id' => '112034fd-eeff-565f-a61d-b68c72b692d2', 'description' => 'Arian controversy', 'correct_answer' => false],
                    ['id' => 'eb27e5aa-abdd-5aed-86b4-00ce54e2cc18', 'description' => 'Pelagian controversy', 'correct_answer' => true],
                    ['id' => '148f5776-708a-5c83-8914-3848f70f7c6c', 'description' => 'Investiture Controversy', 'correct_answer' => false]
                ]],
        ['id' => 'fb161f26-869a-5b64-bcc3-ca5f75c7c43c', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which Aramaic inscription contains a debated reference commonly read as the House of David?', 'difficulty' => 5, 'weight' => 858, 'alternatives' => [
                    ['id' => '2d2636f4-6f82-58bc-a8f4-ff9472e61611', 'description' => 'Black Obelisk of Shalmaneser III', 'correct_answer' => false],
                    ['id' => 'bca1c799-3fd8-5ce9-a56b-957c1ba8b594', 'description' => 'Siloam Inscription', 'correct_answer' => false],
                    ['id' => '63f2eb6c-31a3-581a-8d5a-e0bbfc77f7e8', 'description' => 'Tel Dan Stele', 'correct_answer' => true],
                    ['id' => '2c75544a-3c48-586c-ab49-ee58c3fe210e', 'description' => 'Amarna Letters', 'correct_answer' => false],
                    ['id' => '9aa78cac-de13-57c1-a20d-a77ed5d2b3a9', 'description' => 'Rosetta Stone', 'correct_answer' => false]
                ]],
        ['id' => '0ce5164e-2f1d-50fd-ad47-9bd3a9136891', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which Akkadian inscription from Babylon is associated with Cyrus the Great\'s conquest?', 'difficulty' => 5, 'weight' => 866, 'alternatives' => [
                    ['id' => '4328b6b4-6699-5b67-b247-8c5e81c332f8', 'description' => 'Siloam Inscription', 'correct_answer' => false],
                    ['id' => '8f2dc61d-e4c6-5a79-862c-02cbec821ca9', 'description' => 'Kurkh Monolith', 'correct_answer' => false],
                    ['id' => '7a382ae5-8f30-535e-b379-cc5f37c8f539', 'description' => 'Amarna Letters', 'correct_answer' => false],
                    ['id' => 'd1787813-a34e-5b7d-b8e3-f705c39a7253', 'description' => 'Cyrus Cylinder', 'correct_answer' => true],
                    ['id' => 'bd0d5aa5-ca84-597d-bed2-1a6127451035', 'description' => 'Behistun Inscription', 'correct_answer' => false]
                ]],
        ['id' => '33e61873-fde6-5303-bafb-e94674ab6f1a', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which trilingual decree was key to deciphering Egyptian hieroglyphs?', 'difficulty' => 5, 'weight' => 900, 'alternatives' => [
                    ['id' => 'd19dc6f6-bebd-58e1-b371-4500b278e6c9', 'description' => 'Cyrus Cylinder', 'correct_answer' => false],
                    ['id' => '6b7cbdf3-fc9d-5141-b365-a241f8320cb8', 'description' => 'Black Obelisk of Shalmaneser III', 'correct_answer' => false],
                    ['id' => 'e9d6a56f-5c11-57f6-837c-67e8075b2c7f', 'description' => 'Mesha Stele', 'correct_answer' => false],
                    ['id' => 'ee0b81dd-a20d-5ce0-8330-4a420cec5360', 'description' => 'Rosetta Stone', 'correct_answer' => true],
                    ['id' => '13dfa20d-47fe-5b68-a30c-cf2ea5a21238', 'description' => 'Siloam Inscription', 'correct_answer' => false]
                ]],
        ['id' => 'f7bfc5f3-0ae3-58c7-b3ab-9ec1b3884609', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which trilingual inscription commissioned by Darius I was crucial to deciphering cuneiform?', 'difficulty' => 5, 'weight' => 815, 'alternatives' => [
                    ['id' => '44dbae5a-9e62-51a7-bee0-5894c694de61', 'description' => 'Black Obelisk of Shalmaneser III', 'correct_answer' => false],
                    ['id' => '99fbe470-b7a1-5de2-95e1-55ab77c35133', 'description' => 'Tel Dan Stele', 'correct_answer' => false],
                    ['id' => '37de2886-69d1-569e-809d-81f3b59d0586', 'description' => 'Lachish Letters', 'correct_answer' => false],
                    ['id' => '3c65e93d-7d9f-5559-8021-91e78dde4ff6', 'description' => 'Siloam Inscription', 'correct_answer' => false],
                    ['id' => 'bac11b06-cce9-515c-9a05-e33accb4e282', 'description' => 'Behistun Inscription', 'correct_answer' => true]
                ]],
        ['id' => '08040f2c-fada-565c-a50a-18279d2eecd1', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which Moabite inscription describes King Mesha\'s revolt against Israel?', 'difficulty' => 5, 'weight' => 822, 'alternatives' => [
                    ['id' => '7d7dd8a5-4fa4-5ef4-898a-e58bc3362424', 'description' => 'Black Obelisk of Shalmaneser III', 'correct_answer' => false],
                    ['id' => '3a6a87fd-6921-5e73-9d2b-67d962c29ed7', 'description' => 'Amarna Letters', 'correct_answer' => false],
                    ['id' => '5e5b232e-f35e-5519-bd79-2cd252fe25fe', 'description' => 'Tel Dan Stele', 'correct_answer' => false],
                    ['id' => '05f9b629-4d89-56d0-a6f7-52e833979025', 'description' => 'Mesha Stele', 'correct_answer' => true],
                    ['id' => '530c4ae5-7e51-5bd5-8119-51f51ae5a2d3', 'description' => 'Lachish Letters', 'correct_answer' => false]
                ]],
        ['id' => '2e53baff-7030-559b-b11e-75ae5aeaf579', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which Hebrew ostraca record communications shortly before the Babylonian conquest of Judah?', 'difficulty' => 5, 'weight' => 983, 'alternatives' => [
                    ['id' => '5acb71fb-2d73-5d7e-a382-922635865f91', 'description' => 'Rosetta Stone', 'correct_answer' => false],
                    ['id' => '85608031-78a2-5230-8b16-7815803b6298', 'description' => 'Cyrus Cylinder', 'correct_answer' => false],
                    ['id' => 'fc0bf1a7-5a85-590f-8bf4-558e7f081ca0', 'description' => 'Tel Dan Stele', 'correct_answer' => false],
                    ['id' => '3e0bcf18-f5d8-57ae-a49e-40378e0b946e', 'description' => 'Kurkh Monolith', 'correct_answer' => false],
                    ['id' => '617a2444-bf90-5e83-8af0-cc7d71de49b3', 'description' => 'Lachish Letters', 'correct_answer' => true]
                ]],
        ['id' => '079a830e-dead-5832-b584-b061eb967139', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which ancient Hebrew inscription records the completion of a tunnel in Jerusalem?', 'difficulty' => 5, 'weight' => 832, 'alternatives' => [
                    ['id' => '2224535d-33d0-57d9-b843-84204266001a', 'description' => 'Cyrus Cylinder', 'correct_answer' => false],
                    ['id' => 'ae8066a3-9343-595a-afb7-37f6955e2686', 'description' => 'Siloam Inscription', 'correct_answer' => true],
                    ['id' => '4caca193-6fae-5627-ac0b-3a067e44ebe2', 'description' => 'Behistun Inscription', 'correct_answer' => false],
                    ['id' => '7ed62137-36c0-559d-b028-54318c1eb3fc', 'description' => 'Kurkh Monolith', 'correct_answer' => false],
                    ['id' => '8bede363-cc4b-5cfe-9d79-fbcff1232e5a', 'description' => 'Mesha Stele', 'correct_answer' => false]
                ]],
        ['id' => '11221dcb-4039-5632-a930-d9d8285502e0', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which archive of diplomatic correspondence was discovered at Akhetaten in Egypt?', 'difficulty' => 5, 'weight' => 832, 'alternatives' => [
                    ['id' => '1b261b23-3021-500e-88fc-57446cfde760', 'description' => 'Tel Dan Stele', 'correct_answer' => false],
                    ['id' => '9a1e5ff7-720a-58b5-a446-8d437c96c1b0', 'description' => 'Mesha Stele', 'correct_answer' => false],
                    ['id' => '7419b47e-4611-55bc-b674-45159bc68a45', 'description' => 'Behistun Inscription', 'correct_answer' => false],
                    ['id' => 'fa39f17d-e063-5cd6-a176-7921370aa7a2', 'description' => 'Kurkh Monolith', 'correct_answer' => false],
                    ['id' => '4b244e36-3b06-552e-822e-0c67edfecd74', 'description' => 'Amarna Letters', 'correct_answer' => true]
                ]],
        ['id' => '27eecf5a-4dee-5095-a11c-8084c7ae1ca6', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which 1790 treaty ended the Russo-Swedish War without major territorial changes?', 'difficulty' => 5, 'weight' => 921, 'alternatives' => [
                    ['id' => '2f72c533-592a-5e4d-8c84-4e6391536873', 'description' => 'Treaty of Nystad', 'correct_answer' => false],
                    ['id' => '41ec88e7-cc45-5be5-acbd-b98e806f90d8', 'description' => 'Treaty of Stolbovo', 'correct_answer' => false],
                    ['id' => '99b044ce-acd9-56fd-91e4-bd1d5e50420a', 'description' => 'Treaty of Cardis', 'correct_answer' => false],
                    ['id' => '744350ff-620b-52ff-912f-273815de2237', 'description' => 'Treaty of Brömsebro', 'correct_answer' => false],
                    ['id' => '7d0ec98a-053a-54ae-9fe6-fead2724f8a4', 'description' => 'Treaty of Värälä', 'correct_answer' => true]
                ]],
        ['id' => 'b0551c3b-e793-52df-a0c4-6215543ef74d', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which 1809 treaty ended the Finnish War and transferred Finland from Sweden to Russia?', 'difficulty' => 5, 'weight' => 812, 'alternatives' => [
                    ['id' => '19e4debd-4f3f-5b1d-a289-310db99e6135', 'description' => 'Treaty of Stolbovo', 'correct_answer' => false],
                    ['id' => '24925105-e9ca-5089-8b4f-de0c47f4756b', 'description' => 'Treaty of Fredrikshamn', 'correct_answer' => true],
                    ['id' => 'ec1d3c68-0118-5276-a231-fd796ed2f854', 'description' => 'Treaty of Cardis', 'correct_answer' => false],
                    ['id' => '7db1459e-b708-547a-8ac9-0e7a2df9812e', 'description' => 'Treaty of Frederiksborg', 'correct_answer' => false],
                    ['id' => '3cd8bbbb-4a86-5343-8ca4-4810f993b84a', 'description' => 'Treaty of Nystad', 'correct_answer' => false]
                ]],
        ['id' => '07ccdfdb-0650-54d8-b093-9924b5cbad79', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which 1743 treaty ended the Russo-Swedish War and ceded territory to Russia?', 'difficulty' => 5, 'weight' => 980, 'alternatives' => [
                    ['id' => '816efb66-9099-5959-b295-ee765be94f31', 'description' => 'Treaty of Nöteborg', 'correct_answer' => false],
                    ['id' => '7ce0c0de-ad9c-5877-9653-0f875d5762be', 'description' => 'Treaty of Brömsebro', 'correct_answer' => false],
                    ['id' => '65256d86-7787-5e2c-8cc9-c10ffce2d9a8', 'description' => 'Treaty of Åbo', 'correct_answer' => true],
                    ['id' => '58807158-629a-5190-ac01-763f5d2fd003', 'description' => 'Treaty of Roskilde', 'correct_answer' => false],
                    ['id' => 'dc36fb32-79ed-5387-9023-fa353c30d288', 'description' => 'Treaty of Fredrikshamn', 'correct_answer' => false]
                ]],
        ['id' => '5354af5c-9722-5fc4-9222-ee755459c18e', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which 1658 treaty forced Denmark-Norway to cede major territories to Sweden?', 'difficulty' => 5, 'weight' => 852, 'alternatives' => [
                    ['id' => 'e4b86d99-1c93-5c59-b715-c686b95cacc5', 'description' => 'Treaty of Roskilde', 'correct_answer' => true],
                    ['id' => 'aed7c31b-a71c-50b2-a9b3-31bbbfa7d68a', 'description' => 'Treaty of Frederiksborg', 'correct_answer' => false],
                    ['id' => 'cb21d93b-f999-5010-a412-70e3e17652c3', 'description' => 'Treaty of Stolbovo', 'correct_answer' => false],
                    ['id' => '8651e458-c3fe-59a5-a94e-05f67a92fdce', 'description' => 'Treaty of Brömsebro', 'correct_answer' => false],
                    ['id' => '6c28a730-8ccc-5a7a-8704-160bd7ae958b', 'description' => 'Treaty of Nystad', 'correct_answer' => false]
                ]],
        ['id' => 'b126e27b-8ef9-54b8-b803-53071a9c1fc1', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which 1617 treaty ended the Ingrian War and excluded Russia from the Baltic Sea?', 'difficulty' => 5, 'weight' => 974, 'alternatives' => [
                    ['id' => '8c7faa91-b202-5a06-909e-a4da46f8c8ee', 'description' => 'Treaty of Frederiksborg', 'correct_answer' => false],
                    ['id' => '22177c14-6fb4-5748-86a2-9a658a904695', 'description' => 'Treaty of Brömsebro', 'correct_answer' => false],
                    ['id' => '52a4939b-0047-5a38-bec0-b139ae24243e', 'description' => 'Treaty of Roskilde', 'correct_answer' => false],
                    ['id' => 'a9b68f33-8a29-5830-afda-1c31280b81f0', 'description' => 'Treaty of Stolbovo', 'correct_answer' => true],
                    ['id' => 'c2480ac3-3cec-50f4-9231-41daaceb6dd6', 'description' => 'Treaty of Fredrikshamn', 'correct_answer' => false]
                ]],
        ['id' => 'e6b43c82-742e-596d-922e-a1be2b3bbd05', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which 1645 treaty ended the Torstenson War and granted Sweden concessions from Denmark-Norway?', 'difficulty' => 5, 'weight' => 836, 'alternatives' => [
                    ['id' => 'b0d8746d-46bb-52de-a587-0a661f840002', 'description' => 'Treaty of Nöteborg', 'correct_answer' => false],
                    ['id' => '6df66617-8196-5f6e-9939-47d5b9b2dff2', 'description' => 'Treaty of Frederiksborg', 'correct_answer' => false],
                    ['id' => 'cf6368ac-075e-56a4-ac69-db0da1a11a7a', 'description' => 'Treaty of Brömsebro', 'correct_answer' => true],
                    ['id' => '4f55119c-bce8-57e1-aad3-b3d09f1af1a9', 'description' => 'Treaty of Värälä', 'correct_answer' => false],
                    ['id' => '84deec93-4aa2-567e-bbb6-c022a38549c1', 'description' => 'Treaty of Roskilde', 'correct_answer' => false]
                ]],
        ['id' => '8323e24f-d7c7-5a81-93c7-d129f104fcf5', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which 1720 treaty ended the Great Northern War between Sweden and Denmark-Norway?', 'difficulty' => 5, 'weight' => 877, 'alternatives' => [
                    ['id' => '1ce8581a-40db-586e-9715-403c0ced7859', 'description' => 'Treaty of Frederiksborg', 'correct_answer' => true],
                    ['id' => 'ddb60085-9284-52d7-b534-d8ee580c3a27', 'description' => 'Treaty of Värälä', 'correct_answer' => false],
                    ['id' => 'caff93ad-563c-51e7-b69d-95cd8b96aa00', 'description' => 'Treaty of Cardis', 'correct_answer' => false],
                    ['id' => '0ff56714-50eb-59c3-ada4-38effb7132a6', 'description' => 'Treaty of Åbo', 'correct_answer' => false],
                    ['id' => '0b8bb6fc-76cd-5b66-ac2c-31da4da4e001', 'description' => 'Treaty of Fredrikshamn', 'correct_answer' => false]
                ]],
        ['id' => '0ff15374-a6ef-5454-98e2-57e04eaf722d', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which 1721 treaty ended the Great Northern War between Sweden and Russia?', 'difficulty' => 5, 'weight' => 874, 'alternatives' => [
                    ['id' => '832d46ec-ea11-5cc6-bd1f-c95e0277ecb0', 'description' => 'Treaty of Nystad', 'correct_answer' => true],
                    ['id' => '9a625789-c44a-5b99-b709-bdf29661c85c', 'description' => 'Treaty of Nöteborg', 'correct_answer' => false],
                    ['id' => 'c773cfcc-d024-52b8-a76a-eb72121f3fb6', 'description' => 'Treaty of Stolbovo', 'correct_answer' => false],
                    ['id' => 'dcd36dcb-af06-5a0a-817a-6572d91910ab', 'description' => 'Treaty of Åbo', 'correct_answer' => false],
                    ['id' => '351279c2-2beb-5944-be13-e5aa068d99d5', 'description' => 'Treaty of Roskilde', 'correct_answer' => false]
                ]],
        ['id' => 'c0abd348-72b8-5133-aaa3-fc10132de9cb', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which Minoan artifact bears a spiral arrangement of stamped signs that remains undeciphered?', 'difficulty' => 5, 'weight' => 837, 'alternatives' => [
                    ['id' => '890e5aeb-0d3f-50b2-a492-220a48d59c71', 'description' => 'Linear A tablets', 'correct_answer' => false],
                    ['id' => '7dc8331f-5709-5a3b-840e-f876893a415d', 'description' => 'Rongorongo tablets', 'correct_answer' => false],
                    ['id' => 'f2395f6f-293a-5643-95a5-66a4d5cc92d6', 'description' => 'Dispilio tablet', 'correct_answer' => false],
                    ['id' => '508f0baa-521a-5bbe-838c-09014f06ed9e', 'description' => 'Phaistos Disc', 'correct_answer' => true],
                    ['id' => '8f093996-eb4c-5535-b958-88aec392621e', 'description' => 'Proto-Elamite tablets', 'correct_answer' => false]
                ]],
        ['id' => '9a5fb20c-b305-5795-a59d-95e7c0897979', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which artifacts from Romania bear signs sometimes claimed to be among the earliest writing?', 'difficulty' => 5, 'weight' => 945, 'alternatives' => [
                    ['id' => 'f2ec1c9b-0b9a-560c-91cc-5db96dd3d672', 'description' => 'Indus seals', 'correct_answer' => false],
                    ['id' => 'cc886db4-161d-58b9-94df-6c4a53326980', 'description' => 'Byblos syllabary', 'correct_answer' => false],
                    ['id' => 'eaed0028-cf4c-506d-9ee0-9859e081c518', 'description' => 'Linear A tablets', 'correct_answer' => false],
                    ['id' => 'dcce5343-e683-5f53-8954-8bb97debcbe2', 'description' => 'Tărtăria tablets', 'correct_answer' => true],
                    ['id' => '71eff89d-7dfd-50d6-be16-33ecdac55f16', 'description' => 'Cascajal Block', 'correct_answer' => false]
                ]],
        ['id' => '5a5f685d-7a1b-5dc7-a291-26662c8d15f6', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which Bronze Age administrative records use the undeciphered script of Minoan Crete?', 'difficulty' => 5, 'weight' => 928, 'alternatives' => [
                    ['id' => 'f7b2c38b-c5f9-546b-a632-f3c82b8f5f77', 'description' => 'Vinča symbols', 'correct_answer' => false],
                    ['id' => '5efeb37f-e0ad-5df4-9bc0-a4cc6ffdcbd7', 'description' => 'Rongorongo tablets', 'correct_answer' => false],
                    ['id' => 'ed02c5bc-072d-599b-94d7-d74de4e2b8a3', 'description' => 'Linear A tablets', 'correct_answer' => true],
                    ['id' => '4a9e8400-49a1-57bc-958d-ec700a616685', 'description' => 'Tărtăria tablets', 'correct_answer' => false],
                    ['id' => '243560f6-d5bd-5686-976d-5fff174a5998', 'description' => 'Dispilio tablet', 'correct_answer' => false]
                ]],
        ['id' => '8b36b17c-6bd8-537a-90e2-90a98d2e50a3', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which signs on Neolithic Balkan artifacts are debated as symbols rather than a developed writing system?', 'difficulty' => 5, 'weight' => 806, 'alternatives' => [
                    ['id' => '918ba8bb-c858-5226-9aa3-b573b52184b9', 'description' => 'Tărtăria tablets', 'correct_answer' => false],
                    ['id' => '9aa98dc9-b061-5ccb-a1f4-90cc1a75fe35', 'description' => 'Vinča symbols', 'correct_answer' => true],
                    ['id' => '7dc2e638-3217-5931-a8a1-5ca83a5b7ccc', 'description' => 'Proto-Elamite tablets', 'correct_answer' => false],
                    ['id' => '4fde8c3e-6302-5eb7-9f0d-2c1b57c4eb85', 'description' => 'Dispilio tablet', 'correct_answer' => false],
                    ['id' => '2f51c443-4131-5628-bddd-0d6000bec254', 'description' => 'Rongorongo tablets', 'correct_answer' => false]
                ]],
        ['id' => 'c746b661-e1ee-52a0-bc79-fa65f72f945d', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which inscribed wooden objects preserve the undeciphered glyph system of Rapa Nui?', 'difficulty' => 5, 'weight' => 984, 'alternatives' => [
                    ['id' => '5f725718-485a-5bab-8e0e-ef8329870c45', 'description' => 'Cascajal Block', 'correct_answer' => false],
                    ['id' => '80db375e-20f1-5b5b-a095-6f64b9581810', 'description' => 'Proto-Elamite tablets', 'correct_answer' => false],
                    ['id' => '8197f691-3247-5eba-8397-708bf7b06af8', 'description' => 'Rongorongo tablets', 'correct_answer' => true],
                    ['id' => 'ba1e7b2c-c180-5c8d-bb1e-70f78731bc42', 'description' => 'Linear A tablets', 'correct_answer' => false],
                    ['id' => '0b21ed51-77f8-5c08-97b7-87389f2412e1', 'description' => 'Byblos syllabary', 'correct_answer' => false]
                ]],
        ['id' => '48d5f29c-31e8-5f9a-b61c-f8da8a4d636c', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which Neolithic wooden object from northern Greece bears incised symbols whose status as writing is debated?', 'difficulty' => 5, 'weight' => 972, 'alternatives' => [
                    ['id' => '03712829-1bc6-5de8-a07f-a6784959d369', 'description' => 'Tărtăria tablets', 'correct_answer' => false],
                    ['id' => 'cd9eadfa-3dfb-5b65-819e-b864089ce1a8', 'description' => 'Dispilio tablet', 'correct_answer' => true],
                    ['id' => '9154d86e-25eb-5d9a-821a-45d126dde4f8', 'description' => 'Proto-Elamite tablets', 'correct_answer' => false],
                    ['id' => 'e743d86c-b132-56fc-9c7d-f97188b7f2a9', 'description' => 'Linear A tablets', 'correct_answer' => false],
                    ['id' => '004456ad-6175-5339-8aa6-6697d18911dd', 'description' => 'Vinča symbols', 'correct_answer' => false]
                ]],
        ['id' => 'a974dc75-5c27-5b02-8b3d-6415867c0799', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which serpentine block from Veracruz bears a sequence of signs proposed as an early Olmec writing sample?', 'difficulty' => 5, 'weight' => 953, 'alternatives' => [
                    ['id' => '205f0bd6-0485-5136-b0a0-74d05d865152', 'description' => 'Cascajal Block', 'correct_answer' => true],
                    ['id' => '40566598-8a6e-5101-a925-66869ce50c19', 'description' => 'Indus seals', 'correct_answer' => false],
                    ['id' => 'b1d19f26-276e-5708-b6d6-e50f4e0377c7', 'description' => 'Linear A tablets', 'correct_answer' => false],
                    ['id' => '8d1959fc-cc4f-592a-b8cc-68b4fd55f8d6', 'description' => 'Dispilio tablet', 'correct_answer' => false],
                    ['id' => '7c6b9a5a-319d-5863-b42c-faf7e7fac9fe', 'description' => 'Vinča symbols', 'correct_answer' => false]
                ]],
        ['id' => '828659dc-b2bd-5a11-a783-5c0bdeb33858', 'locale' => 'en-US', 'category' => '15c3ea38-8ae3-5815-8847-23762485c25e', 'question' => 'Which poorly understood Bronze Age script is attested on inscriptions from the ancient city of Byblos?', 'difficulty' => 5, 'weight' => 950, 'alternatives' => [
                    ['id' => 'a4bb765d-bb49-53e9-b479-0f33db0b0b10', 'description' => 'Phaistos Disc', 'correct_answer' => false],
                    ['id' => '0520d50d-1258-5243-bf8b-4828380f68f1', 'description' => 'Tărtăria tablets', 'correct_answer' => false],
                    ['id' => '6a404c3b-d482-54ec-be72-707e69d84e2b', 'description' => 'Byblos syllabary', 'correct_answer' => true],
                    ['id' => 'b0c0e2e4-c7ef-5363-9885-e2eb9c48aa76', 'description' => 'Cascajal Block', 'correct_answer' => false],
                    ['id' => '0973bb35-1cd4-5842-8490-5dbb0bcfef3f', 'description' => 'Indus seals', 'correct_answer' => false]
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
