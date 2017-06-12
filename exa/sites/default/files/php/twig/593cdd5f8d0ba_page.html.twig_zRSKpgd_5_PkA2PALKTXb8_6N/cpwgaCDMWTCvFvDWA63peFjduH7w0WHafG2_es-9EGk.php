<?php

/* themes/DoctoresCostaRica/templates/page.html.twig */
class __TwigTemplate_a1f18d8d52978d944137fcadcf2d213dd90dc305fe0c7dc5acf9f3ec952cc3d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'navbar' => array($this, 'block_navbar'),
            'main' => array($this, 'block_main'),
            'slider' => array($this, 'block_slider'),
            'sidebar_first' => array($this, 'block_sidebar_first'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 59, "if" => 61, "block" => 62);
        $filters = array("clean_class" => 67, "t" => 85);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if', 'block'),
                array('clean_class', 't'),
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

        // line 59
        $context["container"] = (($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", array()), "fluid_container", array())) ? ("container-fluid") : ("container"));
        // line 61
        if (($this->getAttribute(($context["page"] ?? null), "navigation", array()) || $this->getAttribute(($context["page"] ?? null), "navigation_collapsible", array()))) {
            // line 62
            echo "  ";
            $this->displayBlock('navbar', $context, $blocks);
        }
        // line 105
        echo "
";
        // line 107
        $this->displayBlock('main', $context, $blocks);
        // line 159
        echo "
";
        // line 160
        if ($this->getAttribute(($context["page"] ?? null), "footer", array())) {
            // line 161
            echo "  ";
            $this->displayBlock('footer', $context, $blocks);
        }
    }

    // line 62
    public function block_navbar($context, array $blocks = array())
    {
        // line 63
        echo "    ";
        // line 64
        $context["navbar_classes"] = array(0 => "navbar", 1 => (($this->getAttribute($this->getAttribute(        // line 66
($context["theme"] ?? null), "settings", array()), "navbar_inverse", array())) ? ("navbar-inverse") : ("navbar-default")), 2 => (($this->getAttribute($this->getAttribute(        // line 67
($context["theme"] ?? null), "settings", array()), "navbar_position", array())) ? (("navbar-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", array()), "navbar_position", array())))) : (($context["container"] ?? null))));
        // line 70
        echo "\t
\t
    <header";
        // line 72
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["navbar_attributes"] ?? null), "addClass", array(0 => ($context["navbar_classes"] ?? null)), "method"), "html", null, true));
        echo " id=\"navbar\" role=\"banner\">
\t\t<div id=\"title\">
\t\t\t<h1>Welcome to the directory of doctors from Costa Rica<h1>
\t\t</div>
\t\t
      ";
        // line 77
        if ( !$this->getAttribute(($context["navbar_attributes"] ?? null), "hasClass", array(0 => ($context["container"] ?? null)), "method")) {
            // line 78
            echo "        <div class=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true));
            echo "\">
      ";
        }
        // line 80
        echo "      <div class=\"navbar-header\">
        ";
        // line 81
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "navigation", array()), "html", null, true));
        echo "
        ";
        // line 83
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "navigation_collapsible", array())) {
            // line 84
            echo "          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\">
            <span class=\"sr-only\">";
            // line 85
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Toggle navigation")));
            echo "</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
        ";
        }
        // line 91
        echo "      </div>

      ";
        // line 94
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "navigation_collapsible", array())) {
            // line 95
            echo "        <div id=\"navbar-collapse\" class=\"navbar-collapse collapse\">
          ";
            // line 96
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "navigation_collapsible", array()), "html", null, true));
            echo "
        </div>
      ";
        }
        // line 99
        echo "      ";
        if ( !$this->getAttribute(($context["navbar_attributes"] ?? null), "hasClass", array(0 => ($context["container"] ?? null)), "method")) {
            // line 100
            echo "        </div>
      ";
        }
        // line 102
        echo "    </header>
  ";
    }

    // line 107
    public function block_main($context, array $blocks = array())
    {
        // line 108
        echo "  <div role=\"main\" class=\"main-container ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true));
        echo " js-quickedit-main-content\">
    <div class=\"row\">
\t
\t";
        // line 112
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "slider", array())) {
            // line 113
            echo "        ";
            $this->displayBlock('slider', $context, $blocks);
            // line 118
            echo "      ";
        }
        echo "\t
