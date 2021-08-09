<?php

namespace App\Controller\Admin;

use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        //return parent::index();

        #redicionar para adicionar um CRUD Controller
        $routeBuilder = $this->get(AdminUrlGenerator::class);
        
        return $this->redirect($routeBuilder->setController(ConferenceCrudController::class)->generateUrl()); 
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Admin Livro de Visitas');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linktoDashboard('Conferência', 'fa fa-home');
        yield MenuItem::linktoDashboard('Comentários', 'fa fa-comment');
        yield MenuItem::linktoDashboard('Adminstradores', 'fa fa-user');
        //yield MenuItem::linkToCrud('The Label', 'fas fa-list','');
    }
}
