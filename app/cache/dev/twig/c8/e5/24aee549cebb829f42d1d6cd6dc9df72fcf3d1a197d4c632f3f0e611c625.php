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
\t<div align=\"center\" style=\"color:red\"><i>";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "clave"), "first"), 'errors');
        echo "</i></div>
\t<tr>
\t\t<td>
\t\t\t";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "nombre"), 'label', array("label" => "Nombre del Usuario:"));
        echo "\t\t
\t\t</td>
\t\t<td>
\t\t\t";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "nombre"), 'widget');
        echo "
\t\t\t";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "nombre"), 'errors');
        echo "
\t\t</td>
\t</tr>
\t<tr>
\t\t<td>\t\t\t
\t\t\t";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "clave"), "first"), 'label', array("label" => "Clave del Usuario:"));
        echo "\t\t
\t\t</td>
\t\t<td>
\t\t\t";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "clave"), "first"), 'widget');
        echo "\t\t\t
\t\t</td>
\t</tr>
\t<tr>
\t\t<td>
\t\t\t";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "clave"), "second"), 'label', array("label" => "Repetir Clave:"));
        echo "\t\t
\t\t</td>
\t\t<td>
\t\t\t";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "clave"), "second"), 'widget');
        echo "\t\t\t
\t\t</td>
\t</tr>

\t
\t<tr>
\t\t<td>
\t\t\t";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "nivel"), 'label', array("label" => "Nivel del Usuario:"));
        echo "\t\t
\t\t</td>
\t\t<td>
\t\t\t";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "nivel"), 'widget');
        echo "
\t\t\t";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "nivel"), 'errors');
        echo "
\t\t</td>
\t</tr>

\t<tr>
\t\t<td>
\t\t\t";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "status"), 'label', array("label" => "Status del Usuario:"));
        echo "\t\t
\t\t</td>
\t\t<td>
\t\t\t";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "status"), 'widget');
        echo "
\t\t\t";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "status"), 'errors');
        echo "
\t\t</td>
\t</tr>
\t<tr>
\t\t<td colspan=\"2\" align=\"center\">
\t\t\t";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "Enviar"), 'label');
        echo "\t\t
\t\t\t";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "Enviar"), 'widget');
        echo "\t\t\t
\t\t</td>
\t</tr>

\t";
        // line 61
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
        return array (  141 => 61,  134 => 57,  130 => 56,  122 => 51,  118 => 50,  112 => 47,  103 => 41,  99 => 40,  93 => 37,  83 => 30,  77 => 27,  69 => 22,  63 => 19,  55 => 14,  51 => 13,  45 => 10,  39 => 7,  35 => 6,  31 => 4,  28 => 3,);
    }
}
