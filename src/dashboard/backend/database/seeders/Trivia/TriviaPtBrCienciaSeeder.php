<?php

namespace Database\Seeders\Trivia;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TriviaPtBrCienciaSeeder extends Seeder
{
    private const CATEGORY = ['id' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'created_by' => 'SYSTEM', 'short_description' => 'ciência', 'description' => 'Ciencia'];

    private const QUESTIONS = [
        ['id' => '1a2fec95-8211-5de5-87ff-9c078263bbbd', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual planeta do Sistema Solar é o mais próximo do Sol?', 'difficulty' => 1, 'weight' => 159, 'alternatives' => [
                    ['id' => 'dfc2b359-ad3b-5cee-8dd5-ab94a069611d', 'description' => 'Mercúrio', 'correct_answer' => true],
                    ['id' => 'ec467f0c-bf9b-5a07-8d8d-05a5e96f0bbc', 'description' => 'Urano', 'correct_answer' => false],
                    ['id' => '576162aa-3be7-5a69-ba4b-c771b389c308', 'description' => 'Júpiter', 'correct_answer' => false],
                    ['id' => 'd6d24184-efec-584e-9998-bc7ee6c9ba4f', 'description' => 'Terra', 'correct_answer' => false],
                    ['id' => '7e32dc9e-6fd7-593d-aa94-4273c5ea080d', 'description' => 'Plutão', 'correct_answer' => false]
                ]],
        ['id' => '112b2e17-556a-532c-b8ea-3a5fbf3767ef', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual planeta é conhecido por apresentar uma temperatura superficial extremamente alta devido ao forte efeito estufa?', 'difficulty' => 1, 'weight' => 172, 'alternatives' => [
                    ['id' => 'f9a3b5b3-e165-5617-9661-259dad7cfa3c', 'description' => 'Urano', 'correct_answer' => false],
                    ['id' => 'cbaece36-5f6c-574e-ad4d-1af99aaae946', 'description' => 'Netuno', 'correct_answer' => false],
                    ['id' => 'f5e8b9e3-d1a3-54b8-ad28-5f54fa2bcafe', 'description' => 'Mercúrio', 'correct_answer' => false],
                    ['id' => '536ee3a6-6b5a-5506-812f-5a4245cf658f', 'description' => 'Júpiter', 'correct_answer' => false],
                    ['id' => 'd3318578-818a-534b-9fbc-c5d72d1fd83e', 'description' => 'Vênus', 'correct_answer' => true]
                ]],
        ['id' => '901a58ca-2a12-54c7-8b93-8a862d39c758', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Em qual planeta está localizado o maior volume conhecido de água líquida na superfície?', 'difficulty' => 1, 'weight' => 145, 'alternatives' => [
                    ['id' => '00e9807b-f0ff-56f1-9b55-519d7ddbd295', 'description' => 'Júpiter', 'correct_answer' => false],
                    ['id' => '0771425f-dadb-5e9d-927e-f92803088bd9', 'description' => 'Netuno', 'correct_answer' => false],
                    ['id' => 'ebc4e7ef-8495-55cd-ae39-8e315521db5f', 'description' => 'Terra', 'correct_answer' => true],
                    ['id' => '44a77cad-32e6-5a12-88a7-42f722adf633', 'description' => 'Mercúrio', 'correct_answer' => false],
                    ['id' => 'be76a111-8c74-5639-b94c-8711856ba2b2', 'description' => 'Marte', 'correct_answer' => false]
                ]],
        ['id' => '80dd8fd6-d4dc-5534-8da7-26669932e501', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual planeta é frequentemente chamado de planeta vermelho?', 'difficulty' => 1, 'weight' => 102, 'alternatives' => [
                    ['id' => '8d7eb343-e0c9-56ad-a41a-d160aac6bfb7', 'description' => 'Mercúrio', 'correct_answer' => false],
                    ['id' => '41ef437c-049f-522b-8b00-390c27dc4d0d', 'description' => 'Plutão', 'correct_answer' => false],
                    ['id' => '6e32f827-2df3-52d8-98a9-4ec6e891fee0', 'description' => 'Marte', 'correct_answer' => true],
                    ['id' => 'f34e0b84-fab1-5cd6-a73d-d15720c74a40', 'description' => 'Urano', 'correct_answer' => false],
                    ['id' => 'cbda71f9-80c3-5758-bfd2-d957038032b3', 'description' => 'Júpiter', 'correct_answer' => false]
                ]],
        ['id' => 'd2704823-0e0b-55b0-a1c7-871d231f9bbe', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual é o maior planeta do Sistema Solar?', 'difficulty' => 1, 'weight' => 195, 'alternatives' => [
                    ['id' => '0f2432de-98d4-5592-999c-08d2ad23dea4', 'description' => 'Júpiter', 'correct_answer' => true],
                    ['id' => '613c0043-7c97-5012-a484-6c9311ab1184', 'description' => 'Plutão', 'correct_answer' => false],
                    ['id' => 'f4cdc4d1-b59a-5b76-a5e8-bed46caf6473', 'description' => 'Mercúrio', 'correct_answer' => false],
                    ['id' => '7661da6c-b74c-5a6f-8a26-edf002160ce5', 'description' => 'Saturno', 'correct_answer' => false],
                    ['id' => '7dd3516a-73b5-53df-8816-6e6414cdd122', 'description' => 'Ceres', 'correct_answer' => false]
                ]],
        ['id' => '94165c99-ddec-50e6-b793-b3f008d363fd', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual órgão bombeia o sangue pelo sistema circulatório?', 'difficulty' => 1, 'weight' => 178, 'alternatives' => [
                    ['id' => '1b2308f5-a56b-5d3b-b7ba-01694dd3fa6b', 'description' => 'Coração', 'correct_answer' => true],
                    ['id' => '35f6e3dd-1e90-501b-b83c-f757c9dcd24c', 'description' => 'Rim', 'correct_answer' => false],
                    ['id' => '1860f330-5ba7-51c8-880f-e6907ba5e066', 'description' => 'Estômago', 'correct_answer' => false],
                    ['id' => 'c3581332-9823-5952-a032-fadf7f2052a0', 'description' => 'Bexiga', 'correct_answer' => false],
                    ['id' => '39c8f84d-fbb5-5568-9eba-f7220d833b6e', 'description' => 'Pâncreas', 'correct_answer' => false]
                ]],
        ['id' => '7e928e14-ee8a-558b-949c-3fd2ae8b65d4', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual órgão é o principal responsável pelas trocas gasosas durante a respiração?', 'difficulty' => 1, 'weight' => 200, 'alternatives' => [
                    ['id' => 'ce8a20b7-1cfa-5461-b2b9-e5bfe0e9c840', 'description' => 'Baço', 'correct_answer' => false],
                    ['id' => '9dfd6c63-97b6-559a-a3d8-b704b9715c76', 'description' => 'Intestino grosso', 'correct_answer' => false],
                    ['id' => 'dc95f7b2-195a-54fe-9e81-df3e6ddfdb45', 'description' => 'Rim', 'correct_answer' => false],
                    ['id' => '87f926a9-1d86-5371-9e74-cadfdbd1a989', 'description' => 'Pâncreas', 'correct_answer' => false],
                    ['id' => '6a732c5a-5fb6-525b-8263-8bbdc73110a6', 'description' => 'Pulmão', 'correct_answer' => true]
                ]],
        ['id' => '4b0e7a76-97d8-537d-9698-8004084f70f3', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual órgão produz a bile e participa do processamento de nutrientes?', 'difficulty' => 1, 'weight' => 104, 'alternatives' => [
                    ['id' => '4e05da6e-b180-5ffc-82ed-64ed05a0620b', 'description' => 'Baço', 'correct_answer' => false],
                    ['id' => '16bef89f-024d-5e59-9600-0bb625e37a20', 'description' => 'Pâncreas', 'correct_answer' => false],
                    ['id' => '1b40ee6c-f468-5bf7-b0bf-34af02b3d9dd', 'description' => 'Coração', 'correct_answer' => false],
                    ['id' => 'e7dc8245-0de7-52d2-a8ed-a38c7a5af2a0', 'description' => 'Fígado', 'correct_answer' => true],
                    ['id' => '8b6c275f-2342-5249-9950-fd4b6df633bf', 'description' => 'Pulmão', 'correct_answer' => false]
                ]],
        ['id' => '491883e3-2a15-50b1-a756-c6792fd47cf3', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual órgão filtra o sangue e participa da produção da urina?', 'difficulty' => 1, 'weight' => 155, 'alternatives' => [
                    ['id' => 'a1c3f836-7c62-5567-bb94-158792cb708b', 'description' => 'Intestino delgado', 'correct_answer' => false],
                    ['id' => '93787843-743e-57c0-8357-a4684eea8b7c', 'description' => 'Rim', 'correct_answer' => true],
                    ['id' => 'a49a1d9a-4c60-5dec-a9b0-0d45ae9cce8c', 'description' => 'Fígado', 'correct_answer' => false],
                    ['id' => 'bf0ba87a-9fee-5385-b3ed-09827c603802', 'description' => 'Estômago', 'correct_answer' => false],
                    ['id' => '1f0b115d-884c-5ea8-8e11-210048a431b5', 'description' => 'Intestino grosso', 'correct_answer' => false]
                ]],
        ['id' => 'e52309a9-6729-5c57-aa61-776728a12594', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual órgão do sistema digestório mistura alimentos com suco gástrico?', 'difficulty' => 1, 'weight' => 148, 'alternatives' => [
                    ['id' => '5af6b2ca-8e55-5e82-9740-0217e95fc28c', 'description' => 'Estômago', 'correct_answer' => true],
                    ['id' => '844fcb6c-2dfa-530b-a578-8e9233acac7e', 'description' => 'Fígado', 'correct_answer' => false],
                    ['id' => '27a27cdd-6e53-5b4b-897d-34c26887b9cf', 'description' => 'Pulmão', 'correct_answer' => false],
                    ['id' => 'cdf0f910-d8e5-5a7a-9577-25feb2813dae', 'description' => 'Bexiga', 'correct_answer' => false],
                    ['id' => 'a0d4622f-60f4-5387-a1c2-5375b1f9ea4b', 'description' => 'Intestino grosso', 'correct_answer' => false]
                ]],
        ['id' => '35b081e3-89bb-50ab-bbaf-7a63204ea497', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual elemento químico é necessário para a respiração celular aeróbica humana?', 'difficulty' => 1, 'weight' => 171, 'alternatives' => [
                    ['id' => 'd68514a7-4937-517a-ae40-781cfe85a237', 'description' => 'Neônio', 'correct_answer' => false],
                    ['id' => '36b66904-f5e8-5d95-a8d0-ac6b282cf840', 'description' => 'Hélio', 'correct_answer' => false],
                    ['id' => '7e414ff0-85b5-5519-8faf-7348526450a7', 'description' => 'Oxigênio', 'correct_answer' => true],
                    ['id' => '1983c6c6-635f-5c6d-80db-137361319493', 'description' => 'Cloro', 'correct_answer' => false],
                    ['id' => '807d44eb-d486-50e8-96bf-2bb14c08b92d', 'description' => 'Argônio', 'correct_answer' => false]
                ]],
        ['id' => '52553580-a165-5f73-a1eb-4133b3518dd2', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual gás compõe a maior parte da atmosfera terrestre?', 'difficulty' => 1, 'weight' => 188, 'alternatives' => [
                    ['id' => '6402beb8-0bb9-5eb2-99e6-6fbbde4e9dbb', 'description' => 'Hidrogênio', 'correct_answer' => false],
                    ['id' => '53b4490a-af88-569f-8d61-6a567ed7a1cd', 'description' => 'Nitrogênio', 'correct_answer' => true],
                    ['id' => '0ad3e4fd-0114-5526-bdbc-90a469b55eb5', 'description' => 'Argônio', 'correct_answer' => false],
                    ['id' => '568ab365-84ab-5564-a0ab-c957981342cc', 'description' => 'Ferro', 'correct_answer' => false],
                    ['id' => '97f74a27-8b8c-5f42-834a-b56962f9248b', 'description' => 'Cálcio', 'correct_answer' => false]
                ]],
        ['id' => '0b87f0c1-c207-5af2-a7e1-1ff6c53d00bf', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual é o elemento químico mais abundante do Universo?', 'difficulty' => 1, 'weight' => 142, 'alternatives' => [
                    ['id' => '4132d8de-0198-50cd-9698-a05f6db31e68', 'description' => 'Argônio', 'correct_answer' => false],
                    ['id' => 'af0ee86c-cce6-5937-b157-10f1cc6236f5', 'description' => 'Carbono', 'correct_answer' => false],
                    ['id' => 'd22a7af0-1b03-5723-919d-863103192e22', 'description' => 'Neônio', 'correct_answer' => false],
                    ['id' => 'b0b632d9-0325-551f-b680-0ef62c412744', 'description' => 'Cálcio', 'correct_answer' => false],
                    ['id' => 'f8ec5a25-b56d-57ae-97fc-ae4a439a26a7', 'description' => 'Hidrogênio', 'correct_answer' => true]
                ]],
        ['id' => '4bb78cd4-7cbc-5361-94c7-77cff17850ba', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual elemento forma a estrutura básica das moléculas orgânicas?', 'difficulty' => 1, 'weight' => 191, 'alternatives' => [
                    ['id' => 'a6d91f15-c571-5bb9-ac5f-e4f7c5ddc203', 'description' => 'Argônio', 'correct_answer' => false],
                    ['id' => '89eba3c8-c5be-514b-8d82-157bda9ba653', 'description' => 'Hélio', 'correct_answer' => false],
                    ['id' => '9d4a41ca-72fe-574b-b7fa-dacee9ee8807', 'description' => 'Ferro', 'correct_answer' => false],
                    ['id' => '4eda0b8b-0fe6-52f0-a47c-15d776f25d3d', 'description' => 'Carbono', 'correct_answer' => true],
                    ['id' => 'ef52c1a7-bbdc-5b09-809a-fa44202aeb9b', 'description' => 'Nitrogênio', 'correct_answer' => false]
                ]],
        ['id' => 'f103b8fb-6df8-51b9-9461-6bb3fa1676fe', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual gás nobre é usado para inflar balões e tem densidade menor que a do ar?', 'difficulty' => 1, 'weight' => 182, 'alternatives' => [
                    ['id' => 'd32a2c6d-1797-554d-894e-777f46cc800d', 'description' => 'Neônio', 'correct_answer' => false],
                    ['id' => '27132cef-698e-5ef0-8e06-ba0229a62c1e', 'description' => 'Argônio', 'correct_answer' => false],
                    ['id' => '275ed5b3-8f36-5fe5-a7cb-8fba88f215d0', 'description' => 'Cloro', 'correct_answer' => false],
                    ['id' => '11183707-0240-5011-a1db-83729709fe62', 'description' => 'Cálcio', 'correct_answer' => false],
                    ['id' => '40805944-9b9f-53b1-9940-f96f1ffa7521', 'description' => 'Hélio', 'correct_answer' => true]
                ]],
        ['id' => 'c1f675c4-3d7d-5861-8a73-8304d17627fd', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'A qual grupo pertencem os animais que normalmente alimentam os filhotes com leite produzido por glândulas mamárias?', 'difficulty' => 1, 'weight' => 134, 'alternatives' => [
                    ['id' => 'd6e23377-a095-5f78-a05c-5f1077b441ac', 'description' => 'Moluscos', 'correct_answer' => false],
                    ['id' => '360bb1ee-aa72-55c9-9efa-11c7db05450d', 'description' => 'Aves', 'correct_answer' => false],
                    ['id' => 'adb96502-599a-5391-bc71-ca87d90f5905', 'description' => 'Mamíferos', 'correct_answer' => true],
                    ['id' => '0dea4ac2-b950-539b-b9df-5318ce34d07e', 'description' => 'Anfíbios', 'correct_answer' => false],
                    ['id' => 'ba75b8ae-5f6b-55f1-bff9-6f6afbb346a1', 'description' => 'Insetos', 'correct_answer' => false]
                ]],
        ['id' => '111dc057-3b16-548c-9f4c-a6021ce331d1', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'A qual grupo de vertebrados pertencem animais com penas?', 'difficulty' => 1, 'weight' => 148, 'alternatives' => [
                    ['id' => '6b98c3d0-304d-5c37-bcb3-641e98f2c3f7', 'description' => 'Mamíferos', 'correct_answer' => false],
                    ['id' => 'f257590d-7ec6-591c-bd4f-fc688d9611d9', 'description' => 'Crustáceos', 'correct_answer' => false],
                    ['id' => '32fd7708-ccea-585a-b2c5-0bf2a749c4a3', 'description' => 'Aves', 'correct_answer' => true],
                    ['id' => '72e60b74-bd34-541c-a111-80bd00edcb19', 'description' => 'Répteis', 'correct_answer' => false],
                    ['id' => '6c338836-7bf6-5c96-a76c-ce4fe6bb839a', 'description' => 'Moluscos', 'correct_answer' => false]
                ]],
        ['id' => '5144c322-7191-562c-b06a-46394a37958e', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'A qual grupo pertencem animais como cobras, lagartos e tartarugas?', 'difficulty' => 1, 'weight' => 141, 'alternatives' => [
                    ['id' => '6f60fa87-ac6a-5874-acc1-47a6ee3f15cd', 'description' => 'Anfíbios', 'correct_answer' => false],
                    ['id' => '936e2ce9-57b3-504b-a7ed-1f7a266d70e4', 'description' => 'Aracnídeos', 'correct_answer' => false],
                    ['id' => '020eb526-3911-5a80-b5e6-5e9bcc37bda1', 'description' => 'Aves', 'correct_answer' => false],
                    ['id' => '28532130-2411-543b-ba8d-1ca061419c9c', 'description' => 'Crustáceos', 'correct_answer' => false],
                    ['id' => '2d19c979-779c-5d74-a7cb-3260f62e26c4', 'description' => 'Répteis', 'correct_answer' => true]
                ]],
        ['id' => 'f275217e-de30-56cd-8aa1-cc2950b4af84', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'A qual grupo pertencem animais como sapos, rãs e salamandras?', 'difficulty' => 1, 'weight' => 172, 'alternatives' => [
                    ['id' => 'a2bbaa4a-b6d8-5e08-901e-4e18580b6bb1', 'description' => 'Crustáceos', 'correct_answer' => false],
                    ['id' => '6ee99e7b-7d27-5d22-ad46-f7306c3343c5', 'description' => 'Aracnídeos', 'correct_answer' => false],
                    ['id' => 'c58001f9-7c26-521e-bc66-1e89373d59ce', 'description' => 'Peixes', 'correct_answer' => false],
                    ['id' => '29ad9e8e-8a27-538f-8305-7ed75ca6d441', 'description' => 'Anfíbios', 'correct_answer' => true],
                    ['id' => 'bb0a6ec8-2cc9-5bac-9f5b-7029d5bc8d9d', 'description' => 'Mamíferos', 'correct_answer' => false]
                ]],
        ['id' => '4907978a-16c7-543d-9411-c464e5aeae69', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'A qual grupo de vertebrados aquáticos pertencem animais que geralmente respiram por brânquias?', 'difficulty' => 1, 'weight' => 179, 'alternatives' => [
                    ['id' => '4d54b0ad-6a10-5f57-b698-e6880dee1af1', 'description' => 'Peixes', 'correct_answer' => true],
                    ['id' => '3a4bdf89-cd5b-5be5-92f4-6f8805ba61c0', 'description' => 'Moluscos', 'correct_answer' => false],
                    ['id' => '8729be49-ca69-5576-8b20-7aa1dc493f84', 'description' => 'Equinodermos', 'correct_answer' => false],
                    ['id' => '8b477f0f-32d3-5bde-bfb1-263bde868be4', 'description' => 'Anfíbios', 'correct_answer' => false],
                    ['id' => '61b37cbe-6def-511d-889e-464e34d5f652', 'description' => 'Mamíferos', 'correct_answer' => false]
                ]],
        ['id' => '1379bd07-b2dd-5101-810c-428797805c32', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Como se chama a passagem gradual de um líquido para o estado gasoso pela superfície?', 'difficulty' => 1, 'weight' => 165, 'alternatives' => [
                    ['id' => 'b82a0752-c345-5b93-9599-775c15831fb8', 'description' => 'Condensação', 'correct_answer' => false],
                    ['id' => '901a5c66-4e5f-5034-be46-e267cc36c3f5', 'description' => 'Fusão', 'correct_answer' => false],
                    ['id' => '1c038817-f828-5385-892e-c908ca6ce9b7', 'description' => 'Ebulição', 'correct_answer' => false],
                    ['id' => 'feb353bd-ca7f-5775-acd0-6fa462f444b9', 'description' => 'Evaporação', 'correct_answer' => true],
                    ['id' => '96af67e4-24b5-5a90-825e-af02e1c4dd42', 'description' => 'Solidificação', 'correct_answer' => false]
                ]],
        ['id' => 'c5dba9dd-9f26-564a-820e-9dd894f5ef77', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Como se chama a passagem do estado gasoso para o líquido?', 'difficulty' => 1, 'weight' => 180, 'alternatives' => [
                    ['id' => 'd3c5d36e-fe37-56fc-a0a6-5be8be149a0d', 'description' => 'Condensação', 'correct_answer' => true],
                    ['id' => 'bf2d2715-def8-569f-b248-7a92c4408df4', 'description' => 'Recombinação', 'correct_answer' => false],
                    ['id' => '7dc9d5be-8c96-555d-b6b8-cd911729504b', 'description' => 'Solidificação', 'correct_answer' => false],
                    ['id' => '1d8f8730-5df7-5c10-85b5-be86899288fa', 'description' => 'Ebulição', 'correct_answer' => false],
                    ['id' => '3c1b6f92-5df6-5431-8436-ea509eebc9c0', 'description' => 'Ionização', 'correct_answer' => false]
                ]],
        ['id' => '2487cced-30a2-5dd2-9f08-81029c6cf880', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual é o nome da mudança do estado sólido para o líquido?', 'difficulty' => 1, 'weight' => 114, 'alternatives' => [
                    ['id' => '67cd8915-9cc5-58c9-9aae-63a7202df05d', 'description' => 'Fusão', 'correct_answer' => true],
                    ['id' => '638d13e1-0513-5e94-8a8f-5b2fa011a314', 'description' => 'Recombinação', 'correct_answer' => false],
                    ['id' => '6769128d-2f77-55f1-bba8-6ad7762ef729', 'description' => 'Solidificação', 'correct_answer' => false],
                    ['id' => '403d9e11-7145-568d-8821-4b2934e813a7', 'description' => 'Condensação', 'correct_answer' => false],
                    ['id' => 'a6f06588-58e2-5aec-ae17-5d964072d851', 'description' => 'Liquefação', 'correct_answer' => false]
                ]],
        ['id' => 'a282b20b-e240-5b84-bbd0-ae1222b6a6d2', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual mudança de estado transforma um líquido em sólido?', 'difficulty' => 1, 'weight' => 159, 'alternatives' => [
                    ['id' => 'dacaeea0-9e6f-59af-9876-b36aa7c94042', 'description' => 'Solidificação', 'correct_answer' => true],
                    ['id' => 'b9fd67db-132c-558e-b4c6-ecc1b9abb617', 'description' => 'Evaporação', 'correct_answer' => false],
                    ['id' => '4971dd3c-be89-58c3-b7c3-4f10171d9a54', 'description' => 'Condensação', 'correct_answer' => false],
                    ['id' => '89d3e903-6ccc-58d8-926b-e99a2fc02841', 'description' => 'Ebulição', 'correct_answer' => false],
                    ['id' => 'ac49a3e1-ad51-5f28-b090-ac7b4a096d2f', 'description' => 'Liquefação', 'correct_answer' => false]
                ]],
        ['id' => '95e55d6a-e294-5aec-ba57-dac2e5e8528f', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Como se chama a passagem direta do estado sólido para o gasoso?', 'difficulty' => 1, 'weight' => 146, 'alternatives' => [
                    ['id' => 'e7b233f4-4e2a-5180-9e1a-24b4fe8a3542', 'description' => 'Ionização', 'correct_answer' => false],
                    ['id' => '9e94d1b6-5b97-5398-aa03-b85dd089d9c6', 'description' => 'Sublimação', 'correct_answer' => true],
                    ['id' => '6da9f8c7-c96d-58ba-ae6b-081386f6e572', 'description' => 'Deposição', 'correct_answer' => false],
                    ['id' => '21225de3-fe26-520e-a7ee-abe524b8ac97', 'description' => 'Liquefação', 'correct_answer' => false],
                    ['id' => 'a6744dac-970d-5df4-9863-2086a8fe2d86', 'description' => 'Ebulição', 'correct_answer' => false]
                ]],
        ['id' => 'a1d6b89e-b3d7-59c6-ae7f-ffa99cb0780e', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual é o satélite natural da Terra?', 'difficulty' => 1, 'weight' => 122, 'alternatives' => [
                    ['id' => '29c1669f-af84-5645-8f70-52b536124ac9', 'description' => 'Fobos', 'correct_answer' => false],
                    ['id' => '079f0b85-9bcd-5205-9b39-20003b1a9ba7', 'description' => 'Europa', 'correct_answer' => false],
                    ['id' => '38a75c3f-13a6-529c-a895-f67a7401d3d8', 'description' => 'Júpiter', 'correct_answer' => false],
                    ['id' => '4fdc15bc-6a43-55ba-9aa9-75a89e060031', 'description' => 'Lua', 'correct_answer' => true],
                    ['id' => '3894bffb-5c22-50fc-8882-a4cfef5b1437', 'description' => 'Saturno', 'correct_answer' => false]
                ]],
        ['id' => '52275b39-4e59-5806-854f-b8b1d46b61ab', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual estrela está no centro do Sistema Solar?', 'difficulty' => 1, 'weight' => 134, 'alternatives' => [
                    ['id' => '7693f4fb-12b8-50ae-b377-d9818dca9f07', 'description' => 'Deimos', 'correct_answer' => false],
                    ['id' => 'de9ccad4-b867-5380-a618-843c3c4d9bdd', 'description' => 'Saturno', 'correct_answer' => false],
                    ['id' => '22562f5d-7119-506c-bda0-52f44d5dbc13', 'description' => 'Vênus', 'correct_answer' => false],
                    ['id' => '6ab7adcd-8f0b-5810-b739-430552466132', 'description' => 'Sol', 'correct_answer' => true],
                    ['id' => 'a3801053-9a41-5e63-8666-c2dc6a7eca77', 'description' => 'Júpiter', 'correct_answer' => false]
                ]],
        ['id' => 'd5a35335-b93a-505b-aed4-d38ad123510a', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual lua de Júpiter é conhecida por possuir uma provável camada de oceano sob sua crosta de gelo?', 'difficulty' => 1, 'weight' => 181, 'alternatives' => [
                    ['id' => '6c1ba041-e8d2-57ec-98f9-05cb1a2d2847', 'description' => 'Titã', 'correct_answer' => false],
                    ['id' => 'ce2f84aa-91d4-54a1-9aca-f8b166b20d49', 'description' => 'Deimos', 'correct_answer' => false],
                    ['id' => '7bdd9739-2a41-581b-8373-5dc5fe068137', 'description' => 'Europa', 'correct_answer' => true],
                    ['id' => 'be2edd8d-0324-5428-b203-6cd70c39db48', 'description' => 'Lua', 'correct_answer' => false],
                    ['id' => '5d6cb514-562a-59a1-a09b-18d30f1d7e72', 'description' => 'Sol', 'correct_answer' => false]
                ]],
        ['id' => '691a5b07-1893-59e5-ab19-19af03435c69', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual satélite natural de Saturno possui lagos e mares de hidrocarbonetos líquidos na superfície?', 'difficulty' => 1, 'weight' => 131, 'alternatives' => [
                    ['id' => '8b2f1744-0e1e-535c-856b-c1ad41b0536e', 'description' => 'Titã', 'correct_answer' => true],
                    ['id' => '1c2ca76d-2599-5191-ac48-c89be90b5e29', 'description' => 'Saturno', 'correct_answer' => false],
                    ['id' => 'b9970b77-667f-5a0d-83fe-98a96fdef16e', 'description' => 'Fobos', 'correct_answer' => false],
                    ['id' => '8d598468-900d-511b-bcfd-9a27d3a2b756', 'description' => 'Europa', 'correct_answer' => false],
                    ['id' => '808c37bf-f8c6-5a6d-a47a-bda7e4db7ff9', 'description' => 'Vênus', 'correct_answer' => false]
                ]],
        ['id' => '7aa8c234-d889-51f3-9e62-a0d92a77fb7c', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual das duas luas de Marte é a mais próxima do planeta?', 'difficulty' => 1, 'weight' => 176, 'alternatives' => [
                    ['id' => '2b61bde5-4abe-5451-963c-c2b266f6d0ba', 'description' => 'Marte', 'correct_answer' => false],
                    ['id' => '751ca623-4380-50fc-82f0-029a4a46f11f', 'description' => 'Lua', 'correct_answer' => false],
                    ['id' => '34faa5aa-cccf-557c-aa6b-d762f0446446', 'description' => 'Titã', 'correct_answer' => false],
                    ['id' => '0de5485a-979e-5029-a5aa-95bc944f0e9b', 'description' => 'Júpiter', 'correct_answer' => false],
                    ['id' => '69b42838-5fea-53fc-a890-cc9cc355d425', 'description' => 'Fobos', 'correct_answer' => true]
                ]],
        ['id' => '2b87d517-f79e-5f69-8f75-a83f35c1fa5e', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual cientista formulou as leis clássicas do movimento e a lei da gravitação universal?', 'difficulty' => 1, 'weight' => 145, 'alternatives' => [
                    ['id' => '6d7f0483-93d5-5912-99d2-9903dccdb3c8', 'description' => 'Tesla', 'correct_answer' => false],
                    ['id' => '5131af89-5571-5437-ac16-a63ec446afd0', 'description' => 'Newton', 'correct_answer' => true],
                    ['id' => 'eb91ccb4-3852-5db2-95c5-c8b73772f702', 'description' => 'Curie', 'correct_answer' => false],
                    ['id' => '0ed145f8-b19a-5e90-84e6-bbd6804dc90e', 'description' => 'Galileu', 'correct_answer' => false],
                    ['id' => 'd5a3005b-4b2b-584b-bda5-7867e0d06a0d', 'description' => 'Fleming', 'correct_answer' => false]
                ]],
        ['id' => 'd4a8c22c-a6a6-5ad5-9127-2564676dae49', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual físico desenvolveu a teoria da relatividade?', 'difficulty' => 1, 'weight' => 174, 'alternatives' => [
                    ['id' => '9c19541a-d179-59dd-b7be-0a11c81552e9', 'description' => 'Pasteur', 'correct_answer' => false],
                    ['id' => '5b4935db-f997-55a6-a874-50d1757a96cd', 'description' => 'Tesla', 'correct_answer' => false],
                    ['id' => 'c8e15228-fa75-5172-ae45-4aec2f09c950', 'description' => 'Bohr', 'correct_answer' => false],
                    ['id' => '8c7a7207-e831-570b-84a0-e69ffb30e10a', 'description' => 'Einstein', 'correct_answer' => true],
                    ['id' => 'b1c3534f-cf1d-5b5e-8db5-f0e2a2d641cb', 'description' => 'Faraday', 'correct_answer' => false]
                ]],
        ['id' => '92aa80d9-daa0-58db-9fbd-f8f160e6ee46', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual cientista italiano aperfeiçoou o uso do telescópio em observações astronômicas no século XVII?', 'difficulty' => 1, 'weight' => 167, 'alternatives' => [
                    ['id' => '9a77b3d6-3950-5deb-849a-e5759798dbf1', 'description' => 'Pasteur', 'correct_answer' => false],
                    ['id' => '2f9bc09c-3dd7-5ebd-8b63-7617013ab5cd', 'description' => 'Faraday', 'correct_answer' => false],
                    ['id' => '9d5b2705-b319-58a5-ba63-2ce77a377145', 'description' => 'Newton', 'correct_answer' => false],
                    ['id' => 'e8688236-86e2-54ff-bd3e-b9eed8fbd099', 'description' => 'Galileu', 'correct_answer' => true],
                    ['id' => '525f878c-8a5c-5739-bb71-70754677cea6', 'description' => 'Bohr', 'correct_answer' => false]
                ]],
        ['id' => 'a9ba4ed7-367c-5fe3-b009-4fcbe93d4108', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual naturalista propôs a evolução das espécies por seleção natural?', 'difficulty' => 1, 'weight' => 185, 'alternatives' => [
                    ['id' => '79a29a83-21bd-5242-8ae5-378acf169ecc', 'description' => 'Darwin', 'correct_answer' => true],
                    ['id' => 'd291b8a1-725c-5995-b22b-0f7951e31bb8', 'description' => 'Galileu', 'correct_answer' => false],
                    ['id' => '164cfc4c-7840-5f32-a321-7f401402654c', 'description' => 'Bohr', 'correct_answer' => false],
                    ['id' => '98c73f6f-1888-5c06-82f7-4dfa3b503e73', 'description' => 'Fleming', 'correct_answer' => false],
                    ['id' => '2bac9bae-49c0-5d15-b3d8-4df87ab7b371', 'description' => 'Pasteur', 'correct_answer' => false]
                ]],
        ['id' => '2ee1a9b1-58d6-5a16-98e3-29ec2afc0491', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual cientista realizou pesquisas pioneiras sobre a radioatividade e recebeu dois prêmios Nobel em áreas científicas distintas?', 'difficulty' => 1, 'weight' => 184, 'alternatives' => [
                    ['id' => '92d626a2-12a4-5b89-b537-082cca5b45c0', 'description' => 'Faraday', 'correct_answer' => false],
                    ['id' => '04255326-6d0c-5f85-b494-ffa7eee183c5', 'description' => 'Curie', 'correct_answer' => true],
                    ['id' => 'dfddbc86-df25-57fa-8897-f6a78a22e207', 'description' => 'Bohr', 'correct_answer' => false],
                    ['id' => '47884ff2-5e27-568d-9017-62c92a9cfdc9', 'description' => 'Fleming', 'correct_answer' => false],
                    ['id' => '69e18dce-60e7-572b-a433-d0e9b4f4d5dd', 'description' => 'Pasteur', 'correct_answer' => false]
                ]],
        ['id' => '8a4b36e2-b928-5161-a411-78d5ec88f39e', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual é a unidade estrutural e funcional básica dos seres vivos?', 'difficulty' => 1, 'weight' => 151, 'alternatives' => [
                    ['id' => '3bd75e52-a5fc-5982-bb83-bb24d65cb721', 'description' => 'Órgão', 'correct_answer' => false],
                    ['id' => '3b99fc2b-92b0-5c8e-a1a9-39c1cae684de', 'description' => 'População', 'correct_answer' => false],
                    ['id' => '32e7d181-07c8-5f66-a653-b11c979746f1', 'description' => 'Célula', 'correct_answer' => true],
                    ['id' => 'ef32cec0-f705-587e-ba98-1803206b3dd3', 'description' => 'Organismo', 'correct_answer' => false],
                    ['id' => '71b6d028-1ada-57bf-bcab-473629a69625', 'description' => 'Molécula', 'correct_answer' => false]
                ]],
        ['id' => 'be76f45a-7f43-590f-9136-73b8855ece2b', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Como se chama um conjunto de células semelhantes que atuam em funções relacionadas?', 'difficulty' => 1, 'weight' => 135, 'alternatives' => [
                    ['id' => 'f477006b-74a8-5d17-9f06-8aabd3dcda5d', 'description' => 'Organela', 'correct_answer' => false],
                    ['id' => '78056dc8-ddb7-5f6d-bb11-671035987eed', 'description' => 'População', 'correct_answer' => false],
                    ['id' => '5ca93bd5-6ccf-5bb8-b9ef-09cba6b7786b', 'description' => 'Tecido', 'correct_answer' => true],
                    ['id' => '32780f7a-8632-57a0-b71b-e33786f7bacb', 'description' => 'Célula', 'correct_answer' => false],
                    ['id' => '3e4dea39-36cc-5646-83f3-921d65f2c141', 'description' => 'Ecossistema', 'correct_answer' => false]
                ]],
        ['id' => 'b0f1b498-a648-5cbb-b88c-2a29facf89b1', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual nível de organização biológica é formado por diferentes tecidos que trabalham em conjunto?', 'difficulty' => 1, 'weight' => 168, 'alternatives' => [
                    ['id' => '4c45411c-6b51-55e7-bf2d-b6b0721b3f04', 'description' => 'Átomo', 'correct_answer' => false],
                    ['id' => 'd8241c6b-d4b3-568a-b1bb-faae916d22bb', 'description' => 'Ecossistema', 'correct_answer' => false],
                    ['id' => '776f3ff3-2abf-5a12-83f2-5f38a791279b', 'description' => 'Organismo', 'correct_answer' => false],
                    ['id' => '78f8cba1-f8dc-5c9d-ba59-e796288b8628', 'description' => 'População', 'correct_answer' => false],
                    ['id' => '01f760dc-3efb-546f-a694-16d0a5f4c75e', 'description' => 'Órgão', 'correct_answer' => true]
                ]],
        ['id' => '695e4b6f-05cd-546a-b046-4b5477c21848', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Como se chama um conjunto de órgãos que atuam de forma integrada?', 'difficulty' => 1, 'weight' => 121, 'alternatives' => [
                    ['id' => 'd6576f65-7a74-5a1c-87db-029a2134d942', 'description' => 'Sistema', 'correct_answer' => true],
                    ['id' => '2ca04e75-3b99-506d-90ba-d63630120e55', 'description' => 'Organismo', 'correct_answer' => false],
                    ['id' => '2e797cca-46dd-565b-a4e4-0b04435eef55', 'description' => 'Tecido', 'correct_answer' => false],
                    ['id' => '5f6790ca-d196-5a0a-ba6c-54ee153b35ef', 'description' => 'Ecossistema', 'correct_answer' => false],
                    ['id' => '5a88a5fc-7b03-55ed-a1b5-cb251ace4c1f', 'description' => 'Molécula', 'correct_answer' => false]
                ]],
        ['id' => 'f45cb05a-e516-5962-987b-3ad68c330b1b', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual termo designa um ser vivo individual?', 'difficulty' => 1, 'weight' => 122, 'alternatives' => [
                    ['id' => 'bf7c3f42-2abe-5f74-8485-b196823879fb', 'description' => 'Organismo', 'correct_answer' => true],
                    ['id' => '9416bbee-4f6f-517f-8c2d-a8265ba9c367', 'description' => 'Ecossistema', 'correct_answer' => false],
                    ['id' => '33806d6b-f510-5610-9424-8452a9df5188', 'description' => 'Tecido', 'correct_answer' => false],
                    ['id' => 'cd01520c-9589-5ea1-a10e-e5a3a28d164f', 'description' => 'Célula', 'correct_answer' => false],
                    ['id' => '380876e7-2acc-54b5-a6bb-46cb87dd7bda', 'description' => 'Átomo', 'correct_answer' => false]
                ]],
        ['id' => 'a6010a04-5d21-5132-8723-94f2e9289618', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual organela é conhecida por realizar grande parte da produção de ATP na respiração celular?', 'difficulty' => 2, 'weight' => 357, 'alternatives' => [
                    ['id' => 'a149e7c6-88c3-5c6d-ac8d-5ef34be42a7c', 'description' => 'Vacúolo', 'correct_answer' => false],
                    ['id' => '40eded23-787b-5ecf-8d5f-ef153dc3b4fc', 'description' => 'Mitocôndria', 'correct_answer' => true],
                    ['id' => '530454bb-ff56-5f45-93e9-c5dbe4b2123f', 'description' => 'Cloroplasto', 'correct_answer' => false],
                    ['id' => 'eb639a37-84d1-5b0a-99af-700296439df5', 'description' => 'Núcleo', 'correct_answer' => false],
                    ['id' => '242bab73-26b3-51cf-bc18-8fe11045a13c', 'description' => 'Complexo de Golgi', 'correct_answer' => false]
                ]],
        ['id' => 'a96e41cb-2079-5726-b98c-cdfa53e2412b', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual estrutura celular realiza a síntese de proteínas?', 'difficulty' => 2, 'weight' => 301, 'alternatives' => [
                    ['id' => 'e80286f3-9666-54b0-b575-a5281ff6f9b5', 'description' => 'Peroxissomo', 'correct_answer' => false],
                    ['id' => '38952560-ff15-5d71-9a12-9e7a5e3ad18f', 'description' => 'Ribossomo', 'correct_answer' => true],
                    ['id' => 'eb859a76-8c4c-5f1f-ba42-3000321e3006', 'description' => 'Lisossomo', 'correct_answer' => false],
                    ['id' => '2526e1ba-19ca-577a-8bcf-d6a40e485479', 'description' => 'Cloroplasto', 'correct_answer' => false],
                    ['id' => '6759a4d1-832c-50b5-8adf-f620c1088369', 'description' => 'Mitocôndria', 'correct_answer' => false]
                ]],
        ['id' => 'e2f14fed-56d8-5bd8-8b71-14afa18c69fb', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual organela contém enzimas digestivas que degradam materiais dentro da célula?', 'difficulty' => 2, 'weight' => 397, 'alternatives' => [
                    ['id' => 'bff5997e-bbb8-5772-ab23-c410a473cc2a', 'description' => 'Peroxissomo', 'correct_answer' => false],
                    ['id' => '7476bfb6-e59e-59c4-93cf-32b4f79801bc', 'description' => 'Lisossomo', 'correct_answer' => true],
                    ['id' => '73b3497e-1985-553a-933c-c0fe60dd3772', 'description' => 'Mitocôndria', 'correct_answer' => false],
                    ['id' => '8bf97c62-dbb2-5d58-85fb-279b13610b32', 'description' => 'Centríolo', 'correct_answer' => false],
                    ['id' => 'f0393358-35c7-5a7a-a79d-a2db70df7d5a', 'description' => 'Ribossomo', 'correct_answer' => false]
                ]],
        ['id' => 'bbc17cdd-21e8-5151-8c1e-5c0cec334044', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual organela modifica, empacota e distribui proteínas e lipídios?', 'difficulty' => 2, 'weight' => 245, 'alternatives' => [
                    ['id' => '9ea485e6-8028-549d-a05c-f9336025bc06', 'description' => 'Lisossomo', 'correct_answer' => false],
                    ['id' => 'bd989991-550a-5548-8e21-36dac2acc7e2', 'description' => 'Mitocôndria', 'correct_answer' => false],
                    ['id' => '07e2364c-cf59-54fc-b7cd-8213cf96c18f', 'description' => 'Retículo endoplasmático', 'correct_answer' => false],
                    ['id' => 'f32ff0b1-f8fd-5f3d-8c6d-77c2992c395a', 'description' => 'Complexo de Golgi', 'correct_answer' => true],
                    ['id' => 'a3e5a780-5432-5b4b-8c2c-bafb2d88aeda', 'description' => 'Centríolo', 'correct_answer' => false]
                ]],
        ['id' => 'ab0ff10e-49f4-523e-889b-e54e4c5da788', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual estrutura membranosa participa da síntese e do transporte de proteínas e lipídios?', 'difficulty' => 2, 'weight' => 289, 'alternatives' => [
                    ['id' => '611c45eb-2701-5595-b124-ad3e70a51545', 'description' => 'Peroxissomo', 'correct_answer' => false],
                    ['id' => 'd6bc6ae1-31ae-5a59-b950-92862f9e4308', 'description' => 'Retículo endoplasmático', 'correct_answer' => true],
                    ['id' => '278f8dc9-51f2-50d0-965e-53b30c204a42', 'description' => 'Mitocôndria', 'correct_answer' => false],
                    ['id' => '1c854776-2a08-514e-b608-c79ab8333eff', 'description' => 'Vacúolo', 'correct_answer' => false],
                    ['id' => '5aa74028-bbb2-5a62-ae41-5abebe80f5a3', 'description' => 'Cloroplasto', 'correct_answer' => false]
                ]],
        ['id' => 'b3dffa77-b757-5555-99d9-463cd319c9ee', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual ácido está presente no suco gástrico humano e auxilia na digestão?', 'difficulty' => 2, 'weight' => 370, 'alternatives' => [
                    ['id' => '51c0b20e-8571-5595-bb67-bf6b68760a9b', 'description' => 'Ácido acético', 'correct_answer' => false],
                    ['id' => '0ef76494-edb2-509e-9340-56b1e2883cf3', 'description' => 'Ácido clorídrico', 'correct_answer' => true],
                    ['id' => '3b757721-7c78-5d18-bab8-6e23bca94d0d', 'description' => 'Ácido fluorídrico', 'correct_answer' => false],
                    ['id' => '6ccedf45-07c8-5fca-9e2b-f8fab0bff9ea', 'description' => 'Ácido carbônico', 'correct_answer' => false],
                    ['id' => 'cb770073-d898-5c35-9c3f-dce83920d3c8', 'description' => 'Ácido fórmico', 'correct_answer' => false]
                ]],
        ['id' => '2ad9d490-08bb-51ee-be19-7a4c24f2d37d', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual ácido forte é amplamente utilizado na indústria de fertilizantes?', 'difficulty' => 2, 'weight' => 287, 'alternatives' => [
                    ['id' => '1b29271d-d2ca-58aa-b7fe-cd1f79ca4720', 'description' => 'Ácido acético', 'correct_answer' => false],
                    ['id' => 'fc25e3a1-2e42-5920-9946-9c7f798bd5fb', 'description' => 'Ácido fórmico', 'correct_answer' => false],
                    ['id' => 'a06c5699-9de0-59a4-8da2-5933b9f04c43', 'description' => 'Ácido sulfúrico', 'correct_answer' => true],
                    ['id' => '4bf44580-9c2e-54c5-94fc-5bcb29c02def', 'description' => 'Ácido carbônico', 'correct_answer' => false],
                    ['id' => '4e782a60-20f2-5854-b4d5-65e11177eadd', 'description' => 'Ácido nítrico', 'correct_answer' => false]
                ]],
        ['id' => '9ab3a82b-f3bf-5326-9ef4-a21adb101255', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual ácido é empregado na produção de fertilizantes nitrogenados e na fabricação de explosivos?', 'difficulty' => 2, 'weight' => 319, 'alternatives' => [
                    ['id' => '1af075ad-cb40-50ae-b2db-11a29d18bc82', 'description' => 'Ácido lático', 'correct_answer' => false],
                    ['id' => '132dc183-23e6-5956-bb39-53e8362709e8', 'description' => 'Ácido nítrico', 'correct_answer' => true],
                    ['id' => '54552188-028e-5c8a-a5bb-08e365536755', 'description' => 'Ácido fluorídrico', 'correct_answer' => false],
                    ['id' => '130e1cbc-9cb1-5f11-99d3-9657490f4a60', 'description' => 'Ácido clorídrico', 'correct_answer' => false],
                    ['id' => '0659086a-c150-51de-859f-b27f04db683e', 'description' => 'Ácido sulfúrico', 'correct_answer' => false]
                ]],
        ['id' => '2812b4c4-b222-5e7b-940d-1d57632267d0', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual ácido orgânico é o principal responsável pela acidez característica do vinagre?', 'difficulty' => 2, 'weight' => 270, 'alternatives' => [
                    ['id' => '42f42bf8-eff4-5ee6-b562-ce923f160cc4', 'description' => 'Ácido acético', 'correct_answer' => true],
                    ['id' => '94a12241-05e3-5a24-aae9-1ef1506bc895', 'description' => 'Ácido lático', 'correct_answer' => false],
                    ['id' => '9162187b-beba-5ef9-b97f-26168e0b3372', 'description' => 'Ácido nítrico', 'correct_answer' => false],
                    ['id' => '3e54a8fa-fabd-5ef4-bcf4-96b575e7cc07', 'description' => 'Ácido fosfórico', 'correct_answer' => false],
                    ['id' => 'ccfdb5ca-1ae0-5f16-ae55-c200327eec56', 'description' => 'Ácido fórmico', 'correct_answer' => false]
                ]],
        ['id' => '9d9ce922-88b0-50fa-b2e2-ff8820733e97', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual ácido é usado na produção de fertilizantes fosfatados e como acidulante em alguns alimentos?', 'difficulty' => 2, 'weight' => 254, 'alternatives' => [
                    ['id' => '436871f9-f36e-54d8-bef3-bd34c51a406e', 'description' => 'Ácido cítrico', 'correct_answer' => false],
                    ['id' => 'd9e3a599-98c7-54a8-ac98-b37cf7ed6071', 'description' => 'Ácido sulfúrico', 'correct_answer' => false],
                    ['id' => '9477a9f1-f1e2-5b7e-acaf-9bf13ba81ac7', 'description' => 'Ácido fosfórico', 'correct_answer' => true],
                    ['id' => '9906615c-7c93-569b-bda9-b9a5fcba8da7', 'description' => 'Ácido nítrico', 'correct_answer' => false],
                    ['id' => '8722ea48-fb22-57eb-a6a9-35cce2452a38', 'description' => 'Ácido clorídrico', 'correct_answer' => false]
                ]],
        ['id' => 'af097baa-a6fe-5a37-9090-7659b264ef8f', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual processo de divisão celular geralmente produz duas células-filhas geneticamente semelhantes à célula original?', 'difficulty' => 2, 'weight' => 378, 'alternatives' => [
                    ['id' => '8036efe0-ef29-578b-b87f-b23e70ebe33a', 'description' => 'Mitose', 'correct_answer' => true],
                    ['id' => 'e7a17607-0a9a-59d3-8aef-2ab44ff8ff22', 'description' => 'Gemulação', 'correct_answer' => false],
                    ['id' => '97e7c6f0-4361-51f3-85d7-7a65ca960e1c', 'description' => 'Brotamento', 'correct_answer' => false],
                    ['id' => '4c3f07a6-7102-527e-a235-6e0f2e9fc14e', 'description' => 'Partenogênese', 'correct_answer' => false],
                    ['id' => 'd6105d38-3d83-5f89-a125-a14595f3ff3e', 'description' => 'Regeneração', 'correct_answer' => false]
                ]],
        ['id' => '73d33095-8b19-5ae0-8d4d-63a3cdf99802', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual processo de divisão celular reduz à metade o número de cromossomos e participa da formação de gametas?', 'difficulty' => 2, 'weight' => 265, 'alternatives' => [
                    ['id' => 'f9dc6d15-860a-57b4-a692-ae2e01182d32', 'description' => 'Meiose', 'correct_answer' => true],
                    ['id' => 'a2ac2363-0de2-5887-b044-b4d36d3124da', 'description' => 'Regeneração', 'correct_answer' => false],
                    ['id' => '1a9aca58-aa46-55f0-9226-f803af74cf39', 'description' => 'Partenogênese', 'correct_answer' => false],
                    ['id' => '95fce6e4-3cd6-54eb-8d19-81fbeba7d10c', 'description' => 'Brotamento', 'correct_answer' => false],
                    ['id' => 'de1f3f63-7ae7-547b-9515-eb0c3e9807d2', 'description' => 'Conjugação', 'correct_answer' => false]
                ]],
        ['id' => '5af8aa8a-b02b-5952-bfed-270f19846756', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual forma de reprodução assexuada é comum em bactérias e divide uma célula em duas?', 'difficulty' => 2, 'weight' => 313, 'alternatives' => [
                    ['id' => 'bde6b5c3-9bb2-516a-948e-74b2617e1551', 'description' => 'Fragmentação', 'correct_answer' => false],
                    ['id' => '505727e8-3efc-523e-b433-2b24f7d7a48c', 'description' => 'Gemulação', 'correct_answer' => false],
                    ['id' => 'fe449b3d-37f8-51fb-b1c2-0b73165dbd19', 'description' => 'Fissão binária', 'correct_answer' => true],
                    ['id' => '15ae42a3-9ace-5f07-98d5-18d8704a2339', 'description' => 'Brotamento', 'correct_answer' => false],
                    ['id' => '8c33cacd-d347-5a0d-9641-573e830855fa', 'description' => 'Esporulação', 'correct_answer' => false]
                ]],
        ['id' => '112332c3-8761-5e32-9373-e9516ad5d647', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual forma de reprodução assexuada ocorre quando uma nova estrutura cresce como uma projeção no organismo parental?', 'difficulty' => 2, 'weight' => 397, 'alternatives' => [
                    ['id' => 'a879a361-d0dd-5361-8faa-98f8c5b2ea69', 'description' => 'Brotamento', 'correct_answer' => true],
                    ['id' => '2928263d-7026-54ae-8341-08baf3d51280', 'description' => 'Partenogênese', 'correct_answer' => false],
                    ['id' => '018300c7-e889-5cd7-bc4a-7745f233bb4c', 'description' => 'Gemulação', 'correct_answer' => false],
                    ['id' => '63b86f74-f309-58d5-9f0e-b0f1b30a5d37', 'description' => 'Conjugação', 'correct_answer' => false],
                    ['id' => '4959277a-91c5-522f-b22d-0092231a4418', 'description' => 'Mitose', 'correct_answer' => false]
                ]],
        ['id' => '1c99e374-71f1-5865-b2a9-bbfa90b223e0', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual processo reprodutivo permite o desenvolvimento de um embrião a partir de um óvulo não fecundado?', 'difficulty' => 2, 'weight' => 279, 'alternatives' => [
                    ['id' => '66a98a9f-9408-5adb-bb7e-f5b21d8936cc', 'description' => 'Meiose', 'correct_answer' => false],
                    ['id' => 'da026248-4dac-538d-a0a5-158d042c5cb3', 'description' => 'Mitose', 'correct_answer' => false],
                    ['id' => '55ae6a45-e595-5f98-b754-90b8845945ca', 'description' => 'Gemulação', 'correct_answer' => false],
                    ['id' => 'aa4c6ae8-fadd-5f23-9a5d-49f62aad6e3f', 'description' => 'Fragmentação', 'correct_answer' => false],
                    ['id' => 'da84540c-e684-5d9d-bc59-077fd68455be', 'description' => 'Partenogênese', 'correct_answer' => true]
                ]],
        ['id' => '4513b950-fc2b-509e-86e0-0a46808f3af4', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual lei relaciona tensão elétrica, corrente e resistência em um condutor ôhmico?', 'difficulty' => 2, 'weight' => 221, 'alternatives' => [
                    ['id' => 'd025e72b-695f-5d09-9004-2925867d9589', 'description' => 'Lei de Ohm', 'correct_answer' => true],
                    ['id' => '6b61c719-e68f-5f53-8198-a1791e2d07c7', 'description' => 'Lei de Charles', 'correct_answer' => false],
                    ['id' => '1006911a-61e1-52e5-9a58-54d37d491b24', 'description' => 'Lei de Faraday', 'correct_answer' => false],
                    ['id' => '2393b66f-364a-59b7-97dd-3202c523e12e', 'description' => 'Lei de Boyle', 'correct_answer' => false],
                    ['id' => 'fcb47dcd-2bde-5487-99ca-c50964814016', 'description' => 'Lei de Ampère', 'correct_answer' => false]
                ]],
        ['id' => '3fd87d75-5645-5530-85fb-b361cf21adac', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual lei descreve a força eletrostática entre cargas elétricas puntiformes?', 'difficulty' => 2, 'weight' => 399, 'alternatives' => [
                    ['id' => '68e4c28c-a774-5185-b032-b10a3dca2075', 'description' => 'Lei de Coulomb', 'correct_answer' => true],
                    ['id' => 'dc9ce47a-7347-5bf7-b0a4-a4c8019b3a3c', 'description' => 'Lei de Faraday', 'correct_answer' => false],
                    ['id' => '6bb975f0-efe7-5023-95d7-3ecd6fb3b60d', 'description' => 'Lei de Lenz', 'correct_answer' => false],
                    ['id' => '299341b9-a1c5-572d-8451-5ad9c2f8015f', 'description' => 'Lei de Hooke', 'correct_answer' => false],
                    ['id' => '27560c27-25fa-58a4-8f3a-bb0396d2ab20', 'description' => 'Lei de Boyle', 'correct_answer' => false]
                ]],
        ['id' => '90e802b7-4acc-51b8-94f5-3a988bab2980', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual lei relaciona a força eletromotriz induzida à variação do fluxo magnético?', 'difficulty' => 2, 'weight' => 271, 'alternatives' => [
                    ['id' => '906a3171-2b89-53e6-ac6b-334c1bfab219', 'description' => 'Lei de Coulomb', 'correct_answer' => false],
                    ['id' => '3989c454-67c5-5c66-88f3-1458c7bcce67', 'description' => 'Lei de Gauss', 'correct_answer' => false],
                    ['id' => 'ab39d158-a3e6-5529-9dbe-c9d37f233e9a', 'description' => 'Lei de Charles', 'correct_answer' => false],
                    ['id' => 'fac41dd5-f47d-5065-87d5-c9869655108c', 'description' => 'Lei de Faraday', 'correct_answer' => true],
                    ['id' => '4eb6555d-adbb-504b-ba5b-07898e3696b2', 'description' => 'Lei de Snell', 'correct_answer' => false]
                ]],
        ['id' => '662b9a90-e467-549c-b223-f04484b26c3f', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual lei determina o sentido da corrente induzida em oposição à variação do fluxo magnético que a produz?', 'difficulty' => 2, 'weight' => 353, 'alternatives' => [
                    ['id' => '5529b9f3-9da9-5c62-b2da-285be3efb25f', 'description' => 'Lei de Ohm', 'correct_answer' => false],
                    ['id' => 'b34e6d04-ce89-5995-909f-1e031ab36f22', 'description' => 'Lei de Ampère', 'correct_answer' => false],
                    ['id' => '7f9b2119-feab-501e-a31c-030fcdf0fc50', 'description' => 'Lei de Hooke', 'correct_answer' => false],
                    ['id' => '4b024129-92ef-5e21-b981-cfe358b94d6a', 'description' => 'Lei de Gauss', 'correct_answer' => false],
                    ['id' => '2a58691e-bb69-5b85-a7b2-61307d0dfaaf', 'description' => 'Lei de Lenz', 'correct_answer' => true]
                ]],
        ['id' => '4ecdca85-d8f6-5678-818c-fc4524997899', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual lei descreve a proporcionalidade entre a força elástica e a deformação, dentro do limite elástico?', 'difficulty' => 2, 'weight' => 319, 'alternatives' => [
                    ['id' => '70d190d6-445f-5de6-b919-f66ea5eaf848', 'description' => 'Lei de Ohm', 'correct_answer' => false],
                    ['id' => '01b47e50-2b1d-5d6b-93d9-c02c93fb5f50', 'description' => 'Lei de Coulomb', 'correct_answer' => false],
                    ['id' => 'e27f93a7-e33b-52d4-bb81-3724dfb5cd28', 'description' => 'Lei de Hooke', 'correct_answer' => true],
                    ['id' => '50e1c215-c84c-5126-af09-d83449ea7d06', 'description' => 'Lei de Faraday', 'correct_answer' => false],
                    ['id' => '76f6be84-596c-5fd1-912f-c9c97302ea9d', 'description' => 'Lei de Ampère', 'correct_answer' => false]
                ]],
        ['id' => 'b2d2bf8f-f0d9-5a82-831a-485b1324547c', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual elemento químico é o principal cátion do líquido extracelular humano?', 'difficulty' => 2, 'weight' => 313, 'alternatives' => [
                    ['id' => 'aaae1698-3aff-59b2-b5d3-cea11a37426a', 'description' => 'Cálcio', 'correct_answer' => false],
                    ['id' => '5a0fa068-af14-56b1-a520-a095d0655c15', 'description' => 'Potássio', 'correct_answer' => false],
                    ['id' => 'd4285fef-97e0-5b89-820a-a7e874ae957f', 'description' => 'Ferro', 'correct_answer' => false],
                    ['id' => '9034b570-7fc9-5420-a055-4690d4220469', 'description' => 'Zinco', 'correct_answer' => false],
                    ['id' => 'fb132e0a-d971-5d38-92ce-566147b9219d', 'description' => 'Sódio', 'correct_answer' => true]
                ]],
        ['id' => '10fefb67-d045-50cd-83dd-478ee7952936', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual elemento é o principal cátion do meio intracelular e participa do potencial de membrana?', 'difficulty' => 2, 'weight' => 323, 'alternatives' => [
                    ['id' => 'e69aba1c-de5c-52d8-8c26-c7f122785429', 'description' => 'Ferro', 'correct_answer' => false],
                    ['id' => '44ff4508-69ed-52e3-9872-815d6b2aac5e', 'description' => 'Fósforo', 'correct_answer' => false],
                    ['id' => '36bd06f8-ec9d-5cec-b260-104e472237c1', 'description' => 'Cobre', 'correct_answer' => false],
                    ['id' => '688cce34-b430-5646-bc99-c84e02c586d6', 'description' => 'Zinco', 'correct_answer' => false],
                    ['id' => '512b4fbf-a1d7-5699-a1d6-e29824700ccb', 'description' => 'Potássio', 'correct_answer' => true]
                ]],
        ['id' => '3ce02aab-516a-5fa4-a2f6-150184a0d467', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual elemento é essencial para a mineralização dos ossos e para a contração muscular?', 'difficulty' => 2, 'weight' => 345, 'alternatives' => [
                    ['id' => '9db32035-0e23-5e9d-b429-d49cb31eb050', 'description' => 'Sódio', 'correct_answer' => false],
                    ['id' => '31af8e00-184d-5b06-a477-bbafa921e54c', 'description' => 'Cobre', 'correct_answer' => false],
                    ['id' => '084d6040-1a95-51aa-af15-5b23e4ce6f3d', 'description' => 'Potássio', 'correct_answer' => false],
                    ['id' => 'd4d9fc86-d930-5f99-8a29-93b270521ae5', 'description' => 'Fósforo', 'correct_answer' => false],
                    ['id' => '915abcb1-7a9f-5f80-8248-c6700413ac95', 'description' => 'Cálcio', 'correct_answer' => true]
                ]],
        ['id' => '04ffe716-e1ce-5cea-a459-c89b93994d04', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual elemento faz parte da hemoglobina e permite o transporte de oxigênio no sangue?', 'difficulty' => 2, 'weight' => 395, 'alternatives' => [
                    ['id' => '30c58a4f-d5b6-57db-b8c8-4f5e15549909', 'description' => 'Iodo', 'correct_answer' => false],
                    ['id' => '11519c70-0da9-5ceb-b6ed-b86fdb58d9c4', 'description' => 'Cálcio', 'correct_answer' => false],
                    ['id' => 'c0bae533-d667-5392-b460-324c66ea7896', 'description' => 'Magnésio', 'correct_answer' => false],
                    ['id' => '28d79a4e-f890-5ab6-b684-ffde590ace1d', 'description' => 'Ferro', 'correct_answer' => true],
                    ['id' => '9977fdc9-7ce3-5867-b9fe-0431224bebf1', 'description' => 'Zinco', 'correct_answer' => false]
                ]],
        ['id' => '740435af-3683-59f4-9804-3a1a637bd335', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual elemento é necessário para a síntese dos hormônios da tireoide?', 'difficulty' => 2, 'weight' => 260, 'alternatives' => [
                    ['id' => '5f712ef1-0334-546d-a6d7-8aca63cb328c', 'description' => 'Ferro', 'correct_answer' => false],
                    ['id' => '145aaf30-fc0e-50bf-84f2-ea27238cbd9d', 'description' => 'Iodo', 'correct_answer' => true],
                    ['id' => 'b7d66276-4278-5cdf-af40-ae6a34570a7d', 'description' => 'Selênio', 'correct_answer' => false],
                    ['id' => '9d69661d-1c85-54f8-bc1b-30b61b73b1b6', 'description' => 'Potássio', 'correct_answer' => false],
                    ['id' => '4f9c52b7-73a2-58da-9f20-53720fe89e73', 'description' => 'Sódio', 'correct_answer' => false]
                ]],
        ['id' => 'f830588a-bf5b-5365-88a7-94e3f1a2180b', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual molécula armazena a maior parte da informação genética dos organismos celulares?', 'difficulty' => 2, 'weight' => 342, 'alternatives' => [
                    ['id' => 'e0dd75c5-f741-5f12-bab4-ebf5eac659f2', 'description' => 'Ácido desoxirribonucleico', 'correct_answer' => true],
                    ['id' => '02ecd091-2fea-5eb9-914f-9f127f0997a8', 'description' => 'NADH', 'correct_answer' => false],
                    ['id' => '362a7776-4b38-537a-9ab3-e74a706a3aa2', 'description' => 'Ribose', 'correct_answer' => false],
                    ['id' => '53b3518a-27fc-5d5a-9998-414023f64483', 'description' => 'Ácido ribonucleico', 'correct_answer' => false],
                    ['id' => 'e55daf13-2f1c-56a5-b912-5afdfbe0bd16', 'description' => 'Glicose', 'correct_answer' => false]
                ]],
        ['id' => '571daad0-7173-570b-ab35-ee635e03c6af', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual molécula participa da expressão gênica e pode atuar como mensageiro, transportador ou componente ribossômico?', 'difficulty' => 2, 'weight' => 261, 'alternatives' => [
                    ['id' => '15768d29-016b-504b-8709-6db103f61546', 'description' => 'Ácido ribonucleico', 'correct_answer' => true],
                    ['id' => '635acb82-6f11-556d-8b84-d19bc6b241fc', 'description' => 'NADH', 'correct_answer' => false],
                    ['id' => '590bf564-f820-5915-9070-3deeb17d829a', 'description' => 'Glicose', 'correct_answer' => false],
                    ['id' => '5c63f287-2d58-50fb-84cf-4cee14e217a2', 'description' => 'Ácido desoxirribonucleico', 'correct_answer' => false],
                    ['id' => '791896b8-2b75-5dea-92e3-6f72a70a703e', 'description' => 'Desoxirribose', 'correct_answer' => false]
                ]],
        ['id' => '737a77c3-fbc2-517f-96dd-77177a67aaf6', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual molécula é frequentemente descrita como a principal moeda energética imediata da célula?', 'difficulty' => 2, 'weight' => 227, 'alternatives' => [
                    ['id' => '845e764e-98db-503c-80e4-74bedbef8680', 'description' => 'Desoxirribose', 'correct_answer' => false],
                    ['id' => '30f83f5a-4ffd-54a5-80e7-c83aaff2fcc9', 'description' => 'NADH', 'correct_answer' => false],
                    ['id' => '5ac5f299-5342-51bc-bad4-aa7cd4461f4f', 'description' => 'ATP', 'correct_answer' => true],
                    ['id' => '13d2bfe4-85f3-5da4-a0ab-bea9467e0076', 'description' => 'Ribose', 'correct_answer' => false],
                    ['id' => '82f875b4-5964-5c31-87ec-9b626077e7ee', 'description' => 'FADH2', 'correct_answer' => false]
                ]],
        ['id' => '6c7b7e6c-c33b-5d5a-ad88-cf1e374f29ac', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual coenzima reduzida transporta elétrons para a cadeia respiratória?', 'difficulty' => 2, 'weight' => 346, 'alternatives' => [
                    ['id' => '6ac2750a-2968-5239-b163-b240f788ae3b', 'description' => 'NADH', 'correct_answer' => true],
                    ['id' => 'cf5c3ffa-9ae2-5bad-93ea-c3559220a1ea', 'description' => 'Ribose', 'correct_answer' => false],
                    ['id' => 'ff1d4b3e-d857-53da-9200-b4eb40f14a5c', 'description' => 'Uracila', 'correct_answer' => false],
                    ['id' => '88cf954c-e177-589d-aa4e-94596aad06de', 'description' => 'FADH2', 'correct_answer' => false],
                    ['id' => 'e7ea1723-0612-507a-b269-28e4b751cb51', 'description' => 'Ácido ribonucleico', 'correct_answer' => false]
                ]],
        ['id' => '1388c465-2e3e-5613-b166-2fc337a0e0d1', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual coenzima reduzida, derivada da vitamina B2, entrega elétrons à cadeia transportadora?', 'difficulty' => 2, 'weight' => 227, 'alternatives' => [
                    ['id' => '4601bd4c-1a7c-5655-acb2-9c5c3539a00e', 'description' => 'Desoxirribose', 'correct_answer' => false],
                    ['id' => '1f67c9d2-da60-56f8-b2be-0aa11a17e2f2', 'description' => 'NADH', 'correct_answer' => false],
                    ['id' => 'b276ab47-2de5-5af3-a47b-746255d25bcc', 'description' => 'Ribose', 'correct_answer' => false],
                    ['id' => '80e61c8c-8847-5001-8625-0675ad2bff72', 'description' => 'Uracila', 'correct_answer' => false],
                    ['id' => '090debc1-43e0-5d11-9bdf-698b2237670e', 'description' => 'FADH2', 'correct_answer' => true]
                ]],
        ['id' => '2f30c5df-5e13-5261-9996-c18eb2462b45', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual rocha ígnea extrusiva, geralmente escura, é formada pelo resfriamento rápido de lava?', 'difficulty' => 2, 'weight' => 226, 'alternatives' => [
                    ['id' => '2312a44d-cbe8-587c-a803-294aee18d792', 'description' => 'Gnaisse', 'correct_answer' => false],
                    ['id' => 'd6467574-f198-5573-aa26-bfb6a00903f7', 'description' => 'Basalto', 'correct_answer' => true],
                    ['id' => '2e7a78b1-a89d-5cae-addd-7bc502dce48d', 'description' => 'Granito', 'correct_answer' => false],
                    ['id' => 'd3720e38-56ab-5105-85cd-ef91cc004c02', 'description' => 'Mármore', 'correct_answer' => false],
                    ['id' => '71298a41-b796-542e-a8e7-16695ff70974', 'description' => 'Conglomerado', 'correct_answer' => false]
                ]],
        ['id' => '2a3af457-f80c-5653-ac39-1baf6b874239', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual rocha ígnea intrusiva é composta principalmente por quartzo, feldspato e mica?', 'difficulty' => 2, 'weight' => 271, 'alternatives' => [
                    ['id' => '90bd89b3-7f63-5434-96e9-685d4e2dda7b', 'description' => 'Mármore', 'correct_answer' => false],
                    ['id' => '445cd7be-fc69-56c0-b883-aca500f02ef2', 'description' => 'Gnaisse', 'correct_answer' => false],
                    ['id' => '4ff038d9-476a-5337-98c0-ca4690f2e44e', 'description' => 'Granito', 'correct_answer' => true],
                    ['id' => '11ac1565-7865-5731-ba4e-9354f85f8c67', 'description' => 'Quartzito', 'correct_answer' => false],
                    ['id' => '6129d1b5-c3ac-5156-bfbd-e5f5359788bb', 'description' => 'Conglomerado', 'correct_answer' => false]
                ]],
        ['id' => '048387ab-e931-5ae7-8df6-174d4480d415', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual rocha sedimentar é formada principalmente pela compactação e cimentação de grãos de areia?', 'difficulty' => 2, 'weight' => 374, 'alternatives' => [
                    ['id' => '6eef0bab-5f27-569c-8ea3-53eed5feafe2', 'description' => 'Quartzito', 'correct_answer' => false],
                    ['id' => '2ed36fc2-e670-53dc-b592-532081a12947', 'description' => 'Gnaisse', 'correct_answer' => false],
                    ['id' => '4890e80f-799a-5eae-ba43-cbde647f5eac', 'description' => 'Calcário', 'correct_answer' => false],
                    ['id' => '497a39ea-b245-5888-910a-6c388a0b00e2', 'description' => 'Arenito', 'correct_answer' => true],
                    ['id' => '78510235-788d-53ea-be90-20942ff0e7b9', 'description' => 'Mármore', 'correct_answer' => false]
                ]],
        ['id' => '9662926d-a57c-52e7-ab1a-085feb60ce00', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual rocha sedimentar é composta predominantemente por carbonato de cálcio?', 'difficulty' => 2, 'weight' => 230, 'alternatives' => [
                    ['id' => '3e1e0761-5229-58c6-a635-e1ef5603e0bd', 'description' => 'Mármore', 'correct_answer' => false],
                    ['id' => '6f75d85b-01bc-5b49-a025-6f97310c09be', 'description' => 'Quartzito', 'correct_answer' => false],
                    ['id' => 'f60506b3-e181-5b01-b991-ae172c1513a7', 'description' => 'Calcário', 'correct_answer' => true],
                    ['id' => '87f5ebba-491a-5caa-8332-48601adb18a3', 'description' => 'Basalto', 'correct_answer' => false],
                    ['id' => '883e531d-a27f-52f5-98c3-cec86307dbc4', 'description' => 'Arenito', 'correct_answer' => false]
                ]],
        ['id' => '17adc306-a6b5-57cc-98d3-b22556a3d3fb', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual rocha metamórfica resulta principalmente da transformação de calcário ou dolomito?', 'difficulty' => 2, 'weight' => 260, 'alternatives' => [
                    ['id' => '1b22472e-b27b-5f26-b9c8-741641599b42', 'description' => 'Conglomerado', 'correct_answer' => false],
                    ['id' => 'd4dd7a83-a039-54f5-bf49-e14f4ce088ba', 'description' => 'Obsidiana', 'correct_answer' => false],
                    ['id' => 'a66be23e-bbec-5557-8c80-24680527f884', 'description' => 'Mármore', 'correct_answer' => true],
                    ['id' => '584b2057-ef31-5a4a-b360-86fe7c0e6eea', 'description' => 'Quartzito', 'correct_answer' => false],
                    ['id' => 'fe212235-63ba-5576-b563-cb92a2619e80', 'description' => 'Gnaisse', 'correct_answer' => false]
                ]],
        ['id' => 'ab3ba743-9d42-5ccd-a733-54855895e584', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual metal líquido à temperatura ambiente é conhecido por sua toxicidade e símbolo Hg?', 'difficulty' => 2, 'weight' => 376, 'alternatives' => [
                    ['id' => '4aca81f0-b0ad-58a1-8c39-1377ef89e2b9', 'description' => 'Arsênio', 'correct_answer' => false],
                    ['id' => '9a3b9e8b-e4e8-5225-a0b7-51a8d280a197', 'description' => 'Chumbo', 'correct_answer' => false],
                    ['id' => 'eb44ff25-9049-5343-bf08-096f8bc058e9', 'description' => 'Lítio', 'correct_answer' => false],
                    ['id' => '2819a809-7d7e-55bb-930f-249ca1a11534', 'description' => 'Mercúrio', 'correct_answer' => true],
                    ['id' => 'c7f97d20-d124-5032-8b53-f5aab38c76ec', 'description' => 'Cromo', 'correct_answer' => false]
                ]],
        ['id' => 'd8c8f0d6-735b-5c3d-9fef-a9fb5ab7c51a', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual metal pesado, de símbolo Cd, foi historicamente utilizado em baterias recarregáveis de níquel-cádmio?', 'difficulty' => 2, 'weight' => 255, 'alternatives' => [
                    ['id' => '160d386f-513e-5fab-9f86-5a9e0b2bb356', 'description' => 'Cádmio', 'correct_answer' => true],
                    ['id' => 'cb2a5e70-6228-56d8-9322-ac349d85d635', 'description' => 'Níquel', 'correct_answer' => false],
                    ['id' => 'f5c5807b-14c8-5fab-9ea5-a9da2cf77ae8', 'description' => 'Mercúrio', 'correct_answer' => false],
                    ['id' => 'c7037b23-3d3a-5658-a493-6c69f66ec53c', 'description' => 'Lítio', 'correct_answer' => false],
                    ['id' => '9ae9067e-2972-563a-9af3-cb908fff58d1', 'description' => 'Chumbo', 'correct_answer' => false]
                ]],
        ['id' => '4b355b15-447f-5e55-b7a2-0e5756df8308', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual metal pesado, de símbolo Pb, foi amplamente usado em tintas e combustíveis antes de restrições por toxicidade?', 'difficulty' => 2, 'weight' => 285, 'alternatives' => [
                    ['id' => '321be7cb-a5ae-555d-ab7e-9a78b9eea12f', 'description' => 'Berílio', 'correct_answer' => false],
                    ['id' => '704aa508-5985-5325-a41a-11eb22c66835', 'description' => 'Cádmio', 'correct_answer' => false],
                    ['id' => 'e37bf146-e306-5761-98d7-2cde39a19f46', 'description' => 'Arsênio', 'correct_answer' => false],
                    ['id' => '4156f477-653a-5d1a-9a22-686e1e467770', 'description' => 'Cobalto', 'correct_answer' => false],
                    ['id' => 'f1cf6b90-6ba4-54c8-8c09-ec9325b325c2', 'description' => 'Chumbo', 'correct_answer' => true]
                ]],
        ['id' => '42b1a6c4-ce9e-5544-83dc-7e52ba8e1055', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual elemento químico semimetálico é conhecido por compostos altamente tóxicos e símbolo As?', 'difficulty' => 2, 'weight' => 261, 'alternatives' => [
                    ['id' => '51352bfa-a610-58e8-9cc6-e6a578ca2db3', 'description' => 'Manganês', 'correct_answer' => false],
                    ['id' => '0a65b4e8-a6da-542d-8aa4-3c8f1836b223', 'description' => 'Berílio', 'correct_answer' => false],
                    ['id' => 'a9b5e2ba-ba56-5f6b-bd92-7e7f2741632b', 'description' => 'Mercúrio', 'correct_answer' => false],
                    ['id' => '871a8e62-2917-543c-9f41-c9b57a2c752f', 'description' => 'Cromo', 'correct_answer' => false],
                    ['id' => 'e5e8b1b0-3d9c-5c32-9426-df5ff28f1020', 'description' => 'Arsênio', 'correct_answer' => true]
                ]],
        ['id' => 'b1ddf876-ff53-52a9-8b65-57aa267ece8e', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual metal leve de símbolo Be é usado em ligas especiais e exige cuidados devido à toxicidade de sua poeira?', 'difficulty' => 2, 'weight' => 365, 'alternatives' => [
                    ['id' => 'ca1b6ad6-5806-57ac-a625-a89d87af851f', 'description' => 'Berílio', 'correct_answer' => true],
                    ['id' => '487b97e8-6ff6-5c6e-94b1-aed240345f12', 'description' => 'Cobalto', 'correct_answer' => false],
                    ['id' => '9bb35cf3-3194-5460-bbfe-48e2621dc4e7', 'description' => 'Arsênio', 'correct_answer' => false],
                    ['id' => '4025e9af-a45f-527a-b055-a9704b05f38f', 'description' => 'Chumbo', 'correct_answer' => false],
                    ['id' => 'ce692920-9766-5397-bfae-118175d6818a', 'description' => 'Cromo', 'correct_answer' => false]
                ]],
        ['id' => 'aacf0601-58cb-5890-ac5d-0a5f49b91774', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual sequência cíclica de reações mitocondriais oxida acetil-CoA e produz transportadores reduzidos de elétrons?', 'difficulty' => 3, 'weight' => 459, 'alternatives' => [
                    ['id' => 'e6bc1ad4-6e7e-58e2-889e-271b2614e3d9', 'description' => 'Ciclo de Krebs', 'correct_answer' => true],
                    ['id' => '63a58cf6-2768-5288-8b93-e9c362dced31', 'description' => 'Cadeia transportadora de elétrons', 'correct_answer' => false],
                    ['id' => '64ab51f3-82c1-53e7-baad-1fb4b3a8ef78', 'description' => 'Fermentação alcoólica', 'correct_answer' => false],
                    ['id' => 'fac3b8b2-a385-51ce-b09a-c0bc9186d5a0', 'description' => 'Gliconeogênese', 'correct_answer' => false],
                    ['id' => '58ab7034-2db7-56ce-a014-3a092142c755', 'description' => 'Beta-oxidação', 'correct_answer' => false]
                ]],
        ['id' => '7058b7f8-aeba-5643-b0f8-02c3994d711e', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual via metabólica citosólica converte glicose em piruvato, gerando ATP e NADH?', 'difficulty' => 3, 'weight' => 463, 'alternatives' => [
                    ['id' => '163fe4bb-da5c-5fde-bd95-716c0ba38c24', 'description' => 'Ciclo da ureia', 'correct_answer' => false],
                    ['id' => '0a255e11-0171-5504-8dbd-ca54283f7904', 'description' => 'Ciclo de Calvin', 'correct_answer' => false],
                    ['id' => '2cd1536d-c84b-5b58-9042-0723c62ad11d', 'description' => 'Cadeia transportadora de elétrons', 'correct_answer' => false],
                    ['id' => 'b7392558-4d50-53e8-b4f0-f908d60d58b2', 'description' => 'Gliconeogênese', 'correct_answer' => false],
                    ['id' => '19b81ab4-2ce3-55ed-82fc-c9180bd1c90a', 'description' => 'Glicólise', 'correct_answer' => true]
                ]],
        ['id' => '2514de07-4347-505e-8272-11792397d371', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual conjunto de complexos proteicos da membrana mitocondrial interna transfere elétrons e contribui para o gradiente de prótons?', 'difficulty' => 3, 'weight' => 441, 'alternatives' => [
                    ['id' => '131ffd4a-94ef-5532-a752-b6d35f55650c', 'description' => 'Gliconeogênese', 'correct_answer' => false],
                    ['id' => '4b7f7f12-c05b-57c3-8ec1-d1f60781dbb6', 'description' => 'Cadeia transportadora de elétrons', 'correct_answer' => true],
                    ['id' => 'f05a64d1-755b-5ec0-9761-daa637bc9619', 'description' => 'Ciclo de Calvin', 'correct_answer' => false],
                    ['id' => '1ced71d6-2fac-58af-8995-12f70a0e3a8c', 'description' => 'Fermentação alcoólica', 'correct_answer' => false],
                    ['id' => '24483a80-462d-5dd5-a91b-7be9a3d50c45', 'description' => 'Glicólise', 'correct_answer' => false]
                ]],
        ['id' => '075031ec-2238-55d3-97d9-9b09a85eab0d', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual conjunto de reações da fotossíntese fixa dióxido de carbono em moléculas orgânicas no estroma dos cloroplastos?', 'difficulty' => 3, 'weight' => 534, 'alternatives' => [
                    ['id' => 'b3e8bb44-bbbd-554f-ac84-31f1e5b75448', 'description' => 'Ciclo de Calvin', 'correct_answer' => true],
                    ['id' => '664fac55-f2ce-521d-b6ad-9cd9932eb317', 'description' => 'Fermentação alcoólica', 'correct_answer' => false],
                    ['id' => 'a6ef5f14-8a79-5fb5-869d-23da9444185d', 'description' => 'Glicólise', 'correct_answer' => false],
                    ['id' => '921045de-04df-5d20-b6b4-32a20f9d39b3', 'description' => 'Cadeia transportadora de elétrons', 'correct_answer' => false],
                    ['id' => '3e6869c2-4b81-5433-9e80-6009e50ac947', 'description' => 'Via das pentoses-fosfato', 'correct_answer' => false]
                ]],
        ['id' => 'a65de9b0-7b0f-5fdc-89a0-d7c76e35fe9c', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual via metabólica degrada ácidos graxos em unidades de acetil-CoA?', 'difficulty' => 3, 'weight' => 509, 'alternatives' => [
                    ['id' => 'c222321f-e2bb-5ba8-aa84-be7b0f43c2cb', 'description' => 'Cadeia transportadora de elétrons', 'correct_answer' => false],
                    ['id' => '6720e118-5f9f-54c0-a13a-6c9d4807f46d', 'description' => 'Beta-oxidação', 'correct_answer' => true],
                    ['id' => 'bf7cb889-aafe-5b9d-a1cc-75df8f5dafd6', 'description' => 'Fermentação alcoólica', 'correct_answer' => false],
                    ['id' => '72d815d3-74ff-58d5-b797-eb53da8d0e04', 'description' => 'Gliconeogênese', 'correct_answer' => false],
                    ['id' => '672492a6-a3f6-5098-b3c6-e096c0607000', 'description' => 'Glicólise', 'correct_answer' => false]
                ]],
        ['id' => '21700d17-6172-5855-ab9b-dc2d538af927', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual fenômeno explica a mudança aparente de frequência de uma onda devido ao movimento relativo entre fonte e observador?', 'difficulty' => 3, 'weight' => 423, 'alternatives' => [
                    ['id' => 'ccad348d-0ddc-50a0-a4bf-d03f8467ff95', 'description' => 'Efeito Peltier', 'correct_answer' => false],
                    ['id' => '7529dc5b-b4b0-5261-9343-c1e1453abcbc', 'description' => 'Efeito Zeeman', 'correct_answer' => false],
                    ['id' => '4e8a2306-bcad-580b-aef6-dce035314b97', 'description' => 'Efeito Casimir', 'correct_answer' => false],
                    ['id' => 'f6ab2c69-9abe-57f6-91b3-bdaadebbd9cc', 'description' => 'Efeito Stark', 'correct_answer' => false],
                    ['id' => 'f744ef0b-bc77-5208-b98e-682f897a9a2b', 'description' => 'Efeito Doppler', 'correct_answer' => true]
                ]],
        ['id' => '0c543d01-7b44-50be-a384-c6e39787bedd', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual fenômeno ocorre quando a incidência de luz sobre um material provoca a emissão de elétrons?', 'difficulty' => 3, 'weight' => 543, 'alternatives' => [
                    ['id' => '892289ba-102b-5468-9036-d3e621e59de5', 'description' => 'Efeito Casimir', 'correct_answer' => false],
                    ['id' => 'c933b417-38aa-587e-a8f3-e17d5dd6e027', 'description' => 'Efeito Hall', 'correct_answer' => false],
                    ['id' => '6aa3562d-e8dc-5223-9e9e-8f4c1da2d70f', 'description' => 'Efeito Seebeck', 'correct_answer' => false],
                    ['id' => '600f1b5f-8eba-5b91-8a07-cde0b3a8ffc7', 'description' => 'Efeito fotoelétrico', 'correct_answer' => true],
                    ['id' => 'df3301bc-3fa6-54e6-9291-2230a1576c03', 'description' => 'Efeito Zeeman', 'correct_answer' => false]
                ]],
        ['id' => '10574dfd-3310-5327-a48d-d20d0ed697a5', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual fenômeno descreve o aumento do comprimento de onda de fótons após espalhamento por elétrons?', 'difficulty' => 3, 'weight' => 495, 'alternatives' => [
                    ['id' => '7e68f55e-5cc6-5411-9e2a-de78c2543aef', 'description' => 'Efeito Peltier', 'correct_answer' => false],
                    ['id' => 'da1aaec9-db22-5f08-9da5-b56577819b73', 'description' => 'Efeito Zeeman', 'correct_answer' => false],
                    ['id' => 'e8dc04c1-b641-58b8-bdf9-a81cafdae3b8', 'description' => 'Efeito Compton', 'correct_answer' => true],
                    ['id' => '129df760-4a8a-5d9c-9810-d86138c92a74', 'description' => 'Efeito Seebeck', 'correct_answer' => false],
                    ['id' => 'a4554ad5-46db-5999-807e-314261756b18', 'description' => 'Efeito Joule', 'correct_answer' => false]
                ]],
        ['id' => '87eb5e71-0879-5b17-a26a-143e3bec5833', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual fenômeno produz uma diferença de potencial transversal em um condutor ou semicondutor percorrido por corrente e submetido a campo magnético?', 'difficulty' => 3, 'weight' => 483, 'alternatives' => [
                    ['id' => 'ddfedba4-8541-5be2-85b4-b098bcc1a5ba', 'description' => 'Efeito Hall', 'correct_answer' => true],
                    ['id' => 'c8e5dbfa-c9c9-50e1-a274-9963ae4e4899', 'description' => 'Efeito Peltier', 'correct_answer' => false],
                    ['id' => 'dae942d7-8628-50c1-a4d3-7ec98db40d4d', 'description' => 'Efeito Stark', 'correct_answer' => false],
                    ['id' => '0fff0331-f4f6-5376-8602-80d0c7a5e1bc', 'description' => 'Efeito Seebeck', 'correct_answer' => false],
                    ['id' => 'ae461175-c404-5b17-ae7c-84af4f6eef9f', 'description' => 'Efeito Compton', 'correct_answer' => false]
                ]],
        ['id' => 'beb76aca-1345-5e0f-9871-85ea1892dffe', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual fenômeno consiste na divisão de linhas espectrais atômicas sob a influência de um campo magnético?', 'difficulty' => 3, 'weight' => 527, 'alternatives' => [
                    ['id' => '71bc9fd5-a79f-50bd-83c2-452a11ecb737', 'description' => 'Efeito Zeeman', 'correct_answer' => true],
                    ['id' => 'e9896d90-f10f-562b-9d49-9039fa64e255', 'description' => 'Efeito Stark', 'correct_answer' => false],
                    ['id' => '06fc03ce-2b80-5b9e-be67-733545ca840a', 'description' => 'Efeito Casimir', 'correct_answer' => false],
                    ['id' => '25940915-713c-5337-9f34-4f020b24d9c9', 'description' => 'Efeito Hall', 'correct_answer' => false],
                    ['id' => 'dd77fea9-8e4b-59ec-844a-1055dfaca533', 'description' => 'Efeito Doppler', 'correct_answer' => false]
                ]],
        ['id' => 'cbf16bb6-7cab-5e71-8a04-51efc564ea49', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Como são chamados átomos do mesmo elemento que possuem diferentes números de nêutrons?', 'difficulty' => 3, 'weight' => 417, 'alternatives' => [
                    ['id' => '56a54fc9-f367-52d1-9edd-94149b0826d3', 'description' => 'Isótopos', 'correct_answer' => true],
                    ['id' => '52431f09-a3d0-5a80-a679-db0bb6db922b', 'description' => 'Isoeletrônicos', 'correct_answer' => false],
                    ['id' => '2d6a6370-cc09-59f6-9913-d7b0ca17f03f', 'description' => 'Isômeros conformacionais', 'correct_answer' => false],
                    ['id' => 'a83f61be-dc04-52a2-af7d-2b9f4943a473', 'description' => 'Isômeros constitucionais', 'correct_answer' => false],
                    ['id' => 'bc028696-b503-54bc-9c77-fb83195de342', 'description' => 'Polimorfos', 'correct_answer' => false]
                ]],
        ['id' => '7f0c020a-f532-58ec-8064-e1f4d731f016', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Como são chamados nuclídeos de elementos diferentes que possuem o mesmo número de massa?', 'difficulty' => 3, 'weight' => 476, 'alternatives' => [
                    ['id' => '12924b16-33af-563a-a2f8-089da79589df', 'description' => 'Isóbaros', 'correct_answer' => true],
                    ['id' => '4c1fc665-d238-53de-b263-0669403222ef', 'description' => 'Isômeros constitucionais', 'correct_answer' => false],
                    ['id' => '510df78c-4f00-5bfb-90ee-ba504f5c8630', 'description' => 'Isoeletrônicos', 'correct_answer' => false],
                    ['id' => '6c5ffd7e-94f1-599b-b938-7f205380e539', 'description' => 'Alótropos', 'correct_answer' => false],
                    ['id' => '852e4438-c7a3-59e9-9e3f-e10842753c3f', 'description' => 'Enantiômeros', 'correct_answer' => false]
                ]],
        ['id' => 'c0df3a01-fb07-5251-b478-5c99f56d5291', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Como são chamados nuclídeos que possuem o mesmo número de nêutrons, mas números atômicos diferentes?', 'difficulty' => 3, 'weight' => 485, 'alternatives' => [
                    ['id' => 'e124a318-6534-5a02-a1e0-a7f675d5c88a', 'description' => 'Diastereoisômeros', 'correct_answer' => false],
                    ['id' => 'ffc6af4c-afa1-5a35-8117-e41f1cb8b877', 'description' => 'Isótonos', 'correct_answer' => true],
                    ['id' => '5e88b8f0-4976-5c84-9b64-5d6b0b1964ad', 'description' => 'Isóbaros', 'correct_answer' => false],
                    ['id' => '7ea39e3d-3414-57c2-a4cd-3b2bcbed7b8d', 'description' => 'Isômeros conformacionais', 'correct_answer' => false],
                    ['id' => 'cd624d6f-df45-5be1-ab7f-251dd32cee7e', 'description' => 'Isoeletrônicos', 'correct_answer' => false]
                ]],
        ['id' => '7c60dd45-aa8e-514a-a0d4-82c89e8a16d5', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Como são chamadas espécies químicas que possuem o mesmo número de elétrons?', 'difficulty' => 3, 'weight' => 566, 'alternatives' => [
                    ['id' => 'a7ac890d-3c8d-52b4-a4b0-4b48a5879d10', 'description' => 'Isômeros conformacionais', 'correct_answer' => false],
                    ['id' => '90e75624-74bd-5f30-b516-f64eff007a72', 'description' => 'Isótonos', 'correct_answer' => false],
                    ['id' => '11111d85-89d4-5513-8383-6698e8c3b61b', 'description' => 'Alótropos', 'correct_answer' => false],
                    ['id' => 'b5637039-1683-5bcb-973a-6b73996a93e3', 'description' => 'Isômeros constitucionais', 'correct_answer' => false],
                    ['id' => '0c8670ee-a791-5054-9dce-209d3a658f19', 'description' => 'Isoeletrônicos', 'correct_answer' => true]
                ]],
        ['id' => 'c47a8568-4f1a-5428-9eb8-f3ea29111829', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Como são chamadas formas estruturais diferentes de um mesmo elemento químico no mesmo estado físico?', 'difficulty' => 3, 'weight' => 469, 'alternatives' => [
                    ['id' => '8c2e313a-2aea-50a6-8ed5-24ccca7e3b84', 'description' => 'Alótropos', 'correct_answer' => true],
                    ['id' => 'f726ecff-6440-5f8b-ad7d-59b06110ab82', 'description' => 'Polimorfos', 'correct_answer' => false],
                    ['id' => 'ce9372aa-caba-555a-887f-7d90e5b096d1', 'description' => 'Enantiômeros', 'correct_answer' => false],
                    ['id' => '002e01ac-b495-5d40-8037-99a2b8769577', 'description' => 'Isômeros conformacionais', 'correct_answer' => false],
                    ['id' => '787cad8a-4e60-5928-87cb-7957fe603d8a', 'description' => 'Isótopos', 'correct_answer' => false]
                ]],
        ['id' => '5e62310b-1fb5-54a3-91dd-dae4bf2ae20e', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual técnica separa compostos voláteis transportados por uma fase móvel gasosa através de uma coluna?', 'difficulty' => 3, 'weight' => 514, 'alternatives' => [
                    ['id' => '3c9c70ff-c39d-55f8-8049-a7b171c39327', 'description' => 'Espectroscopia infravermelha', 'correct_answer' => false],
                    ['id' => 'ad11bd7f-9d99-52b2-bdf7-be96175256f5', 'description' => 'Ressonância magnética nuclear', 'correct_answer' => false],
                    ['id' => '5b999681-161d-5294-a925-f6738b00cd2f', 'description' => 'Cromatografia em camada delgada', 'correct_answer' => false],
                    ['id' => '1b4d9a3d-8c54-57f5-8cb0-4f38f55733fd', 'description' => 'Cromatografia de troca iônica', 'correct_answer' => false],
                    ['id' => '877db200-94e4-563f-a853-824400a47ec8', 'description' => 'Cromatografia gasosa', 'correct_answer' => true]
                ]],
        ['id' => '861ece2a-5019-57c9-8008-02c549098cc9', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual técnica cromatográfica utiliza uma fase móvel líquida bombeada sob alta pressão por uma coluna?', 'difficulty' => 3, 'weight' => 577, 'alternatives' => [
                    ['id' => '5e395f9e-c8b2-58e3-b39c-9905e1dc1090', 'description' => 'Cromatografia gasosa', 'correct_answer' => false],
                    ['id' => '035d370b-2016-5742-a414-025047623dea', 'description' => 'Espectroscopia Raman', 'correct_answer' => false],
                    ['id' => 'fefdf623-d245-528e-96da-9db176675755', 'description' => 'Eletroforese capilar', 'correct_answer' => false],
                    ['id' => 'bc155979-3f90-5a7e-aa68-5618820a6c99', 'description' => 'Cromatografia por exclusão de tamanho', 'correct_answer' => false],
                    ['id' => 'f3158c8f-d072-55e7-a3b2-ac2a4751f840', 'description' => 'Cromatografia líquida de alta eficiência', 'correct_answer' => true]
                ]],
        ['id' => '169531f4-363f-5077-99b1-c3950148eac2', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual técnica separa componentes de uma mistura em uma camada fina de adsorvente sobre uma placa?', 'difficulty' => 3, 'weight' => 553, 'alternatives' => [
                    ['id' => '2a17c47f-82d3-5bc3-ab64-0837d7e54077', 'description' => 'Ressonância magnética nuclear', 'correct_answer' => false],
                    ['id' => 'f2f952a3-93cc-5633-ae6c-2ff1839bdc22', 'description' => 'Cromatografia líquida de alta eficiência', 'correct_answer' => false],
                    ['id' => '8989f358-2f3a-5ff0-815d-ad5ad979fa44', 'description' => 'Cromatografia em camada delgada', 'correct_answer' => true],
                    ['id' => '9a50f63f-0ecd-545a-90be-5449c5316bcb', 'description' => 'Espectroscopia infravermelha', 'correct_answer' => false],
                    ['id' => '04468273-3207-5821-96ea-0289066766c6', 'description' => 'Cromatografia por exclusão de tamanho', 'correct_answer' => false]
                ]],
        ['id' => '056e56ef-f80a-5cf7-9d95-69337a1989c2', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual técnica separa moléculas com base em interações eletrostáticas com grupos carregados da fase estacionária?', 'difficulty' => 3, 'weight' => 444, 'alternatives' => [
                    ['id' => '3e7c9926-b74b-58b9-b8e5-f6ba969b999c', 'description' => 'Espectroscopia infravermelha', 'correct_answer' => false],
                    ['id' => '6cbc75eb-c2cc-5051-adfe-3801dfdd62f1', 'description' => 'Cromatografia gasosa', 'correct_answer' => false],
                    ['id' => '0e53501b-eba1-5f9b-b540-709a0ffe20f2', 'description' => 'Cromatografia de troca iônica', 'correct_answer' => true],
                    ['id' => '285511e9-8bbb-5f58-9278-073dd9219dc6', 'description' => 'Ressonância magnética nuclear', 'correct_answer' => false],
                    ['id' => '33fadb4f-8b60-512f-84f6-7e900db8ecbc', 'description' => 'Eletroforese capilar', 'correct_answer' => false]
                ]],
        ['id' => '127e186e-c56e-5a6f-a248-e59ca35edc48', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual técnica separa moléculas principalmente de acordo com seu tamanho hidrodinâmico?', 'difficulty' => 3, 'weight' => 448, 'alternatives' => [
                    ['id' => 'a82522ed-bb56-547b-a717-a21dd41a9cd8', 'description' => 'Cromatografia por exclusão de tamanho', 'correct_answer' => true],
                    ['id' => '1db157d2-e692-5896-bc8e-11e931fed793', 'description' => 'Cromatografia de troca iônica', 'correct_answer' => false],
                    ['id' => '27f9e6b5-c75c-5bf3-83b3-efc958fc5e69', 'description' => 'Cromatografia em camada delgada', 'correct_answer' => false],
                    ['id' => '35c65b95-7b34-5820-a09d-09f644cb8297', 'description' => 'Espectroscopia infravermelha', 'correct_answer' => false],
                    ['id' => '4e51f55d-1923-5afa-b9c6-7a25083b6c4d', 'description' => 'Espectrometria de massas', 'correct_answer' => false]
                ]],
        ['id' => 'a158843d-e289-5ada-95c2-8367233e7d2c', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Como são chamadas as regiões em que uma placa litosférica mergulha sob outra?', 'difficulty' => 3, 'weight' => 567, 'alternatives' => [
                    ['id' => '5ca01fa6-0615-5cf1-a9ed-7a898a78e31b', 'description' => 'Placas tectônicas', 'correct_answer' => false],
                    ['id' => '962b47f4-376a-5e8d-bdf0-0bdec0386bb8', 'description' => 'Riftes continentais', 'correct_answer' => false],
                    ['id' => '28d3e42e-5d6b-55e2-806a-45ab68306592', 'description' => 'Arcos vulcânicos', 'correct_answer' => false],
                    ['id' => '60c5f4f3-261e-572f-b5e6-fe4054419148', 'description' => 'Zonas de subducção', 'correct_answer' => true],
                    ['id' => 'dc5a546f-8afc-5fd7-acc5-49c67cba27c6', 'description' => 'Bacias sedimentares', 'correct_answer' => false]
                ]],
        ['id' => '0b77f553-0bff-5063-94b0-f8a549b1cab6', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Como são chamadas as grandes cadeias submarinas onde ocorre formação de nova crosta oceânica?', 'difficulty' => 3, 'weight' => 426, 'alternatives' => [
                    ['id' => '488cb962-5890-52bd-9eb0-bc1cb19369e9', 'description' => 'Arcos vulcânicos', 'correct_answer' => false],
                    ['id' => 'd08c00fd-de52-50e9-b088-aacce25a3947', 'description' => 'Pontos quentes', 'correct_answer' => false],
                    ['id' => 'b30b22eb-be96-5718-8c24-85b452e73bb1', 'description' => 'Falhas transformantes', 'correct_answer' => false],
                    ['id' => '583e8118-fcc9-59c8-bd39-454c24ce8d3e', 'description' => 'Bacias sedimentares', 'correct_answer' => false],
                    ['id' => '71089d01-8b19-5c9b-bf55-56940c67973e', 'description' => 'Dorsais oceânicas', 'correct_answer' => true]
                ]],
        ['id' => '263d52ed-35c6-59f2-981f-f44d47819041', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Como são chamadas as depressões longas e profundas do fundo oceânico frequentemente associadas à subducção?', 'difficulty' => 3, 'weight' => 581, 'alternatives' => [
                    ['id' => '4e5fcd48-8af0-50fe-9d21-b16714407b6a', 'description' => 'Dorsais oceânicas', 'correct_answer' => false],
                    ['id' => 'd4841e85-8938-572c-96e6-a130c9797667', 'description' => 'Arcos vulcânicos', 'correct_answer' => false],
                    ['id' => '172802b8-1da5-5311-972e-20f64d5bda48', 'description' => 'Riftes continentais', 'correct_answer' => false],
                    ['id' => 'e5d1faec-5b69-54dd-87ca-caea4a8e35a4', 'description' => 'Fossas oceânicas', 'correct_answer' => true],
                    ['id' => 'ad7b7af3-50d0-5b7c-8c1f-80402f198177', 'description' => 'Placas tectônicas', 'correct_answer' => false]
                ]],
        ['id' => 'a5c48019-9092-5b90-9868-0010d54ebc3c', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Como são chamados locais de vulcanismo intraplaca associados a plumas mantélicas relativamente estacionárias?', 'difficulty' => 3, 'weight' => 416, 'alternatives' => [
                    ['id' => '1527a91e-146a-57c0-99fd-36ce868b9f36', 'description' => 'Dorsais oceânicas', 'correct_answer' => false],
                    ['id' => 'afb8a894-2fe2-565c-ad11-027581cef5cb', 'description' => 'Bacias sedimentares', 'correct_answer' => false],
                    ['id' => 'af460a54-1ddd-5dbe-97a4-843d4978860c', 'description' => 'Pontos quentes', 'correct_answer' => true],
                    ['id' => '2739f9e4-e66c-5b9c-b3ca-364b1531ae0d', 'description' => 'Placas tectônicas', 'correct_answer' => false],
                    ['id' => 'ff802adc-8041-51e7-b2c3-0677cbbe813c', 'description' => 'Zonas de subducção', 'correct_answer' => false]
                ]],
        ['id' => 'bc242e73-e637-56be-b682-f40594231162', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Como são chamadas regiões alongadas onde a litosfera continental está sendo distendida e afinada?', 'difficulty' => 3, 'weight' => 411, 'alternatives' => [
                    ['id' => '6817a790-a1e6-556d-bdd3-3491e931472f', 'description' => 'Cinturões orogênicos', 'correct_answer' => false],
                    ['id' => 'f524a42b-3a1b-580e-8bc9-dda01a4e5dfe', 'description' => 'Arcos vulcânicos', 'correct_answer' => false],
                    ['id' => 'db07c4a4-3d89-50e5-81e4-0dc63fda68f8', 'description' => 'Dorsais oceânicas', 'correct_answer' => false],
                    ['id' => 'acafebcd-c287-51ca-9fe9-e66070d3f584', 'description' => 'Riftes continentais', 'correct_answer' => true],
                    ['id' => 'b9efe01d-c784-5916-ad59-bd0a6ebc9b17', 'description' => 'Bacias sedimentares', 'correct_answer' => false]
                ]],
        ['id' => 'c02e2958-1c48-58b2-82dc-89355a6662f6', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual classe de estrelas variáveis possui uma relação período-luminosidade usada para medir distâncias extragalácticas?', 'difficulty' => 3, 'weight' => 460, 'alternatives' => [
                    ['id' => 'b066f659-9751-5815-bce2-ad4c1f7dace0', 'description' => 'Cefeida', 'correct_answer' => true],
                    ['id' => 'f9526d3d-d012-5a5c-b733-5ccbd43089be', 'description' => 'Variável cataclísmica', 'correct_answer' => false],
                    ['id' => 'b4406dda-e6e4-5834-bc74-56ebdce604ff', 'description' => 'Estrela T Tauri', 'correct_answer' => false],
                    ['id' => 'f9e03835-fcc1-5dee-9bb2-69ace96b8471', 'description' => 'Variável RR Lyrae', 'correct_answer' => false],
                    ['id' => 'd67e0a00-331a-5571-a124-931f7170613a', 'description' => 'Nova', 'correct_answer' => false]
                ]],
        ['id' => '10fa27c4-fe3e-56e3-a883-c852d809fe37', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual classe de estrelas pulsantes é usada como indicador de distância em populações estelares antigas?', 'difficulty' => 3, 'weight' => 449, 'alternatives' => [
                    ['id' => '23eeca7c-f274-5d69-be3e-ca2995cb2710', 'description' => 'Supernova tipo II', 'correct_answer' => false],
                    ['id' => 'a288cd45-98f8-5e16-971c-b08710472f2b', 'description' => 'Binária eclipsante', 'correct_answer' => false],
                    ['id' => '25be3e65-aab2-5e43-b1c3-30d1f6f46611', 'description' => 'Variável RR Lyrae', 'correct_answer' => true],
                    ['id' => 'ec88b1ea-be60-5471-b222-eec3f7659295', 'description' => 'Estrela T Tauri', 'correct_answer' => false],
                    ['id' => '04c7285a-e417-5a37-b6a8-a17789571f8a', 'description' => 'Nova', 'correct_answer' => false]
                ]],
        ['id' => '49c54ea8-c0fa-53cd-b4a1-73f29045d28b', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual classe de gigantes vermelhas apresenta grandes amplitudes de variação de brilho e períodos longos?', 'difficulty' => 3, 'weight' => 588, 'alternatives' => [
                    ['id' => 'b108902c-2dbd-58f1-a774-0eec0c9920c7', 'description' => 'Cefeida', 'correct_answer' => false],
                    ['id' => '124aec53-cc2b-5357-86fd-81e0a9b1041c', 'description' => 'Estrela T Tauri', 'correct_answer' => false],
                    ['id' => '8aadcbda-56e9-5e82-99c6-c6749ce5e924', 'description' => 'Variável Mira', 'correct_answer' => true],
                    ['id' => '7064bbf3-252d-58d2-8f0f-555bdef6412a', 'description' => 'Nova', 'correct_answer' => false],
                    ['id' => '734dada0-efda-54cd-baeb-1c25b6028eba', 'description' => 'Supernova tipo Ia', 'correct_answer' => false]
                ]],
        ['id' => '5c62485f-c751-5ad4-a221-7e031a85fa96', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual tipo de supernova é associado à explosão termonuclear de uma anã branca e serve como vela padrão cosmológica?', 'difficulty' => 3, 'weight' => 516, 'alternatives' => [
                    ['id' => '02e79835-f5dd-5837-91c1-71f2a281d5fa', 'description' => 'Variável cataclísmica', 'correct_answer' => false],
                    ['id' => '7d163cf0-3f30-5339-8ce3-b30e441fe96a', 'description' => 'Variável Mira', 'correct_answer' => false],
                    ['id' => '5ea406a4-bf82-5261-9bb1-dae4abefd0a9', 'description' => 'Cefeida', 'correct_answer' => false],
                    ['id' => '81f6e5f7-1334-5372-9931-538c99d1b599', 'description' => 'Supernova tipo Ia', 'correct_answer' => true],
                    ['id' => '25573846-52a3-53d3-99e2-231735713a85', 'description' => 'Variável Delta Scuti', 'correct_answer' => false]
                ]],
        ['id' => 'e124c242-4e83-565d-946b-1e4f98c5fc03', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual sistema estelar apresenta variações periódicas de brilho porque uma estrela passa diante da outra em relação ao observador?', 'difficulty' => 3, 'weight' => 539, 'alternatives' => [
                    ['id' => 'df76fd7d-0a03-5eed-ae97-1ec225f70249', 'description' => 'Nova', 'correct_answer' => false],
                    ['id' => '97b642f0-37c7-5686-9d9b-cf9269a03872', 'description' => 'Supernova tipo Ia', 'correct_answer' => false],
                    ['id' => 'f0d67b31-143c-5ab0-a221-0873970ef80c', 'description' => 'Estrela T Tauri', 'correct_answer' => false],
                    ['id' => 'ac5145a3-012e-5901-a9b9-de2acbcf849a', 'description' => 'Binária eclipsante', 'correct_answer' => true],
                    ['id' => '3f8774c0-8fa0-5bc4-b48c-39612f4802bb', 'description' => 'Variável RR Lyrae', 'correct_answer' => false]
                ]],
        ['id' => '9c39c8d6-7148-585e-a9d1-0fc4a08d9d02', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual sistema de regulação gênica bacteriano é induzido por lactose ou alolactose e controla genes de seu metabolismo?', 'difficulty' => 3, 'weight' => 434, 'alternatives' => [
                    ['id' => 'dfa62fa6-6f1f-5bba-86d9-bdcbefe3f91e', 'description' => 'Operon ara', 'correct_answer' => false],
                    ['id' => '8cc8a8ae-198f-5e58-a06b-9881fe7fd9fc', 'description' => 'Operon lac', 'correct_answer' => true],
                    ['id' => 'd8c84850-920d-5233-a2b9-59ddc2f2e23d', 'description' => 'Operon trp', 'correct_answer' => false],
                    ['id' => 'faed24f6-a8cd-5e69-92e7-d0d7d6de00bc', 'description' => 'Operon mal', 'correct_answer' => false],
                    ['id' => 'db6e3cc1-6c22-5c07-bd2a-d5373b9d9825', 'description' => 'Operon xyl', 'correct_answer' => false]
                ]],
        ['id' => 'be01a72f-2b3e-5a93-b4f3-d6a199da18b1', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual operon bacteriano é reprimido quando há abundância de triptofano?', 'difficulty' => 3, 'weight' => 499, 'alternatives' => [
                    ['id' => 'd15b2cd1-e868-5087-a382-03b9708aef91', 'description' => 'Operon arg', 'correct_answer' => false],
                    ['id' => 'b0bd0f57-a8ae-59d6-bda4-109a89a4a17a', 'description' => 'Operon xyl', 'correct_answer' => false],
                    ['id' => 'de5a4f58-ba8d-5df9-bdde-c9de0cc9d2a1', 'description' => 'Operon gal', 'correct_answer' => false],
                    ['id' => '90ba50f3-ab5a-5d65-88d8-fd4eb4bf1225', 'description' => 'Operon trp', 'correct_answer' => true],
                    ['id' => 'e0cb16a0-ca12-5d9b-b4bd-b0bf776cacf3', 'description' => 'Operon ara', 'correct_answer' => false]
                ]],
        ['id' => '57502247-9623-514c-a6f0-7439f95aa9fb', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual operon de Escherichia coli regula genes envolvidos no metabolismo da arabinose?', 'difficulty' => 3, 'weight' => 475, 'alternatives' => [
                    ['id' => 'ac7aced4-5d30-50f4-82e6-5c8c90b38fb8', 'description' => 'Operon pur', 'correct_answer' => false],
                    ['id' => '1cce4d8a-75d5-5a28-a4dc-5428e016c910', 'description' => 'Operon trp', 'correct_answer' => false],
                    ['id' => 'bbf3e1da-10f7-528b-b83e-4a29509df4dd', 'description' => 'Operon his', 'correct_answer' => false],
                    ['id' => '7b52bd2c-f875-5ff3-8e9f-e0b0fd5a18d9', 'description' => 'Operon ara', 'correct_answer' => true],
                    ['id' => '1628bbc8-34ef-5b09-b6eb-1b34bacccfc8', 'description' => 'Operon mal', 'correct_answer' => false]
                ]],
        ['id' => 'b89bf12c-6b1d-5b26-8d18-374af8c7cbe8', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual sistema de genes bacterianos está relacionado ao metabolismo da galactose?', 'difficulty' => 3, 'weight' => 575, 'alternatives' => [
                    ['id' => '0851ff36-72d9-507c-b832-7ba57b13d0ab', 'description' => 'Operon xyl', 'correct_answer' => false],
                    ['id' => 'b1d8cc0c-2064-5a5d-b620-0b7a4a81b7d9', 'description' => 'Operon mal', 'correct_answer' => false],
                    ['id' => '37e28bec-d799-5983-9b00-864cfe97fa44', 'description' => 'Operon gal', 'correct_answer' => true],
                    ['id' => 'c107fa9a-86ae-5193-acab-60b9ae082a29', 'description' => 'Operon lac', 'correct_answer' => false],
                    ['id' => '4f03248d-8b7a-5559-9fd9-f5672e28eb90', 'description' => 'Operon his', 'correct_answer' => false]
                ]],
        ['id' => '4c341f8c-2582-5242-b11c-1cf5768e408b', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual operon bacteriano regula a biossíntese do aminoácido histidina?', 'difficulty' => 3, 'weight' => 509, 'alternatives' => [
                    ['id' => '21d385ef-91cd-5356-b84b-22f272a8a9db', 'description' => 'Operon his', 'correct_answer' => true],
                    ['id' => '935f4318-0a9d-53a7-ae81-14554dcb78d0', 'description' => 'Operon pur', 'correct_answer' => false],
                    ['id' => 'a416c8de-dd53-5af4-823e-024976917236', 'description' => 'Operon deo', 'correct_answer' => false],
                    ['id' => 'edc8a27d-91c7-575b-ace1-dc5bfe48334e', 'description' => 'Operon xyl', 'correct_answer' => false],
                    ['id' => '617ade82-e184-51bc-a15d-ec0dfb58721a', 'description' => 'Operon arg', 'correct_answer' => false]
                ]],
        ['id' => '561f19aa-4a1c-5818-8dc3-db65ff73cd9b', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual tipo de radiação ionizante consiste em núcleos de hélio, com dois prótons e dois nêutrons?', 'difficulty' => 3, 'weight' => 510, 'alternatives' => [
                    ['id' => '252f00b1-5863-5331-be99-574251916490', 'description' => 'Radiação alfa', 'correct_answer' => true],
                    ['id' => 'eccaf48d-74ad-5184-979f-9761de2b0313', 'description' => 'Pósitrons', 'correct_answer' => false],
                    ['id' => 'b473f3bb-6f2d-5ef1-bd9a-e7b13b8abaf1', 'description' => 'Radiação ultravioleta', 'correct_answer' => false],
                    ['id' => '85177b14-717e-5cbc-ae54-71c91db8580d', 'description' => 'Raios X', 'correct_answer' => false],
                    ['id' => 'e4992271-8b45-59f0-9673-0e6c219f6257', 'description' => 'Radiação beta', 'correct_answer' => false]
                ]],
        ['id' => '17891875-78ba-5cb2-9d3d-d946b46c742a', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual tipo de radiação nuclear envolve a emissão de elétrons ou pósitrons em processos de decaimento?', 'difficulty' => 3, 'weight' => 572, 'alternatives' => [
                    ['id' => 'b634d487-1168-53aa-aa7e-551c1a2ffb97', 'description' => 'Radiação beta', 'correct_answer' => true],
                    ['id' => 'c0d84a32-dc7b-5317-8d7b-a551c539ad75', 'description' => 'Raios X', 'correct_answer' => false],
                    ['id' => 'cfafb9ca-2f14-57a9-ac95-684f5cb78afa', 'description' => 'Nêutrons', 'correct_answer' => false],
                    ['id' => '631c5dfe-3ebc-5e3d-ba6f-348eebaaa143', 'description' => 'Radiação alfa', 'correct_answer' => false],
                    ['id' => 'b44a9483-f166-510e-aa2a-1defa925d0df', 'description' => 'Radiação gama', 'correct_answer' => false]
                ]],
        ['id' => '70459c87-b369-5c59-8490-1c735db6bb3f', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual radiação eletromagnética é emitida em transições nucleares e possui alta energia?', 'difficulty' => 3, 'weight' => 412, 'alternatives' => [
                    ['id' => 'd108cb33-fa98-5b40-9064-531dfb979467', 'description' => 'Radiação gama', 'correct_answer' => true],
                    ['id' => '69327178-a756-5ceb-bb3f-de6b106bef0a', 'description' => 'Raios X', 'correct_answer' => false],
                    ['id' => 'bf7a6bcb-86dc-578f-a7cc-a66fa66c8b42', 'description' => 'Raios cósmicos', 'correct_answer' => false],
                    ['id' => 'c0458613-a852-5d00-86fc-60abfc4e49ad', 'description' => 'Elétrons Auger', 'correct_answer' => false],
                    ['id' => '29f60bc1-b39e-5e70-84a3-03b0716be8ba', 'description' => 'Pósitrons', 'correct_answer' => false]
                ]],
        ['id' => 'ddb361f9-65e3-5b8d-8cff-e84ba95fba51', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual radiação eletromagnética é frequentemente produzida pela desaceleração de elétrons ou por transições eletrônicas internas?', 'difficulty' => 3, 'weight' => 421, 'alternatives' => [
                    ['id' => '4f1a5636-6a75-5ef6-af1c-fb103c56d105', 'description' => 'Radiação gama', 'correct_answer' => false],
                    ['id' => '0033d17c-75b7-5375-b8b9-163e7cbfa590', 'description' => 'Radiação beta', 'correct_answer' => false],
                    ['id' => '9919e133-c3a5-5965-8de9-35cba1c53937', 'description' => 'Raios X', 'correct_answer' => true],
                    ['id' => '91c085fb-c6cf-591b-b80a-4555a95e16b3', 'description' => 'Radiação infravermelha', 'correct_answer' => false],
                    ['id' => '7a69fe1f-de47-5722-b79f-41b4e53e1545', 'description' => 'Elétrons Auger', 'correct_answer' => false]
                ]],
        ['id' => '2672a7e9-8754-5c0f-80c9-282a0b528c2a', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual emissão eletrônica ocorre quando a energia de uma transição atômica é transferida a outro elétron, em vez de ser emitida como fóton?', 'difficulty' => 3, 'weight' => 548, 'alternatives' => [
                    ['id' => '43318d64-e9b3-5289-9592-5d50a8316f18', 'description' => 'Nêutrons', 'correct_answer' => false],
                    ['id' => 'c5c9ea1e-9740-5649-a778-52440653241f', 'description' => 'Radiação ultravioleta', 'correct_answer' => false],
                    ['id' => '4d006bbc-c79e-5e54-8404-8ac731b22170', 'description' => 'Raios cósmicos', 'correct_answer' => false],
                    ['id' => '7d1d33df-767b-580e-979e-9f118730d6f7', 'description' => 'Radiação infravermelha', 'correct_answer' => false],
                    ['id' => 'e87a598f-9d74-57d6-b39e-8f5a4216b0c0', 'description' => 'Elétrons Auger', 'correct_answer' => true]
                ]],
        ['id' => '6840a96f-6392-5f68-a09f-9e0b10c2cb3d', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual equação não relativística descreve a evolução temporal do estado quântico de um sistema?', 'difficulty' => 4, 'weight' => 611, 'alternatives' => [
                    ['id' => '13acc613-1edf-5a5d-91cb-08e7b9ae59b5', 'description' => 'Equação de Heisenberg', 'correct_answer' => false],
                    ['id' => '46ce6790-a088-533f-bf22-26a6c6950791', 'description' => 'Equação de Schrödinger', 'correct_answer' => true],
                    ['id' => 'a920e28f-8798-5d55-a303-1d198146c159', 'description' => 'Equação de Pauli', 'correct_answer' => false],
                    ['id' => 'dddf57c6-63a5-5032-8539-f8f50be7ad1b', 'description' => 'Equação de Hamilton-Jacobi', 'correct_answer' => false],
                    ['id' => '5aa04116-a6e6-5c83-91bc-961d1dc428b2', 'description' => 'Equação de Klein-Gordon', 'correct_answer' => false]
                ]],
        ['id' => '3f52f1f9-d1fe-5138-8eb1-0e8e2eaa603d', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual equação relativística de onda para férmions de spin 1/2 incorporou naturalmente a antimatéria?', 'difficulty' => 4, 'weight' => 615, 'alternatives' => [
                    ['id' => 'c2d5471f-4a02-50c8-8a6a-e774044339ff', 'description' => 'Equação de Schrödinger', 'correct_answer' => false],
                    ['id' => '7a8f7025-5c25-51b6-8e22-249ed4d40af1', 'description' => 'Equação de Fokker-Planck', 'correct_answer' => false],
                    ['id' => '1bbeb51e-1e8a-5bf2-90c1-69fd7194f572', 'description' => 'Equação de Dirac', 'correct_answer' => true],
                    ['id' => 'b7fdd213-07a8-5721-af93-1ce58494ec99', 'description' => 'Equação de Hamilton-Jacobi', 'correct_answer' => false],
                    ['id' => '222f8a53-579f-59f1-bad4-256258d81746', 'description' => 'Equação de Klein-Gordon', 'correct_answer' => false]
                ]],
        ['id' => 'ab5f22b7-6c34-5069-96d1-c5edb187663b', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual equação relativística de segunda ordem é usada para campos escalares de spin zero?', 'difficulty' => 4, 'weight' => 787, 'alternatives' => [
                    ['id' => '7348f4e6-10c9-51e3-8ab8-c8336fe18f15', 'description' => 'Equação de Bethe-Salpeter', 'correct_answer' => false],
                    ['id' => 'b10dbb80-e3a3-5acb-8eff-ae24acb1a4de', 'description' => 'Equação de Schrödinger', 'correct_answer' => false],
                    ['id' => 'cb44fa79-3469-5b24-8ad8-1f22a8c30d1c', 'description' => 'Equação de Proca', 'correct_answer' => false],
                    ['id' => '422ad00f-54b3-50c1-875e-264714fc1869', 'description' => 'Equação de Klein-Gordon', 'correct_answer' => true],
                    ['id' => '0f88a1b2-f7d6-54ec-8fcc-c14abbf15d6e', 'description' => 'Equação de Hamilton-Jacobi', 'correct_answer' => false]
                ]],
        ['id' => 'eae620d5-fc19-5f84-91a2-28c58929bc37', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual equação não relativística descreve uma partícula de spin 1/2 em um campo eletromagnético incluindo o acoplamento magnético?', 'difficulty' => 4, 'weight' => 637, 'alternatives' => [
                    ['id' => 'dc0008d4-9b54-56a3-a26e-8d44368d9669', 'description' => 'Equação de Dirac', 'correct_answer' => false],
                    ['id' => 'b6ca155c-d831-5378-98d7-8bcaada7d970', 'description' => 'Equação de Pauli', 'correct_answer' => true],
                    ['id' => '098920ff-bbae-5856-9bcf-5cb9cb005e0b', 'description' => 'Equação de Hamilton-Jacobi', 'correct_answer' => false],
                    ['id' => 'c856e20d-b924-50bb-9dea-5b5f1787863b', 'description' => 'Equação de Schrödinger', 'correct_answer' => false],
                    ['id' => '02888965-d567-5cc4-a005-cdb048742824', 'description' => 'Equação de Weyl', 'correct_answer' => false]
                ]],
        ['id' => '7873417c-8c08-5a95-abf2-c167cdc4a487', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual equação descreve a evolução temporal de uma distribuição de probabilidade para processos estocásticos?', 'difficulty' => 4, 'weight' => 629, 'alternatives' => [
                    ['id' => '34949099-107f-562d-b7d3-cddce1c98828', 'description' => 'Equação de Fokker-Planck', 'correct_answer' => true],
                    ['id' => '7ec437fb-92be-5e9c-9995-314a693a88af', 'description' => 'Equação de Klein-Gordon', 'correct_answer' => false],
                    ['id' => '8a503dcd-a6ad-5a6b-a747-d01089810025', 'description' => 'Equação de Dirac', 'correct_answer' => false],
                    ['id' => '6ceeadf0-eda4-5578-a33a-ff2662da572d', 'description' => 'Equação de Bethe-Salpeter', 'correct_answer' => false],
                    ['id' => 'c654aaac-ead2-53f9-93b2-a4c9bd70b764', 'description' => 'Equação de Hamilton-Jacobi', 'correct_answer' => false]
                ]],
        ['id' => '0d156043-d15d-5146-8437-15e694d7ce8e', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual teorema associa simetrias contínuas de uma ação a leis de conservação?', 'difficulty' => 4, 'weight' => 611, 'alternatives' => [
                    ['id' => 'b8e6a226-5011-5bdf-b3fd-a7b4402dfb69', 'description' => 'Teorema de Green', 'correct_answer' => false],
                    ['id' => 'fc2c565f-f02b-596f-831b-6684a220421c', 'description' => 'Teorema de Noether', 'correct_answer' => true],
                    ['id' => '568c6b85-93e1-57de-bffd-f4de502cec2b', 'description' => 'Teorema da divergência', 'correct_answer' => false],
                    ['id' => 'fcc4b671-c4d6-5175-8c2d-9c7c44df8110', 'description' => 'Teorema de Rolle', 'correct_answer' => false],
                    ['id' => 'a75dd0ef-cb36-5cfc-9e2a-710a534cf4c7', 'description' => 'Teorema de Hahn-Banach', 'correct_answer' => false]
                ]],
        ['id' => '919beeca-3d49-5e31-9ee7-c0bb9e523a84', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual teorema da mecânica hamiltoniana afirma que o fluxo no espaço de fases preserva o volume?', 'difficulty' => 4, 'weight' => 602, 'alternatives' => [
                    ['id' => '504e5343-214b-5f1e-abcd-5497622b5f24', 'description' => 'Teorema de Cayley-Hamilton', 'correct_answer' => false],
                    ['id' => '1ba57c1d-e49a-595f-82bc-c1c7a3eb8336', 'description' => 'Teorema de Green', 'correct_answer' => false],
                    ['id' => '73ad0b03-8e98-52a3-9531-5fd2e6806255', 'description' => 'Teorema de Rolle', 'correct_answer' => false],
                    ['id' => '486dfecd-2331-5271-9aee-7f5f2784e303', 'description' => 'Teorema de Liouville', 'correct_answer' => true],
                    ['id' => '95fe93e5-c979-54b9-a084-eb8c59480f4f', 'description' => 'Teorema da divergência', 'correct_answer' => false]
                ]],
        ['id' => '550c98af-e210-5c8e-b95b-98e06fcfd596', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual teorema relaciona a integral de linha de um campo ao fluxo de seu rotacional através de uma superfície?', 'difficulty' => 4, 'weight' => 709, 'alternatives' => [
                    ['id' => '31d03b7b-aa9e-5564-8118-7cf4921b3c39', 'description' => 'Teorema de Green', 'correct_answer' => false],
                    ['id' => '4ad72b25-3494-5317-a9f3-bededafbb8ec', 'description' => 'Teorema de Hahn-Banach', 'correct_answer' => false],
                    ['id' => '28e510bd-2f8e-52b5-af30-b5de5db600e4', 'description' => 'Teorema de Stokes', 'correct_answer' => true],
                    ['id' => '320dde82-110c-536f-a85f-a79efa195189', 'description' => 'Teorema de Rolle', 'correct_answer' => false],
                    ['id' => '7a146005-8205-55da-8590-bfdc8c55aa9b', 'description' => 'Teorema de Cayley-Hamilton', 'correct_answer' => false]
                ]],
        ['id' => 'fd16137f-91a2-53eb-b00f-50d3c9ee5b0a', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual teorema relaciona o fluxo de um campo vetorial pela superfície fechada à integral de sua divergência no volume?', 'difficulty' => 4, 'weight' => 693, 'alternatives' => [
                    ['id' => '1b2b6716-f1d7-5b93-9810-0b410bb2d975', 'description' => 'Teorema de Liouville', 'correct_answer' => false],
                    ['id' => 'd9423b8c-425b-507d-b313-41782b1fc1fb', 'description' => 'Teorema de Green', 'correct_answer' => false],
                    ['id' => '27f0cefa-8915-5968-82ba-48ee9e631227', 'description' => 'Teorema espectral', 'correct_answer' => false],
                    ['id' => '8580b5bb-f827-5645-bceb-a45513c08bc2', 'description' => 'Teorema da divergência', 'correct_answer' => true],
                    ['id' => 'a137a6ae-f8ca-5424-879c-749e38d124e2', 'description' => 'Teorema de Rolle', 'correct_answer' => false]
                ]],
        ['id' => 'baec75e4-bc29-599a-83a2-675634a51421', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual teorema caracteriza a diagonalização de operadores normais em espaços de Hilbert sob condições apropriadas?', 'difficulty' => 4, 'weight' => 720, 'alternatives' => [
                    ['id' => '98521c4f-a182-5923-ba82-631432164602', 'description' => 'Teorema de Hahn-Banach', 'correct_answer' => false],
                    ['id' => '0d86412a-1557-5a75-915b-4cca191442a0', 'description' => 'Teorema de Cayley-Hamilton', 'correct_answer' => false],
                    ['id' => '0b1a9383-be7f-5727-8b31-bdf4509fc769', 'description' => 'Teorema de Stokes', 'correct_answer' => false],
                    ['id' => '8f350f3d-eacf-5234-9186-76a00d02b05e', 'description' => 'Teorema da divergência', 'correct_answer' => false],
                    ['id' => 'b1db8ac7-afd7-554b-9b4a-fdb3133ef8fa', 'description' => 'Teorema espectral', 'correct_answer' => true]
                ]],
        ['id' => '6ce950ab-148a-5691-8d8a-e56c6537e6c6', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual fenômeno permite a emissão e absorção ressonantes de raios gama sem recuo apreciável do núcleo em um sólido?', 'difficulty' => 4, 'weight' => 684, 'alternatives' => [
                    ['id' => '14499ebb-57cc-5bb1-b75c-18da9f0e0ca5', 'description' => 'Efeito Casimir dinâmico', 'correct_answer' => false],
                    ['id' => '2062f62d-62f3-5fdb-9201-8f536a33955b', 'description' => 'Efeito Kerr', 'correct_answer' => false],
                    ['id' => 'dcc5a92b-38b4-5ce4-b869-30713c94fd27', 'description' => 'Efeito Hanle', 'correct_answer' => false],
                    ['id' => '845f845e-5239-5054-ba93-aeb59e41f867', 'description' => 'Efeito Mössbauer', 'correct_answer' => true],
                    ['id' => 'bbc0ed8d-bc6b-5e95-92b6-546c14f660c6', 'description' => 'Efeito Faraday', 'correct_answer' => false]
                ]],
        ['id' => 'c4f2f646-b664-5011-bb6f-677d15e6b6d7', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual pequena diferença de energia entre níveis do hidrogênio não prevista pela equação de Dirac para o átomo ideal é explicada pela eletrodinâmica quântica?', 'difficulty' => 4, 'weight' => 765, 'alternatives' => [
                    ['id' => 'e4ddf66a-4c91-5b36-bf6f-becfad23256b', 'description' => 'Efeito Faraday', 'correct_answer' => false],
                    ['id' => 'f8949497-e706-59fc-b2b0-2c246edf7493', 'description' => 'Efeito Kerr', 'correct_answer' => false],
                    ['id' => '97f175c7-f4eb-5a8a-ad79-e12969f737e2', 'description' => 'Efeito Stark quadrático', 'correct_answer' => false],
                    ['id' => '0a84a9b1-4570-555d-ad94-3e5de4b7d127', 'description' => 'Efeito Lamb', 'correct_answer' => true],
                    ['id' => '9d35f9ad-f94c-5ef6-ba42-e39feee0297f', 'description' => 'Efeito Hanle', 'correct_answer' => false]
                ]],
        ['id' => 'f1856b97-b374-55dc-ab89-025b55e6f63f', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual efeito quântico demonstra que potenciais eletromagnéticos podem afetar a fase de uma função de onda mesmo em regiões com campo magnético nulo?', 'difficulty' => 4, 'weight' => 768, 'alternatives' => [
                    ['id' => 'f93eb01b-c6e8-5e9b-9f36-78749bc7f827', 'description' => 'Efeito Aharonov-Bohm', 'correct_answer' => true],
                    ['id' => 'c3d943a4-7fab-54ba-9448-0c1ab0860ef9', 'description' => 'Efeito Mössbauer', 'correct_answer' => false],
                    ['id' => 'bdba7838-3b76-559a-844c-e4b3fb8b27e8', 'description' => 'Efeito Kerr', 'correct_answer' => false],
                    ['id' => '55e5e225-a775-5245-bb18-b8d5ccde6e1c', 'description' => 'Efeito Lamb', 'correct_answer' => false],
                    ['id' => 'd5b2b27e-3ccc-5ce9-a871-23f54187c0af', 'description' => 'Efeito Hanle', 'correct_answer' => false]
                ]],
        ['id' => '267be888-1356-5274-b283-6b51af8673ba', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual efeito descreve a alteração da polarização da fluorescência atômica por um campo magnético transversal?', 'difficulty' => 4, 'weight' => 790, 'alternatives' => [
                    ['id' => 'b95eabd7-fafb-5c6b-a3bf-b396ce7141f4', 'description' => 'Efeito Lamb', 'correct_answer' => false],
                    ['id' => 'e09f63d2-6538-597b-8501-d78567895468', 'description' => 'Efeito Hanle', 'correct_answer' => true],
                    ['id' => 'ccad5894-647e-5c56-8a90-eaccc36baef2', 'description' => 'Efeito Faraday', 'correct_answer' => false],
                    ['id' => '24806140-0918-5a03-b013-33575c0fd9d0', 'description' => 'Efeito Casimir dinâmico', 'correct_answer' => false],
                    ['id' => 'da924833-9d80-54a5-8baf-9746a960dd2a', 'description' => 'Efeito Stark quadrático', 'correct_answer' => false]
                ]],
        ['id' => '9c62033b-2833-5193-9316-66f25f3fc6dd', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual regime de desdobramento espectral ocorre quando um campo magnético suficientemente forte desacopla momento orbital e spin?', 'difficulty' => 4, 'weight' => 752, 'alternatives' => [
                    ['id' => '91d9605c-7ef0-503f-852b-42ed65a85740', 'description' => 'Efeito Faraday', 'correct_answer' => false],
                    ['id' => '781e2101-d86e-5190-911c-15dd980250ee', 'description' => 'Efeito Stark quadrático', 'correct_answer' => false],
                    ['id' => '08df429e-825d-57a1-99b4-58e018626b01', 'description' => 'Efeito Paschen-Back', 'correct_answer' => true],
                    ['id' => 'e47febd5-93e1-56c7-874a-0370d1cf9b72', 'description' => 'Efeito Kerr', 'correct_answer' => false],
                    ['id' => '29098ec7-cb79-5571-a210-cbd6253387b8', 'description' => 'Efeito Zeeman anômalo', 'correct_answer' => false]
                ]],
        ['id' => '8e33775f-c9cc-593a-95f5-383d406a937b', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual relação termodinâmica descreve a inclinação da curva de coexistência entre fases em um diagrama pressão-temperatura?', 'difficulty' => 4, 'weight' => 638, 'alternatives' => [
                    ['id' => '9640e28d-a53a-5bfc-b24f-217d5719b343', 'description' => 'Equação de Clausius-Clapeyron', 'correct_answer' => true],
                    ['id' => 'd70bc9fa-238c-51d4-a65d-5a5119bdcd18', 'description' => 'Equação de Peng-Robinson', 'correct_answer' => false],
                    ['id' => '7d35a170-6762-51c1-a2f8-792ed90d3eee', 'description' => 'Equação de Antoine', 'correct_answer' => false],
                    ['id' => 'efae266a-4408-57df-82df-74dcebb00031', 'description' => 'Equação de Redlich-Kwong', 'correct_answer' => false],
                    ['id' => 'd8e71ed6-0c76-5561-af7a-6d254374edf3', 'description' => 'Equação de Eyring', 'correct_answer' => false]
                ]],
        ['id' => 'e9c789bf-0d72-5ca7-bc98-0b30333de351', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual equação de estado incorpora correções para volume molecular e forças intermoleculares em gases reais?', 'difficulty' => 4, 'weight' => 696, 'alternatives' => [
                    ['id' => 'b1b506cb-2b01-50d7-b065-ee01736e0c46', 'description' => 'Equação de Gibbs-Duhem', 'correct_answer' => false],
                    ['id' => '98d341a0-e2f7-5fc5-a0f9-1430b3e63378', 'description' => 'Equação de van der Waals', 'correct_answer' => true],
                    ['id' => 'cc3e3040-bf71-52b0-b2ef-a97b649c5172', 'description' => 'Equação de Peng-Robinson', 'correct_answer' => false],
                    ['id' => '406abca3-31f5-51cd-a54b-214ffe709bf7', 'description' => 'Equação de Arrhenius', 'correct_answer' => false],
                    ['id' => '5ef8c82b-dd3b-5177-9d58-6286625319d9', 'description' => 'Equação de Eyring', 'correct_answer' => false]
                ]],
        ['id' => '2316d614-12b1-5d5f-a7c7-de186e881087', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual equação cúbica de estado é amplamente utilizada em engenharia química para equilíbrio de fases de fluidos?', 'difficulty' => 4, 'weight' => 786, 'alternatives' => [
                    ['id' => 'b1f8be07-2b1d-564d-828c-b55593a7cfda', 'description' => 'Equação de Clausius-Clapeyron', 'correct_answer' => false],
                    ['id' => '7f590a08-db45-54f7-bb67-c2d882569369', 'description' => 'Equação de Peng-Robinson', 'correct_answer' => true],
                    ['id' => '16d16e71-2448-54b7-8678-4f279c81df08', 'description' => 'Equação de Antoine', 'correct_answer' => false],
                    ['id' => '8f56e10e-2669-5411-9f36-5002d5349eb1', 'description' => 'Equação de van der Waals', 'correct_answer' => false],
                    ['id' => '9d6cff6d-58b2-58aa-ae73-db2223bb07a0', 'description' => 'Equação de Debye-Hückel', 'correct_answer' => false]
                ]],
        ['id' => '28a68d8a-835c-5e8b-afac-ab357bdb6f3c', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual equação empírica é usada para estimar a pressão de vapor de uma substância em função da temperatura?', 'difficulty' => 4, 'weight' => 679, 'alternatives' => [
                    ['id' => '4ac7cd64-933b-5796-969b-a590ff7de32d', 'description' => 'Equação de Gibbs-Duhem', 'correct_answer' => false],
                    ['id' => '72b94e6f-5feb-53d2-9e5f-206fe6ec9466', 'description' => 'Equação de Arrhenius', 'correct_answer' => false],
                    ['id' => '1e589e54-58fe-5486-8766-b2e334e1c2ba', 'description' => 'Equação de Nernst', 'correct_answer' => false],
                    ['id' => '853e75a9-1d81-5525-8678-fea5fe45d4fc', 'description' => 'Equação de Antoine', 'correct_answer' => true],
                    ['id' => '90f994b0-5b5d-50bb-a09a-75e4c66fc14c', 'description' => 'Equação de Eyring', 'correct_answer' => false]
                ]],
        ['id' => 'c531ca18-4dba-50d5-81e1-174ac5a284d9', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual equação relaciona o potencial de eletrodo às atividades ou concentrações das espécies envolvidas em uma reação redox?', 'difficulty' => 4, 'weight' => 746, 'alternatives' => [
                    ['id' => '9e429237-450b-5dc0-9868-4768893c086e', 'description' => 'Equação de Eyring', 'correct_answer' => false],
                    ['id' => 'd88e53d9-ee5a-5128-a264-198d01f561e0', 'description' => 'Equação de van der Waals', 'correct_answer' => false],
                    ['id' => '5bf72005-1202-54a3-8a21-820a30face39', 'description' => 'Equação de Redlich-Kwong', 'correct_answer' => false],
                    ['id' => '39e56b19-4dfa-5b1a-9cd3-af177ac49777', 'description' => 'Equação de Arrhenius', 'correct_answer' => false],
                    ['id' => '2bdf225a-0270-58bd-aece-e25354789ac3', 'description' => 'Equação de Nernst', 'correct_answer' => true]
                ]],
        ['id' => '4bc85c5b-bffb-585e-93eb-4e5b335a0dd4', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual complexo da cadeia respiratória mitocondrial transfere elétrons do NADH para a ubiquinona e bombeia prótons?', 'difficulty' => 4, 'weight' => 702, 'alternatives' => [
                    ['id' => '4248c902-1bf0-55c2-a48f-a0e96af50505', 'description' => 'Complexo II', 'correct_answer' => false],
                    ['id' => 'c076a993-2dd4-5d0a-9b09-3a63a7cead5e', 'description' => 'Ubiquinona', 'correct_answer' => false],
                    ['id' => 'f0e8ee0f-3254-5b8b-bd4a-6f6d95759899', 'description' => 'Ferredoxina', 'correct_answer' => false],
                    ['id' => '22b56c17-d01d-53c8-a7f8-a8639143cdae', 'description' => 'Complexo I', 'correct_answer' => true],
                    ['id' => '202656fd-bb7e-5eba-922c-26e183da2f06', 'description' => 'NADH desidrogenase', 'correct_answer' => false]
                ]],
        ['id' => '95eb7acb-3786-554b-9c69-b9be81348954', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual complexo mitocondrial também atua no ciclo de Krebs como succinato desidrogenase e não bombeia prótons?', 'difficulty' => 4, 'weight' => 773, 'alternatives' => [
                    ['id' => 'f7043f87-0bd5-593f-90f8-85b3056df6f4', 'description' => 'Ubiquinona', 'correct_answer' => false],
                    ['id' => '45d042fd-7aa1-5cb2-b309-8a1e560675b0', 'description' => 'Succinato desidrogenase', 'correct_answer' => false],
                    ['id' => '3da43302-2b4f-5cdd-b6e6-9dbaed4ea9cf', 'description' => 'Complexo I', 'correct_answer' => false],
                    ['id' => '1fe825f4-1384-5ec6-a028-ee639fdf37b0', 'description' => 'Complexo II', 'correct_answer' => true],
                    ['id' => 'eecab6c0-1420-5f9d-a55b-fe60eb2c328b', 'description' => 'Complexo IV', 'correct_answer' => false]
                ]],
        ['id' => 'bb9a3591-5c2a-5eea-83d7-66267add9d80', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual complexo da cadeia respiratória transfere elétrons da ubiquinona reduzida ao citocromo c por meio do ciclo Q?', 'difficulty' => 4, 'weight' => 799, 'alternatives' => [
                    ['id' => '27506512-21ae-5007-b569-d1811b853705', 'description' => 'Complexo III', 'correct_answer' => true],
                    ['id' => '399fa63e-0188-5e87-b1b5-85aefdb34dbe', 'description' => 'Ferredoxina', 'correct_answer' => false],
                    ['id' => 'b8a6f4d7-f25e-50d4-badb-2ef2fce9a2cd', 'description' => 'NADH desidrogenase', 'correct_answer' => false],
                    ['id' => '30316098-1b67-5419-8e99-0cd0d96d847c', 'description' => 'Complexo IV', 'correct_answer' => false],
                    ['id' => '2b78e057-d4e1-54f6-90ac-760e4bdcb176', 'description' => 'Ubiquinona', 'correct_answer' => false]
                ]],
        ['id' => 'a4be8e67-1f32-5b9a-b9fa-1aef3691e999', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual complexo terminal da cadeia respiratória transfere elétrons ao oxigênio, formando água?', 'difficulty' => 4, 'weight' => 696, 'alternatives' => [
                    ['id' => '82893b0c-96fd-5171-8f8c-fdc8889f4e97', 'description' => 'NADH desidrogenase', 'correct_answer' => false],
                    ['id' => 'd66d0e78-4d5d-5709-aac3-8a7f53326dcf', 'description' => 'Citocromo c', 'correct_answer' => false],
                    ['id' => 'e5477482-2bae-59e8-8863-8ef479a16cd7', 'description' => 'Complexo IV', 'correct_answer' => true],
                    ['id' => '89250252-ecdf-563f-8f98-ee111b163e30', 'description' => 'Succinato desidrogenase', 'correct_answer' => false],
                    ['id' => '4150e6e1-7446-556c-87e7-a585a734a812', 'description' => 'Ferredoxina', 'correct_answer' => false]
                ]],
        ['id' => '323a96f3-3304-5d83-9375-4976114b9221', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual enzima de membrana utiliza a força próton-motriz para sintetizar ATP a partir de ADP e fosfato?', 'difficulty' => 4, 'weight' => 730, 'alternatives' => [
                    ['id' => 'cdf77f22-2a14-5841-9a46-9e5955d5bb39', 'description' => 'Ubiquinona', 'correct_answer' => false],
                    ['id' => 'fd02e34d-6e1f-5df5-a04a-24bca466b5f2', 'description' => 'Citocromo c', 'correct_answer' => false],
                    ['id' => 'e59fb82c-5d15-546e-a42a-3fe2ef7a2652', 'description' => 'Complexo I', 'correct_answer' => false],
                    ['id' => '52dd4138-b810-519e-8eea-b8e5dd93f36c', 'description' => 'Ferredoxina', 'correct_answer' => false],
                    ['id' => '53a0d2bf-fe57-52cb-bc86-e3125342921a', 'description' => 'ATP sintase', 'correct_answer' => true]
                ]],
        ['id' => 'd6faf915-df60-5845-b3c2-abc07c213f31', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual ciclo termoquímico utiliza a lei de Hess para calcular a energia reticular de sólidos iônicos?', 'difficulty' => 4, 'weight' => 720, 'alternatives' => [
                    ['id' => '99b2f832-2d41-5d92-a285-36486fea3975', 'description' => 'Ciclo de Born-Haber', 'correct_answer' => true],
                    ['id' => 'f62bb808-dcbe-5bd5-b9e8-5677684d6fe4', 'description' => 'Ciclo de Carnot', 'correct_answer' => false],
                    ['id' => '0a2171a6-616a-5ecd-82be-4257569904eb', 'description' => 'Ciclo de Otto', 'correct_answer' => false],
                    ['id' => '8606be83-0610-5915-8e0b-d126c969bd19', 'description' => 'Ciclo de Ericsson', 'correct_answer' => false],
                    ['id' => '5668b388-c3e0-5f10-839e-5b7b8aa4d816', 'description' => 'Ciclo de Rankine', 'correct_answer' => false]
                ]],
        ['id' => '6b084c67-0d67-5268-957c-765bc2eb429d', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual construção termoquímica permite calcular a variação de entalpia de uma reação somando etapas intermediárias?', 'difficulty' => 4, 'weight' => 644, 'alternatives' => [
                    ['id' => 'c13c63d9-c778-53b5-8dc9-a5723d6b4175', 'description' => 'Ciclo de Brayton', 'correct_answer' => false],
                    ['id' => 'fa37ae7a-2cb4-50eb-9913-3b17b38af8aa', 'description' => 'Ciclo de Otto', 'correct_answer' => false],
                    ['id' => '2da7507d-1d3f-5ded-82a9-5c44e0028744', 'description' => 'Ciclo de Stirling', 'correct_answer' => false],
                    ['id' => 'ce04ea28-50d1-561f-b92d-f56b4fae9fdd', 'description' => 'Ciclo de Hess', 'correct_answer' => true],
                    ['id' => '0bbc7a25-2d97-539a-99ac-bf50c78e0bda', 'description' => 'Ciclo de Born-Haber', 'correct_answer' => false]
                ]],
        ['id' => 'df1a516d-3dfc-5cbc-af5a-b5def0aab652', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual ciclo termodinâmico ideal estabelece o limite máximo de eficiência de uma máquina térmica entre duas temperaturas?', 'difficulty' => 4, 'weight' => 750, 'alternatives' => [
                    ['id' => '3b72ab94-6a81-5c7c-becb-b5ccfcba529d', 'description' => 'Ciclo de Carnot', 'correct_answer' => true],
                    ['id' => '2bc2ca85-cc49-551a-8296-a662dc935a62', 'description' => 'Ciclo de Krebs', 'correct_answer' => false],
                    ['id' => '26413904-1ae2-5a4f-8b87-f6200a9ef1ab', 'description' => 'Ciclo de Born-Haber', 'correct_answer' => false],
                    ['id' => '1586ba5a-4457-52cb-9c5e-31b9ceeebfaf', 'description' => 'Ciclo de Ericsson', 'correct_answer' => false],
                    ['id' => 'f1402039-4d34-5da7-8b69-e4f59c0681bd', 'description' => 'Ciclo de Stirling', 'correct_answer' => false]
                ]],
        ['id' => '9c67bd1f-e6f6-5e02-bd3c-a8c14c7b29fd', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual ciclo termodinâmico idealiza o funcionamento de usinas a vapor com bomba, caldeira, turbina e condensador?', 'difficulty' => 4, 'weight' => 765, 'alternatives' => [
                    ['id' => 'cb6cc528-6aae-580e-9740-431b18a144b3', 'description' => 'Ciclo de Brayton', 'correct_answer' => false],
                    ['id' => 'd66ad9a1-514f-529f-86de-e9bfe2cc55e2', 'description' => 'Ciclo de Hess', 'correct_answer' => false],
                    ['id' => '1f9c4bd6-41f5-55ae-a878-73b9da62897e', 'description' => 'Ciclo de Rankine', 'correct_answer' => true],
                    ['id' => '3c81d070-cab7-5129-995a-14b8bee1a51c', 'description' => 'Ciclo de Krebs', 'correct_answer' => false],
                    ['id' => '58b4e87a-7b33-550c-a2fe-07a8944c4036', 'description' => 'Ciclo de Carnot', 'correct_answer' => false]
                ]],
        ['id' => 'f9772aec-aa34-5c1f-bd50-acd8b94124d6', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual ciclo termodinâmico idealiza turbinas a gás e motores a jato?', 'difficulty' => 4, 'weight' => 710, 'alternatives' => [
                    ['id' => 'ed4be336-d499-5af9-89bd-009e0264aaed', 'description' => 'Ciclo de Ericsson', 'correct_answer' => false],
                    ['id' => 'f3ddf550-5eac-56cc-99b9-9b667f59f2b2', 'description' => 'Ciclo de Sabatier', 'correct_answer' => false],
                    ['id' => '16a3471b-06ca-52dc-9776-9356d5bc52f8', 'description' => 'Ciclo de Brayton', 'correct_answer' => true],
                    ['id' => 'ba7eb8d6-4c7d-58c7-8913-151e98386e2b', 'description' => 'Ciclo de Rankine', 'correct_answer' => false],
                    ['id' => '5f906098-70ee-5e19-8f2f-4496fca75324', 'description' => 'Ciclo de Carnot', 'correct_answer' => false]
                ]],
        ['id' => '06550240-6bb9-57f7-b0b7-45367c126b44', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual teoria explica a origem de mitocôndrias e cloroplastos a partir de antigos organismos procarióticos incorporados por células ancestrais?', 'difficulty' => 4, 'weight' => 647, 'alternatives' => [
                    ['id' => '16b209a4-3824-5956-89e2-a66537d0a148', 'description' => 'Endossimbiose', 'correct_answer' => true],
                    ['id' => '4ebe1267-3629-5bf1-94a7-6d5db904e74b', 'description' => 'Autogamia', 'correct_answer' => false],
                    ['id' => 'bb84f52b-199d-51cb-a83b-e89b14ff3ed5', 'description' => 'Deriva genética', 'correct_answer' => false],
                    ['id' => 'dbb35185-f6c8-5fed-8e7d-45a97b4725e5', 'description' => 'Efeito fundador', 'correct_answer' => false],
                    ['id' => '8ad48354-1329-54ef-b6ec-b5b6bfc16b14', 'description' => 'Alopatria', 'correct_answer' => false]
                ]],
        ['id' => 'ac9e60f8-696b-54f7-bc86-23c2a1d463c9', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual modo de especiação ocorre quando populações ficam separadas por uma barreira geográfica?', 'difficulty' => 4, 'weight' => 668, 'alternatives' => [
                    ['id' => '7ba293c2-4830-5811-80ce-273effd35fef', 'description' => 'Endossimbiose', 'correct_answer' => false],
                    ['id' => '9784ad47-f7b0-5d42-ab45-c391c4e4a890', 'description' => 'Autogamia', 'correct_answer' => false],
                    ['id' => '2d4c29db-a2c9-5e40-ac94-7c2e1ed91bcc', 'description' => 'Poliploidia', 'correct_answer' => false],
                    ['id' => 'cffd5742-1415-5f51-80cb-50ec2fafa0fc', 'description' => 'Alopatria', 'correct_answer' => true],
                    ['id' => 'da134243-ddd9-538c-aa69-37ac6bfc83ca', 'description' => 'Hibridização', 'correct_answer' => false]
                ]],
        ['id' => '75ca4333-4499-517e-a392-daf82c0c96ee', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual modo de especiação ocorre sem separação geográfica completa entre as populações?', 'difficulty' => 4, 'weight' => 758, 'alternatives' => [
                    ['id' => '5077cfd9-6928-51b6-8a6f-fbb0d9fa81d8', 'description' => 'Parapatria', 'correct_answer' => false],
                    ['id' => 'b7ee2bee-357f-519b-ba98-6f44beb5ef62', 'description' => 'Efeito fundador', 'correct_answer' => false],
                    ['id' => '72977112-746e-53ae-88b1-04d62bb8aeb1', 'description' => 'Alopatria', 'correct_answer' => false],
                    ['id' => '7cd98704-3c1c-578f-b134-6a24b5616dc4', 'description' => 'Simpátria', 'correct_answer' => true],
                    ['id' => '2e2e5742-a7a6-58b2-831e-605fa88c6952', 'description' => 'Hibridização', 'correct_answer' => false]
                ]],
        ['id' => 'd23ec1e9-cef2-533f-b25a-918f7db1a978', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual modo de especiação ocorre entre populações de áreas adjacentes com fluxo gênico limitado?', 'difficulty' => 4, 'weight' => 613, 'alternatives' => [
                    ['id' => 'bf45be81-a45e-534a-92f8-69798b8f5f70', 'description' => 'Simpátria', 'correct_answer' => false],
                    ['id' => '6d1ef790-f2f0-5d6f-a9b2-dbbf4964a5f1', 'description' => 'Efeito fundador', 'correct_answer' => false],
                    ['id' => 'ed935485-e011-5a1a-a1ec-fb9ca9b8d73b', 'description' => 'Alopatria', 'correct_answer' => false],
                    ['id' => '1232fde7-0bc3-556d-8263-428df447e45b', 'description' => 'Autogamia', 'correct_answer' => false],
                    ['id' => 'a9dec376-372c-547c-a38c-f51f920ae247', 'description' => 'Parapatria', 'correct_answer' => true]
                ]],
        ['id' => '97de4a41-d1d2-51bb-85b8-8fcbe70d95eb', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual fenômeno genético envolve a presença de mais de dois conjuntos completos de cromossomos?', 'difficulty' => 4, 'weight' => 730, 'alternatives' => [
                    ['id' => '31bf4bfd-1f76-5c29-a0dd-1bf9df2d8ed8', 'description' => 'Poliploidia', 'correct_answer' => true],
                    ['id' => 'c6963a7a-cf80-5b15-9919-ba9d9c7dcac0', 'description' => 'Autogamia', 'correct_answer' => false],
                    ['id' => '5a31d32e-4d27-5d5e-9b00-11887ea3a287', 'description' => 'Parapatria', 'correct_answer' => false],
                    ['id' => '41231c64-86d1-5e1b-ba13-f3358983cba1', 'description' => 'Fluxo gênico', 'correct_answer' => false],
                    ['id' => 'e6cca71c-4d15-525f-b68a-e242d3abb1c4', 'description' => 'Simpátria', 'correct_answer' => false]
                ]],
        ['id' => '5532fd2c-e845-5f52-835a-c75813389ca8', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual conjunto de haplótipos compartilha um ancestral comum definido por variantes genéticas específicas em uma linhagem?', 'difficulty' => 4, 'weight' => 638, 'alternatives' => [
                    ['id' => 'a5ce9faa-5e83-5941-a52e-648a5fbf938d', 'description' => 'Microssatélite', 'correct_answer' => false],
                    ['id' => '6c4351b6-76e5-5320-88bf-111cff572d55', 'description' => 'Haplótipo', 'correct_answer' => false],
                    ['id' => '5a2264e4-68eb-55b9-a018-063d57463c24', 'description' => 'Haplogrupo', 'correct_answer' => true],
                    ['id' => '9332081f-9fc9-556a-abbd-73c3e4711872', 'description' => 'Locus', 'correct_answer' => false],
                    ['id' => 'fa80376b-f068-51e1-835b-9f96d07b2ce6', 'description' => 'SNP', 'correct_answer' => false]
                ]],
        ['id' => '9bf98148-f16c-5b8e-b980-16948795d900', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Como se chama um conjunto de alelos ou variantes em loci próximos que tende a ser herdado em bloco?', 'difficulty' => 4, 'weight' => 732, 'alternatives' => [
                    ['id' => 'fd7aab46-acfb-5b20-aecb-928b290971cd', 'description' => 'Locus', 'correct_answer' => false],
                    ['id' => '1e7b3335-76eb-5e84-bee8-b49d4a3eef45', 'description' => 'RFLP', 'correct_answer' => false],
                    ['id' => '401ed11a-a111-5e60-9a93-acfb3a378a92', 'description' => 'Microssatélite', 'correct_answer' => false],
                    ['id' => '7df202ac-80fd-58e8-9353-fd73e21c9d6b', 'description' => 'Haplogrupo', 'correct_answer' => false],
                    ['id' => 'b7a8898b-c947-5d51-a78f-10be57f2e54a', 'description' => 'Haplótipo', 'correct_answer' => true]
                ]],
        ['id' => '2b95dd32-93b0-5528-a7db-7dd17a727d59', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual marcador genético consiste em repetições curtas em tandem de motivos de DNA, geralmente com alta variabilidade?', 'difficulty' => 4, 'weight' => 649, 'alternatives' => [
                    ['id' => '5c2cee33-d9cd-5ca0-b763-e0217d41dbca', 'description' => 'STR', 'correct_answer' => false],
                    ['id' => 'e60dba88-85e3-5bf8-8092-3e04cbd577b3', 'description' => 'Microssatélite', 'correct_answer' => true],
                    ['id' => '6a16295c-4d4c-5038-98a3-24fc3ca0ca6e', 'description' => 'SNP', 'correct_answer' => false],
                    ['id' => '82e2f701-78ec-5ca1-a354-461ec7ee33c7', 'description' => 'Haplogrupo', 'correct_answer' => false],
                    ['id' => '64bb5c30-8411-5f49-9e58-e6d06db76909', 'description' => 'Locus', 'correct_answer' => false]
                ]],
        ['id' => '1ac83580-1df0-5cc4-bff0-9a577449acc1', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual tipo de variante genética corresponde à alteração de um único nucleotídeo em uma posição do genoma?', 'difficulty' => 4, 'weight' => 646, 'alternatives' => [
                    ['id' => '9d1c6fb5-8f35-5c86-a484-134f55c618e4', 'description' => 'Locus', 'correct_answer' => false],
                    ['id' => 'fef52158-db75-53bf-b1a7-aeaf7cf4d71f', 'description' => 'VNTR', 'correct_answer' => false],
                    ['id' => '51d8ee39-b41f-5918-bd12-f81b304e51d3', 'description' => 'SNP', 'correct_answer' => true],
                    ['id' => '16606be4-9e84-5916-bbff-e0642754449c', 'description' => 'CNV', 'correct_answer' => false],
                    ['id' => '1554f60c-090f-5ccf-ad15-1469997e4ebf', 'description' => 'Indel', 'correct_answer' => false]
                ]],
        ['id' => 'e6b37a6d-be75-52d4-986a-d31e3b4de078', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual marcador genético se baseia em número variável de repetições em tandem de unidades relativamente longas?', 'difficulty' => 4, 'weight' => 767, 'alternatives' => [
                    ['id' => '9bed5835-35f0-5bf8-8e1a-075cfe4aef11', 'description' => 'VNTR', 'correct_answer' => true],
                    ['id' => '0e974dbf-0d9b-563d-bba6-6091b4805bb0', 'description' => 'Haplótipo', 'correct_answer' => false],
                    ['id' => 'eb7804b0-f885-5950-b0cf-14bce1de7fa5', 'description' => 'RFLP', 'correct_answer' => false],
                    ['id' => 'be71fb9b-23b4-588b-a97e-c2a31d2128fd', 'description' => 'Locus', 'correct_answer' => false],
                    ['id' => '5532bd7b-7b05-5cff-90d4-460d76f65158', 'description' => 'Haplogrupo', 'correct_answer' => false]
                ]],
        ['id' => '9975ac39-21ad-58cf-a6cc-8ba30954fb2c', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual equação relativística descreve o equilíbrio hidrostático de uma estrela esfericamente simétrica, incluindo efeitos da relatividade geral?', 'difficulty' => 5, 'weight' => 941, 'alternatives' => [
                    ['id' => 'a41029b0-edce-5e44-9247-d0e364b5ce77', 'description' => 'Equação de Raychaudhuri', 'correct_answer' => false],
                    ['id' => 'efd07f71-19f1-5c1b-81a9-0a32aae20a95', 'description' => 'Equação de Tolman-Oppenheimer-Volkoff', 'correct_answer' => true],
                    ['id' => '0e17a4e8-66db-5aac-b401-24c22fa4a819', 'description' => 'Equação de Bekenstein-Hawking', 'correct_answer' => false],
                    ['id' => '9b2a1cc0-08fb-59b5-82d9-bc29117c5d20', 'description' => 'Equação de Newman-Penrose', 'correct_answer' => false],
                    ['id' => 'c4fca87d-7e75-525c-bdba-c5e2a6bde45d', 'description' => 'Equação de geodésica', 'correct_answer' => false]
                ]],
        ['id' => '6d67f17d-a876-53f6-8a1c-80e1f2f72e75', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual conjunto de equações da cosmologia relativística relaciona a expansão do Universo à densidade de energia e à curvatura espacial?', 'difficulty' => 5, 'weight' => 890, 'alternatives' => [
                    ['id' => 'be598f05-b09c-50a7-b721-c9193a565003', 'description' => 'Equação de Schwarzschild', 'correct_answer' => false],
                    ['id' => 'ba0cb0c9-0e9e-580d-88f4-644eef856a2c', 'description' => 'Equação de Raychaudhuri', 'correct_answer' => false],
                    ['id' => '9cbc4c5a-7e30-55cd-89cb-13402ba71585', 'description' => 'Equação de Newman-Penrose', 'correct_answer' => false],
                    ['id' => '1928f9c1-8e82-5e5e-acf4-7e9a17519fff', 'description' => 'Equação de Friedmann', 'correct_answer' => true],
                    ['id' => '87f006e5-b76e-55ad-909f-a6febf202be8', 'description' => 'Equação de Teukolsky', 'correct_answer' => false]
                ]],
        ['id' => 'a5a08ae3-8472-5ee7-84ae-e404f425d1a5', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual equação relaciona a geometria do espaço-tempo ao conteúdo de energia e momento?', 'difficulty' => 5, 'weight' => 821, 'alternatives' => [
                    ['id' => 'b3188297-91b4-5a7d-8413-df1f518c1dd8', 'description' => 'Equação de geodésica', 'correct_answer' => false],
                    ['id' => 'e44e670c-105a-5c7e-9016-83fcc3300c09', 'description' => 'Equação de campo de Einstein', 'correct_answer' => true],
                    ['id' => '03bb78fb-1afc-5552-80f6-b807f3f361f0', 'description' => 'Equação de Bekenstein-Hawking', 'correct_answer' => false],
                    ['id' => '704aa8a3-0103-5c80-bcad-442a2ea69eee', 'description' => 'Equação de Schwarzschild', 'correct_answer' => false],
                    ['id' => '2bb1628e-490e-5ebc-b50b-d168b2363e48', 'description' => 'Equação de Tolman-Oppenheimer-Volkoff', 'correct_answer' => false]
                ]],
        ['id' => '930d0948-6d83-5ab8-978d-bb8618bc3dc0', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual equação descreve a evolução da expansão de congruências de geodésicas e é central em teoremas de singularidade?', 'difficulty' => 5, 'weight' => 808, 'alternatives' => [
                    ['id' => '3123e188-494f-5f75-9e24-f85c76b89d52', 'description' => 'Equação de campo de Einstein', 'correct_answer' => false],
                    ['id' => '622c8a31-80f7-5229-9cf8-40fc11a01c45', 'description' => 'Equação de Bekenstein-Hawking', 'correct_answer' => false],
                    ['id' => '98a071c4-6b75-5621-b8f2-269adc080b52', 'description' => 'Equação de Tolman-Oppenheimer-Volkoff', 'correct_answer' => false],
                    ['id' => '52ee7f38-3a92-5453-a846-49b5a2ab6063', 'description' => 'Equação de Friedmann', 'correct_answer' => false],
                    ['id' => '345c21e9-35ae-5efb-8310-4f870fa96aca', 'description' => 'Equação de Raychaudhuri', 'correct_answer' => true]
                ]],
        ['id' => '474e827b-69f4-59c8-b474-9a2078932018', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual equação determina as trajetórias de partículas livres em um espaço-tempo curvo?', 'difficulty' => 5, 'weight' => 833, 'alternatives' => [
                    ['id' => 'c178f999-a1c4-58cb-8207-c183621ef278', 'description' => 'Equação de Schwarzschild', 'correct_answer' => false],
                    ['id' => '9c57b004-ccff-537a-a566-8bdb3d70f98c', 'description' => 'Equação de geodésica', 'correct_answer' => true],
                    ['id' => 'b2226e95-3305-5434-a0bd-0d7126e2eebd', 'description' => 'Equação de Kerr', 'correct_answer' => false],
                    ['id' => 'dc736421-7591-5bd7-9448-1dc505986406', 'description' => 'Equação de Bekenstein-Hawking', 'correct_answer' => false],
                    ['id' => 'a26e4393-513f-5606-9763-677658df3287', 'description' => 'Equação de Friedmann', 'correct_answer' => false]
                ]],
        ['id' => '7acd6c65-34e3-5f2c-906e-aeafd5a04792', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual princípio da teoria quântica de campos local e relativística afirma a invariância conjunta sob conjugação de carga, paridade e reversão temporal?', 'difficulty' => 5, 'weight' => 812, 'alternatives' => [
                    ['id' => 'f3d6a4dd-680a-5241-8198-c4826013e6d6', 'description' => 'Simetria global', 'correct_answer' => false],
                    ['id' => '673288af-ad30-5d1d-b1e1-677248586d96', 'description' => 'Simetria quiral', 'correct_answer' => false],
                    ['id' => '5664465a-c400-5825-aa8f-9c47c5831ce6', 'description' => 'Quebra espontânea de simetria', 'correct_answer' => false],
                    ['id' => '4a2a1aab-5156-5bbb-9099-282d7dd141ba', 'description' => 'Quebra anômala de simetria', 'correct_answer' => false],
                    ['id' => '8724411a-7bde-5da1-9568-7df6fc8e8473', 'description' => 'Invariância CPT', 'correct_answer' => true]
                ]],
        ['id' => '38a290a4-9e59-5ac9-a541-de5d694e4f73', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual simetria combina conjugação de carga e inversão espacial e é violada em certos processos de interação fraca?', 'difficulty' => 5, 'weight' => 914, 'alternatives' => [
                    ['id' => '469e1df3-01e6-5f9e-a50b-6835a2069b8a', 'description' => 'Invariância CPT', 'correct_answer' => false],
                    ['id' => '8e68e52f-385d-53b2-98c4-8fe9064d13ef', 'description' => 'Simetria CP', 'correct_answer' => true],
                    ['id' => '92a0ac1f-ced1-501c-ba09-53c48e711db7', 'description' => 'Quebra espontânea de simetria', 'correct_answer' => false],
                    ['id' => 'c29ea456-185b-507c-ad60-aabfe3e9e528', 'description' => 'Simetria global', 'correct_answer' => false],
                    ['id' => 'b3eba25a-cc5e-50af-b3f1-d5d37b6a836c', 'description' => 'Quebra anômala de simetria', 'correct_answer' => false]
                ]],
        ['id' => 'b9642b6c-2308-541f-a8fc-f6072dfd5404', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual transformação de simetria inverte o sentido temporal em uma teoria física?', 'difficulty' => 5, 'weight' => 824, 'alternatives' => [
                    ['id' => '570d5ec1-3170-5aa8-a63a-c11ffe85a624', 'description' => 'Simetria T', 'correct_answer' => true],
                    ['id' => '404b5e63-9af5-52b6-b2ae-f904ed6c4e0c', 'description' => 'Invariância CPT', 'correct_answer' => false],
                    ['id' => 'ea37e297-49b1-57ad-bebc-25cac9df0833', 'description' => 'Simetria de gauge', 'correct_answer' => false],
                    ['id' => '68b60aa5-0b76-51af-a926-a0a2b1aa5e50', 'description' => 'Simetria quiral', 'correct_answer' => false],
                    ['id' => '4635a2ff-a6d4-5bd8-b5bf-f0570be36ecc', 'description' => 'Simetria C', 'correct_answer' => false]
                ]],
        ['id' => '788ad8ff-cfa6-56f8-ad36-ddb94e0ce6f4', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual transformação troca partículas por suas antipartículas?', 'difficulty' => 5, 'weight' => 953, 'alternatives' => [
                    ['id' => 'f9448866-5376-52ba-b71c-2599d84bb4f3', 'description' => 'Simetria T', 'correct_answer' => false],
                    ['id' => '82c9bd93-4fa2-5de8-8a93-9bda84d0ce8d', 'description' => 'Simetria C', 'correct_answer' => true],
                    ['id' => '582a88c6-2b30-5c34-9d2e-0b4c6569793b', 'description' => 'Simetria de gauge', 'correct_answer' => false],
                    ['id' => '5d40eff8-87a5-54f1-a29a-6c7952bfd336', 'description' => 'Simetria global', 'correct_answer' => false],
                    ['id' => 'fa6c170f-a74d-5cd2-a361-a0549d793ea8', 'description' => 'Simetria CP', 'correct_answer' => false]
                ]],
        ['id' => '901f9095-ae02-5253-ab1f-ee92fb0bb119', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual transformação de simetria corresponde à inversão espacial das coordenadas?', 'difficulty' => 5, 'weight' => 925, 'alternatives' => [
                    ['id' => 'b576164e-4a7f-5020-ad1d-4c0ae88a41be', 'description' => 'Simetria P', 'correct_answer' => true],
                    ['id' => 'f3232213-127c-5c69-a206-54e2a8542326', 'description' => 'Simetria CP', 'correct_answer' => false],
                    ['id' => '06290958-e9e8-5d8e-961b-894b78888038', 'description' => 'Simetria global', 'correct_answer' => false],
                    ['id' => 'b3020b36-3d0c-5409-9945-c6fa2080abc5', 'description' => 'Invariância CPT', 'correct_answer' => false],
                    ['id' => '7190ae3e-5d93-5418-b675-fa10fa69bfe0', 'description' => 'Quebra espontânea de simetria', 'correct_answer' => false]
                ]],
        ['id' => '856fb90c-b4f4-562d-9643-60b4f21742c4', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual equação relativística integral descreve estados ligados de duas partículas em teoria quântica de campos?', 'difficulty' => 5, 'weight' => 890, 'alternatives' => [
                    ['id' => 'd6d879e9-d590-5bcd-9beb-28ab45d3ea36', 'description' => 'Equação de Faddeev', 'correct_answer' => false],
                    ['id' => '075491e3-0d9f-5a23-bcd8-f72caad76b7c', 'description' => 'Equação de Bethe-Salpeter', 'correct_answer' => true],
                    ['id' => 'd2f62e85-19e2-5c9b-a7fa-108123b3eac7', 'description' => 'Equação de Klein-Gordon', 'correct_answer' => false],
                    ['id' => '3895b7c6-82e6-5391-bad4-b69d47743b50', 'description' => 'Equação de Dyson-Schwinger', 'correct_answer' => false],
                    ['id' => '565b1963-c244-5e22-82d3-55be88d0b797', 'description' => 'Equação de Gross-Pitaevskii', 'correct_answer' => false]
                ]],
        ['id' => '43aa6998-c9cb-5d1f-8277-bff08fd63740', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual conjunto de equações integrais relaciona funções de Green completas e vértices em teorias quânticas de campos?', 'difficulty' => 5, 'weight' => 821, 'alternatives' => [
                    ['id' => 'fa728400-df83-58ec-9471-3f109d067ac3', 'description' => 'Equação de Proca', 'correct_answer' => false],
                    ['id' => '6bd713a1-c90b-5f6c-b69d-bb0dbe0f7800', 'description' => 'Equação de Gross-Pitaevskii', 'correct_answer' => false],
                    ['id' => 'f2e4bef6-5693-51cb-9f60-f9ef4fe6f21b', 'description' => 'Equação de Eliashberg', 'correct_answer' => false],
                    ['id' => 'd740928d-5f2b-50ab-ba63-0998a1db74f7', 'description' => 'Equação de Dyson-Schwinger', 'correct_answer' => true],
                    ['id' => '04a72b97-929a-5b93-a74e-a4d8f77b7840', 'description' => 'Equação de Faddeev', 'correct_answer' => false]
                ]],
        ['id' => '3d6d795f-d554-5731-8ffc-cfd7786b3a42', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual equação integral formula estados de espalhamento em mecânica quântica a partir do potencial de interação?', 'difficulty' => 5, 'weight' => 951, 'alternatives' => [
                    ['id' => '5725703b-3466-5165-ae08-8ed7dee2ad3e', 'description' => 'Equação de Bethe-Salpeter', 'correct_answer' => false],
                    ['id' => 'b5b167f7-6e83-5ad5-a75e-5763e80c0bce', 'description' => 'Equação de Gross-Pitaevskii', 'correct_answer' => false],
                    ['id' => '33ec9c4d-81b0-5edb-a027-2741d38fa307', 'description' => 'Equação de Dyson-Schwinger', 'correct_answer' => false],
                    ['id' => 'a273bc8e-472e-5f22-a5c9-3b25be7a5285', 'description' => 'Equação de Eliashberg', 'correct_answer' => false],
                    ['id' => 'c6cfc7c0-e9bf-566f-a42e-3fbf46dc8dc7', 'description' => 'Equação de Lippmann-Schwinger', 'correct_answer' => true]
                ]],
        ['id' => 'ee5e50ea-bdf2-5232-a7ea-d46d10c79e1e', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual formalismo decompõe problemas de espalhamento de três corpos em componentes acopladas?', 'difficulty' => 5, 'weight' => 981, 'alternatives' => [
                    ['id' => 'b4f54028-7fb1-5e72-b9d4-530b5025c390', 'description' => 'Equação de Proca', 'correct_answer' => false],
                    ['id' => '2fb8d7c8-8c92-561b-a613-68cf100756e2', 'description' => 'Equação de Klein-Gordon', 'correct_answer' => false],
                    ['id' => '6dc32392-5d8e-5079-afd7-b2cea3bf0db1', 'description' => 'Equação de Gross-Pitaevskii', 'correct_answer' => false],
                    ['id' => 'e6b6fd70-acd4-50e2-8247-6229060744db', 'description' => 'Equação de Faddeev', 'correct_answer' => true],
                    ['id' => '74168cb6-ddc3-5c24-aa53-dfdc8f11064e', 'description' => 'Equação de Dyson-Schwinger', 'correct_answer' => false]
                ]],
        ['id' => '9133f12b-e6ec-5326-a650-a345398f7edd', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual equação descreve excitações de quasipartículas em sistemas supercondutores de campo médio?', 'difficulty' => 5, 'weight' => 903, 'alternatives' => [
                    ['id' => '035ff4ec-8eba-56bf-bc41-4d56a684622f', 'description' => 'Equação de Bogoliubov-de Gennes', 'correct_answer' => true],
                    ['id' => '9b137a14-242d-59e4-ba3f-11e9875aa5df', 'description' => 'Equação de Faddeev', 'correct_answer' => false],
                    ['id' => '9174f858-c676-5a73-b0a5-0dc8b2a17b6a', 'description' => 'Equação de Dyson-Schwinger', 'correct_answer' => false],
                    ['id' => '7c5e1ff9-4244-5190-b9f8-285fbedef16b', 'description' => 'Equação de Proca', 'correct_answer' => false],
                    ['id' => '263c19e9-ec70-51e6-8a4d-e5e47060cb4e', 'description' => 'Equação de Gross-Pitaevskii', 'correct_answer' => false]
                ]],
        ['id' => '9565fb5b-6d85-5f34-896a-e468b8f29280', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual resultado demonstra que teorias de variáveis ocultas locais não podem reproduzir todas as previsões da mecânica quântica?', 'difficulty' => 5, 'weight' => 829, 'alternatives' => [
                    ['id' => 'fb514369-ef14-53b6-9308-7132f8677a01', 'description' => 'Teorema de Holevo', 'correct_answer' => false],
                    ['id' => '8cf55ff6-9213-51d9-b159-51601f85abb5', 'description' => 'Teorema de Gisin-Hughston-Jozsa-Wootters', 'correct_answer' => false],
                    ['id' => 'd64604b2-6664-5051-b5e7-6405149f9a4c', 'description' => 'Teorema de Bell', 'correct_answer' => true],
                    ['id' => 'd6043e2b-1266-5f22-a4f7-a02e85b25fea', 'description' => 'Teorema de Kochen-Specker', 'correct_answer' => false],
                    ['id' => '1f0f406a-0032-542d-98b8-638a6271d48e', 'description' => 'Desigualdade CHSH', 'correct_answer' => false]
                ]],
        ['id' => 'bd8b107f-c9b8-59c5-a3cc-24a7cad043b6', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual desigualdade é usada em testes experimentais de não localidade envolvendo correlações entre duas partes?', 'difficulty' => 5, 'weight' => 915, 'alternatives' => [
                    ['id' => 'eda3acfa-329a-5b64-85db-3cc50b27c1fc', 'description' => 'Teorema de Holevo', 'correct_answer' => false],
                    ['id' => '3c132d79-e5d2-5778-a6d1-596c9e4173c6', 'description' => 'Teorema de Wigner', 'correct_answer' => false],
                    ['id' => 'e75da13b-9d92-520c-adc0-88f59358f367', 'description' => 'Teorema de Kochen-Specker', 'correct_answer' => false],
                    ['id' => '1ef663f8-6927-521d-9db2-089cdc59ecc8', 'description' => 'Desigualdade CHSH', 'correct_answer' => true],
                    ['id' => '10e25f92-c411-5dbf-8d82-dc8326ab46fe', 'description' => 'Teorema de Gisin-Hughston-Jozsa-Wootters', 'correct_answer' => false]
                ]],
        ['id' => 'fa33e816-aa59-5ab9-bee2-086a45f324a8', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual teorema mostra a impossibilidade de atribuir valores preexistentes não contextuais a todos os observáveis quânticos?', 'difficulty' => 5, 'weight' => 917, 'alternatives' => [
                    ['id' => '15d3301c-d1a6-5d9e-b3e5-7ee50432e261', 'description' => 'Teorema de Gisin-Hughston-Jozsa-Wootters', 'correct_answer' => false],
                    ['id' => '0c302a4a-a5ee-5f44-9e77-47b19c3e7257', 'description' => 'Teorema de Kochen-Specker', 'correct_answer' => true],
                    ['id' => '500d9ac4-3113-5e63-b6a9-c0197ad9abf1', 'description' => 'Teorema de Reeh-Schlieder', 'correct_answer' => false],
                    ['id' => 'a2876e72-ec4b-5bf0-ad6e-8567db2344cd', 'description' => 'Teorema de Gleason', 'correct_answer' => false],
                    ['id' => 'e6c6ba2a-82ae-52a3-93b3-9c0704f9c3e5', 'description' => 'Teorema de Tsirelson', 'correct_answer' => false]
                ]],
        ['id' => '353c0907-582c-5f59-8bd6-6347e67028da', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual teorema caracteriza medidas de probabilidade sobre projetores em espaços de Hilbert de dimensão pelo menos três?', 'difficulty' => 5, 'weight' => 873, 'alternatives' => [
                    ['id' => 'b31b8c3d-dd01-51ea-961b-5c362ba70144', 'description' => 'Teorema de Holevo', 'correct_answer' => false],
                    ['id' => 'a3e2ee23-886c-5e97-a2b6-d0b25cf5997d', 'description' => 'Teorema de no-cloning', 'correct_answer' => false],
                    ['id' => 'e7c5d9c8-7722-519a-885a-fc860f973e37', 'description' => 'Teorema de Gleason', 'correct_answer' => true],
                    ['id' => '3a82b28a-fb1f-590d-8555-bfccb28def90', 'description' => 'Teorema de Kochen-Specker', 'correct_answer' => false],
                    ['id' => '7c1c2f89-3d80-5262-94d6-2c00eb960f1c', 'description' => 'Teorema de Bell', 'correct_answer' => false]
                ]],
        ['id' => '85c23cb1-7d63-591f-89af-cf8d975dcc07', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual teorema estabelece que um estado quântico arbitrário desconhecido não pode ser copiado perfeitamente por uma operação física universal?', 'difficulty' => 5, 'weight' => 894, 'alternatives' => [
                    ['id' => '07eccdd4-6fed-504a-8a6e-1465284d20e0', 'description' => 'Teorema de Bell', 'correct_answer' => false],
                    ['id' => '08dcb947-8155-5a7f-84f6-ccbd9f0fedcc', 'description' => 'Teorema de no-cloning', 'correct_answer' => true],
                    ['id' => '2702728f-e1a3-5d58-8b0c-bcaef1e6aa0b', 'description' => 'Teorema de Wigner', 'correct_answer' => false],
                    ['id' => '939bae4d-b50d-5bfc-98e6-eedb10a3fa4e', 'description' => 'Teorema de Reeh-Schlieder', 'correct_answer' => false],
                    ['id' => 'a2ee4dbd-ad38-5e96-b812-ae1924bcb47b', 'description' => 'Teorema de Holevo', 'correct_answer' => false]
                ]],
        ['id' => 'f31b3b20-39fe-556f-9e0f-6daad25dde7b', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual mecanismo explica como bósons vetoriais adquirem massa por meio da interação com um campo escalar no Modelo Padrão?', 'difficulty' => 5, 'weight' => 801, 'alternatives' => [
                    ['id' => '44dce818-8d91-53b3-bcb4-e404cf38e92e', 'description' => 'Quebra espontânea eletrofraca', 'correct_answer' => false],
                    ['id' => 'f66e5820-afff-5361-88f9-8fb3744256e3', 'description' => 'Mecanismo seesaw', 'correct_answer' => false],
                    ['id' => '32a5d15f-d89b-5647-91f7-831b9d026d0c', 'description' => 'Mecanismo GIM', 'correct_answer' => false],
                    ['id' => 'ed56391e-7714-5c75-81b4-c141ebccd7f8', 'description' => 'Quebra quiral dinâmica', 'correct_answer' => false],
                    ['id' => '951c30b1-9e87-5ab7-bc84-4fe2ef224b67', 'description' => 'Mecanismo de Higgs', 'correct_answer' => true]
                ]],
        ['id' => 'ce4ec011-d4b7-5265-902c-30ca612b3f07', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual propriedade da cromodinâmica quântica impede a observação isolada de quarks e glúons em condições usuais?', 'difficulty' => 5, 'weight' => 988, 'alternatives' => [
                    ['id' => '97d0570c-3b37-5845-9320-608b1c3f8ae7', 'description' => 'Confinamento de cor', 'correct_answer' => true],
                    ['id' => '9e851480-6b10-5fe1-b03f-c8422326150e', 'description' => 'Liberdade assintótica', 'correct_answer' => false],
                    ['id' => 'ea527e6b-19e4-543b-9879-4b53d70e3d38', 'description' => 'Mecanismo GIM', 'correct_answer' => false],
                    ['id' => '50de3904-4503-5b2d-b71b-5dc040cc73fb', 'description' => 'Mecanismo de Schwinger', 'correct_answer' => false],
                    ['id' => '468716e2-fed2-593e-ad20-d28cc2db7a82', 'description' => 'Mecanismo seesaw', 'correct_answer' => false]
                ]],
        ['id' => '4bb4fdcf-7185-5007-901c-9a5b2ca24ccb', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual propriedade da interação forte faz com que a constante de acoplamento diminua em altas energias ou pequenas distâncias?', 'difficulty' => 5, 'weight' => 835, 'alternatives' => [
                    ['id' => '0a2dd7b8-4015-5983-af1a-9c1aac7f4587', 'description' => 'Mecanismo de Brout-Englert-Higgs', 'correct_answer' => false],
                    ['id' => 'f0612104-a5b1-5305-a98d-8cfa8549e417', 'description' => 'Confinamento de cor', 'correct_answer' => false],
                    ['id' => '6c5fd945-2c3f-5ddb-972d-c202c5af4b32', 'description' => 'Mecanismo de Higgs-Kibble', 'correct_answer' => false],
                    ['id' => '0a12abf7-7e33-5db5-8b03-b948b04a25b9', 'description' => 'Liberdade assintótica', 'correct_answer' => true],
                    ['id' => '8daa7de9-fe17-533c-873a-15a9f810e559', 'description' => 'Quebra espontânea eletrofraca', 'correct_answer' => false]
                ]],
        ['id' => '318c472b-84bf-5123-9e6d-dbb589239b24', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual mecanismo teórico pode explicar a pequenez das massas dos neutrinos por meio de estados pesados de mão direita?', 'difficulty' => 5, 'weight' => 942, 'alternatives' => [
                    ['id' => '10a7701b-7919-539c-b478-033aec0400c9', 'description' => 'Quebra quiral dinâmica', 'correct_answer' => false],
                    ['id' => '9997452a-52bd-5a8d-94b1-6d595404d0cf', 'description' => 'Mecanismo de Brout-Englert-Higgs', 'correct_answer' => false],
                    ['id' => 'd416e785-4d34-587c-aca9-ab3bd857f5f2', 'description' => 'Mecanismo seesaw', 'correct_answer' => true],
                    ['id' => '0c23c779-4779-5ad1-a128-68cb90b38e16', 'description' => 'Mecanismo de Higgs-Kibble', 'correct_answer' => false],
                    ['id' => 'dbefe2f3-b2f9-508e-8eb6-81be1db9dfdd', 'description' => 'Mecanismo de Higgs', 'correct_answer' => false]
                ]],
        ['id' => '2e1e29c9-6ede-5551-a550-d86106522127', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual mecanismo introduzido por Glashow, Iliopoulos e Maiani suprime transições neutras que mudam sabor em processos fracos?', 'difficulty' => 5, 'weight' => 988, 'alternatives' => [
                    ['id' => '94b6d3e5-9f49-582f-b06a-b7d99984c5d0', 'description' => 'Quebra quiral dinâmica', 'correct_answer' => false],
                    ['id' => 'fe726abf-31b6-5dc3-a16c-f505b5f4e4a8', 'description' => 'Mecanismo de Higgs', 'correct_answer' => false],
                    ['id' => '5e00dea3-75e1-55c4-a415-eec25bacd343', 'description' => 'Mecanismo de Brout-Englert-Higgs', 'correct_answer' => false],
                    ['id' => '4c302035-5402-5682-a2ff-e3d1f4130979', 'description' => 'Mecanismo de Higgs-Kibble', 'correct_answer' => false],
                    ['id' => '64f001e0-f1ef-58b6-b438-9f562f61c8bd', 'description' => 'Mecanismo GIM', 'correct_answer' => true]
                ]],
        ['id' => '6be97f71-eb14-5aa4-ad75-a96f8d167715', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual instabilidade ocorre quando um fluido mais denso acelera ou sustenta um fluido menos denso em uma configuração desfavorável?', 'difficulty' => 5, 'weight' => 938, 'alternatives' => [
                    ['id' => 'b80feb7f-a698-5897-9658-3c6160377212', 'description' => 'Instabilidade de Jeans gravitacional', 'correct_answer' => false],
                    ['id' => 'ba637ad6-808d-5e6e-9dcc-a4ae82453bfe', 'description' => 'Instabilidade de Richtmyer-Meshkov', 'correct_answer' => false],
                    ['id' => '1a6d45b0-801a-5f63-a440-b1647d041c19', 'description' => 'Instabilidade de Rayleigh-Taylor', 'correct_answer' => true],
                    ['id' => 'c29e844c-f1f4-587a-8e22-02823ce607c0', 'description' => 'Instabilidade de Farley-Buneman', 'correct_answer' => false],
                    ['id' => '52c4d18a-a467-5da3-a3f2-e82cb60634e3', 'description' => 'Instabilidade de Jeans', 'correct_answer' => false]
                ]],
        ['id' => '2fe1f038-12b7-5174-8bb1-20145dea17f1', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual instabilidade pode surgir na interface entre fluidos com velocidades relativas diferentes, devido ao cisalhamento?', 'difficulty' => 5, 'weight' => 854, 'alternatives' => [
                    ['id' => '86fd255b-8696-5b7a-82a1-e203564f7ef2', 'description' => 'Instabilidade de Farley-Buneman', 'correct_answer' => false],
                    ['id' => '2a22e5b0-f380-566e-8795-fe618db2319b', 'description' => 'Instabilidade de tearing', 'correct_answer' => false],
                    ['id' => '6dd62a47-3daa-55de-833d-55f68ec519b9', 'description' => 'Instabilidade de Kelvin-Helmholtz', 'correct_answer' => true],
                    ['id' => 'b1ee7f8b-09d2-5dfe-9071-cbbc24ca776d', 'description' => 'Instabilidade de Richtmyer-Meshkov', 'correct_answer' => false],
                    ['id' => 'dd0fc6d8-a671-56cf-a4d0-6e7b38b3bff8', 'description' => 'Instabilidade de Weibel', 'correct_answer' => false]
                ]],
        ['id' => 'e3de2082-03c2-541d-a504-83048152e435', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual instabilidade interfacial é desencadeada quando uma onda de choque atravessa uma interface entre fluidos de densidades distintas?', 'difficulty' => 5, 'weight' => 993, 'alternatives' => [
                    ['id' => 'a6f92607-0c39-5ae8-8eed-940ace52ebf6', 'description' => 'Instabilidade de Richtmyer-Meshkov', 'correct_answer' => true],
                    ['id' => 'f7357835-5a85-59b8-abf5-efbe3181b587', 'description' => 'Instabilidade de Saffman-Taylor', 'correct_answer' => false],
                    ['id' => '6189c4d2-2e17-54cf-8799-fbc0c7baaa42', 'description' => 'Instabilidade de Plateau-Rayleigh', 'correct_answer' => false],
                    ['id' => '003a7d07-824f-5ec5-ab9b-8ec6b653ef94', 'description' => 'Instabilidade de Weibel', 'correct_answer' => false],
                    ['id' => '32bbc469-e893-51de-87d0-645ee7ff3846', 'description' => 'Instabilidade de tearing', 'correct_answer' => false]
                ]],
        ['id' => '6dc0ab14-11a1-55c2-bc37-ce86e42b0688', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual instabilidade faz um jato cilíndrico de líquido se fragmentar em gotas devido à tensão superficial?', 'difficulty' => 5, 'weight' => 842, 'alternatives' => [
                    ['id' => '6ce93efb-be5a-5015-9d17-1c59b20cb3c2', 'description' => 'Instabilidade de Plateau-Rayleigh', 'correct_answer' => true],
                    ['id' => '33104fe9-02a9-5a10-9e13-c51361127174', 'description' => 'Instabilidade de Farley-Buneman', 'correct_answer' => false],
                    ['id' => 'cd5e19f4-70a4-59be-8a8b-3c69ce7ccdf7', 'description' => 'Instabilidade de Richtmyer-Meshkov', 'correct_answer' => false],
                    ['id' => '436820b1-2ee1-5e33-a3e2-d17ea361c543', 'description' => 'Instabilidade de Jeans gravitacional', 'correct_answer' => false],
                    ['id' => '9332281f-235f-5e7a-aae0-fa181024018c', 'description' => 'Instabilidade de Saffman-Taylor', 'correct_answer' => false]
                ]],
        ['id' => 'a214dc80-3f82-502c-9b76-3d8023441544', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual instabilidade forma padrões digitiformes quando um fluido menos viscoso desloca outro mais viscoso em um meio poroso?', 'difficulty' => 5, 'weight' => 883, 'alternatives' => [
                    ['id' => '40b4bb72-141a-5217-8f8d-24e378908579', 'description' => 'Instabilidade de Farley-Buneman', 'correct_answer' => false],
                    ['id' => '4b0ba900-a455-5112-b547-339a1bfd57ae', 'description' => 'Instabilidade de Kelvin-Helmholtz', 'correct_answer' => false],
                    ['id' => '40bc1337-c9db-51e9-9905-82916940e9e4', 'description' => 'Instabilidade de Saffman-Taylor', 'correct_answer' => true],
                    ['id' => 'edefc815-c6ca-5b94-9f79-3921a2e8a616', 'description' => 'Instabilidade de Rayleigh-Taylor', 'correct_answer' => false],
                    ['id' => 'd5fda20b-6aa8-5acb-84fc-60a00be10729', 'description' => 'Instabilidade de Weibel', 'correct_answer' => false]
                ]],
        ['id' => '0a5bf7d2-d22c-5810-a059-b7c96b08c688', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual constante adimensional caracteriza a intensidade da interação eletromagnética entre partículas carregadas?', 'difficulty' => 5, 'weight' => 869, 'alternatives' => [
                    ['id' => '8b3852dd-b7e4-5552-b114-69168f600f15', 'description' => 'Constante de estrutura fina', 'correct_answer' => true],
                    ['id' => 'e9ad22ef-75f9-52bf-89d7-537bcececb99', 'description' => 'Constante de Sommerfeld', 'correct_answer' => false],
                    ['id' => '19f09e2e-495a-56df-be12-9cdd0aea53ec', 'description' => 'Constante de Hubble', 'correct_answer' => false],
                    ['id' => '62e36f16-7c3a-5f7b-a10a-73b6498ae5d6', 'description' => 'Constante de Rydberg', 'correct_answer' => false],
                    ['id' => '47aeae71-2896-5b2c-9eef-84a5bcb7b6d4', 'description' => 'Constante de Avogadro', 'correct_answer' => false]
                ]],
        ['id' => '73661e6e-6e4e-5790-b560-cf8288679c3d', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual parâmetro da cromodinâmica quântica caracteriza a intensidade da interação entre quarks e glúons?', 'difficulty' => 5, 'weight' => 810, 'alternatives' => [
                    ['id' => 'a55be0b3-6be8-505b-8f2c-1a81ffbdce5b', 'description' => 'Constante de acoplamento forte', 'correct_answer' => true],
                    ['id' => 'f1027862-82ad-5490-829d-10461238bcd1', 'description' => 'Constante de Avogadro', 'correct_answer' => false],
                    ['id' => 'ffb6300d-d15d-57d9-b0bb-f0ac6f2818ae', 'description' => 'Constante cosmológica', 'correct_answer' => false],
                    ['id' => '756697d8-b59a-549c-98b4-0bfc4c420555', 'description' => 'Constante de Planck reduzida', 'correct_answer' => false],
                    ['id' => '1461656b-cb22-5707-a386-9b656543ced1', 'description' => 'Constante de Stefan-Boltzmann', 'correct_answer' => false]
                ]],
        ['id' => 'f9284331-03e5-5f9b-9f51-8729c79daa41', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual constante relaciona temperatura termodinâmica à escala de energia microscópica?', 'difficulty' => 5, 'weight' => 996, 'alternatives' => [
                    ['id' => '3dd3233b-946b-5898-8844-f96dc6fa4e9d', 'description' => 'Constante de Stefan-Boltzmann', 'correct_answer' => false],
                    ['id' => 'a13e52c3-7eb5-50f9-90a2-6e4ff4b2a4d1', 'description' => 'Constante de Boltzmann', 'correct_answer' => true],
                    ['id' => '12fb1680-955c-5581-88c3-8b637bf58ac2', 'description' => 'Constante de Sommerfeld', 'correct_answer' => false],
                    ['id' => 'a2398b49-402a-5f2e-8ff6-194c7ba02bc5', 'description' => 'Constante de estrutura fina', 'correct_answer' => false],
                    ['id' => 'c570dc3f-76fc-5bdf-86dc-3bce7fc606b8', 'description' => 'Constante de Hubble', 'correct_answer' => false]
                ]],
        ['id' => '00636038-cc73-5850-a665-a3b2bf039d26', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual constante, também chamada h-barra, corresponde à constante de Planck dividida por 2π?', 'difficulty' => 5, 'weight' => 968, 'alternatives' => [
                    ['id' => '4eeb9474-5784-5fef-b597-23be679bffe1', 'description' => 'Constante de Planck reduzida', 'correct_answer' => true],
                    ['id' => '6155a8f4-32cd-547e-ae5b-52c849981842', 'description' => 'Constante de Stefan-Boltzmann', 'correct_answer' => false],
                    ['id' => '1b9fd915-6426-545f-8c40-40955bc91d28', 'description' => 'Constante de Rydberg', 'correct_answer' => false],
                    ['id' => '62b7b034-af45-5a73-a9fb-eddfc98fb016', 'description' => 'Constante de Boltzmann', 'correct_answer' => false],
                    ['id' => 'd02bb3a4-1374-56a3-900a-5d2d5b6c8bc4', 'description' => 'Constante de acoplamento forte', 'correct_answer' => false]
                ]],
        ['id' => 'ceee150a-4185-57a3-b05a-4ce19f16b330', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual termo nas equações de Einstein pode representar uma densidade de energia do vácuo e contribuir para a expansão acelerada?', 'difficulty' => 5, 'weight' => 938, 'alternatives' => [
                    ['id' => '5062ddcb-4c89-5eb0-8147-0d2509750cc1', 'description' => 'Constante de Avogadro', 'correct_answer' => false],
                    ['id' => 'f3fcea56-0dd2-55b8-997d-99adf067a529', 'description' => 'Constante de Rydberg', 'correct_answer' => false],
                    ['id' => '656d07d1-930d-5768-beab-25b99738657e', 'description' => 'Constante de Sommerfeld', 'correct_answer' => false],
                    ['id' => '3321a9e2-1794-5a1d-94c2-ec996a48ed49', 'description' => 'Constante cosmológica', 'correct_answer' => true],
                    ['id' => '0932669a-352c-5f0c-bfd2-45dd181e817b', 'description' => 'Constante de acoplamento forte', 'correct_answer' => false]
                ]],
        ['id' => '242b32bb-4eae-52fc-a54d-855554f64b40', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual complexo multiproteico eucariótico transmite sinais regulatórios de fatores de transcrição à maquinaria da RNA polimerase II?', 'difficulty' => 5, 'weight' => 991, 'alternatives' => [
                    ['id' => 'e907d935-e608-5bef-8652-de702c1c24a0', 'description' => 'Complexo Mediador', 'correct_answer' => true],
                    ['id' => '8ae208f2-8fda-5733-b211-9969ba35db6a', 'description' => 'Complexo de coesina', 'correct_answer' => false],
                    ['id' => '79caf78b-8120-5e1a-9fb0-a40dba745400', 'description' => 'Complexo SWI/SNF', 'correct_answer' => false],
                    ['id' => '70c493a8-c8f6-5459-853c-ca1447f02401', 'description' => 'Complexo de pré-iniciação', 'correct_answer' => false],
                    ['id' => '66e8b68f-5baf-57c5-ae47-633b349e29de', 'description' => 'Complexo de condensina', 'correct_answer' => false]
                ]],
        ['id' => 'c01875b3-3ca8-59d3-bcf4-123aa62d8e00', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual fator geral de transcrição contém TBP e TAFs e participa do reconhecimento do promotor em genes transcritos pela RNA polimerase II?', 'difficulty' => 5, 'weight' => 946, 'alternatives' => [
                    ['id' => '643bae48-092f-5ad1-9ac7-f097e336ae13', 'description' => 'Complexo SWI/SNF', 'correct_answer' => false],
                    ['id' => 'c30f58dd-2112-5e75-8503-d3e6206cf7cd', 'description' => 'Complexo TFIID', 'correct_answer' => true],
                    ['id' => '4e516826-a708-5e97-8ccf-9eb52e127d99', 'description' => 'Complexo Mediador', 'correct_answer' => false],
                    ['id' => 'f4387830-d863-590d-9849-5978dbd26bf9', 'description' => 'Complexo de pré-iniciação', 'correct_answer' => false],
                    ['id' => 'fcd790f3-fa51-5714-b0d0-c2be7fbfad4f', 'description' => 'Complexo PRC2', 'correct_answer' => false]
                ]],
        ['id' => '5df23ef0-f600-502f-9fdc-514a43772862', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual fator geral de transcrição possui atividades helicase e quinase importantes na iniciação da transcrição pela RNA polimerase II?', 'difficulty' => 5, 'weight' => 994, 'alternatives' => [
                    ['id' => '2c62a886-e2d0-53d5-8d2a-170056d60785', 'description' => 'Complexo de pré-iniciação', 'correct_answer' => false],
                    ['id' => '03a04ad7-1cb0-5360-9ab6-d023dbe35276', 'description' => 'Complexo Mediador', 'correct_answer' => false],
                    ['id' => '196aa16f-ad30-5c82-9e3d-52cce586ac23', 'description' => 'Complexo TFIIH', 'correct_answer' => true],
                    ['id' => '5e9aaa6c-35c6-5981-8351-3bfbeb93da66', 'description' => 'Complexo spliceossomo', 'correct_answer' => false],
                    ['id' => 'c1d86fa9-9409-5a70-a772-2e366c50b127', 'description' => 'Complexo RNA polimerase II', 'correct_answer' => false]
                ]],
        ['id' => '20c829ab-51f3-5aca-b680-2a1cf0c0c965', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual família de complexos remodeladores de cromatina utiliza ATP para alterar o posicionamento de nucleossomos?', 'difficulty' => 5, 'weight' => 981, 'alternatives' => [
                    ['id' => '838765ed-114c-5b38-8c5d-4857e276d716', 'description' => 'Complexo PRC2', 'correct_answer' => false],
                    ['id' => '62ccb147-078e-5174-887a-59401e760942', 'description' => 'Complexo SWI/SNF', 'correct_answer' => true],
                    ['id' => '72e79911-585e-503a-8b2b-6f353217284b', 'description' => 'Complexo de pré-iniciação', 'correct_answer' => false],
                    ['id' => 'e088a584-5590-5443-84a3-f64bb67dca86', 'description' => 'Complexo de coesina', 'correct_answer' => false],
                    ['id' => '5e4cc86a-c519-5527-a2e6-fc252f1f7e0a', 'description' => 'Complexo de condensina', 'correct_answer' => false]
                ]],
        ['id' => '68fe5ef4-1df8-5116-b851-8f7a50e68c81', 'locale' => 'pt-BR', 'category' => 'ab548181-fc35-5a4c-b682-bea6706bda13', 'question' => 'Qual complexo repressivo de cromatina catalisa a trimetilação da lisina 27 da histona H3?', 'difficulty' => 5, 'weight' => 863, 'alternatives' => [
                    ['id' => '09b84b4b-3674-5889-a17c-ebd6e0f8ef06', 'description' => 'Complexo de pré-iniciação', 'correct_answer' => false],
                    ['id' => '977d66b6-bcfb-5344-9db9-138f3c11979b', 'description' => 'Complexo PRC2', 'correct_answer' => true],
                    ['id' => '7d25f428-462e-552b-97cb-959e36aac9c7', 'description' => 'Complexo TFIID', 'correct_answer' => false],
                    ['id' => 'b50bc30b-7418-513f-9cb3-ed979f84c7e9', 'description' => 'Complexo SWI/SNF', 'correct_answer' => false],
                    ['id' => 'af26fd4b-7509-52a9-967f-c61c7ffc3d27', 'description' => 'Complexo de condensina', 'correct_answer' => false]
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
