<?php

/* modules/views_bootstrap/templates/views-bootstrap-carousel.html.twig */
class __TwigTemplate_21edb1b08334a2aa021230bac3fb35bf97b4d5cc9d4ca5c92ba9a382af2ba7fb extends Twig_Template
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
        $tags = array("if" => 25, "for" => 27, "set" => 28);
        $filters = array("join" => 29, "t" => 58);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'for', 'set'),
                array('join', 't'),
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

        // line 22
        echo "<div id=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["id"] ?? null), "html", null, true));
        echo "\" class=\"carousel slide\" data-ride=\"carousel\" data-interval=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["interval"] ?? null), "html", null, true));
        echo "\" data-pause=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["pause"] ?? null), "html", null, true));
        echo "\" data-wrap=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["wrap"] ?? null), "html", null, true));
        echo "\">

  ";
        // line 25
        echo "  ";
        if (($context["indicators"] ?? null)) {
            // line 26
            echo "    <ol class=\"carousel-indicators\">
      ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["key"] => $context["row"]) {
                // line 28
                echo "        ";
                $context["indicator_classes"] = array(0 => (($this->getAttribute($context["loop"], "first", array())) ? ("active") : ("")));
                // line 29
                echo "        <li class=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_join_filter(($context["indicator_classes"] ?? null), " "), "html", null, true));
                echo "\" data-target=\"#";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["id"] ?? null), "html", null, true));
                echo "\" data-slide-to=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["key"], "html", null, true));
                echo "\"></li>
      ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "    </ol>
  ";
        }
        // line 33
        echo "
  ";
        // line 35
        echo "  <div class=\"carousel-inner\" role=\"listbox\">
    ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 37
            echo "      ";
            $context["row_classes"] = array(0 => "item", 1 => (($this->getAttribute($context["loop"], "first", array())) ? ("active") : ("")));
            // line 38
            echo "      <div class=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_join_filter(($context["row_classes"] ?? null), " "), "html", null, true));
            echo "\">
        ";
            // line 39
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["row"], "image", array()), "html", null, true));
            echo "
        ";
            // line 40
            if (($this->getAttribute($context["row"], "title", array()) || $this->getAttribute($context["row"], "description", array()))) {
                // line 41
                echo "          <div class=\"carousel-caption\">
            ";
                // line 42
                if ($this->getAttribute($context["row"], "title", array())) {
                    // line 43
                    echo "              <h3>";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["row"], "title", array()), "html", null, true));
                    echo "</h3>
            ";
                }
                // line 45
                echo "            ";
                if ($this->getAttribute($context["row"], "description", array())) {
                    // line 46
                    echo "              <p>";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["row"], "description", array()), "html", null, true));
                    echo "</p>
            ";
                }
                // line 48
                echo "          </div>
        ";
            }
            // line 50
            echo "      </div>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "  </div>

  ";
        // line 55
        echo "  ";
        if (($context["navigation"] ?? null)) {
            // line 56
            echo "    <a class=\"left carousel-control\" href=\"#";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["id"] ?? null), "html", null, true));
            echo "\" role=\"button\" data-slide=\"prev\">
      <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
      <span class=\"sr-only\">";
            // line 58
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Previous")));
            echo "</span>
    </a>
    <a class=\"right carousel-control\" href=\"#";
            // line 60
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["id"] ?? null), "html", null, true));
            echo "\" role=\"button\" data-slide=\"next\">
      <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
      <span class=\"sr-only\">";
            // line 62
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Next")));
            echo "</span>
    </a>
  ";
        }
        // line 65
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "modules/views_bootstrap/templates/views-bootstrap-carousel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 65,  205 => 62,  200 => 60,  195 => 58,  189 => 56,  186 => 55,  182 => 52,  167 => 50,  163 => 48,  157 => 46,  154 => 45,  148 => 43,  146 => 42,  143 => 41,  141 => 40,  137 => 39,  132 => 38,  129 => 37,  112 => 36,  109 => 35,  106 => 33,  102 => 31,  81 => 29,  78 => 28,  61 => 27,  58 => 26,  55 => 25,  43 => 22,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/views_bootstrap/templates/views-bootstrap-carousel.html.twig", "C:\\wamp64\\www\\exa\\modules\\views_bootstrap\\templates\\views-bootstrap-carousel.html.twig");
    }
}
