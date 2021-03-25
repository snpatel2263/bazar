<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @baazar_on_door/includes/header.html.twig */
class __TwigTemplate_8a4771e06a36b787a8ec0b4ea9bd5e9be41974d8f7a6de061218ef699bfd4e5e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["block" => 1, "if" => 2];
        $filters = ["escape" => 3];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['block', 'if'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $this->displayBlock('head', $context, $blocks);
    }

    public function block_head($context, array $blocks = [])
    {
        // line 2
        echo "  ";
        if ((($this->getAttribute(($context["page"] ?? null), "secondary_menu", []) || $this->getAttribute(($context["page"] ?? null), "top_header", [])) || $this->getAttribute(($context["page"] ?? null), "top_header_form", []))) {
            // line 3
            echo "    <nav";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["navbar_top_attributes"] ?? null)), "html", null, true);
            echo ">
    ";
            // line 4
            if (($context["container_navbar"] ?? null)) {
                // line 5
                echo "    <div class=\"container\">
    ";
            }
            // line 7
            echo "        ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "secondary_menu", [])), "html", null, true);
            echo "
        ";
            // line 8
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "top_header", [])), "html", null, true);
            echo "
        ";
            // line 9
            if ($this->getAttribute(($context["page"] ?? null), "top_header_form", [])) {
                // line 10
                echo "          <div class=\"form-inline navbar-form ml-auto\">
            ";
                // line 11
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "top_header_form", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 14
            echo "    ";
            if (($context["container_navbar"] ?? null)) {
                // line 15
                echo "    </div>
    ";
            }
            // line 17
            echo "    </nav>
  ";
        }
        // line 19
        echo "  <nav";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["navbar_attributes"] ?? null)), "html", null, true);
        echo ">
    ";
        // line 20
        if (($context["container_navbar"] ?? null)) {
            // line 21
            echo "    <div class=\"container\">
    ";
        }
        // line 23
        echo "      ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
        echo "
      ";
        // line 24
        if (($this->getAttribute(($context["page"] ?? null), "primary_menu", []) || $this->getAttribute(($context["page"] ?? null), "header_form", []))) {
            // line 25
            echo "        <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#CollapsingNavbar\" aria-controls=\"CollapsingNavbar\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"><span class=\"navbar-toggler-icon\"></span></button>
        <div class=\"collapse navbar-collapse justify-content-end\" id=\"CollapsingNavbar\">
          ";
            // line 27
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "primary_menu", [])), "html", null, true);
            echo "
          ";
            // line 28
            if ($this->getAttribute(($context["page"] ?? null), "header_form", [])) {
                // line 29
                echo "            <div class=\"form-inline navbar-form justify-content-end\">
              ";
                // line 30
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header_form", [])), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 33
            echo "      </div>
      ";
        }
        // line 35
        echo "      ";
        if (($context["sidebar_collapse"] ?? null)) {
            // line 36
            echo "        <button class=\"navbar-toggler navbar-toggler-left collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#CollapsingLeft\" aria-controls=\"CollapsingLeft\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"></button>
      ";
        }
        // line 38
        echo "    ";
        if (($context["container_navbar"] ?? null)) {
            // line 39
            echo "    </div>
    ";
        }
        // line 41
        echo "  </nav>
";
    }

    public function getTemplateName()
    {
        return "@baazar_on_door/includes/header.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  162 => 41,  158 => 39,  155 => 38,  151 => 36,  148 => 35,  144 => 33,  138 => 30,  135 => 29,  133 => 28,  129 => 27,  125 => 25,  123 => 24,  118 => 23,  114 => 21,  112 => 20,  107 => 19,  103 => 17,  99 => 15,  96 => 14,  90 => 11,  87 => 10,  85 => 9,  81 => 8,  76 => 7,  72 => 5,  70 => 4,  65 => 3,  62 => 2,  56 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@baazar_on_door/includes/header.html.twig", "D:\\xampp\\htdocs\\commerce-s\\drupal-8\\themes\\subtheme\\baazar_on_door\\templates\\includes\\header.html.twig");
    }
}