\t
\t
      ";
        // line 122
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", array())) {
            // line 123
            echo "        ";
            $this->displayBlock('sidebar_first', $context, $blocks);
            // line 128
            echo "      ";
        }
        // line 129
        echo "
      ";
        // line 131
        echo "      ";
        // line 132
        $context["content_classes"] = array(0 => ((($this->getAttribute(        // line 133
($context["page"] ?? null), "sidebar_first", array()) && $this->getAttribute(($context["page"] ?? null), "sidebar_second", array()))) ? ("col-sm-6") : ("")), 1 => ((($this->getAttribute(        // line 134
($context["page"] ?? null), "sidebar_first", array()) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_second", array())))) ? ("col-sm-9") : ("")), 2 => ((($this->getAttribute(        // line 135
($context["page"] ?? null), "sidebar_second", array()) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_first", array())))) ? ("col-sm-9") : ("")), 3 => (((twig_test_empty($this->getAttribute(        // line 136
($context["page"] ?? null), "sidebar_first", array())) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_second", array())))) ? ("col-sm-12") : ("")));
        // line 139
        echo "      <div class=\"col-sm-8\" >
\t\t\t";
        // line 141
        echo "\t\t\t";
        if ($this->getAttribute(($context["page"] ?? null), "header", array())) {
            // line 142
            echo "\t\t\t\t\t";
            $this->displayBlock('header', $context, $blocks);
            // line 147
            echo "\t\t\t\t";
        }
        echo "\t
\t\t\t
\t\t\t";
        // line 150
        echo "\t\t\t";
        $this->displayBlock('content', $context, $blocks);
        // line 154
        echo "\t   </div>
      
    </div>
  </div>
";
    }

    // line 113
    public function block_slider($context, array $blocks = array())
    {
        // line 114
        echo "          <div class=\"col-sm-12\" >
            ";
        // line 115
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "slider", array()), "html", null, true));
        echo "
          </div>
        ";
    }

    // line 123
    public function block_sidebar_first($context, array $blocks = array())
    {
        // line 124
        echo "          <aside class=\"col-sm-4\" >
            ";
        // line 125
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_first", array()), "html", null, true));
        echo "
          </aside>
        ";
    }

    // line 142
    public function block_header($context, array $blocks = array())
    {
        // line 143
        echo "\t\t\t\t\t\t<div  role=\"heading\" >
\t\t\t\t\t\t\t";
        // line 144
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header", array()), "html", null, true));
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t";
    }

    // line 150
    public function block_content($context, array $blocks = array())
    {
        // line 151
        echo "\t\t\t  <a id=\"main-content\"></a>
\t\t\t  ";
        // line 152
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
        echo "
\t\t\t";
    }

    // line 161
    public function block_footer($context, array $blocks = array())
    {
        // line 162
        echo "    <footer class=\"footer ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true));
        echo "\" role=\"contentinfo\">
      ";
        // line 163
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer", array()), "html", null, true));
        echo "
    </footer>
  ";
    }

    public function getTemplateName()
    {
        return "themes/DoctoresCostaRica/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  281 => 163,  276 => 162,  273 => 161,  267 => 152,  264 => 151,  261 => 150,  254 => 144,  251 => 143,  248 => 142,  241 => 125,  238 => 124,  235 => 123,  228 => 115,  225 => 114,  222 => 113,  214 => 154,  211 => 150,  205 => 147,  202 => 142,  199 => 141,  196 => 139,  194 => 136,  193 => 135,  192 => 134,  191 => 133,  190 => 132,  188 => 131,  185 => 129,  182 => 128,  179 => 123,  176 => 122,  169 => 118,  166 => 113,  163 => 112,  156 => 108,  153 => 107,  148 => 102,  144 => 100,  141 => 99,  135 => 96,  132 => 95,  129 => 94,  125 => 91,  116 => 85,  113 => 84,  110 => 83,  106 => 81,  103 => 80,  97 => 78,  95 => 77,  87 => 72,  83 => 70,  81 => 67,  80 => 66,  79 => 64,  77 => 63,  74 => 62,  68 => 161,  66 => 160,  63 => 159,  61 => 107,  58 => 105,  54 => 62,  52 => 61,  50 => 59,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/DoctoresCostaRica/templates/page.html.twig", "C:\\wamp64\\www\\exa\\themes\\DoctoresCostaRica\\templates\\page.html.twig");
    }
}
