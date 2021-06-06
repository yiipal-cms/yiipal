# The absolute path to the root directory of the project. Both Yiipal VM and
# the config file need to be contained within this path.
ENV['YIIPALVM_PROJECT_ROOT'] = "#{__dir__}"

# The relative path from the project root to the config directory where you
# placed your config.yml file.
ENV['YIIPALVM_CONFIG_DIR'] = "box"

# The relative path from the project root to the vendor directory.
ENV['VENDOR_DIR'] = 'vendor'

# The relative path from the project root to the directory where Yiipal VM is located.
ENV['YIIPALVM_DIR'] = "#{ENV['VENDOR_DIR']}/yiipal-cms/yiipal-vm"

# Load the real Vagrantfile
load "#{ENV['YIIPALVM_PROJECT_ROOT']}/#{ENV['YIIPALVM_DIR']}/Vagrantfile"
