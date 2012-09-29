class Campaign < ActiveRecord::Base
  attr_accessible :name, :user_id

  belongs_to :user

  validates :name, :length => { :maximum => 80, :minimum => 5 }
end
