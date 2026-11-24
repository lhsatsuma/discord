<?php

namespace Database\Seeders\Trivia;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TriviaPtBrHistoriaSeeder extends Seeder
{
    private const CATEGORY = ['id' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'created_by' => 'SYSTEM', 'short_description' => 'história', 'description' => 'Historia'];

    private const QUESTIONS = [
        ['id' => 'b676c1d0-cbc8-582c-8bef-f0fce4ac62d3', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual civilização antiga construiu as grandes pirâmides de Gizé?', 'difficulty' => 1, 'weight' => 159, 'alternatives' => [
                    ['id' => '90fb59e5-daee-5ee9-a2d2-a03df3fbaaf5', 'description' => 'Império Persa', 'correct_answer' => false],
                    ['id' => '83024a24-fcd4-5b67-a9e8-52eda23936a2', 'description' => 'Império Inca', 'correct_answer' => false],
                    ['id' => 'd1ac5760-9e46-50d0-b457-fe9e0dbe4db1', 'description' => 'Mesopotâmia', 'correct_answer' => false],
                    ['id' => 'ae538e7b-d93b-5cc7-9421-ec5b30bd758c', 'description' => 'Egito Antigo', 'correct_answer' => true],
                    ['id' => '12c7a7f6-932f-524f-84f6-20b4792b153a', 'description' => 'Roma Antiga', 'correct_answer' => false]
                ]],
        ['id' => '691321c8-16cf-5d09-a2b3-6bc2e52e810f', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual civilização é associada ao desenvolvimento inicial da democracia em Atenas?', 'difficulty' => 1, 'weight' => 183, 'alternatives' => [
                    ['id' => '222c2081-c001-5b26-9177-446c27fea8a0', 'description' => 'Grécia Antiga', 'correct_answer' => true],
                    ['id' => 'a86f57e7-e328-510c-b736-e128504c3611', 'description' => 'Roma Antiga', 'correct_answer' => false],
                    ['id' => 'c3ca8dbe-ce99-5c14-9c06-a50adc6e6a9e', 'description' => 'Império Maia', 'correct_answer' => false],
                    ['id' => 'aed5beb8-b733-5d1c-bc6a-1463b7e2ecd1', 'description' => 'Egito Antigo', 'correct_answer' => false],
                    ['id' => 'eeed4655-a934-555a-9bc4-f6a4cea50d85', 'description' => 'Império Asteca', 'correct_answer' => false]
                ]],
        ['id' => 'ba80c7c4-2616-55d6-a154-cbf45d1117d4', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual civilização antiga construiu o Coliseu?', 'difficulty' => 1, 'weight' => 104, 'alternatives' => [
                    ['id' => 'ac687e33-ac61-596c-a996-b00be3f204b9', 'description' => 'Fenícia', 'correct_answer' => false],
                    ['id' => '36a6e785-4549-59d5-926b-1679088fa4e6', 'description' => 'Mesopotâmia', 'correct_answer' => false],
                    ['id' => '3a6548cd-54e4-50fa-9f4f-eef01bca47e8', 'description' => 'Roma Antiga', 'correct_answer' => true],
                    ['id' => '49d86bf3-fc1c-5701-8d8d-b2642cb50137', 'description' => 'Egito Antigo', 'correct_answer' => false],
                    ['id' => 'e208335c-9d72-5cf2-96f5-ce1f14b2ef13', 'description' => 'Grécia Antiga', 'correct_answer' => false]
                ]],
        ['id' => 'c34e3ca8-c2bc-5a13-b0fb-f40646277d83', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual região histórica entre os rios Tigre e Eufrates é frequentemente chamada de berço de antigas civilizações?', 'difficulty' => 1, 'weight' => 110, 'alternatives' => [
                    ['id' => 'f9c81c88-b6c8-5ad1-a5b0-d69c211654b0', 'description' => 'Império Maia', 'correct_answer' => false],
                    ['id' => '970114be-44c8-55a5-b853-60aecb763ef0', 'description' => 'Mesopotâmia', 'correct_answer' => true],
                    ['id' => 'ee8a29d8-669e-5b00-acce-d0c3770fb0c9', 'description' => 'Império Inca', 'correct_answer' => false],
                    ['id' => '14bb2706-af90-595f-bbbb-455627b55212', 'description' => 'Império Persa', 'correct_answer' => false],
                    ['id' => 'ba3ec88d-5627-5ad8-94f0-7a3dae953162', 'description' => 'Grécia Antiga', 'correct_answer' => false]
                ]],
        ['id' => '4a836830-d2ee-5c28-94be-d12cd7f1bb6d', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual civilização construiu partes da Grande Muralha para proteger suas fronteiras?', 'difficulty' => 1, 'weight' => 151, 'alternatives' => [
                    ['id' => '83c07245-c7e5-53bd-8c69-8873db2ee5ee', 'description' => 'Roma Antiga', 'correct_answer' => false],
                    ['id' => 'b2f8904f-1480-5e13-9484-39d1370079e3', 'description' => 'Império Inca', 'correct_answer' => false],
                    ['id' => '4b48d09c-19be-5589-81aa-26547db92e18', 'description' => 'Império Maia', 'correct_answer' => false],
                    ['id' => 'ae3bc9fb-6904-5f4e-9e6a-06f484c7b29b', 'description' => 'Grécia Antiga', 'correct_answer' => false],
                    ['id' => '4531f07c-9e2f-5045-a357-922d84cdc0fa', 'description' => 'China Antiga', 'correct_answer' => true]
                ]],
        ['id' => '076b5433-7af2-50c0-bd2b-e9221f21062c', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual conflito começou em 1914 após o assassinato do arquiduque Francisco Ferdinando?', 'difficulty' => 1, 'weight' => 124, 'alternatives' => [
                    ['id' => '7b2b9bd8-79f9-5926-8f3b-681268e73686', 'description' => 'Guerra da Coreia', 'correct_answer' => false],
                    ['id' => 'd402fb6c-ac1f-51ab-8b2c-668c891d3619', 'description' => 'Guerra dos Cem Anos', 'correct_answer' => false],
                    ['id' => 'aa04eecd-d322-59c9-b033-25cd4d678fda', 'description' => 'Guerra do Paraguai', 'correct_answer' => false],
                    ['id' => 'e5b70479-7aec-58c3-8ed7-03e583e7dcb3', 'description' => 'Guerra de Secessão', 'correct_answer' => false],
                    ['id' => '5a66eb3b-6c65-58c1-b324-83bcf6e867a6', 'description' => 'Primeira Guerra Mundial', 'correct_answer' => true]
                ]],
        ['id' => 'fae4c48c-0923-5a12-b9d4-5bd1a5632a47', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual guerra terminou em 1945 após a rendição da Alemanha e do Japão?', 'difficulty' => 1, 'weight' => 147, 'alternatives' => [
                    ['id' => '60d0b25e-6516-5eff-8668-9018c90386d4', 'description' => 'Guerra do Golfo', 'correct_answer' => false],
                    ['id' => '02bf84aa-902e-5954-87d3-952c06618bff', 'description' => 'Segunda Guerra Mundial', 'correct_answer' => true],
                    ['id' => '61f8c410-c35a-552e-a8e0-b5fdd9ba634d', 'description' => 'Primeira Guerra Mundial', 'correct_answer' => false],
                    ['id' => '173f2d04-f665-5a89-99bc-8a87aaa04b27', 'description' => 'Guerra do Vietnã', 'correct_answer' => false],
                    ['id' => 'b2a234c1-71fd-5c58-b57f-c5640d5fe777', 'description' => 'Guerra da Coreia', 'correct_answer' => false]
                ]],
        ['id' => '74e071a6-60ae-5000-b6b8-efaf611ccfdc', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual período de rivalidade geopolítica opôs principalmente Estados Unidos e União Soviética após 1945?', 'difficulty' => 1, 'weight' => 156, 'alternatives' => [
                    ['id' => '21eedef1-e22d-5af5-81e4-9197b8a6413b', 'description' => 'Guerra Fria', 'correct_answer' => true],
                    ['id' => 'b1e7feaf-e2ff-5b84-b795-ff62299ddd78', 'description' => 'Guerra de Secessão', 'correct_answer' => false],
                    ['id' => 'fcbb9016-8220-5a8b-bae7-35c853073134', 'description' => 'Guerra dos Cem Anos', 'correct_answer' => false],
                    ['id' => '80d62c17-9744-5462-870b-a40a35590455', 'description' => 'Guerra do Golfo', 'correct_answer' => false],
                    ['id' => '98080ff1-290e-510b-88a8-0ba58444aaf5', 'description' => 'Primeira Guerra Mundial', 'correct_answer' => false]
                ]],
        ['id' => 'd1627651-00a7-563e-8553-d7d4c3394d1d', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual conflito começou em 1950 com a invasão da Coreia do Sul pela Coreia do Norte?', 'difficulty' => 1, 'weight' => 184, 'alternatives' => [
                    ['id' => 'efd17a7b-51e4-500c-9fc7-0061e1346334', 'description' => 'Guerra do Vietnã', 'correct_answer' => false],
                    ['id' => '6501e1d5-f3fc-555e-ab43-cb5fab0def63', 'description' => 'Guerra do Golfo', 'correct_answer' => false],
                    ['id' => 'caff0aba-4f45-55fb-a293-94a2f96a0a9e', 'description' => 'Guerra da Coreia', 'correct_answer' => true],
                    ['id' => '2de537e7-9ca8-5613-8d4a-ee87e5c8cef1', 'description' => 'Primeira Guerra Mundial', 'correct_answer' => false],
                    ['id' => '5008f313-ea04-57d7-8a08-d8c072c517e4', 'description' => 'Guerra Fria', 'correct_answer' => false]
                ]],
        ['id' => '8cac759e-5c25-56db-a8ea-9224de603017', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual conflito envolveu o Vietnã do Norte, o Vietnã do Sul e uma intervenção militar dos Estados Unidos?', 'difficulty' => 1, 'weight' => 140, 'alternatives' => [
                    ['id' => '381bd1a8-05db-5b37-8a1f-720df6eb87ca', 'description' => 'Guerra do Vietnã', 'correct_answer' => true],
                    ['id' => '6c64acc3-9002-5c18-af81-ce6a52b0700f', 'description' => 'Guerra de Secessão', 'correct_answer' => false],
                    ['id' => 'f63a096a-d5d4-5ceb-9219-07dec371d463', 'description' => 'Guerra do Paraguai', 'correct_answer' => false],
                    ['id' => '3a29bfe8-de8f-5fa3-a8c4-5a6ad1ff16c7', 'description' => 'Primeira Guerra Mundial', 'correct_answer' => false],
                    ['id' => 'baa41c6c-040a-51ee-9c1f-d104e4d85ddc', 'description' => 'Guerra do Golfo', 'correct_answer' => false]
                ]],
        ['id' => '9eb9d5a0-4ba5-580c-8e73-a821bf1587f2', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual navegador português chegou à costa do atual Brasil em 1500?', 'difficulty' => 1, 'weight' => 197, 'alternatives' => [
                    ['id' => '8a01274f-6db4-5f34-a160-ddaaf3eb4607', 'description' => 'Francisco Pizarro', 'correct_answer' => false],
                    ['id' => '99fb4e16-4192-520c-9d70-3f3686127694', 'description' => 'Pedro Álvares Cabral', 'correct_answer' => true],
                    ['id' => 'decad7dd-8636-597b-aebe-f0c935d2d16b', 'description' => 'Vasco da Gama', 'correct_answer' => false],
                    ['id' => '2b60f176-14c9-5aa3-af6a-4e0b3aaf62cb', 'description' => 'Bartolomeu Dias', 'correct_answer' => false],
                    ['id' => '6fcc94ae-44f0-50f8-9f97-0d476090bb31', 'description' => 'Hernán Cortés', 'correct_answer' => false]
                ]],
        ['id' => '455c6abf-ffb6-53ad-85ef-25cf25e01d3a', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual navegador liderou a expedição espanhola que chegou ao Caribe em 1492?', 'difficulty' => 1, 'weight' => 140, 'alternatives' => [
                    ['id' => '2b2d7fb1-15c2-5f15-9f45-832c4b8821f9', 'description' => 'Cristóvão Colombo', 'correct_answer' => true],
                    ['id' => 'd6dd4c01-d4d5-5d40-bfcd-67ba92ec0be5', 'description' => 'Pedro Álvares Cabral', 'correct_answer' => false],
                    ['id' => '07bc13dd-fb32-5bde-b4f9-9026d3a0b272', 'description' => 'Vasco da Gama', 'correct_answer' => false],
                    ['id' => '59e2d284-d10c-5e42-b26b-29616cbda114', 'description' => 'Francis Drake', 'correct_answer' => false],
                    ['id' => '3446b02e-926a-51ab-b4a2-491522656c3b', 'description' => 'Bartolomeu Dias', 'correct_answer' => false]
                ]],
        ['id' => 'cf0dde6e-0771-5be6-9641-b1690e8ab31d', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual navegador português chegou à Índia por via marítima contornando a África em 1498?', 'difficulty' => 1, 'weight' => 185, 'alternatives' => [
                    ['id' => 'f6820423-3720-5ce8-b413-828d999b4558', 'description' => 'James Cook', 'correct_answer' => false],
                    ['id' => '7bd2cd52-84ed-5958-b0a9-aa07a8364f45', 'description' => 'Bartolomeu Dias', 'correct_answer' => false],
                    ['id' => 'b51c9169-2633-50e5-a845-badd564f83f6', 'description' => 'Hernán Cortés', 'correct_answer' => false],
                    ['id' => '2d6cb0d1-9d15-593b-8aad-a2afd1573f8c', 'description' => 'Pedro Álvares Cabral', 'correct_answer' => false],
                    ['id' => '57a5df01-2cee-5c3e-a65f-b7c7046127e2', 'description' => 'Vasco da Gama', 'correct_answer' => true]
                ]],
        ['id' => '984bf451-4596-5ecc-9b13-e63d81d3d5dc', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual navegador liderou a expedição que iniciou a primeira circum-navegação do globo?', 'difficulty' => 1, 'weight' => 168, 'alternatives' => [
                    ['id' => '45d73b95-7cc7-5c5d-a190-4e59cba99a6a', 'description' => 'Fernão de Magalhães', 'correct_answer' => true],
                    ['id' => 'd8322b2e-e514-5982-a32e-cbbb7386644a', 'description' => 'James Cook', 'correct_answer' => false],
                    ['id' => 'c32628e0-d89d-5c11-ba92-35f028f41523', 'description' => 'Francisco Pizarro', 'correct_answer' => false],
                    ['id' => 'b3c2a636-0398-5199-a951-c9bc82e17bf7', 'description' => 'Bartolomeu Dias', 'correct_answer' => false],
                    ['id' => '8aad97f7-8e8c-5c81-b4ca-06147718d10b', 'description' => 'Hernán Cortés', 'correct_answer' => false]
                ]],
        ['id' => '379cf324-4e11-52da-bc1b-bd357d770dd3', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual navegador português dobrou o cabo da Boa Esperança em 1488?', 'difficulty' => 1, 'weight' => 137, 'alternatives' => [
                    ['id' => '964ea236-4b3d-57ef-bab4-f49ad6dc4d58', 'description' => 'Bartolomeu Dias', 'correct_answer' => true],
                    ['id' => '1f9342bf-60db-53f7-a9ed-f204b6b74520', 'description' => 'Américo Vespúcio', 'correct_answer' => false],
                    ['id' => 'c9235109-b90a-5157-b2e0-bc9f65ceaf92', 'description' => 'Francisco Pizarro', 'correct_answer' => false],
                    ['id' => 'f11db670-eea6-5a2f-bd4e-f68d92adc40e', 'description' => 'James Cook', 'correct_answer' => false],
                    ['id' => '14fd31d9-4f23-5cc4-8137-137c4c6cda87', 'description' => 'Cristóvão Colombo', 'correct_answer' => false]
                ]],
        ['id' => 'a4ec9052-2763-5748-9fff-2558536177dd', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual processo político foi proclamado por Dom Pedro em 7 de setembro de 1822?', 'difficulty' => 1, 'weight' => 121, 'alternatives' => [
                    ['id' => '571c1523-529d-55e8-a0ff-1e3c763aea0f', 'description' => 'Independência do Chile', 'correct_answer' => false],
                    ['id' => 'd7193ed0-e70d-50c7-af63-b44a4cbcc659', 'description' => 'Independência da Argentina', 'correct_answer' => false],
                    ['id' => 'ca74ae3b-b603-5df8-b7c9-624f6d13e0b3', 'description' => 'Independência do México', 'correct_answer' => false],
                    ['id' => 'dab1e9c7-11a5-515e-8520-d6e5a90ec433', 'description' => 'Independência do Brasil', 'correct_answer' => true],
                    ['id' => '3ebdd28f-027f-5e66-9872-a90244f6afcb', 'description' => 'Revolução Haitiana', 'correct_answer' => false]
                ]],
        ['id' => 'fa63ce86-0414-52e5-afe5-42b70d24c92c', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual declaração de 1776 marcou a ruptura das Treze Colônias com a Grã-Bretanha?', 'difficulty' => 1, 'weight' => 147, 'alternatives' => [
                    ['id' => 'bfb3b362-bbfa-5caa-a27f-2741295b7ac8', 'description' => 'Independência da Indonésia', 'correct_answer' => false],
                    ['id' => '87aae4e3-35c9-534c-a252-0ff3372fa9d0', 'description' => 'Revolução Francesa', 'correct_answer' => false],
                    ['id' => '8d2deed3-e40c-5026-919e-2fa32e9eec29', 'description' => 'Independência do Brasil', 'correct_answer' => false],
                    ['id' => 'd8f20a59-250e-5e80-838e-1ee701fee28b', 'description' => 'Independência do México', 'correct_answer' => false],
                    ['id' => 'ef25cd02-4ae3-5aa3-92a1-b586dbb7e061', 'description' => 'Independência dos Estados Unidos', 'correct_answer' => true]
                ]],
        ['id' => 'f566409e-238b-57fd-a1ad-f64532d9a38d', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual revolução começou em 1789 e teve a queda da Bastilha como um de seus marcos?', 'difficulty' => 1, 'weight' => 163, 'alternatives' => [
                    ['id' => 'd60f9f05-ed91-55bf-97b7-bcba0ff4c859', 'description' => 'Revolução Haitiana', 'correct_answer' => false],
                    ['id' => '8cda2f7c-de3e-5c53-b149-3b4775ab046a', 'description' => 'Independência do Chile', 'correct_answer' => false],
                    ['id' => '6edafd2b-a48b-5a08-822e-2949d4829364', 'description' => 'Independência da Índia', 'correct_answer' => false],
                    ['id' => 'c7b32934-7ca6-5770-9ee2-877e52b45f08', 'description' => 'Independência do Peru', 'correct_answer' => false],
                    ['id' => '0810867c-19e1-5b5e-9618-1671878f1715', 'description' => 'Revolução Francesa', 'correct_answer' => true]
                ]],
        ['id' => 'bd217720-3a16-543d-afd0-93c128c9f3c9', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual revolução, iniciada em 1791, levou à criação da primeira república negra independente?', 'difficulty' => 1, 'weight' => 144, 'alternatives' => [
                    ['id' => '461c7f48-dfcf-5b5d-be60-01cb1e2e3b15', 'description' => 'Independência do Brasil', 'correct_answer' => false],
                    ['id' => '51d62593-d138-5293-8b99-ded5197b68ea', 'description' => 'Revolução Francesa', 'correct_answer' => false],
                    ['id' => '1d12fdcb-7dae-51b7-af9c-7ee5c8ef0764', 'description' => 'Revolução Haitiana', 'correct_answer' => true],
                    ['id' => 'dec393c7-3ab6-592a-a145-6934429682d0', 'description' => 'Independência do Chile', 'correct_answer' => false],
                    ['id' => 'a6aee8e2-33fe-5805-8f81-58be868e439c', 'description' => 'Independência da Índia', 'correct_answer' => false]
                ]],
        ['id' => '78821835-417c-57a3-ad6b-580492381419', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual processo de independência começou em 1810 com o Grito de Dolores?', 'difficulty' => 1, 'weight' => 188, 'alternatives' => [
                    ['id' => 'fa5ae550-2ec4-51bd-9337-cb343932d01b', 'description' => 'Revolução Francesa', 'correct_answer' => false],
                    ['id' => '0256b9d9-5458-5fec-810a-84ae04953470', 'description' => 'Independência da Argentina', 'correct_answer' => false],
                    ['id' => '86dc6eec-4105-55b0-9815-8c2680f25480', 'description' => 'Independência do Brasil', 'correct_answer' => false],
                    ['id' => '400bb7a1-10fa-5a2e-aea8-77638b71e3f8', 'description' => 'Independência dos Estados Unidos', 'correct_answer' => false],
                    ['id' => 'ed51fde6-6999-5006-9b9e-61325313f665', 'description' => 'Independência do México', 'correct_answer' => true]
                ]],
        ['id' => '5864759b-2616-5d1b-b95e-9389340288cb', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual imperador proclamou a independência do Brasil em 1822?', 'difficulty' => 1, 'weight' => 121, 'alternatives' => [
                    ['id' => '4be6fe4f-dc46-5135-850e-e217c7ba8482', 'description' => 'Dom Pedro II', 'correct_answer' => false],
                    ['id' => 'ce5f6e0a-6d53-5be3-b9f1-1cbf189161c2', 'description' => 'Prudente de Morais', 'correct_answer' => false],
                    ['id' => '7f3cb82c-9810-5865-aeed-75017ce20a84', 'description' => 'Campos Sales', 'correct_answer' => false],
                    ['id' => 'dd07b411-dbd5-5fce-8a78-c05c0bc2e186', 'description' => 'Juscelino Kubitschek', 'correct_answer' => false],
                    ['id' => '1af9c743-b893-5436-a7c1-214791d0399c', 'description' => 'Dom Pedro I', 'correct_answer' => true]
                ]],
        ['id' => '8f7d6e1c-fa7e-5f58-ad6f-15591cd168ea', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual imperador brasileiro governou durante grande parte do Segundo Reinado, de 1840 a 1889?', 'difficulty' => 1, 'weight' => 117, 'alternatives' => [
                    ['id' => '3bfabc88-5b39-52a8-a5c5-ffbbc5887385', 'description' => 'Getúlio Vargas', 'correct_answer' => false],
                    ['id' => 'b4432542-03bb-51b2-88d8-441ad6dfc003', 'description' => 'Prudente de Morais', 'correct_answer' => false],
                    ['id' => '711654bc-abf7-52b4-a8b3-8ce71650f45b', 'description' => 'Floriano Peixoto', 'correct_answer' => false],
                    ['id' => '26fbfcd2-b2ff-592f-9da2-9777c6dce642', 'description' => 'Dom Pedro II', 'correct_answer' => true],
                    ['id' => 'cf5b7a0f-0bf1-54f0-ad8c-a83b724273e0', 'description' => 'Dom Pedro I', 'correct_answer' => false]
                ]],
        ['id' => '718ecc82-3369-5f80-80a9-6383b775f393', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual presidente brasileiro liderou o país durante o Estado Novo?', 'difficulty' => 1, 'weight' => 128, 'alternatives' => [
                    ['id' => '4945e650-89e9-582c-8f58-9650dc215f37', 'description' => 'Getúlio Vargas', 'correct_answer' => true],
                    ['id' => '8fe9ab47-1bb6-5d5c-96ab-525435290624', 'description' => 'João Goulart', 'correct_answer' => false],
                    ['id' => '0dff38b6-54c8-536c-96dd-ca05b4024ed8', 'description' => 'Dom Pedro II', 'correct_answer' => false],
                    ['id' => 'a6e825e0-f2d3-533e-86dd-9523149823e3', 'description' => 'Dom Pedro I', 'correct_answer' => false],
                    ['id' => 'eb241877-f69a-56b8-9f7a-63596d9e45ae', 'description' => 'Prudente de Morais', 'correct_answer' => false]
                ]],
        ['id' => 'b93f9011-7f7e-5f68-86fd-a0fbcb0f127d', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual presidente brasileiro lançou o Plano de Metas e inaugurou Brasília em 1960?', 'difficulty' => 1, 'weight' => 150, 'alternatives' => [
                    ['id' => '1e30bf9d-4a46-5e66-bd6b-d278d76dda31', 'description' => 'Dom Pedro II', 'correct_answer' => false],
                    ['id' => 'bd0f29f1-dad6-5afd-9209-11e9a05963f1', 'description' => 'Tancredo Neves', 'correct_answer' => false],
                    ['id' => '6e87354b-7d0d-5dae-ac3d-b94de20798bd', 'description' => 'Dom Pedro I', 'correct_answer' => false],
                    ['id' => 'f8ef0030-bdf7-54d0-9b18-c3db64865b2b', 'description' => 'Juscelino Kubitschek', 'correct_answer' => true],
                    ['id' => '4a8a354f-2c6a-55f5-93e3-e0d7e96e992b', 'description' => 'Deodoro da Fonseca', 'correct_answer' => false]
                ]],
        ['id' => '9c6ae3c3-e463-5ff2-8c2d-da0a1451a6c8', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual militar proclamou a República no Brasil em 1889 e se tornou seu primeiro presidente?', 'difficulty' => 1, 'weight' => 188, 'alternatives' => [
                    ['id' => '1d325d01-8108-5036-a869-ac5eaafe152c', 'description' => 'Getúlio Vargas', 'correct_answer' => false],
                    ['id' => '48168113-b4d8-5fdd-a3d3-1b8676036baf', 'description' => 'Tancredo Neves', 'correct_answer' => false],
                    ['id' => '59bb80cc-328c-5282-8669-f6e6c2636013', 'description' => 'Deodoro da Fonseca', 'correct_answer' => true],
                    ['id' => '56803dd2-57dc-5234-8e73-454356aae0a6', 'description' => 'Campos Sales', 'correct_answer' => false],
                    ['id' => 'd52618b4-a4bb-5a2a-b70f-33cd1051e10a', 'description' => 'Prudente de Morais', 'correct_answer' => false]
                ]],
        ['id' => 'dc3685c4-1646-5963-aaef-c47b7957c569', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual período histórico convencionalmente termina com a queda do Império Romano do Ocidente, em 476?', 'difficulty' => 1, 'weight' => 191, 'alternatives' => [
                    ['id' => 'd6b7e278-feb5-567a-b56a-feab43f823b3', 'description' => 'Idade Contemporânea', 'correct_answer' => false],
                    ['id' => '894f1d38-daa0-54c2-b113-d7f7406e97e7', 'description' => 'Idade Antiga', 'correct_answer' => true],
                    ['id' => '7194e31b-b1bb-50cc-8754-bb605f6f6714', 'description' => 'Idade Moderna', 'correct_answer' => false],
                    ['id' => '7e3b0fbd-606b-550c-8684-6058a04298fb', 'description' => 'Pré-História', 'correct_answer' => false],
                    ['id' => '4f0565ae-bb53-5135-b30e-71724390bf90', 'description' => 'Idade do Bronze', 'correct_answer' => false]
                ]],
        ['id' => 'e77c5e2a-b9c2-5a3f-bdab-aa4e4701a68f', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual período da história europeia é convencionalmente situado entre a queda de Roma e o início da era moderna?', 'difficulty' => 1, 'weight' => 144, 'alternatives' => [
                    ['id' => '4821fcb2-8642-5ae1-8830-ee7a4aaeeca0', 'description' => 'Idade do Bronze', 'correct_answer' => false],
                    ['id' => 'ebd1bc44-4cee-5a32-a9f0-e585502ae62a', 'description' => 'Idade Média', 'correct_answer' => true],
                    ['id' => 'aff655c2-dbc9-5fc8-a904-5d5f366792a7', 'description' => 'Idade Moderna', 'correct_answer' => false],
                    ['id' => 'c845fc06-e9f9-5210-b252-25678da426d8', 'description' => 'Paleolítico', 'correct_answer' => false],
                    ['id' => '10cb8e00-4f8c-52ea-aa7e-0f22b4035d34', 'description' => 'Pré-História', 'correct_answer' => false]
                ]],
        ['id' => 'f3e1f125-06c2-5110-9a03-d2e507cab5e6', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual período histórico europeu costuma ser situado entre o fim da Idade Média e a Revolução Francesa?', 'difficulty' => 1, 'weight' => 100, 'alternatives' => [
                    ['id' => 'defd467d-3aae-508b-9ac8-016d4dc5d7cb', 'description' => 'Idade Antiga', 'correct_answer' => false],
                    ['id' => 'fec67026-0bf4-546c-ae0a-bf68853dc802', 'description' => 'Idade Moderna', 'correct_answer' => true],
                    ['id' => 'c933dfe9-eb0c-538e-895c-f9ebf6d1dc90', 'description' => 'Idade do Bronze', 'correct_answer' => false],
                    ['id' => 'cc629a7f-9a67-5b84-bfcb-c3ca995cc312', 'description' => 'Neolítico', 'correct_answer' => false],
                    ['id' => '1770fc6a-cec8-5690-ab1c-24b4a0521ad2', 'description' => 'Idade Contemporânea', 'correct_answer' => false]
                ]],
        ['id' => '08921606-2777-53fd-a937-e3ebaba048c0', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual período histórico convencionalmente começa com a Revolução Francesa, em 1789?', 'difficulty' => 1, 'weight' => 127, 'alternatives' => [
                    ['id' => '374a6c54-efca-5e31-b4a7-66d376aad099', 'description' => 'Idade Contemporânea', 'correct_answer' => true],
                    ['id' => 'afb5448b-f867-57ac-85cb-2e78f56ca27d', 'description' => 'Idade do Ferro', 'correct_answer' => false],
                    ['id' => 'bb00d711-d3f4-5719-96ad-3dee77a5980a', 'description' => 'Idade do Bronze', 'correct_answer' => false],
                    ['id' => '106a9205-a689-5da1-be0c-7f398f7a08bc', 'description' => 'Idade Moderna', 'correct_answer' => false],
                    ['id' => '818c9138-379f-5b11-abc0-e0654677fd45', 'description' => 'Idade Média', 'correct_answer' => false]
                ]],
        ['id' => '5c916d1b-f560-529e-bfaa-2182a2c0f985', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual período da Pré-História é associado à expansão da agricultura e ao sedentarismo?', 'difficulty' => 1, 'weight' => 160, 'alternatives' => [
                    ['id' => 'a49c204a-0c3d-5ac6-944c-41f1c78bf2ab', 'description' => 'Idade Média', 'correct_answer' => false],
                    ['id' => '58d5701e-bc97-5b79-8fb3-1f2c4f9ee5f4', 'description' => 'Idade Antiga', 'correct_answer' => false],
                    ['id' => '907dc249-f2ce-546b-8bbc-5a8497cda34f', 'description' => 'Neolítico', 'correct_answer' => true],
                    ['id' => '7b73d040-e825-50fe-8f30-8d58c2b3535b', 'description' => 'Idade Contemporânea', 'correct_answer' => false],
                    ['id' => '05fadd1f-2bf0-529a-8dd2-1f3cb249618d', 'description' => 'Idade do Bronze', 'correct_answer' => false]
                ]],
        ['id' => 'c4867a7c-1b49-5bec-adc1-c0f4cc6b4aec', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual lei brasileira, assinada em 13 de maio de 1888, aboliu juridicamente a escravidão?', 'difficulty' => 1, 'weight' => 159, 'alternatives' => [
                    ['id' => '4c5ec34c-0858-5f66-a808-f13099652ad5', 'description' => 'Lei de Terras', 'correct_answer' => false],
                    ['id' => 'ab5f7713-d06f-5e67-bc94-bdee85a18cd9', 'description' => 'Lei Áurea', 'correct_answer' => true],
                    ['id' => '759cf39b-064f-529f-ab00-f63d9b8ffa86', 'description' => 'Lei dos Sexagenários', 'correct_answer' => false],
                    ['id' => '4effea44-1fc8-5a5f-9325-7ee97d518946', 'description' => 'Lei Saraiva', 'correct_answer' => false],
                    ['id' => '0a154cb4-6cbd-5b54-ba77-e40d89b76cb7', 'description' => 'Lei Eusébio de Queirós', 'correct_answer' => false]
                ]],
        ['id' => '40a0752a-3445-5c3a-8b97-9115cb510fd0', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual lei de 1850 proibiu o tráfico transatlântico de escravizados para o Brasil?', 'difficulty' => 1, 'weight' => 131, 'alternatives' => [
                    ['id' => '13a83459-c48b-5495-8d32-df59f14b2607', 'description' => 'Lei Feijó', 'correct_answer' => false],
                    ['id' => '72ea06bc-09d1-5d27-a3c1-bf8cf80c7cfb', 'description' => 'Lei Eusébio de Queirós', 'correct_answer' => true],
                    ['id' => '42da320c-45d6-59e2-b720-c1b096f7b1dd', 'description' => 'Lei de Terras', 'correct_answer' => false],
                    ['id' => '7497a99d-0fd2-530c-a7d8-e10259ef53e1', 'description' => 'Lei Áurea de 1888', 'correct_answer' => false],
                    ['id' => '9260b428-4b83-5535-9187-f8388f1cad2a', 'description' => 'Lei Saraiva', 'correct_answer' => false]
                ]],
        ['id' => '7e11be8e-d7ed-5783-b277-862098af99b1', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual lei de 1871 declarou livres os filhos de mulheres escravizadas nascidos a partir de sua promulgação?', 'difficulty' => 1, 'weight' => 106, 'alternatives' => [
                    ['id' => '81f5f2c0-6126-54bb-aeda-53b90b8d17f6', 'description' => 'Lei Saraiva', 'correct_answer' => false],
                    ['id' => 'd0e64ce3-5775-5d16-8ec6-906da1730fc4', 'description' => 'Lei de Terras', 'correct_answer' => false],
                    ['id' => '6c2bbedd-e721-529f-982b-b5b1d8e8c317', 'description' => 'Lei Áurea', 'correct_answer' => false],
                    ['id' => '3d92b3dc-7362-56e7-af12-12dab534dc96', 'description' => 'Lei do Ventre Livre', 'correct_answer' => true],
                    ['id' => '1b6ee0b6-6071-5b48-a9a5-479ff85d472d', 'description' => 'Lei dos Sexagenários', 'correct_answer' => false]
                ]],
        ['id' => '827651c9-b2b8-5f34-8d94-be2c6edd7afd', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual lei de 1885 concedeu liberdade formal a pessoas escravizadas com mais de 60 anos, sob condições?', 'difficulty' => 1, 'weight' => 104, 'alternatives' => [
                    ['id' => 'feb2f30b-0a63-57a1-b4e4-592afad8fe9e', 'description' => 'Lei de 7 de Novembro', 'correct_answer' => false],
                    ['id' => '3cf645db-b7f4-53ba-a488-66c1e2965221', 'description' => 'Lei Feijó', 'correct_answer' => false],
                    ['id' => '11f5b28a-8222-5dc3-a498-08c24caf2ea8', 'description' => 'Lei Áurea de 1888', 'correct_answer' => false],
                    ['id' => '9d8b4e14-eb21-51b6-928a-f2cf8e4519fc', 'description' => 'Lei Eusébio de Queirós', 'correct_answer' => false],
                    ['id' => 'bfdb17fc-f390-5201-bede-3081b01f5682', 'description' => 'Lei dos Sexagenários', 'correct_answer' => true]
                ]],
        ['id' => '62719fa1-b02d-5518-af53-bbf87478ccf9', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual lei brasileira de 1850 estabeleceu a compra como principal forma de aquisição de terras devolutas?', 'difficulty' => 1, 'weight' => 145, 'alternatives' => [
                    ['id' => '8440fbb9-1191-5776-ac62-1a5e5cb5d59d', 'description' => 'Lei Áurea', 'correct_answer' => false],
                    ['id' => '98aa622a-c902-59cf-aff2-d91a7d89d3c1', 'description' => 'Lei Rio Branco', 'correct_answer' => false],
                    ['id' => 'c822658f-5c96-53d9-8b2e-6fc848d66368', 'description' => 'Lei de 7 de Novembro', 'correct_answer' => false],
                    ['id' => '215a02e0-8574-5264-8243-9887144ad4d8', 'description' => 'Lei de Terras', 'correct_answer' => true],
                    ['id' => '808ed248-d552-525e-b58c-c1e503faae59', 'description' => 'Lei Saraiva', 'correct_answer' => false]
                ]],
        ['id' => '4b7e4954-f824-57aa-99b8-71f2093f543b', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual região entre o Tigre e o Eufrates abrigou cidades como Ur e Babilônia?', 'difficulty' => 1, 'weight' => 176, 'alternatives' => [
                    ['id' => '7b879822-60e7-5b67-9c96-3f2f37be8194', 'description' => 'Mesopotâmia', 'correct_answer' => true],
                    ['id' => '48d6b266-a168-52c7-9b1f-5d356efe3a70', 'description' => 'Vale do Indo', 'correct_answer' => false],
                    ['id' => '01effef6-20c8-519e-97ab-a2773ecb95d2', 'description' => 'Fenícia', 'correct_answer' => false],
                    ['id' => '5eba32fd-af0f-59c5-81dc-96a2566eaa36', 'description' => 'Anatólia Hitita', 'correct_answer' => false],
                    ['id' => '97945bef-addc-588a-ba78-a58d70564ddc', 'description' => 'Pérsia Aquemênida', 'correct_answer' => false]
                ]],
        ['id' => 'bcf77122-3855-5856-8d89-719689c69642', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual região fluvial sustentou o desenvolvimento do Egito faraônico?', 'difficulty' => 1, 'weight' => 107, 'alternatives' => [
                    ['id' => '915bffc3-1bdd-5a78-b952-93577995d1df', 'description' => 'Vale do Nilo', 'correct_answer' => true],
                    ['id' => '34d9aa7f-94b6-5295-8b92-1e493aa4822c', 'description' => 'Creta Minoica', 'correct_answer' => false],
                    ['id' => 'a32d1a17-3cb9-5368-83fb-f9176d1cbadc', 'description' => 'Anatólia Hitita', 'correct_answer' => false],
                    ['id' => '914c45ed-8f17-52c9-beb0-8656e4976e00', 'description' => 'Vale do Rio Azul', 'correct_answer' => false],
                    ['id' => 'd5ca52a4-a413-5cda-baf2-6351ecca62bf', 'description' => 'Pérsia Aquemênida', 'correct_answer' => false]
                ]],
        ['id' => 'e612aaa8-dc0e-57f3-83a7-96670ecf8dfa', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual região abrigou cidades da civilização harappiana, como Harappa e Mohenjo-Daro?', 'difficulty' => 1, 'weight' => 167, 'alternatives' => [
                    ['id' => 'b92b5979-0b5e-549f-a1b3-5a26e1c50577', 'description' => 'Mesopotâmia', 'correct_answer' => false],
                    ['id' => '410eefd9-66c4-5b42-9487-be33e92c31e5', 'description' => 'Vale do Indo', 'correct_answer' => true],
                    ['id' => '3bc9093f-babc-5a1d-9804-afd684a93b81', 'description' => 'Pérsia Aquemênida', 'correct_answer' => false],
                    ['id' => 'c55223c7-4d2d-52b1-9f86-e0814149ef37', 'description' => 'Anatólia Hitita', 'correct_answer' => false],
                    ['id' => '97cb568b-5858-5fb0-b824-ebde3862fb2d', 'description' => 'Vale do Rio Amarelo', 'correct_answer' => false]
                ]],
        ['id' => '1ac41e85-1416-5d13-a5a4-87ad11735540', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual região da China é tradicionalmente associada ao desenvolvimento das primeiras dinastias chinesas?', 'difficulty' => 1, 'weight' => 147, 'alternatives' => [
                    ['id' => 'fe29d9fa-e8b6-51e1-a84c-a60ab489d75d', 'description' => 'Vale do Rio Amarelo', 'correct_answer' => true],
                    ['id' => '9f6fc011-d95d-528d-a157-9d4cad8048c7', 'description' => 'Creta Minoica', 'correct_answer' => false],
                    ['id' => 'bea52677-d1e7-556a-a4a5-faefd183433a', 'description' => 'Mesopotâmia', 'correct_answer' => false],
                    ['id' => '4bbb3de6-f67c-5dea-9d14-79084e5ded30', 'description' => 'Pérsia Aquemênida', 'correct_answer' => false],
                    ['id' => '81799bbb-94d4-542e-860d-2e03264759f5', 'description' => 'Vale do Jordão', 'correct_answer' => false]
                ]],
        ['id' => '7eb0ec17-45c8-5f83-b503-082e2e8e5f60', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual civilização da Idade do Bronze floresceu na ilha de Creta?', 'difficulty' => 1, 'weight' => 101, 'alternatives' => [
                    ['id' => '633cc365-84e3-54f2-bb18-bd5e71a26251', 'description' => 'Creta Minoica', 'correct_answer' => true],
                    ['id' => 'd659b9b9-a3f0-5c2e-bfa0-98e68e08f42f', 'description' => 'Vale do Rio Azul', 'correct_answer' => false],
                    ['id' => '528bd2d2-d5bc-5321-8b8f-afc7dc9cf665', 'description' => 'Vale do Rio Amarelo', 'correct_answer' => false],
                    ['id' => '1dc6ed98-f847-52ae-8031-48b055668845', 'description' => 'Mesopotâmia', 'correct_answer' => false],
                    ['id' => '9da8f3b4-151e-5376-8dc1-bc8dc58270e4', 'description' => 'Vale do Indo', 'correct_answer' => false]
                ]],
        ['id' => 'e1514d94-0677-5b9a-9372-966711afd2a7', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual tratado de 1919 estabeleceu as condições de paz impostas à Alemanha após a Primeira Guerra Mundial?', 'difficulty' => 2, 'weight' => 289, 'alternatives' => [
                    ['id' => '76d87ff9-f95c-52ae-b5d0-f687b7aa2f9e', 'description' => 'Tratado de Tordesilhas', 'correct_answer' => false],
                    ['id' => 'f41f8aa1-bc6a-53e3-b94f-53fbd56413b3', 'description' => 'Tratado de Versalhes', 'correct_answer' => true],
                    ['id' => '8134c150-753a-5ba7-8460-3d4193931e2c', 'description' => 'Tratado de Brest-Litovsk', 'correct_answer' => false],
                    ['id' => 'ebe29228-d9fb-5cf3-b486-5725d9757716', 'description' => 'Tratado de San Stefano', 'correct_answer' => false],
                    ['id' => 'b511cbfd-0f95-5ccd-b61d-63910f1ae106', 'description' => 'Tratado de Guadalupe Hidalgo', 'correct_answer' => false]
                ]],
        ['id' => 'cb9e2942-75af-527b-a92d-3cf6618334e4', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual acordo de 1494 dividiu áreas de expansão ultramarina entre Portugal e Espanha?', 'difficulty' => 2, 'weight' => 316, 'alternatives' => [
                    ['id' => '1050d488-b5c9-5fad-8109-f0030e90f0cf', 'description' => 'Tratado de Brest-Litovsk', 'correct_answer' => false],
                    ['id' => '006f2c51-22a2-581f-a603-d9cd53172e86', 'description' => 'Tratado de Tordesilhas', 'correct_answer' => true],
                    ['id' => 'a83b7d10-6189-571a-baa7-62da1d6a3a12', 'description' => 'Tratado de Viena', 'correct_answer' => false],
                    ['id' => 'f8b06b62-ae74-550e-bfcf-78c7f1befd88', 'description' => 'Tratado de Utrecht', 'correct_answer' => false],
                    ['id' => '9ed35272-0207-5812-981a-3a6c593d1845', 'description' => 'Tratado de Ghent', 'correct_answer' => false]
                ]],
        ['id' => 'b0459262-929f-5817-8af9-9ea410de6bdb', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual conjunto de acordos de 1713 encerrou grande parte da Guerra da Sucessão Espanhola?', 'difficulty' => 2, 'weight' => 369, 'alternatives' => [
                    ['id' => 'cc6f410a-a3c5-57db-a26a-8b9432ef13b3', 'description' => 'Tratado de Versalhes', 'correct_answer' => false],
                    ['id' => '659809ea-929b-5616-9fd5-1b6a24e71aac', 'description' => 'Tratado de Utrecht', 'correct_answer' => true],
                    ['id' => 'a7618de2-81af-5164-84c0-26118d07d231', 'description' => 'Tratado de Brest-Litovsk', 'correct_answer' => false],
                    ['id' => '8f06fc3e-83d8-59bd-b305-d01366a1b141', 'description' => 'Tratado de San Stefano', 'correct_answer' => false],
                    ['id' => '63f5cbe8-d942-50a3-827b-ffcf39397078', 'description' => 'Tratado de Viena', 'correct_answer' => false]
                ]],
        ['id' => '60e6e38c-e170-5af3-84b7-2d66fd4dc093', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual conjunto de tratados de 1648 encerrou a Guerra dos Trinta Anos no Sacro Império Romano-Germânico?', 'difficulty' => 2, 'weight' => 372, 'alternatives' => [
                    ['id' => '05e3643e-f9e5-5584-9d94-5cc90e52250d', 'description' => 'Tratado de Utrecht', 'correct_answer' => false],
                    ['id' => '1b8564bb-85ef-5f80-9101-0196b721085e', 'description' => 'Tratado de San Stefano', 'correct_answer' => false],
                    ['id' => 'bdce46df-c3d0-5f1c-9ec1-b24af31890a0', 'description' => 'Tratado de Viena', 'correct_answer' => false],
                    ['id' => 'dd57dc34-71ea-5a3f-8393-d66c5cb484a4', 'description' => 'Tratado de Brest-Litovsk', 'correct_answer' => false],
                    ['id' => '5cd371b5-56ed-5afb-a0f9-b569e06d2c36', 'description' => 'Tratado de Westfália', 'correct_answer' => true]
                ]],
        ['id' => 'df194524-07b1-5a4e-9cfb-46d81b7a6333', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual tratado reconheceu formalmente a independência dos Estados Unidos?', 'difficulty' => 2, 'weight' => 228, 'alternatives' => [
                    ['id' => '87778bdf-04a1-5342-9027-7ebbf96fec1e', 'description' => 'Tratado de Paris de 1783', 'correct_answer' => true],
                    ['id' => '04e1c547-ecb3-503b-b3d6-44f5fd3f5af9', 'description' => 'Tratado de Ghent', 'correct_answer' => false],
                    ['id' => '420de13e-6ebe-5312-8fac-a30fbd9a3e99', 'description' => 'Tratado de Westfália', 'correct_answer' => false],
                    ['id' => 'da6ba7bc-c78e-59bf-9894-c0ee2b24bdb3', 'description' => 'Tratado de San Stefano', 'correct_answer' => false],
                    ['id' => '47563f8b-0806-57e7-9fa0-68de7dae6bb9', 'description' => 'Tratado de Brest-Litovsk', 'correct_answer' => false]
                ]],
        ['id' => 'e3c120e6-29b5-53ed-ab0a-b7c5b03ec598', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual batalha de 1815 marcou a derrota definitiva de Napoleão Bonaparte?', 'difficulty' => 2, 'weight' => 373, 'alternatives' => [
                    ['id' => '3471dfb5-ab73-5c06-83b5-c89ecaf7bb1e', 'description' => 'Batalha de Maratona', 'correct_answer' => false],
                    ['id' => '75249822-594a-5bd9-b913-47a49cc4691c', 'description' => 'Batalha de Trafalgar', 'correct_answer' => false],
                    ['id' => '9b1e5543-4aae-540c-bc1e-3995d9399274', 'description' => 'Batalha de Canas', 'correct_answer' => false],
                    ['id' => '9347a17e-3dd7-5deb-8ba7-22bbc30510c0', 'description' => 'Batalha de Austerlitz', 'correct_answer' => false],
                    ['id' => '479fe699-e1ab-5c7f-ae5b-d9cce886cf32', 'description' => 'Batalha de Waterloo', 'correct_answer' => true]
                ]],
        ['id' => '892e5ac5-be64-531e-9427-729a37e5fa77', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual batalha de 1066 consolidou a conquista normanda da Inglaterra?', 'difficulty' => 2, 'weight' => 301, 'alternatives' => [
                    ['id' => '0ff97d60-e125-5291-87d7-d6e1ec5b8daf', 'description' => 'Batalha de Hastings', 'correct_answer' => true],
                    ['id' => '4603a110-f012-54e1-9095-68dfe05dd281', 'description' => 'Batalha de Austerlitz', 'correct_answer' => false],
                    ['id' => '5e82efb5-e536-5b4c-b52b-f63a565742df', 'description' => 'Batalha de Canas', 'correct_answer' => false],
                    ['id' => 'ef0fbe4d-3941-508f-b346-ce31f392e0c8', 'description' => 'Batalha de Trafalgar', 'correct_answer' => false],
                    ['id' => 'f20bc64e-1cf0-5c41-be18-df525bd6d781', 'description' => 'Batalha de Lepanto', 'correct_answer' => false]
                ]],
        ['id' => '41031d86-1eb3-578c-9293-f62721060224', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual batalha de 1805 ficou conhecida como a Batalha dos Três Imperadores e foi uma grande vitória napoleônica?', 'difficulty' => 2, 'weight' => 229, 'alternatives' => [
                    ['id' => '4c40be82-460e-599d-99a6-c51cfc6966c3', 'description' => 'Batalha de Trafalgar', 'correct_answer' => false],
                    ['id' => '487a9e1c-1b86-5ca5-a256-80f24ee3c1eb', 'description' => 'Batalha de Lepanto', 'correct_answer' => false],
                    ['id' => '9f9f9026-268a-5f2c-8e05-859cef9629c4', 'description' => 'Batalha de Austerlitz', 'correct_answer' => true],
                    ['id' => '84c1d871-1b5b-597a-8c2e-7ead7cbe7d2e', 'description' => 'Batalha de Canas', 'correct_answer' => false],
                    ['id' => '898fad1f-715b-5a70-a782-2d64e2ab98c2', 'description' => 'Batalha de Midway', 'correct_answer' => false]
                ]],
        ['id' => '5d0ee1ba-6559-55f2-8a25-411e2aaeb199', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual batalha naval de 1805 consolidou a supremacia marítima britânica sobre a frota franco-espanhola?', 'difficulty' => 2, 'weight' => 312, 'alternatives' => [
                    ['id' => '623f1376-6b81-5efa-812a-dfd74df4ebc8', 'description' => 'Batalha de Stalingrado', 'correct_answer' => false],
                    ['id' => 'e472c9bc-bbb8-58ed-820a-963cfde2e7d4', 'description' => 'Batalha de Waterloo', 'correct_answer' => false],
                    ['id' => 'd5ae7763-b5d5-5491-a0d8-a0e32a1ff617', 'description' => 'Batalha de Midway', 'correct_answer' => false],
                    ['id' => '20fa373c-819c-5298-90ba-7524dfb52555', 'description' => 'Batalha de Trafalgar', 'correct_answer' => true],
                    ['id' => 'feb4ba6e-becd-53ee-b387-0289b2cb9acb', 'description' => 'Batalha de Lepanto', 'correct_answer' => false]
                ]],
        ['id' => 'cdeca8a4-4e7c-55db-9f65-58808f6f09d5', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual batalha de 1863 foi um ponto de virada da Guerra Civil Americana?', 'difficulty' => 2, 'weight' => 271, 'alternatives' => [
                    ['id' => '73729589-d949-527f-bde1-c608531016e1', 'description' => 'Batalha de Gettysburg', 'correct_answer' => true],
                    ['id' => 'b905e470-16a1-5fe0-84f0-9ab6cb35198c', 'description' => 'Batalha de Midway', 'correct_answer' => false],
                    ['id' => 'f55b16d8-64f3-5a81-a224-968598c49554', 'description' => 'Batalha de Lepanto', 'correct_answer' => false],
                    ['id' => '93cb33c7-fd26-5fe1-90c8-5d2e5d6cf01e', 'description' => 'Batalha de Austerlitz', 'correct_answer' => false],
                    ['id' => '701e913b-7461-5b52-b6ca-43072c6b0250', 'description' => 'Batalha de Stalingrado', 'correct_answer' => false]
                ]],
        ['id' => '5f18f33f-2952-509f-84aa-5d925b2d9718', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual dinastia inglesa incluiu Henrique VIII e Elizabeth I?', 'difficulty' => 2, 'weight' => 306, 'alternatives' => [
                    ['id' => 'e3958e30-a459-59c1-b7db-fd011440ed95', 'description' => 'Dinastia Capetíngia', 'correct_answer' => false],
                    ['id' => '5bb113e0-3150-5f27-a6df-de578a2d08c6', 'description' => 'Dinastia Tudor', 'correct_answer' => true],
                    ['id' => 'd1ebdb87-637c-53b0-abb2-90bc1a94c17c', 'description' => 'Dinastia Bourbon', 'correct_answer' => false],
                    ['id' => '491bfe22-3558-56e0-8f97-8e0ac4bd5ce4', 'description' => 'Dinastia Qing', 'correct_answer' => false],
                    ['id' => '2833ef26-8528-5e75-9c64-4497eff9d96e', 'description' => 'Dinastia Stuart', 'correct_answer' => false]
                ]],
        ['id' => '28936834-9c1a-5aaa-bfab-07a74a912bca', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual dinastia governou a Inglaterra e a Escócia durante parte dos séculos XVII e início do XVIII?', 'difficulty' => 2, 'weight' => 264, 'alternatives' => [
                    ['id' => '67b6fe36-2ada-54d7-a1ef-78311acd9d35', 'description' => 'Dinastia Bourbon', 'correct_answer' => false],
                    ['id' => '8573e979-64a1-578a-8c0f-d68c36d5bc4e', 'description' => 'Dinastia Ming', 'correct_answer' => false],
                    ['id' => 'bca0e666-6696-5845-96f3-63591303311a', 'description' => 'Dinastia Han', 'correct_answer' => false],
                    ['id' => '00a35b6c-fcd0-5657-a1b4-18a1db224c01', 'description' => 'Dinastia Stuart', 'correct_answer' => true],
                    ['id' => '88baefe4-8e3d-5b52-be69-cd4686db42b9', 'description' => 'Dinastia Romanov', 'correct_answer' => false]
                ]],
        ['id' => '125f7567-3830-5349-831c-8b6e2868f35e', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual dinastia inglesa medieval incluiu Henrique II, Ricardo Coração de Leão e João Sem Terra?', 'difficulty' => 2, 'weight' => 238, 'alternatives' => [
                    ['id' => '1d6f5f11-7f03-564e-89ad-3b127b627526', 'description' => 'Dinastia Han', 'correct_answer' => false],
                    ['id' => '089f40f0-af66-5e5e-b88e-c48c57f4a68c', 'description' => 'Dinastia Capetíngia', 'correct_answer' => false],
                    ['id' => '64fb5367-b66d-5e26-9fff-3ac1ffd701d0', 'description' => 'Dinastia Tudor', 'correct_answer' => false],
                    ['id' => '00317807-047d-542f-a409-b86ebf1547a6', 'description' => 'Dinastia Romanov', 'correct_answer' => false],
                    ['id' => '2ebcb95f-5e61-58f2-9f04-57701a5d119a', 'description' => 'Dinastia Plantageneta', 'correct_answer' => true]
                ]],
        ['id' => '4c04c98f-11ab-57ff-8b6d-5cc0456f7f9b', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual casa dinástica governou a França antes da Revolução Francesa e voltou ao trono no século XIX?', 'difficulty' => 2, 'weight' => 367, 'alternatives' => [
                    ['id' => '02208d81-ea41-5a26-bd5b-fcb4608ed642', 'description' => 'Dinastia Bourbon', 'correct_answer' => true],
                    ['id' => 'fd364002-2585-5131-b872-6357bcce86b3', 'description' => 'Dinastia Qing', 'correct_answer' => false],
                    ['id' => 'c2478712-e515-5be1-af02-3ed8b28e670b', 'description' => 'Dinastia Han', 'correct_answer' => false],
                    ['id' => '33f8c89c-a46c-5d89-9596-510f5a514b1c', 'description' => 'Dinastia Stuart', 'correct_answer' => false],
                    ['id' => '4bdbde7c-675f-5aa4-8cb9-fb8c67900ae1', 'description' => 'Dinastia Plantageneta', 'correct_answer' => false]
                ]],
        ['id' => '92518dfb-23b3-51ef-a8f5-9c46a1b41f3f', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual dinastia europeia governou territórios como Áustria e Espanha e teve grande influência no Sacro Império?', 'difficulty' => 2, 'weight' => 312, 'alternatives' => [
                    ['id' => '52096f44-e40c-5215-9590-53966882bfdf', 'description' => 'Dinastia Qing', 'correct_answer' => false],
                    ['id' => '870fd8f9-3f1a-546a-8bc5-1bfbf533e6f3', 'description' => 'Dinastia Tudor', 'correct_answer' => false],
                    ['id' => '3712ac2b-d7c0-54a5-9658-020a8fbe3ce5', 'description' => 'Dinastia Capetíngia', 'correct_answer' => false],
                    ['id' => '5f0c02bc-21b3-5258-930d-cb3b4bfb4b41', 'description' => 'Dinastia Stuart', 'correct_answer' => false],
                    ['id' => '305b07a8-3fdd-5040-82cb-fa0d3791a282', 'description' => 'Dinastia Habsburgo', 'correct_answer' => true]
                ]],
        ['id' => 'd63706c3-a3a6-5ffc-92ac-3029320ddb4d', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual revolta popular ocorreu no Rio de Janeiro em 1904 contra medidas de vacinação obrigatória e reformas urbanas?', 'difficulty' => 2, 'weight' => 390, 'alternatives' => [
                    ['id' => 'bcd43433-c065-5fd9-b227-1e6193692bc9', 'description' => 'Revolução Federalista', 'correct_answer' => false],
                    ['id' => '2e64b9e7-502d-54d8-b4b9-514f83c50987', 'description' => 'Revolta da Chibata', 'correct_answer' => false],
                    ['id' => 'e3006d70-c6f8-59ea-84d6-a0fa321215f2', 'description' => 'Revolta dos Malês', 'correct_answer' => false],
                    ['id' => '6a16d965-fbed-5e76-ad3c-ef9082255516', 'description' => 'Revolta da Vacina', 'correct_answer' => true],
                    ['id' => '31f7e048-9c06-5668-bf16-fbff72f64534', 'description' => 'Guerra do Contestado', 'correct_answer' => false]
                ]],
        ['id' => '51c68fe5-8a56-5cfa-985c-17f11d92ba94', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual movimento de marinheiros de 1910 protestou contra castigos físicos na Marinha brasileira?', 'difficulty' => 2, 'weight' => 239, 'alternatives' => [
                    ['id' => 'f18e370f-7dcc-5ef6-8209-cbf926de4945', 'description' => 'Sabinada', 'correct_answer' => false],
                    ['id' => '93914cad-a2ff-5ba7-9ee4-125f592db222', 'description' => 'Revolta da Chibata', 'correct_answer' => true],
                    ['id' => 'b1ba714a-44f7-5f8b-8b34-7383647705de', 'description' => 'Guerra de Canudos', 'correct_answer' => false],
                    ['id' => 'dc738d8d-7ef5-5f33-917a-f454a4e5e8a8', 'description' => 'Revolta da Vacina', 'correct_answer' => false],
                    ['id' => '4477a794-a230-5831-9d4c-b74fc9489169', 'description' => 'Revolução Praieira', 'correct_answer' => false]
                ]],
        ['id' => '4965288f-908b-50b2-933f-ca0182a91e9f', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual conflito no sertão baiano foi liderado pela comunidade de Antônio Conselheiro e reprimido pelo Exército?', 'difficulty' => 2, 'weight' => 243, 'alternatives' => [
                    ['id' => 'bf5c01df-3fa6-5ac1-a499-d2209a5cac4a', 'description' => 'Revolução Federalista', 'correct_answer' => false],
                    ['id' => 'a485a8c2-a83d-556c-91d6-17c90234d2c4', 'description' => 'Guerra do Contestado', 'correct_answer' => false],
                    ['id' => 'd233e931-2815-5926-acef-1fa7918d0038', 'description' => 'Revolta dos Malês', 'correct_answer' => false],
                    ['id' => '467c8954-ebb7-51fa-be0e-caf221713fc8', 'description' => 'Balaiada', 'correct_answer' => false],
                    ['id' => '80402439-5345-5e8a-bf78-1b5070d5184a', 'description' => 'Guerra de Canudos', 'correct_answer' => true]
                ]],
        ['id' => '5ac6563e-0bbf-505d-8b4d-edc723d6c5d4', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual conflito social e religioso ocorreu entre 1912 e 1916 em área disputada por Paraná e Santa Catarina?', 'difficulty' => 2, 'weight' => 352, 'alternatives' => [
                    ['id' => 'b25fcaa0-c2e0-5c8c-b351-32ed8b9e02af', 'description' => 'Balaiada', 'correct_answer' => false],
                    ['id' => '5fe11bb1-4a92-5763-87b7-e4aadef7e890', 'description' => 'Guerra do Contestado', 'correct_answer' => true],
                    ['id' => 'b96c0944-5d70-5925-88ba-ea48606275fc', 'description' => 'Revolta da Vacina', 'correct_answer' => false],
                    ['id' => 'eebb2455-9e9e-5c3a-a32e-5925ceb0fdd7', 'description' => 'Sabinada', 'correct_answer' => false],
                    ['id' => '949055da-fa4b-53d5-8702-acb561202532', 'description' => 'Cabanagem', 'correct_answer' => false]
                ]],
        ['id' => '11b97984-294d-5f2b-821c-e62f0877a242', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual levante de 1835 em Salvador foi organizado principalmente por africanos muçulmanos escravizados e libertos?', 'difficulty' => 2, 'weight' => 365, 'alternatives' => [
                    ['id' => 'a890b9fd-df05-54d4-b6c8-ce22b8986d79', 'description' => 'Revolta da Chibata', 'correct_answer' => false],
                    ['id' => '03f7a560-75ca-54f7-9db6-7d330381d1fc', 'description' => 'Sabinada', 'correct_answer' => false],
                    ['id' => '35e43674-85df-5b7a-87fd-45a958d2a8ee', 'description' => 'Revolta da Vacina', 'correct_answer' => false],
                    ['id' => '35b413cc-f2a2-5f76-be78-a791e615f899', 'description' => 'Revolta dos Malês', 'correct_answer' => true],
                    ['id' => '6609cdec-e3bb-5de3-9efe-d2419862d5fe', 'description' => 'Guerra do Contestado', 'correct_answer' => false]
                ]],
        ['id' => '76e0799a-d571-55ee-97a3-e5909fd244d5', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual reunião de 1884–1885 estabeleceu regras para a ocupação colonial europeia na África?', 'difficulty' => 2, 'weight' => 237, 'alternatives' => [
                    ['id' => '8f221f1e-10c1-5a54-8dfb-def63d86a59d', 'description' => 'Congresso de Viena', 'correct_answer' => false],
                    ['id' => 'c50819af-dc74-55e2-a0d6-7aa80cd3ae7d', 'description' => 'Congresso de Verona', 'correct_answer' => false],
                    ['id' => '58cf7afc-76d6-56af-ab26-7ab13dd30190', 'description' => 'Conferência de Berlim', 'correct_answer' => true],
                    ['id' => '192fd841-2168-5683-85ed-d7355a1d14ee', 'description' => 'Conferência de Teerã', 'correct_answer' => false],
                    ['id' => '56961af3-3a93-518e-870b-b196c5bf3aff', 'description' => 'Conferência de Bandung', 'correct_answer' => false]
                ]],
        ['id' => '2bde9729-3c54-550c-a72a-751bb901d907', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual congresso de 1814–1815 reorganizou a Europa após as guerras napoleônicas?', 'difficulty' => 2, 'weight' => 206, 'alternatives' => [
                    ['id' => '84b6749f-e26c-5676-99f8-b9b4d1f6605d', 'description' => 'Conferência de Bretton Woods', 'correct_answer' => false],
                    ['id' => 'ac6df9e9-b5c1-5178-98c5-2ff27e709297', 'description' => 'Congresso de Viena', 'correct_answer' => true],
                    ['id' => '172028ee-69e7-5055-a408-42721e97aa33', 'description' => 'Conferência de Berlim', 'correct_answer' => false],
                    ['id' => '59db39c9-7acd-58f3-aced-0790195ff19f', 'description' => 'Congresso de Verona', 'correct_answer' => false],
                    ['id' => 'be1b3896-01f3-58d2-88c5-808c524ac9d9', 'description' => 'Conferência de Potsdam', 'correct_answer' => false]
                ]],
        ['id' => '77f950f8-302d-5572-a2aa-d8f98a646d55', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual reunião de 1945 reuniu Roosevelt, Churchill e Stalin para discutir a ordem do pós-guerra?', 'difficulty' => 2, 'weight' => 246, 'alternatives' => [
                    ['id' => '480f7bac-c9dc-5ebd-8313-2791112ca45d', 'description' => 'Conferência de Yalta', 'correct_answer' => true],
                    ['id' => 'e27e8621-5adf-53d5-979a-b38f1df76409', 'description' => 'Congresso de Viena', 'correct_answer' => false],
                    ['id' => '974d08e9-8c57-5008-80a9-092cba4ddf44', 'description' => 'Congresso de Verona', 'correct_answer' => false],
                    ['id' => '9fa49873-70a2-5a4d-bebc-e0ab45d683e9', 'description' => 'Conferência de Potsdam', 'correct_answer' => false],
                    ['id' => '84a7dcb7-24a6-5490-87c0-0ad4c4cab79c', 'description' => 'Conferência de Bretton Woods', 'correct_answer' => false]
                ]],
        ['id' => '9eb57d41-9a55-5061-b35a-60dd277b6a56', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual reunião de 1945 tratou da administração da Alemanha derrotada e da reorganização do pós-guerra?', 'difficulty' => 2, 'weight' => 337, 'alternatives' => [
                    ['id' => '76da17d6-6ba8-55ea-83c4-c9efe33b516b', 'description' => 'Conferência de Bretton Woods', 'correct_answer' => false],
                    ['id' => 'd8fdafaa-7f56-5aa2-a271-1c105da5d0e4', 'description' => 'Conferência de Potsdam', 'correct_answer' => true],
                    ['id' => 'b56f562d-1651-5655-89de-60a5ff8e16c8', 'description' => 'Congresso de Aix-la-Chapelle', 'correct_answer' => false],
                    ['id' => 'a0193de0-9957-5513-97b1-1847c8bae8d8', 'description' => 'Conferência de Teerã', 'correct_answer' => false],
                    ['id' => '22262886-bae0-5de5-985a-475587eef960', 'description' => 'Conferência de Yalta', 'correct_answer' => false]
                ]],
        ['id' => '4a53c216-b2e0-5451-addb-177da2e0ec99', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual conferência de 1955 reuniu países asiáticos e africanos e fortaleceu o movimento afro-asiático?', 'difficulty' => 2, 'weight' => 311, 'alternatives' => [
                    ['id' => '0555648e-351c-5bf3-8e20-127787d0e27b', 'description' => 'Conferência de Bandung', 'correct_answer' => true],
                    ['id' => '92854e71-455e-5dba-9d8a-a591557c9687', 'description' => 'Congresso de Viena', 'correct_answer' => false],
                    ['id' => '343df170-37b7-549b-80b2-92446d45f376', 'description' => 'Conferência de Berlim', 'correct_answer' => false],
                    ['id' => 'aebb0a1a-e1da-523a-8c0b-4ab8f53ef6ec', 'description' => 'Conferência de Bretton Woods', 'correct_answer' => false],
                    ['id' => '8bcb906b-35a1-505b-97fb-9204a8a749c3', 'description' => 'Conferência de San Francisco', 'correct_answer' => false]
                ]],
        ['id' => 'a09b2ea5-45be-562d-954a-d4718225a2e9', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual compilação legal da antiga Babilônia é conhecida pela estela com leis atribuídas ao rei Hamurábi?', 'difficulty' => 2, 'weight' => 330, 'alternatives' => [
                    ['id' => '9adbd110-b340-5884-9bc0-d8cfa3843209', 'description' => 'Código de Hamurábi', 'correct_answer' => true],
                    ['id' => 'c80fdd0c-7d5f-5b97-b93a-9819898cdff3', 'description' => 'Código de Gortina', 'correct_answer' => false],
                    ['id' => 'a74a8d45-dbb2-5b28-9082-0f5604784346', 'description' => 'Código Teodosiano', 'correct_answer' => false],
                    ['id' => '9fb1b0ae-2e2f-515c-8702-43d584b8e359', 'description' => 'Código de Ur-Nammu', 'correct_answer' => false],
                    ['id' => 'cc41bc3d-088f-52e3-91fb-62123ed20083', 'description' => 'Corpus Juris Civilis', 'correct_answer' => false]
                ]],
        ['id' => '2143b487-a774-5332-91f5-4e0a0a18a524', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual conjunto de leis sumérias é frequentemente considerado um dos mais antigos códigos legais conhecidos?', 'difficulty' => 2, 'weight' => 210, 'alternatives' => [
                    ['id' => 'cdb046bc-4d31-5a1c-bc59-3acf95e0a8bd', 'description' => 'Édito de Milão', 'correct_answer' => false],
                    ['id' => 'd5512f9b-3abc-5bd8-a4d6-5e8d9bdadabc', 'description' => 'Lei das Doze Tábuas', 'correct_answer' => false],
                    ['id' => 'e896f73e-7315-5ec9-979a-e783241b8d51', 'description' => 'Corpus Juris Civilis', 'correct_answer' => false],
                    ['id' => '0ad7d3f3-9ba5-5a82-a965-22404e38720d', 'description' => 'Código de Manu', 'correct_answer' => false],
                    ['id' => '2c2b139f-0b08-5a24-8021-d3443aa0cb1b', 'description' => 'Código de Ur-Nammu', 'correct_answer' => true]
                ]],
        ['id' => '3e5a5f67-e3ea-53c7-8251-cdf46029ff83', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual conjunto de leis da Roma republicana foi registrado em tábuas no século V a.C.?', 'difficulty' => 2, 'weight' => 335, 'alternatives' => [
                    ['id' => 'e55f74c9-b272-5c99-8208-2fca9d8d2da9', 'description' => 'Édito de Milão', 'correct_answer' => false],
                    ['id' => 'cab77f34-084e-58f4-84ac-de60df467b31', 'description' => 'Édito de Caracala', 'correct_answer' => false],
                    ['id' => '63170b45-34d2-5e3f-bc45-fed0739ca5e1', 'description' => 'Código de Gortina', 'correct_answer' => false],
                    ['id' => '4fe3a050-27c7-59cf-8ac5-e6bbd9d8ec28', 'description' => 'Lei das Doze Tábuas', 'correct_answer' => true],
                    ['id' => 'ef6a4f41-77f5-5dec-a454-ac9f3f42df0b', 'description' => 'Código de Ur-Nammu', 'correct_answer' => false]
                ]],
        ['id' => 'cafc3d43-b2d0-51c5-9179-7187baa0f1dd', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual compilação do direito romano foi organizada por ordem do imperador Justiniano no século VI?', 'difficulty' => 2, 'weight' => 246, 'alternatives' => [
                    ['id' => '6826143d-b86e-56fc-8014-09961ef88433', 'description' => 'Código de Hamurábi', 'correct_answer' => false],
                    ['id' => '5b14ab99-5d3f-53e0-b842-fdd004be9401', 'description' => 'Código Teodosiano', 'correct_answer' => false],
                    ['id' => 'a0a70cc8-49b9-55e8-bf34-5e662c9ca63f', 'description' => 'Código de Lipit-Ishtar', 'correct_answer' => false],
                    ['id' => '731f621b-b1b1-586f-ab19-547a9c56734f', 'description' => 'Lei das Doze Tábuas', 'correct_answer' => false],
                    ['id' => '56aab57c-9b88-5de7-971c-6d88035da57c', 'description' => 'Corpus Juris Civilis', 'correct_answer' => true]
                ]],
        ['id' => 'ae5e1d4e-8bbb-51a7-af79-f38feb01ef25', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual antigo texto jurídico-religioso da Índia trata de deveres sociais, normas e conduta?', 'difficulty' => 2, 'weight' => 274, 'alternatives' => [
                    ['id' => '41c26ce2-7149-5fa1-a2b7-1771e1faf16e', 'description' => 'Código de Hamurábi', 'correct_answer' => false],
                    ['id' => 'b8a9f94c-371c-5407-aea5-977fb2650754', 'description' => 'Código de Lipit-Ishtar', 'correct_answer' => false],
                    ['id' => '75a77f8b-1078-59da-80fa-286e259383c1', 'description' => 'Código de Gortina', 'correct_answer' => false],
                    ['id' => '0cf44526-5b1b-526f-a2a8-0b004ef12d74', 'description' => 'Código de Manu', 'correct_answer' => true],
                    ['id' => 'c03f3fdc-2722-59fb-b0e4-7cd15402fd05', 'description' => 'Lei das Doze Tábuas', 'correct_answer' => false]
                ]],
        ['id' => 'de6a0224-14f0-50eb-90a8-dcf678a24e18', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual processo iniciado em 1868 encerrou o xogunato Tokugawa e restaurou o poder imperial no Japão?', 'difficulty' => 2, 'weight' => 287, 'alternatives' => [
                    ['id' => '22028807-9a6a-574b-b4fd-aa2189abb5a5', 'description' => 'Revolução Mexicana', 'correct_answer' => false],
                    ['id' => '0b2a9a4c-0bd1-5fd1-b000-3cccd85fe60f', 'description' => 'Revolução de Fevereiro', 'correct_answer' => false],
                    ['id' => 'e77b6634-5c80-5731-bd1e-e231e84f438b', 'description' => 'Revolução de Outubro', 'correct_answer' => false],
                    ['id' => '05b52619-5832-5311-a18c-c3edaf2b7036', 'description' => 'Revolução Gloriosa', 'correct_answer' => false],
                    ['id' => '212b6ed5-e825-583c-bed4-d21cbf53953e', 'description' => 'Restauração Meiji', 'correct_answer' => true]
                ]],
        ['id' => '1c509e08-4e99-5942-93cd-c5d52b625b5f', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual revolução de 1911 derrubou a dinastia Qing e levou à proclamação da República da China?', 'difficulty' => 2, 'weight' => 242, 'alternatives' => [
                    ['id' => 'f3306a3f-12f6-58ee-a7af-ec68127c9bc0', 'description' => 'Revolução de Julho', 'correct_answer' => false],
                    ['id' => 'c64239a2-ef6b-5835-aaed-3632365b36a1', 'description' => 'Revolução dos Jovens Turcos', 'correct_answer' => false],
                    ['id' => '518bf5db-f699-5939-a972-7e59fd2e957d', 'description' => 'Revolução dos Cravos', 'correct_answer' => false],
                    ['id' => '8014fec8-d185-55d6-8136-b7a693f8a566', 'description' => 'Revolução Xinhai', 'correct_answer' => true],
                    ['id' => '7bc5a2c5-d6ff-5cf8-b7d3-d818e0e2d9b0', 'description' => 'Revolução Iraniana', 'correct_answer' => false]
                ]],
        ['id' => '0f3238b4-4192-5d35-abbb-388822611332', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual movimento de 1908 restaurou a constituição otomana e limitou o poder absoluto do sultão?', 'difficulty' => 2, 'weight' => 325, 'alternatives' => [
                    ['id' => 'c40d8033-7d4e-5c4f-884f-adc1f5d1835a', 'description' => 'Revolução de Julho', 'correct_answer' => false],
                    ['id' => 'f6565551-e4cd-511b-8e0c-08c8d8eae1bc', 'description' => 'Restauração Meiji', 'correct_answer' => false],
                    ['id' => 'ff208b7f-e79b-510c-b302-c415b35476b6', 'description' => 'Revolução Mexicana', 'correct_answer' => false],
                    ['id' => 'c4ab70ba-b3d0-5e01-9815-385fe474f24b', 'description' => 'Revolução de Fevereiro', 'correct_answer' => false],
                    ['id' => '013d4a43-1f5b-5a42-9966-6acc9eb13fba', 'description' => 'Revolução dos Jovens Turcos', 'correct_answer' => true]
                ]],
        ['id' => 'd62b7875-725b-5b76-9961-3ed06196f82b', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual revolução bolchevique de 1917 derrubou o Governo Provisório russo?', 'difficulty' => 2, 'weight' => 235, 'alternatives' => [
                    ['id' => 'dde85859-7afd-5d48-a959-0914ae96371c', 'description' => 'Revolução dos Jovens Turcos', 'correct_answer' => false],
                    ['id' => '82b00202-398d-56d2-96dd-b4fb22dd95b2', 'description' => 'Revolução dos Cravos', 'correct_answer' => false],
                    ['id' => '55193b49-1ba7-536c-9dbb-5a8c4e6e68d7', 'description' => 'Revolução Iraniana', 'correct_answer' => false],
                    ['id' => 'f61e50c8-e23a-55bc-814f-fc19dfb089d1', 'description' => 'Revolução de Fevereiro', 'correct_answer' => false],
                    ['id' => '427854aa-4461-5edd-894f-9e69d20e5494', 'description' => 'Revolução de Outubro', 'correct_answer' => true]
                ]],
        ['id' => 'e691b0e2-dccd-597a-8edb-4043aa6425cc', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual movimento militar de 1974 derrubou a ditadura do Estado Novo em Portugal?', 'difficulty' => 2, 'weight' => 303, 'alternatives' => [
                    ['id' => 'efbe4fb6-2977-5c23-bf38-f428315e9950', 'description' => 'Revolução de Fevereiro', 'correct_answer' => false],
                    ['id' => '9f9fb43a-3b02-52bd-a27c-7a8c0980b8ec', 'description' => 'Revolução Iraniana', 'correct_answer' => false],
                    ['id' => '3cd3113e-a3d8-5ee7-8e4e-1d85c892d55b', 'description' => 'Revolução dos Jovens Turcos', 'correct_answer' => false],
                    ['id' => '10ec1806-56cb-5733-8922-eac2cbb4ec33', 'description' => 'Revolução Gloriosa', 'correct_answer' => false],
                    ['id' => '5b9451f6-a969-5db9-a5af-ac1376fdda35', 'description' => 'Revolução dos Cravos', 'correct_answer' => true]
                ]],
        ['id' => 'b558d346-f724-5d06-8eb5-4acc6611b512', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual associação comercial medieval reuniu cidades mercantis do norte da Europa e da região do Báltico?', 'difficulty' => 2, 'weight' => 318, 'alternatives' => [
                    ['id' => 'dc6b9bb5-fcf7-5bd9-895a-5e8fd4713365', 'description' => 'Liga Hanseática', 'correct_answer' => true],
                    ['id' => 'b77767d0-877b-557b-a526-4b4ad7b853d6', 'description' => 'Liga de Delos', 'correct_answer' => false],
                    ['id' => 'fed8b0af-eeee-5f76-bdd1-edd7be0f0671', 'description' => 'Liga de Esmalcalda', 'correct_answer' => false],
                    ['id' => '5e81ca78-db3e-5f10-b5df-5b822357e2d2', 'description' => 'Liga Lombarda', 'correct_answer' => false],
                    ['id' => 'd934ffc3-3ca1-5d6e-ad1e-f481cc3f9151', 'description' => 'Liga do Peloponeso', 'correct_answer' => false]
                ]],
        ['id' => '0f0d64e3-80d4-55dc-a8ad-fb4cb8acdf52', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual aliança de cidades-Estado gregas foi liderada por Atenas após as Guerras Médicas?', 'difficulty' => 2, 'weight' => 226, 'alternatives' => [
                    ['id' => 'f24f41d4-544e-5fa9-8659-08e2dd98c76c', 'description' => 'Liga Aqueia', 'correct_answer' => false],
                    ['id' => 'e0fb0aaf-324f-556c-8aef-a618d378033e', 'description' => 'Liga de Cognac', 'correct_answer' => false],
                    ['id' => '44331759-aa92-5f34-9075-2ee1680e7c36', 'description' => 'Liga Lombarda', 'correct_answer' => false],
                    ['id' => '22baf4ef-2bf7-5aa2-ac45-56f91d053826', 'description' => 'Liga de Delos', 'correct_answer' => true],
                    ['id' => 'b593bb2d-04bc-500d-be7a-9d7705427e0e', 'description' => 'Liga de Esmalcalda', 'correct_answer' => false]
                ]],
        ['id' => 'add74869-99be-576a-9860-f6391027443b', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual aliança de cidades gregas foi liderada por Esparta antes e durante a Guerra do Peloponeso?', 'difficulty' => 2, 'weight' => 369, 'alternatives' => [
                    ['id' => '3ba82988-16a5-5ba0-90a7-e0d067cedc95', 'description' => 'Liga Lombarda', 'correct_answer' => false],
                    ['id' => 'ed6e4aef-45f3-5787-b962-cf95aa782b6c', 'description' => 'Liga do Peloponeso', 'correct_answer' => true],
                    ['id' => 'a4a800de-53a4-54aa-bff4-3deacbf603ad', 'description' => 'Liga Católica', 'correct_answer' => false],
                    ['id' => 'e5167d3b-203d-53b1-8dde-9af76a9f2fa4', 'description' => 'Liga de Esmalcalda', 'correct_answer' => false],
                    ['id' => 'c3136772-b37f-56aa-afef-f3b68540297e', 'description' => 'Liga de Cognac', 'correct_answer' => false]
                ]],
        ['id' => '5027ed26-2f3d-5eee-b031-2d35617377e5', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual confederação de cidades gregas do Peloponeso teve papel importante no período helenístico?', 'difficulty' => 2, 'weight' => 378, 'alternatives' => [
                    ['id' => '3bb30549-a5e3-5665-bd95-90d271bd2de5', 'description' => 'Liga do Peloponeso', 'correct_answer' => false],
                    ['id' => '57ac70cd-59c2-5c00-9ef4-d87c01218648', 'description' => 'Liga Etólia', 'correct_answer' => false],
                    ['id' => '98b81808-496a-5986-aa73-63e213d0d84a', 'description' => 'Liga de Cambrai', 'correct_answer' => false],
                    ['id' => 'ad8b2b2d-99fa-561a-b1ef-1eac882d47d2', 'description' => 'Liga de Esmalcalda', 'correct_answer' => false],
                    ['id' => '189b1afc-7590-5a5f-8bb1-5238e393e764', 'description' => 'Liga Aqueia', 'correct_answer' => true]
                ]],
        ['id' => '421cb090-58f2-5458-ad8c-fbbd6fe1eac8', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual aliança de cidades do norte da Itália enfrentou o imperador Frederico Barbarossa no século XII?', 'difficulty' => 2, 'weight' => 343, 'alternatives' => [
                    ['id' => '8a867a99-8906-5590-a17b-24927c18d4fc', 'description' => 'Liga Lombarda', 'correct_answer' => true],
                    ['id' => 'ed23c6f2-757d-5329-840d-fb5cd8110836', 'description' => 'Liga Católica', 'correct_answer' => false],
                    ['id' => '90c8706d-3f66-556b-be5d-60ef9ab7dc69', 'description' => 'Liga de Cognac', 'correct_answer' => false],
                    ['id' => '96c98dc7-bce4-5f67-a6f3-f8c6c1f15481', 'description' => 'Liga do Peloponeso', 'correct_answer' => false],
                    ['id' => 'ae4d740c-7aef-59ee-86cb-8648a039dfad', 'description' => 'Liga Aqueia', 'correct_answer' => false]
                ]],
        ['id' => 'bbc935c0-d849-5bb5-b9bf-44388638a6fb', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual batalha de 1071 resultou em uma derrota bizantina para os turcos seljúcidas e abriu caminho para a expansão turca na Anatólia?', 'difficulty' => 3, 'weight' => 589, 'alternatives' => [
                    ['id' => '022123ef-fa6d-5e27-bf29-c63e0c724ad9', 'description' => 'Batalha de Manzikert', 'correct_answer' => true],
                    ['id' => 'f3e03ae0-4a60-5e99-b3d5-b72ef786f1ca', 'description' => 'Batalha de Nicópolis', 'correct_answer' => false],
                    ['id' => '3dd530e3-b0c3-59a6-91e1-298e493e2130', 'description' => 'Batalha de Tours', 'correct_answer' => false],
                    ['id' => '2cc04d65-8ad3-5049-aea2-40b91ba965c7', 'description' => 'Batalha de Ain Jalut', 'correct_answer' => false],
                    ['id' => 'd09410ea-c217-5644-abc1-68ac06f8a795', 'description' => 'Batalha de Poitiers', 'correct_answer' => false]
                ]],
        ['id' => '383bc036-7d74-5be7-93d2-1eff38767150', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual batalha de 1396 terminou com a derrota de uma cruzada europeia diante dos otomanos?', 'difficulty' => 3, 'weight' => 488, 'alternatives' => [
                    ['id' => '4585e49e-c07f-5b84-a506-ccb7c31fdaf5', 'description' => 'Batalha de Manzikert', 'correct_answer' => false],
                    ['id' => '2bf730e9-c87b-54b9-be21-be0c0a8d679a', 'description' => 'Batalha de Ain Jalut', 'correct_answer' => false],
                    ['id' => 'bef3fb03-53a4-529e-9fc7-0860fb502a1d', 'description' => 'Batalha de Nicópolis', 'correct_answer' => true],
                    ['id' => 'fbca69ba-8921-54be-80f7-0fa500f753c1', 'description' => 'Batalha de Mohács', 'correct_answer' => false],
                    ['id' => 'f46a66f1-84be-5508-88e6-ce7d57d7a5a7', 'description' => 'Batalha de Poitiers', 'correct_answer' => false]
                ]],
        ['id' => '5fc13369-7591-5f41-a94c-c7990c99b589', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual batalha medieval envolveu forças sérvias e otomanas e se tornou central na memória nacional sérvia?', 'difficulty' => 3, 'weight' => 463, 'alternatives' => [
                    ['id' => '438dfdc1-b3f0-5da3-8e7f-4cd1a81d923e', 'description' => 'Batalha de Tours', 'correct_answer' => false],
                    ['id' => '9b2a5623-3a4a-5d2a-8256-37ccd6c7687c', 'description' => 'Batalha de Kosovo de 1389', 'correct_answer' => true],
                    ['id' => 'fc3908ba-d2b4-598e-8b82-61a119748d75', 'description' => 'Batalha de Varna', 'correct_answer' => false],
                    ['id' => '89373dd1-da67-5034-9237-d798193f4b2b', 'description' => 'Batalha de Ain Jalut', 'correct_answer' => false],
                    ['id' => 'b59d72e8-ea3c-59f7-996a-25bc04bdcd90', 'description' => 'Batalha de Hattin', 'correct_answer' => false]
                ]],
        ['id' => '07e73508-9f45-5a53-a792-41ce8d7e025d', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual batalha de 1444 terminou com a vitória otomana e a morte do rei Ladislau III da Polônia e Hungria?', 'difficulty' => 3, 'weight' => 515, 'alternatives' => [
                    ['id' => '4c9c0ccb-128f-5294-b1d6-53b67d156073', 'description' => 'Batalha de Lepanto', 'correct_answer' => false],
                    ['id' => '8ebe6138-4079-567d-8d91-198f19d207f0', 'description' => 'Batalha de Manzikert', 'correct_answer' => false],
                    ['id' => '37a9ec6d-0c52-5fc2-9691-5ad706da2291', 'description' => 'Batalha de Tours', 'correct_answer' => false],
                    ['id' => '964e6cf2-21e7-58ce-a9bd-acfea8940b37', 'description' => 'Batalha de Varna', 'correct_answer' => true],
                    ['id' => 'c52d36fa-e9ea-56c5-b4b0-b12f7c43760f', 'description' => 'Batalha de Mohács', 'correct_answer' => false]
                ]],
        ['id' => 'a3d42e8f-4b50-52c4-a4f0-f0bc29a2c402', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual batalha de 1526 resultou em uma derrota decisiva do Reino da Hungria diante dos otomanos?', 'difficulty' => 3, 'weight' => 518, 'alternatives' => [
                    ['id' => '58a1c4ef-e888-51ff-bc52-dd6f092c6d23', 'description' => 'Batalha de Mohács', 'correct_answer' => true],
                    ['id' => '21af4877-94ad-560a-9440-179539ad341d', 'description' => 'Batalha de Nicópolis', 'correct_answer' => false],
                    ['id' => 'e729cdbf-3a9e-5c2f-9a26-5e43598c0903', 'description' => 'Batalha de Ain Jalut', 'correct_answer' => false],
                    ['id' => 'bc301c24-827f-596a-9e5e-8b3f93a2bc0b', 'description' => 'Batalha de Poitiers', 'correct_answer' => false],
                    ['id' => 'e1d11fd9-5446-5202-9bd6-986c071e7f4c', 'description' => 'Batalha de Kosovo de 1389', 'correct_answer' => false]
                ]],
        ['id' => '76b4bb90-fd2f-5a06-b99b-8b6481eb3969', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual acordo de 1555 reconheceu o princípio cuius regio, eius religio no Sacro Império Romano-Germânico?', 'difficulty' => 3, 'weight' => 536, 'alternatives' => [
                    ['id' => '5634b2d9-b1f2-5ff6-8231-d66972a0407c', 'description' => 'Paz de Augsburg', 'correct_answer' => true],
                    ['id' => '45dd2fd1-531c-550e-bd9e-32a9a0cae704', 'description' => 'Paz de Campo Formio', 'correct_answer' => false],
                    ['id' => 'c20565e2-e5dc-5969-ac2f-ceaed5474f66', 'description' => 'Paz de Cateau-Cambrésis', 'correct_answer' => false],
                    ['id' => '6d1446e9-3a3f-5dec-86b2-c3a9d5f824e4', 'description' => 'Paz de Oliva', 'correct_answer' => false],
                    ['id' => '8a7992e0-279f-5ad1-9c3f-ad483e8374e1', 'description' => 'Paz de Karlowitz', 'correct_answer' => false]
                ]],
        ['id' => '11685161-e437-5b39-ac26-0c8556d4147e', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual tratado de 1559 encerrou as guerras italianas entre França e Espanha?', 'difficulty' => 3, 'weight' => 432, 'alternatives' => [
                    ['id' => 'f1dfa2e7-70fd-5be3-b839-4a5fcd5d9a2c', 'description' => 'Paz de Karlowitz', 'correct_answer' => false],
                    ['id' => 'e57753ad-8ea9-53b8-87ef-db4d95fb9d34', 'description' => 'Paz de Augsburg', 'correct_answer' => false],
                    ['id' => '49327d44-0443-5a48-9801-5850e15a700d', 'description' => 'Paz de Passarowitz', 'correct_answer' => false],
                    ['id' => '19520641-fda5-5760-8697-948ed7eb1939', 'description' => 'Paz de Altranstädt', 'correct_answer' => false],
                    ['id' => '0f193ab7-e5a8-5990-b8d2-effcbd294f2d', 'description' => 'Paz de Cateau-Cambrésis', 'correct_answer' => true]
                ]],
        ['id' => '808e7056-8c61-5354-9051-7b334be3a998', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual conjunto de tratados de 1678–1679 encerrou a Guerra Franco-Holandesa?', 'difficulty' => 3, 'weight' => 543, 'alternatives' => [
                    ['id' => '7aa5858e-f3bb-5b1c-8c37-b7076d7209c6', 'description' => 'Paz de Karlowitz', 'correct_answer' => false],
                    ['id' => '9a0bb256-70db-5b3e-9f24-7e89b3993cfe', 'description' => 'Paz de Nimega', 'correct_answer' => true],
                    ['id' => 'cf8ae7ca-36bb-5e7e-9d73-c19485e2804f', 'description' => 'Paz de Oliva', 'correct_answer' => false],
                    ['id' => '01aaeb85-54dc-5fea-91a4-aeaa3e7adc32', 'description' => 'Paz de Augsburg', 'correct_answer' => false],
                    ['id' => '2398ac1f-1f46-5b72-aaf4-69773d3a1c51', 'description' => 'Paz de Altranstädt', 'correct_answer' => false]
                ]],
        ['id' => '3fb77725-23bb-537b-860e-f977e2e0d3e2', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual tratado de 1697 encerrou a Guerra dos Nove Anos entre Luís XIV e uma coalizão europeia?', 'difficulty' => 3, 'weight' => 453, 'alternatives' => [
                    ['id' => 'e6dbec86-50fd-54fb-9233-02231f113462', 'description' => 'Paz de Augsburg', 'correct_answer' => false],
                    ['id' => '28315816-dba9-5ae5-916c-2d7be0b68682', 'description' => 'Paz de Oliva', 'correct_answer' => false],
                    ['id' => '77ad0be1-81fa-5d09-8706-6860b78e09ea', 'description' => 'Paz de Nimega', 'correct_answer' => false],
                    ['id' => '634f29d9-d6e4-5d00-845e-661864bf49ad', 'description' => 'Paz de Altranstädt', 'correct_answer' => false],
                    ['id' => '37966d4d-7782-5339-b6f7-fb28417a75bd', 'description' => 'Paz de Ryswick', 'correct_answer' => true]
                ]],
        ['id' => '3b9995a6-e02d-5d1a-a7a5-76dd6e682044', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual tratado de 1699 marcou importantes perdas territoriais otomanas na Europa Central?', 'difficulty' => 3, 'weight' => 533, 'alternatives' => [
                    ['id' => 'b75f5a80-f158-55c6-94b8-cbef95a5c9eb', 'description' => 'Paz de Rastatt', 'correct_answer' => false],
                    ['id' => '2742a7fe-42ef-58d6-af2f-c6f9abe7e93b', 'description' => 'Paz de Passarowitz', 'correct_answer' => false],
                    ['id' => '13d3f4a0-c9c9-5660-93b2-8d29b4ea1816', 'description' => 'Paz de Campo Formio', 'correct_answer' => false],
                    ['id' => 'd7ef4200-91b2-5cda-a797-d1c65cfe1cd1', 'description' => 'Paz de Cateau-Cambrésis', 'correct_answer' => false],
                    ['id' => '29e0dc06-aceb-5008-9386-e1f3e981467f', 'description' => 'Paz de Karlowitz', 'correct_answer' => true]
                ]],
        ['id' => '3309d6f9-d3df-5012-84e1-b7616502c815', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual documento de 1521 declarou Martinho Lutero herege e proscrito no Sacro Império?', 'difficulty' => 3, 'weight' => 543, 'alternatives' => [
                    ['id' => 'e5cdccb1-403f-5725-b760-cedc7e045ab6', 'description' => 'Édito de Nantes', 'correct_answer' => false],
                    ['id' => 'b663f136-921b-530f-9f65-310f4258cc74', 'description' => 'Édito de Saint-Germain', 'correct_answer' => false],
                    ['id' => '7a4c5cf5-fe15-5f80-b486-2217f104e65c', 'description' => 'Édito de Fontainebleau', 'correct_answer' => false],
                    ['id' => 'b041e766-816c-5a11-abf3-d1dd3151a663', 'description' => 'Édito de Worms', 'correct_answer' => true],
                    ['id' => 'f29391cc-d782-5627-a742-7c69f8716f94', 'description' => 'Édito de Milão', 'correct_answer' => false]
                ]],
        ['id' => '35a4b20e-5b28-5eb5-95dd-d49da7aaf357', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual decreto de 1598 concedeu direitos limitados aos protestantes huguenotes na França?', 'difficulty' => 3, 'weight' => 477, 'alternatives' => [
                    ['id' => 'b2d65125-c5ad-5510-a9b2-8ec97361dffd', 'description' => 'Édito de Nantes', 'correct_answer' => true],
                    ['id' => '2bc42a11-aa37-5b55-9493-22118ddffb8a', 'description' => 'Édito de Fontainebleau', 'correct_answer' => false],
                    ['id' => '33a0339a-6840-5a5c-a2f5-a0f913f2477d', 'description' => 'Édito de Saint-Germain', 'correct_answer' => false],
                    ['id' => 'e445fa59-821d-5401-82d1-1a6eede0ae53', 'description' => 'Édito de Tessalônica', 'correct_answer' => false],
                    ['id' => '69e274de-55d8-5d29-8c0a-ddbd55c0507a', 'description' => 'Édito de Potsdam', 'correct_answer' => false]
                ]],
        ['id' => '74c0fc3f-9688-5c21-8a73-4abac9e3b29f', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual decreto de 1685 revogou o Édito de Nantes e intensificou a perseguição aos huguenotes?', 'difficulty' => 3, 'weight' => 542, 'alternatives' => [
                    ['id' => '33787491-86a7-541a-91b3-6d31f22c9e8c', 'description' => 'Édito de Fontainebleau', 'correct_answer' => true],
                    ['id' => '1ee46596-3755-58ff-9970-ed7eecad748c', 'description' => 'Édito de Potsdam', 'correct_answer' => false],
                    ['id' => 'daa076d8-79e0-50fd-befc-36cf6115fb39', 'description' => 'Édito de Restituição', 'correct_answer' => false],
                    ['id' => 'd9bdb9c9-36fc-5914-a0d6-feacdc753428', 'description' => 'Édito de Worms', 'correct_answer' => false],
                    ['id' => '08a3c086-92c6-575e-9f43-150012a6ee1d', 'description' => 'Édito de Tolerância de José II', 'correct_answer' => false]
                ]],
        ['id' => '39e7a65f-360a-5181-8815-af5b9068a070', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual acordo de 313, associado a Constantino e Licínio, estabeleceu liberdade de culto aos cristãos no Império Romano?', 'difficulty' => 3, 'weight' => 584, 'alternatives' => [
                    ['id' => 'c6a9d52a-ca46-561a-9385-7fe7dfbc87a9', 'description' => 'Édito de Tolerância de José II', 'correct_answer' => false],
                    ['id' => '2f93eb40-9e6b-5dab-a9e1-82e423804778', 'description' => 'Édito de Amboise', 'correct_answer' => false],
                    ['id' => '0f3e7671-2d3d-5deb-bd0b-a91b224c9a2e', 'description' => 'Édito de Tessalônica', 'correct_answer' => false],
                    ['id' => '9fc4ff53-6959-5e35-b420-55b065fe3045', 'description' => 'Édito de Milão', 'correct_answer' => true],
                    ['id' => '06e4804c-bd0c-57d5-8085-423a9161fdb5', 'description' => 'Édito de Potsdam', 'correct_answer' => false]
                ]],
        ['id' => '273a64af-8394-57a0-9ed2-c0fbf43ddef6', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual decreto de 380, de Teodósio I e coimperadores, estabeleceu o cristianismo niceno como religião oficial do Império Romano?', 'difficulty' => 3, 'weight' => 559, 'alternatives' => [
                    ['id' => '919e2aa5-0011-5287-b4f2-48b409abb57f', 'description' => 'Édito de Potsdam', 'correct_answer' => false],
                    ['id' => 'f0074e03-c167-541f-9ed8-0281c65b033c', 'description' => 'Édito de Amboise', 'correct_answer' => false],
                    ['id' => '7a46ad36-cf5e-508c-95aa-cbf9190e9c80', 'description' => 'Édito de Worms', 'correct_answer' => false],
                    ['id' => '33e59052-ff89-53cb-983e-50cf8c4cfca4', 'description' => 'Édito de Restituição', 'correct_answer' => false],
                    ['id' => 'd1260802-9cf9-5491-b97f-7ea537648db9', 'description' => 'Édito de Tessalônica', 'correct_answer' => true]
                ]],
        ['id' => 'b05c50a7-dc8b-5df0-8a0f-02d0a5f8a772', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual conflito de 1778–1779 entre a Áustria e a Prússia ficou conhecido como Guerra da Batata?', 'difficulty' => 3, 'weight' => 526, 'alternatives' => [
                    ['id' => '9317e126-95c1-51dc-abb9-0721774a9bb4', 'description' => 'Guerra de Sucessão da Baviera', 'correct_answer' => true],
                    ['id' => 'f05e13c8-5341-5d0a-8775-f255e9934cf6', 'description' => 'Guerra da Sucessão de Lüneburg', 'correct_answer' => false],
                    ['id' => '3706effe-5e35-5452-aa5c-4fb41733f04d', 'description' => 'Guerra da Sucessão Espanhola', 'correct_answer' => false],
                    ['id' => '72078c52-5b8b-5ba7-b1fd-ee01ed781dff', 'description' => 'Guerra da Sucessão Portuguesa', 'correct_answer' => false],
                    ['id' => 'aa46516b-7d6a-5807-86b8-9f635bc8617d', 'description' => 'Guerra da Sucessão de Neuchâtel', 'correct_answer' => false]
                ]],
        ['id' => '105e573c-5178-596e-b767-a979d3c867d1', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual conflito de 1701–1714 foi provocado pela disputa pelo trono espanhol após a morte de Carlos II?', 'difficulty' => 3, 'weight' => 542, 'alternatives' => [
                    ['id' => '2ae729b0-d064-5db3-9b85-a0b0f44a7717', 'description' => 'Guerra da Sucessão Portuguesa', 'correct_answer' => false],
                    ['id' => '7d5ac521-eb75-5868-95d6-2a1ca7add52a', 'description' => 'Guerra de Sucessão da Baviera', 'correct_answer' => false],
                    ['id' => 'c3e701f4-3dfb-5d3d-a11d-e7b5d2ce3ab6', 'description' => 'Guerra da Sucessão de Jülich', 'correct_answer' => false],
                    ['id' => 'be84b442-706c-5a1c-aa8b-4095034d0e37', 'description' => 'Guerra da Sucessão Austríaca', 'correct_answer' => false],
                    ['id' => 'd3368f23-a7fa-56cf-86a5-db88e95b8790', 'description' => 'Guerra da Sucessão Espanhola', 'correct_answer' => true]
                ]],
        ['id' => '8855283f-7095-521d-ab30-176a3b7c8317', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual guerra de 1740–1748 começou após a ascensão de Maria Teresa aos domínios dos Habsburgo?', 'difficulty' => 3, 'weight' => 517, 'alternatives' => [
                    ['id' => '7a24d996-6d58-56e7-a962-6147c2f3d920', 'description' => 'Guerra da Sucessão de Neuchâtel', 'correct_answer' => false],
                    ['id' => '638e0fdc-c94b-5bf2-b66d-ac45d01a27c5', 'description' => 'Guerra da Sucessão de Lüneburg', 'correct_answer' => false],
                    ['id' => '238a560e-cb41-565e-8d36-59ca94dd0f20', 'description' => 'Guerra da Sucessão Portuguesa', 'correct_answer' => false],
                    ['id' => '5c9625ef-92eb-5935-9ec4-af5706e24d42', 'description' => 'Guerra da Sucessão de Landshut', 'correct_answer' => false],
                    ['id' => '78f5e62f-51d8-53a3-b7ca-918b267db486', 'description' => 'Guerra da Sucessão Austríaca', 'correct_answer' => true]
                ]],
        ['id' => '72ac84f7-7cbf-53f2-8b82-2ade61b31f4b', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual conflito de 1733–1738 envolveu a disputa entre Augusto III e Estanislau Leszczyński pelo trono polonês?', 'difficulty' => 3, 'weight' => 468, 'alternatives' => [
                    ['id' => 'd5d77268-d0ca-520d-a35c-eb5595545135', 'description' => 'Guerra da Sucessão Polonesa', 'correct_answer' => true],
                    ['id' => 'cf69ce16-9534-5d85-b867-da46e0460cd1', 'description' => 'Guerra da Sucessão Austríaca', 'correct_answer' => false],
                    ['id' => 'fb863c73-f3ba-5f5d-a2ff-fb6f8a25fdab', 'description' => 'Guerra da Sucessão de Mantua', 'correct_answer' => false],
                    ['id' => '7c0e631b-894d-5c91-9589-b6d643fb7c18', 'description' => 'Guerra da Sucessão de Landshut', 'correct_answer' => false],
                    ['id' => '178fa23a-77df-5fca-868e-ad32263aaa10', 'description' => 'Guerra da Sucessão de Jülich', 'correct_answer' => false]
                ]],
        ['id' => '76d97367-f34d-5d60-9427-45a0236118bf', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual conflito do início do século XVII envolveu a disputa pela sucessão dos ducados de Jülich-Cleves-Berg?', 'difficulty' => 3, 'weight' => 482, 'alternatives' => [
                    ['id' => '9c34453b-9ddf-56a6-b5f6-7a816da395bd', 'description' => 'Guerra da Sucessão Austríaca', 'correct_answer' => false],
                    ['id' => 'f2faa319-a344-592b-9c91-d74b9c839eb5', 'description' => 'Guerra da Sucessão Espanhola', 'correct_answer' => false],
                    ['id' => '9644b49c-2219-5881-a951-35d7aa0f0996', 'description' => 'Guerra da Sucessão Portuguesa', 'correct_answer' => false],
                    ['id' => 'f1de295b-7948-57ef-8120-b2ca47ccaaea', 'description' => 'Guerra da Sucessão de Lüneburg', 'correct_answer' => false],
                    ['id' => 'e6f1de26-ee29-5944-808a-c9d7dc404847', 'description' => 'Guerra da Sucessão de Jülich', 'correct_answer' => true]
                ]],
        ['id' => '8f429f23-6990-59a8-8b0f-baaf048a9f88', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual batalha de 751 opôs forças do Califado Abássida e da dinastia Tang na Ásia Central?', 'difficulty' => 3, 'weight' => 526, 'alternatives' => [
                    ['id' => '1815b26c-f0a9-58d4-8c6c-1bc170afb326', 'description' => 'Batalha de Talas', 'correct_answer' => true],
                    ['id' => '0dd43f98-5e93-5374-a24a-a5829c8ad757', 'description' => 'Batalha de Hydaspes', 'correct_answer' => false],
                    ['id' => '22634f2f-82da-58be-b073-db99f6dfdfba', 'description' => 'Batalha de Panipat', 'correct_answer' => false],
                    ['id' => 'e8c8fe52-a922-5a1b-820f-086af209ad5f', 'description' => 'Batalha de Plassey', 'correct_answer' => false],
                    ['id' => 'c78d7d16-64cb-5ae2-965d-47c428a1be8f', 'description' => 'Batalha de Wandiwash', 'correct_answer' => false]
                ]],
        ['id' => '1b40c1c2-1b80-5c64-bec6-4d870e5525ed', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual batalha de 1757 foi decisiva para o estabelecimento do domínio da Companhia Britânica das Índias Orientais em Bengala?', 'difficulty' => 3, 'weight' => 522, 'alternatives' => [
                    ['id' => '648811b0-d1f2-5483-ae54-2d305504ea85', 'description' => 'Batalha de Buxar', 'correct_answer' => false],
                    ['id' => '526e6986-ae53-5e68-b6e1-68d92baea307', 'description' => 'Batalha de Plassey', 'correct_answer' => true],
                    ['id' => 'e134c20b-1581-5253-8e8e-9d1d7910ad9d', 'description' => 'Batalha de Talas', 'correct_answer' => false],
                    ['id' => '08975856-1f9c-5906-870e-b1399c907a66', 'description' => 'Batalha de Hydaspes', 'correct_answer' => false],
                    ['id' => '0251c62d-baf8-5a97-832f-d57811fb39d8', 'description' => 'Batalha de Wandiwash', 'correct_answer' => false]
                ]],
        ['id' => '6b3a0712-7ecc-57ca-bdad-cc5a5a359831', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual batalha de 1526 marcou a vitória de Babur sobre Ibrahim Lodi e o início do Império Mogol na Índia?', 'difficulty' => 3, 'weight' => 573, 'alternatives' => [
                    ['id' => '3e2114a0-b042-52ac-aecc-a89195c1af40', 'description' => 'Batalha de Khanwa', 'correct_answer' => false],
                    ['id' => 'f504ab96-e662-57f5-8e14-fae004574c45', 'description' => 'Batalha de Panipat', 'correct_answer' => true],
                    ['id' => '19c9ec8f-a07f-54b3-96d4-c3cdb8f41423', 'description' => 'Batalha de Talas', 'correct_answer' => false],
                    ['id' => '4e225bd1-4a1c-5392-a6e4-ce109e7cc297', 'description' => 'Batalha de Wandiwash', 'correct_answer' => false],
                    ['id' => '7c2162a5-cbe7-5d1a-88fc-10a149938ec8', 'description' => 'Batalha de Haldighati', 'correct_answer' => false]
                ]],
        ['id' => '052ed8bd-002d-5106-b9c8-8549e53cd61e', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual batalha de 1764 consolidou a influência da Companhia Britânica das Índias Orientais em partes do norte da Índia?', 'difficulty' => 3, 'weight' => 538, 'alternatives' => [
                    ['id' => '4dbaf40d-6e3b-576f-807d-edddbd0a995a', 'description' => 'Batalha de Buxar', 'correct_answer' => true],
                    ['id' => 'cfc9b87f-89c6-53f2-883a-8f4ce00220a2', 'description' => 'Batalha de Plassey', 'correct_answer' => false],
                    ['id' => '5b8f78f0-4695-5941-a7f8-15d7c30cf0d6', 'description' => 'Batalha de Haldighati', 'correct_answer' => false],
                    ['id' => '9b8419a9-c0a3-5fea-983d-57f237252daa', 'description' => 'Batalha de Panipat', 'correct_answer' => false],
                    ['id' => '6e7cd1a3-b1be-5cfd-b5a1-fdc68d8dd7e2', 'description' => 'Batalha de Tarain', 'correct_answer' => false]
                ]],
        ['id' => '4f750bde-9b2a-5467-ade5-d0cb3e6fea7d', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual batalha de 1576 opôs as forças de Maharana Pratap às tropas mogóis de Akbar?', 'difficulty' => 3, 'weight' => 579, 'alternatives' => [
                    ['id' => '9f1d4860-b692-59c9-b837-70241f544799', 'description' => 'Batalha de Khanwa', 'correct_answer' => false],
                    ['id' => 'b1685a8b-f277-5b4d-b094-67c479c5579e', 'description' => 'Batalha de Haldighati', 'correct_answer' => true],
                    ['id' => 'fd05a0b4-cca7-50dc-9412-4d170cb8bb2a', 'description' => 'Batalha de Tarain', 'correct_answer' => false],
                    ['id' => '4de7865d-0659-5751-bd98-ff0eea213eb2', 'description' => 'Batalha de Talas', 'correct_answer' => false],
                    ['id' => 'fbd0347f-1d6b-5b55-b6cc-8dbe82deda03', 'description' => 'Batalha de Plassey', 'correct_answer' => false]
                ]],
        ['id' => 'ac16f927-606a-56a2-876b-fb7b6ac50549', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual dinastia governou o Império Parta antes de ser substituída pelos sassânidas?', 'difficulty' => 3, 'weight' => 581, 'alternatives' => [
                    ['id' => '0a1c72b2-754c-5fd4-9889-1203489acc6a', 'description' => 'Dinastia Selêucida', 'correct_answer' => false],
                    ['id' => '8b62d147-c02d-56fe-9f0f-ab3446a6ab66', 'description' => 'Dinastia Ptolomaica', 'correct_answer' => false],
                    ['id' => '480cbc93-c74a-5aca-a34e-60a7caf1fa20', 'description' => 'Dinastia Sataavahana', 'correct_answer' => false],
                    ['id' => '4b4840cc-eea7-52e1-a8ea-06e518165dd3', 'description' => 'Dinastia Kushan', 'correct_answer' => false],
                    ['id' => 'c23eebfb-5fe7-55db-be5e-dac1e89536c9', 'description' => 'Dinastia Arsácida', 'correct_answer' => true]
                ]],
        ['id' => '004607bc-3d03-5d18-978b-594e4bacf34e', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual dinastia governou a Pérsia entre os séculos III e VII, até a conquista árabe?', 'difficulty' => 3, 'weight' => 595, 'alternatives' => [
                    ['id' => '3ef94e65-28e6-5ac9-a8f5-adffb80b2be8', 'description' => 'Dinastia Aquemênida', 'correct_answer' => false],
                    ['id' => '028ef3a4-3e20-5dc4-b62a-afda5d5fe385', 'description' => 'Dinastia Arsácida', 'correct_answer' => false],
                    ['id' => 'ad074aa7-355f-5064-9bd6-a6bc73005a7b', 'description' => 'Dinastia Selêucida', 'correct_answer' => false],
                    ['id' => 'c8a855b0-d3ac-5838-9377-f80f8abb4069', 'description' => 'Dinastia Sassânida', 'correct_answer' => true],
                    ['id' => 'a56828de-b804-5463-b10e-a4819c7addcc', 'description' => 'Dinastia Parta', 'correct_answer' => false]
                ]],
        ['id' => 'fc8ab0e5-e6da-5cc0-aa86-5318b8fc9d01', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual dinastia persa foi fundada por Ciro, o Grande, e governou um vasto império antes de Alexandre?', 'difficulty' => 3, 'weight' => 424, 'alternatives' => [
                    ['id' => '675c1451-b057-5d35-8e5f-d1a208c72842', 'description' => 'Dinastia Sassânida', 'correct_answer' => false],
                    ['id' => '595713f9-b15d-52aa-9c97-39523929a002', 'description' => 'Dinastia Kushan', 'correct_answer' => false],
                    ['id' => '4d2d0a80-24ce-504e-a4d9-a6171a262cbb', 'description' => 'Dinastia Aquemênida', 'correct_answer' => true],
                    ['id' => 'ea201457-54c8-5ae0-a27f-485553f67010', 'description' => 'Dinastia Ptolomaica', 'correct_answer' => false],
                    ['id' => '42b338e0-9827-5a43-ade1-aa4820946208', 'description' => 'Dinastia Parta', 'correct_answer' => false]
                ]],
        ['id' => '0f684b56-ec98-52f4-b93a-eeccb939f1b5', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual dinastia helenística governou grande parte do antigo Império de Alexandre na Ásia após sua morte?', 'difficulty' => 3, 'weight' => 594, 'alternatives' => [
                    ['id' => '37bbf66b-7689-58db-a263-1d3093291e07', 'description' => 'Dinastia Parta', 'correct_answer' => false],
                    ['id' => '4c381bb8-7e0f-5dde-9601-e8adc92663da', 'description' => 'Dinastia Maurya', 'correct_answer' => false],
                    ['id' => '4a34e6b4-1de9-5f6c-89aa-54f6011e9afb', 'description' => 'Dinastia Kushan', 'correct_answer' => false],
                    ['id' => '347f0e85-75e8-5d19-a39a-d852039656b4', 'description' => 'Dinastia Selêucida', 'correct_answer' => true],
                    ['id' => '3b43dfd8-3f68-592a-89a0-7ac59e051a76', 'description' => 'Dinastia Aquemênida', 'correct_answer' => false]
                ]],
        ['id' => '11adae29-cc5e-5396-838e-d857421b41df', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual dinastia de origem macedônica governou o Egito após a divisão do império de Alexandre?', 'difficulty' => 3, 'weight' => 475, 'alternatives' => [
                    ['id' => '0832d5e4-7c37-5800-9b81-b219961770fa', 'description' => 'Dinastia Maurya', 'correct_answer' => false],
                    ['id' => '15d3c8b0-25cc-5f38-ba7e-4d0da60e3b86', 'description' => 'Dinastia Sataavahana', 'correct_answer' => false],
                    ['id' => '1e25b678-a1ff-571f-a97d-425dc7c81c96', 'description' => 'Dinastia Aquemênida', 'correct_answer' => false],
                    ['id' => '3acf9585-6288-5326-b9ef-c287e9f78773', 'description' => 'Dinastia Selêucida', 'correct_answer' => false],
                    ['id' => 'b9e169c0-fd97-5d39-b38a-8fb51a95729d', 'description' => 'Dinastia Ptolomaica', 'correct_answer' => true]
                ]],
        ['id' => '3bfea364-79e5-59d4-8ac0-21126cd59161', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual grande insurreição judaica contra Roma ocorreu entre 132 e 135, durante o governo de Adriano?', 'difficulty' => 3, 'weight' => 422, 'alternatives' => [
                    ['id' => 'a9df21c6-6770-5ab8-b3be-20bd05c43a2d', 'description' => 'Revolta de Vindex', 'correct_answer' => false],
                    ['id' => '4ef6b272-3f93-5fe0-bac1-dde3f115192a', 'description' => 'Revolta de Zenóbia', 'correct_answer' => false],
                    ['id' => 'e2103395-efb0-57bf-89d4-abd2d09262ba', 'description' => 'Revolta de Tacfarinas', 'correct_answer' => false],
                    ['id' => 'b2359747-d6cc-5e45-aa1a-e54c03ae9679', 'description' => 'Revolta de Bar Kokhba', 'correct_answer' => true],
                    ['id' => 'dd6476e5-a9c0-5e0a-b946-7995465e65f7', 'description' => 'Revolta dos Macabeus', 'correct_answer' => false]
                ]],
        ['id' => '7629e6d1-c702-5244-8a30-d87e367d83f4', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual revolta judaica do século II a.C. levou ao estabelecimento de um Estado judaico sob a dinastia hasmoneia?', 'difficulty' => 3, 'weight' => 512, 'alternatives' => [
                    ['id' => 'f2d09835-ef3b-55f7-901a-c2f3d3e5d7d1', 'description' => 'Revolta de Vindex', 'correct_answer' => false],
                    ['id' => 'f448c4a9-a034-5288-a4fb-b7a6aa6a2110', 'description' => 'Revolta dos Macabeus', 'correct_answer' => true],
                    ['id' => '720c635a-ce9e-56e7-8377-f12360fe2656', 'description' => 'Revolta de Bar Kokhba', 'correct_answer' => false],
                    ['id' => '04fbf485-85c9-5f89-842e-9d929230dabf', 'description' => 'Revolta de Zenóbia', 'correct_answer' => false],
                    ['id' => '8e844dba-4d99-558e-b5a2-da2145161bfc', 'description' => 'Revolta de Boudica', 'correct_answer' => false]
                ]],
        ['id' => '210070b6-a358-5116-a662-f25598fbe959', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual rebelião do século I d.C. foi liderada por uma rainha icena contra o domínio romano na Britânia?', 'difficulty' => 3, 'weight' => 462, 'alternatives' => [
                    ['id' => '59257428-007c-5422-a8cb-207a46e8f906', 'description' => 'Revolta de Vindex', 'correct_answer' => false],
                    ['id' => '3918f3b7-7686-51d6-8698-1fe2e8ab946a', 'description' => 'Revolta de Boudica', 'correct_answer' => true],
                    ['id' => '0fbb5eb7-cfac-5fb6-a825-62f366aa7c56', 'description' => 'Revolta de Zenóbia', 'correct_answer' => false],
                    ['id' => 'e8221bdd-dc58-5d0c-ae58-19981352ee6b', 'description' => 'Revolta de Firmo', 'correct_answer' => false],
                    ['id' => 'dc83f5e6-01fb-5ead-8408-50f841215458', 'description' => 'Revolta dos Macabeus', 'correct_answer' => false]
                ]],
        ['id' => 'bb41291d-b1c2-54bd-90c6-79f47a49cfcb', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual revolta de 68 d.C. na Gália contribuiu para a queda do imperador Nero?', 'difficulty' => 3, 'weight' => 408, 'alternatives' => [
                    ['id' => '57aa5db9-3c23-5645-9763-68e302631a49', 'description' => 'Revolta de Tacfarinas', 'correct_answer' => false],
                    ['id' => '17c78280-08fc-5c91-b9ff-664fc79cef97', 'description' => 'Revolta de Magnêncio', 'correct_answer' => false],
                    ['id' => '93b70bc1-8d45-5c03-b51d-ad245f6686ba', 'description' => 'Revolta dos Macabeus', 'correct_answer' => false],
                    ['id' => '2565d285-dbf1-5fd1-beec-ce4730ef5534', 'description' => 'Revolta de Saturnino', 'correct_answer' => false],
                    ['id' => 'f554f1ff-884f-5f9d-882a-96b5974c8984', 'description' => 'Revolta de Vindex', 'correct_answer' => true]
                ]],
        ['id' => 'e0fd2bc1-6bfa-5c31-b1a9-504713d8dbbd', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual insurgência do século I d.C. contra Roma foi liderada por um antigo auxiliar númida no norte da África?', 'difficulty' => 3, 'weight' => 551, 'alternatives' => [
                    ['id' => 'e53f2208-9946-50ac-804a-b82c4687c768', 'description' => 'Revolta de Tacfarinas', 'correct_answer' => true],
                    ['id' => '78c02315-e504-5c45-ac02-ccb05d16606e', 'description' => 'Revolta de Saturnino', 'correct_answer' => false],
                    ['id' => '4d54ab31-d286-574f-a34f-e60e2c6abe09', 'description' => 'Revolta de Vindex', 'correct_answer' => false],
                    ['id' => '587749b2-4699-5ec7-94af-20eb83dfebf7', 'description' => 'Revolta de Bar Kokhba', 'correct_answer' => false],
                    ['id' => '643ce06f-dcc3-5b22-ab6d-35405fb86ec1', 'description' => 'Revolta de Firmo', 'correct_answer' => false]
                ]],
        ['id' => '01e8404a-1340-56d3-9046-b16760604edb', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual concílio de 325 condenou o arianismo e formulou uma versão inicial do Credo Niceno?', 'difficulty' => 3, 'weight' => 552, 'alternatives' => [
                    ['id' => 'd8995179-ee22-57ae-8b33-e925a2d08b7d', 'description' => 'Concílio de Constantinopla', 'correct_answer' => false],
                    ['id' => 'af711041-fc3f-532f-b9fd-ff609f75bf9f', 'description' => 'Concílio de Trento', 'correct_answer' => false],
                    ['id' => '6d4bb0d9-206a-5d10-87ef-c719f5a00603', 'description' => 'Concílio de Pisa', 'correct_answer' => false],
                    ['id' => '14f55b86-8e75-5998-b98a-40241637d0f4', 'description' => 'Concílio de Niceia', 'correct_answer' => true],
                    ['id' => 'dd74a081-ff18-5be8-aaac-69ea66841ea6', 'description' => 'Concílio de Éfeso', 'correct_answer' => false]
                ]],
        ['id' => '748421a0-23d9-5229-ba04-d525830e95ea', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual concílio de 381 reafirmou o Credo Niceno e tratou da doutrina sobre o Espírito Santo?', 'difficulty' => 3, 'weight' => 450, 'alternatives' => [
                    ['id' => '33791b8f-0c70-5eb8-9603-d7067b535eb9', 'description' => 'Concílio de Clermont', 'correct_answer' => false],
                    ['id' => '683ca598-8ff8-5d20-815e-e7d2b2c31aee', 'description' => 'Concílio de Constantinopla', 'correct_answer' => true],
                    ['id' => '0fd66a78-6f1f-5af0-8a3d-3f5b49ec5943', 'description' => 'Concílio de Calcedônia', 'correct_answer' => false],
                    ['id' => '18aae1c5-325b-5c9f-8b41-e3bb7e3293e3', 'description' => 'Concílio de Niceia', 'correct_answer' => false],
                    ['id' => '9c95a8fe-0f8f-5d2e-aa32-602a3c944c51', 'description' => 'Concílio de Éfeso', 'correct_answer' => false]
                ]],
        ['id' => 'ac99c322-633b-5164-bae4-11b6ef43c94c', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual concílio de 431 condenou Nestório e afirmou o uso do título Theotokos para Maria?', 'difficulty' => 3, 'weight' => 518, 'alternatives' => [
                    ['id' => '5e11aa7e-4eb0-5012-93ce-ea5e056f2979', 'description' => 'Concílio de Latrão IV', 'correct_answer' => false],
                    ['id' => '73764155-d416-577c-ae4b-0673a576adeb', 'description' => 'Concílio de Pisa', 'correct_answer' => false],
                    ['id' => 'a06c591e-232f-5b1e-a135-57206ff51356', 'description' => 'Concílio de Niceia', 'correct_answer' => false],
                    ['id' => '88a52376-2f33-5623-9818-2023f4e02536', 'description' => 'Concílio de Clermont', 'correct_answer' => false],
                    ['id' => '1a832859-7b73-50e7-b94f-af3541e512c7', 'description' => 'Concílio de Éfeso', 'correct_answer' => true]
                ]],
        ['id' => '35f779cd-bde9-5632-90bb-46728cc3b599', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual concílio de 451 definiu a doutrina das duas naturezas de Cristo, divina e humana?', 'difficulty' => 3, 'weight' => 573, 'alternatives' => [
                    ['id' => '69da796e-008d-5e53-9f5e-2179c45fb1e5', 'description' => 'Concílio de Éfeso', 'correct_answer' => false],
                    ['id' => 'eb874a3d-ac47-56e3-ace1-07653d9b895e', 'description' => 'Concílio de Latrão IV', 'correct_answer' => false],
                    ['id' => 'd80bca07-34db-5f70-ba18-b5848d966cdf', 'description' => 'Concílio de Pisa', 'correct_answer' => false],
                    ['id' => 'ae92085d-ea21-5dea-8b04-f11c9a7dd2e1', 'description' => 'Concílio de Calcedônia', 'correct_answer' => true],
                    ['id' => '6326a149-49a4-5764-9d9b-58c740e12f1e', 'description' => 'Concílio de Niceia', 'correct_answer' => false]
                ]],
        ['id' => '039628f8-6037-5289-853a-10d51ae9a69f', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual concílio católico do século XVI respondeu a questões levantadas pela Reforma Protestante?', 'difficulty' => 3, 'weight' => 590, 'alternatives' => [
                    ['id' => 'c1cbd2fa-310c-550d-b61c-ef7e80c66cef', 'description' => 'Concílio de Niceia', 'correct_answer' => false],
                    ['id' => 'b6491f13-7411-59fa-bd70-b03cc32b54c3', 'description' => 'Concílio de Trento', 'correct_answer' => true],
                    ['id' => '04cef284-de0b-57da-8c30-912218ab88a2', 'description' => 'Concílio de Pisa', 'correct_answer' => false],
                    ['id' => '7a4b700e-d84e-5a3d-9a63-160e2992c1ef', 'description' => 'Concílio de Basileia', 'correct_answer' => false],
                    ['id' => '3a8c906f-656d-59ee-9cac-d7606a898fec', 'description' => 'Concílio de Latrão IV', 'correct_answer' => false]
                ]],
        ['id' => '0ae0c0d7-2809-5cca-b800-851d952cc640', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual batalha de 1014 terminou com uma vitória decisiva de Basílio II sobre o Império Búlgaro?', 'difficulty' => 4, 'weight' => 663, 'alternatives' => [
                    ['id' => '2e51a80d-6ad6-530a-a4fe-1fb27ac7794f', 'description' => 'Batalha de Serres', 'correct_answer' => false],
                    ['id' => 'cae957c4-ed91-53ee-aad5-3f7ea3990847', 'description' => 'Batalha de Anchialus', 'correct_answer' => false],
                    ['id' => '261603d3-a286-57b9-bb8e-cdcb6b861965', 'description' => 'Batalha de Belasitsa', 'correct_answer' => false],
                    ['id' => '39014241-127c-53ee-8b13-8dbe1a686232', 'description' => 'Batalha de Kleidion', 'correct_answer' => true],
                    ['id' => '6729081f-e43e-59dc-9b10-dfd513ad2d41', 'description' => 'Batalha de Preslav', 'correct_answer' => false]
                ]],
        ['id' => 'f907b230-b8b8-5592-a9d8-99214e7c8676', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual batalha de 1081 opôs o imperador bizantino Aleixo I Comneno aos normandos de Roberto Guiscardo?', 'difficulty' => 4, 'weight' => 786, 'alternatives' => [
                    ['id' => '5e892a70-c797-5223-870a-6c2679bc4bce', 'description' => 'Batalha de Kleidion', 'correct_answer' => false],
                    ['id' => '7626b375-84bb-57d5-be04-fccd25e161d3', 'description' => 'Batalha de Klokotnitsa', 'correct_answer' => false],
                    ['id' => '1871450b-c9f8-550c-a1f4-2f65c89b87d1', 'description' => 'Batalha de Dyrrhachium', 'correct_answer' => true],
                    ['id' => '1bd18785-acf6-5733-8c41-b2a1e3ef708d', 'description' => 'Batalha de Preslav', 'correct_answer' => false],
                    ['id' => 'c1994322-7555-54c6-907a-42a6a2c3669a', 'description' => 'Batalha de Adrianópolis', 'correct_answer' => false]
                ]],
        ['id' => '521eacb2-bc4f-5c0c-9dcf-0fc64ee28073', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual denominação geográfica também é usada para a batalha travada em 1014 no desfiladeiro de Kleidion?', 'difficulty' => 4, 'weight' => 733, 'alternatives' => [
                    ['id' => '62c78137-a58c-57f2-84de-227f18475ca4', 'description' => 'Batalha de Pliska', 'correct_answer' => false],
                    ['id' => '482b934d-f859-5dd8-a258-c7649d8dd4d7', 'description' => 'Batalha de Preslav', 'correct_answer' => false],
                    ['id' => '2467d3c3-6252-5051-b89e-1ee0ea591fa9', 'description' => 'Batalha de Belasitsa', 'correct_answer' => true],
                    ['id' => '06d41604-0dab-5ac6-aa20-19739d8be24d', 'description' => 'Batalha de Serres', 'correct_answer' => false],
                    ['id' => 'c336f1d3-0e9f-5648-ad8f-8423a75e1246', 'description' => 'Batalha de Dyrrhachium', 'correct_answer' => false]
                ]],
        ['id' => 'a44ed7fa-5799-583c-9e22-2033eb76a6e3', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Em qual batalha de 971 as forças de João Tzimisces conquistaram a capital búlgara oriental de Preslav?', 'difficulty' => 4, 'weight' => 618, 'alternatives' => [
                    ['id' => '98932034-9b1a-59ff-9a7b-a19271356622', 'description' => 'Batalha de Adrianópolis', 'correct_answer' => false],
                    ['id' => '095bcd3a-5417-50cf-a907-05465e52869a', 'description' => 'Batalha de Serres', 'correct_answer' => false],
                    ['id' => '3daafbb9-4d61-5047-a701-053ae6173e51', 'description' => 'Batalha de Tryavna', 'correct_answer' => false],
                    ['id' => 'b05f2b3d-e0b7-5925-a58d-e8824ee3de55', 'description' => 'Batalha de Preslav', 'correct_answer' => true],
                    ['id' => 'ff1e26d4-f94d-5106-90de-1e23b53460c8', 'description' => 'Batalha de Kleidion', 'correct_answer' => false]
                ]],
        ['id' => 'eae49248-6130-536a-a9ee-d6b50eefce07', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Em qual confronto de 917 Simeão I derrotou decisivamente o exército bizantino nas proximidades do mar Negro?', 'difficulty' => 4, 'weight' => 737, 'alternatives' => [
                    ['id' => '0f8b3d5a-7714-57cf-80f6-90c4d117e629', 'description' => 'Batalha de Anchialus', 'correct_answer' => true],
                    ['id' => '406f5e16-8431-5916-a613-f69940cc736f', 'description' => 'Batalha de Preslav', 'correct_answer' => false],
                    ['id' => 'f1f8d126-ace2-5f11-85a0-bcfc1d018693', 'description' => 'Batalha de Klokotnitsa', 'correct_answer' => false],
                    ['id' => '92c35556-fa42-5473-8408-7ec1f0cf49ba', 'description' => 'Batalha de Tryavna', 'correct_answer' => false],
                    ['id' => '8f951d6e-567a-5b65-a93d-15dec409670c', 'description' => 'Batalha de Belasitsa', 'correct_answer' => false]
                ]],
        ['id' => '40d32209-2524-5908-a5ff-fb09c915ccaf', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual instrumento promulgado por Carlos VI buscou assegurar a indivisibilidade dos domínios dos Habsburgo e a sucessão de Maria Teresa?', 'difficulty' => 4, 'weight' => 783, 'alternatives' => [
                    ['id' => '7e7bea63-81c7-57d6-a33e-1b0d715683b3', 'description' => 'Pragmática Sanção de 1549', 'correct_answer' => false],
                    ['id' => '35069e95-99de-55de-a1f1-438137afd4af', 'description' => 'Pragmática Sanção de 1621', 'correct_answer' => false],
                    ['id' => 'e42d2c11-b2a2-5031-b20e-4019b2a5467a', 'description' => 'Pragmática Sanção de 1713', 'correct_answer' => true],
                    ['id' => '659f5678-a28f-52e6-b268-44f7c3c7125c', 'description' => 'Pragmática Sanção de 1740', 'correct_answer' => false],
                    ['id' => '7db27e97-5ba4-599c-b46d-6a37365b345a', 'description' => 'Pragmática Sanção de 1701', 'correct_answer' => false]
                ]],
        ['id' => '87241c4d-19f0-56f6-8388-403467830ff4', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual documento sucessório dos Habsburgo foi uma das causas diplomáticas da Guerra da Sucessão Austríaca?', 'difficulty' => 4, 'weight' => 657, 'alternatives' => [
                    ['id' => '560eebb6-fae9-593b-816a-484144e2ebe3', 'description' => 'Pragmática Sanção de 1740', 'correct_answer' => false],
                    ['id' => 'ecf171f1-8ebe-5d80-8e02-876b75714bdc', 'description' => 'Pragmática Sanção de 1763', 'correct_answer' => false],
                    ['id' => '8581777b-e669-5979-8214-a05236853df5', 'description' => 'Pragmática Sanção de 1713', 'correct_answer' => true],
                    ['id' => '20819fba-0666-5095-b4c0-fdb0697e0028', 'description' => 'Pragmática Sanção de 1621', 'correct_answer' => false],
                    ['id' => 'fd43f367-8325-5f9f-8800-22b4070bf4c6', 'description' => 'Pragmática Sanção de 1563', 'correct_answer' => false]
                ]],
        ['id' => 'd5d83b9e-6ed9-5998-874c-3bbe1126936c', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual ato de 1713 foi reconhecido por várias potências europeias em acordos posteriores, mas contestado na sucessão de 1740?', 'difficulty' => 4, 'weight' => 752, 'alternatives' => [
                    ['id' => '84744c9c-0e00-5362-bb17-ca53e64ba527', 'description' => 'Pragmática Sanção de 1713', 'correct_answer' => true],
                    ['id' => 'b74d7665-8b8f-595d-b5d7-f74444a254be', 'description' => 'Pragmática Sanção de 1720', 'correct_answer' => false],
                    ['id' => '0f9ae9cc-461a-57c6-ae1d-e655a823f38d', 'description' => 'Pragmática Sanção de 1621', 'correct_answer' => false],
                    ['id' => '224556f9-55ac-56ec-9b30-543b7713027e', 'description' => 'Pragmática Sanção de 1563', 'correct_answer' => false],
                    ['id' => 'cbaed163-eb66-5a6f-995e-f460e8715486', 'description' => 'Pragmática Sanção de 1701', 'correct_answer' => false]
                ]],
        ['id' => '7093c4a9-35ab-554d-8e2f-d3de640511e2', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual medida dinástica permitiu que a herança dos Habsburgo pudesse passar a uma filha na ausência de herdeiro masculino?', 'difficulty' => 4, 'weight' => 682, 'alternatives' => [
                    ['id' => 'e15248c6-1914-53af-a524-948dc287c3bb', 'description' => 'Pragmática Sanção de 1549', 'correct_answer' => false],
                    ['id' => 'a865d7cf-21e8-5c4d-9dbf-8153d15ba63f', 'description' => 'Pragmática Sanção de 1763', 'correct_answer' => false],
                    ['id' => 'fd4989ce-c011-5235-954c-60febf5670d5', 'description' => 'Pragmática Sanção de 1740', 'correct_answer' => false],
                    ['id' => '9b5e965f-f6a8-5266-b3c9-56d0d9bb34c2', 'description' => 'Pragmática Sanção de 1756', 'correct_answer' => false],
                    ['id' => '8da9c50f-0aab-5dee-8219-9f271a56fa72', 'description' => 'Pragmática Sanção de 1713', 'correct_answer' => true]
                ]],
        ['id' => 'cf17efdc-4169-506b-afbb-882989fc4cec', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual documento de Carlos VI tentou garantir a sucessão hereditária dos territórios austríacos à sua descendência feminina?', 'difficulty' => 4, 'weight' => 684, 'alternatives' => [
                    ['id' => '5c5b323a-68d5-549c-8fb6-d9ce1f1037b3', 'description' => 'Pragmática Sanção de 1621', 'correct_answer' => false],
                    ['id' => '1bc391b3-a8a5-536b-8631-c7467d81e670', 'description' => 'Pragmática Sanção de 1549', 'correct_answer' => false],
                    ['id' => 'ace08944-0c1a-5775-b243-cdc0a43b9a0e', 'description' => 'Pragmática Sanção de 1713', 'correct_answer' => true],
                    ['id' => '5165482c-c0d1-5a65-b649-cea077a06983', 'description' => 'Pragmática Sanção de 1683', 'correct_answer' => false],
                    ['id' => '06a5aa52-ee4d-5f49-a95f-02c1ff3a8c91', 'description' => 'Pragmática Sanção de 1740', 'correct_answer' => false]
                ]],
        ['id' => '0a198b7e-b7d0-5ae9-8979-915f330670af', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual tratado de 1018 encerrou temporariamente o conflito entre Henrique II e Boleslau I da Polônia?', 'difficulty' => 4, 'weight' => 655, 'alternatives' => [
                    ['id' => 'c8d9d1d2-2e60-597f-afc3-c7f904c38f8f', 'description' => 'Paz de Thorn', 'correct_answer' => false],
                    ['id' => 'ce657474-a326-57b0-9e16-147fd61fdb16', 'description' => 'Paz de Bautzen', 'correct_answer' => true],
                    ['id' => 'c3bef79d-7559-5b51-822d-05f30dea1d3e', 'description' => 'Paz de Roskilde', 'correct_answer' => false],
                    ['id' => '5cd73a8f-da01-5f1d-b917-25f61da32d07', 'description' => 'Paz de Nystad', 'correct_answer' => false],
                    ['id' => '4ac4b3fb-9683-5929-95e6-579d34f3a11c', 'description' => 'Paz de Toruń', 'correct_answer' => false]
                ]],
        ['id' => '0409a831-cad5-504a-a52a-cfd3654cd670', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual tratado de 1466 encerrou a Guerra dos Treze Anos entre a Ordem Teutônica e a Polônia?', 'difficulty' => 4, 'weight' => 753, 'alternatives' => [
                    ['id' => 'e77cfaba-48b3-5b0d-9942-bd19f86a9cef', 'description' => 'Paz de Nystad', 'correct_answer' => false],
                    ['id' => 'b51b804a-25d4-5587-92d4-7a260085c9ac', 'description' => 'Paz de Thorn', 'correct_answer' => true],
                    ['id' => '7a99ed27-6b83-51f8-b656-25ef4aee1723', 'description' => 'Paz de Stolbovo', 'correct_answer' => false],
                    ['id' => '2298f733-2dae-5fe1-af5e-badb12e4efc2', 'description' => 'Paz de Plussa', 'correct_answer' => false],
                    ['id' => '43d0b94e-806f-560d-8c21-9662fbee8e2b', 'description' => 'Paz de Altmark', 'correct_answer' => false]
                ]],
        ['id' => 'abcd77fc-d976-54a7-bbc6-2fd69286debb', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual tratado de 1721 encerrou a Grande Guerra do Norte e confirmou ganhos territoriais russos no Báltico?', 'difficulty' => 4, 'weight' => 798, 'alternatives' => [
                    ['id' => '31ec97cd-622d-5444-9445-2b8b755b4354', 'description' => 'Paz de Stolbovo', 'correct_answer' => false],
                    ['id' => '5d85a46e-d512-5d1b-a06d-ed68d94c0b3f', 'description' => 'Paz de Bautzen', 'correct_answer' => false],
                    ['id' => 'd59c045e-4ea4-5610-8c0c-1441f760f558', 'description' => 'Paz de Nystad', 'correct_answer' => true],
                    ['id' => 'ac23830d-10e8-565b-8675-d7d7f6888aa0', 'description' => 'Paz de Altmark', 'correct_answer' => false],
                    ['id' => '7c958977-43bd-56e6-81d6-ea38126179de', 'description' => 'Paz de Thorn', 'correct_answer' => false]
                ]],
        ['id' => '4a637d73-1f07-5a59-a3ae-b22167f4b39d', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual tratado de 1617 encerrou a guerra entre Suécia e Rússia e concedeu à Suécia territórios na região do Báltico?', 'difficulty' => 4, 'weight' => 659, 'alternatives' => [
                    ['id' => '91ddc27a-a1fb-51d2-aa70-aa1a2a344c45', 'description' => 'Paz de Brömsebro', 'correct_answer' => false],
                    ['id' => '3a083505-25e8-5e52-959f-2e93d26b6dde', 'description' => 'Paz de Altmark', 'correct_answer' => false],
                    ['id' => '366873cd-12cd-50fe-8a2f-fd26adcf53e2', 'description' => 'Paz de Plussa', 'correct_answer' => false],
                    ['id' => '637183a5-99e2-50e8-81c6-e84326185057', 'description' => 'Paz de Roskilde', 'correct_answer' => false],
                    ['id' => '4c963ff7-5de4-53d6-8fa1-80ab31d4321d', 'description' => 'Paz de Stolbovo', 'correct_answer' => true]
                ]],
        ['id' => '6e0f7810-dec9-5f0c-80d7-fb852e83e951', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual trégua de 1629 encerrou temporariamente o conflito entre Suécia e Comunidade Polaco-Lituana?', 'difficulty' => 4, 'weight' => 650, 'alternatives' => [
                    ['id' => '6d3efdf2-944b-5666-b83c-db6da3b67bd8', 'description' => 'Paz de Nystad', 'correct_answer' => false],
                    ['id' => '00e9953c-b868-5cb2-9f86-75e8100521c8', 'description' => 'Paz de Altmark', 'correct_answer' => true],
                    ['id' => '91241891-b730-515a-97da-51ad62290920', 'description' => 'Paz de Bautzen', 'correct_answer' => false],
                    ['id' => '2cd9618b-b5e1-5750-8d62-b2845a7dac49', 'description' => 'Paz de Roskilde', 'correct_answer' => false],
                    ['id' => 'c913dbfd-7fbf-5ada-905e-adc5a81c818f', 'description' => 'Paz de Stolbovo', 'correct_answer' => false]
                ]],
        ['id' => 'dadbcb82-bf98-5a51-9f78-b7c4416fe99a', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual batalha naval de 1340, no início da Guerra dos Cem Anos, deu aos ingleses o controle do Canal da Mancha?', 'difficulty' => 4, 'weight' => 627, 'alternatives' => [
                    ['id' => '140db257-5a41-5e73-af3f-0e917825939c', 'description' => 'Batalha de Solebay', 'correct_answer' => false],
                    ['id' => '2ea66377-08d5-5521-a79c-3954c509b9a8', 'description' => 'Batalha de Winchelsea', 'correct_answer' => false],
                    ['id' => '70fa5b57-c1f7-541d-a329-512ae51a08a3', 'description' => 'Batalha de Lowestoft', 'correct_answer' => false],
                    ['id' => '60f625d1-b387-5b5b-8904-b11f1d21785b', 'description' => 'Batalha de Sluys', 'correct_answer' => true],
                    ['id' => '6e47ff8d-6f66-54aa-9c90-4fa65b8e70ef', 'description' => 'Batalha de Arnemuiden', 'correct_answer' => false]
                ]],
        ['id' => '58c61de1-5fa7-5541-a95a-6c3836536e95', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual batalha naval de 1372 resultou em uma vitória castelhana sobre uma frota inglesa?', 'difficulty' => 4, 'weight' => 625, 'alternatives' => [
                    ['id' => '45f6fe4e-d3b3-5651-8bcc-090a3e5864cf', 'description' => 'Batalha de Winchelsea', 'correct_answer' => false],
                    ['id' => '7c6a618e-e074-5e7d-ae81-87121daefd04', 'description' => 'Batalha de La Rochelle', 'correct_answer' => true],
                    ['id' => 'b4d1be33-7c29-5d3b-8b98-3cb509123747', 'description' => 'Batalha de Sluys', 'correct_answer' => false],
                    ['id' => '2fa4ac2c-cfd9-519d-bd7a-e0908f021af8', 'description' => 'Batalha de Texel', 'correct_answer' => false],
                    ['id' => '9f343ae4-852d-5d9d-8211-feae663e7276', 'description' => 'Batalha de Arnemuiden', 'correct_answer' => false]
                ]],
        ['id' => '940964c6-a794-52f4-a889-59bce39ab759', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual batalha naval de 1350 foi uma vitória inglesa contra uma frota castelhana?', 'difficulty' => 4, 'weight' => 750, 'alternatives' => [
                    ['id' => 'f06e7265-d524-5124-a94b-1d3368414403', 'description' => 'Batalha de Lowestoft', 'correct_answer' => false],
                    ['id' => '82fa88e8-268e-5cd0-958e-5f5e614ab868', 'description' => 'Batalha de Winchelsea', 'correct_answer' => true],
                    ['id' => '86fd46ac-1e6b-537a-8204-2de6822e79b3', 'description' => 'Batalha de Damme', 'correct_answer' => false],
                    ['id' => '7c9ae399-8aea-5001-8a8e-f5059ad5c4f3', 'description' => 'Batalha de Sluys', 'correct_answer' => false],
                    ['id' => 'b8c36e99-0494-5ccb-a98e-23904025862a', 'description' => 'Batalha de Texel', 'correct_answer' => false]
                ]],
        ['id' => '48e17c92-4cb2-5b50-9878-87d4d492ddd6', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual batalha naval de 1217 foi decisiva para a defesa do governo de Henrique III contra uma invasão francesa?', 'difficulty' => 4, 'weight' => 669, 'alternatives' => [
                    ['id' => 'f03a381b-3a8a-5b69-b4bd-f77e26a65e70', 'description' => 'Batalha de Arnemuiden', 'correct_answer' => false],
                    ['id' => 'd89608b9-6679-518e-900e-46eade0ac91b', 'description' => 'Batalha de Lowestoft', 'correct_answer' => false],
                    ['id' => 'facef5ed-63d4-5f18-9988-cf9b9b036449', 'description' => 'Batalha de Dover', 'correct_answer' => false],
                    ['id' => '4e3981c8-22c4-5c33-8fbd-40e13062af0c', 'description' => 'Batalha de Damme', 'correct_answer' => false],
                    ['id' => '0e272fc1-c8da-514d-957f-f3de418bb784', 'description' => 'Batalha de Sandwich', 'correct_answer' => true]
                ]],
        ['id' => 'eb69483d-db14-5b5c-b696-7ec64cbc8e30', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual combate naval de 1338 é frequentemente citado como um dos primeiros usos documentados de artilharia em navios europeus?', 'difficulty' => 4, 'weight' => 753, 'alternatives' => [
                    ['id' => 'e364fe01-9bb1-5fed-b514-1768a8ab442d', 'description' => 'Batalha de Sluys', 'correct_answer' => false],
                    ['id' => '16d015a8-1a9e-5294-8e5f-861e5ac89db9', 'description' => 'Batalha de Lowestoft', 'correct_answer' => false],
                    ['id' => 'dbe39ba3-6605-5008-b214-eb28a783d75d', 'description' => 'Batalha de Dover', 'correct_answer' => false],
                    ['id' => '49f0ec07-689c-525f-9f4c-206fc65b06db', 'description' => 'Batalha de Arnemuiden', 'correct_answer' => true],
                    ['id' => '3039e99e-7655-57d0-8fd1-e0689b542add', 'description' => 'Batalha de Damme', 'correct_answer' => false]
                ]],
        ['id' => '38cc2223-bfc1-5804-a0ce-24efe902fd0b', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual acordo de 1454 estabeleceu um equilíbrio entre os principais Estados italianos do Renascimento?', 'difficulty' => 4, 'weight' => 720, 'alternatives' => [
                    ['id' => '58d15442-902b-5544-a4d4-1b91cd497f77', 'description' => 'Paz de Le Cateau', 'correct_answer' => false],
                    ['id' => 'ad8d506d-9b69-5ed0-8ba3-9f67717762e7', 'description' => 'Paz de Amiens', 'correct_answer' => false],
                    ['id' => 'da596743-43f8-590b-bbb8-0677d182dd69', 'description' => 'Paz de Cambrai', 'correct_answer' => false],
                    ['id' => '49b5aebf-d6dd-558f-8508-1061bb7f3e28', 'description' => 'Paz de Vervins', 'correct_answer' => false],
                    ['id' => '8e3473c1-e0a2-592a-9987-da87e5b2e79d', 'description' => 'Paz de Lodi', 'correct_answer' => true]
                ]],
        ['id' => '536472de-709d-5abc-8165-cd45293c43d4', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual tratado de 1559 encerrou as guerras italianas e confirmou a predominância espanhola na península?', 'difficulty' => 4, 'weight' => 774, 'alternatives' => [
                    ['id' => '03cf9a08-ad4e-54ee-b256-1d42829c0f2a', 'description' => 'Paz de Crépy', 'correct_answer' => false],
                    ['id' => '798d1b53-5a40-5325-b36d-15429df0baeb', 'description' => 'Paz de Arras', 'correct_answer' => false],
                    ['id' => '04ea2393-57db-522a-b04c-8585e80e3122', 'description' => 'Paz de Cateau-Cambrésis', 'correct_answer' => true],
                    ['id' => 'c52d5372-383d-5cc3-a5d7-c0e8c7001a62', 'description' => 'Paz de Cambrai', 'correct_answer' => false],
                    ['id' => '5ab2301e-09e8-5d05-a18b-2ad419b21f80', 'description' => 'Paz de Lyon', 'correct_answer' => false]
                ]],
        ['id' => '752e338e-db34-5cfe-b537-4e804880b26a', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual tratado de 1529, também chamado Paz das Damas, encerrou uma fase das guerras entre Francisco I e Carlos V?', 'difficulty' => 4, 'weight' => 611, 'alternatives' => [
                    ['id' => '5d6b5c0b-6992-5410-ae62-87220324eae1', 'description' => 'Paz de Cateau-Cambrésis', 'correct_answer' => false],
                    ['id' => 'd0493445-8a99-5ad2-baf2-b22a9febe01b', 'description' => 'Paz de Cambrai', 'correct_answer' => true],
                    ['id' => 'cfe9be59-5b73-5fb8-8ae4-d19851d91ace', 'description' => 'Paz de Crépy', 'correct_answer' => false],
                    ['id' => '5584d81f-a5d2-5c25-9f18-b62967d4f952', 'description' => 'Paz de Ferrara', 'correct_answer' => false],
                    ['id' => 'a16799f2-5eb6-553b-9cf5-05e5a97c62f7', 'description' => 'Paz de Arras', 'correct_answer' => false]
                ]],
        ['id' => '51b4346b-66e5-5b9d-8693-53cb1b6d50f5', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual tratado de 1544 encerrou a guerra entre Francisco I da França e Carlos V?', 'difficulty' => 4, 'weight' => 737, 'alternatives' => [
                    ['id' => '2ec96de5-1e8f-5ef1-be64-c5f05f82735d', 'description' => 'Paz de Lodi', 'correct_answer' => false],
                    ['id' => 'c4c7a43a-b928-5b4e-820a-130f0aac1dc3', 'description' => 'Paz de Crépy', 'correct_answer' => true],
                    ['id' => '00882b28-367c-52a7-932e-0a20a58112d4', 'description' => 'Paz de Arras', 'correct_answer' => false],
                    ['id' => '8a9eda05-719f-5270-9bf3-65e2feb56ae3', 'description' => 'Paz de Le Cateau', 'correct_answer' => false],
                    ['id' => '15d596b9-6bb4-5fe8-a958-71ab7d419db7', 'description' => 'Paz de Ferrara', 'correct_answer' => false]
                ]],
        ['id' => '4a582e9b-2c5d-5d34-8a14-a9bd48b003c3', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual tratado de 1598 encerrou a guerra entre França e Espanha durante o reinado de Henrique IV?', 'difficulty' => 4, 'weight' => 729, 'alternatives' => [
                    ['id' => '906594a5-a75e-5cf9-95f0-1d220df268e5', 'description' => 'Paz de Cateau-Cambrésis', 'correct_answer' => false],
                    ['id' => '8546da30-6667-5675-9cf0-56e1e4c0eefd', 'description' => 'Paz de Vervins', 'correct_answer' => true],
                    ['id' => '1c06ddb6-357a-5147-b0ca-8b9717da6fbd', 'description' => 'Paz de Lyon', 'correct_answer' => false],
                    ['id' => 'c8fbb3c5-f331-5324-be91-a9bfe735e55b', 'description' => 'Paz de Cambrai', 'correct_answer' => false],
                    ['id' => 'f197162c-b4bf-52b1-9520-dfeb017cca94', 'description' => 'Paz de Lodi', 'correct_answer' => false]
                ]],
        ['id' => 'd7e21e8c-3696-5aa8-9207-b6f052351f5c', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual batalha de 1014, travada no vale do Estrímnio, ficou associada à derrota do czar Samuel?', 'difficulty' => 4, 'weight' => 739, 'alternatives' => [
                    ['id' => '1e64e3b5-9c0f-51a4-a421-6057eb2607b9', 'description' => 'Batalha de Serres', 'correct_answer' => false],
                    ['id' => 'f60af9aa-1dfd-5fec-8712-636636f2eec8', 'description' => 'Batalha de Adrianópolis', 'correct_answer' => false],
                    ['id' => '1180fd4e-4755-57b3-97de-7f48d1b57896', 'description' => 'Batalha de Belasitsa', 'correct_answer' => true],
                    ['id' => '87d1bc93-d02f-5501-a446-8b3c1b8486ad', 'description' => 'Batalha de Klokotnitsa', 'correct_answer' => false],
                    ['id' => '13a30e0c-b804-5446-8c00-55b7546a68a7', 'description' => 'Batalha de Anchialus', 'correct_answer' => false]
                ]],
        ['id' => '07c616d1-7a3a-51cf-b67e-80c66b7883a9', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual batalha de 1004 integrou as campanhas bizantinas de Basílio II contra o Primeiro Império Búlgaro?', 'difficulty' => 4, 'weight' => 783, 'alternatives' => [
                    ['id' => '374c464f-da5b-5f16-8474-10df91556842', 'description' => 'Batalha de Serres', 'correct_answer' => false],
                    ['id' => '1a32a540-7f1c-5aeb-9ae5-7b2cb7c796e2', 'description' => 'Batalha de Skopje', 'correct_answer' => true],
                    ['id' => '6af75cf9-d689-595e-b01e-1ba177513cce', 'description' => 'Batalha de Anchialus', 'correct_answer' => false],
                    ['id' => '036a2d9b-bf26-55db-9cc6-31203f405a74', 'description' => 'Batalha de Tryavna', 'correct_answer' => false],
                    ['id' => 'fb88df5d-e4f3-509e-a7f2-f16769dedec5', 'description' => 'Batalha de Preslav', 'correct_answer' => false]
                ]],
        ['id' => '5ae1c699-e183-52ab-aeee-e25744edc474', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual combate de 971 resultou na tomada de Preslav pelas tropas do imperador João I Tzimisces?', 'difficulty' => 4, 'weight' => 756, 'alternatives' => [
                    ['id' => 'c74f3e89-3851-5276-9d15-c54205ff20b0', 'description' => 'Batalha de Klokotnitsa', 'correct_answer' => false],
                    ['id' => '34d7a4af-fa93-5b52-a8b6-f679ae08ed46', 'description' => 'Batalha de Belasitsa', 'correct_answer' => false],
                    ['id' => '945b80bf-ec65-5fc6-ae82-c42181312d0a', 'description' => 'Batalha de Preslav', 'correct_answer' => true],
                    ['id' => 'e735235a-bd8f-59d6-bb71-443c26402a71', 'description' => 'Batalha de Serres', 'correct_answer' => false],
                    ['id' => '806678c8-8297-5927-bc3c-3b47727d43d2', 'description' => 'Batalha de Pliska', 'correct_answer' => false]
                ]],
        ['id' => 'f0ddce2a-d3df-548b-a6a4-58303fb3b5a7', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual vitória búlgara de 917 ocorreu perto da atual cidade búlgara de Pomorie?', 'difficulty' => 4, 'weight' => 645, 'alternatives' => [
                    ['id' => '8bb55ba0-8046-5103-98fe-bc7257e7b655', 'description' => 'Batalha de Tryavna', 'correct_answer' => false],
                    ['id' => 'e5fc209c-ebb1-59fa-8820-c59d235db80e', 'description' => 'Batalha de Anchialus', 'correct_answer' => true],
                    ['id' => 'd9bb1a93-e859-57cc-97b1-2c014a5f3cbe', 'description' => 'Batalha de Klokotnitsa', 'correct_answer' => false],
                    ['id' => '00221791-d1b5-5bb3-be7c-54097ac580c7', 'description' => 'Batalha de Belasitsa', 'correct_answer' => false],
                    ['id' => '9897c02f-7154-555b-9143-6d3eb9cc12c6', 'description' => 'Batalha de Adrianópolis', 'correct_answer' => false]
                ]],
        ['id' => '04958f7f-f26d-520e-9b9f-059bd2a1b5e0', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual batalha de 1230 consolidou o poder do Segundo Império Búlgaro sob João Asen II?', 'difficulty' => 4, 'weight' => 773, 'alternatives' => [
                    ['id' => '1e1a13ba-aafd-5388-aa6f-0b69ddba8e8e', 'description' => 'Batalha de Anchialus', 'correct_answer' => false],
                    ['id' => '2e6ac445-0d13-58aa-a877-542f71f188d3', 'description' => 'Batalha de Adrianópolis', 'correct_answer' => false],
                    ['id' => '15d2005b-d54a-5a0b-9576-ffece9a148e1', 'description' => 'Batalha de Kleidion', 'correct_answer' => false],
                    ['id' => '73653392-0542-53d6-8b27-4a4b4f689c31', 'description' => 'Batalha de Pliska', 'correct_answer' => false],
                    ['id' => '0ea1fac0-c5d6-5c4e-a282-8ec957fc0abb', 'description' => 'Batalha de Klokotnitsa', 'correct_answer' => true]
                ]],
        ['id' => '43f2cbac-354b-5944-9c7f-e6d88870a8fa', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual acordo de 1122 encerrou a Questão das Investiduras entre o papado e o Sacro Império?', 'difficulty' => 4, 'weight' => 672, 'alternatives' => [
                    ['id' => '25b135d4-78f3-5ae8-9a89-ae2351f03d1b', 'description' => 'Concordata de 1855', 'correct_answer' => false],
                    ['id' => 'e7089ac3-3294-5595-8b81-76009f09dce7', 'description' => 'Concordata de 1929', 'correct_answer' => false],
                    ['id' => '69a00722-c7a1-527b-8287-579ab5823075', 'description' => 'Concordata de 1516', 'correct_answer' => false],
                    ['id' => 'a59b0ec7-baa6-564f-a3e1-e29177aba420', 'description' => 'Concordata de Worms', 'correct_answer' => true],
                    ['id' => '8a15afa2-1cb2-55f1-bf22-13348567ade3', 'description' => 'Concordata de 1801', 'correct_answer' => false]
                ]],
        ['id' => '104346b4-f4a1-5e84-9154-43dceb2db905', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual acordo de 1516 entre Francisco I e Leão X regulou relações entre a monarquia francesa e o papado?', 'difficulty' => 4, 'weight' => 696, 'alternatives' => [
                    ['id' => 'a9683517-7d39-5832-ab8c-eb6751c5c7fd', 'description' => 'Concordata de 1753', 'correct_answer' => false],
                    ['id' => 'e75cbd67-037c-53e3-90e8-652a1295b6b1', 'description' => 'Concordata de 1855', 'correct_answer' => false],
                    ['id' => '75967ce7-5b17-5f28-8d5f-3badabce5d65', 'description' => 'Concordata de 1801', 'correct_answer' => false],
                    ['id' => 'ff5ac9b4-ff5b-575b-be33-8a29e62560fd', 'description' => 'Concordata de Bolonha', 'correct_answer' => true],
                    ['id' => 'ff9b1687-59e2-5717-b56b-e1028797ba53', 'description' => 'Concordata de Viena', 'correct_answer' => false]
                ]],
        ['id' => '627a2168-9073-5b62-9214-55aee58e6cde', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual acordo de 1448 regulou relações entre o papado e o Sacro Império Romano-Germânico?', 'difficulty' => 4, 'weight' => 638, 'alternatives' => [
                    ['id' => '7778bd11-9095-59bc-ac79-743b0ecafbcc', 'description' => 'Concordata de 1516', 'correct_answer' => false],
                    ['id' => 'd924aa8b-9fc3-5dde-9177-f8cc42106069', 'description' => 'Concordata de Viena', 'correct_answer' => true],
                    ['id' => '3d2acf5f-e4c1-52e1-b565-517d8a402121', 'description' => 'Concordata de Bolonha', 'correct_answer' => false],
                    ['id' => 'ad84c855-3f27-5ffc-84ab-21ee3fa06f79', 'description' => 'Concordata de 1933', 'correct_answer' => false],
                    ['id' => '14733e56-3ed5-5eb0-b0b0-62d58fd6ccba', 'description' => 'Concordata de 1753', 'correct_answer' => false]
                ]],
        ['id' => '56cdf442-bcca-50f8-9da6-3ef74433f2e1', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual acordo entre Napoleão Bonaparte e o papa Pio VII reorganizou as relações entre a Igreja Católica e o Estado francês?', 'difficulty' => 4, 'weight' => 776, 'alternatives' => [
                    ['id' => '4fb2edb0-b3bc-56b9-9f99-bfd6f3fab25c', 'description' => 'Concordata de Bolonha', 'correct_answer' => false],
                    ['id' => '4c901c31-ca12-516b-ade3-b24c8aa0af90', 'description' => 'Concordata de 1516', 'correct_answer' => false],
                    ['id' => '90399b03-f94d-5812-9b3c-a2647dae4ee4', 'description' => 'Concordata de 1929', 'correct_answer' => false],
                    ['id' => 'fb84b3e5-fc86-554d-8e3d-45691185a920', 'description' => 'Concordata de 1801', 'correct_answer' => true],
                    ['id' => '158d9eb3-83f6-5bd1-a611-efd80639c0c7', 'description' => 'Concordata de 1753', 'correct_answer' => false]
                ]],
        ['id' => '47782c63-a31e-53f0-bc56-9185612992b0', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual acordo entre a Santa Sé e a Itália reconheceu a soberania da Cidade do Vaticano?', 'difficulty' => 4, 'weight' => 646, 'alternatives' => [
                    ['id' => 'aef5923f-3eff-56c0-9e6e-579f0a08676d', 'description' => 'Concordata de 1855', 'correct_answer' => false],
                    ['id' => '4e92cee0-b265-51dd-9895-6211c42a39d0', 'description' => 'Concordata de Bolonha', 'correct_answer' => false],
                    ['id' => '4485cf9a-4aec-5760-a3d5-e0e52aca8620', 'description' => 'Concordata de Fontainebleau', 'correct_answer' => false],
                    ['id' => 'a0c4149b-c5c6-5ecc-a6b4-ea5e62d60a3d', 'description' => 'Concordata de 1933', 'correct_answer' => false],
                    ['id' => '340e528a-22d9-5014-9ab8-3df78fc430c7', 'description' => 'Concordata de 1929', 'correct_answer' => true]
                ]],
        ['id' => '93e34699-2b88-58cb-a9a8-86ea8a6d3a5c', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual reunião eclesiástica de 664 na Nortúmbria decidiu adotar práticas romanas, incluindo o cálculo da data da Páscoa?', 'difficulty' => 4, 'weight' => 615, 'alternatives' => [
                    ['id' => 'cb1b7570-6ec5-55b9-a30d-1760c182447a', 'description' => 'Sínodo de Whitby', 'correct_answer' => true],
                    ['id' => 'cf1cc921-7a53-56ba-8bd8-295a6d65c9d0', 'description' => 'Sínodo de Pistoia', 'correct_answer' => false],
                    ['id' => '6c69436d-ecdc-5c25-aa9a-2a27703fef99', 'description' => 'Sínodo de Quierzy', 'correct_answer' => false],
                    ['id' => 'c3cbdd1d-98bd-52c6-99ae-ec05571562a9', 'description' => 'Sínodo de Dort', 'correct_answer' => false],
                    ['id' => '1fe935c7-ef4b-5a48-be54-eb33037da5c8', 'description' => 'Sínodo de Aachen', 'correct_answer' => false]
                ]],
        ['id' => '40ca8114-f60f-59de-bb1b-d405816df938', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual sínodo de 673, presidido por Teodoro de Tarso, estabeleceu cânones para a Igreja anglo-saxônica?', 'difficulty' => 4, 'weight' => 737, 'alternatives' => [
                    ['id' => '1136f3e3-095f-5b96-83ef-de9c06ccb376', 'description' => 'Sínodo de Dort', 'correct_answer' => false],
                    ['id' => '9dae0b71-836c-5fe4-bb41-6ddeef43f6e9', 'description' => 'Sínodo de Aachen', 'correct_answer' => false],
                    ['id' => '0d35b838-e183-51a0-9998-99d0a8f10215', 'description' => 'Sínodo de Arles', 'correct_answer' => false],
                    ['id' => '9d7b62c7-9848-52f1-9c7a-1e33b270bde0', 'description' => 'Sínodo de Pistoia', 'correct_answer' => false],
                    ['id' => '1adad27c-abe1-59e7-9409-3c4443a05cbf', 'description' => 'Sínodo de Hertford', 'correct_answer' => true]
                ]],
        ['id' => 'cd1d6733-13b5-5714-add4-2c432a1a1257', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual sínodo de 680 na Inglaterra reafirmou a ortodoxia contra o monotelismo?', 'difficulty' => 4, 'weight' => 668, 'alternatives' => [
                    ['id' => 'bbcd2b67-d793-5b92-88db-1712bcbbae38', 'description' => 'Sínodo de Arles', 'correct_answer' => false],
                    ['id' => '9717ecf0-f357-5f0c-be83-1033de21699b', 'description' => 'Sínodo de Whitby', 'correct_answer' => false],
                    ['id' => '04866471-e1a2-5c73-9d60-ceb3b5b13298', 'description' => 'Sínodo de Pistoia', 'correct_answer' => false],
                    ['id' => 'dc5beeb7-e459-5416-80d6-c5bf05cd2b4a', 'description' => 'Sínodo de Hatfield', 'correct_answer' => true],
                    ['id' => 'f9a19240-01e6-5cfd-9ee1-6bdf929e386e', 'description' => 'Sínodo de Aachen', 'correct_answer' => false]
                ]],
        ['id' => '2b77471e-b9be-5f7a-b48f-67f8b1833a53', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual reunião de 794 condenou o adocionismo e tratou da controvérsia das imagens no contexto carolíngio?', 'difficulty' => 4, 'weight' => 778, 'alternatives' => [
                    ['id' => 'f48a7ea8-1b29-5d95-a385-4c73a0a72da9', 'description' => 'Sínodo de Frankfurt', 'correct_answer' => true],
                    ['id' => '8e9b85ee-79b4-5f69-bc3d-b5878e909d0c', 'description' => 'Sínodo de Orange', 'correct_answer' => false],
                    ['id' => '045f5f1a-e882-59b9-93a2-1929577cfb99', 'description' => 'Sínodo de Quierzy', 'correct_answer' => false],
                    ['id' => '6eeab5fc-3585-58ca-a36f-662f9063bb7f', 'description' => 'Sínodo de Whitby', 'correct_answer' => false],
                    ['id' => 'ef792e9e-1d71-54fd-95ac-c232f1911b67', 'description' => 'Sínodo de Pistoia', 'correct_answer' => false]
                ]],
        ['id' => '5e9b6aea-4e4b-5eca-aabd-afb1ad8680de', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual sínodo reformado de 1618–1619 formulou os Cânones de Dort em resposta ao arminianismo?', 'difficulty' => 4, 'weight' => 677, 'alternatives' => [
                    ['id' => '9bb95157-3e95-57d5-90d6-54f97f407506', 'description' => 'Sínodo de Dort', 'correct_answer' => true],
                    ['id' => '2484b85b-116b-54c3-b073-377cc8acaa9d', 'description' => 'Sínodo de Whitby', 'correct_answer' => false],
                    ['id' => '50d7e84c-b4d7-52f7-a0a3-1fad8a92b31a', 'description' => 'Sínodo de Aachen', 'correct_answer' => false],
                    ['id' => 'bd2c6eea-0498-5ad2-b887-9c377a551b12', 'description' => 'Sínodo de Orange', 'correct_answer' => false],
                    ['id' => '0c9abc22-8e81-5520-8a07-c9d874e8161b', 'description' => 'Sínodo de Quierzy', 'correct_answer' => false]
                ]],
        ['id' => '81ee3640-c077-5fec-a44e-25ed424f0a70', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual acordo de 1582 entre a Comunidade Polaco-Lituana e a Rússia encerrou a Guerra da Livônia por dez anos?', 'difficulty' => 5, 'weight' => 920, 'alternatives' => [
                    ['id' => '4c82ffb5-8095-523e-bc15-69337e22b599', 'description' => 'Paz de Deulino', 'correct_answer' => false],
                    ['id' => '5727e4bb-123d-5e5b-8175-afba3de21dd6', 'description' => 'Tratado de Nystad', 'correct_answer' => false],
                    ['id' => '5d86e8b7-e272-55dd-8700-d68f78b768d7', 'description' => 'Trégua de Yam-Zapolsky', 'correct_answer' => true],
                    ['id' => '66d454bc-292f-5841-9fcd-6cb263b644ba', 'description' => 'Paz de Kardis', 'correct_answer' => false],
                    ['id' => '7a9faca5-1095-55d4-bbf8-376bc118579e', 'description' => 'Paz de Polyanovka', 'correct_answer' => false]
                ]],
        ['id' => '1e49d3c7-6391-53e2-a6f4-e4bde9756f30', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual tratado de 1618 encerrou a guerra polaco-russa e concedeu à Comunidade Polaco-Lituana territórios como Smolensk?', 'difficulty' => 5, 'weight' => 991, 'alternatives' => [
                    ['id' => '88828064-c814-5814-ba44-ebc022c950e9', 'description' => 'Tratado de Kyakhta', 'correct_answer' => false],
                    ['id' => '2064c127-ccae-56e9-9eac-c5f84438f8f6', 'description' => 'Paz de Kardis', 'correct_answer' => false],
                    ['id' => '0c1fd970-6341-5a2d-a9be-dc473f832e66', 'description' => 'Paz de Deulino', 'correct_answer' => true],
                    ['id' => '433e6532-0c99-50b2-82a6-8d74c2e680bb', 'description' => 'Paz de Stolbovo', 'correct_answer' => false],
                    ['id' => '1da52703-59d4-5b9d-a4e5-0d2fd7e7ff93', 'description' => 'Tratado de Nystad', 'correct_answer' => false]
                ]],
        ['id' => '43ae0be5-039e-5535-847c-f9224b2b6cf5', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual tratado de 1634 encerrou formalmente a guerra entre a Polônia-Lituânia e a Rússia iniciada em 1632?', 'difficulty' => 5, 'weight' => 942, 'alternatives' => [
                    ['id' => 'd9372eae-5cb8-5b3f-8edc-b912ee50c4da', 'description' => 'Tratado de Pereyaslav', 'correct_answer' => false],
                    ['id' => '572c9940-45e4-52e1-9638-33143b0740b0', 'description' => 'Trégua de Yam-Zapolsky', 'correct_answer' => false],
                    ['id' => '71acaf08-10af-50b1-aef1-d028795b74fa', 'description' => 'Paz de Kardis', 'correct_answer' => false],
                    ['id' => 'aabb515e-407d-5e9c-a5af-5d7f2ea27772', 'description' => 'Paz de Deulino', 'correct_answer' => false],
                    ['id' => '5750b6fd-ed43-5706-ae79-5143e77cd880', 'description' => 'Paz de Polyanovka', 'correct_answer' => true]
                ]],
        ['id' => '23a8e81c-335f-51c6-bcb8-92587bcc4145', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual acordo de 1667 dividiu territórios ucranianos entre a Comunidade Polaco-Lituana e o czarismo russo?', 'difficulty' => 5, 'weight' => 844, 'alternatives' => [
                    ['id' => '6113f9fa-8ade-5a27-8a51-528584d1aa70', 'description' => 'Paz de Deulino', 'correct_answer' => false],
                    ['id' => '2878c187-fa7f-5231-b462-68750ea691eb', 'description' => 'Paz de Stolbovo', 'correct_answer' => false],
                    ['id' => 'a7160578-dc0d-5d76-8466-316877ad6652', 'description' => 'Tratado de Kyakhta', 'correct_answer' => false],
                    ['id' => '8e926044-a235-5524-8123-8958e9500cdf', 'description' => 'Trégua de Andrusovo', 'correct_answer' => true],
                    ['id' => '03798a5e-4e73-594b-9285-2740f0ff4792', 'description' => 'Paz de Kardis', 'correct_answer' => false]
                ]],
        ['id' => '666a9fa7-c9e2-53da-97cd-a8df805e80d2', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual tratado de 1661 encerrou a guerra russo-sueca e confirmou, em grande parte, os termos territoriais anteriores?', 'difficulty' => 5, 'weight' => 856, 'alternatives' => [
                    ['id' => '24209dcc-54fd-501f-8969-3ba6bb0879a5', 'description' => 'Tratado de Pereyaslav', 'correct_answer' => false],
                    ['id' => '07e5e751-86fe-5525-8962-1ae0af5e8de7', 'description' => 'Tratado de Nystad', 'correct_answer' => false],
                    ['id' => 'fcd3c725-8bf9-5c5e-a9ca-6a4e556f5b2e', 'description' => 'Tratado de Kyakhta', 'correct_answer' => false],
                    ['id' => '7908759e-4e3c-5098-822e-1c31dd7ddc52', 'description' => 'Paz de Kardis', 'correct_answer' => true],
                    ['id' => '9a38eb83-22cd-5be7-8ad6-96e5728caac7', 'description' => 'Tratado de Nerchinsk', 'correct_answer' => false]
                ]],
        ['id' => 'e2816584-52da-5137-a70e-fa15e1d8a7f6', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual acordo de 1360, durante a Guerra dos Cem Anos, concedeu extensos territórios franceses a Eduardo III em troca de sua renúncia à coroa francesa?', 'difficulty' => 5, 'weight' => 1000, 'alternatives' => [
                    ['id' => '31ae9ee9-aea8-59c2-8082-2aef3b16f118', 'description' => 'Tratado de Guérande', 'correct_answer' => false],
                    ['id' => '2fd6ecde-cfd8-59a0-b564-57fae991f3a6', 'description' => 'Tratado de Picquigny', 'correct_answer' => false],
                    ['id' => '99d44b31-c51e-5bd1-b0fe-8b2befb56f52', 'description' => 'Tratado de Madrid de 1526', 'correct_answer' => false],
                    ['id' => 'd7c4f2ea-1ef7-5cf6-a109-a9cc2bbd7f7a', 'description' => 'Tratado de Brétigny', 'correct_answer' => true],
                    ['id' => '99b58a70-c2d2-5337-b848-aca93d503212', 'description' => 'Tratado de Péronne', 'correct_answer' => false]
                ]],
        ['id' => '81d07afd-a420-5503-a109-2f9217086e7c', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual tratado de 1420 reconheceu Henrique V da Inglaterra como herdeiro do trono francês?', 'difficulty' => 5, 'weight' => 826, 'alternatives' => [
                    ['id' => '9e3f079e-e105-50aa-adc0-b6e5077ec11b', 'description' => 'Tratado de Troyes', 'correct_answer' => true],
                    ['id' => 'a1d1a1c7-86ea-59c4-8ad8-a02f0e8c7193', 'description' => 'Tratado de Péronne', 'correct_answer' => false],
                    ['id' => '54864c43-3ef9-523b-b615-e1e76043ce52', 'description' => 'Tratado de Arras de 1435', 'correct_answer' => false],
                    ['id' => 'e81581d0-892f-59f8-9a68-668c334fae13', 'description' => 'Tratado de Cateau-Cambrésis', 'correct_answer' => false],
                    ['id' => 'e876c3f8-f7c9-5e49-9f4b-b7c57c954f29', 'description' => 'Tratado de Brétigny', 'correct_answer' => false]
                ]],
        ['id' => 'c9e205c8-9d81-587a-8129-7f1ec422b426', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual acordo de 1435 retirou o apoio de Filipe, o Bom, da Borgonha aos ingleses durante a Guerra dos Cem Anos?', 'difficulty' => 5, 'weight' => 809, 'alternatives' => [
                    ['id' => '89a77c3e-cef6-57b2-80e0-ad59bcf3df83', 'description' => 'Tratado de Amiens', 'correct_answer' => false],
                    ['id' => '0461a54b-5d7c-5a9a-bb74-5062e08036c9', 'description' => 'Tratado de Péronne', 'correct_answer' => false],
                    ['id' => 'd1bb1203-b74e-5794-b3bf-36dc6eee38c6', 'description' => 'Tratado de Cateau-Cambrésis', 'correct_answer' => false],
                    ['id' => '8ec405db-b5c6-5dc2-9bf6-cfee6219cf1a', 'description' => 'Tratado de Arras de 1435', 'correct_answer' => true],
                    ['id' => 'df5c6fb8-d897-5fec-99c6-0e47f121c1ae', 'description' => 'Tratado de Guérande', 'correct_answer' => false]
                ]],
        ['id' => 'a9a9b412-bb99-563c-8d97-d290e06f5f3f', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual tratado de 1475 encerrou a campanha de Eduardo IV na França após acordo com Luís XI?', 'difficulty' => 5, 'weight' => 946, 'alternatives' => [
                    ['id' => '3a8d0e7d-445a-54cf-8eb6-5e652b58afcf', 'description' => 'Tratado de Picquigny', 'correct_answer' => true],
                    ['id' => '501c04fc-1aac-50e5-a135-597ebc478d5e', 'description' => 'Tratado de Guérande', 'correct_answer' => false],
                    ['id' => 'b1293910-d172-5300-9efa-465ea8e6b474', 'description' => 'Tratado de Senlis', 'correct_answer' => false],
                    ['id' => '704669a0-ae8e-551d-80d2-c1b531ab5acd', 'description' => 'Tratado de Madrid de 1526', 'correct_answer' => false],
                    ['id' => 'bd39b65a-9be5-59a2-935b-076777e9736c', 'description' => 'Tratado de Arras de 1435', 'correct_answer' => false]
                ]],
        ['id' => '07471afb-461f-5bcb-a788-5ff8c1fe6a56', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual tratado de 1365 reconheceu João IV como duque da Bretanha e encerrou a Guerra de Sucessão Bretã?', 'difficulty' => 5, 'weight' => 898, 'alternatives' => [
                    ['id' => '475765d1-db18-5dbe-924a-23905f930040', 'description' => 'Tratado de Arras de 1435', 'correct_answer' => false],
                    ['id' => '86fe9011-c824-59f3-bfc9-012b9d268001', 'description' => 'Tratado de Picquigny', 'correct_answer' => false],
                    ['id' => 'd35b89e9-ba6a-5186-b089-3ce83a092205', 'description' => 'Tratado de Amiens', 'correct_answer' => false],
                    ['id' => '937fc91a-4e1e-524a-9810-94a1cc6f9bdb', 'description' => 'Tratado de Cateau-Cambrésis', 'correct_answer' => false],
                    ['id' => '0326c694-3c05-5790-b64e-cc447db2305b', 'description' => 'Tratado de Guérande', 'correct_answer' => true]
                ]],
        ['id' => 'ad67295d-3397-5c42-840a-ae90e87008a4', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual acordo de abril de 1492 estabeleceu os títulos e privilégios concedidos a Cristóvão Colombo pelos Reis Católicos?', 'difficulty' => 5, 'weight' => 974, 'alternatives' => [
                    ['id' => '95d913e3-4b3b-5b9f-89af-2cefe68bab24', 'description' => 'Tratado de Zaragoza', 'correct_answer' => false],
                    ['id' => 'b18381c4-a163-5ae5-816b-25550a1000bd', 'description' => 'Tratado de Alcáçovas', 'correct_answer' => false],
                    ['id' => 'ab9e378a-9105-5de2-b1a6-8c82b1d9119c', 'description' => 'Tratado de Lisboa de 1668', 'correct_answer' => false],
                    ['id' => 'b9ca182f-8b67-5ba7-b5a9-e27b96cf6d92', 'description' => 'Capitulação de Santa Fé', 'correct_answer' => true],
                    ['id' => '59253331-4be8-5004-a3c2-b734308488d7', 'description' => 'Tratado de Madrid de 1750', 'correct_answer' => false]
                ]],
        ['id' => '2020f807-0ced-52aa-ba73-03636836996b', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual tratado de 1479 encerrou a Guerra de Sucessão Castelhana e regulou áreas de expansão atlântica entre Portugal e Castela?', 'difficulty' => 5, 'weight' => 949, 'alternatives' => [
                    ['id' => '865f0d2f-e78a-50bd-95cd-b275ca58c42b', 'description' => 'Capitulação de Santa Fé', 'correct_answer' => false],
                    ['id' => 'b78d4794-e5f1-5a58-88e1-65ef7695d925', 'description' => 'Tratado de Tordesilhas', 'correct_answer' => false],
                    ['id' => 'b87ffc34-47d9-5699-a5d8-a890472112b0', 'description' => 'Tratado de Madrid de 1750', 'correct_answer' => false],
                    ['id' => '6972b695-1179-5149-98ff-e756ff3e8820', 'description' => 'Tratado de Alcáçovas', 'correct_answer' => true],
                    ['id' => '05394018-d2e2-5428-9af0-c2c636c18ae4', 'description' => 'Tratado de Lisboa de 1668', 'correct_answer' => false]
                ]],
        ['id' => 'fd05b01b-40d6-56ec-96b1-c8601ad8f244', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual bula de 1493, emitida por Alexandre VI, concedeu à Coroa espanhola direitos sobre terras a oeste de uma linha de demarcação?', 'difficulty' => 5, 'weight' => 897, 'alternatives' => [
                    ['id' => 'b1c3351a-31e7-585d-9cf2-cc61db93a6c5', 'description' => 'Tratado de Alcáçovas', 'correct_answer' => false],
                    ['id' => 'c1f4c2c6-5bd4-5658-9aad-a58c5ddbfb66', 'description' => 'Bula Inter caetera', 'correct_answer' => true],
                    ['id' => '9c8e3d82-a8ba-5b94-b53c-af4191c484f2', 'description' => 'Tratado de Tordesilhas', 'correct_answer' => false],
                    ['id' => 'd1eb7690-c2f5-5ed7-b767-f044bd10a4cb', 'description' => 'Tratado de Madrid de 1750', 'correct_answer' => false],
                    ['id' => 'd7eaab1c-fd05-57ad-9408-1cfd8cb06faf', 'description' => 'Tratado de Methuen', 'correct_answer' => false]
                ]],
        ['id' => '1df3856d-94de-50d3-955b-d3b05c8f3095', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual tratado de 1529 definiu uma linha de demarcação no outro lado do mundo entre as áreas de influência portuguesa e espanhola?', 'difficulty' => 5, 'weight' => 957, 'alternatives' => [
                    ['id' => '045ba1ba-977c-5c31-abd5-12ca380e4756', 'description' => 'Tratado de Utrecht de 1713', 'correct_answer' => false],
                    ['id' => '9a4c1d98-be82-53c1-b1a2-66e40fbff587', 'description' => 'Tratado de El Pardo', 'correct_answer' => false],
                    ['id' => '3509e1f5-150e-5ce0-8302-b3a86900f293', 'description' => 'Tratado de Alcáçovas', 'correct_answer' => false],
                    ['id' => '207b1b98-0078-54de-8d5d-349aa31e6a3e', 'description' => 'Tratado de Zaragoza', 'correct_answer' => true],
                    ['id' => 'e7a4fd3e-6ee6-5da8-890d-b324304be28c', 'description' => 'Bula Inter caetera', 'correct_answer' => false]
                ]],
        ['id' => '94ff6368-0788-564d-b158-21662b6b05fd', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual acordo entre Portugal e Espanha procurou redefinir fronteiras sul-americanas com base no princípio uti possidetis?', 'difficulty' => 5, 'weight' => 857, 'alternatives' => [
                    ['id' => '85109ed6-5190-5296-af83-fc775b5151f8', 'description' => 'Capitulação de Santa Fé', 'correct_answer' => false],
                    ['id' => '934fabba-65aa-507f-ae32-4b3aac3f27c8', 'description' => 'Tratado de Methuen', 'correct_answer' => false],
                    ['id' => '209a2fc1-3387-576e-8982-b9f6e3320e19', 'description' => 'Tratado de Alcáçovas', 'correct_answer' => false],
                    ['id' => 'adea8df9-4ddd-5c79-abf2-c6b507715976', 'description' => 'Tratado de Madrid de 1750', 'correct_answer' => true],
                    ['id' => 'a12bc70d-6a1f-5116-a40e-05c7d568ee38', 'description' => 'Tratado de Tordesilhas', 'correct_answer' => false]
                ]],
        ['id' => '37c758f5-0b3d-5aa6-998d-08a84e8484f6', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual constituição espanhola de 1812 ficou conhecida como La Pepa e estabeleceu uma monarquia constitucional?', 'difficulty' => 5, 'weight' => 876, 'alternatives' => [
                    ['id' => '02838766-2d9c-5acd-b6ba-cdf3d946f353', 'description' => 'Constituição de Restauração Francesa', 'correct_answer' => false],
                    ['id' => '4f6dc7ce-8c1c-530f-bd4f-52431bc95500', 'description' => 'Constituição de Bayona', 'correct_answer' => false],
                    ['id' => '13c291c8-b0a7-50ca-b539-51dc9b3de124', 'description' => 'Constituição de 1793', 'correct_answer' => false],
                    ['id' => '72d9bb53-86bb-591e-81c4-53499acef09b', 'description' => 'Constituição de Cádiz', 'correct_answer' => true],
                    ['id' => 'd477e148-9eea-5cb6-997e-b06c7b2ed3fa', 'description' => 'Constituição do Ano VIII', 'correct_answer' => false]
                ]],
        ['id' => 'c25c1f26-0c09-5f53-afa1-d147a452800e', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual carta de 1808 foi promulgada sob influência napoleônica para a Espanha e reconheceu José Bonaparte como rei?', 'difficulty' => 5, 'weight' => 917, 'alternatives' => [
                    ['id' => '27ba1fb2-734e-5796-8980-ad2e763f93af', 'description' => 'Constituição do Ano I', 'correct_answer' => false],
                    ['id' => '39b9284e-77d5-5251-9fa6-6da074cecb85', 'description' => 'Constituição de Restauração Francesa', 'correct_answer' => false],
                    ['id' => '05ea5971-aa02-55d2-928f-03cb739f3c50', 'description' => 'Constituição de Bayona', 'correct_answer' => true],
                    ['id' => 'f50551fe-feb9-5d37-845e-597eacdefc61', 'description' => 'Constituição do Ano III', 'correct_answer' => false],
                    ['id' => '25012334-b24b-5184-8aa4-925b707eb2e2', 'description' => 'Constituição de Cádiz', 'correct_answer' => false]
                ]],
        ['id' => '8ced1287-0901-58e6-b358-e543535289ac', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual constituição alemã de 1919 estabeleceu a república parlamentar que antecedeu o regime nazista?', 'difficulty' => 5, 'weight' => 852, 'alternatives' => [
                    ['id' => '2a9e9a6f-6293-5aed-a5c9-8de6fa2f20b1', 'description' => 'Constituição de Restauração Francesa', 'correct_answer' => false],
                    ['id' => '6db61710-78c1-5d42-b937-412c03d4a4f5', 'description' => 'Constituição de 1791', 'correct_answer' => false],
                    ['id' => '55cb8266-7fea-59b5-bec7-c2ea8b8e6715', 'description' => 'Constituição de Weimar', 'correct_answer' => true],
                    ['id' => '0133bb4d-90e3-5616-81df-13dc6fc40bf3', 'description' => 'Constituição de Bayona', 'correct_answer' => false],
                    ['id' => 'b802d5f9-4627-5cb1-a861-4a0a84f8b6de', 'description' => 'Constituição do Ano VIII', 'correct_answer' => false]
                ]],
        ['id' => 'd76a9e5b-48d9-544e-bf19-28502d98c640', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual projeto constitucional de 1849 tentou estabelecer um Estado-nação alemão unificado sob uma monarquia constitucional?', 'difficulty' => 5, 'weight' => 944, 'alternatives' => [
                    ['id' => 'b58a11ef-31b7-5892-8d37-664a1895ba82', 'description' => 'Constituição de 1793', 'correct_answer' => false],
                    ['id' => '7114aeda-bc27-5cca-988c-4851b7585672', 'description' => 'Constituição do Ano VIII', 'correct_answer' => false],
                    ['id' => '5bd3ecbc-6d3d-58b6-a878-a624c5265e7f', 'description' => 'Constituição de Weimar', 'correct_answer' => false],
                    ['id' => '07797fe5-4099-563e-a4fd-4522c344fd32', 'description' => 'Constituição de Cádiz', 'correct_answer' => false],
                    ['id' => '67e206da-0463-5ac1-8659-0988bf8ef21d', 'description' => 'Constituição de Frankfurt', 'correct_answer' => true]
                ]],
        ['id' => '913b9cd0-d650-59b4-a305-467dc94ee53d', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual constituição francesa de 1799 estabeleceu o Consulado após o golpe de 18 de Brumário?', 'difficulty' => 5, 'weight' => 861, 'alternatives' => [
                    ['id' => '86b9a025-959a-5aaa-ac3a-cb9e426801b6', 'description' => 'Constituição de Weimar', 'correct_answer' => false],
                    ['id' => '35b0744a-dd4c-5fe8-a1bb-c165e753b8e4', 'description' => 'Constituição de 1793', 'correct_answer' => false],
                    ['id' => 'b692b8e4-d333-5ead-82b4-1176b3e50790', 'description' => 'Constituição de Bayona', 'correct_answer' => false],
                    ['id' => '7e5b461e-874f-537e-8988-315fdfe3be84', 'description' => 'Constituição do Ano VIII', 'correct_answer' => true],
                    ['id' => '62ad4121-5b60-51c6-a4c2-e76afa707e32', 'description' => 'Constituição do Ano I', 'correct_answer' => false]
                ]],
        ['id' => '60582aea-9f84-58c6-905c-20f77709583f', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual levante de 1637–1638 no Japão envolveu camponeses e cristãos contra o xogunato Tokugawa?', 'difficulty' => 5, 'weight' => 883, 'alternatives' => [
                    ['id' => 'c6af138e-701c-54e7-900d-891da6d53f0d', 'description' => 'Incidente de Honnō-ji', 'correct_answer' => false],
                    ['id' => 'd8de0d49-a989-59d9-a974-352ea4d33fc3', 'description' => 'Revolta de Shimabara', 'correct_answer' => true],
                    ['id' => 'f9bb0139-e112-5262-b358-8f1105ca323a', 'description' => 'Rebelião de Ōnin', 'correct_answer' => false],
                    ['id' => '89a1cfb0-ebe8-5339-9254-5aa8f90734b9', 'description' => 'Rebelião de Keian', 'correct_answer' => false],
                    ['id' => '9490d3e0-df77-5d2f-b324-78ddbc9d8522', 'description' => 'Rebelião de Satsuma', 'correct_answer' => false]
                ]],
        ['id' => '0b4015f2-602b-5aaa-a161-6786a46a54b5', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual revolta de 1877, liderada por Saigō Takamori, foi a última grande rebelião samurai contra o governo Meiji?', 'difficulty' => 5, 'weight' => 905, 'alternatives' => [
                    ['id' => '84ee806d-3293-56ad-b4bf-816281421807', 'description' => 'Incidente de Sakuradamon', 'correct_answer' => false],
                    ['id' => 'b8951bf2-5012-510c-8066-f50ab1502a79', 'description' => 'Rebelião de Satsuma', 'correct_answer' => true],
                    ['id' => '4604c1dd-c912-5607-ad3e-26ede8d36bae', 'description' => 'Incidente de Honnō-ji', 'correct_answer' => false],
                    ['id' => '64222ef2-10ad-5837-89ff-ece49fa42ffc', 'description' => 'Guerra Genpei', 'correct_answer' => false],
                    ['id' => 'b058b4b2-5a67-5b6b-9b6f-e7226e3d8aef', 'description' => 'Revolta de Shimabara', 'correct_answer' => false]
                ]],
        ['id' => '60dc33c1-20b0-5ead-a76d-5656305e9058', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual conflito de 1156 no Japão envolveu uma disputa sucessória imperial e facções dos clãs Taira e Minamoto?', 'difficulty' => 5, 'weight' => 834, 'alternatives' => [
                    ['id' => '31aad82f-11a5-5d54-bb78-939abb42f3f3', 'description' => 'Rebelião de Jōkyū', 'correct_answer' => false],
                    ['id' => '07540975-8512-545c-9f12-3da87825eff4', 'description' => 'Rebelião de Satsuma', 'correct_answer' => false],
                    ['id' => '19b0a258-345f-5170-8545-6ae1312374ae', 'description' => 'Incidente de Honnō-ji', 'correct_answer' => false],
                    ['id' => '0f56fd54-7f31-591e-a70c-8ec8fd91d395', 'description' => 'Rebelião de Hōgen', 'correct_answer' => true],
                    ['id' => '3ec2a6fc-6320-5f06-a543-1e1895d01af0', 'description' => 'Rebelião de Ōnin', 'correct_answer' => false]
                ]],
        ['id' => 'c53f77fc-9a64-5168-b358-626e979248c0', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual conflito de 1159–1160 no Japão sucedeu à Rebelião de Hōgen e fortaleceu a ascensão dos Taira?', 'difficulty' => 5, 'weight' => 926, 'alternatives' => [
                    ['id' => '815047af-15bb-5760-abd4-0e08cfb45f59', 'description' => 'Rebelião de Jōkyū', 'correct_answer' => false],
                    ['id' => 'f7e8ab0f-204f-56dd-bfc4-20b442be905f', 'description' => 'Incidente de Honnō-ji', 'correct_answer' => false],
                    ['id' => '83ab302a-4036-5f70-9756-e4e641c963bb', 'description' => 'Revolta de Shimabara', 'correct_answer' => false],
                    ['id' => 'c62b8428-5bc5-59d0-9dcf-afa37d4322c9', 'description' => 'Rebelião de Keian', 'correct_answer' => false],
                    ['id' => '1607fa5d-e9e5-514f-95e4-aaca76d10e64', 'description' => 'Rebelião de Heiji', 'correct_answer' => true]
                ]],
        ['id' => '7702c209-b1fe-5db2-87c2-3df6a0e4ebb0', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual conflito de 1221 opôs o ex-imperador Go-Toba ao xogunato Kamakura?', 'difficulty' => 5, 'weight' => 861, 'alternatives' => [
                    ['id' => 'ab8a1ed8-2164-5283-ac87-9bf0856a2492', 'description' => 'Rebelião de Keian', 'correct_answer' => false],
                    ['id' => 'd7efcfb4-19d3-500d-a6b3-5d95dc0cf956', 'description' => 'Rebelião de Heiji', 'correct_answer' => false],
                    ['id' => 'c5e94b20-b4df-5cc9-b922-d9d5315e1440', 'description' => 'Incidente de Honnō-ji', 'correct_answer' => false],
                    ['id' => '1e9eb3ca-bcdc-52f1-9a89-a00e454ad4fb', 'description' => 'Rebelião de Jōkyū', 'correct_answer' => true],
                    ['id' => '4860994e-b734-55f7-9c3a-44f86220a3d5', 'description' => 'Incidente de Sakuradamon', 'correct_answer' => false]
                ]],
        ['id' => '4ee64ded-f3d8-5aa0-b3b5-191edb72c865', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual batalha de 853 a.C. opôs o rei assírio Salmanaser III a uma coalizão levantina que incluía Acabe de Israel?', 'difficulty' => 5, 'weight' => 858, 'alternatives' => [
                    ['id' => 'c0a0946c-270d-5529-af65-1ef4aa689fda', 'description' => 'Batalha de Djahy', 'correct_answer' => false],
                    ['id' => '3082f1a7-833f-5289-961e-d0fdbf00b432', 'description' => 'Batalha de Megido', 'correct_answer' => false],
                    ['id' => '52eb0b03-af5b-52be-9ba5-6c679e0ebb61', 'description' => 'Batalha de Pelúsio', 'correct_answer' => false],
                    ['id' => '4d021035-f3e6-513e-a7ab-9119d8086b10', 'description' => 'Batalha de Qarqar', 'correct_answer' => true],
                    ['id' => 'f9438de0-a359-5f35-bbb0-f1e5d6cc1e9e', 'description' => 'Batalha de Ulai', 'correct_answer' => false]
                ]],
        ['id' => '70ec0721-d884-51d9-9a0a-3769ff63b73d', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual confronto de cerca de 1274 a.C. opôs Ramsés II do Egito a Muwatalli II dos hititas?', 'difficulty' => 5, 'weight' => 917, 'alternatives' => [
                    ['id' => 'dd41ade9-cb96-5689-934b-a92897f0709b', 'description' => 'Batalha de Djahy', 'correct_answer' => false],
                    ['id' => 'e43d50e7-c277-53d9-b553-be99c5c8e359', 'description' => 'Batalha de Pelúsio', 'correct_answer' => false],
                    ['id' => '2cd61aa4-aa27-5285-977b-d3120d281221', 'description' => 'Batalha de Qadesh de 1274 a.C.', 'correct_answer' => false],
                    ['id' => '22f68540-dd3d-5909-9ac2-74d7e122f5d6', 'description' => 'Batalha de Kadesh', 'correct_answer' => true],
                    ['id' => '7e193424-6654-5fd9-8082-bfa9fcc5c7b0', 'description' => 'Batalha de Megido', 'correct_answer' => false]
                ]],
        ['id' => '79276f01-f9d5-5e5e-ac36-ed8045bb6f78', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual batalha de cerca de 1457 a.C. é associada à campanha de Tutmés III contra uma coalizão cananeia?', 'difficulty' => 5, 'weight' => 992, 'alternatives' => [
                    ['id' => '203dc154-1ba4-55b5-b4fc-a28e474b7882', 'description' => 'Batalha de Pelúsio', 'correct_answer' => false],
                    ['id' => '19b4a372-b20b-5e8d-b4d1-80bb9f70f567', 'description' => 'Batalha de Megido', 'correct_answer' => true],
                    ['id' => 'c43cbf66-a17b-568d-b743-e4c622a7175d', 'description' => 'Batalha de Carquemis', 'correct_answer' => false],
                    ['id' => '72733f59-4cdf-5cba-a007-8ad51630e8d6', 'description' => 'Batalha de Qadesh de 1274 a.C.', 'correct_answer' => false],
                    ['id' => '0f029707-01d9-5684-8b5c-efaa79bfae2f', 'description' => 'Batalha de Djahy', 'correct_answer' => false]
                ]],
        ['id' => 'dbdd3d6c-cc2f-5e3a-9e72-43fd631f5040', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual batalha de 525 a.C. marcou a conquista persa do Egito por Cambises II?', 'difficulty' => 5, 'weight' => 930, 'alternatives' => [
                    ['id' => 'a4b064e9-2ff7-580b-a83b-91d73c1a99a0', 'description' => 'Batalha de Djahy', 'correct_answer' => false],
                    ['id' => 'c291984d-6954-5489-80b2-dc8a1fe1229b', 'description' => 'Batalha de Kadesh', 'correct_answer' => false],
                    ['id' => '20b046e2-3bbe-58ad-8176-4b36243ff0de', 'description' => 'Batalha de Qadesh de 1274 a.C.', 'correct_answer' => false],
                    ['id' => 'cdcf6cb8-c6aa-5ad6-8dd3-c37ce1b30b56', 'description' => 'Batalha de Pelúsio', 'correct_answer' => true],
                    ['id' => 'be579e79-d5c0-5aaa-8bf4-8f78aec291b8', 'description' => 'Batalha de Carquemis', 'correct_answer' => false]
                ]],
        ['id' => '7feb687c-0c8c-544c-9b7d-c152d7a0268c', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual batalha de 605 a.C. consolidou a vitória babilônica de Nabucodonosor II sobre forças egípcias e assírias?', 'difficulty' => 5, 'weight' => 815, 'alternatives' => [
                    ['id' => '694df39f-4ec6-55d2-acab-2e1a75d09742', 'description' => 'Batalha de Pelúsio', 'correct_answer' => false],
                    ['id' => 'c470adb8-6611-5cd6-bc94-d8a9c31594f3', 'description' => 'Batalha de Djahy', 'correct_answer' => false],
                    ['id' => '2d80a3a3-64e8-5c85-86b4-ef88f761f371', 'description' => 'Batalha de Megido', 'correct_answer' => false],
                    ['id' => '0a0300c6-5b6f-5188-a9dd-4179c5249591', 'description' => 'Batalha de Ulai', 'correct_answer' => false],
                    ['id' => '2c56fb89-54df-577f-83aa-e121ab57dbf4', 'description' => 'Batalha de Carquemis', 'correct_answer' => true]
                ]],
        ['id' => 'c432b0df-b538-5ec5-b2e2-50c5eaf8663f', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual tratado de 1422 entre a Ordem Teutônica e a união polaco-lituana estabeleceu uma fronteira duradoura na região da Samogícia?', 'difficulty' => 5, 'weight' => 807, 'alternatives' => [
                    ['id' => 'bd6b8300-6701-51f9-b3c6-fcbd59f7abde', 'description' => 'Tratado de Melno', 'correct_answer' => true],
                    ['id' => 'f1b6de09-020f-5066-b108-fe13c3376850', 'description' => 'Tratado de Königsberg', 'correct_answer' => false],
                    ['id' => 'bd49134c-cc52-57c0-99c0-e0c3e5424b50', 'description' => 'Tratado de Soldin', 'correct_answer' => false],
                    ['id' => 'cc8ef7ec-74e8-516c-ae47-7d626c75f227', 'description' => 'Tratado de Raciąż', 'correct_answer' => false],
                    ['id' => 'c215428b-9f07-5af5-a67e-efb0bcb72d6b', 'description' => 'Tratado de Thorn de 1411', 'correct_answer' => false]
                ]],
        ['id' => 'af68c960-7872-5c94-ae22-567d822f0fbc', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual tratado de 1343 encerrou a guerra entre a Polônia de Casimiro III e a Ordem Teutônica?', 'difficulty' => 5, 'weight' => 901, 'alternatives' => [
                    ['id' => 'fcdecba4-a2d9-5001-8efd-ed10c5de8855', 'description' => 'Tratado de Christburg', 'correct_answer' => false],
                    ['id' => '0155e243-fcd9-5189-a738-cf5a675c1921', 'description' => 'Primeira Paz de Thorn', 'correct_answer' => false],
                    ['id' => 'deb4abbb-5b78-5298-b540-a611b8803f77', 'description' => 'Tratado de Kalisz', 'correct_answer' => true],
                    ['id' => '9202cb22-1f42-5231-86f5-a881ea8b40a1', 'description' => 'Tratado de Soldin', 'correct_answer' => false],
                    ['id' => '3e57f47b-35d0-5a26-8fe0-fecbb61b2971', 'description' => 'Tratado de Thorn de 1411', 'correct_answer' => false]
                ]],
        ['id' => 'b0dc242a-cd16-5440-a122-38faf769eb62', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual tratado de 1411 encerrou a Guerra Polaco-Lituana-Teutônica após a batalha de Grunwald?', 'difficulty' => 5, 'weight' => 978, 'alternatives' => [
                    ['id' => '939ae182-d0c4-5f51-8c2a-74e8b9ab2aed', 'description' => 'Segunda Paz de Thorn', 'correct_answer' => false],
                    ['id' => 'bfa9e3c2-5049-5f4a-9f78-e1121667586b', 'description' => 'Tratado de Soldin', 'correct_answer' => false],
                    ['id' => 'd8eb3a05-8e51-5203-a512-082622a4b197', 'description' => 'Primeira Paz de Thorn', 'correct_answer' => true],
                    ['id' => 'a95ccf6a-be53-5f27-be45-96b93667bcb5', 'description' => 'Tratado de Königsberg', 'correct_answer' => false],
                    ['id' => '4ef106f4-9330-5a3d-a071-57e2c2f6578e', 'description' => 'Tratado de Brest', 'correct_answer' => false]
                ]],
        ['id' => '59dc869d-3fe8-5fe7-b11d-dc320f5b50d6', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual tratado de 1466 encerrou a Guerra dos Treze Anos e dividiu a Prússia entre a Polônia e a Ordem Teutônica?', 'difficulty' => 5, 'weight' => 918, 'alternatives' => [
                    ['id' => '513fc1a5-526d-5d3d-a50b-bd54f5791316', 'description' => 'Tratado de Königsberg', 'correct_answer' => false],
                    ['id' => 'c135daf7-7134-5909-af61-f8977423bec5', 'description' => 'Tratado de Kalisz', 'correct_answer' => false],
                    ['id' => '2d1b09ec-0674-5553-9bb5-1c4beed605f5', 'description' => 'Segunda Paz de Thorn', 'correct_answer' => true],
                    ['id' => '44dd5a56-fd55-5b23-bbb6-a84061c6ab99', 'description' => 'Tratado de Melno', 'correct_answer' => false],
                    ['id' => '420356a8-d180-591a-91e7-2122934452be', 'description' => 'Tratado de Thorn de 1411', 'correct_answer' => false]
                ]],
        ['id' => '4cf46852-8341-5f74-b0dd-123d134bb5e1', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual tratado de 1249 estabeleceu condições para a conversão dos prussianos pagãos após uma revolta contra a Ordem Teutônica?', 'difficulty' => 5, 'weight' => 838, 'alternatives' => [
                    ['id' => 'dbc7981d-4393-50d5-80c4-8fce0f5dc5b6', 'description' => 'Primeira Paz de Thorn', 'correct_answer' => false],
                    ['id' => 'd0a1ef70-79ae-5fdc-89bc-7536896c0768', 'description' => 'Tratado de Thorn de 1411', 'correct_answer' => false],
                    ['id' => 'fd177042-56af-5893-802a-01db98189be7', 'description' => 'Tratado de Raciąż', 'correct_answer' => false],
                    ['id' => 'c7df861b-e511-5b8f-a9b7-652aeddb8c41', 'description' => 'Tratado de Christburg', 'correct_answer' => true],
                    ['id' => '9a66de50-548d-576d-8c5c-8ef970bfa22c', 'description' => 'Tratado de Melno', 'correct_answer' => false]
                ]],
        ['id' => '8184b5f3-279a-5ae8-8c58-c341bcd9b536', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual conjunto de normas de 1164, promulgado por Henrique II, buscou limitar privilégios eclesiásticos e afirmar a jurisdição real na Inglaterra?', 'difficulty' => 5, 'weight' => 941, 'alternatives' => [
                    ['id' => '925557f1-8159-5e56-9611-7370545babe3', 'description' => 'Constituição de Clarendon', 'correct_answer' => true],
                    ['id' => 'fa23762b-3f1d-59d9-831e-405b81e1c3d5', 'description' => 'Carta da Floresta', 'correct_answer' => false],
                    ['id' => 'ccdef8f2-2a62-5dea-8666-d320d9556104', 'description' => 'Provisões de Oxford', 'correct_answer' => false],
                    ['id' => '4bc85a15-cd48-5ac9-8aee-86091e90016e', 'description' => 'Estatuto de Marlborough', 'correct_answer' => false],
                    ['id' => '1ae583ab-19a5-5f4a-82a0-e2a5d83c21a6', 'description' => 'Provisões de Westminster', 'correct_answer' => false]
                ]],
        ['id' => 'b1410c77-57be-58dc-a75a-e244b24e0a5e', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual documento de 1215 impôs limites ao poder do rei João da Inglaterra e estabeleceu garantias para determinados grupos de homens livres?', 'difficulty' => 5, 'weight' => 864, 'alternatives' => [
                    ['id' => '9798f90d-fa74-5901-a6fa-4b8f86782abe', 'description' => 'Constituição de Clarendon', 'correct_answer' => false],
                    ['id' => '9d1b3f72-ff8e-55e5-94b0-c082ebffb659', 'description' => 'Magna Carta', 'correct_answer' => true],
                    ['id' => 'cc7e73aa-2771-5ade-8816-7d219f75062c', 'description' => 'Carta da Floresta', 'correct_answer' => false],
                    ['id' => '7095995e-5505-5e08-8fb2-b096596bbd89', 'description' => 'Assize of Northampton', 'correct_answer' => false],
                    ['id' => 'a54ceeb4-3391-5cff-9860-81b945c35a9a', 'description' => 'Estatuto de Merton', 'correct_answer' => false]
                ]],
        ['id' => 'ac1e9655-77ad-5b32-b06b-4905e8649304', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual conjunto de reformas de 1258 submeteu o governo de Henrique III a um conselho de barões?', 'difficulty' => 5, 'weight' => 899, 'alternatives' => [
                    ['id' => 'e5b4b1c5-496e-507f-b8c4-e9893f5261d6', 'description' => 'Provisões de Westminster', 'correct_answer' => false],
                    ['id' => '6a1e8195-8c8d-5ee2-986f-7b8e2f9d6589', 'description' => 'Provisões de Oxford', 'correct_answer' => true],
                    ['id' => '4dac7c1d-5b18-5c71-a220-32ddd451a399', 'description' => 'Constituição de Clarendon', 'correct_answer' => false],
                    ['id' => '4f58f4fe-d42d-5641-a3cb-62392e31bbc2', 'description' => 'Estatuto de Quia Emptores', 'correct_answer' => false],
                    ['id' => 'dcbf061e-0fc0-58b1-81ae-cc3fe3b814c3', 'description' => 'Carta da Floresta', 'correct_answer' => false]
                ]],
        ['id' => 'aef4d49f-9f86-5495-b42a-ccfca6a2cf2d', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual legislação inglesa de 1235 é conhecida, entre outros pontos, por tratar de cercamentos e direitos de senhores?', 'difficulty' => 5, 'weight' => 939, 'alternatives' => [
                    ['id' => '3b580ac8-2b3f-54c8-9a43-fb108aa5332e', 'description' => 'Estatuto de Merton', 'correct_answer' => true],
                    ['id' => 'cdb151ff-98e3-5dcc-905e-8b702ff430bb', 'description' => 'Assize of Clarendon', 'correct_answer' => false],
                    ['id' => '20317905-ac85-54f8-b18e-25478a05ea37', 'description' => 'Constituição de Clarendon', 'correct_answer' => false],
                    ['id' => '83019669-a0da-5e3f-b0ea-e7373eb52008', 'description' => 'Magna Carta', 'correct_answer' => false],
                    ['id' => 'cd69e839-53fc-5dc9-a791-2e9d861fede4', 'description' => 'Assize of Northampton', 'correct_answer' => false]
                ]],
        ['id' => '8107789b-503d-59bc-84b3-ab92e7fee1f0', 'locale' => 'pt-BR', 'category' => 'ee01f045-3712-5749-bf4c-1da064b47242', 'question' => 'Qual lei inglesa de 1290 restringiu a subinfeudação e facilitou a transferência de terras?', 'difficulty' => 5, 'weight' => 802, 'alternatives' => [
                    ['id' => '6b3024fb-1a36-5cb0-85f0-6b0f20f947dd', 'description' => 'Estatuto de Quia Emptores', 'correct_answer' => true],
                    ['id' => '6225c333-19c2-556d-98bc-c0fe6c20a175', 'description' => 'Assize of Northampton', 'correct_answer' => false],
                    ['id' => '67fa9da8-b91e-568f-b014-96e2b9823d5b', 'description' => 'Estatuto de Marlborough', 'correct_answer' => false],
                    ['id' => '81421c31-babe-50e8-af8c-5e8dc5f13494', 'description' => 'Provisões de Oxford', 'correct_answer' => false],
                    ['id' => '35a267df-5efa-5e09-8d53-3f0abdd0c285', 'description' => 'Constituição de Clarendon', 'correct_answer' => false]
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
