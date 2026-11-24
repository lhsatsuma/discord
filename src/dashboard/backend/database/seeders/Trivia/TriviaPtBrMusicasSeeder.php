<?php

namespace Database\Seeders\Trivia;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TriviaPtBrMusicasSeeder extends Seeder
{
    private const CATEGORY = ['id' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'created_by' => 'SYSTEM', 'short_description' => 'músicas', 'description' => 'Musicas'];

    private const QUESTIONS = [
        ['id' => '17ae3be8-665e-5dea-9b2c-df5b9e43ae4c', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual banda lançou \'Radioactive\' e \'Believer\'?', 'difficulty' => 1, 'weight' => 193, 'alternatives' => [
                    ['id' => '3aeb3b24-9e03-558c-a6b3-91e40ad3d948', 'description' => 'Imagine Dragons', 'correct_answer' => true],
                    ['id' => 'b79c5855-dccc-5d3e-b856-60d6bdce9a21', 'description' => 'Queen', 'correct_answer' => false],
                    ['id' => '2ca6d676-cb7b-5f99-9150-646f80617a50', 'description' => 'Metallica', 'correct_answer' => false],
                    ['id' => 'bd33f677-32c1-5c02-8aaa-07e23fa75f73', 'description' => 'Guns N\' Roses', 'correct_answer' => false],
                    ['id' => 'c5eab691-38c7-54ef-a368-5620668a5e4f', 'description' => 'ABBA', 'correct_answer' => false]
                ]],
        ['id' => '7d2822fa-8f25-5c5d-ac4e-3762ec2f4ca2', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual banda lançou \'Sweet Child o\' Mine\' e \'Welcome to the Jungle\'?', 'difficulty' => 1, 'weight' => 197, 'alternatives' => [
                    ['id' => '9a7b83f5-37a9-5636-b939-5a36f142cc36', 'description' => 'Queen', 'correct_answer' => false],
                    ['id' => '9e447f15-0c5d-5ce3-816e-f83014e6da95', 'description' => 'Guns N\' Roses', 'correct_answer' => true],
                    ['id' => '073b8f66-71bc-5efc-b266-2d1d0a2f8642', 'description' => 'The Beatles', 'correct_answer' => false],
                    ['id' => '63cafced-ddc5-5e95-9dbb-ec1656af4535', 'description' => 'ABBA', 'correct_answer' => false],
                    ['id' => '1185afb7-40fa-52f7-9d5d-9e44a7109120', 'description' => 'U2', 'correct_answer' => false]
                ]],
        ['id' => 'f9b884b9-6983-5f0b-8b63-1c64092dac0a', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual grupo sueco ficou conhecido por sucessos como \'Dancing Queen\' e \'Mamma Mia\'?', 'difficulty' => 1, 'weight' => 175, 'alternatives' => [
                    ['id' => 'c0d01c80-f97f-5407-a19a-3c5830ac25ca', 'description' => 'Metallica', 'correct_answer' => false],
                    ['id' => 'f52d3ad3-8683-5e8b-9946-65a740634c8f', 'description' => 'Imagine Dragons', 'correct_answer' => false],
                    ['id' => '6a53b990-32cd-5562-90f1-f23248ab0112', 'description' => 'Nirvana', 'correct_answer' => false],
                    ['id' => 'fca36560-8780-53f3-8b18-8c9883812ada', 'description' => 'ABBA', 'correct_answer' => true],
                    ['id' => 'ba90fdc6-0ba5-572d-8b72-f5b59cf6e415', 'description' => 'Queen', 'correct_answer' => false]
                ]],
        ['id' => '6083a77f-3ba0-5cd1-b968-6519f845c6a7', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual banda lançou o álbum \'Abbey Road\'?', 'difficulty' => 1, 'weight' => 150, 'alternatives' => [
                    ['id' => '305af0c2-e944-585e-be39-0d1476f6114a', 'description' => 'ABBA', 'correct_answer' => false],
                    ['id' => '279d043e-9f7f-5653-bfbb-840251c1de42', 'description' => 'U2', 'correct_answer' => false],
                    ['id' => '89255e55-4317-5f2b-873a-2f1d904e25df', 'description' => 'The Beatles', 'correct_answer' => true],
                    ['id' => '255fe8fd-69c1-51ee-9317-99ecc6949d02', 'description' => 'Guns N\' Roses', 'correct_answer' => false],
                    ['id' => '3d8e949c-475f-5ff9-88da-6f1edd7c0bcd', 'description' => 'Nirvana', 'correct_answer' => false]
                ]],
        ['id' => '3345d026-ca2d-5815-bd49-d4dad26b3e11', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual banda de rock lançou o álbum \'Nevermind\', que inclui \'Smells Like Teen Spirit\'?', 'difficulty' => 1, 'weight' => 163, 'alternatives' => [
                    ['id' => '3ad78098-05c0-529c-b89b-f055de733d64', 'description' => 'Guns N\' Roses', 'correct_answer' => false],
                    ['id' => 'c603d33e-7afc-571c-b109-c8d7ebe8d523', 'description' => 'ABBA', 'correct_answer' => false],
                    ['id' => '4d98e0fe-9255-5cbe-ac22-5affb82a24b2', 'description' => 'Nirvana', 'correct_answer' => true],
                    ['id' => 'd7a61708-2119-501e-9003-128f318181a8', 'description' => 'Queen', 'correct_answer' => false],
                    ['id' => '6275b82d-e242-5382-a2d8-70123c6b4a65', 'description' => 'Metallica', 'correct_answer' => false]
                ]],
        ['id' => 'e4e633eb-76df-5d52-baf5-94a8b20d4da8', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual banda britânica lançou a canção \'Bohemian Rhapsody\'?', 'difficulty' => 1, 'weight' => 124, 'alternatives' => [
                    ['id' => 'a9d7ab64-0bf5-50e7-b782-516b9ce1895d', 'description' => 'Metallica', 'correct_answer' => false],
                    ['id' => 'ee2da7f3-19e6-5368-bc14-e0203889d51e', 'description' => 'Nirvana', 'correct_answer' => false],
                    ['id' => '2268eb77-6a5f-5155-836c-e7cc003f7778', 'description' => 'Queen', 'correct_answer' => true],
                    ['id' => 'e72463f6-9a4a-5c93-9fd8-185da634742b', 'description' => 'The Beatles', 'correct_answer' => false],
                    ['id' => 'e9edc356-027f-55b1-8fa9-c31d628880b1', 'description' => 'Imagine Dragons', 'correct_answer' => false]
                ]],
        ['id' => '96af0efb-6400-5bee-863c-0a15d4b586eb', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual banda lançou as músicas \'Yellow\' e \'Viva la Vida\'?', 'difficulty' => 1, 'weight' => 116, 'alternatives' => [
                    ['id' => '39fb1652-6a04-5da5-be40-0855eb1e7cb7', 'description' => 'Coldplay', 'correct_answer' => true],
                    ['id' => '8e6e84c6-339c-51ea-aa22-ce861ec4094e', 'description' => 'Maroon 5', 'correct_answer' => false],
                    ['id' => '6c458e8a-2961-5ef2-8d28-f0db0f2d69d6', 'description' => 'Metallica', 'correct_answer' => false],
                    ['id' => '3021f20f-5961-59b0-9967-699ab42bb087', 'description' => 'U2', 'correct_answer' => false],
                    ['id' => 'cf3c8b82-ef00-522e-9f7f-aed471b080d4', 'description' => 'Imagine Dragons', 'correct_answer' => false]
                ]],
        ['id' => '83a18889-a17e-580e-addd-af54983b4b35', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual banda irlandesa tem Bono como vocalista?', 'difficulty' => 1, 'weight' => 191, 'alternatives' => [
                    ['id' => '14e62b1d-da95-50c7-a634-51dc15da4ada', 'description' => 'Metallica', 'correct_answer' => false],
                    ['id' => '8abff459-fe3f-5ebb-9155-153726822f78', 'description' => 'Nirvana', 'correct_answer' => false],
                    ['id' => 'a9948fdc-72f7-5ffb-adf6-6967be36819a', 'description' => 'Coldplay', 'correct_answer' => false],
                    ['id' => 'eca35bad-4725-5e0b-9d20-469cc887ea9d', 'description' => 'The Beatles', 'correct_answer' => false],
                    ['id' => '73faa8fa-2904-575f-aa42-0b515f7d8249', 'description' => 'U2', 'correct_answer' => true]
                ]],
        ['id' => 'b382bd25-653c-5b53-acd0-06ff9d351b07', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual músico lançou o álbum e filme \'Purple Rain\'?', 'difficulty' => 1, 'weight' => 112, 'alternatives' => [
                    ['id' => '59e97df9-21ff-5a85-85eb-0e79459c3373', 'description' => 'Michael Jackson', 'correct_answer' => false],
                    ['id' => '3cd5f991-4fa4-5512-a066-bf6cdbdbbbc5', 'description' => 'Phil Collins', 'correct_answer' => false],
                    ['id' => 'edfc4a39-7d16-5a1e-8ad6-8cf50f180a2c', 'description' => 'Prince', 'correct_answer' => true],
                    ['id' => '187f22bc-7a8a-54fe-a8fe-be433269344f', 'description' => 'Madonna', 'correct_answer' => false],
                    ['id' => '37d6bf75-4c22-5fe8-806d-11bdf3e3ea7d', 'description' => 'David Bowie', 'correct_answer' => false]
                ]],
        ['id' => 'f9fef95f-ae07-5858-a2ed-3f79ffb670b3', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual músico lançou \'In the Air Tonight\' e foi vocalista do Genesis?', 'difficulty' => 1, 'weight' => 125, 'alternatives' => [
                    ['id' => '1bd89c69-0728-57fc-8761-ac69b8819e60', 'description' => 'George Michael', 'correct_answer' => false],
                    ['id' => '599eaeae-47d9-5080-a206-0f30e2fe507c', 'description' => 'Phil Collins', 'correct_answer' => true],
                    ['id' => 'eea0ce8d-9c85-56e9-97db-e58daefde537', 'description' => 'Michael Jackson', 'correct_answer' => false],
                    ['id' => '1a506adc-f44b-5bef-9655-4036f07ef9d0', 'description' => 'Whitney Houston', 'correct_answer' => false],
                    ['id' => '976803d5-a051-52ed-8ccf-a31823762c36', 'description' => 'David Bowie', 'correct_answer' => false]
                ]],
        ['id' => '2d94b2c7-2fd2-579c-a0cc-6c06e5792135', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual cantora gravou a versão famosa de \'I Will Always Love You\' para o filme O Guarda-Costas?', 'difficulty' => 1, 'weight' => 140, 'alternatives' => [
                    ['id' => 'a97716f0-25d6-5309-8f36-b007f948e17a', 'description' => 'George Michael', 'correct_answer' => false],
                    ['id' => '0d455282-0f6f-5709-858d-c9f028222bac', 'description' => 'David Bowie', 'correct_answer' => false],
                    ['id' => 'f2430ea6-5820-5381-9c72-9db35a8e1cc8', 'description' => 'Stevie Wonder', 'correct_answer' => false],
                    ['id' => '8e0ba21a-f482-53d7-8e55-3ab21dafb034', 'description' => 'Elton John', 'correct_answer' => false],
                    ['id' => '77555256-20fc-5c6e-b150-d648d56136c6', 'description' => 'Whitney Houston', 'correct_answer' => true]
                ]],
        ['id' => '609cac44-7d21-5402-9ef6-c0e49d6514cd', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual artista criou o personagem Ziggy Stardust e lançou \'Space Oddity\'?', 'difficulty' => 1, 'weight' => 148, 'alternatives' => [
                    ['id' => 'af7a258c-ba63-538f-9cfe-aa87267ed349', 'description' => 'Freddie Mercury', 'correct_answer' => false],
                    ['id' => 'aad47834-e7f4-5dc1-bfba-41148de5981b', 'description' => 'David Bowie', 'correct_answer' => true],
                    ['id' => '4eb8ec06-6ad5-58cc-8974-f6cbc1c46343', 'description' => 'Madonna', 'correct_answer' => false],
                    ['id' => '18ac4d8a-972d-56c3-b76b-f3a7d6821fe4', 'description' => 'Phil Collins', 'correct_answer' => false],
                    ['id' => '08cbb813-fd3f-50aa-b006-29d17940f8a2', 'description' => 'Elton John', 'correct_answer' => false]
                ]],
        ['id' => '03257024-5932-5de8-b864-dd3e1fbb1284', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual cantora lançou os álbuns \'Like a Virgin\' e \'Ray of Light\'?', 'difficulty' => 1, 'weight' => 115, 'alternatives' => [
                    ['id' => 'cf699276-c2e2-5c9e-a881-b6aa5aa7d9d2', 'description' => 'Freddie Mercury', 'correct_answer' => false],
                    ['id' => '6e639402-3073-5b82-a330-a9a0ef4001f4', 'description' => 'Prince', 'correct_answer' => false],
                    ['id' => '0a9c0cc8-34d5-5af2-a041-be112aa95a56', 'description' => 'Elton John', 'correct_answer' => false],
                    ['id' => 'b1362179-19ac-53b3-a1b4-25cd9b27fd10', 'description' => 'Michael Jackson', 'correct_answer' => false],
                    ['id' => '9ce74242-fdca-5b2b-aa17-4466e07c1b00', 'description' => 'Madonna', 'correct_answer' => true]
                ]],
        ['id' => 'eb9086b4-bba7-58de-8a7c-7072c86e8aac', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual cantor lançou \'Careless Whisper\' e integrou a dupla Wham!?', 'difficulty' => 1, 'weight' => 131, 'alternatives' => [
                    ['id' => 'e42bfc5e-733d-5e2d-9d31-310985df0031', 'description' => 'Elton John', 'correct_answer' => false],
                    ['id' => '9620c50e-afed-5862-bc38-68198ed68c99', 'description' => 'Whitney Houston', 'correct_answer' => false],
                    ['id' => 'c9f4d017-14fb-5a89-b2f5-e11af699d82b', 'description' => 'David Bowie', 'correct_answer' => false],
                    ['id' => 'd614a350-bd49-5dd6-a5fc-e20037b01943', 'description' => 'Prince', 'correct_answer' => false],
                    ['id' => '3a7c1a59-21c3-5784-922b-2470b5de7e13', 'description' => 'George Michael', 'correct_answer' => true]
                ]],
        ['id' => '991bab2b-3565-53a1-9adc-eb30509c1b40', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual vocalista do Queen também lançou a carreira solo com a música \'Living on My Own\'?', 'difficulty' => 1, 'weight' => 134, 'alternatives' => [
                    ['id' => 'e426785c-65d9-5cec-a00c-2d8f9799822b', 'description' => 'David Bowie', 'correct_answer' => false],
                    ['id' => '02548d65-7a82-5b56-ae39-e36986302fa2', 'description' => 'Elton John', 'correct_answer' => false],
                    ['id' => 'a2d7689e-e7bb-5672-a223-59f897d1443f', 'description' => 'Whitney Houston', 'correct_answer' => false],
                    ['id' => '877fbd49-efff-5e5c-99ad-a56833b40847', 'description' => 'Michael Jackson', 'correct_answer' => false],
                    ['id' => '4d5cf863-24bc-5a0a-8e1d-7ce32885ef8f', 'description' => 'Freddie Mercury', 'correct_answer' => true]
                ]],
        ['id' => 'dd029dd5-0ad0-54be-a9dd-ac1dc8ce91f5', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual músico lançou \'Superstition\' e \'Isn\'t She Lovely\'?', 'difficulty' => 1, 'weight' => 149, 'alternatives' => [
                    ['id' => '07f694a9-416e-5d47-9345-f7156fd82722', 'description' => 'Freddie Mercury', 'correct_answer' => false],
                    ['id' => '8f374506-de3d-523b-9eb2-f38a4715d967', 'description' => 'George Michael', 'correct_answer' => false],
                    ['id' => 'e7379511-b2d9-5257-8d14-b5b83a5bf140', 'description' => 'Prince', 'correct_answer' => false],
                    ['id' => '7f9a5f25-b455-5f3a-8753-4119f8e86e63', 'description' => 'David Bowie', 'correct_answer' => false],
                    ['id' => 'a09fdb67-a35e-5e52-b17c-6b5ba21b0ae6', 'description' => 'Stevie Wonder', 'correct_answer' => true]
                ]],
        ['id' => '369e1d2d-3daf-5b78-8443-d473025aa121', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual cantor e compositor lançou \'Shape of You\' e \'Thinking Out Loud\'?', 'difficulty' => 1, 'weight' => 144, 'alternatives' => [
                    ['id' => '15c12aa5-5aa7-5d20-aa59-e30bcb09064e', 'description' => 'Lady Gaga', 'correct_answer' => false],
                    ['id' => '5627ed4d-79de-5c4d-bd4d-41133c722aca', 'description' => 'Ed Sheeran', 'correct_answer' => true],
                    ['id' => '47e6bfa5-8b5c-546b-adb2-22ce9d9dcb40', 'description' => 'Justin Bieber', 'correct_answer' => false],
                    ['id' => 'ead3411b-da62-5b2a-a232-b481d8d67e1e', 'description' => 'Adele', 'correct_answer' => false],
                    ['id' => '0ab4a56f-d7a0-5ebf-b71e-9d3705c89e9e', 'description' => 'Bruno Mars', 'correct_answer' => false]
                ]],
        ['id' => '52b87bf4-ce60-5be9-a292-2f09371588f3', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual cantora lançou \'Umbrella\' e \'Diamonds\'?', 'difficulty' => 1, 'weight' => 178, 'alternatives' => [
                    ['id' => '1eea5cb7-cbc6-59c1-b5da-db4c068ec294', 'description' => 'Lady Gaga', 'correct_answer' => false],
                    ['id' => '77dd410e-7569-5982-86a0-779e10ec971b', 'description' => 'Rihanna', 'correct_answer' => true],
                    ['id' => 'ecb91b5f-f568-5b36-83c0-223d4f0e7cd6', 'description' => 'Justin Bieber', 'correct_answer' => false],
                    ['id' => '62f09745-f0dc-5b12-90d9-d89f8edc0f32', 'description' => 'Shakira', 'correct_answer' => false],
                    ['id' => '9ca9e9be-d8f7-51e8-ba63-23dbb937bec5', 'description' => 'Adele', 'correct_answer' => false]
                ]],
        ['id' => 'b2bd1f74-fc92-5dae-8e1a-bbd3623c5627', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual artista lançou \'Bad Romance\' e interpretou Ally em Nasce uma Estrela?', 'difficulty' => 1, 'weight' => 193, 'alternatives' => [
                    ['id' => '78bddb76-7f9c-5366-8108-f541ee823198', 'description' => 'Lady Gaga', 'correct_answer' => true],
                    ['id' => '5c55d85d-3483-5053-a8c0-25aa49707b7c', 'description' => 'Justin Bieber', 'correct_answer' => false],
                    ['id' => '0061277d-2a27-53ff-893e-dace4a42888c', 'description' => 'Taylor Swift', 'correct_answer' => false],
                    ['id' => '4d681682-d434-590a-a7cf-cd7df1c7ec45', 'description' => 'Bruno Mars', 'correct_answer' => false],
                    ['id' => '84aaf2d3-3940-585d-920c-046325f3d513', 'description' => 'Beyoncé', 'correct_answer' => false]
                ]],
        ['id' => '81b610df-177b-59cc-b3b8-1ea135ddecc9', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual cantora lançou os álbuns \'1989\' e \'Folklore\'?', 'difficulty' => 1, 'weight' => 150, 'alternatives' => [
                    ['id' => '0a0f9cf2-728c-5696-aabd-339315bdebe9', 'description' => 'Taylor Swift', 'correct_answer' => true],
                    ['id' => 'ccc90601-72b9-5fe7-ab27-5632c6aab115', 'description' => 'Rihanna', 'correct_answer' => false],
                    ['id' => '6d227d11-594e-5319-92a5-798ce52e9249', 'description' => 'Beyoncé', 'correct_answer' => false],
                    ['id' => '8ae0d6e4-375b-575f-8045-2a379bec5c16', 'description' => 'Adele', 'correct_answer' => false],
                    ['id' => '99dff99c-d0c3-5cc3-b9a0-2bad09c696c9', 'description' => 'Lady Gaga', 'correct_answer' => false]
                ]],
        ['id' => 'c6cc9751-c940-5601-a241-f0a127b834c3', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual cantora britânica lançou os álbuns \'21\' e \'25\'?', 'difficulty' => 1, 'weight' => 121, 'alternatives' => [
                    ['id' => '43ac4dd7-2108-5959-8c46-511c70430466', 'description' => 'Beyoncé', 'correct_answer' => false],
                    ['id' => '26b4cc93-ea34-5c59-83de-13e6d6c05b98', 'description' => 'Adele', 'correct_answer' => true],
                    ['id' => '86602586-56a8-5c1a-93fa-a29abfefa806', 'description' => 'Justin Bieber', 'correct_answer' => false],
                    ['id' => '6b5e0fbe-ea4f-5d19-80f3-b3794dd067fd', 'description' => 'Bruno Mars', 'correct_answer' => false],
                    ['id' => '7d05b28b-28d4-5c6e-af4e-be85e73deeff', 'description' => 'Lady Gaga', 'correct_answer' => false]
                ]],
        ['id' => 'b649dc86-871f-5985-9c17-118ef36e2f31', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual cantora colombiana lançou \'Hips Don\'t Lie\' e \'Whenever, Wherever\'?', 'difficulty' => 1, 'weight' => 157, 'alternatives' => [
                    ['id' => '72847cbb-e455-592f-b9bb-527710665734', 'description' => 'Taylor Swift', 'correct_answer' => false],
                    ['id' => 'fd0791b1-53a8-550f-8ba1-cffafaf503f1', 'description' => 'Beyoncé', 'correct_answer' => false],
                    ['id' => 'b063233f-53bf-577b-8ab4-fe7446f7c8e2', 'description' => 'Ed Sheeran', 'correct_answer' => false],
                    ['id' => '914ebb24-e2b3-561a-86a7-1f5d8ef04d0f', 'description' => 'Shakira', 'correct_answer' => true],
                    ['id' => '41f7679f-a56e-54fa-8e1c-f79e30cffdb3', 'description' => 'Justin Bieber', 'correct_answer' => false]
                ]],
        ['id' => 'd4187380-8852-566a-bbdf-b2db9e44a60b', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual artista lançou o álbum visual \'Lemonade\'?', 'difficulty' => 1, 'weight' => 105, 'alternatives' => [
                    ['id' => '1287f796-be05-5ddd-90b5-11d839790598', 'description' => 'Taylor Swift', 'correct_answer' => false],
                    ['id' => '1e471e2e-79b7-56f3-beac-4083f6f3cff7', 'description' => 'Ed Sheeran', 'correct_answer' => false],
                    ['id' => 'bb41554b-55bc-55ee-8dc4-e4bc5d7d3136', 'description' => 'Justin Bieber', 'correct_answer' => false],
                    ['id' => '1f6116c7-d262-57d7-8b02-d83ef97f702f', 'description' => 'Bruno Mars', 'correct_answer' => false],
                    ['id' => 'c1f12797-edde-500e-96ad-c202ec9eb7c2', 'description' => 'Beyoncé', 'correct_answer' => true]
                ]],
        ['id' => 'a3122655-e24e-58c6-8223-38e2d41626c0', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual cantora lançou \'Firework\' e \'Teenage Dream\'?', 'difficulty' => 1, 'weight' => 107, 'alternatives' => [
                    ['id' => 'a2698f0b-1a17-5708-9721-a7c08224e044', 'description' => 'Ed Sheeran', 'correct_answer' => false],
                    ['id' => 'e039cd79-bd5a-58ce-8a09-66b55e68e436', 'description' => 'Katy Perry', 'correct_answer' => true],
                    ['id' => '716e6e4a-0c0b-59d3-ba78-986adbb12270', 'description' => 'Rihanna', 'correct_answer' => false],
                    ['id' => 'b8ee8b44-79b5-52d2-890c-e93b5349b7d7', 'description' => 'Shakira', 'correct_answer' => false],
                    ['id' => '0dae461c-881d-5ce9-bb8b-6b07919af9a7', 'description' => 'Beyoncé', 'correct_answer' => false]
                ]],
        ['id' => '51b6bddb-634b-58ba-91ab-f1e8832c3d6c', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual banda brasileira lançou \'Primeiros Erros\' e \'Natasha\'?', 'difficulty' => 1, 'weight' => 168, 'alternatives' => [
                    ['id' => 'f39bc763-635d-5361-b9ed-7891df21f1cf', 'description' => 'Paralamas do Sucesso', 'correct_answer' => false],
                    ['id' => 'b0ce7701-72d3-55ab-a8ec-c309b3ce6fd2', 'description' => 'Charlie Brown Jr.', 'correct_answer' => false],
                    ['id' => '86d0b357-892a-55ba-9bea-3d1733fbed73', 'description' => 'Capital Inicial', 'correct_answer' => true],
                    ['id' => '7505ecc2-1188-5fc8-ba5b-d5e763871731', 'description' => 'RPM', 'correct_answer' => false],
                    ['id' => '137303e7-b210-5acb-9287-122e24a43d4e', 'description' => 'Jota Quest', 'correct_answer' => false]
                ]],
        ['id' => '393f8d9c-590e-52f5-bfaa-f47ab4c19fc3', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual banda brasileira lançou \'Epitáfio\' e \'Sonífera Ilha\'?', 'difficulty' => 1, 'weight' => 123, 'alternatives' => [
                    ['id' => '50fa4cf8-e3f3-5ced-9d15-e397e68834c0', 'description' => 'Titãs', 'correct_answer' => true],
                    ['id' => 'c9847f34-300c-534e-ba1b-e9df349276e3', 'description' => 'Capital Inicial', 'correct_answer' => false],
                    ['id' => 'be22f4bf-16af-51cc-b2fd-cf3e1c2c9321', 'description' => 'Engenheiros do Hawaii', 'correct_answer' => false],
                    ['id' => 'f228fa0d-1e89-5251-b9a1-727d82aa4e0c', 'description' => 'Barão Vermelho', 'correct_answer' => false],
                    ['id' => '045025b1-877c-53e3-8bf2-433a5eb8a995', 'description' => 'Skank', 'correct_answer' => false]
                ]],
        ['id' => 'eb3d6271-c437-58e4-b07b-67d1ea03a30c', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual banda brasileira lançou \'Infinita Highway\' e \'O Papa é Pop\'?', 'difficulty' => 1, 'weight' => 106, 'alternatives' => [
                    ['id' => 'b06ba473-ea24-58d1-a55c-d4aedcb7dcdd', 'description' => 'Barão Vermelho', 'correct_answer' => false],
                    ['id' => '4af7cc39-c9ef-56b7-8ef5-fe768e999ab5', 'description' => 'Legião Urbana', 'correct_answer' => false],
                    ['id' => '19c96189-cced-50fe-a1aa-a0a08322bdf0', 'description' => 'Skank', 'correct_answer' => false],
                    ['id' => '803aa5f5-810e-52f6-8ea6-1d44c6550d33', 'description' => 'Engenheiros do Hawaii', 'correct_answer' => true],
                    ['id' => '2bd596a7-a129-500b-b911-03db7cc57d0e', 'description' => 'RPM', 'correct_answer' => false]
                ]],
        ['id' => '5a97d349-feee-5b95-ad8f-cbae428632b2', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual banda brasileira teve Cazuza como vocalista em seus primeiros anos?', 'difficulty' => 1, 'weight' => 103, 'alternatives' => [
                    ['id' => '4dd08fcf-055c-5e91-a8b9-53658c9f2bed', 'description' => 'Charlie Brown Jr.', 'correct_answer' => false],
                    ['id' => '47e7c987-b34c-5a5c-ac0a-0a618d797553', 'description' => 'Capital Inicial', 'correct_answer' => false],
                    ['id' => '449fb812-b76f-524d-8416-dc7cfe23d0ad', 'description' => 'Skank', 'correct_answer' => false],
                    ['id' => 'b3270b7b-7561-55b3-a4c9-de7cdba442df', 'description' => 'Barão Vermelho', 'correct_answer' => true],
                    ['id' => '2e8d6542-0597-50c2-8c13-39ac24a700d8', 'description' => 'Titãs', 'correct_answer' => false]
                ]],
        ['id' => '962e05c5-cbbc-5a58-b6ff-9f92ee051759', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual banda brasileira tem Herbert Vianna como vocalista e lançou \'Meu Erro\'?', 'difficulty' => 1, 'weight' => 140, 'alternatives' => [
                    ['id' => 'b61af3d9-da20-56b2-af94-078915f98e5c', 'description' => 'RPM', 'correct_answer' => false],
                    ['id' => '3cd48d96-5b84-5357-a00c-77b86197e479', 'description' => 'Charlie Brown Jr.', 'correct_answer' => false],
                    ['id' => '60e853d4-aabb-5dfb-9acb-b1ba5c724d7d', 'description' => 'Skank', 'correct_answer' => false],
                    ['id' => '55d1f3f2-079d-508d-85a8-3de0a9eb422f', 'description' => 'Barão Vermelho', 'correct_answer' => false],
                    ['id' => '97468320-7865-548b-9150-67276825cac1', 'description' => 'Paralamas do Sucesso', 'correct_answer' => true]
                ]],
        ['id' => '22162405-2105-53d9-8551-bc2012992985', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual banda brasileira teve Chorão como vocalista e lançou \'Só os Loucos Sabem\'?', 'difficulty' => 1, 'weight' => 173, 'alternatives' => [
                    ['id' => '3b0c49cd-9a63-5293-9909-20967d5464e9', 'description' => 'Charlie Brown Jr.', 'correct_answer' => true],
                    ['id' => 'c2905d0e-f0d7-5805-8c58-6da0df471483', 'description' => 'Titãs', 'correct_answer' => false],
                    ['id' => '694b0602-9ec6-5269-930a-50b36b3a695b', 'description' => 'Jota Quest', 'correct_answer' => false],
                    ['id' => '5231fef4-cedd-5c4a-8ef9-f5fdca4360df', 'description' => 'Engenheiros do Hawaii', 'correct_answer' => false],
                    ['id' => 'f15db5b3-eeed-5a34-8de7-3b00de69c233', 'description' => 'RPM', 'correct_answer' => false]
                ]],
        ['id' => '677204bb-b7f1-59a9-b517-6ffd102459aa', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual banda brasileira gravou \'Tempo Perdido\' e \'Pais e Filhos\'?', 'difficulty' => 1, 'weight' => 197, 'alternatives' => [
                    ['id' => 'e01b63b9-04da-55c8-b180-fa3a8f843f45', 'description' => 'Barão Vermelho', 'correct_answer' => false],
                    ['id' => '1ded2793-4efd-5210-a378-6dfbd1cb90cf', 'description' => 'Paralamas do Sucesso', 'correct_answer' => false],
                    ['id' => '855eec5c-b5bd-5c88-b3f6-fe4d869663bb', 'description' => 'Engenheiros do Hawaii', 'correct_answer' => false],
                    ['id' => '8e8079a3-a60b-5d9c-a2c9-a777c2e5107d', 'description' => 'Jota Quest', 'correct_answer' => false],
                    ['id' => '03c552e1-6318-5374-a6f7-82bfcaa78cbc', 'description' => 'Legião Urbana', 'correct_answer' => true]
                ]],
        ['id' => 'f2b07e0e-a41b-5790-87ac-dd473f6039c1', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual banda brasileira dos anos 1980 lançou \'Rádio Pirata\'?', 'difficulty' => 1, 'weight' => 121, 'alternatives' => [
                    ['id' => '55601225-d7b6-5093-9837-3a4f70f5aa75', 'description' => 'Titãs', 'correct_answer' => false],
                    ['id' => '6998921a-bb7c-5f45-ae90-3945210acc26', 'description' => 'RPM', 'correct_answer' => true],
                    ['id' => '20587695-5d1f-525b-8b6a-2e4eff13387b', 'description' => 'Engenheiros do Hawaii', 'correct_answer' => false],
                    ['id' => '1874d297-dddc-5def-8395-0d3cbbc3fba7', 'description' => 'Capital Inicial', 'correct_answer' => false],
                    ['id' => '12b7f430-1b81-59d2-9067-6edab3678e92', 'description' => 'Charlie Brown Jr.', 'correct_answer' => false]
                ]],
        ['id' => '52a1b566-f05c-5679-b0f9-9dc1bfe74298', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual cantor brasileiro é conhecido como o Rei e gravou \'Detalhes\'?', 'difficulty' => 1, 'weight' => 149, 'alternatives' => [
                    ['id' => '5c05734a-3acd-576f-ad1c-4655a6a47dcf', 'description' => 'Raul Seixas', 'correct_answer' => false],
                    ['id' => 'ceb6f269-001a-51f3-971a-382d60b402f5', 'description' => 'Roberto Carlos', 'correct_answer' => true],
                    ['id' => '0c2c7a70-ac8b-573e-98b0-e0fdf9d1a256', 'description' => 'Caetano Veloso', 'correct_answer' => false],
                    ['id' => '9be4b01d-98c0-54ec-bb73-7a5b3d03a8f7', 'description' => 'Ney Matogrosso', 'correct_answer' => false],
                    ['id' => 'a72e4fdc-ed17-5c8f-9324-286eb328fcdb', 'description' => 'Gilberto Gil', 'correct_answer' => false]
                ]],
        ['id' => '4259508b-571f-58ae-baf8-cea5247ca3e1', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual cantor brasileiro foi vocalista dos Secos & Molhados e gravou \'Homem com H\'?', 'difficulty' => 1, 'weight' => 124, 'alternatives' => [
                    ['id' => 'aced99ef-981c-5288-bda3-f272522bffa9', 'description' => 'Chico Buarque', 'correct_answer' => false],
                    ['id' => '57014f7d-fd54-5cd6-b56b-191f7e6d20d3', 'description' => 'Ney Matogrosso', 'correct_answer' => true],
                    ['id' => '0421adb0-8ae7-5f0e-94fd-7bb7483c8547', 'description' => 'Gilberto Gil', 'correct_answer' => false],
                    ['id' => '91a8cb72-9d4e-537b-bcda-244fc8f1e2a5', 'description' => 'Raul Seixas', 'correct_answer' => false],
                    ['id' => 'a78e4eb9-8e0c-5fd7-bcda-bf8a919d8770', 'description' => 'Roberto Carlos', 'correct_answer' => false]
                ]],
        ['id' => '124207a5-c473-5f5e-8021-a26780560814', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual cantor brasileiro compôs \'Metamorfose Ambulante\' e \'Maluco Beleza\'?', 'difficulty' => 1, 'weight' => 121, 'alternatives' => [
                    ['id' => '522d5e62-b893-557a-b2f6-3d6b799a2ee3', 'description' => 'Jorge Ben Jor', 'correct_answer' => false],
                    ['id' => 'a8d88244-5174-5db5-a9d0-e186bd495e95', 'description' => 'Raul Seixas', 'correct_answer' => true],
                    ['id' => 'f3dcc5c1-fb78-55be-8b42-f089b390d5f0', 'description' => 'Caetano Veloso', 'correct_answer' => false],
                    ['id' => '74daefce-9d38-5682-9bd0-a78638ca500a', 'description' => 'Milton Nascimento', 'correct_answer' => false],
                    ['id' => 'ac79527d-2b1c-50c9-add9-f2be12af7807', 'description' => 'Djavan', 'correct_answer' => false]
                ]],
        ['id' => 'e8e9c49e-7800-5791-b6a3-ee9f84ae0a74', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual músico brasileiro lançou \'Aquele Abraço\' e \'Andar com Fé\'?', 'difficulty' => 1, 'weight' => 182, 'alternatives' => [
                    ['id' => 'bca8380c-c519-5929-b746-f07d19a66a56', 'description' => 'Ney Matogrosso', 'correct_answer' => false],
                    ['id' => '8f06de16-f6cd-519d-80c4-9e6c638284fa', 'description' => 'Milton Nascimento', 'correct_answer' => false],
                    ['id' => 'c9c0ad01-20ba-55eb-b86f-2f4b0a44801e', 'description' => 'Gilberto Gil', 'correct_answer' => true],
                    ['id' => '6856558b-9edd-51ad-9bfc-eb0142b09a5f', 'description' => 'Djavan', 'correct_answer' => false],
                    ['id' => '97d0fade-0cb4-5eab-99b3-b0ad5a9db55c', 'description' => 'Tim Maia', 'correct_answer' => false]
                ]],
        ['id' => '482cf258-2b39-5433-874b-578d98aa6652', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual cantor mineiro gravou \'Travessia\' e \'Maria, Maria\'?', 'difficulty' => 1, 'weight' => 183, 'alternatives' => [
                    ['id' => 'a321417a-ca8a-5cbe-b1da-9d25dd6a6c19', 'description' => 'Raul Seixas', 'correct_answer' => false],
                    ['id' => 'd965cb24-de09-5078-ab9e-976c9dcb92ff', 'description' => 'Caetano Veloso', 'correct_answer' => false],
                    ['id' => '1a4eac96-a3c7-5931-997f-3c5b92001103', 'description' => 'Milton Nascimento', 'correct_answer' => true],
                    ['id' => 'f7a3812a-9b44-5324-b712-5b2b0f72c941', 'description' => 'Roberto Carlos', 'correct_answer' => false],
                    ['id' => '3a637a09-2c34-5f70-83c3-10ed0b9582b5', 'description' => 'Ney Matogrosso', 'correct_answer' => false]
                ]],
        ['id' => '1ea0d9c3-99be-5549-a94f-cc7ccb19acb5', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual compositor brasileiro escreveu \'Construção\' e \'Apesar de Você\'?', 'difficulty' => 1, 'weight' => 111, 'alternatives' => [
                    ['id' => '988bf4fd-5f95-5940-ad88-09b2e49a6e40', 'description' => 'Chico Buarque', 'correct_answer' => true],
                    ['id' => '15e4f763-95ad-54e2-be49-0912e6dfb7a2', 'description' => 'Gilberto Gil', 'correct_answer' => false],
                    ['id' => '45bdfd78-cca0-599d-b3c8-130834162fa9', 'description' => 'Caetano Veloso', 'correct_answer' => false],
                    ['id' => 'ba78b3bc-97a8-501e-9497-4d3a36541013', 'description' => 'Djavan', 'correct_answer' => false],
                    ['id' => '7be01759-8707-57f8-a914-8fbfd2f2a729', 'description' => 'Tim Maia', 'correct_answer' => false]
                ]],
        ['id' => 'e177c90c-584a-5965-84bf-bd187c2a98de', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual cantor e compositor lançou \'Oceano\' e \'Flor de Lis\'?', 'difficulty' => 1, 'weight' => 165, 'alternatives' => [
                    ['id' => '57e1a0b6-4479-5a69-ab51-6e4767a6d763', 'description' => 'Raul Seixas', 'correct_answer' => false],
                    ['id' => 'e8309b96-d369-5a52-9680-5f50a78c444a', 'description' => 'Milton Nascimento', 'correct_answer' => false],
                    ['id' => 'dc46c5a7-675f-5735-bb17-d30a95294fa8', 'description' => 'Gilberto Gil', 'correct_answer' => false],
                    ['id' => 'bedc1d61-12af-5d30-80b0-4d80f42a89da', 'description' => 'Djavan', 'correct_answer' => true],
                    ['id' => 'd16f2e74-3931-5bb9-ab7d-1caaa5a0220f', 'description' => 'Caetano Veloso', 'correct_answer' => false]
                ]],
        ['id' => '8d5fcf5c-ce29-5cab-89f3-4e17998de449', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual cantor e compositor baiano lançou \'Alegria, Alegria\' e \'Sampa\'?', 'difficulty' => 1, 'weight' => 140, 'alternatives' => [
                    ['id' => 'a68d7048-9c31-5a57-8e4c-d68fdd890a03', 'description' => 'Caetano Veloso', 'correct_answer' => true],
                    ['id' => '7bc68842-5eab-5d62-81e7-d9242913017e', 'description' => 'Milton Nascimento', 'correct_answer' => false],
                    ['id' => '445be5c7-3ce9-5bb5-bda0-16553c2dd4fa', 'description' => 'Roberto Carlos', 'correct_answer' => false],
                    ['id' => '7330df9b-9520-5c97-aca5-c03accc6921a', 'description' => 'Chico Buarque', 'correct_answer' => false],
                    ['id' => '42d89505-30ba-56c7-a078-81257caf0a39', 'description' => 'Djavan', 'correct_answer' => false]
                ]],
        ['id' => '44353812-8883-5002-8473-5c40565c2c8d', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum do Radiohead marcou uma guinada eletrônica e experimental após \'OK Computer\'?', 'difficulty' => 2, 'weight' => 254, 'alternatives' => [
                    ['id' => '924caac7-2718-5435-8f5e-6e867460584e', 'description' => 'Animals', 'correct_answer' => false],
                    ['id' => '1cf5c2a5-47c1-5a54-8e65-c38005c6adaa', 'description' => 'Kid A', 'correct_answer' => true],
                    ['id' => '21e1a5f9-e163-526c-81cd-4f58173f7843', 'description' => 'The Dark Side of the Moon', 'correct_answer' => false],
                    ['id' => '6fc1b8d3-9efd-5116-9088-cb1e98332795', 'description' => 'Wish You Were Here', 'correct_answer' => false],
                    ['id' => 'c3e23a9a-c4f7-507e-ab1a-38a0174dc398', 'description' => 'OK Computer', 'correct_answer' => false]
                ]],
        ['id' => 'cc776e98-4347-50b0-b03b-9d20b79bc28e', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum do Radiohead foi lançado inicialmente em um modelo de pagamento escolhido pelo ouvinte?', 'difficulty' => 2, 'weight' => 345, 'alternatives' => [
                    ['id' => '7640a7d5-d796-5fa4-a1ee-dc78d6a6dca3', 'description' => 'The Wall', 'correct_answer' => false],
                    ['id' => '36709f09-4a2a-5bc0-86a5-bb46281ac305', 'description' => 'In Rainbows', 'correct_answer' => true],
                    ['id' => 'bfb0c1a0-5f9b-5fe7-bc3b-f49d0894d7e2', 'description' => 'Wish You Were Here', 'correct_answer' => false],
                    ['id' => 'f58d1336-bd9d-5651-a3bb-803139288859', 'description' => 'Animals', 'correct_answer' => false],
                    ['id' => 'db597a4f-d9df-55bf-b193-399b33e81e18', 'description' => 'Nevermind', 'correct_answer' => false]
                ]],
        ['id' => 'ccaa7663-4865-5f6b-92c9-ed4d38fe319b', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum do Pink Floyd apresenta as faixas \'Time\', \'Money\' e \'Us and Them\'?', 'difficulty' => 2, 'weight' => 210, 'alternatives' => [
                    ['id' => '38f55d32-97f0-58a4-8d12-6a59c2f21291', 'description' => 'Ten', 'correct_answer' => false],
                    ['id' => '299fe7b1-8241-5bbc-9bc1-eecadafbc786', 'description' => 'Wish You Were Here', 'correct_answer' => false],
                    ['id' => '9388e0a5-c26c-5c1b-84ce-fc96e32fb3ad', 'description' => 'OK Computer', 'correct_answer' => false],
                    ['id' => '331c3f4f-014d-51ae-87ec-270e4f1163f9', 'description' => 'Nevermind', 'correct_answer' => false],
                    ['id' => '373205a8-f788-5512-9bc0-ebc7c2a02f06', 'description' => 'The Dark Side of the Moon', 'correct_answer' => true]
                ]],
        ['id' => 'a2926a2b-70d2-5dbc-9175-fa4fbc57a953', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum do Nirvana inclui \'Come as You Are\' e \'Smells Like Teen Spirit\'?', 'difficulty' => 2, 'weight' => 269, 'alternatives' => [
                    ['id' => '379dc562-863b-564d-9a05-ac7a54ac915e', 'description' => 'The Wall', 'correct_answer' => false],
                    ['id' => '091ad5ea-8b13-59d9-8f82-be48ade02aa0', 'description' => 'In Rainbows', 'correct_answer' => false],
                    ['id' => 'bc4cfd97-2e27-5c7a-b713-9d70ff67438d', 'description' => 'Nevermind', 'correct_answer' => true],
                    ['id' => 'bf5aafd5-cb39-57dc-9e6d-787911f2eec2', 'description' => 'Wish You Were Here', 'correct_answer' => false],
                    ['id' => '6949e206-d68e-5990-afa6-b54a0c55f0e8', 'description' => 'Dirt', 'correct_answer' => false]
                ]],
        ['id' => '9136c120-7b14-5029-8242-342781b54c7e', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum conceitual do Pink Floyd conta a história de um personagem chamado Pink?', 'difficulty' => 2, 'weight' => 203, 'alternatives' => [
                    ['id' => 'a94017bd-ff4d-5d77-8ebe-ffea2fe00ff9', 'description' => 'The Dark Side of the Moon', 'correct_answer' => false],
                    ['id' => '32847c34-401a-5050-a224-cc672d2d1323', 'description' => 'Nevermind', 'correct_answer' => false],
                    ['id' => '2cc704b4-2c57-5ce4-b29b-184b96e36417', 'description' => 'Kid A', 'correct_answer' => false],
                    ['id' => '76d4fb11-8f43-5eb8-b4a2-14528856eeb2', 'description' => 'Wish You Were Here', 'correct_answer' => false],
                    ['id' => '684a4676-ce59-5781-ae70-5c8b2289a0bd', 'description' => 'The Wall', 'correct_answer' => true]
                ]],
        ['id' => '6aaa4987-1ec7-5ec2-8cf3-b993bd4b1963', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum de estreia do Pearl Jam inclui \'Alive\' e \'Jeremy\'?', 'difficulty' => 2, 'weight' => 387, 'alternatives' => [
                    ['id' => '60523a5f-9081-53e2-bdb4-6d49c42759ab', 'description' => 'Dirt', 'correct_answer' => false],
                    ['id' => '91f6542f-c6f2-5f97-b7d4-9c895a12d66b', 'description' => 'Nevermind', 'correct_answer' => false],
                    ['id' => 'be6f46aa-14be-51c2-a862-799e08ec85bc', 'description' => 'Ten', 'correct_answer' => true],
                    ['id' => '7acfbc21-9daf-5c28-a906-bed8f83f23dd', 'description' => 'Animals', 'correct_answer' => false],
                    ['id' => 'e113a4e7-18e0-5f5e-a0b5-5fa88ede7600', 'description' => 'In Rainbows', 'correct_answer' => false]
                ]],
        ['id' => '9e0170b6-34c6-54a5-9151-48fab1c9f529', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum do Radiohead inclui \'Paranoid Android\' e \'Karma Police\'?', 'difficulty' => 2, 'weight' => 264, 'alternatives' => [
                    ['id' => 'c32f14b3-13f6-5690-b12e-a592183e0ee7', 'description' => 'The Dark Side of the Moon', 'correct_answer' => false],
                    ['id' => '274d4f5b-38c9-55ed-82d7-172a7044841d', 'description' => 'Ten', 'correct_answer' => false],
                    ['id' => 'ce4b283b-0943-50dd-a393-6b42e5bff56b', 'description' => 'In Rainbows', 'correct_answer' => false],
                    ['id' => 'cc8ebcab-8c6c-5aec-bdc6-b9bfe1c3982a', 'description' => 'The Wall', 'correct_answer' => false],
                    ['id' => '0bbca45f-3d1c-5dc7-9853-5447cdf4ad58', 'description' => 'OK Computer', 'correct_answer' => true]
                ]],
        ['id' => 'dea3bd4b-0fb5-56e0-8a23-15ea922c617a', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum do Alice in Chains inclui \'Would?\' e \'Rooster\'?', 'difficulty' => 2, 'weight' => 288, 'alternatives' => [
                    ['id' => '931921ef-8d67-53a3-b4cc-ca745b44dd72', 'description' => 'Dirt', 'correct_answer' => true],
                    ['id' => '1ac08d76-28b3-5460-9750-e31d0155cd6a', 'description' => 'Kid A', 'correct_answer' => false],
                    ['id' => 'c49f15ae-fcc0-50c5-b634-af85d0182ce6', 'description' => 'The Dark Side of the Moon', 'correct_answer' => false],
                    ['id' => 'c35a484a-75e2-5b4e-aa8a-4ea0f4328675', 'description' => 'Nevermind', 'correct_answer' => false],
                    ['id' => 'c06d3fab-fad7-5a53-8a88-22b24346fb87', 'description' => 'Ten', 'correct_answer' => false]
                ]],
        ['id' => '17944a62-5dde-5f66-8697-e19a38cc8cc6', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum duplo de Stevie Wonder inclui \'Sir Duke\' e \'Isn\'t She Lovely\'?', 'difficulty' => 2, 'weight' => 267, 'alternatives' => [
                    ['id' => 'bf3db1cb-7df1-557f-a17c-fcfba5bd08b8', 'description' => 'Like a Prayer', 'correct_answer' => false],
                    ['id' => '44963946-4770-557a-a598-dd8d96e3df3c', 'description' => 'Songs in the Key of Life', 'correct_answer' => true],
                    ['id' => 'c766c562-1277-5618-a956-ecedb41e9f1b', 'description' => 'The Immaculate Collection', 'correct_answer' => false],
                    ['id' => 'd7ac5428-6ff4-5372-b351-5d270d39357c', 'description' => 'Sign o\' the Times', 'correct_answer' => false],
                    ['id' => '198d5fea-e1ea-5b84-bc94-0e37d9120e0f', 'description' => 'Faith', 'correct_answer' => false]
                ]],
        ['id' => '606005ea-6d40-5168-801a-419e80817601', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum de Michael Jackson foi lançado antes de \'Thriller\' e inclui \'Rock with You\'?', 'difficulty' => 2, 'weight' => 221, 'alternatives' => [
                    ['id' => 'ddae9a36-2aec-505d-8b47-341ee4bf5bc4', 'description' => 'Songs in the Key of Life', 'correct_answer' => false],
                    ['id' => '16194ac8-7cde-5492-bd3d-dd8a6c94228d', 'description' => 'The Immaculate Collection', 'correct_answer' => false],
                    ['id' => '17be053e-ae4d-5110-9355-20ba9b91a0a1', 'description' => 'Off the Wall', 'correct_answer' => true],
                    ['id' => '2dd23ac7-8b11-5830-b054-36be3e8243f6', 'description' => 'Purple Rain', 'correct_answer' => false],
                    ['id' => '0a7b17f3-7c0d-566f-92aa-721d2f840d4f', 'description' => 'Thriller', 'correct_answer' => false]
                ]],
        ['id' => 'd2d555d4-fb75-59f6-b590-149e2cda1fee', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum de Michael Jackson contém \'Billie Jean\', \'Beat It\' e a faixa-título?', 'difficulty' => 2, 'weight' => 274, 'alternatives' => [
                    ['id' => 'd53dc6fd-269a-5c5d-8c5b-399cd29b70b6', 'description' => 'Thriller', 'correct_answer' => true],
                    ['id' => 'a58d8653-74a5-5ea4-ab59-2f17475d4b9d', 'description' => 'Bad', 'correct_answer' => false],
                    ['id' => 'c4617f58-2f7e-5e62-b206-e0150ad1a6da', 'description' => 'Like a Prayer', 'correct_answer' => false],
                    ['id' => '9da77012-bfa0-56ff-82ee-a92f11a0d360', 'description' => 'Ray of Light', 'correct_answer' => false],
                    ['id' => '0bebfd07-8738-5094-bc53-f16089de8ad0', 'description' => 'Off the Wall', 'correct_answer' => false]
                ]],
        ['id' => '40554aa2-238e-5adc-abfc-226ad352e22f', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum de Madonna inclui a faixa-título e \'Express Yourself\'?', 'difficulty' => 2, 'weight' => 370, 'alternatives' => [
                    ['id' => '710e215c-460b-521f-a841-39ad9d63e76c', 'description' => 'Like a Prayer', 'correct_answer' => true],
                    ['id' => '21ac056c-acad-52a5-bbf1-1b1a19c043fc', 'description' => 'Songs in the Key of Life', 'correct_answer' => false],
                    ['id' => '5a4db20c-19f9-595b-ae12-ceb2473b76ab', 'description' => 'Sign o\' the Times', 'correct_answer' => false],
                    ['id' => '2eacadcc-387b-5194-9d2c-f94b701f6540', 'description' => 'Thriller', 'correct_answer' => false],
                    ['id' => 'c6889c58-f8e9-546a-9b8e-c6e1f16ebc96', 'description' => 'Purple Rain', 'correct_answer' => false]
                ]],
        ['id' => '161a259e-3ae4-56af-938d-980627e43998', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum de Michael Jackson inclui \'Smooth Criminal\' e \'Man in the Mirror\'?', 'difficulty' => 2, 'weight' => 380, 'alternatives' => [
                    ['id' => 'b0561a82-98fe-59bf-8177-e3e15227b44a', 'description' => 'Ray of Light', 'correct_answer' => false],
                    ['id' => 'd2ac45a1-2393-59fc-80e5-3dd79be1e175', 'description' => 'Faith', 'correct_answer' => false],
                    ['id' => '61b5dcd1-c3e1-5b95-9413-0a36287fad4c', 'description' => 'Thriller', 'correct_answer' => false],
                    ['id' => 'f05aed63-452e-5c8c-86ad-02d698359535', 'description' => 'Bad', 'correct_answer' => true],
                    ['id' => '5cb95cab-34a7-581d-84a4-5f202d944153', 'description' => 'Songs in the Key of Life', 'correct_answer' => false]
                ]],
        ['id' => 'e9c11d7e-8681-52d7-9843-728b9f368bb2', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual coletânea de Madonna reúne sucessos como \'Vogue\' e \'Like a Prayer\'?', 'difficulty' => 2, 'weight' => 370, 'alternatives' => [
                    ['id' => 'f9876957-dc23-544f-a2e1-2a92a8ec1cb8', 'description' => 'Faith', 'correct_answer' => false],
                    ['id' => 'da38f454-1df9-56ec-adde-8b0a73e05341', 'description' => 'Purple Rain', 'correct_answer' => false],
                    ['id' => '2909f92d-ab22-56f4-8803-15ba6272dda5', 'description' => 'Thriller', 'correct_answer' => false],
                    ['id' => '14f0d698-49bc-5d90-a1b2-f6f76936abb2', 'description' => 'The Immaculate Collection', 'correct_answer' => true],
                    ['id' => '3d287249-5df6-5cbf-b0a2-67c434b31a64', 'description' => 'Off the Wall', 'correct_answer' => false]
                ]],
        ['id' => '370d7264-1a15-5ff6-9f01-1cc5660a5e00', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum de Madonna, produzido em parte por William Orbit, inclui \'Frozen\'?', 'difficulty' => 2, 'weight' => 359, 'alternatives' => [
                    ['id' => 'd6832dc1-5f49-5817-8cf3-2306ce2fe7ec', 'description' => 'Sign o\' the Times', 'correct_answer' => false],
                    ['id' => '2b94bbb4-17b5-5f65-893f-60d37f768e30', 'description' => 'Off the Wall', 'correct_answer' => false],
                    ['id' => 'eb42a248-faee-565e-838a-1b8c3a4009c9', 'description' => 'Songs in the Key of Life', 'correct_answer' => false],
                    ['id' => 'e65d1401-cdbe-58ac-bc76-38c1649caaca', 'description' => 'Ray of Light', 'correct_answer' => true],
                    ['id' => '5c9202ec-5ee5-59a5-9c22-5ac61d682ef8', 'description' => 'Like a Prayer', 'correct_answer' => false]
                ]],
        ['id' => 'd047d546-1d6c-5e16-88ac-7b2b94a11281', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum duplo de Prince inclui a faixa-título e \'U Got the Look\'?', 'difficulty' => 2, 'weight' => 384, 'alternatives' => [
                    ['id' => 'ac70195f-1cef-50b7-a9bc-0774b57cf6df', 'description' => 'Off the Wall', 'correct_answer' => false],
                    ['id' => 'e39890ab-ad72-5955-ab7d-9b8292902736', 'description' => 'Bad', 'correct_answer' => false],
                    ['id' => '7bae37b7-c88f-579f-a1bb-cd29b7c42165', 'description' => 'Thriller', 'correct_answer' => false],
                    ['id' => '2cf50fec-e1ef-5aa2-b8c7-09b7fa74a291', 'description' => 'Sign o\' the Times', 'correct_answer' => true],
                    ['id' => '28a415a1-2aea-5cb5-9af3-7f451cd9640a', 'description' => 'Ray of Light', 'correct_answer' => false]
                ]],
        ['id' => '1e60a405-c413-5483-a8d9-48d110dcfe9b', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum do AC/DC abre com \'Hells Bells\' e inclui a faixa-título?', 'difficulty' => 2, 'weight' => 358, 'alternatives' => [
                    ['id' => '0995e1cf-c41e-505a-945d-117a9525809d', 'description' => 'Master of Puppets', 'correct_answer' => false],
                    ['id' => '612ec977-3e69-51ac-bbca-8284f70b7132', 'description' => 'Back in Black', 'correct_answer' => true],
                    ['id' => 'a48bd4e3-5bcb-50c1-b815-3eec49db41e5', 'description' => 'Reign in Blood', 'correct_answer' => false],
                    ['id' => '041c0499-e398-5256-98e4-beffa5f5b380', 'description' => 'Paranoid', 'correct_answer' => false],
                    ['id' => '83a32c85-df67-5869-8005-1a4972e48ac1', 'description' => 'The Number of the Beast', 'correct_answer' => false]
                ]],
        ['id' => '8682fb50-8e60-58a3-ae44-b16b32ec7182', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum do Iron Maiden inclui a faixa-título e \'Run to the Hills\'?', 'difficulty' => 2, 'weight' => 240, 'alternatives' => [
                    ['id' => '02d10760-ad0d-56e2-8278-c697cd9f8b71', 'description' => 'The Number of the Beast', 'correct_answer' => true],
                    ['id' => '2ed4b4ec-29c9-56b3-acb0-255c16cc2937', 'description' => 'Highway to Hell', 'correct_answer' => false],
                    ['id' => 'fad7df52-5670-5bc6-a8de-682b7b67a263', 'description' => 'Appetite for Destruction', 'correct_answer' => false],
                    ['id' => '2b1f84d3-c83b-5ec0-bede-862c34eb09d7', 'description' => 'British Steel', 'correct_answer' => false],
                    ['id' => 'f0317bc8-2d27-5408-b280-f138b38b689a', 'description' => 'Powerslave', 'correct_answer' => false]
                ]],
        ['id' => '81860cca-a0ad-5aad-a7dd-ae1295163f6b', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum do Metallica inclui \'Fade to Black\' e \'For Whom the Bell Tolls\'?', 'difficulty' => 2, 'weight' => 274, 'alternatives' => [
                    ['id' => '16a77353-5ecf-5ec3-ad6c-ed9e8c2c598d', 'description' => 'The Number of the Beast', 'correct_answer' => false],
                    ['id' => '49c3ddf2-77c9-5cb2-bea2-220243128035', 'description' => 'Appetite for Destruction', 'correct_answer' => false],
                    ['id' => '91f68acb-e739-5aa2-a4d3-d5b05120e716', 'description' => 'Back in Black', 'correct_answer' => false],
                    ['id' => 'b280bc10-2419-547b-862e-49e607515eaa', 'description' => 'Ride the Lightning', 'correct_answer' => true],
                    ['id' => 'a15e4a17-6bcc-515b-8221-6e23c1785607', 'description' => 'Highway to Hell', 'correct_answer' => false]
                ]],
        ['id' => '7c873e45-bca2-599a-b53f-7252ac019ab4', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum do Slayer inclui \'Angel of Death\' e \'Raining Blood\'?', 'difficulty' => 2, 'weight' => 257, 'alternatives' => [
                    ['id' => '7765ca57-f924-591c-82e9-a17241ae4b76', 'description' => 'Back in Black', 'correct_answer' => false],
                    ['id' => '4bcc2a78-c862-5d49-be77-03089b3bdc4a', 'description' => 'Highway to Hell', 'correct_answer' => false],
                    ['id' => 'ec690f6d-69d6-5ec8-bfbb-e0e26cbc4654', 'description' => 'Reign in Blood', 'correct_answer' => true],
                    ['id' => 'd0778821-c1b2-5a0e-add8-32ac61f68d0b', 'description' => 'Master of Puppets', 'correct_answer' => false],
                    ['id' => '088e6667-12ca-5517-817c-84ff7bc06b22', 'description' => 'Powerslave', 'correct_answer' => false]
                ]],
        ['id' => '39444eb4-1f81-59c7-b49a-a7226559045b', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum do Black Sabbath inclui \'War Pigs\' e \'Iron Man\'?', 'difficulty' => 2, 'weight' => 337, 'alternatives' => [
                    ['id' => '0ce496bf-7a9a-5814-9081-d8fd9cfbb761', 'description' => 'Reign in Blood', 'correct_answer' => false],
                    ['id' => 'e6921014-e1ac-588b-9e24-69b044c5c61b', 'description' => 'Paranoid', 'correct_answer' => true],
                    ['id' => 'b71d5afb-2eb5-5773-a6dc-f74c1a1a239c', 'description' => 'Highway to Hell', 'correct_answer' => false],
                    ['id' => '2a93befe-e6ab-5ca4-8141-e8a5c50cabc4', 'description' => 'Appetite for Destruction', 'correct_answer' => false],
                    ['id' => '368aa8aa-9e26-59a8-89d4-d1f66d4ed013', 'description' => 'Master of Puppets', 'correct_answer' => false]
                ]],
        ['id' => 'a96767d2-586e-5e92-8cbe-c10c12887847', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum de estreia do Guns N\' Roses inclui \'Welcome to the Jungle\' e \'Paradise City\'?', 'difficulty' => 2, 'weight' => 269, 'alternatives' => [
                    ['id' => '764a248c-5e97-53ee-ae3f-522d6f4a149a', 'description' => 'Reign in Blood', 'correct_answer' => false],
                    ['id' => 'f1fac926-e38a-55fe-ac9c-0d0a3b35fa24', 'description' => 'The Number of the Beast', 'correct_answer' => false],
                    ['id' => '69b46f95-b4b5-58c0-8fbb-cd5d73518747', 'description' => 'Appetite for Destruction', 'correct_answer' => true],
                    ['id' => '5a73a971-605f-58ef-a225-a4d2be028e04', 'description' => 'British Steel', 'correct_answer' => false],
                    ['id' => '83ab2529-4b66-5c28-8e14-8c1b25051ece', 'description' => 'Ride the Lightning', 'correct_answer' => false]
                ]],
        ['id' => '75a0df99-f900-5a72-ac6d-0449e72d4865', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum do AC/DC inclui a faixa-título e \'If You Want Blood (You\'ve Got It)\'?', 'difficulty' => 2, 'weight' => 242, 'alternatives' => [
                    ['id' => '5b2097f7-88b0-5886-b20b-383bc6148a12', 'description' => 'Appetite for Destruction', 'correct_answer' => false],
                    ['id' => 'f19dbe91-9cac-5a0f-a432-b6125dc89360', 'description' => 'Paranoid', 'correct_answer' => false],
                    ['id' => '1d83513c-1671-5dcc-9011-636a4de346ce', 'description' => 'Powerslave', 'correct_answer' => false],
                    ['id' => '4c4ee880-98fe-5d14-b21c-0fc2b9ad0518', 'description' => 'Highway to Hell', 'correct_answer' => true],
                    ['id' => '6b3f8972-7159-5104-9f06-9705b2d260b8', 'description' => 'Ride the Lightning', 'correct_answer' => false]
                ]],
        ['id' => '602a1692-9d7f-5938-8853-2637e1472373', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum do Metallica inclui \'Battery\' e a faixa-título?', 'difficulty' => 2, 'weight' => 367, 'alternatives' => [
                    ['id' => '94e8548d-c9f5-5365-b770-ee5ab9b0ebff', 'description' => 'Master of Puppets', 'correct_answer' => true],
                    ['id' => '0955005a-8fad-5e3b-b271-7330f1858521', 'description' => 'Powerslave', 'correct_answer' => false],
                    ['id' => '0f3750ce-832d-5ed0-84c8-2c18cdef4eb5', 'description' => 'Paranoid', 'correct_answer' => false],
                    ['id' => '6110a68a-b504-50f5-8019-87275f821647', 'description' => 'Highway to Hell', 'correct_answer' => false],
                    ['id' => '019f9993-93be-505c-b995-d9a5d6027101', 'description' => 'The Number of the Beast', 'correct_answer' => false]
                ]],
        ['id' => '62bf8f56-f425-5fd1-9492-0dd492724e56', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum de Caetano Veloso inclui \'You Don\'t Know Me\' e \'Nine Out of Ten\'?', 'difficulty' => 2, 'weight' => 203, 'alternatives' => [
                    ['id' => 'c5b531ba-a8ea-5627-946d-4b79ff6bf98f', 'description' => 'Refazenda', 'correct_answer' => false],
                    ['id' => '14720f61-f85e-50f7-8558-ccba15813928', 'description' => 'Sobrevivendo no Inferno', 'correct_answer' => false],
                    ['id' => '033e7704-b0d7-53eb-80dd-dc0637d7c56d', 'description' => 'Transa', 'correct_answer' => true],
                    ['id' => '407cdee4-cfe8-52c7-a71a-14cd49e5420a', 'description' => 'Clube da Esquina', 'correct_answer' => false],
                    ['id' => '7d79a4f7-16a4-550d-9d22-b5ebf194e96c', 'description' => 'Construção', 'correct_answer' => false]
                ]],
        ['id' => 'e663b864-154a-537a-914f-95efbb5c1b0c', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum dos Titãs inclui \'Polícia\', \'AA UU\' e \'Homem Primata\'?', 'difficulty' => 2, 'weight' => 249, 'alternatives' => [
                    ['id' => '23e1ddd9-745b-5ff0-955a-955485bfa31c', 'description' => 'Sobrevivendo no Inferno', 'correct_answer' => false],
                    ['id' => '23a7831d-acf2-5b5a-bad1-dcc6885fca14', 'description' => 'Acabou Chorare', 'correct_answer' => false],
                    ['id' => '69dc943d-7825-5cbb-a94f-a95bd4ae680e', 'description' => 'Clube da Esquina', 'correct_answer' => false],
                    ['id' => 'f66ed121-ec93-506a-83b9-2f5e64de7db8', 'description' => 'Cabeça Dinossauro', 'correct_answer' => true],
                    ['id' => 'aa4849f4-6db6-5d62-84e1-70d2ab71638f', 'description' => 'Afrociberdelia', 'correct_answer' => false]
                ]],
        ['id' => 'f7023e2d-7e76-56d7-9a70-7ccd38deb55c', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum dos Novos Baianos inclui \'Preta Pretinha\' e \'Mistério do Planeta\'?', 'difficulty' => 2, 'weight' => 239, 'alternatives' => [
                    ['id' => '0b4fc80f-b922-5cf5-af69-0154034b6cfc', 'description' => 'Construção', 'correct_answer' => false],
                    ['id' => 'cbd0c24e-def8-5dc3-97df-2b417d389a6a', 'description' => 'Acabou Chorare', 'correct_answer' => true],
                    ['id' => 'feeaeabe-2eef-5a92-9269-1d34655faca9', 'description' => 'Cabeça Dinossauro', 'correct_answer' => false],
                    ['id' => 'c7ee3196-e5fc-5f78-b860-f442a6a096d8', 'description' => 'Clube da Esquina', 'correct_answer' => false],
                    ['id' => '618feb7b-3f0f-5e14-8284-7b5d53d2ef72', 'description' => 'Da Lama ao Caos', 'correct_answer' => false]
                ]],
        ['id' => 'be7f1517-2715-5072-a7c6-cb93027c316b', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum de Chico Buarque inclui a faixa-título e \'Cotidiano\'?', 'difficulty' => 2, 'weight' => 232, 'alternatives' => [
                    ['id' => 'a57eedf3-a61f-5ed9-b424-cde31c256176', 'description' => 'Construção', 'correct_answer' => true],
                    ['id' => 'c6e3c366-a7c2-533f-850b-73c706b1dc0d', 'description' => 'Sobrevivendo no Inferno', 'correct_answer' => false],
                    ['id' => '77ddfcaf-2afd-56d8-aa02-7ff4080d2d4c', 'description' => 'Refazenda', 'correct_answer' => false],
                    ['id' => '4058cc12-3b1d-5288-a909-54a91f6440a2', 'description' => 'Afrociberdelia', 'correct_answer' => false],
                    ['id' => '620bd7a2-7693-5ec6-a51d-1408d5c53ef1', 'description' => 'A Tábua de Esmeralda', 'correct_answer' => false]
                ]],
        ['id' => '72e22640-1d94-5b3e-81d1-cd2119b5d59a', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum de Gilberto Gil inclui a faixa-título e \'Tenho Sede\'?', 'difficulty' => 2, 'weight' => 203, 'alternatives' => [
                    ['id' => '66046763-fa8f-598a-91da-35e75d39ba4b', 'description' => 'Da Lama ao Caos', 'correct_answer' => false],
                    ['id' => '158e9316-89ab-543d-8caf-de0b687599b8', 'description' => 'Construção', 'correct_answer' => false],
                    ['id' => '29722c29-338f-5d01-9ffe-22af272fe766', 'description' => 'Transa', 'correct_answer' => false],
                    ['id' => 'da690cb7-bc5b-53a0-a319-ea630a656bc4', 'description' => 'Cabeça Dinossauro', 'correct_answer' => false],
                    ['id' => 'e2ec76c7-2a4b-5990-89ba-e7cfb93c5bfe', 'description' => 'Refazenda', 'correct_answer' => true]
                ]],
        ['id' => '500a8202-7a90-572f-8f42-c5b47d74ace3', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum de estreia do Nação Zumbi inclui \'A Praieira\' e a faixa-título?', 'difficulty' => 2, 'weight' => 265, 'alternatives' => [
                    ['id' => '062c4e55-0738-5bad-bb95-37541d197808', 'description' => 'Transa', 'correct_answer' => false],
                    ['id' => '6522d562-204a-5253-bf5d-a4ddbef88dee', 'description' => 'Cabeça Dinossauro', 'correct_answer' => false],
                    ['id' => 'e2a5dceb-fe35-523f-bf80-0ae5fe098e8e', 'description' => 'Refazenda', 'correct_answer' => false],
                    ['id' => '86e4c29e-956f-56c1-a0ca-74177d6287a0', 'description' => 'Acabou Chorare', 'correct_answer' => false],
                    ['id' => 'e2b990fc-7bca-59a9-a1c7-260b5d8236ee', 'description' => 'Da Lama ao Caos', 'correct_answer' => true]
                ]],
        ['id' => '8024614d-9dae-54ff-809d-ce9ae83b5636', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum de Milton Nascimento e Lô Borges inclui \'Tudo o Que Você Podia Ser\'?', 'difficulty' => 2, 'weight' => 280, 'alternatives' => [
                    ['id' => '113ab1e0-8223-51e8-9294-5106e4e72451', 'description' => 'Clube da Esquina', 'correct_answer' => true],
                    ['id' => '794c1204-234c-5b4e-9bb0-fa62cc754ba2', 'description' => 'Cabeça Dinossauro', 'correct_answer' => false],
                    ['id' => '730fec65-695b-51c7-8328-ac37c3a789f6', 'description' => 'Refazenda', 'correct_answer' => false],
                    ['id' => 'ea0557d8-1c03-5f16-929e-f71a3d683f6b', 'description' => 'Sobrevivendo no Inferno', 'correct_answer' => false],
                    ['id' => '7c0faa5f-4e9e-5214-88eb-1d2a8d0b832f', 'description' => 'Construção', 'correct_answer' => false]
                ]],
        ['id' => '83e0d44c-3896-584e-8fc1-887293b6b64a', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum dos Racionais MC\'s inclui \'Diário de um Detento\' e \'Capítulo 4, Versículo 3\'?', 'difficulty' => 2, 'weight' => 226, 'alternatives' => [
                    ['id' => '29f69ac4-3b6b-5b99-a942-55ccd08c9204', 'description' => 'A Tábua de Esmeralda', 'correct_answer' => false],
                    ['id' => '875d4fdc-1db1-5853-b8f1-6d84c439ba0a', 'description' => 'Acabou Chorare', 'correct_answer' => false],
                    ['id' => 'ab646764-b5a4-5787-97bc-f068ba738870', 'description' => 'Sobrevivendo no Inferno', 'correct_answer' => true],
                    ['id' => '6edfab8c-5bf8-5cae-91e3-870fdc20e39c', 'description' => 'Construção', 'correct_answer' => false],
                    ['id' => 'b1ae276d-64e4-5a7d-befe-cd0c4a47b079', 'description' => 'Transa', 'correct_answer' => false]
                ]],
        ['id' => 'db9e1427-3433-5efb-a78a-bd9d6cac5368', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum de estreia do Justice inclui \'D.A.N.C.E.\' e \'Genesis\'?', 'difficulty' => 2, 'weight' => 280, 'alternatives' => [
                    ['id' => '39f02d2f-c7bb-53b6-bbec-3eb29b62ff7c', 'description' => 'Mezzanine', 'correct_answer' => false],
                    ['id' => '60c72bf0-0767-51b2-84ee-e83f42a6491f', 'description' => 'The Fat of the Land', 'correct_answer' => false],
                    ['id' => '6343d8d4-a293-5b2f-9b51-480c37f136e4', 'description' => 'Cross', 'correct_answer' => true],
                    ['id' => '78392358-aa7b-5a27-93e0-67ed5aa2e782', 'description' => 'Dummy', 'correct_answer' => false],
                    ['id' => 'ba410fa7-8b63-59d7-9e69-36a1572ce1ef', 'description' => 'Blue Lines', 'correct_answer' => false]
                ]],
        ['id' => '800706e9-6811-5bef-9f2e-643e13f4f95d', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum de Moby inclui \'Porcelain\' e \'Natural Blues\'?', 'difficulty' => 2, 'weight' => 256, 'alternatives' => [
                    ['id' => '97ff0a56-3a84-55ca-881e-70d91ee22d82', 'description' => 'Play', 'correct_answer' => true],
                    ['id' => '1fd1cc4a-81bf-5d2c-bca6-56fbe8428856', 'description' => 'Blue Lines', 'correct_answer' => false],
                    ['id' => 'b967789e-67a7-5213-9fb3-a14b459d2be0', 'description' => 'Mezzanine', 'correct_answer' => false],
                    ['id' => 'b64097f0-ccf1-542b-9446-41e7a8a7041a', 'description' => 'Dummy', 'correct_answer' => false],
                    ['id' => '649e1f82-978b-58a6-b580-c98c2eb452dd', 'description' => 'Moon Safari', 'correct_answer' => false]
                ]],
        ['id' => '164ef582-853d-5105-922e-f2625998aaac', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum do The Prodigy inclui \'Firestarter\' e \'Breathe\'?', 'difficulty' => 2, 'weight' => 333, 'alternatives' => [
                    ['id' => '279aa8ef-3660-57c0-9199-b2ba0bd2a31d', 'description' => 'The Fat of the Land', 'correct_answer' => true],
                    ['id' => '87b4f880-6d0b-5166-a63d-6d41cb4b2cf8', 'description' => 'Blue Lines', 'correct_answer' => false],
                    ['id' => '4eb4c4ad-0ce7-5059-bb65-98b9fa6d1a00', 'description' => 'Play', 'correct_answer' => false],
                    ['id' => '95883fcd-d8fc-572d-b3e6-6e99252fdfe7', 'description' => 'Moon Safari', 'correct_answer' => false],
                    ['id' => 'dc5a5956-fd29-51ff-b2d5-ea0ae450a454', 'description' => 'Dummy', 'correct_answer' => false]
                ]],
        ['id' => '776a0613-6460-576a-a096-b0e3fc80174f', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum de estreia do Portishead inclui \'Sour Times\' e \'Glory Box\'?', 'difficulty' => 2, 'weight' => 363, 'alternatives' => [
                    ['id' => 'f07cbe87-4c92-5c8c-9ed1-a0ec9600e2b8', 'description' => 'Play', 'correct_answer' => false],
                    ['id' => 'c6f97396-3e44-57fe-8df8-cd715207dd48', 'description' => 'Dummy', 'correct_answer' => true],
                    ['id' => 'c0899357-42db-51f1-8ad5-047da5ecfd02', 'description' => 'Random Access Memories', 'correct_answer' => false],
                    ['id' => '05313f38-6a3e-5938-9d30-aa3ccf2917fd', 'description' => 'Cross', 'correct_answer' => false],
                    ['id' => '6bdd66de-7f45-5c5e-8208-85834ed825d8', 'description' => 'Homework', 'correct_answer' => false]
                ]],
        ['id' => '89652313-14ea-543d-8601-a46cdc4bff69', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum de estreia do Air inclui \'Sexy Boy\' e \'All I Need\'?', 'difficulty' => 2, 'weight' => 316, 'alternatives' => [
                    ['id' => 'df891c4b-5876-5db6-943a-ab897c940c51', 'description' => 'Mezzanine', 'correct_answer' => false],
                    ['id' => 'bdc04f68-2bc7-5e83-b7e5-5caec83861c8', 'description' => 'Dummy', 'correct_answer' => false],
                    ['id' => 'a1924b0f-eabb-5093-95c4-d9c03ada51f6', 'description' => 'Cross', 'correct_answer' => false],
                    ['id' => '4743468a-eec0-5c06-a342-8597f3c948d4', 'description' => 'Homework', 'correct_answer' => false],
                    ['id' => '9a8234f6-f09e-5aab-99ee-177863ce1a26', 'description' => 'Moon Safari', 'correct_answer' => true]
                ]],
        ['id' => '4a31b59f-ab2e-5580-b1a0-d28fee037686', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum do Daft Punk inclui \'One More Time\' e \'Harder, Better, Faster, Stronger\'?', 'difficulty' => 2, 'weight' => 352, 'alternatives' => [
                    ['id' => '387593e2-6ff6-5f5f-8d61-1669ec51764e', 'description' => 'The Fat of the Land', 'correct_answer' => false],
                    ['id' => '1e3f9a6e-df57-55b7-9645-bf63db34ab1d', 'description' => 'Discovery', 'correct_answer' => true],
                    ['id' => '059f4ddc-aa87-5851-b3ef-01bb0f581fc4', 'description' => 'Blue Lines', 'correct_answer' => false],
                    ['id' => 'd6ca5ed3-19e7-57ad-a401-a21b3fc5ab98', 'description' => 'Moon Safari', 'correct_answer' => false],
                    ['id' => 'ecfb5386-f794-5d46-b298-0a5ddc807890', 'description' => 'Homework', 'correct_answer' => false]
                ]],
        ['id' => '0869bb2e-9e23-5666-a633-19efece794a1', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum do Daft Punk inclui \'Get Lucky\' e \'Instant Crush\'?', 'difficulty' => 2, 'weight' => 251, 'alternatives' => [
                    ['id' => '78e79125-a3d2-5bee-a062-640b91646983', 'description' => 'Random Access Memories', 'correct_answer' => true],
                    ['id' => 'bc0ec09f-27bd-5b6a-8a01-9fe17fb07d0e', 'description' => 'Blue Lines', 'correct_answer' => false],
                    ['id' => '79267d9e-b941-538d-bd04-83d030e9e084', 'description' => 'Play', 'correct_answer' => false],
                    ['id' => '61a3a6af-0f07-5017-9305-4301ce2e76bd', 'description' => 'Moon Safari', 'correct_answer' => false],
                    ['id' => 'feb2ec56-028c-5bda-bc1e-51fef05a4b2f', 'description' => 'Homework', 'correct_answer' => false]
                ]],
        ['id' => '2ffa9b47-a0ff-5257-af0b-d4ba562fcb24', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum do Massive Attack inclui \'Teardrop\' e \'Angel\'?', 'difficulty' => 2, 'weight' => 264, 'alternatives' => [
                    ['id' => '05459648-205b-5794-aa75-8e534701fc77', 'description' => 'Random Access Memories', 'correct_answer' => false],
                    ['id' => '64f7f61c-1164-55b9-9e87-22c334ef3908', 'description' => 'Dummy', 'correct_answer' => false],
                    ['id' => 'eb9a8f7d-3e00-531e-b534-d0dff4479719', 'description' => 'Mezzanine', 'correct_answer' => true],
                    ['id' => 'e7171434-5744-55df-bbc1-453f6f8f4d61', 'description' => 'Play', 'correct_answer' => false],
                    ['id' => 'df07b4c5-8c82-5fd6-a319-699d872024b9', 'description' => 'Homework', 'correct_answer' => false]
                ]],
        ['id' => 'ef92770d-b857-53e3-94de-931644706691', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual suíte de John Coltrane é dividida em quatro partes chamadas \'Acknowledgement\', \'Resolution\', \'Pursuance\' e \'Psalm\'?', 'difficulty' => 3, 'weight' => 553, 'alternatives' => [
                    ['id' => 'cbe615ae-2cd1-561f-804b-a3ee849d618f', 'description' => 'Out to Lunch!', 'correct_answer' => false],
                    ['id' => 'b71dbf98-95f1-5cfb-ad24-6c95074230c2', 'description' => 'Mingus Ah Um', 'correct_answer' => false],
                    ['id' => 'fe5c45e5-ea46-56e4-9f14-ce56dfb9ba1a', 'description' => 'The Shape of Jazz to Come', 'correct_answer' => false],
                    ['id' => '517e0827-7651-56cf-a156-5dc32a1e15ec', 'description' => 'A Love Supreme', 'correct_answer' => true],
                    ['id' => 'ee847679-a017-595f-a2ee-9ea8550be6e2', 'description' => 'Mingus Dynasty', 'correct_answer' => false]
                ]],
        ['id' => '8039122f-392c-5e07-9488-47483c563304', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum de Charles Mingus inclui \'Goodbye Pork Pie Hat\' e \'Better Git It in Your Soul\'?', 'difficulty' => 3, 'weight' => 459, 'alternatives' => [
                    ['id' => '748200d3-4117-55ce-9139-1528fe429ca4', 'description' => 'Mingus Ah Um', 'correct_answer' => true],
                    ['id' => 'c72ee350-a620-5321-aa00-b7323c6bb817', 'description' => 'Kind of Blue', 'correct_answer' => false],
                    ['id' => 'bdbc281a-e098-59a5-88d2-d2aa0f1c2f8c', 'description' => 'Giant Steps', 'correct_answer' => false],
                    ['id' => '42589a94-31db-5e88-a7e8-9752f48a1133', 'description' => 'Bitches Brew', 'correct_answer' => false],
                    ['id' => 'a40f4234-700d-5247-b0b7-30e00eb99b7e', 'description' => 'Mingus Dynasty', 'correct_answer' => false]
                ]],
        ['id' => '2f91553d-69eb-5120-af89-8ee22ae1f33b', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum do Dave Brubeck Quartet inclui \'Take Five\' e \'Blue Rondo à la Turk\'?', 'difficulty' => 3, 'weight' => 480, 'alternatives' => [
                    ['id' => 'd6d7cc63-ccd9-5cfd-9b0b-882293fc5e1e', 'description' => 'Mingus Dynasty', 'correct_answer' => false],
                    ['id' => '35793071-fea5-5c2e-9ed2-c48c47f40ecb', 'description' => 'Bitches Brew', 'correct_answer' => false],
                    ['id' => 'c1a4e5cb-b24b-533d-9fb8-dc65a81b86a2', 'description' => 'Time Out', 'correct_answer' => true],
                    ['id' => '118200dc-018e-55d4-9485-8e5e4724af3e', 'description' => 'The Shape of Jazz to Come', 'correct_answer' => false],
                    ['id' => '7970c379-b4a0-5a39-8ad6-001f1782ccb6', 'description' => 'A Love Supreme', 'correct_answer' => false]
                ]],
        ['id' => '14eefba6-8afb-5a10-966f-0f176c76c45a', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum de Charles Mingus é uma suíte orquestral frequentemente associada ao jazz de vanguarda?', 'difficulty' => 3, 'weight' => 433, 'alternatives' => [
                    ['id' => '65d49202-82c2-570d-8e0f-b98ef38a4ecb', 'description' => 'Mingus Dynasty', 'correct_answer' => false],
                    ['id' => '720fe6cc-83ec-5506-b21f-f15a0f57acb5', 'description' => 'A Love Supreme', 'correct_answer' => false],
                    ['id' => '52066806-78ea-595d-a200-e864bd9c2327', 'description' => 'The Black Saint and the Sinner Lady', 'correct_answer' => true],
                    ['id' => '717e4ff1-81bf-5334-a155-9d787b35ec2b', 'description' => 'Mingus Ah Um', 'correct_answer' => false],
                    ['id' => '0470249c-0da4-5321-bd93-65dce261eb0b', 'description' => 'The Shape of Jazz to Come', 'correct_answer' => false]
                ]],
        ['id' => 'bd94969a-3ad2-508e-ae64-1245b352424c', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum de Charles Mingus foi lançado em 1959 como sequência de \'Mingus Ah Um\'?', 'difficulty' => 3, 'weight' => 515, 'alternatives' => [
                    ['id' => 'c9125535-3527-5c68-8a68-89fee20846fe', 'description' => 'A Love Supreme', 'correct_answer' => false],
                    ['id' => 'dc2c9f4e-0317-5978-a6a3-c78b8aae547b', 'description' => 'Out to Lunch!', 'correct_answer' => false],
                    ['id' => 'a71953a9-e5c7-5c61-896c-e82d981ee3d0', 'description' => 'Kind of Blue', 'correct_answer' => false],
                    ['id' => '67b105d6-9781-5829-9aaf-3c15f7bf0bdc', 'description' => 'Mingus Dynasty', 'correct_answer' => true],
                    ['id' => '2a8c5d0c-f244-5cd4-98d3-6ffa552208c1', 'description' => 'The Black Saint and the Sinner Lady', 'correct_answer' => false]
                ]],
        ['id' => 'feac3e35-10e2-5ab2-989c-3ee7a83dea80', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum de Ornette Coleman, de 1959, é um marco do free jazz?', 'difficulty' => 3, 'weight' => 465, 'alternatives' => [
                    ['id' => '11a1f666-7d1d-5769-8f23-bc3cc88a63c5', 'description' => 'Bitches Brew', 'correct_answer' => false],
                    ['id' => '59dfb183-b18a-51da-b6c6-8fda0a55bb93', 'description' => 'The Shape of Jazz to Come', 'correct_answer' => true],
                    ['id' => '957114a7-77c2-5bd4-8ea3-1cbff041b932', 'description' => 'Mingus Ah Um', 'correct_answer' => false],
                    ['id' => 'b882665e-0fa4-589f-a3be-806e59e5f221', 'description' => 'Time Out', 'correct_answer' => false],
                    ['id' => '2d434d64-8fd3-5cf3-b94b-ae4694863c55', 'description' => 'Kind of Blue', 'correct_answer' => false]
                ]],
        ['id' => '008dd716-c43a-5645-94b7-20d4ff62b7e3', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum de John Coltrane é conhecido pelas progressões harmônicas que deram origem à expressão \'Coltrane changes\'?', 'difficulty' => 3, 'weight' => 497, 'alternatives' => [
                    ['id' => '32eb8c7b-9b9d-517a-813a-716ed33a1c00', 'description' => 'Time Out', 'correct_answer' => false],
                    ['id' => '026b00a8-bbd6-5fc0-b5a3-5e9f9a56ef59', 'description' => 'Giant Steps', 'correct_answer' => true],
                    ['id' => '55df5dfc-84fe-5a62-b181-30d3e62da5ad', 'description' => 'The Shape of Jazz to Come', 'correct_answer' => false],
                    ['id' => 'a0aa634c-b9ce-5773-b929-41aa7847831c', 'description' => 'Mingus Ah Um', 'correct_answer' => false],
                    ['id' => '71b52b33-782e-568b-9d8e-ee2b258626e9', 'description' => 'A Love Supreme', 'correct_answer' => false]
                ]],
        ['id' => 'a0e5aa23-980e-5862-8c08-7a54e6d96b2e', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum de Eric Dolphy inclui \'Hat and Beard\' e é associado ao jazz de vanguarda?', 'difficulty' => 3, 'weight' => 585, 'alternatives' => [
                    ['id' => '8368d1a7-46d1-5a0e-9d36-5201cd5eb723', 'description' => 'Out to Lunch!', 'correct_answer' => true],
                    ['id' => 'c7d21bc6-03d5-5f2f-a3eb-80260dc8d955', 'description' => 'Time Out', 'correct_answer' => false],
                    ['id' => '35e0acb1-d85a-5727-88b0-c62d7ba94433', 'description' => 'Mingus Dynasty', 'correct_answer' => false],
                    ['id' => 'cddde824-a857-5a48-94f8-38bfdb7ebde8', 'description' => 'The Black Saint and the Sinner Lady', 'correct_answer' => false],
                    ['id' => '6b87fcf9-1d75-593d-acda-027a9175ea39', 'description' => 'Bitches Brew', 'correct_answer' => false]
                ]],
        ['id' => '571d1354-817d-5b70-b378-4d16a0c1b63f', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum dos Beatles apresenta uma banda fictícia e inclui \'Lucy in the Sky with Diamonds\'?', 'difficulty' => 3, 'weight' => 536, 'alternatives' => [
                    ['id' => '3cdf5801-46c0-5633-8c88-1da82653da6e', 'description' => 'Odessey and Oracle', 'correct_answer' => false],
                    ['id' => 'cdcda247-5139-5955-b84f-3fb1bb268d01', 'description' => 'Rubber Soul', 'correct_answer' => false],
                    ['id' => '40fd08e2-ce17-5e2f-ad0d-936e30d87701', 'description' => 'Sgt. Pepper\'s Lonely Hearts Club Band', 'correct_answer' => true],
                    ['id' => 'f95aef99-9824-577c-9080-25229a8d4815', 'description' => 'Pet Sounds', 'correct_answer' => false],
                    ['id' => '9de17be7-35b7-53a2-a942-42a49a2b8ca8', 'description' => 'Revolver', 'correct_answer' => false]
                ]],
        ['id' => '275f7d1b-89c4-551e-9f12-b4b19a7799bf', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum do Love, de 1967, inclui \'Alone Again Or\' e \'A House Is Not a Motel\'?', 'difficulty' => 3, 'weight' => 552, 'alternatives' => [
                    ['id' => '9246f3f5-b18d-51fd-98d3-a2a9620ed8e1', 'description' => 'Abbey Road', 'correct_answer' => false],
                    ['id' => 'e845a77f-e3e6-55d6-a357-3e5585cb08c9', 'description' => 'The Beatles', 'correct_answer' => false],
                    ['id' => 'f9e5b99e-a36a-5b84-bb3e-d2548eaa6cfa', 'description' => 'Odessey and Oracle', 'correct_answer' => false],
                    ['id' => '52dac898-dad5-5b1f-ba89-0fd19828d863', 'description' => 'Forever Changes', 'correct_answer' => true],
                    ['id' => '31ccea7c-91ff-584c-84a5-1e7df6800167', 'description' => 'Smile', 'correct_answer' => false]
                ]],
        ['id' => '7a731be8-b498-51b5-b5ec-6bd5e357ffc7', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum dos Beatles inclui \'Across the Universe\' e a faixa-título?', 'difficulty' => 3, 'weight' => 530, 'alternatives' => [
                    ['id' => 'aac72130-a0a8-5dea-bb01-fa4c894df506', 'description' => 'Abbey Road', 'correct_answer' => false],
                    ['id' => 'd124c657-9e08-5ea7-972e-9a6d2b3d964a', 'description' => 'Let It Be', 'correct_answer' => true],
                    ['id' => '27b2370e-81a8-50f6-9291-d8a40155af04', 'description' => 'The Beatles', 'correct_answer' => false],
                    ['id' => '272a7e54-c7b1-5ce0-acb2-a246941522ce', 'description' => 'Revolver', 'correct_answer' => false],
                    ['id' => 'ebd37093-ca84-5007-a46f-466575a20660', 'description' => 'Sgt. Pepper\'s Lonely Hearts Club Band', 'correct_answer' => false]
                ]],
        ['id' => 'a5e0256f-60a0-5b1f-b852-a1114caf5d85', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum dos Beatles inclui \'Norwegian Wood\' e \'In My Life\'?', 'difficulty' => 3, 'weight' => 577, 'alternatives' => [
                    ['id' => '13064b81-3c70-54b3-ad13-d98edc31a293', 'description' => 'Rubber Soul', 'correct_answer' => true],
                    ['id' => '2a6a7755-7e52-5c5e-b1b2-c15b2349e0c5', 'description' => 'Abbey Road', 'correct_answer' => false],
                    ['id' => '17154169-7930-591b-94c2-47205b3b0bc9', 'description' => 'Odessey and Oracle', 'correct_answer' => false],
                    ['id' => '0c82aa97-6f82-5b03-bdf4-a4d272d3b5d4', 'description' => 'Forever Changes', 'correct_answer' => false],
                    ['id' => 'e99daf3f-b8ae-5730-819c-975e4ce86df6', 'description' => 'Smile', 'correct_answer' => false]
                ]],
        ['id' => 'ad5c2d54-2311-5f10-8be0-7cc459ce81ce', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum dos Zombies inclui \'Time of the Season\'?', 'difficulty' => 3, 'weight' => 418, 'alternatives' => [
                    ['id' => 'c573453c-4bb3-59af-9919-42ed4a304025', 'description' => 'Pet Sounds', 'correct_answer' => false],
                    ['id' => 'd3e02424-8837-5efa-9ee6-7373c5712efb', 'description' => 'Forever Changes', 'correct_answer' => false],
                    ['id' => '7a05e763-d6e7-58c1-a70f-5153e9510a4c', 'description' => 'Revolver', 'correct_answer' => false],
                    ['id' => 'ad0cea1f-545b-5099-bb89-ebaf3ba7c99a', 'description' => 'Odessey and Oracle', 'correct_answer' => true],
                    ['id' => '4d9aec21-03a5-5823-bf8f-53cfb82af73c', 'description' => 'Sgt. Pepper\'s Lonely Hearts Club Band', 'correct_answer' => false]
                ]],
        ['id' => '67023f3b-679c-541f-b832-f336d838de4d', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum dos Beatles inclui \'Eleanor Rigby\', \'Tomorrow Never Knows\' e \'Taxman\'?', 'difficulty' => 3, 'weight' => 459, 'alternatives' => [
                    ['id' => '7939d415-d9c6-54a0-889e-8081b2093128', 'description' => 'Odessey and Oracle', 'correct_answer' => false],
                    ['id' => '9de045ed-44d8-59d6-8b20-b992f415f030', 'description' => 'Abbey Road', 'correct_answer' => false],
                    ['id' => '1fe94b33-afc9-522e-921c-d0766c63e3a7', 'description' => 'Revolver', 'correct_answer' => true],
                    ['id' => '4a9ac628-a90a-5dd8-b1d9-981a697707de', 'description' => 'Forever Changes', 'correct_answer' => false],
                    ['id' => '0c4615c4-dc67-537b-80a5-6cd1194da52f', 'description' => 'Rubber Soul', 'correct_answer' => false]
                ]],
        ['id' => 'a9e034c0-24b0-5508-921a-2bbbe39cf08c', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum dos Beach Boys inclui \'Wouldn\'t It Be Nice\' e \'God Only Knows\'?', 'difficulty' => 3, 'weight' => 494, 'alternatives' => [
                    ['id' => '9099fd77-5e64-5093-b13a-840f7b006431', 'description' => 'Pet Sounds', 'correct_answer' => true],
                    ['id' => '36d4c236-fe8a-591a-83bb-7b71bdf30246', 'description' => 'The Beatles', 'correct_answer' => false],
                    ['id' => 'b79612cc-4d7a-58e0-91e3-0bc12cc11c3d', 'description' => 'Odessey and Oracle', 'correct_answer' => false],
                    ['id' => '522ae8f9-03a6-57d7-a7ec-4de523319508', 'description' => 'Smile', 'correct_answer' => false],
                    ['id' => 'd6ca9d0a-c8bf-5221-9273-546f50c2d382', 'description' => 'Revolver', 'correct_answer' => false]
                ]],
        ['id' => 'a19d8c80-2163-5d96-90e4-f8df1210a80d', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum dos Beatles termina seu lado B com um medley de várias canções?', 'difficulty' => 3, 'weight' => 523, 'alternatives' => [
                    ['id' => '94fe83b0-b0ef-501b-8bf9-14d3f97fa503', 'description' => 'Pet Sounds', 'correct_answer' => false],
                    ['id' => 'b0c635b6-787d-57b3-b536-5184c1b5ca92', 'description' => 'Sgt. Pepper\'s Lonely Hearts Club Band', 'correct_answer' => false],
                    ['id' => '515b3c55-f2f8-5757-b99f-e7bbec2d425a', 'description' => 'Abbey Road', 'correct_answer' => true],
                    ['id' => '3252295c-fac8-5004-a55e-1b2cacccce32', 'description' => 'The Beatles', 'correct_answer' => false],
                    ['id' => 'e6846652-fb2f-53bf-be6c-cec0488b9e63', 'description' => 'Smile', 'correct_answer' => false]
                ]],
        ['id' => '66454185-7f9b-5649-8c23-7fae82c5d4f3', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum de Charles Mingus homenageia Lester Young em \'Goodbye Pork Pie Hat\'?', 'difficulty' => 3, 'weight' => 534, 'alternatives' => [
                    ['id' => '3b9f40c6-d2ea-5484-a5ad-bac605730e85', 'description' => 'The Köln Concert', 'correct_answer' => false],
                    ['id' => '8551c067-4a69-58c0-961f-c353ffcff9de', 'description' => 'Chega de Saudade', 'correct_answer' => false],
                    ['id' => 'd96cbc7d-654f-518c-830c-495adc2f6f17', 'description' => 'A Love Supreme', 'correct_answer' => false],
                    ['id' => '0de13b80-69f3-56d7-9304-7c95057fd41a', 'description' => 'Mingus Ah Um', 'correct_answer' => true],
                    ['id' => 'fe1b87b3-0674-54f3-baa7-39f4d9ec5a43', 'description' => 'Kind of Blue', 'correct_answer' => false]
                ]],
        ['id' => '92140dba-6f46-56cf-bdd4-5072ac09624b', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum de Elis Regina e Tom Jobim inclui \'Águas de Março\' em dueto?', 'difficulty' => 3, 'weight' => 514, 'alternatives' => [
                    ['id' => '561c5e2c-1c0d-56a7-9419-271bb4d488e6', 'description' => 'Mingus Ah Um', 'correct_answer' => false],
                    ['id' => '6fd89fcb-afcf-53b2-ac73-8dd44b4a7f2f', 'description' => 'Elis & Tom', 'correct_answer' => true],
                    ['id' => '920b8e35-b0de-5e8c-8b4f-cd2e1ad7222a', 'description' => 'A Love Supreme', 'correct_answer' => false],
                    ['id' => '9b3728f0-6e63-59f6-b1be-59109c550674', 'description' => 'Canção do Amor Demais', 'correct_answer' => false],
                    ['id' => 'a6610428-38d3-55e4-9af4-02b1b2ff46ec', 'description' => 'Getz/Gilberto', 'correct_answer' => false]
                ]],
        ['id' => '7710b4a6-a8e2-5453-9bdd-c49f959857ba', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum de Stan Getz e João Gilberto inclui \'The Girl from Ipanema\' com Astrud Gilberto?', 'difficulty' => 3, 'weight' => 494, 'alternatives' => [
                    ['id' => 'ea223f91-83e2-5ee9-9629-79cf638e775c', 'description' => 'Canção do Amor Demais', 'correct_answer' => false],
                    ['id' => '48bc4bbe-172e-5c97-ad62-7bb8c80c5bf8', 'description' => 'Elis & Tom', 'correct_answer' => false],
                    ['id' => 'eca90e55-1e77-5302-9910-b476763b3c51', 'description' => 'The Shape of Jazz to Come', 'correct_answer' => false],
                    ['id' => '291f74e0-753e-5283-b19d-efa7b38f1c5f', 'description' => 'Getz/Gilberto', 'correct_answer' => true],
                    ['id' => 'b36a192d-fc9c-55dc-a447-f64e4cc36a15', 'description' => 'Chega de Saudade', 'correct_answer' => false]
                ]],
        ['id' => '581df1e3-3b94-53fd-815e-2265850ecd9b', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum de João Gilberto, lançado em 1959, é um marco da consolidação da bossa nova?', 'difficulty' => 3, 'weight' => 568, 'alternatives' => [
                    ['id' => 'eb359bb9-2c16-5d02-95b7-cc30f46b3db7', 'description' => 'The Shape of Jazz to Come', 'correct_answer' => false],
                    ['id' => '195c2294-c2ea-525c-88b0-8e5874f1ffc6', 'description' => 'Ellington at Newport', 'correct_answer' => false],
                    ['id' => '7e733edb-8d4a-5ab8-a4aa-11655a65d978', 'description' => 'The Köln Concert', 'correct_answer' => false],
                    ['id' => 'cebafe88-deb3-5259-821d-bc0da2250ec5', 'description' => 'Chega de Saudade', 'correct_answer' => true],
                    ['id' => '95fbca48-c786-5de4-bdc0-068f7e3a9583', 'description' => 'Mingus Ah Um', 'correct_answer' => false]
                ]],
        ['id' => '68efb650-2df7-5464-9a50-bb65ddb93ff2', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual gravação ao vivo de Duke Ellington, de 1956, inclui uma apresentação célebre de \'Diminuendo and Crescendo in Blue\'?', 'difficulty' => 3, 'weight' => 404, 'alternatives' => [
                    ['id' => '7917e239-2d02-5e0b-ae73-63bbc2eccf1a', 'description' => 'Mingus Ah Um', 'correct_answer' => false],
                    ['id' => 'ed5de468-d9d2-5011-9c53-91a8992f7ab8', 'description' => 'The Köln Concert', 'correct_answer' => false],
                    ['id' => 'bfbd7372-c6a8-520b-aabe-7bacba60a391', 'description' => 'Ellington at Newport', 'correct_answer' => true],
                    ['id' => '4f8ee940-637d-50f3-8b1c-f2706700c216', 'description' => 'Chega de Saudade', 'correct_answer' => false],
                    ['id' => 'f6700794-6497-5cdc-9830-8ec2bf730c97', 'description' => 'Getz/Gilberto', 'correct_answer' => false]
                ]],
        ['id' => '59fc95ba-4718-5282-93cb-584a2936c231', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum de Elizeth Cardoso, com acompanhamento de João Gilberto em algumas faixas, é associado à origem da bossa nova?', 'difficulty' => 3, 'weight' => 556, 'alternatives' => [
                    ['id' => '92ad3a53-af2b-53b9-a68d-501b35118757', 'description' => 'Kind of Blue', 'correct_answer' => false],
                    ['id' => 'aa15d4fe-519e-5b8e-b38c-2a3c2b83d8a3', 'description' => 'The Köln Concert', 'correct_answer' => false],
                    ['id' => '3b46b0d0-cc5d-5f65-a26f-9e8efcf0e4e1', 'description' => 'Canção do Amor Demais', 'correct_answer' => true],
                    ['id' => '9f13274a-2d7e-5ccd-9a6e-5f4cf5a7c2ae', 'description' => 'A Love Supreme', 'correct_answer' => false],
                    ['id' => 'a1f4c09b-c11b-5b72-b07b-a1585ddb70a6', 'description' => 'Elis & Tom', 'correct_answer' => false]
                ]],
        ['id' => '0ab32892-3ac6-526e-9bcd-6525ec752e28', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum de Miles Davis é frequentemente citado como um dos registros mais influentes do jazz modal?', 'difficulty' => 3, 'weight' => 497, 'alternatives' => [
                    ['id' => 'ad5481ba-1d5b-5a2e-8114-fe612555148d', 'description' => 'Mingus Ah Um', 'correct_answer' => false],
                    ['id' => 'ce9adfd6-840d-501f-b4d3-ff27429b4d8f', 'description' => 'The Köln Concert', 'correct_answer' => false],
                    ['id' => '7be5287c-d19e-5ba1-8077-4aa473fcb6b1', 'description' => 'The Shape of Jazz to Come', 'correct_answer' => false],
                    ['id' => '061e4996-13a0-5a3a-8896-4e81534fe2bf', 'description' => 'Elis & Tom', 'correct_answer' => false],
                    ['id' => 'c46fe727-7c85-512c-a4fe-17a4d221606c', 'description' => 'Kind of Blue', 'correct_answer' => true]
                ]],
        ['id' => '220c3057-6087-59fa-a12d-578b473a329e', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum de Ornette Coleman ajudou a estabelecer o conceito de harmolodics no jazz?', 'difficulty' => 3, 'weight' => 522, 'alternatives' => [
                    ['id' => 'd8e2162d-a732-5f1c-b4e1-6dd087c75751', 'description' => 'The Shape of Jazz to Come', 'correct_answer' => true],
                    ['id' => '8d69c536-4eef-5345-b308-dd940914b672', 'description' => 'Chega de Saudade', 'correct_answer' => false],
                    ['id' => '2888ab9b-5a40-5101-a1bc-80f28ec73af9', 'description' => 'Elis & Tom', 'correct_answer' => false],
                    ['id' => '5fe440aa-a0cd-5450-8ac7-9d5d46431318', 'description' => 'Ellington at Newport', 'correct_answer' => false],
                    ['id' => '36a47e2a-bef8-5437-b27f-eb3f4a86706d', 'description' => 'Kind of Blue', 'correct_answer' => false]
                ]],
        ['id' => '39ac88f4-3f2c-5390-89fc-9e2ebb1b8b7f', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum de estreia de The Notorious B.I.G. inclui \'Juicy\' e \'Big Poppa\'?', 'difficulty' => 3, 'weight' => 572, 'alternatives' => [
                    ['id' => '983c09b4-9001-5880-9b6e-48cf9f8d42a9', 'description' => 'The Miseducation of Lauryn Hill', 'correct_answer' => false],
                    ['id' => 'c0e30a17-d238-547d-9232-302f3d0b7a5e', 'description' => 'Ready to Die', 'correct_answer' => true],
                    ['id' => '22dfbe54-701a-56f8-8c3a-b9235b9e7d6e', 'description' => 'Aquemini', 'correct_answer' => false],
                    ['id' => '9854095c-6252-59c7-905e-6618d3033704', 'description' => 'good kid, m.A.A.d city', 'correct_answer' => false],
                    ['id' => '20586a6c-bf23-5fdf-bb3a-cdfdbe2b6a1e', 'description' => 'Enter the Wu-Tang (36 Chambers)', 'correct_answer' => false]
                ]],
        ['id' => 'a98af7d8-37f0-5c86-8717-2bb7ea7a7686', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum de estreia de Nas inclui \'N.Y. State of Mind\' e \'The World Is Yours\'?', 'difficulty' => 3, 'weight' => 449, 'alternatives' => [
                    ['id' => 'd15c0e66-454e-5bba-ac53-f4e42834da35', 'description' => 'Doggystyle', 'correct_answer' => false],
                    ['id' => '73c45eff-6c28-54d6-afd3-c187f0cdcb3c', 'description' => 'Aquemini', 'correct_answer' => false],
                    ['id' => 'c64936ca-4528-5638-ab06-4cee7c68021e', 'description' => 'The Chronic', 'correct_answer' => false],
                    ['id' => '3beefa33-3016-5a91-9577-bffa1bf60913', 'description' => 'Illmatic', 'correct_answer' => true],
                    ['id' => '84358362-2b9f-5643-8298-818db86ddbb9', 'description' => 'To Pimp a Butterfly', 'correct_answer' => false]
                ]],
        ['id' => 'c70518dc-f341-5dab-acaa-a4e10fc83d33', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum de estreia de Snoop Dogg foi produzido por Dr. Dre e inclui \'Gin and Juice\'?', 'difficulty' => 3, 'weight' => 466, 'alternatives' => [
                    ['id' => '21d88c1a-3c91-59b0-80fc-0801e21bbdec', 'description' => 'good kid, m.A.A.d city', 'correct_answer' => false],
                    ['id' => '9e70cd6e-8514-56e1-9130-42e1cb4eaac3', 'description' => 'Illmatic', 'correct_answer' => false],
                    ['id' => 'b1f600b3-cfcb-5d32-ba6c-a16b868b2010', 'description' => 'Doggystyle', 'correct_answer' => true],
                    ['id' => '90706f6f-7903-5358-bbd4-e6481993df77', 'description' => 'The Chronic', 'correct_answer' => false],
                    ['id' => 'ea07220f-e62e-5481-a6e9-ee2c98909b83', 'description' => 'The Miseducation of Lauryn Hill', 'correct_answer' => false]
                ]],
        ['id' => 'ef626044-f015-5e37-bbcb-ceeaaac0289a', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum de estreia de Kanye West inclui \'Jesus Walks\' e \'Through the Wire\'?', 'difficulty' => 3, 'weight' => 571, 'alternatives' => [
                    ['id' => 'a5ed19a9-25b6-5ca8-baab-c87005d059c3', 'description' => 'Illmatic', 'correct_answer' => false],
                    ['id' => '22adff1b-828c-5ab1-80f4-02d86494c324', 'description' => 'Aquemini', 'correct_answer' => false],
                    ['id' => 'fbc08179-a3d4-5de7-86b9-4e0e8a239e23', 'description' => 'The College Dropout', 'correct_answer' => true],
                    ['id' => '0c8e79c1-d2a2-5f98-a857-063504c08667', 'description' => 'Enter the Wu-Tang (36 Chambers)', 'correct_answer' => false],
                    ['id' => '1fff6368-d661-5755-a572-3567fa61a212', 'description' => 'Doggystyle', 'correct_answer' => false]
                ]],
        ['id' => '8836d788-a3dd-54f5-bed9-12b4e5cad2d0', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum solo de Dr. Dre ajudou a popularizar o G-funk e inclui \'Nuthin\' but a \'G\' Thang\'?', 'difficulty' => 3, 'weight' => 420, 'alternatives' => [
                    ['id' => '2e443797-7d0f-59bc-98eb-b6774651c54a', 'description' => 'The Chronic', 'correct_answer' => true],
                    ['id' => 'a0ae7441-3aea-5a43-b1f9-9a24ffa0df6e', 'description' => 'Ready to Die', 'correct_answer' => false],
                    ['id' => '14840205-3b10-57b4-974a-6cbbe94452e1', 'description' => 'Illmatic', 'correct_answer' => false],
                    ['id' => '57c9813a-916b-5c2f-83ee-edb204140774', 'description' => 'To Pimp a Butterfly', 'correct_answer' => false],
                    ['id' => 'e1a375b3-e3ac-53cc-8835-aa4886bab47c', 'description' => 'Doggystyle', 'correct_answer' => false]
                ]],
        ['id' => 'd1f4ff85-5c0f-5ed7-bd72-21c848f69d58', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum do OutKast combina os nomes artísticos de André 3000 e Big Boi?', 'difficulty' => 3, 'weight' => 537, 'alternatives' => [
                    ['id' => '79fc0419-f837-5ee5-bbf5-5910c93f8a04', 'description' => 'Doggystyle', 'correct_answer' => false],
                    ['id' => '020fac1e-9253-5e21-8a60-7707e3317e20', 'description' => 'Ready to Die', 'correct_answer' => false],
                    ['id' => 'f2cf5e23-195b-5de2-b5e6-6bb78298f6d3', 'description' => 'Enter the Wu-Tang (36 Chambers)', 'correct_answer' => false],
                    ['id' => 'c61bb07f-ca85-58bd-9893-3101bb6c4b79', 'description' => 'The College Dropout', 'correct_answer' => false],
                    ['id' => 'ec9ea6e4-786c-52c3-b425-c3815b66f5c1', 'description' => 'Aquemini', 'correct_answer' => true]
                ]],
        ['id' => '0a6f5490-6a3b-52be-827a-e88fa573b2c5', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum de Kendrick Lamar inclui \'Alright\' e \'King Kunta\'?', 'difficulty' => 3, 'weight' => 565, 'alternatives' => [
                    ['id' => '3ce31706-1b2c-5a05-a0a2-f5fc308bbbb2', 'description' => 'Doggystyle', 'correct_answer' => false],
                    ['id' => '4500124f-bf34-50ff-bdc7-713c5236d901', 'description' => 'Aquemini', 'correct_answer' => false],
                    ['id' => '9181dab4-8aa2-5492-8043-fb07b7786fae', 'description' => 'Enter the Wu-Tang (36 Chambers)', 'correct_answer' => false],
                    ['id' => '9e2b2718-9a51-50e1-9da6-d22c25f88234', 'description' => 'To Pimp a Butterfly', 'correct_answer' => true],
                    ['id' => '689179c1-ec2c-5d62-9b49-7ecf927c19f9', 'description' => 'The Miseducation of Lauryn Hill', 'correct_answer' => false]
                ]],
        ['id' => '8cb3840a-d5dc-5c05-8278-1d9971f81993', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum de estreia do Wu-Tang Clan inclui \'C.R.E.A.M.\' e \'Protect Ya Neck\'?', 'difficulty' => 3, 'weight' => 558, 'alternatives' => [
                    ['id' => '30e08a3f-fbc8-571f-97c2-f8f7c7127291', 'description' => 'Enter the Wu-Tang (36 Chambers)', 'correct_answer' => true],
                    ['id' => '85847caf-ef9d-5077-ad15-b772c2b4d489', 'description' => 'The Chronic', 'correct_answer' => false],
                    ['id' => 'bd8da846-096d-5cbb-91c9-6231c6a37b38', 'description' => 'Ready to Die', 'correct_answer' => false],
                    ['id' => 'aa2ff497-7d25-50c1-a510-88aa1492f191', 'description' => 'Illmatic', 'correct_answer' => false],
                    ['id' => '95e06a5e-8b39-543c-9e0b-b0f2743cb803', 'description' => 'The College Dropout', 'correct_answer' => false]
                ]],
        ['id' => '717eb086-58ed-52f2-b831-a6751009ac18', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum do Portishead inclui a voz de Beth Gibbons em \'Roads\' e \'Glory Box\'?', 'difficulty' => 3, 'weight' => 530, 'alternatives' => [
                    ['id' => '40f64d24-1bde-5a7f-9d1e-57991a7c6fa6', 'description' => 'Dummy', 'correct_answer' => true],
                    ['id' => 'cb689f8b-93f5-5fb7-98d0-d391d45de29e', 'description' => 'Maxinquaye', 'correct_answer' => false],
                    ['id' => 'fe898d67-8275-5834-a90f-8d1893a5ea2d', 'description' => 'Hounds of Love', 'correct_answer' => false],
                    ['id' => '55292221-2e63-57b1-881f-b719e28b09b8', 'description' => 'Vespertine', 'correct_answer' => false],
                    ['id' => '734d99bc-2731-54e3-9bad-3dd5021a234b', 'description' => 'Endtroducing.....', 'correct_answer' => false]
                ]],
        ['id' => 'c9c029e3-0321-522c-b436-0b2e148c541e', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum do Massive Attack inclui a colaboração vocal de Elizabeth Fraser em \'Teardrop\'?', 'difficulty' => 3, 'weight' => 512, 'alternatives' => [
                    ['id' => '4c0e6ef1-93d1-55c7-a34c-535641e23cd6', 'description' => 'Maxinquaye', 'correct_answer' => false],
                    ['id' => '8c85e109-97ef-59ae-a553-62016803d0e0', 'description' => 'Hounds of Love', 'correct_answer' => false],
                    ['id' => '9c447e0c-f9a9-53e5-8ae6-529be572e8cc', 'description' => 'Mezzanine', 'correct_answer' => true],
                    ['id' => '729f36e8-01ef-5c81-9439-3faa1fe1aaa3', 'description' => 'Post', 'correct_answer' => false],
                    ['id' => '9291005c-c69d-5a80-8ed4-4c1570b4eda9', 'description' => 'Endtroducing.....', 'correct_answer' => false]
                ]],
        ['id' => 'fadb5f4c-1f33-5c51-8627-d93a460ef959', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum de Björk inclui \'Army of Me\', \'Hyperballad\' e \'It\'s Oh So Quiet\'?', 'difficulty' => 3, 'weight' => 513, 'alternatives' => [
                    ['id' => '68451ba7-2daa-5193-b455-4c75ef1d9b48', 'description' => 'Vespertine', 'correct_answer' => false],
                    ['id' => '18b93812-90a6-5621-b706-2047c5726e12', 'description' => 'Endtroducing.....', 'correct_answer' => false],
                    ['id' => 'ed4b36f3-8bf6-5a77-8b23-c870e6baa0b3', 'description' => 'Mezzanine', 'correct_answer' => false],
                    ['id' => '260e8c86-5317-5911-b58c-0389ba2f0051', 'description' => 'Dummy', 'correct_answer' => false],
                    ['id' => '0bc568a5-fd48-5b90-9708-93420ba7cae9', 'description' => 'Post', 'correct_answer' => true]
                ]],
        ['id' => '7b4581b7-58a2-5787-ba06-2951c66cd299', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum de estreia de DJ Shadow é construído majoritariamente a partir de samples?', 'difficulty' => 3, 'weight' => 542, 'alternatives' => [
                    ['id' => '5f4d2341-87a4-597e-a20f-cc689aaf5559', 'description' => 'Since I Left You', 'correct_answer' => false],
                    ['id' => '55b91ddb-759c-533b-8547-2edb4ce70581', 'description' => 'Dummy', 'correct_answer' => false],
                    ['id' => 'c7566718-fb05-57d7-8c91-b14b460dd02b', 'description' => 'Homogenic', 'correct_answer' => false],
                    ['id' => '743addfd-c246-54f0-b9a3-c84af0c905e6', 'description' => 'Endtroducing.....', 'correct_answer' => true],
                    ['id' => 'b3cf78e5-224a-5dc9-b404-62ccee12ff4a', 'description' => 'Vespertine', 'correct_answer' => false]
                ]],
        ['id' => '2fc80207-76a1-5a2a-8591-55b51d19a032', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum de estreia do The Avalanches é conhecido por sua colagem extensa de samples?', 'difficulty' => 3, 'weight' => 472, 'alternatives' => [
                    ['id' => '5122814c-549a-5860-bbb1-3eb89ffc78dd', 'description' => 'Mezzanine', 'correct_answer' => false],
                    ['id' => '5072c994-bf0b-5482-8559-12c1f10458fa', 'description' => 'Since I Left You', 'correct_answer' => true],
                    ['id' => 'a672a00d-b705-5447-b0b5-d97e41b7bcc1', 'description' => 'Maxinquaye', 'correct_answer' => false],
                    ['id' => '19fa4e35-8458-5299-bebe-45fa7064ef2b', 'description' => 'The Dreaming', 'correct_answer' => false],
                    ['id' => '8f36655a-889b-550b-ae3d-385f471565de', 'description' => 'Post', 'correct_answer' => false]
                ]],
        ['id' => '0c447f1e-157e-5fd7-ae57-1285493d4b01', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum de Kate Bush inclui \'Running Up That Hill\' e a suíte \'The Ninth Wave\'?', 'difficulty' => 3, 'weight' => 493, 'alternatives' => [
                    ['id' => 'f52279fc-95c8-5ffa-8107-69508e5aff0a', 'description' => 'Hounds of Love', 'correct_answer' => true],
                    ['id' => '81393e66-db54-536e-81b4-8b48f14be5d4', 'description' => 'Mezzanine', 'correct_answer' => false],
                    ['id' => 'b7e09de8-c519-5bcf-a22b-aa1be994c88a', 'description' => 'Since I Left You', 'correct_answer' => false],
                    ['id' => '6a355bd1-9765-5797-9593-e7273f7c3398', 'description' => 'Endtroducing.....', 'correct_answer' => false],
                    ['id' => '2c5ed4f9-2590-5904-99c5-8fa52779b331', 'description' => 'Vespertine', 'correct_answer' => false]
                ]],
        ['id' => '60badc30-a4a6-5f20-af7f-70b987a573b9', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum de Björk inclui \'Jóga\' e \'Bachelorette\'?', 'difficulty' => 3, 'weight' => 590, 'alternatives' => [
                    ['id' => 'd217dbfd-0c81-5274-9a26-0863084d2168', 'description' => 'Vespertine', 'correct_answer' => false],
                    ['id' => '83e24b9f-ec57-53bc-aa80-7ef7c5368ca3', 'description' => 'Maxinquaye', 'correct_answer' => false],
                    ['id' => '993894da-5cb0-5818-a5d3-74b51c8153cb', 'description' => 'Dummy', 'correct_answer' => false],
                    ['id' => 'be66d6ec-bd04-5681-88b9-1ee8b3c89dab', 'description' => 'Homogenic', 'correct_answer' => true],
                    ['id' => 'd2159888-db03-5b55-bad2-b267770f6258', 'description' => 'Since I Left You', 'correct_answer' => false]
                ]],
        ['id' => 'c26eb611-8471-5f6b-a52b-b5a3d481f92e', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum de Kate Bush inclui \'Sat in Your Lap\' e a faixa-título?', 'difficulty' => 3, 'weight' => 575, 'alternatives' => [
                    ['id' => '911a2367-40f3-54ab-a5cd-9c15fe030eab', 'description' => 'Since I Left You', 'correct_answer' => false],
                    ['id' => 'dfea8b11-3c29-5155-bba3-723a8b96eea7', 'description' => 'Homogenic', 'correct_answer' => false],
                    ['id' => '8a5651eb-769c-5940-853d-87e618a41427', 'description' => 'The Dreaming', 'correct_answer' => true],
                    ['id' => '5598e4a7-e113-50c4-b53e-b3f0cecaa255', 'description' => 'Vespertine', 'correct_answer' => false],
                    ['id' => 'bde369fa-63b6-5b1f-8a9a-f8ad85af2de9', 'description' => 'Maxinquaye', 'correct_answer' => false]
                ]],
        ['id' => 'd8ed3d3d-eabf-55e6-9f44-2dd80a9920bb', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual ópera de Philip Glass, criada com Robert Wilson, evita uma narrativa operística convencional?', 'difficulty' => 4, 'weight' => 751, 'alternatives' => [
                    ['id' => 'fe1a1882-9bcc-5658-bd9f-9ffd3f580c17', 'description' => 'The Well-Tuned Piano', 'correct_answer' => false],
                    ['id' => 'cf92fe22-864c-542a-845e-23e5c0e1abe5', 'description' => 'The Sinking of the Titanic', 'correct_answer' => false],
                    ['id' => '40082cb6-04ce-51a8-937b-07bd992811ae', 'description' => 'Einstein on the Beach', 'correct_answer' => true],
                    ['id' => '62840263-4be0-57ae-8161-bf037807fc28', 'description' => 'Music for 18 Musicians', 'correct_answer' => false],
                    ['id' => 'a3112081-fc84-5e22-adbd-991195f3ffa5', 'description' => 'Glassworks', 'correct_answer' => false]
                ]],
        ['id' => 'becbb5d8-7837-5fc2-9f6e-db93624e8010', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual obra extensa de La Monte Young é uma composição para piano em afinação justa e duração variável?', 'difficulty' => 4, 'weight' => 729, 'alternatives' => [
                    ['id' => 'f77675ad-145a-5bcb-84e3-f66e68e371ed', 'description' => 'Fratres', 'correct_answer' => false],
                    ['id' => '4e660c1c-4b63-5743-9ea4-5e74f7340c4a', 'description' => 'Glassworks', 'correct_answer' => false],
                    ['id' => 'b9fd46eb-65a3-5e35-b079-e5968787c13b', 'description' => 'The Well-Tuned Piano', 'correct_answer' => true],
                    ['id' => '01abb89c-551e-50d0-bbba-b0ff8d273549', 'description' => 'Tabula Rasa', 'correct_answer' => false],
                    ['id' => '09625dfe-dea3-55b0-a7d0-7e2aede53359', 'description' => 'The Sinking of the Titanic', 'correct_answer' => false]
                ]],
        ['id' => '4089248d-0017-5f5b-90cc-236ba1211c00', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual obra de Arvo Pärt, de 1977, é frequentemente associada à técnica tintinnabuli?', 'difficulty' => 4, 'weight' => 640, 'alternatives' => [
                    ['id' => '769b1e9f-5451-5630-ace4-f805b503a0e8', 'description' => 'In C', 'correct_answer' => false],
                    ['id' => '4ea72e20-c628-58d1-899c-8311e13e0dba', 'description' => 'Glassworks', 'correct_answer' => false],
                    ['id' => 'f1e0cca2-1456-51a2-8315-0cfd8850cb03', 'description' => 'Drumming', 'correct_answer' => false],
                    ['id' => '22265c39-1e46-5b5a-b067-ce2bb3c00626', 'description' => 'Tabula Rasa', 'correct_answer' => true],
                    ['id' => '67fcfed4-202d-50d7-8e0a-e3aeb77873aa', 'description' => 'Einstein on the Beach', 'correct_answer' => false]
                ]],
        ['id' => 'ef33dd2e-d04e-53d2-8f9d-e1b44cfae895', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual composição de Gavin Bryars trabalha gravações e relatos ligados à música tocada durante o naufrágio do Titanic?', 'difficulty' => 4, 'weight' => 764, 'alternatives' => [
                    ['id' => '6090e6a5-e8a1-5f7e-bc60-d9629eb7c131', 'description' => 'The Sinking of the Titanic', 'correct_answer' => true],
                    ['id' => 'a4478553-dd02-5262-9d1a-ec297da7ccf2', 'description' => 'Tabula Rasa', 'correct_answer' => false],
                    ['id' => '2992d330-b3b3-5382-9509-f23bd2872a89', 'description' => 'Einstein on the Beach', 'correct_answer' => false],
                    ['id' => '105fe56a-cf98-5018-b24c-0b247e7bdacf', 'description' => 'In C', 'correct_answer' => false],
                    ['id' => 'ea06a48b-5012-579d-ab2a-6819fe060264', 'description' => 'Drumming', 'correct_answer' => false]
                ]],
        ['id' => '4b8fb18a-6cb4-56a4-9038-741c4ef15ad5', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum de Terry Riley, de 1969, é uma obra seminal do minimalismo e influenciou músicos de rock e eletrônica?', 'difficulty' => 4, 'weight' => 693, 'alternatives' => [
                    ['id' => '84f5d437-d77a-5e87-bb69-927c5595f8c6', 'description' => 'A Rainbow in Curved Air', 'correct_answer' => true],
                    ['id' => '09fc6ba5-455d-5530-91a0-894e78718aa2', 'description' => 'Einstein on the Beach', 'correct_answer' => false],
                    ['id' => '017670eb-c716-5f18-88be-c15c26cbd2da', 'description' => 'In C', 'correct_answer' => false],
                    ['id' => 'e9ed9f7b-9a1a-54c5-8e45-5626d4c7cf1f', 'description' => 'Drumming', 'correct_answer' => false],
                    ['id' => 'e6aff1b4-d598-5adf-a498-47b46d085119', 'description' => 'Glassworks', 'correct_answer' => false]
                ]],
        ['id' => '677ae868-bc95-5782-b4e1-f328b16c46cd', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual peça de Terry Riley, de 1964, permite que os músicos repitam livremente 53 frases curtas?', 'difficulty' => 4, 'weight' => 704, 'alternatives' => [
                    ['id' => '8e6a3920-b700-560a-a9c4-b98bf9eba307', 'description' => 'Fratres', 'correct_answer' => false],
                    ['id' => '3167b753-ba38-57c6-939f-c51142f90fcb', 'description' => 'The Well-Tuned Piano', 'correct_answer' => false],
                    ['id' => '0e93ac64-7823-565f-a661-9512da7dcbd3', 'description' => 'Glassworks', 'correct_answer' => false],
                    ['id' => '63c3d8ca-fb61-5a7e-bbf9-f42827a1d608', 'description' => 'In C', 'correct_answer' => true],
                    ['id' => '9b2d9679-a6c2-5108-8c18-7435a24d2351', 'description' => 'A Rainbow in Curved Air', 'correct_answer' => false]
                ]],
        ['id' => '84549ca1-5ae4-583c-90a5-2ceae738e070', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual composição de Arvo Pärt existe em versões para diferentes formações instrumentais e utiliza sua técnica tintinnabuli?', 'difficulty' => 4, 'weight' => 608, 'alternatives' => [
                    ['id' => 'b3b229d4-dd14-5fe0-9fcb-2d0c8c646e87', 'description' => 'Fratres', 'correct_answer' => true],
                    ['id' => '5a97cfc8-f8c2-58c6-aa80-98b64d692da0', 'description' => 'Einstein on the Beach', 'correct_answer' => false],
                    ['id' => '7b90d9c6-d91b-5bf4-809a-58bc0a59cbb5', 'description' => 'Tabula Rasa', 'correct_answer' => false],
                    ['id' => '9cd9beb6-6492-5632-a0db-d229de6d11b7', 'description' => 'The Sinking of the Titanic', 'correct_answer' => false],
                    ['id' => 'eeff103d-152a-5e2d-aea7-2611e1f27295', 'description' => 'A Rainbow in Curved Air', 'correct_answer' => false]
                ]],
        ['id' => '17a383d2-4315-567d-a70b-3a0f5fe4f0c6', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum de Philip Glass, de 1982, foi concebido como uma introdução acessível à sua música?', 'difficulty' => 4, 'weight' => 726, 'alternatives' => [
                    ['id' => '0027336f-7880-529c-bc7b-28bdd6d35c2e', 'description' => 'Glassworks', 'correct_answer' => true],
                    ['id' => '8d7ad4d7-6752-524f-a2fc-6dbcb982a341', 'description' => 'The Well-Tuned Piano', 'correct_answer' => false],
                    ['id' => '42c6408c-456f-5097-b740-adb73ea0c292', 'description' => 'The Sinking of the Titanic', 'correct_answer' => false],
                    ['id' => 'cad985c3-0500-5aa9-a5bb-ce1d5efcf9ec', 'description' => 'Tabula Rasa', 'correct_answer' => false],
                    ['id' => '5eeb7e79-90be-5b2b-a5e6-4b010c2752a4', 'description' => 'Music for 18 Musicians', 'correct_answer' => false]
                ]],
        ['id' => 'db0deaa6-4a14-5548-a84a-002656b8fcc1', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum duplo de Aphex Twin, de 2001, combina peças para piano preparado e eletrônica complexa?', 'difficulty' => 4, 'weight' => 798, 'alternatives' => [
                    ['id' => '0cd81e92-da05-5a75-8302-f64c9b15ff32', 'description' => 'Untrue', 'correct_answer' => false],
                    ['id' => '4898920b-5899-5743-8c10-24de85abf61b', 'description' => 'Drukqs', 'correct_answer' => true],
                    ['id' => 'ba6fb974-b91a-56b1-8ad7-3fd9aa442f3f', 'description' => 'Tri Repetae', 'correct_answer' => false],
                    ['id' => '38bb3b58-683f-5162-b93c-c6fea06e61e9', 'description' => 'Music Has the Right to Children', 'correct_answer' => false],
                    ['id' => '5651c90d-84eb-5232-a1fd-6adb893c889c', 'description' => 'Frequencies', 'correct_answer' => false]
                ]],
        ['id' => '963c3582-22b9-5987-9796-b54e63945f3c', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum de Venetian Snares combina breakcore com samples de música clássica e referências à Hungria?', 'difficulty' => 4, 'weight' => 743, 'alternatives' => [
                    ['id' => '2995f041-7491-5ff6-8928-d5785a3f84c0', 'description' => 'Rossz Csillag Alatt Született', 'correct_answer' => true],
                    ['id' => 'd4904f65-5713-5c7c-ae3a-667cf8ec72b6', 'description' => 'Geogaddi', 'correct_answer' => false],
                    ['id' => '1db69ba8-3878-50b1-9ad3-4abf95a1f809', 'description' => 'Amber', 'correct_answer' => false],
                    ['id' => '3e55a83e-1140-5023-a4d2-9cfaa95cf79c', 'description' => 'Untrue', 'correct_answer' => false],
                    ['id' => '1617e0ac-475c-5a51-8e13-ca46e7ecedeb', 'description' => 'Drukqs', 'correct_answer' => false]
                ]],
        ['id' => 'ec8c878c-76b7-508f-98e4-528c9bb4d44e', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual compilação da Warp Records, lançada em 1992, ajudou a consolidar a identidade do IDM?', 'difficulty' => 4, 'weight' => 636, 'alternatives' => [
                    ['id' => '0d4d1b9c-018b-5517-a59a-05614fa765ed', 'description' => 'Geogaddi', 'correct_answer' => false],
                    ['id' => 'f429476b-70be-5a73-8df7-c96e8c39f7ad', 'description' => 'Frequencies', 'correct_answer' => false],
                    ['id' => 'f4fd0b87-db50-55b4-b37e-c450ce9b06df', 'description' => 'Amber', 'correct_answer' => false],
                    ['id' => '0a3a40a7-ea5f-5709-82f9-499b83f9f15b', 'description' => 'Selected Ambient Works 85–92', 'correct_answer' => false],
                    ['id' => '4c864769-c19d-5a0e-ab12-3e2249c78a61', 'description' => 'Artificial Intelligence', 'correct_answer' => true]
                ]],
        ['id' => 'd955758c-9649-59de-882c-818df1fc29a0', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum do Boards of Canada é conhecido por suas referências enigmáticas, sons analógicos e temas inquietantes?', 'difficulty' => 4, 'weight' => 616, 'alternatives' => [
                    ['id' => '916c5e38-c422-55aa-951f-4efe44a5a4d9', 'description' => 'Selected Ambient Works 85–92', 'correct_answer' => false],
                    ['id' => '2c338adc-1dcf-50b9-857b-e7014de67acd', 'description' => 'Frequencies', 'correct_answer' => false],
                    ['id' => 'ccd44627-645f-5d1b-8fca-80054cf7c7c3', 'description' => 'Geogaddi', 'correct_answer' => true],
                    ['id' => 'e63c9128-6c35-58b0-813d-0a23f88f5039', 'description' => 'Amber', 'correct_answer' => false],
                    ['id' => '48322a72-d709-5deb-80bd-92ac1069588f', 'description' => 'Rossz Csillag Alatt Született', 'correct_answer' => false]
                ]],
        ['id' => '7402f486-a0d7-59d0-b677-3b035755e0eb', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum de estreia de Aphex Twin reúne composições ambientais e eletrônicas produzidas no fim dos anos 1980 e início dos 1990?', 'difficulty' => 4, 'weight' => 633, 'alternatives' => [
                    ['id' => '215c4e9c-84e0-5db3-bd5a-b508a2db8349', 'description' => 'Drukqs', 'correct_answer' => false],
                    ['id' => '032248d9-b869-54db-bbdc-b505501b7725', 'description' => 'Frequencies', 'correct_answer' => false],
                    ['id' => 'dff1d24c-0d74-5e25-b249-54f03d62f7ce', 'description' => 'Artificial Intelligence', 'correct_answer' => false],
                    ['id' => 'fdc755f0-1a68-50b9-af1b-5a8e987eee2c', 'description' => 'Untrue', 'correct_answer' => false],
                    ['id' => 'cab64676-3d84-5650-9457-dd96da80630f', 'description' => 'Selected Ambient Works 85–92', 'correct_answer' => true]
                ]],
        ['id' => '12f75f27-b3c9-5a22-a118-c704ab7cb4f0', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum do Autechre, de 1994, apresenta uma sonoridade mais atmosférica que seus trabalhos posteriores?', 'difficulty' => 4, 'weight' => 764, 'alternatives' => [
                    ['id' => '2af129f1-75c6-5dfa-ba08-2907837d7c72', 'description' => 'Amber', 'correct_answer' => true],
                    ['id' => 'b804b00a-e62f-56bb-afcb-a321f283f522', 'description' => 'Frequencies', 'correct_answer' => false],
                    ['id' => '35f928c3-0d75-5578-9509-b72dc9f1ccee', 'description' => 'Untrue', 'correct_answer' => false],
                    ['id' => '194b624e-4b5c-54c6-b7d5-fa183a8ee24f', 'description' => 'Selected Ambient Works 85–92', 'correct_answer' => false],
                    ['id' => 'e92a2dce-9d92-5249-8cf0-335127b0a510', 'description' => 'Rossz Csillag Alatt Született', 'correct_answer' => false]
                ]],
        ['id' => 'c4b9b250-fd6c-5125-b9cc-0f455c9f94de', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum de estreia do LFO, lançado em 1991, tornou-se referência da cena bleep techno britânica?', 'difficulty' => 4, 'weight' => 602, 'alternatives' => [
                    ['id' => '98304b3a-8e97-5971-969d-834d7b4b779d', 'description' => 'Tri Repetae', 'correct_answer' => false],
                    ['id' => '2d3f79fc-970e-50bf-99df-285d00e49d58', 'description' => 'Amber', 'correct_answer' => false],
                    ['id' => '95349ff2-82c8-5a55-8579-3a5e2814f14e', 'description' => 'Artificial Intelligence', 'correct_answer' => false],
                    ['id' => '128d981b-18cc-5f14-a93e-3fc29540412d', 'description' => 'Frequencies', 'correct_answer' => true],
                    ['id' => '960a82ec-4c84-5eea-9bb8-a6feb840ebfb', 'description' => 'Untrue', 'correct_answer' => false]
                ]],
        ['id' => '69a31464-1d6f-53a6-afc7-cba8744c409d', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum de estreia do Boards of Canada inclui \'Roygbiv\' e \'Aquarius\'?', 'difficulty' => 4, 'weight' => 657, 'alternatives' => [
                    ['id' => 'dcb16445-e859-55de-abee-5ace64868e83', 'description' => 'Untrue', 'correct_answer' => false],
                    ['id' => '88865147-d179-5926-bbb9-a9ebe2f55969', 'description' => 'Geogaddi', 'correct_answer' => false],
                    ['id' => '106551e1-b9cc-55aa-9126-d88e6bea5c3d', 'description' => 'Artificial Intelligence', 'correct_answer' => false],
                    ['id' => 'ad6d3430-eade-5c65-9ec1-8b1f1622ffcf', 'description' => 'Music Has the Right to Children', 'correct_answer' => true],
                    ['id' => 'd6ddb481-8d58-54c9-8a1c-d013c731e644', 'description' => 'Frequencies', 'correct_answer' => false]
                ]],
        ['id' => '75bee5bc-f9c9-5a0a-93fd-9924473018e9', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum de Jorge Ben Jor combina samba, soul e referências à alquimia, incluindo \'Errare Humanum Est\'?', 'difficulty' => 4, 'weight' => 761, 'alternatives' => [
                    ['id' => '5f97168d-1d24-5f4b-9515-12eda974fff8', 'description' => 'A Tábua de Esmeralda', 'correct_answer' => true],
                    ['id' => '010eac3a-1b14-5691-b59d-ee7e27d15e0d', 'description' => 'Jardim Elétrico', 'correct_answer' => false],
                    ['id' => 'dcf3d682-04d4-5509-8f7f-97665445eb02', 'description' => 'Paêbirú', 'correct_answer' => false],
                    ['id' => '8782d7fe-eea2-523b-bd7e-61c0324a9547', 'description' => 'A Sétima Efervescência', 'correct_answer' => false],
                    ['id' => '0c4f53c7-9c09-5a70-942c-0d7e1f8264f5', 'description' => 'No Sub Reino dos Metazoários', 'correct_answer' => false]
                ]],
        ['id' => '3fffc83f-531e-5001-ba40-782056a8832e', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum de estreia de Júpiter Maçã, lançado em 1996, é referência do rock psicodélico brasileiro?', 'difficulty' => 4, 'weight' => 727, 'alternatives' => [
                    ['id' => 'b8751288-697b-500c-8f38-f43ebc5e2299', 'description' => 'Satwa', 'correct_answer' => false],
                    ['id' => '7ffbecb1-0532-500a-8ef8-c8a9be72d331', 'description' => 'Fruto Proibido', 'correct_answer' => false],
                    ['id' => 'e6a65654-c5de-5e9e-9b86-7e6d092c44b1', 'description' => 'Paêbirú', 'correct_answer' => false],
                    ['id' => 'a91f3782-5886-5928-bbe4-2d41c012ac14', 'description' => 'A Sétima Efervescência', 'correct_answer' => true],
                    ['id' => '5a1d3729-b695-57af-b13b-49b927b22242', 'description' => 'Lóki?', 'correct_answer' => false]
                ]],
        ['id' => 'ad51791c-1f31-5675-84fe-b7f714bc85c7', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum solo de Arnaldo Baptista, de 1974, é conhecido por seu caráter confessional e arranjos de rock psicodélico?', 'difficulty' => 4, 'weight' => 754, 'alternatives' => [
                    ['id' => '744dac13-903a-52ba-a12b-771790f31ada', 'description' => 'Fruto Proibido', 'correct_answer' => false],
                    ['id' => '14859bb7-2561-5596-80ce-200a35a61bd3', 'description' => 'Krig-ha, Bandolo!', 'correct_answer' => false],
                    ['id' => '83a616af-ccb0-5d51-b9b7-7462029e843d', 'description' => 'Lóki?', 'correct_answer' => true],
                    ['id' => '39077c2a-9cf8-5133-9491-e56d31c456f2', 'description' => 'Tudo Foi Feito pelo Sol', 'correct_answer' => false],
                    ['id' => 'ef14b81b-8e6f-5782-97a3-de3cb2662327', 'description' => 'Paêbirú', 'correct_answer' => false]
                ]],
        ['id' => 'c29a0905-b23b-5ae7-af8c-b7f52e9e987a', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum de Rita Lee & Tutti Frutti inclui \'Agora Só Falta Você\' e \'Ovelha Negra\'?', 'difficulty' => 4, 'weight' => 642, 'alternatives' => [
                    ['id' => '72232bde-e5ea-58db-997d-349c64e07493', 'description' => 'Krig-ha, Bandolo!', 'correct_answer' => false],
                    ['id' => '30b25249-9cfd-5e27-a9c4-7cf0bf9da983', 'description' => 'Paêbirú', 'correct_answer' => false],
                    ['id' => '349e423c-bcb7-5404-bbb7-00115024f186', 'description' => 'A Sétima Efervescência', 'correct_answer' => false],
                    ['id' => '4b45be8e-1245-5fc4-805e-0a25aa452626', 'description' => 'Tudo Foi Feito pelo Sol', 'correct_answer' => false],
                    ['id' => '4dcfebb0-5181-57a1-89f1-ccc0197041bc', 'description' => 'Fruto Proibido', 'correct_answer' => true]
                ]],
        ['id' => 'a31d2db8-4dec-5412-ae22-7219c0cca17b', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum dos Mutantes, de 1974, marca a fase progressiva da banda?', 'difficulty' => 4, 'weight' => 678, 'alternatives' => [
                    ['id' => '9db6d1e2-fcd8-5343-8f5d-617b9b817018', 'description' => 'A Tábua de Esmeralda', 'correct_answer' => false],
                    ['id' => 'edde1a8d-9963-5be9-8f19-daeb49506004', 'description' => 'A Sétima Efervescência', 'correct_answer' => false],
                    ['id' => '689b7a75-8ef5-574b-92d5-8937dfc43804', 'description' => 'Tudo Foi Feito pelo Sol', 'correct_answer' => true],
                    ['id' => 'f9bb41c9-390c-59f8-a449-4012175eacc4', 'description' => 'No Sub Reino dos Metazoários', 'correct_answer' => false],
                    ['id' => '06dce0bb-0987-5cc2-8ea3-dc471826884f', 'description' => 'Satwa', 'correct_answer' => false]
                ]],
        ['id' => 'd5ab938d-6abc-5ea0-9315-1af0c26af40d', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum dos Mutantes, de 1971, inclui \'Top Top\' e \'Benvinda\'?', 'difficulty' => 4, 'weight' => 602, 'alternatives' => [
                    ['id' => 'a30db9be-9fe7-5b6e-81f0-5290f5734879', 'description' => 'Satwa', 'correct_answer' => false],
                    ['id' => '8de6a893-d0d5-5412-a9eb-94cac165a0d6', 'description' => 'Jardim Elétrico', 'correct_answer' => true],
                    ['id' => '359a7e85-1427-5d8f-b435-653e8caca7df', 'description' => 'Paêbirú', 'correct_answer' => false],
                    ['id' => 'ccb6cf20-5071-5f06-a854-e50378c2a7c0', 'description' => 'Krig-ha, Bandolo!', 'correct_answer' => false],
                    ['id' => '19cf831f-fcc5-5d3a-9a6e-0807f5cb7346', 'description' => 'A Tábua de Esmeralda', 'correct_answer' => false]
                ]],
        ['id' => 'f4c24de9-d90c-54e4-9e10-3bd915ad28a7', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum duplo de Lula Côrtes e Zé Ramalho, de 1975, é associado à psicodelia pernambucana?', 'difficulty' => 4, 'weight' => 790, 'alternatives' => [
                    ['id' => 'a78c5807-8a68-5991-85c8-1c34a7a389d7', 'description' => 'No Sub Reino dos Metazoários', 'correct_answer' => false],
                    ['id' => 'a7189bfb-314d-595e-af20-6e5444336a29', 'description' => 'Fruto Proibido', 'correct_answer' => false],
                    ['id' => 'ac4520d3-db8c-50bc-900a-c3a249bf5c8e', 'description' => 'Paêbirú', 'correct_answer' => true],
                    ['id' => '89d8fce7-472e-51ca-982c-c061996e55e7', 'description' => 'Lóki?', 'correct_answer' => false],
                    ['id' => 'dbc14c49-ea43-595c-8432-21b73e1bf636', 'description' => 'Tudo Foi Feito pelo Sol', 'correct_answer' => false]
                ]],
        ['id' => '9b624109-2443-5bd2-8d98-6a14ad8696af', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum instrumental de Lula Côrtes e Lailson, de 1973, é referência da psicodelia nordestina?', 'difficulty' => 4, 'weight' => 604, 'alternatives' => [
                    ['id' => 'f5d09782-bc2c-5d13-9bd3-0a8a614ddcd2', 'description' => 'Lóki?', 'correct_answer' => false],
                    ['id' => 'c06d9213-1017-547e-bdb7-f82307057d37', 'description' => 'Satwa', 'correct_answer' => true],
                    ['id' => 'fcf0613c-65e3-52aa-8705-495082e19f97', 'description' => 'A Sétima Efervescência', 'correct_answer' => false],
                    ['id' => '46035929-3bfb-5a66-8ab0-22cf36ea6efe', 'description' => 'Fruto Proibido', 'correct_answer' => false],
                    ['id' => '158addc9-c557-5f2d-96d8-b681af1e6840', 'description' => 'A Tábua de Esmeralda', 'correct_answer' => false]
                ]],
        ['id' => '627fccd4-4288-523d-accc-fe6e7d428061', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum de estreia do Cannibal Ox foi produzido por El-P e lançado pela Definitive Jux?', 'difficulty' => 4, 'weight' => 659, 'alternatives' => [
                    ['id' => 'cb012af4-57bd-5627-9c86-927af91450b9', 'description' => 'Black on Both Sides', 'correct_answer' => false],
                    ['id' => 'e4ca09fa-a41f-59eb-9fd7-38076e88bc4e', 'description' => 'Donuts', 'correct_answer' => false],
                    ['id' => '29a3f13a-e95d-5b56-8609-b8bb05668da2', 'description' => 'Below the Heavens', 'correct_answer' => false],
                    ['id' => 'ae825124-8676-59c6-a751-052ccfca985f', 'description' => 'The Cold Vein', 'correct_answer' => true],
                    ['id' => 'ae0a4da7-bfe6-5378-8e3a-e99bb0a6801e', 'description' => 'Labor Days', 'correct_answer' => false]
                ]],
        ['id' => 'e1a819bd-1a5a-59b6-ac60-7dde6060268d', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum instrumental de J Dilla foi lançado em 2006, pouco antes de sua morte?', 'difficulty' => 4, 'weight' => 619, 'alternatives' => [
                    ['id' => '5a634f71-0a74-5ca6-93b5-69cfa169bddf', 'description' => 'Fantastic Damage', 'correct_answer' => false],
                    ['id' => '90b67683-4e95-5315-879e-f73a688d2263', 'description' => 'Funcrusher Plus', 'correct_answer' => false],
                    ['id' => '67100604-6ae0-5ad1-937b-c8ee6950f851', 'description' => 'Black on Both Sides', 'correct_answer' => false],
                    ['id' => '6269a442-cc22-59a6-b539-dd82b226d4d6', 'description' => 'Donuts', 'correct_answer' => true],
                    ['id' => '0e382698-8a4e-56e3-8541-d91a017147d0', 'description' => 'The Cold Vein', 'correct_answer' => false]
                ]],
        ['id' => 'd653f305-2f63-5a19-9675-60afaec34531', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum colaborativo de Blu e Exile, lançado em 2007, é referência do hip-hop underground?', 'difficulty' => 4, 'weight' => 733, 'alternatives' => [
                    ['id' => 'ea5d6a33-2cd2-5a1f-a974-357189bd78c2', 'description' => 'Funcrusher Plus', 'correct_answer' => false],
                    ['id' => '944b652f-103c-5024-a720-bb6c230ea8e4', 'description' => 'The Cold Vein', 'correct_answer' => false],
                    ['id' => 'c1fa084e-0c6c-5fd8-9ef5-8acdee55b68e', 'description' => 'Below the Heavens', 'correct_answer' => true],
                    ['id' => '9f646175-2f74-5153-9533-c6364d3f9aba', 'description' => 'Black on Both Sides', 'correct_answer' => false],
                    ['id' => '611d5b1a-2106-5e02-a04b-bc5f68d58f95', 'description' => 'A Piece of Strange', 'correct_answer' => false]
                ]],
        ['id' => '1d8bcf8d-68a8-55ba-877f-1a434082d1aa', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum de Aesop Rock, de 2001, inclui \'Daylight\' e aborda o trabalho e a vida urbana?', 'difficulty' => 4, 'weight' => 658, 'alternatives' => [
                    ['id' => '0cfea25d-8de7-50e0-ba3e-3d5f678a82c5', 'description' => 'Funcrusher Plus', 'correct_answer' => false],
                    ['id' => '2d345c24-6d86-5809-860c-e8c01773d081', 'description' => 'Labor Days', 'correct_answer' => true],
                    ['id' => '58508393-a637-5d91-83fb-2e1a28e7b53a', 'description' => 'Operation: Doomsday', 'correct_answer' => false],
                    ['id' => '75a59da6-750c-5cb7-97b2-52c238e5bde5', 'description' => 'Black on Both Sides', 'correct_answer' => false],
                    ['id' => 'e19f1543-e1ea-5b4b-b4c4-730d407f0258', 'description' => 'Madvillainy', 'correct_answer' => false]
                ]],
        ['id' => 'd10d17e8-3224-539d-85de-090342da5d6f', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum de estreia de Mos Def inclui \'Ms. Fat Booty\' e \'Mathematics\'?', 'difficulty' => 4, 'weight' => 759, 'alternatives' => [
                    ['id' => '297c555d-661f-5493-8ce9-825bdb74cd35', 'description' => 'A Piece of Strange', 'correct_answer' => false],
                    ['id' => '338100c6-dcfb-5816-b1de-517a64118698', 'description' => 'Labor Days', 'correct_answer' => false],
                    ['id' => '2e8a0fe8-bf00-5ceb-b899-f152eaffbdd6', 'description' => 'The Cold Vein', 'correct_answer' => false],
                    ['id' => '9cc605dd-33dd-5902-8ab2-5f732112f951', 'description' => 'Donuts', 'correct_answer' => false],
                    ['id' => 'c14e2742-2472-5263-9360-b6f309a15510', 'description' => 'Black on Both Sides', 'correct_answer' => true]
                ]],
        ['id' => '50a35d3e-1d09-5440-b359-a8d0237c886c', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum de estreia solo de MF DOOM apresentou o personagem e inclui \'Doomsday\'?', 'difficulty' => 4, 'weight' => 656, 'alternatives' => [
                    ['id' => '254e7c51-12a8-5517-a998-03b975168c5a', 'description' => 'Labor Days', 'correct_answer' => false],
                    ['id' => '4d22d49b-cb63-5b98-ad8f-953e3e231982', 'description' => 'Operation: Doomsday', 'correct_answer' => true],
                    ['id' => 'bd518f8e-1433-5172-a4b8-3305ee29f856', 'description' => 'Below the Heavens', 'correct_answer' => false],
                    ['id' => '9df83ebf-ff36-5063-b5e3-1b8b3f8f07c1', 'description' => 'Fantastic Damage', 'correct_answer' => false],
                    ['id' => 'a59460d5-21f3-52de-a1a1-8500519ba921', 'description' => 'Funcrusher Plus', 'correct_answer' => false]
                ]],
        ['id' => '508d03b2-4b17-58d4-9c81-ad153ffc809a', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum do CunninLynguists, de 2006, é conhecido por sua narrativa conceitual e produção atmosférica?', 'difficulty' => 4, 'weight' => 778, 'alternatives' => [
                    ['id' => '393fdbff-45df-5066-982b-a90997e65d0e', 'description' => 'Black on Both Sides', 'correct_answer' => false],
                    ['id' => '1bab2cc1-0f61-5606-aecf-e871ddfd69b3', 'description' => 'Madvillainy', 'correct_answer' => false],
                    ['id' => 'c1967711-98d6-588a-ad1e-99052bb5d97c', 'description' => 'Fantastic Damage', 'correct_answer' => false],
                    ['id' => '0948c289-3e47-5900-993d-a49cef61763a', 'description' => 'Donuts', 'correct_answer' => false],
                    ['id' => '2982c95f-1fde-5877-9c9b-d9a78ea1b6e9', 'description' => 'A Piece of Strange', 'correct_answer' => true]
                ]],
        ['id' => '7603c11d-f1fa-5261-a9f4-e755e3902f4d', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum de estreia do Company Flow é um marco do hip-hop underground dos anos 1990?', 'difficulty' => 4, 'weight' => 660, 'alternatives' => [
                    ['id' => '9b4b01b6-1fa9-590b-bf0a-80771473d511', 'description' => 'Below the Heavens', 'correct_answer' => false],
                    ['id' => '20066cd2-4e88-57bf-85be-015d4f76d66e', 'description' => 'The Cold Vein', 'correct_answer' => false],
                    ['id' => 'e6fa2f8b-69d2-5ac1-8db3-d0251f757d3c', 'description' => 'Funcrusher Plus', 'correct_answer' => true],
                    ['id' => '218eb338-b59b-5644-aba3-0db3aa75a2be', 'description' => 'Madvillainy', 'correct_answer' => false],
                    ['id' => 'a3ea695a-e681-5b03-842e-fe2a2878d403', 'description' => 'Labor Days', 'correct_answer' => false]
                ]],
        ['id' => 'faf66a60-4252-5c08-b605-7c3ed818f148', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum de Brian Eno, de 1978, ajudou a definir a música ambiente como gênero?', 'difficulty' => 4, 'weight' => 765, 'alternatives' => [
                    ['id' => '6bf86f80-ee2a-501d-8716-4e82db721254', 'description' => 'Music for Airports', 'correct_answer' => true],
                    ['id' => '65ef3578-dbc9-55e5-a6b2-3ad2dea0888d', 'description' => 'Thursday Afternoon', 'correct_answer' => false],
                    ['id' => '49f67977-1c58-5551-85b0-09ec2778aba2', 'description' => 'Structures from Silence', 'correct_answer' => false],
                    ['id' => 'f6765d95-0578-5a26-9b68-1dd2ed630c8d', 'description' => 'And Their Refinement of the Decline', 'correct_answer' => false],
                    ['id' => '860117dd-9847-5c57-aaec-70ce28c86179', 'description' => 'Deep Listening', 'correct_answer' => false]
                ]],
        ['id' => '7ee71bb9-8228-5a19-a4df-ef1a49e5aab7', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum do grupo de Pauline Oliveros, Stuart Dempster e Panaiotis foi gravado em uma cisterna subterrânea?', 'difficulty' => 4, 'weight' => 721, 'alternatives' => [
                    ['id' => 'c44c5a00-3464-5fd6-be8a-dae5f569e861', 'description' => 'The Pearl', 'correct_answer' => false],
                    ['id' => '92e70579-ff5b-58aa-9dac-4421bfa1700b', 'description' => 'Deep Listening', 'correct_answer' => true],
                    ['id' => '761538d7-80cd-5fe1-8393-b0ed319d90af', 'description' => 'Structures from Silence', 'correct_answer' => false],
                    ['id' => 'bd014357-ba3d-5b90-9c69-051d9cb8fea3', 'description' => 'Music for Airports', 'correct_answer' => false],
                    ['id' => 'b4766200-bc5b-56f7-ae23-f9e2e98c6a83', 'description' => 'The Tired Sounds of Stars of the Lid', 'correct_answer' => false]
                ]],
        ['id' => '5e76d4db-80ab-5f16-95a3-8494107c989c', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum colaborativo de Harold Budd e Brian Eno apresenta piano atmosférico e texturas ambientais?', 'difficulty' => 4, 'weight' => 762, 'alternatives' => [
                    ['id' => '742c1d06-63ef-5b08-890e-eed1ba57607a', 'description' => 'The Tired Sounds of Stars of the Lid', 'correct_answer' => false],
                    ['id' => 'b4bab670-7486-5b53-b0dd-f59e4cc3fea0', 'description' => 'Music for Airports', 'correct_answer' => false],
                    ['id' => 'a875f79b-642b-564e-b0d7-a1791f929f52', 'description' => 'The Pearl', 'correct_answer' => true],
                    ['id' => '66db0509-4f26-5f30-bd01-03c8cbcd6dde', 'description' => 'And Their Refinement of the Decline', 'correct_answer' => false],
                    ['id' => 'a4edacb5-6699-5b7e-bed1-69315bf6ac8a', 'description' => 'Ambient 4: On Land', 'correct_answer' => false]
                ]],
        ['id' => '9e2e177f-fbe8-5a24-83a5-17780d7ab21b', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum de Steve Roach, de 1984, é uma obra central da música ambiente eletrônica?', 'difficulty' => 4, 'weight' => 646, 'alternatives' => [
                    ['id' => '21b310d9-a913-58a5-9544-288b2d3efa56', 'description' => 'The Pearl', 'correct_answer' => false],
                    ['id' => 'e5ff79d2-875b-513f-b333-2261c6284c25', 'description' => 'Ambient 4: On Land', 'correct_answer' => false],
                    ['id' => '81da10bb-0e88-5590-8af6-9c10145bb77f', 'description' => 'Structures from Silence', 'correct_answer' => true],
                    ['id' => '80a445ac-b9a2-5820-aa12-d10e69b060df', 'description' => 'Thursday Afternoon', 'correct_answer' => false],
                    ['id' => 'ca412203-2e57-57d0-b770-da980de576d9', 'description' => 'Deep Listening', 'correct_answer' => false]
                ]],
        ['id' => 'f3d327be-d924-53d1-be56-35ad41d41ec2', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum de Harold Budd, produzido por Brian Eno, inclui \'Bismillahi \'Rrahmani \'Rrahim\'?', 'difficulty' => 4, 'weight' => 772, 'alternatives' => [
                    ['id' => '71285692-5d83-5331-91fb-0563a263046b', 'description' => 'Ambient 4: On Land', 'correct_answer' => false],
                    ['id' => '795c561b-c441-5173-abd1-0cc836661344', 'description' => 'Music for Airports', 'correct_answer' => false],
                    ['id' => '970cc0d0-b716-5bd1-b0b9-a6173f1eec8b', 'description' => 'Structures from Silence', 'correct_answer' => false],
                    ['id' => '5cf81410-d127-5cc9-9f1d-43a1cf94a27b', 'description' => 'The Pavilion of Dreams', 'correct_answer' => true],
                    ['id' => 'd502622a-219b-54d9-b6e5-eb721b139b1d', 'description' => 'And Their Refinement of the Decline', 'correct_answer' => false]
                ]],
        ['id' => 'bc8513e5-a1ee-5fbc-81f9-bd211b4ae975', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum de Brian Eno, de 1975, explora processos generativos e música de fundo?', 'difficulty' => 4, 'weight' => 747, 'alternatives' => [
                    ['id' => 'cb5c572e-56fa-592e-bb1a-30d04741d87f', 'description' => 'The Pavilion of Dreams', 'correct_answer' => false],
                    ['id' => '7ec9e769-5fa4-570a-8ed5-84e51b48b168', 'description' => 'And Their Refinement of the Decline', 'correct_answer' => false],
                    ['id' => 'ed9eb343-4342-5090-bb2c-3e0183298fa8', 'description' => 'Thursday Afternoon', 'correct_answer' => false],
                    ['id' => '07a537bf-0d5d-55c2-8a96-26850e024b68', 'description' => 'Music for Airports', 'correct_answer' => false],
                    ['id' => '4a8a9078-2cbb-5720-b46c-0c3b6e173078', 'description' => 'Discreet Music', 'correct_answer' => true]
                ]],
        ['id' => '538ba382-5630-5acd-99e1-c885ccd47c33', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum de Brian Eno encerra sua série Ambient e utiliza gravações de campo e texturas sonoras?', 'difficulty' => 4, 'weight' => 657, 'alternatives' => [
                    ['id' => 'baf2fdda-d669-588f-9165-cc06b05d68bb', 'description' => 'Thursday Afternoon', 'correct_answer' => false],
                    ['id' => 'f65b2d6b-1c63-598a-9805-1fd3b7fdc12c', 'description' => 'Music for Airports', 'correct_answer' => false],
                    ['id' => 'c89e0c59-57ce-5ee1-b9a6-1f293a0f15d7', 'description' => 'Ambient 4: On Land', 'correct_answer' => true],
                    ['id' => '6bdb424a-165d-573a-b018-734f9281b73a', 'description' => 'The Tired Sounds of Stars of the Lid', 'correct_answer' => false],
                    ['id' => 'a0d0c93b-30c3-5c82-b06b-f27799b09a75', 'description' => 'Deep Listening', 'correct_answer' => false]
                ]],
        ['id' => '216f8719-b15c-5421-ac4c-0542235c3698', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual composição de Brian Eno, de aproximadamente uma hora, foi originalmente criada para instalação de vídeo?', 'difficulty' => 4, 'weight' => 624, 'alternatives' => [
                    ['id' => 'c1441d58-e407-5874-85e6-01b4e827d55c', 'description' => 'Thursday Afternoon', 'correct_answer' => true],
                    ['id' => '80af8ed3-a846-5440-b9d0-850dabc56cf9', 'description' => 'Deep Listening', 'correct_answer' => false],
                    ['id' => '7d1fdab2-90b2-545d-ae51-ebb018cab925', 'description' => 'Discreet Music', 'correct_answer' => false],
                    ['id' => 'a18096ea-3f2f-5b73-bb1f-679da6322152', 'description' => 'Structures from Silence', 'correct_answer' => false],
                    ['id' => '4f13f18a-c86e-560a-8286-934197258a98', 'description' => 'Music for Airports', 'correct_answer' => false]
                ]],
        ['id' => '1e7da185-fc00-5a17-a2fd-8ece3ba4de0d', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual composição orquestral de Stockhausen divide a orquestra em três grupos posicionados ao redor do público?', 'difficulty' => 5, 'weight' => 990, 'alternatives' => [
                    ['id' => '872a5226-7d4e-56bd-93e0-46f264d772b0', 'description' => 'Gruppen', 'correct_answer' => true],
                    ['id' => '6594e0bf-d6c1-5106-b48e-858484e93237', 'description' => 'Poème électronique', 'correct_answer' => false],
                    ['id' => '7e0be62e-6c85-5e40-8d48-adab08df317c', 'description' => 'Kontakte', 'correct_answer' => false],
                    ['id' => '97e978fa-f673-59fb-9889-6242bf10ff4d', 'description' => 'Gesang der Jünglinge', 'correct_answer' => false],
                    ['id' => '50542e0b-9aaf-5cf3-a69a-afe74dbf0085', 'description' => 'Déserts', 'correct_answer' => false]
                ]],
        ['id' => '407bcf53-ca60-5b2a-9a30-94883623652c', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual composição orquestral de Iannis Xenakis, de 1955, explora massas sonoras e estruturas derivadas de ideias matemáticas?', 'difficulty' => 5, 'weight' => 852, 'alternatives' => [
                    ['id' => '729946a8-fc2a-52df-82a3-21b541be27ba', 'description' => 'Poème électronique', 'correct_answer' => false],
                    ['id' => '673ac2e8-f473-5d49-bda6-4e5576f25fc9', 'description' => 'Metastaseis', 'correct_answer' => true],
                    ['id' => 'a6a100fe-77ae-52cb-8f50-af3829f6fcf2', 'description' => 'Persepolis', 'correct_answer' => false],
                    ['id' => 'f3abbc54-61de-5b23-ac7e-3aafcc406a06', 'description' => 'Ionisation', 'correct_answer' => false],
                    ['id' => '2fa1d1b0-24d4-523b-bbbf-80490e37dbde', 'description' => 'Gruppen', 'correct_answer' => false]
                ]],
        ['id' => '76594758-b92e-54ea-91d4-cb3ec45b19c9', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual obra eletrônica de Karlheinz Stockhausen, composta entre 1955 e 1956, combina voz infantil gravada e sons eletrônicos?', 'difficulty' => 5, 'weight' => 837, 'alternatives' => [
                    ['id' => '29d1c396-6e00-51b4-af35-d010e96ff537', 'description' => 'Déserts', 'correct_answer' => false],
                    ['id' => '9976b7d3-8c28-5498-b6b6-cdd4419226cb', 'description' => 'Gesang der Jünglinge', 'correct_answer' => true],
                    ['id' => 'efbb527b-9a13-53ca-86c4-24336ca71e4b', 'description' => 'Ionisation', 'correct_answer' => false],
                    ['id' => '285e98d6-0dee-53e3-b49f-27a7c0cfb234', 'description' => 'Gruppen', 'correct_answer' => false],
                    ['id' => 'b1232ee6-13c3-579f-a714-cdd60a947a4a', 'description' => 'Persepolis', 'correct_answer' => false]
                ]],
        ['id' => 'e6d9d093-7d33-57a3-b7e9-0f4857be2fb3', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual obra de Edgard Varèse foi concebida para o Pavilhão Philips na Expo 58, com arquitetura de Le Corbusier e Iannis Xenakis?', 'difficulty' => 5, 'weight' => 918, 'alternatives' => [
                    ['id' => '1b797f7f-9629-5864-967d-3dcac814ce14', 'description' => 'Metastaseis', 'correct_answer' => false],
                    ['id' => '7fc9e925-b0e2-5b1b-8f1e-d9a984faa478', 'description' => 'Poème électronique', 'correct_answer' => true],
                    ['id' => '69844d42-28c4-59d7-b5c3-d895c75dd9fd', 'description' => 'Déserts', 'correct_answer' => false],
                    ['id' => '47b5d747-ab5d-5b7e-a049-9aa6dbf3652e', 'description' => 'Ionisation', 'correct_answer' => false],
                    ['id' => '48623144-44e0-5e02-b66c-22074602a819', 'description' => 'Mortuos Plango, Vivos Voco', 'correct_answer' => false]
                ]],
        ['id' => '6cfe3a14-df64-59fa-a851-16b3d8de63d9', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual obra de Stockhausen transforma a captação amplificada de um tam-tam em parte central da composição?', 'difficulty' => 5, 'weight' => 872, 'alternatives' => [
                    ['id' => '2f7b274a-b946-54ba-9499-2bb6567e48f8', 'description' => 'Kontakte', 'correct_answer' => false],
                    ['id' => '0a23616d-d177-5123-a1af-9d4168c78c0d', 'description' => 'Mikrophonie I', 'correct_answer' => true],
                    ['id' => '05ebfa78-6c50-512a-8e8d-ce9cfb3cd1dc', 'description' => 'Gruppen', 'correct_answer' => false],
                    ['id' => '3dfa9de5-06ea-54cb-a452-e74bcf332bbc', 'description' => 'Poème électronique', 'correct_answer' => false],
                    ['id' => 'df840701-42c3-52c6-88c4-f0978511a2de', 'description' => 'Metastaseis', 'correct_answer' => false]
                ]],
        ['id' => '86bcbc3b-43cf-561a-b8af-559202dfce8d', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual obra eletroacústica de Xenakis, de 1971, foi criada para ser difundida em alto-falantes nas ruínas de Persépolis?', 'difficulty' => 5, 'weight' => 927, 'alternatives' => [
                    ['id' => '37ffaa65-7182-51fe-b506-5bff6cf00ae2', 'description' => 'Ionisation', 'correct_answer' => false],
                    ['id' => '75fbd7de-b9b7-5fb4-8e9e-00551078b422', 'description' => 'Gesang der Jünglinge', 'correct_answer' => false],
                    ['id' => '2539a7a7-baa4-547f-825d-9ce61548b46f', 'description' => 'Mikrophonie I', 'correct_answer' => false],
                    ['id' => '15718aea-cc86-52ea-b380-55443dba2e86', 'description' => 'Persepolis', 'correct_answer' => true],
                    ['id' => 'c7bd601a-8afe-5003-92c4-6e2837d59643', 'description' => 'Gruppen', 'correct_answer' => false]
                ]],
        ['id' => 'bd511167-b1ac-553a-b515-e2618c8d3c4f', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual composição de Varèse, de 1931, é escrita para um conjunto de instrumentos de percussão?', 'difficulty' => 5, 'weight' => 813, 'alternatives' => [
                    ['id' => '2b6ef5f3-511b-5a44-89b3-468bb2b1081a', 'description' => 'Kontakte', 'correct_answer' => false],
                    ['id' => '95454c17-8dfe-51c9-ad49-b4b0d4105f95', 'description' => 'Metastaseis', 'correct_answer' => false],
                    ['id' => '595a42db-af64-57d3-a466-067c05821e6d', 'description' => 'Persepolis', 'correct_answer' => false],
                    ['id' => '2eae3312-3a43-597f-991e-96fc86fd7c69', 'description' => 'Déserts', 'correct_answer' => false],
                    ['id' => '3a9b4303-892a-5922-9753-1fe4e0a7b997', 'description' => 'Ionisation', 'correct_answer' => true]
                ]],
        ['id' => 'f915a388-f881-5807-b8a8-3c54fad24700', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual obra de Varèse intercala seções instrumentais com blocos de som eletrônico gravado?', 'difficulty' => 5, 'weight' => 923, 'alternatives' => [
                    ['id' => '900eaa32-550d-50a5-b19e-f9f5eb6aa011', 'description' => 'Persepolis', 'correct_answer' => false],
                    ['id' => '9ee4dd12-12e4-5a3a-9928-db9acb4b28d0', 'description' => 'Gesang der Jünglinge', 'correct_answer' => false],
                    ['id' => 'c21f6bb9-9ab4-52e8-a275-77db5db23e32', 'description' => 'Metastaseis', 'correct_answer' => false],
                    ['id' => 'b8b37441-5a4b-5b4a-90be-6e6cc3de316f', 'description' => 'Déserts', 'correct_answer' => true],
                    ['id' => '60b9baf8-0f9e-5705-bd46-c607cdecfc7e', 'description' => 'Poème électronique', 'correct_answer' => false]
                ]],
        ['id' => '07e2c1a1-cc4d-5457-bd25-270d5e7e3a7e', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum do Swans, de 1984, é conhecido por sua abordagem minimalista, repetitiva e extremamente pesada?', 'difficulty' => 5, 'weight' => 860, 'alternatives' => [
                    ['id' => 'b30e9df8-bf23-5cd6-83e2-d3e683a5b150', 'description' => 'Trout Mask Replica', 'correct_answer' => false],
                    ['id' => '9e19f7e9-504f-5e1f-b854-7c8b5085cac4', 'description' => 'The Ascension', 'correct_answer' => false],
                    ['id' => 'dfc6990b-1dd2-580e-a935-cd5245e92d53', 'description' => 'Cop', 'correct_answer' => true],
                    ['id' => '1ad8180a-698c-5f08-bb60-1dc82259d02f', 'description' => 'X-1000', 'correct_answer' => false],
                    ['id' => '76192775-b746-5fb3-aaaa-41ef1a563503', 'description' => 'Buy', 'correct_answer' => false]
                ]],
        ['id' => '2f7186e5-b448-553a-be1b-9ff9f67dc5c7', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum de DNA, grupo associado à cena no wave, documenta apresentações e gravações do coletivo de Arto Lindsay?', 'difficulty' => 5, 'weight' => 927, 'alternatives' => [
                    ['id' => '6b56c8e0-f957-5586-b789-e0599ee8d542', 'description' => 'X-1000', 'correct_answer' => true],
                    ['id' => '14b972b5-bb3c-5898-827f-7c2f6f663439', 'description' => 'Lick My Decals Off, Baby', 'correct_answer' => false],
                    ['id' => '6a5ffb0a-9d76-5b68-8663-ee92084f09d8', 'description' => 'Confusion Is Sex', 'correct_answer' => false],
                    ['id' => '653b5aee-129f-592b-a4ea-843fc223b267', 'description' => 'Evol', 'correct_answer' => false],
                    ['id' => '440e7228-ba0f-503e-b3bb-0b4f4aefc41b', 'description' => 'Buy', 'correct_answer' => false]
                ]],
        ['id' => 'f516642c-79b0-5fdc-a04d-5cfc83a1eb47', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum do Captain Beefheart and His Magic Band, produzido por Frank Zappa, é conhecido por estruturas rítmicas e harmônicas altamente dissonantes?', 'difficulty' => 5, 'weight' => 850, 'alternatives' => [
                    ['id' => '3fb6ab9f-522e-55b1-b6cb-7b2223ad280e', 'description' => 'No New York', 'correct_answer' => false],
                    ['id' => 'cbd2dce7-4c46-5989-8aba-51b49bbc483f', 'description' => 'Confusion Is Sex', 'correct_answer' => false],
                    ['id' => '884c333d-0543-5de3-99ea-7b3c4e64b4ee', 'description' => 'Trout Mask Replica', 'correct_answer' => true],
                    ['id' => '11fd890d-4f85-55e8-91a0-899fdfea98ba', 'description' => 'Lick My Decals Off, Baby', 'correct_answer' => false],
                    ['id' => '13159e89-fa13-5156-b9a2-c96183b0a0a7', 'description' => 'X-1000', 'correct_answer' => false]
                ]],
        ['id' => '672df3a6-2a04-5ef7-915a-5364d97ecef9', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum de Captain Beefheart, de 1970, dá continuidade à abordagem experimental de \'Trout Mask Replica\'?', 'difficulty' => 5, 'weight' => 853, 'alternatives' => [
                    ['id' => '3f536112-6c7a-51e6-a340-bfc7483eb5cd', 'description' => 'No New York', 'correct_answer' => false],
                    ['id' => '20b49816-c37f-5ce4-b384-a0155b33921a', 'description' => 'Cop', 'correct_answer' => false],
                    ['id' => 'a24aede8-74b7-5e40-8594-4911a3501c67', 'description' => 'Theoretical Girls', 'correct_answer' => false],
                    ['id' => '7db7ebbb-90b2-5e31-9ad7-6b4d0bd189f4', 'description' => 'Evol', 'correct_answer' => false],
                    ['id' => '6fe0a310-f013-5618-a53d-b671deb0d68b', 'description' => 'Lick My Decals Off, Baby', 'correct_answer' => true]
                ]],
        ['id' => '5f7ae29b-0f7a-586f-8271-317347f930f0', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum do Sonic Youth, de 1986, marca uma fase de experimentação com afinações alternativas e ruído?', 'difficulty' => 5, 'weight' => 985, 'alternatives' => [
                    ['id' => 'ad0776d3-dd96-5478-8e29-bbeeff0affca', 'description' => 'Lick My Decals Off, Baby', 'correct_answer' => false],
                    ['id' => '1189f9c6-ddc5-57f8-971d-3a8aea106844', 'description' => 'Evol', 'correct_answer' => true],
                    ['id' => 'ba1710c3-4ea2-5b08-b2fa-fda51ea4af7a', 'description' => 'Trout Mask Replica', 'correct_answer' => false],
                    ['id' => '6b854a88-8d8d-5f90-ab09-277b7d0bd1ec', 'description' => 'Buy', 'correct_answer' => false],
                    ['id' => '92a4d750-ce65-53c8-bf42-1882779644c1', 'description' => 'Cop', 'correct_answer' => false]
                ]],
        ['id' => '705541eb-1fd2-5e25-908a-22ecb1b045ab', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum de Glenn Branca, de 1981, utiliza conjuntos de guitarras em afinações não convencionais e volumes extremos?', 'difficulty' => 5, 'weight' => 960, 'alternatives' => [
                    ['id' => '554bed47-8e2c-569f-8079-b758c129d54a', 'description' => 'Evol', 'correct_answer' => false],
                    ['id' => '10dd94f0-992c-58ef-832a-ef127720bbdc', 'description' => 'Theoretical Girls', 'correct_answer' => false],
                    ['id' => '34e4874b-419d-51fa-b71e-8a5fb0210d11', 'description' => 'X-1000', 'correct_answer' => false],
                    ['id' => 'a5bb56f3-8de4-5ce3-925f-4961a5b4989c', 'description' => 'The Ascension', 'correct_answer' => true],
                    ['id' => 'd1c2e359-272c-51ec-b11a-1c5663db2067', 'description' => 'Buy', 'correct_answer' => false]
                ]],
        ['id' => '044b80ed-3af3-5095-90cf-f6a620afb5af', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum de James Chance and the Contortions, lançado em 1979, mistura no wave, funk e jazz?', 'difficulty' => 5, 'weight' => 946, 'alternatives' => [
                    ['id' => '437b236f-27fa-5ec5-8e11-256f8b281758', 'description' => 'Trout Mask Replica', 'correct_answer' => false],
                    ['id' => '8f99ff39-9da2-502b-b296-8339b05594b9', 'description' => 'Confusion Is Sex', 'correct_answer' => false],
                    ['id' => '45e55236-8ee7-538d-b33f-80c45320bd55', 'description' => 'Buy', 'correct_answer' => true],
                    ['id' => '93c69ba6-c379-5b23-8382-344acfec986c', 'description' => 'Cop', 'correct_answer' => false],
                    ['id' => '46121d98-31c5-5389-91ab-5146aabd128c', 'description' => 'Theoretical Girls', 'correct_answer' => false]
                ]],
        ['id' => '6f470008-294a-506c-94a1-372f6727de67', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual grupo de Glenn Branca e Jeff Lohn teve gravações reunidas em uma coletânea homônima lançada décadas depois?', 'difficulty' => 5, 'weight' => 886, 'alternatives' => [
                    ['id' => 'd0ad1d28-fa10-52a5-adf8-a83f2a25bd43', 'description' => 'Theoretical Girls', 'correct_answer' => true],
                    ['id' => 'f030fcc7-d8e1-54f2-b09e-92e4a2362d1b', 'description' => 'The Ascension', 'correct_answer' => false],
                    ['id' => 'ffb472ea-066d-526f-b266-a297f54d0556', 'description' => 'Evol', 'correct_answer' => false],
                    ['id' => '8bd3c717-55e8-5ecc-89ad-2ef27cc09440', 'description' => 'X-1000', 'correct_answer' => false],
                    ['id' => 'b0a9b3a0-0e44-5e8f-aa50-5733478907a4', 'description' => 'Cop', 'correct_answer' => false]
                ]],
        ['id' => '782a7e83-79c1-5504-9e07-b1ea1610db51', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum de 1970 documenta o trio de Evan Parker, Derek Bailey e Han Bennink?', 'difficulty' => 5, 'weight' => 856, 'alternatives' => [
                    ['id' => '9810798b-6d92-589d-a5ba-f968156f722f', 'description' => 'The Topography of the Lungs', 'correct_answer' => true],
                    ['id' => 'ef7af168-d149-543c-b107-79b2ac09fa84', 'description' => 'The Black Saint and the Sinner Lady', 'correct_answer' => false],
                    ['id' => '662ee92f-9a9a-5ffb-b486-d3eabfa8c6fe', 'description' => 'Black Unity', 'correct_answer' => false],
                    ['id' => 'be949e05-ec73-55ed-9eaf-3e5e58c575b0', 'description' => 'Karma', 'correct_answer' => false],
                    ['id' => '65bb8962-45ad-5175-94d2-34fd007de92b', 'description' => 'Out to Lunch!', 'correct_answer' => false]
                ]],
        ['id' => '0d7a8c68-49b5-5ec5-a48b-f9f015d7a2e7', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual longa composição de Pharoah Sanders, de 1971, apresenta um conjunto ampliado e um pulso repetitivo?', 'difficulty' => 5, 'weight' => 837, 'alternatives' => [
                    ['id' => 'e5b6f49d-236f-5ab9-93f9-406f693fe373', 'description' => 'Free Jazz', 'correct_answer' => false],
                    ['id' => '2f6d3704-d09e-509a-9794-a78e639f9015', 'description' => 'Ascension', 'correct_answer' => false],
                    ['id' => '6b20c0a8-f42d-50e4-804b-438e596322ae', 'description' => 'Nipples', 'correct_answer' => false],
                    ['id' => 'a1908641-a17e-5de1-afbe-38b881d408e1', 'description' => 'Black Unity', 'correct_answer' => true],
                    ['id' => 'aac3cc42-23bd-5295-9586-a71099c809a4', 'description' => 'Machine Gun', 'correct_answer' => false]
                ]],
        ['id' => '144db1de-8abd-5946-b66a-1ed549544b3c', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum de Eric Dolphy, gravado em 1964, inclui \'Hat and Beard\' e \'Gazzelloni\'?', 'difficulty' => 5, 'weight' => 804, 'alternatives' => [
                    ['id' => '6a15f5fe-ae6d-5d6b-92eb-947007fa96d4', 'description' => 'Black Unity', 'correct_answer' => false],
                    ['id' => '60cdb8a2-81b1-5fc7-8183-e366a16b3caf', 'description' => 'The Topography of the Lungs', 'correct_answer' => false],
                    ['id' => '5e00214a-04c7-5e5b-8561-b84aced0bf66', 'description' => 'Machine Gun', 'correct_answer' => false],
                    ['id' => 'cb5c49ec-6e3a-577a-aba5-f58c909d88d3', 'description' => 'Out to Lunch!', 'correct_answer' => true],
                    ['id' => '9bc6b966-a7dd-5a6c-9e8c-8d57d159de1c', 'description' => 'Nipples', 'correct_answer' => false]
                ]],
        ['id' => 'f9e9cf46-e799-5805-a738-255a618088dc', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual suíte de Charles Mingus foi gravada em 1963 com arranjos de Bob Hammer e concebida como uma narrativa coreográfica?', 'difficulty' => 5, 'weight' => 922, 'alternatives' => [
                    ['id' => '9f7575d1-c8b1-5a4f-bdcd-d458de6e70ec', 'description' => 'The Topography of the Lungs', 'correct_answer' => false],
                    ['id' => '81e8a56a-9f85-5f48-aa8c-d8c4c2ff1a66', 'description' => 'Black Unity', 'correct_answer' => false],
                    ['id' => '5b1a456e-c9c3-5a49-8647-3384820a0017', 'description' => 'Free Jazz', 'correct_answer' => false],
                    ['id' => 'ab5533ce-5992-5b9f-b859-59ef49387398', 'description' => 'Ascension', 'correct_answer' => false],
                    ['id' => 'd9a6ed4e-35f5-5c1d-bde1-a0bfd90344e3', 'description' => 'The Black Saint and the Sinner Lady', 'correct_answer' => true]
                ]],
        ['id' => '87bf65f1-cf56-5eaa-b224-2346ae2a962a', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum do Dave Holland Quartet, de 1973, inclui Anthony Braxton, Sam Rivers e Barry Altschul?', 'difficulty' => 5, 'weight' => 851, 'alternatives' => [
                    ['id' => '97a5960e-9082-5060-8307-74df8d38cd46', 'description' => 'Conference of the Birds', 'correct_answer' => true],
                    ['id' => '9b4162f4-9897-5d77-8b82-af863dbca7fb', 'description' => 'Free Jazz', 'correct_answer' => false],
                    ['id' => '10a7de91-9876-5605-b8ce-3e29c7863224', 'description' => 'The Topography of the Lungs', 'correct_answer' => false],
                    ['id' => '0e51d139-c12e-593b-bb63-bd26f13333df', 'description' => 'The Black Saint and the Sinner Lady', 'correct_answer' => false],
                    ['id' => '2f3b5809-6910-5f5b-b5fa-0fbacfc45bfe', 'description' => 'Nipples', 'correct_answer' => false]
                ]],
        ['id' => '726ef9cb-ee78-5ad2-bf1e-3c03aa389e72', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum de Peter Brötzmann, de 1969, reúne músicos como Derek Bailey, Evan Parker e Han Bennink?', 'difficulty' => 5, 'weight' => 839, 'alternatives' => [
                    ['id' => 'd7d4d1d6-9e6c-5b37-95f1-bfe6d9f4dda0', 'description' => 'Machine Gun', 'correct_answer' => false],
                    ['id' => '5c243d57-3f2d-5a11-ad22-0ba429ab3783', 'description' => 'Nipples', 'correct_answer' => true],
                    ['id' => '82a58fe1-fa32-561a-99b9-3cfd5ac211ee', 'description' => 'Karma', 'correct_answer' => false],
                    ['id' => '01e97965-9ede-5485-87a8-de11035627c0', 'description' => 'Out to Lunch!', 'correct_answer' => false],
                    ['id' => '748282e0-ac44-5eeb-bf08-f8652b27d4bc', 'description' => 'The Black Saint and the Sinner Lady', 'correct_answer' => false]
                ]],
        ['id' => 'f3cb3bb7-6c51-5bca-ae83-d4e72f3a0775', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual gravação de John Coltrane, de 1966, reúne um grande conjunto de músicos em uma longa improvisação coletiva?', 'difficulty' => 5, 'weight' => 953, 'alternatives' => [
                    ['id' => 'edf6bc79-44e2-5fb7-b17d-37850d0de346', 'description' => 'Conference of the Birds', 'correct_answer' => false],
                    ['id' => '41abee1a-d33c-58d8-b152-b48fa188c046', 'description' => 'Out to Lunch!', 'correct_answer' => false],
                    ['id' => 'aad5cb86-0627-575f-8e56-95fc6b1176f7', 'description' => 'Karma', 'correct_answer' => false],
                    ['id' => 'a7414ee5-eb9b-58cb-8155-1f829a9ab285', 'description' => 'Ascension', 'correct_answer' => true],
                    ['id' => '0f436198-57e2-5e91-967c-52d774e8b16b', 'description' => 'The Topography of the Lungs', 'correct_answer' => false]
                ]],
        ['id' => '0ee33e31-9f32-524e-803d-c25a8a0e7c8a', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum de Peter Brötzmann, gravado em 1968, é um marco do free jazz europeu?', 'difficulty' => 5, 'weight' => 954, 'alternatives' => [
                    ['id' => '27af245b-17aa-553e-891f-370d25856d0d', 'description' => 'Ascension', 'correct_answer' => false],
                    ['id' => '69127c34-375c-5ece-b77f-bc409165b26b', 'description' => 'The Topography of the Lungs', 'correct_answer' => false],
                    ['id' => '8f3e6b45-979b-5ecf-af03-bab6346cb0a1', 'description' => 'Karma', 'correct_answer' => false],
                    ['id' => 'a27ded33-0da2-5c26-9d2e-e9cf528e91d9', 'description' => 'Machine Gun', 'correct_answer' => true],
                    ['id' => '3e02ff56-9b74-5233-a1dc-b15b62a25676', 'description' => 'Black Unity', 'correct_answer' => false]
                ]],
        ['id' => '0ab49243-04bd-549e-a5a8-06dccdb9d4d8', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum de 1969 de Captain Beefheart é frequentemente associado ao avant-garde rock e ao experimentalismo de Don Van Vliet?', 'difficulty' => 5, 'weight' => 931, 'alternatives' => [
                    ['id' => '990ca115-b5ba-5ebd-b7e7-43b17604f912', 'description' => 'Musik von Harmonia', 'correct_answer' => false],
                    ['id' => '8c6e2f1c-389b-5272-88c8-ec9b9bb56301', 'description' => 'Trout Mask Replica', 'correct_answer' => true],
                    ['id' => 'bd757623-e3eb-590b-82f0-54a0a64cd2f3', 'description' => 'The Faust Tapes', 'correct_answer' => false],
                    ['id' => '912761bd-3526-52a5-a827-110b10720ab4', 'description' => 'Cluster II', 'correct_answer' => false],
                    ['id' => 'b0c097df-1c0a-53e7-b839-9ad40100dc9d', 'description' => 'Neu! 75', 'correct_answer' => false]
                ]],
        ['id' => 'ee0f970e-5061-5ffe-8e99-b99f94c030b9', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum de estreia do grupo Harmonia reúne membros do Cluster e Michael Rother, do Neu!?', 'difficulty' => 5, 'weight' => 889, 'alternatives' => [
                    ['id' => '1252a1ab-767a-5b7b-9746-3faf956ba79b', 'description' => 'Musik von Harmonia', 'correct_answer' => true],
                    ['id' => 'bb0b3b79-e896-5584-a616-10756bf4c53d', 'description' => 'The Faust Tapes', 'correct_answer' => false],
                    ['id' => '43e82d98-f030-558a-9613-cc351c0f66d9', 'description' => 'Ege Bamyasi', 'correct_answer' => false],
                    ['id' => 'f78ac50c-89d7-5ada-a6e1-df7a49768758', 'description' => 'Yeti', 'correct_answer' => false],
                    ['id' => '745cd2e2-162a-5755-9bac-aa4b769458e4', 'description' => 'Zuckerzeit', 'correct_answer' => false]
                ]],
        ['id' => 'cc8fb26f-1528-529e-9b8b-bce23f1d30bc', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum de estreia do Amon Düül II, de 1969, é referência do krautrock psicodélico?', 'difficulty' => 5, 'weight' => 803, 'alternatives' => [
                    ['id' => '95714772-35f7-5e65-9126-5c25e31eee83', 'description' => 'Neu! 75', 'correct_answer' => false],
                    ['id' => 'ed4489e7-eb68-57cc-9894-9cd80304cbd1', 'description' => 'Ege Bamyasi', 'correct_answer' => false],
                    ['id' => 'f55fc250-7b53-5524-b378-c8993e8c7157', 'description' => 'Trout Mask Replica', 'correct_answer' => false],
                    ['id' => 'aeb35ab1-e506-5c4e-884b-66c64b24d38f', 'description' => 'Phallus Dei', 'correct_answer' => true],
                    ['id' => '5e5f7ee5-9c01-546c-a6ad-8c4b6b846cff', 'description' => 'Tago Mago', 'correct_answer' => false]
                ]],
        ['id' => 'bc9a1307-3203-53ca-9808-7d84f956ecb3', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum do duo Cluster, de 1972, apresenta longas peças eletrônicas abstratas?', 'difficulty' => 5, 'weight' => 957, 'alternatives' => [
                    ['id' => '288f839c-4155-5a07-9f8c-acbd94806da5', 'description' => 'Neu! 75', 'correct_answer' => false],
                    ['id' => 'a0716c8a-b9cb-566f-a155-a7b57b5151e3', 'description' => 'Cluster II', 'correct_answer' => true],
                    ['id' => 'eaae9284-1f4a-54d6-8f15-666fe9ece973', 'description' => 'Zuckerzeit', 'correct_answer' => false],
                    ['id' => '1f14d9a2-7d9b-50b3-acfa-df478ad84803', 'description' => 'Phallus Dei', 'correct_answer' => false],
                    ['id' => 'ad3fea68-8eea-55e2-8b70-20c3420f9d7a', 'description' => 'Yeti', 'correct_answer' => false]
                ]],
        ['id' => 'ce9292f7-5eb1-50ea-901d-5be16b9b4c86', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum duplo do Can, de 1971, inclui as longas faixas \'Halleluhwah\' e \'Aumgn\'?', 'difficulty' => 5, 'weight' => 958, 'alternatives' => [
                    ['id' => '8f623624-b174-52b8-b5bc-8552da530628', 'description' => 'Tago Mago', 'correct_answer' => true],
                    ['id' => '26f02bcd-5b4e-5d21-bd01-0d1fd11e6f21', 'description' => 'Neu! 75', 'correct_answer' => false],
                    ['id' => '9c98d08c-88d1-5a0d-9822-aefb9a5007b2', 'description' => 'Zuckerzeit', 'correct_answer' => false],
                    ['id' => 'c0177247-151b-5762-a1c0-324f04b28b3f', 'description' => 'Yeti', 'correct_answer' => false],
                    ['id' => 'af047ff9-a72a-5a0e-9cb6-962e2925ff5d', 'description' => 'Musik von Harmonia', 'correct_answer' => false]
                ]],
        ['id' => '6ab9cb1f-3da5-5870-acce-edb4d5f9faa4', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum do Cluster, produzido com participação de Michael Rother, inclui estruturas rítmicas mais regulares?', 'difficulty' => 5, 'weight' => 812, 'alternatives' => [
                    ['id' => 'be489b97-c6ac-52ab-bc16-4116b0b3a4f0', 'description' => 'Trout Mask Replica', 'correct_answer' => false],
                    ['id' => '344d7f38-db97-5a0d-8c36-c320a7661356', 'description' => 'Zuckerzeit', 'correct_answer' => true],
                    ['id' => '05227ce7-498c-538a-88a2-92934bb5c930', 'description' => 'Phallus Dei', 'correct_answer' => false],
                    ['id' => '056d8f53-0c22-55e6-a8e5-cdc007c02232', 'description' => 'Musik von Harmonia', 'correct_answer' => false],
                    ['id' => 'db7ac2bb-0ff2-5490-b92f-063f38df31d3', 'description' => 'Neu! 75', 'correct_answer' => false]
                ]],
        ['id' => 'ab08dfaf-f46a-57f3-acb1-1bfe68b1ea30', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum do Can inclui \'Vitamin C\' e \'Spoon\'?', 'difficulty' => 5, 'weight' => 805, 'alternatives' => [
                    ['id' => '03ac6b3a-121a-5c14-85a8-720e33602824', 'description' => 'Ege Bamyasi', 'correct_answer' => true],
                    ['id' => '84708d7b-7c39-5584-b728-69c08409f24d', 'description' => 'Trout Mask Replica', 'correct_answer' => false],
                    ['id' => 'b6c11828-cb59-5823-8073-da34b9e29640', 'description' => 'Cluster II', 'correct_answer' => false],
                    ['id' => 'd23b2917-9c11-58a2-9813-d7edd552b018', 'description' => 'Neu! 75', 'correct_answer' => false],
                    ['id' => '387da2da-0e99-5253-ab6b-d8c851a7ed30', 'description' => 'Zuckerzeit', 'correct_answer' => false]
                ]],
        ['id' => '7a5360c5-0213-5423-9de6-059fb3e67539', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual álbum duplo do Amon Düül II, de 1970, inclui \'Soap Shop Rock\'?', 'difficulty' => 5, 'weight' => 813, 'alternatives' => [
                    ['id' => '8c54da7e-34e9-53c9-b031-d1276923e684', 'description' => 'Cluster II', 'correct_answer' => false],
                    ['id' => 'f020d0f1-8e8d-5973-a086-7b622b53e461', 'description' => 'Zuckerzeit', 'correct_answer' => false],
                    ['id' => '76ca328c-5b48-54f6-8c4f-12a6a5a499d4', 'description' => 'Musik von Harmonia', 'correct_answer' => false],
                    ['id' => '62e1c94d-f5aa-5b61-91c9-836e491937bd', 'description' => 'Trout Mask Replica', 'correct_answer' => false],
                    ['id' => '09429bf7-aeb3-57ca-97ac-5ac873ba0350', 'description' => 'Yeti', 'correct_answer' => true]
                ]],
        ['id' => '9e3cac1d-a7de-5dd3-91b9-32ed3bcb2772', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual composição de John Cage consiste em três movimentos nos quais o intérprete não toca seu instrumento?', 'difficulty' => 5, 'weight' => 991, 'alternatives' => [
                    ['id' => '7efa31fe-1e4b-5195-9253-1a213a31dc2a', 'description' => '4\'33"', 'correct_answer' => true],
                    ['id' => '22679d50-9d45-52f6-ab20-916be6f61feb', 'description' => 'Roaratorio', 'correct_answer' => false],
                    ['id' => '14656b28-1858-5a70-9cf4-18b228aeb2c9', 'description' => 'Vexations', 'correct_answer' => false],
                    ['id' => 'ba7408e1-0def-59c9-bdb0-0f55787580c0', 'description' => 'The Great Learning', 'correct_answer' => false],
                    ['id' => 'd640cf4f-2336-579f-83ac-28b44db5ffd6', 'description' => 'In C', 'correct_answer' => false]
                ]],
        ['id' => '41fa31bf-b88d-5a9b-a7ab-baba927ef624', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual composição gráfica de Earle Brown é uma partitura visual composta por retângulos e linhas horizontais e verticais?', 'difficulty' => 5, 'weight' => 828, 'alternatives' => [
                    ['id' => '7d0afa0f-ff63-560d-8eb6-4fa22c89e6ea', 'description' => '4\'33"', 'correct_answer' => false],
                    ['id' => 'd8dfce20-ddd1-5ad3-9a48-16a76987af00', 'description' => 'Vexations', 'correct_answer' => false],
                    ['id' => '48f9c913-5b2d-50b7-b392-9d72020a8dc9', 'description' => 'In C', 'correct_answer' => false],
                    ['id' => 'a49851d7-1afe-512b-95d3-b467dc069a9f', 'description' => 'Roaratorio', 'correct_answer' => false],
                    ['id' => '3b48074a-d010-500d-a7b8-dd60205ab515', 'description' => 'December 1952', 'correct_answer' => true]
                ]],
        ['id' => 'b6b656dd-d645-571a-b084-605c328f5737', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual partitura gráfica de Cornelius Cardew, criada entre 1963 e 1967, contém 193 páginas de símbolos sem instruções convencionais completas?', 'difficulty' => 5, 'weight' => 849, 'alternatives' => [
                    ['id' => 'efe391d1-1c48-55c3-8b4d-84b4f62e4cac', 'description' => 'Roaratorio', 'correct_answer' => false],
                    ['id' => 'a3029d5a-4a7a-561e-883a-1a9f51d716c2', 'description' => 'Pendulum Music', 'correct_answer' => false],
                    ['id' => 'd78b8d00-00b9-5895-803f-84563f4b736c', 'description' => 'Treatise', 'correct_answer' => true],
                    ['id' => '3d812d6a-2b93-52e4-bb52-75ac730503c5', 'description' => 'December 1952', 'correct_answer' => false],
                    ['id' => 'dc9ea83e-986f-50d0-af02-8b9feb0cb924', 'description' => 'The Great Learning', 'correct_answer' => false]
                ]],
        ['id' => 'ac669b60-7748-5d4e-a9ee-dda363fa6b93', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual obra de John Cage combina leitura de Finnegans Wake, gravações de campo e música tradicional irlandesa?', 'difficulty' => 5, 'weight' => 923, 'alternatives' => [
                    ['id' => '3113be4f-167a-5837-b5e5-923805e3627e', 'description' => '4\'33"', 'correct_answer' => false],
                    ['id' => '36717f55-62a9-51c8-9df3-2e9de0cc0b03', 'description' => 'The Great Learning', 'correct_answer' => false],
                    ['id' => '4a67ec33-2373-5b89-a19e-1a48b8b0fce9', 'description' => 'Roaratorio', 'correct_answer' => true],
                    ['id' => 'a33f4bc4-690a-5201-8800-c37fd7444cad', 'description' => 'Pendulum Music', 'correct_answer' => false],
                    ['id' => 'f53e5ddf-37f1-52a4-9e41-ca2b695cc3f3', 'description' => 'Music of Changes', 'correct_answer' => false]
                ]],
        ['id' => 'a918a61b-fffa-5789-8761-7323bcd52f61', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual peça de Erik Satie contém um tema curto indicado para ser repetido 840 vezes?', 'difficulty' => 5, 'weight' => 978, 'alternatives' => [
                    ['id' => 'ba884564-b2c5-5420-bcb3-06223ebedfc1', 'description' => '4\'33"', 'correct_answer' => false],
                    ['id' => 'dc3c946b-9f93-5ed8-85c6-e91824031e4c', 'description' => 'Music of Changes', 'correct_answer' => false],
                    ['id' => 'f6765e75-4117-50db-8470-bc743ac689c6', 'description' => 'Pendulum Music', 'correct_answer' => false],
                    ['id' => '5faa489e-6e40-563f-90ad-8b02a1efda04', 'description' => 'Vexations', 'correct_answer' => true],
                    ['id' => '9a30ce04-cc13-5f61-8bf1-eae79c8aee23', 'description' => 'December 1952', 'correct_answer' => false]
                ]],
        ['id' => '5db7cd92-989b-5377-af00-87de5c625634', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual composição minimalista de Terry Riley é formada por 53 módulos que os músicos repetem em ritmos próprios?', 'difficulty' => 5, 'weight' => 960, 'alternatives' => [
                    ['id' => 'ef1d64ef-3a1b-5602-9736-f2251b503a72', 'description' => 'Music of Changes', 'correct_answer' => false],
                    ['id' => '2ce54e0c-98f4-5376-967d-8f564f55c495', 'description' => 'Roaratorio', 'correct_answer' => false],
                    ['id' => '6cd8ebad-cfd4-5c54-94a5-f2590eb6887d', 'description' => 'In C', 'correct_answer' => true],
                    ['id' => '753b5669-2e34-5d6c-a41b-4cccf170b112', 'description' => 'Vexations', 'correct_answer' => false],
                    ['id' => '702de113-105a-56c5-ae30-b875d2244a9e', 'description' => 'The Great Learning', 'correct_answer' => false]
                ]],
        ['id' => 'a6ef46d4-b556-519b-ad6b-eefa842c3c7a', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual composição de John Cage utiliza procedimentos de acaso inspirados no I Ching?', 'difficulty' => 5, 'weight' => 842, 'alternatives' => [
                    ['id' => '4a60d573-10f2-5455-aa40-e8cf004f86c2', 'description' => 'Music of Changes', 'correct_answer' => true],
                    ['id' => 'ca968f54-7d6f-5d73-86d6-ae6cd2f438be', 'description' => 'Pendulum Music', 'correct_answer' => false],
                    ['id' => '8b8ecbf8-7125-54f5-a87d-3b12bcdac172', 'description' => 'Roaratorio', 'correct_answer' => false],
                    ['id' => '513d5612-6fd0-538b-afe5-d96b9a95f6f5', 'description' => 'The Great Learning', 'correct_answer' => false],
                    ['id' => '69666525-ada4-5e53-82f9-bd63e83edd95', 'description' => 'Treatise Handbook', 'correct_answer' => false]
                ]],
        ['id' => '9efa38cf-cf3e-5c70-b7cc-8986df462de8', 'locale' => 'pt-BR', 'category' => 'f6d1bc75-214a-545b-861e-001a4c744ba5', 'question' => 'Qual documento de Cornelius Cardew acompanha a interpretação de sua partitura gráfica Treatise e reúne orientações para executantes?', 'difficulty' => 5, 'weight' => 894, 'alternatives' => [
                    ['id' => 'a36063c6-cdf0-53d3-9f07-7f2185e23084', 'description' => 'In C', 'correct_answer' => false],
                    ['id' => '2a473632-60cd-5f29-935e-de5fbae26319', 'description' => 'The Great Learning', 'correct_answer' => false],
                    ['id' => 'b9d688c9-1292-5882-a539-182d64c309f4', 'description' => 'Treatise Handbook', 'correct_answer' => true],
                    ['id' => '72487715-1867-5036-a4b9-2e8670c3fba6', 'description' => 'Pendulum Music', 'correct_answer' => false],
                    ['id' => '01a42887-6c0b-581f-8b13-32aa5ccdb2e6', 'description' => 'Roaratorio', 'correct_answer' => false]
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
