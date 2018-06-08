<?php
declare(strict_types=1);

namespace EHDev\GDPRManagementBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Oro\Bundle\SecurityBundle\Annotation\AclAncestor;
use Oro\Bundle\SecurityBundle\Annotation\Acl;

/**
 * @Route("/gdpr_organization")
 */
class GDPROrganizationController extends Controller
{
    /**
     * @Route("/", name="ehdev_gdpr_organization_index")
     * @AclAncestor("ehdev_gdpr_organization_view")
     * @Template()
     *
     * @return array
     */
    public function indexAction(): array
    {
        return [];
    }
}
