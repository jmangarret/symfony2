<?php

/* AccesologinBundle:Default:index.html.twig */
class __TwigTemplate_13793a4899795bf05f67e3b2b4ed9eab1c7fba171f4d8319ea8159ef877ec1d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "Hello Bienvenido!
<a href=\"";
        // line 2
        echo $this->env->getExtension('routing')->getUrl("accesologin_nuevo");
        echo "\">Nuevo</a>
";
    }

    public function getTemplateName()
    {
        return "AccesologinBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }
}
