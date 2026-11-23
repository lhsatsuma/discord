<?php

namespace Database\Seeders\Trivia;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TriviaEnUsFoodSeeder extends Seeder
{
    private const CATEGORY = ['id' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'created_by' => 'SYSTEM', 'short_description' => 'food', 'description' => 'Food'];

    private const QUESTIONS = [
        ['id' => '7e24fec5-f45d-57cc-971f-c6c8a49f0a71', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which Japanese dish commonly combines vinegared rice with seafood or vegetables?', 'difficulty' => 1, 'weight' => 154, 'alternatives' => [
                    ['id' => '57139be8-492e-5c95-8bef-dcdbb64fb1d2', 'description' => 'Ramen', 'correct_answer' => false],
                    ['id' => '6386aa80-e119-5782-b8ca-9f44fe103757', 'description' => 'Tempura', 'correct_answer' => false],
                    ['id' => 'fbae5948-b5ef-521b-8c92-65ed1b7b3e65', 'description' => 'Sushi', 'correct_answer' => true],
                    ['id' => '60393dce-cccf-5b93-80e7-f9c5f99043aa', 'description' => 'Miso soup', 'correct_answer' => false],
                    ['id' => '68533312-dc16-5399-abdd-3917890d312f', 'description' => 'Udon', 'correct_answer' => false]
                ]],
        ['id' => '9540f03f-e0d8-5a4f-bb14-0767fb078287', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which Japanese dish consists of thinly sliced raw fish or seafood served without rice?', 'difficulty' => 1, 'weight' => 195, 'alternatives' => [
                    ['id' => 'edd6bbb9-821b-574b-9751-0de5459869e8', 'description' => 'Sashimi', 'correct_answer' => true],
                    ['id' => 'b74ddba6-8222-56c2-bcac-7a10ca695384', 'description' => 'Ramen', 'correct_answer' => false],
                    ['id' => '88986145-ab13-5855-b502-ef125fcb9e29', 'description' => 'Soba', 'correct_answer' => false],
                    ['id' => 'f0c117b5-ecda-5d62-92f9-81ca0a1813e9', 'description' => 'Yakitori', 'correct_answer' => false],
                    ['id' => '616c9de7-2829-5a8a-a98f-985e443c4a43', 'description' => 'Sushi', 'correct_answer' => false]
                ]],
        ['id' => '5b179b66-c588-5b3b-ae7e-eef05000619a', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which Japanese street food consists of batter balls filled with pieces of octopus?', 'difficulty' => 1, 'weight' => 158, 'alternatives' => [
                    ['id' => 'f4d9c937-42e5-537a-9e81-ee2080a1398a', 'description' => 'Udon', 'correct_answer' => false],
                    ['id' => '9e92755b-6659-5cd9-a839-ea18cfae099d', 'description' => 'Onigiri', 'correct_answer' => false],
                    ['id' => 'ad6bda1d-0d55-5f56-b6ed-1eb7ef25a663', 'description' => 'Miso soup', 'correct_answer' => false],
                    ['id' => '6ee18133-9aa6-53c4-8dec-a5a483b16e81', 'description' => 'Takoyaki', 'correct_answer' => true],
                    ['id' => '0281f5e2-7da0-5fcf-8392-9b2554c0ed78', 'description' => 'Sushi', 'correct_answer' => false]
                ]],
        ['id' => 'd859fe74-a3a0-5e0f-959d-9ec2080bffb7', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which Japanese noodle soup is often served with broth, noodles, and toppings such as pork or eggs?', 'difficulty' => 1, 'weight' => 171, 'alternatives' => [
                    ['id' => '11db5149-43a6-553b-8867-e3c0761e420b', 'description' => 'Ramen', 'correct_answer' => true],
                    ['id' => '7ed508a3-4ea5-5027-b66c-31c1d24ab3d0', 'description' => 'Miso soup', 'correct_answer' => false],
                    ['id' => '1faffecc-ad2b-5cbf-8b4f-5b332a4ad8ac', 'description' => 'Tempura', 'correct_answer' => false],
                    ['id' => 'cb5c0a2d-2176-5978-9406-ef35d31e9cd4', 'description' => 'Soba', 'correct_answer' => false],
                    ['id' => 'bd0c2987-5023-5c5f-8502-1e840bc9acec', 'description' => 'Sashimi', 'correct_answer' => false]
                ]],
        ['id' => 'c9b367c1-07f2-5de4-8dd8-fbca2f805f37', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which Japanese soup is made with a broth flavored by fermented soybean paste?', 'difficulty' => 1, 'weight' => 106, 'alternatives' => [
                    ['id' => '94557a7a-afca-5699-a8b1-168ac0a7f1f1', 'description' => 'Takoyaki', 'correct_answer' => false],
                    ['id' => '16931b47-108a-50d8-bb7f-f13d63e22184', 'description' => 'Miso soup', 'correct_answer' => true],
                    ['id' => 'dd7b789e-f2da-5437-9ba5-88581abcedbd', 'description' => 'Tempura', 'correct_answer' => false],
                    ['id' => '6c4f5428-9416-5c3b-bb37-f911de16a287', 'description' => 'Soba', 'correct_answer' => false],
                    ['id' => 'c3b7b104-1232-57e7-b71d-8c51ad214ac9', 'description' => 'Ramen', 'correct_answer' => false]
                ]],
        ['id' => '4bb181d7-ef02-5101-abed-df56e9d9256e', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which Japanese noodle is thick and chewy, often served in hot broth?', 'difficulty' => 1, 'weight' => 118, 'alternatives' => [
                    ['id' => '0b383592-77e6-589a-a4a3-176857aa56d2', 'description' => 'Tempura', 'correct_answer' => false],
                    ['id' => 'c26606e8-05d8-56ac-800a-68f2b31396ba', 'description' => 'Udon', 'correct_answer' => true],
                    ['id' => '11a7c304-028c-5823-b0ad-fc2f52e54d2f', 'description' => 'Sashimi', 'correct_answer' => false],
                    ['id' => '41e2db49-9434-5d31-8628-2e0381b588fb', 'description' => 'Takoyaki', 'correct_answer' => false],
                    ['id' => '93a7604d-2017-58ae-a20d-d01baa997a67', 'description' => 'Yakitori', 'correct_answer' => false]
                ]],
        ['id' => '88fda631-be32-5b4f-b948-a4ee9b27d1d5', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which Japanese cooking method coats ingredients in a light batter and deep-fries them?', 'difficulty' => 1, 'weight' => 109, 'alternatives' => [
                    ['id' => '52940720-e329-58ff-ad0c-c2b55719d9ec', 'description' => 'Udon', 'correct_answer' => false],
                    ['id' => '615d4d54-6a23-53ad-9a2f-48425689e9f7', 'description' => 'Tempura', 'correct_answer' => true],
                    ['id' => '0baf159a-833e-5162-a5fb-f8a315f07435', 'description' => 'Sashimi', 'correct_answer' => false],
                    ['id' => '822bbd9e-4af8-5912-9700-9f66ef4482d3', 'description' => 'Sushi', 'correct_answer' => false],
                    ['id' => '487fe68d-0764-54db-87a0-043d34e21133', 'description' => 'Takoyaki', 'correct_answer' => false]
                ]],
        ['id' => '6bc123cd-f7e2-570e-8ca6-4896af2690c6', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which Japanese dish consists of bite-sized pieces of chicken grilled on skewers?', 'difficulty' => 1, 'weight' => 153, 'alternatives' => [
                    ['id' => 'f4ae365a-4d4f-575e-b7c0-a9c1675f5e78', 'description' => 'Sushi', 'correct_answer' => false],
                    ['id' => '934a4ac3-3a91-5c7c-ace3-22a9fbdc36ab', 'description' => 'Sashimi', 'correct_answer' => false],
                    ['id' => '8e09e0eb-4914-56da-ae85-440c424f8666', 'description' => 'Ramen', 'correct_answer' => false],
                    ['id' => '38e79154-2004-5a58-abd0-cfea1887bd62', 'description' => 'Onigiri', 'correct_answer' => false],
                    ['id' => 'dc046dbd-1593-58f9-8a19-326c5ccb6b91', 'description' => 'Yakitori', 'correct_answer' => true]
                ]],
        ['id' => 'd6f8a349-5465-553a-8773-1f524b0ee573', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which Ligurian sauce is traditionally made with basil, pine nuts, garlic, cheese, and olive oil?', 'difficulty' => 1, 'weight' => 189, 'alternatives' => [
                    ['id' => 'b284850e-3276-5a29-81f6-94fb3c314b0a', 'description' => 'Pizza Margherita', 'correct_answer' => false],
                    ['id' => '5b2998fa-5ec6-53ba-ac2e-0f2268dc0fdb', 'description' => 'Gelato', 'correct_answer' => false],
                    ['id' => '8180ad5b-f89f-5e5c-8600-66c5d473665c', 'description' => 'Lasagna', 'correct_answer' => false],
                    ['id' => '03f15357-1615-52fe-b40f-cab377b10cc0', 'description' => 'Focaccia', 'correct_answer' => false],
                    ['id' => 'a6932d44-f5c7-5f64-9d88-6bd026beee3e', 'description' => 'Pesto alla Genovese', 'correct_answer' => true]
                ]],
        ['id' => 'b5106b07-c852-50a6-b0e6-25d1e8ad917c', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which Italian rice dish is cooked gradually with broth until creamy?', 'difficulty' => 1, 'weight' => 151, 'alternatives' => [
                    ['id' => 'ef45342a-0a04-58ee-aac5-aa9abc5ca895', 'description' => 'Tiramisu', 'correct_answer' => false],
                    ['id' => 'ab6b2ed6-28dd-50f7-af7d-345278688726', 'description' => 'Gelato', 'correct_answer' => false],
                    ['id' => 'da22b3c3-3e6a-571d-9ad0-76c6624cce94', 'description' => 'Risotto', 'correct_answer' => true],
                    ['id' => 'efec1659-402a-5d03-9ec8-0c0a3f2797aa', 'description' => 'Bruschetta', 'correct_answer' => false],
                    ['id' => 'e184cc76-8cc7-56b0-8ef8-45e9269779a1', 'description' => 'Focaccia', 'correct_answer' => false]
                ]],
        ['id' => '0f6df0e7-3664-51c7-87d6-1ea9b79a2f47', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which Italian dessert is layered with coffee-soaked ladyfingers and mascarpone cream?', 'difficulty' => 1, 'weight' => 110, 'alternatives' => [
                    ['id' => 'a386da09-6a30-50c9-bc9b-8f229e2f00bb', 'description' => 'Tiramisu', 'correct_answer' => true],
                    ['id' => 'd995ca36-47a0-5808-a46d-76b25300d152', 'description' => 'Carbonara', 'correct_answer' => false],
                    ['id' => '03279f41-68c8-5b55-9bf7-b06163f0d631', 'description' => 'Lasagna', 'correct_answer' => false],
                    ['id' => '72c09b85-0cbb-59cd-86bd-129bfe14d63a', 'description' => 'Bruschetta', 'correct_answer' => false],
                    ['id' => '96f5f972-a41a-5ca8-9176-b02707182ff4', 'description' => 'Risotto', 'correct_answer' => false]
                ]],
        ['id' => '31c439b6-d683-575d-ac13-71e0aa026de7', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which Italian antipasto commonly consists of toasted bread rubbed with garlic and topped with tomatoes?', 'difficulty' => 1, 'weight' => 160, 'alternatives' => [
                    ['id' => 'b09281fd-d9fe-51f7-b5ae-050b70a8c0f3', 'description' => 'Lasagna', 'correct_answer' => false],
                    ['id' => 'ad629e47-f17b-5ab4-8334-700b15a8a6f1', 'description' => 'Focaccia', 'correct_answer' => false],
                    ['id' => 'a5f19263-6e52-5da2-8280-3ec1ceaa7bff', 'description' => 'Bruschetta', 'correct_answer' => true],
                    ['id' => '1fa9aff8-b822-5664-9d1f-e1c70cd9882e', 'description' => 'Risotto', 'correct_answer' => false],
                    ['id' => 'd81bb579-f1c8-5e3a-914f-fb3d20708b53', 'description' => 'Gnocchi', 'correct_answer' => false]
                ]],
        ['id' => '43edd6c1-8e5c-5789-beaa-80f63b51818c', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which Italian flatbread is often topped with olive oil, herbs, and salt?', 'difficulty' => 1, 'weight' => 154, 'alternatives' => [
                    ['id' => '1e18bde9-3521-5b32-aae7-67c47570eab4', 'description' => 'Lasagna', 'correct_answer' => false],
                    ['id' => '93eaa122-079e-5a25-9490-3001ec69ff46', 'description' => 'Gnocchi', 'correct_answer' => false],
                    ['id' => '36feeecc-ca04-5ef2-9ae2-4a8a41ac308e', 'description' => 'Risotto', 'correct_answer' => false],
                    ['id' => 'dd71ebf5-72e5-5035-9ee3-beb43bb80511', 'description' => 'Focaccia', 'correct_answer' => true],
                    ['id' => '12656370-7dd0-506f-8862-83c362edc092', 'description' => 'Carbonara', 'correct_answer' => false]
                ]],
        ['id' => 'cbbe8c23-48d5-53f2-b8cf-d2e0f1a726d8', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which Roman pasta dish traditionally uses eggs, Pecorino Romano, guanciale, and black pepper?', 'difficulty' => 1, 'weight' => 113, 'alternatives' => [
                    ['id' => '723b9aa9-f41d-5ddc-a355-a23763ec7dbc', 'description' => 'Focaccia', 'correct_answer' => false],
                    ['id' => '43ffa068-1509-52d1-a865-29ff2d0fa66a', 'description' => 'Carbonara', 'correct_answer' => true],
                    ['id' => 'a9813b78-2e2e-5071-98e2-e1c1701ae1f1', 'description' => 'Gnocchi', 'correct_answer' => false],
                    ['id' => 'f16c2d0f-6397-5fdb-9e73-c766d6ea557c', 'description' => 'Risotto', 'correct_answer' => false],
                    ['id' => '6619ce4a-1748-5c56-aeca-770c0632c6aa', 'description' => 'Tiramisu', 'correct_answer' => false]
                ]],
        ['id' => '64f49053-f652-5a57-8af8-588aafec6822', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which Italian frozen dessert is typically churned more slowly and served at a warmer temperature than many ice creams?', 'difficulty' => 1, 'weight' => 108, 'alternatives' => [
                    ['id' => 'd9ff5293-ed38-5174-8cc7-1310b53a76e4', 'description' => 'Bruschetta', 'correct_answer' => false],
                    ['id' => '387e12b9-0f82-5aec-9005-66e2835f804d', 'description' => 'Risotto', 'correct_answer' => false],
                    ['id' => 'e0b0f214-66c4-559d-a250-fb6fd8657b72', 'description' => 'Lasagna', 'correct_answer' => false],
                    ['id' => '9cb22a3e-4e4f-5eeb-bce2-a158bcb24cab', 'description' => 'Focaccia', 'correct_answer' => false],
                    ['id' => 'c0a7b42b-6275-5a7a-8add-1347578e6f63', 'description' => 'Gelato', 'correct_answer' => true]
                ]],
        ['id' => '352c6e7d-d6c7-5477-95aa-855d56c9fde7', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which pizza traditionally features tomato, mozzarella, and basil?', 'difficulty' => 1, 'weight' => 151, 'alternatives' => [
                    ['id' => '48945fd7-9c4a-566d-8d16-d2c61ef997b3', 'description' => 'Pizza Margherita', 'correct_answer' => true],
                    ['id' => 'aa832658-b020-53cc-9c62-886ca969824c', 'description' => 'Gelato', 'correct_answer' => false],
                    ['id' => '223781ec-498e-5a78-999c-d7a8972ee600', 'description' => 'Bruschetta', 'correct_answer' => false],
                    ['id' => 'db534267-df32-50eb-ae90-fc3f83f62696', 'description' => 'Focaccia', 'correct_answer' => false],
                    ['id' => 'ddbd598c-d1bc-596b-9cbc-fe3dc802bbf1', 'description' => 'Gnocchi', 'correct_answer' => false]
                ]],
        ['id' => '82d7b682-1ebd-5d07-9267-85550543f94e', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'What is the Mexican name for corn on the cob commonly served with toppings such as mayonnaise, cheese, and chili?', 'difficulty' => 1, 'weight' => 150, 'alternatives' => [
                    ['id' => '68993326-eb92-5f3d-95e2-10e116582d4b', 'description' => 'Guacamole', 'correct_answer' => false],
                    ['id' => '6ddac6da-8c6f-5561-85ea-8b1ce3a57d08', 'description' => 'Tacos', 'correct_answer' => false],
                    ['id' => '87943c71-515e-56bc-b11b-d18ab02c14b1', 'description' => 'Elote', 'correct_answer' => true],
                    ['id' => 'd91b42cc-3b7e-5869-a64d-60e89d9ab678', 'description' => 'Mole poblano', 'correct_answer' => false],
                    ['id' => '8f98965c-3446-5770-a96c-9fe0416724bd', 'description' => 'Pozole', 'correct_answer' => false]
                ]],
        ['id' => '900d339b-9b79-5408-b446-706a923634b4', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which Mexican dish features tortillas rolled around a filling and covered with sauce?', 'difficulty' => 1, 'weight' => 158, 'alternatives' => [
                    ['id' => '994e738c-7899-5f49-a716-be7123e02525', 'description' => 'Tamales', 'correct_answer' => false],
                    ['id' => '5120d010-3b64-54f1-8b3b-27b0a55ba5ac', 'description' => 'Mole poblano', 'correct_answer' => false],
                    ['id' => '5cc0a1dc-3194-5dd6-b792-68fde9f0a56b', 'description' => 'Chilaquiles', 'correct_answer' => false],
                    ['id' => '2bff0381-00f0-5c5d-8cc6-6461f8aefa5d', 'description' => 'Tacos', 'correct_answer' => false],
                    ['id' => '60b21ba4-691a-5413-9fa2-5e8fe3716148', 'description' => 'Enchiladas', 'correct_answer' => true]
                ]],
        ['id' => '58a57fbd-c4b1-5bd3-825c-462357d92dfa', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which Mexican soup or stew is made with hominy and often pork or chicken?', 'difficulty' => 1, 'weight' => 127, 'alternatives' => [
                    ['id' => 'c0fd908a-5040-52ac-a54d-3f06af27f6d9', 'description' => 'Pozole', 'correct_answer' => true],
                    ['id' => '1f74491e-1c01-52ee-b827-b434e1564bae', 'description' => 'Burrito', 'correct_answer' => false],
                    ['id' => '607804de-2f8e-5468-8710-99c6a27efb83', 'description' => 'Enchiladas', 'correct_answer' => false],
                    ['id' => '043b1aea-936d-5104-a953-dd58eee6cd7d', 'description' => 'Mole poblano', 'correct_answer' => false],
                    ['id' => 'bad11259-0014-5fd3-9584-2aeba4469d3f', 'description' => 'Quesadilla', 'correct_answer' => false]
                ]],
        ['id' => '561d6d9d-e646-5e72-983c-ea0ba9d6b0da', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which Mexican dish consists of a tortilla filled with cheese and heated until melted?', 'difficulty' => 1, 'weight' => 106, 'alternatives' => [
                    ['id' => 'ba2c4903-95b6-5e94-915d-7361008cbb6d', 'description' => 'Burrito', 'correct_answer' => false],
                    ['id' => 'f2964ae3-2481-5733-a9fa-0980380deb0b', 'description' => 'Chilaquiles', 'correct_answer' => false],
                    ['id' => 'dfe881d6-a0d0-5797-ae7e-9dbbccc7b428', 'description' => 'Elote', 'correct_answer' => false],
                    ['id' => '1d3ae030-e169-5bd2-bdf4-7edb76ee8520', 'description' => 'Quesadilla', 'correct_answer' => true],
                    ['id' => 'ebc45786-348c-5c10-864c-56789fdc296a', 'description' => 'Enchiladas', 'correct_answer' => false]
                ]],
        ['id' => 'f41382b8-0d2a-5536-b931-a68a1819b914', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which Mexican dip is primarily made from mashed avocado?', 'difficulty' => 1, 'weight' => 122, 'alternatives' => [
                    ['id' => 'e21c2140-b5a9-55c1-9dc5-c568f5d8d91e', 'description' => 'Pozole', 'correct_answer' => false],
                    ['id' => '59e6e7c8-11df-5ca4-8a1d-55a14d6931dc', 'description' => 'Quesadilla', 'correct_answer' => false],
                    ['id' => '695e35f7-9572-5a8d-994a-230433f2b550', 'description' => 'Tacos', 'correct_answer' => false],
                    ['id' => '7aee00ac-f92d-5eb4-8218-26d65a6f4632', 'description' => 'Guacamole', 'correct_answer' => true],
                    ['id' => 'cc14ccb1-e48f-5b9f-91ca-284f06bf41f6', 'description' => 'Tamales', 'correct_answer' => false]
                ]],
        ['id' => '08468a5e-a19b-5c22-88fd-1ea8b24b1f82', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which Mesoamerican dish consists of masa filled with ingredients and steamed in a corn husk or banana leaf?', 'difficulty' => 1, 'weight' => 170, 'alternatives' => [
                    ['id' => 'cafceb28-dc6a-5f06-b08a-19b7c498cedf', 'description' => 'Burrito', 'correct_answer' => false],
                    ['id' => 'dc161889-4d07-5968-826e-292d6955babc', 'description' => 'Quesadilla', 'correct_answer' => false],
                    ['id' => '0de22295-2838-5353-a7ab-4897ddfe60a5', 'description' => 'Guacamole', 'correct_answer' => false],
                    ['id' => '92b37fee-73e9-5e5c-8bb9-661f7408a8d1', 'description' => 'Tamales', 'correct_answer' => true],
                    ['id' => 'd84f5b58-5248-5531-80ad-24ab56333d54', 'description' => 'Mole poblano', 'correct_answer' => false]
                ]],
        ['id' => 'bd8adc96-54af-5ed9-acbf-07b1e0bd317b', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which Mexican sauce is known for combining chilies, spices, and often chocolate?', 'difficulty' => 1, 'weight' => 170, 'alternatives' => [
                    ['id' => 'c4c972db-661d-5a8b-9d54-96a7de1e9587', 'description' => 'Quesadilla', 'correct_answer' => false],
                    ['id' => '20b02b24-299b-58eb-a531-c217ab7b37ee', 'description' => 'Elote', 'correct_answer' => false],
                    ['id' => '9a483a21-eb61-5c88-9553-bdb1ad853dcf', 'description' => 'Mole poblano', 'correct_answer' => true],
                    ['id' => 'd9558a61-c9c4-5eb6-87c4-c3a54dfd4cf5', 'description' => 'Burrito', 'correct_answer' => false],
                    ['id' => 'c7615cd4-cece-5137-adf6-556085a0f006', 'description' => 'Guacamole', 'correct_answer' => false]
                ]],
        ['id' => 'f3df891f-17cb-540d-83c1-d866363378cf', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which Mexican dish consists of a tortilla folded around a filling?', 'difficulty' => 1, 'weight' => 103, 'alternatives' => [
                    ['id' => 'bdbaba13-a7db-5b65-9c6a-a268e3a8fec6', 'description' => 'Tacos', 'correct_answer' => true],
                    ['id' => '63c9fdb0-c6e5-5702-9b23-49f5cc6108d6', 'description' => 'Tamales', 'correct_answer' => false],
                    ['id' => '80658847-e5c6-5007-a741-e26c8133c5c0', 'description' => 'Burrito', 'correct_answer' => false],
                    ['id' => '2f303090-dbd8-5120-a18e-ba9152d04352', 'description' => 'Mole poblano', 'correct_answer' => false],
                    ['id' => 'f5b13afc-df1d-55b3-bc14-864ecf3d5bfd', 'description' => 'Quesadilla', 'correct_answer' => false]
                ]],
        ['id' => 'f9d49ef6-6fe6-54fc-b7a4-2c33fe46fa60', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which Provençal vegetable dish commonly includes eggplant, zucchini, tomato, and peppers?', 'difficulty' => 1, 'weight' => 123, 'alternatives' => [
                    ['id' => '2b289f93-b2de-54ed-9df8-06dfe315ffa4', 'description' => 'Quiche Lorraine', 'correct_answer' => false],
                    ['id' => 'f9e3f9de-38fe-5af6-94f8-41e0346b5533', 'description' => 'Macaron', 'correct_answer' => false],
                    ['id' => '90519140-1537-5fed-bcd3-05e33c68645d', 'description' => 'Crêpe', 'correct_answer' => false],
                    ['id' => '2a409e7b-5d92-5caf-89a7-d42646de9d6d', 'description' => 'Ratatouille', 'correct_answer' => true],
                    ['id' => '3e9df7d9-0ea5-5555-90a8-14632b083431', 'description' => 'Bouillabaisse', 'correct_answer' => false]
                ]],
        ['id' => '53f58d06-1a06-57a4-964d-96c57e7a538d', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which small French sponge cake is traditionally baked in a shell-shaped mold?', 'difficulty' => 1, 'weight' => 149, 'alternatives' => [
                    ['id' => 'feed8b28-b128-5622-a3f7-1666203a556f', 'description' => 'Quiche Lorraine', 'correct_answer' => false],
                    ['id' => 'a6520979-d099-5d3b-88b1-231d352edead', 'description' => 'Crème brûlée', 'correct_answer' => false],
                    ['id' => '8b6440e2-5221-53a4-8a8f-1150ba98b857', 'description' => 'Crêpe', 'correct_answer' => false],
                    ['id' => 'f42e07d1-c4c3-5524-b495-28304948b6a0', 'description' => 'Croissant', 'correct_answer' => false],
                    ['id' => '98fac572-22ae-509e-912e-b7936e068e74', 'description' => 'Madeleine', 'correct_answer' => true]
                ]],
        ['id' => '68bf8eef-50e2-50e2-af05-fbbc7eded2d7', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which French confection consists of two almond-meringue shells joined by a filling?', 'difficulty' => 1, 'weight' => 133, 'alternatives' => [
                    ['id' => 'e0cc07e2-d4bf-5609-bb16-78d4adbbb046', 'description' => 'Ratatouille', 'correct_answer' => false],
                    ['id' => '9b1e8ae3-e162-511a-8604-5d9867c59b50', 'description' => 'Madeleine', 'correct_answer' => false],
                    ['id' => '5fe01c54-7520-5890-b304-34cf06877ab8', 'description' => 'Crêpe', 'correct_answer' => false],
                    ['id' => 'c88503f0-f9f4-5b2c-8df3-535487d6b4b5', 'description' => 'Macaron', 'correct_answer' => true],
                    ['id' => '97edd069-ad46-5d99-bd20-bc391b0092e8', 'description' => 'Éclair', 'correct_answer' => false]
                ]],
        ['id' => 'b2ebd916-42b0-52c6-a9e3-64014cee133e', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which thin French pancake can be served with sweet or savory fillings?', 'difficulty' => 1, 'weight' => 159, 'alternatives' => [
                    ['id' => '90998f47-a4ca-5947-9a7e-f970b44f5a65', 'description' => 'Baguette', 'correct_answer' => false],
                    ['id' => 'd86af568-e6b3-5255-85b2-c27e38dffce9', 'description' => 'Madeleine', 'correct_answer' => false],
                    ['id' => 'f1e87977-6f00-561e-b13d-ae444ee81386', 'description' => 'Crème brûlée', 'correct_answer' => false],
                    ['id' => '9132e824-43a4-5728-bdb8-15726f8f4514', 'description' => 'Crêpe', 'correct_answer' => true],
                    ['id' => 'ebb30da7-bada-5c01-bd94-d1ef838cabc8', 'description' => 'Bouillabaisse', 'correct_answer' => false]
                ]],
        ['id' => 'ac33586f-3332-53fa-8e0e-ff83a2f36c49', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which long, crusty French bread is traditionally made from wheat flour, water, yeast, and salt?', 'difficulty' => 1, 'weight' => 140, 'alternatives' => [
                    ['id' => '6f8288a2-150b-5abd-bcb4-b018e0dbd9ba', 'description' => 'Ratatouille', 'correct_answer' => false],
                    ['id' => '429775c1-e5fc-53de-82be-f244a790dcd4', 'description' => 'Crème brûlée', 'correct_answer' => false],
                    ['id' => '90c31e18-ca54-5413-8f00-513ba4e1fce6', 'description' => 'Baguette', 'correct_answer' => true],
                    ['id' => 'fe7d79d7-48f0-5342-af36-85f703f93683', 'description' => 'Quiche Lorraine', 'correct_answer' => false],
                    ['id' => '511d7c7a-bd18-5668-8e40-90ad9e0dd5ac', 'description' => 'Croissant', 'correct_answer' => false]
                ]],
        ['id' => '232bb6f3-5c02-5187-ba21-587c30a643c8', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which Provençal fish stew originated in the port city of Marseille?', 'difficulty' => 1, 'weight' => 132, 'alternatives' => [
                    ['id' => '9a33e494-5ef2-5e87-a16b-c50add0ef37b', 'description' => 'Macaron', 'correct_answer' => false],
                    ['id' => '31ded821-2d6a-590b-8d87-53adc392279d', 'description' => 'Crêpe', 'correct_answer' => false],
                    ['id' => '68341343-451f-572e-a12f-388b5e63f327', 'description' => 'Croissant', 'correct_answer' => false],
                    ['id' => '8c112856-dd49-52ac-8001-40bc9c9cd6bf', 'description' => 'Bouillabaisse', 'correct_answer' => true],
                    ['id' => '442beefb-d4a0-519a-a218-96d3bb6d2e5e', 'description' => 'Éclair', 'correct_answer' => false]
                ]],
        ['id' => '6b2c007e-6d39-5264-951e-814b08f64776', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which French pastry is known for its buttery, flaky layers?', 'difficulty' => 1, 'weight' => 102, 'alternatives' => [
                    ['id' => '2eeea395-a404-5afc-9b2a-6bf8ba5e2708', 'description' => 'Croissant', 'correct_answer' => true],
                    ['id' => 'c853652e-a67a-5fcf-b705-617ad0ca9be3', 'description' => 'Macaron', 'correct_answer' => false],
                    ['id' => '36c84b55-e8db-5623-9c38-4ce9cf8a2941', 'description' => 'Crêpe', 'correct_answer' => false],
                    ['id' => '19dc03a0-b70f-595c-ac21-a58c5a4d5551', 'description' => 'Quiche Lorraine', 'correct_answer' => false],
                    ['id' => '09e74b33-fc1c-5871-aa95-fe28f8db1b7c', 'description' => 'Crème brûlée', 'correct_answer' => false]
                ]],
        ['id' => 'c4374c04-33db-5b7b-9a2b-b8e82bcc6dae', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which elongated French choux pastry is commonly filled with cream and topped with icing?', 'difficulty' => 1, 'weight' => 122, 'alternatives' => [
                    ['id' => '113e29e2-17bd-5557-ad8d-9323a6ffd454', 'description' => 'Ratatouille', 'correct_answer' => false],
                    ['id' => 'a85c8702-7826-5a0b-a6c4-60d623960205', 'description' => 'Macaron', 'correct_answer' => false],
                    ['id' => '57f467bc-e0cd-58d7-b44a-9345ee61366d', 'description' => 'Éclair', 'correct_answer' => true],
                    ['id' => 'a5a4e126-10cd-598e-b6a4-1fdc59adc7af', 'description' => 'Bouillabaisse', 'correct_answer' => false],
                    ['id' => '141e59d0-5f67-591f-ab95-272f36b94b82', 'description' => 'Croissant', 'correct_answer' => false]
                ]],
        ['id' => '4df2ef3d-35d3-5e9b-a072-398dca0cd204', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which Brazilian side dish is made from toasted cassava flour?', 'difficulty' => 1, 'weight' => 198, 'alternatives' => [
                    ['id' => '662cd752-9f14-5cf3-ae79-5e612b019d65', 'description' => 'Acarajé', 'correct_answer' => false],
                    ['id' => 'b1bd63e9-ad0c-50f4-840e-8ba4b65d6530', 'description' => 'Farofa', 'correct_answer' => true],
                    ['id' => 'b1c8d270-744f-561e-809a-5a6ce7d1cf6c', 'description' => 'Coxinha', 'correct_answer' => false],
                    ['id' => '24b9ac3e-14a3-5d05-99ce-5cbe2ccebb95', 'description' => 'Brigadeiro', 'correct_answer' => false],
                    ['id' => 'da29cd88-6bb0-5f84-ad5c-4ab3cbd3a852', 'description' => 'Açaí na tigela', 'correct_answer' => false]
                ]],
        ['id' => '66d33447-d730-5dc1-96f2-32fcca019390', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which Brazilian cheese bread is made with tapioca starch?', 'difficulty' => 1, 'weight' => 157, 'alternatives' => [
                    ['id' => '60ca4932-1336-50a7-8852-3918e10f3017', 'description' => 'Farofa', 'correct_answer' => false],
                    ['id' => '7932e966-a5bd-5998-874d-1543e745123b', 'description' => 'Pão de queijo', 'correct_answer' => true],
                    ['id' => 'c0cc4b9d-e33c-5af1-92d3-f6cd00b75b9a', 'description' => 'Açaí na tigela', 'correct_answer' => false],
                    ['id' => '146eefbf-5c0e-5ed7-af66-fafbf02b1563', 'description' => 'Picanha', 'correct_answer' => false],
                    ['id' => '876b3055-3996-5c27-b3e1-37d8241369f8', 'description' => 'Moqueca', 'correct_answer' => false]
                ]],
        ['id' => 'cc365a00-c38d-51fe-8367-c86c11acea27', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which Brazilian snack is shaped like a teardrop and typically filled with shredded chicken?', 'difficulty' => 1, 'weight' => 194, 'alternatives' => [
                    ['id' => 'cdec6d9c-ae20-55b9-9e96-20f21c2e50dc', 'description' => 'Brigadeiro', 'correct_answer' => false],
                    ['id' => 'ca8402bd-7546-5d5f-b6f8-1e96599b5a86', 'description' => 'Tapioca', 'correct_answer' => false],
                    ['id' => '31043394-2faf-5858-beaf-547864e1bc5c', 'description' => 'Moqueca', 'correct_answer' => false],
                    ['id' => '74b4b0b2-d7d6-5ce4-bd47-07c819b590d0', 'description' => 'Acarajé', 'correct_answer' => false],
                    ['id' => 'dcfb4a54-aa35-50e3-a21a-0dc5b75ac9a2', 'description' => 'Coxinha', 'correct_answer' => true]
                ]],
        ['id' => '715aef66-9938-5661-bf0b-f682ed9c2893', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which Brazilian sweet is made with condensed milk, cocoa, and butter, then rolled in sprinkles?', 'difficulty' => 1, 'weight' => 140, 'alternatives' => [
                    ['id' => '0b46adac-4479-5697-8a00-965875446903', 'description' => 'Brigadeiro', 'correct_answer' => true],
                    ['id' => 'ec611b15-15b3-58aa-9810-0ee0be14efff', 'description' => 'Pão de queijo', 'correct_answer' => false],
                    ['id' => 'f72c93b1-8667-564a-9b1c-2d8805847f35', 'description' => 'Picanha', 'correct_answer' => false],
                    ['id' => 'dcc32b6d-373e-5558-9eff-8a1834579e26', 'description' => 'Feijoada', 'correct_answer' => false],
                    ['id' => 'af2b3b34-a2f7-5070-b64a-f71f34047961', 'description' => 'Coxinha', 'correct_answer' => false]
                ]],
        ['id' => '59c85f9b-6491-5e8d-a078-f951354615b5', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which Brazilian snack is a thick frozen açaí purée served in a bowl with toppings?', 'difficulty' => 1, 'weight' => 182, 'alternatives' => [
                    ['id' => 'ca2a9868-414e-52af-bd40-7577d763ccd9', 'description' => 'Açaí na tigela', 'correct_answer' => true],
                    ['id' => 'e9248d1c-3d9d-5026-aebe-d5c270c89d3d', 'description' => 'Farofa', 'correct_answer' => false],
                    ['id' => '2fd6a24d-c03d-595c-a0e8-9ed8255e0f67', 'description' => 'Feijoada', 'correct_answer' => false],
                    ['id' => 'a7fa57a5-0e3c-53f5-b6c0-5e78f36f128c', 'description' => 'Picanha', 'correct_answer' => false],
                    ['id' => '3d63398c-4df7-50b3-92d5-7d06541ae72d', 'description' => 'Pão de queijo', 'correct_answer' => false]
                ]],
        ['id' => 'f785e4f1-0353-51b2-b8dd-6b0e0e06fc75', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which Brazilian seafood stew is commonly prepared with fish, tomatoes, onions, and coconut milk or palm oil?', 'difficulty' => 1, 'weight' => 181, 'alternatives' => [
                    ['id' => '28830a94-3fc0-52d4-bc3f-9c71c0ad8caf', 'description' => 'Feijoada', 'correct_answer' => false],
                    ['id' => '73a1dd0f-0a25-5e07-8484-0de8f0b0f2cf', 'description' => 'Açaí na tigela', 'correct_answer' => false],
                    ['id' => 'cc55620a-4f39-52fc-8044-79544526aa26', 'description' => 'Moqueca', 'correct_answer' => true],
                    ['id' => '926573e1-dfb2-5069-b092-bb316eddd64d', 'description' => 'Coxinha', 'correct_answer' => false],
                    ['id' => '0778829e-f285-566f-b361-67dfbdc214a1', 'description' => 'Tapioca', 'correct_answer' => false]
                ]],
        ['id' => 'ca999c93-b899-58db-a2dd-8655235762a4', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which Brazilian beef cut is known for its fat cap and is popular at churrasco?', 'difficulty' => 1, 'weight' => 196, 'alternatives' => [
                    ['id' => '84fed80a-b772-58b7-b4a2-f139420edbf9', 'description' => 'Açaí na tigela', 'correct_answer' => false],
                    ['id' => '8d9dbb56-9947-52ca-a8e2-52c781b69dc1', 'description' => 'Farofa', 'correct_answer' => false],
                    ['id' => '769d84de-5dee-5e55-bade-fa359067da2a', 'description' => 'Feijoada', 'correct_answer' => false],
                    ['id' => '2d307874-97ee-5973-b6e6-3327c7c45fc9', 'description' => 'Tapioca', 'correct_answer' => false],
                    ['id' => 'a8e9aa60-2006-5b6d-a100-2786a99aedf4', 'description' => 'Picanha', 'correct_answer' => true]
                ]],
        ['id' => 'f567443e-35e9-5f70-a5c8-7a2c4c2ea7a6', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which Brazilian crepe-like dish is made by heating hydrated cassava starch in a pan?', 'difficulty' => 1, 'weight' => 175, 'alternatives' => [
                    ['id' => 'd2afa210-5427-530a-a3ce-bc2b22b52a43', 'description' => 'Coxinha', 'correct_answer' => false],
                    ['id' => 'faf66e5a-1a22-530a-93e5-7932e0598a00', 'description' => 'Picanha', 'correct_answer' => false],
                    ['id' => 'c1885641-426f-549f-8232-31ac5a29174b', 'description' => 'Farofa', 'correct_answer' => false],
                    ['id' => '3529005a-f407-5cda-ae19-b59c66a948fc', 'description' => 'Tapioca', 'correct_answer' => true],
                    ['id' => 'c913d520-69bb-5eec-a555-2a034c5a0361', 'description' => 'Pão de queijo', 'correct_answer' => false]
                ]],
        ['id' => '7fac5e0d-696c-5cea-803a-d6e895470d34', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which Spanish cold soup is commonly made with tomatoes, cucumber, peppers, and olive oil?', 'difficulty' => 2, 'weight' => 245, 'alternatives' => [
                    ['id' => '24be0e50-d895-54cc-b0a1-3b9893aa3f29', 'description' => 'Pulpo a la gallega', 'correct_answer' => false],
                    ['id' => '0efc7437-1089-55a4-bd40-a3892b91e02d', 'description' => 'Tortilla española', 'correct_answer' => false],
                    ['id' => 'e0405eeb-d95b-547a-b9d2-2b4d5aa8de48', 'description' => 'Patatas bravas', 'correct_answer' => false],
                    ['id' => '09845789-c7fc-5da3-b7e2-8399e8c3a47a', 'description' => 'Jamón ibérico', 'correct_answer' => false],
                    ['id' => '2b6da299-6efa-57f8-8b05-b0a2d12b31b1', 'description' => 'Gazpacho', 'correct_answer' => true]
                ]],
        ['id' => '1d0b6d69-250c-542e-a05b-c33d898ba70e', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which Spanish rice dish is traditionally associated with Valencia and often includes saffron?', 'difficulty' => 2, 'weight' => 279, 'alternatives' => [
                    ['id' => '669edaac-d259-5365-ad94-c976773bbf64', 'description' => 'Crema catalana', 'correct_answer' => false],
                    ['id' => '513a4e7e-764a-5813-ac95-514c0a565480', 'description' => 'Tortilla española', 'correct_answer' => false],
                    ['id' => '9cf2903f-def8-56aa-aad1-625dac57db67', 'description' => 'Gazpacho', 'correct_answer' => false],
                    ['id' => '5cbcb5c7-7795-5885-9f04-eb0291293161', 'description' => 'Pisto', 'correct_answer' => false],
                    ['id' => '977bbfee-a9fc-5859-bfbe-5c36f9a47f84', 'description' => 'Paella', 'correct_answer' => true]
                ]],
        ['id' => '2e3f11e0-4ec3-5f6e-835c-ca033123bf2d', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which fried Spanish pastry is often served with thick hot chocolate?', 'difficulty' => 2, 'weight' => 293, 'alternatives' => [
                    ['id' => '8787812c-402a-54e7-875e-a9791913be11', 'description' => 'Gazpacho', 'correct_answer' => false],
                    ['id' => '3a6f1d6f-152b-5d8d-bad0-67550385a0ee', 'description' => 'Tortilla española', 'correct_answer' => false],
                    ['id' => '9eda4516-4899-517f-a6a4-71d608d9a626', 'description' => 'Churros', 'correct_answer' => true],
                    ['id' => '8fe2b48f-7534-5a46-a98e-825fe6bfce0e', 'description' => 'Pulpo a la gallega', 'correct_answer' => false],
                    ['id' => 'b0f93405-502f-5140-b785-a0a7faa6f171', 'description' => 'Paella', 'correct_answer' => false]
                ]],
        ['id' => 'e8123fb0-3f9c-53c3-b97d-513e82ae9137', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which Galician dish features octopus served with paprika, salt, and olive oil?', 'difficulty' => 2, 'weight' => 303, 'alternatives' => [
                    ['id' => '6cdfa9ac-22cf-542e-bcf5-7d1b9b9831f6', 'description' => 'Churros', 'correct_answer' => false],
                    ['id' => 'b07bcbbd-42fd-51eb-a8b3-06a633c2e2bc', 'description' => 'Gazpacho', 'correct_answer' => false],
                    ['id' => 'c3e0a066-97f1-5d91-a158-dd1ba5463d19', 'description' => 'Crema catalana', 'correct_answer' => false],
                    ['id' => '28a54645-49c6-5a96-a819-5c1a9a427d1d', 'description' => 'Jamón ibérico', 'correct_answer' => false],
                    ['id' => 'a46584c3-d7eb-5a37-82c7-52cd268c0818', 'description' => 'Pulpo a la gallega', 'correct_answer' => true]
                ]],
        ['id' => '19e187e8-ea02-503d-9b8d-3692bb4f3202', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which Spanish vegetable dish is similar to ratatouille and often includes tomato, peppers, and zucchini?', 'difficulty' => 2, 'weight' => 269, 'alternatives' => [
                    ['id' => '5d6ea9d8-bdc4-518b-ab46-a71616ab766f', 'description' => 'Pulpo a la gallega', 'correct_answer' => false],
                    ['id' => '47197342-2d62-56cd-9267-9f139a3a9306', 'description' => 'Jamón ibérico', 'correct_answer' => false],
                    ['id' => '2a4a8ced-4b3b-5b26-a7fa-bbc7bd1ef90c', 'description' => 'Pisto', 'correct_answer' => true],
                    ['id' => '0e9a6706-fa11-5161-9a40-21c55c9e01bf', 'description' => 'Churros', 'correct_answer' => false],
                    ['id' => '3cc51585-3e64-5b6a-935c-e0400dd41c77', 'description' => 'Gazpacho', 'correct_answer' => false]
                ]],
        ['id' => 'fc07bf78-ac04-5ba9-8190-492c026a95e5', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which Spanish cured ham comes from Iberian pigs?', 'difficulty' => 2, 'weight' => 391, 'alternatives' => [
                    ['id' => '050edde1-9e28-5ef2-9706-c95910bf6622', 'description' => 'Tortilla española', 'correct_answer' => false],
                    ['id' => '079b65c3-2c6f-58d9-96f7-f91a24e4362c', 'description' => 'Gazpacho', 'correct_answer' => false],
                    ['id' => 'b5d8765f-a93d-586d-930a-1928016e73d9', 'description' => 'Crema catalana', 'correct_answer' => false],
                    ['id' => 'a6ab39b8-5e43-51cb-8099-ad1d9864aff5', 'description' => 'Pisto', 'correct_answer' => false],
                    ['id' => 'dc9ceca2-e89c-553f-9cd9-f43202b40fe2', 'description' => 'Jamón ibérico', 'correct_answer' => true]
                ]],
        ['id' => '65f8989d-480b-5a43-abfa-334b175e1e59', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which Catalan dessert is a custard topped with a caramelized sugar crust?', 'difficulty' => 2, 'weight' => 386, 'alternatives' => [
                    ['id' => '60c41298-058a-5b3b-88d6-e281982b56b6', 'description' => 'Pulpo a la gallega', 'correct_answer' => false],
                    ['id' => '3294770a-a5ca-5964-8619-61f6d936df1a', 'description' => 'Crema catalana', 'correct_answer' => true],
                    ['id' => 'fafacc3e-c54d-5cfe-b98d-689953b0e1f0', 'description' => 'Patatas bravas', 'correct_answer' => false],
                    ['id' => '81b8f0dc-9183-5cbd-8d45-68e944add1c1', 'description' => 'Pisto', 'correct_answer' => false],
                    ['id' => 'adc7ac58-e7f3-557c-b6d7-57221da38ef2', 'description' => 'Paella', 'correct_answer' => false]
                ]],
        ['id' => '2051c741-38e9-5a4d-88a6-8b58226bb82b', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which Spanish omelet traditionally contains potatoes and eggs?', 'difficulty' => 2, 'weight' => 369, 'alternatives' => [
                    ['id' => 'e697063b-9d54-5ff9-a690-c8cc5c2f0737', 'description' => 'Paella', 'correct_answer' => false],
                    ['id' => 'e1e17c38-f238-55ed-a05d-02cbdd9251f5', 'description' => 'Gazpacho', 'correct_answer' => false],
                    ['id' => '25518c8e-1867-5d58-b073-ecc5387bd604', 'description' => 'Crema catalana', 'correct_answer' => false],
                    ['id' => '5e995b46-a351-58a0-9c2d-92adc42b0296', 'description' => 'Churros', 'correct_answer' => false],
                    ['id' => '9a8183f8-26f2-510d-8c62-62bf5e22a6b9', 'description' => 'Tortilla española', 'correct_answer' => true]
                ]],
        ['id' => 'c4d4a22e-62c0-5ecf-bf08-31638b5a8701', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which Vietnamese sandwich is served in a baguette influenced by French colonial cuisine?', 'difficulty' => 2, 'weight' => 368, 'alternatives' => [
                    ['id' => 'd434b122-efce-5595-a99a-1c8457a7a65e', 'description' => 'Bún bò Huế', 'correct_answer' => false],
                    ['id' => 'd7d4091d-2a13-529e-91dc-d9a59577047c', 'description' => 'Bún chả', 'correct_answer' => false],
                    ['id' => '7ec93780-34df-5e54-ac55-becd1fc6d1dd', 'description' => 'Chả giò', 'correct_answer' => false],
                    ['id' => '7e4cccec-71e4-5e0c-b9f6-135aba3168d1', 'description' => 'Bánh mì', 'correct_answer' => true],
                    ['id' => 'a8078344-b326-5b76-a1bf-5362724e58c7', 'description' => 'Cơm tấm', 'correct_answer' => false]
                ]],
        ['id' => '295dfbb1-ad95-5b9e-85c3-7c1ef05e3676', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which noodle dish is a specialty of Hội An and traditionally uses local water and ingredients?', 'difficulty' => 2, 'weight' => 242, 'alternatives' => [
                    ['id' => '838919e6-a308-51de-a213-da04acf91c7d', 'description' => 'Bánh mì', 'correct_answer' => false],
                    ['id' => 'db2b43dc-35f4-5875-bb8c-30d0267aa6ec', 'description' => 'Gỏi cuốn', 'correct_answer' => false],
                    ['id' => 'c5035d4e-3d92-5b59-83a9-b6af98ad9381', 'description' => 'Bún bò Huế', 'correct_answer' => false],
                    ['id' => 'ff46e5c6-0444-5b2f-aeff-687b446e4be1', 'description' => 'Cao lầu', 'correct_answer' => true],
                    ['id' => '451fbd5a-2089-5e4d-af4d-9ecce66dc98b', 'description' => 'Cơm tấm', 'correct_answer' => false]
                ]],
        ['id' => '369495fd-94ef-5f72-a934-24a629423c34', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which Vietnamese fresh roll is typically wrapped in rice paper and filled with herbs, noodles, and shrimp or pork?', 'difficulty' => 2, 'weight' => 392, 'alternatives' => [
                    ['id' => '59f4611d-8c4d-52a4-92e1-e690bf956d4c', 'description' => 'Chè', 'correct_answer' => false],
                    ['id' => '1cadfe3b-f791-515e-b40f-0bfa0b02ad5c', 'description' => 'Chả giò', 'correct_answer' => false],
                    ['id' => '51c42c7f-30f7-52d3-ac79-9eaa0cd8cf6e', 'description' => 'Bánh mì', 'correct_answer' => false],
                    ['id' => '71f329e3-ac6d-5cd8-b4af-1c4ea0ad7a4a', 'description' => 'Cơm tấm', 'correct_answer' => false],
                    ['id' => 'd41073ff-e9a5-58e2-840a-8e6fe65c0e3b', 'description' => 'Gỏi cuốn', 'correct_answer' => true]
                ]],
        ['id' => '6884e886-fbc1-5f30-812a-42bb442c152e', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which Vietnamese noodle soup commonly features rice noodles, herbs, and a fragrant broth?', 'difficulty' => 2, 'weight' => 358, 'alternatives' => [
                    ['id' => '7e93be0c-d1c5-56d4-b1a8-be00230ee54c', 'description' => 'Cơm tấm', 'correct_answer' => false],
                    ['id' => 'b5b46761-87d5-5ce9-911e-b6c00be7fc97', 'description' => 'Bánh xèo', 'correct_answer' => false],
                    ['id' => 'dcde91de-b51d-5b34-82a1-1d414f6d278e', 'description' => 'Cao lầu', 'correct_answer' => false],
                    ['id' => '24444440-7511-5e95-b659-79b07e5980b2', 'description' => 'Pho', 'correct_answer' => true],
                    ['id' => '06a89534-95c2-5d24-8bcf-703399f5e44f', 'description' => 'Bún chả', 'correct_answer' => false]
                ]],
        ['id' => '848fe3e5-af1e-5ba1-942c-6c4e4d8c9be2', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'What is the general Vietnamese term for a broad range of sweet soups and dessert puddings?', 'difficulty' => 2, 'weight' => 262, 'alternatives' => [
                    ['id' => '3795eaf8-6c02-51b1-a24f-9531da6ff882', 'description' => 'Bún bò Huế', 'correct_answer' => false],
                    ['id' => 'b44b2930-144f-5889-aa0e-857c4b9b65dd', 'description' => 'Chè', 'correct_answer' => true],
                    ['id' => '0f735c7c-f66d-5277-b44b-9d1f9a767ec5', 'description' => 'Pho', 'correct_answer' => false],
                    ['id' => '45c7374a-e2e7-5905-a68e-c1a76acc6dab', 'description' => 'Bánh xèo', 'correct_answer' => false],
                    ['id' => '6c841eb1-640d-59de-909d-e09ae30ef94c', 'description' => 'Cơm tấm', 'correct_answer' => false]
                ]],
        ['id' => '023b1035-a664-59c1-bee8-37290569ade4', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which southern Vietnamese dish is based on broken rice and often served with grilled pork?', 'difficulty' => 2, 'weight' => 205, 'alternatives' => [
                    ['id' => '93a050a4-2153-5202-b4f1-6e1f7907cf99', 'description' => 'Cao lầu', 'correct_answer' => false],
                    ['id' => '95ac807f-1544-515d-89d7-1321e90d78e1', 'description' => 'Bún bò Huế', 'correct_answer' => false],
                    ['id' => '39cceb72-7223-5635-9f6d-f91aaa5ec665', 'description' => 'Pho', 'correct_answer' => false],
                    ['id' => '5468753f-b524-5bdf-9312-6abe12184ed9', 'description' => 'Gỏi cuốn', 'correct_answer' => false],
                    ['id' => 'c495fbe1-808d-52fb-af9a-d99c187b55f4', 'description' => 'Cơm tấm', 'correct_answer' => true]
                ]],
        ['id' => '76be0b8a-e509-575e-99d5-c548cb287065', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which central Vietnamese noodle soup is known for a spicy, aromatic broth and beef?', 'difficulty' => 2, 'weight' => 296, 'alternatives' => [
                    ['id' => 'ecb8771d-d68b-567e-a441-17008d2aa5b0', 'description' => 'Bánh xèo', 'correct_answer' => false],
                    ['id' => '16607198-398d-5fe9-9ea3-bdb2d010553e', 'description' => 'Pho', 'correct_answer' => false],
                    ['id' => 'd016c426-3413-5244-9cce-fa6d8cde0087', 'description' => 'Cao lầu', 'correct_answer' => false],
                    ['id' => '13768aa9-cfdc-50f9-91d4-010026c891f0', 'description' => 'Chè', 'correct_answer' => false],
                    ['id' => '8aea772a-203c-597a-a32e-f00a7ebb7e92', 'description' => 'Bún bò Huế', 'correct_answer' => true]
                ]],
        ['id' => '1cdaed70-a614-5c1b-a421-d8565409ce95', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'What is the Vietnamese name for fried spring rolls?', 'difficulty' => 2, 'weight' => 274, 'alternatives' => [
                    ['id' => '5893edfd-008f-525f-a125-ab29a208f65f', 'description' => 'Bánh xèo', 'correct_answer' => false],
                    ['id' => 'ccf0637c-e3a2-5107-af4c-4a5cd6f956a7', 'description' => 'Chè', 'correct_answer' => false],
                    ['id' => '93d77204-cc82-5f1f-a21c-a2596461b3d9', 'description' => 'Bún chả', 'correct_answer' => false],
                    ['id' => 'b8423f46-42cd-53dd-bba4-91295f74137b', 'description' => 'Cơm tấm', 'correct_answer' => false],
                    ['id' => '016ad1b3-7e6f-5499-8adb-2f28a8d17047', 'description' => 'Chả giò', 'correct_answer' => true]
                ]],
        ['id' => 'd0ba763e-ad67-586e-b55f-82a51598aec1', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which South Indian lentil-based stew is flavored with tamarind and spices?', 'difficulty' => 2, 'weight' => 380, 'alternatives' => [
                    ['id' => '7fcb608a-55d3-56b0-8d8d-71ee19ad3afc', 'description' => 'Sambar', 'correct_answer' => true],
                    ['id' => 'a4f0cafc-9409-5a63-a024-66df8b9d7459', 'description' => 'Idli', 'correct_answer' => false],
                    ['id' => 'ac784d88-c292-5423-a0a9-8c8b9838955a', 'description' => 'Biryani', 'correct_answer' => false],
                    ['id' => 'de9891d7-32dc-5d60-8e0f-113ea5fc380a', 'description' => 'Vindaloo', 'correct_answer' => false],
                    ['id' => '0bb0e773-f06b-5f23-bc29-d69f4cd9036e', 'description' => 'Rogan josh', 'correct_answer' => false]
                ]],
        ['id' => '1974dbc8-9ca1-5514-b409-0b7a10467683', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which Kashmiri curry is traditionally made with lamb and aromatic spices?', 'difficulty' => 2, 'weight' => 241, 'alternatives' => [
                    ['id' => 'eddd6ea2-6460-5038-a035-1a1c57a29dbb', 'description' => 'Dhokla', 'correct_answer' => false],
                    ['id' => '92425855-c003-5cac-90ec-98e6b9f12858', 'description' => 'Palak paneer', 'correct_answer' => false],
                    ['id' => 'ceaddaf9-4b9a-5fd6-9586-00930a27c55c', 'description' => 'Dosa', 'correct_answer' => false],
                    ['id' => '7ad69873-c7ed-5a42-af1f-dd1a6b73c77a', 'description' => 'Rogan josh', 'correct_answer' => true],
                    ['id' => 'ae1aff45-9ec4-5e0b-aae3-d755c2f1f64f', 'description' => 'Vindaloo', 'correct_answer' => false]
                ]],
        ['id' => '94a84734-2c7b-5ef1-97e5-34b4a4a80324', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which Indian street food consists of crisp hollow puris filled with spiced water and other fillings?', 'difficulty' => 2, 'weight' => 349, 'alternatives' => [
                    ['id' => 'a8e434ca-ba7d-50fd-b518-3a82e647a407', 'description' => 'Idli', 'correct_answer' => false],
                    ['id' => '0a44646a-7382-5beb-85f1-b44eb4031e46', 'description' => 'Dhokla', 'correct_answer' => false],
                    ['id' => '06c8e17f-6fa0-5282-9cbf-d4f9df4a59f7', 'description' => 'Dosa', 'correct_answer' => false],
                    ['id' => 'e29735ba-398d-56de-8e32-b8d091d5902a', 'description' => 'Pani puri', 'correct_answer' => true],
                    ['id' => 'd9675fbb-9dc0-59cc-a0fa-034b2862cd59', 'description' => 'Rogan josh', 'correct_answer' => false]
                ]],
        ['id' => '1881301a-bc6f-544a-820c-b22dc2e06782', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which Indian dish combines spinach purée with cubes of fresh cheese?', 'difficulty' => 2, 'weight' => 335, 'alternatives' => [
                    ['id' => '7f635e50-3fed-5999-83aa-0a8bf68fb58d', 'description' => 'Vindaloo', 'correct_answer' => false],
                    ['id' => '3b628370-9f9d-5d39-8266-d0a53db0f54f', 'description' => 'Rogan josh', 'correct_answer' => false],
                    ['id' => 'cee346b1-8d5c-52d0-8cd4-4722068b2e8c', 'description' => 'Idli', 'correct_answer' => false],
                    ['id' => '2ead6c3a-4111-5a2d-8717-49592596a140', 'description' => 'Sambar', 'correct_answer' => false],
                    ['id' => 'c5324608-6000-56e4-a98e-7b13cfa1ceda', 'description' => 'Palak paneer', 'correct_answer' => true]
                ]],
        ['id' => '33f13254-2855-5489-aa7c-747506c069b4', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which North Indian dish pairs spicy chickpea curry with deep-fried leavened bread?', 'difficulty' => 2, 'weight' => 238, 'alternatives' => [
                    ['id' => '9c8487ad-03b2-58fd-8b22-34cad3fa802b', 'description' => 'Dosa', 'correct_answer' => false],
                    ['id' => 'a033b338-c07c-5659-9de3-59f8f8a9af69', 'description' => 'Rogan josh', 'correct_answer' => false],
                    ['id' => '57fb6b48-dfcb-5ba8-a229-436d95f6551e', 'description' => 'Pani puri', 'correct_answer' => false],
                    ['id' => 'a5842b4b-09b7-5a5a-92ce-cb96ee2522b6', 'description' => 'Vindaloo', 'correct_answer' => false],
                    ['id' => '9493121b-a740-5824-a6ba-8a5c541d0297', 'description' => 'Chole bhature', 'correct_answer' => true]
                ]],
        ['id' => '65c73496-e704-58ee-92f0-c9be3c3d5b9b', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which South Asian rice dish layers or cooks rice with spiced meat or vegetables?', 'difficulty' => 2, 'weight' => 275, 'alternatives' => [
                    ['id' => 'c3685649-dfbb-5181-bc8c-97e79c85fe06', 'description' => 'Vindaloo', 'correct_answer' => false],
                    ['id' => 'a60e7b06-2ef7-513b-bcce-3071c5673623', 'description' => 'Sambar', 'correct_answer' => false],
                    ['id' => '95d5594f-a1fd-5b82-9bdf-03c57dca855f', 'description' => 'Biryani', 'correct_answer' => true],
                    ['id' => 'a36931fb-6c84-54f7-9859-fb65e62b88af', 'description' => 'Rogan josh', 'correct_answer' => false],
                    ['id' => '617f8aa1-3da6-5e25-b65e-db2988e75058', 'description' => 'Chole bhature', 'correct_answer' => false]
                ]],
        ['id' => '06dc2e74-93f8-5eae-ba44-3e3d35a509a8', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which curry style has roots in a Portuguese-influenced Goan preparation and is often sharply spiced?', 'difficulty' => 2, 'weight' => 255, 'alternatives' => [
                    ['id' => 'fddeb202-ba91-5ea6-89df-431e36b3e589', 'description' => 'Pani puri', 'correct_answer' => false],
                    ['id' => '32484926-e8c0-55ec-ad23-559220d83a84', 'description' => 'Dhokla', 'correct_answer' => false],
                    ['id' => '3e45fc29-9fef-5ed0-bed4-cd9bc587c195', 'description' => 'Vindaloo', 'correct_answer' => true],
                    ['id' => 'be6b92bd-cfe5-5845-8511-ce4b87be74c4', 'description' => 'Dosa', 'correct_answer' => false],
                    ['id' => 'dfe11223-0ff4-5daf-a557-d29794f45172', 'description' => 'Palak paneer', 'correct_answer' => false]
                ]],
        ['id' => 'e6195765-518b-5fbb-a061-5a08915b85fd', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which South Indian fermented crepe is made primarily from rice and lentils?', 'difficulty' => 2, 'weight' => 324, 'alternatives' => [
                    ['id' => 'c970a2e1-eb3e-5f43-8715-9e8b86b7ec8a', 'description' => 'Biryani', 'correct_answer' => false],
                    ['id' => '77c49525-c653-50bd-9eff-172af2e0ef71', 'description' => 'Dosa', 'correct_answer' => true],
                    ['id' => '9639ff62-1907-5ecb-994f-2b142730d13b', 'description' => 'Idli', 'correct_answer' => false],
                    ['id' => 'b0350f64-b0b0-5c4a-8101-50b42493d7dc', 'description' => 'Chole bhature', 'correct_answer' => false],
                    ['id' => '7dc3b99f-aab7-5af8-838e-ad975c3f6620', 'description' => 'Rogan josh', 'correct_answer' => false]
                ]],
        ['id' => 'e9feefc7-bd5a-5ecf-b6fc-9b1393167159', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which Korean rice dish is served with assorted vegetables, often an egg, and gochujang?', 'difficulty' => 2, 'weight' => 314, 'alternatives' => [
                    ['id' => '1b59b830-a878-54f5-a75d-b229371e41c5', 'description' => 'Naengmyeon', 'correct_answer' => false],
                    ['id' => '2f989d1d-5a59-5a05-a14a-7614646a475c', 'description' => 'Gimbap', 'correct_answer' => false],
                    ['id' => '1d496a46-0a35-5684-9113-247d800d9c06', 'description' => 'Japchae', 'correct_answer' => false],
                    ['id' => '52df2d0d-2eda-585a-82d9-0b1f947bb6ea', 'description' => 'Bibimbap', 'correct_answer' => true],
                    ['id' => 'edf29879-5340-5a61-9737-6b491ad98487', 'description' => 'Tteokbokki', 'correct_answer' => false]
                ]],
        ['id' => 'b28adbb6-347d-5836-be88-051d7b8fb680', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which Korean stew features very soft tofu and is often served bubbling hot?', 'difficulty' => 2, 'weight' => 349, 'alternatives' => [
                    ['id' => '2085df3e-d007-5911-96e0-0fd22ad99ad7', 'description' => 'Galbi', 'correct_answer' => false],
                    ['id' => '1fc8651c-988c-503e-a53f-25ddce3f08c4', 'description' => 'Sundubu-jjigae', 'correct_answer' => true],
                    ['id' => '4e8d107b-a9f9-5234-97bf-41f25fcac483', 'description' => 'Bibimbap', 'correct_answer' => false],
                    ['id' => '0d0db123-6ff0-5c1f-b4bb-f9b742a218a7', 'description' => 'Japchae', 'correct_answer' => false],
                    ['id' => 'a0259a92-6959-5137-b31c-9f2091689bc0', 'description' => 'Samgyeopsal', 'correct_answer' => false]
                ]],
        ['id' => 'ba8e8f51-16a4-5338-8817-2f573195dd6b', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which Korean dish features glass noodles made from sweet potato starch, vegetables, and often beef?', 'difficulty' => 2, 'weight' => 224, 'alternatives' => [
                    ['id' => 'c9e8c8dc-1e5f-5cb6-8693-69c83403eaf6', 'description' => 'Samgyeopsal', 'correct_answer' => false],
                    ['id' => '051e201e-809d-565f-8165-261b0db5d726', 'description' => 'Tteokbokki', 'correct_answer' => false],
                    ['id' => '8927a032-d5c3-54ca-b534-fc898fee4188', 'description' => 'Bulgogi', 'correct_answer' => false],
                    ['id' => 'b9c8917c-6b97-53f5-bf5e-8a348a44a0ff', 'description' => 'Japchae', 'correct_answer' => true],
                    ['id' => 'd7a637c4-0504-589c-993c-2d99ad96381e', 'description' => 'Kimchi', 'correct_answer' => false]
                ]],
        ['id' => 'd4e0a4e1-2246-505d-ba91-230d7b1ee6ae', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which Korean barbecue dish uses marinated beef or pork ribs?', 'difficulty' => 2, 'weight' => 387, 'alternatives' => [
                    ['id' => 'b59e4f79-99f6-5a19-ab33-29570a7112b4', 'description' => 'Naengmyeon', 'correct_answer' => false],
                    ['id' => '7d1c63cb-4bc6-5e45-a100-259bc7283927', 'description' => 'Japchae', 'correct_answer' => false],
                    ['id' => '5fceee90-c776-5862-a392-945400bb35b6', 'description' => 'Galbi', 'correct_answer' => true],
                    ['id' => 'db43272e-d8ec-54a1-99ea-034599279a2d', 'description' => 'Bulgogi', 'correct_answer' => false],
                    ['id' => 'c7a2373e-f1cc-5178-a509-39e3dfed1992', 'description' => 'Samgyeopsal', 'correct_answer' => false]
                ]],
        ['id' => '0ea5cabe-5e01-54d3-a76d-277927c27fde', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which Korean noodle dish is traditionally served cold, often in a chilled broth?', 'difficulty' => 2, 'weight' => 279, 'alternatives' => [
                    ['id' => '3752b937-1009-5017-aba6-09e302658caa', 'description' => 'Samgyeopsal', 'correct_answer' => false],
                    ['id' => 'd8775e8b-1132-5c70-9a5d-517129438b58', 'description' => 'Tteokbokki', 'correct_answer' => false],
                    ['id' => 'ce574053-6698-51c7-a53c-35ca70d1e849', 'description' => 'Naengmyeon', 'correct_answer' => true],
                    ['id' => 'b838a336-ea97-53ea-af08-c27e41768d12', 'description' => 'Japchae', 'correct_answer' => false],
                    ['id' => 'b0084f50-4801-5062-93c8-7e51acd281fc', 'description' => 'Galbi', 'correct_answer' => false]
                ]],
        ['id' => '0fc2525a-0e8e-59a2-900a-0c3f2b5b774d', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which Korean fermented side dish is commonly made with napa cabbage and chili pepper?', 'difficulty' => 2, 'weight' => 338, 'alternatives' => [
                    ['id' => 'b2c20e21-e336-5faa-a60a-9d7b115fb963', 'description' => 'Bibimbap', 'correct_answer' => false],
                    ['id' => '976e64ea-43ef-584c-8419-d83ea70f041c', 'description' => 'Galbi', 'correct_answer' => false],
                    ['id' => 'd76b855b-9876-58fb-b3e2-2c28d4e0b832', 'description' => 'Bulgogi', 'correct_answer' => false],
                    ['id' => 'd53f27e6-38c2-5461-9ea2-f22e20ea6b59', 'description' => 'Tteokbokki', 'correct_answer' => false],
                    ['id' => '8d3e80c2-7375-5840-b500-fc8f3305cff1', 'description' => 'Kimchi', 'correct_answer' => true]
                ]],
        ['id' => '88174f2a-c82c-597a-8839-50cf3dd2a07e', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which Korean dish rolls rice and fillings in dried seaweed and slices it into rounds?', 'difficulty' => 2, 'weight' => 212, 'alternatives' => [
                    ['id' => 'c822e174-304c-5e20-96b4-39d8b521e9a6', 'description' => 'Gimbap', 'correct_answer' => true],
                    ['id' => '2119eba8-a643-53f9-ac72-a29176385bf2', 'description' => 'Naengmyeon', 'correct_answer' => false],
                    ['id' => '52ae3f9c-ec07-50f1-b789-40b427f3cb44', 'description' => 'Bulgogi', 'correct_answer' => false],
                    ['id' => '9a01b29e-b249-5b01-95b4-46c9c135af81', 'description' => 'Tteokbokki', 'correct_answer' => false],
                    ['id' => '556b7bea-2ae4-5e70-92da-1bfda61ed8a7', 'description' => 'Japchae', 'correct_answer' => false]
                ]],
        ['id' => '2667cfdf-17dc-5c2c-991d-9d24df5fd932', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which Korean barbecue dish is centered on thick slices of pork belly?', 'difficulty' => 2, 'weight' => 376, 'alternatives' => [
                    ['id' => '24b8a6ea-a141-51f5-b5f3-92c432197d2f', 'description' => 'Naengmyeon', 'correct_answer' => false],
                    ['id' => 'a28541fe-9b7a-5e69-8056-bc5b801d5237', 'description' => 'Gimbap', 'correct_answer' => false],
                    ['id' => '3eee32be-7b9c-56c3-888a-35d602676043', 'description' => 'Samgyeopsal', 'correct_answer' => true],
                    ['id' => 'a123055f-cf19-582b-b699-98385da1e374', 'description' => 'Sundubu-jjigae', 'correct_answer' => false],
                    ['id' => '48e5d8ff-dcf6-5f1f-9773-d3beb231a676', 'description' => 'Bibimbap', 'correct_answer' => false]
                ]],
        ['id' => 'a45afc1a-cfc0-55fc-8c87-a69b62852a2d', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which Greek baked dish commonly layers eggplant, minced meat, and béchamel sauce?', 'difficulty' => 2, 'weight' => 380, 'alternatives' => [
                    ['id' => '6fdc803d-d0a2-5c95-a1dc-3d8e24e14681', 'description' => 'Moussaka', 'correct_answer' => true],
                    ['id' => '597a6956-6ea5-5fea-a11c-62acaab7423e', 'description' => 'Hummus', 'correct_answer' => false],
                    ['id' => '41c68bef-a388-521f-b555-ff6ca56e9a7b', 'description' => 'Shakshuka', 'correct_answer' => false],
                    ['id' => '0d92db8c-e3a0-511c-8657-e207184bbdb2', 'description' => 'Souvlaki', 'correct_answer' => false],
                    ['id' => '6f6c394f-c80e-56bd-b2a9-5a4538c57335', 'description' => 'Kibbeh', 'correct_answer' => false]
                ]],
        ['id' => 'aa3b3f9a-d776-5ab0-b93e-84064a45db71', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which North African and Middle Eastern dish poaches eggs in a spiced tomato and pepper sauce?', 'difficulty' => 2, 'weight' => 271, 'alternatives' => [
                    ['id' => 'eec74dfe-790e-5580-83a4-f1baf16c33df', 'description' => 'Shakshuka', 'correct_answer' => true],
                    ['id' => 'cb7487a5-1254-597b-bb30-155f3d729acb', 'description' => 'Spanakopita', 'correct_answer' => false],
                    ['id' => '8241785f-8a3b-590c-a20c-e77b201efc84', 'description' => 'Kibbeh', 'correct_answer' => false],
                    ['id' => 'bd8c6b68-5208-526c-a0ec-eecce59051f3', 'description' => 'Moussaka', 'correct_answer' => false],
                    ['id' => 'a7e654fc-2057-586c-b03b-d57226d7ff31', 'description' => 'Falafel', 'correct_answer' => false]
                ]],
        ['id' => '971d7b7b-d776-5e77-95e2-e67402b8f5e9', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which Levantine dip is made from roasted eggplant and tahini?', 'difficulty' => 2, 'weight' => 311, 'alternatives' => [
                    ['id' => '9038ead2-9dfe-5475-8118-9aa4c6cea0f6', 'description' => 'Souvlaki', 'correct_answer' => false],
                    ['id' => 'a7981362-e4ce-550a-918b-989d000fde06', 'description' => 'Tabbouleh', 'correct_answer' => false],
                    ['id' => 'bf9e2968-0d94-5181-9cf8-65e52b42dd98', 'description' => 'Moussaka', 'correct_answer' => false],
                    ['id' => 'cad5eaba-39a0-552f-b7df-3e23fbd517f2', 'description' => 'Baba ghanoush', 'correct_answer' => true],
                    ['id' => '8f0dc870-d92d-54bd-88bb-04d7e352b44f', 'description' => 'Dolma', 'correct_answer' => false]
                ]],
        ['id' => 'd8b5042a-0951-5ed1-a612-fe6650cae107', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which Greek savory pastry is filled with spinach and feta in layers of phyllo?', 'difficulty' => 2, 'weight' => 253, 'alternatives' => [
                    ['id' => '9d0d9f3d-588c-569f-ae6d-5cfd453dfe51', 'description' => 'Falafel', 'correct_answer' => false],
                    ['id' => 'f1a098e0-227d-52e8-90b2-5cc31e5a4523', 'description' => 'Moussaka', 'correct_answer' => false],
                    ['id' => '01e7a729-55c8-5a28-bf5b-d20863d2f787', 'description' => 'Hummus', 'correct_answer' => false],
                    ['id' => '78f2bdb5-076e-59c7-aeec-d20ab2db12c5', 'description' => 'Spanakopita', 'correct_answer' => true],
                    ['id' => 'afbb00eb-bdd2-51a8-85eb-ff10e76e9a6e', 'description' => 'Souvlaki', 'correct_answer' => false]
                ]],
        ['id' => '00a74d59-54af-52a6-aee5-0b06b5f1d6e0', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which Greek dish consists of small pieces of meat grilled on skewers?', 'difficulty' => 2, 'weight' => 361, 'alternatives' => [
                    ['id' => '689bb427-9254-53ab-a2e6-93c8bfd10a4d', 'description' => 'Souvlaki', 'correct_answer' => true],
                    ['id' => 'a1fd2a66-cad8-5633-a0f9-348aad1e3870', 'description' => 'Tabbouleh', 'correct_answer' => false],
                    ['id' => '1097cc86-c3fc-5459-b6e8-9f325e723e33', 'description' => 'Shakshuka', 'correct_answer' => false],
                    ['id' => 'e91b40f2-d6a8-522e-b8ca-7aaf8cea2dc8', 'description' => 'Baba ghanoush', 'correct_answer' => false],
                    ['id' => '0d2f3dd9-98fa-5293-9083-e5f9e17d1fc7', 'description' => 'Moussaka', 'correct_answer' => false]
                ]],
        ['id' => 'bac3784c-120b-54ee-b9d4-e7cdf10e4b3a', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which Levantine dish commonly combines bulgur with minced meat and spices?', 'difficulty' => 2, 'weight' => 366, 'alternatives' => [
                    ['id' => 'b519fb93-be1b-5219-a0a7-2503faaa4405', 'description' => 'Dolma', 'correct_answer' => false],
                    ['id' => 'd2b232e1-9cd0-5434-9e16-643138949582', 'description' => 'Hummus', 'correct_answer' => false],
                    ['id' => 'cfdebff5-c18b-5d5e-9d75-19f4f26bf2ff', 'description' => 'Kibbeh', 'correct_answer' => true],
                    ['id' => 'a99e719b-5df4-5d17-8945-711284c0c018', 'description' => 'Falafel', 'correct_answer' => false],
                    ['id' => '14969905-9b81-512d-98a7-b6dcfc95859f', 'description' => 'Spanakopita', 'correct_answer' => false]
                ]],
        ['id' => '97b44ce1-de41-55e2-8b6b-f4efb67dd8cf', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which dish found across the eastern Mediterranean consists of grape leaves or vegetables stuffed with rice or meat?', 'difficulty' => 2, 'weight' => 205, 'alternatives' => [
                    ['id' => 'cd8d8163-7a7f-5588-8d56-a7d251cec7fc', 'description' => 'Hummus', 'correct_answer' => false],
                    ['id' => 'ae8426cb-bc24-58a1-815f-192db51a459e', 'description' => 'Kibbeh', 'correct_answer' => false],
                    ['id' => '74a8820b-fe57-5c79-a84c-a035fb4eb052', 'description' => 'Dolma', 'correct_answer' => true],
                    ['id' => '952872f4-606b-53d9-a888-5597490f561a', 'description' => 'Souvlaki', 'correct_answer' => false],
                    ['id' => '4384ee6a-883b-5dfb-b871-c8dae04b0c52', 'description' => 'Tabbouleh', 'correct_answer' => false]
                ]],
        ['id' => '1666641a-5ef8-5221-9aaa-15bfc807afe9', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which Levantine dip is made primarily from chickpeas, tahini, lemon, and garlic?', 'difficulty' => 2, 'weight' => 204, 'alternatives' => [
                    ['id' => '20c08554-88fe-5b72-b657-6a8013a32960', 'description' => 'Kibbeh', 'correct_answer' => false],
                    ['id' => 'a80f38a9-9eb6-5c3f-b0a9-6985fb059781', 'description' => 'Tabbouleh', 'correct_answer' => false],
                    ['id' => 'ba9563cf-6d29-5623-b466-d74338356176', 'description' => 'Souvlaki', 'correct_answer' => false],
                    ['id' => 'f27ddb1d-32b8-5e3b-a949-c4cbd8b8a6ae', 'description' => 'Hummus', 'correct_answer' => true],
                    ['id' => '31c37979-583d-5f65-beae-543ce6411399', 'description' => 'Shakshuka', 'correct_answer' => false]
                ]],
        ['id' => '27369e13-9e8f-5f51-b8c5-77d0e9aef25d', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which English dessert combines strawberries, meringue, and whipped cream?', 'difficulty' => 3, 'weight' => 528, 'alternatives' => [
                    ['id' => 'b3642b42-8c57-5e6d-b0b0-b20cbacdf7c5', 'description' => 'Steak and kidney pie', 'correct_answer' => false],
                    ['id' => 'd093d5c8-7583-5db8-a142-7078f935271f', 'description' => 'Lancashire hotpot', 'correct_answer' => false],
                    ['id' => '793b3be8-4ff9-53e5-8374-584bb81c9a37', 'description' => 'Eton mess', 'correct_answer' => true],
                    ['id' => '290a2b00-f9eb-51da-a715-6497bf80edeb', 'description' => 'Black pudding', 'correct_answer' => false],
                    ['id' => '01937c49-202b-522d-a6d2-5f810b2d951f', 'description' => 'Sticky toffee pudding', 'correct_answer' => false]
                ]],
        ['id' => 'ba820172-cce4-570d-b64f-e09003b172c9', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which British savory pie traditionally contains diced beef and kidney in gravy?', 'difficulty' => 3, 'weight' => 478, 'alternatives' => [
                    ['id' => 'eef16b52-648c-5b4b-8168-3dc630b1d208', 'description' => 'Beef Wellington', 'correct_answer' => false],
                    ['id' => '8e59658d-4885-5663-bc9e-d60185676d2d', 'description' => 'Lancashire hotpot', 'correct_answer' => false],
                    ['id' => '29776a29-d22b-51a4-b873-f38c367b52cc', 'description' => 'Sticky toffee pudding', 'correct_answer' => false],
                    ['id' => '96258482-db7b-525e-9e3e-b32e783d3e00', 'description' => 'Cornish pasty', 'correct_answer' => false],
                    ['id' => 'a9a3c767-5946-5791-81f7-6a70305743c7', 'description' => 'Steak and kidney pie', 'correct_answer' => true]
                ]],
        ['id' => 'af91ac0d-4ab2-5189-9076-d56eb2bb3ed2', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which Welsh dish consists of a savory cheese sauce served over toasted bread?', 'difficulty' => 3, 'weight' => 580, 'alternatives' => [
                    ['id' => '2b5927f6-1afb-574f-8feb-ce12629afd01', 'description' => 'Welsh rarebit', 'correct_answer' => true],
                    ['id' => 'b591f6f8-2af1-598a-836a-d4bcceaae2d7', 'description' => 'Black pudding', 'correct_answer' => false],
                    ['id' => 'c3eeb3b4-cf85-5ef2-a8bd-7853f40a8799', 'description' => 'Cornish pasty', 'correct_answer' => false],
                    ['id' => '308b235f-9c4c-5160-9467-9181d5384156', 'description' => 'Lancashire hotpot', 'correct_answer' => false],
                    ['id' => 'c4fee290-2515-5a25-8bb6-c7795ad48b4f', 'description' => 'Beef Wellington', 'correct_answer' => false]
                ]],
        ['id' => '666d4285-5b81-5cb7-993c-5ae7cf551fb0', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which British dish wraps beef tenderloin in mushroom duxelles and puff pastry?', 'difficulty' => 3, 'weight' => 426, 'alternatives' => [
                    ['id' => '0894efd1-375b-551e-a518-dc4fdd0cb781', 'description' => 'Eton mess', 'correct_answer' => false],
                    ['id' => 'e67f1c92-b7c3-5ff1-a9e7-1448e1f47da8', 'description' => 'Black pudding', 'correct_answer' => false],
                    ['id' => 'c32646c3-eae4-5209-bd00-b16ebb634cb8', 'description' => 'Sticky toffee pudding', 'correct_answer' => false],
                    ['id' => 'e34f3ba9-5ec3-5e4f-afcf-6b9cbc3214e3', 'description' => 'Beef Wellington', 'correct_answer' => true],
                    ['id' => '9295fed2-e6fb-5646-a39d-11afd10e8fc2', 'description' => 'Cullen skink', 'correct_answer' => false]
                ]],
        ['id' => '2e5877c1-f887-525b-8d3e-8d9d92843e59', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which Scottish soup is made with smoked haddock, potatoes, and onions?', 'difficulty' => 3, 'weight' => 596, 'alternatives' => [
                    ['id' => '8f0bc832-347c-595d-a665-327e89478214', 'description' => 'Cullen skink', 'correct_answer' => true],
                    ['id' => 'b26982a1-8657-5c0e-a368-1a0f5b79ad0d', 'description' => 'Lancashire hotpot', 'correct_answer' => false],
                    ['id' => 'fb117b18-6817-59e7-bdf8-c1764ebcd4e5', 'description' => 'Cornish pasty', 'correct_answer' => false],
                    ['id' => 'b49953af-151b-51d0-8f5d-d004dcc60cc8', 'description' => 'Welsh rarebit', 'correct_answer' => false],
                    ['id' => '67e0be1f-18ca-56cf-8cf1-9ad9936a20af', 'description' => 'Steak and kidney pie', 'correct_answer' => false]
                ]],
        ['id' => 'e71360fb-9f0e-595e-8d37-3545eecc4c81', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which English casserole traditionally layers lamb and sliced potatoes?', 'difficulty' => 3, 'weight' => 569, 'alternatives' => [
                    ['id' => 'fb4d12f5-d251-5e9b-8ff4-c54f5103a2f0', 'description' => 'Sticky toffee pudding', 'correct_answer' => false],
                    ['id' => '725584dd-c5b9-57bf-a3fb-338b1eb9583e', 'description' => 'Beef Wellington', 'correct_answer' => false],
                    ['id' => '7be4e478-f971-5945-a69f-e4e9b3c3f961', 'description' => 'Lancashire hotpot', 'correct_answer' => true],
                    ['id' => 'e0f7d6bb-654b-55fb-9c7c-187fb404bbdf', 'description' => 'Cullen skink', 'correct_answer' => false],
                    ['id' => 'edea3cac-38c7-5c57-8d41-bbe8374b7cbd', 'description' => 'Bubble and squeak', 'correct_answer' => false]
                ]],
        ['id' => '1b55614c-a1f3-5a55-9163-798fbcabcf48', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which baked pastry from Cornwall traditionally contains beef, potato, swede, and onion?', 'difficulty' => 3, 'weight' => 569, 'alternatives' => [
                    ['id' => '3214efe2-5685-5524-b093-314bd21f38ec', 'description' => 'Black pudding', 'correct_answer' => false],
                    ['id' => 'e27d849f-ca17-58e7-8c68-3233e20009e2', 'description' => 'Bubble and squeak', 'correct_answer' => false],
                    ['id' => '188b5622-8578-5e84-b459-701d28759c74', 'description' => 'Cullen skink', 'correct_answer' => false],
                    ['id' => '0a89c459-e4b8-500f-919d-27903dfb247b', 'description' => 'Cornish pasty', 'correct_answer' => true],
                    ['id' => '9819fd22-208c-534c-adbb-ddd862e3d182', 'description' => 'Sticky toffee pudding', 'correct_answer' => false]
                ]],
        ['id' => 'dac749f7-343a-55ec-811a-d265293be506', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which British dessert is a moist sponge cake made with dates and served with toffee sauce?', 'difficulty' => 3, 'weight' => 577, 'alternatives' => [
                    ['id' => 'bf6daa7f-aa76-58e6-87df-1565c6a5ac73', 'description' => 'Cornish pasty', 'correct_answer' => false],
                    ['id' => '5c0e8220-aabe-5ee9-912e-7f309c27fecc', 'description' => 'Sticky toffee pudding', 'correct_answer' => true],
                    ['id' => '3f976f21-da17-5310-af2b-deb75043f9f7', 'description' => 'Welsh rarebit', 'correct_answer' => false],
                    ['id' => '1be8ba7f-6e8f-555b-825e-acb47454d1fc', 'description' => 'Lancashire hotpot', 'correct_answer' => false],
                    ['id' => '10164556-e22c-57f2-a6be-336b4b1d8226', 'description' => 'Bubble and squeak', 'correct_answer' => false]
                ]],
        ['id' => '584783ad-7cc5-5172-8a80-849aa3f86424', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which Marseille fish stew traditionally uses several kinds of local fish and shellfish?', 'difficulty' => 3, 'weight' => 499, 'alternatives' => [
                    ['id' => 'addda185-3934-518d-b39c-23f0f8e5b3d6', 'description' => 'Tarte Tatin', 'correct_answer' => false],
                    ['id' => '27683ebe-cb32-59d8-820a-4f3760088e05', 'description' => 'Quenelles', 'correct_answer' => false],
                    ['id' => 'f1fd17b4-d95b-5164-b2cf-9cc8fa186879', 'description' => 'Aligot', 'correct_answer' => false],
                    ['id' => 'a6876b89-867f-55d2-a9ad-52d002b63337', 'description' => 'Bouillabaisse', 'correct_answer' => true],
                    ['id' => '19f994d9-b2ee-51fc-bada-df21169214ca', 'description' => 'Confit de canard', 'correct_answer' => false]
                ]],
        ['id' => 'f05e234b-f934-5d05-9cae-48d1ca72e872', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which French dish braises chicken in wine, commonly with mushrooms and lardons?', 'difficulty' => 3, 'weight' => 449, 'alternatives' => [
                    ['id' => 'a8cd1853-acaf-5aef-ad79-29fa51dea340', 'description' => 'Coq au vin', 'correct_answer' => true],
                    ['id' => 'a9361133-583b-5bce-a971-72a04e59a815', 'description' => 'Pissaladière', 'correct_answer' => false],
                    ['id' => 'bcb97ba1-ee5b-57a2-a9a5-9bac62d254bc', 'description' => 'Bouillabaisse', 'correct_answer' => false],
                    ['id' => 'a746ff95-f848-5c09-ac83-71dee421b247', 'description' => 'Quenelles', 'correct_answer' => false],
                    ['id' => 'f3b189c9-5e7e-5e24-b390-59d32cccbb22', 'description' => 'Confit de canard', 'correct_answer' => false]
                ]],
        ['id' => '56335d97-a0bb-5581-8a11-44c4ec19c0ac', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which slow-cooked French dish from the southwest combines white beans with meats such as duck confit and sausage?', 'difficulty' => 3, 'weight' => 509, 'alternatives' => [
                    ['id' => '00904ecd-010d-5288-9e1c-e4a050b6fbe7', 'description' => 'Aligot', 'correct_answer' => false],
                    ['id' => '7ddaabcd-8023-5852-a889-1ee6cb432c33', 'description' => 'Boeuf bourguignon', 'correct_answer' => false],
                    ['id' => '2d4b0b99-b5cf-5070-9cca-6f9c7d35506b', 'description' => 'Cassoulet', 'correct_answer' => true],
                    ['id' => '465bb284-ef6a-5ae1-8747-cf0836732692', 'description' => 'Quenelles', 'correct_answer' => false],
                    ['id' => '7dcc3846-aa5a-5ad5-a0ae-ab40244f2e76', 'description' => 'Coq au vin', 'correct_answer' => false]
                ]],
        ['id' => 'd5f44415-395c-5b0a-ac63-682666132617', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which Provençal flatbread tart is traditionally topped with onions, olives, and anchovies?', 'difficulty' => 3, 'weight' => 506, 'alternatives' => [
                    ['id' => '4024c1e8-855f-54fd-aa51-81198c63d661', 'description' => 'Cassoulet', 'correct_answer' => false],
                    ['id' => '10061616-2922-5621-a562-81d420ab2986', 'description' => 'Tarte Tatin', 'correct_answer' => false],
                    ['id' => 'c73ed7eb-c10e-5308-83ea-b5b40c7619ae', 'description' => 'Coq au vin', 'correct_answer' => false],
                    ['id' => '7c0c121f-ab65-56fc-afd8-d54e995a3ab4', 'description' => 'Pissaladière', 'correct_answer' => true],
                    ['id' => '6ccb033e-2d85-5dcd-9b5f-ce26b8ff4d9d', 'description' => 'Boeuf bourguignon', 'correct_answer' => false]
                ]],
        ['id' => '76d6a282-13a9-5f31-8e0d-56583b995e49', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which Lyonnaise specialty consists of light dumplings, often made with fish or meat and served with sauce?', 'difficulty' => 3, 'weight' => 590, 'alternatives' => [
                    ['id' => 'b1d70df4-8bae-51d9-babc-bb75c1a11db8', 'description' => 'Confit de canard', 'correct_answer' => false],
                    ['id' => '0061878e-75fa-5257-bf9f-45f53ec8c75c', 'description' => 'Aligot', 'correct_answer' => false],
                    ['id' => '3157028a-c576-5e90-a79f-cf3211e11b3c', 'description' => 'Quenelles', 'correct_answer' => true],
                    ['id' => '2e8f7596-2fb7-58d5-aedb-16c9fb7de3eb', 'description' => 'Pissaladière', 'correct_answer' => false],
                    ['id' => '9fdf0bd3-c0c1-5564-809b-14de0f84ddcc', 'description' => 'Boeuf bourguignon', 'correct_answer' => false]
                ]],
        ['id' => '43c2cbd1-a584-5ccf-8d8a-295a4e8ddeb8', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which French upside-down caramelized apple tart is associated with the Tatin sisters?', 'difficulty' => 3, 'weight' => 557, 'alternatives' => [
                    ['id' => 'b8192970-0151-5d09-8eb1-2db169a8da9e', 'description' => 'Bouillabaisse', 'correct_answer' => false],
                    ['id' => '14f1eb17-6da3-5c01-9476-8c7d2db7ad63', 'description' => 'Confit de canard', 'correct_answer' => false],
                    ['id' => '79912165-f60a-5653-b93c-d2dc32e764ea', 'description' => 'Coq au vin', 'correct_answer' => false],
                    ['id' => '4de67a5c-3e73-5b0c-a960-22c6b7f70fc7', 'description' => 'Cassoulet', 'correct_answer' => false],
                    ['id' => 'a41f2540-a31d-53e3-bee5-f7e29b592b0e', 'description' => 'Tarte Tatin', 'correct_answer' => true]
                ]],
        ['id' => '7555d7e2-9d41-5c05-bee3-f72f7563e4e7', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which French dish from Aubrac combines mashed potatoes with melted tome fraîche cheese?', 'difficulty' => 3, 'weight' => 591, 'alternatives' => [
                    ['id' => '44f1a0bb-c89a-5499-86c4-60c91456d146', 'description' => 'Bouillabaisse', 'correct_answer' => false],
                    ['id' => '25b4755d-f9d8-5d37-ae4d-a262bc27645c', 'description' => 'Pissaladière', 'correct_answer' => false],
                    ['id' => '482f02dc-e61d-5f19-8b9a-b0432ab0be13', 'description' => 'Aligot', 'correct_answer' => true],
                    ['id' => 'e3f06047-9d33-5dc7-9856-028b8ea14128', 'description' => 'Confit de canard', 'correct_answer' => false],
                    ['id' => '34ef52fe-cefb-50be-9a86-531cfdbd2bfb', 'description' => 'Pot-au-feu', 'correct_answer' => false]
                ]],
        ['id' => 'c157badd-3725-59a7-8cc6-b7c8525e43af', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which French preparation preserves duck by slowly cooking it in its own fat?', 'difficulty' => 3, 'weight' => 498, 'alternatives' => [
                    ['id' => '38def932-781d-5f2e-b1f1-0a3171e8a2d4', 'description' => 'Pot-au-feu', 'correct_answer' => false],
                    ['id' => '02599e19-ac62-5d3e-b974-4234cce93bde', 'description' => 'Coq au vin', 'correct_answer' => false],
                    ['id' => '1b7f4a05-67be-5568-b8b4-f44b99183f96', 'description' => 'Confit de canard', 'correct_answer' => true],
                    ['id' => 'e24e0835-e31a-55ca-b350-996bf0de8684', 'description' => 'Tarte Tatin', 'correct_answer' => false],
                    ['id' => '71c5107b-53e7-54bb-971b-8886c5c027e7', 'description' => 'Quenelles', 'correct_answer' => false]
                ]],
        ['id' => 'dc07d253-5cd0-59d4-8bfb-ff4fc067afb5', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which South African baked dish combines spiced minced meat with an egg-based topping?', 'difficulty' => 3, 'weight' => 450, 'alternatives' => [
                    ['id' => 'bcdf072e-9a15-5f8b-adde-a23a13e26a30', 'description' => 'Thieboudienne', 'correct_answer' => false],
                    ['id' => '7a743196-b594-5a7d-a0af-13e273767c39', 'description' => 'Egusi soup', 'correct_answer' => false],
                    ['id' => '906ce119-b28c-5dee-bcfe-68b0a870e1c6', 'description' => 'Bunny chow', 'correct_answer' => false],
                    ['id' => '271d9a64-63bc-5166-81fa-58c2af72c055', 'description' => 'Jollof rice', 'correct_answer' => false],
                    ['id' => 'dbe1c0b7-76a4-587f-955d-09719c60a67c', 'description' => 'Bobotie', 'correct_answer' => true]
                ]],
        ['id' => 'e412fa29-7157-57b4-947a-b19c0ee5f02d', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which South African street food serves curry inside a hollowed-out loaf of bread?', 'difficulty' => 3, 'weight' => 574, 'alternatives' => [
                    ['id' => 'e5ce81bc-fa6d-51f8-9d38-62a9458bfd9d', 'description' => 'Thieboudienne', 'correct_answer' => false],
                    ['id' => '1067ccc1-f7ff-5445-9224-1ef85139a1f6', 'description' => 'Bunny chow', 'correct_answer' => true],
                    ['id' => 'ff97e3ea-a1e2-5fa6-833d-c5d05ea89b4a', 'description' => 'Mafé', 'correct_answer' => false],
                    ['id' => '18dd7398-d385-59b7-af4e-bdfd28b9ff62', 'description' => 'Injera', 'correct_answer' => false],
                    ['id' => 'e5d750c5-95fd-5b14-91a6-e2761497d2a7', 'description' => 'Kitfo', 'correct_answer' => false]
                ]],
        ['id' => '8228cdfe-1eac-53b5-b753-d77adb3154f3', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which West African soup is thickened with ground melon seeds?', 'difficulty' => 3, 'weight' => 586, 'alternatives' => [
                    ['id' => '2c7c0246-9720-5a9d-9595-ba33d8f9cbcb', 'description' => 'Jollof rice', 'correct_answer' => false],
                    ['id' => '427336f8-55fa-5798-b822-b8f40ad7f1b4', 'description' => 'Bunny chow', 'correct_answer' => false],
                    ['id' => '689065a8-5834-5e68-b2ee-3f07f2b113bb', 'description' => 'Doro wat', 'correct_answer' => false],
                    ['id' => 'c0d63b07-5684-50cf-9038-4b5f0b4fa5e6', 'description' => 'Bobotie', 'correct_answer' => false],
                    ['id' => '74be7542-d108-5e1a-b082-be4b77e6cf25', 'description' => 'Egusi soup', 'correct_answer' => true]
                ]],
        ['id' => 'dcc1ccef-f46c-543e-ac1b-3815d7dbbc43', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which staple food in parts of West and Central Africa is made by pounding starchy ingredients into a smooth dough?', 'difficulty' => 3, 'weight' => 416, 'alternatives' => [
                    ['id' => '45375f1c-c692-59d7-b749-64b471c27cb9', 'description' => 'Injera', 'correct_answer' => false],
                    ['id' => 'd46438fa-ac54-5a59-b07b-e4fcec739dee', 'description' => 'Thieboudienne', 'correct_answer' => false],
                    ['id' => '527ed239-698b-53b0-9ca3-d6b6e8568c65', 'description' => 'Bunny chow', 'correct_answer' => false],
                    ['id' => '76c784d5-8a4e-59cf-b738-8d5d4b05dcd1', 'description' => 'Egusi soup', 'correct_answer' => false],
                    ['id' => 'cf9f6c43-7bc0-509b-a9af-459af0986c91', 'description' => 'Fufu', 'correct_answer' => true]
                ]],
        ['id' => 'fc8cf8d9-4ede-58b9-b040-7aa8563e0e93', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which Ethiopian sourdough flatbread is made from teff and used to scoop up stews?', 'difficulty' => 3, 'weight' => 414, 'alternatives' => [
                    ['id' => '93bb80da-c7b0-565b-8316-e0818ba6a3ea', 'description' => 'Injera', 'correct_answer' => true],
                    ['id' => 'ba793e05-8740-5f1a-b10a-5860e268f17b', 'description' => 'Bunny chow', 'correct_answer' => false],
                    ['id' => 'c62a5052-3c41-5a9d-8459-6a3b98d41c66', 'description' => 'Bobotie', 'correct_answer' => false],
                    ['id' => 'd0e0954d-f513-5299-954c-590bd051cd8e', 'description' => 'Egusi soup', 'correct_answer' => false],
                    ['id' => '6a02fcd5-9ef7-5575-9db6-79f140d802df', 'description' => 'Fufu', 'correct_answer' => false]
                ]],
        ['id' => '7844a060-4be9-5211-b30b-37666f3eff38', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which West African stew features meat or vegetables in a peanut-based sauce?', 'difficulty' => 3, 'weight' => 464, 'alternatives' => [
                    ['id' => '4b9158e9-55dc-58d4-9e9a-5cfc26065deb', 'description' => 'Bobotie', 'correct_answer' => false],
                    ['id' => '5910db00-21ed-53a5-a9ff-6e6e435651b9', 'description' => 'Doro wat', 'correct_answer' => false],
                    ['id' => '79326f43-8905-57cd-aa66-9b81c4043968', 'description' => 'Fufu', 'correct_answer' => false],
                    ['id' => '2ae610c1-f9e6-59ef-9d9d-876b4c22c9fb', 'description' => 'Mafé', 'correct_answer' => true],
                    ['id' => 'f88b27fa-1dd6-5d31-b76e-85f232a3ebcf', 'description' => 'Thieboudienne', 'correct_answer' => false]
                ]],
        ['id' => 'd2ef501a-31ab-5230-8da4-d267ee0eabbf', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which Ethiopian dish consists of finely minced raw or lightly cooked beef seasoned with spiced butter?', 'difficulty' => 3, 'weight' => 450, 'alternatives' => [
                    ['id' => '410e0258-a5e1-560d-895b-de347853a537', 'description' => 'Kitfo', 'correct_answer' => true],
                    ['id' => 'a762e465-0429-5adf-a719-5813a7bed345', 'description' => 'Bunny chow', 'correct_answer' => false],
                    ['id' => '2deb2388-18a8-5f91-8def-f10c1333bcc9', 'description' => 'Egusi soup', 'correct_answer' => false],
                    ['id' => 'dbe8778f-0e54-5d6a-9cb5-1b9830ad3faf', 'description' => 'Mafé', 'correct_answer' => false],
                    ['id' => 'bfd447f5-7853-5ae2-8a66-97b48cb37b58', 'description' => 'Bobotie', 'correct_answer' => false]
                ]],
        ['id' => '8b88c792-5230-55c2-8328-dc2db0f71df0', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which West African rice dish is cooked in a seasoned tomato and pepper base and is associated with friendly regional rivalries?', 'difficulty' => 3, 'weight' => 587, 'alternatives' => [
                    ['id' => '9be3490d-02a3-5fb6-b8c5-cdae29d4e617', 'description' => 'Bobotie', 'correct_answer' => false],
                    ['id' => '8711ff19-8f47-5cb0-a208-fe9c31a8869a', 'description' => 'Egusi soup', 'correct_answer' => false],
                    ['id' => '3e3a4b35-1e7a-5431-a866-2e6b1ba46718', 'description' => 'Kitfo', 'correct_answer' => false],
                    ['id' => 'bb3ec20d-4caf-5567-82e2-cf0bfcd88744', 'description' => 'Fufu', 'correct_answer' => false],
                    ['id' => '39653a9f-d1f6-53be-bd6c-0e5379fa0394', 'description' => 'Jollof rice', 'correct_answer' => true]
                ]],
        ['id' => '370db057-55c5-5c36-a265-68c9c94d78e6', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which Sichuan noodle dish is traditionally served with a spicy sauce, preserved vegetables, and minced meat?', 'difficulty' => 3, 'weight' => 538, 'alternatives' => [
                    ['id' => 'a9be06ac-8ea7-5794-98f9-444ab1260d9e', 'description' => 'Century egg', 'correct_answer' => false],
                    ['id' => 'a2e6809e-307f-53ad-b3f1-3bd75a31fc95', 'description' => 'Xiaolongbao', 'correct_answer' => false],
                    ['id' => '56a97e05-eec5-5f60-a5aa-b43b8672f19d', 'description' => 'Peking duck', 'correct_answer' => false],
                    ['id' => 'f05c1528-7164-506d-a4c1-a5a0bcfc9b66', 'description' => 'Zongzi', 'correct_answer' => false],
                    ['id' => '7c943436-d4a9-5cec-b16c-12268393ac29', 'description' => 'Dan dan noodles', 'correct_answer' => true]
                ]],
        ['id' => 'e69fbc9a-d4ea-5d57-9975-21c681a6c860', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which Chinese dish is known for crisp skin and is traditionally served with thin pancakes and condiments?', 'difficulty' => 3, 'weight' => 592, 'alternatives' => [
                    ['id' => '72faa717-5a87-5659-8ba6-76fb1814a478', 'description' => 'Peking duck', 'correct_answer' => true],
                    ['id' => '8610a0dd-52f4-5743-b832-ae9ef8f2e89a', 'description' => 'Mapo tofu', 'correct_answer' => false],
                    ['id' => 'e61c26e6-9fa0-546c-936d-77fc01f10dcb', 'description' => 'Kung pao chicken', 'correct_answer' => false],
                    ['id' => '3e1a7d1a-189f-58f0-ab5e-b44b256b1de6', 'description' => 'Dongpo pork', 'correct_answer' => false],
                    ['id' => '78f99711-61dc-5d92-9b32-d39efcf34462', 'description' => 'Dan dan noodles', 'correct_answer' => false]
                ]],
        ['id' => '6a32e244-03c9-5aa4-a2da-80e563293c97', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which Chinese food consists of glutinous rice and fillings wrapped in bamboo or reed leaves?', 'difficulty' => 3, 'weight' => 587, 'alternatives' => [
                    ['id' => 'f2abe833-69f1-5190-a815-c0cb40fb5853', 'description' => 'Xiaolongbao', 'correct_answer' => false],
                    ['id' => '69a41bb5-5ff8-5342-8657-2bfa93fadd93', 'description' => 'Kung pao chicken', 'correct_answer' => false],
                    ['id' => '0b3386b7-9e29-59db-b711-07fc2b42d975', 'description' => 'Dan dan noodles', 'correct_answer' => false],
                    ['id' => '6513d6e3-f7da-51eb-a9bf-e4eabf341793', 'description' => 'Mapo tofu', 'correct_answer' => false],
                    ['id' => '8ff4ee3d-383c-59aa-97aa-554b55d01d20', 'description' => 'Zongzi', 'correct_answer' => true]
                ]],
        ['id' => '45b561c1-4213-5463-8a99-33087303f4fc', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which Sichuan dish combines tofu, minced meat, chili bean paste, and Sichuan peppercorn?', 'difficulty' => 3, 'weight' => 598, 'alternatives' => [
                    ['id' => '10de924f-d321-526e-aeb3-74f02e683662', 'description' => 'Century egg', 'correct_answer' => false],
                    ['id' => '1dd8a3b9-1e08-58a5-88ec-fe5e3e1b53ea', 'description' => 'Char siu', 'correct_answer' => false],
                    ['id' => 'bbdff19a-14e9-5ad1-9b77-efa96160e770', 'description' => 'Mapo tofu', 'correct_answer' => true],
                    ['id' => '71f51181-1b09-50db-b533-35e82bdf367e', 'description' => 'Kung pao chicken', 'correct_answer' => false],
                    ['id' => '2ae03fc5-f1a8-5909-967a-c68e47fe6c3e', 'description' => 'Hot pot', 'correct_answer' => false]
                ]],
        ['id' => '3008d1de-a990-568e-8a48-f7728b808122', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which preserved Chinese egg has a dark, translucent appearance after alkaline curing?', 'difficulty' => 3, 'weight' => 402, 'alternatives' => [
                    ['id' => 'b3e6a90d-eb8f-5299-ab77-35919dd91a0f', 'description' => 'Hot pot', 'correct_answer' => false],
                    ['id' => 'cc130b12-f3b4-59aa-82a4-b02648a37bf1', 'description' => 'Kung pao chicken', 'correct_answer' => false],
                    ['id' => '15b2392b-f4fe-5578-a385-f4f32573f3eb', 'description' => 'Dan dan noodles', 'correct_answer' => false],
                    ['id' => '0cdfbc6e-c2e0-5847-8959-734bad2abc1e', 'description' => 'Dongpo pork', 'correct_answer' => false],
                    ['id' => '0c2455cf-24f9-5feb-99cf-4632156488ef', 'description' => 'Century egg', 'correct_answer' => true]
                ]],
        ['id' => '11d89f48-6628-57f3-a442-82f0107b30df', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which Sichuan-inspired dish combines chicken, peanuts, chili peppers, and a savory sauce?', 'difficulty' => 3, 'weight' => 509, 'alternatives' => [
                    ['id' => 'bf02ed0b-7f37-59d7-9a20-804c997aa95f', 'description' => 'Hot pot', 'correct_answer' => false],
                    ['id' => '6e774512-f381-5341-8833-4ce079949568', 'description' => 'Kung pao chicken', 'correct_answer' => true],
                    ['id' => '1ac652a1-28f9-54d0-9812-5434a59b81cd', 'description' => 'Mapo tofu', 'correct_answer' => false],
                    ['id' => '5e86264b-f49c-5106-a9ad-4c66c1d7912d', 'description' => 'Zongzi', 'correct_answer' => false],
                    ['id' => 'e8047560-9c0d-58df-a628-efa3c20b2463', 'description' => 'Dongpo pork', 'correct_answer' => false]
                ]],
        ['id' => 'e014add0-d520-594d-b726-51ab6ebdd347', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which Cantonese preparation features barbecued pork with a glossy, sweet-savory glaze?', 'difficulty' => 3, 'weight' => 550, 'alternatives' => [
                    ['id' => '1b397dee-0fcd-5781-b1b4-79561c9fa3a3', 'description' => 'Char siu', 'correct_answer' => true],
                    ['id' => 'b09c0d79-d772-5226-999c-ef2b95e73eef', 'description' => 'Mapo tofu', 'correct_answer' => false],
                    ['id' => 'ca6d66a7-7466-5714-8105-d73baacc7388', 'description' => 'Century egg', 'correct_answer' => false],
                    ['id' => 'bd108efa-8ed2-5cec-a574-91c32eea635a', 'description' => 'Dan dan noodles', 'correct_answer' => false],
                    ['id' => 'a977f3da-8bbd-56a2-87d2-2b85a70210a3', 'description' => 'Dongpo pork', 'correct_answer' => false]
                ]],
        ['id' => 'cec73322-3c82-581d-a273-fcaf344f701e', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which Hangzhou dish is named after the poet Su Dongpo and features slowly braised pork belly?', 'difficulty' => 3, 'weight' => 466, 'alternatives' => [
                    ['id' => '9f525e06-4588-5c1c-a50f-d5f03a86728e', 'description' => 'Century egg', 'correct_answer' => false],
                    ['id' => 'dc0b59fd-b783-5c32-a1dd-9f32b61e70bd', 'description' => 'Dongpo pork', 'correct_answer' => true],
                    ['id' => '5990707e-d4ad-52d5-abae-befa9a4ae33f', 'description' => 'Hot pot', 'correct_answer' => false],
                    ['id' => 'f86ab1b4-3d9d-53fc-b9da-30b3085f0fad', 'description' => 'Char siu', 'correct_answer' => false],
                    ['id' => 'd60fc289-9ffc-5bc4-894e-a859b5a90fc9', 'description' => 'Zongzi', 'correct_answer' => false]
                ]],
        ['id' => '83b8aaaa-c7d6-55a1-9ecc-7e822ba11978', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which Venezuelan national dish combines shredded beef, black beans, rice, and fried plantain?', 'difficulty' => 3, 'weight' => 489, 'alternatives' => [
                    ['id' => '537d8e87-4468-57cd-a8c5-ca825df4502a', 'description' => 'Pabellón criollo', 'correct_answer' => true],
                    ['id' => 'b7fa1785-a772-5856-9b07-afa5133bdd68', 'description' => 'Empanada salteña', 'correct_answer' => false],
                    ['id' => '21b7a867-a31f-5afd-a587-aecae82f9dd6', 'description' => 'Hallaca', 'correct_answer' => false],
                    ['id' => 'd4478331-40ec-5f8c-b4c8-baf18ef799de', 'description' => 'Ceviche', 'correct_answer' => false],
                    ['id' => 'b4447336-cde8-5c4e-8c8c-c5ac21fde779', 'description' => 'Ají de gallina', 'correct_answer' => false]
                ]],
        ['id' => 'e694112d-ad7e-5b24-b948-bc88642bb53d', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which Peruvian street food consists of marinated skewered meat, traditionally beef heart?', 'difficulty' => 3, 'weight' => 438, 'alternatives' => [
                    ['id' => 'c569b4a8-be4d-5476-8670-6ca5a3784cf7', 'description' => 'Arepa', 'correct_answer' => false],
                    ['id' => '6a14efaa-22ef-5767-8e69-3a9ca66eb0bd', 'description' => 'Ají de gallina', 'correct_answer' => false],
                    ['id' => '6330efb5-9fc9-5a56-bba5-df5765cc2803', 'description' => 'Empanada salteña', 'correct_answer' => false],
                    ['id' => '9a8dbd93-8333-5b60-8a68-38f1c7454c76', 'description' => 'Locro', 'correct_answer' => false],
                    ['id' => 'b2c680a1-5762-50e3-9a2d-93f84066d34b', 'description' => 'Anticuchos', 'correct_answer' => true]
                ]],
        ['id' => '694a2f13-f3b6-5c81-a802-a3ea7ac679d3', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which Bolivian baked or fried pastry is filled with a juicy meat and vegetable stew?', 'difficulty' => 3, 'weight' => 474, 'alternatives' => [
                    ['id' => '7734317f-6a9e-5f4e-b1ba-e9b3936dff89', 'description' => 'Empanada salteña', 'correct_answer' => true],
                    ['id' => 'f9747d52-7c8c-5d72-ae90-08d26d3a50cf', 'description' => 'Arepa', 'correct_answer' => false],
                    ['id' => '625c9668-7245-537b-8325-3bca58837655', 'description' => 'Locro', 'correct_answer' => false],
                    ['id' => 'abba1ca7-0047-57ca-89f0-bfc382501dcd', 'description' => 'Pabellón criollo', 'correct_answer' => false],
                    ['id' => '95bcf938-5e6f-57da-8259-1d3ccb670142', 'description' => 'Lomo saltado', 'correct_answer' => false]
                ]],
        ['id' => 'bce590d4-6aed-5dfc-be06-5e041ced933d', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which Latin American dish cures raw fish in citrus juice, often with onion and chili?', 'difficulty' => 3, 'weight' => 600, 'alternatives' => [
                    ['id' => 'dcccbb05-e9d6-5b1f-8077-a3eb9b49b8d6', 'description' => 'Lomo saltado', 'correct_answer' => false],
                    ['id' => '57df141b-b7d9-5692-8886-7d06847bd33a', 'description' => 'Anticuchos', 'correct_answer' => false],
                    ['id' => '50e5036d-ba72-5bc6-a7a6-85f10948b3f4', 'description' => 'Hallaca', 'correct_answer' => false],
                    ['id' => '10bdb9fc-eb15-5a8b-8a2c-66bdafb7ef6e', 'description' => 'Arepa', 'correct_answer' => false],
                    ['id' => '1db8b035-7bde-5bd2-ba9e-84b17afe8e61', 'description' => 'Ceviche', 'correct_answer' => true]
                ]],
        ['id' => '48a2648f-7956-5686-b032-8419bcc7dffc', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which hearty Andean stew commonly includes squash, corn, beans, or potatoes?', 'difficulty' => 3, 'weight' => 424, 'alternatives' => [
                    ['id' => '7e97f518-f663-5282-aec2-a03882a87f03', 'description' => 'Anticuchos', 'correct_answer' => false],
                    ['id' => '71e25450-47f2-5c40-adcf-33ad1f68131d', 'description' => 'Chupe de camarones', 'correct_answer' => false],
                    ['id' => '4cb03b90-41d2-5a8f-bc91-40e034b1e9e4', 'description' => 'Pabellón criollo', 'correct_answer' => false],
                    ['id' => '911925f4-7a8e-5e41-8fae-40e66d569ba2', 'description' => 'Locro', 'correct_answer' => true],
                    ['id' => 'd7acdfe4-ae85-5a6a-bac2-8d349449ca19', 'description' => 'Empanada salteña', 'correct_answer' => false]
                ]],
        ['id' => '968686ab-df24-549f-86ae-e259d4468dfd', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which Peruvian stir-fry combines beef, onions, tomatoes, and fries, reflecting Chinese-Peruvian influence?', 'difficulty' => 3, 'weight' => 477, 'alternatives' => [
                    ['id' => '9934c510-6b0f-5f8f-bc2e-5f27e7ab81fc', 'description' => 'Pabellón criollo', 'correct_answer' => false],
                    ['id' => 'fb0c55e9-3b79-547e-afb6-e0a16969f7f1', 'description' => 'Lomo saltado', 'correct_answer' => true],
                    ['id' => '60c548f9-02bd-5002-9304-2d23e4cc0809', 'description' => 'Anticuchos', 'correct_answer' => false],
                    ['id' => 'd9a92a2d-cd95-5e86-82fb-1bf45e1dda86', 'description' => 'Ají de gallina', 'correct_answer' => false],
                    ['id' => '06771f39-17bc-500e-963a-24f8f924e636', 'description' => 'Chupe de camarones', 'correct_answer' => false]
                ]],
        ['id' => 'a3b216f6-fe22-52cd-91f1-25b1543ea855', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which Peruvian shrimp chowder commonly includes potatoes, corn, and cheese?', 'difficulty' => 3, 'weight' => 432, 'alternatives' => [
                    ['id' => 'f0c2d4ac-2bff-5e40-9c4e-72e8ae8297f3', 'description' => 'Empanada salteña', 'correct_answer' => false],
                    ['id' => 'f8d1389e-81f7-52fd-a48d-11a402b11439', 'description' => 'Pabellón criollo', 'correct_answer' => false],
                    ['id' => '92ab81c2-e7e0-542c-b41b-361d2f0040d0', 'description' => 'Lomo saltado', 'correct_answer' => false],
                    ['id' => '08084a81-2cf6-5dba-9ca4-d07e846146f5', 'description' => 'Ají de gallina', 'correct_answer' => false],
                    ['id' => '56df8e30-dda8-5e91-99bc-34265f9e17bd', 'description' => 'Chupe de camarones', 'correct_answer' => true]
                ]],
        ['id' => 'b4fd8ff9-c63d-5d3d-8eb0-c1096e8557b8', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which Peruvian dish features shredded chicken in a creamy sauce with yellow chili and nuts?', 'difficulty' => 3, 'weight' => 494, 'alternatives' => [
                    ['id' => 'b24f28bd-9fbc-5c24-a216-83772ae2c432', 'description' => 'Pabellón criollo', 'correct_answer' => false],
                    ['id' => '0563b4aa-85ca-5b35-b312-a0e7ac82aaf2', 'description' => 'Anticuchos', 'correct_answer' => false],
                    ['id' => 'fb60f1f4-4221-530d-a555-f91ad59ebda3', 'description' => 'Locro', 'correct_answer' => false],
                    ['id' => '3d901228-832e-5f1e-89a9-1afd9a7a22fa', 'description' => 'Ají de gallina', 'correct_answer' => true],
                    ['id' => 'eedbaba5-9fe2-5a8a-b446-1da255c30b4f', 'description' => 'Arepa', 'correct_answer' => false]
                ]],
        ['id' => 'cfeb353f-5889-5cc5-878d-a21efa704b7b', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which Scandinavian dish is made from dried whitefish treated with lye and rehydrated?', 'difficulty' => 4, 'weight' => 740, 'alternatives' => [
                    ['id' => '12eaf8c5-c4c3-5e1c-9e3c-f159649b3104', 'description' => 'Kiviak', 'correct_answer' => false],
                    ['id' => 'cc72eea3-7be6-585c-b345-df1261ced2fb', 'description' => 'Surströmming', 'correct_answer' => false],
                    ['id' => '9297aea2-46d6-5b38-b691-c91597823e46', 'description' => 'Lutefisk', 'correct_answer' => true],
                    ['id' => '1db30078-a19d-5b89-9c5f-bdf012793169', 'description' => 'Fesikh', 'correct_answer' => false],
                    ['id' => '07610deb-756a-515f-85fe-b6040c5876ed', 'description' => 'Shuto', 'correct_answer' => false]
                ]],
        ['id' => '8c3a1847-5415-5053-8187-0d45750629f2', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which Japanese fermented tuna entrail paste is a regional delicacy from Shizuoka?', 'difficulty' => 4, 'weight' => 715, 'alternatives' => [
                    ['id' => '32242eca-481a-583a-81b9-027113d2520f', 'description' => 'Shuto', 'correct_answer' => true],
                    ['id' => '9050c157-018b-5e39-b9fa-526ac34ed7cb', 'description' => 'Fesikh', 'correct_answer' => false],
                    ['id' => 'd07608a0-5078-5ac2-81f7-05723c267c57', 'description' => 'Hákarl', 'correct_answer' => false],
                    ['id' => 'a975e65a-4a6c-5d5d-83b4-206cd2e6b620', 'description' => 'Stinkheads', 'correct_answer' => false],
                    ['id' => '684bc5aa-44b4-5efa-ac3a-34e24f119ca4', 'description' => 'Surströmming', 'correct_answer' => false]
                ]],
        ['id' => '6135ce1b-3423-54fb-ae55-9350f405302e', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which Greenlandic Inuit food ferments small seabirds inside a seal skin?', 'difficulty' => 4, 'weight' => 651, 'alternatives' => [
                    ['id' => 'a960d6bf-ee53-5723-a6b7-a89a6222f3f8', 'description' => 'Shuto', 'correct_answer' => false],
                    ['id' => '71af65cd-5f41-5dae-8ed7-7ad5b5687773', 'description' => 'Lutefisk', 'correct_answer' => false],
                    ['id' => 'b60d326f-8e9b-580d-b6b5-30df9293d1f7', 'description' => 'Stinkheads', 'correct_answer' => false],
                    ['id' => '06be5b3d-54e2-5e89-b47e-b602bbe7c888', 'description' => 'Kiviak', 'correct_answer' => true],
                    ['id' => 'a6551039-d340-5a77-812e-ea232a2603bd', 'description' => 'Casu marzu', 'correct_answer' => false]
                ]],
        ['id' => 'fba13c1c-e057-5797-bd4b-874e8f9c39ee', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which Korean dish consists of fermented skate with a strong ammonia-like odor?', 'difficulty' => 4, 'weight' => 798, 'alternatives' => [
                    ['id' => 'b535ba64-be17-5ac6-97db-acdc17d06b5a', 'description' => 'Stinkheads', 'correct_answer' => false],
                    ['id' => 'd4099fa6-a4d2-5131-b303-d0494cb57e28', 'description' => 'Kiviak', 'correct_answer' => false],
                    ['id' => 'a9dfd093-1a4c-5a91-952a-ab0f6e24b2eb', 'description' => 'Hongeo-hoe', 'correct_answer' => true],
                    ['id' => 'd81d646d-eb73-50dc-8137-ede05f4f2893', 'description' => 'Fesikh', 'correct_answer' => false],
                    ['id' => '7500cb51-f52c-5aaf-bf04-ed5296616db8', 'description' => 'Casu marzu', 'correct_answer' => false]
                ]],
        ['id' => '71b3f1b6-0710-5c93-adc5-191f11df7ca6', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which Sardinian cheese is traditionally associated with live insect larvae?', 'difficulty' => 4, 'weight' => 656, 'alternatives' => [
                    ['id' => 'fbd158cb-434a-5bca-a76d-003b8e06646d', 'description' => 'Rakfisk', 'correct_answer' => false],
                    ['id' => '736f2d65-0a42-5e53-8be8-78c97b566a35', 'description' => 'Casu marzu', 'correct_answer' => true],
                    ['id' => 'e8bcbbb8-14da-503b-b7a4-9a146a73f995', 'description' => 'Lutefisk', 'correct_answer' => false],
                    ['id' => '5882504c-c9e3-52ca-bedc-6fc698a67e28', 'description' => 'Hongeo-hoe', 'correct_answer' => false],
                    ['id' => 'd0d07044-74de-5671-be69-67750f3b06bb', 'description' => 'Hákarl', 'correct_answer' => false]
                ]],
        ['id' => '60d87ded-8727-5929-a876-80a010570717', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which Icelandic food is made from fermented Greenland shark and is known for a strong ammonia smell?', 'difficulty' => 4, 'weight' => 680, 'alternatives' => [
                    ['id' => 'e9829351-9725-558f-81a6-082758203703', 'description' => 'Shuto', 'correct_answer' => false],
                    ['id' => '7a91ee9a-750e-5a85-8ca1-792895d199b5', 'description' => 'Hákarl', 'correct_answer' => true],
                    ['id' => '2af09274-4df8-59f2-a0d8-fe7c244a7a08', 'description' => 'Lutefisk', 'correct_answer' => false],
                    ['id' => '7f101400-d8e1-5b37-8017-c9e60b43fc2e', 'description' => 'Hongeo-hoe', 'correct_answer' => false],
                    ['id' => 'c89d414e-70a3-5787-a53f-1333e1f16992', 'description' => 'Rakfisk', 'correct_answer' => false]
                ]],
        ['id' => '50d3c7a9-7f66-537c-b986-7d981ebbe8e0', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which traditional Alaskan Yupik food is made by fermenting fish heads?', 'difficulty' => 4, 'weight' => 602, 'alternatives' => [
                    ['id' => 'd6ccb422-6fa9-5967-b92e-5d2970822f79', 'description' => 'Shuto', 'correct_answer' => false],
                    ['id' => 'c3867171-57a0-5efe-ac14-0a549fd83b82', 'description' => 'Stinkheads', 'correct_answer' => true],
                    ['id' => 'f6dff16c-17cf-5733-bcda-290408d9d4ff', 'description' => 'Rakfisk', 'correct_answer' => false],
                    ['id' => '322f4b45-b579-543d-9b6a-73980dcf74ad', 'description' => 'Fesikh', 'correct_answer' => false],
                    ['id' => '863a07a8-0d2e-592b-9b5f-8b2e9ec6faf6', 'description' => 'Kiviak', 'correct_answer' => false]
                ]],
        ['id' => 'd158fced-0c3f-50e5-8648-8e0e311acc14', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which Egyptian fermented and salted fish is traditionally eaten during Sham el-Nessim?', 'difficulty' => 4, 'weight' => 747, 'alternatives' => [
                    ['id' => '9cc55fd1-5e74-5b2f-8a2b-540b1fe593e8', 'description' => 'Stinkheads', 'correct_answer' => false],
                    ['id' => 'f73daff4-b1bd-5309-8a6c-98917d831750', 'description' => 'Hákarl', 'correct_answer' => false],
                    ['id' => '36379699-dd89-57bd-8ce1-cfb337374e15', 'description' => 'Casu marzu', 'correct_answer' => false],
                    ['id' => '2513e988-6498-555d-9ffd-bd06e3f8aac4', 'description' => 'Fesikh', 'correct_answer' => true],
                    ['id' => '5113d815-2121-505a-8501-99cc7cc401ee', 'description' => 'Lutefisk', 'correct_answer' => false]
                ]],
        ['id' => '496b9753-5555-56c9-b216-5b13f32072b6', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which Japanese Buddhist cuisine is traditionally vegetarian and avoids animal products?', 'difficulty' => 4, 'weight' => 660, 'alternatives' => [
                    ['id' => 'b84fb71a-de9d-5fc6-a2ec-8b6c1b231aac', 'description' => 'Teppanyaki', 'correct_answer' => false],
                    ['id' => '0be9431f-d229-5554-a9f0-207d52f702b3', 'description' => 'Washoku', 'correct_answer' => false],
                    ['id' => '48058d2c-38ae-5160-bfed-f1802ace7423', 'description' => 'Kappo', 'correct_answer' => false],
                    ['id' => 'f4fa07ce-6404-5565-96d9-35d45accba16', 'description' => 'Kaiseki', 'correct_answer' => false],
                    ['id' => 'cf518cbc-e08c-57e5-9bc8-05662548358b', 'description' => 'Shojin ryori', 'correct_answer' => true]
                ]],
        ['id' => '85262569-6665-5c19-9d95-78c728698b01', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which Japanese dining style emphasizes interaction with a chef preparing dishes in front of guests?', 'difficulty' => 4, 'weight' => 743, 'alternatives' => [
                    ['id' => '4af99209-62c9-5bfa-b21b-4985fbac9abd', 'description' => 'Edomae sushi', 'correct_answer' => false],
                    ['id' => '30e8bea4-40b4-5e4a-b43e-fe909a1d6450', 'description' => 'Kappo', 'correct_answer' => true],
                    ['id' => '7e1f14e7-f75e-5e79-b748-b5893b28b7a8', 'description' => 'Izakaya', 'correct_answer' => false],
                    ['id' => '13fc036e-027f-58e3-bdcd-543fad3f9e09', 'description' => 'Cha-kaiseki', 'correct_answer' => false],
                    ['id' => '04e49ec7-c2ea-559d-9fd3-af79ba2850fe', 'description' => 'Washoku', 'correct_answer' => false]
                ]],
        ['id' => '0ead947f-fa22-5429-9eee-c19f8b8b0121', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which Japanese informal drinking establishment serves a variety of small dishes alongside drinks?', 'difficulty' => 4, 'weight' => 759, 'alternatives' => [
                    ['id' => 'e2280c71-0c2e-513b-a6ed-18d2d0cb7304', 'description' => 'Washoku', 'correct_answer' => false],
                    ['id' => 'fe2a893a-267a-54ad-9311-13875c09ec2a', 'description' => 'Kappo', 'correct_answer' => false],
                    ['id' => '62610d9b-0b7b-5fb1-b04a-3081988dc040', 'description' => 'Kaiseki', 'correct_answer' => false],
                    ['id' => 'f03ddbff-3bf0-5b1e-9d18-2387d6e569e1', 'description' => 'Teppanyaki', 'correct_answer' => false],
                    ['id' => '16ec1d0f-3aad-56b9-95eb-3202471735a9', 'description' => 'Izakaya', 'correct_answer' => true]
                ]],
        ['id' => '096a64f5-02f3-54bf-9e93-7f2587199706', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'What Japanese culinary term refers to Western-influenced dishes adapted to Japanese tastes?', 'difficulty' => 4, 'weight' => 616, 'alternatives' => [
                    ['id' => 'dc3b983a-a822-5bcd-8427-490aff415513', 'description' => 'Yoshoku', 'correct_answer' => true],
                    ['id' => '6ffe6abd-0de5-5f22-bfa3-bebb29e3f429', 'description' => 'Izakaya', 'correct_answer' => false],
                    ['id' => 'e1dc547e-505d-5d18-8c9f-4d8d4e56aaa1', 'description' => 'Washoku', 'correct_answer' => false],
                    ['id' => '2b93b841-57f8-5dc0-ac60-fe7f80a32e6b', 'description' => 'Kappo', 'correct_answer' => false],
                    ['id' => '3f2eb3d5-1f5b-57d2-930b-158e52f967a0', 'description' => 'Omakase', 'correct_answer' => false]
                ]],
        ['id' => 'ab5b5765-0b4b-5988-b3cc-0e494c54a757', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which sushi tradition developed in Edo, now Tokyo, and often uses cured or prepared seafood?', 'difficulty' => 4, 'weight' => 755, 'alternatives' => [
                    ['id' => '65ac6f3f-5193-5d9d-9128-d2945b1a6ba2', 'description' => 'Edomae sushi', 'correct_answer' => true],
                    ['id' => 'be73ae1e-fb6b-5ffb-8228-8b7dbbdf2246', 'description' => 'Kappo', 'correct_answer' => false],
                    ['id' => '90cc005f-ac15-56dc-b30f-b3a7bbff9920', 'description' => 'Cha-kaiseki', 'correct_answer' => false],
                    ['id' => '8c469551-e401-5514-b48f-22eb622e27e5', 'description' => 'Washoku', 'correct_answer' => false],
                    ['id' => 'ba461082-2492-52a4-8c05-bdeaa6e1fd5e', 'description' => 'Yoshoku', 'correct_answer' => false]
                ]],
        ['id' => '74527c25-7d76-5076-9e78-ac048e425d94', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'What is the Japanese term for traditional Japanese dietary culture recognized by UNESCO?', 'difficulty' => 4, 'weight' => 628, 'alternatives' => [
                    ['id' => '44c4dae2-772d-56aa-b745-7aef59d5cd7c', 'description' => 'Shojin ryori', 'correct_answer' => false],
                    ['id' => '55ec58f8-db48-5a11-b192-0f87505fcb5f', 'description' => 'Edomae sushi', 'correct_answer' => false],
                    ['id' => '576d440d-a14f-51a0-8348-c118af07b983', 'description' => 'Washoku', 'correct_answer' => true],
                    ['id' => 'b3d771da-7999-5b75-8649-fa755fdd9380', 'description' => 'Yoshoku', 'correct_answer' => false],
                    ['id' => '17491ee1-cfd6-5b6b-8dc7-18a6ae76923c', 'description' => 'Omakase', 'correct_answer' => false]
                ]],
        ['id' => '4e37d98c-c387-55f9-be03-13ae06941196', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which Japanese haute cuisine tradition presents a sequence of carefully composed seasonal dishes?', 'difficulty' => 4, 'weight' => 756, 'alternatives' => [
                    ['id' => '56f8ab9e-05e6-5c38-9468-66a701104eb6', 'description' => 'Teppanyaki', 'correct_answer' => false],
                    ['id' => 'cdf6c4b3-34dd-572f-b6c6-988eca5fb5ee', 'description' => 'Cha-kaiseki', 'correct_answer' => false],
                    ['id' => '8c557125-611b-55fa-8640-1a2dad995a0a', 'description' => 'Kaiseki', 'correct_answer' => true],
                    ['id' => '024ad7fc-66f2-5e54-a2db-75077ecc0376', 'description' => 'Izakaya', 'correct_answer' => false],
                    ['id' => 'f3cac89e-19d1-52a9-aec7-f59b77c30ba5', 'description' => 'Kappo', 'correct_answer' => false]
                ]],
        ['id' => '1f376b83-6777-55a2-b463-1556903b10c5', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which Japanese cooking style prepares food on a flat iron griddle?', 'difficulty' => 4, 'weight' => 635, 'alternatives' => [
                    ['id' => 'f14723ce-b666-505d-b724-b4800edf94f1', 'description' => 'Washoku', 'correct_answer' => false],
                    ['id' => 'a62187fd-4e74-5b14-bc55-28bb6c0cdfb7', 'description' => 'Teppanyaki', 'correct_answer' => true],
                    ['id' => '9bfd80db-f3c3-5be8-85cc-fbbc2f7a903f', 'description' => 'Yoshoku', 'correct_answer' => false],
                    ['id' => '04e53344-a6a9-5571-a50f-90370df09292', 'description' => 'Kaiseki', 'correct_answer' => false],
                    ['id' => 'd91a1bcd-57eb-5222-8ed3-bac9079797fe', 'description' => 'Cha-kaiseki', 'correct_answer' => false]
                ]],
        ['id' => 'ee244c10-0a28-5971-8afb-6cb9ef2f3e62', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which cooking method seals food in a bag and cooks it in a precisely controlled water bath?', 'difficulty' => 4, 'weight' => 667, 'alternatives' => [
                    ['id' => '45e22b6d-29dd-510d-8134-406584ea315d', 'description' => 'Cryoconcentration', 'correct_answer' => false],
                    ['id' => 'e6124486-b720-5fe7-b552-a3c6a919d763', 'description' => 'Emulsification', 'correct_answer' => false],
                    ['id' => '1e55faf5-2736-56ba-a51b-75e97e0a38f8', 'description' => 'Sous-vide', 'correct_answer' => true],
                    ['id' => 'b9a53997-51d9-5339-ae8a-75a8ea36a917', 'description' => 'Transglutaminase', 'correct_answer' => false],
                    ['id' => '33abe629-43c2-5f43-8766-dd82123ddd9b', 'description' => 'Molecular gastronomy', 'correct_answer' => false]
                ]],
        ['id' => '652c4d5e-1234-5cb2-9741-8f4fe969cc03', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which modernist culinary preparation uses gas or stabilizers to create a light, airy structure from a liquid?', 'difficulty' => 4, 'weight' => 784, 'alternatives' => [
                    ['id' => '87064dce-8d77-5f30-bd58-deab7ca9b96c', 'description' => 'Sous-vide', 'correct_answer' => false],
                    ['id' => '44245f16-44f1-5b2d-8e7a-ca43bf3e01f8', 'description' => 'Emulsification', 'correct_answer' => false],
                    ['id' => '136cfa1f-3877-5fcc-baae-f237b88833f1', 'description' => 'Flash freezing', 'correct_answer' => false],
                    ['id' => '0890c7b7-88ac-5982-8146-0a509b7ef913', 'description' => 'Foam', 'correct_answer' => true],
                    ['id' => 'ea7ccc8a-b9ad-50bb-8f1b-9bc3d5749734', 'description' => 'Transglutaminase', 'correct_answer' => false]
                ]],
        ['id' => 'f0a144ef-c64b-5a84-b509-1439e7530aa9', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which laboratory technique is used in some modernist kitchens to remove solvents at reduced pressure?', 'difficulty' => 4, 'weight' => 690, 'alternatives' => [
                    ['id' => '33cb8aaf-b0cf-54b6-ac8c-4196d766303f', 'description' => 'Foam', 'correct_answer' => false],
                    ['id' => '82773a04-25a8-506d-acea-d6ccf1e622e9', 'description' => 'Gelification', 'correct_answer' => false],
                    ['id' => 'd041db37-5f94-5aa0-ad53-1a4f13886249', 'description' => 'Sous-vide', 'correct_answer' => false],
                    ['id' => '0764a045-60a3-5033-991c-686ff3589a32', 'description' => 'Molecular gastronomy', 'correct_answer' => false],
                    ['id' => '3ce23791-bc6f-5487-9d23-b16097743f7f', 'description' => 'Rotary evaporation', 'correct_answer' => true]
                ]],
        ['id' => 'b5046909-5d7c-506d-8a45-1001b062a212', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which culinary process transforms a liquid into a gel using agents such as agar or gelatin?', 'difficulty' => 4, 'weight' => 769, 'alternatives' => [
                    ['id' => 'd23f9e1c-5731-52b4-a93e-ff9da48e6c79', 'description' => 'Flash freezing', 'correct_answer' => false],
                    ['id' => '4b50256f-5091-5f99-8b6a-a9f64d3f98c1', 'description' => 'Emulsification', 'correct_answer' => false],
                    ['id' => '08f4b9c3-d91d-5279-9c2d-06fc36ae181e', 'description' => 'Gelification', 'correct_answer' => true],
                    ['id' => 'e249fe4c-ec63-5e94-8d06-35ad8b0a1051', 'description' => 'Rotary evaporation', 'correct_answer' => false],
                    ['id' => '9e6771e8-1cb6-5a21-b5d6-f29c9e061a11', 'description' => 'Foam', 'correct_answer' => false]
                ]],
        ['id' => '379abf3c-1e6d-5cb3-bbc7-40c3ade491ef', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which process disperses one liquid into another immiscible liquid, as in mayonnaise?', 'difficulty' => 4, 'weight' => 657, 'alternatives' => [
                    ['id' => 'bae4185d-7330-54ea-bf33-73ec35e8f240', 'description' => 'Emulsification', 'correct_answer' => true],
                    ['id' => '8f0dbce1-d671-5fa7-ac66-0ab399a06de0', 'description' => 'Sous-vide', 'correct_answer' => false],
                    ['id' => '96f06091-800f-55ba-adc1-d9de9f518b8d', 'description' => 'Gelification', 'correct_answer' => false],
                    ['id' => '558b9349-1229-56eb-8507-6af281012fcb', 'description' => 'Molecular gastronomy', 'correct_answer' => false],
                    ['id' => '6d66e7a0-d6dd-5f8b-b4c0-444b642248b4', 'description' => 'Rotary evaporation', 'correct_answer' => false]
                ]],
        ['id' => 'a0c1b6c3-1947-5321-b15d-fd133e95caa7', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which culinary approach applies scientific principles to cooking and food transformations?', 'difficulty' => 4, 'weight' => 721, 'alternatives' => [
                    ['id' => '916e7d54-f413-5537-8b7b-752b96ab4ca0', 'description' => 'Transglutaminase', 'correct_answer' => false],
                    ['id' => '88df22d9-a44c-5dd2-8319-33b5012d024b', 'description' => 'Molecular gastronomy', 'correct_answer' => true],
                    ['id' => 'b19ea387-c56e-5658-a1b0-478dda9fd224', 'description' => 'Spherification', 'correct_answer' => false],
                    ['id' => '3119cd7c-3cd3-5f5d-835b-9aa5c76591a8', 'description' => 'Gelification', 'correct_answer' => false],
                    ['id' => 'b2efc2a1-5894-58eb-9fda-b0d11c30b22f', 'description' => 'Foam', 'correct_answer' => false]
                ]],
        ['id' => '9585f781-b0f0-5d3d-b8cc-eddb69fbb4c5', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which food-processing technique concentrates liquids by partially freezing water and removing ice crystals?', 'difficulty' => 4, 'weight' => 656, 'alternatives' => [
                    ['id' => 'b18b3bca-32c9-5a00-bfdf-317e038e8054', 'description' => 'Emulsification', 'correct_answer' => false],
                    ['id' => 'b3fc8bc7-1075-5540-a73b-0e0f5dac0a36', 'description' => 'Transglutaminase', 'correct_answer' => false],
                    ['id' => 'da28d020-2746-518c-95b0-d6e29b60bab2', 'description' => 'Gelification', 'correct_answer' => false],
                    ['id' => '57e61715-d9f6-5f21-8a17-99bdc91e3b7f', 'description' => 'Spherification', 'correct_answer' => false],
                    ['id' => '6e1aaa2e-e77c-5e76-a2b9-67e9c410bef3', 'description' => 'Cryoconcentration', 'correct_answer' => true]
                ]],
        ['id' => 'cfd0cece-65c0-5db7-b6c7-00fb5d9d2cdc', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which culinary technique forms liquid-filled spheres using alginate and calcium ions?', 'difficulty' => 4, 'weight' => 683, 'alternatives' => [
                    ['id' => '96ab5ff7-6536-5cce-bb49-5b159cf323c8', 'description' => 'Spherification', 'correct_answer' => true],
                    ['id' => '0d4daa28-417a-5302-bba4-50581bb37e84', 'description' => 'Rotary evaporation', 'correct_answer' => false],
                    ['id' => '02113727-dfe1-5385-a0d6-38b869616926', 'description' => 'Molecular gastronomy', 'correct_answer' => false],
                    ['id' => '9f6cd00c-88e2-5b13-ac9f-c4ce3f4eb857', 'description' => 'Emulsification', 'correct_answer' => false],
                    ['id' => '1d778537-86a1-54f4-9b6a-c7da790d1d0b', 'description' => 'Sous-vide', 'correct_answer' => false]
                ]],
        ['id' => 'fb5c16d9-3392-5ae2-8aeb-594c7dcd49ef', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which regional ramen style from Fukushima is known for its flat, curly noodles?', 'difficulty' => 4, 'weight' => 651, 'alternatives' => [
                    ['id' => 'a8acdd63-0d73-5861-b6ef-901dcb7330f6', 'description' => 'Jinhua ham', 'correct_answer' => false],
                    ['id' => 'a759e043-6745-5652-81cb-484f0fd270e3', 'description' => 'Sapporo miso ramen', 'correct_answer' => false],
                    ['id' => '0dc30718-137e-5c28-bcbd-ca266ca87c0c', 'description' => 'Kitakata ramen', 'correct_answer' => true],
                    ['id' => 'a697e657-cb9e-5a1e-82c3-1265c0b71f5e', 'description' => 'Bakkwa', 'correct_answer' => false],
                    ['id' => '5f3dc98a-bd99-5d3c-b138-43bd1e9dbaa4', 'description' => 'Hakata ramen', 'correct_answer' => false]
                ]],
        ['id' => '3b074da2-8ebc-5226-ac3d-94db0b47297a', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which regional ramen style is associated with a miso-based broth and northern Japan?', 'difficulty' => 4, 'weight' => 627, 'alternatives' => [
                    ['id' => '77392571-8f31-5c18-af28-5dd61a113bc2', 'description' => 'Sapporo miso ramen', 'correct_answer' => true],
                    ['id' => '6e092ba4-2a2b-521c-aaed-ffe7149d2dac', 'description' => 'Jinhua ham', 'correct_answer' => false],
                    ['id' => '11d06564-01b8-527f-89d9-4ac88fae1768', 'description' => 'Yunnan ham', 'correct_answer' => false],
                    ['id' => '04e214ac-6e16-5e92-95c0-34079d0c0d24', 'description' => 'Hakata ramen', 'correct_answer' => false],
                    ['id' => '867b3c0c-eab0-5ed8-8b37-3a6f1173f209', 'description' => 'Bakkwa', 'correct_answer' => false]
                ]],
        ['id' => 'a5109e28-ce72-5f48-abf4-e24b50250321', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which Cantonese-style Chinese sausage is typically sweet, cured, and air-dried?', 'difficulty' => 4, 'weight' => 676, 'alternatives' => [
                    ['id' => '23434cb9-2f51-510c-9316-f8420f6016b1', 'description' => 'Yunnan ham', 'correct_answer' => false],
                    ['id' => '715f5370-985d-5692-993b-f46a9f1046f7', 'description' => 'Hakata ramen', 'correct_answer' => false],
                    ['id' => 'eaabf2c6-c62c-5b04-9091-c9ddbe511d0b', 'description' => 'Lap cheong', 'correct_answer' => true],
                    ['id' => 'c0c0452e-4afd-5e23-b0bc-59827b21a16a', 'description' => 'Jinhua ham', 'correct_answer' => false],
                    ['id' => '7acb33b9-4a00-5ada-8540-e1abf22a9851', 'description' => 'Tonkotsu ramen', 'correct_answer' => false]
                ]],
        ['id' => '7356f3db-a939-58ca-8f65-3828c1fb9c19', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which Southeast Asian Chinese-style snack consists of sweet-salty dried meat slices?', 'difficulty' => 4, 'weight' => 654, 'alternatives' => [
                    ['id' => 'c46c2b3a-3c79-531b-81c1-debf89adb15e', 'description' => 'Yunnan ham', 'correct_answer' => false],
                    ['id' => 'ff4da931-ec0b-5cf6-8f22-adfd319f0636', 'description' => 'Peking duck', 'correct_answer' => false],
                    ['id' => '37091eac-feae-57d7-aeca-98f8ec70ae93', 'description' => 'Bakkwa', 'correct_answer' => true],
                    ['id' => '4e31d4a5-24a1-528e-9e45-e01c033ecb33', 'description' => 'Sapporo miso ramen', 'correct_answer' => false],
                    ['id' => 'a2e20d40-6fce-58d1-b785-95cefa0e730e', 'description' => 'Kitakata ramen', 'correct_answer' => false]
                ]],
        ['id' => '2370e775-f936-5432-8bba-b0fa61e8ccbd', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which ramen style is made with a rich, cloudy pork-bone broth?', 'difficulty' => 4, 'weight' => 771, 'alternatives' => [
                    ['id' => 'ff215be5-41c8-5982-bb02-f3b785602bbd', 'description' => 'Tonkotsu ramen', 'correct_answer' => true],
                    ['id' => '77abd5e5-ecb5-5ab3-afe3-ef8203eb35da', 'description' => 'Bakkwa', 'correct_answer' => false],
                    ['id' => 'b1387c26-4f9c-5b01-95e7-7c81c9bd899f', 'description' => 'Peking duck', 'correct_answer' => false],
                    ['id' => '5b59e70e-ee51-50a2-b47f-e9627c6b07e6', 'description' => 'Hakata ramen', 'correct_answer' => false],
                    ['id' => 'bf9400c2-029d-512b-870e-63742e185602', 'description' => 'Sapporo miso ramen', 'correct_answer' => false]
                ]],
        ['id' => 'bc49e5f3-644d-5e68-a166-a9edc78d732b', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which regional ramen style is known for soy-based broth with pork back fat?', 'difficulty' => 4, 'weight' => 729, 'alternatives' => [
                    ['id' => '8e49ad58-e452-5e24-9408-9c6dffd2d725', 'description' => 'Bakkwa', 'correct_answer' => false],
                    ['id' => 'd8ac415d-7df8-5ddb-ad04-eaca5c342217', 'description' => 'Tonkotsu ramen', 'correct_answer' => false],
                    ['id' => '16c9a708-056f-5080-9f8a-02163df4f94f', 'description' => 'Onomichi ramen', 'correct_answer' => true],
                    ['id' => '56de7b17-561e-57e5-b721-5f3ec23fc021', 'description' => 'Sapporo miso ramen', 'correct_answer' => false],
                    ['id' => '45158846-05f4-5d2c-93e9-d15c1790c574', 'description' => 'Jinhua ham', 'correct_answer' => false]
                ]],
        ['id' => 'e7f0f151-0c62-5239-9b2f-330398c1d971', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which dry-cured Chinese ham from Zhejiang is used in soups and braises?', 'difficulty' => 4, 'weight' => 704, 'alternatives' => [
                    ['id' => 'a4fd0502-ad26-5d07-80f2-5b9cd81191ea', 'description' => 'Yunnan ham', 'correct_answer' => false],
                    ['id' => '06e4ec72-7cc4-55f6-be3d-07564916db6d', 'description' => 'Bakkwa', 'correct_answer' => false],
                    ['id' => '68d8cb73-0fa7-5200-9548-32c040a74550', 'description' => 'Jinhua ham', 'correct_answer' => true],
                    ['id' => 'b517fd5e-37f8-59c3-a89f-915cff42e157', 'description' => 'Hakata ramen', 'correct_answer' => false],
                    ['id' => 'f8390930-9817-5862-98ce-e3a6c9ec80a9', 'description' => 'Tonkotsu ramen', 'correct_answer' => false]
                ]],
        ['id' => 'b72f0a26-61f6-5562-bb7e-469bd55861cd', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which regional ramen style from Fukuoka is known for thin noodles and pork-bone broth?', 'difficulty' => 4, 'weight' => 645, 'alternatives' => [
                    ['id' => '9f7dab77-3206-53a9-8110-b377b54eeeaa', 'description' => 'Yunnan ham', 'correct_answer' => false],
                    ['id' => 'b2dcce5d-a0a9-5e93-a8aa-2252b0065275', 'description' => 'Sapporo miso ramen', 'correct_answer' => false],
                    ['id' => '1dcdae99-f2ff-50df-8e31-a24bdc6bd0c1', 'description' => 'Hakata ramen', 'correct_answer' => true],
                    ['id' => '2be8ae11-ab0e-5d20-a2e3-58d31fe7fb42', 'description' => 'Kitakata ramen', 'correct_answer' => false],
                    ['id' => 'ea151428-2de1-5e55-b077-c6fe9e81cbc2', 'description' => 'Peking duck', 'correct_answer' => false]
                ]],
        ['id' => '58f6c05d-f9a5-558b-89bb-bbbf77b9ca2f', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which Georgian appetizer consists of chopped vegetables mixed with ground walnuts and herbs?', 'difficulty' => 4, 'weight' => 706, 'alternatives' => [
                    ['id' => 'ca2bee02-fc64-5247-94cf-fbd99606febd', 'description' => 'Pkhali', 'correct_answer' => true],
                    ['id' => '8801991f-6efe-5769-b511-398176081743', 'description' => 'Mtsvadi', 'correct_answer' => false],
                    ['id' => 'b36d633f-060d-5a63-9611-1b8b0310a72a', 'description' => 'Khinkali', 'correct_answer' => false],
                    ['id' => '8a7a2a49-336b-5286-ab9c-de9b24c41a63', 'description' => 'Khachapuri', 'correct_answer' => false],
                    ['id' => '0df84699-eda7-5bfd-872e-20d510a1c44f', 'description' => 'Ajapsandali', 'correct_answer' => false]
                ]],
        ['id' => 'acae609f-ad6e-5f49-90a3-33d91583dc9f', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which Georgian dish features poultry served in a walnut-based sauce?', 'difficulty' => 4, 'weight' => 612, 'alternatives' => [
                    ['id' => 'd85cf6db-5df2-5858-8d87-532ee4524842', 'description' => 'Lobio', 'correct_answer' => false],
                    ['id' => '9bcd9fb6-f665-50d3-8783-289c157aa41e', 'description' => 'Ajapsandali', 'correct_answer' => false],
                    ['id' => '09e44b62-29e0-5431-9bc0-22e9052cc501', 'description' => 'Pkhali', 'correct_answer' => false],
                    ['id' => '99666ac0-f17e-59cb-9e74-24296434273c', 'description' => 'Satsivi', 'correct_answer' => true],
                    ['id' => 'c8276aef-e212-599d-8b8e-0fa1dc70f2b3', 'description' => 'Khinkali', 'correct_answer' => false]
                ]],
        ['id' => '34d5ec2c-d819-5145-a827-773ab1144a88', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which Georgian spring stew often combines lamb or veal with tarragon, sour plums, and herbs?', 'difficulty' => 4, 'weight' => 798, 'alternatives' => [
                    ['id' => '7603db59-6391-5a2d-bf4f-f71c078fb698', 'description' => 'Khinkali', 'correct_answer' => false],
                    ['id' => '7f075194-3b5c-5e6e-977f-94f644ad274d', 'description' => 'Chakapuli', 'correct_answer' => true],
                    ['id' => 'd0074a0e-bb92-5899-887b-dde938c2e1b4', 'description' => 'Churchkhela', 'correct_answer' => false],
                    ['id' => '49868599-e5f0-5148-a11f-12ce0cb84c6c', 'description' => 'Lobio', 'correct_answer' => false],
                    ['id' => '18498175-0390-5dc4-9990-83fbbb849526', 'description' => 'Khachapuri', 'correct_answer' => false]
                ]],
        ['id' => '27f4c735-4c5f-5909-949a-28e242ee811b', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which Georgian vegetable dish is often described as a local version of ratatouille?', 'difficulty' => 4, 'weight' => 632, 'alternatives' => [
                    ['id' => '446b31be-caf7-5ec5-a361-86f3b39021e9', 'description' => 'Ajapsandali', 'correct_answer' => true],
                    ['id' => '28f96b9f-6b86-5014-8714-7f5af23ba771', 'description' => 'Badrijani nigvzit', 'correct_answer' => false],
                    ['id' => 'eb3534be-cbb8-50d4-8018-6b97f9dad961', 'description' => 'Pkhali', 'correct_answer' => false],
                    ['id' => '203a73e7-9f45-5672-b981-c6fb9c20d764', 'description' => 'Khachapuri', 'correct_answer' => false],
                    ['id' => 'afbd2049-c070-5560-b6d8-2738f59da154', 'description' => 'Lobio', 'correct_answer' => false]
                ]],
        ['id' => 'fca7a331-3270-5e7d-be4f-5aa4c6da27a9', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which Georgian dumplings are filled with spiced meat and broth?', 'difficulty' => 4, 'weight' => 704, 'alternatives' => [
                    ['id' => '5a0f43db-925c-5ee2-a826-869d882b1c1f', 'description' => 'Lobio', 'correct_answer' => false],
                    ['id' => 'a8a74eb3-52aa-5117-a324-5ece92f1b374', 'description' => 'Badrijani nigvzit', 'correct_answer' => false],
                    ['id' => 'f0f4f409-55a9-542b-85aa-fd4309366fb4', 'description' => 'Churchkhela', 'correct_answer' => false],
                    ['id' => 'b1cacd57-3b5c-59b7-8a17-ccbb489ce667', 'description' => 'Satsivi', 'correct_answer' => false],
                    ['id' => '5319cf4a-d887-56f4-b536-acea3921e89f', 'description' => 'Khinkali', 'correct_answer' => true]
                ]],
        ['id' => '72a4365b-f415-5960-9683-f1b52c7aa966', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'What is the Georgian name for meat grilled on skewers?', 'difficulty' => 4, 'weight' => 665, 'alternatives' => [
                    ['id' => 'ec116311-a9a9-514d-93ba-3045b4ff4dbc', 'description' => 'Badrijani nigvzit', 'correct_answer' => false],
                    ['id' => '3418d161-ce10-5bc2-8302-7d7638f8063c', 'description' => 'Chakapuli', 'correct_answer' => false],
                    ['id' => '5658ffdf-9704-5def-9e1f-7b3f9abe6822', 'description' => 'Mtsvadi', 'correct_answer' => true],
                    ['id' => '9cf2cf19-50b4-500e-b441-9574f09a0c7f', 'description' => 'Pkhali', 'correct_answer' => false],
                    ['id' => 'fd1e9d02-1958-5207-b412-2f5f109b409b', 'description' => 'Khachapuri', 'correct_answer' => false]
                ]],
        ['id' => 'c4f50e74-b0bd-59c9-97c7-71f2c71287eb', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which Georgian appetizer consists of eggplant slices filled or topped with walnut paste?', 'difficulty' => 4, 'weight' => 702, 'alternatives' => [
                    ['id' => '2fd73133-5919-5419-add7-9b696bfa05ba', 'description' => 'Chakapuli', 'correct_answer' => false],
                    ['id' => '3c2d57ba-b3bb-5c60-b225-4e5d3c7a8d6a', 'description' => 'Badrijani nigvzit', 'correct_answer' => true],
                    ['id' => 'b9db9a8d-f640-57aa-811a-247b098cea92', 'description' => 'Satsivi', 'correct_answer' => false],
                    ['id' => 'd3fb69b7-58f0-579f-9b5e-586f48071882', 'description' => 'Mtsvadi', 'correct_answer' => false],
                    ['id' => '213fdf1f-e5c4-5219-b241-6f1cc50b2001', 'description' => 'Khachapuri', 'correct_answer' => false]
                ]],
        ['id' => '6eb8088e-c4c1-5107-b68c-4656d8ad8143', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which Georgian dish is based on cooked beans, herbs, and spices?', 'difficulty' => 4, 'weight' => 658, 'alternatives' => [
                    ['id' => '6a46e210-fc9c-5d5b-ba27-24c6ad661626', 'description' => 'Lobio', 'correct_answer' => true],
                    ['id' => 'fe4693e7-6b2a-5ddf-b4b3-d36077aa99d8', 'description' => 'Badrijani nigvzit', 'correct_answer' => false],
                    ['id' => '518488fc-18ed-54c3-8349-e2b10cccb33f', 'description' => 'Khinkali', 'correct_answer' => false],
                    ['id' => 'd1e80b8d-8fc5-5ab9-a2be-aa552c72a357', 'description' => 'Satsivi', 'correct_answer' => false],
                    ['id' => 'bc734675-2661-5ce2-9396-3f718bdf4308', 'description' => 'Chakapuli', 'correct_answer' => false]
                ]],
        ['id' => 'c96ca817-2959-52f8-9bed-7f480e96efdf', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which Korean dish consists of live or freshly cut octopus pieces that may retain active suction cups?', 'difficulty' => 5, 'weight' => 833, 'alternatives' => [
                    ['id' => 'b77070d6-98f4-51c7-91fb-9a55d7001115', 'description' => 'Gyromitra esculenta', 'correct_answer' => false],
                    ['id' => 'f4a7b605-46dc-55ba-ad2d-2aad782dc71a', 'description' => 'Ackee', 'correct_answer' => false],
                    ['id' => '00e971d6-2192-5401-af20-002356cd71e5', 'description' => 'Sannakji', 'correct_answer' => true],
                    ['id' => '3a7a3e47-c900-5dfb-a1c6-fe7f52a76912', 'description' => 'Hákarl', 'correct_answer' => false],
                    ['id' => 'c3950c32-6418-57ba-9ac4-3befebaae9d4', 'description' => 'Amanita phalloides', 'correct_answer' => false]
                ]],
        ['id' => 'a3064b70-eba1-561b-99ff-068cd52d6984', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which traditional Sardinian cheese is associated with cheese fly larvae?', 'difficulty' => 5, 'weight' => 851, 'alternatives' => [
                    ['id' => 'f25a55a7-c263-55a6-8bba-43ada4e7fc46', 'description' => 'Casu marzu', 'correct_answer' => true],
                    ['id' => '66682a59-bebe-5fce-accb-1df45a5cec57', 'description' => 'Hákarl', 'correct_answer' => false],
                    ['id' => 'f6e61003-2eaf-5604-8812-f4b16ec1bdf6', 'description' => 'Elderberry', 'correct_answer' => false],
                    ['id' => '691c7beb-901f-52db-8bf8-88dec71e608e', 'description' => 'Fesikh', 'correct_answer' => false],
                    ['id' => '47a9fc11-1121-5dfc-b637-fc93ea7d389d', 'description' => 'Amanita phalloides', 'correct_answer' => false]
                ]],
        ['id' => 'eea1ace6-e6b0-5233-9a5b-86076b022dfd', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which mushroom, sometimes called false morel, contains gyromitrin and can cause severe poisoning?', 'difficulty' => 5, 'weight' => 826, 'alternatives' => [
                    ['id' => 'c8d80200-f2a7-5a7e-87bf-72477e1364ad', 'description' => 'Gyromitra esculenta', 'correct_answer' => true],
                    ['id' => '0771368a-0704-5e10-ae0d-4f31fda8e55f', 'description' => 'Elderberry', 'correct_answer' => false],
                    ['id' => '8c16de5f-c608-5411-81bd-b239ac68ab90', 'description' => 'Amanita phalloides', 'correct_answer' => false],
                    ['id' => '49108b32-0261-5013-85f7-6383ae310085', 'description' => 'Pufferfish liver', 'correct_answer' => false],
                    ['id' => '365f3079-2426-5b0a-94fe-3cd8f7fc9cc7', 'description' => 'Sannakji', 'correct_answer' => false]
                ]],
        ['id' => '78d7d52c-ceb6-515d-9610-1d7fb1c7a1d0', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which organ of certain pufferfish is especially dangerous because it can contain concentrated tetrodotoxin?', 'difficulty' => 5, 'weight' => 890, 'alternatives' => [
                    ['id' => '1fac6ee1-0307-5882-8bcb-0cd43ab49afd', 'description' => 'Sannakji', 'correct_answer' => false],
                    ['id' => '43705b3d-2c9a-536d-bd19-9151b9d02612', 'description' => 'Amanita phalloides', 'correct_answer' => false],
                    ['id' => 'f912b476-6362-54d0-b348-7c46371aa8f0', 'description' => 'Hákarl', 'correct_answer' => false],
                    ['id' => '0494a5ce-4ed4-585f-88af-256a512f6a29', 'description' => 'Pufferfish liver', 'correct_answer' => true],
                    ['id' => '014fda7e-739f-5e89-b26d-9587995c0b02', 'description' => 'Fugu', 'correct_answer' => false]
                ]],
        ['id' => '4299b5a5-c7b2-5952-b954-c71eaa76282e', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which salted and fermented fish can cause severe food poisoning if improperly prepared?', 'difficulty' => 5, 'weight' => 862, 'alternatives' => [
                    ['id' => 'b1869abe-4333-5bd3-a6ba-6ee397a73fe6', 'description' => 'Gyromitra esculenta', 'correct_answer' => false],
                    ['id' => 'b63368c1-da0d-5bfd-a04c-22873a289da7', 'description' => 'Fugu', 'correct_answer' => false],
                    ['id' => 'a47eaf71-9330-5d62-bf27-d583ef9f7dcb', 'description' => 'Hákarl', 'correct_answer' => false],
                    ['id' => '72bc3c91-12d6-5b73-90fb-36e06325caa2', 'description' => 'Casu marzu', 'correct_answer' => false],
                    ['id' => '28810ddd-d67b-598b-bf5b-ba1f649200c7', 'description' => 'Fesikh', 'correct_answer' => true]
                ]],
        ['id' => '5fd06f73-44c7-5803-af06-d9b3e2895522', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which fruit can cause Jamaican vomiting sickness if eaten unripe or improperly prepared?', 'difficulty' => 5, 'weight' => 826, 'alternatives' => [
                    ['id' => 'c554391c-dd47-51f7-87df-a9202733d18f', 'description' => 'Hákarl', 'correct_answer' => false],
                    ['id' => '94f3d07c-aa08-5b3d-bc3b-9ba09b8e4a24', 'description' => 'Elderberry', 'correct_answer' => false],
                    ['id' => '35dde2be-5930-51eb-9d04-f20f58d2bc99', 'description' => 'Pufferfish liver', 'correct_answer' => false],
                    ['id' => 'ec2c8c28-ad2e-52be-b15c-720872274744', 'description' => 'Ackee', 'correct_answer' => true],
                    ['id' => '3e5b7885-f81d-5126-b54d-616d1f16174e', 'description' => 'Fesikh', 'correct_answer' => false]
                ]],
        ['id' => 'e0d7fc73-3616-5ab9-b839-0e8ed3a68d8e', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which poisonous mushroom is commonly known as the death cap?', 'difficulty' => 5, 'weight' => 810, 'alternatives' => [
                    ['id' => 'ba4c92a0-192c-57bd-aaa1-ae639bec6ba4', 'description' => 'Pufferfish liver', 'correct_answer' => false],
                    ['id' => 'ecadcfe3-f3db-5361-bc44-a9f621fe6811', 'description' => 'Elderberry', 'correct_answer' => false],
                    ['id' => 'a08365d5-a34b-5de6-adef-1d1b0e479e2f', 'description' => 'Fesikh', 'correct_answer' => false],
                    ['id' => '03e41cb8-0a56-5478-8224-0822119373dd', 'description' => 'Fugu', 'correct_answer' => false],
                    ['id' => '73834889-26f0-5310-a1de-0e7577c63828', 'description' => 'Amanita phalloides', 'correct_answer' => true]
                ]],
        ['id' => '5b0a367a-03c7-531c-b1fd-d57eb20cc292', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which berry should not be eaten raw in large quantities because some parts contain cyanogenic glycosides?', 'difficulty' => 5, 'weight' => 853, 'alternatives' => [
                    ['id' => 'defcd0b4-9c5e-518b-b895-6205aa7e0aee', 'description' => 'Gyromitra esculenta', 'correct_answer' => false],
                    ['id' => '7d838339-1085-5c76-85d3-16d79261b617', 'description' => 'Sannakji', 'correct_answer' => false],
                    ['id' => 'fe8a94f6-5f6f-595f-9c36-f19f0eb7db70', 'description' => 'Fesikh', 'correct_answer' => false],
                    ['id' => '188b2b07-eaec-5896-99bb-16d74bdb3d68', 'description' => 'Casu marzu', 'correct_answer' => false],
                    ['id' => '342bfbcd-78e6-5c73-be03-91f23da96d94', 'description' => 'Elderberry', 'correct_answer' => true]
                ]],
        ['id' => '4f02fb5c-86bd-5c09-95c1-ea4d0e9cef87', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'What olive relish is described in ancient Roman culinary writing?', 'difficulty' => 5, 'weight' => 962, 'alternatives' => [
                    ['id' => '3abd7e0b-c0a8-5bde-9b99-0ba48a8fd651', 'description' => 'Puls', 'correct_answer' => false],
                    ['id' => '3c7563b0-08f7-5e16-ae60-e9e3befe4675', 'description' => 'Patina', 'correct_answer' => false],
                    ['id' => '612bfa80-7748-56d3-b354-0c568e28aff6', 'description' => 'Defrutum', 'correct_answer' => false],
                    ['id' => 'd4f159b9-4fc3-50a6-a54f-5e5bcb2dff37', 'description' => 'Posca', 'correct_answer' => false],
                    ['id' => 'acae5fa2-1532-5a3f-9244-167b2d4acf85', 'description' => 'Epityrum', 'correct_answer' => true]
                ]],
        ['id' => 'cccdeb09-d14c-581a-b6b0-2716b059b8f1', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'What ancient Roman preparation is sometimes described as a forerunner of a meat patty or burger?', 'difficulty' => 5, 'weight' => 984, 'alternatives' => [
                    ['id' => '3936c71e-c065-501f-89ca-773356c4fc11', 'description' => 'Liquamen', 'correct_answer' => false],
                    ['id' => '3d67a596-a8dd-54ce-a7e7-9468e1a33fe2', 'description' => 'Posca', 'correct_answer' => false],
                    ['id' => '08f220dd-2fba-5fa5-8692-90011464bf83', 'description' => 'Isicia omentata', 'correct_answer' => true],
                    ['id' => 'a5bd1f0f-ab0b-5be1-88de-c97821167cc5', 'description' => 'Epityrum', 'correct_answer' => false],
                    ['id' => 'c33224d5-6248-5c83-92db-b78134b5065d', 'description' => 'Sapa', 'correct_answer' => false]
                ]],
        ['id' => 'd84b1197-9d48-5f8b-9b61-da380ce11d99', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'What grain-based porridge served as a staple food in ancient Rome?', 'difficulty' => 5, 'weight' => 972, 'alternatives' => [
                    ['id' => '99d1bcac-55d7-569a-8137-9a53ecf1aa7f', 'description' => 'Isicia omentata', 'correct_answer' => false],
                    ['id' => '36c036af-7f4c-5711-9297-8fae22908efa', 'description' => 'Puls', 'correct_answer' => true],
                    ['id' => '27ca8bd1-4cfd-5879-b20d-eb9cd53c1f50', 'description' => 'Moretum', 'correct_answer' => false],
                    ['id' => '9104650e-2423-5128-b60c-a0f823df726c', 'description' => 'Liquamen', 'correct_answer' => false],
                    ['id' => '01738435-8129-5ac9-9622-69f4244305da', 'description' => 'Patina', 'correct_answer' => false]
                ]],
        ['id' => 'ca4db095-1019-5b8a-a704-7a0f3c2cd674', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'What vinegar-and-water drink was consumed by Roman soldiers and ordinary people?', 'difficulty' => 5, 'weight' => 953, 'alternatives' => [
                    ['id' => '51d15668-482d-516e-9043-f3cbfde8ab7d', 'description' => 'Posca', 'correct_answer' => true],
                    ['id' => 'c227b83f-92f1-539e-b769-6e484d3018dd', 'description' => 'Sapa', 'correct_answer' => false],
                    ['id' => 'e07b9710-feb8-5823-94cf-5ce1b65d23ca', 'description' => 'Liquamen', 'correct_answer' => false],
                    ['id' => '0c93694c-b9a8-55cf-a8e0-d9359a3f7362', 'description' => 'Patina', 'correct_answer' => false],
                    ['id' => 'f772ad7a-8ec8-5005-8403-8ef0bdc82084', 'description' => 'Epityrum', 'correct_answer' => false]
                ]],
        ['id' => '0b86e74e-2c7d-5f2a-86c1-28ccc3de573e', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'What Roman condiment was made by boiling down grape must, similar to a concentrated syrup?', 'difficulty' => 5, 'weight' => 950, 'alternatives' => [
                    ['id' => '4e6c601c-a44f-59c1-bd09-52ed3284de6f', 'description' => 'Garum', 'correct_answer' => false],
                    ['id' => '10e92b98-f2ff-5886-b068-bdc3815209c6', 'description' => 'Patina', 'correct_answer' => false],
                    ['id' => '99392570-75f3-56a2-9984-1dc99c3a5602', 'description' => 'Sapa', 'correct_answer' => true],
                    ['id' => 'c2b1fb2c-efd7-5f5c-9cb4-20ebc9d92fe9', 'description' => 'Epityrum', 'correct_answer' => false],
                    ['id' => '865641f2-4d8b-5379-b5c8-0c6234adebed', 'description' => 'Posca', 'correct_answer' => false]
                ]],
        ['id' => 'c888c4ca-b3d1-56a9-ad3a-2cd221c70f0c', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'What ancient Roman herb-and-cheese spread is described in a poem attributed to the Appendix Vergiliana?', 'difficulty' => 5, 'weight' => 992, 'alternatives' => [
                    ['id' => '3f59d9ae-545c-5e37-81c2-5e77c4297282', 'description' => 'Epityrum', 'correct_answer' => false],
                    ['id' => '6fb49979-589c-5bba-bfe8-0dd6ccd697ef', 'description' => 'Liquamen', 'correct_answer' => false],
                    ['id' => 'fb1717a1-e363-583c-9a8b-aa81ecd59783', 'description' => 'Puls', 'correct_answer' => false],
                    ['id' => 'dab5a960-6289-5b5d-8145-0c2e7491faba', 'description' => 'Moretum', 'correct_answer' => true],
                    ['id' => 'a44245bd-bce7-5d59-99a6-b65690bb00d4', 'description' => 'Patina', 'correct_answer' => false]
                ]],
        ['id' => 'a094f495-9077-5229-a788-090f00669f8a', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'What broad category of ancient Roman baked or layered dishes was cooked in a shallow vessel?', 'difficulty' => 5, 'weight' => 989, 'alternatives' => [
                    ['id' => '25405f3d-2463-5dd8-9d92-8b3d96a0f4b5', 'description' => 'Moretum', 'correct_answer' => false],
                    ['id' => 'ecb3e883-0bfb-537b-b720-8fb42796690e', 'description' => 'Liquamen', 'correct_answer' => false],
                    ['id' => 'f9ac6900-7bba-5ab3-a384-40b2f97880d3', 'description' => 'Patina', 'correct_answer' => true],
                    ['id' => '820b122f-6455-5e13-926c-b4cb3de3c06d', 'description' => 'Isicia omentata', 'correct_answer' => false],
                    ['id' => '50bc40a7-8a70-540d-b512-6d0c72948f45', 'description' => 'Posca', 'correct_answer' => false]
                ]],
        ['id' => '64c9dab0-d17c-5dcc-99ae-53829e8ad5c4', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'What reduced grape must syrup was used as a sweetener and cooking ingredient in ancient Rome?', 'difficulty' => 5, 'weight' => 925, 'alternatives' => [
                    ['id' => '9b6c7b65-cfb5-55f1-8580-ab13d85f11d3', 'description' => 'Liquamen', 'correct_answer' => false],
                    ['id' => 'd544458f-3499-516d-ac3c-482a6dccb8c0', 'description' => 'Sapa', 'correct_answer' => false],
                    ['id' => 'd66b3206-e6da-5d6e-bcd0-3abef7bef5ab', 'description' => 'Posca', 'correct_answer' => false],
                    ['id' => '1d80de98-1a6f-5773-a1da-3811e8a66ed7', 'description' => 'Defrutum', 'correct_answer' => true],
                    ['id' => 'f254a03a-52b4-5e87-9b47-c54243dc0e50', 'description' => 'Patina', 'correct_answer' => false]
                ]],
        ['id' => 'f5d1dc1f-3ae6-5339-b9d1-a89c148859da', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which Indonesian fermented soybean paste is used as a salty seasoning?', 'difficulty' => 5, 'weight' => 801, 'alternatives' => [
                    ['id' => 'f181ddb4-5a1f-57ed-a462-f919a6a51080', 'description' => 'Shio koji', 'correct_answer' => false],
                    ['id' => '469da325-e97c-5595-9be5-425f4c66bf3c', 'description' => 'Natto', 'correct_answer' => false],
                    ['id' => '270b7186-51fb-539f-979e-07b03ba745db', 'description' => 'Koji', 'correct_answer' => false],
                    ['id' => '9bb3c63f-ad52-5040-9831-1a5675397ef5', 'description' => 'Doenjang', 'correct_answer' => false],
                    ['id' => '666d7f51-6e38-5d36-afb9-30adbc8aaffb', 'description' => 'Tauco', 'correct_answer' => true]
                ]],
        ['id' => 'd59062f4-9502-55b2-b88f-5e154355498b', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which traditional fermented soybean food is eaten in parts of the eastern Himalayas?', 'difficulty' => 5, 'weight' => 991, 'alternatives' => [
                    ['id' => '259a6274-c59b-5a4b-b2da-2f2c2c34b528', 'description' => 'Natto', 'correct_answer' => false],
                    ['id' => 'dc0b8a3d-26f6-5fee-9039-db6230cff3a6', 'description' => 'Tianmianjiang', 'correct_answer' => false],
                    ['id' => 'ad76f275-df88-5abd-83e1-a757af0dfaeb', 'description' => 'Kinema', 'correct_answer' => true],
                    ['id' => 'a60af3dc-0863-5b49-bf86-865a0003552b', 'description' => 'Koji', 'correct_answer' => false],
                    ['id' => '7869fa75-f52b-58cd-8c4c-cfa8675f9c32', 'description' => 'Miso', 'correct_answer' => false]
                ]],
        ['id' => 'ecf204ee-6b1d-561f-aee8-9592c274aba6', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which Japanese fermented seasoning is made by combining rice koji, salt, and water?', 'difficulty' => 5, 'weight' => 960, 'alternatives' => [
                    ['id' => 'd0ccc86e-83d9-513d-8ce3-310f45d55955', 'description' => 'Tempeh', 'correct_answer' => false],
                    ['id' => '0f4f2ac1-627f-5314-bde9-3a3186bc6cde', 'description' => 'Doenjang', 'correct_answer' => false],
                    ['id' => '0d99f390-8ea3-592d-bad7-ad4ccdbe5843', 'description' => 'Shio koji', 'correct_answer' => true],
                    ['id' => '61d1be46-ca23-5a68-bcbc-cd2ffde6c7b4', 'description' => 'Koji', 'correct_answer' => false],
                    ['id' => '214d627b-c70a-5047-859c-464de7537445', 'description' => 'Tianmianjiang', 'correct_answer' => false]
                ]],
        ['id' => '406fd4d4-988a-5d64-b7cb-76066ac8a086', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which Chinese sweet fermented wheat paste is used in dishes such as Peking duck?', 'difficulty' => 5, 'weight' => 931, 'alternatives' => [
                    ['id' => '4f542147-9506-5d62-adea-f18fa9667095', 'description' => 'Koji', 'correct_answer' => false],
                    ['id' => 'de8cf5b1-aa0b-5ce7-9393-16623dcffbeb', 'description' => 'Shio koji', 'correct_answer' => false],
                    ['id' => '6c1c8497-8ebf-579d-a9fb-cb5d3be6f2ce', 'description' => 'Kinema', 'correct_answer' => false],
                    ['id' => 'b2006ceb-eef4-5781-8aac-eedf5b457d6e', 'description' => 'Tianmianjiang', 'correct_answer' => true],
                    ['id' => '95a671e2-4c04-5f44-8706-0b4d59f0b5c4', 'description' => 'Miso', 'correct_answer' => false]
                ]],
        ['id' => '41883129-dc85-5774-9275-ae04422586d0', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which Korean fermented chili paste combines red pepper, glutinous rice, fermented soybeans, and salt?', 'difficulty' => 5, 'weight' => 809, 'alternatives' => [
                    ['id' => '77fc6d37-1754-595f-ba4d-26da12363354', 'description' => 'Doenjang', 'correct_answer' => false],
                    ['id' => '8e907721-7292-53cd-ac07-8c1ef17a86b8', 'description' => 'Koji', 'correct_answer' => false],
                    ['id' => '0e842162-ecdb-51cc-84c1-5c06a4901749', 'description' => 'Kinema', 'correct_answer' => false],
                    ['id' => 'a1e83c31-f5a1-58eb-b178-a3ddf829e79a', 'description' => 'Gochujang', 'correct_answer' => true],
                    ['id' => '39509ea4-c568-5eb9-98d9-f775249c43fb', 'description' => 'Tianmianjiang', 'correct_answer' => false]
                ]],
        ['id' => 'e36db7ea-72fd-565c-a979-887649eb6617', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which Indonesian fermented soybean cake is bound together by fungal mycelium?', 'difficulty' => 5, 'weight' => 822, 'alternatives' => [
                    ['id' => '20774ae7-8fdb-5ccc-9595-19a3116bbb35', 'description' => 'Koji', 'correct_answer' => false],
                    ['id' => '03ae7c00-5330-59af-95db-f13ed233ee68', 'description' => 'Doenjang', 'correct_answer' => false],
                    ['id' => 'da839aaf-c806-5abb-906d-4651095bec2c', 'description' => 'Miso', 'correct_answer' => false],
                    ['id' => '0351df94-be10-514a-a42d-491ed47af20c', 'description' => 'Tempeh', 'correct_answer' => true],
                    ['id' => '929eaaa1-690b-51da-a4c0-e36d87f6cbcd', 'description' => 'Kinema', 'correct_answer' => false]
                ]],
        ['id' => 'c7a35055-0593-5bee-88f5-53e764be884b', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which Japanese food consists of fermented soybeans with a sticky texture and strong aroma?', 'difficulty' => 5, 'weight' => 935, 'alternatives' => [
                    ['id' => '73313e48-8668-583b-b063-968ac57ede41', 'description' => 'Koji', 'correct_answer' => false],
                    ['id' => 'e67d7abf-07f1-53c7-b63f-bea41cb7753a', 'description' => 'Doenjang', 'correct_answer' => false],
                    ['id' => '1f742473-8ea3-56fe-b999-83d1b4108fdb', 'description' => 'Kinema', 'correct_answer' => false],
                    ['id' => '595fd55c-3086-5c60-9b24-791564e20f9d', 'description' => 'Natto', 'correct_answer' => true],
                    ['id' => '3a08d71a-cf03-58d5-976b-0c972b401d4d', 'description' => 'Tauco', 'correct_answer' => false]
                ]],
        ['id' => '903cc0f3-1900-542b-a4cd-3e0ebcf8746e', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which Japanese fermented paste is commonly made from soybeans, salt, and koji?', 'difficulty' => 5, 'weight' => 857, 'alternatives' => [
                    ['id' => 'fa678848-e801-5018-ac43-c7c160c6bb33', 'description' => 'Miso', 'correct_answer' => true],
                    ['id' => 'f4920856-82bc-5646-bf8d-5079e1df6efb', 'description' => 'Natto', 'correct_answer' => false],
                    ['id' => 'fb2766f3-b0cb-5bbc-a901-fbc4be9b0cc3', 'description' => 'Kinema', 'correct_answer' => false],
                    ['id' => '4f8baec4-50fb-5851-bf0c-6d6b5e81e47a', 'description' => 'Tianmianjiang', 'correct_answer' => false],
                    ['id' => 'f75cd0d4-e47a-5c87-ad6f-395f46084f8a', 'description' => 'Gochujang', 'correct_answer' => false]
                ]],
        ['id' => '44f21fa7-45c3-5a04-9e3c-acaeddbefc55', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which mother sauce is made by thickening milk with a white roux?', 'difficulty' => 5, 'weight' => 856, 'alternatives' => [
                    ['id' => 'fbf71ec7-e8b9-59a6-8d83-b05b725b937f', 'description' => 'Espagnole', 'correct_answer' => false],
                    ['id' => 'd680b031-2f28-5c61-a8e4-bb8c582251b1', 'description' => 'Béchamel', 'correct_answer' => true],
                    ['id' => 'a352c4d3-c98d-5d30-96ac-2c8840ad40f7', 'description' => 'Beurre blanc', 'correct_answer' => false],
                    ['id' => '69e838cc-6226-5d18-8afd-2a14e784b4c9', 'description' => 'Velouté', 'correct_answer' => false],
                    ['id' => 'b297b852-0a61-56bc-b17d-5a36a720d4a9', 'description' => 'Hollandaise', 'correct_answer' => false]
                ]],
        ['id' => 'f6bf5716-b92b-582c-9594-394754c7613f', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which derivative sauce is made from velouté thickened with egg yolks and finished with cream or lemon?', 'difficulty' => 5, 'weight' => 822, 'alternatives' => [
                    ['id' => '3c264ba9-9f74-5163-ae63-5544f775eea2', 'description' => 'Allemande sauce', 'correct_answer' => true],
                    ['id' => '9b141a8c-e85f-5800-885c-86cf1955a1ac', 'description' => 'Beurre blanc', 'correct_answer' => false],
                    ['id' => '6a6b073f-2700-5141-942b-7cad21128803', 'description' => 'Sauce tomate', 'correct_answer' => false],
                    ['id' => '2241173b-24a5-5fd8-a377-b356029f524f', 'description' => 'Hollandaise', 'correct_answer' => false],
                    ['id' => '0e5590e0-b1ed-58ed-885c-5d56cfefe00d', 'description' => 'Bordelaise', 'correct_answer' => false]
                ]],
        ['id' => 'ba87778c-27f1-5bf1-beee-b74860891ed4', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which French brown mother sauce is traditionally made with brown stock and brown roux?', 'difficulty' => 5, 'weight' => 936, 'alternatives' => [
                    ['id' => 'b1006941-38be-597e-a002-1cf43bc0189e', 'description' => 'Sauce suprême', 'correct_answer' => false],
                    ['id' => '97946f5f-059c-5ba5-af0d-45b496844934', 'description' => 'Espagnole', 'correct_answer' => true],
                    ['id' => '0cb4de8c-b833-58ce-9c78-848ed748eb35', 'description' => 'Beurre blanc', 'correct_answer' => false],
                    ['id' => 'c7eff547-b983-5ab4-917c-c9cdb764ee5d', 'description' => 'Allemande sauce', 'correct_answer' => false],
                    ['id' => 'd5579998-2a5e-5fde-9063-ea78dd6794c0', 'description' => 'Béchamel', 'correct_answer' => false]
                ]],
        ['id' => 'b1b31cd4-0028-53fe-8d72-d4b5b75e739f', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which classic French derivative sauce is made by enriching a chicken velouté with cream?', 'difficulty' => 5, 'weight' => 805, 'alternatives' => [
                    ['id' => 'd35db2ac-a910-5b9e-876f-e198e6b54fbc', 'description' => 'Sauce tomate', 'correct_answer' => false],
                    ['id' => 'dec938f5-804d-533b-953c-cfc454bc8b52', 'description' => 'Sauce suprême', 'correct_answer' => true],
                    ['id' => '55b6b3e6-5b13-5fa3-b97a-a6633d44257e', 'description' => 'Espagnole', 'correct_answer' => false],
                    ['id' => 'd836a78d-fff4-570f-92e0-3549925d100d', 'description' => 'Bordelaise', 'correct_answer' => false],
                    ['id' => 'c1147548-4d44-5aaf-9dae-0edabbce78c4', 'description' => 'Béchamel', 'correct_answer' => false]
                ]],
        ['id' => '94b4de1d-c08e-5fe7-8d27-f697f541b4af', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which emulsion sauce is made from egg yolks and butter, often flavored with lemon?', 'difficulty' => 5, 'weight' => 904, 'alternatives' => [
                    ['id' => '950ccce5-97af-5902-9edf-f95b61a8a77b', 'description' => 'Allemande sauce', 'correct_answer' => false],
                    ['id' => '9cc82041-1ddf-5509-82cd-a892ab0b831f', 'description' => 'Escoffier\'s mother sauces', 'correct_answer' => false],
                    ['id' => '2383d335-193d-507f-83b4-05ec7bf2bdb2', 'description' => 'Beurre blanc', 'correct_answer' => false],
                    ['id' => 'c2218cb6-be1a-578b-aa99-c5afc287ff68', 'description' => 'Hollandaise', 'correct_answer' => true],
                    ['id' => '449f9f1c-ab05-5346-b226-1ba56edd4b83', 'description' => 'Sauce suprême', 'correct_answer' => false]
                ]],
        ['id' => '1ce09ffb-8bc5-565c-978c-6e8f29438f12', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which French brown sauce is traditionally associated with red wine, shallots, and marrow?', 'difficulty' => 5, 'weight' => 956, 'alternatives' => [
                    ['id' => 'dd2ecc87-9842-5886-82ab-b07abe4e49bf', 'description' => 'Sauce tomate', 'correct_answer' => false],
                    ['id' => '30494d24-e21f-5782-bd55-3539e43e47b9', 'description' => 'Espagnole', 'correct_answer' => false],
                    ['id' => 'f0bfb314-7a0b-55bf-82a6-67ed8516266e', 'description' => 'Sauce suprême', 'correct_answer' => false],
                    ['id' => 'af2c5f8b-0a39-56d6-b8b4-9c1d3f1fa985', 'description' => 'Escoffier\'s mother sauces', 'correct_answer' => false],
                    ['id' => '9763dacd-6bcf-540d-9de3-2e77a2d96151', 'description' => 'Bordelaise', 'correct_answer' => true]
                ]],
        ['id' => '40a79c45-97f2-577b-9c45-5d2d0123f84e', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which French mother sauce is made with a light stock thickened by a blond roux?', 'difficulty' => 5, 'weight' => 851, 'alternatives' => [
                    ['id' => '9436d3ae-7b3f-52e4-807a-268e1508a580', 'description' => 'Sauce suprême', 'correct_answer' => false],
                    ['id' => '21b5f2ca-ad23-538a-87be-473c45f21b58', 'description' => 'Hollandaise', 'correct_answer' => false],
                    ['id' => 'b3a9b866-5161-57b9-9f17-25b87c94467a', 'description' => 'Bordelaise', 'correct_answer' => false],
                    ['id' => '0fdc0a16-506f-5eb6-a413-eb3932c527c4', 'description' => 'Espagnole', 'correct_answer' => false],
                    ['id' => '967e9197-266d-52a5-b80b-70cbff09183d', 'description' => 'Velouté', 'correct_answer' => true]
                ]],
        ['id' => '47c7579a-eacb-563e-b383-4e6470e10699', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which classical French culinary framework identifies béchamel, velouté, espagnole, tomato, and hollandaise as foundational sauces?', 'difficulty' => 5, 'weight' => 1000, 'alternatives' => [
                    ['id' => 'f4cb021e-98cd-525f-a8f0-e6572f0ed668', 'description' => 'Escoffier\'s mother sauces', 'correct_answer' => true],
                    ['id' => '1d6c4013-4c4c-5333-aa12-c077a43faff7', 'description' => 'Sauce tomate', 'correct_answer' => false],
                    ['id' => '1e101c58-8682-5ca3-a2ba-5a9d045c984c', 'description' => 'Béchamel', 'correct_answer' => false],
                    ['id' => 'd36d92bb-7ae6-542f-87d6-56540e8a40c6', 'description' => 'Beurre blanc', 'correct_answer' => false],
                    ['id' => 'f951e4d5-1fa4-56c4-bad9-90c9c20e494b', 'description' => 'Bordelaise', 'correct_answer' => false]
                ]],
        ['id' => 'ddf5b17d-6db9-5e16-9e30-bd766688e45f', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which process changes a protein\'s structure through heat, acid, or other conditions without necessarily breaking its peptide bonds?', 'difficulty' => 5, 'weight' => 914, 'alternatives' => [
                    ['id' => 'ff9bd04e-53ff-56dc-9199-b84a435ac298', 'description' => 'Starch dextrinization', 'correct_answer' => false],
                    ['id' => '85355bbe-b11f-5e06-85d9-b0b2e6fa4a17', 'description' => 'Denaturation', 'correct_answer' => true],
                    ['id' => '2af40a83-3b4e-5b3b-9de1-383f9c5f914c', 'description' => 'The Maillard reaction', 'correct_answer' => false],
                    ['id' => 'a603f941-e00d-595b-bf73-16e2af710732', 'description' => 'Retrogradation', 'correct_answer' => false],
                    ['id' => 'a8b95d9e-e4c2-53bd-9d15-692ddd5a805e', 'description' => 'Gelatinization', 'correct_answer' => false]
                ]],
        ['id' => '7481db16-3c27-584b-9223-23b0851962b9', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which chemical process causes fats and oils to develop rancid flavors through reactions with oxygen?', 'difficulty' => 5, 'weight' => 837, 'alternatives' => [
                    ['id' => '67301e83-edcc-5d7d-bab1-6c1142bb8c7b', 'description' => 'Gelatinization', 'correct_answer' => false],
                    ['id' => '5ea796dc-2937-5f11-838c-87b7b334c227', 'description' => 'The Maillard reaction', 'correct_answer' => false],
                    ['id' => '3797c949-3707-5489-b837-ac4bb96dc08d', 'description' => 'Retrogradation', 'correct_answer' => false],
                    ['id' => '8411efa2-944d-5058-964a-526b9e6d779d', 'description' => 'Syneresis', 'correct_answer' => false],
                    ['id' => '74171301-4723-544f-b3b1-9424dc52c13e', 'description' => 'Lipid oxidation', 'correct_answer' => true]
                ]],
        ['id' => '671cf427-09f3-570a-a0f3-e284bb6b43cd', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which chemical reaction between amino acids and reducing sugars creates browning and complex flavors during cooking?', 'difficulty' => 5, 'weight' => 889, 'alternatives' => [
                    ['id' => '17c849e8-813d-512a-95f9-6c0ecf06d82c', 'description' => 'Emulsion inversion', 'correct_answer' => false],
                    ['id' => 'e9bc54cf-35d5-577d-86ce-46db652e733c', 'description' => 'Enzymatic browning', 'correct_answer' => false],
                    ['id' => 'fe77aa70-44be-546a-9d52-3b2731a671e6', 'description' => 'The Maillard reaction', 'correct_answer' => true],
                    ['id' => 'e77cf6f6-f68e-5915-995a-cd8801fd2951', 'description' => 'Denaturation', 'correct_answer' => false],
                    ['id' => '11c0892d-39aa-589e-8e81-109163b3d876', 'description' => 'Retrogradation', 'correct_answer' => false]
                ]],
        ['id' => 'bb861080-38b6-567a-a60d-bc0d06fe183a', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which phenomenon describes a gel expelling liquid, as can occur in custards or yogurt?', 'difficulty' => 5, 'weight' => 1000, 'alternatives' => [
                    ['id' => '5467a3c6-a0ac-54e9-885b-c2d628f299dc', 'description' => 'Gelatinization', 'correct_answer' => false],
                    ['id' => '69f1636f-b1e1-5534-9bc7-fad11ebe1e12', 'description' => 'Enzymatic browning', 'correct_answer' => false],
                    ['id' => 'bb8f64a8-9bc0-5043-a9da-44db6d6bfe20', 'description' => 'Denaturation', 'correct_answer' => false],
                    ['id' => 'd4843510-1031-503a-9394-159f548a0451', 'description' => 'Syneresis', 'correct_answer' => true],
                    ['id' => 'eec560f6-08c8-5d47-827b-f87a6a293cc3', 'description' => 'Retrogradation', 'correct_answer' => false]
                ]],
        ['id' => 'e94d6d0f-66e8-5ea4-8c87-0bc4156bceed', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which process causes cooked starch molecules to reassociate as food cools, contributing to bread staling?', 'difficulty' => 5, 'weight' => 998, 'alternatives' => [
                    ['id' => 'c28021b1-0fe3-52d3-a26c-ff68bac8bc05', 'description' => 'Caramelization', 'correct_answer' => false],
                    ['id' => 'adb49ecc-6245-5fcd-be24-9d8f0b08983b', 'description' => 'The Maillard reaction', 'correct_answer' => false],
                    ['id' => '3a7ab7b3-f61a-5813-b888-df327d24cf83', 'description' => 'Gelatinization', 'correct_answer' => false],
                    ['id' => '3971fe11-ebce-5451-9dd4-4c053c4fcabc', 'description' => 'Starch dextrinization', 'correct_answer' => false],
                    ['id' => 'a9f79ac0-37f0-5079-8d04-ebeccc956bb1', 'description' => 'Retrogradation', 'correct_answer' => true]
                ]],
        ['id' => '9e80dc2f-fce9-576c-8ee8-e63ffe35280d', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'What process occurs when an emulsion changes from oil-in-water to water-in-oil or vice versa?', 'difficulty' => 5, 'weight' => 873, 'alternatives' => [
                    ['id' => 'a914730a-141e-5eba-97ed-1dbaedff2445', 'description' => 'Gelatinization', 'correct_answer' => false],
                    ['id' => '6269bfea-2b43-5b3b-9c85-cc291c2716c3', 'description' => 'Enzymatic browning', 'correct_answer' => false],
                    ['id' => '323a9136-2bd7-5539-95d4-1d24b12c274e', 'description' => 'Denaturation', 'correct_answer' => false],
                    ['id' => 'f05733ce-1b82-56a6-8a92-9f7a17d7cb13', 'description' => 'The Maillard reaction', 'correct_answer' => false],
                    ['id' => '1a6bac1d-e47b-5923-b186-303bac164066', 'description' => 'Emulsion inversion', 'correct_answer' => true]
                ]],
        ['id' => '4fe1f160-e704-5fb4-8d08-60bc15ea3d61', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which reaction causes cut apples and other produce to darken through polyphenol oxidase activity?', 'difficulty' => 5, 'weight' => 978, 'alternatives' => [
                    ['id' => 'e02b4d47-49fd-5f6f-8152-55e042e5093c', 'description' => 'Enzymatic browning', 'correct_answer' => true],
                    ['id' => 'dacba796-c9b1-5448-b31f-392550efb326', 'description' => 'Starch dextrinization', 'correct_answer' => false],
                    ['id' => '43edc533-45d5-5c0b-818c-472c3af38f58', 'description' => 'Emulsion inversion', 'correct_answer' => false],
                    ['id' => 'ebc0b24a-484b-5889-9535-0464abd2bf19', 'description' => 'Syneresis', 'correct_answer' => false],
                    ['id' => '6de38eaa-cfcf-5150-bb15-d8a3f83563cf', 'description' => 'Retrogradation', 'correct_answer' => false]
                ]],
        ['id' => '234499ec-52ca-5837-9a69-122b517cae05', 'locale' => 'en-US', 'category' => '2825d945-2ce4-51fd-bb78-467eef1342e8', 'question' => 'Which heat-driven process breaks starch into shorter dextrins, often contributing to toasted flavors?', 'difficulty' => 5, 'weight' => 885, 'alternatives' => [
                    ['id' => '2931e2b7-dd9c-59e5-ba85-6fc4fda78d2f', 'description' => 'The Maillard reaction', 'correct_answer' => false],
                    ['id' => '6c2a1e59-df2a-5f03-95ca-1bf1c70c8c7e', 'description' => 'Syneresis', 'correct_answer' => false],
                    ['id' => 'afd4d9c3-80da-5dcf-8fa8-783dd53606b7', 'description' => 'Enzymatic browning', 'correct_answer' => false],
                    ['id' => '8ad693fc-4e0d-53ef-836f-90f3136ece31', 'description' => 'Denaturation', 'correct_answer' => false],
                    ['id' => 'bcd9b1dc-f50d-52de-9599-cb1d4edbb4ed', 'description' => 'Starch dextrinization', 'correct_answer' => true]
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
