<?php

namespace Database\Seeders\Trivia;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TriviaEnUsMusicSeeder extends Seeder
{
    private const CATEGORY = ['id' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'created_by' => 'SYSTEM', 'short_description' => 'music', 'description' => 'Music'];

    private const QUESTIONS = [
        ['id' => '2428c045-25a3-58eb-b96c-7a5ee6e76d0d', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which band released \'Radioactive\' and \'Believer\'?', 'difficulty' => 1, 'weight' => 137, 'alternatives' => [
                    ['id' => 'c69ff965-b5e4-5186-b479-93a186159412', 'description' => 'Queen', 'correct_answer' => false],
                    ['id' => '98780a28-f639-55f0-b2a2-783c148e55d9', 'description' => 'ABBA', 'correct_answer' => false],
                    ['id' => 'fd572f97-ee5a-5d16-afff-467983440466', 'description' => 'Imagine Dragons', 'correct_answer' => true],
                    ['id' => '2fa403fe-3318-5f95-a52c-61148ab41889', 'description' => 'U2', 'correct_answer' => false],
                    ['id' => '65b99f46-f67a-51b8-9b99-aad259acf0de', 'description' => 'The Beatles', 'correct_answer' => false]
                ]],
        ['id' => 'c0c2f649-deaa-5aff-9357-ed45314959fb', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which band released \'This Love\' and \'She Will Be Loved\'?', 'difficulty' => 1, 'weight' => 132, 'alternatives' => [
                    ['id' => '68c674f8-9e74-572b-8cb7-60e332665a5f', 'description' => 'Nirvana', 'correct_answer' => false],
                    ['id' => '6fe50a6a-6cb2-54b2-85d2-15bb1152a8ef', 'description' => 'Queen', 'correct_answer' => false],
                    ['id' => '5e23d6a9-e877-5b39-b5c1-3789cf5d9b57', 'description' => 'Coldplay', 'correct_answer' => false],
                    ['id' => '7535f719-a27d-5ef0-9298-03a554e65ec9', 'description' => 'Maroon 5', 'correct_answer' => true],
                    ['id' => '86dc3322-f8f7-56a5-ad79-6a6d3b56241e', 'description' => 'Imagine Dragons', 'correct_answer' => false]
                ]],
        ['id' => 'b81e61ad-5876-5059-9ba5-d653b24af9ea', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which band released \'Yellow\' and \'Viva la Vida\'?', 'difficulty' => 1, 'weight' => 154, 'alternatives' => [
                    ['id' => '497af08f-d415-5897-a467-ec24eb5a88dc', 'description' => 'Queen', 'correct_answer' => false],
                    ['id' => '323d328a-0c01-5093-aad2-b0ed3ecac733', 'description' => 'Maroon 5', 'correct_answer' => false],
                    ['id' => 'd8f0b59d-adb2-5b90-9821-21985e4a535c', 'description' => 'U2', 'correct_answer' => false],
                    ['id' => 'af142b17-dd08-5bf8-8887-7af22999a9b9', 'description' => 'Coldplay', 'correct_answer' => true],
                    ['id' => 'fa98f51e-ed64-5e66-901f-c07a9c606ad8', 'description' => 'Imagine Dragons', 'correct_answer' => false]
                ]],
        ['id' => 'ccba5727-57fb-55f6-9a2a-bd1075fc826d', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Swedish group is known for \'Dancing Queen\' and \'Mamma Mia\'?', 'difficulty' => 1, 'weight' => 105, 'alternatives' => [
                    ['id' => 'fea71c75-fd43-5059-b2f9-3cb281007347', 'description' => 'ABBA', 'correct_answer' => true],
                    ['id' => '8583872a-3624-5084-838e-2ae56176554b', 'description' => 'Queen', 'correct_answer' => false],
                    ['id' => '0e9bf66f-d628-5f1f-b145-7a0e96ed7ddc', 'description' => 'Nirvana', 'correct_answer' => false],
                    ['id' => '821ceb62-8f10-5629-a6ac-b5692546f1c4', 'description' => 'Imagine Dragons', 'correct_answer' => false],
                    ['id' => '2fab48ec-8e0d-5c5f-893a-72b6bdf04060', 'description' => 'The Beatles', 'correct_answer' => false]
                ]],
        ['id' => '64ed171a-dc44-54f0-ae29-c60e09ac3099', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Irish rock band has Bono as its lead singer?', 'difficulty' => 1, 'weight' => 199, 'alternatives' => [
                    ['id' => '1701edd9-86a9-5d40-b072-52f9dcaed86f', 'description' => 'Guns N\' Roses', 'correct_answer' => false],
                    ['id' => 'c79120be-97ad-555d-a318-eacdb89d4b6e', 'description' => 'U2', 'correct_answer' => true],
                    ['id' => '85859640-0e7d-5957-901c-08ec3805165a', 'description' => 'Coldplay', 'correct_answer' => false],
                    ['id' => '7b5512a7-f3be-5274-9e5d-e1456f9e5298', 'description' => 'Metallica', 'correct_answer' => false],
                    ['id' => 'c59c013d-7e1b-5d41-a62a-391f8b086b47', 'description' => 'ABBA', 'correct_answer' => false]
                ]],
        ['id' => '8d018000-b82e-5650-85cf-7da7537b5302', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which heavy metal band released Master of Puppets?', 'difficulty' => 1, 'weight' => 116, 'alternatives' => [
                    ['id' => '939a753f-c596-5c97-aba9-dd30ee29c9af', 'description' => 'The Beatles', 'correct_answer' => false],
                    ['id' => 'd181ba2b-ef55-51dc-8a87-7ca56e603211', 'description' => 'Nirvana', 'correct_answer' => false],
                    ['id' => '24ed2bf4-7a9b-5fa6-ba1c-2343ce88c241', 'description' => 'U2', 'correct_answer' => false],
                    ['id' => '3d8c8b93-c307-5fb5-ab57-710a3445882e', 'description' => 'Guns N\' Roses', 'correct_answer' => false],
                    ['id' => 'fcbb2fe2-8886-5f78-bb75-c51a4a8ab368', 'description' => 'Metallica', 'correct_answer' => true]
                ]],
        ['id' => '260a3696-403e-5c94-a91c-11f3e1ad6ff4', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which band released the album Abbey Road?', 'difficulty' => 1, 'weight' => 140, 'alternatives' => [
                    ['id' => '62509833-95da-513c-9ac7-53a57c16a343', 'description' => 'Guns N\' Roses', 'correct_answer' => false],
                    ['id' => '65bf11c1-544d-5aa5-9ebc-b254c9a18f54', 'description' => 'Queen', 'correct_answer' => false],
                    ['id' => 'c9217027-9f4f-5ea4-bf94-ed9d5a6f91bb', 'description' => 'The Beatles', 'correct_answer' => true],
                    ['id' => '89614516-f404-5238-bdb2-0b2b29e305f8', 'description' => 'ABBA', 'correct_answer' => false],
                    ['id' => '6c53ac6a-ad1a-5cc1-9efa-20bbed28d226', 'description' => 'Nirvana', 'correct_answer' => false]
                ]],
        ['id' => '748a2867-a060-578b-9c5b-d67625c12159', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which band released \'Sweet Child o\' Mine\' and \'Welcome to the Jungle\'?', 'difficulty' => 1, 'weight' => 102, 'alternatives' => [
                    ['id' => 'c8f7a6c3-e15d-554d-a2d3-47e1dc16f702', 'description' => 'Metallica', 'correct_answer' => false],
                    ['id' => 'ad1bb14b-00f1-5b23-973c-a33a8f60f0a6', 'description' => 'Coldplay', 'correct_answer' => false],
                    ['id' => '21f6a0cc-9752-55c2-940b-645d505c714b', 'description' => 'Guns N\' Roses', 'correct_answer' => true],
                    ['id' => '46677d3c-b939-58ed-8f78-960876e41c5d', 'description' => 'The Beatles', 'correct_answer' => false],
                    ['id' => '8b50f3df-0efe-565b-9374-1456f925c7d7', 'description' => 'ABBA', 'correct_answer' => false]
                ]],
        ['id' => '0269574d-6654-5952-a784-98c4c3333090', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which British singer and pianist released \'Rocket Man\' and \'Your Song\'?', 'difficulty' => 1, 'weight' => 120, 'alternatives' => [
                    ['id' => '3f7b3b06-a863-5b6a-9b8f-6a3587a64e4f', 'description' => 'Whitney Houston', 'correct_answer' => false],
                    ['id' => '8260cea5-5cde-544c-8bf3-c0ff481614ee', 'description' => 'Elton John', 'correct_answer' => true],
                    ['id' => '734218e9-50d1-58af-a6a7-82400fe6d827', 'description' => 'Phil Collins', 'correct_answer' => false],
                    ['id' => 'cf77562f-2175-5378-bb09-c1ab7a933421', 'description' => 'Madonna', 'correct_answer' => false],
                    ['id' => '8fd7e307-8d4f-5c66-8e3b-efe9a083277d', 'description' => 'Freddie Mercury', 'correct_answer' => false]
                ]],
        ['id' => '7ca43098-35d5-52ce-ae7b-2f9d96e5f486', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which singer recorded the famous \'I Will Always Love You\' for The Bodyguard?', 'difficulty' => 1, 'weight' => 165, 'alternatives' => [
                    ['id' => '6ce675a3-037f-5c15-b85a-acacc6574118', 'description' => 'Michael Jackson', 'correct_answer' => false],
                    ['id' => 'af0c4214-6451-5c12-9f20-f09b0148322d', 'description' => 'Stevie Wonder', 'correct_answer' => false],
                    ['id' => 'f37d2cd5-5d3f-50ef-9bbc-ec179d30d6a6', 'description' => 'Whitney Houston', 'correct_answer' => true],
                    ['id' => '704cdc1d-371e-5072-9569-bbebcc852b60', 'description' => 'Phil Collins', 'correct_answer' => false],
                    ['id' => 'a2ffb51d-4b2b-5e72-b9d1-432137b75e7c', 'description' => 'Freddie Mercury', 'correct_answer' => false]
                ]],
        ['id' => 'e4e51302-e799-59d3-92a9-1e5c57afce1d', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Queen singer released the solo hit \'Living on My Own\'?', 'difficulty' => 1, 'weight' => 142, 'alternatives' => [
                    ['id' => 'f55be8aa-e2de-59c3-8bce-f78f9240a68b', 'description' => 'Madonna', 'correct_answer' => false],
                    ['id' => '83ff4bd3-43e8-571a-94c5-7a02699bd133', 'description' => 'Freddie Mercury', 'correct_answer' => true],
                    ['id' => 'cee18e45-849b-5e93-a8c2-604384a4d5d1', 'description' => 'Michael Jackson', 'correct_answer' => false],
                    ['id' => '0672742d-a3b2-5915-8982-4f464ff0584d', 'description' => 'David Bowie', 'correct_answer' => false],
                    ['id' => '11c67f5b-c8e9-5f96-8238-df9e50836d41', 'description' => 'Prince', 'correct_answer' => false]
                ]],
        ['id' => '76526c94-6640-53d3-aae5-9aad353a1293', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which singer released Like a Virgin and Ray of Light?', 'difficulty' => 1, 'weight' => 130, 'alternatives' => [
                    ['id' => 'bd70ce82-0570-522a-9fc2-9e555fa48643', 'description' => 'Stevie Wonder', 'correct_answer' => false],
                    ['id' => 'd345a8d6-ccc7-5a5e-a508-a89af7d1b393', 'description' => 'Prince', 'correct_answer' => false],
                    ['id' => '934c3679-81e8-5169-b267-57d0d18e9028', 'description' => 'David Bowie', 'correct_answer' => false],
                    ['id' => '6ff02e57-ed20-5f1c-b834-bcbef4bc99ae', 'description' => 'George Michael', 'correct_answer' => false],
                    ['id' => '0fb852ed-1082-5537-b9a7-3e6b2a31ba82', 'description' => 'Madonna', 'correct_answer' => true]
                ]],
        ['id' => 'f39a53eb-c1b3-5dd0-bb2a-b44fc3b969e1', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which musician released the album and film Purple Rain?', 'difficulty' => 1, 'weight' => 150, 'alternatives' => [
                    ['id' => 'b3d5ad5f-5e4a-591d-a0e9-2a4a86e9b3ea', 'description' => 'Prince', 'correct_answer' => true],
                    ['id' => 'db13878f-fc42-53a5-8978-3f09b2c4ec03', 'description' => 'George Michael', 'correct_answer' => false],
                    ['id' => '8f3fe28e-5ed0-55a0-863b-2af848d5dd9c', 'description' => 'Stevie Wonder', 'correct_answer' => false],
                    ['id' => '8d0688aa-7c1b-521d-b79f-72c2b5fcc9c8', 'description' => 'Whitney Houston', 'correct_answer' => false],
                    ['id' => 'e35e5d6f-2acf-59bf-bb54-d6f0f5345a8c', 'description' => 'David Bowie', 'correct_answer' => false]
                ]],
        ['id' => '52398ebd-82fa-565a-bd76-18539f620a98', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which artist is known as the King of Pop and released Thriller?', 'difficulty' => 1, 'weight' => 114, 'alternatives' => [
                    ['id' => '97ce3fa9-145c-5054-8048-3158169f6f3c', 'description' => 'Whitney Houston', 'correct_answer' => false],
                    ['id' => '795a5a85-9fdd-5bde-a345-ec4be9cc3e9a', 'description' => 'Stevie Wonder', 'correct_answer' => false],
                    ['id' => '5708a4a1-afdf-53be-b5ba-d796c10a4459', 'description' => 'Michael Jackson', 'correct_answer' => true],
                    ['id' => '3d201aaa-abc1-5529-adda-eefdc66a915e', 'description' => 'Madonna', 'correct_answer' => false],
                    ['id' => 'b1d8c2d6-2650-56c0-be02-f24acf1d49eb', 'description' => 'Prince', 'correct_answer' => false]
                ]],
        ['id' => '29bff169-66a3-559b-b78b-b377b8162a76', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which musician released \'Superstition\' and \'Isn\'t She Lovely\'?', 'difficulty' => 1, 'weight' => 200, 'alternatives' => [
                    ['id' => '72eb90cb-515c-5042-ba07-ee4bfdeb2a89', 'description' => 'Michael Jackson', 'correct_answer' => false],
                    ['id' => '584b1009-464c-5b80-9825-e0bee55c03e1', 'description' => 'David Bowie', 'correct_answer' => false],
                    ['id' => 'ebcf4e75-a473-5066-94f1-14d80269a773', 'description' => 'George Michael', 'correct_answer' => false],
                    ['id' => '76810ed9-9c6f-50bc-98bb-4febd52aac57', 'description' => 'Whitney Houston', 'correct_answer' => false],
                    ['id' => '39f8cde5-f28c-5061-9035-c9bffc4cde82', 'description' => 'Stevie Wonder', 'correct_answer' => true]
                ]],
        ['id' => 'ecd83ab2-128b-57ad-b951-cd9681655eda', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which musician released \'In the Air Tonight\' and sang with Genesis?', 'difficulty' => 1, 'weight' => 187, 'alternatives' => [
                    ['id' => 'be48bf18-08a2-573f-b51f-0358f2e99c29', 'description' => 'Madonna', 'correct_answer' => false],
                    ['id' => 'd3705074-ea3b-5785-8709-e70dcb86c7db', 'description' => 'George Michael', 'correct_answer' => false],
                    ['id' => '22fc1adf-6c00-5f7b-bce1-eaec205aaa68', 'description' => 'Michael Jackson', 'correct_answer' => false],
                    ['id' => '586e765f-e4e0-568d-8cb7-267b73b660f1', 'description' => 'Stevie Wonder', 'correct_answer' => false],
                    ['id' => '332d652a-2223-5a89-bcdd-268483a6fac2', 'description' => 'Phil Collins', 'correct_answer' => true]
                ]],
        ['id' => '2e3d62f7-e196-5b77-bcc8-9ae974dcaa07', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which singer released 1989 and Folklore?', 'difficulty' => 1, 'weight' => 120, 'alternatives' => [
                    ['id' => 'fc724ead-4aa3-530a-b7a4-87a5076fae04', 'description' => 'Katy Perry', 'correct_answer' => false],
                    ['id' => '6c652ae3-4ab9-571c-9ed9-cd0e8e288646', 'description' => 'Justin Bieber', 'correct_answer' => false],
                    ['id' => '3a4932d2-f2c4-5fcb-9730-b7f52972c484', 'description' => 'Beyoncé', 'correct_answer' => false],
                    ['id' => '88a878bb-17ff-5df8-9da6-d406aa9e3998', 'description' => 'Adele', 'correct_answer' => false],
                    ['id' => 'b810bc15-cf6c-5098-a06a-f4c2448177fe', 'description' => 'Taylor Swift', 'correct_answer' => true]
                ]],
        ['id' => 'b54fd463-bbb8-5946-a030-ee423a20c64d', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which singer released \'Umbrella\' and \'Diamonds\'?', 'difficulty' => 1, 'weight' => 109, 'alternatives' => [
                    ['id' => '6021f333-cd45-5dd0-95a8-0aebf235f526', 'description' => 'Bruno Mars', 'correct_answer' => false],
                    ['id' => 'a22a98eb-de1f-56c9-90b5-c2ec60823cc1', 'description' => 'Justin Bieber', 'correct_answer' => false],
                    ['id' => 'eb893d50-2451-5a29-864b-af0810fe02c0', 'description' => 'Rihanna', 'correct_answer' => true],
                    ['id' => 'dd683f18-bc7b-507c-bfc2-28be3bb41843', 'description' => 'Beyoncé', 'correct_answer' => false],
                    ['id' => 'f89005c5-020f-5258-a311-814461373287', 'description' => 'Taylor Swift', 'correct_answer' => false]
                ]],
        ['id' => '8c590f13-534f-5ef0-b24b-c37d052ca6ab', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which artist released \'Bad Romance\' and played Ally in A Star Is Born?', 'difficulty' => 1, 'weight' => 171, 'alternatives' => [
                    ['id' => 'c5f80fa7-02d8-54b5-b1fc-a49bc1fafbb3', 'description' => 'Adele', 'correct_answer' => false],
                    ['id' => '86b58c9a-0437-52f8-bb44-2cb562699521', 'description' => 'Bruno Mars', 'correct_answer' => false],
                    ['id' => '4c2416d9-2f36-546a-93d6-a35578c43a4a', 'description' => 'Rihanna', 'correct_answer' => false],
                    ['id' => 'c73be9fc-44c0-59eb-8327-41c4a21fcc33', 'description' => 'Ed Sheeran', 'correct_answer' => false],
                    ['id' => 'dadd9fc7-3337-50f5-9e9e-18e592f97e9f', 'description' => 'Lady Gaga', 'correct_answer' => true]
                ]],
        ['id' => '73447b5a-67af-593b-9714-9cd6241b981a', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which singer-songwriter released \'Shape of You\' and \'Thinking Out Loud\'?', 'difficulty' => 1, 'weight' => 107, 'alternatives' => [
                    ['id' => 'e74d133d-bfb5-5b7b-9ee8-8d1cede72d09', 'description' => 'Lady Gaga', 'correct_answer' => false],
                    ['id' => '2bf9c1d2-2009-5696-b083-0da31f789eed', 'description' => 'Beyoncé', 'correct_answer' => false],
                    ['id' => '819e239c-aa62-5316-a3fe-fb805a5863a9', 'description' => 'Shakira', 'correct_answer' => false],
                    ['id' => '0113309a-f282-5788-ba04-481f00a457b2', 'description' => 'Rihanna', 'correct_answer' => false],
                    ['id' => '0793d933-e48a-50f3-8fbc-45d63014c6a5', 'description' => 'Ed Sheeran', 'correct_answer' => true]
                ]],
        ['id' => 'c2864d6f-0c48-58e3-aa90-aff219aa51ad', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which singer released \'Just the Way You Are\' and \'Uptown Funk\' with Mark Ronson?', 'difficulty' => 1, 'weight' => 108, 'alternatives' => [
                    ['id' => '1cfd23ca-c93d-5a97-9798-6182c7f521b1', 'description' => 'Bruno Mars', 'correct_answer' => true],
                    ['id' => '5eb34f09-60eb-511d-887c-a18aaab913fa', 'description' => 'Ed Sheeran', 'correct_answer' => false],
                    ['id' => '8b3f4924-9fe3-5471-9085-ea74490822a0', 'description' => 'Justin Bieber', 'correct_answer' => false],
                    ['id' => 'a1784883-a53c-5710-b70c-9071e4f54abb', 'description' => 'Shakira', 'correct_answer' => false],
                    ['id' => 'f4f9a66a-da7b-5ba7-8aac-857fbacff985', 'description' => 'Taylor Swift', 'correct_answer' => false]
                ]],
        ['id' => 'd0fd8bda-006a-5ee9-8930-bdcd7f90436b', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Colombian singer released \'Hips Don\'t Lie\' and \'Whenever, Wherever\'?', 'difficulty' => 1, 'weight' => 191, 'alternatives' => [
                    ['id' => '42df0b69-142c-551b-a10c-1fc685c72783', 'description' => 'Ed Sheeran', 'correct_answer' => false],
                    ['id' => 'b6646e87-06b5-532e-ad46-ec42a4dcd636', 'description' => 'Adele', 'correct_answer' => false],
                    ['id' => 'a1250518-f82f-5048-a001-518dc7935977', 'description' => 'Shakira', 'correct_answer' => true],
                    ['id' => '87f66047-6a54-5bc1-b7f1-68d7252a30af', 'description' => 'Rihanna', 'correct_answer' => false],
                    ['id' => 'eadf21e5-9aef-53b2-acc7-6aac4d381cd2', 'description' => 'Katy Perry', 'correct_answer' => false]
                ]],
        ['id' => '5b32ac8a-276c-5f0a-aa7d-82140e209e56', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which British singer released the albums 21 and 25?', 'difficulty' => 1, 'weight' => 194, 'alternatives' => [
                    ['id' => '514d67cc-6463-5d06-920f-82b2f82412aa', 'description' => 'Ed Sheeran', 'correct_answer' => false],
                    ['id' => '66afabff-1dce-5123-a42b-bdd34f65eeb7', 'description' => 'Taylor Swift', 'correct_answer' => false],
                    ['id' => 'b3ea54b8-45f2-5fc9-878e-24c4dd769157', 'description' => 'Adele', 'correct_answer' => true],
                    ['id' => '33dcf4ec-0b3e-54ed-8ebd-e68bff5f60b5', 'description' => 'Beyoncé', 'correct_answer' => false],
                    ['id' => '9dcc3eaf-f636-5fc4-b616-5232fad0251a', 'description' => 'Justin Bieber', 'correct_answer' => false]
                ]],
        ['id' => '3a53c7ce-f36c-55be-b39b-e49317863081', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which artist released the visual album Lemonade?', 'difficulty' => 1, 'weight' => 111, 'alternatives' => [
                    ['id' => '2c5e0780-f7c0-54f5-94e7-2ff17fe5ffb4', 'description' => 'Adele', 'correct_answer' => false],
                    ['id' => '5d52d0a1-5346-5d3a-aac0-18c840c601ef', 'description' => 'Justin Bieber', 'correct_answer' => false],
                    ['id' => '2e40c93a-1611-5789-868b-dff59bf74e4d', 'description' => 'Rihanna', 'correct_answer' => false],
                    ['id' => '049982ca-389a-5c13-903c-012698e67bef', 'description' => 'Beyoncé', 'correct_answer' => true],
                    ['id' => '97f47ca7-de8c-5666-b837-d8d5044209ed', 'description' => 'Taylor Swift', 'correct_answer' => false]
                ]],
        ['id' => '9103c44e-7109-564b-b4ff-70717396f35d', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which British rock trio featured Sting as its lead singer?', 'difficulty' => 1, 'weight' => 162, 'alternatives' => [
                    ['id' => 'f5e66d03-bd45-549c-bb40-2aeefc519248', 'description' => 'The Who', 'correct_answer' => false],
                    ['id' => 'c073166e-3409-5af3-b58b-6abd8d5ee7d6', 'description' => 'The Kinks', 'correct_answer' => false],
                    ['id' => '269aface-7369-59b7-bb0f-5793a2cacb2c', 'description' => 'The Police', 'correct_answer' => true],
                    ['id' => 'bf121099-ed53-52e4-bb08-7f1faa8b94cb', 'description' => 'The Beach Boys', 'correct_answer' => false],
                    ['id' => '29201387-af9b-562d-8c10-d5008db81b06', 'description' => 'The Doors', 'correct_answer' => false]
                ]],
        ['id' => '2cf16102-48aa-5488-97f2-7047864ef38e', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which band released Rumours and \'Go Your Own Way\'?', 'difficulty' => 1, 'weight' => 161, 'alternatives' => [
                    ['id' => '4516d10f-947c-5856-b5ff-54e982e70830', 'description' => 'The Police', 'correct_answer' => false],
                    ['id' => 'f96f1733-6667-5bfc-8df2-427b78a52c0b', 'description' => 'The Doors', 'correct_answer' => false],
                    ['id' => 'ef6ce06b-1d13-5647-bad9-42540e04c121', 'description' => 'Led Zeppelin', 'correct_answer' => false],
                    ['id' => 'ab780692-ba78-5e79-94b8-c1066569c9c8', 'description' => 'The Who', 'correct_answer' => false],
                    ['id' => 'e0445efe-da41-563f-b8a4-83533240848e', 'description' => 'Fleetwood Mac', 'correct_answer' => true]
                ]],
        ['id' => 'df5f810c-a947-5682-958c-10f6a171d95e', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which American band released Pet Sounds and \'Good Vibrations\'?', 'difficulty' => 1, 'weight' => 183, 'alternatives' => [
                    ['id' => 'c2fa3f29-0034-5746-9e62-18404ef7fe3b', 'description' => 'Fleetwood Mac', 'correct_answer' => false],
                    ['id' => '753ccfac-a4a8-54bd-af7b-8e9c7e4acc02', 'description' => 'The Beach Boys', 'correct_answer' => true],
                    ['id' => 'e76a0e29-3958-55b5-8564-d0934582f28f', 'description' => 'The Who', 'correct_answer' => false],
                    ['id' => '69d70691-de33-5aff-b84c-edc0ef6cc595', 'description' => 'The Doors', 'correct_answer' => false],
                    ['id' => '6b771d8e-be69-5381-9d53-38c443833623', 'description' => 'The Kinks', 'correct_answer' => false]
                ]],
        ['id' => 'adcc3f8e-2e3c-506d-b2d2-2c27b9e996a7', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which British rock band released Tommy and Who\'s Next?', 'difficulty' => 1, 'weight' => 149, 'alternatives' => [
                    ['id' => '12f5d1ca-f68a-5200-afd1-3c76046178ac', 'description' => 'The Doors', 'correct_answer' => false],
                    ['id' => 'b9254493-84fd-599c-b8d1-f391366b58ae', 'description' => 'The Police', 'correct_answer' => false],
                    ['id' => '145edcce-920d-5d68-a2f2-18fa28fbcbb7', 'description' => 'The Beach Boys', 'correct_answer' => false],
                    ['id' => '5498959c-b623-56cd-8215-21e964a5593b', 'description' => 'The Clash', 'correct_answer' => false],
                    ['id' => 'ac04b2f6-58d4-5153-8259-db32f994e0eb', 'description' => 'The Who', 'correct_answer' => true]
                ]],
        ['id' => '59cb0d95-3bf5-52a7-a94b-89239d675980', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which rock band released \'Stairway to Heaven\' and \'Kashmir\'?', 'difficulty' => 1, 'weight' => 102, 'alternatives' => [
                    ['id' => 'a6354000-0b5e-5f2b-969f-ad39e86b0ddc', 'description' => 'The Who', 'correct_answer' => false],
                    ['id' => '55d0580b-a7c5-507c-aac9-a20bedd675e1', 'description' => 'The Kinks', 'correct_answer' => false],
                    ['id' => '79f10c16-14f0-5181-92ff-44e402013571', 'description' => 'The Police', 'correct_answer' => false],
                    ['id' => '0ed98572-1db0-5930-a96c-1728b658b37c', 'description' => 'Led Zeppelin', 'correct_answer' => true],
                    ['id' => 'a8157b93-324f-5496-a47b-8c514aa17410', 'description' => 'The Clash', 'correct_answer' => false]
                ]],
        ['id' => '4e823ff4-1e31-54dd-9af6-68d4b4391d49', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which British band released \'You Really Got Me\' and \'Waterloo Sunset\'?', 'difficulty' => 1, 'weight' => 101, 'alternatives' => [
                    ['id' => '83296335-4869-58d8-9f0c-8ace32d82b73', 'description' => 'The Beach Boys', 'correct_answer' => false],
                    ['id' => 'b5090d81-5e70-5c13-8373-d0827c13a5df', 'description' => 'The Police', 'correct_answer' => false],
                    ['id' => '9cb6ec44-68b3-5e3c-ac54-d0fc9f1b4627', 'description' => 'The Kinks', 'correct_answer' => true],
                    ['id' => 'fe55cd88-dd34-57d4-98fe-b7f176699c51', 'description' => 'The Doors', 'correct_answer' => false],
                    ['id' => '56e1ac3b-f5e2-543e-9686-f8ead2fe63fb', 'description' => 'The Clash', 'correct_answer' => false]
                ]],
        ['id' => '76b98c67-0225-5416-ad0a-d2959217e70c', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which British rock band released \'(I Can\'t Get No) Satisfaction\'?', 'difficulty' => 1, 'weight' => 182, 'alternatives' => [
                    ['id' => '77b2ff27-1354-5c64-ba79-873b30a5b321', 'description' => 'The Rolling Stones', 'correct_answer' => true],
                    ['id' => '5855073a-6631-5c89-a70d-f34516c4a5f6', 'description' => 'Fleetwood Mac', 'correct_answer' => false],
                    ['id' => '047f0a8c-9690-5076-9bff-ec3435ad1514', 'description' => 'The Kinks', 'correct_answer' => false],
                    ['id' => '527bf1cb-5af7-5903-8a92-ec74e235b13a', 'description' => 'The Beach Boys', 'correct_answer' => false],
                    ['id' => '9d6388d0-213d-5eb6-99c2-0e9487f337c8', 'description' => 'Pink Floyd', 'correct_answer' => false]
                ]],
        ['id' => '2128815f-a824-5dc8-9019-86edfdf00aa4', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which band released The Dark Side of the Moon and The Wall?', 'difficulty' => 1, 'weight' => 135, 'alternatives' => [
                    ['id' => '33bfcd00-6151-52dd-b176-c6058fcb8b4b', 'description' => 'Pink Floyd', 'correct_answer' => true],
                    ['id' => 'd3c7f9e9-9e36-5546-8bf8-e8b132731f02', 'description' => 'The Beach Boys', 'correct_answer' => false],
                    ['id' => '34d6a651-241d-5503-aff2-95d5939651c0', 'description' => 'The Kinks', 'correct_answer' => false],
                    ['id' => '3beafe00-894b-5f30-824f-9afc0b82ab10', 'description' => 'The Doors', 'correct_answer' => false],
                    ['id' => 'dfa0184d-4cc9-5f26-8c0f-ae9febb2e71c', 'description' => 'Fleetwood Mac', 'correct_answer' => false]
                ]],
        ['id' => '997956e6-4429-5ddd-8c58-8d302ee24fe8', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Canadian singer-songwriter released Blue and \'A Case of You\'?', 'difficulty' => 1, 'weight' => 113, 'alternatives' => [
                    ['id' => '1b50d186-1249-54be-9d0d-a2696b14a120', 'description' => 'James Taylor', 'correct_answer' => false],
                    ['id' => 'd31c45f6-bf6b-5162-9a86-3b252dc48a8e', 'description' => 'Joni Mitchell', 'correct_answer' => true],
                    ['id' => '9338e7ae-d25a-50eb-89ed-6040326d63da', 'description' => 'Carole King', 'correct_answer' => false],
                    ['id' => 'fa4cb97e-7509-53ac-bb29-23e577f077cc', 'description' => 'Bob Dylan', 'correct_answer' => false],
                    ['id' => '94339775-aa1a-503f-a1c1-9396de5306e3', 'description' => 'Van Morrison', 'correct_answer' => false]
                ]],
        ['id' => '833bc829-b9a9-543c-bf41-2877c942968f', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which American singer-songwriter is nicknamed The Boss and released Born to Run?', 'difficulty' => 1, 'weight' => 166, 'alternatives' => [
                    ['id' => '96d618ba-8cb2-5a07-b7f6-83b55201e2c8', 'description' => 'Bob Dylan', 'correct_answer' => false],
                    ['id' => 'dd039278-af35-5e08-8d51-9e49eea9429b', 'description' => 'Leonard Cohen', 'correct_answer' => false],
                    ['id' => '1d8f62c7-5aca-5c63-b78b-88098027368d', 'description' => 'Joni Mitchell', 'correct_answer' => false],
                    ['id' => 'a6a85fba-baa0-5d76-b2a1-5467abd1944e', 'description' => 'Van Morrison', 'correct_answer' => false],
                    ['id' => 'edee0064-a336-5174-84cf-8b1099d6c80b', 'description' => 'Bruce Springsteen', 'correct_answer' => true]
                ]],
        ['id' => '3fba3211-9824-593a-8033-21e9a7515c47', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which singer-songwriter wrote and recorded Tapestry?', 'difficulty' => 1, 'weight' => 115, 'alternatives' => [
                    ['id' => '023a7efe-72cb-5606-b1ab-eb0ca1170ec0', 'description' => 'Paul Simon', 'correct_answer' => false],
                    ['id' => 'a16e359c-e08c-557f-9a5e-42cf0727768e', 'description' => 'Neil Young', 'correct_answer' => false],
                    ['id' => '61de240d-4058-5f37-a615-cb1197e98dde', 'description' => 'James Taylor', 'correct_answer' => false],
                    ['id' => '1945d969-df23-5c84-9ba8-e94130f54993', 'description' => 'Joni Mitchell', 'correct_answer' => false],
                    ['id' => 'a9e6e859-d8f4-51ee-9f4b-dc781884aa75', 'description' => 'Carole King', 'correct_answer' => true]
                ]],
        ['id' => '9679ece0-fa37-5663-a59c-277597c9362f', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Canadian musician released \'Heart of Gold\' and played with Crosby, Stills, Nash & Young?', 'difficulty' => 1, 'weight' => 155, 'alternatives' => [
                    ['id' => 'fcf152fd-cb8f-52ec-a2da-da525c71250c', 'description' => 'Neil Young', 'correct_answer' => true],
                    ['id' => '710929c7-1f14-5be4-9776-9d1b9a913d79', 'description' => 'Carole King', 'correct_answer' => false],
                    ['id' => 'e02246db-eae2-56ce-88f3-0f82ab88d777', 'description' => 'Joni Mitchell', 'correct_answer' => false],
                    ['id' => '4f3cde01-944a-5020-93d9-557a39432fa7', 'description' => 'Cat Stevens', 'correct_answer' => false],
                    ['id' => '1d3b9c71-9926-592e-9189-881b9ad5fef3', 'description' => 'Paul Simon', 'correct_answer' => false]
                ]],
        ['id' => '053c4258-2fc7-5453-89a3-1339d5d9f8a9', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Northern Irish singer released \'Brown Eyed Girl\' and Astral Weeks?', 'difficulty' => 1, 'weight' => 111, 'alternatives' => [
                    ['id' => '1ebd2ad1-f479-58a8-90e3-b89c5012ab21', 'description' => 'Leonard Cohen', 'correct_answer' => false],
                    ['id' => 'd83d5e62-cac4-5ae6-a0d1-bc1ad9448efc', 'description' => 'Neil Young', 'correct_answer' => false],
                    ['id' => 'c02bdf81-4bc7-5cce-9150-0b656d6450fd', 'description' => 'Van Morrison', 'correct_answer' => true],
                    ['id' => 'c4056f8a-b16f-5aab-b527-71fe4b6227e3', 'description' => 'James Taylor', 'correct_answer' => false],
                    ['id' => '4dd1f3f0-19ae-5bd8-8f51-35c5baae8423', 'description' => 'Carole King', 'correct_answer' => false]
                ]],
        ['id' => '3598e36f-894e-55f2-972f-3fd05436f225', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which American singer-songwriter released \'Fire and Rain\'?', 'difficulty' => 1, 'weight' => 163, 'alternatives' => [
                    ['id' => 'bbcf1018-96d9-5c9e-99dd-668c5f8df745', 'description' => 'Paul Simon', 'correct_answer' => false],
                    ['id' => '9d7946ca-1250-5133-98d4-865f4e7b946a', 'description' => 'Joni Mitchell', 'correct_answer' => false],
                    ['id' => '012028ec-6cd8-5e8a-b0c1-911818e5efa6', 'description' => 'Van Morrison', 'correct_answer' => false],
                    ['id' => 'f531a1ab-9fd2-5041-8e88-c890ac871c95', 'description' => 'James Taylor', 'correct_answer' => true],
                    ['id' => 'c777f7c1-c7ed-587f-99c8-a663dff4c3df', 'description' => 'Leonard Cohen', 'correct_answer' => false]
                ]],
        ['id' => '02416771-8556-5009-912b-7eb787041ee5', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which singer-songwriter was half of Simon & Garfunkel and released Graceland?', 'difficulty' => 1, 'weight' => 156, 'alternatives' => [
                    ['id' => 'b49a2792-0be2-5837-b804-cd99bc180cc4', 'description' => 'Leonard Cohen', 'correct_answer' => false],
                    ['id' => '01ba8d89-7bb8-5500-8658-f60c3d90c56b', 'description' => 'Bob Dylan', 'correct_answer' => false],
                    ['id' => '2e69966b-b418-59ac-a1d7-d371484eaa83', 'description' => 'Carole King', 'correct_answer' => false],
                    ['id' => '59ec8a1d-e5eb-5cbc-883c-5a8d7db343fa', 'description' => 'Neil Young', 'correct_answer' => false],
                    ['id' => '90025779-55f4-5b58-9a36-3e65c22f7f7d', 'description' => 'Paul Simon', 'correct_answer' => true]
                ]],
        ['id' => 'a81f1194-3d0a-5053-86f6-55d0e2917a4d', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which singer-songwriter later known as Yusuf released \'Father and Son\'?', 'difficulty' => 1, 'weight' => 170, 'alternatives' => [
                    ['id' => 'a4c41e7e-33c6-5b1e-9d63-8e5a1affb59b', 'description' => 'Cat Stevens', 'correct_answer' => true],
                    ['id' => 'fb995df0-48eb-500e-bacc-3aae8e441c55', 'description' => 'Paul Simon', 'correct_answer' => false],
                    ['id' => 'e8bb57f1-77d3-5ea4-93bc-99e961b79d59', 'description' => 'Bruce Springsteen', 'correct_answer' => false],
                    ['id' => '3744eeb6-2c13-5a18-9fca-e05216b2d264', 'description' => 'James Taylor', 'correct_answer' => false],
                    ['id' => 'fd97c49a-2e5c-58d8-a25a-449268b2e8a6', 'description' => 'Bob Dylan', 'correct_answer' => false]
                ]],
        ['id' => '890faea1-b134-5b63-a2b0-7fd4907cbb82', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Radiohead album was initially released using a pay-what-you-want model?', 'difficulty' => 2, 'weight' => 352, 'alternatives' => [
                    ['id' => '22d57a12-e9fd-5517-8fda-d59606d285f7', 'description' => 'Ten', 'correct_answer' => false],
                    ['id' => '586ae39f-1804-58b4-9415-8787ab3867be', 'description' => 'In Rainbows', 'correct_answer' => true],
                    ['id' => '78b7acf5-fd88-5d99-a777-f7e65defe4b2', 'description' => 'Kid A', 'correct_answer' => false],
                    ['id' => '761c834a-d14e-57b8-a866-23209765d619', 'description' => 'Wish You Were Here', 'correct_answer' => false],
                    ['id' => '83021f58-c480-540b-93d5-3f91b7a40424', 'description' => 'Nevermind', 'correct_answer' => false]
                ]],
        ['id' => '874aee6c-7130-5cdc-9063-898f5845d6d3', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Radiohead album includes \'Paranoid Android\' and \'Karma Police\'?', 'difficulty' => 2, 'weight' => 320, 'alternatives' => [
                    ['id' => '5ee41159-83ab-52f8-be2a-80dad9f82790', 'description' => 'The Dark Side of the Moon', 'correct_answer' => false],
                    ['id' => '017bc6ab-f3b1-568f-a707-2845d9e0c5ce', 'description' => 'OK Computer', 'correct_answer' => true],
                    ['id' => 'd8756559-a5fe-54f2-8a81-fe2ef565c470', 'description' => 'Nevermind', 'correct_answer' => false],
                    ['id' => '186290db-bf3f-5679-a57a-5daac84f7982', 'description' => 'The Wall', 'correct_answer' => false],
                    ['id' => 'f02bb3f5-f0ec-55d5-b499-75bd4aaf7961', 'description' => 'Kid A', 'correct_answer' => false]
                ]],
        ['id' => 'd9023360-0f3b-5a88-99ac-e1f353734771', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Pearl Jam debut album includes \'Alive\' and \'Jeremy\'?', 'difficulty' => 2, 'weight' => 269, 'alternatives' => [
                    ['id' => '96aeab57-2416-5ac1-b958-964f88d7da5c', 'description' => 'The Dark Side of the Moon', 'correct_answer' => false],
                    ['id' => 'c2833b82-d45d-5de5-a6d5-f1e36b1253f1', 'description' => 'In Rainbows', 'correct_answer' => false],
                    ['id' => 'b2db581d-f3eb-55b6-b6e3-a5d279913575', 'description' => 'Animals', 'correct_answer' => false],
                    ['id' => 'aef63a8d-f4c4-5481-a590-9d529678200e', 'description' => 'Ten', 'correct_answer' => true],
                    ['id' => '94b36d71-ca19-52b7-af43-2dfee6e24233', 'description' => 'Dirt', 'correct_answer' => false]
                ]],
        ['id' => 'e3289e63-4d0f-52ca-ac92-73828be291b7', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Pink Floyd album organizes its social critique around dogs, pigs, and sheep?', 'difficulty' => 2, 'weight' => 342, 'alternatives' => [
                    ['id' => '542e4d5b-d2c5-517b-ba95-efc3dd783af6', 'description' => 'Wish You Were Here', 'correct_answer' => false],
                    ['id' => '0010cbed-c6f0-51c7-8ada-07274a8af929', 'description' => 'The Dark Side of the Moon', 'correct_answer' => false],
                    ['id' => 'c92a91d1-8d8b-5bf8-b296-6aea668a75c2', 'description' => 'Dirt', 'correct_answer' => false],
                    ['id' => 'b6ec1618-66ee-5709-a135-032238c25ba9', 'description' => 'Animals', 'correct_answer' => true],
                    ['id' => '284bf5a1-4db8-5b8e-9521-7b46d5b10df4', 'description' => 'In Rainbows', 'correct_answer' => false]
                ]],
        ['id' => 'ba6cf835-62c0-5792-933f-00f3e5b5bf70', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Pink Floyd album includes \'Time\', \'Money\', and \'Us and Them\'?', 'difficulty' => 2, 'weight' => 221, 'alternatives' => [
                    ['id' => 'e6acd822-2c26-5f8a-88e7-ae28b51a0184', 'description' => 'Ten', 'correct_answer' => false],
                    ['id' => 'e83bd250-02f4-5e9e-aa3f-2f90fdfed912', 'description' => 'Dirt', 'correct_answer' => false],
                    ['id' => '013ebb8e-f309-57ab-b3a8-6dca444b6387', 'description' => 'Wish You Were Here', 'correct_answer' => false],
                    ['id' => '643c3c5d-b2a4-5e03-acdd-aa02a5b4a497', 'description' => 'The Dark Side of the Moon', 'correct_answer' => true],
                    ['id' => '1de2fa4b-5bd1-51bf-9d01-84f28c96b939', 'description' => 'OK Computer', 'correct_answer' => false]
                ]],
        ['id' => 'eabd9c3b-94eb-5c3c-aa65-837e1886ad66', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Nirvana album includes \'Come as You Are\' and \'Smells Like Teen Spirit\'?', 'difficulty' => 2, 'weight' => 315, 'alternatives' => [
                    ['id' => '490f3e3d-e543-5cb1-9f65-57d353e29b48', 'description' => 'Kid A', 'correct_answer' => false],
                    ['id' => 'e4ad2275-2877-5c44-80c1-04fbc0a23b99', 'description' => 'The Dark Side of the Moon', 'correct_answer' => false],
                    ['id' => 'b030dcc6-8b96-5a8c-8f8d-cb8bab3d2dc9', 'description' => 'The Wall', 'correct_answer' => false],
                    ['id' => '9b76fd52-261a-5fce-af6d-971240e047e6', 'description' => 'In Rainbows', 'correct_answer' => false],
                    ['id' => '1499ba3c-fb47-552b-8f48-aa252a1e42c7', 'description' => 'Nevermind', 'correct_answer' => true]
                ]],
        ['id' => 'ee0c1c7d-4128-52cb-8bbe-88bae0698347', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Pink Floyd concept album tells the story of a character named Pink?', 'difficulty' => 2, 'weight' => 233, 'alternatives' => [
                    ['id' => '6de5ae3e-6f27-55bb-b9e2-129ad927f4ba', 'description' => 'OK Computer', 'correct_answer' => false],
                    ['id' => 'ce5b8c1a-6c9c-5ac5-b23c-fd1ab4748f5f', 'description' => 'Animals', 'correct_answer' => false],
                    ['id' => 'ee024f7c-b3b0-5178-826b-280749fb4b08', 'description' => 'The Wall', 'correct_answer' => true],
                    ['id' => '6a328987-3045-511c-afb0-edc1e47ffa95', 'description' => 'Dirt', 'correct_answer' => false],
                    ['id' => 'e08d6aa6-759c-5d66-b799-eb4fa0927b7f', 'description' => 'Wish You Were Here', 'correct_answer' => false]
                ]],
        ['id' => '3673ee2d-0f29-5073-a094-612c2fc6b90c', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Radiohead album marked an electronic turn after OK Computer?', 'difficulty' => 2, 'weight' => 325, 'alternatives' => [
                    ['id' => '5d107e97-0bcc-5c56-b1a0-cfd2a7f66200', 'description' => 'Ten', 'correct_answer' => false],
                    ['id' => '31679126-860c-535e-8677-50403a42d1e5', 'description' => 'Kid A', 'correct_answer' => true],
                    ['id' => '99ce8b33-daf9-5c58-a9a2-78e386a32760', 'description' => 'In Rainbows', 'correct_answer' => false],
                    ['id' => 'b4c15077-6348-5c16-9102-c926f9cb9b02', 'description' => 'Wish You Were Here', 'correct_answer' => false],
                    ['id' => 'dd385aa6-35c7-58d3-b886-bdb4b56bbebd', 'description' => 'Animals', 'correct_answer' => false]
                ]],
        ['id' => 'f61c6e98-63a8-54dd-8a9d-8ca00e615400', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Stevie Wonder double album includes \'Sir Duke\' and \'Isn\'t She Lovely\'?', 'difficulty' => 2, 'weight' => 250, 'alternatives' => [
                    ['id' => 'e7a2e8a3-40cf-5cdd-a8fd-0edcbf097d29', 'description' => 'Bad', 'correct_answer' => false],
                    ['id' => 'ffaea460-e22b-5aed-9044-702da9fd1107', 'description' => 'Ray of Light', 'correct_answer' => false],
                    ['id' => '2c7949dc-ff2b-5827-a6c7-719f6429bd76', 'description' => 'Purple Rain', 'correct_answer' => false],
                    ['id' => '7998bd13-5ffd-51b2-aa76-2a68299630be', 'description' => 'Off the Wall', 'correct_answer' => false],
                    ['id' => '1dd278ae-3c76-57d0-b1d8-bb52ef6f8471', 'description' => 'Songs in the Key of Life', 'correct_answer' => true]
                ]],
        ['id' => 'cdcd96a1-bc67-5925-aef3-e922ce99c1cd', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Madonna album, partly produced by William Orbit, includes \'Frozen\'?', 'difficulty' => 2, 'weight' => 231, 'alternatives' => [
                    ['id' => '56e4ce31-3c88-5f4c-bc9b-aac3b202ba33', 'description' => 'Sign o\' the Times', 'correct_answer' => false],
                    ['id' => 'ef808305-f57d-588d-b413-9152cc8b151f', 'description' => 'Songs in the Key of Life', 'correct_answer' => false],
                    ['id' => 'e155d782-b61d-55ba-9a58-fd70b06ee269', 'description' => 'Ray of Light', 'correct_answer' => true],
                    ['id' => 'beb69958-a4b3-5fca-affe-b87db9db9f41', 'description' => 'Faith', 'correct_answer' => false],
                    ['id' => '78876374-4c15-5728-bb17-9ab163d984c1', 'description' => 'Like a Prayer', 'correct_answer' => false]
                ]],
        ['id' => 'd98c92d8-0a6c-5ead-87d5-6a6923d81fdf', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Madonna compilation includes \'Vogue\' and \'Like a Prayer\'?', 'difficulty' => 2, 'weight' => 337, 'alternatives' => [
                    ['id' => '8a96cec6-eb78-5f74-ab15-c8c56e33c376', 'description' => 'Off the Wall', 'correct_answer' => false],
                    ['id' => '82ca967a-fb5b-5929-ae74-3d2cd4c195cd', 'description' => 'The Immaculate Collection', 'correct_answer' => true],
                    ['id' => '52bdd3e3-16f8-5986-acf0-190aad73eef0', 'description' => 'Faith', 'correct_answer' => false],
                    ['id' => '930e6950-5387-5ea1-b9b3-60c0cbd3f92c', 'description' => 'Ray of Light', 'correct_answer' => false],
                    ['id' => 'a16e5f96-9243-5239-b7e7-cf86b0777b78', 'description' => 'Sign o\' the Times', 'correct_answer' => false]
                ]],
        ['id' => '08a51903-440e-532c-bfaa-6e5149ae131b', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Michael Jackson album includes \'Smooth Criminal\' and \'Man in the Mirror\'?', 'difficulty' => 2, 'weight' => 271, 'alternatives' => [
                    ['id' => '34d5ea83-9c3e-56b8-92de-a1d442715680', 'description' => 'Bad', 'correct_answer' => true],
                    ['id' => '5d3e2388-4c33-5f65-86b6-36311402d696', 'description' => 'Songs in the Key of Life', 'correct_answer' => false],
                    ['id' => 'd9accfeb-7ed6-5d19-a864-703dc26ec1a5', 'description' => 'The Immaculate Collection', 'correct_answer' => false],
                    ['id' => 'b59cff7d-4d81-583a-9ca3-9eeffe4b09f8', 'description' => 'Purple Rain', 'correct_answer' => false],
                    ['id' => 'e98a00ab-01e8-5664-a561-31643e6df445', 'description' => 'Sign o\' the Times', 'correct_answer' => false]
                ]],
        ['id' => '6a329dd5-46b4-5302-adcd-bbfe354d9dd9', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Michael Jackson album preceded Thriller and includes \'Rock with You\'?', 'difficulty' => 2, 'weight' => 280, 'alternatives' => [
                    ['id' => '3b9815bb-a268-562a-a873-56b2c7f15860', 'description' => 'Sign o\' the Times', 'correct_answer' => false],
                    ['id' => '4fd69b88-b757-524a-9943-6e543fba6ec6', 'description' => 'Thriller', 'correct_answer' => false],
                    ['id' => 'b9eecd53-faf6-5f51-a7b8-95a1f88473e7', 'description' => 'Off the Wall', 'correct_answer' => true],
                    ['id' => '8eb4668a-2c64-5e11-a946-812c0956e5a5', 'description' => 'The Immaculate Collection', 'correct_answer' => false],
                    ['id' => '888b0e95-04ec-5d66-9179-e65364b40e89', 'description' => 'Purple Rain', 'correct_answer' => false]
                ]],
        ['id' => '7f2303bd-9d30-5bed-af73-ab488c7e8bdc', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Prince album accompanies the film of the same name and includes \'When Doves Cry\'?', 'difficulty' => 2, 'weight' => 305, 'alternatives' => [
                    ['id' => '0829f454-6994-59a2-bdaf-e25cedc5a0fa', 'description' => 'Ray of Light', 'correct_answer' => false],
                    ['id' => 'fc69252b-7798-5554-941d-dd779b6b67e6', 'description' => 'Thriller', 'correct_answer' => false],
                    ['id' => '8adba443-f25a-56c9-85ff-4bbd5254cc9f', 'description' => 'Songs in the Key of Life', 'correct_answer' => false],
                    ['id' => '4753ba69-e7ad-51bd-a6e9-4f17f2e84a19', 'description' => 'Purple Rain', 'correct_answer' => true],
                    ['id' => '4139c369-4ee3-5a46-9a9c-91bf5dd800e7', 'description' => 'Like a Prayer', 'correct_answer' => false]
                ]],
        ['id' => 'c28d62ea-ac39-5e71-8206-1c88af3da8ae', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Michael Jackson album contains \'Billie Jean\', \'Beat It\', and its title track?', 'difficulty' => 2, 'weight' => 220, 'alternatives' => [
                    ['id' => '8c1cf2e9-631f-5352-90d5-6f95b16a2532', 'description' => 'Like a Prayer', 'correct_answer' => false],
                    ['id' => 'ef60a193-ef38-55c8-bf2d-cde38fd031c0', 'description' => 'The Immaculate Collection', 'correct_answer' => false],
                    ['id' => '4da2e107-9b09-5932-b585-402bc91f9167', 'description' => 'Bad', 'correct_answer' => false],
                    ['id' => 'fee45ec8-0bd5-5254-a0e9-81c982806034', 'description' => 'Faith', 'correct_answer' => false],
                    ['id' => '0c143fb1-cd73-59e5-8944-1d3183aef3f9', 'description' => 'Thriller', 'correct_answer' => true]
                ]],
        ['id' => 'c1fa039d-0df3-5c9b-bd25-6fbbe1418c77', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Madonna album includes its title track and \'Express Yourself\'?', 'difficulty' => 2, 'weight' => 281, 'alternatives' => [
                    ['id' => 'd975c329-90be-53d8-852e-4a8b8c2d54da', 'description' => 'Off the Wall', 'correct_answer' => false],
                    ['id' => '33abe9e1-fba3-53e9-a90b-36c9aa82fc63', 'description' => 'Thriller', 'correct_answer' => false],
                    ['id' => '117718a1-f9f7-5617-afa3-9886deb7be4c', 'description' => 'Ray of Light', 'correct_answer' => false],
                    ['id' => '13f0c9d9-a6ec-5cbb-becc-61153e477e79', 'description' => 'Like a Prayer', 'correct_answer' => true],
                    ['id' => '7eb95d03-c8c2-585a-9957-30d2ccb15093', 'description' => 'Purple Rain', 'correct_answer' => false]
                ]],
        ['id' => '156b19d5-5a07-5a1a-b6cc-97b2889fad99', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Iron Maiden album includes \'Aces High\' and \'2 Minutes to Midnight\'?', 'difficulty' => 2, 'weight' => 307, 'alternatives' => [
                    ['id' => 'e417f1f4-6deb-5547-adf5-10613ac9ad10', 'description' => 'British Steel', 'correct_answer' => false],
                    ['id' => '33908ff7-36b8-5ca2-a8d5-0a675341f377', 'description' => 'Ride the Lightning', 'correct_answer' => false],
                    ['id' => 'c39ab83d-c84d-5bd9-8f42-0658ac32d955', 'description' => 'Appetite for Destruction', 'correct_answer' => false],
                    ['id' => '68cf3627-e845-5205-b232-92c9f97e403c', 'description' => 'Powerslave', 'correct_answer' => true],
                    ['id' => '4460f343-9ed0-5d2d-9ace-cb82da2901ed', 'description' => 'Master of Puppets', 'correct_answer' => false]
                ]],
        ['id' => '9c58f18f-3ec8-5b06-920c-d9edb8342cfe', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Slayer album includes \'Angel of Death\' and \'Raining Blood\'?', 'difficulty' => 2, 'weight' => 277, 'alternatives' => [
                    ['id' => '95627781-fe6c-5565-9d70-e2b01ea5705c', 'description' => 'The Number of the Beast', 'correct_answer' => false],
                    ['id' => '368ee563-9b33-511e-ad80-2a5508451e37', 'description' => 'Reign in Blood', 'correct_answer' => true],
                    ['id' => '109dad8d-aef6-5c91-8e5a-6b6155c22641', 'description' => 'Back in Black', 'correct_answer' => false],
                    ['id' => '71d6c59e-f64a-5403-b30a-d2a9d46a58ef', 'description' => 'British Steel', 'correct_answer' => false],
                    ['id' => 'c0077944-083e-5c11-8ce8-5733d437d82f', 'description' => 'Highway to Hell', 'correct_answer' => false]
                ]],
        ['id' => 'ae966364-5603-5344-afb6-51c176615de3', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Judas Priest album includes \'Breaking the Law\' and \'Living After Midnight\'?', 'difficulty' => 2, 'weight' => 389, 'alternatives' => [
                    ['id' => '390c3c0f-97be-514c-8515-326cde76b2a6', 'description' => 'Master of Puppets', 'correct_answer' => false],
                    ['id' => '27543a43-8343-5988-abbf-30b98fb7500a', 'description' => 'Appetite for Destruction', 'correct_answer' => false],
                    ['id' => '04fd5d1e-9960-53f0-bcd8-bfb5b3602c13', 'description' => 'Back in Black', 'correct_answer' => false],
                    ['id' => '614f2bb3-a0db-5474-871a-40acc5a07bcf', 'description' => 'British Steel', 'correct_answer' => true],
                    ['id' => '2ab55aec-c650-57d8-8236-e17ef64db629', 'description' => 'The Number of the Beast', 'correct_answer' => false]
                ]],
        ['id' => '058505f1-f104-5b2d-a067-d37437c19cff', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Black Sabbath album includes \'War Pigs\' and \'Iron Man\'?', 'difficulty' => 2, 'weight' => 293, 'alternatives' => [
                    ['id' => 'f995f333-ed2d-52d8-8bab-9174ba737f10', 'description' => 'The Number of the Beast', 'correct_answer' => false],
                    ['id' => 'ab0a2fc8-95c4-51e0-ade4-6d36bc28854f', 'description' => 'Paranoid', 'correct_answer' => true],
                    ['id' => '819999ff-1154-5310-8dde-43b2f01495b7', 'description' => 'Master of Puppets', 'correct_answer' => false],
                    ['id' => 'd472fea5-a77e-539b-bac1-d338fe4c14b6', 'description' => 'Powerslave', 'correct_answer' => false],
                    ['id' => '3d2f46ae-6762-5d89-b690-4dc44e8a6f71', 'description' => 'British Steel', 'correct_answer' => false]
                ]],
        ['id' => 'd020f8d8-e2ff-5123-ae4c-357e88fe882f', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which AC/DC album opens with \'Hells Bells\' and includes its title track?', 'difficulty' => 2, 'weight' => 347, 'alternatives' => [
                    ['id' => '14bddc2e-2d50-5def-967d-7dfabb3edafa', 'description' => 'Reign in Blood', 'correct_answer' => false],
                    ['id' => '6493d9ae-045a-50f0-99cf-e6a67dc3ce88', 'description' => 'Back in Black', 'correct_answer' => true],
                    ['id' => 'e62d1151-aa20-596a-9eae-39c8b6a1743a', 'description' => 'Highway to Hell', 'correct_answer' => false],
                    ['id' => 'e274ea0d-c5b4-5d6d-a043-da47255cebe9', 'description' => 'British Steel', 'correct_answer' => false],
                    ['id' => 'd425ce1c-0b34-5b88-8fcb-dfcdd68f040d', 'description' => 'Appetite for Destruction', 'correct_answer' => false]
                ]],
        ['id' => '2dd1621b-a4b3-5120-ad60-b4ffa6a76c35', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which AC/DC album includes its title track and \'If You Want Blood\'?', 'difficulty' => 2, 'weight' => 306, 'alternatives' => [
                    ['id' => 'f7d2d304-d043-556c-9d08-a32378162b8d', 'description' => 'Master of Puppets', 'correct_answer' => false],
                    ['id' => 'e6e3cfe9-1c6e-5120-ba0d-a0ee8aa3d56e', 'description' => 'The Number of the Beast', 'correct_answer' => false],
                    ['id' => '700ff758-76a7-5001-8c7a-73366cf9aaa9', 'description' => 'Highway to Hell', 'correct_answer' => true],
                    ['id' => '49cdda7c-4f3e-5654-a2b6-c312faeb0523', 'description' => 'Ride the Lightning', 'correct_answer' => false],
                    ['id' => 'fd1e050e-b3c4-5dfa-b965-e0edefca0d89', 'description' => 'Appetite for Destruction', 'correct_answer' => false]
                ]],
        ['id' => '12b9664b-4331-583e-ad67-f9f5427f26ef', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Metallica album includes \'Fade to Black\' and \'For Whom the Bell Tolls\'?', 'difficulty' => 2, 'weight' => 393, 'alternatives' => [
                    ['id' => '9a4a06dd-dfe1-5d1e-8be1-170e2d3399ae', 'description' => 'Powerslave', 'correct_answer' => false],
                    ['id' => '6e6139c4-c3c7-5834-a0be-c8c5fb1117e2', 'description' => 'British Steel', 'correct_answer' => false],
                    ['id' => '19078f6d-3c81-538d-8988-3b6d3a6eae59', 'description' => 'Paranoid', 'correct_answer' => false],
                    ['id' => '8552d11f-f93e-5ac8-b66b-031ad1e9bfb3', 'description' => 'The Number of the Beast', 'correct_answer' => false],
                    ['id' => 'bec1e5f5-8a3c-578e-bbd8-539a6d307196', 'description' => 'Ride the Lightning', 'correct_answer' => true]
                ]],
        ['id' => '3fe5f4bd-d06e-589e-b90f-8aea1fb450f7', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Iron Maiden album includes its title track and \'Run to the Hills\'?', 'difficulty' => 2, 'weight' => 217, 'alternatives' => [
                    ['id' => '15bf8d54-2d1b-5a43-8d4f-6c53e88c6203', 'description' => 'British Steel', 'correct_answer' => false],
                    ['id' => '99443016-06cc-505c-86c8-480fa4f56bd3', 'description' => 'Master of Puppets', 'correct_answer' => false],
                    ['id' => '41bf9ea5-48b4-5a44-a3b7-4b3f0bacae06', 'description' => 'Powerslave', 'correct_answer' => false],
                    ['id' => '0802df88-20dc-54f2-adf9-b330bc5f29c2', 'description' => 'Ride the Lightning', 'correct_answer' => false],
                    ['id' => 'b09d3b17-f15c-5b04-bc18-e04155af0d11', 'description' => 'The Number of the Beast', 'correct_answer' => true]
                ]],
        ['id' => '3721874a-092f-54fb-8aab-72fe4b46442f', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Jorge Ben Jor album includes \'Os Alquimistas Estão Chegando\'?', 'difficulty' => 2, 'weight' => 395, 'alternatives' => [
                    ['id' => 'cb2b05b1-b984-5a97-a6b7-44df1872f380', 'description' => 'Clube da Esquina', 'correct_answer' => false],
                    ['id' => '82fa3eaa-d763-568d-855b-c8645dbb7aa8', 'description' => 'A Tábua de Esmeralda', 'correct_answer' => true],
                    ['id' => '34170ef9-7573-52b6-9a05-3064f8adef7d', 'description' => 'Afrociberdelia', 'correct_answer' => false],
                    ['id' => '297fe376-1d47-5212-985b-970df9cffd22', 'description' => 'Da Lama ao Caos', 'correct_answer' => false],
                    ['id' => '827059da-02cb-54c4-a0be-27c8209e60a4', 'description' => 'Sobrevivendo no Inferno', 'correct_answer' => false]
                ]],
        ['id' => 'a46f7d33-ce27-5c9d-a287-57bbb594e3d3', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Nação Zumbi debut includes \'A Praieira\' and its title track?', 'difficulty' => 2, 'weight' => 369, 'alternatives' => [
                    ['id' => 'b1f1e238-8987-5805-aff7-66272a403829', 'description' => 'Da Lama ao Caos', 'correct_answer' => true],
                    ['id' => '8768c4c9-0cc0-5e0a-8559-d9e393012f57', 'description' => 'Sobrevivendo no Inferno', 'correct_answer' => false],
                    ['id' => 'c7833877-235d-5192-a923-08ae0bae0e50', 'description' => 'A Tábua de Esmeralda', 'correct_answer' => false],
                    ['id' => '6bf7427a-2cf8-5a0c-ba08-580968b6ed74', 'description' => 'Refazenda', 'correct_answer' => false],
                    ['id' => 'db22da82-e8b9-540d-b1dd-516549f8ec39', 'description' => 'Construção', 'correct_answer' => false]
                ]],
        ['id' => '5d34c3d3-8bda-5577-a1ca-212f6bb3683c', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Novos Baianos album includes \'Preta Pretinha\' and \'Mistério do Planeta\'?', 'difficulty' => 2, 'weight' => 364, 'alternatives' => [
                    ['id' => '6b553b04-5140-5099-acff-5851662e5d4a', 'description' => 'A Tábua de Esmeralda', 'correct_answer' => false],
                    ['id' => '37a7950f-77b8-5661-a204-f57f3bd27259', 'description' => 'Acabou Chorare', 'correct_answer' => true],
                    ['id' => '5a652e8c-03ff-50b9-bb88-11a66a431073', 'description' => 'Transa', 'correct_answer' => false],
                    ['id' => 'b41f1d1f-c18a-5d9b-bd81-e4b99a67ab0f', 'description' => 'Construção', 'correct_answer' => false],
                    ['id' => '2ace53b0-fce4-5f3d-b898-4245ff3561c9', 'description' => 'Da Lama ao Caos', 'correct_answer' => false]
                ]],
        ['id' => '1b165e83-a7dd-53a8-927b-549ece2ff6b4', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Chico Science & Nação Zumbi album includes \'Maracatu Atômico\'?', 'difficulty' => 2, 'weight' => 375, 'alternatives' => [
                    ['id' => '8d09021e-22e3-52a5-89d7-5a3e6b20df63', 'description' => 'Afrociberdelia', 'correct_answer' => true],
                    ['id' => 'b3d403ca-6194-5938-8b18-524b869c87cc', 'description' => 'Construção', 'correct_answer' => false],
                    ['id' => '830622dd-691c-53c4-acc9-5c3541dac6a4', 'description' => 'A Tábua de Esmeralda', 'correct_answer' => false],
                    ['id' => '7b7491a8-642e-55e2-9107-ecc5862b0d59', 'description' => 'Transa', 'correct_answer' => false],
                    ['id' => 'ff770d69-a7b3-58f7-9166-6c73c246bfcb', 'description' => 'Refazenda', 'correct_answer' => false]
                ]],
        ['id' => 'a1831c53-6e5c-5cc3-b087-985ad68ec39f', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Milton Nascimento and Lô Borges album includes \'Tudo o Que Você Podia Ser\'?', 'difficulty' => 2, 'weight' => 399, 'alternatives' => [
                    ['id' => 'ee4e6c13-4b17-5583-b51a-e26f0696a54d', 'description' => 'Transa', 'correct_answer' => false],
                    ['id' => '0674f0ed-5a9b-5fa0-a58f-5d53a24f212d', 'description' => 'Cabeça Dinossauro', 'correct_answer' => false],
                    ['id' => '3c5522fe-2b4d-52ff-8da7-ed17683da202', 'description' => 'A Tábua de Esmeralda', 'correct_answer' => false],
                    ['id' => 'b6e4f228-e538-5cf6-b87c-543ad122fa1d', 'description' => 'Clube da Esquina', 'correct_answer' => true],
                    ['id' => '484c2d8f-2be6-5a2c-851a-561ca82dd548', 'description' => 'Construção', 'correct_answer' => false]
                ]],
        ['id' => '3e475402-2779-56e9-8a58-118bb9d317aa', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Titãs album includes \'Polícia\', \'AA UU\', and \'Homem Primata\'?', 'difficulty' => 2, 'weight' => 384, 'alternatives' => [
                    ['id' => '6c74eed1-d7d1-5822-bcc4-0806543b5fae', 'description' => 'Transa', 'correct_answer' => false],
                    ['id' => 'd050aead-cdc3-5236-9ccd-2234395a470f', 'description' => 'Da Lama ao Caos', 'correct_answer' => false],
                    ['id' => '75076de7-a5a5-588e-bad3-00abc0aef860', 'description' => 'Cabeça Dinossauro', 'correct_answer' => true],
                    ['id' => '0f28f780-befc-5ad9-aecb-67027b18fb9d', 'description' => 'Afrociberdelia', 'correct_answer' => false],
                    ['id' => '276e2c2b-aa92-5088-87a4-b6ee141f69e4', 'description' => 'Construção', 'correct_answer' => false]
                ]],
        ['id' => '0122bb16-9705-5a74-8d25-c8d4c8e3ba27', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Racionais MC\'s album includes \'Diário de um Detento\'?', 'difficulty' => 2, 'weight' => 305, 'alternatives' => [
                    ['id' => '75d2ce82-3a88-5999-a2bc-53ecb10437a5', 'description' => 'Da Lama ao Caos', 'correct_answer' => false],
                    ['id' => '4b418b03-851c-5dfd-9c79-92e3808705ec', 'description' => 'A Tábua de Esmeralda', 'correct_answer' => false],
                    ['id' => '24e0f21c-491c-5755-8fcf-1f3f0b8257fc', 'description' => 'Sobrevivendo no Inferno', 'correct_answer' => true],
                    ['id' => 'c14f785e-c5c8-5c38-931a-9e3843e4a890', 'description' => 'Transa', 'correct_answer' => false],
                    ['id' => '1b2578ae-8c6b-5419-8e96-316aee461a93', 'description' => 'Refazenda', 'correct_answer' => false]
                ]],
        ['id' => '8ee873fc-25e7-552a-a7af-62454ad0047e', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Caetano Veloso album includes \'You Don\'t Know Me\' and \'Nine Out of Ten\'?', 'difficulty' => 2, 'weight' => 395, 'alternatives' => [
                    ['id' => '09b3eb6e-7b23-50a1-8745-6e4b2d93bb24', 'description' => 'Transa', 'correct_answer' => true],
                    ['id' => '26134093-f1a5-5f5e-b3c7-912d09f54243', 'description' => 'Sobrevivendo no Inferno', 'correct_answer' => false],
                    ['id' => '3609b219-e75f-537e-bc53-3fe6d10a677b', 'description' => 'Cabeça Dinossauro', 'correct_answer' => false],
                    ['id' => 'd03d7142-b6ee-52e6-a592-b8f130987cc2', 'description' => 'Afrociberdelia', 'correct_answer' => false],
                    ['id' => '85803561-28e1-51f1-85d6-802a2fff051c', 'description' => 'A Tábua de Esmeralda', 'correct_answer' => false]
                ]],
        ['id' => 'c741278b-99b1-5230-8dba-a5e381db9bff', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Massive Attack debut includes \'Unfinished Sympathy\'?', 'difficulty' => 2, 'weight' => 356, 'alternatives' => [
                    ['id' => '4e387e95-1cc1-508b-8c4d-4d0dcb8cbc9a', 'description' => 'Homework', 'correct_answer' => false],
                    ['id' => '39026633-66b4-5450-a4a0-f1c965277e62', 'description' => 'Mezzanine', 'correct_answer' => false],
                    ['id' => '8dd0eeba-862f-5e98-aff0-387707b1106e', 'description' => 'Blue Lines', 'correct_answer' => true],
                    ['id' => '4457436b-04ac-52b6-a5dd-4b2cf73809d4', 'description' => 'Discovery', 'correct_answer' => false],
                    ['id' => '05311adf-1c31-5159-ba50-f9c51ca35d22', 'description' => 'Random Access Memories', 'correct_answer' => false]
                ]],
        ['id' => 'e4662d09-7884-58c9-bcbb-e81a138ff862', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Air debut includes \'Sexy Boy\' and \'All I Need\'?', 'difficulty' => 2, 'weight' => 339, 'alternatives' => [
                    ['id' => '0959af61-ed88-5d08-be8d-03f1d2986183', 'description' => 'Blue Lines', 'correct_answer' => false],
                    ['id' => '1f7ecee7-a248-5e8b-b70a-05999547d555', 'description' => 'Moon Safari', 'correct_answer' => true],
                    ['id' => '76898c66-d14b-57c3-b859-c80669f4c3af', 'description' => 'Random Access Memories', 'correct_answer' => false],
                    ['id' => '080b3967-fe93-51ba-aeb3-664d1249d9d7', 'description' => 'Play', 'correct_answer' => false],
                    ['id' => 'a9e113e9-277c-5de4-960e-6a46addc6ee7', 'description' => 'Cross', 'correct_answer' => false]
                ]],
        ['id' => '414abffe-1f86-590a-9eb4-c65c27000159', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Justice debut album includes \'D.A.N.C.E.\' and \'Genesis\'?', 'difficulty' => 2, 'weight' => 370, 'alternatives' => [
                    ['id' => '47d1eb35-042b-5977-8371-97193a6b9bef', 'description' => 'Homework', 'correct_answer' => false],
                    ['id' => 'eb21c6a9-a123-5ee6-beac-887086c82f1c', 'description' => 'Moon Safari', 'correct_answer' => false],
                    ['id' => '34d1de3d-8221-580f-ad36-b0d1a37f419f', 'description' => 'Cross', 'correct_answer' => true],
                    ['id' => '87743eb5-114d-5833-a1c7-118d6e802f71', 'description' => 'Blue Lines', 'correct_answer' => false],
                    ['id' => '39046eac-d048-5041-84ce-87b20482660e', 'description' => 'Random Access Memories', 'correct_answer' => false]
                ]],
        ['id' => 'b35996cf-77e2-5da3-b473-9c1c17f727b3', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Portishead debut includes \'Sour Times\' and \'Glory Box\'?', 'difficulty' => 2, 'weight' => 233, 'alternatives' => [
                    ['id' => 'c6c50b4b-03d1-5558-9aff-110b9ab73b07', 'description' => 'Mezzanine', 'correct_answer' => false],
                    ['id' => 'debf2b1d-38fa-5144-ad87-eadf1f5d81bb', 'description' => 'Cross', 'correct_answer' => false],
                    ['id' => '4511e987-e2d2-5f6d-ae00-f4ca5c5b3193', 'description' => 'The Fat of the Land', 'correct_answer' => false],
                    ['id' => 'bc2b40c5-d21f-518e-9fbc-8e4601a0edfc', 'description' => 'Random Access Memories', 'correct_answer' => false],
                    ['id' => '037a1b28-0716-5bd7-95de-4d04fe711efb', 'description' => 'Dummy', 'correct_answer' => true]
                ]],
        ['id' => '23a61719-6d4a-5a79-8d0e-4f8c2cc2fb08', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Moby album includes \'Porcelain\' and \'Natural Blues\'?', 'difficulty' => 2, 'weight' => 329, 'alternatives' => [
                    ['id' => '2a526646-a119-5b23-81a8-4dc443108337', 'description' => 'Mezzanine', 'correct_answer' => false],
                    ['id' => 'a429e30e-9667-5bd2-ab0b-3a03e7f539f8', 'description' => 'Homework', 'correct_answer' => false],
                    ['id' => 'd3dca2cd-53f4-5dc1-8188-c2d5776eeba5', 'description' => 'Random Access Memories', 'correct_answer' => false],
                    ['id' => 'a595f828-cca3-5b1b-a54e-3e3e31322cbe', 'description' => 'Play', 'correct_answer' => true],
                    ['id' => '690ffe88-9a27-5f6d-8387-f3d05cc33f91', 'description' => 'Cross', 'correct_answer' => false]
                ]],
        ['id' => 'edfca0ff-7ee3-53dc-aca7-b5290bc70e21', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Daft Punk debut includes \'Around the World\' and \'Da Funk\'?', 'difficulty' => 2, 'weight' => 382, 'alternatives' => [
                    ['id' => 'aea11ae9-da58-5f47-9af2-214a3ae81f2a', 'description' => 'Random Access Memories', 'correct_answer' => false],
                    ['id' => 'b41def3d-8a30-5575-b2dc-1949d01e6cc8', 'description' => 'The Fat of the Land', 'correct_answer' => false],
                    ['id' => '9bb46dee-d54f-5441-8f46-91ac4de14cc0', 'description' => 'Mezzanine', 'correct_answer' => false],
                    ['id' => '22b297dd-17bc-5e5e-8596-e333189156d9', 'description' => 'Dummy', 'correct_answer' => false],
                    ['id' => 'b1a6374a-f058-5c0c-8a5e-13732953a97a', 'description' => 'Homework', 'correct_answer' => true]
                ]],
        ['id' => 'c461a146-6575-5050-b89c-c02dc7682c50', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Daft Punk album includes \'Get Lucky\' and \'Instant Crush\'?', 'difficulty' => 2, 'weight' => 398, 'alternatives' => [
                    ['id' => '602fc0d0-bca4-5d84-9f45-1136fe833dea', 'description' => 'Discovery', 'correct_answer' => false],
                    ['id' => '21ee265c-dbaf-5797-9d9b-f76211d813f3', 'description' => 'Random Access Memories', 'correct_answer' => true],
                    ['id' => '8a277404-218e-5c78-ab37-360a3a612e94', 'description' => 'Mezzanine', 'correct_answer' => false],
                    ['id' => 'b461bdbd-47dc-5b15-8cca-ecdab7e52564', 'description' => 'Moon Safari', 'correct_answer' => false],
                    ['id' => '3579aafc-c419-5fbf-ae6e-6d71cd216c0c', 'description' => 'Homework', 'correct_answer' => false]
                ]],
        ['id' => '0bb4acb0-9351-5a29-abb1-5673f20b6e3a', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Daft Punk album includes \'One More Time\' and \'Harder, Better, Faster, Stronger\'?', 'difficulty' => 2, 'weight' => 374, 'alternatives' => [
                    ['id' => 'bff19c45-f02c-5426-8f5a-c12d70dadd04', 'description' => 'Homework', 'correct_answer' => false],
                    ['id' => 'f83a636f-6fa9-5b22-9b3a-2fe7e13b1c66', 'description' => 'Discovery', 'correct_answer' => true],
                    ['id' => 'ebfb4b07-93d5-5d9c-b129-4ccbda20d09f', 'description' => 'Play', 'correct_answer' => false],
                    ['id' => '2bf74184-ad09-5f60-9f8a-6915bc1ad63a', 'description' => 'Blue Lines', 'correct_answer' => false],
                    ['id' => 'c4889b18-7750-5b54-9ee3-7ac04dad0c9e', 'description' => 'Dummy', 'correct_answer' => false]
                ]],
        ['id' => '82c5520b-0e66-540b-a303-9035c217df2d', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Charles Mingus album is an orchestral suite associated with avant-garde jazz?', 'difficulty' => 3, 'weight' => 406, 'alternatives' => [
                    ['id' => '84572cb9-6f4f-582a-9aa6-d61afe47c33c', 'description' => 'Giant Steps', 'correct_answer' => false],
                    ['id' => '24e2e323-3bb1-5764-b99b-a5b231d7663e', 'description' => 'The Black Saint and the Sinner Lady', 'correct_answer' => true],
                    ['id' => '979c9caa-1a80-5b11-825a-4ccf2b47f4be', 'description' => 'Kind of Blue', 'correct_answer' => false],
                    ['id' => '9c8e9a89-afdd-5596-8ad7-2eca382eab70', 'description' => 'The Shape of Jazz to Come', 'correct_answer' => false],
                    ['id' => 'c2ebe61a-8343-5ac6-b744-c1eb949598e0', 'description' => 'A Love Supreme', 'correct_answer' => false]
                ]],
        ['id' => '8c9ebff3-c596-5c41-8b13-9152f53e7713', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Dave Brubeck Quartet album includes \'Take Five\' and \'Blue Rondo à la Turk\'?', 'difficulty' => 3, 'weight' => 406, 'alternatives' => [
                    ['id' => '936bdfa1-c6a8-5838-9af0-c8ef15aa596a', 'description' => 'Ascension', 'correct_answer' => false],
                    ['id' => '396f43d4-81c6-5318-9465-359f0ba201e8', 'description' => 'A Love Supreme', 'correct_answer' => false],
                    ['id' => '1778dc8f-6e30-58f8-a59b-d88cdc33f0eb', 'description' => 'The Black Saint and the Sinner Lady', 'correct_answer' => false],
                    ['id' => '5159b9f1-acad-5b33-b7d2-db392bcdfbad', 'description' => 'Bitches Brew', 'correct_answer' => false],
                    ['id' => '7cf3d38f-dd11-5e24-8825-1208c4a64fdb', 'description' => 'Time Out', 'correct_answer' => true]
                ]],
        ['id' => '56497b78-08dc-5d3d-b1f9-0d214f0c70c5', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which 1959 Ornette Coleman album is a landmark of free jazz?', 'difficulty' => 3, 'weight' => 585, 'alternatives' => [
                    ['id' => '50a0d4b6-3866-59cd-bc82-0227ddd4e502', 'description' => 'Giant Steps', 'correct_answer' => false],
                    ['id' => 'bb3a3622-d3cf-51c5-9bb0-2344fbb2f78a', 'description' => 'Ascension', 'correct_answer' => false],
                    ['id' => '518fd31c-c42e-5470-8859-059517bf645b', 'description' => 'The Black Saint and the Sinner Lady', 'correct_answer' => false],
                    ['id' => 'bf08ec78-54b3-55a1-8208-ce0a5932f285', 'description' => 'Out to Lunch!', 'correct_answer' => false],
                    ['id' => 'd75943e1-5b6a-58bd-b24f-735e66dff080', 'description' => 'The Shape of Jazz to Come', 'correct_answer' => true]
                ]],
        ['id' => 'c7cfc21d-f4d3-5adb-bd9d-4891908727b2', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Miles Davis album includes \'So What\' and \'Freddie Freeloader\'?', 'difficulty' => 3, 'weight' => 408, 'alternatives' => [
                    ['id' => '1c3973b1-cf6f-5deb-82b7-4e1a01f310f1', 'description' => 'Kind of Blue', 'correct_answer' => true],
                    ['id' => '74d97157-f598-5b0f-95b1-ef19ed22972c', 'description' => 'Ascension', 'correct_answer' => false],
                    ['id' => '9c5cf4a6-f6ba-5b55-bff9-6a4403996b55', 'description' => 'The Shape of Jazz to Come', 'correct_answer' => false],
                    ['id' => '04c74b28-0445-5457-b664-fde2f65f0f0c', 'description' => 'A Love Supreme', 'correct_answer' => false],
                    ['id' => 'b315cfca-6959-5aa7-bea3-ea0b9e6061d8', 'description' => 'Bitches Brew', 'correct_answer' => false]
                ]],
        ['id' => '621b9a33-d8fd-5fc7-81ef-8019835a364f', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Miles Davis album released in 1970 is a landmark of jazz fusion?', 'difficulty' => 3, 'weight' => 514, 'alternatives' => [
                    ['id' => 'b3a3f609-d3b6-588d-813f-e40d244606f6', 'description' => 'Giant Steps', 'correct_answer' => false],
                    ['id' => '7301c122-6f94-570b-9be6-de43e4d7d24b', 'description' => 'Mingus Ah Um', 'correct_answer' => false],
                    ['id' => 'ac5fdfbc-0d7e-5472-999e-6383a3aa689d', 'description' => 'Kind of Blue', 'correct_answer' => false],
                    ['id' => '63f49b1a-a65d-5cc1-9b9a-f29019b7f582', 'description' => 'A Love Supreme', 'correct_answer' => false],
                    ['id' => '4c8e68d4-1df6-55b9-b17c-59db298e4abb', 'description' => 'Bitches Brew', 'correct_answer' => true]
                ]],
        ['id' => '06cad68a-c90d-5eb0-9394-33bae1d1eb60', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which John Coltrane suite has parts titled \'Acknowledgement\', \'Resolution\', \'Pursuance\', and \'Psalm\'?', 'difficulty' => 3, 'weight' => 421, 'alternatives' => [
                    ['id' => '61b2ba17-62d2-5582-8dac-274122777be2', 'description' => 'The Black Saint and the Sinner Lady', 'correct_answer' => false],
                    ['id' => '7ed0a864-f52b-5dff-919b-117a7b53c1db', 'description' => 'Kind of Blue', 'correct_answer' => false],
                    ['id' => '19f9fd2a-4592-5cd3-acb0-5933296da9da', 'description' => 'Bitches Brew', 'correct_answer' => false],
                    ['id' => '9a5f594d-5df0-52fa-a52c-1b9380b00a96', 'description' => 'A Love Supreme', 'correct_answer' => true],
                    ['id' => '15eaa838-e1fa-585f-8001-d7ddf8a41fab', 'description' => 'Time Out', 'correct_answer' => false]
                ]],
        ['id' => 'cc05dfec-7858-57f1-98e7-2ed1e77065aa', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Eric Dolphy album includes \'Hat and Beard\'?', 'difficulty' => 3, 'weight' => 517, 'alternatives' => [
                    ['id' => '98e6d46f-49d7-528d-bf60-692f2cd37245', 'description' => 'A Love Supreme', 'correct_answer' => false],
                    ['id' => '2875311d-dc88-527b-b425-a6908e15b213', 'description' => 'The Shape of Jazz to Come', 'correct_answer' => false],
                    ['id' => 'ab63f0ed-3798-5244-812a-ceb1c76a7bd0', 'description' => 'Out to Lunch!', 'correct_answer' => true],
                    ['id' => '500bf446-cceb-5045-97a6-711c17a38f04', 'description' => 'The Black Saint and the Sinner Lady', 'correct_answer' => false],
                    ['id' => '0be94653-38d0-587e-a985-93afe7e61855', 'description' => 'Giant Steps', 'correct_answer' => false]
                ]],
        ['id' => '1aba38ce-bf7d-5b93-af97-5a197a1adb71', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Mingus album includes \'Goodbye Pork Pie Hat\' and \'Better Git It in Your Soul\'?', 'difficulty' => 3, 'weight' => 533, 'alternatives' => [
                    ['id' => '6e30694d-b20e-5d30-8e2c-1da7a645e228', 'description' => 'Ascension', 'correct_answer' => false],
                    ['id' => 'b7973c89-eba1-5833-a10b-ce53d9cfd99f', 'description' => 'The Black Saint and the Sinner Lady', 'correct_answer' => false],
                    ['id' => '5ec8f6da-d780-516c-ab57-2122bebfdf09', 'description' => 'Giant Steps', 'correct_answer' => false],
                    ['id' => 'f7478e6e-3426-5e8e-8ed3-14b4c6677432', 'description' => 'The Shape of Jazz to Come', 'correct_answer' => false],
                    ['id' => '4f4d5a7d-791f-56e3-a9bf-02980103df35', 'description' => 'Mingus Ah Um', 'correct_answer' => true]
                ]],
        ['id' => '551d9acb-3927-5913-b031-ef0a7644efef', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Zombies album includes \'Time of the Season\'?', 'difficulty' => 3, 'weight' => 500, 'alternatives' => [
                    ['id' => '9178662b-8c9e-5de1-85eb-921b48e0e17a', 'description' => 'Odessey and Oracle', 'correct_answer' => true],
                    ['id' => '05e00842-1907-56c0-b9cc-5c21d119afef', 'description' => 'Pet Sounds', 'correct_answer' => false],
                    ['id' => '0671b3f2-f2b8-5254-b785-0d5fe30244a6', 'description' => 'Abbey Road', 'correct_answer' => false],
                    ['id' => '4f2de411-411d-5920-914e-a1a670499928', 'description' => 'Let It Be', 'correct_answer' => false],
                    ['id' => '25749c1a-636f-5023-94c5-fb0b809caf17', 'description' => 'The Beatles', 'correct_answer' => false]
                ]],
        ['id' => 'ce8ebe0b-1bd2-519f-88c7-2f2a309d1380', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Beach Boys album includes \'Wouldn\'t It Be Nice\' and \'God Only Knows\'?', 'difficulty' => 3, 'weight' => 518, 'alternatives' => [
                    ['id' => 'b569cc41-e5cb-541b-ab71-0cff977be0aa', 'description' => 'The Beatles', 'correct_answer' => false],
                    ['id' => '69a71973-eb83-5825-a412-9b86bc90c076', 'description' => 'Smile', 'correct_answer' => false],
                    ['id' => 'be93d2ba-ac27-53d9-8d5d-f1976b84b636', 'description' => 'Let It Be', 'correct_answer' => false],
                    ['id' => '8449e4b9-de96-5ad8-b47a-8621a8feb2e8', 'description' => 'Pet Sounds', 'correct_answer' => true],
                    ['id' => 'c2c7add0-2ac1-51f7-a435-7f976c066848', 'description' => 'Revolver', 'correct_answer' => false]
                ]],
        ['id' => 'c698f311-610f-5c36-9c5f-4f522cf5be2d', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Brian Wilson-led Beach Boys album project was abandoned in the 1960s and reconstructed decades later?', 'difficulty' => 3, 'weight' => 553, 'alternatives' => [
                    ['id' => 'c12610a2-aea0-5f2a-b2b9-72c98034f6a6', 'description' => 'Smile', 'correct_answer' => true],
                    ['id' => '64a65dc7-80f4-5bc5-bf74-884a04ff3f57', 'description' => 'Let It Be', 'correct_answer' => false],
                    ['id' => '355d3bb1-8756-5c12-b157-aa14c64d1361', 'description' => 'Abbey Road', 'correct_answer' => false],
                    ['id' => 'dc95d481-1634-5e03-a774-4ea8f1619ac8', 'description' => 'Sgt. Pepper\'s Lonely Hearts Club Band', 'correct_answer' => false],
                    ['id' => '7a22cd66-8784-566c-b53e-b60d80641748', 'description' => 'Forever Changes', 'correct_answer' => false]
                ]],
        ['id' => 'e018fce7-2dd3-53de-9be2-a08d9c4d9ec1', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Beatles double album is commonly known as the White Album?', 'difficulty' => 3, 'weight' => 528, 'alternatives' => [
                    ['id' => '446c1015-62ff-5003-a31b-b19b8838eb74', 'description' => 'Pet Sounds', 'correct_answer' => false],
                    ['id' => '31fa556e-af83-548a-866e-054fd2bacd2d', 'description' => 'The Beatles', 'correct_answer' => true],
                    ['id' => '78e2e743-012a-50bb-a71d-72286829727b', 'description' => 'Revolver', 'correct_answer' => false],
                    ['id' => '062c9239-e1be-57eb-a379-35de8c76f1a0', 'description' => 'Let It Be', 'correct_answer' => false],
                    ['id' => '5da568af-2581-50dc-a741-6311669753f5', 'description' => 'Sgt. Pepper\'s Lonely Hearts Club Band', 'correct_answer' => false]
                ]],
        ['id' => '08e95c07-e59b-5db4-8f62-6c37e86e8baf', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Beatles album introduces a fictional band and includes \'Lucy in the Sky with Diamonds\'?', 'difficulty' => 3, 'weight' => 487, 'alternatives' => [
                    ['id' => '0514beea-2ea8-56f5-a389-867f11ee9626', 'description' => 'Abbey Road', 'correct_answer' => false],
                    ['id' => '1986d5e8-f627-5598-b921-9c992ea2a51e', 'description' => 'The Beatles', 'correct_answer' => false],
                    ['id' => '42f09f31-73ae-5ddb-a47d-76bcc7f155ac', 'description' => 'Rubber Soul', 'correct_answer' => false],
                    ['id' => '67c82da7-1932-5dc6-98a9-214ac8e1e908', 'description' => 'Revolver', 'correct_answer' => false],
                    ['id' => '20776aa9-5368-56a2-82ab-9e9bbab45384', 'description' => 'Sgt. Pepper\'s Lonely Hearts Club Band', 'correct_answer' => true]
                ]],
        ['id' => 'e261f617-7cb9-51ef-9a33-8d8887bfa2c5', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Beatles album includes \'Eleanor Rigby\', \'Tomorrow Never Knows\', and \'Taxman\'?', 'difficulty' => 3, 'weight' => 431, 'alternatives' => [
                    ['id' => '0cb30de9-4796-50ab-aca9-778c4e817db3', 'description' => 'Revolver', 'correct_answer' => true],
                    ['id' => 'b81c6c74-88e6-505b-ac74-7165c127d184', 'description' => 'Smile', 'correct_answer' => false],
                    ['id' => 'de32f00f-a95b-5596-b8bf-79685dde5188', 'description' => 'Abbey Road', 'correct_answer' => false],
                    ['id' => 'f19ef5f1-5c8a-534f-8b46-283e846ca800', 'description' => 'Let It Be', 'correct_answer' => false],
                    ['id' => 'd848819f-ba61-5933-91f3-e58dd429ff4a', 'description' => 'Odessey and Oracle', 'correct_answer' => false]
                ]],
        ['id' => 'e5bbcc30-53a5-53da-87de-541cd013f4e8', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Beatles album ends its second side with a medley?', 'difficulty' => 3, 'weight' => 528, 'alternatives' => [
                    ['id' => '5818430a-66eb-5c4c-9ad6-33c02de0f080', 'description' => 'The Beatles', 'correct_answer' => false],
                    ['id' => '16a30ef0-12b7-59ee-99a1-520e73f28488', 'description' => 'Rubber Soul', 'correct_answer' => false],
                    ['id' => '5e14ffbd-89d9-54fe-8543-02e04066b37f', 'description' => 'Abbey Road', 'correct_answer' => true],
                    ['id' => '3567863e-06e1-5984-8d80-c4a57e7a3a04', 'description' => 'Pet Sounds', 'correct_answer' => false],
                    ['id' => 'f932ab4b-6570-5353-9a15-7738cd5f15a4', 'description' => 'Smile', 'correct_answer' => false]
                ]],
        ['id' => '9993637d-044c-5ae1-8060-dd4b5485e02f', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Beatles album includes \'Norwegian Wood\' and \'In My Life\'?', 'difficulty' => 3, 'weight' => 449, 'alternatives' => [
                    ['id' => '92cd8638-19a3-5b6a-9f2b-8e5c75fe7933', 'description' => 'Smile', 'correct_answer' => false],
                    ['id' => 'df3f6683-07d0-5598-a500-a23644e4bbe0', 'description' => 'Let It Be', 'correct_answer' => false],
                    ['id' => '207b75ae-b4ba-534d-b507-b3416c958cf2', 'description' => 'Rubber Soul', 'correct_answer' => true],
                    ['id' => '65d70fc2-e6e8-5cdb-bdbd-c5487d1c90c9', 'description' => 'The Beatles', 'correct_answer' => false],
                    ['id' => 'f9a686b4-a937-502f-b894-023def4bdb8a', 'description' => 'Abbey Road', 'correct_answer' => false]
                ]],
        ['id' => 'cad1ac68-40be-5b6e-90a5-ece3a5907621', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Coltrane album was conceived as an expression of spiritual gratitude?', 'difficulty' => 3, 'weight' => 527, 'alternatives' => [
                    ['id' => '07df5ec8-987d-530d-9941-83590bbf22e5', 'description' => 'The Shape of Jazz to Come', 'correct_answer' => false],
                    ['id' => '3d7bc6fc-5c96-53c9-8ead-956e07743eb8', 'description' => 'Mingus Ah Um', 'correct_answer' => false],
                    ['id' => '89fbac26-ffa3-56d1-9858-1e4f02dd1bce', 'description' => 'A Love Supreme', 'correct_answer' => true],
                    ['id' => 'f0cd548d-a40d-51f6-851b-7da5b2e92097', 'description' => 'Elis & Tom', 'correct_answer' => false],
                    ['id' => '01cc263b-0310-5588-b442-7f79adf2dad5', 'description' => 'Ellington at Newport', 'correct_answer' => false]
                ]],
        ['id' => 'a27c168e-7b4c-5445-b026-a6f5997ffd58', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which album by Elis Regina and Tom Jobim includes their duet of \'Águas de Março\'?', 'difficulty' => 3, 'weight' => 463, 'alternatives' => [
                    ['id' => '14c634f3-f3c7-5fe6-87a8-f778acfcf09f', 'description' => 'The Köln Concert', 'correct_answer' => false],
                    ['id' => 'f5863f45-1713-5a0c-b740-064b45d15b1c', 'description' => 'A Love Supreme', 'correct_answer' => false],
                    ['id' => '06f51887-96f3-51a6-a23d-3d61199334c8', 'description' => 'Kind of Blue', 'correct_answer' => false],
                    ['id' => 'b1159510-eace-5356-9e51-d9adc753ba6d', 'description' => 'Elis & Tom', 'correct_answer' => true],
                    ['id' => 'c8c01bfa-3ba2-55d9-8057-0091c862ea24', 'description' => 'Ellington at Newport', 'correct_answer' => false]
                ]],
        ['id' => '11811352-cee3-5345-9a52-506821c117b1', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which 1959 João Gilberto album is a landmark in the consolidation of bossa nova?', 'difficulty' => 3, 'weight' => 445, 'alternatives' => [
                    ['id' => 'abd77252-15d9-56a8-aae4-743bbcd0d89b', 'description' => 'The Köln Concert', 'correct_answer' => false],
                    ['id' => 'f9ea5a8a-05d9-5ef5-a4f2-febadd3208f1', 'description' => 'Mingus Ah Um', 'correct_answer' => false],
                    ['id' => '187f87ce-1679-5f2e-95b7-240a70beff8e', 'description' => 'Kind of Blue', 'correct_answer' => false],
                    ['id' => '153297cd-01bf-5593-8b41-df3d76a458c6', 'description' => 'Getz/Gilberto', 'correct_answer' => false],
                    ['id' => 'e919573d-6a0c-5c97-b744-4ad625fb3e7e', 'description' => 'Chega de Saudade', 'correct_answer' => true]
                ]],
        ['id' => '21472d4c-a796-56b3-8eee-775ac81103c3', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which 1956 Duke Ellington live recording includes \'Diminuendo and Crescendo in Blue\'?', 'difficulty' => 3, 'weight' => 433, 'alternatives' => [
                    ['id' => '36b1c609-380b-5789-bb58-8e99cb71a72b', 'description' => 'Kind of Blue', 'correct_answer' => false],
                    ['id' => 'b02cc6ef-7074-54ec-93fb-61fc8520d3b5', 'description' => 'Elis & Tom', 'correct_answer' => false],
                    ['id' => 'fcf288f4-5bea-5265-937f-36dd64b16bbb', 'description' => 'Ellington at Newport', 'correct_answer' => true],
                    ['id' => '63001f6d-f80c-5463-b776-2dbfaa904068', 'description' => 'Mingus Ah Um', 'correct_answer' => false],
                    ['id' => 'cc63debc-3c2b-5638-9ff0-27c5f26285dc', 'description' => 'A Love Supreme', 'correct_answer' => false]
                ]],
        ['id' => 'a5456220-3cbb-55dd-9eca-1ddefbe81029', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Elizeth Cardoso album with João Gilberto on guitar is associated with bossa nova\'s beginnings?', 'difficulty' => 3, 'weight' => 422, 'alternatives' => [
                    ['id' => '4e772d07-68eb-52d9-b854-5ae95068885c', 'description' => 'The Shape of Jazz to Come', 'correct_answer' => false],
                    ['id' => '94aa5758-1c53-5dd8-8f16-b310bbb13cc9', 'description' => 'Canção do Amor Demais', 'correct_answer' => true],
                    ['id' => '7ff8335d-6344-59e2-89cc-3851ffcc2bfc', 'description' => 'Chega de Saudade', 'correct_answer' => false],
                    ['id' => '2197bbeb-ec33-58fa-94f0-1635f2934313', 'description' => 'Kind of Blue', 'correct_answer' => false],
                    ['id' => 'a0a8e8ce-87f7-5c58-bfe1-484f2c97f87d', 'description' => 'The Köln Concert', 'correct_answer' => false]
                ]],
        ['id' => '3f5b787c-4704-5a02-aa16-ea3524af7e6e', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Miles Davis album is a landmark of modal jazz?', 'difficulty' => 3, 'weight' => 550, 'alternatives' => [
                    ['id' => '65c3f0a0-6d73-5d82-bc0f-fa7dee251667', 'description' => 'Ellington at Newport', 'correct_answer' => false],
                    ['id' => '7f0c5291-5685-5c48-bf0b-6e8ccb2e0782', 'description' => 'Mingus Ah Um', 'correct_answer' => false],
                    ['id' => 'e532b3aa-4665-5264-b379-3783bb572fd0', 'description' => 'Kind of Blue', 'correct_answer' => true],
                    ['id' => 'dce6dcd4-02b4-5152-bf7e-7b2151162017', 'description' => 'The Köln Concert', 'correct_answer' => false],
                    ['id' => '2e86d512-89b7-56d9-bdff-1e09c4548ab0', 'description' => 'Getz/Gilberto', 'correct_answer' => false]
                ]],
        ['id' => 'a5043671-98b3-5efb-92a8-39016327db08', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Stan Getz and João Gilberto album includes \'The Girl from Ipanema\' sung by Astrud Gilberto?', 'difficulty' => 3, 'weight' => 555, 'alternatives' => [
                    ['id' => 'ac39ccb0-e329-5e37-b13b-bcb20dc0cb96', 'description' => 'A Love Supreme', 'correct_answer' => false],
                    ['id' => 'fe3ba75b-e185-5ee4-9c91-40a24a2a4b21', 'description' => 'The Köln Concert', 'correct_answer' => false],
                    ['id' => '37540966-139c-587b-9cca-116572a8d124', 'description' => 'Getz/Gilberto', 'correct_answer' => true],
                    ['id' => 'b6bb8b4b-bbf0-5139-a048-5007dc324c6c', 'description' => 'Chega de Saudade', 'correct_answer' => false],
                    ['id' => '153b63b5-ac18-520b-97f1-147b82926e48', 'description' => 'Elis & Tom', 'correct_answer' => false]
                ]],
        ['id' => '55046b3e-ff27-5ee3-922d-ab193df3d5eb', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Keith Jarrett solo recording was made at the Cologne Opera House in 1975?', 'difficulty' => 3, 'weight' => 413, 'alternatives' => [
                    ['id' => 'ab423e41-f63a-5621-90e2-ad7b8ed92c1e', 'description' => 'The Köln Concert', 'correct_answer' => true],
                    ['id' => '6bb587a9-2d30-5116-9ce3-6ecd438f7212', 'description' => 'Ellington at Newport', 'correct_answer' => false],
                    ['id' => 'af34b997-8554-548b-881d-75c148b0b2e0', 'description' => 'The Shape of Jazz to Come', 'correct_answer' => false],
                    ['id' => '4ba9bc64-2884-5d3f-ae2d-a38a54c0b167', 'description' => 'Kind of Blue', 'correct_answer' => false],
                    ['id' => '3239aaa5-c1a3-5d09-8d72-e1be75cf6f5d', 'description' => 'Canção do Amor Demais', 'correct_answer' => false]
                ]],
        ['id' => 'bc7e53e6-a65f-5565-abd4-282613abcdd1', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Notorious B.I.G. debut includes \'Juicy\' and \'Big Poppa\'?', 'difficulty' => 3, 'weight' => 582, 'alternatives' => [
                    ['id' => '3e5f05c4-2008-57e5-88ee-50620b8b16e2', 'description' => 'Enter the Wu-Tang (36 Chambers)', 'correct_answer' => false],
                    ['id' => '777042a5-8148-5647-b4cb-1bbafd669ecd', 'description' => 'The Chronic', 'correct_answer' => false],
                    ['id' => '6d387c1e-8238-51a3-a16e-334cb7132b24', 'description' => 'Illmatic', 'correct_answer' => false],
                    ['id' => '9ff5055a-84d6-5f7c-a9fe-47ea7fc9d3b1', 'description' => 'Ready to Die', 'correct_answer' => true],
                    ['id' => 'ff0c293e-8a1c-556d-9471-e88b3adb7d3b', 'description' => 'good kid, m.A.A.d city', 'correct_answer' => false]
                ]],
        ['id' => '86637ecc-b0b5-5f60-add9-3deaab31b722', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Kendrick Lamar album includes \'Alright\' and \'King Kunta\'?', 'difficulty' => 3, 'weight' => 593, 'alternatives' => [
                    ['id' => '2c352a2a-6672-5ef9-8038-19ac2821e582', 'description' => 'The College Dropout', 'correct_answer' => false],
                    ['id' => '926df314-9a9f-56bb-827a-46ec000791af', 'description' => 'To Pimp a Butterfly', 'correct_answer' => true],
                    ['id' => 'aa78b491-c62e-5c2b-9076-39ec0c616a14', 'description' => 'The Chronic', 'correct_answer' => false],
                    ['id' => '044f73c0-46c6-560d-8106-9f04deb06000', 'description' => 'Aquemini', 'correct_answer' => false],
                    ['id' => 'b55c9dd7-9da2-51e8-a21c-948e0b305bb3', 'description' => 'good kid, m.A.A.d city', 'correct_answer' => false]
                ]],
        ['id' => '4d5f389f-3bfe-5c86-b6cf-f02e1633d988', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Snoop Dogg debut was produced by Dr. Dre and includes \'Gin and Juice\'?', 'difficulty' => 3, 'weight' => 551, 'alternatives' => [
                    ['id' => 'da80d43a-e8c7-52f1-92cb-8ed936ba4d91', 'description' => 'To Pimp a Butterfly', 'correct_answer' => false],
                    ['id' => 'b13b8c43-85fb-56ac-ac6c-8bef38453d06', 'description' => 'good kid, m.A.A.d city', 'correct_answer' => false],
                    ['id' => 'dea49ade-6314-53f8-9e88-b5215d6675de', 'description' => 'The Miseducation of Lauryn Hill', 'correct_answer' => false],
                    ['id' => '376c90d1-5890-5bb6-befc-fe7bea3f077a', 'description' => 'Doggystyle', 'correct_answer' => true],
                    ['id' => 'e10533e4-d232-56b1-8f7e-7a4209ae3a61', 'description' => 'The College Dropout', 'correct_answer' => false]
                ]],
        ['id' => '95bf8736-38ae-5c09-bfbe-94677ee28f5c', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Kendrick Lamar album tells a coming-of-age story set in Compton?', 'difficulty' => 3, 'weight' => 431, 'alternatives' => [
                    ['id' => '8879aeb2-f908-56c2-8f74-01f7c02b0ca7', 'description' => 'The Miseducation of Lauryn Hill', 'correct_answer' => false],
                    ['id' => 'f5d8223c-a574-54f4-a0e2-0d1c46e96d56', 'description' => 'good kid, m.A.A.d city', 'correct_answer' => true],
                    ['id' => '41af1dea-cb26-5b34-ab38-e583df474a26', 'description' => 'Ready to Die', 'correct_answer' => false],
                    ['id' => '1e989e15-e18f-5bd3-bf56-4098d6c2331b', 'description' => 'Illmatic', 'correct_answer' => false],
                    ['id' => '3c344596-b275-5860-9ab5-a320c7864a69', 'description' => 'The College Dropout', 'correct_answer' => false]
                ]],
        ['id' => '7ea02454-4915-5a51-8091-6226b4c7170a', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which OutKast album combines the stage names of André 3000 and Big Boi?', 'difficulty' => 3, 'weight' => 589, 'alternatives' => [
                    ['id' => 'cda0a948-a90b-5039-a404-acde46934f9b', 'description' => 'good kid, m.A.A.d city', 'correct_answer' => false],
                    ['id' => '2aab21fc-9fd1-5e19-94bd-24bf6b066ae8', 'description' => 'Enter the Wu-Tang (36 Chambers)', 'correct_answer' => false],
                    ['id' => 'f3a3985c-d957-5c6d-9341-4679d6223164', 'description' => 'Aquemini', 'correct_answer' => true],
                    ['id' => '7c52fde1-fc94-59b4-be45-790e9c1be447', 'description' => 'To Pimp a Butterfly', 'correct_answer' => false],
                    ['id' => '7f9b8c9b-907e-5e3a-b406-a8a454ad56ee', 'description' => 'Illmatic', 'correct_answer' => false]
                ]],
        ['id' => '7e11e786-36cb-524c-8fa3-f81776bffdba', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Kanye West debut includes \'Jesus Walks\' and \'Through the Wire\'?', 'difficulty' => 3, 'weight' => 418, 'alternatives' => [
                    ['id' => '6c78afda-1ad2-5d7c-8805-ba85170493a1', 'description' => 'To Pimp a Butterfly', 'correct_answer' => false],
                    ['id' => '1ec4e044-392a-5147-96cc-bae3578f1057', 'description' => 'Ready to Die', 'correct_answer' => false],
                    ['id' => 'ea67ad41-99d0-5bee-b757-dc52c6565dfe', 'description' => 'The Miseducation of Lauryn Hill', 'correct_answer' => false],
                    ['id' => 'be508bcc-cc16-52e0-a7b1-0a345ac15b05', 'description' => 'Aquemini', 'correct_answer' => false],
                    ['id' => '01bc398a-ff60-5230-aa3d-04afeec90a2c', 'description' => 'The College Dropout', 'correct_answer' => true]
                ]],
        ['id' => '27e98bdf-03e9-547e-a1a0-95c779da28d1', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Dr. Dre solo album helped popularize G-funk?', 'difficulty' => 3, 'weight' => 447, 'alternatives' => [
                    ['id' => '308d5358-6af3-5f66-b974-c4c90ab517cc', 'description' => 'The Miseducation of Lauryn Hill', 'correct_answer' => false],
                    ['id' => '8e49c8ea-a9e2-5dbd-aa57-8958fc678df4', 'description' => 'The Chronic', 'correct_answer' => true],
                    ['id' => 'e9d4599a-a7b6-5db6-bee5-a8bc11512ced', 'description' => 'Doggystyle', 'correct_answer' => false],
                    ['id' => 'e97ddef6-e994-5c77-a5ec-9e40258b2e25', 'description' => 'good kid, m.A.A.d city', 'correct_answer' => false],
                    ['id' => 'ef663b22-5451-55a6-b1f9-689ddf46ccf3', 'description' => 'To Pimp a Butterfly', 'correct_answer' => false]
                ]],
        ['id' => 'e3040d02-906b-5e30-89db-b1fe1e6d3f08', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Wu-Tang Clan debut includes \'C.R.E.A.M.\' and \'Protect Ya Neck\'?', 'difficulty' => 3, 'weight' => 432, 'alternatives' => [
                    ['id' => 'f8c76bb1-da5d-5f3b-98b5-2fc5a621fafa', 'description' => 'Doggystyle', 'correct_answer' => false],
                    ['id' => 'de546035-34fa-5480-95b4-fadcf3b16295', 'description' => 'Aquemini', 'correct_answer' => false],
                    ['id' => '1d701433-0f02-5437-8c84-9823d91f63ef', 'description' => 'Enter the Wu-Tang (36 Chambers)', 'correct_answer' => true],
                    ['id' => 'b857dccf-9514-5228-a7fc-bfda9afa697b', 'description' => 'Illmatic', 'correct_answer' => false],
                    ['id' => '5ab9279e-7702-5a72-9493-8899b5250747', 'description' => 'To Pimp a Butterfly', 'correct_answer' => false]
                ]],
        ['id' => '9ba5f64b-5caf-519d-b175-a8e86fc7b2c4', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which DJ Shadow debut is constructed largely from samples?', 'difficulty' => 3, 'weight' => 456, 'alternatives' => [
                    ['id' => '1d05d29a-0f91-5e02-9286-5d6b7a43758b', 'description' => 'Endtroducing.....', 'correct_answer' => true],
                    ['id' => '8b2e488c-0933-511a-ab2d-ec189a19d4f3', 'description' => 'Homogenic', 'correct_answer' => false],
                    ['id' => 'b0e4b2e3-098b-56d2-bee6-2d34b65cfdff', 'description' => 'Mezzanine', 'correct_answer' => false],
                    ['id' => '0952ece6-d170-5638-a371-8436a7319491', 'description' => 'Vespertine', 'correct_answer' => false],
                    ['id' => '100402d9-841d-54fb-9258-56de9ecd050b', 'description' => 'The Dreaming', 'correct_answer' => false]
                ]],
        ['id' => '75a03c36-926a-5d56-b6bf-5362d5fe4c34', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Avalanches debut is known for its extensive sample collage?', 'difficulty' => 3, 'weight' => 412, 'alternatives' => [
                    ['id' => '6011a2bd-005c-58b9-8b66-77d6edb7b26a', 'description' => 'Since I Left You', 'correct_answer' => true],
                    ['id' => '686c48a2-8820-5d3b-86e6-a28dd9247425', 'description' => 'Dummy', 'correct_answer' => false],
                    ['id' => 'b0aa5fdc-bb74-5e0a-8c39-c366c3e6cb01', 'description' => 'The Dreaming', 'correct_answer' => false],
                    ['id' => '4fc2de70-29e0-57d1-8b72-a5b1ef01c2f3', 'description' => 'Vespertine', 'correct_answer' => false],
                    ['id' => 'fc90161f-1ea6-566b-b751-ff7578e83c5e', 'description' => 'Hounds of Love', 'correct_answer' => false]
                ]],
        ['id' => 'eb4950b6-094b-5063-bfe9-63666288a3ee', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Tricky debut includes \'Overcome\' and \'Black Steel\'?', 'difficulty' => 3, 'weight' => 465, 'alternatives' => [
                    ['id' => 'a56906b5-1c3d-5d4a-8eff-2faaf402756e', 'description' => 'Hounds of Love', 'correct_answer' => false],
                    ['id' => '0eadcca9-0efe-51fc-b6f0-15edb7215364', 'description' => 'Maxinquaye', 'correct_answer' => true],
                    ['id' => '1db21b63-c12f-5247-800d-1fe2ba3bfdc3', 'description' => 'Since I Left You', 'correct_answer' => false],
                    ['id' => '0c58d182-4905-5262-b1ee-abcfcac97679', 'description' => 'Endtroducing.....', 'correct_answer' => false],
                    ['id' => 'f1204687-a31f-5c21-8d41-72c7221c5d02', 'description' => 'Mezzanine', 'correct_answer' => false]
                ]],
        ['id' => 'f55ea1c3-b9bc-5606-b1eb-23a7db012ad0', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Björk album includes \'Army of Me\', \'Hyperballad\', and \'It\'s Oh So Quiet\'?', 'difficulty' => 3, 'weight' => 406, 'alternatives' => [
                    ['id' => '602866f9-82cd-558a-af3c-0bff3be3e405', 'description' => 'Endtroducing.....', 'correct_answer' => false],
                    ['id' => 'd9caffa9-b6aa-5dbc-b100-9384db7b5a20', 'description' => 'Dummy', 'correct_answer' => false],
                    ['id' => 'e60587d6-4eeb-5656-93ae-2c99c0128a55', 'description' => 'The Dreaming', 'correct_answer' => false],
                    ['id' => '0ccb7f27-49a2-583f-b9be-01cd72268796', 'description' => 'Post', 'correct_answer' => true],
                    ['id' => 'e1646beb-8537-5ed0-ba2b-309ad1101806', 'description' => 'Mezzanine', 'correct_answer' => false]
                ]],
        ['id' => 'e99bf8b4-97ed-5a95-9118-4353e27d01e8', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Björk album includes \'Jóga\' and \'Bachelorette\'?', 'difficulty' => 3, 'weight' => 585, 'alternatives' => [
                    ['id' => '92ca4923-dce7-52dd-998a-f67a00ba15a1', 'description' => 'Endtroducing.....', 'correct_answer' => false],
                    ['id' => 'ef1bb786-4edd-51e6-bae0-999ab1273f3d', 'description' => 'Vespertine', 'correct_answer' => false],
                    ['id' => 'f75b8e41-aaf6-5443-a13d-9c23d0a4fe86', 'description' => 'Dummy', 'correct_answer' => false],
                    ['id' => '7531e710-be4b-57b3-8198-a6661fa13f72', 'description' => 'Mezzanine', 'correct_answer' => false],
                    ['id' => 'db71ccbb-5522-5e8b-8f86-324385b1499e', 'description' => 'Homogenic', 'correct_answer' => true]
                ]],
        ['id' => 'ade7510b-63b2-500d-82db-f97d30997b4e', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Kate Bush album includes \'Running Up That Hill\' and \'The Ninth Wave\'?', 'difficulty' => 3, 'weight' => 488, 'alternatives' => [
                    ['id' => 'f171a299-285b-515e-b77e-656fc4160d64', 'description' => 'Endtroducing.....', 'correct_answer' => false],
                    ['id' => '97521ed7-9de4-519e-b1a1-e8d3a77691b7', 'description' => 'Hounds of Love', 'correct_answer' => true],
                    ['id' => 'f47a1323-f55c-57ad-b5a0-2e73985ba642', 'description' => 'Mezzanine', 'correct_answer' => false],
                    ['id' => 'cd84c8b5-4233-5154-95c7-daee6815898e', 'description' => 'The Dreaming', 'correct_answer' => false],
                    ['id' => 'f59d8368-fcf7-5a94-b050-2bb364943cd4', 'description' => 'Homogenic', 'correct_answer' => false]
                ]],
        ['id' => '7d64a3ae-48c6-5fec-a44b-b832576d55e0', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Björk album uses microbeats, choirs, and intimate electronic textures?', 'difficulty' => 3, 'weight' => 562, 'alternatives' => [
                    ['id' => '9840090c-8c8d-5eba-a179-a8e072b99793', 'description' => 'Homogenic', 'correct_answer' => false],
                    ['id' => '7e2740db-399e-50b5-81dc-09fd462044d7', 'description' => 'Post', 'correct_answer' => false],
                    ['id' => '4d3b5f41-1968-532d-a812-c7677ad2a3e6', 'description' => 'Vespertine', 'correct_answer' => true],
                    ['id' => 'ac85e04b-be27-52e7-a39d-cdab489fa40a', 'description' => 'The Dreaming', 'correct_answer' => false],
                    ['id' => '31820e0f-f815-51db-838e-f22594df5a03', 'description' => 'Endtroducing.....', 'correct_answer' => false]
                ]],
        ['id' => 'b877da82-ed33-57ac-b1f1-2741db72444c', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Portishead album includes Beth Gibbons singing \'Roads\' and \'Glory Box\'?', 'difficulty' => 3, 'weight' => 488, 'alternatives' => [
                    ['id' => '6771e849-fbc4-5261-acb2-62f2721c5dc7', 'description' => 'Homogenic', 'correct_answer' => false],
                    ['id' => '2b6e1017-609f-5901-a2a6-42008b674d74', 'description' => 'The Dreaming', 'correct_answer' => false],
                    ['id' => 'e720eb75-704d-5ee1-af81-74cd0ce2dd6f', 'description' => 'Mezzanine', 'correct_answer' => false],
                    ['id' => '883a83b7-30ee-5f63-a00f-0b531021b978', 'description' => 'Endtroducing.....', 'correct_answer' => false],
                    ['id' => '71809609-322d-542d-baab-303d011a1582', 'description' => 'Dummy', 'correct_answer' => true]
                ]],
        ['id' => 'c8c54bcc-b458-5276-af60-1b6acc09da0c', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Philip Glass album was conceived as an accessible introduction to his music?', 'difficulty' => 4, 'weight' => 799, 'alternatives' => [
                    ['id' => 'a9169df1-117b-5bb9-93e2-34de244ce3f5', 'description' => 'In C', 'correct_answer' => false],
                    ['id' => 'f548c7ce-45dd-5681-a7bb-81f4f678ae2a', 'description' => 'Glassworks', 'correct_answer' => true],
                    ['id' => '84d0c62b-0403-57ee-9f21-650d1921b8db', 'description' => 'Tabula Rasa', 'correct_answer' => false],
                    ['id' => 'b29ddaf8-7fbc-5ffc-8964-ab0ac8404d9e', 'description' => 'Fratres', 'correct_answer' => false],
                    ['id' => 'e1f143c7-49e3-5400-8454-02b1da941cf8', 'description' => 'The Sinking of the Titanic', 'correct_answer' => false]
                ]],
        ['id' => 'cdb9787b-ec6c-5e9e-9fd5-d22dc5abdaaf', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Gavin Bryars composition develops stories about music played during the Titanic sinking?', 'difficulty' => 4, 'weight' => 780, 'alternatives' => [
                    ['id' => 'a6c0cb69-8b49-5b5b-9d3e-7b51bb8613d4', 'description' => 'The Sinking of the Titanic', 'correct_answer' => true],
                    ['id' => '25c0db27-b890-5f0c-a948-10cb42082381', 'description' => 'Tabula Rasa', 'correct_answer' => false],
                    ['id' => '728f7892-2928-53b7-90d6-0fa18c5d804b', 'description' => 'Einstein on the Beach', 'correct_answer' => false],
                    ['id' => '5efc8f8d-5436-5d5a-ac88-a0fac1280710', 'description' => 'Glassworks', 'correct_answer' => false],
                    ['id' => '84cb82f4-69fb-5a2e-a8f8-ffada304759a', 'description' => 'Fratres', 'correct_answer' => false]
                ]],
        ['id' => '4521dd16-bb06-558b-86ad-4ff01e725062', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Terry Riley composition allows performers to repeat 53 short patterns?', 'difficulty' => 4, 'weight' => 617, 'alternatives' => [
                    ['id' => '1ff954be-f168-57ac-b1e1-30d42e9ff44c', 'description' => 'Drumming', 'correct_answer' => false],
                    ['id' => 'c1df63ab-80cf-597c-84b7-4de030473fb6', 'description' => 'Glassworks', 'correct_answer' => false],
                    ['id' => 'fd50ec22-5f3b-5698-8a08-4c100dd19d04', 'description' => 'In C', 'correct_answer' => true],
                    ['id' => '627d129a-ff0d-562a-8006-78eb0c79a303', 'description' => 'Einstein on the Beach', 'correct_answer' => false],
                    ['id' => '4e2e92ff-7893-503d-a54d-30e1e7865120', 'description' => 'The Well-Tuned Piano', 'correct_answer' => false]
                ]],
        ['id' => 'a2b49740-e8ff-5f57-bcd3-0d3738ce545f', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Philip Glass opera created with Robert Wilson avoids conventional narrative?', 'difficulty' => 4, 'weight' => 602, 'alternatives' => [
                    ['id' => 'a8985d80-13ef-51a5-bb8a-6b77a8ab413d', 'description' => 'Drumming', 'correct_answer' => false],
                    ['id' => '66364de1-0e3d-578e-baf8-dac7522aa3db', 'description' => 'Einstein on the Beach', 'correct_answer' => true],
                    ['id' => 'd7936a9f-5786-59be-b12b-ac6be889f9b9', 'description' => 'Fratres', 'correct_answer' => false],
                    ['id' => '1ea91044-2242-561f-9a66-98a3b4dc0b5d', 'description' => 'Music for 18 Musicians', 'correct_answer' => false],
                    ['id' => '7ca429f2-a43d-5fc3-9c1d-a9c5cabce374', 'description' => 'The Sinking of the Titanic', 'correct_answer' => false]
                ]],
        ['id' => 'b1054c4f-455a-5834-9efc-682cc267e700', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Arvo Pärt work from 1977 is associated with tintinnabuli?', 'difficulty' => 4, 'weight' => 797, 'alternatives' => [
                    ['id' => 'bf4ef482-db13-5940-905a-521c7658c52a', 'description' => 'Tabula Rasa', 'correct_answer' => true],
                    ['id' => 'b43a19f5-34c4-51a9-9515-9c257d0ff672', 'description' => 'Music for 18 Musicians', 'correct_answer' => false],
                    ['id' => 'efc03374-f043-5b61-bcf7-4e231091bb50', 'description' => 'Einstein on the Beach', 'correct_answer' => false],
                    ['id' => 'f2683fed-6df2-559e-88d5-e133fc026a66', 'description' => 'Fratres', 'correct_answer' => false],
                    ['id' => '758906fd-0d5e-5890-8fbd-5008de242a71', 'description' => 'Glassworks', 'correct_answer' => false]
                ]],
        ['id' => 'd6094f11-e6fa-5367-88e8-8c268975438c', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Terry Riley album from 1969 is a seminal minimalist work?', 'difficulty' => 4, 'weight' => 723, 'alternatives' => [
                    ['id' => '9fc78e50-236c-572a-a5b5-bde57084ec36', 'description' => 'Einstein on the Beach', 'correct_answer' => false],
                    ['id' => 'c15dd552-d9a6-5cde-a563-496fce329555', 'description' => 'The Well-Tuned Piano', 'correct_answer' => false],
                    ['id' => '78b8215d-cc58-56b4-a2dd-fae437ff57c2', 'description' => 'A Rainbow in Curved Air', 'correct_answer' => true],
                    ['id' => '5913a721-3245-587c-b44f-17f868a4e03c', 'description' => 'The Sinking of the Titanic', 'correct_answer' => false],
                    ['id' => '14fa9acb-0ea6-568b-b773-37ca30b99c78', 'description' => 'Drumming', 'correct_answer' => false]
                ]],
        ['id' => '8122f56a-6503-5269-828f-1b2106bcfede', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Steve Reich composition explores rhythmic phasing using percussion instruments?', 'difficulty' => 4, 'weight' => 617, 'alternatives' => [
                    ['id' => '05b476f3-5c0f-5601-a063-218a759db6d1', 'description' => 'Einstein on the Beach', 'correct_answer' => false],
                    ['id' => 'df730a1e-829f-56e9-adee-715c1bb761e0', 'description' => 'Music for 18 Musicians', 'correct_answer' => false],
                    ['id' => '1cadf507-284c-5dfc-a365-07efcb6aeded', 'description' => 'The Well-Tuned Piano', 'correct_answer' => false],
                    ['id' => '687b2e77-1dfd-51c0-a6e0-c8d09114e31e', 'description' => 'Glassworks', 'correct_answer' => false],
                    ['id' => 'dfd91045-4830-56c8-821f-74f7c24d5ac6', 'description' => 'Drumming', 'correct_answer' => true]
                ]],
        ['id' => 'e5a5431c-ead6-5d7e-b7db-a1a9809be3b6', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Steve Reich composition uses cycles of pulses and repeating patterns?', 'difficulty' => 4, 'weight' => 652, 'alternatives' => [
                    ['id' => 'fe4562c1-60de-5176-9668-4852b249a294', 'description' => 'Music for 18 Musicians', 'correct_answer' => true],
                    ['id' => '26d2a6aa-b1e5-531f-8f64-05b2d89ad39e', 'description' => 'A Rainbow in Curved Air', 'correct_answer' => false],
                    ['id' => '2cfe61fd-3ac5-5f69-9fd0-041a5396a972', 'description' => 'In C', 'correct_answer' => false],
                    ['id' => '5b2eeb8f-4c5c-5e3e-bb44-be44c4b1928a', 'description' => 'Drumming', 'correct_answer' => false],
                    ['id' => '38b7896d-39be-5a01-a2c2-6f563c851c52', 'description' => 'Glassworks', 'correct_answer' => false]
                ]],
        ['id' => '28f12099-3876-5638-a8ee-080e5867f945', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Aphex Twin double album combines prepared-piano pieces with complex electronics?', 'difficulty' => 4, 'weight' => 699, 'alternatives' => [
                    ['id' => '94ae3c30-4b9d-55da-823c-e8a13236f43c', 'description' => 'Selected Ambient Works 85–92', 'correct_answer' => false],
                    ['id' => 'ed074635-d997-5781-9137-73d2cfe52f05', 'description' => 'Frequencies', 'correct_answer' => false],
                    ['id' => '277c7804-014a-5b7c-b0dc-77afee30cc04', 'description' => 'Untrue', 'correct_answer' => false],
                    ['id' => '19f9fc88-3a74-543c-9edc-57118e42fcc5', 'description' => 'Drukqs', 'correct_answer' => true],
                    ['id' => '593a576d-14d0-5e8f-a6e9-3a762a2e968c', 'description' => 'Rossz Csillag Alatt Született', 'correct_answer' => false]
                ]],
        ['id' => '207707fa-720e-555c-92b6-0223b876c905', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which LFO debut from 1991 became a landmark of British bleep techno?', 'difficulty' => 4, 'weight' => 632, 'alternatives' => [
                    ['id' => '508c922c-2052-5a07-9b4b-ecac62f0b32b', 'description' => 'Frequencies', 'correct_answer' => true],
                    ['id' => 'c91ab49d-7439-50ca-901c-645a2534b2da', 'description' => 'Geogaddi', 'correct_answer' => false],
                    ['id' => '3fe5743f-8712-5349-ad14-ea12c3171fa0', 'description' => 'Tri Repetae', 'correct_answer' => false],
                    ['id' => '6503b66e-4e47-5b1d-b9dc-33a10fe16d33', 'description' => 'Selected Ambient Works 85–92', 'correct_answer' => false],
                    ['id' => '3101d8d5-5d2c-5692-bc86-6be278674ea3', 'description' => 'Amber', 'correct_answer' => false]
                ]],
        ['id' => 'e5e521c4-b211-56a1-89ea-cfb8dd9a4755', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Autechre album from 1995 is associated with abstract IDM?', 'difficulty' => 4, 'weight' => 700, 'alternatives' => [
                    ['id' => '473c0b22-bf4b-58b4-8fe0-16136e57875a', 'description' => 'Geogaddi', 'correct_answer' => false],
                    ['id' => '44739a6a-d888-506b-b9ad-4ba3abe15516', 'description' => 'Tri Repetae', 'correct_answer' => true],
                    ['id' => '4dc77e8b-a0e2-58f3-859a-82db51162b88', 'description' => 'Untrue', 'correct_answer' => false],
                    ['id' => '29911c7b-fe45-5afe-a438-8d663b50a72b', 'description' => 'Drukqs', 'correct_answer' => false],
                    ['id' => 'dbb962dc-e525-5a94-be20-003bd3deadaa', 'description' => 'Amber', 'correct_answer' => false]
                ]],
        ['id' => '05b1e1b8-73a9-5939-b77e-284f0149b909', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Venetian Snares album combines breakcore with classical samples and Hungarian references?', 'difficulty' => 4, 'weight' => 724, 'alternatives' => [
                    ['id' => 'd4d6f53c-6590-5c12-bc5b-4b875f94beaa', 'description' => 'Music Has the Right to Children', 'correct_answer' => false],
                    ['id' => 'c464c59f-78f1-5d86-82fe-34e7543bde44', 'description' => 'Selected Ambient Works 85–92', 'correct_answer' => false],
                    ['id' => '3ec48204-6a04-521b-aa51-745d2bd09e55', 'description' => 'Rossz Csillag Alatt Született', 'correct_answer' => true],
                    ['id' => 'd866c5c1-19a4-58b9-9bf8-547090bc3733', 'description' => 'Frequencies', 'correct_answer' => false],
                    ['id' => 'ea667dea-2f56-54fa-947f-9747a1186ffd', 'description' => 'Drukqs', 'correct_answer' => false]
                ]],
        ['id' => '754c4f12-a5de-51c8-b1ad-d7e52752c592', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which 1992 Warp Records compilation helped establish the identity of IDM?', 'difficulty' => 4, 'weight' => 781, 'alternatives' => [
                    ['id' => '394cf75c-c54c-556e-bcc2-2f4c47696676', 'description' => 'Tri Repetae', 'correct_answer' => false],
                    ['id' => 'fd9ba73f-cd42-5ac6-b87a-daecd25b9496', 'description' => 'Amber', 'correct_answer' => false],
                    ['id' => '7638b6fe-65fd-5a02-abd8-2224ff46181d', 'description' => 'Selected Ambient Works 85–92', 'correct_answer' => false],
                    ['id' => 'aa412f0d-d2d6-52af-a933-4ada921a3d26', 'description' => 'Artificial Intelligence', 'correct_answer' => true],
                    ['id' => '9f3844b2-bca3-526c-8136-b98090801489', 'description' => 'Music Has the Right to Children', 'correct_answer' => false]
                ]],
        ['id' => 'dd52ed7a-903d-58f7-928b-d280a7f359b9', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Boards of Canada debut includes \'Roygbiv\' and \'Aquarius\'?', 'difficulty' => 4, 'weight' => 751, 'alternatives' => [
                    ['id' => '873f6601-4758-5443-a224-94e3dd3957d9', 'description' => 'Amber', 'correct_answer' => false],
                    ['id' => '6a4be552-019e-5c48-9f64-14f41e05dc4d', 'description' => 'Tri Repetae', 'correct_answer' => false],
                    ['id' => '729b540f-ec2f-5672-99db-f5ec71b7557f', 'description' => 'Rossz Csillag Alatt Született', 'correct_answer' => false],
                    ['id' => '14bc1ca4-0f87-5940-8f8d-881acfdcb8ab', 'description' => 'Artificial Intelligence', 'correct_answer' => false],
                    ['id' => '33de850e-6329-52c5-8a82-88501d3344f2', 'description' => 'Music Has the Right to Children', 'correct_answer' => true]
                ]],
        ['id' => '74359714-906a-5056-8098-6dc8fe15dd5f', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Burial album is a landmark of atmospheric dubstep and includes \'Archangel\'?', 'difficulty' => 4, 'weight' => 777, 'alternatives' => [
                    ['id' => 'bb04bc65-12f7-5976-872b-3a2508f8b3b3', 'description' => 'Tri Repetae', 'correct_answer' => false],
                    ['id' => '5c2ed447-e7a8-52ec-9dbd-18f92e86b589', 'description' => 'Geogaddi', 'correct_answer' => false],
                    ['id' => 'bb9dc219-9322-5bfb-9885-82761cb8da60', 'description' => 'Untrue', 'correct_answer' => true],
                    ['id' => 'b2c4f2aa-8fcc-532e-b525-09c38d1d5615', 'description' => 'Music Has the Right to Children', 'correct_answer' => false],
                    ['id' => '228c34c6-3f27-52e7-9084-6e2ccdff8511', 'description' => 'Amber', 'correct_answer' => false]
                ]],
        ['id' => '15b13698-56c2-52cc-b516-13f8d0153b87', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Aphex Twin debut collects ambient electronic compositions from the late 1980s and early 1990s?', 'difficulty' => 4, 'weight' => 683, 'alternatives' => [
                    ['id' => '6b18a36e-9fd0-5662-a464-a00aacf4e9f9', 'description' => 'Drukqs', 'correct_answer' => false],
                    ['id' => '1b8991a3-bb23-5ac6-aa29-5bf5093462ba', 'description' => 'Artificial Intelligence', 'correct_answer' => false],
                    ['id' => '31ccfa4d-d926-5e7b-b879-c6551f4fbe2f', 'description' => 'Tri Repetae', 'correct_answer' => false],
                    ['id' => 'c55605a8-aaba-5cff-a6f9-122eeab65518', 'description' => 'Untrue', 'correct_answer' => false],
                    ['id' => '5341614e-862d-5c57-9540-2ac0a620854f', 'description' => 'Selected Ambient Works 85–92', 'correct_answer' => true]
                ]],
        ['id' => 'a3a38901-4983-5ab3-a2bf-7a48fe90a19c', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Jorge Ben Jor album includes \'Errare Humanum Est\' and references alchemy?', 'difficulty' => 4, 'weight' => 668, 'alternatives' => [
                    ['id' => 'e0191ddc-deb2-5e00-b11c-a35403db279e', 'description' => 'Paêbirú', 'correct_answer' => false],
                    ['id' => 'e2409b29-865a-53d6-adee-c8893de7c9b8', 'description' => 'A Tábua de Esmeralda', 'correct_answer' => true],
                    ['id' => '052a93c5-2b28-5ea2-836c-b78c08d717b1', 'description' => 'Jardim Elétrico', 'correct_answer' => false],
                    ['id' => '7f32e965-e9b7-538a-b50d-75a5b4da562f', 'description' => 'Lóki?', 'correct_answer' => false],
                    ['id' => 'de932cac-d41b-5f7b-b532-4bcdc71911b7', 'description' => 'No Sub Reino dos Metazoários', 'correct_answer' => false]
                ]],
        ['id' => 'b5656fe4-9a35-5523-8c92-bd47f2236552', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which 1974 Arnaldo Baptista solo album is known for its confessional tone?', 'difficulty' => 4, 'weight' => 705, 'alternatives' => [
                    ['id' => 'aba52380-7ad9-5c20-a304-20939dbfda45', 'description' => 'Krig-ha, Bandolo!', 'correct_answer' => false],
                    ['id' => 'fc3fc6b5-d9d2-5182-8cc6-55351d8d4ae5', 'description' => 'Jardim Elétrico', 'correct_answer' => false],
                    ['id' => 'b42fca17-f31f-588d-9d43-2b127719a98e', 'description' => 'Satwa', 'correct_answer' => false],
                    ['id' => '8f6358a9-47a8-58b8-9358-35c45e6532ae', 'description' => 'No Sub Reino dos Metazoários', 'correct_answer' => false],
                    ['id' => 'ba6b5220-7e1e-54eb-85f1-de9b47fd8123', 'description' => 'Lóki?', 'correct_answer' => true]
                ]],
        ['id' => '216a1620-a4e9-5c21-aee2-a69d2a0ebdae', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Júpiter Maçã debut from 1996 is a Brazilian psychedelic-rock landmark?', 'difficulty' => 4, 'weight' => 611, 'alternatives' => [
                    ['id' => 'ca142d27-f567-54fe-9875-ab4c414b9415', 'description' => 'A Tábua de Esmeralda', 'correct_answer' => false],
                    ['id' => 'badf6986-62cf-53a9-ae81-7554f9284421', 'description' => 'Krig-ha, Bandolo!', 'correct_answer' => false],
                    ['id' => '17d0d3a1-be29-541f-b135-2622d7f26065', 'description' => 'Tudo Foi Feito pelo Sol', 'correct_answer' => false],
                    ['id' => '4ddc940f-376b-5736-9a2a-bd5037a52177', 'description' => 'Lóki?', 'correct_answer' => false],
                    ['id' => 'c2d3902c-7790-5b12-9d6d-61149e56c43b', 'description' => 'A Sétima Efervescência', 'correct_answer' => true]
                ]],
        ['id' => 'ba3bac8c-af31-55ae-9ee7-8b4f41dfbb71', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which 1973 album by Marconi Notaro is part of Pernambuco\'s udigrudi movement?', 'difficulty' => 4, 'weight' => 619, 'alternatives' => [
                    ['id' => '569aff89-a662-5dc8-be46-cfcfb4e362ae', 'description' => 'A Tábua de Esmeralda', 'correct_answer' => false],
                    ['id' => 'a6be7bb6-c340-547f-ad3d-c6dc8c37b351', 'description' => 'Lóki?', 'correct_answer' => false],
                    ['id' => '9955590d-8981-59f2-ae87-62e11bd1116f', 'description' => 'No Sub Reino dos Metazoários', 'correct_answer' => true],
                    ['id' => '7d3434f5-d23e-5f20-95c9-46e8e36fa860', 'description' => 'Paêbirú', 'correct_answer' => false],
                    ['id' => '34a33a26-f3e3-5e8a-b838-fea982ba811e', 'description' => 'A Sétima Efervescência', 'correct_answer' => false]
                ]],
        ['id' => 'da1f7cc5-4152-5ad0-8da9-5f3b4322ac79', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which 1975 double album by Lula Côrtes and Zé Ramalho is associated with Pernambuco psychedelia?', 'difficulty' => 4, 'weight' => 739, 'alternatives' => [
                    ['id' => 'fa38f664-a69a-548e-8bb8-b82800418a05', 'description' => 'Paêbirú', 'correct_answer' => true],
                    ['id' => 'a480f2af-e84d-55c7-b326-77d96c0776be', 'description' => 'A Sétima Efervescência', 'correct_answer' => false],
                    ['id' => '95ea197f-5a51-59c4-92ff-d8f01faadef7', 'description' => 'Tudo Foi Feito pelo Sol', 'correct_answer' => false],
                    ['id' => '42d427fe-1b36-5ec6-9b53-61d97dc01192', 'description' => 'Lóki?', 'correct_answer' => false],
                    ['id' => 'e5eff42c-eedc-5fa7-8c28-452a741db605', 'description' => 'A Tábua de Esmeralda', 'correct_answer' => false]
                ]],
        ['id' => '07b8e793-f71a-5481-90c3-f0e511149207', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which 1974 Mutantes album marks the band\'s progressive-rock phase?', 'difficulty' => 4, 'weight' => 783, 'alternatives' => [
                    ['id' => '66c8bb79-f8c9-5aa2-bf4f-7513399000a9', 'description' => 'Satwa', 'correct_answer' => false],
                    ['id' => '0a038bf9-02b8-5df0-82db-d17af93ec6e2', 'description' => 'A Tábua de Esmeralda', 'correct_answer' => false],
                    ['id' => 'e14ea6be-6227-564c-b8a7-b9da88c71e20', 'description' => 'Fruto Proibido', 'correct_answer' => false],
                    ['id' => 'f435a4fd-5d85-5169-921c-44bc34a229fb', 'description' => 'No Sub Reino dos Metazoários', 'correct_answer' => false],
                    ['id' => '8f210520-5972-55af-afb5-ee6cfd313378', 'description' => 'Tudo Foi Feito pelo Sol', 'correct_answer' => true]
                ]],
        ['id' => '4da12724-cc45-5e79-94c1-d222639e91f2', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Rita Lee & Tutti Frutti album includes \'Agora Só Falta Você\' and \'Ovelha Negra\'?', 'difficulty' => 4, 'weight' => 716, 'alternatives' => [
                    ['id' => '633c5836-6ce0-572f-8648-9e60afc69642', 'description' => 'Tudo Foi Feito pelo Sol', 'correct_answer' => false],
                    ['id' => 'b9fed3c5-a782-5b23-8aa9-ea47e3ca1e47', 'description' => 'A Tábua de Esmeralda', 'correct_answer' => false],
                    ['id' => 'f6ffe03c-a670-5cca-aece-ba6ddfa56603', 'description' => 'Fruto Proibido', 'correct_answer' => true],
                    ['id' => '0f381e2a-fdf0-5bf1-a083-8032ee507a1f', 'description' => 'Jardim Elétrico', 'correct_answer' => false],
                    ['id' => 'a092798f-d324-53e1-846d-c3ddda28f6c2', 'description' => 'No Sub Reino dos Metazoários', 'correct_answer' => false]
                ]],
        ['id' => '39a2cf89-36a4-5d3e-b770-b7c7984c1f8f', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which 1973 instrumental album by Lula Côrtes and Lailson is a landmark of Brazilian psychedelic music?', 'difficulty' => 4, 'weight' => 609, 'alternatives' => [
                    ['id' => 'd6f5a49e-9b18-5ff9-9419-245a4e4e847b', 'description' => 'Tudo Foi Feito pelo Sol', 'correct_answer' => false],
                    ['id' => 'f5d93dd4-6fef-5738-9650-d2230eec714d', 'description' => 'Satwa', 'correct_answer' => true],
                    ['id' => '3e2681a3-7050-520a-8789-d4e26ce6be9c', 'description' => 'Paêbirú', 'correct_answer' => false],
                    ['id' => '5e2cda8d-3d9d-5c56-b482-69d3f3fee296', 'description' => 'Jardim Elétrico', 'correct_answer' => false],
                    ['id' => '4c84410f-9a98-5b42-94c2-9217c04b2df5', 'description' => 'Krig-ha, Bandolo!', 'correct_answer' => false]
                ]],
        ['id' => 'a32f4afe-d24c-579a-ae5e-e0e20f160637', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which CunninLynguists album is known for its conceptual narrative and atmospheric production?', 'difficulty' => 4, 'weight' => 658, 'alternatives' => [
                    ['id' => '036b7923-be8c-5265-855f-77fc14633c6a', 'description' => 'Operation: Doomsday', 'correct_answer' => false],
                    ['id' => 'bb58dd77-4be5-52f7-a5ef-cc04ca7cac80', 'description' => 'Donuts', 'correct_answer' => false],
                    ['id' => '17898692-aff7-59dc-8e83-f24b1534db7f', 'description' => 'The Cold Vein', 'correct_answer' => false],
                    ['id' => '49f12d51-eaff-5c4f-a6d2-4dc7800f9f2b', 'description' => 'A Piece of Strange', 'correct_answer' => true],
                    ['id' => '8b8d75af-4742-5685-a9ea-e7e0b58eeec0', 'description' => 'Madvillainy', 'correct_answer' => false]
                ]],
        ['id' => '8c6ab175-4a8f-5b99-ade6-33a1a80aa409', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Aesop Rock album includes \'Daylight\' and explores work and urban life?', 'difficulty' => 4, 'weight' => 727, 'alternatives' => [
                    ['id' => '164ce272-c42b-5fc6-bcdd-4404b71fd177', 'description' => 'Labor Days', 'correct_answer' => true],
                    ['id' => 'bbe844e2-2aef-547d-a0fc-d9a5f7769c39', 'description' => 'Funcrusher Plus', 'correct_answer' => false],
                    ['id' => 'a0aeb38a-2cd9-58fa-b42d-1dfef81d1a60', 'description' => 'The Cold Vein', 'correct_answer' => false],
                    ['id' => '9703d705-b6a1-5a90-b841-22600c1d8dbd', 'description' => 'Black on Both Sides', 'correct_answer' => false],
                    ['id' => '2932361e-9201-56be-adda-796a4d385db8', 'description' => 'Below the Heavens', 'correct_answer' => false]
                ]],
        ['id' => '69e90fae-4d3d-573e-ad15-c729f510bb3b', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Mos Def debut includes \'Ms. Fat Booty\' and \'Mathematics\'?', 'difficulty' => 4, 'weight' => 784, 'alternatives' => [
                    ['id' => '77d24792-526b-50a2-a7af-1300277844c1', 'description' => 'Fantastic Damage', 'correct_answer' => false],
                    ['id' => '8eb75663-8311-5c07-9006-965226ad7193', 'description' => 'The Cold Vein', 'correct_answer' => false],
                    ['id' => '15930012-d465-5b1a-bc67-79c99844ae10', 'description' => 'Black on Both Sides', 'correct_answer' => true],
                    ['id' => '02205c13-6827-5e95-88c0-34decaa37158', 'description' => 'Madvillainy', 'correct_answer' => false],
                    ['id' => 'b9563a6e-9290-5ce9-b3ec-46150e38ced9', 'description' => 'Operation: Doomsday', 'correct_answer' => false]
                ]],
        ['id' => '8e3463bf-db1f-5ca7-a500-31ecf7801e2e', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which MF DOOM and Madlib collaboration includes \'Accordion\' and \'All Caps\'?', 'difficulty' => 4, 'weight' => 683, 'alternatives' => [
                    ['id' => 'ba860749-3b0c-5cdb-9d82-af119b98d71e', 'description' => 'Madvillainy', 'correct_answer' => true],
                    ['id' => 'ff22e338-2f42-5593-89e9-2adb4f4e4d52', 'description' => 'A Piece of Strange', 'correct_answer' => false],
                    ['id' => 'addfc22e-7481-537d-9ffd-bff9073edecf', 'description' => 'Below the Heavens', 'correct_answer' => false],
                    ['id' => '4bbf299c-4041-50f3-b7c1-e96e3414e338', 'description' => 'Black on Both Sides', 'correct_answer' => false],
                    ['id' => '6cff8117-7ad8-5128-a3ea-07b4103381ed', 'description' => 'Funcrusher Plus', 'correct_answer' => false]
                ]],
        ['id' => '8ddc205b-36aa-5643-b70a-a687073e193c', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which instrumental J Dilla album was released in 2006 shortly before his death?', 'difficulty' => 4, 'weight' => 697, 'alternatives' => [
                    ['id' => '308a145b-f64a-53d3-b225-793e90ca31ab', 'description' => 'Donuts', 'correct_answer' => true],
                    ['id' => '37993447-4ba6-5129-a01b-478dbb3b22b6', 'description' => 'Madvillainy', 'correct_answer' => false],
                    ['id' => '278a1fb5-9bdf-539a-b341-b11d46eae43a', 'description' => 'Below the Heavens', 'correct_answer' => false],
                    ['id' => 'cad9c520-ef1f-5a23-8d38-7aea4b421777', 'description' => 'Operation: Doomsday', 'correct_answer' => false],
                    ['id' => '5f8d3c2d-36f5-5a5e-a4be-f2cc73e91c43', 'description' => 'The Cold Vein', 'correct_answer' => false]
                ]],
        ['id' => 'addb4fa0-754a-582e-8b0a-b06e807285cd', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which El-P solo album consolidated his experimental sound after Company Flow?', 'difficulty' => 4, 'weight' => 763, 'alternatives' => [
                    ['id' => '5a2a36cd-1e7f-5084-8c07-df8f3d83edc0', 'description' => 'A Piece of Strange', 'correct_answer' => false],
                    ['id' => 'e001aa1e-11ab-5314-a346-40deb7f3144b', 'description' => 'Black on Both Sides', 'correct_answer' => false],
                    ['id' => 'e696d1b7-f26b-5b5e-8c4f-385649bf3776', 'description' => 'The Cold Vein', 'correct_answer' => false],
                    ['id' => 'b5cc0356-2375-594c-a091-f38eca6af136', 'description' => 'Fantastic Damage', 'correct_answer' => true],
                    ['id' => '6bef4eaa-7393-5dd4-a690-6dfb1a01a940', 'description' => 'Operation: Doomsday', 'correct_answer' => false]
                ]],
        ['id' => '008d67d3-bdb2-5b57-affe-e44b94a47f1f', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Cannibal Ox debut was produced by El-P and released on Definitive Jux?', 'difficulty' => 4, 'weight' => 625, 'alternatives' => [
                    ['id' => '60554d5e-6a33-55b7-b883-b1319582c40c', 'description' => 'Funcrusher Plus', 'correct_answer' => false],
                    ['id' => 'c636a942-4ec5-582c-b16c-865efae3b67a', 'description' => 'The Cold Vein', 'correct_answer' => true],
                    ['id' => '3eb5f3eb-02e1-58c6-b4e2-515a4f2ae0fa', 'description' => 'Madvillainy', 'correct_answer' => false],
                    ['id' => '24b4e1b9-0993-5109-b18e-42ba6e84fc67', 'description' => 'Donuts', 'correct_answer' => false],
                    ['id' => '3428d439-4ab8-5c49-ac61-20ab81ac1e06', 'description' => 'Operation: Doomsday', 'correct_answer' => false]
                ]],
        ['id' => 'aed92496-1d27-51e3-888a-96377011cfa7', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Company Flow debut is a landmark of 1990s underground hip-hop?', 'difficulty' => 4, 'weight' => 671, 'alternatives' => [
                    ['id' => '5cc8e046-8d87-5627-99ed-97d1548ece81', 'description' => 'Funcrusher Plus', 'correct_answer' => true],
                    ['id' => 'b901d194-2381-5b19-a077-c40af5ed3205', 'description' => 'Black on Both Sides', 'correct_answer' => false],
                    ['id' => '0db6108f-0d34-5c43-9b25-f6591544644b', 'description' => 'The Cold Vein', 'correct_answer' => false],
                    ['id' => '5f1594f6-1693-57bf-8901-eb88485e6e89', 'description' => 'Labor Days', 'correct_answer' => false],
                    ['id' => '1dd28615-e2da-570e-967d-3de317b973d4', 'description' => 'Fantastic Damage', 'correct_answer' => false]
                ]],
        ['id' => '1562ec2b-8d4c-5fce-9b19-e09366cc26f3', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which hour-long Brian Eno composition was originally created for a video installation?', 'difficulty' => 4, 'weight' => 706, 'alternatives' => [
                    ['id' => '59e801a3-70be-52cf-bbf4-eb5a1264f91d', 'description' => 'Thursday Afternoon', 'correct_answer' => true],
                    ['id' => 'b1cf54f4-5f2e-55ec-8e25-8dd2797a0e3b', 'description' => 'Ambient 4: On Land', 'correct_answer' => false],
                    ['id' => '84543a24-55bc-555c-b427-b48b5a02e8ed', 'description' => 'Discreet Music', 'correct_answer' => false],
                    ['id' => '8d0d18fa-f779-5f94-a240-57610b1f18d2', 'description' => 'The Pearl', 'correct_answer' => false],
                    ['id' => 'f4c4ade8-1437-5850-990b-e7b4eaab8164', 'description' => 'Music for Airports', 'correct_answer' => false]
                ]],
        ['id' => '0e3f44e0-5007-5078-9e1b-0505acb564dd', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which 1975 Brian Eno album explores generative processes and background music?', 'difficulty' => 4, 'weight' => 602, 'alternatives' => [
                    ['id' => '044934fd-405f-5cce-ac14-fdff95788f7f', 'description' => 'Discreet Music', 'correct_answer' => true],
                    ['id' => '2c4df16e-2608-52df-8ed0-bbbb1e837419', 'description' => 'And Their Refinement of the Decline', 'correct_answer' => false],
                    ['id' => 'd9067a4e-f089-5f3e-93b8-1682d39697b8', 'description' => 'Music for Airports', 'correct_answer' => false],
                    ['id' => '6d260520-ace1-5ee1-b9f2-47d71b67f859', 'description' => 'Structures from Silence', 'correct_answer' => false],
                    ['id' => 'bec27962-a85f-51f8-b11d-d01dd6bcd842', 'description' => 'Thursday Afternoon', 'correct_answer' => false]
                ]],
        ['id' => '132b4c52-1e3e-564b-9598-c5cb03c9bb70', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Harold Budd album produced by Brian Eno includes \'Bismillahi \'Rrahmani \'Rrahim\'?', 'difficulty' => 4, 'weight' => 783, 'alternatives' => [
                    ['id' => 'e41a8169-d494-5e37-bb72-6f1cdbc3b969', 'description' => 'Discreet Music', 'correct_answer' => false],
                    ['id' => 'ee7eabf0-83cf-52c4-bcbc-d2455a6f77ad', 'description' => 'Music for Airports', 'correct_answer' => false],
                    ['id' => '74ce7197-eb9b-5ab4-bb98-89f577e0c372', 'description' => 'The Pavilion of Dreams', 'correct_answer' => true],
                    ['id' => '40de81c7-0e0f-5abf-9ee2-de29909e8446', 'description' => 'Ambient 4: On Land', 'correct_answer' => false],
                    ['id' => 'b5181c08-b214-56f5-9545-29d61722c422', 'description' => 'The Pearl', 'correct_answer' => false]
                ]],
        ['id' => 'a2b3c644-777a-5545-add6-8b3492cedf9b', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which 2007 Stars of the Lid album combines orchestral drones and slow-moving textures?', 'difficulty' => 4, 'weight' => 743, 'alternatives' => [
                    ['id' => 'bf8a281c-3636-59af-b693-f295c72657ec', 'description' => 'The Pavilion of Dreams', 'correct_answer' => false],
                    ['id' => '04556474-07ec-592e-a963-433fec33bd66', 'description' => 'Ambient 4: On Land', 'correct_answer' => false],
                    ['id' => '3354b2f3-d26e-5c65-ad3e-f5a0ca07c690', 'description' => 'Deep Listening', 'correct_answer' => false],
                    ['id' => 'bae7afe2-d50e-539d-a7c7-9476a13d9a06', 'description' => 'And Their Refinement of the Decline', 'correct_answer' => true],
                    ['id' => 'd97cc7d2-7217-5d68-90b2-66309f1282b4', 'description' => 'Structures from Silence', 'correct_answer' => false]
                ]],
        ['id' => '0e17e9a0-c512-547d-b070-67c28d37d7bb', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which album by Pauline Oliveros, Stuart Dempster, and Panaiotis was recorded in an underground cistern?', 'difficulty' => 4, 'weight' => 740, 'alternatives' => [
                    ['id' => '4a3ae9fe-d8be-5ad5-b2e5-d91dcc314edc', 'description' => 'Deep Listening', 'correct_answer' => true],
                    ['id' => 'e4f21406-88f6-5dcf-bfcc-7814a3930122', 'description' => 'The Pearl', 'correct_answer' => false],
                    ['id' => 'a22aed86-df6c-54dc-b7e9-e172c10f9b33', 'description' => 'And Their Refinement of the Decline', 'correct_answer' => false],
                    ['id' => '692d7b51-00fd-502d-a321-b67b42ec146e', 'description' => 'The Tired Sounds of Stars of the Lid', 'correct_answer' => false],
                    ['id' => 'eafa74d7-384a-528e-8377-8499162d0ac3', 'description' => 'Music for Airports', 'correct_answer' => false]
                ]],
        ['id' => 'fefd4cfe-56b0-5edf-99bf-37108ddae1c9', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which 2001 double album by Stars of the Lid is a landmark of ambient drone?', 'difficulty' => 4, 'weight' => 664, 'alternatives' => [
                    ['id' => 'e49f4bd4-0fa8-5323-84ad-d260e349f65c', 'description' => 'The Tired Sounds of Stars of the Lid', 'correct_answer' => true],
                    ['id' => '3d278999-21a6-56cd-b434-ad2e072111fc', 'description' => 'Discreet Music', 'correct_answer' => false],
                    ['id' => 'f7aaed87-fe86-507e-98af-7a1d82a30c48', 'description' => 'The Pearl', 'correct_answer' => false],
                    ['id' => '9a2600ce-172b-5992-bfcd-8fe98b875fa6', 'description' => 'Structures from Silence', 'correct_answer' => false],
                    ['id' => 'f2eaff33-95bd-5b47-8bff-1e13ae51a499', 'description' => 'The Pavilion of Dreams', 'correct_answer' => false]
                ]],
        ['id' => '4637ca4a-85b3-5a85-97e1-4a6d459d5554', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Brian Eno album uses field recordings and atmospheric textures?', 'difficulty' => 4, 'weight' => 602, 'alternatives' => [
                    ['id' => '77a85d28-5fe9-5b96-aeaf-4fa808dc2863', 'description' => 'The Pavilion of Dreams', 'correct_answer' => false],
                    ['id' => '93224b42-c536-5962-acea-726ae815e6c9', 'description' => 'And Their Refinement of the Decline', 'correct_answer' => false],
                    ['id' => 'dccb2cb2-8a9d-5ae4-b5b1-f10e37dbe640', 'description' => 'Thursday Afternoon', 'correct_answer' => false],
                    ['id' => '21b21e89-bd91-5a42-9409-1bb88edbef10', 'description' => 'Ambient 4: On Land', 'correct_answer' => true],
                    ['id' => 'd7b3ada9-5828-535e-9292-465109a09324', 'description' => 'Deep Listening', 'correct_answer' => false]
                ]],
        ['id' => '662e64f7-b3e8-5f56-94f6-675ac2c3e3f8', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which 1984 Steve Roach album is a landmark of electronic ambient music?', 'difficulty' => 4, 'weight' => 643, 'alternatives' => [
                    ['id' => '40d8c058-cc8b-5b33-9ce7-7075b0b622dc', 'description' => 'Music for Airports', 'correct_answer' => false],
                    ['id' => '1e56b6be-5811-5ea1-bf5a-2e7c446a5a4d', 'description' => 'Thursday Afternoon', 'correct_answer' => false],
                    ['id' => '89db19bc-50e5-588f-8489-58817c37ef59', 'description' => 'Structures from Silence', 'correct_answer' => true],
                    ['id' => 'eb1d1713-899a-50e7-bc2f-eb7a084de601', 'description' => 'The Tired Sounds of Stars of the Lid', 'correct_answer' => false],
                    ['id' => 'b4635281-df66-59aa-89e6-8d52305002fd', 'description' => 'And Their Refinement of the Decline', 'correct_answer' => false]
                ]],
        ['id' => '2c623a26-6923-57c8-b985-83c365100c88', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Stockhausen composition combines electronic sounds and acoustic instruments while exploring spatial relationships?', 'difficulty' => 5, 'weight' => 866, 'alternatives' => [
                    ['id' => 'a9b8c134-9654-501a-b397-ae7c07cd5bbe', 'description' => 'Kontakte', 'correct_answer' => true],
                    ['id' => 'dc73ce7f-0fae-5eec-9c9c-e5474057e157', 'description' => 'Persepolis', 'correct_answer' => false],
                    ['id' => 'bce7027f-0cc9-5a82-b599-8b5e1b5e2835', 'description' => 'Gesang der Jünglinge', 'correct_answer' => false],
                    ['id' => '5ad69eff-01c0-595a-a585-fcdd46962bb8', 'description' => 'Mikrophonie I', 'correct_answer' => false],
                    ['id' => '916d87f3-2881-55ee-8091-12534f15efbe', 'description' => 'Metastaseis', 'correct_answer' => false]
                ]],
        ['id' => 'd57fb888-e320-5cff-8e1e-1ccb8d287f7c', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Varèse work alternates instrumental sections with recorded electronic sound?', 'difficulty' => 5, 'weight' => 959, 'alternatives' => [
                    ['id' => 'b063c4f2-2e09-58eb-bc8c-8312a11ddaac', 'description' => 'Metastaseis', 'correct_answer' => false],
                    ['id' => 'b33c1aa2-c807-58c7-b7d4-d529b8d0c2ae', 'description' => 'Ionisation', 'correct_answer' => false],
                    ['id' => 'dce080e7-0e26-5aa8-bbc4-53d6c34c37b3', 'description' => 'Gruppen', 'correct_answer' => false],
                    ['id' => '746167ef-75bb-5d32-ad1f-e3b0f2ed5085', 'description' => 'Déserts', 'correct_answer' => true],
                    ['id' => 'e99695b0-8e43-5e64-ba0c-ea9da3333915', 'description' => 'Mortuos Plango, Vivos Voco', 'correct_answer' => false]
                ]],
        ['id' => '2a7ccf87-06ef-59c9-bff4-e7e3a1c07cd5', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Jonathan Harvey work uses recordings of Winchester Cathedral bells and his son\'s voice?', 'difficulty' => 5, 'weight' => 829, 'alternatives' => [
                    ['id' => 'ca568a30-7946-5d71-ad63-646ef8efc68a', 'description' => 'Poème électronique', 'correct_answer' => false],
                    ['id' => '276c5cb9-51df-53b1-809f-39abdcfbe41c', 'description' => 'Gruppen', 'correct_answer' => false],
                    ['id' => '43df0131-b2c5-5b78-9975-0edc0d173c78', 'description' => 'Mortuos Plango, Vivos Voco', 'correct_answer' => true],
                    ['id' => '0f49ac13-2cb3-5bea-870f-aaaf727d0e74', 'description' => 'Gesang der Jünglinge', 'correct_answer' => false],
                    ['id' => 'c999b326-e204-5918-ba52-e0d75efb863a', 'description' => 'Metastaseis', 'correct_answer' => false]
                ]],
        ['id' => '055ee780-cf9e-54f0-a02d-a56edda959f6', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which 1931 Varèse composition is written for an ensemble of percussion instruments?', 'difficulty' => 5, 'weight' => 892, 'alternatives' => [
                    ['id' => '360e0af8-f896-5d32-8657-d15df2874e10', 'description' => 'Metastaseis', 'correct_answer' => false],
                    ['id' => 'eabb4a51-62e5-558a-913d-151c6f124850', 'description' => 'Ionisation', 'correct_answer' => true],
                    ['id' => '77145594-f477-52be-99c0-cbb155b9cb53', 'description' => 'Gruppen', 'correct_answer' => false],
                    ['id' => '1224dce9-4e6e-5103-9ac6-e3f9e5e3f971', 'description' => 'Mortuos Plango, Vivos Voco', 'correct_answer' => false],
                    ['id' => 'e5a9f46b-0dcc-5ba2-8422-69a03cee27c8', 'description' => 'Gesang der Jünglinge', 'correct_answer' => false]
                ]],
        ['id' => 'efaa807a-7995-50b2-b8ad-54a258c01557', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Xenakis electroacoustic work was designed for loudspeaker diffusion at the ruins of Persepolis?', 'difficulty' => 5, 'weight' => 838, 'alternatives' => [
                    ['id' => 'f3eb9afd-ec10-50d6-8c47-aa550042c15f', 'description' => 'Poème électronique', 'correct_answer' => false],
                    ['id' => '6da6a921-a014-50af-8b98-10ec22efc3cf', 'description' => 'Mikrophonie I', 'correct_answer' => false],
                    ['id' => '44a819d0-0abc-5d1b-8522-5cb6a65ec3c8', 'description' => 'Gruppen', 'correct_answer' => false],
                    ['id' => 'f7cb13b2-3b90-560e-ae88-bce401e9d4e3', 'description' => 'Déserts', 'correct_answer' => false],
                    ['id' => '78367910-ed59-56ae-bbce-78849ac4055a', 'description' => 'Persepolis', 'correct_answer' => true]
                ]],
        ['id' => 'f3370eff-4e0b-5286-b8e6-724d25be267d', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Xenakis orchestral composition explores sound masses and mathematical structures?', 'difficulty' => 5, 'weight' => 944, 'alternatives' => [
                    ['id' => '429d89d5-5c0c-5f37-ba0f-d16ca995e209', 'description' => 'Persepolis', 'correct_answer' => false],
                    ['id' => 'f85a6fd4-6286-5efb-b9e8-380f5eefa602', 'description' => 'Poème électronique', 'correct_answer' => false],
                    ['id' => 'dd69f1ba-de19-5ab3-a8ee-a85ec0990da7', 'description' => 'Mikrophonie I', 'correct_answer' => false],
                    ['id' => '95d490a0-cba4-5d77-b301-911ef2e97dec', 'description' => 'Metastaseis', 'correct_answer' => true],
                    ['id' => '1fb54401-c670-5c95-98c9-8ec40bd38c8c', 'description' => 'Gesang der Jünglinge', 'correct_answer' => false]
                ]],
        ['id' => '278cb901-9037-584c-be7d-958e982825b8', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Stockhausen electronic work from 1955–56 combines a boy\'s recorded voice with electronic sounds?', 'difficulty' => 5, 'weight' => 923, 'alternatives' => [
                    ['id' => 'fe791201-b34e-50f8-b16b-d916fcf9cd11', 'description' => 'Mortuos Plango, Vivos Voco', 'correct_answer' => false],
                    ['id' => '31e030d4-3b4d-5f9b-8232-d13d5a6f4c67', 'description' => 'Mikrophonie I', 'correct_answer' => false],
                    ['id' => '9bc51f57-7247-58ea-95ae-84645f144a1a', 'description' => 'Gesang der Jünglinge', 'correct_answer' => true],
                    ['id' => 'baaa48e1-ed38-5d0d-a6df-ea92eae6be7f', 'description' => 'Ionisation', 'correct_answer' => false],
                    ['id' => '5024a702-b2e9-5ffa-bd0e-bb965a751f3c', 'description' => 'Persepolis', 'correct_answer' => false]
                ]],
        ['id' => '8d88ce1f-34ef-51ad-8941-734d48731624', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Varèse work was created for the Philips Pavilion at Expo 58?', 'difficulty' => 5, 'weight' => 901, 'alternatives' => [
                    ['id' => '0ec10abb-3c8d-57e6-8919-2a8f83955ac1', 'description' => 'Mikrophonie I', 'correct_answer' => false],
                    ['id' => '4aff6674-05c0-5a92-b835-ff20905477f0', 'description' => 'Poème électronique', 'correct_answer' => true],
                    ['id' => 'af563d95-c384-5f7e-a722-749e53172c4c', 'description' => 'Metastaseis', 'correct_answer' => false],
                    ['id' => 'd3ffc29c-836d-56b4-b995-7c3df764b191', 'description' => 'Déserts', 'correct_answer' => false],
                    ['id' => '9f99a492-b58e-5249-bb7a-35ef393cc7cd', 'description' => 'Persepolis', 'correct_answer' => false]
                ]],
        ['id' => 'ea097fca-4608-51c9-b1db-07fbddac37b2', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which release documents the no wave group DNA associated with Arto Lindsay?', 'difficulty' => 5, 'weight' => 910, 'alternatives' => [
                    ['id' => '9d89f9cc-6203-596e-a0ce-9f53f3ca34bb', 'description' => 'Cop', 'correct_answer' => false],
                    ['id' => '7cf695ab-4e1b-5dae-9c45-e44cb617ae38', 'description' => 'The Ascension', 'correct_answer' => false],
                    ['id' => 'e86de25d-4fc1-5941-8c87-f440c164fa6a', 'description' => 'No New York', 'correct_answer' => false],
                    ['id' => '7409319e-e147-5e58-9967-1cf96cb74358', 'description' => 'A Taste of DNA', 'correct_answer' => true],
                    ['id' => '21b3e087-4596-5c3e-9228-0f1471ce0570', 'description' => 'Trout Mask Replica', 'correct_answer' => false]
                ]],
        ['id' => 'abbdcf40-3cc1-5861-9099-ae6d80c6787a', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Captain Beefheart album produced by Frank Zappa is known for dissonant rhythms and harmonies?', 'difficulty' => 5, 'weight' => 979, 'alternatives' => [
                    ['id' => 'cb8eec96-48a1-5b05-95b1-3dba5bc65db6', 'description' => 'Confusion Is Sex', 'correct_answer' => false],
                    ['id' => '171dbcb8-cc70-5c35-8ac5-3ffd83e586ba', 'description' => 'A Taste of DNA', 'correct_answer' => false],
                    ['id' => 'eb219270-f5f6-5659-ae50-82a1adfda1aa', 'description' => 'Evol', 'correct_answer' => false],
                    ['id' => 'dcf6dad8-7103-5ba1-bc13-8f94f0779511', 'description' => 'Trout Mask Replica', 'correct_answer' => true],
                    ['id' => 'e96bb2bf-a39d-5d54-a259-c1d6ce86c4f8', 'description' => 'The Ascension', 'correct_answer' => false]
                ]],
        ['id' => '094406de-e0a5-5b19-bcf5-db852a187be3', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which 1978 compilation curated by Brian Eno documents the New York no wave scene?', 'difficulty' => 5, 'weight' => 874, 'alternatives' => [
                    ['id' => '14b2c142-1e34-5f57-bd13-afb0ff0321ba', 'description' => 'Confusion Is Sex', 'correct_answer' => false],
                    ['id' => '9ee50af6-9af4-5f81-bab7-17eedaf9061d', 'description' => 'Theoretical Girls', 'correct_answer' => false],
                    ['id' => 'e762289c-858b-5b76-8b66-f96c312cc9d7', 'description' => 'No New York', 'correct_answer' => true],
                    ['id' => '780b55ed-e8b8-55cc-814e-690cb2585a62', 'description' => 'Lick My Decals Off, Baby', 'correct_answer' => false],
                    ['id' => '565d7b82-fedf-5e6f-90d9-70b4ff59cb20', 'description' => 'Trout Mask Replica', 'correct_answer' => false]
                ]],
        ['id' => '7394185b-87d3-5c2d-a7fc-3515592b51c2', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which James Chance and the Contortions album mixes no wave, funk, and jazz?', 'difficulty' => 5, 'weight' => 835, 'alternatives' => [
                    ['id' => 'e549c8a7-b622-5b94-ab22-4979b692d7a5', 'description' => 'Buy', 'correct_answer' => true],
                    ['id' => '179009fb-9b49-5167-8ce2-b9ec1f920d79', 'description' => 'Cop', 'correct_answer' => false],
                    ['id' => '70eb4c46-7272-598a-a150-160f13fef459', 'description' => 'The Ascension', 'correct_answer' => false],
                    ['id' => '56381e4b-3aea-5598-8754-41593cd3c2b3', 'description' => 'Lick My Decals Off, Baby', 'correct_answer' => false],
                    ['id' => 'ffe9f453-b047-5b79-a6d0-c58ba427e6e4', 'description' => 'Confusion Is Sex', 'correct_answer' => false]
                ]],
        ['id' => '010f1170-7cf9-5b9c-9d5e-31ea5f78e0d8', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Glenn Branca album uses guitar ensembles in unconventional tunings and extreme volume?', 'difficulty' => 5, 'weight' => 977, 'alternatives' => [
                    ['id' => 'aeb0d158-0015-5284-aeba-64f8163dd431', 'description' => 'A Taste of DNA', 'correct_answer' => false],
                    ['id' => '4929bb28-5ceb-570b-9d86-35813ed61f27', 'description' => 'Trout Mask Replica', 'correct_answer' => false],
                    ['id' => 'f62edc7e-88f7-59b8-a043-31e821b585a9', 'description' => 'The Ascension', 'correct_answer' => true],
                    ['id' => 'a1140228-dabb-577b-8859-bbad662c7f36', 'description' => 'Buy', 'correct_answer' => false],
                    ['id' => '0464e452-c8bf-5670-b911-ab7390dcf6cb', 'description' => 'Cop', 'correct_answer' => false]
                ]],
        ['id' => 'c56227a9-da46-5771-bc56-0f7d27406046', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Glenn Branca and Jeff Lohn group had recordings collected in a later compilation?', 'difficulty' => 5, 'weight' => 946, 'alternatives' => [
                    ['id' => '121df70f-3770-54ea-9b09-a6517ae5792a', 'description' => 'Evol', 'correct_answer' => false],
                    ['id' => 'd7e7f0c3-797c-5144-93aa-89302e2dbcee', 'description' => 'Confusion Is Sex', 'correct_answer' => false],
                    ['id' => 'ff45f0f1-f0cd-5e7a-94da-916d3bdc8cd9', 'description' => 'Lick My Decals Off, Baby', 'correct_answer' => false],
                    ['id' => '1d24249a-b248-5c0a-be48-59221504d14e', 'description' => 'Theoretical Girls', 'correct_answer' => true],
                    ['id' => '152c6999-18e0-5cea-b772-d4f58e2b904d', 'description' => 'Buy', 'correct_answer' => false]
                ]],
        ['id' => '72d8a255-e339-5698-b7e1-85f1f0dd23fb', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which 1970 Captain Beefheart album continues the experimental approach of Trout Mask Replica?', 'difficulty' => 5, 'weight' => 877, 'alternatives' => [
                    ['id' => 'dee7f79d-e4e7-57c2-9e14-0bb08f0ba191', 'description' => 'Confusion Is Sex', 'correct_answer' => false],
                    ['id' => 'f0b19099-a5a9-5781-90e7-679e343a4818', 'description' => 'Cop', 'correct_answer' => false],
                    ['id' => '0088982c-2231-5c48-b319-d75a11fbfc92', 'description' => 'No New York', 'correct_answer' => false],
                    ['id' => '8db1db7a-3c67-5d26-a015-ce624e9bd29e', 'description' => 'Lick My Decals Off, Baby', 'correct_answer' => true],
                    ['id' => '7894fdfc-80dd-5125-b19d-1c269be0f38e', 'description' => 'A Taste of DNA', 'correct_answer' => false]
                ]],
        ['id' => '99b26357-e869-55f3-b79a-95be3131b447', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which 1986 Sonic Youth album marks a phase of alternative tunings and noise experimentation?', 'difficulty' => 5, 'weight' => 894, 'alternatives' => [
                    ['id' => 'a7e7c22c-e8ba-5009-8c97-af38d71c6857', 'description' => 'Confusion Is Sex', 'correct_answer' => false],
                    ['id' => '0dbd335c-d600-5ad4-8407-6e9d75fecc50', 'description' => 'Cop', 'correct_answer' => false],
                    ['id' => 'f85be8e0-8421-5c69-b805-4d99475b424b', 'description' => 'Evol', 'correct_answer' => true],
                    ['id' => '4780f021-06a9-58dd-861c-dfa34300090c', 'description' => 'No New York', 'correct_answer' => false],
                    ['id' => '3f756442-3f64-5b05-841f-4abcaa9443e4', 'description' => 'Trout Mask Replica', 'correct_answer' => false]
                ]],
        ['id' => '9f78f5fa-38cc-50cb-931d-f919ae815cf0', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Pharoah Sanders composition features an expanded ensemble and repetitive pulse?', 'difficulty' => 5, 'weight' => 838, 'alternatives' => [
                    ['id' => '4db2770f-e2f6-5b06-9c57-e046ebe9dcf9', 'description' => 'Nipples', 'correct_answer' => false],
                    ['id' => 'ec7fb404-e5a3-5b5b-a819-b68781c329a5', 'description' => 'The Black Saint and the Sinner Lady', 'correct_answer' => false],
                    ['id' => '9724b8b6-1a23-5cb0-a921-cd1e28b8d0d3', 'description' => 'Black Unity', 'correct_answer' => true],
                    ['id' => 'aca6482c-9134-5ae1-9f2e-f4e627577bd4', 'description' => 'Ascension', 'correct_answer' => false],
                    ['id' => '681b6018-2eea-5a19-b5b9-080d67e7c3ce', 'description' => 'Machine Gun', 'correct_answer' => false]
                ]],
        ['id' => '2b2922a8-e75c-53c5-81ca-5135b919129b', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which 1970 album documents the trio of Evan Parker, Derek Bailey, and Han Bennink?', 'difficulty' => 5, 'weight' => 922, 'alternatives' => [
                    ['id' => '6d6597c9-0639-5d3e-9d8d-05afe86d5c2b', 'description' => 'Out to Lunch!', 'correct_answer' => false],
                    ['id' => 'f21247d0-ca76-5abf-8884-822580f7321c', 'description' => 'Machine Gun', 'correct_answer' => false],
                    ['id' => 'abda4364-15e8-54e5-81a9-45145ec399a8', 'description' => 'Nipples', 'correct_answer' => false],
                    ['id' => '7d05d1e5-4684-55e0-b749-6ede5ad6b5c0', 'description' => 'The Topography of the Lungs', 'correct_answer' => true],
                    ['id' => 'b5ce1a80-d871-534c-83c8-9b91711f1da3', 'description' => 'Karma', 'correct_answer' => false]
                ]],
        ['id' => '6397ae43-8a62-5af7-8bc3-a371b350841c', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Charles Mingus suite was recorded in 1963 with arrangements by Bob Hammer?', 'difficulty' => 5, 'weight' => 818, 'alternatives' => [
                    ['id' => '5affb72a-ac3c-5c85-b6c1-9b43ebbfdda2', 'description' => 'Nipples', 'correct_answer' => false],
                    ['id' => '44761250-dcd9-5df9-b57c-407c02bc2e50', 'description' => 'Out to Lunch!', 'correct_answer' => false],
                    ['id' => '96b2e81d-71ea-509a-bc8f-96481b85b047', 'description' => 'The Black Saint and the Sinner Lady', 'correct_answer' => true],
                    ['id' => '57cf5d3d-d9c4-5ae6-a8f3-3e00fcef9e23', 'description' => 'Karma', 'correct_answer' => false],
                    ['id' => 'dc2da9d6-97ef-56b5-b631-8d01e10e9619', 'description' => 'The Topography of the Lungs', 'correct_answer' => false]
                ]],
        ['id' => '8baca6e5-42a4-588b-92c4-add5ec040f0d', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which 1966 John Coltrane recording features a large ensemble in collective improvisation?', 'difficulty' => 5, 'weight' => 956, 'alternatives' => [
                    ['id' => 'a0692d21-4ec9-5f05-9661-c2a23829013d', 'description' => 'The Topography of the Lungs', 'correct_answer' => false],
                    ['id' => 'beb9d267-041b-55d8-92ea-336675a32d0a', 'description' => 'The Black Saint and the Sinner Lady', 'correct_answer' => false],
                    ['id' => '5a6965ad-9038-5b2e-bc38-f0c2539db6b0', 'description' => 'Ascension', 'correct_answer' => true],
                    ['id' => 'a95bd3fb-075e-597b-95c0-a4fd8cd2e0de', 'description' => 'Free Jazz', 'correct_answer' => false],
                    ['id' => '4f6b7a23-4563-5111-9dbe-efdefb47e632', 'description' => 'Nipples', 'correct_answer' => false]
                ]],
        ['id' => 'edb4a833-8e60-59d2-933e-ae338dce3aaa', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Peter Brötzmann album from 1968 is a landmark of European free jazz?', 'difficulty' => 5, 'weight' => 863, 'alternatives' => [
                    ['id' => '6f33871d-89ba-5d1b-afcf-2f349ae39c06', 'description' => 'Out to Lunch!', 'correct_answer' => false],
                    ['id' => '987cb84a-1357-5924-8f65-c97d8ed24ea7', 'description' => 'Nipples', 'correct_answer' => false],
                    ['id' => '6cc7fd5f-9f54-56a6-ae47-87655cd6f9b1', 'description' => 'The Black Saint and the Sinner Lady', 'correct_answer' => false],
                    ['id' => 'a660c5ee-b73d-511b-ad61-b5ccf5483b08', 'description' => 'Machine Gun', 'correct_answer' => true],
                    ['id' => 'de602470-9ec2-5e50-a3b2-07137730f70b', 'description' => 'Free Jazz', 'correct_answer' => false]
                ]],
        ['id' => '3ad528a3-cedf-56fd-8230-385d96192f4f', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which 1969 Peter Brötzmann album features Derek Bailey, Evan Parker, and Han Bennink?', 'difficulty' => 5, 'weight' => 976, 'alternatives' => [
                    ['id' => '376e5388-758d-5464-b9be-e638a8faf7f1', 'description' => 'Ascension', 'correct_answer' => false],
                    ['id' => 'a7c02add-150e-58d8-9269-fa428ad03c58', 'description' => 'The Topography of the Lungs', 'correct_answer' => false],
                    ['id' => '33a50001-05f4-5eca-bf4e-5cb30131f189', 'description' => 'Nipples', 'correct_answer' => true],
                    ['id' => '3b80f9ad-1f28-50f0-a8dc-07fc1da6ddad', 'description' => 'The Black Saint and the Sinner Lady', 'correct_answer' => false],
                    ['id' => 'ba68c7bf-ee9a-5cd5-a874-23adcead7d7f', 'description' => 'Karma', 'correct_answer' => false]
                ]],
        ['id' => 'e7d6d1a8-1b1a-5394-a310-429dd6e4bb33', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Pharoah Sanders album includes \'The Creator Has a Master Plan\'?', 'difficulty' => 5, 'weight' => 851, 'alternatives' => [
                    ['id' => '8e9ac1f9-b49b-5572-ab30-23b0ddea4414', 'description' => 'Free Jazz', 'correct_answer' => false],
                    ['id' => '49e605e8-05b5-5634-b1ce-b6105300cf8d', 'description' => 'Karma', 'correct_answer' => true],
                    ['id' => 'fe09714e-e75b-539e-b33e-f696c835f6e9', 'description' => 'Out to Lunch!', 'correct_answer' => false],
                    ['id' => 'a2e52013-5591-5c87-aab1-8b2cab1f8936', 'description' => 'Ascension', 'correct_answer' => false],
                    ['id' => 'ae6f814f-4634-590e-885a-7352a0c36215', 'description' => 'The Topography of the Lungs', 'correct_answer' => false]
                ]],
        ['id' => '681e67c1-1bb1-50b5-b924-b457e3f5f4f6', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Dave Holland Quartet album includes Anthony Braxton and Sam Rivers?', 'difficulty' => 5, 'weight' => 933, 'alternatives' => [
                    ['id' => '8b566333-6eb6-5cab-89a7-cd8eea2ef532', 'description' => 'Ascension', 'correct_answer' => false],
                    ['id' => 'c007381e-97d3-5a7b-940f-c7485c0334fb', 'description' => 'Karma', 'correct_answer' => false],
                    ['id' => 'f3d5eebd-026b-5d0f-8450-97ef7ce14e2d', 'description' => 'The Black Saint and the Sinner Lady', 'correct_answer' => false],
                    ['id' => '11e7486e-c17e-5f0d-bfef-04c909f9ec13', 'description' => 'Conference of the Birds', 'correct_answer' => true],
                    ['id' => '2a1f34a8-e157-535f-ae2f-40256c2708dd', 'description' => 'Black Unity', 'correct_answer' => false]
                ]],
        ['id' => 'f9a78811-6ea1-511d-908b-6e06df940b16', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Amon Düül II double album includes \'Soap Shop Rock\'?', 'difficulty' => 5, 'weight' => 968, 'alternatives' => [
                    ['id' => 'c349e8a4-8d53-535f-b2b2-dcf4f06fc8e4', 'description' => 'Phallus Dei', 'correct_answer' => false],
                    ['id' => '7000201a-5c6c-524c-8a77-01a945fa0a5d', 'description' => 'Zuckerzeit', 'correct_answer' => false],
                    ['id' => '500d3583-32d8-5e5d-9f7a-b143540d1126', 'description' => 'Musik von Harmonia', 'correct_answer' => false],
                    ['id' => '10c4c9f1-8536-50e0-bf52-7ff9f8c07493', 'description' => 'Yeti', 'correct_answer' => true],
                    ['id' => 'cbe2b786-4f95-5964-ae50-117b266927b6', 'description' => 'Faust IV', 'correct_answer' => false]
                ]],
        ['id' => 'cdb5114e-9673-5b3d-ae02-76bf9e40f39a', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Can double album includes the long tracks \'Halleluhwah\' and \'Aumgn\'?', 'difficulty' => 5, 'weight' => 935, 'alternatives' => [
                    ['id' => '6cd1c50a-fd5f-506d-8457-562cc555f184', 'description' => 'Cluster II', 'correct_answer' => false],
                    ['id' => 'c28b2529-c9ab-5c8c-b1ec-4dc5a92587ee', 'description' => 'Neu! 75', 'correct_answer' => false],
                    ['id' => 'bb56d517-3d1e-5cba-809b-77971fa9511e', 'description' => 'Phallus Dei', 'correct_answer' => false],
                    ['id' => 'a2b5b2dd-90e0-58ed-b8d7-61d5c3b2e15f', 'description' => 'Tago Mago', 'correct_answer' => true],
                    ['id' => 'c5f3794a-1d09-5dc2-bd5f-3d24472c1c32', 'description' => 'The Faust Tapes', 'correct_answer' => false]
                ]],
        ['id' => '0eb734da-4522-518b-9ada-abf80aa98818', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which 1973 Faust album was sold at a low price in the UK and combines sound collage with experimental rock?', 'difficulty' => 5, 'weight' => 852, 'alternatives' => [
                    ['id' => '8408a2e7-b07d-5ba9-be39-07fbcce1e16d', 'description' => 'Musik von Harmonia', 'correct_answer' => false],
                    ['id' => '0e682a6b-be23-5388-8e7f-8e4197d18a9a', 'description' => 'Tago Mago', 'correct_answer' => false],
                    ['id' => '2c96fce2-7ccc-5eb3-adb1-57783f425b9c', 'description' => 'Neu! 75', 'correct_answer' => false],
                    ['id' => 'dc6a357f-61e5-53a4-9d60-c0781c8a17ee', 'description' => 'The Faust Tapes', 'correct_answer' => true],
                    ['id' => '29065a8a-2db9-5389-b4a5-046b17c2d4e0', 'description' => 'Zuckerzeit', 'correct_answer' => false]
                ]],
        ['id' => '4836cd56-7755-588f-bdc4-18c63320b636', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Faust album includes \'Krautrock\' and \'The Sad Skinhead\'?', 'difficulty' => 5, 'weight' => 902, 'alternatives' => [
                    ['id' => 'ae931c36-15a5-5672-a59a-ee870f745b60', 'description' => 'Phallus Dei', 'correct_answer' => false],
                    ['id' => 'b7f4c9c6-4930-5d35-bfd3-504453ca1ff8', 'description' => 'Ege Bamyasi', 'correct_answer' => false],
                    ['id' => '5fca43d9-cdc9-5731-af90-8862c30fe7ba', 'description' => 'Cluster II', 'correct_answer' => false],
                    ['id' => '77a33f6c-2374-53ac-b076-a58098c1c7ed', 'description' => 'The Faust Tapes', 'correct_answer' => false],
                    ['id' => 'a65602e5-4cea-5965-ae10-ac0f2ccc15ea', 'description' => 'Faust IV', 'correct_answer' => true]
                ]],
        ['id' => 'a586d879-8f1c-581f-8154-a63d2b23bbf5', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Neu! album has one side of motorik music and another with heavier, punk-influenced tracks?', 'difficulty' => 5, 'weight' => 992, 'alternatives' => [
                    ['id' => 'd77c97b0-0763-5146-aa53-1ea4776f9d8e', 'description' => 'Ege Bamyasi', 'correct_answer' => false],
                    ['id' => '6413bb77-b9f0-5a12-8b89-1ef5c9f22e91', 'description' => 'Neu! 75', 'correct_answer' => true],
                    ['id' => '7e8c3880-fd1e-552d-9e32-3617d12db984', 'description' => 'Cluster II', 'correct_answer' => false],
                    ['id' => '9b83031f-b3bf-585d-aa66-25f8abd78785', 'description' => 'Zuckerzeit', 'correct_answer' => false],
                    ['id' => '11db2c34-f1c0-5104-bcfc-4687699187bf', 'description' => 'Yeti', 'correct_answer' => false]
                ]],
        ['id' => '987683f5-d204-54f2-b1f7-07f5f565dd7a', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Can album includes \'Vitamin C\' and \'Spoon\'?', 'difficulty' => 5, 'weight' => 881, 'alternatives' => [
                    ['id' => 'cf6accdd-917f-522c-bc57-a931aff9bb6b', 'description' => 'Zuckerzeit', 'correct_answer' => false],
                    ['id' => 'ad50ab54-e50f-540c-b73b-08f1ab9f937c', 'description' => 'Faust IV', 'correct_answer' => false],
                    ['id' => '7106fae3-46a0-579e-951f-3f3cd93c3e12', 'description' => 'Tago Mago', 'correct_answer' => false],
                    ['id' => '11da19f6-3ebc-567c-ad7a-f06fa030c28a', 'description' => 'Ege Bamyasi', 'correct_answer' => true],
                    ['id' => '6daf4454-1bb6-52d5-a6b3-bb1b1c5e07b2', 'description' => 'Phallus Dei', 'correct_answer' => false]
                ]],
        ['id' => 'db9bb321-7edc-5a7a-a5ef-9e097a97f2a7', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Harmonia debut brings together members of Cluster and Neu!?', 'difficulty' => 5, 'weight' => 1000, 'alternatives' => [
                    ['id' => '821e86e7-c743-55ab-bfbd-0ee0b34b1dcb', 'description' => 'Zuckerzeit', 'correct_answer' => false],
                    ['id' => '02c0d55f-f83d-57f9-9b9e-a75f47bfb023', 'description' => 'Yeti', 'correct_answer' => false],
                    ['id' => '0fabdf2f-ef4a-51d6-82ef-81275771596f', 'description' => 'Cluster II', 'correct_answer' => false],
                    ['id' => '97ab7f18-79af-5410-97ff-1ffac34f85b5', 'description' => 'Faust IV', 'correct_answer' => false],
                    ['id' => 'c57914c4-75d8-5a31-b9b1-3e1cb7443b64', 'description' => 'Musik von Harmonia', 'correct_answer' => true]
                ]],
        ['id' => 'afb64251-3229-5974-85ff-6ce1304a3324', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Cluster album made with Michael Rother features more regular rhythmic structures?', 'difficulty' => 5, 'weight' => 863, 'alternatives' => [
                    ['id' => '702b4bb8-d76c-5976-b114-af35f188c2f6', 'description' => 'Tago Mago', 'correct_answer' => false],
                    ['id' => 'f711230c-2229-551f-bdcc-918b08d1466d', 'description' => 'Cluster II', 'correct_answer' => false],
                    ['id' => 'c4ccacbd-2717-5ec9-a299-2690971860eb', 'description' => 'Zuckerzeit', 'correct_answer' => true],
                    ['id' => '13cb3b40-9663-5fb0-b3c3-e5798e61cacf', 'description' => 'The Faust Tapes', 'correct_answer' => false],
                    ['id' => 'b1e37195-1bbc-5b17-93d1-13aeaea6bb96', 'description' => 'Ege Bamyasi', 'correct_answer' => false]
                ]],
        ['id' => 'a264c394-2dff-5888-bb98-933e118d40b0', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Cornelius Cardew cycle was composed for the Scratch Orchestra and uses a text by Confucius?', 'difficulty' => 5, 'weight' => 959, 'alternatives' => [
                    ['id' => '2493c331-552d-5633-bb9e-13e0c699b17d', 'description' => 'Vexations', 'correct_answer' => false],
                    ['id' => '1d9d0b4e-40a9-54c2-b61d-750c77c5eef7', 'description' => 'Roaratorio', 'correct_answer' => false],
                    ['id' => '037c43db-8c8f-52aa-94bd-4b1e2f063550', 'description' => 'The Great Learning', 'correct_answer' => true],
                    ['id' => '91038ffa-bb01-5147-9391-ed7fe9b8e44a', 'description' => 'December 1952', 'correct_answer' => false],
                    ['id' => '575dd31f-226d-5a81-b8a6-33ba956c96d7', 'description' => 'Music of Changes', 'correct_answer' => false]
                ]],
        ['id' => 'e6d18a88-af9e-542f-aa31-98ef75fa76d5', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Cornelius Cardew graphic score contains 193 pages of symbols?', 'difficulty' => 5, 'weight' => 982, 'alternatives' => [
                    ['id' => '7abe0cb7-c5ea-57f8-b190-2815b7b3dbab', 'description' => 'Vexations', 'correct_answer' => false],
                    ['id' => 'eb5fd545-42cc-572f-8830-bfcd95ad5a09', 'description' => 'Treatise', 'correct_answer' => true],
                    ['id' => '0124045a-49ef-52aa-8560-b1e47f42580b', 'description' => 'In C', 'correct_answer' => false],
                    ['id' => '953973bb-036e-52c9-9cc1-4b45ca1ad15d', 'description' => 'December 1952', 'correct_answer' => false],
                    ['id' => 'f116caa5-7770-5a7c-a776-5a004fb500fe', 'description' => 'Roaratorio', 'correct_answer' => false]
                ]],
        ['id' => 'c5bcea58-4875-5111-90b5-5e5cade1a177', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Terry Riley composition consists of 53 modules repeated at performers\' discretion?', 'difficulty' => 5, 'weight' => 906, 'alternatives' => [
                    ['id' => '57d6677e-8b30-5bb3-9612-8d95c33eda42', 'description' => 'Music of Changes', 'correct_answer' => false],
                    ['id' => '5e05a1f2-52b7-5e7f-99d3-ff320d42ceef', 'description' => 'Vexations', 'correct_answer' => false],
                    ['id' => 'bd066330-b03c-58bd-98c3-c3d5f3eb100d', 'description' => 'Pendulum Music', 'correct_answer' => false],
                    ['id' => '37813a04-1506-554f-a419-e7fab26ad077', 'description' => 'In C', 'correct_answer' => true],
                    ['id' => '0e67c20e-167e-5d0b-b823-fdf59306d316', 'description' => 'Treatise', 'correct_answer' => false]
                ]],
        ['id' => '85d7936b-12e1-531f-a8dc-1df5d57686f1', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which John Cage work combines Finnegans Wake, field recordings, and traditional Irish music?', 'difficulty' => 5, 'weight' => 818, 'alternatives' => [
                    ['id' => '3aae8989-84a6-5b9c-acac-7d77dd473b73', 'description' => 'Roaratorio', 'correct_answer' => true],
                    ['id' => '0c748ee5-0366-533c-8565-bfc5f82e0915', 'description' => 'Pendulum Music', 'correct_answer' => false],
                    ['id' => 'aa929458-8639-5dc8-b33e-21e5cfad6129', 'description' => 'Music of Changes', 'correct_answer' => false],
                    ['id' => '7fd180f1-2c9d-500a-bfd2-10940054cb90', 'description' => 'Treatise', 'correct_answer' => false],
                    ['id' => 'cdb1954f-07aa-5f83-adb1-18216db95c4a', 'description' => 'Vexations', 'correct_answer' => false]
                ]],
        ['id' => 'dfc572ba-5464-5888-9c77-856652a148d8', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Earle Brown graphic composition is a visual score made of rectangles and lines?', 'difficulty' => 5, 'weight' => 912, 'alternatives' => [
                    ['id' => '99b77f6b-477f-5d36-beea-582b30e3a3f2', 'description' => 'December 1952', 'correct_answer' => true],
                    ['id' => 'fef5176d-962f-5e28-8ed5-2fbc24f5bd67', 'description' => 'Vexations', 'correct_answer' => false],
                    ['id' => 'b7a95ce0-51ef-5024-bee0-05653e2e6c02', 'description' => 'Music of Changes', 'correct_answer' => false],
                    ['id' => 'e38555b3-eea6-57a0-9605-37c3b4db9d93', 'description' => 'In C', 'correct_answer' => false],
                    ['id' => '9f69e8bb-7db9-578b-8686-60bbdf9c5a0d', 'description' => 'Four Organs', 'correct_answer' => false]
                ]],
        ['id' => '5fe284f9-6e0d-5c6a-aece-8c98d79672d7', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Steve Reich piece uses swinging microphones in front of loudspeakers to create feedback?', 'difficulty' => 5, 'weight' => 967, 'alternatives' => [
                    ['id' => '47d49a16-6fc1-52c0-b730-067ab6aba4b0', 'description' => 'Four Organs', 'correct_answer' => false],
                    ['id' => '419a1b89-c1a2-5dce-9593-a5e9c79309b1', 'description' => 'Roaratorio', 'correct_answer' => false],
                    ['id' => '40f4abeb-99fd-5514-94a6-5bab15b9d36a', 'description' => 'The Great Learning', 'correct_answer' => false],
                    ['id' => 'ae5ddb60-7114-5651-b482-6da67f5f9705', 'description' => 'Treatise', 'correct_answer' => false],
                    ['id' => 'ded0faab-bf47-5db0-b64f-edda489c9564', 'description' => 'Pendulum Music', 'correct_answer' => true]
                ]],
        ['id' => '8bbae484-8377-57c9-823e-dd76a8145952', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which Erik Satie piece contains a short theme marked to be repeated 840 times?', 'difficulty' => 5, 'weight' => 940, 'alternatives' => [
                    ['id' => '9e9eee84-4c7f-515a-8276-76da6c483ecd', 'description' => 'Four Organs', 'correct_answer' => false],
                    ['id' => '15af29f4-6ad7-514b-9b09-3971692b7675', 'description' => 'Vexations', 'correct_answer' => true],
                    ['id' => 'c3ec051f-d0b1-52b8-bf52-8eb1ab4af72d', 'description' => 'Music of Changes', 'correct_answer' => false],
                    ['id' => 'c9d031f0-070a-57c6-93e3-d4e7dcef7b17', 'description' => 'Pendulum Music', 'correct_answer' => false],
                    ['id' => '26dfc8ec-c1bd-5f40-b2fa-8849f8f8affc', 'description' => '4′33″', 'correct_answer' => false]
                ]],
        ['id' => 'd424c5d8-afee-58a2-a686-bf5c9606da08', 'locale' => 'en-US', 'category' => '1758f6dd-c6fc-5a69-bc54-a468ac5fe5eb', 'question' => 'Which John Cage composition uses chance procedures inspired by the I Ching?', 'difficulty' => 5, 'weight' => 920, 'alternatives' => [
                    ['id' => '864c67fa-aab9-5996-b402-55ad52aa4b92', 'description' => 'Pendulum Music', 'correct_answer' => false],
                    ['id' => '4e197ce0-a459-5752-ad9f-1f4582df78e1', 'description' => '4′33″', 'correct_answer' => false],
                    ['id' => '84a3bb9e-3acc-562f-8983-bfdeef5cbfc6', 'description' => 'Music of Changes', 'correct_answer' => true],
                    ['id' => 'cbe3502a-4f10-5a45-9ca2-0232387e5c83', 'description' => 'Treatise', 'correct_answer' => false],
                    ['id' => '031b9601-ee18-5a99-ab80-7bda03d1c844', 'description' => 'The Great Learning', 'correct_answer' => false]
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
