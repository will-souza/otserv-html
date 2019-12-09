<?php

/* creatures/banshee.html.twig */
class __TwigTemplate_9cf2d554d4da0984dfee8ede10f048c13e31f685996054ba9123810e9b274a61 extends Twig_Template
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
        echo "<div style=\"position: relative; height: 15px; width: 100%;\">  <a style=\"float: right;\" href=\"?subtopic=creatures&race=barbarianbloodwalker\">next <img src=\"images/arrow_right.gif\" width=\"15\" height=\"11\" border=\"0\"/></a>  <a style=\"position: absolute;\" href=\"?subtopic=creatures&race=bandit\"><img src=\"images/arrow_left.gif\" width=\"15\" height=\"11\" border=\"0\"/> previous</a>  <div style=\"position: absolute; width: 80%; margin-left: 10%; margin-right: 10%; text-align: center;\"><a href=\"?subtopic=creatures\"><img src=\"images/arrow_up.gif\" width=\"11\" height=\"15\" border=\"0\"/> back</a></div></div><div style=\"position: relative; top: 25px; clear: both; \"><div style=\"height: 64px; margin-bottom: 5px;\">  <h2 style=\"float: right;\">Banshees</h2>  <img src=\"images/creatures/banshee.gif\"/></div><div style=\"margin-bottom: 35px; clear: both;\">  <p>The Banshee is an undead creature of sheer terror. Legend has it she once was a mortal woman of great beauty who has killed herself over some long forgotten grievance. Death refused her sacrifice and sent her back, cursed and distorted. Now the Banshee is a ghastly sight to behold. Her body is not ethereal like that of a ghost, but her burning gaze and the withering look of infinite pain in her face strike terror in every mortal's heart. Even worse than her fearsome looks, however, is her unworldly song. The Banshee's wail is a melody of pure death which drains her unfortunate victims of all life and hope. Few mortals who have encountered a Banshee have lived to tell the tale.</p>  <p>Banshees have 1000 hitpoints. They are immune to death, earth and fire damage and cannot be paralyzed. On the other hand, they are weak against holy damage. These creatures can neither be summoned nor convinced. In addition, they are able to sense invisible creatures.</p>  <p>Banshees yield 900 experience points. They carry candlesticks, gold coins and sometimes other items with them.</p>  </div></div>";
    }

    public function getTemplateName()
    {
        return "creatures/banshee.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "creatures/banshee.html.twig", "/var/www/html/system/templates/creatures/banshee.html.twig");
    }
}
