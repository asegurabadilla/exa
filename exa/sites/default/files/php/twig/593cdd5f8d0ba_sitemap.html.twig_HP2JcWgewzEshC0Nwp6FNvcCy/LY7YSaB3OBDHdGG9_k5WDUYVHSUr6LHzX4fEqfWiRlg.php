<?php

/* modules/sitemap/templates/sitemap.html.twig */
class __TwigTemplate_45f9ea763725d54c59cb863b20880ba6a25e0750d2fc0add17030b4b24c2bdd0 extends Twig_Template
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
        $tags = array("if" => 27, "for" => 34);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'for'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 25
        echo "
<div class=\"sitemap\">
  ";
        // line 27
        if (($context["message"] ?? null)) {
            // line 28
            echo "    <div class=\"sitemap-message\">
      ";
            // line 29
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["message"] ?? null), "html", null, true));
            echo "
    </div>
  ";
        }
        // line 32
        echo "
  ";
        // line 33
        if (($context["sitemap_items"] ?? null)) {
            // line 34
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["sitemap_items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 35
                echo "      ";
                if ( !twig_test_empty($this->getAttribute($context["item"], "content", array()))) {
                    // line 36
                    echo "      <div";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["item"], "attributes", array()), "addClass", array(0 => "sitemap-box"), "method"), "html", null, true));
                    echo ">
        ";
                    // line 37
                    if ($this->getAttribute($this->getAttribute($context["item"], "options", array()), "show_titles", array())) {
                        // line 38
                        echo "          <h2>";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true));
                        echo "</h2>
        ";
                    }
                    // line 40
                    echo "        <div class=\"content\">
          ";
                    // line 41
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "content", array()), "html", null, true));
                    echo "
        </div>
      </div>
      ";
                }
                // line 45
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "  ";
        }
        // line 47
        echo "
  ";
        // line 48
        if (($context["additional"] ?? null)) {
            // line 49
            echo "    <div class=\"sitemap-additional\">
      ";
            // line 50
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["additional"] ?? null), "html", null, true));
            echo "
    </div>
  ";
        }
        // line 53
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "modules/sitemap/templates/sitemap.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 53,  111 => 50,  108 => 49,  106 => 48,  103 => 47,  100 => 46,  94 => 45,  87 => 41,  84 => 40,  78 => 38,  76 => 37,  71 => 36,  68 => 35,  63 => 34,  61 => 33,  58 => 32,  52 => 29,  49 => 28,  47 => 27,  43 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/sitemap/templates/sitemap.html.twig", "C:\\wamp64\\www\\exa\\modules\\sitemap\\templates\\sitemap.html.twig");
    }
}
