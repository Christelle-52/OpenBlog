<?php

namespace App\Controller\Api;

use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

#[route('/api', name: 'api_')]
class FileUploadController
{
    public function __construct(
            private readonly ParameterBagInterface  $params,
            private readonly UrlGeneratorInterface $router
    )
    {}
    
    #[route('/file/upload', name: 'file_upload', defaults: ['_format=json'], methods: ['POST'])]
    public function fileUpload(Request $request): JsonResponse
    {
        $fichier = $request->files->get('upload');

        $ext = explode('.', strtolower($fichier->getClientOriginalName()));
        $extension = end($ext);

        $newName = md5(uniqid()) . '.' . $extension;

        $path = $this->params->get('uploads_directory') . 'content/';

        if(!file_exists($path)){
            mkdir($path, 0755, true);
        }

        $fichier->move($path, $newName);

        $link = $this->router->generate('app_main', [], UrlGeneratorInterface::ABSOLUTE_URL) . 'uploads/content/' . $newName;

        $response = ['url' => $link];

        return new JsonResponse($response);
    }
}