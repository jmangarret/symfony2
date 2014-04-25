<?php

/* AccesologinBundle:Default:newusuario.html.twig */
class __TwigTemplate_c8e524aee549cebb829f42d1d6cd6dc9df72fcf3d1a197d4c632f3f0e611c625 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h3 align=\"center\">Registro de Usuarios</h2>
\t<table align=\"center\" border=1 class=\"tabla\">
\t";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form_start');
        echo "\t
\t<tr>
\t\t<td>
\t\t\t";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "nombre"), 'label', array("label" => "Nombre del Usuario:"));
        echo "\t\t
\t\t</td>
\t\t<td>
\t\t\t";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "nombre"), 'widget');
        echo "
\t\t\t";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "nombre"), 'errors');
        echo "
\t\t</td>
\t</tr>
\t<tr>
\t\t<td>
\t\t\t";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "clave"), 'label', array("label" => "Clave del Usuario:"));
        echo "\t\t
\t\t</td>
\t\t<td>
\t\t\t";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "clave"), 'widget');
        echo "
\t\t\t";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "clave"), 'errors');
        echo "
\t\t</td>
\t</tr>

\t<tr>
\t\t<td>
\t\t\t";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "confirmar"), 'label', array("label" => "Confirmar Clave:"));
        echo "\t\t
\t\t</td>
\t\t<td>
\t\t\t";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "confirmar"), 'widget');
        echo "
\t\t\t";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "confirmar"), 'errors');
        echo "
\t\t</td>
\t</tr>




\t<tr>
\t\t<td>
\t\t\t";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "nivel"), 'label', array("label" => "Nivel del Usuario:"));
        echo "\t\t
\t\t</td>
\t\t<td>
\t\t\t";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "nivel"), 'widget');
        echo "
\t\t\t";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "nivel"), 'errors');
        echo "
\t\t</td>
\t</tr>

\t<tr>
\t\t<td>
\t\t\t";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "status"), 'label', array("label" => "Status del Usuario:"));
        echo "\t\t
\t\t</td>
\t\t<td>
\t\t\t";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "status"), 'widget');
        echo "
\t\t\t";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "status"), 'errors');
        echo "
\t\t</td>
\t</tr>
\t<tr>
\t\t<td colspan=\"2\" align=\"center\">
\t\t\t";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "Enviar"), 'label');
        echo "\t\t
\t\t\t";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "Enviar"), 'widget');
        echo "\t\t\t
\t\t</td>
\t</tr>

\t";
        // line 65
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form_end');
        echo "
\t</table>

";
    }

    public function getTemplateName()
    {
        return "AccesologinBundle:Default:newusuario.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 65,  141 => 61,  137 => 60,  129 => 55,  125 => 54,  119 => 51,  110 => 45,  106 => 44,  100 => 41,  88 => 32,  84 => 31,  78 => 28,  69 => 22,  65 => 21,  59 => 18,  51 => 13,  47 => 12,  41 => 9,  35 => 6,  31 => 4,  28 => 3,);
    }
}
