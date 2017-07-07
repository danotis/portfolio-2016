# Load stylus entry point
require './stylus/main.styl'

###
Module registrations that should occur as fast as possible
###

# Plugins that should be made available globally
require 'velocity'
require('fastclick').attach(document.body);

require './scripts/anchor-scroll'


# Buildin animation setup
WOW = (require 'wowjs').WOW
new WOW().init()
